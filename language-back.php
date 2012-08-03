<?php
/*
Plugin Name: LanguageBack
Plugin URI: http://moxu.eu
Description: Pluglin the lets you enforce a locale for your admin interface and/or frontend
Author: Florin Iacob (mox|moxu|moxul|zamox)
Version: 1.0
License : LGPLv3 or later
License URI: http://www.gnu.org/licenses/lgpl-3.0.html
Author URI: http://moxu.eu
*/


function language_back_get_locale($domain) { return get_option("language_back_{$domain}_locale"); }
function language_back_filter_locale($locale) { return language_back_get_locale( is_admin() ? 'back' : 'front'); }
add_filter('locale', 'language_back_filter_locale');
function language_back_init()
{
    foreach(array('front','back') as $domain)
        if ( ! get_option("language_back_{$domain}_locale"))
            add_option("language_back_{$domain}_locale", get_locale() ? get_locale() : 'en_US');
}
language_back_init();
function language_back_deactivate(){ foreach(array('front','back') as $domain) delete_option("language_back_{$domain}_locale"); }
register_deactivation_hook(__FILE__, 'language_back_deactivate');
function language_back_admin_page()
{ ?>
    <h2>LanguageBack Locale Settings</h2>
    <?php if ($message = language_back_get_save_result()) { ?>
        <div class="message updated"><p><?php echo $message; ?></p></div>
    <?php } ?>
    
    <form method="post" style="padding:20px;">
        <label for="front">Frontend : </label>
        <input name="front" type="text" value="<?php echo language_back_get_locale('front'); ?>" />
        <label for="back">Backend : </label>
        <input name="back" type="text" value="<?php echo language_back_get_locale('back'); ?>" />
        <input type="submit" value="Save" />
    </form>
<?php }
function language_back_get_save_result()
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST' or ! $_POST) return NULL;
    foreach(array('front','back') as $domain)
        if (isset($_POST[$domain]) and $_POST[$domain])
            update_option("language_back_{$domain}_locale", $_POST[$domain]);
    return "Settings Saved.";
}
function language_back_setup_admin_page() { add_options_page('LanguageBack', 'LanguageBack', 'manage_options', 'language-back', 'language_back_admin_page'); }
add_action('admin_menu', 'language_back_setup_admin_page');

