<?php get_header(); ?>
        <div class="row" id="top-main">
            <div class="col-xs-12">
                <article class="l-mainColumn2">

      <div id="listTitle">
        <h2 class="hd2nd mb10">中古車一覧(全国)</h2>
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
        <b class="numXXL va-mid" itemprop="offerCount">343,628</b>
      <span class="txt va-btm">台</span>
    </div><!-- /.resultBar__numBox -->

    <div class="resultBar__paging l-box">
      <div class="resultBar__btns">
    </div><!-- /.resultBar__btns -->

      <div class="paging">
        <button class="btn btn--funcL2 btn--small w100 btn--disable" disabled="">前へ</button>
        <button class="btn btn--funcL2 btn--small w100" onclick="location.href='/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=2';return false;">次へ</button>
      </div><!-- /.paging -->
      <div class="paging">
          <span class="paging__first">最初</span>
                <b>1</b>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=2">2</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=3">3</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=4">4</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=5">5</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=6">6</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=7">7</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=8">8</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=9">9</a>
                  <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=10">10</a>
                <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=11455" class="paging__last">最後</a>
        </div><!-- /.paging -->
    </div><!-- /.resultBar__paging -->
  </div><!-- /.resultBar -->


  <div id="fixedTableArea" style="position:relative;z-index:11;height:100%;">
    <div id="fixedBlock" class="fixedBlock--bknAll" style="z-index: 101; display: none; position: absolute; top: 0px; left: 0px;">
      <div id="fav_sub" class="l-wrap mb10">
        <div class="l-box">
          <b class="numXXL va-mid">343,628</b><span class="txt va-btm">台</span>
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
        <div class="caset caset--bkn js_listTableCassette blockLink">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
            <div class="l-wrap caset--bkn__line1">
                <div class="l-box caset--bkn__mainImgBox">
                    <a href="/usedcar/detail/CU3715581854/index.html?TRCD=200002" class="js_mpjump_OUTKBN=1&amp;BKKN=CU3715581854&amp;HANCD=U&amp;HJNCD=309094&amp;MADCD=001&amp;KNCD1=Ba2" target="_blank"><img src="http://ccsrpcma.carsensor.net/CSphoto/bkkn/345/254/U00015345254/U00015345254_001M.JPG" width="160" height="120" data-original="http://ccsrpcma.carsensor.net/CSphoto/bkkn/345/254/U00015345254/U00015345254_001M.JPG" alt="メルセデス・ベンツ&nbsp;Aクラス&nbsp;A170 アバンギャルド リミテッド&nbsp;HID" title="メルセデス・ベンツ&nbsp;Aクラス&nbsp;A170 アバンギャルド リミテッド&nbsp;HID" class="js_lazy" style="display: inline;"></a>
                </div>
                <div class="l-gutter10"></div>
                <div class="l-box caset--bkn__mainInfo">
                    <div class="l-wrap caset--bkn__maker_label">
                        <div class="l-box caset--bkn__maker va-mid">
                            <span class="subTxt">メルセデス・ベンツ</span>
                        </div>
                        <div class="l-box txt-r">
                            <p class="label label--shopHosyo js_hBn">販売店保証</p>
                        </div>
                    </div>

                    <h3 class="hd2nd mb0 lh12">
                        <a href="/usedcar/detail/CU3715581854/index.html?TRCD=200002" class="js_mpjump_OUTKBN=1&amp;BKKN=CU3715581854&amp;HANCD=U&amp;HJNCD=309094&amp;MADCD=001&amp;KNCD1=Ba3" target="_blank">Aクラス&nbsp;A170 アバンギャルド リミテッド&nbsp;HID</a>
                    </h3>
                    <p class="barTxts subTxt">
                    <span>ハッチバック</span>
                    <span>フロアMTモード付CVT</span>
                    <span>白 <i class="colorTips colorTips--small colorTips--ccWH"></i></span>
                    <span>法定整備付</span>
                    <span>保証付</span>
                    </p>
                </div>

                <div class="l-gutter10"></div>
                <div class="l-box caset--bkn__spec">
                    <table class="caset--bkn__specTbl">
                        <tbody><tr>
                                <td><span class="numM">2005</span><br>(H17)</td>
                                <td><span class="numM">7</span><br>万km</td>
                                <td><span class="numM">1700</span><br>cc</td>
                                <!-- <td><span class="numM">2017</span><br>（H29）<br>年01月</td> -->
                                <td>2017(H29)年01月</td>
                                <td>修復歴<br>なし</td>
                            </tr>
                    </tbody></table>
                </div>
            </div>
            <div class="l-wrap caset--bkn__line2">
                <div class="l-box caset--bkn__miniImgs">
                    <div class="">
                        <p class="price price--big">
                        維持費<span style="color:red;font-size:18px;">8600</span>円/月
                        </p>
                    </div>
                </div>
                <div class="l-gutter10"></div>
                <div class="l-box caset--bkn__prices">
                    <div class="l-wrap--fixed caset--bkn__priceBox">
                        <div class="l-box caset--bkn__priceBox__hontai">
                            <p class="price price--big">
                            本体価格<span class="numXXL price--hontai">36<small>.9</small></span>万円
                            </p>
                        </div>
                        <div class="l-box caset--bkn__priceBox__sougaku">
                            <p class="price price--big">
                            支払総額<b class="numXXL">44<small>.9</small></b>万円                </p>
                        </div>
                    </div>
                </div>

                <div class="l-gutter10"></div>
                <div class="l-box caset--bkn__btns">
                    <p class="btn--zumi btn--zumi--caset btn--zumi--big js_addFavoriteAlready" id="CU3715581854_fav" style="display:none"><a href="/usedcar/mylist.php?STID=CS216001&amp;STBID=1" class="js_fav">お気に入り</a>に追加済</p>
                    <button class="btn btn--funcL1 btn--big--caset js_fav" onclick="favBtnClick('CU3715581854');Cs_FavUtil.add('CU3715581854', '', '', 'CU3715581854_btn', 'CU3715581854_fav');return false;" id="CU3715581854_btn" style="" onmouseover="favPopIn('CU3715581854');" onmouseout="favPopOut();">お気に入り追加</button>
                    <button class="btn btn--inq btn--inq--tate btn--big--caset js_inq" onclick="location.href='https://www.carsensor.net/usedcar/inquiry_mm.php?STID=CS211400&amp;BKKN=CU3715581854';return false;"><span class="btn--inq--tate__cap">無料</span>在庫確認・見積依頼</button>
                </div>
            </div>

            <div class="caset__btm">
                <div class="l-wrap">
                    <div class="l-box caset--bkn__area">
                        茨城県            </div>
                    <div class="l-box caset--bkn__shopInfo">

                        <div class="l-wrap caset--bkn__shopInfoLine">
                            <div class="l-box va-mid">
                                <p class="txt js_shop"><a href="http://www.carsensor.net/shop/ibaraki/309094001/?BKKN=CU3715581854" title="Ｂｅｎｚ　Ｔｅｓｔａｒ" class="js_mpjump_OUTKBN=1&amp;BKKN=CU3715581854&amp;HANCD=U&amp;HJNCD=309094&amp;MADCD=001&amp;KNCD1=Ba4">Ｂｅｎｚ　Ｔｅｓｔａｒ</a></p>
                            </div>
                            <div class="l-box w180 txt-r va-mid">
                                <p class="subTxt js_shop"><a href="http://www.carsensor.net/shop/ibaraki/309094001/review/?BKKN=CU3715581854" title="クチコミ評価：5点／3件">クチコミ評価： <b class="numS">5</b>点(<b class="numS">3</b>件)</a></p>
                            </div>
                        </div>

                    </div>
                    <div class="l-gutter10"></div>
                    <div class="l-box  caset--bkn__shopInfo--kakudai">
                    </div>
                </div>
            </div>

<?php endwhile; ?><?php else : ?>
<?php endif; ?>

        </div>
    </div>
</div>

  <div class="paging--btm txt-r mb40">
    <div class="paging">
        <span class="paging__first">最初</span>
              <b>1</b>
                <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=2">2</a>
                <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=3">3</a>
                <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=4">4</a>
                <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=5">5</a>
                <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=6">6</a>
                <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=7">7</a>
                <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=8">8</a>
                <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=9">9</a>
                <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=10">10</a>
              <a href="/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=11455" class="paging__last">最後</a>
        <button class="btn btn--funcL2 btn--small w100 btn--disable" disabled="">前へ</button> 
      <button class="btn btn--funcL2 btn--small w100" onclick="location.href='/usedcar/search.php?STID=CS210610&amp;AL=1&amp;PAGE=2';return false;">次へ</button>
    </div><!-- /.paging -->
  </div>
  <hr class="sep">



  <div id="helpHosho" class="float__box float__box--fukidashi" style="display:none;" onmouseover="helpOver();" onmouseout="helpOut();">
    <p class="txt mb10">保証の種類を表示しています</p>
    <p class="subTxt txt-r">
      <a id="aboutHosho" href="http://www.carsensor.net/help/CS/help_hosyo_syubetsu.html" title="クリックすると説明が表示されます">保証の種類について</a>
    </p>
    <div class="fukidashi__btm"></div>
  </div>
  <div id="favPop_msg" class="float__box float__box--fukidashi" style="display:none;" onmouseover="favPopIn2();" onmouseout="favPopOut2();">
    <p class="txt mb10">後で<b>「お気に入り画面」</b>で<br>じっくり比較検討できます！</p> 
    <p class="subTxt txt-r"><a href="javascript:void(0)" onclick="favPopNoDispClick();">今後、表示させない</a></p>
  <div class="fukidashi__btm"></div>
  </div>
<!-- ↓inc＆info -->
<!-- ↑inc＆info -->
  </article>
            </div>
        </div>
    </div> <!-- /container -->

    <div id="footer">

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
