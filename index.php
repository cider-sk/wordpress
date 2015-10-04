<?php get_header(); ?>
        <div class="row" id="top-main">
            <div class="col-xs-12">
                <h2>
                    <img src="<?php bloginfo("template_url"); ?>/dist/img/top_main_text.png" alt="" class="top_main_text">
                    <a href="http://tsukucar.com/campaign/">
                    <img src="<?php bloginfo("url") ?>/wp-content/uploads/2015/09/紹介者と購入者にもれなく….png" alt="" class="top_main_text_under">
                    <img src="<?php bloginfo("url") ?>/wp-content/uploads/2015/09/全店送迎付！1.png" alt="" class="top_under_hukidasi">
                    </a>
                </h2>
            </div>
            <div class="top-intro">
                <div class="col-xs-4">
                    <a href="#p2"><img src="<?php bloginfo("template_url"); ?>/dist/img/shousai.png" alt="詳細条件から探す"></a>
                </div>
                <div class="col-xs-4">
                    <a href="#p3"><img src="<?php bloginfo("template_url"); ?>/dist/img/ijihimaruwakari.png" alt=""></a>
                </div>
                <div class="col-xs-4">
                    <a href="http://tsukucar.com/toriyose/"><img src="<?php bloginfo("template_url"); ?>/dist/img/chuukoshajouhouikkini.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row">
        <div id="p2" class="col-xs-9">
	    <div class="block">
<h1 class="search-num">
現在の掲載数<span><?php 
global $wp_query;
 
echo $wp_query->found_posts;
?></span>件
<h1>
                <h2 class="search-num" >
                    中古車を探す
                </h2>
                <div class="l-wrap">
                    <div class="l-box">
                        <section class="top__panel__multi">
                        <h3 class="top__panel__ttl">複数条件検索</h3>
                        <form name="f_combo" id="f_combo" action="/" method="get">
<input type="hidden" name="post_type" value="post">

                            <div class="l-wrap--fixed top-multi">
                                <div class="l-box top-multi__box--L h50">
<table class="top-search">
    <tr>
	<th>グレード/モデル</th>
<td>
<select name="cftsearch[model][0][]" style="
    width: 100%;
    font-size: 20px;
    margin-top: 11px;
">
<?php 
	global $wpdb;
	$models = $wpdb->get_results( 
		"
		SELECT *
		FROM  wp_postmeta
		WHERE meta_key =  'model'
		GROUP BY meta_value
		order by meta_value
		"
	);
foreach ( $models as $model ) 
{
?>
	<option value="<?php echo $model->meta_value; ?>"><?php echo $model->meta_value; ?></option>
<?php } ?>
</select>
</td>
    </tr>
</table>
                                </div>
                            </div>
                            <div class="l-wrap--fixed top-multi mb20">
                                                            </div>                                
                            <div class="l-wrap--fixed top-multi mb20 txt-r">
                                <div class="l-box top-multi__ttl">価格</div><!-- /.top-multi__ttl -->
                                <div class="l-box top-multi__box">
                            <select name="cftsearch[value][1][]" id="sm_price">
                                <option label="価格下限" value="">価格下限</option>
                                <option label="5万円" value="5">5万円</option>
                                <option label="10万円" value="10">10万円</option>
                                <option label="15万円" value="15">15万円</option>
                                <option label="20万円" value="20">20万円</option>
                                <option label="25万円" value="25">25万円</option>
                                <option label="30万円" value="30">30万円</option>
                                <option label="35万円" value="35">35万円</option>
                                <option label="40万円" value="40">40万円</option>
                                <option label="45万円" value="45">45万円</option>
                                <option label="50万円" value="50">50万円</option>
                                <option label="60万円" value="60">60万円</option>
                                <option label="70万円" value="70">70万円</option>
                                <option label="80万円" value="80">80万円</option>
                                <option label="90万円" value="90">90万円</option>
                                <option label="100万円" value="100">100万円</option>
                                <option label="120万円" value="120">120万円</option>
                                <option label="140万円" value="140">140万円</option>
                                <option label="160万円" value="160">160万円</option>
                                <option label="180万円" value="180">180万円</option>
                                <option label="200万円" value="200">200万円</option>
                                <option label="250万円" value="250">250万円</option>
                            </select>
〜
                            <select name="cftsearch[value][2][]" id="sm_price">
                                <option label="価格上限" value="">価格上限</option>
                                <option label="5万円" value="5">5万円</option>
                                <option label="10万円" value="10">10万円</option>
                                <option label="15万円" value="15">15万円</option>
                                <option label="20万円" value="20">20万円</option>
                                <option label="25万円" value="25">25万円</option>
                                <option label="30万円" value="30">30万円</option>
                                <option label="35万円" value="35">35万円</option>
                                <option label="40万円" value="40">40万円</option>
                                <option label="45万円" value="45">45万円</option>
                                <option label="50万円" value="50">50万円</option>
                                <option label="60万円" value="60">60万円</option>
                                <option label="70万円" value="70">70万円</option>
                                <option label="80万円" value="80">80万円</option>
                                <option label="90万円" value="90">90万円</option>
                                <option label="100万円" value="100">100万円</option>
                                <option label="120万円" value="120">120万円</option>
                                <option label="140万円" value="140">140万円</option>
                                <option label="160万円" value="160">160万円</option>
                                <option label="180万円" value="180">180万円</option>
                                <option label="200万円" value="200">200万円</option>
                                <option label="250万円" value="250">250万円</option>
                            </select>
                                </div>
                            </div>


                            <div class="txt-r">
<input type="hidden" name="cftsearch_submit" value="1">
<input type="hidden" name="post_type" value="post">
<input class="search_button" type="submit" value="検索" class="cftsearch_submit">
                            </div><!-- /.txt-r -->
                        </form>
                        </section><!-- /.top__panel__multi -->

                        <section class="top__panel__freeword">
                        <h3 class="top__panel__ttl">フリーワード</h3>
                        <form class="f_fwForm" id="f_fw" action="./" method="get">
<input type="hidden" name="post_type" value="post">

                            <div class="l-wrap--fixed freeword mb10">
                                <div class="l-box freeword__txtBox">
                                    <input id="freewordTxt" type="text" name="s" value="<?php echo $_GET['s']; ?>" class="f-txtBox f-txtBox--big w100p">
                                </div>
                                <div class="l-gutter10"></div>
                                <div class="l-box  freeword__btnBox">
                                    <input class="search_button" type="submit" value="検索">
                                </div>
                            </div>

                            <div class="float is-on">
                                <div class="float__box float__box--suggest--topFree" id="freeword_suggest" style="display: none;"></div>
                            </div>

                            <p class="txt">例) 
                            <a href="/usedcar/bTO/s021/index.html?fed=toppcfws20150707002ta">ヴォクシー</a>
                            <a href="/usedcar/bMA/s010/index.html?fed=toppcrankb20150707044ta&amp;fed=toppcfws20150707002ta">RX-8</a>
                            </p>
                        </form>
                        </section><!-- /.top__panel__freeword -->
                    </div><!-- /.l-box -->
                    <div class="l-box">
                        <section class="top__panel__maker">
                        <h3 class="top__panel__ttl">メーカー検索</h3>
                        <div class="emblems">
                            
                            <a href="/?STID=CS210610&cftsearch%5Bmaker%5D%5B0%5D%5B%5D=トヨタ&cftsearch%5Bmodel%5D%5B0%5D%5B%5D=&cftsearch%5Bvalue%5D%5B1%5D%5B%5D=&cftsearch%5Bvalue%5D%5B2%5D%5B%5D=&cftsearch%5Byear%5D%5B1%5D%5B%5D=&cftsearch%5Byear%5D%5B2%5D%5B%5D=&cftsearch%5Bdistance%5D%5B1%5D%5B%5D=&cftsearch%5Bdistance%5D%5B2%5D%5B%5D=&cftsearch%5Bcar-name%5D%5B0%5D%5B%5D=&cftsearch%5Bcolor%5D%5B0%5D%5B%5D=&cftsearch_submit=1" title="トヨタの中古車" class="makerBtn">
                                <span class="makerLogo maker--TO"></span>
                                <div class="makerBtn__txt">トヨタ</div>
                            </a>

                            <a href="?STID=CS210610&cftsearch%5Bmaker%5D%5B0%5D%5B%5D=日産&cftsearch%5Bmodel%5D%5B0%5D%5B%5D=&cftsearch%5Bvalue%5D%5B1%5D%5B%5D=&cftsearch%5Bvalue%5D%5B2%5D%5B%5D=&cftsearch%5Byear%5D%5B1%5D%5B%5D=&cftsearch%5Byear%5D%5B2%5D%5B%5D=&cftsearch%5Bdistance%5D%5B1%5D%5B%5D=&cftsearch%5Bdistance%5D%5B2%5D%5B%5D=&cftsearch%5Bcar-name%5D%5B0%5D%5B%5D=&cftsearch%5Bcolor%5D%5B0%5D%5B%5D=&cftsearch_submit=1" title="日産の中古車" class="makerBtn">
                                <span class="makerLogo maker--NI"></span>
                                <div class="makerBtn__txt">日産</div>
                            </a>

                            <a href="?STID=CS210610&cftsearch%5Bmaker%5D%5B0%5D%5B%5D=ホンダ&cftsearch%5Bmodel%5D%5B0%5D%5B%5D=&cftsearch%5Bvalue%5D%5B1%5D%5B%5D=&cftsearch%5Bvalue%5D%5B2%5D%5B%5D=&cftsearch%5Byear%5D%5B1%5D%5B%5D=&cftsearch%5Byear%5D%5B2%5D%5B%5D=&cftsearch%5Bdistance%5D%5B1%5D%5B%5D=&cftsearch%5Bdistance%5D%5B2%5D%5B%5D=&cftsearch%5Bcar-name%5D%5B0%5D%5B%5D=&cftsearch%5Bcolor%5D%5B0%5D%5B%5D=&cftsearch_submit=1" title="ホンダの中古車" class="makerBtn">
                                <span class="makerLogo maker--HO"></span>
                                <div class="makerBtn__txt">ホンダ</div>
                            </a>

                            <a href="?STID=CS210610&cftsearch%5Bmaker%5D%5B0%5D%5B%5D=マツダ&cftsearch%5Bmodel%5D%5B0%5D%5B%5D=&cftsearch%5Bvalue%5D%5B1%5D%5B%5D=&cftsearch%5Bvalue%5D%5B2%5D%5B%5D=&cftsearch%5Byear%5D%5B1%5D%5B%5D=&cftsearch%5Byear%5D%5B2%5D%5B%5D=&cftsearch%5Bdistance%5D%5B1%5D%5B%5D=&cftsearch%5Bdistance%5D%5B2%5D%5B%5D=&cftsearch%5Bcar-name%5D%5B0%5D%5B%5D=&cftsearch%5Bcolor%5D%5B0%5D%5B%5D=&cftsearch_submit=1" title="マツダの中古車" class="makerBtn">
                                <span class="makerLogo maker--MA"></span>
                                <div class="makerBtn__txt">マツダ</div>
                            </a>

                            <a href="?STID=CS210610&cftsearch%5Bmaker%5D%5B0%5D%5B%5D=スズキ&cftsearch%5Bmodel%5D%5B0%5D%5B%5D=&cftsearch%5Bvalue%5D%5B1%5D%5B%5D=&cftsearch%5Bvalue%5D%5B2%5D%5B%5D=&cftsearch%5Byear%5D%5B1%5D%5B%5D=&cftsearch%5Byear%5D%5B2%5D%5B%5D=&cftsearch%5Bdistance%5D%5B1%5D%5B%5D=&cftsearch%5Bdistance%5D%5B2%5D%5B%5D=&cftsearch%5Bcar-name%5D%5B0%5D%5B%5D=&cftsearch%5Bcolor%5D%5B0%5D%5B%5D=&cftsearch_submit=1" title="スズキの中古車" class="makerBtn">
                                <span class="makerLogo maker--SZ"></span>
                                <div class="makerBtn__txt">スズキ</div>
                            </a>

                            <a href="?STID=CS210610&cftsearch%5Bmaker%5D%5B0%5D%5B%5D=三菱&cftsearch%5Bmodel%5D%5B0%5D%5B%5D=&cftsearch%5Bvalue%5D%5B1%5D%5B%5D=&cftsearch%5Bvalue%5D%5B2%5D%5B%5D=&cftsearch%5Byear%5D%5B1%5D%5B%5D=&cftsearch%5Byear%5D%5B2%5D%5B%5D=&cftsearch%5Bdistance%5D%5B1%5D%5B%5D=&cftsearch%5Bdistance%5D%5B2%5D%5B%5D=&cftsearch%5Bcar-name%5D%5B0%5D%5B%5D=&cftsearch%5Bcolor%5D%5B0%5D%5B%5D=&cftsearch_submit=1" title="三菱の中古車" class="makerBtn">
                                <span class="makerLogo maker--MI"></span>
                                <div class="makerBtn__txt">三菱</div>
                            </a>

                            <a href="?STID=CS210610&cftsearch%5Bmaker%5D%5B0%5D%5B%5D=ダイハツ&cftsearch%5Bmodel%5D%5B0%5D%5B%5D=&cftsearch%5Bvalue%5D%5B1%5D%5B%5D=&cftsearch%5Bvalue%5D%5B2%5D%5B%5D=&cftsearch%5Byear%5D%5B1%5D%5B%5D=&cftsearch%5Byear%5D%5B2%5D%5B%5D=&cftsearch%5Bdistance%5D%5B1%5D%5B%5D=&cftsearch%5Bdistance%5D%5B2%5D%5B%5D=&cftsearch%5Bcar-name%5D%5B0%5D%5B%5D=&cftsearch%5Bcolor%5D%5B0%5D%5B%5D=&cftsearch_submit=1" title="ダイハツの中古車" class="makerBtn">
                                <span class="makerLogo maker--DA"></span>
                                <div class="makerBtn__txt">ダイハツ</div>
                            </a>
                       </div>
                        </section>
                        </div>
                </div>
                
            </div>
            <div class="block" style="display:none;">
                <h2>
                    <img src="<?php bloginfo("template_url"); ?>/dist/img/search_bodytype.png" alt="ボディタイプで探す">
                </h2>
                <div class="l-wrap">
                    <div class="row">
                    <img src="<?php bloginfo("template_url"); ?>/dist/img/body_type1.png" alt="">
                    </div>
                    <div class="row">
                    <img src="<?php bloginfo("template_url"); ?>/dist/img/body_type2.png" alt="">
                    </div>
                    <div class="row">
                    <img style="
    width: 345px;
" src="<?php bloginfo("template_url"); ?>/dist/img/body_type3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-3" style="margin-top:30px;">
        </div>
        </div>
        <a href="./">
        <img style="margin-top: 40px;" src="http://dev2.hardunity.com/wp-content/uploads/2015/10/guidefortukuba.png" alt="ガイド">
        </a>
        <div id="p3">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-sx-12" id="popular_tukuba">
                        <h2>
                            <img src="<?php bloginfo("url") ?>/wp-content/uploads/2015/09/筑波大生人気中古車ランキング.png" alt="筑波大生人気中古車ランキング">
                        </h2>
                        <ul>
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                        </ul>
                    </div>
                    <h2>            
                        <img src="<?php bloginfo("template_url"); ?>/dist/img/area_select.png" alt="">
                    </h2>
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
                    <div class="tab_menu_block_1">
                        <div id="fixedTableArea" style="position:relative;z-index:11;height:100%;">
                            <div id="fixedBlock" class="fixedBlock--bknAll" style="z-index: 101; display: none; position: absolute; top: 0px; left: 0px;">
                                <div id="fav_sub" class="l-wrap mb10">
                                    <div class="l-box">
                                        <b class="numXXL va-mid">4</b><span class="txt va-btm">台</span>
                                    </div>
                                    <div class="l-box txt-r va-mid">
                                        <button id="chgJoken" class="btn btn--search btn--small" style="padding:0 15px;" onclick="setLog('');return false;">検索条件変更</button>
                                    </div>
                                </div>
                            </div>
                            <div id="sortTable">
                                <table class="sortTbl">
                                    <tbody id="sortArea">
                                        <tr>
                                            <th width="130" rowspan="2" class="va-btm prev_sort"><a id="sort_0" href="javascript:void(0)">元の並び順に戻す</a></th>
                                            <th width="120" class="txt-l">新着順</th>
                                            <th width="215">本体価格</th>
                                            <th width="215">支払総額 <a href="http://www.carsensor.net/help/CS/help_sougaku.html" class="js_questionSingle" title="クリックすると説明が表示されます"><i class="icon icon_help"></i></a></th>
                                            <th width="60">年式</th>
                                            <th width="60">走行距離</th>
                                            <th width="60">排気量</th>
                                            <th width="60">車検<a href="http://www.carsensor.net/help/CS/help_syaken.html" class="js_questionSingle" title="クリックすると説明が表示されます"><i class="icon icon_help"></i></a></th>
                                            <th width="60">修復歴</th>
                                        </tr>
                                        <tr>
                                            <input id="sort_url" value="/usedcar/freeword/A%E3%82%AF%E3%83%A9%E3%82%B9+A170+%E3%82%A2%E3%83%90%E3%83%B3%E3%82%AE%E3%83%A3%E3%83%AB%E3%83%89+%E3%83%AA%E3%83%9F%E3%83%86%E3%83%83%E3%83%89+HID/index.html" type="hidden">
                                            <td class="txt-l"><a id="sort_19" href="javascript:void(0)">新</a>｜<a id="sort_20" href="javascript:void(0)">古</a></td>
                                            <td><a id="sort_2" href="javascript:void(0)">安</a>｜<a id="sort_1" href="javascript:void(0)">高</a></td>
                                            <td><a id="sort_22" href="javascript:void(0)">安</a>｜<a id="sort_21" href="javascript:void(0)">高</a></td>
                                            <td><a id="sort_3" href="javascript:void(0)">新</a>｜<a id="sort_4" href="javascript:void(0)">古</a></td>
                                            <td><a id="sort_5" href="javascript:void(0)">多</a>｜<a id="sort_6" href="javascript:void(0)">少</a></td>
                                            <td><a id="sort_23" href="javascript:void(0)">多</a>｜<a id="sort_24" href="javascript:void(0)">少</a></td>
                                            <td><a id="sort_11" href="javascript:void(0)">付</a>｜<a id="sort_12" href="javascript:void(0)">無</a></td>
                                            <td><a id="sort_13" href="javascript:void(0)">無</a>｜<a id="sort_14" href="javascript:void(0)">有</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

			    <div id="bukkenCas">
<?php 
$fuel_array = array(
	1 => 160,
	2 => 480,
	3 => 1600
);
for($k = 1; $k < 4; $k++){ ?>
<div id="tab-contents-<?php echo $k ?>">
<?php
query_posts('posyt_type=post&orderby=title&posts_per_page=8&paged='.$paged);
?>
     <?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
<?php
$user_id = $post->post_author;
$address = get_user_meta($user_id, "address", true);
$present = get_user_meta($user_id, "present", true);
$user_info = get_userdata($user_id);
?>

                                <div class="caset caset--bkn js_listTableCassette blockLink">
                                    <div class="l-wrap caset--bkn__line1">
                                        <div class="l-box caset--bkn__mainImgBox">
                                        <a href="<?php the_permalink(); ?>" class="" target="_blank">
                                        <img src="<?php 
 $imgs = get_post_meta($post->ID, "imgList", true); 
$images = explode(",", $imgs);
echo $images[0];

?>" width="160" height="120" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="js_lazy" style="display: inline;"></a>
                                        </div>
                                        <div class="l-gutter10"></div>
                                        <div class="l-box caset--bkn__mainInfo">
                                            <div class="l-wrap caset--bkn__maker_label">
                                                <div class="l-box caset--bkn__maker va-mid">
                                                    <span class="subTxt"><?php echo get_post_meta($post->ID, "model", true); ?></span>
                                                </div>
                                                <div class="l-box txt-r">
                                                </div>
                                            </div>

                                            <h3 class="hd2nd mb0 lh12">
					    <a href="<?php the_permalink(); ?>" class="js_mpjump_OUTKBN=1&amp;BKKN=CU3715581854&amp;HANCD=U&amp;HJNCD=309094&amp;MADCD=001&amp;KNCD1=Ba3" target="_blank"><?php the_title(); ?></a>
					    <?php if($present){ ?><p class="present"><?php echo $present ?></p><?php } ?>
                                            </h3>
                                            <p class="barTxts subTxt">
<?php 
$options = explode(",", get_post_meta($post->ID, "option", true));
$i = 0;
foreach($options as $option){
    $i ++;
    if($i == 8) break;
    echo "<span>".$option. "</span>";
}
?>
                                            </p>
                                        </div>

                                        <div class="l-gutter10"></div>
                                        <div class="l-box caset--bkn__spec">
                                            <table class="caset--bkn__specTbl">
                                                <tbody><tr>
                                                <td><span class="numM"><?php echo $year=get_post_meta($post->ID,'year',true); ?></span><br><?php changeYear($year); ?></td>
                                                <td><span class="numM"><?php echo get_post_meta($post->ID,'distance',true); ?></span><br>万km</td>
                                                <td><span class="numM"><?php echo get_post_meta($post->ID,'displacement',true); ?></span><br>cc</td>
                                                        <!-- <td><span class="numM">2017</span><br>（H29）<br>年01月</td> -->
                                                        <td>
                                                        修復歴<br><?php 
echo get_post_meta($post->ID, "fix-history", true); ?>
                                                        </td>
                                                    </tr>
                                            </tbody></table>
                                        </div>
                                    </div>
                                    <div class="l-wrap caset--bkn__line2">
                                        <div class="l-box caset--bkn__miniImgs">
                                            <div class="">
                                                    <p class="price price--big">
						    維持費<span style="color:red;font-size:18px;"><?php 
if(get_post_meta($post->ID, "is_goo", true)){
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
$fuel = (130*$fuel_array[$k])/$fuel;
echo $fuel = number_format($fuel);?></span>円/月
                                                    </p>
                                            </div>
                                        </div>
                                        <div class="l-gutter10"></div>
                                        <div class="l-box caset--bkn__prices">
                                            <div class="l-wrap--fixed caset--bkn__priceBox">
                                                <div class="l-box caset--bkn__priceBox__hontai">
                                                    <p class="price price--big">
                                                    本体価格<span class="numXXL price--hontai"><?php $value=get_post_meta($post->ID,'value',true); valueFont($value); ?></span>万円
                                                    </p>
                                                </div>
                                                <div class="l-box caset--bkn__priceBox__sougaku">
                                                    <p class="price price--big">
                                                    支払総額<b class="numXXL"><?php $value=get_post_meta($post->ID,'sum-value',true); valueFont($value); ?></b>万円</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="l-gutter10"></div>
                                        <div class="l-box caset--bkn__btns">
                                        <button class="btn btn--inq btn--inq--tate btn--big--caset js_inq" onclick="location.href='<?php the_permalink(); ?>#contact_form'; return false;"><span class="btn--inq--tate__cap">無<br>料</span>在庫確認・見積依頼</button>
                                        </div>
                                    </div>

                                    <div class="caset__btm">
                                        <div class="l-wrap">
                                            <div class="l-box caset--bkn__area">
<?php echo $address; ?>            
</div>
                                            <div class="l-box caset--bkn__shopInfo">

                                                <div class="l-wrap caset--bkn__shopInfoLine">
                                                    <div class="l-box va-mid">
                                                    <p class="txt js_shop">
<a href="<?php echo get_post_meta($post->ID, "shop_url", true); ?>" title="" class="js_mpjump_OUTKBN=1&amp;BKKN=CU3715581854&amp;HANCD=U&amp;HJNCD=309094&amp;MADCD=001&amp;KNCD1=Ba4"><?php echo $user_info->first_name; ?></a></p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="l-gutter10"></div>
                                            <div class="l-box  caset--bkn__shopInfo--kakudai">
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.caset -->
                                <?php endwhile; ?><?php else : ?>
                                <?php endif; wp_reset_query(); ?>

</div><!-- /#tab-contents-<?php echo $i ?> -->
<?php } ?>

<?php wp_pagenavi(); ?>
                            </div>

                        </div>

                    </div><!-- aa -->
                </div>
            </div>
        </div>
    </div> <!-- /container -->

<?php get_footer(""); ?>
