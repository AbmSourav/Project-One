<div <?php post_class( 'post small col-md-4' ); ?>>
    <div class="container">
        <div class="row">
            <p>
                <?php if ( has_post_thumbnail() ) { ?>
                    <a href="<?php esc_url( the_permalink() ); ?>">
                        <?php the_post_thumbnail( 'projectone-square', array( 'class' => 'img-fluid' ) ); ?>  
                    </a>
                <?php } ?><!-- /post thumbnail -->
            </p>

            <div class="content">
                <h2><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h2>
                <p>
                    <strong><?php esc_url( the_author_posts_link() ); ?></strong><br/>
                    <?php the_time( 'jS F, Y' ); ?>
                </p>
                <p>
                    <?php the_excerpt(); ?>
                </p>
            </div>
        </div>
    </div>
</div>
