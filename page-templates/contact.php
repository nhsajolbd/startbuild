<?php
/*
Template Name: Contact
*/
get_header();
?>

<div class="contact-page">
    <div class="container">
        <h1><?php the_title(); ?></h1>

        <div class="contact-info">
            <?php 
            // Add static contact information or custom fields
            echo '<p>Email: example@example.com</p>';
            echo '<p>Phone: +123-456-7890</p>';
            ?>
        </div>

        <div class="contact-form">
            <?php 
            // Use a shortcode for the form, e.g., from Contact Form 7
            echo do_shortcode('[contact-form-7 id="123" title="Contact form"]'); 
            ?>
        </div>
    </div>
</div>

<?php 
get_footer();
?>
