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
</style>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
        <div class="row" id="top-main">
            <div class="col-xs-12">
                <div class="b-container">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <div class="blog-content"><?php the_content(); ?></div>
		        </div> <!-- /b-container -->
            </div>
        </div>
</div>
<?php endwhile; ?><?php else : ?>
<?php endif; ?>

<?php get_footer("sp"); ?>
