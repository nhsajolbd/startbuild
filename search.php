<?php 
// Load header template part
get_header(); 
?>

<div class="search-content">
    <div class="container">
        <h1><?php printf( __( 'Search Results for: %s', 'startpress' ), get_search_query() ); ?></h1>

        <?php if ( have_posts() ) : ?>
            <div class="posts-list">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content/content', 'archive' ); ?>
                <?php endwhile; ?>

                <?php get_template_part( 'template-parts/utilities/pagination' ); ?>
            </div>
        <?php else : ?>
            <p><?php _e( 'No results found.', 'startpress' ); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php 
// Load footer template part
get_footer(); 
?>
