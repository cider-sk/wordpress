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
        if($("#maker_select").html().match(/選択する/)){
            $("#maker_select").html("");
        }
        $(this).addClass("is-selected");
        $("#maker_select").append("<li>" + $(this).attr("title") + "</li>");
        $("#maker_select").append('<input type="hidden" name="cftsearch[maker][0][]" value="' + $(this).attr("title") + '">');
    });
    $(".f-check").change(function(){
        //listに追加
        if($("#model_select").html().match(/選択する/)){
            $("#model_select").html("");
        }
        $("#model_select").append("<li>" + $(this).val() + "</li>");
        $("#model_select").append('<input type="hidden" name="cftsearch[model][0][]" value="' + $(this).val() + '">');
    });
    $("#rest").click(function(){
        $("#maker_select").html('<a class="btn btn--funcL2 btn--small w100 mb20 js_thickBtn" id="shashuAnc" href=""  data-toggle="modal" data-target="#myModal" title="選択する">選択する</a>');
        $("#model_select").html('<a class="btn btn--funcL2 btn--small w100 mb20 js_thickBtn" id="shashuAnc" href=""  data-toggle="modal" data-target="#myModal" title="選択する">選択する</a>');
        $(".modal__select").removeClass("is-selected");
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
