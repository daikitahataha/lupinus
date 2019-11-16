<!doctype html>
<html>
<?= show_head();  ?>
<body>
  <div class="wrapper">
    <?= show_header(); ?>

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
          <input type="radio" name="authorization" value="4" class="other"><input type="text" name="other1" placeholder="その他" class="disable input_other">
        </div>
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">物件の権利状況</p>
        </div>
        <br>
        <div class="radio_wrap">
          <input type="radio" name="right" value="1"><p class="choice">所有</p><br>
          <input type="radio" name="right" value="2"><p class="choice">転貸</p><br>
          <input type="radio" name="right" value="3"><p class="choice">建築予定</p><br>
          <input type="radio" name="right" value="4"><p class="choice">購入予定</p><br>
          <input type="radio" name="right" value="5" class="other"><input type="text" name="other2" placeholder="その他" class="disable input_other">
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
          <input type="radio" name="origin" value="6" class="other"><input type="text" name="other3" placeholder="その他" class="input_other">
        </div>

        <div class="submit">
          <input type="submit" value="送信">
        </div>
      <?= form_close(); ?>
    </section>

    <?= show_footer(); ?>
  </div>
  <style>
    .input_other{
      pointer-events: none;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="<?= base_url('static/js/common.js'); ?>"></script>

  <script defer>
      $(function(){
          $(".other").click(function(){
            $('.input_other').css('pointer-events', 'auto');
          });
      });
  </script>
</body>
