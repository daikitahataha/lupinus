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
              <a class="span_now" href="#"><li class="menu_normal">料金例</li></a>
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
       <p>PRICE SIMULATION</p>
       <h2>料金例</h2>
    </div>

    <section id="feeContent">
        <div class="feeContent01">
          <div class="feeContent01-title">
            <p><span>CASE 01</span>&nbsp&nbsp新宿御苑</p>
          </div>

          <div class="feeContent-img">
            <img src="<?= base_url('static/images/jarek-ceborski-jn-1.png'); ?>">
          </div>

          <div class="feeContentdetail">
            <p class="room_info_title">お部屋の基本情報</p>
            <div class="detailTable-flex">
              <div class="table01">
                <table>
                    <tr>
                        <td class="table-item">間取り</td>
                        <td class="table-item-value">1Ldk</td>
                    </tr>
                    <tr>
                        <td class="table-item" style="border-top: 1px solid #F9F9F9; border-bottom: 1px solid #F9F9F9;">面積</td>
                        <td class="table-item-value">60㎡</td>
                    </tr>
                    <tr>
                        <td class="table-item">向き</td>
                        <td class="table-item-value">東南</td>
                    </tr>

                </table>
                </div>

                <div class="table01">
                <table>
                  <tr>
                      <td class="table-item">構造</td>
                      <td class="table-item-value">鉄筋コンクリート</td>
                  </tr>
                  <tr>
                      <td class="table-item">築年数</td>
                      <td class="table-item-value">10年</td>
                  </tr>
                  <tr>
                      <td class="table-item">最寄駅</td>
                      <td class="table-item-value">新宿御苑</td>
                  </tr>
                </table>
              </div>
            </div>

          <div class="feePrice">
            <p class="price-lead">このようなお部屋の企画・開発・運営費用</p>
            <div class="price-flex">
              <p class="average">平均金額</p>
              <p class="price">100~150<span>万円</span></p>
            </div>
          </div>

          <div class="result">
            <p class="result-title">運営の結果</p>
            <div class="result-flex">
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/Group 85.png'); ?>">
                </div>
                <p class="value-item">稼働率(月々)</p>
                <p class="value-numeric">77~86%</p>
              </div>
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/bars.png'); ?>">
                </div>
                <p class="value-item">利益率</p>
                <p class="value-numeric">25~33%</p>
              </div>
            </div>

            <div class="result-flex">
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/recycle.png'); ?>">
                </div>
                <p class="value-item">利回り</p>
                <p class="value-numeric">16%</p>
              </div>
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/like.png'); ?>">
                </div>
                <p class="value-item">顧客満足度</p>
                <p class="value-numeric">92%</p>
              </div>
            </div>
          </div><!-- result -->

        </div>

        <div class="feeContent01">
          <div class="feeContent01-title">
            <p><span>CASE 01</span>麻布十番</p>
          </div>

          <div class="feeContent-img">
            <img src="<?= base_url('static/images/patrick-perkins-2.png'); ?>">
          </div>

          <div class="feeContentdetail">
            <p class="room_info_title">お部屋の基本情報</p>
            <div class="detailTable-flex">
              <div class="table01">
                <table>
                    <tr>
                        <td class="table-item">間取り</td>
                        <td class="table-item-value">1Ldk</td>
                    </tr>
                    <tr>
                        <td style="border-top: 1px solid #F9F9F9; border-bottom: 1px solid #F9F9F9;" class="table-item">面積</td>
                        <td class="table-item-value">60㎡</td>
                    </tr>
                    <tr>
                        <td class="table-item">向き</td>
                        <td class="table-item-value">東南</td>
                    </tr>

                </table>
                </div>

                <div class="table01">
                <table>
                  <tr>
                      <td class="table-item">構造</td>
                      <td class="table-item-value">鉄筋コンクリート</td>
                  </tr>
                  <tr>
                      <td class="table-item">築年数</td>
                      <td class="table-item-value">10年</td>
                  </tr>
                  <tr>
                      <td class="table-item">最寄駅</td>
                      <td class="table-item-value">新宿御苑</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

          <div class="feePrice">
            <p class="price-lead">このようなお部屋の企画・開発・運営費用</p>
            <div class="price-flex">
              <p class="average">平均金額</p>
              <p class="price">100~150<span>万円</span></p>
            </div>
          </div>

          <div class="result">
            <p class="result-title">運営の結果</p>
            <div class="result-flex">
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/Group 85.png'); ?>">
                </div>
                <p class="value-item">稼働率(月々)</p>
                <p class="value-numeric">80%~88%</p>
              </div>
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/bars.png'); ?>">
                </div>
                <p class="value-item">利益率</p>
                <p class="value-numeric">22~28%</p>
              </div>
            </div>

            <div class="result-flex">
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/recycle.png'); ?>">
                </div>
                <p class="value-item">利回り</p>
                <p class="value-numeric">14%</p>
              </div>
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/like.png'); ?>">
                </div>
                <p class="value-item">顧客満足度</p>
                <p class="value-numeric">96%</p>
              </div>
            </div>
          </div><!-- result -->

          <section id="roomDetailinquiry">
            <div class="content02-inquiry forDetail">
                <p class="detail-inquiry-tx">
                  まずはお気軽にお問い合わせください
                </p>
                <a href="#"><p class="content02-inquiry-button line">お問い合わせ</p></a>
            </div>
          </section>

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
