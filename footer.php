<!--footer start-->

<footer class="py-11 position-relative overflow-hidden">
    <div class="container z-index-1">
        <div class="row">

            <?php
            dynamic_sidebar('sidebar-3');
            ?>


        </div>
        <!-- Copy Right -->
        <?php
        if (get_field('copy_right_text', 'options')) { ?>
        <div class="row mt-7">
            <div class="col text-center text-dark d-flex justify-content-center">
                <?= get_field('copy_right_text', 'options') ?> </div>
        </div>
        <?php } ?>
        <!-- Copy Right ### -->


    </div>
    <div class="position-absolute animation-1 opacity-1">
        <lottie-player src="https://lottie.host/dc3f8a9d-b6c0-4c1a-ba22-138d2d9240e3/jKmAYbusnp.json"
            background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
        </lottie-player>
    </div>
</footer>

<!--footer end-->
</div>

<!-- page wrapper end -->


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="bi bi-capslock"></i></a></div>

<!--back-to-top end-->

<!-- inject js start -->

<?php
wp_footer();
?>

<!-- inject js End -->
</body>

</html>