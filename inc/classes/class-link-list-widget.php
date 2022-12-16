<?php

/**
 * List Menu Widget
 *
 * @package Taypo
 */

namespace TAYPO_THEME\Inc;

use WP_Widget;

use TAYPO_THEME\Inc\Traits\Singleton;

class Link_List_Widget extends WP_Widget
{

    use Singleton;

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'link_list', // Base ID
            'Link List (Taypo)', // Name
            ['description' => __('Shows a list of 5 or less links', 'taypo'),] // Args
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

        $before_widget = ($before_widget == '') ? '<div class="col-md-6 col-lg-2 mt-6 mt-lg-0 footer-menu ">' : $before_widget;

        $class_white = (isset($id) && $id == 'sidebar-2') ? 'text-white' : '';

        echo $before_widget;

        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }
        echo '<ul class="navbar-nav list-unstyled mb-0">';

        for ($i = 1; $i < 6; $i++) {
            $itemn = 'item' . $i;
            $linkn = 'link' . $i;
            $item = $instance[$itemn];
            $link = $instance[$linkn];
            if (!empty($item)) {
?>

<li class="mb-3">
    <a class="nav-link <?= $class_white ?>" href="<?= $link ?>"><?= $item ?></a>
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
            $itemn = 'item' . $i;
            $linkn = 'link' . $i;
            $item = (isset($instance[$itemn])) ? $instance[$itemn] : '';
            $link = (isset($instance[$linkn])) ? $instance[$linkn] : '';
        ?>
<p>
    <label for="<?php echo $this->get_field_name($itemn); ?>"><?= $itemn . ';' ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id($itemn); ?>"
        name="<?php echo $this->get_field_name($itemn); ?>" type="text" value="<?php echo esc_attr($item); ?>" />

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
        for ($i = 1; $i < 6; $i++) {
            $item = 'item' . $i;
            $link = 'link' . $i;
            $instance[$item] = (!empty($new_instance[$item])) ? strip_tags($new_instance[$item]) : '';
            $instance[$link] = (!empty($new_instance[$link])) ? strip_tags($new_instance[$link]) : '';
        }


        return $instance;
    }
}