<footer>

<a href="http://tsukucar.com/toriyose/">
	<img src="http://dev2.hardunity.com/wp-content/uploads/2015/09/最大15社から！.png" alt="" class="footer_baner" style="width:100%;"  />
</a>
<p class="copy-right">
&copy;2015<span>CRONO FACTORY, Inc.</span> inc. ALL RIGHT RESERVED
</p>
</footer>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index:10000;">
  <div class="modal-dialog" role="document">
    <div class="" style="">
    <div class="modal__inner">
<dl id="brandLst"><header class="pageHeader">
    <h1 class="pageTtl">メーカー選択</h1>
</header>
<? /*
<ul class="slideLinkL">
    <li>
        <a href="javascript:void(0);" class="ui-link">
            <div class="listTxtBox">
                <p class="main">すべてのメーカー</p>
            </div>
        </a>
    </li>
    </ul>
*/ ?>
<section>
    <h2 class="hdd2nd" id="JPN">中古車</h2>
    <ul class="slideLinkL">
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
<li>
<a href="javascript:void(0);" data-dismiss="modal" data-toggle="modal" data-target="#myModal<?php echo $maker->term_id ?>" class="ui-link" title="<?php echo $maker->name ?>">
        <div class="listTxtBox">
        <p class="main"><?php echo $maker->name ?></p>
        </div>
    </a>
</li>
<?php } ?>
</ul>
</section></dl>
    </div>
   </div>
  </div>
</div>

<?php foreach($makers as $maker){ ?>
<!-- Modal -->
<div class="modal fade myModalModel" id="myModal<?php echo $maker->term_id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index:10000;">
  <div class="modal-dialog" role="document">
    <div class="" style="">
    <div class="modal__inner">
<dl class="accordionList" id="nameList"><link rel="stylesheet" href="/smph/cmn/dcss/selectShashu.css">
<header class="pageHeader">
    <h1 class="pageTtl">レクサス(LEXUS)中古車</h1>
</header>
<div class="tabBox" data-role="content none">
<ul class="slideLinkL" style="clear:both;">
    <li>
        <a href="javascript:void(0);" class="ui-link" data-dismiss="modal">
            <div class="listTxtBox">
                <p class="main">の中古車すべて</p>
            </div>
        </a>
    </li>
</ul>
<section>
<h3 class="hdd3rd">人気車</h3>
<p class="uee"><a href="javascript:void(0);" rel="external" onclick="window.scroll(0,1);return false;" data-role="none">▲上へ戻る</a></p>
<ul class="slideLinkL">
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
<li>
<a href="javascript:void(0);" title="<?php echo $model->name; ?>" data-dismiss="modal" class="ui-link">
        <div class="listImgBox"><img style="display:none" src="http://www.carsensor.net/CSphoto/cat/LE/S003/LE_S003_F002_1.jpg" width="80" height="60" alt="<?php echo $model->name; ?>"></div>
        <div class="listTxtBox">
            <p class="main"><?php echo $model->name; ?></p>
        </div>
    </a>
</li>
<?php } ?>
</ul>
<p class="goTop"><a rel="external" href="javascript:void(0);" title="TOPへ" data-role="none" onclick="window.scroll(0,1);return false;">▲中古車から探すTOPへ</a></p>
</section>
</div>
</dl>
   </div>
  </div>
</div>
</div>

<?php } ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo("template_url"); ?>/dist-sp/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo("template_url"); ?>/dist/js/jquery.flexslider-min.js"></script>
    <script src="<?php bloginfo("template_url"); ?>/bootstrapSlideInMenu-1.0.0.min.js"></script>
    <script type="text/javascript" charset="UTF-8">
        $(document).ready(function() {
                $(document).SlideInMenu();
                });
            </script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 <script src="<?php bloginfo("template_url"); ?>/assets-sp/js/ie10-viewport-bug-workaround.js"></script>
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

    $("#menuBtn_sort1.open_sort").click(function(){
        $(".naviSortingArea").show();
        $("#menuBtn_sort1").removeClass("open_sort");
        $("#menuBtn_sort1").addClass("close_sort");
        $("#menuBtn_sort1").addClass("menuBtn_sort--off");
    });

    $("#makerTabId").click(function(){
        $(".tabBox--1").addClass("IS_open");
        $(".tabBox--1").removeClass("IS_close");
        $(".tabBox--2").removeClass("IS_open");
        $(".tabBox--2").addClass("IS_close");
        $(".tabBox--3").removeClass("IS_open");
        $(".tabBox--3").addClass("IS_close");
        $(".tabBtn--1").addClass("IS_open");
        $(".tabBtn--1").removeClass("IS_close");
        $(".tabBtn--2").removeClass("IS_open");
        $(".tabBtn--2").addClass("IS_close");
        $(".tabBtn--3").removeClass("IS_open");
        $(".tabBtn--3").addClass("IS_close");

    });
    $("#bodyTabId").click(function(){
        $(".tabBox--1").removeClass("IS_open");
        $(".tabBox--1").addClass("IS_close");
        $(".tabBox--2").addClass("IS_open");
        $(".tabBox--2").removeClass("IS_close");
        $(".tabBox--3").removeClass("IS_open");
        $(".tabBox--3").addClass("IS_close");
        $(".tabBtn--1").removeClass("IS_open");
        $(".tabBtn--1").addClass("IS_close");
        $(".tabBtn--2").addClass("IS_open");
        $(".tabBtn--2").removeClass("IS_close");
        $(".tabBtn--3").removeClass("IS_open");
        $(".tabBtn--3").addClass("IS_close");
    });
    $("#searchTabId").click(function(){
        $(".tabBox--1").removeClass("IS_open");
        $(".tabBox--1").addClass("IS_close");
        $(".tabBox--2").removeClass("IS_open");
        $(".tabBox--2").addClass("IS_close");
        $(".tabBox--3").addClass("IS_open");
        $(".tabBox--3").removeClass("IS_close");
        $(".tabBtn--1").removeClass("IS_open");
        $(".tabBtn--1").addClass("IS_close");
        $(".tabBtn--2").removeClass("IS_open");
        $(".tabBtn--2").addClass("IS_close");
        $(".tabBtn--3").addClass("IS_open");
        $(".tabBtn--3").removeClass("IS_close");
    });

    $(".toolBar_result").click(function(){
        $(".naviSortingArea").hide();
        $("#menuBtn_sort1").removeClass("close_sort");
        $("#menuBtn_sort1").addClass("open_sort");
        $("#menuBtn_sort1").addClass("menuBtn_sort--off");
    });

    $("#myModal .slideLinkL a").click(function(){
        if($(this).attr("title")){
            if($("#selectedCar").html().match(/指定なし/)){
                $("#selectedCar").html("");
            }
            $("#selectedCar").append("<li>" + $(this).attr("title") + "</li>");
            $("#selectedCar").append('<input type="hidden" name="cftsearch[maker][0][]" value="' + $(this).attr("title") + '">');
        }
    });

    $(".myModalModel .slideLinkL a").click(function(){
        if($(this).attr("title")){
            if($("#selectedBodyType").html().match(/指定なし/)){
                $("#selectedBodyType").html("");
            }
            $("#selectedBodyType").append("<li>" + $(this).attr("title") + "</li>");
            $("#selectedBodyType").append('<input type="hidden" name="cftsearch[model][0][]" value="' + $(this).attr("title") + '">');
        }
    });

    //contact form
    $(document).ready(function(){
	    $("input[name='text-134']").val("<?php the_title(); ?>");
	});
});
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    //animation: "slide",
  });
});


</script>
<?php wp_footer(); ?>
  </body>
</html>
