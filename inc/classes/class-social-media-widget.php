<?php

/**
 * Social Media Widget
 *
 * @package Taypo
 */

namespace TAYPO_THEME\Inc;

use WP_Widget;

use TAYPO_THEME\Inc\Traits\Singleton;

class Social_Media_Widget extends WP_Widget
{

    use Singleton;

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'social_media', // Base ID
            'Social Media (Taypo)', // Name
            ['description' => __('Shows 10 social media icons & their links (type social media\'s name to set the icon) (dribbble,github,instagram,telegram,whatsapp,youtube,twitter,skype,reddit,linkedin,stack-overflow,spotify,google,discort,... are available) ', 'taypo'),] // Args
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

        $before_widget = ($before_widget == '') ? '<div class="col-md-8 col-lg-4 mt-6 mt-lg-0 ">' : $before_widget;

        $class = (isset($id) && $id == 'sidebar-2') ? 'text-light fs-4' : 'text-dark fs-3';

        echo $before_widget;

        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }
        echo '<ul class="list-inline mt-4">';

        for ($i = 1; $i < 11; $i++) {
            $namen = 'name' . $i;
            $linkn = 'link' . $i;
            $name = $instance[$namen];
            $link = $instance[$linkn];
            if (!empty($name)) {
?>

<li class="list-inline-item me-3">
    <a class="<?= $class ?> " href="<?= $link ?>">
        <i class="bi bi-<?= $name ?>"></i>
    </a>
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
        for ($i = 1; $i < 11; $i++) {
            $namen = 'name' . $i;
            $linkn = 'link' . $i;
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
        for ($i = 1; $i < 11; $i++) {
            $name = 'name' . $i;
            $link = 'link' . $i;
            $instance[$name] = (!empty($new_instance[$name])) ? strip_tags($new_instance[$name]) : '';
            $instance[$link] = (!empty($new_instance[$link])) ? strip_tags($new_instance[$link]) : '';
        }


        return $instance;
    }
}