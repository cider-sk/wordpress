<?php get_header("sp") ?>
<?php
$blogusers = get_users('blog_id='.$post->ID);
$user_id = $blogusers[0]->ID;
?>
    <div class="container">

        <div class="starter-template main">
            <header class="pageHeader">
    <h1 class="pageTtl">
      <span><?php echo get_post_meta($post->ID, "maker", true); ?></span>
      <?php echo get_post_meta($post->ID, "model", true); ?>    </h1>
    <p class="read"><?php echo get_post_meta($post->ID, "meta-desc", true); ?></p>
    </header>
            <div class="pageBody">
      <figure class="bknDtlMainPhoto" style="display: block; overflow: hidden;" id="bknDtlMainPhotoId">
        <div class="flickElement"><!-- ← フリックエレメント -->
          <div class="container" style="left: 45px; position: relative;"><!-- ← フリックさせる要素 -->
            <div class="containerInner" id="containerInner" style="width: 7705px; height: 215px; position: relative; left: 0px;">
            <div class="item <?php if(get_post_meta($post->ID, "is_goo", true)){ echo "goo_img"; } ?>" style="float: left;">
                                                  <img id="img1" src="<?php 
 $imgs = get_post_meta($post->ID, "imgList", true); 
$images = explode(",", $imgs);
echo $images[0];

?>" alt="<?php the_title(); ?>" width="275" height="200" class="bknImg">
              </div>
                        </div><!-- /.containerInner -->
          </div><!-- /.container -->
        </div><!-- /.flickElement -->
              </figure>

      <div class="bknDtl__priceTbl">
        <p><a class="helpBtn" href="/help/CS/help_smph.html?help=zei&amp;header=1" rel="external">本体価格<span>（税込）</span></a>
          <span class="bknDtl__priceHontai"><b><?php echo get_post_meta($post->ID, "value", true); ?></b>万円</span>
        </p>
        <p>
          <a class="helpBtn" href="/help/CS/help_smph.html?help=sougaku&amp;header=1" rel="external">支払総額<span>（税込）</span></a>
          <span class="bknDtl__priceSum"><b><?php echo get_post_meta($post->ID, "sum-value", true); ?></b>万円</span>
        </p><p>
      </p></div>

     
                  <div class="actionArea">
        <p class="bknDtl__shopInfo">
            <span class="bknDtl__shopName"><?php 
        $user_info = get_userdata($user_id);
        echo $user_info->first_name;
 ?></span>
            <span class="bknDtl__shopAddress"><?php 
$blogusers = get_users('blog_id='.$post->ID);
$user_id = $blogusers[0]->ID;

echo $address = get_user_meta($user_id, "address", true); ?></span>
        </p>
      </div>
      
      <div class="actionArea">
                        <button class="btn_submit btnL" onclick="location.href='#contact_form'">
          在庫確認・見積依頼<small>(無料)</small>
        </button>
      </div><!-- /.actionArea -->

      <!--  基本情報 -->
      <section class="" id="bknDtlTabBox1">
        <h2 class="hdd2nd">基本情報</h2>
        <p class="uee"><a href="javascript:void(0);" onclick="window.scroll(0,0);return false;">▲上へ戻る</a></p>
        <table class="bknDtl__table tbl_h" id="viewTbl01">
          <tbody>
            <tr>
              <th>年式<br>(初度登録年)</th>
              <td colspan="3"><b class="emphasize"><?php echo get_post_meta($post->ID, "year", true); ?></b>年</td>
            </tr>
            <tr>
              <th><a href="/help/CS/help_smph.html?help=soukou&amp;header=1" class="helpBtn" rel="external">走行距離</a></th>
              <td colspan="3"><b class="emphasize"><?php echo get_post_meta($post->ID, "distance", true); ?></b>km</td>
            </tr>
            <tr>
              <th><a href="/help/CS/help_smph.html?help=houtei&amp;header=1" class="helpBtn" rel="external">法定整備</a></th>
              <td colspan="3">
                <?php echo get_post_meta($post->ID, "raw", true); ?>
                              </td>
            </tr>
            <tr>
              <th><a href="/help/CS/help_smph.html?help=hosho&amp;header=1" class="helpBtn" rel="external">保証</a></th>
                <td colspan="3">
                 <?php echo get_post_meta($post->ID, "warranty", true); ?>
                </td>
            </tr>
            <tr>
              <th>ボディタイプ</th>
              <td colspan="3"><?php echo get_post_meta($post->ID, "body-type", true); ?></td>
            </tr>
            <tr>
              <th>ボディ色</th>
              <td colspan="3"><?php echo get_post_meta($post->ID, "color", true); ?></td>
            </tr>
            <tr>
              <th><a href="/help/CS/help_smph.html?help=haiki&amp;header=1" class="helpBtn" rel="external">排気量</a></th>
              <td colspan="3"><b><?php echo get_post_meta($post->ID, "displacement", true); ?></b></td>
            </tr>
            <tr>
              <th>ミッション</th>
              <td colspan="3"><?php echo get_post_meta($post->ID, "mission", true); ?></td>
            </tr>
            <tr>
              <th>スライドドア</th>
              <td><?php echo get_post_meta($post->ID, "slide-door", true); ?></td>
              <th>ドア数</th>
              <td><b><?php echo get_post_meta($post->ID, "door", true); ?></b></td>
            </tr>
            <tr>
              <th>乗車定員</th>
              <td><b><?php echo get_post_meta($post->ID, "member-limit", true); ?></b>名</td>
              <th>ハンドル</th>
              <td><?php echo get_post_meta($post->ID, "handle", true); ?></td>
            </tr>
            <tr>
              <th>エンジン</th>
              <td><?php echo get_post_meta($post->ID, "engin", true); ?></td>
              <th>過給器設定</th>
              <td><?php echo get_post_meta($post->ID, "supercharger", true); ?></td>
            </tr>
            <tr>
              <th>駆動方式</th>
              <td><b><?php echo get_post_meta($post->ID, "drive-system", true); ?></b></td>
              <th>福祉車両</th>
              <td><?php echo get_post_meta($post->ID, "hukushi", true); ?></td>
            </tr>
            <tr>
              <th>正規輸入車</th>
              <td>－</td>
              <th><車台番号末尾</th>
              <td><?php echo get_post_meta($post->ID, "car-number", true); ?></td>
            </tr>
            <tr>
              <th>キャンピング<br>カー</th>
              <td><?php echo get_post_meta($post->ID, "camp-car", true); ?></td>
              <th>エコカー減税<br>対象車</th>
              <td><?php echo get_post_meta($post->ID, "echo-car", true); ?></td>
            </tr>
          </tbody>
        </table>
      </section>
<?php /*
      <!-- 装備 -->
      <section class="bknDtlTabBox disnon" id="bknDtlTabBox3">
        <h2 class="hdd2nd">装備</h2>
        <p class="uee"><a href="javascript:void(0);" onclick="window.scroll(0,0);return false;">▲上へ戻る</a></p>
        <ul class="bknDtl__option">
          <li class="col1"><span>パワステ</span></li>
          <li class="col1"><span>パワーウインドウ</span></li>
          <li class="col1-last"><span>エアコン・クーラー</span></li>
          <li class="col1"><span class="unsupported">Wエアコン</span></li>
          <li class="col1">
            <span>キーレス</span>
          </li>
          <li class="col1-last">
            <span class="unsupported">スマートキー</span>
          </li>
          <li class="col2">
            <span class="unsupported">カーナビ：－</span>
          </li>
          <li class="col1-last">
            <span class="unsupported">
            <a href="/help/CS/help_smph.html?help=tv&amp;header=1" class="helpBtn" crel="external">TV：－</a>
          </span>
          </li>
          <li class="col3">
            <span class="unsupported">映像：－/－</span>
          </li>
          <li class="col3">
            <span class="unsupported">オーディオ：－/－/－</span>
          </li>
          <li class="col3">
                       <span class="unsupported">ミュージックプレイヤー</span>
                     </li>
          <li class="col2"><span class="unsupported">後席モニター</span></li>
          <li class="col1-last"><span>ETC</span></li>
          <li class="col1"><span class="unsupported">ベンチシート</span></li>
          <li class="col1"><span class="unsupported">3列シート</span></li>
          <li class="col1-last"><span class="unsupported">ウォークスルー</span></li>
          <li class="col1"><span class="unsupported">電動シート</span></li>
          <li class="col1"><span class="unsupported">シートエアコン</span></li>
          <li class="col1-last"><span class="unsupported">シートヒーター</span></li>
          <li class="col1"><span class="unsupported">フルフラットシート</span></li>
          <li class="col1"><span class="unsupported">オットマン</span></li>
          <li class="col1-last"><span class="unsupported">本革シート</span></li>
          <li class="col1"><span class="unsupported">アイドリングストップ</span></li>
          <li class="col1"><span class="unsupported">障害物センサー</span></li>
          <li class="col1-last"><span class="unsupported">クルーズコントロール</span></li>
          <li class="col1">
            <span>
              <a href="/help/CS/help_smph.html?help=abs&amp;header=1" class="helpBtn" crel="external">ABS</a>
            </span>
          </li>
          <li class="col1">
            <span class="unsupported">
              <a href="/help/CS/help_smph.html?help=esc&amp;header=1" class="helpBtn" crel="external">横滑り防止装置</a>
            </span>
          </li>
          <li class="col1-last"><span class="unsupported">盗難防止装置</span></li>
          <li class="col-half"><span class="unsupported">衝突被害軽減ブレーキ</span></li>
          <li class="col-half"><span class="unsupported">パーキングアシスト</span></li>
          <li class="col3">
            <span>エアバッグ：運転席/助手席/－/－</span>
          </li>
          <li class="col3">
            <span class="unsupported">
              <a href="/help/CS/help_smph.html?help=dlamp&amp;header=1" class="helpBtn" crel="external">ヘッドライト：－</a>
            </span>
          </li>
          <li class="col2">
            <span class="unsupported">カメラ：－/－/－</span>
          </li>
          <li class="col1-last"><span class="unsupported">全周囲カメラ</span></li>
          <li class="col1"><span class="unsupported">電動リアゲート</span></li>
          <li class="col2-last">
            <span class="unsupported">
              <a href="/help/CS/help_smph.html?help=sgroof&amp;header=1" class="helpBtn" crel="external">サンルーフ・ガラスルーフ</a>
            </span>
          </li>
          <li class="col1"><span class="unsupported">フルエアロ</span></li>
          <li class="col1"><span class="unsupported">アルミホイール</span></li>
          <li class="col1-last"><span class="unsupported">ローダウン</span></li>
          <li class="col1"><span class="unsupported">リフトアップ</span></li>
          <li class="col1"><span class="unsupported">寒冷地仕様</span></li>
        </ul>
        <p class="bknDtl__comment">ETC キーレス 社外14インチAW 保証書 取扱説明書当社ホームページに３０枚写真掲載中！→http://www.e-g-a.co.jpにアクセス！ </p>
      </section>
*/ ?>      
      <section class="bknDtlTabBox disnon" id="bknDtlTabBox2">
        <h2 class="hdd2nd">状態</h2>
        <p class="uee"><a href="javascript:void(0);" data-role="none" onclick="window.scroll(0,0);return false;">▲上へ戻る</a></p>
        <table class="tbl_h" id="viewTbl02">
          <tbody>
            <tr>
              <th>車検</th>
              <td><?php echo get_post_meta($post->ID, "inspection", true); ?></td>
              <th>修復歴</th>
              <td><?php echo get_post_meta($post->ID, "fix-history", true); ?></td>
            </tr>
            <tr>
              <th>新車物件</th>
              <td><?php echo get_post_meta($post->ID, "new-car", true); ?></td>
              <th>定期点検<br>記録簿</th>
              <td><?php echo get_post_meta($post->ID, "teiki-history", true); ?></td>
            </tr>
            <tr>
              <th>登録（届出）済<br>未使用車</th>
              <td><?php echo get_post_meta($post->ID, "regist-offer", true); ?></td>
              <th>禁煙車</th>
              <td><?php echo get_post_meta($post->ID, "non-smoking", true); ?></td>
            </tr>
            <tr>
              <th>ワンオーナー</th>
              <td><?php echo get_post_meta($post->ID, "one-owner", true); ?></td>
              <th>リサイクル料</th>
              <td><?php echo get_post_meta($post->ID, "recycle-fee", true); ?></td>
            </tr>
          </tbody>
        </table>
      </section>

<?php /*   
          <section>
        <h2 class="hdd2nd">新車時の基本スペック</h2>
        <p class="uee"><a href="javascript:void(0);" data-role="none" onclick="window.scroll(0,0);return false;">▲上へ戻る</a></p>
        <table class="tbl_h" id="viewTbl04">
          <tbody>
            <tr>
              <th colspan="2">発売年月</th>
              <td colspan="2">07(H19)/10</td>
            </tr>
            <tr>
              <th colspan="2">車体寸法(全長x全幅x全高)</th>
              <td colspan="2">3900x1695x1525(mm)</td>
            </tr>
            <tr>
              <th colspan="2">室内寸法(全長x全幅x全高)</th>
              <td colspan="2">1825x1415x1290(mm)</td>
            </tr>
            <tr>
              <th colspan="2">車両重量(AT/MT/CVT)</th>
                <td colspan="2">
                                    －/－/1030(kg)
                                  </td>
            </tr>
            <tr>
              <th colspan="2">シート列数</th>
              <td colspan="2">2列</td>
            </tr>
             <tr>
              <th colspan="2">JC08モード燃費</th>
              <td colspan="2">－</td>
            </tr>
            <tr>
              <th colspan="2">10・15モード燃費</th>
              <td colspan="2">21.5km/L</td>
            </tr>
            <tr>
              <th colspan="2">ホイールベース</th>
              <td colspan="2">2500mm</td>
            </tr>
            <tr>
              <th colspan="2">使用燃料</th>
              <td colspan="2">レギュラー</td>
            </tr>
            <tr>
              <th colspan="2">駆動方式</th>
              <td colspan="2">前輪駆動(FF)</td>
            </tr>
            <tr>
              <th colspan="2">最小回転半径</th>
              <td colspan="2">4.7m</td>
            </tr>
          </tbody>
        </table>  
      </section>
   */ ?>
      <section class="shopInfoBlock">
        <h2 class="hdd2nd">中古車販売店情報</h2>
        <p class="uee"><a href="javascript:void(0);" data-role="none" onclick="window.scroll(0,0);return false;">▲上へ戻る</a></p>
        <p class="name_shop">
                  <a href="<?php echo get_post_meta($post->ID, "shop_url", true); ?>" class="gotoShopNav" rel="external"><?php 
        $user_info = get_userdata($user_id);
        echo $user_info->first_name;
 ?></a>
                </p>

        <table class="tbl_h shopInfoTbl_mini">
          <tbody>
                        <tr>
              <th>営業時間</th>
              <td></td><?php get_user_meta($user_id, "time", true); ?></td>
            </tr>
            <?php /*<tr>
              <th>定休日</th>
              <td>年中無休</td>
            </tr>
			*/
			?>
                                    <tr>
              <th>住所</th>
              <td>
                <a class="shopMapBtn" href="javascript:void(0);" onclick="location.href='<?php 
echo get_post_meta($post->ID, "shop_url", true);
?>?page=map'; return false;" rel="external">
                <?php echo get_user_meta($user_id, "address", true); ?>                </a>
              </td>
            </tr>
                        <tr>
                            <th><a href="/help/CS/help_smph.html?help=ppc&amp;header=1" class="helpBtn" rel="external">電話</a></th>
              <td>
                <p class="telNo_big"><?php echo get_user_meta($user_id, "tel", true); ?></p>

                <form name="ppcInfo" id="ppcInfo">
                  <input type="hidden" name="freeDial" id="freeDial" value="<?php echo get_user_meta($user_id, "tel", true); ?>">
                </form>
                <p class="ppcTelCaption">一部ダイヤル回線、IP電話、光電話は利用できません</p>
              </td>
                          </tr>
          </tbody>
        </table>

        <p class="slideLinkBar"><a href="<?php echo get_user_meta($user_id, "shop_url", true); ?>?page=stocklist" rel="external">この販売店の在庫一覧</a></p>
<?php /*
                <p class="slideLinkBar"><a href="http://www.carsensor.net/shop/saitama/050627001/review/?BKKN=CU3808985612" rel="external">この販売店のクチコミ一覧へ(369件)</a></p>
			*/	?>
              </section>

      <div class="actionArea">
                 <button class="btn_submit btnL" onclick="location.href='#contact_form'">
          在庫確認・見積依頼<small>(無料)</small>
        </button>
                    <div class="btnBox">
        </div>
      </div><!-- /.actionArea -->
<?php echo do_shortcode('[contact-form-7 id="5" title="個別中古車への問い合わせフォーム"]'); ?>
<?php /*
      <ul class="snsList">
        <li><a href="mailto:?subject=%E3%83%9B%E3%83%B3%E3%83%80%20%E3%83%95%E3%82%A3%E3%83%83%E3%83%88%E3%81%AE%E7%89%A9%E4%BB%B6%E6%83%85%E5%A0%B1&amp;body=%E2%80%BB%E3%81%93%E3%81%AE%E3%83%A1%E3%83%BC%E3%83%AB%E3%81%AF%E3%82%AB%E3%83%BC%E3%82%BB%E3%83%B3%E3%82%B5%E3%83%BC%E3%81%AE%E3%83%A1%E3%83%BC%E3%83%AB%E8%BB%A2%E9%80%81%E6%A9%9F%E8%83%BD%E3%81%AB%E3%82%88%E3%82%8A%E8%BB%A2%E9%80%81%E3%81%95%E3%82%8C%E3%81%BE%E3%81%99%E3%80%82%0D%0A%0D%0A--------------------------------%0D%0A%e2%96%a0%E3%83%9B%E3%83%B3%E3%83%80%20%E3%83%95%E3%82%A3%E3%83%83%E3%83%88%0D%0A1.3%20L%20ETC%E3%82%AD%E3%83%BC%E3%83%AC%E3%82%B9%E7%A4%BE%E5%A4%9614%E3%82%A4%E3%83%B3%E3%83%81AW%0D%0Ahttp%3A%2F%2Fwww.carsensor.net%2Fusedcar%2Fdetail%2FCU3808985612%2Findex.html%3FSTID%3DSMPH0002%26RESTID%3DSMPH0001%26vos%3Dsmph201402041%0D%0A%0D%0A--------------------------------%0D%0ARECRUIT" onclick="reqVos('SMPH1501');">
        <img width="88" height="20" src="/smph/cmn/img/btn_sendMail.png" alt="メールで送る"></a>
        </li>
        <li>
        <a href="javascript:void(0);" onclick="sendLine();reqVos('SMPH1502');">
        <img width="88" height="20" src="/smph/cmn/img/linebutton_88x20.png" alt="LINEで送る"></a>
        </li>
      </ul>
	 */ ?>
    </div>
        </div>

    </div><!-- /.container -->

<?php get_footer("sp"); ?>
