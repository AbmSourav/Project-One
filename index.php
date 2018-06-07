<?php get_header(); ?>

<?php get_template_part( 'hero' ); ?>

<div class="posts">
    <div class="container">
        <div class="row">
            <?php
                $count = 0;
                while ( have_posts() ) : the_post();
                    if ( ( $count % 4 ) == 0 ):
                        get_template_part( '/template-parts/large', 'content' );

                    else:
                        get_template_part( '/template-parts/small', 'content' );

                    endif;
                    $count++;

                endwhile; 
            ?>
        </div>
    </div>   
</div>

<?php get_footer(); ?>