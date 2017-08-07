<?php
/**
 *
 * Template Name: Tigress 2
 *
 */

get_header(); ?>

<?php
/**
 * flash_before_body_content hook
 */
do_action( 'flash_before_body_content' ); ?>

    <div id="primary" class="content-area full-width-content">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

                /**
                 * flash_before_comment_template hook
                 */
                do_action( 'flash_before_comment_template' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

                /**
                 * flash_after_comment_template hook
                 */
                do_action( 'flash_after_comment_template' );

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    <?php
    /**
     * flash_after_body_content hook
     */
    do_action( 'flash_after_body_content' ); ?>

<?php
get_footer(); ?>
