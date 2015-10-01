<section class="l-seclv1 mb0">
<?php echo get_post_meta($post->ID, "shop_voice", true); ?>
</section>  

<section class="l-seclv1">
            <h2 class="hd2nd  hd2nd--sn_main">ユーストカークボヤのクチコミ一覧</h2>
            <p class="txt mb20">あなたのクチコミを投稿しませんか？
                    <button class="btn btn--funcL2 btn--small" onclick="location.href='https://www.carsensor.net/review/account_regist/RE000001/?SHOP=110688001'">投稿する</button>
                </p>
            <div class="resultBar l-wrap">
                <div class="resultBar__numBox l-box">
                    <b class="numXXL va-mid">52</b>
                    <span class="txt va-btm">件のクチコミ</span>
                </div><!-- /.resultBar__numBox -->

                <div class="resultBar__paging l-box">
                    <div class="resultBar__btns">
                        <select class="f-select f-select--middle" name="" id="" onchange="location.href=this.options[this.selectedIndex].value">
                            <option value="http://www.carsensor.net/shop/ibaraki/110688001/review/?SORT=11" selected="">投稿日</option>
                            <option value="http://www.carsensor.net/shop/ibaraki/110688001/review/?SORT=13">購入年月</option>
                            <option value="http://www.carsensor.net/shop/ibaraki/110688001/review/?SORT=1">タイトル/評価</option>
                        </select>
                    </div><!-- /.resultBar__btns -->

                    <div class="paging">
                        <button class="btn btn--funcL2 btn--small w100 btn--disable">前へ</button>
                        <button class="btn btn--funcL2 btn--small w100" onclick="location.href='http://www.carsensor.net/shop/ibaraki/110688001/review/?PAGE=2'">次へ</button>
                    </div><!-- /.paging -->
                    <div class="paging">
                            <span class="paging__first">最初</span>
                                <b>1</b>
                                <a href="http://www.carsensor.net/shop/ibaraki/110688001/review/?PAGE=2">2</a>
                                <a href="http://www.carsensor.net/shop/ibaraki/110688001/review/?PAGE=3">3</a>
    
                            <a href="http://www.carsensor.net/shop/ibaraki/110688001/review/?PAGE=3" class="paging__last">最後</a>
                        </div><!-- /.paging -->

                </div><!-- /.resultBar__paging -->
            </div><!-- /.resultBar -->

            <hr class="sep">

            <div class="caset caset--shopReview--noLink">
<?php echo get_post_meta($post->ID, "reviews", true); ?>

                </div><!-- /.caset caset--shopReview -->
            <div class="caset caset--shopReview--noLink">

        </section>
