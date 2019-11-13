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
              <a href="#"><li class="menu_normal">実績</li></a>
              <a href="#"><li class="menu_normal">料金例</li></a>
              <a class="span_now" href="#"><li class="menu_normal">フロー</li></a>
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
       <p>HOW TO LIST YOUR PROPERTY ON LUPINUS</p>
       <h2>掲載までのフロー</h2>
    </div>

    <section id="flow_content_pc">
        <div class="flow_content_proccess">
          <div class="flow_content_proccess_img">
              <img src="<?= base_url('static/images/email.png'); ?>">
          </div>

          <div class="flow_content_proccess_tx">
            <div class="tx_title">
              <p class="span">01</p>
              <p class="span-tx-title">お気軽にお問い合わせください</p>
            </div>
            <div class="tx_lead">
              <p>まずはお気軽にお問い合わせフォームからご相談ください。必要な項目をご入力いただき、こちらからご連絡差し上げます。</p>
            </div>
          </div>
        </div>

        <div class="flow_content_proccess">
          <div class="flow_content_proccess_img">
              <img src="<?= base_url('static/images/inspection.png'); ?>">
          </div>

          <div class="flow_content_proccess_tx">
            <div class="tx_title">
              <p class="span">02</p>
              <p class="span-tx-title">お部屋の審査を行わせていただきます</p>
            </div>
            <div class="tx_lead">
              <p>メールや電話などでご連絡差し上げた後、お部屋の審査を行わせていただきます。掲載可能な物件かどうか
              のご確認をさせていただきます。</p>
            </div>
          </div>
        </div>

        <div class="flow_content_proccess">
          <div class="flow_content_proccess_img">
              <img src="<?= base_url('static/images/content.png'); ?>">
          </div>

          <div class="flow_content_proccess_tx">
            <div class="tx_title">
              <p class="span">03</p>
              <p class="span-tx-title">お部屋の審査を行わせていただきます</p>
            </div>
            <div class="tx_lead">
              <p>審査を問題なく通過された場合、見積もりや料金にご納得いただけたら、オーナー様のお部屋の企画や掲載の準備に移ります。
              ヒアリングを行いながら、お部屋のデザイン、宿泊の価格設定などを決定していきます。</p>
            </div>
          </div>
        </div>

        <div class="flow_content_proccess">
          <div class="flow_content_proccess_img">
              <img src="<?= base_url('static/images/bars-1.png'); ?>">
          </div>

          <div class="flow_content_proccess_tx">
            <div class="tx_title">
              <p class="span">04</p>
              <p class="span-tx-title">入室・入金を待つだけ</p>
            </div>
            <div class="tx_lead">
              <p>お部屋の企画だけでなく、運営までワンストップで行わせていただきます。ご安心してお任せください。</p>
            </div>
          </div>
        </div>
    </section>

    <section id="flow_content_sp">
        <div class="flow_content_proccess">

          <div class="flow_content_proccess_tx">
            <div class="tx_title">
              <p class="span">01</p>
              <p class="span-tx-title">お気軽にお問い合わせください</p>
            </div>
            <div class="tx_lead">
              <p>まずはお気軽にお問い合わせフォームからご相談ください。必要な項目をご入力いただき、こちらからご連絡差し上げます。</p>
            </div>
          </div>

          <div class="flow_content_proccess_img">
              <img src="<?= base_url('static/images/email.png'); ?>">
          </div>
        </div>

        <div class="flow_content_proccess">

          <div class="flow_content_proccess_tx">
            <div class="tx_title">
              <p class="span">02</p>
              <p class="span-tx-title">お部屋の審査を行わせていただきます</p>
            </div>
            <div class="tx_lead">
              <p>メールや電話などでご連絡差し上げた後、お部屋の審査を行わせていただきます。掲載可能な物件かどうか
              のご確認をさせていただきます。</p>
            </div>
          </div>

          <div class="flow_content_proccess_img">
              <img src="<?= base_url('static/images/inspection.png'); ?>">
          </div>
        </div>

        <div class="flow_content_proccess">

          <div class="flow_content_proccess_tx">
            <div class="tx_title">
              <p class="span">03</p>
              <p class="span-tx-title">お部屋の審査を行わせていただきます</p>
            </div>
            <div class="tx_lead">
              <p>審査を問題なく通過された場合、見積もりや料金にご納得いただけたら、オーナー様のお部屋の企画や掲載の準備に移ります。
              ヒアリングを行いながら、お部屋のデザイン、宿泊の価格設定などを決定していきます。</p>
            </div>
          </div>

          <div class="flow_content_proccess_img">
              <img src="<?= base_url('static/images/content.png'); ?>">
          </div>
        </div>

        <div class="flow_content_proccess">

          <div class="flow_content_proccess_tx">
            <div class="tx_title">
              <p class="span">04</p>
              <p class="span-tx-title">入室・入金を待つだけ</p>
            </div>
            <div class="tx_lead">
              <p>お部屋の企画だけでなく、運営までワンストップで行わせていただきます。ご安心してお任せください。</p>
            </div>
          </div>

          <div class="flow_content_proccess_img">
              <img src="<?= base_url('static/images/bars-1.png'); ?>">
          </div>
        </div>
    </section>

    <section id="roomDetailinquiry">
      <div class="content02-inquiry forDetail">
          <p class="detail-inquiry-tx">
            まずはお気軽にお問い合わせください
          </p>
          <a href="#"><p class="content02-inquiry-button line">お問い合わせ</p></a>
      </div>
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
