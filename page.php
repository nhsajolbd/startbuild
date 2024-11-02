<?php
// Load header template part
get_header(); 
?>

<div class="page-content">
    <div class="container">
        <?php 
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content/content', 'page' ); 
        endwhile;
        ?>
    </div>
</div>

<?php 
// Load footer template part
get_footer(); 
?>
