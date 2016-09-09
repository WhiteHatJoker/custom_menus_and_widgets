<?php

// Function for adding extra custom menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
      //Create extra menus here, but you would still need to call them in template where you would like them to appear
    )
  );
}
add_action( 'init', 'register_my_menus' );


// Function for creating extra widgets
function create_widget($name, $id, $description) {
 
    register_sidebar(array(
        'name' => __( $name ),    
        'id' => $id,
        'description' => __( $description ),
        'before_widget' => '<div id="'.$id.'" class="widget %1$s %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
 
}
 
create_widget("Header", "head", "Displays in the header of the site");
//Copy the code above and replace the function parameters with new information to created additional widgets for your wordpress


?>
