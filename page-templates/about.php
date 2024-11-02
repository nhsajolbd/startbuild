<?php
/*
Template Name: About Us
*/
get_header();
?>

<div class="about-page">
    <div class="container">
        <?php 
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content/content', 'page' ); 
        endwhile;
        ?>
    </div>
</div>

<?php 
get_footer();
?>

