<?php get_header(); ?>
<style>
    #top-main{
        text-align:left;
    }
</style>
        <div class="row" id="top-main">
            <div class="col-xs-12">
                <article class="l-mainColumn2">

      <div id="listTitle">
        <h2 class="hd2nd mb10">中古車一覧</h2>
      </div>



<div class="panel panel--bknAll">

<form id="panelForm" method="get" action="/">
<input type="hidden" name="post_type" value="post">
          
  <table class="tbl tbl--panel mb20">
    <tbody>
    <tr style="height: 35px;">
      <th><p class="lh12">メーカー</p></th>
      <td style="width:130px;">

<select name="cftsearch[maker][0][]">
<?php 
$maker_array = array(
	"トヨタ",
	"日産",
	"ホンダ",
	"マツダ",
	"スズキ",
	"三菱",
	"ダイハツ"
);
foreach($maker_array as $maker){ ?>
	<option value="<?php echo $maker; ?>"><?php echo $maker; ?></option>
<?php } ?>
</select>
      </td>
      <th><p class="lh12">モデル・<br>グレード</p></th>
      <td style="width:130px;">
<select name="cftsearch[model][0][">
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
      <td rowspan="2">
        <table class="tbl tbl--panel mb20">
          <tbody><tr>
            <th>価格</th>
            <td class="va-mid">
<select name="cftsearch[value][1][]"><option value=""></option><option value="0">下限なし</option>
<option value="50">50万円</option>
<option value="100">100万円</option>
<option value="200">200万円</option>
<option value="250">250万円</option>
<option value="10000">上限なし</option>
</select>
〜
<select name="cftsearch[value][2][]"><option value=""></option><option value="0">下限なし</option>
<option value="50">50万円</option>
<option value="100">100万円</option>
<option value="200">200万円</option>
<option value="250">250万円</option>
<option value="10000">上限なし</option>
</select>
            </td>
          </tr>
          <tr>
            <th>年式</th>
            <td class="va-mid">
<select name="cftsearch[year][1][]"><option value=""></option><option value="1">下限なし</option>
<option value="1990">1990年</option>
<option value="1991">1991年</option>
<option value="1992">1992年</option>
<option value="1993">1993年</option>
<option value="1994">1994年</option>
<option value="1995">1995年</option>
<option value="1996">1996年</option>
<option value="1997">1997年</option>
<option value="1998">1998年</option>
<option value="1999">1999年</option>
<option value="2000">2000年</option>
<option value="2001">2001年</option>
<option value="2002">2002年</option>
<option value="2003">2003年</option>
<option value="2004">2004年</option>
<option value="2005">2005年</option>
<option value="2006">2006年</option>
<option value="2007">2007年</option>
<option value="2008">2008年</option>
<option value="2009">2009年</option>
<option value="2010">2010年</option>
<option value="2011">2011年</option>
<option value="2012">2012年</option>
<option value="2013">2013年</option>
<option value="2014">2014年</option>
<option value="2015">2015年</option>
<option value="2020">上限なし</option>
</select>
〜
<select name="cftsearch[year][2][]"><option value=""></option><option value="1">下限なし</option>
<option value="1990">1990年</option>
<option value="1991">1991年</option>
<option value="1992">1992年</option>
<option value="1993">1993年</option>
<option value="1994">1994年</option>
<option value="1995">1995年</option>
<option value="1996">1996年</option>
<option value="1997">1997年</option>
<option value="1998">1998年</option>
<option value="1999">1999年</option>
<option value="2000">2000年</option>
<option value="2001">2001年</option>
<option value="2002">2002年</option>
<option value="2003">2003年</option>
<option value="2004">2004年</option>
<option value="2005">2005年</option>
<option value="2006">2006年</option>
<option value="2007">2007年</option>
<option value="2008">2008年</option>
<option value="2009">2009年</option>
<option value="2010">2010年</option>
<option value="2011">2011年</option>
<option value="2012">2012年</option>
<option value="2013">2013年</option>
<option value="2014">2014年</option>
<option value="2015">2015年</option>
<option value="2020">上限なし</option>
</select>                  
            </td>
          </tr>
          <tr>
            <th>走行距離</th>
            <td class="va-mid">
<select name="cftsearch[distance][1][]"><option value=""></option><option value="0">下限なし</option>
<option value="0.5">5000km</option>
<option value="1">1万km</option>
<option value="2">2万km</option>
<option value="3">3万km</option>
<option value="4">4万km</option>
<option value="5">5万km</option>
<option value="6">6万km</option>
<option value="7">7万km</option>
<option value="8">8万km</option>
<option value="9">9万km</option>
<option value="10">10万km</option>
<option value="1000">上限なし</option>
</select>
〜 
<select name="cftsearch[distance][2][]"><option value=""></option><option value="0">下限なし</option>
<option value="0.5">5000km</option>
<option value="1">1万km</option>
<option value="2">2万km</option>
<option value="3">3万km</option>
<option value="4">4万km</option>
<option value="5">5万km</option>
<option value="6">6万km</option>
<option value="7">7万km</option>
<option value="8">8万km</option>
<option value="9">9万km</option>
<option value="10">10万km</option>
<option value="1000">上限なし</option>
</select>              
            </td>
          </tr>
        </tbody></table>
      </td>
      <td rowspan="3">
        <span class="panel__ttl w60">ミッション</span>
        <span class="checkUnit">
          <label for="chkSlstAt"><input type="checkbox" name="cftsearch[mission][0][]" value="AT/CVT">AT/CVT</label>&nbsp;
          <label for="chkSlstMt"><input type="checkbox" name="cftsearch[mission][0][]" value="MT">MT</label>
        </span>
      <div class="l-wrap">
        <div class="l-box">
          <p class="checkUnit"><label><input type="checkbox" name="cftsearch[mission][0][]" value="新着物件">新着物件</label></p>
          <p class="checkUnit"><label><input type="checkbox" name="cftsearch[mission][0][]" value="支払総額あり">支払総額あり</label></p>
          <p class="checkUnit"><label><input type="checkbox" name="cftsearch[mission][0][]" value="修復歴なし">修復歴なし</label></p>
        </div>
        <div class="l-box">
          <p class="checkUnit"><label><input type="checkbox" name="cftsearch[mission][0][]" value="新車物件">新車物件</label></p>
          <p class="checkUnit"><label><input type="checkbox" name="cftsearch[mission][0][]" value="メーカ系販売店">メーカー系販売店</label></p>
          <p class="checkUnit"><label><input type="checkbox" name="cftsearch[mission][0][]" value="クーポン付き">クーポン付き</label></p>
          <p class="checkUnit"><label><input type="checkbox" name="cftsearch[mission][0][]" value="購入プラン付き">購入プラン付き</label></p>
          </div>
        </div>
      </td>
    </tr>
    <tr style="display:none;">
        <th><p class="lh12">車名</p></th>
      <td style="width:130px;">
        <input type="text" name="cftsearch[car-name][0][]" value="">        
      </td>
    </tr>

    </tr>
    <tr id="clselecters">
      <th class="va-mid">本体色</th>
      <td colspan="4" class="va-mid">
        <div class="colorTipsBlock">
<input type="text" name="cftsearch[color][0][]" value="">
        </div>
      </td>
    </tr>
  </tbody></table>


  <div class="l-wrap" style="margin-top: -50px;padding-right: 40px;">
    <div class="l-box va-mid">
    </div>
    <div class="l-box txt-r">
      <button id="rest" class="btn btn--funcL2 btn--big">条件クリア</button>
      <input type="submit" value="検索" class="cftsearch_submit">
      <input type="hidden" name="cftsearch_submit" value="1">
    </div>
  </div>

</form>
</div>

<script type="text/javascript">
<!--

$('#subArea').removeClass("is-on").addClass("is-off");
$(function(){spbl.base.init({"brandShashuNames":[],"fmcGradeNames":[],"areaNames":[],"cityNames":[]},'U1RJRD1DUzIxMDYxMA==')});

// -->
</script>


  <div class="bknAll_summary_basic mb20">
 </div><!-- /.bknAll_summary_basic -->

  <div class="resultBar l-wrap">
      <div class="resultBar__numBox l-box" itemscope="" itemtype="http://schema.org/AggregateOffer">
        <b class="numXXL va-mid" itemprop="offerCount"></b>
      <span class="txt va-btm"></span>
    </div><!-- /.resultBar__numBox -->

    <div class="resultBar__paging l-box">
      <div class="resultBar__btns">
              </div><!-- /.resultBar__btns -->

      <div class="paging">
        <button class="btn btn--funcL2 btn--small w100 btn--disable" disabled="">前へ</button>
        <button class="btn btn--funcL2 btn--small w100" onclick="location.href='/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=2';return false;">次へ</button>
      </div><!-- /.paging -->
      <div class="paging">
<?php /*
          <span class="paging__first">最初</span>
                <b>1</b>
                  <a href="/usedcar/page/2">2</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=3">3</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=4">4</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=5">5</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=6">6</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=7">7</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=8">8</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=9">9</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=10">10</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=11455" class="paging__last">最後</a>
<?php */ ?>
        </div><!-- /.paging -->
    </div><!-- /.resultBar__paging -->
  </div><!-- /.resultBar -->


  <div id="fixedTableArea" style="position:relative;z-index:11;height:100%;">
    <div id="fixedBlock" class="fixedBlock--bknAll" style="z-index: 101; display: none; position: absolute; top: 0px; left: 0px;">
      <div id="fav_sub" class="l-wrap mb10">
        <div class="l-box">
<h2><?php echo $s; ?>の検索結果 : <?php echo $wp_query->found_posts; ?>件</h2>
        </div>
        <div class="l-box txt-r va-mid">
          <button id="chgJoken" class="btn btn--search btn--small" style="padding:0 15px;" onclick="setLog('');return false;">検索条件変更</button>
        </div>
      </div>
    </div>
    <div id="sortTable" style="z-index: 100; position: absolute; top: 0px; left: 0px;">
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
            <input id="sort_url" value="/usedcar/index.html" type="hidden">
            <td class="txt-l"><a id="sort_19" href="javascript:void(0)">新</a>｜<a id="sort_20" href="javascript:void(0)">古</a></td>

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

    <div id="bukkenCas" style="padding-top:66px;position:relative;height:100%;">
        <?php 
query_posts( array(
    's' => $s,
    'posyt_type'=>'post',
    'posts_per_page'=>'8'
    )
);

         if (have_posts()) : ?>
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
    if(get_post_meta($post->ID, "is_goo")){
	    $fuel=get_post_meta($post->ID,'fuel',true) * 4;
		if(!$fuel || $fuel=="-"){
			$fuel = 12;
		}

    }else{
        $fuel=get_post_meta($post->ID,'fuel',true); 
        if(!$fuel){
            $fuel = 12;
        }
    }
$fuel = (130*480)/$fuel;
echo number_format($fuel);
?></span>円/月
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
<?php
$user_id = $post->post_author;
$address = get_user_meta($user_id, "address", true);
$user_info = get_userdata($user_id);

?>
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
検索結果がありません
            <?php endif; ?>
<?php wp_pagenavi(); ?>

    </div>
</div>

<?php /*
  <div id="favPop_msg" class="float__box float__box--fukidashi" style="display:none;" onmouseover="favPopIn2();" onmouseout="favPopOut2();">
    <p class="txt mb10">後で<b>「お気に入り画面」</b>で<br>じっくり比較検討できます！</p> 
    <p class="subTxt txt-r"><a href="javascript:void(0)" onclick="favPopNoDispClick();">今後、表示させない</a></p>
  <div class="fukidashi__btm"></div>
  </div>
*/ ?>
<!-- ↓inc＆info -->
<!-- ↑inc＆info -->



</div>

  </article>
            </div>
        </div>
    </div> <!-- /container -->
    <?php get_footer(); ?>
