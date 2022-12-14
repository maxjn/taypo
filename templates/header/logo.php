<?php
if (function_exists('the_custom_logo') && has_custom_logo()) {
?>
<img class="img-fluid" src="<?= get_custom_logo(); ?>" alt="Logo">
<?php

} else { ?>
<img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/libraries/images/logo.png" alt="Logo">
<?php
}