    <!--portfolio start-->

    <section>
        <div class="container">

            <!-- Portfolio Header -->
            <div class="row align-items-end mb-8">
                <?php
                get_template_part(TAYPO_DIR_FEATURE_PATH . '\portfolio\content\title');
                get_template_part(TAYPO_DIR_FEATURE_PATH . '\portfolio\content\categories');
                ?>
            </div>
            <!-- Portfolio Header### -->

            <?php
            get_template_part(TAYPO_DIR_FEATURE_PATH . '\portfolio\content\portfolio-posts');
            ?>

        </div>
    </section>

    <!--portfolio end-->