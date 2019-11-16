<!doctype html>
<html>
<?= show_head(); ?>

<body>
  <div class="wrapper">
    <?= show_header(); ?>

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

    <?= show_footer(); ?>
  </div>
</body>
