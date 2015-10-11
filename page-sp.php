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
</style>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
        <div class="row" id="top-main">
            <div class="col-xs-12">
                <div class="l-container">
                <p class="page-title"><?php the_title(); ?></p>
<?php the_content(); ?>
		</div> <!-- /l-container -->
</div>
</div>
</div>
<?php endwhile; ?><?php else : ?>
<?php endif; ?>

<?php get_footer("sp"); ?>
