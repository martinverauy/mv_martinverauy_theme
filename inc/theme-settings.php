<?php 
/**
 * Theme Settings
 *
 * @package MV_MartinVeraUy_Theme
 */

add_action('admin_menu', 'mv_martinverauy_theme_admin');
function mv_martinverauy_theme_admin() {
  add_menu_page(
  'MV_MartinVeraUy_Theme',  // Admin page title
  'MV_Theme',  // Admin menu label
  'manage_options',
  'mv_martinverauy_theme_options', // Admin slug
  'mv_martinverauy_theme_page'); // Display Page
}

add_action('admin_init', 'mv_martinverauy_theme_items');
function mv_martinverauy_theme_items() { 
  $settings = array(
    'mv_martinverauy_theme_id' => array(
      'title'=>'My Theme Settings',
      'page'=>'my_theme_option',
      'fields'=> array(
        array(
        'id'=> 'behance',
        'title'=>'Behance',
        'callback'=> 'text_callback'
        ),
        array(
        'id'=> 'facebook',
        'title'=>'Facebook',
        'callback'=> 'text_callback'
        ),
        array(
        'id'=> 'twitter',
        'title'=>'Twitter',
        'callback'=> 'text_callback'
        ),
        array(
        'id'=> 'instagram',
        'title'=>'Instagram',
        'callback'=> 'text_callback'
        ),
        array(
        'id'=> 'pinterest',
        'title'=>'Pinterest',
        'callback'=> 'text_callback'
        ),
        array(
        'id'=> 'linkedin',
        'title'=>'Linkedin',
        'callback'=> 'text_callback'
        ),
        array(
        'id'=> 'contact_shortcode',
        'title'=>'Contact Form 7 Shortcode',
        'callback'=> 'shortcode_callback'
        ),
        array(
        'id'=> 'mailchimp_shortcode',
        'title'=>'Mailchimp Shortcode',
        'callback'=> 'shortcode_callback'
        ),

      )
    )
  );

  foreach( $settings as $id => $values){
      add_settings_section( 
          $id, // ID used to identify this section and with which to register options
          $values['title'],
          'description_callback', // Callback used to render the description of the section
          $values['page'] // Page on which to add this section of options
      );
      
      foreach ($values['fields'] as $field) {
          // code...
          add_settings_field(  
              $field['id'],   // ID used to identify the field throughout the theme             
              $field['title'],     // The label to the left of the option interface element
              $field['callback'],   
              $values['page'],   // The page on which this option will be added            
              $id,        // ID of the section
              array(
                  $values['page'],        //option name
                  $field['title']     //id 
              ) 
          );
      }
      
      register_setting($values['page'], $values['page']);
      
  } // end of foreach
}

/*********************************
 * Callbacks
**********************************/
function description_callback() { 
    echo '<p>Agregar redes sociales disponibles para el sitio y shortcodes de plugins.</p>'; 
}

function textarea_callback($args) { 
    $options = get_option($args[0]); 
    echo '<textarea rows="8" cols="50" class="large-text" id="'  . $args[1] . '" name="'. $args[0] .'['  . $args[1] . ']">' . $options[''  . $args[1] . ''] . '</textarea>';
}

function text_callback($args) { 
    $options = get_option($args[0]); 
    echo '<input type="text" class="regular-text" id="'  . $args[1] . '" name="'. $args[0] .'['  . $args[1] . ']" value="' . $options[''  . $args[1] . ''] . '"></input>';
}

function shortcode_callback($args) { 
    $options = get_option($args[0]); 
    echo '<input type="text" class="regular-text" id="'  . $args[1] . '" name="'. $args[0] .'['  . $args[1] . ']" value="' . $options[''  . $args[1] . ''] . '"></input><p class="help-block">Shortcode code without the quotes.</p>';
}

/***************************************
 * Display Page
 ***************************************/
function mv_martinverauy_theme_page() {
?>
    <div class="wrap">  
        <div id="icon-themes" class="icon32"></div>  
        <h2>MV_MartinVeraUy_Theme</h2>  
        <?php settings_errors(); ?>   

        <form method="post" action="options.php">  
            <?php 
            settings_fields( 'my_theme_option' );
            do_settings_sections( 'my_theme_option' );
            submit_button();
            ?>
        </form> 
    </div> 
<?php
}
