<?php
/**
 * The main template file
 *
 * @package TBI_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            the_content();
        endwhile;
    else:
        ?>
        <div style="padding: 100px 20px; text-align: center;">
            <h1>No Content Found</h1>
            <p>Please add content to this page in the WordPress admin.</p>
        </div>
        <?php
    endif;
    ?>
</main>

<?php
get_footer();
