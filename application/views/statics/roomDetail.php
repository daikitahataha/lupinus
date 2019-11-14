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

    <style>
      #detail_mv{
        background-image: url(<?= show_room_images($room[0]['name']); ?>) center center no-repeat;
        background-size: cover;
      }

      .roomDetailcontent-img img{
        margin-top: 5%;
      }
    </style>
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

    <section id="detail-mv" style="background: url('<?= show_room_images($room[0]['name']); ?>') center center no-repeat; background-size: cover;">
        <div class="detail-mv-tx">
          <h3><?= $room[0]['place']; ?><br><?= $room[0]['room_name']; ?></h3>
          <p><?= $room[0]['room_addreess']; ?></p>
        </div>
    </section>

    <section id="roomDetailcontent">
        <div class="roomDetailcontent-tx">
          <p>
              <?= $room[0]['start_date'] . '、' . $room[0]['room_ADR']. '、' . 'LUPINUS内装' ?>
          </p>
        </div>

        <div class="roomDetailcontent-img">
          <?php foreach($room as $key => $val){ ?>
            <img src="<?= show_room_images($val['name']); ?>">
          <?php } ?>
        </div>


        <div class="detailArrows">
            <a class="detail-prev" href="<?= $room[0]['back_url'] ?>">
              <img src="<?= base_url('static/images/down-arrow-5.png'); ?>">
              <p>前へ<br><span><?= $room[0]['back_url_name'] ?></span></p>
            </a>

            <a class="detail-next" href="<?= $room[0]['next_url'] ?>">
              <p>次へ<br><span><?= $room[0]['next_url_name'] ?></span></p>
              <img src="<?= base_url('static/images/down-arrow-6.png'); ?>">
            </a>
        </div>
    </section>

    <section id="roomDetailinquiry">
      <div class="content02-inquiry forDetail">
          <p class="detail-inquiry-tx">
            ホテルの企画・開発・運営に関しては、<br>
            お気軽にお問い合わせください
          </p>
          <a href="<?= base_url('contact/index'); ?>"><p class="content02-inquiry-button line">お問い合わせ</p></a>
      </div>
    </section>

    <div class="footer">
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
