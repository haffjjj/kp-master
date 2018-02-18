<?php

/*
Plugin Name: Landing-SMP 1 Baturaden
Plugin URI: https://smp1baturaden.sch.id
Description: Used by millions, Akismet is quite possibly the best way in the world to <strong>protect your blog from spam</strong>. It keeps your site protected even while you sleep. To get started: activate the Akismet plugin and then go to your Akismet Settings page to set up your API key.
Version: 1
Author: TS
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: TS
 */

// create custom plugin settings menu
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu()
{

	//create new top-level menu
    add_menu_page('My Cool Plugin Settings', 'Landing Setting', 'administrator', __FILE__, 'my_cool_plugin_settings_page', plugins_url('/images/icon.png', __FILE__));

	//call register settings function
    add_action('admin_init', 'register_my_cool_plugin_settings');
}


function register_my_cool_plugin_settings()
{
	//register our settings
    register_setting('my-cool-plugin-settings-group', 'new_option_name');
    register_setting('my-cool-plugin-settings-group', 'some_other_option');
    register_setting('my-cool-plugin-settings-group', 'option_etc');
}

function my_cool_plugin_settings_page()
{
    ?>
<div class="wrap">
<h1>Landing Setting</h1>

<form method="post" action="options.php">
    <?php settings_fields('my-cool-plugin-settings-group'); ?>
    <?php do_settings_sections('my-cool-plugin-settings-group'); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Banner</th>
        <td><input type="text" name="new_option_name" value="<?php echo esc_attr(get_option('new_option_name')); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Sambutan</th>
        <td><input type="text" name="some_other_option" value="<?php echo esc_attr(get_option('some_other_option')); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Sejarah</th>
        <td><input type="text" name="option_etc" value="<?php echo esc_attr(get_option('option_etc')); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php 
} 