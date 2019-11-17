<!doctype html>
<html>
<?= show_head(); ?>
<body>
  <div class="wrapper">
    <?= show_header(); ?>

    <div class="about-title">
       <p>PRICE SIMULATION</p>
       <h2>料金例</h2>
    </div>

    <section id="feeContent">
        <div class="feeContent01">
          <div class="feeContent01-title">
            <p><span>CASE 01</span>&nbsp&nbsp博多/春吉</p>
          </div>

          <div class="feeContent-img">
            <img src="<?= base_url('static/images/_29A6477.' . $room['extension'] ); ?>">
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
                        <td class="table-item">面積</td>
                        <td class="table-item-value">67.96㎡</td>
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
                      <td class="table-item-value">1ヶ月</td>
                  </tr>
                  <tr>
                      <td class="table-item">最寄駅</td>
                      <td class="table-item-value">渡辺通駅</td>
                  </tr>
                </table>
              </div>
            </div>

          <div class="feePrice">
            <p class="price-lead">このようなお部屋の企画・開発・運営費用</p>
            <div class="price-flex">
              <p class="average">平均金額</p>
              <p class="price">180~230<span>万円</span></p>
            </div>
          </div>

          <div class="result">
            <p class="result-title">運営の想定数値<br><span>※過去実績に基づく</span></p>
            <div class="result-flex">
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/Group 85.' . $room['extension']); ?>">
                </div>
                <p class="value-item">稼働率(月々)</p>
                <p class="value-numeric">85~92%</p>
              </div>
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/bars.' $room['extension']); ?>">
                </div>
                <p class="value-item">利益率</p>
                <p class="value-numeric">25~33%</p>
              </div>
            </div>

            <div class="result-flex">
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/recycle.' . $room['extension']); ?>">
                </div>
                <p class="value-item">利回り</p>
                <p class="value-numeric">16%</p>
              </div>
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/like.'. $room['extension']); ?>">
                </div>
                <p class="value-item">顧客満足度</p>
                <p class="value-numeric">96%</p>
              </div>
            </div>
          </div><!-- result -->

        </div>

        <div class="feeContent01">
          <div class="feeContent01-title">
            <p><span>CASE 02</span>&nbsp&nbsp博多/春吉</p>
          </div>

          <div class="feeContent-img">
            <img src="<?= base_url('static/images/booking_2019_10_29_124.' . $room['extension']); ?>">
          </div>

          <div class="feeContentdetail">
            <p class="room_info_title">お部屋の基本情報</p>
            <div class="detailTable-flex">
              <div class="table01">
                <table>
                    <tr>
                        <td class="table-item">間取り</td>
                        <td class="table-item-value">1R</td>
                    </tr>
                    <tr>
                        <td class="table-item">面積</td>
                        <td class="table-item-value">39.42㎡</td>
                    </tr>
                    <tr>
                        <td class="table-item">向き</td>
                        <td class="table-item-value">南西</td>
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
                      <td class="table-item-value">1ヶ月</td>
                  </tr>
                  <tr>
                      <td class="table-item">最寄駅</td>
                      <td class="table-item-value">渡辺通駅</td>
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
            <p class="result-title">運営の想定数値<br><span>※過去実績に基づく</span></p>
            <div class="result-flex">
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/Group 85.' . $room['extension']); ?>">
                </div>
                <p class="value-item">稼働率(月々)</p>
                <p class="value-numeric">80%~88%</p>
              </div>
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/bars.' . $room['extension']); ?>">
                </div>
                <p class="value-item">利益率</p>
                <p class="value-numeric">22~28%</p>
              </div>
            </div>

            <div class="result-flex">
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/recycle.' . $room['extension']); ?>">
                </div>
                <p class="value-item">利回り</p>
                <p class="value-numeric">14%</p>
              </div>
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/like.' . $room['extension']); ?>">
                </div>
                <p class="value-item">顧客満足度</p>
                <p class="value-numeric">95%</p>
              </div>
            </div>
          </div><!-- result -->
        </div>

        <div class="feeContent01">
          <div class="feeContent01-title">
            <p><span>CASE 03</span>&nbsp&nbsp博多/春吉</p>
          </div>

          <div class="feeContent-img">
            <img src="<?= base_url('static/images/_29A5944.' . $room['extension']); ?>">
          </div>

          <div class="feeContentdetail">
            <p class="room_info_title">お部屋の基本情報</p>
            <div class="detailTable-flex">
              <div class="table01">
                <table>
                    <tr>
                        <td class="table-item">間取り</td>
                        <td class="table-item-value">1R</td>
                    </tr>
                    <tr>
                        <td class="table-item">面積</td>
                        <td class="table-item-value">41.33㎡</td>
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
                      <td class="table-item-value">1ヶ月</td>
                  </tr>
                  <tr>
                      <td class="table-item">最寄駅</td>
                      <td class="table-item-value">渡辺通駅</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

          <div class="feePrice">
            <p class="price-lead">このようなお部屋の企画・開発・運営費用</p>
            <div class="price-flex">
              <p class="average">平均金額</p>
              <p class="price">120~170<span>万円</span></p>
            </div>
          </div>

          <div class="result">
            <p class="result-title">運営の想定数値<br><span>※過去実績に基づく</span></p>
            <div class="result-flex">
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/Group 85.'. $room['extension']); ?>">
                </div>
                <p class="value-item">稼働率(月々)</p>
                <p class="value-numeric">78%~85%</p>
              </div>
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/bars.' . $room['extension']); ?>">
                </div>
                <p class="value-item">利益率</p>
                <p class="value-numeric">22~28%</p>
              </div>
            </div>

            <div class="result-flex">
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/recycle.' . $room['extension']); ?>">
                </div>
                <p class="value-item">利回り</p>
                <p class="value-numeric">14%</p>
              </div>
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/like.' . $room['extension']); ?>">
                </div>
                <p class="value-item">顧客満足度</p>
                <p class="value-numeric">90%</p>
              </div>
            </div>
          </div><!-- result -->
        </div>

        <div class="feeContent01">
          <div class="feeContent01-title">
            <p><span>CASE 04</span>&nbsp&nbsp東京/浅草</p>
          </div>

          <div class="feeContent-img">
            <img src="<?= base_url('static/images/DSC_0567.' . $room['extension']); ?>">
          </div>

          <div class="feeContentdetail">
            <p class="room_info_title">お部屋の基本情報</p>
            <div class="detailTable-flex">
              <div class="table01">
                <table>
                    <tr>
                        <td class="table-item">間取り</td>
                        <td class="table-item-value">1R</td>
                    </tr>
                    <tr>
                        <td class="table-item">面積</td>
                        <td class="table-item-value">21.4㎡</td>
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
                      <td class="table-item-value">1年</td>
                  </tr>
                  <tr>
                      <td class="table-item">最寄駅</td>
                      <td class="table-item-value">浅草駅</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

          <div class="feePrice">
            <p class="price-lead">このようなお部屋の企画・開発・運営費用</p>
            <div class="price-flex">
              <p class="average">平均金額</p>
              <p class="price">120~160<span>万円</span></p>
            </div>
          </div>

          <div class="result">
            <p class="result-title">運営の想定数値<br><span>※過去実績に基づく</span></p>
            <div class="result-flex">
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/Group 85.' . $room['extension']); ?>">
                </div>
                <p class="value-item">稼働率(月々)</p>
                <p class="value-numeric">80%~87%</p>
              </div>
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/bars.' . $room['extension']); ?>">
                </div>
                <p class="value-item">利益率</p>
                <p class="value-numeric">22~28%</p>
              </div>
            </div>

            <div class="result-flex">
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/recycle.' . $room['extension']); ?>">
                </div>
                <p class="value-item">利回り</p>
                <p class="value-numeric">14%</p>
              </div>
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/like.' . $room['extension']); ?>">
                </div>
                <p class="value-item">顧客満足度</p>
                <p class="value-numeric">92%</p>
              </div>
            </div>
          </div><!-- result -->
        </div>

        <div class="feeContent01">
          <div class="feeContent01-title">
            <p><span>CASE 05</span>&nbsp&nbsp東京/入船</p>
          </div>

          <div class="feeContent-img">
            <img src="<?= base_url('static/images/twin5_resize.' . $room['extension']); ?>">
          </div>

          <div class="feeContentdetail">
            <p class="room_info_title">お部屋の基本情報</p>
            <div class="detailTable-flex">
              <div class="table01">
                <table>
                    <tr>
                        <td class="table-item">間取り</td>
                        <td class="table-item-value">1R</td>
                    </tr>
                    <tr>
                        <td class="table-item">面積</td>
                        <td class="table-item-value">28.68㎡</td>
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
                      <td class="table-item-value">2年</td>
                  </tr>
                  <tr>
                      <td class="table-item">最寄駅</td>
                      <td class="table-item-value">新富町駅</td>
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
                  <img src="<?= base_url('static/images/Group 85.' . $room['extension']); ?>">
                </div>
                <p class="value-item">稼働率(月々)</p>
                <p class="value-numeric">88%~95%</p>
              </div>
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/bars.' . $room['extension']); ?>">
                </div>
                <p class="value-item">利益率</p>
                <p class="value-numeric">22~28%</p>
              </div>
            </div>

            <div class="result-flex">
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/recycle.' . $room['extension']); ?>">
                </div>
                <p class="value-item">利回り</p>
                <p class="value-numeric">14%</p>
              </div>
              <div class="value">
                <div class="value-img">
                  <img src="<?= base_url('static/images/like.' . $room['extension']); ?>">
                </div>
                <p class="value-item">顧客満足度</p>
                <p class="value-numeric">97%</p>
              </div>
            </div>
          </div><!-- result -->
        </div>




          <section id="roomDetailinquiry">
            <div class="content02-inquiry forDetail">
                <p class="detail-inquiry-tx">
                  まずはお気軽にお問い合わせください
                </p>
                <a href="<?= base_url('contact/index'); ?>"><p class="content02-inquiry-button line">お問い合わせ</p></a>
            </div>
          </section>

        </div>
    </section>

  <?= show_footer(); ?>
  </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script defer src="<?= base_url('static/js/common.js'); ?>"></script>
</body>
