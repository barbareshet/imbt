<?php

/* 
 * template name: User Page
 * 
 * 
 */
if ( !is_user_logged_in() ){
    printf(_esc_html('please <a href="1%$S">Register here</a)>', 'imbt');
}  else {
echo 'Welcome' . $user->get_user_name($user->ID);
}
