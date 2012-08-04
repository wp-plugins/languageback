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


function language_back_known_locales($locale = NULL)
{
    $locales = array (
        'af' => 'Afrikaans',  'sq' => 'Albanian',  'am' => 'Amharic',  'ar_DZ' => 'Arabic - Algeria',  'ar_BH' => 'Arabic - Bahrain',  'ar_EG' => 'Arabic - Egypt',
        'ar_IQ' => 'Arabic - Iraq',  'ar_JO' => 'Arabic - Jordan',  'ar_KW' => 'Arabic - Kuwait',  'ar_LB' => 'Arabic - Lebanon',  'ar_LY' => 'Arabic - Libya',  'ar_MA' => 'Arabic - Morocco',
        'ar_OM' => 'Arabic - Oman',  'ar_QA' => 'Arabic - Qatar',  'ar_SA' => 'Arabic - Saudi Arabia',  'ar_SY' => 'Arabic - Syria',  'ar_TN' => 'Arabic - Tunisia',  'ar_AE' => 'Arabic - United Arab Emirates',
        'ar_YE' => 'Arabic - Yemen',  'hy' => 'Armenian',  'as' => 'Assamese',  'az_AZ' => 'Azeri - Latin',  'eu' => 'Basque',  'be' => 'Belarusian',
        'bn' => 'Bengali - India',  'bs' => 'Bosnian',  'bg' => 'Bulgarian',  'my' => 'Burmese',  'ca' => 'Catalan',  'zh_CN' => 'Chinese - China',
        'zh_HK' => 'Chinese - Hong Kong SAR',  'zh_MO' => 'Chinese - Macau SAR',  'zh_SG' => 'Chinese - Singapore',  'zh_TW' => 'Chinese - Taiwan',  'hr' => 'Croatian',  'cs' => 'Czech',
        'da' => 'Danish',  'dv' => 'Divehi; Dhivehi; Maldivian',  'nl_BE' => 'Dutch - Belgium',  'nl_NL' => 'Dutch - Netherlands',  'en_AU' => 'English - Australia',  'en_BZ' => 'English - Belize',
        'en_CA' => 'English - Canada',  'en_CB' => 'English - Caribbean',  'en_GB' => 'English - Great Britain',  'en_IN' => 'English - India',  'en_IE' => 'English - Ireland',  'en_JM' => 'English - Jamaica',
        'en_NZ' => 'English - New Zealand',  'en_PH' => 'English - Phillippines',  'en_ZA' => 'English - Southern Africa',  'en_TT' => 'English - Trinidad',  'en_US' => 'English - United States',  'et' => 'Estonian',
        'fo' => 'Faroese',  'fa' => 'Farsi - Persian',  'fi' => 'Finnish',  'fr_BE' => 'French - Belgium',  'fr_CA' => 'French - Canada',  'fr_FR' => 'French - France',
        'fr_LU' => 'French - Luxembourg',  'fr_CH' => 'French - Switzerland',  'mk' => 'FYRO Macedonia',  'gd_IE' => 'Gaelic - Ireland',  'gd' => 'Gaelic - Scotland',  'de_AT' => 'German - Austria',
        'de_DE' => 'German - Germany',  'de_LI' => 'German - Liechtenstein',  'de_LU' => 'German - Luxembourg',  'de_CH' => 'German - Switzerland',  'el' => 'Greek',  'gn' => 'Guarani - Paraguay',
        'gu' => 'Gujarati',  'he' => 'Hebrew',  'hi' => 'Hindi',  'hu' => 'Hungarian',  'is' => 'Icelandic',  'id' => 'Indonesian',
        'it_IT' => 'Italian - Italy',  'it_CH' => 'Italian - Switzerland',  'ja' => 'Japanese',  'kn' => 'Kannada',  'ks' => 'Kashmiri',  'kk' => 'Kazakh',
        'km' => 'Khmer',  'ko' => 'Korean',  'lo' => 'Lao',  'la' => 'Latin',  'lv' => 'Latvian',  'lt' => 'Lithuanian',
        'ms_BN' => 'Malay - Brunei',  'ms_MY' => 'Malay - Malaysia',  'ml' => 'Malayalam',  'mt' => 'Maltese',  'mi' => 'Maori',  'mr' => 'Marathi',
        'mn' => 'Mongolian',  'ne' => 'Nepali',  'no_NO' => 'Norwegian - Nynorsk',  'or' => 'Oriya',  'pl' => 'Polish',  'pt_BR' => 'Portuguese - Brazil',
        'pt_PT' => 'Portuguese - Portugal',  'pa' => 'Punjabi',  'rm' => 'Raeto-Romance',  'ro_MO' => 'Romanian - Moldova',  'ro_RO' => 'Romanian - Romania',  'ru' => 'Russian',
        'ru_MO' => 'Russian - Moldova',  'sa' => 'Sanskrit',  'sr_SP' => 'Serbian - Latin',  'tn' => 'Setsuana',  'sd' => 'Sindhi',  'si' => 'Sinhala; Sinhalese',
        'sk' => 'Slovak',  'sl' => 'Slovenian',  'so' => 'Somali',  'sb' => 'Sorbian',  'es_AR' => 'Spanish - Argentina',  'es_BO' => 'Spanish - Bolivia',
        'es_CL' => 'Spanish - Chile',  'es_CO' => 'Spanish - Colombia',  'es_CR' => 'Spanish - Costa Rica',  'es_DO' => 'Spanish - Dominican Republic',  'es_EC' => 'Spanish - Ecuador',  'es_SV' => 'Spanish - El Salvador',
        'es_GT' => 'Spanish - Guatemala',  'es_HN' => 'Spanish - Honduras',  'es_MX' => 'Spanish - Mexico',  'es_NI' => 'Spanish - Nicaragua',  'es_PA' => 'Spanish - Panama',  'es_PY' => 'Spanish - Paraguay',
        'es_PE' => 'Spanish - Peru',  'es_PR' => 'Spanish - Puerto Rico',  'es_ES' => 'Spanish - Spain (Traditional)',  'es_UY' => 'Spanish - Uruguay',  'es_VE' => 'Spanish - Venezuela',  'sw' => 'Swahili',
        'sv_FI' => 'Swedish - Finland',  'sv_SE' => 'Swedish - Sweden',  'tg' => 'Tajik',  'ta' => 'Tamil',  'tt' => 'Tatar',  'te' => 'Telugu',
        'th' => 'Thai',  'bo' => 'Tibetan',  'ts' => 'Tsonga',  'tr' => 'Turkish',  'tk' => 'Turkmen',  'uk' => 'Ukrainian',
        'ur' => 'Urdu',  'uz_UZ' => 'Uzbek - Latin',  'vi' => 'Vietnamese',  'cy' => 'Welsh',  'xh' => 'Xhosa',  'yi' => 'Yiddish','zu' => 'Zulu'
    );
    return ($locale === NULL) ? $locales : (array_search($locale,$locales) or array_key_exists($locale,$locales));
}

function language_back_locales_options($selected_or_echo = NULL, $echo = false)
{
    list($selected,$echo) = array( $selected_or_echo, $selected_or_echo === true ? true : $echo);
    if( ! $echo) ob_start();
    foreach(language_back_known_locales() as $code => $name) { ?>
        <option value="<?php echo $code; ?>"<?php echo ($selected == $code) ? ' selected="selected"' : ''; ?>>
            <?php echo "{$name} ({$code})"; ?>
        </option>
    <?php }
    return ( ! $echo) ? ob_get_clean() : NULL;
}

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
        <select type="dropdown" name="front">
            <?php language_back_locales_options(language_back_get_locale('front'), true); ?>
        </select>
        <label for="back">Backend : </label>
        <select type="dropdown" name="back">
            <?php language_back_locales_options(language_back_get_locale('back'), true); ?>
        </select>
        <input type="submit" value="Save" />
    </form>
<?php }
function language_back_get_save_result()
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST' or ! $_POST) return NULL;
    foreach(array('front','back') as $domain)
        if (isset($_POST[$domain]) and $_POST[$domain])
            update_option("language_back_{$domain}_locale", $_POST[$domain]);
    return "Settings Saved (visible on next refresh).";
}
function language_back_setup_admin_page() { add_options_page('LanguageBack', 'LanguageBack', 'manage_options', 'language-back', 'language_back_admin_page'); }
add_action('admin_menu', 'language_back_setup_admin_page');

