<?php
get_header();

///*Title
if (!is_author()) {
    get_template_part('templates\hero\hero-title');
}
?>
<!--body content start-->

<div class="page-content">
    <?php
    if (is_author()) {
        get_template_part('templates\archive\author-info');
    }
    ///*Posts
    get_template_part('templates\card\blog\container\blog-card-small');
    ?>
</div>

<!--body content end-->
<?php
get_footer();