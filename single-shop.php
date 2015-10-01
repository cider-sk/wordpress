<?php get_header(); ?>

<style>
header .tbl--skeleton{
    width: 980px;
}
header .sn_header__ttlBlock {
    padding-right: 7px;
    width: 500px;
}

.label{
height: 24px;
    line-height: 21px;
    padding: 0px 15px;
}
header .sn_header__tabBtn.is-this, .sn_header__tabBtn:hover {
    background-color:#E6AE00;
}
header .sn_header__tab li{
    width:100px;
background-color: #F36704;
}
header .sn_header__tab li a{
    color: #fff;
}


.label--nintei{
    display:none;
}
.sn_header__optionBlock{
    display:none;
}
header .numXXL{
    display:none;
}
header button , .icon_help, .icon_star{
    display:none !important;
}
</style>

<div class="l-container" itemscope="" itemtype="http://schema.org/LocalBusiness">
  <article class="l-mainColumn">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("header .numXXL").html("<?php echo get_post_meta($post->ID, "tel", true); ?>");
    $("header .numXXL").css("display", "block");
});
</script>

<?php 
query_posts($query_string);
if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

  <header class="l-pageHeader">
    <div class="sn_header">
    <p class="note txt-r"><?php the_date(); ?>更新</p>
      <div class="l-wrap--fixed">

    <?php the_content(); ?>

      </div>

      <nav class="sn_header__nav">
        <ul class="sn_header__tab">
        <li><a href="<?php the_permalink(); ?>" title="お店TOP" class="sn_header__tabBtn <?php if(!$_GET["page"]){ ?>is-this<?php } ?>">お店TOP</a></li>
          <li><a href="?page=map" title="地図&amp;アクセス" class="sn_header__tabBtn <?php if($_GET["page"]=="map"){ ?>is-this<?php } ?> ">地図&amp;アクセス</a></li>
          <li><a href="?page=stocklist" title="在庫一覧" class="sn_header__tabBtn <?php if($_GET["page"]=="stocklist"){ ?>is-this<?php } ?> ">在庫一覧</a></li>
          <li><a href="?page=staff" title="スタッフ紹介" class="sn_header__tabBtn  <?php if($_GET["page"]=="staff"){ ?>is-this<?php } ?>">スタッフ紹介</a></li>
          <li><a href="?page=maintenance" title="整備" class="sn_header__tabBtn  <?php if($_GET["page"]=="maintenance"){ ?>is-this<?php } ?>">整備</a></li>
          <li><a href="?page=afterservice" title="アフターサービス" class="sn_header__tabBtn  <?php if($_GET["page"]=="afterservice"){ ?>is-this<?php } ?>">アフターサービス</a></li>
          <li><a href="?page=fairevent" title="フェア&amp;イベント" class="sn_header__tabBtn  <?php if($_GET["page"]=="fairevent"){ ?>is-this<?php } ?>">フェア&amp;イベント</a></li>
          <li><a href="?page=review" title="お店のクチコミ" class="sn_header__tabBtn  <?php if($_GET["page"]=="review"){ ?>is-this<?php } ?>">お店のクチコミ</a></li>
          <li><a href="?page=shoplist" title="系列店の一覧" class="sn_header__tabBtn  <?php if($_GET["page"]=="shoplist"){ ?>is-this<?php } ?>">系列店の一覧</a></li>
        </ul>
      </nav>

      <div class="sn_underBar"></div>
    </div>

  
  </header>
<div id="menu_show"></div>

<?php 
switch($_GET["page"]){
    case "map":
        get_template_part( 'shop', 'map' );
        break;
    case "stocklist":
        get_template_part('shop', 'stocklist');
        break;
    case "staff":
        get_template_part('shop', 'staff');
        break;
    case "maintenance":
        get_template_part('shop', 'maintenance');
        break;
    case "afterservice":
        get_template_part('shop', 'afterservice');
        break;
    case "fairevent":
        get_template_part('shop', 'fairevent');
        break;
     case "review":
        get_template_part('shop', 'review');
        break;
    case "shoplist":
        get_template_part('shop', 'shoplist');
        break;
    default:
        get_template_part( 'shop', 'top' );
        break;
}
?>
<?php break; ?>
<?php endwhile; ?><?php else : ?>
<?php endif; ?>

</div>
</div>

<?php get_footer(); ?>
