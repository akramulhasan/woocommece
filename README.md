How to manage navigation/menu items based on user role

[step-1: Create a menu from dashboard and put class there and set the condition according that class]

//PHP CODE

add_action('wp_head','ak_user_nav_visibility');
function ak_user_nav_visibility() {

    if ( is_user_logged_in() ) {
    	
        $output="<style> .nav-login { display: none !important; } </style>";
        $output.="<style> .nav-register { display: none !important; } </style>";
        $output.="<style> .nav-out { display: block !important; } </style>";
        ?>
		<a class="logout" href="<?php echo wp_logout_url(home_url('/my-account')); ?>">Logout</a>

        <?php
    } else {
        $output="<style> .nav-account { display: none; } </style>";
    }

    echo $output;}


N:B: This code will disable login and registration menu item and will show Logout when user logged in.
