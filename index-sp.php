<?php get_header("sp"); ?>
    <div class="container">

        <div class="starter-template main">
            <h1 class="top">
<img src="<?php bloginfo("url") ?>/wp-content/uploads/2015/09/筑波大生専門中古車情報サイト（一番上）.png" alt="" class="middle-top">
            </h1>
	    <h2 class="top">
<a href="http://tsukucar.com/campaign/">
	    <img src="<?php bloginfo("template_url"); ?>/image-sp/morenaku.png" alt="">
</a>
            </h2>
            <div class="block">
                <h3>こだわりの条件がある人</h3>
                <a href="#p2-c"><img src="<?php bloginfo("template_url"); ?>/image-sp/sagasu.png" alt=""></a>
            </div>
            <div class="block">
                <h3>毎月の維持費が心配な人</h3>
                <a href="#p3-c"><img src="<?php bloginfo("template_url"); ?>/image-sp/ijihi.png" alt=""></a>
            </div>
            <div id="p2-c"></div>
            <div class="block">
                <h3>どれを買おうか悩んでいる人</h3>
                <a href="http://tsukucar.com/toriyose/"><img src="<?php bloginfo("template_url"); ?>/image-sp/chukosha.png" alt=""></a>
            </div>
            <div id="p2">
<?php /*
                <section id="tabBarSection">
                    <nav class="tabBar_R">
                        <ul id="tabBar" class="tabBar_top">
                            <li><div class="tabBtn tabBtn--1 IS_open" id="makerTabId"><b>メーカー検索</b></div></li>
                            <li><div class="tabBtn tabBtn--2 IS_close" id="bodyTabId"><b>車のタイプ検索</b></div></li>
                            <li><div class="tabBtn tabBtn--3 IS_close"><b>複数条件検索</b></div></li>
                        </ul>
                    </nav>
                    <div class="tabBox  tabBox--1 IS_open">
                        <ul class="makerBtns">
                          <li><a href="/usedcar/shashu/bTO/index.html" rel="external" class="ui-link"><span id="btn_toyota"></span><span>トヨタ</span></a></li>
                          <li><a href="/usedcar/shashu/bNI/index.html" rel="external" class="ui-link"><span id="btn_nissan"></span><span>日産</span></a></li>
                          <li><a href="/usedcar/shashu/bHO/index.html" rel="external" class="ui-link"><span id="btn_honda"></span><span>ホンダ</span></a></li>
                          <li><a href="/usedcar/shashu/bMA/index.html" rel="external" class="ui-link"><span id="btn_mazda"></span><span>マツダ</span></a></li>
                          <li><a href="/usedcar/shashu/bSB/index.html" rel="external" class="ui-link"><span id="btn_subaru"></span><span>スバル</span></a></li>
                          <li><a href="/usedcar/shashu/bSZ/index.html" rel="external" class="ui-link"><span id="btn_suzuki"></span><span>スズキ</span></a></li>
                          <li><a href="/usedcar/shashu/bMI/index.html" rel="external" class="ui-link"><span id="btn_mitsubishi"></span><span>三菱</span></a></li>
                          <li><a href="/usedcar/shashu/bDA/index.html" rel="external" class="ui-link"><span id="btn_daihatsu"></span><span>ダイハツ</span></a></li>
                      </ul>
                  </div><!-- /.tabBox -->
                  <div class="tabBox  tabBox--2 IS_close">
                        <ul class="bodytypeBtns">
                            <li><a href="/usedcar/spK/index.html?fed=topsptypeb201506153ue" rel="external" class="ui-link"><span id="btn_kcar"></span><span class="text">軽自動車</span></a></li>
                            <li><a href="/usedcar/spH/index.html?fed=topsptypeb201506154ue" rel="external" class="ui-link"><span id="btn_hybrid"></span><span class="text">ハイブリッド</span></a></li>
                            <li><a href="/usedcar/btM/index.html?fed=topsptypeb201506155ue" rel="external" class="ui-link"><span id="btn_miniVan"></span><span class="text">ミニバン</span></a></li>
                            <li><a href="/usedcar/btD/index.html?fed=topsptypeb201506156ue" rel="external" class="ui-link"><span id="btn_hBack"></span><span class="text">ハッチバック</span></a></li>
                            <li><a href="/usedcar/btS/index.html?fed=topsptypeb201506157ue" rel="external" class="ui-link"><span id="btn_sedan"></span><span class="text">セダン</span></a></li>
                            <li><a href="/usedcar/btW/index.html?fed=topsptypeb201506158ue" rel="external" class="ui-link"><span id="btn_stWagon"></span><span class="text stWagon_text">ステーションワゴン</span></a></li>
                            <li><a href="/usedcar/btX/index.html?fed=topsptypeb201506159ue" rel="external" class="ui-link"><span id="btn_suv"></span><span class="text">クロカン・SUV</span></a></li>
                            <li><a href="/usedcar/btC/index.html?fed=topsptypeb2015061510ue" rel="external" class="ui-link"><span id="btn_coupe"></span><span class="text">クーペ</span></a></li>
                            <li><a href="/usedcar/btO/index.html?fed=topsptypeb2015061511ue" rel="external" class="ui-link"><span id="btn_open"></span><span class="text">オープン</span></a></li>
                            <li><a href="/usedcar/btT/index.html?fed=topsptypeb2015061512ue" rel="external" class="ui-link"><span id="btn_track"></span><span class="text">トラック</span></a></li>
                            <li><a href="/usedcar/spF/index.html?fed=topsptypeb2015061513ue" rel="external" class="ui-link"><span id="btn_welfare"></span><span class="text">福祉車両</span></a></li>
                            <li><a href="/usedcar/btP/index.html?fed=topsptypeb2015061514ue" rel="external" class="ui-link"><span id="btn_picUpT"></span><span class="text picUpT_text">ピックアップトラック</span></a></li>
                            <li><a href="/usedcar/spS/index.html?fed=topsptypeb2015061515ue" rel="external" class="ui-link"><span id="btn_van"></span><span class="text">商用車</span></a></li>
                            <li><a href="/usedcar/search.php?SP=C&amp;fed=topsptypeb2015061516ue" rel="external" class="ui-link"><span id="btn_camp"></span><span class="text">キャンピングカー</span></a></li>
                            <li><a href="/usedcar/search.php?BT=N&amp;fed=topsptypeb2015061517ue" id="btn_other" rel="external" class="ui-link"><span>その他</span></a></li>
                        </ul>
                    </div><!-- /.tabBox -->
                    <div class="searchBlock_multi tabBox  tabBox--3 IS_close">
                    <div id="multiSearchSection"></div>
                        <ul class="searchList" id="TopFirstList">
                            <li>
                                <a href="javascript:void(0);" onclick="reqVos('SMPH1011');panel.dispBrand();" class="ui-link">
                                    <p class="selectTtl">メーカー・車名</p>
                                    <p class="subTxt"><span id="selectedCar">指定なし</span></p>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" onclick="reqVos('SMPH1031');panel.dispArea();setNoDispfooterId('areaSelect_SLock');panel.LoadEnd('#selectArea');" class="ui-link">
                                    <p class="selectTtl">地域</p>
                                    <p class="subTxt"><span id="selectedArea">指定なし</span></p>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" onclick="reqVos('SMPH1041');panel.LoadEnd('#selectBtype');" class="ui-link">
                                    <p class="selectTtl">ボディタイプ</p>
                                    <p class="subTxt"><span id="selectedBodyType">指定なし</span></p>
                                </a>
                            </li>
                            <li><p class="selectTtl">価格</p>
                                <p class="subTxt">
                            <select data-role="none" id="select1" name="PMIN">
                                <option label="下限なし" value="">下限なし</option>
                                <option label="5万円" value="50000">5万円</option>
                                <option label="10万円" value="100000">10万円</option>
                                <option label="15万円" value="150000">15万円</option>
                                <option label="20万円" value="200000">20万円</option>
                                <option label="25万円" value="250000">25万円</option>
                                <option label="30万円" value="300000">30万円</option>
                                <option label="35万円" value="350000">35万円</option>
                                <option label="40万円" value="400000">40万円</option>
                                <option label="45万円" value="450000">45万円</option>
                                <option label="50万円" value="500000">50万円</option>
                                <option label="60万円" value="600000">60万円</option>
                                <option label="70万円" value="700000">70万円</option>
                                <option label="80万円" value="800000">80万円</option>
                                <option label="90万円" value="900000">90万円</option>
                                <option label="100万円" value="1000000">100万円</option>
                                <option label="120万円" value="1200000">120万円</option>
                                <option label="140万円" value="1400000">140万円</option>
                                <option label="160万円" value="1600000">160万円</option>
                                <option label="180万円" value="1800000">180万円</option>
                                <option label="200万円" value="2000000">200万円</option>
                                <option label="250万円" value="2500000">250万円</option>
                                <option label="300万円" value="3000000">300万円</option>
                                <option label="350万円" value="3500000">350万円</option>
                                <option label="400万円" value="4000000">400万円</option>
                                <option label="450万円" value="4500000">450万円</option>
                                <option label="500万円" value="5000000">500万円</option>
                                <option label="600万円" value="6000000">600万円</option>
                                <option label="700万円" value="7000000">700万円</option>
                                <option label="800万円" value="8000000">800万円</option>
                                <option label="900万円" value="9000000">900万円</option>
                            </select>-
                            <select data-role="none" id="select2" name="PMAX">
                                <option label="上限なし" value="">上限なし</option>
                                <option label="5万円" value="50000">5万円</option>
                                <option label="10万円" value="100000">10万円</option>
                                <option label="15万円" value="150000">15万円</option>
                                <option label="20万円" value="200000">20万円</option>
                                <option label="25万円" value="250000">25万円</option>
                                <option label="30万円" value="300000">30万円</option>
                                <option label="35万円" value="350000">35万円</option>
                                <option label="40万円" value="400000">40万円</option>
                                <option label="45万円" value="450000">45万円</option>
                                <option label="50万円" value="500000">50万円</option>
                                <option label="60万円" value="600000">60万円</option>
                                <option label="70万円" value="700000">70万円</option>
                                <option label="80万円" value="800000">80万円</option>
                                <option label="90万円" value="900000">90万円</option>
                                <option label="100万円" value="1000000">100万円</option>
                                <option label="120万円" value="1200000">120万円</option>
                                <option label="140万円" value="1400000">140万円</option>
                                <option label="160万円" value="1600000">160万円</option>
                                <option label="180万円" value="1800000">180万円</option>
                                <option label="200万円" value="2000000">200万円</option>
                                <option label="250万円" value="2500000">250万円</option>
                                <option label="300万円" value="3000000">300万円</option>
                                <option label="350万円" value="3500000">350万円</option>
                                <option label="400万円" value="4000000">400万円</option>
                                <option label="450万円" value="4500000">450万円</option>
                                <option label="500万円" value="5000000">500万円</option>
                                <option label="600万円" value="6000000">600万円</option>
                                <option label="700万円" value="7000000">700万円</option>
                                <option label="800万円" value="8000000">800万円</option>
                                <option label="900万円" value="9000000">900万円</option>
                            </select>
                                </p>
                            </li>
                        </ul>
                        <form name="f_combo" id="f_combo" action="/usedcar/search.php#mainBlock" method="get">
                            <input type="hidden" value="" id="STID" name="STID">
                            <input type="hidden" value="" id="BRDC" name="BRDC">
                            <input type="hidden" value="" id="CARC" name="CARC">
                            <input type="hidden" value="" id="AR" name="AR">
                            <input type="hidden" value="" id="BT" name="BT">
                            <input type="hidden" value="" id="SP" name="SP">
                            <input type="hidden" value="" id="NINTEI" name="NINTEI">
                            <input type="hidden" value="" id="PMIN" name="PMIN">
                            <input type="hidden" value="" id="PMAX" name="PMAX">
                        </form>
                        <div class="actionArea">
                            <button data-role="none" class="btn_TopSearch" onclick="panel.onSubmit(); javascript:void(0);">この条件で検索<span></span></button>
                        </div><!-- /.actionArea -->
                    </div>
                    </section>
 */ ?>
            </div>
                <h2 class="hdd2nd searchHistoryB">その他の検索</h2>                
                <ul class="slideLinkL">
                    <li><a title="" id="" href="<?php bloginfo("url"); ?>/price-search/" rel="external" class="ui-link">
                        <div class="listTxtBox"><p class="main" id="">価格から探す</p>
                    </div><!-- /.listTxtBox --></a></li>
                </ul>
                <section id="lastSearchBlock" class="mt15">
    <h2 class="hdd2nd">中古車購入の方法や流れを知りたい！</h2>
    <ul class="osiraseBlock">
        <li>
            <a href="/contents/guide/" class="osiraseBox ui-link" rel="external">
                <div class="box_L">
                <img src="<?php bloginfo("template_url"); ?>/image-sp/sp-top-icon.jpg" width="100%" alt="中古車購入ガイド">
                </div>
                <!-- /.boxL -->
                <div class="box_R">車選びから購入手続きまで、
                    <br>役立つ情報を完全網羅！
                    <br>中古車購入のバイブルです。</div>
                <!-- /.boxR -->
            </a>
        </li>
    </ul>
    </section>
    <div id="p3-c"></div>
<div id="p3">
<div id="tab_menu_img">
                        <div class="tab_menu clearfix">
                            <img src="<?php bloginfo("url") ?>/wp-content/uploads/2015/09/left-check.png" alt="">
                            <div id="tab-link-box">
                            <a id="left-img" href="javascript:void(0);"></a>
                            <a id="middle-img" href="javascript:void(0);"></a>
                            <a id="right-img" href="javascript:void(0);"></a>
                            </div>
                        </div>
                    </div>

    <div class="pageBody">
                <div id="lockline_main"></div>
<?php 
 $fuel_array = array(
     1 => 160,
     2 => 480,
     3 => 1600
     ); 
for($i=1;$i <= 3; $i++){ ?>
<div id="tab-contents-<?php echo $i ?>">
     <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
<?php
$user_id = $post->post_author;
$address = get_user_meta($user_id, "address", true);
$present = get_user_meta($user_id, "present", true);
$user_info = get_userdata($user_id);
?>

                                <div class="bknBox bknBox_A" id="bkn_CU3933292882">
                                    <a href="<?php the_permalink(); ?>">
                        <div class="bknBox_top">
                                                        <div class="nameBar">
                                <b class="name_maker"><?php echo get_post_meta($post->ID, "model", true); ?></b>
				<h2 class="name_car"><?php the_title(); ?></h2>

<?php if($present){ ?><p class="present"><?php echo $present ?></p><?php } ?>
                                                            </div>
                                                    </div><!-- /.bknBox_top -->
                        <div class="bknBox_mid">
                            <div class="box_L">
                                <figure>
                                                                    <img height="90" width="120" src="<?php 
 $imgs = get_post_meta($post->ID, "imgList", true); 
$images = explode(",", $imgs);
echo $images[0];

?>" alt="<?php the_title(); ?>" class="bknImg" style="display: block;">
                                                                </figure>
                                <ul class="bknAll_icons">
                                                                                                                                            </ul>
                            </div><!-- /.box_L -->
                            <div class="box_R">
                                <table cellpadding="0" cellspacing="0" class="bknInfoTbl">
                                <tbody>
                                    <tr>
                                        <th>本体</th>
                                        <td class="price_hontai"><b><?php $value=get_post_meta($post->ID,'value',true); valueFont($value); ?></b><small>万円</small></td>
                                        <th>総額</th>
                                        <td class="price_sougaku"><b><?php $value=get_post_meta($post->ID,'sum-value',true); valueFont($value); ?></b></td>
                                    </tr>
                                    <tr>
                                        <th>年式</th>
                                        <td><b><?php echo $year=get_post_meta($post->ID,'year',true); ?></b>年</td>
                                        <th>走行</th>
                                        <td><b><?php echo get_post_meta($post->ID,'distance',true); ?></b>km</td>
                                    </tr>
                                    <tr>
                                        <th>修復</th>
                                        <td><?php 
echo get_post_meta($post->ID, "fix-history", true); ?></td>
                                    </tr>
                                    <tr>
                                        <th>住所</th>
                                        <td colspan="3"><?php 
$user_id = $post->post_author;
echo $address = get_user_meta($user_id, "address", true); ?></td>
                                    </tr>
                                </tbody>
                                </table>
                                                                        <button id="bknDtlFixedBtn2_CU3933292882_1"  onclick="location.href='<?php the_permalink(); ?>#contact_form'; return false;" class="btn_inq" data-role="none"><i>無料</i><span>在庫確認・見積依頼</span></button>
                                                                        </div><!-- /.box_R -->
                            <!--  -->
                        </div><!-- /.bknBox_mid -->
<div class="fuel-fee" style="
    position: absolute;
    margin-top: -47px;
    font-size: 14px;

">
	維持費<span style="color:red;font-size:18px;"><?php 
	if(get_post_meta($post->ID, "is_goo")){
		$fuel=get_post_meta($post->ID,'fuel',true) * 4;
		if(!$fuel || $fuel=="-"){
			$fuel = 12;
		}
	}else{
		$fuel=get_post_meta($post->ID,'fuel',true); 
		if(!$fuel || $fuel=="-"){
			$fuel = 12;
		}
	}
$fuel = (130*$fuel_array[$i])/$fuel;
echo number_format($fuel);
?></span>円/月
</div>
					    </a>
                </div><!-- /.bknBox_A -->

<?php endwhile; ?><?php else : ?>
<?php endif; wp_reset_query(); ?>
</div>
<?php } ?>
                                  
<?php wp_pagenavi(); ?>


<?php /*
  <p class="pagenation">
                                <span class="noPage">最初</span><span class="noPage">&lt;</span><span class="pageNo">1p/1p</span><span class="noPage">&gt;</span><span class="noPage">最後</span>               </p>
          
                    <div class="sm-footerBox" id="sm_usedcar_search_footer" style="display:none;">
                        <div class="searchTitle"><span id="sm_shashu_name"></span>下記条件で絞込</div>
                        <div class="sm-SearchBox_C">
                            <a href="#" class="conditions" id="sm_fmcc_footer">最新（現行）モデル</a>
                            <a href="#" class="conditions" id="sm_soukou_footer">走行距離5000km以下</a>
                            <a href="#" class="conditions" id="sm_optrep_footer">修復歴なし</a>
                            <a href="#" class="conditions" id="sm_optrnu_footer">登録(届出)済未使用車</a>
                        </div>
                    </div>
                    </div>
<?php */ ?>
</div>
        </div>


<?php 
get_footer("sp");
?>
