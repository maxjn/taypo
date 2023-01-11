<?php
$categories = get_the_terms(get_the_ID(), 'portfolio_category'); //arry of term objects

?>
<!-- Post Item -->
<div class="grid-item col-lg-4 col-md-6 mb-5
            <?php //categories
            foreach ($categories as $category) {
                echo $category->slug;
            } //end foreach
            ?>
            ">

    <div class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
        <img class="img-fluid w-100 rounded-4" src="<?php the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>">
        <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
            <div>
                <?php  //categories
                foreach ($categories as $category) {
                ?>
                <small class="mb-2"> <?= $category->name ?></small>
                <?php } //end foreach
                //categories ###
                ?>

                <h6 class="mb-0">
                    <a class="btn-link" href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                </h6>
            </div>
            <a class="popup-img btn-link" href="<?php the_post_thumbnail_url() ?>">
                <i class="bi bi-patch-plus fs-4"></i>
            </a>
        </div>
    </div>
</div>
<!-- Post Item### -->