<?php get_header("sp"); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="container">
        <div class="starter-template main">
            <?php the_content(); ?>
        </div>
    </div><!-- /.container -->
<?php endwhile; ?><?php else : ?>
<?php endif; ?>
<?php get_footer("sp"); ?>
