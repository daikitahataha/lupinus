<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=400">
    <title>︎LUPINUS｜あなたの部屋を、ホテルに</title>
    <meta name="description" content="例え土地や建物を持っていなくても、お部屋さえあればホテル事業を実現できる時代になりました。ユーザーのライフスタイルへのこだわりが強まり、ニーズが多様化する現代では、ホテル選びにおいても、画一的でないオリジナル性の高い宿泊施設が求められます。7gardenは個性豊かなホテルを数多く作ることで「ユーザーが自分のライフスタイルに合わせてホテルを選べるようになる世界」を実現したいと考えています。ルピナスではお持ちのお部屋で、ユーザーのニーズに応えらえれる「一室物の宿泊体験」を実現します。">
    <meta name="keywords" content="ホテル 宿泊 体験 ホテル運営 宿泊施設">
    <meta property="og:title" content="LUPINUS｜あなたの部屋を、ホテルに"/>
    <meta property="og:site_name" content="LUPINUS｜あなたの部屋を、ホテルに" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="例え土地や建物を持っていなくても、お部屋さえあればホテル事業を実現できる時代になりました。ユーザーのライフスタイルへのこだわりが強まり、ニーズが多様化する現代では、
                  ホテル選びにおいても、画一的でないオリジナル性の高い宿泊施設が求められます。7gardenは個性豊かなホテルを数多く作ることで「ユーザーが自分のライフスタイルに合わせてホテルを選べるようになる世界」を実現したいと考えています。
                  ルピナスではお持ちのお部屋で、ユーザーのニーズに応えらえれる「一室物の宿泊体験」を実現します。" />

    <link rel="shortcut icon" href="https://s3.ap-northeast-1.amazonaws.com/sevengarden/image/4/SEVENGARDEN-component-02-1573785425.png">
    <link rel="stylesheet" href="<?= base_url('static/css/base.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('static/css/media.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('static/css/reset.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('static/css/slick.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('static/css/slick-theme.css'); ?>">

    <?php foreach($room as $key => $val){ ?>
        <?php if(!empty($room[$key]['name'])){?>
          <link rel="preload" href="<?= show_room_images($room[$key]['name']); ?>" as="image">
        <?php } ?>
    <?php }  ?>

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">

    <style>
      .slick-prev{
        width: 15px;
        height: 30px;
      }

      .slick-next{
        width: 15px;
        height: 30px;
      }
    </style>
</head>

<body>
    <div class="wrapper">
      <?= show_header(); ?>

      <section id="top-mv">
          <div class="mv-tx" >
              <h2>あなたの部屋を、ホテルに</h2>
  	          <h3>気軽に理想のホテルを創れる、経営できる時代へ</h3>
	        </div>
      </section>

      <div class="main">

      <section id="content01">
          <div class="content-tx">
              <div class="content-title">
 	                <h2>ひと部屋からホテルが創れる、<br>新たな時代</h2>
                  <div class="bed">
                      <img src="<?= base_url('static/images/group-5.' . $room['extension']); ?>">
                  </div>

                  <div class="content-lead-tx">
                      <p>
                        土地や一棟のビルを持たなくても、<br class="pc_display_none">部屋さえ持っていれば誰でも
	                      <br>
		                    ホテル事業をやっていける今の時代。
                        <br>
		                    <br>
		                    民泊より少しワンランクアップした<br class="pc_display_none">ホテルを残したい。
		                    <br class="sp_display_none">
		                    たくさんの人たちに<br class="pc_display_none">ステイしてもらい、喜んでもらいたい。
                        <br>
                        <br>
		                    そんな思いをお持ちの方、<br class="pc_display_none">お部屋を人気のホテルにプロデュース<br class="pc_display_none">してみませんか？
		                    <br>
                        <br>
	                      部屋づくりから集客まで、<br class="pc_display_none">ルピナスにお任せください。
	                    </p>
                  </div>
              </div>
          </div>
        </section>

        <section id="content02">
             <div class="content02-title">
                <p>WHAT WE DO</p>
                <h2>「ルピナス」ができること</h2>
             </div>
              <div class="content02-flex">
                  <div class="content02-tx">
                      <div class="flex-title">
	                        <div class="title-num">
		                          <p>01</p>
                          </div>
                          <div class="title-tx">
                              <p>CONCEPT PLANNING DESIGN</p>
                              <h4>企画デザイン</h4>
                          </div>
                      </div>
                      <div class="content-flex-lead-tx">
                          <p>
		                          現在は消費者のライフスタイルやニーズの変化が激しい時代。そんな時代にこそ、
                              ターゲットに合わせたデザインが求められます。写真と価格において比較されるホテル予約サイトにおいて、
                              ルピナスは洗練された客室デザインによって、価格競争に巻き込まれない、高単価のプライス設計を実現します。
                          </p>
                      </div>
                  </div>

                  <div class="content-flex-img">
                      <img src="<?= base_url('static/images/group-39.'  . $room['extension']); ?>">
                  </div>
              </div>

              <div class="content02-flex sp_display_none">

                  <div class="content-flex-img2">
                      <img src="<?= base_url('static/images/group-50.'  . $room['extension']); ?>">
                  </div>
                  <div class="content02-tx">
                    <div class="flex-title sp_flex_title">
	                     <div class="title-num">
		                       <p>02</p>
                       </div>
                       <div class="title-tx2">
                          <p>MARKETING</p>
                          <h4>集客</h4>
                       </div>
                    </div>
                    <div class="content-flex-lead-tx">
                          <p>
		                          ルピナスでは、各プロジェクトに集客の要となるWEBマーケティング人材をアサインし、
                              予約獲得のための戦略・設計・運用にリソースを集中させます。またホテル運営の現場と連携し、
                              相互にフィードバックを行います。それにより、集客・運営共に改善する仕組みを構築し、
                              ホテル運営における成果を最大化させます。
                          </p>
                    </div>
                  </div>
              </div>

              <div class="content02-flex pc_display_none">

                  <div class="content02-tx">
                    <div class="flex-title sp_flex_title">
                       <div class="title-num">
                           <p>02</p>
                       </div>
                       <div class="title-tx2">
                          <p>MARKETING</p>
                          <h4>集客</h4>
                       </div>
                    </div>
                    <div class="content-flex-lead-tx">
                          <p>
                              ルピナスでは、各プロジェクトに集客の要となるWEBマーケティング人材をアサインし、
                              予約獲得のための戦略・設計・運用にリソースを集中させます。またホテル運営の現場と連携し、
                              相互にフィードバックを行います。それにより、集客・運営共に改善する仕組みを構築し、
                              ホテル運営における成果を最大化させます。
                          </p>
                    </div>
                  </div>
                  <div class="content-flex-img2">
                      <img src="<?= base_url('static/images/group-50.'  . $room['extension']); ?>">
                  </div>
              </div>

              <div class="content02-flex">
                  <div class="content02-tx">
                      <div class="flex-title sp_flex_title">
	                       <div class="title-num">
		                         <p>03</p>
                          </div>
                          <div class="title-tx2">
                              <p>MANAGEMENT</p>
                              <h4>運営</h4>
                          </div>
                      </div>
                      <div class="content-flex-lead-tx">
                          <p>
		                          ルピナスでは、ホテル運営における必要業務を最適化し、運営における業務効率・ゲスト満足度を向上させます。
                              ホテル運営の中で生じる、データ収集、データ入力、サイトの更新業務はもちろん、ゲストからの宿泊前問合せ対応、
                              宿泊後のゲストフォロー等々多くの業務において、オフショアを活用し対応スピードをあげることで
                              コスト効率・宿泊満足度を最大化します。
                          </p>
                      </div>
                  </div>

                  <div class="content-flex-img2">
                      <img src="<?= base_url('static/images/group-51.'  . $room['extension']); ?>">
                  </div>
              </div>

              <div class="content02-inquiry">
                  <p class="inquiry-tx">まずはお気軽にお問い合わせください</p>
		              <a href="<?= base_url('contact/index'); ?>"><p class="content02-inquiry-button">お問い合わせ</p></a>
              </div>

        </section>

        <section id="content03">
            <div class="content02-title">
                <p>WHY US</p>
                <h2>「ルピナス」のメリット</h2>
             </div>

             <div class="content03-title css_selector-top">
 		            <img src="<?= base_url('static/images/tick-inside-circle.'  . $room['extension']); ?>">
                <p>部屋づくりから運営まで、<br class="pc_display_none">全部丸投げOK</p>
	           </div>
             <div class="content03-img">
	              <img src="<?= base_url('static/images/group-52.'  . $room['extension']); ?>">
	           </div>
             <div class="content03-tx">
  		           <p>
		                 お部屋のデザインが難しい…掲載から運営まで全部自分でするのは手間がかかりすぎる…
		                 <br>
		                 でもせっかくお部屋を持っているのでなんとかビジネスにしたい。
 		                  <br>
		                  面倒なことは全て我々に丸投げしてください。集客ができ、利益を還元できる人気のお部屋をプロデュースします。
		             </p>
	           </div>


             <div class="content03-title2 css_selector-top">
 		            <img src="<?= base_url('static/images/tick-inside-circle.'  . $room['extension']); ?>">
                <p>圧倒的な集客力=利益確保</p>
	           </div>
             <div class="content03-img">
	              <img src="<?= base_url('static/images/group-60.'  . $room['extension']); ?>">
	           </div>
             <div class="content03-tx">
  		           <p>
                  ルピナスを運営する7gardenは不動産×システム開発・運用専門の会社です。<br>
		              弊社では設立以来集客のための、自社サイト開発・既存サイト運用の実行・検証・改善を繰り返してきました。<br>
                  蓄積されたノウハウを活かして、あなたのお部屋の稼働率を高めます。
		            </p>
	           </div>


             <div class="content03-title3 css_selector-top">
 		            <img src="<?= base_url('static/images/tick-inside-circle.'  . $room['extension']); ?>">
                <p>丁寧&手厚いサポート</p>
	           </div>
             <div class="content03-img">
	              <img src="<?= base_url('static/images/group-61.'  . $room['extension']); ?>">
	           </div>
             <div class="content03-tx">
  		           <p>
                   ルピナスではお部屋の企画~運営までを全てワンストップで行います。
		               <br>
                   運営開始後も、オーナー様の要望を取り入れながら運営改善ができるルピナスだからこそ、
 		               <br>
                   安心して運営を任せることができます。
		             </p>
	           </div>


              <div class="content02-inquiry">
                  <p class="inquiry-tx">まずはお気軽にお問い合わせください</p>
		              <a href="<?= base_url('contact/index'); ?>"><p class="content02-inquiry-button">お問い合わせ</p></a>
              </div>
        </section>

        <section id="content04">
            <div class="content02-title">
                <p>CASE</p>
                <h2>実績</h2>
             </div>

             <div class="case-slider">

               <?php foreach($room as $key => $val){ ?>
                 <div class="case">
		                 <div class="case-img">
                         <?php if(!empty($room[$key]['name'])){ ?>
		                     <img src="<?= show_room_images($room[$key]['name']); ?>">
                         <?php } ?>
                     </div>
                     <div class="case-title">
                        <?php if(!empty($val['place']) && !empty($val['room_name'])){  ?>
 		                    <p><?= $val['place']; ?>　<?= $val['room_name']; ?></p>
                        <?php }  ?>
		                 </div>
  		               <div class="case-detail-top">
                         <?php if(!empty($val['start_date'])){ ?>
		                     <p>運営開始日：<?= $val['start_date']; ?></p>
                       <?php } ?>
		                     <!--<p class="benefit">利益率：30%</p>-->
		                 </div>
                     <?php if(!empty($val['id'])){ ?>
                     <a href="<?= base_url('statics/roomDetail/' . $val['id']); ?>"><p class="seeCase">このケースを見る</p></a>
                   <?php } ?>
		             </div>
               <?php } ?>
	           </div>



             <div class="seeAlltop">
               <a href="<?= base_url('statics/roomIndex'); ?>"><p>全てを見る</p></a>
	           </div>
        </section>
        <?= show_footer(); ?>

    </div>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?= base_url('static/js/slick.min.js'); ?>" defer></script>
    <script src="<?= base_url('static/js/common.js'); ?>" defer></script>
    <script defer>


    $(function(){

     $('.case-slider').slick({
       autoplay: true,
       slidesToShow: 3,
       autoplaySpeed: 5000,
       prevArrow: '<img src="<?= base_url('static/images/down-arrow.'  . $room['extension']); ?>" class="slick-prev">',
       nextArrow: '<img src="<?= base_url('static/images/down-arrow-1.'. $room['extension']); ?>" class="slick-next">',

       responsive: [{
      breakpoint: 900,  //ブレイクポイントを指定
      settings: {
        slidesToShow: 1,
      }
    }]
     });

   });

    </script>
</body>
</html>
