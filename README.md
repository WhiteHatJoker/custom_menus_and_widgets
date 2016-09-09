# Adding Extra Menus or Widgets #
If you are not satisfied with the amount of menu areas or widget areas provided by your theme, you can use the code from this repository to add extra menus or widgets or both.
## Installation for Menus
1. Copy the lines 3-13 from functions.php of current repository and place it in your functions.php file.
2. In your template file, wherever you would like your custom menu to appear add the following `<?php wp_nav_menu( array('menu' => 'Header Menu' )); ?>`.
3. If you want to add more than one custom menu just add new line into an array in place of comments on line 8, for example, `, 'footer-menu' => __( 'Footer Menu' )`.
## Installation for Widgets
1. Copy the lines 15-32 from functions.php of current repository and place it in your functions.php file.
2. In your template file, wherever you would like your custom widget to appear add the following `<?php if ( ! dynamic_sidebar( 'head' ) ); ?>`.
3. It is simple, now you have the new widget area in your Appearance->Widgets called Header to fill in the widget.
4. If you want to add more than one widget are just copy the code from line 30 and paste it below replacing function's parameters with your prefered naming.
