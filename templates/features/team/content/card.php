<?php
$positions = get_the_terms(get_the_ID(), 'team_member_position'); //arry of term objects
?>
<div class="col-12 col-lg-3 col-md-6 mb-4 ">
    <div class="hover-translate bg-white shadow px-3 pt-4 pb-5 rounded-4">
        <div class="d-flex align-items-center">
            <h6 class="mb-0 me-2"><a class="btn-link" href="<?php the_permalink() ?>"><?php the_title() ?></a></h6>
            <span class="text-muted">-
                <?php  //Positions
                foreach ($positions as $position) {
                ?><?= $position->name ?>
                <?php } //end foreach
                //Positions ###
            ?>
            </span>
        </div>
        <div class="mt-3 mb-4">
            <img class="img-fluid rounded-4" src="<?php the_post_thumbnail_url() ?>" alt="">
        </div>
        <ul class="list-inline mb-0">
            <?php
            if (have_rows('social_media', get_the_ID())) {
                while (have_rows('social_media', get_the_ID())) {
                    the_row();
            ?>
            <li class="list-inline-item">
                <a class="border rounded px-2 py-1 text-dark" href="<?= get_sub_field('link') ?>">
                    <i class="bi bi-<?= get_sub_field('icon') ?>"></i>
                </a>
            </li>
            <?php
                }
            }
            ?>
        </ul>
    </div>
</div>