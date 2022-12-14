<?php
get_header();

///*Title
get_template_part('templates\hero\hero-title');
?>
<!--body content start-->

<div class="page-content">
    <?php
    ///*Posts
    get_template_part('templates\card\blog\container\blog-card-small');
    ?>
</div>

<!--body content end-->
<?php
get_footer();