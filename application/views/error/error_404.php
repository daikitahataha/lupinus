<!doctype html>
<html>
<?= show_head();  ?>

<body>
  <div class="wrapper">
    <?= show_header();  ?>
    <div class="about-title thanks-title">
       <p>SORRY! PAGE NOT FOUND</p>
       <h2>お探しのページが見つかりません</h2>
    </div>

    <div class="thanks-tx">
      <p>お手数ですが、もう一度トップにお戻りください</p>
    </div>

    <div class="thanks-top">
      <a href="<?= base_url('statics/index'); ?>"><p>TOPへ戻る</p></a>
    </div>

    <?= show_footer(); ?>
  </div>
</body>
