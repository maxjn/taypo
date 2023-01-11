  <?php
    $arg = [
        'show_option_all'    => '',
        'show_option_none'   => __('No categories'),
        'orderby'            => 'count',
        'order'              => 'DESC',
        'style'              => 'none',
        'show_count'         => 1,
        'hide_empty'         => 1,
        'use_desc_for_title' => 1,
        'number'             => 8,
        'echo'               => 1,
        'taxonomy'           => isset($args['taxonomy']) ? $args['taxonomy'] : 'portfolio_category',
        'walker'             => 'Walker_Category',
        'hide_title_if_empty' => false,
    ];
    $taxonomies = get_terms($arg);

    ?>
  <!-- Categories -->
  <div class="col-12 col-md-12 col-lg-6 ms-auto">
      <div class="portfolio-filter d-sm-flex align-items-center justify-content-lg-end">
          <button data-filter="" class="is-checked mb-2 mb-sm-0">All</button>
          <?php
            foreach ($taxonomies as $taxonomy) {
            ?>
          <button data-filter=" .<?= $taxonomy->slug   ?>" class="mb-2 mb-sm-0"> <?= $taxonomy->name   ?></button>
          <?php } ?>
      </div>
  </div>
  <!-- Categories### -->