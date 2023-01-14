<?php
$members = array();

if (isset($args['fields'])) {
    $fields = $args['fields'];
    foreach ($fields['team'] as $member) {
        array_push($members, $member['member']);
    }
}

if (isset($args['single_fields'])) {
    $single_fields = $args['single_fields'];
    foreach ($single_fields as $member) {
        array_push($members, $member['member']);
    }
}


$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// WP_Query argument For all the portfolio posts
$args = array(
    'post_type'              => array('team_member'), // use any for any kind of post type, custom post type slug for custom post type
    'post_status'            => array('publish'), // Also support: pending, draft, auto-draft, future, private, inherit, trash, any
    'posts_per_page'         => 8, // use -1 for all post
    'post__in' => $members,
    'order'                  => 'DESC', // Also support: ASC
    'orderby'                => 'date', // Also support: none, rand, id, title, slug, modified, parent, menu_order, comment_count
    'paged' => $paged,
);

// The Query
$query = new WP_Query($args);
?>
<!--team start-->
<section>
    <div class="container">
        <?php
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\team\content\title', null, ['fields' => $fields]);

        get_template_part(TAYPO_DIR_FEATURE_PATH . '\team\content\team-posts', null, ['query' => $query]);
        ?>
    </div>
</section>

<!--team end-->