<?php get_header();?>
<div class="content-wrapper">
    <div class="content-main">
        <div class="content">

            <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

                <div class="articles">

                    <div class="articles-head">
                        <span class="articles-date"><img src="<?php bloginfo('template_url');?>/images/articles-author.jpg" alt="#"><span><a href="#"><?php the_author();?></a></span> - <?php the_time('M jS, Y' );?></span>
                        <span class="articles-comments"><img src="<?php bloginfo('template_url');?>/images/articles-comment.jpg" alt="#"><a href="#"><?php comments_popup_link(); ?></a> </span>
                    </div>
                    <h1><?php the_title();?></h1>
                    <?php the_content();?>

                </div>

            <?php endwhile; ?>
            <?php endif; ?>

            <div class="pager">
                <?php previous_post_link('<span>&laquo;</span> %link');?>
                <?php next_post_link('%link <span>&raquo;</span>');?>
            </div>
        </div>
        <?php get_sidebar();?>
    </div>
</div>

<?php get_footer();?>


<?php wp_footer();?>
</body>
</html>