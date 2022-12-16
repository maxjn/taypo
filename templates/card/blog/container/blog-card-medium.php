<?php
if (isset($args['query'])) { // if there was a $query->
    $query = $args['query'];
?>
<section>
    <?php
        if ($query->have_posts()) {
        ?>
    <div class="container">
        <div class="row">
            <?php
                    while ($query->have_posts()) : $query->the_post();
                    ?>

            <div class="col-md-6 mb-5  ">
                <article class="card p-4 border-0 shadow rounded-4">
                    <?php
                                get_template_part('templates\card\blog\content\blog-card-thumbnail');
                                get_template_part('templates\card\blog\content\blog-card-body');
                                ?>
                </article>
            </div>

            <?php
                    endwhile;
                    ?>

        </div>
    </div>
    <?php
        } else {
            get_template_part('templates\content-non');
        }
        ?>
</section>


<?php
} else {
    // if there was no $query->
?>
<!--blog start-->

<section>
    <?php
        if (have_posts()) {
        ?>
    <div class="container">
        <div class="row">
            <?php
                    while (have_posts()) : the_post();
                    ?>

            <div class="col-md-6 mb-5  ">
                <div class="card p-4 border-0 shadow rounded-4">
                    <?php
                                get_template_part('templates\card\blog\content\blog-card-thumbnail');
                                get_template_part('templates\card\blog\content\blog-card-body');
                                ?>
                </div>
            </div>

            <?php
                    endwhile;
                    ?>

        </div>
    </div>
    <?php
        } else {
            get_template_part('templates\content-non');
        }
        ?>
</section>

<!--blog end-->
<?php
}