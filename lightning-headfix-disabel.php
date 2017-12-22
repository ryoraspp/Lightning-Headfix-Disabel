<?php
/**
 * Plugin Name: Lightning Headfix Disabel
 * Plugin URI: https://github.com/ryoraspp/Lightning-Headfix-Disabel
 * Version: 1
 * Author: ryoraspp
 * Author URI: https:/ryo.nagoya
 * Description: This is a plug-ins that  disable the headlix of the theme "Lightning".
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

add_filter( 'lightning_headfix_enable', 'lightning_headfix_disabel');

function lightning_headfix_disabel(){
    return false;
}
