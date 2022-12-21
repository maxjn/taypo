<?php
get_header();
?>



<!--body content start-->

<div class="page-content">

    <!--single post start-->

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <?php
                    get_template_part('templates\single\hero-single');

                    the_content();

                    get_template_part('templates\single\single-meta');

                    get_template_part('templates\card\blog\container\blog-card-medium');


                    comments_template('');

                    ?>

                </div>
            </div>
        </div>
    </section>

    <!--single end-->

</div>

<!--body content end-->

<?php
get_footer()
?>