<?php get_header();?>
<div class="content-wrapper">
    <div class="content-main">
        <div class="content">
            <div id='slideshowHolder'>
                <img src="<?php bloginfo('template_url');?>/images/img1.jpg" alt='' />
                <img src="<?php bloginfo('template_url');?>/images/img1.jpg" alt='' />
                <img src="<?php bloginfo('template_url');?>/images/img1.jpg" alt='' />
            </div>

            <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

                <div class="articles">
                    <div class="articles-gen-img">
                        <a href="<?php the_permalink();?>">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail();?>
                            <?php else: ?>
                                <img src="<?php bloginfo('template_url');?>/images/no_img.jpg">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="articles-head">
                        <span class="articles-date"><img src="<?php bloginfo('template_url');?>/images/articles-author.jpg" alt="#"><span><a href="#"><?php the_author();?></a></span> - <?php the_time('M jS, Y' );?></span>
                        <span class="articles-comments"><img src="<?php bloginfo('template_url');?>/images/articles-comment.jpg" alt="#"><a href="#"><?php comments_popup_link(); ?></a> </span>
                    </div>
                    <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                    <?php the_excerpt();?>
                    <p><a href="<?php the_permalink();?>">Read more</a></p>
                </div>

            <?php endwhile; ?>
            <?php endif; ?>


            <div class="pager">
                <?php posts_nav_link('<span>-</span>');?>

<!--                <a href="#">1</a>-->
<!--                <a href="#">2</a>-->
<!--                <a href="#">3</a>-->
<!--                <a href="#">4</a>-->
<!--                <span>of</span>-->
<!--                <a href="#">20</a>-->
<!--                <a href="#" class="prev-next">Next</a>-->
            </div>
        </div>
        <?php get_sidebar();?>
    </div>
</div>

<?php get_footer();?>

<script>
    $(document).ready( function(){
        $('#slideshowHolder').jqFancyTransitions({ navigation: true, width: 594, height: 279 });
    });
</script>

<?php wp_footer();?>
</body>
</html>