<?php 
// Load header template part
get_header(); 
?>

<div class="main-content">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="posts-list">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content/content', 'single' ); ?>
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
