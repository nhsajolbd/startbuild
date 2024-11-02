<?php
/*
Template Name: New Template 
*/
get_header();
?>

<div class="custom-page">
    <div class="container">
        <h1><?php the_title(); ?></h1>

        <p>This is a custom template, you can add any content you like.</p>

        <p>You can use this template as a starting point and customize it to fit your needs.</p>

        <?php the_content(); ?>

    </div>
</div>

<?php 
get_footer();
?>

