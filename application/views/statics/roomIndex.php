<!doctype html>
<html>
<<?= show_head();  ?>

<body>
    <div class="wrapper">
      <?= show_header(); ?>

    <div class="about-title">
       <p>OUR ROOMS</p>
       <h2>実績</h2>
    </div>
<section id="room-index">
    <div class="room_flex">

        <?php foreach($room as $key => $val){ ?>
      <div class="room_index_content">
        <div class="room-index-content-img">
            <a href="<?= base_url('statics/roomDetail/' . $val['id']); ?>">

              <img src="<?= show_room_images($room[$key]['name']); ?>">
            </a>
        </div>
        <div class="room-content-tx">
            <p class="place"><?= $val['place']; ?></p>
            <p class="date">運営開始日：<?= $val['start_date']; ?></p>
        </div>
      </div>
      <?php } ?>

  </div>


        <div class="room-index-flex">
            <!--<div class="room-content">
                <div class="room-content-img">
                    <a href="<?= base_url('statics/roomDetailasakusa'); ?>">
                      <img src="<?= base_url('static/images/DSC_0567.jpg'); ?>">
                    </a>
                </div>
                <div class="room-content-tx">
                    <p class="place">東京/浅草</p>
                    <p class="date">運営開始日：2019年10月</p>
                </div>
            </div>

            <div class="room-content">
                <div class="room-content-img">
                  <a href="<?= base_url('statics/roomDetail2'); ?>">
                    <img src="<?= base_url('static/images/booking_2019_10_29_157i.jpg'); ?>">
                  </a>
                </div>
                <div class="room-content-tx">
                    <p class="place">博多/春吉</p>
                    <p class="date">運営開始日：2019年11月</p>
                </div>
            </div>

            <div class="room-content">
                <div class="room-content-img">
                  <a href="<?= base_url('statics/roomDetail3') ?>">
                    <img src="<?= base_url('static/images/booking_2019_10_29_119c.jpg'); ?>">
                  </a>
                </div>
                <div class="room-content-tx">
                    <p class="place">博多/春吉</p>
                    <p class="date">運営開始日：2019年11月</p>
                </div>
            </div>
        </div>

        <div class="room-index-flex">
          <div class="room-content">
              <div class="room-content-img">
                <a href="<?= base_url('statics/roomDetail4') ?>">
                  <img src="<?= base_url('static/images/booking_2019_10_29_218c.jpg'); ?>">
                </a>
              </div>
              <div class="room-content-tx">
                  <p class="place">博多/春吉</p>
                  <p class="date">運営開始日：2019年11月</p>
              </div>
          </div>

          <div class="room-content">
              <div class="room-content-img">
                <a href="<?= base_url('statics/roomDetail5') ?>">
                  <img src="<?= base_url('static/images/booking_2019_10_29_26c.jpg'); ?>">
                </a>
              </div>
              <div class="room-content-tx">
                  <p class="place">博多/春吉</p>
                  <p class="date">運営開始日：2019年11月</p>
              </div>
          </div>

          <div class="room-content">
              <div class="room-content-img">
                <a href="<?= base_url('statics/roomDetail6') ?>">
                  <img src="<?= base_url('static/images/booking_2019_10_29_54c.jpg'); ?>">
                </a>
              </div>
              <div class="room-content-tx">
                  <p class="place">博多/春吉</p>
                  <p class="date">運営開始日：2019年11月</p>
              </div>
          </div>
        </div>

        <div class="room-index-flex">
          <div class="room-content">
              <div class="room-content-img">
                <a href="<?= base_url('statics/roomDetail7') ?>">
                  <img src="<?= base_url('static/images/booking_2019_10_29_90c.jpg'); ?>">
                </a>
              </div>
              <div class="room-content-tx">
                  <p class="place">博多/春吉</p>
                  <p class="date">運営開始日：2019年11月</p>
              </div>
          </div>

          <div class="room-content">
              <div class="room-content-img">
                <a href="<?= base_url('statics/roomDetail8') ?>">
                  <img src="<?= base_url('static/images/booking_2019_10_29_183c.jpg'); ?>">
                </a>
              </div>
              <div class="room-content-tx">
                  <p class="place">博多/春吉</p>
                  <p class="date">運営開始日：2019年11月</p>
              </div>
          </div>

          <div class="room-content">
              <div class="room-content-img">
                <a href="<?= base_url('statics/roomDetail9') ?>">
                  <img src="<?= base_url('static/images/_E0A0284-2c.jpg'); ?>">
                </a>
              </div>
              <div class="room-content-tx">
                  <p class="place">東京/入船</p>
                  <p class="date">運営開始日：2018年11月</p>
              </div>
          </div>
        </div>

        <div class="room-index-flex">
          <div class="room-content last">
              <div class="room-content-img">
                <a href="<?= base_url('statics/roomDetail10')?>">
                  <img src="<?= base_url('static/images/twin5_resizec.jpg'); ?>">
                </a>
              </div>
              <div class="room-content-tx">
                  <p class="place">東京/入船</p>
                  <p class="date">運営開始日：2019年11月</p>
              </div>
          </div>

          <div class="room-content" style="display: none;">
              <div class="room-content-img">
                <a href="#">
                  <img src="<?= base_url('static/images/_E0A0284-2c.jpg'); ?>">
                </a>
              </div>
              <div class="room-content-tx">
                  <p class="place">浅草</p>
                  <p class="date">運営開始日：2019年11月</p>
              </div>
          </div>

          <div class="room-content" style="display: none;">
              <div class="room-content-img">
                <a href="">
                  <img src="<?= base_url('static/images/_E0A0284-2c.jpg'); ?>">
                </a>
              </div>
              <div class="room-content-tx">
                  <p class="place">浅草</p>
                  <p class="date">運営開始日：2019年11月</p>
              </div>
          </div>-->

        </div>


        <a href="#">
          <div class="back-top">
            <img src="<?= base_url('static/images/component 1.png'); ?>">
          </div>
        </a>
    </section>

    <div class="footer-roomIndex">
      <a href="<?= base_url('statics/index') ?>">
        <div class="footer-logo">
          <img src="<?= base_url('static/images/component-02.png'); ?>">
        </div>
      </a>

      <div class="footer-menu">
          <ul>
              <li><a href="<?= base_url('statics/about'); ?>">会社情報</a></li>
              <li><a href="<?= base_url('statics/roomIndex'); ?>">実績</a></li>
              <li><a href="<?= base_url('statics/fee'); ?>">料金例</a></li>
              <li><a href="<?= base_url('statics/flow'); ?>">フロー</a></li>
              <li><a href="<?= base_url('contact/index'); ?>">お問い合わせ</a></li>
          </ul>
      </div>

      <div class="footer-copyright">
        <p>©LUPINUS 2019 ALL RIGHT RESERVED</p>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script defer src="<?= base_url('static/js/common.js'); ?>"></script>
</body>
