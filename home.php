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

                // *Big Blog Card
                get_template_part('templates\card\blog\container\blog-card-big');

                // *Sidebar
                get_template_part('templates\sidebar\blog-sidebar');

                ?>


            </div>
        </div>
    </section>

    <!--blog end-->

</div>

<!--body content end-->
<?php
get_footer();