<?php
if (isset($args['query'])) { // if there was a $query->
    $query = $args['query'];

    if (!is_home()) {
?>
<!--blog start-->
<section>
    <?php
        }


        if ($query->have_posts()) {
            if (!is_home()) {
            ?>
    <div class="container">
        <div class="row">
            <?php } ?>
            <div class="col-12 col-lg-7 mb-6  ">
                <?php
                        while ($query->have_posts()) : $query->the_post();
                        ?>


                <div class="card p-4 border-0 shadow rounded-4 mb-5">
                    <?php
                                get_template_part('templates\card\blog\content\blog-card-thumbnail');
                                get_template_part('templates\card\blog\content\blog-card-body');
                                ?>
                </div>

                <?php
                        endwhile;
                        ?>
            </div>
            <?php
                    if (!is_home()) {
                    ?>
        </div>
    </div>
    <?php
                    }
                } else {
                    get_template_part('templates\content-non');
                }
                if (!is_home()) {
            ?>
</section>

<!--blog end-->
<?php
                }
            } else {
                // if there was no $query->
                if (!is_home()) {
    ?>
<!--blog start-->
<section>
    <?php
                }
                if (have_posts()) {
                    if (!is_home()) {
            ?>
    <div class="container">
        <div class="row">
            <?php } ?>
            <div class="col-12 col-lg-7 mb-6 mb-lg-0 ">
                <?php
                        while (have_posts()) : the_post();
                        ?>


                <div class="card p-4 border-0 shadow rounded-4 mb-5">
                    <?php
                                get_template_part('templates\card\blog\content\blog-card-thumbnail');
                                get_template_part('templates\card\blog\content\blog-card-body');
                                ?>
                </div>


                <?php
                        endwhile;
                        ?>

            </div>
            <?php if (!is_home()) { ?>
        </div>
    </div>
    <?php
                    }
                } else {
                    get_template_part('templates\content-non');
                }
                if (!is_home()) {
            ?>
</section>

<!--blog end-->
<?php
                }
            }