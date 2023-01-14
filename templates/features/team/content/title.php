<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}
if ($fields) {
    $title = $fields['title'];
    $sub_title = $fields['sub_title'];
    $description = $fields['description'];
} else {
    $title = get_field('team_blog_title', 'option');
    $sub_title = get_field('team_blog_sub_title', 'option');
    $description = get_field('team_blog_description', 'option');
}

?>
<div class="row justify-content-center text-center mb-6">
    <div class="col-12 col-lg-8">
        <div>
            <h6 class="border-bottom border-dark border-2 d-inline-block">
                <?= $sub_title ?>
            </h6>
            <h2 class="font-w-6">
                <?= $title ?>
            </h2>
            <p class="lead mb-0">
                <?= $description ?>
            </p>
        </div>
    </div>
</div>