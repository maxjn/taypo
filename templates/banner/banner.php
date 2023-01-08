<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}
?>
<!--contact start-->

<section class="p-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-dark p-4 p-lg-10 rounded-4 text-center"
                    data-bg-img="<?= get_template_directory_uri() ?>/assets/libraries/images/bg/01.png">
                    <h2 class="text-white mb-0 font-w-7"><?= $fields["title"] ?>
                    </h2>
                    <p class="text-light my-4"><?= $fields["description_text"] ?></p>
                    <?php
                    if ($fields["button_link"]) {
                    ?>
                    <a class="btn btn-primary"
                        href="<?= $fields["button_link"]['url'] ?>"><?= $fields["button_text"] ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--contact end-->