<?php
/**
 * Template Name: Archive
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php 
            if ( have_posts() ) : 
        ?>
        <header class="archive-page-header">
            <?php
                the_archive_title( '<h1 class="archive-title">', '</h1>' );
                the_archive_description( '<div class="archive-description">', '</div>' );
            ?>
        </header>
        <?php
            while ( have_posts ()) :
                the_post();
                get_template_part('template-parts/post/contenr');
            endwhile;
            
            the_posts_pagination( 
                array(
                    'prev_text' => esc_html__('Prev'),
                    'next_text' => esc_html__('Next'),
                )
                );
            else : 
                get_template_part('template-parts/post/content', 'none');

        ?>
        <?php endif;?>
    </main>
</div>