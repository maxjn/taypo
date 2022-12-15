<?php
if (is_active_sidebar('sidebar-1')) {
?>
<div class="col-12 col-lg-5 ms-auto ps-lg-8">
    <div class="p-5 rounded-4 border border-light">


        <?php
            dynamic_sidebar('sidebar-1');

            //*Taxonomies
            get_template_part('templates\widget\container\search-form');

            //*Taxonomies
            get_template_part('templates\widget\container\taxonomy-list');

            //*Recent Posts
            get_template_part('templates\widget\container\recent-posts');

            //*Tags
            get_template_part('templates\widget\container\tags-list');

            ?>




    </div>
</div>

<?php
}