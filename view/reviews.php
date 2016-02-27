<?php if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <div class="reviews__item">
            <div class="reviews__item--img">
                <?php the_post_thumbnail(); ?>
            </div>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>

    <?php endwhile; }
wp_reset_query(); ?>