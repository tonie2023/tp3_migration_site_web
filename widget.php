<?php 
 class Mon_Widget extends WP_Widget{

    function_construct(){
        'mon widget',
        'Mon Widget',
        array('description' => 'Description de mon widget')
    };
    public function widget( $args, $instance ){
        $title = apply_filters('widget_title', $instance['title'] );
        $text = apply_filters('widget_text', $instance['text'] );

        echo $args['before_widget'];

        if( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        echo '<div class="textwidget">' . do_shortcode( $text ) . '</div>';

        echo $args['after_widget'];
    }
   
    public function form( $instance ){
        $title = isset( $intance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $text = isset( $intance['text'] ) ? esc_textarea( $instance['text'] ) : '';
        <?php
        <p> 
           <label for="<?pho echo $this->get_field_id( 'title' ); ?>"> <?php _e( 'Title' )l ?></label>
           <input class ="widefat" id="<?php echo $this->get_field_is( 'title' ); ?>"
              name="<?php echo $this->get_field_name( 'title' ); ?>"
              type="text"
              value="<?php echo $title; ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'text' ); ?>"> <?php _e( 'Text' ); ?> </label>
            <textarea class="widefat" id="<?php echo $this->get_field_id( 'text' ); ?>"
                 name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $text; ?></textarea>
        </p>
        ?>
    }
   
    public function update( $new_instance, $old_instance ){
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['text'] = ( !empty( $new_instance['text'] ) ) ? sanitize_textarea_field( $new_instance['text'] ) : '';
        return $instance;
    }
    
 } 
?>