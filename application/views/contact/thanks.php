<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>︎LUPINUS｜あなたの部屋を、ホテルに</title>
    <meta name="description" content="例え土地や建物を持っていなくても、お部屋さえあればホテル事業を実現できる時代になりました。ユーザーのライフスタイルへのこだわりが強まり、ニーズが多様化する現代では、ホテル選びにおいても、画一的でないオリジナル性の高い宿泊施設が求められます。7gardenは個性豊かなホテルを数多く作ることで「ユーザーが自分のライフスタイルに合わせてホテルを選べるようになる世界」を実現したいと考えています。ルピナスではお持ちのお部屋で、ユーザーのニーズに応えらえれる「一室物の宿泊体験」を実現します。">
    <meta name="keywords" content="ホテル 宿泊 体験 ホテル運営 宿泊施設">
    <meta property="og:title" content="LUPINUS｜あなたの部屋を、ホテルに"/>
    <meta property="og:site_name" content="LUPINUS｜あなたの部屋を、ホテルに" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="例え土地や建物を持っていなくても、お部屋さえあればホテル事業を実現できる時代になりました。ユーザーのライフスタイルへのこだわりが強まり、ニーズが多様化する現代では、
                  ホテル選びにおいても、画一的でないオリジナル性の高い宿泊施設が求められます。7gardenは個性豊かなホテルを数多く作ることで「ユーザーが自分のライフスタイルに合わせてホテルを選べるようになる世界」を実現したいと考えています。
                  ルピナスではお持ちのお部屋で、ユーザーのニーズに応えらえれる「一室物の宿泊体験」を実現します。" />


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
            <a href="<?= base_url('statics/roomIndex'); ?>"><li class="menu_normal">実績</li></a>
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

    <div class="about-title thanks-title">
       <p>THANK YOU!</p>
       <h2>ありがとうございました</h2>
    </div>

    <div class="thanks-tx">
      <p>お問い合わせの送信は完了しました。<br class="pc_display_none">こちらからご連絡を差し上げます。
        <br class="sp_display_none">
        しばらくお待ちください。
      </p>
    </div>

    <div class="thanks-top">
      <a href="<?= base_url('statics/index'); ?>"><p>TOPへ戻る</p></a>
    </div>

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
</body>
