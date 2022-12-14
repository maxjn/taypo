<?php
if (!is_front_page()) {


    $big = 999999999; // need an unlikely integer
    $links = paginate_links(array(
        'base'      => str_replace($big, '%#%', get_pagenum_link($big)),
        'format'    => '?paged=%#%',
        'current'   => max(1, get_query_var('paged')),
        'prev_text' => __('Previous', 'taypo'),
        'next_text' => __('Next', 'taypo'),
        'type'      => 'array',
    ));

?>

<div class="row mt-5">
    <div class="col-12">
        <nav aria-label="...">
            <ul class="pagination justify-content-center">
                <?php
                    foreach ($links as $link) {
                        echo '<li class="page-item">';
                        echo $link;
                        echo '</li>';
                    }
                    ?>
            </ul>
        </nav>
    </div>
</div>

<?php
} ?>