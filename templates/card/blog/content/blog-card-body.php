<?php

/**
 * Template for entry content.
 *
 * To be used inside a blog container.
 *
 * @package Taypo
 */
?>

<!-- Body Start -->

<div class="card-body p-0 pt-4">
    <?php get_template_part('templates\card\blog\content\blog-meta') ?>
    <h2 class="h5 my-3">
        <a class="link-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </h2>
    <?php

    ?>
    <p class="mb-0"><?php taypo_the_excerpt(100) ?></p>
</div>
<!-- Body End -->