    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo("template_url"); ?>/dist-sp/js/bootstrap.min.js"></script>
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
        $(".tab_menu img").attr('src','http://dev2.hardunity.com/wp-content/uploads/2015/09/left-check.png');
        $("#tab-contents-1").show();
        $("#tab-contents-2").hide();
        $("#tab-contents-3").hide();
    });
        $("#middle-img").click(function(){
        $(".tab_menu img").attr('src','http://dev2.hardunity.com/wp-content/uploads/2015/09/middle-check-1.png');
        $("#tab-contents-1").hide();
        $("#tab-contents-2").show();
        $("#tab-contents-3").hide();
    });
    $("#right-img").click(function(){
        $(".tab_menu img").attr('src','http://dev2.hardunity.com/wp-content/uploads/2015/09/right-check-1.png');
        $("#tab-contents-1").hide();
        $("#tab-contents-2").hide();
        $("#tab-contents-3").show();
    });
});
</script>
  </body>
</html>
