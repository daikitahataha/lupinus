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
       <p>CONTACT</p>
       <h2>お問い合わせ</h2>
    </div>

    <section id="contact">
      <?= form_open('contact/thanks'); ?>
        <div class="contact_item_wrap">
            <p class="contact_item"><span>※</span> お名前</p>
        </div>
        <br>
        <input type="text" name="name" class="input" placeholder="　山田　太郎">
        <br>
        <?= form_error('name', '<div class="error">', '</div>'); ?>
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">会社名</p>
        </div>
        <br>
        <input type="text" name="company" class="input">
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item"><span>※</span> メールアドレス</p>
        </div>
        <br>
        <input type="text" name="email" class="input" placeholder="　example@mail.com">
        <br>
        <?= form_error('mail', '<div class="error">', '</div>'); ?>
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item"><span>※</span> 電話番号</p>
        </div>
        <br>
        <input type="text" name="tel" placeholder="　※ 必ずご記入ください" class="input tel">
        <br>
        <?= form_error('tel', '<div class="error">', '</div>'); ?>
        <br>

        <div class="contact_item_wrap">
            <p class="contact_item">物件の許認可状況</p>
        </div>
        <br>
        <div class="radio_wrap">
          <input type="radio" name="authorization" value="1"><p class="choice">特になし</p><br>
          <input type="radio" name="authorization" value="2"><p class="choice">旅館・ホテル（旅館業法）</p><br>
          <input type="radio" name="authorization" value="3"><p class="choice">簡易宿所（旅館業法)</p><br>
          <input type="radio" name="authorization" value="4" class="other"><input type="text" name="other" placeholder="その他" class="disable input_other">
        </div>
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">物件の権利状況</p>
        </div>
        <br>
        <div class="radio_wrap">
          <input type="radio" name="right" value="1"><p class="choice">特になし</p><br>
          <input type="radio" name="right" value="2"><p class="choice">旅館・ホテル（旅館業法）</p><br>
          <input type="radio" name="right" value="3"><p class="choice">簡易宿所（旅館業法)</p><br>
          <input type="radio" name="right" value="4" class="other"><input type="text" name="other" placeholder="その他" class="disable input_other">
        </div>
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">物件住所</p>
        </div>
        <br>
        <input type="text" name="address" class="input">
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">検討中の物件戸数　<span>※</span>選択してください</p>
        </div>
        <br>
        <div class="select-wrap">
            <select name="number" placeholder="選択してください">
                <option>1戸</option>
                <option>2戸</option>
                <option>3戸</option>
                <option>4戸</option>
                <option>5戸</option>
                <option>5戸以上</option>
            </select>
        </div>
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">専用面積（ｍ2） ※複数個の場合は平均をご記載ください</p>
        </div>
        <br>
        <div class="contact_flex">
          <input type="text" name="area" class="input2"><p class="M2" style="font-family:'DINNextLTPro-Medium';">m2</p>
        </div>
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">間取り　<span>※</span>選択してください</p>
        </div>
        <br>
        <div class="select-wrap">
            <select name="layout" placeholder="1R/1K/1DK">
                <option>1R</option>
                <option>1K</option>
                <option>1DK</option>
            </select>
        </div>
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">物件の情報URLページ（AirbnbやSUUMO、建築士サイトなど）</p>
        </div>
        <br>
        <input type="text" name="URL" class="input">
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">築年</p>
        </div>
        <br>
        <div class="contact_flex">
          <input type="text" name="" class="input2" placeholder="　例： 2001年"><p class="M2">年</p>
        </div>
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item"><span>※</span> ご相談いただく内容を簡単に教えてください</p>
        </div>
        <br>
        <textarea name="consultation"></textarea>
        <br>
        <?= form_error('consultation', '<div class="error">', '</div>'); ?>
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">LUPINUSをお知りになったきっかけを教えてください</p>
        </div>
        <br>
        <div class="radio_wrap">
          <input type="radio" name="origin" value="1"><p class="choice">Yahoo!やGoogleなど検索エンジン</p><br>
          <input type="radio" name="origin" value="2"><p class="choice">SNSやブログ</p><br>
          <input type="radio" name="origin" value="3"><p class="choice">知人/他社の紹介</p><br>
          <input type="radio" name="origin" value="4"><p class="choice">他サイト、ブログ、掲示板の口コミ</p><br>
          <input type="radio" name="origin" value="5"><p class="choice">本・雑誌・新聞</p><br>
          <input type="radio" name="origin" value="6" class="other"><input type="text" name="other" placeholder="その他" class="input_other">
        </div>

        <div class="submit">
          <input type="submit" value="送信">
        </div>
      <?= form_close(); ?>
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
  <style>
    .input_other{
      pointer-events: none;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="<?= base_url('static/js/common.js'); ?>"></script>

  <script>
      $(function(){
          $(".other").click(function(){
            $('.input_other').css('pointer-events', 'auto');
          });
      });
  </script>
</body>
