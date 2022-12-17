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
    <div>
        <div class="d-inline-block bg-light text-center px-2 py-1 rounded me-2">
            <i class="bi bi-calendar3 text-dark me-1"></i> <?php the_time('F j, Y'); ?>
        </div>
        <!-- Category Start -->
        <?php
        foreach ((get_the_category()) as $category) {
            $category_name = $category->cat_name;
            $cat_id = get_cat_ID($category_name);
            $category_link = get_category_link($cat_id);
        ?>
        <a class="d-inline-block btn-link" href="<?= $category_link ?>">
            <?php
                echo $category_name . ' ' . ' ';
                ?></a>
        <?php
        }

        ?>
        <!-- Category end -->

    </div>
    <h2 class="h5 my-3">
        <a class="link-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </h2>
    <?php

    ?>
    <p class="mb-0"><?php taypo_the_excerpt(100) ?></p>
</div>
<!-- Body End -->