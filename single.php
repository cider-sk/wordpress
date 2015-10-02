<?php get_header(); ?>
        <div class="row" id="top-main">
            <div class="col-xs-12">
                <div class="l-container">

  <div class=" l-wrap" style="text-align:left;">

    <article class="l-mainColumn-2" itemscope="" itemtype="http://schema.org/Product">
      <header class="l-pageHeader">
        <div class="l-wrap">
          <div class="l-box va-top">
            <h2 class="pageTtl bknDtl_ttl" itemprop="name">
            <span class="subTxt  bknDtl_ttl__maker"><?php echo get_post_meta($post->ID, "maker", true); ?></span><br>
              <span class=" bknDtl_ttl__car"><?php echo get_post_meta($post->ID, "model", true); ?></span><br>
              <span class="subTxt bknDtl_ttl__grd"><?php echo get_post_meta($post->ID, "meta-desc", true); ?></span>
            </h2>
          </div>
          <div class="l-gutter5"></div>
          <div class="l-box  txt-r w200" itemprop="offer" itemscope="" itemtype="http://schema.org/Offer">
            <meta itemprop="priceCurrency" content="JPY">
            <table class="tbl mb10">
              <tbody><tr>
                <th class="va-mid">
                  <p class="subTtl fontM">支払総額</p>
                  <p class="note"><a href="/help/CS/help_sougaku.html" title="クリックすると説明が表示されます" target="_blank" class="subTxt js_question"></a></p>
                </th>
                <td class="va-mid txt--sub"><b class="numXXL"><?php echo get_post_meta($post->ID, "sum-value", true); ?><small></small></b>万円</td>
              </tr>
              <tr>
                <th class="va-mid">
                  <p class="subTtl fontM">本体価格</p>
                  <p class="note"><a href="/help/CS/help_syohizei.html" title="クリックすると説明が表示されます" target="_blank" class="subTxt js_question"></a></p>
                </th>
                <td class="va-mid txt--sub"><span class="numXXL price--hontai" itemprop="price" content="369,000"><?php echo get_post_meta($post->ID, "value", true); ?></small></span>万円</td>
              </tr>
            </tbody></table>
          </div>
        </div>

        <div class="l-wrap" id="menu_show">
          <div class="l-box">
            <div class="ppc ppc--normal">
              <p class="ppc__ttl">お電話でのお問い合わせ<a class="js_question" href="/help/CS/help_freedial.html" target="_blank"></a></p>
              <p class="ppc__num numXL"><?php 
$blogusers = get_users('blog_id='.$post->ID);
$user_id = $blogusers[0]->ID;

$address = get_user_meta($user_id, "address", true);
$time = get_user_meta($user_id, "time", true);
echo $tel = get_user_meta($user_id, "tel", true);
?></p>
    <p class="ppc__note">営業時間：<span class="txt--bk"><?php echo $time ?></span></p>
                <p class="ppc__note">※一部ダイヤル回線、IP・光回線は利用不可</p>
            </div>
          </div>

          <div class="l-box txt-r">
<button class="btn btn--inq btn--inq--tate btn--big  mb10" type="button" onclick="location.href='#contact_form'" onkeypress="return true"><span class="btn--inq--tate__cap">無料</span>在庫確認・見積依頼</button><br>

          </div>
        </div>

      </header>

      <!-- 画像 -->
      <section class="l-seclv1">
      <div class="bknDtl_mainImg" id="photoBox" <?php if(get_post_meta($post->ID, "is_goo", true)){ ?>style="width:200px;"<?php } ?>>
        <img src="<?php 
 $imgs = get_post_meta($post->ID, "imgList", true); 
$images = explode(",", $imgs);
echo $images[0];

?>" width="100%" alt="<?php the_title(); ?>" id="mainPhoto" itemprop="image">
          </a>

        </div>
        
        <div class="mb20">
          <p class="note">※写真はイメージの場合があります。詳細は販売店にご確認ください。</p>
        </div>

        <p class="txt" itemprop="description"><?php echo get_post_meta($post->ID, "car-name", true); ?></p>
      </section>

      <div class="l-wrap mb50">
        <div class="l-box">
          <div class="ppc ppc--normal">
            <p class="ppc__ttl"><span class="label label--free label--free--ppcL">無　料</span>お電話でのお問い合わせ</p>
            <p class="ppc__num numXXL"><?php echo $tel ?></p>
            <p class="ppc__note">※一部ダイヤル回線、IP・光回線は利用不可</p>
          </div>
        </div>
        <div class="l-box txt-r">
                  <button class="btn btn--inq btn--inq--tate btn--big  mb10" type="button" onclick="location.href='#contact_form'" onkeypress="return true"><span class="btn--inq--tate__cap">無料</span>在庫確認・見積依頼</button><br>

          <div>
          <a href="<?php 
echo get_post_meta($post->ID, "shop_url", true);
?>?page=map" class="subTxt" target="_blank">お店の地図を見る</a>
          </div>
        </div>

      </div>


<section class="l-seclv1">
<h2 class="hd2nd">基本情報<span class="hd2nd__subTxt note">（<?php the_title(); ?>）</span></h2>
        <div class="l-secBody">
          <table class="tbl tbl--spec">
            <tbody>
              <tr>
              <th style="width:110px;"><a href="/help/CS/help_syohizei.html" target="_blank" title="クリックすると説明が表示されます" class="js_question"><i class="icon icon_help"></i></a>本体価格<span class="note">（税込）</span></th><td><?php echo get_post_meta($post->ID, "value", true); ?>万円</td>
                <th>駆動方式</th><td><?php echo get_post_meta($post->ID, "drive-system", true); ?></td>
              </tr>
              <tr>
                <th><a href="/help/CS/help_sougaku.html" target="_blank" class="js_question" title="クリックすると説明が表示されます"><i class="icon icon_help"></i></a>支払総額<span class="note">（税込）</span></th><td><?php echo get_post_meta($post->ID, "sum-value", true); ?>万円</td>
                <th>ハンドル</th><td><?php echo get_post_meta($post->ID, "handle", true); ?></td>
              </tr>
              <tr>
                <th><a href="/help/CS/help_mileage.html" target="_blank" class="js_question" title="クリックすると説明が表示されます"><i class="icon icon_help"></i></a>走行距離</th><td><?php echo get_post_meta($post->ID, "distance", true); ?>万km</td>
                <th>ミッション</th><td><?php echo get_post_meta($post->ID, "mission", true); ?></td>
              </tr>
              <tr>
                <th>年式(初度登録年)</th><td><?php echo get_post_meta($post->ID, "year", true); ?></td>
                <th>ボディタイプ</th><td><?php echo get_post_meta($post->ID, "body-type", true); ?></td>
              </tr>
              <tr>
                <th>色</th><td><?php echo get_post_meta($post->ID, "color", true); ?></td>
                <th>乗車定員</th><td><?php echo get_post_meta($post->ID, "member-limit", true); ?></td>
              </tr>
              <tr>
                <th>車台末尾番号</th><td><?php echo get_post_meta($post->ID, "car-number", true); ?></td>
                <th>福祉車両</th><td><?php echo get_post_meta($post->ID, "hukushi", true); ?></td>
              </tr>
              <tr>
                <th style="width:110px;">排気量</th><td><?php echo get_post_meta($post->ID, "displacement", true); ?></td>
                <th>正規輸入車</th><td><?php echo get_post_meta($post->ID, "yunyuu", true); ?></td>
              </tr>
              <tr>
                <th>過給器設定モデル</th><td><?php echo get_post_meta($post->ID, "supercharger", true); ?></td>
                <th>ドア数</th><td><?php echo get_post_meta($post->ID, "door", true); ?></td>
              </tr>
              <tr>
                <th>エンジン種別</th><td><?php echo get_post_meta($post->ID, "engin", true); ?></td>
                <th>スライドドア</th><td><?php echo get_post_meta($post->ID, "slide-door", true); ?></td>
              </tr>
              <tr>
                <th>車検</th><td colspan="3"><p class="txt"><?php echo get_post_meta($post->ID, "inspection", true); ?></p></td>
              </tr>
              <tr>
              <th>法定整備</th><td colspan="3"><p class="txt"><?php echo get_post_meta($post->ID, "law", true); ?></p></td>
              </tr>
              <tr>
              <th>保証</th><td colspan="3"><p class="txt"><?php echo get_post_meta($post->ID, "warranty", true); ?></p></td>
              </tr>
            </tbody>
          </table>

        </div>
      </section>

      <!-- 基本情報・状態・装備仕様 -->
      <section class="l-seclv1">

        <div class="l-secBody">
          <table class="tbl tbl--spec">
            <tbody>
              <tr>
                <th class="w100">修復歴</th><td><?php echo get_post_meta($post->ID, "fix-history", true); ?></td>
                <th class="w100">キャンピングカー</th><td><?php echo get_post_meta($post->ID, "camp-car", true); ?></td>
              </tr>
              <tr>
                <th>定期点検記録簿</th><td><?php echo get_post_meta($post->ID, "teiki-history", true); ?></td>
                <th>新車物件</th><td><?php echo get_post_meta($post->ID, "new-car", true); ?></td>
              </tr>
              <tr>
                <th>禁煙車</th><td><?php echo get_post_meta($post->ID, "non-smoking", true); ?></td>
                <th>登録（届出）済<br>未使用車</th><td><?php echo get_post_meta($post->ID, "regist-offer", true); ?></td>
              </tr>
              <tr>
                <th>リサイクル料</th><td><?php echo get_post_meta($post->ID, "recycle-fee", true); ?></td>
                <th>エコカー減税<br>対象車</th><td><?php echo get_post_meta($post->ID, "echo-car", true); ?></td>
              </tr>
              <tr>
                <th>ワンオーナー</th><td><?php echo get_post_meta($post->ID, "one-owner", true); ?></td>
                <th>&nbsp;</th><td>&nbsp;</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>


      <div class="l-wrap mb50">
          <div class="l-box">
          <div class="ppc ppc--normal">
            <p class="ppc__ttl"><span class="label label--free label--free--ppcL">無　料</span>お電話でのお問い合わせ</p>
            <p class="ppc__num numXXL"><?php echo $tel ?></p>
            <p class="ppc__note">※一部ダイヤル回線、IP・光回線は利用不可</p>
          </div>
        </div>
          <div class="l-box txt-r">
<button class="btn btn--inq btn--inq--tate btn--big  mb10" type="button" onclick="location.href='#contact_form'" onkeypress="return true"><span class="btn--inq--tate__cap">無料</span>在庫確認・見積依頼</button><br>

          <div>
          <a href="<?php echo get_post_meta($post->ID, "shop_url", true); ?>?page=map" class="subTxt" target="_blank">お店の地図を見る</a>
            </div>
        </div>
      </div>
    </article>

    <div class="l-gutter40"></div>

    <!-- サイドバー -->
    <div class="l-sideColumn">
      <section class="l-seclv1  sideBar">
        <h2 class="hd2nd">販売店情報</h2>
        <section class="l-seclv2">
        <h3 class="hd3rd"><a href="<?php echo get_post_meta($post->ID, "shop_url", true); ?>" class="hd3rd__subLink"><?php 
        $user_info = get_userdata($user_id);
        echo $user_info->first_name;
 ?>&nbsp;</a></h3>

<?php /*
          <table class="tbl--sideBar--review">
            <tbody>
              <tr>
                <th>クチコミ件数</th>
                <td><b class="numS">3</b>件</td>
              </tr>
              <tr>
                <th>総合評価</th>
                <td>
                <i class="icon icon_star "></i>
                <i class="icon icon_star "></i>
                <i class="icon icon_star "></i>
                <i class="icon icon_star "></i>
                <i class="icon icon_star "></i>
                    <b class="numS">5</b>
                </td>
              </tr>
            </tbody>
          </table>
          <p class="review mb10">
            <span class="review__sub txt--dark">接客:<span class="numS">5</span>｜雰囲気:<span class="numS">5</span>｜アフター:<span class="numS">4.7</span>｜品質:<span class="numS">4.7</span></span>
            </p>
*/ ?>


          <p class="subTxt lh12 fontM mb10"></p>

          <button class="btn btn--funcL2 btn--small w100p mb10" onclick="location.href='<?php echo get_post_meta($post->ID, "shop_url", true); ?>?page=map'">お店の地図を見る</button>
          <p class="subTxt lh12 mb10">地図は印刷できます。
          <div class="l-wrap--fixed mb5">
            <div class="l-box va-mid">
            <p class="subTxt">住所:<?php echo $address ?></p>
            </div>
          </div>

          <div class="sideBar__contents mb10">
            <div class="ppc ppc--normal">
              <p class="ppc__ttl"><span class="label label--free">無料</span>お電話でのお問い合わせ</p>
              <p class="ppc__num numL txt-c"><?php echo $tel ?></p>
              <p class="ppc__note">※一部ダイヤル回線、IP・光回線は利用不可</p>
            </div>
          </div>


          <p class="txt txt-r"><a href="<?php echo get_post_meta($post->ID, "shop_url", true); ?>?page=stocklist">お店の在庫一覧を見る</a></p>
        </section>

      </section>

<?php /*
      <section class="l-seclv1  sideBar">
        <h2 class="hd2nd">メルセデス・ベンツ&nbsp;Aクラスの中古車</h2>
        <p class="subTxt mb10">Ｂｅｎｚ　Ｔｅｓｔａｒ&nbsp;とその系列販売店の中で、同じ中古車をピックアップしています。（現在、1台の在庫があります！）</p>

        <div class="sideBar__contents">
          <a href="javascript:void(0)" class="slideBtn slideBtn--v is-off" id="scroll_prev"><i class="icon icon_top"></i></a>
          <div id="scrollable" class="l-scrollable" style="height:520px;">
            <div id="scrollitems" class="l-scrollitems">

      <div>                <div class="l-wrap--fixed mb10">
                  <div class="l-box">
                    <p class="txt lh12 h2_5em"><a href="/usedcar/detail/CU3547373443/index.html">A170 メモリーナビ ETC</a></p>
                    <table class="tbl--price w100p">
                      <tbody><tr>
                        <th class="fontXS">支払総額</th>
                        <td class="fontXS"><b class="numS">39.8</b>万円</td>
                      </tr>
                      <tr>
                        <th class="fontXS">本体価格</th>
                        <td class="fontXS"><span class="numS price--hontai">31.9</span>万円</td>
                      </tr>
                    </tbody></table>
                  </div>
                  <div class="l-gutter10"></div>
                  <div class="l-box w80 txt-c">
                    <a href="/usedcar/detail/CU3547373443/index.html"><img class="mb5 js_lazy" src="http://ccsrpcma.carsensor.net/CSphoto/bkkn/863/459/U00014863459/U00014863459_002S.JPG" width="80" height="60" data-original="http://ccsrpcma.carsensor.net/CSphoto/bkkn/863/459/U00014863459/U00014863459_002S.JPG" alt="メルセデス・ベンツ&nbsp;Aクラス&nbsp;茨城県" style="display: inline;"></a>
                    <p class="fontXS txt--bk">茨城県</p>
                  </div>
                </div>
    </div>  
            </div>
          </div>
          <a href="javascript:void(0)" class="slideBtn slideBtn--v is-off" id="scroll_next"><i class="icon icon_bottom"></i></a>
        </div>

      </section>
 */ ?>
    </div>
  </div>

  <p class="goPageTop"><a href="#">トップへ</a></p>
<div id="contact_form">
<?php echo do_shortcode('[contact-form-7 id="5" title="個別中古車への問い合わせフォーム"]'); ?>
</div>
</div>

            </div>
        </div>
</div> <!-- /container -->

<?php get_footer(); ?>
