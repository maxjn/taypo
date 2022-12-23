<?php

/**
 * Template for entry content.
 *
 * To be used inside a blog container.
 *
 * @package Taypo
 */
$medium = false;
if (isset($args['medium'])) { // if there was a $query->
    $medium = $args['medium'];
}
?>

<!-- Body Start -->

<div class="card-body p-0 pt-4">
    <?php get_template_part('templates\card\blog\content\blog-meta', null, array('medium' => $medium)) ?>
    <h2 class="h5 my-3">
        <a class="link-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </h2>
    <?php

    ?>
    <p class="mb-0"><?php taypo_the_excerpt(100) ?></p>
</div>
<!-- Body End -->