<?php
// Load header template part
get_header(); 
?>

<div class="archive-content">
    <div class="container">
        <h1><?php the_archive_title(); ?></h1>
        <p><?php the_archive_description(); ?></p>

        <?php if ( have_posts() ) : ?>
            <div class="posts-list">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content/content', 'archive' ); ?>
                <?php endwhile; ?>

                <?php get_template_part( 'template-parts/utilities/pagination' ); ?>
            </div>
        <?php else : ?>
            <p><?php _e( 'No posts found.', 'startpress' ); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php 
// Load footer template part
get_footer(); 
?>
