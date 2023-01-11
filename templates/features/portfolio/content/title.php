<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}
$title = $fields ? $fields['title'] : get_field('portfolio_blog_title', 'options');
?>
<!-- Title -->
<div class="col-12 col-md-12 col-lg-5">
    <div>
        <h2 class="mb-5 mb-lg-0"><?= $title ?></h2>
    </div>
</div>
<!-- Title -->