<?php get_header("sp"); ?>
<style>
body {
    font-family: Georgia, "Times New Roman", "Bitstream Charter", Times, serif;
    font-size: 16px;
    line-height: 1.5;
    color: #333;
    max-width: 100%;
    -webkit-font-smoothing: antialiased !important;
    overflow-wrap: break-word;
    word-wrap: break-word;
    word-break: break-word;
}
.l-container{
text-align:left;
}
p {
    display: block;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
}
.page .wpcf7 dl dt span, .page .wpcf7-form dl dt span, .wpcf7 dl dt span, .wpcf7-form dl dt span {
    padding: 10px 30px;
    display: block;
}
p.page-title {
    font-size: 36px;
    margin: 0;
    margin-bottom: 0px!important;
    font-weight: bold;
    text-align: center;
}
.l-container h2 {
    margin: 0 5px 0.45em 0;
    padding: 0.2em 0 0.2em 18px;
    font-size: 150%;
    font-weight: bold;
    line-height: 1.4;
    border-left: 8px solid #c13a65;
}
</style>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
        <div class="row" id="top-main">
            <div class="col-xs-12">
                <div class="l-container">
                <p class="page-title">一括取り寄せ</p>
<?php the_content(); ?>
		</div> <!-- /l-container -->
</div>
</div>
</div>
<?php endwhile; ?><?php else : ?>
<?php endif; ?>

<?php get_footer("sp"); ?>
