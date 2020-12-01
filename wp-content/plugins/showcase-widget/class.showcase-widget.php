<?php
class Showcase_Widget extends WP_Widget
{

  /**
   * Sets up the widgets name etc
   */
  public function __construct()
  {
    parent::__construct(
      'showcase_widget', // Rise ID
      __('Showcase Widget', 'text_domain'), // Name
      array('description' => __('A widget to display
 showcase content', 'text_domain'),) // Args
    );
  }

  /**
   * Outputs the content of the widget
   *
   * @param array $args
   * @param array $instance
   */
  public function widget($args, $instance)
  {
    // outputs the content of the widget
    $title = apply_filters(
      'widget_title',
      $instance['title']
    );
    $heading = $instance['heading'];
    $text = $instance['text'];

    echo $args['before_widget'];
    if (!empty($title))
      echo $args['before_title'] . $title . $args['after_title'];

    // Display cONTENT
    echo $this->getContent($heading, $text);
    echo $args['after_widget'];
  }

  public function getContent($heading, $text)
  {
    $output =  '<h1>' . $heading . '</h1>
              <p>' . $text . '</p>
              <button class="button">Start Shopping</button>';

    // Return Output String
    return $output;
  }

  /**
   * Outputs the options form on admin
   *
   * @param array $instance The widget options
   */
  public function form($instance)
  {
    if (isset($instance['title'])) {
      $title = $instance['title'];
    } else {
      $title = __('Showcase Widget', 'text_domain');
    }
    $heading = $instance['heading'];
    $text = $instance['text'];

?>
    <p>
      <label for="<?php echo $this->get_field_id('title') ?>"><?php _e('Title:'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" type="text" name="<?php echo $this->get_field_name('name'); ?>" value="<?php echo esc_attr($title) ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('heading') ?>"><?php _e('Heading:'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('heading'); ?>" type="text" name="<?php echo $this->get_field_name('heading'); ?>" value="<?php echo esc_attr($heading) ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('text') ?>"><?php _e('Text:'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('text'); ?>" type="text" name="<?php echo $this->get_field_name('text'); ?>" value="<?php echo esc_attr($text) ?>">
    </p>
<?php
  }

  /**
   * Processing widget options on save
   *
   * @param array $new_instance The new options
   * @param array $old_instance The previous options
   *
   * @return array
   */
  public function update($new_instance, $old_instance)
  {
    $instance = array();

    $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
    $instance['heading'] = (!empty($new_instance['heading'])) ? strip_tags($new_instance['heading']) : '';
    $instance['text'] = (!empty($new_instance['text'])) ? strip_tags($new_instance['text']) : '';

    return $instance;
  }
}
