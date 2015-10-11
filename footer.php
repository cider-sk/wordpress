<div id="footer">
<a href="http://tsukucar.com/toriyose/">
<img src="<?php bloginfo("url"); ?>/wp-content/uploads/2015/09/最大15社から！.png" alt="" class="footer_baner" />
</a>
<div class="footer_row">
<div class="footer_logo">
<a href="http://tsukuba-daigaku.com/"><img src="<?php bloginfo("template_url"); ?>/dist/img/tukuie-logo.png" alt=""></a>
</div>
<div class="footer_logo">
<a href="http://tsukubaito.com/"><img src="<?php bloginfo("template_url"); ?>/dist/img/tukubaito-logo.png" alt=""></a>
</div>
<div class="footer_logo">
<a href="http://offer.tsukucari.com/" target="_blank">
<img src="<?php bloginfo("template_url"); ?>/dist/img/tukukyari-logo.png" />
</a>
</div>

<div class="footer_logo">
<a href="/">
<img src="<?php bloginfo("template_url"); ?>/dist/img/logo.png" alt="">
</a>
</div>
</div>

<p class="copy_right">&copy;2015<span>CRONO FACTORY, Inc.</span> inc. ALL RIGHT RESERVED</p>
    </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index:10000;">
  <div class="modal-dialog" role="document">
    <div class="" style="">
<div class="modal__inner">
      <header class="modal__header">
        <h2 class="modal__ttl">メーカー車名選択<span class="subTxt">メーカーをまたいで複数選択が可能です。(最大10件まで)</span></h2>
      </header>
      <div class="js_modelBody">
        <div class="modal__body--car">
          <div class="l-wrap">
            <div class="l-box modal__list--maker">
              <h3 class="hd3rd">メーカー選択</h3>
              <div class="modal__scrollBox">
                <dl class="modal__list">
                  <dt class="modal__list__ttl"><b class="fontXL">国産中古車</b></dt>
<?php
//親のカテゴリー
	global $wpdb;
	$makers = $wpdb->get_results( 
        "
SELECT * 
FROM  `wp_term_taxonomy` 
LEFT JOIN wp_terms ON  `wp_term_taxonomy`.term_id = wp_terms.term_id
WHERE count =0
AND parent =0
		"
    );
    $i = 0;
foreach($makers as $maker){
?>
    <dd><a href="#" class="modal__select modal__select--maker js_makerMenu" onclick="" id="maker<?php echo $maker->term_id ?>" title="<?php echo $maker->name ?>"><?php echo $maker->name ?><span class="linkNo"></span></a></dd>
<?php } 
?>
                   </dl>
              </div><!-- /.modal__scrollBox -->
            </div><!-- /.l-box -->
            <div class="l-box modal__list--car">
              <h3 class="hd3rd">車名選択<span class="hd2nd__subTxt" id="nameListTitle">台数上位250車名</span></h3>
              <div class="modal__scrollBox" id="nameListWrapper">
                <div id="nList1" style="display:none">
                </div>
                <div id="nList2">
                  <dl class="modal__list" id="nameList">
                  <dt id="alphaLine" class="modal__list__ttl">モデル・グレード</dt>
<?php
foreach($makers as $maker){
?>
<div id="model_view_<?php echo $maker->term_id ?>" class="model_view" style="display:none">
<?php
	$models = $wpdb->get_results( 
        "
SELECT * 
FROM  `wp_term_taxonomy` 
LEFT JOIN wp_terms ON  `wp_term_taxonomy`.term_id = wp_terms.term_id
WHERE count =0
AND parent = $maker->term_id
		"
    );
    $i = 0;
foreach ( $models as $model ) 
{
    $i ++;
?>
                    <dd>
                    <label class="l-wrap modal__select" for="chk1alphaLine<?php echo $i; ?>">
                      <span class="l-box modal__select__check"><input type="checkbox" class="f-check js_CB1" name="carcchk" value="<?php echo $model->name; ?>" id="chk1alphaLine<?php echo $i; ?>"></span>
                      <span class="l-box modal__select__name"><span class="js_s_name"><?php echo $model->name; ?></span><span class="linkNo"></span></span>
                    </label>
                  </dd>
<?php } ?>
</div>
<?php } ?>
                </dl>
                </div>
              </div><!-- /.modal__scrollBox -->
            </div><!-- /.l-box -->
          </div>
        </div>

        <div class="modal__terms l-wrap">
          <div class="modal__terms__ttl l-box">
            <p class="txt"><b class="numXXL" id="selectedShashuCount">0</b>/<span class="numS">10</span>件選択中</p>
          </div>
          <div class="modal__terms__list l-box">
            <p class="lh15" id="selectedCars"></p>
          </div>
        </div>

        <div class="modal__btns l-wrap">
          <div class="l-box">
    <div class="l-box txt-r">
      <button id="rest2" class="btn btn--funcL2 btn--big">条件クリア</button>
      <input type="hidden" name="cftsearch_submit" value="1">
    </div>
          </div><!-- /.l-box -->
          <div class="l-box txt-c">
            <button   data-dismiss="modal" class="btn btn--search btn--middle" onclick="return spbl.tb.shashu.set();return false;"><span class="btn__txt--small">チェックしたメーカーの</span><span class="btn__txt--big">中古車を検索する</span></button>
          </div><!-- /.l-box -->
        </div>
      </div>
    </div>
    </div>
  </div>
</div>


        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo("template_url"); ?>/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php bloginfo("template_url"); ?>/assets/js/ie10-viewport-bug-workaround.js"></script>

<script>
$(function(){
    $("#left-img").click(function(){
        $(".tab_menu img").attr('src','<?php bloginfo("url"); ?>/wp-content/uploads/2015/09/left-check.png');
        $("#tab-contents-1").show();
        $("#tab-contents-2").hide();
        $("#tab-contents-3").hide();
    });
    $("#middle-img").click(function(){
        $(".tab_menu img").attr('src','<?php bloginfo("url"); ?>/wp-content/uploads/2015/09/middle-check-1.png');
        $("#tab-contents-1").hide();
        $("#tab-contents-2").show();
        $("#tab-contents-3").hide();
    });
    $("#right-img").click(function(){
        $(".tab_menu img").attr('src','<?php bloginfo("url"); ?>/wp-content/uploads/2015/09/right-check-1.png');
        $("#tab-contents-1").hide();
        $("#tab-contents-2").hide();
        $("#tab-contents-3").show();
    });
    
    $(".modal__select").click(function(){
        if($(this).attr("title")){
            if($("#maker_select").html().match(/選択する/)){
                $("#maker_select").html("");
            }
            $(this).addClass("is-selected");

            $("#maker_select").append("<li>" + $(this).attr("title") + "</li>");
            $("#maker_select").append('<input type="hidden" name="cftsearch[maker][0][]" value="' + $(this).attr("title") + '">');
        }
    });
    
    $("#rest").click(function(){
        $("#maker_select").html('<a class="btn btn--funcL2 btn--small w100 mb20 js_thickBtn" id="shashuAnc" href=""  data-toggle="modal" data-target="#myModal" title="選択する">選択する</a>');
        $("#model_select").html('<a class="btn btn--funcL2 btn--small w100 mb20 js_thickBtn" id="shashuAnc" href=""  data-toggle="modal" data-target="#myModal" title="選択する">選択する</a>');
        $(".modal__select").removeClass("is-selected");
    });

     $("#rest2").click(function(){
        $("#maker_select").html('<a class="btn btn--funcL2 btn--small w100 mb20 js_thickBtn" id="shashuAnc" href=""  data-toggle="modal" data-target="#myModal" title="選択する">選択する</a>');
        $("#model_select").html('<a class="btn btn--funcL2 btn--small w100 mb20 js_thickBtn" id="shashuAnc" href=""  data-toggle="modal" data-target="#myModal" title="選択する">選択する</a>');
        $(".modal__select").removeClass("is-selected");
    });

  
    <?php foreach($makers as $maker){ ?>
    $("#maker<?php echo $maker->term_id ?>").click(function(){
        $(".model_view").css("display", "none");
        $("#model_view_<?php echo $maker->term_id ?>").css("display", "block");
    });
    <?php } ?>
 
    
    $(".f-check").change(function(){
        //listに追加
        if($("#model_select").html().match(/選択する/)){
            $("#model_select").html("");
        }
        $("#model_select").append("<li>" + $(this).val() + "</li>");
        $("#model_select").append('<input type="hidden" name="cftsearch[model][0][]" value="' + $(this).val() + '">');
    });
    
    //contact form
    $(document).ready(function(){
        $("input[name='text-134']").val("<?php the_title(); ?>");
    });
    
});
</script>

<?php wp_footer(); ?>
  </body>
</html>
