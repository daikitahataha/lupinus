<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>lupinus</title>

    <link rel="stylesheet" href="<?= base_url('static/css/base.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('static/css/media.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('static/css/reset.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('static/css/slick.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('static/css/slick-theme.css'); ?>">
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/notosansjp.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">

</head>

<body>
  <div class="wrapper">

    <section id="header">
          <a class="logo" href="<?= base_url('statics/index') ?>">
              <img src="<?= base_url('static/images/component.png'); ?>">
          </a>


        <div class="header_menu">
          <ul>
            <a href="<?= base_url('statics/about'); ?>"><li class="menu_normal">会社情報</li></a>
            <a class="span_now" href="<?= base_url('statics/roomIndex'); ?>"><li class="menu_normal">実績</li></a>
            <a href="<?= base_url('statics/fee'); ?>"><li class="menu_normal">料金例</li></a>
            <a href="<?= base_url('statics/flow'); ?>"><li class="menu_normal">フロー</li></a>
          </ul>
          <div class="menu_inquiry">
            <a href="<?= base_url('contact/index'); ?>">
              お問い合わせ
            </a>
          </div>
        </div>

        <div class="sp_header_menu">
          <div class="menu menu2" id="MenuBtn">
            <span class="menu-line menu-line2 menu-top-line"></span>
            <span class="menu-line menu-line2 menu-middle-line"></span>
            <span class="menu-line menu-line2 menu-bottom-line"></span>
          </div>
        </div>

        <div class="menu-nav">
            <p class="nav-item">
              <a href="<?= base_url('static/about'); ?>" class="nav-link">会社情報</a>
            </p>
            <p class="nav-item">
              <a href="<?= base_url('static/roomIndex'); ?>" class="nav-link">実績</a>
            </p>
            <p class="nav-item">
              <a href="<?= base_url('static/fee'); ?>" class="nav-link">料金例</a>
            </p>
            <p class="nav-item">
              <a href="<?= base_url('static/flow'); ?>" class="nav-link">フロー</a>
            </p>
            <p class="nav-item">
              <a href="<?= base_url('contact/index'); ?>" class="nav-link">お問い合わせ</a>
            </p>
        </div>
    </section>

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
            <div class="room-content">
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
          </div>

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
  <script src="<?= base_url('static/js/common.js'); ?>"></script>
</body>
