<div <?php post_class( 'post' ); ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="post-title"><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php esc_url( the_author_posts_link() ); ?></strong><br/>
                        <?php the_time( 'jS F, Y' ); ?>
                    </p>
                    <?php if ( has_tag() ) { ?>
                        <?php echo get_the_tag_list( '<ul class="list-unstyled"><li>', ', ', '</li></ul>', '' ); ?>
                    <?php } ?>
                </div>
                <div class="col-md-8">
                    <p>
                        <?php if ( has_post_thumbnail() ) { ?>
                            <a href="<?php esc_url( the_permalink() ); ?>">
                                <?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-fluid' ) ); ?>  
                            </a>
                        <?php } ?><!-- /post thumbnail -->
                    </p>
                    <?php the_excerpt(); ?><!-- /post content -->
                </div>            
            </div>           
        </div>
    </div>
</div>



