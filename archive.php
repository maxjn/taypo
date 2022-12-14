<?php
get_header();


get_template_part('templates\hero\hero-title')
?>
<!--body content start-->

<div class="page-content">
    <?php
    get_template_part('templates\card\blog\container\blog-card-small')
    ?>
</div>

<!--body content end-->
<?php
get_footer();