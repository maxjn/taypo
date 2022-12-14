<?php
if (isset($args['query'])) { // if there was a $query->
    $query = $args['query'];
    if ($query->have_posts()) {
?>

<!--blog start-->

<section>

    <div class="container">
        <div class="row">
            <?php
                    while ($query->have_posts()) : $query->the_post();
                    ?>

            <div class="col-12 col-lg-4 mb-6 ">
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

        <?php // *Pagination
                get_template_part('templates\archive\pagination');
                ?>

    </div>
    <?php

    } else {
        get_template_part('templates\content-non');
    }
        ?>
</section>

<!--blog end-->
<?php
    } else {
        // if there was no $query->

        if (have_posts()) {
        ?>

<!--blog start-->

<section>

    <div class="container">
        <div class="row">
            <?php
                        while (have_posts()) : the_post();
                        ?>

            <div class="col-12 col-lg-4 mb-6 ">
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

        <?php // *Pagination
                    get_template_part('templates\archive\pagination');
                    ?>

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