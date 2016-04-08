<?php
/**
 * Plugin Name:Remove Password Strength
 * Plugin URI:http://facebook.com/Alamdeveloper
 * Description:Remove Password Strength On Registration
 * Version:1.0.0
 * Author:Mohd Alam
 * Author URI:http://facebook.com/Alamdeveloper
 * License:IPL
 */
?>

<?php 
    /** Remove Password Strength On Registration **/
    function remove_wc_password_meter() {
        wp_dequeue_script( 'wc-password-strength-meter' );
    }
    add_action( 'wp_print_scripts', 'remove_wc_password_meter', 100 );

?>