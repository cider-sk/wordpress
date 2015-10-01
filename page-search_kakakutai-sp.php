<?php
/*
Template Name: スマホ固定ページテンプレート
*/
?>
<?php get_header("sp"); ?>
    <div class="container">

        <div class="starter-template cat">
            <article>
            <header class="pageHeader">
                <h1 class="pageTtl">価格から中古車を探す</h1>
            </header>
<?php /* ?>
<form method="get" action="/">
            <div class="priceDrumBox" style="">
                <select id="select2" name="PMAX">
                    <option label="上限なし" value="">上限なし</option>
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
<option label="300万円" value="300">300万円</option>

                </select>
                <select data-role="none" id="select1" name="PMIN">
                    <option label="下限なし" value="">下限なし</option>
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
            <div class="actionArea">
                <button type="subit" data-role="none" class="btnA">この条件で検索<span></span></button>
            </div><!-- /.actionArea -->
<style>
.sub{
    display:none;
}
</style>
</form>
<?php */ ?>

            <header id="header2" style="display:none;">
                <h2 id="kakushi" class="hdd2nd">価格帯から中古車を探す</h2>
            </header>

            <section id="lockline3">
                <h2 class="hdd2nd">価格帯から中古車を探す</h2>
                <ul class="slideLinkL">
<?php for($i =1; $i < 22; $i++ ){ 
    if($i < 10){
        $rate = 5;
        $under = $i * $rate;
        $up = ($i + 1) * $rate;
    } elseif($i >= 10 && $i <15) {
        $rate = 10;
        $under = ($i - 5) * $rate;
        $up = ($i -4) * $rate;
    }else{
        $rate = 20;
        $under = ($i - 10) * $rate;
        $up = ($i - 9) * $rate;
    }
?>
<li>
<a href="<?php bloginfo("url") ?>?cftsearch%5Bmaker%5D%5B0%5D%5B%5D=&cftsearch%5Bcar-name%5D%5B0%5D%5B%5D=&cftsearch%5Bvalue%5D%5B1%5D%5B%5D=<?php echo $under ?>&cftsearch%5Bvalue%5D%5B2%5D%5B%5D=<?php echo $up ?>&cftsearch_submit=1" rel="external">
<div class="listTxtBox">
<p class="main"><?php echo $under; ?>～<?php echo $up ?>万円以下</p>
<p class="sub">(4589)</p>
</div>
</a>
</li>
<?php } ?>
</ul>
            </section>
            <p class="goTop"><a rel="external" href="javascript:void(0);" title="TOPへ" onclick="window.scroll(0,0);return false;" data-role="none">▲価格から中古車を探すTOPへ</a></p>
        </article>
        </div>

    </div><!-- /.container -->

<?php get_footer("sp"); ?>
