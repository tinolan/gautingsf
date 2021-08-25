<?php get_header(); ?>

<section id="post"  >
        <div id="content">
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                        <article class="categorie_post">
                                <div class="post_title">
                                        <h3><a href="<?php the_permalink();?>"><?php the_title()?></a></h3>
                                </div>
                                <div class="post_time">
                                        <?php the_time('j. F Y') ?>
                                </div>
                                <div class="post_img">
                                        <?php if ( has_post_thumbnail() ) {
                                                the_post_thumbnail();
                                        }?>
                                </div>
                                <div class="post_text">
                                        <p><?php the_content(); ?></p>
                                </div>
                        </article>
                <?php endwhile; endif; ?>
        </div>
</section>

<?php get_footer(); ?>