<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// smtp settings
$config['protocol']     = 'smtp';
$config['smtp_host']    = 'smtp.googlemail.com';
//SMTP user
$config['smtp_user']    = 'info@7garden.co.jp';
//SMTP password
//$config['smtp_pass']    = 'djlvgcpmxgyjopsw';
$config['smtp_pass']    = 'eyuqupnmzanaymdt';
//SMTP port
$config['smtp_port']    = '465';
//SMTP time limit
$config['smtp_timeout'] = '30';
$config['newline']      = "\r\n";
$config['crlf']         = "\r\n";
$config['mailtype']     = "html";
$config['charset']      = 'utf-8';
$config['smtp_crypto']  = 'ssl';
$config['from'] = 'info@7garden.co.jp';
$config['from_name'] = 'LUPINUS';

?>
