<?php
// Load header template part
get_header(); 
?>

<div class="content-404">
    <div class="container">
        <h1><?php _e( 'Page Not Found', 'startpress' ); ?></h1>
        <p><?php _e( 'Sorry, the page you are looking for does not exist.', 'startpress' ); ?></p>
        <a href="<?php echo esc_url( home_url() ); ?>" class="button">
            <?php _e( 'Return to Homepage', 'startpress' ); ?>
        </a>
    </div>
</div>

<?php 
// Load footer template part
get_footer(); 
?>
