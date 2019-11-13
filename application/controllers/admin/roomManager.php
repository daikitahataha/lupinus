<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('Admin_abstract.php');

class roomManager extends Admin_abstract {

    public function __construct(){
        parent::__construct();

        $s_id = $this->session->userdata('s_id');
        $permission_status = $this->session->userdata('permission_status');
        if(!empty($s_id)){
            $permission_status = 1;
        }else{
            redirect('admin/login/index');
        }
    }

    public function index()
    {
        $this->load->view('admin/roomManager/index');
    }

    public function create(){
        $this->load->view('admin/roomManager/create');
    }

    public function detail(){
        $this->load->view('admin/roomManager/detail');
    }

    public function register(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('place', '地名', 'required',
                array('required' =>'%sは必須です'));
        $this->form_validation->set_rules('start_date', '運営開始日', 'required',
                array('required' =>'%sは必須です'));
        $this->form_validation->set_rules('room_name', '部屋名', 'required',
                array('required' =>'%sは必須です'));
        $this->form_validation->set_rules('room_addreess', '住所', 'required',
                array('required' =>'%sは必須です'));
        $this->form_validation->set_rules('room_ADR', 'ADR', 'required',
                array('required' =>'%sは必須です'));

        if ($this->form_validation->run() == FALSE) {
            #$this->load->view('admin/roomManager/create');
            $this->create();
        } else {

            $data = $this->input->post();
            $this->load->model('bll/Bll_room');
            $res = $this->Bll_room->insert_data($data);
            if($res != false){
                $config['upload_path'] = './uploads/images';
                $path=$config['upload_path'];
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['overwrite'] = TRUE;
                $this->load->library('upload');

                //fieldname is the form field name
                foreach ($_FILES as $fieldname => $fileObject)
                {
                    if (!empty($fileObject['name']))
                    {
                        $config['file_name'] = "room_id_".$res."_".$fileObject['name'];
                        $this->upload->initialize($config);
                        if (!$this->upload->do_upload($fieldname))
                        {
                            $errors = $this->upload->display_errors();
                            //flashMsg($errors);
                            dd($errors);
                        }
                        else
                        {
                            $param['id'] = $res;
                            $param['image_name'] = $config['file_name'];
                            $this->Bll_room->update_imagename($param);
                        }
                    }
                }
                redirect('admin/roomManager/thanks');
            }else{
                $this ->create();
            }
        }
    }


    public function edit(){
        $this->load->view('admin/roomManager/edit');
    }

    public function update(){
        $this->load->view('admin/roomManager/update');
    }

    public function delete(){
        $this->load->view('admin/roomManager/delete');
    }

    public function thanks(){
        $this->load->view('admin/roomManager/thanks');
    }
}
