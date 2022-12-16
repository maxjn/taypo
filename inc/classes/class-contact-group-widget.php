<?php

/**
 * Contact Group Widget
 *
 * @package Taypo
 */

namespace TAYPO_THEME\Inc;

use WP_Widget;

use TAYPO_THEME\Inc\Traits\Singleton;

class Contact_Group_Widget extends WP_Widget
{

    use Singleton;

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'contact_group', // Base ID
            'Contact Group (Taypo)', // Name
            ['description' => __('Shows 3 Addresses , 10 social media icons & their links and a subscribe form.   (type social media\'s name to set the icon) (dribbble,github,instagram,telegram,whatsapp,youtube,twitter,skype,reddit,linkedin,stack-overflow,spotify,google,discort,... are available) ', 'taypo'),] // Args
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
        $subscribeTitle = $instance['subscribeTitle'];
        $subscriLink = $instance['subscriLink'];

        $before_widget = ($before_widget == '') ? '<div class="col-md-8 col-lg-4 mt-6 mt-lg-0 ">' : $before_widget;

        $class_color = (isset($id) && $id == 'sidebar-2') ? 'text-light' : 'text-dark';

        echo $before_widget;

        // Title
        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }

        // Addresses
        for ($i = 1; $i < 3; $i++) {
            $addressn = 'address' . $i;
            $address = $instance[$addressn];
            if (!empty($name)) {
                echo '<h6 class="mb-3 text-muted">' . $address . '</h6>';
            }
        }

        echo '<ul class="list-inline mb-3">';
        //Social Media
        for ($i = 1; $i < 11; $i++) {
            $namen = 'socialName' . $i;
            $linkn = 'socialLink' . $i;
            $name = $instance[$namen];
            $link = $instance[$linkn];
            if (!empty($name)) {
?>

<li class="list-inline-item">
    <a class="<?= $class_color ?> fs-3" href="<?= $link ?>">
        <i class="bi bi-<?= $name ?>"></i>
    </a>
</li>
<?php
            }
        }
        echo '</ul>';

        //Subscribe Form
        if (!empty($subscriLink)) {
            ?>
<!-- Subscribe-form Start -->
<div class="subscribe-form">
    <p class="mb-3 font-w-6 text-primary"><?= $subscribeTitle ?></p>
    <form id="mc-form" class="d-flex align-items-center shadow p-2 rounded bg-white" action="<?= $subscriLink ?>">
        <input type="email" value="" name="EMAIL" class="email form-control bg-light border-0 me-2" id="mc-email"
            placeholder="<?php __('Enter your email address', 'taypo') ?>" required="">
        <input class="btn btn-dark" type="submit" name="subscribe" value="Subscribe">
    </form>
</div>
<!-- Subscribe-form End -->
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

        $title = (isset($instance['title'])) ? $instance['title'] : '';
        $subscribeTitle = (isset($instance['subscribeTitle'])) ? $instance['subscribeTitle'] : '';
        $subscriLink = (isset($instance['subscriLink'])) ? $instance['subscriLink'] : '';


        ?>
<p>
    <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:', 'taypo'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
        name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
</p>

<h3>Addresses</h3>
<?php
        for ($i = 1; $i < 4; $i++) {
            $addressn = 'address' . $i;
            $address = (isset($instance[$addressn])) ? $instance[$addressn] : '';
        ?>
<p>
    <label for="<?php echo $this->get_field_name($addressn); ?>"><?= $addressn . ':' ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id($addressn); ?>"
        name="<?php echo $this->get_field_name($addressn); ?>" type="text" value="<?php echo esc_attr($address); ?>" />

    <hr style=" border: 1px solid gray;" />
</p>

<?php
        }
        ?>
<h3>Social Media</h3>
<?php
        for ($i = 1; $i < 11; $i++) {
            $namen = 'socialName' . $i;
            $linkn = 'socialLink' . $i;
            $name = (isset($instance[$namen])) ? $instance[$namen] : '';
            $link = (isset($instance[$linkn])) ? $instance[$linkn] : '';
        ?>
<p>
    <label for="<?php echo $this->get_field_name($namen); ?>"><?= 'Social Media\'s ' . $namen . ':' ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id($namen); ?>"
        name="<?php echo $this->get_field_name($namen); ?>" type="text" value="<?php echo esc_attr($name); ?>" />

    <label for="<?php echo $this->get_field_name($linkn); ?>"><?= $linkn . ':'; ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id($linkn); ?>"
        name="<?php echo $this->get_field_name($linkn); ?>" type="text" value="<?php echo esc_attr($link); ?>" />
    <hr style=" border: 1px solid gray;" />
</p>

<?php
        }
        ?>
<p>
<h3>Subscribe Form </h3>
<label for="<?php echo $this->get_field_name('subscribeTitle'); ?>"><?= 'Title:' ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('subscribeTitle'); ?>"
    name="<?php echo $this->get_field_name('subscribeTitle'); ?>" type="text"
    value="<?php echo esc_attr($subscribeTitle); ?>" />

<label for="<?php echo $this->get_field_name('subscriLink'); ?>"><?= 'Action Link:' ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('subscriLink'); ?>"
    name="<?php echo $this->get_field_name('subscriLink'); ?>" type="text"
    value="<?php echo esc_attr($subscriLink); ?>" />

<hr style=" border: 1px solid gray;" />
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
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        for ($i = 1; $i < 4; $i++) {
            $name = 'address' . $i;
            $instance[$name] = (!empty($new_instance[$name])) ? strip_tags($new_instance[$name]) : '';
        }
        for ($i = 1; $i < 11; $i++) {
            $name = 'socialName' . $i;
            $link = 'socialLink' . $i;
            $instance[$name] = (!empty($new_instance[$name])) ? strip_tags($new_instance[$name]) : '';
            $instance[$link] = (!empty($new_instance[$link])) ? strip_tags($new_instance[$link]) : '';
        }

        $instance['subscribeTitle'] = (!empty($new_instance['subscribeTitle'])) ? strip_tags($new_instance['subscribeTitle']) : '';
        $instance['subscriLink'] = (!empty($new_instance['subscriLink'])) ? strip_tags($new_instance['subscriLink']) : '';


        return $instance;
    }
}