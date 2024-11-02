<?php 
// Load header template part
get_header(); 
?>

<div class="single-content">
    <div class="container">
        <?php 
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content/content', 'single' ); 

            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endwhile;
        ?>
    </div>
</div>

<?php 
// Load footer template part
get_footer(); 
?>
