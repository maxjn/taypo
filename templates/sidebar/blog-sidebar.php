<?php
if (is_active_sidebar('sidebar-1')) {
?>
<div class="col-12 col-lg-5 ms-auto ps-lg-8">
    <div class="p-5 rounded-4 border border-light">
        <?php
            dynamic_sidebar('sidebar-1');
            ?>
    </div>
</div>

<?php
}