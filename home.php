<?php
get_header();


get_template_part('templates\hero\hero-title')
?>
<!--body content start-->

<div class="page-content">
    <!--body content start-->

    <!--blog start-->

    <section>
        <div class="container">
            <div class="row">
                <?php
                $sidebar_side = get_field_object('blog_sidebar_side', 'options')['value'];

                // Where to place the sidebar
                for ($i = 1; $i <= 2; $i++) {

                    if (($sidebar_side == 'right' && $i == 1) || ($sidebar_side == 'left' && $i == 2)) {
                        // *Big Blog Card
                        get_template_part('templates\card\blog\container\blog-card-big');
                    } else {
                        // *Sidebar
                        get_template_part('templates\sidebar\blog-sidebar');
                    }
                }
                ?>


            </div>
        </div>
    </section>

    <!--blog end-->

</div>

<!--body content end-->
<?php
get_footer();