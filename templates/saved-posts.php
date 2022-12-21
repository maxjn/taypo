<!-- Template Name: Saved Posts
Post Type: page
 -->
<?php
$old_saves = isset($_COOKIE['old_saves']) ? $_COOKIE['old_saves'] : '';
$old_saves = explode(',', $old_saves);

get_header();

///*Title
?>
<!--hero section start-->
<section class="position-relative overflow-hidden">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="mb-3"><?php the_title() ?></h1>
                <nav aria-label="breadcrumb" class="bg-white shadow d-inline-block px-4 py-2 rounded-4">
                    <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
                        <li class="breadcrumb-item"><a class="text-dark" href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">
                            <?= the_title() ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
    <div class="position-absolute animation-1">
        <lottie-player src="https://lottie.host/59ba3e9a-bef6-400b-adbb-0eb8c20c9f65/WPBRmjAinD.json"
            background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
        </lottie-player>
    </div>

</section>

<!--hero section end-->
<!--body content start-->

<div class="page-content">
    <?php
    // WP_Query arguments
    $args = array(
        'post_type'              => array('post'), // use any for any kind of post type, custom post type slug for custom post type
        'post_status'            => array('publish'), // Also support: pending, draft, auto-draft, future, private, inherit, trash, any
        'order'                  => 'DESC', // Also support: ASC
        'orderby'                => 'date', // Also support: none, rand, id, title, slug, modified, parent, menu_order, comment_count
        'post__in' => $old_saves,
    );

    // The Query
    $query = new WP_Query($args);

    ///*Posts
    get_template_part('templates\card\blog\container\blog-card-small', null, ['query' => $query]);


    ?>
</div>

<!--body content end-->
<?php
get_footer();