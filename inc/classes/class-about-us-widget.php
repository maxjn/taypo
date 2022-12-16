<?php

/**
 * About Widget
 *
 * @package Taypo
 */

namespace TAYPO_THEME\Inc;

use WP_Widget;

use TAYPO_THEME\Inc\Traits\Singleton;

class About_Us_Widget extends WP_Widget
{

    use Singleton;

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'aboutus', // Base ID
            'About Us (Taypo)', // Name
            ['description' => __('Shows your logo and your descripton about your business including email & a phone number', 'taypo'),] // Args
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

        $imgUrl =  $instance['imgUrl'];
        $description =  $instance['description'];
        $email =  $instance['email'];
        $phone =  $instance['phone'];

        $class_white = (isset($id) && $id == 'sidebar-2') ? 'text-white' : '';
        $class_lead = (isset($id) && $id == 'sidebar-2') ? 'lead' : '';

        $before_widget = ($before_widget == '') ? '<div class="col-md-12 col-lg-4 pe-lg-7 ">' : $before_widget;

        echo $before_widget;
        if (!empty($imgUrl)) {
?>
<a class="footer-logo" href="<?= home_url() ?>">
    <img class="img-fluid" src="<?= $imgUrl ?>" alt="Logo">
</a>
<?php
        }
        if (!empty($description)) {
            echo '<p class="my-4  ' . $class_white . ' ' . $class_lead . ' ">' . $description . '</p>';
        }
        ?>
<ul class="media-icon list-unstyled">
    <?php

            if (!empty($email)) {
            ?>
    <li class="mb-2">
        <a class="h6 <?= $class_white ?> " href="mailto:<?= $email ?>"> <?= $email ?></a>
    </li>
    <?php
            }
            if (!empty($phone)) {
            ?>
    <li class="mb-2">
        <a class="h6 <?= $class_white ?>" href="tel:<?= $phone ?>"> <?= $phone ?></a>
    </li>
    <?php
            }


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

            $imgUrl = (isset($instance['imgUrl'])) ? $imgUrl = $instance['imgUrl'] : $imgUrl = __('img Url', 'taypo');
            $description = (isset($instance['description'])) ? $description = $instance['description'] : $description = __('New Description', 'taypo');
            $email = (isset($instance['email'])) ? $email = $instance['email'] : $email = __('email@gmail.com', 'taypo');
            $phone = (isset($instance['phone'])) ? $phone = $instance['phone'] : $phone = __('+989171112233', 'taypo');

            ?>
    <p>
        <label for="<?php echo $this->get_field_name('imgUrl'); ?>"><?php _e('imgUrl:', 'taypo'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('imgUrl'); ?>"
            name="<?php echo $this->get_field_name('imgUrl'); ?>" type="text"
            value="<?php echo esc_attr($imgUrl); ?>" />

    </p>
    <p>
        <label for="<?php echo $this->get_field_name('description'); ?>"><?php _e('description:', 'taypo'); ?></label>
        <textarea class="widefat" id="<?php echo $this->get_field_id('description'); ?>"
            name="<?php echo $this->get_field_name('description'); ?>" type="text"
            value="<?php echo esc_attr($description); ?>"></textarea>

    </p>
    <p>
        <label for="<?php echo $this->get_field_name('email'); ?>"><?php _e('email:', 'taypo'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>"
            name="<?php echo $this->get_field_name('email'); ?>" type="email" value="<?php echo esc_attr($email); ?>" />

    </p>
    <p>
        <label for="<?php echo $this->get_field_name('phone'); ?>"><?php _e('phone:', 'taypo'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>"
            name="<?php echo $this->get_field_name('phone'); ?>" type="phone" value="<?php echo esc_attr($phone); ?>" />

    </p>
    <?php
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
            $instance['imgUrl'] = (!empty($new_instance['imgUrl'])) ? strip_tags($new_instance['imgUrl']) : '';
            $instance['description'] = (!empty($new_instance['description'])) ? strip_tags($new_instance['description']) : '';
            $instance['email'] = (!empty($new_instance['email'])) ? strip_tags($new_instance['email']) : '';
            $instance['phone'] = (!empty($new_instance['phone'])) ? strip_tags($new_instance['phone']) : '';

            return $instance;
        }
    }