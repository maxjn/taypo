<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}
?>
<!--faq start-->

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="bg-light-2 p-lg-8 p-4 rounded-4">
                    <div class="accordion" id="accordion">
                        <?php

                        if (have_rows('questions')) {
                            $counter = 1;
                            while (have_rows('questions')) {
                                the_row()
                        ?>
                        <div class="accordion-item border-0 py-3 rounded-4 mb-4">
                            <h3 class="accordion-header" id="heading<?= $counter ?>">
                                <button
                                    class="accordion-button py-0 font-w-6 shadow-none border-0 mb-0 bg-transparent rounded text-dark collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $counter ?>"
                                    aria-expanded="false" aria-controls="collapse<?= $counter ?>">
                                    <?= get_sub_field('question') ?>
                                </button>
                            </h3>
                            <div id="collapse<?= $counter ?>" class="accordion-collapse border-0 collapse"
                                aria-labelledby="heading<?= $counter ?>" data-bs-parent="#accordion">
                                <div class="accordion-body pt-0 text-muted"><?= get_sub_field('answer') ?></div>
                            </div>
                        </div>
                        <?php
                                $counter++;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--faq end-->