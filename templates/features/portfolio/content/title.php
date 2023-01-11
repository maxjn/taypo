<?php
$post_id = (is_page() && !is_front_page()) ? get_the_ID() : 'options';
$selector = (is_page() || is_front_page()) ? 'title' : 'portfolio_blog_title';
$title = get_field($selector, $post_id);
?>
<!-- Title -->
<div class="col-12 col-md-12 col-lg-5">
    <div>
        <h2 class="mb-5 mb-lg-0"><?= $title ?></h2>
    </div>
</div>
<!-- Title -->