<?php

/**
 * Template for entry content.
 *
 * To be used inside a blog container.
 *
 * @package Taypo
 */
$classes = "rounded-4 img-fluid ";
if (isset($args['class'])) { // if there was a $class->
    $classes .= $args['class'];
}

?>
<!-- Thumbnail Start -->
<a href="<?php the_permalink(); ?>" class=" <?= $classes ?> ">
    <?php
    // check if the post or page has a Featured Image assigned to it.
    if (has_post_thumbnail()) {
        the_post_thumbnail(null, array('class' => $classes, 'loading' => 'lazy'));
    } //end if
    else {
    ?>
    <img class="<?= $classes ?>" loading="lazy"
        src="<?= get_template_directory_uri() ?>\assets\libraries\images\blog\01.jpg" alt="Image">
    <?php
    } //end else
    ?>
</a>
<!-- Thumbnail End -->