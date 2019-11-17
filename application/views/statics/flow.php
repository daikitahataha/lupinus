<!doctype html>
<html>
<?= show_head(); ?>

<body>
  <div class="wrapper">
    <?= show_header(); ?>

    <div class="about-title">
       <p>HOW TO LIST YOUR PROPERTY ON LUPINUS</p>
       <h2>掲載までのフロー</h2>
    </div>

    <section id="flow_content_pc">
        <div class="flow_content_proccess">
          <div class="flow_content_proccess_img">
              <img src="<?= base_url('static/images/email.' . $room['extension']); ?>">
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
              <img src="<?= base_url('static/images/inspection.' . $room['extension']); ?>">
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
              <img src="<?= base_url('static/images/content.' . $room['extension']); ?>">
          </div>

          <div class="flow_content_proccess_tx">
            <div class="tx_title">
              <p class="span">03</p>
              <p class="span-tx-title">お部屋・ページ掲載の準備</p>
            </div>
            <div class="tx_lead">
              <p>審査を問題なく通過された場合、見積もりや料金にご納得いただけたら、オーナー様のお部屋の企画や掲載の準備に移ります。
              ヒアリングを行いながら、お部屋のデザイン、宿泊の価格設定などを決定していきます。</p>
            </div>
          </div>
        </div>

        <div class="flow_content_proccess">
          <div class="flow_content_proccess_img">
              <img src="<?= base_url('static/images/bars-1.' . $room['extension']); ?>">
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
              <img src="<?= base_url('static/images/email.' . $room['extension']); ?>">
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
              <img src="<?= base_url('static/images/inspection.' . $room['extension']); ?>">
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
              <img src="<?= base_url('static/images/content.' . $room['extension']); ?>">
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
              <img src="<?= base_url('static/images/bars-1.' . $room['extension']); ?>">
          </div>
        </div>
    </section>

    <section id="roomDetailinquiry">
      <div class="content02-inquiry forDetail">
          <p class="detail-inquiry-tx">
            まずはお気軽にお問い合わせください
          </p>
          <a href="<?= base_url('contact/index'); ?>"><p class="content02-inquiry-button line">お問い合わせ</p></a>
      </div>
    </section>
    <?= show_footer(); ?>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="<?= base_url('static/js/common.js'); ?>"></script>
</body>
