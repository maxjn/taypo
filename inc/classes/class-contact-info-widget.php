<?php

/**
 * List Menu Widget
 *
 * @package Taypo
 */

namespace TAYPO_THEME\Inc;

use WP_Widget;

use TAYPO_THEME\Inc\Traits\Singleton;

class Contact_Info_Widget extends WP_Widget
{

    use Singleton;

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'contact_info', // Base ID
            'Contact info (Taypo)', // Name
            ['description' => __('Shows 3 addresses,phone nubmbers & emails', 'taypo'),] // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @param array $args     Widget arguments /information about the sidebar.
     * @param array $instance Saved values from database.
     *
     * @see WP_Widget::widget()
     *
     */
    public function widget($args, $instance)
    {
        extract($args);

        $title = apply_filters('widget_title', $instance['title']);
        $class_light = ($id == 'sidebar-2') ? 'text-light' : '';

        $before_widget = ($before_widget == '') ? 'col-md-8 col-lg-4 mt-6 mt-lg-0' : $before_widget;

        echo $before_widget;

        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }
        echo '<ul class="contact-info list-unstyled mt-4">';

        for ($i = 1; $i < 3; $i++) {

            $addressn = 'address' . $i;
            $phonen = 'phone' . $i;
            $emailn = 'email' . $i;
            $address = $instance[$addressn];
            $phone = $instance[$phonen];
            $email = $instance[$emailn];

            if (!empty($address)) {
?>
<li class="mb-4 h6 <?= $class_light ?>">
    <i class="text-primary fs-4 align-middle bi bi-geo-alt me-2"></i> <?= $address ?>
</li>

<?php }
            if (!empty($phone)) {
            ?>

<li class="mb-4 h6">
    <i class="text-primary fs-4 align-middle bi bi-telephone me-2"></i>
    <a class="<?= $class_light ?>" href="tel:<?= $phone ?>"><?= $phone ?></a>
</li>
<?php }
            if (!empty($email)) {
            ?>
<li class="h6">
    <i class="text-primary fs-4 align-middle bi bi-envelope me-2"></i>
    <a class="<?= $class_light ?>" href="mailto:<?= $email ?>"> <?= $email ?></a>
</li>
<?php
            }
        }
        echo '</ul>';
        echo $after_widget;
    }

    /**
     * Back-end widget form.
     *
     * @param array $instance Previously saved values from database.
     *
     * @see WP_Widget::form()
     *
     */
    public function form($instance)
    {

        $title = (isset($instance['title'])) ? $instance['title'] : '';


        ?>
<p>
    <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:', 'taypo'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
        name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
</p>

<?php
        for ($i = 1; $i < 6; $i++) {
            $addressn = 'address' . $i;
            $phonen = 'phone' . $i;
            $emailn = 'email' . $i;
            $address = (isset($instance[$addressn])) ? $instance[$addressn] : '';
            $phone = (isset($instance[$phonen])) ? $instance[$phonen] : '';
            $email = (isset($instance[$emailn])) ? $instance[$emailn] : '';
        ?>
<p>
    <label for="<?php echo $this->get_field_name($addressn); ?>"><?= $addressn . ';' ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id($addressn); ?>"
        name="<?php echo $this->get_field_name($addressn); ?>" type="text" value="<?php echo esc_attr($address); ?>" />

    <label for="<?php echo $this->get_field_name($phonen); ?>"><?= $phonen . ';' ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id($phonen); ?>"
        name="<?php echo $this->get_field_name($phonen); ?>" type="text" value="<?php echo esc_attr($phone); ?>" />

    <label for="<?php echo $this->get_field_name($emailn); ?>"><?= $emailn . ':'; ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id($emailn); ?>"
        name="<?php echo $this->get_field_name($emailn); ?>" type="text" value="<?php echo esc_attr($email); ?>" />
    <hr style=" border: 1px solid gray;" />
</p>

<?php
        }
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     * @see WP_Widget::update()
     *
     */
    public function update($new_instance, $old_instance)
    {
        $instance          = [];
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        for ($i = 1; $i < 3; $i++) {
            $address = 'address' . $i;
            $phone = 'phone' . $i;
            $email = 'email' . $i;
            $instance[$address] = (!empty($new_instance[$address])) ? strip_tags($new_instance[$address]) : '';
            $instance[$phone] = (!empty($new_instance[$phone])) ? strip_tags($new_instance[$phone]) : '';
            $instance[$email] = (!empty($new_instance[$email])) ? strip_tags($new_instance[$email]) : '';
        }


        return $instance;
    }
}