<?php

/**
 * Tag_Cload Widget
 *
 * @package Taypo
 */

namespace TAYPO_THEME\Inc;

use WP_Widget;

use TAYPO_THEME\Inc\Traits\Singleton;

class Tag_Cload_Widget extends WP_Widget
{

    use Singleton;

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'tag_cload', // Base ID
            'Tag Cload (Taypo)', // Name
            ['description' => __('Shows All the tags in your site', 'taypo'),] // Args
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

        echo $before_widget;

        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }

        get_template_part('templates\single\tag\tag-items', null, ['show' => 'all']); //widget itself

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
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = '';
        }
?>
<p>
    <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:', 'taypo'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
        name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
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

        return $instance;
    }
}