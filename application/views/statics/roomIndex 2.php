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
          <a class="logo">
              <img src="<?= base_url('static/images/component.png'); ?>">
          </a>


        <div class="header_menu">
            <ul>
                <a href="#"><li class="menu_normal">会社情報</li></a>
                <a class="span_now" href="#"><li class="menu_normal">実績</li></a>
                <a href="#"><li class="menu_normal">料金例</li></a>
                <a href="#"><li class="menu_normal">フロー</li></a>
            </ul>
            <div class="menu_inquiry">
              <a href="#">
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
        <a href="#" class="nav-link">会社情報</a>
      </p>
      <p class="nav-item">
        <a href="#" class="nav-link">実績</a>
      </p>
      <p class="nav-item">
        <a href="#" class="nav-link">料金例</a>
      </p>
      <p class="nav-item">
        <a href="#" class="nav-link">フロー</a>
      </p>
      <p class="nav-item">
        <a href="#" class="nav-link">お問い合わせ</a>
      </p>
    </div>
    </section>

    <div class="about-title">
       <p>OUR ROOMS</p>
       <h2>実績</h2>
    </div>

    <section id="room-index">
        <div class="room-index-flex">
            <div class="room-content">
                <div class="room-content-img">
                    <img src="<?= base_url('static/images/patrick-perkins-1.png'); ?>">
                </div>
                <div class="room-content-tx">
                    <p class="place">新宿御苑</p>
                    <p class="date">運営開始日：2019年11月</p>
                </div>
            </div>

            <div class="room-content">
                <div class="room-content-img">
                    <img src="<?= base_url('static/images/patrick-perkins-1.png'); ?>">
                </div>
                <div class="room-content-tx">
                    <p class="place">浅草</p>
                    <p class="date">運営開始日：2019年11月</p>
                </div>
            </div>

            <div class="room-content">
                <div class="room-content-img">
                    <img src="<?= base_url('static/images/patrick-perkins-1.png'); ?>">
                </div>
                <div class="room-content-tx">
                    <p class="place">浅草</p>
                    <p class="date">運営開始日：2019年11月</p>
                </div>
            </div>
        </div>

        <div class="room-index-flex">
          <div class="room-content">
              <div class="room-content-img">
                  <img src="<?= base_url('static/images/patrick-perkins-1.png'); ?>">
              </div>
              <div class="room-content-tx">
                  <p class="place">浅草</p>
                  <p class="date">運営開始日：2019年11月</p>
              </div>
          </div>

          <div class="room-content">
              <div class="room-content-img">
                  <img src="<?= base_url('static/images/patrick-perkins-1.png'); ?>">
              </div>
              <div class="room-content-tx">
                  <p class="place">浅草</p>
                  <p class="date">運営開始日：2019年11月</p>
              </div>
          </div>

          <div class="room-content">
              <div class="room-content-img">
                  <img src="<?= base_url('static/images/patrick-perkins-1.png'); ?>">
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
      <a href="#">
        <div class="footer-logo">
           <img src="<?= base_url('static/images/component-02.png'); ?>">
        </div>
      </a>

      <div class="footer-menu">
          <ul>
              <li><a href="#">会社情報</a></li>
              <li><a href="#">実績</a></li>
              <li><a href="#">料金例</a></li>
              <li><a href="#">フロー</a></li>
              <li><a href="#">お問い合わせ</a></li>
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
