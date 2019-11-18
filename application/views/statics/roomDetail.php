<!doctype html>
<html>
  <?= show_head();  ?>

<body>
  <div class="wrapper">


    <?= show_header();  ?>

    <section id="detail-mv" style="background: url('<?= show_room_images($room[0]['name']); ?>') center center no-repeat; background-size: cover;">
        <div class="detail-mv-tx">
          <h3><?= $room[0]['place']; ?><br><?= $room[0]['room_name']; ?></h3>
          <p><?= $room[0]['room_addreess']; ?></p>
        </div>
    </section>

    <section id="roomDetailcontent">
        <div class="roomDetailcontent-tx">
          <p>
              <?= $room[0]['start_date'] . '、' . 'ADR'.$room[0]['room_ADR']. '、' . 'LUPINUS内装' ?>
          </p>
        </div>

        <div class="roomDetailcontent-img">
          <?php foreach($room as $key => $val){ ?>
              <?php if(!empty($val['name'])){  ?>
                <img src="<?= show_room_images($val['name']); ?>">
              <?php } ?>
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

    <?= show_footer();  ?>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="<?= base_url('static/js/common.js'); ?>"></script>
</body>
