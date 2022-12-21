<!-- single post hero start -->
<div class="card post-card rounded border-0 shadow-none">
    <?php get_template_part('templates\card\blog\content\blog-card-thumbnail') ?>
    <div class="card-body pt-4 pb-0 px-0">

        <?php get_template_part('templates\card\blog\content\blog-meta') ?>
        <!-- Title Start -->
        <h2> <?php the_title(); ?> </h2>
        <!-- Title End -->

    </div>
</div>
<!-- single post hero end -->