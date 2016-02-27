<?php if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <div class="oils__item">
            <!-- open .oils__item--img -->
            <div class="oils__item--img">
                <!-- open .oils__item--img--price -->
                <div class="oils__item--img--price"><?php echo get_post_meta(get_the_ID(), "price", 1); ?></div>
                <?php the_post_thumbnail(); ?>
                <!-- close .oils__item--img--price -->
            </div>
            <!-- close .oils__item--img -->
            <!-- open .oils__item--title -->
            <div class="oils__item--title">
                <h3><?php the_title(); ?></h3>
                <h4><?php echo get_post_meta(get_the_ID(), "subtitle", 1); ?></h4>
                <a href="#" class="boxes__item--desc--but" data-toggle="modal" data-target="#order_call" data-option="<?php the_title(); ?>">Заказать</a>
            </div>
            <!-- close .oils__item--title -->
            <!-- open .oils__item--desc -->
            <div class="oils__item--desc">
                <?php the_content(); ?>
            </div>
            <!-- close .oils__item--desc -->
        </div>
    <?php endwhile; }
wp_reset_query(); ?>