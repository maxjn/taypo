<?php

/**
 * Template for entry content.
 *
 * To be used inside a blog container.
 *
 * @package Taypo
 */
?>
<div class="col-sm-8 mt-3 mt-sm-0">
    <h5 class="h6">
        <a class="link-title" href="<?php the_permalink() ?>"><?php the_title() ?></a>
    </h5>
    <a class="d-inline-block text-muted" href="<?php the_permalink() ?>"></i> <?php the_time('F j, Y'); ?></a>
</div>