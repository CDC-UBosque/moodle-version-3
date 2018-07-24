	<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's uebtheme theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package    theme_roshnilite
 * @copyright  2015 dualcube {@link https://dualcube.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * 
 * Modification Centro de diseño UEB
 * 
 */
defined('MOODLE_INTERNAL') || die;
$settings = null;
if (is_siteadmin()) {
    $ADMIN->add('themes', new admin_category('theme_uebtheme', 'uebtheme'));
    $temp = new admin_settingpage('theme_uebtheme_general',  get_string('generalsettings', 'theme_uebtheme'));

    $name = 'theme_uebtheme/favicon';
    $title = get_string('favicon', 'theme_uebtheme');
    $description = get_string('favicondesc', 'theme_uebtheme');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/logo';
    $title = get_string('logo', 'theme_uebtheme');
    $description = get_string('logodesc', 'theme_uebtheme');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/moodlemaincontentinfrontpage';
    $title = get_string('moodlemaincontentinfrontpage', 'theme_uebtheme');
    $description = get_string('moodlemaincontentinfrontpagedesc', 'theme_uebtheme');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/slidercount';
    $title = get_string('slidercount', 'theme_uebtheme');
    $description = get_string('slidercountdesc', 'theme_uebtheme');
    $setting = new admin_setting_configselect($name, $title, $description, 0,
    array(
            1 => get_string('one', 'theme_uebtheme'),
            2 => get_string('two', 'theme_uebtheme'),
            3 => get_string('three', 'theme_uebtheme'),
            4 => get_string('four', 'theme_uebtheme'),
            5 => get_string('five', 'theme_uebtheme'),
            6 => get_string('six', 'theme_uebtheme'),
            7 => get_string('seven', 'theme_uebtheme'),
        ));
    $temp->add($setting);

    for ($slidecounts = 1; $slidecounts <= get_config('theme_uebtheme', 'slidercount'); $slidecounts = $slidecounts + 1) {
        $name = 'theme_uebtheme/slideimage'.$slidecounts;
        $title = get_string('slideimage', 'theme_uebtheme').$slidecounts;
        $description = get_string('slideimagedesc', 'theme_uebtheme').$slidecounts;
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'slideimage'.$slidecounts);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        $name = 'theme_uebtheme/slidertext'.$slidecounts;
        $title = get_string('slidertext', 'theme_uebtheme').$slidecounts;
        $description = get_string('slidertextdesc', 'theme_uebtheme').$slidecounts;
        $default = get_string('slidertextdefault', 'theme_uebtheme');
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        $name = 'theme_uebtheme/sliderbuttontext'.$slidecounts;
        $title = get_string('sliderbuttontext', 'theme_uebtheme').$slidecounts;
        $description = get_string('sliderbuttontextdesc', 'theme_uebtheme');
        $default = get_string('sliderbuttontextdefault', 'theme_uebtheme');
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        $name = 'theme_uebtheme/sliderurl'.$slidecounts;
        $title = get_string('sliderurl', 'theme_uebtheme').$slidecounts;
        $description = get_string('sliderurldesc', 'theme_uebtheme').$slidecounts;
        $default = get_string('sliderurldefault', 'theme_uebtheme');
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);
    }

    $name = 'theme_uebtheme/aboutsiteheading';
    $title = get_string('aboutsiteheading', 'theme_uebtheme');
    $description = get_string('aboutsiteheadingdesc', 'theme_uebtheme');
    $default = get_string('aboutsiteheadingdefault', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/aboutsitesubheading';
    $title = get_string('aboutsitesubheading', 'theme_uebtheme');
    $description = get_string('aboutsitesubheadingdesc', 'theme_uebtheme');
    $default = get_string('aboutsitesubheadingdefault', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/aboutsiteimage1';
    $title = get_string('aboutsiteimage', 'theme_uebtheme');
    $description = get_string('faboutsiteimagedesc', 'theme_uebtheme');;
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'aboutsiteimage1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/aboutsitename1';
    $title = get_string('aboutsitename', 'theme_uebtheme');
    $description = get_string('faboutsitenamedesc', 'theme_uebtheme');
    $default = get_string('aboutsitename1default', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/aboutsitetext1';
    $title = get_string('aboutsitetext', 'theme_uebtheme');
    $description = get_string('faboutsitetextdesc', 'theme_uebtheme');
    $default = get_string('aboutsitetext1default', 'theme_uebtheme');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/aboutsiteurl1';
    $title = get_string('aboutsiteurl', 'theme_uebtheme');
    $description = get_string('faboutsiteurldesc', 'theme_uebtheme');
    $default = get_string('sliderurldefault', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*-------------*/

    $name = 'theme_uebtheme/aboutsiteimage2';
    $title = get_string('aboutsiteimage', 'theme_uebtheme');
    $description = get_string('saboutsiteimagedesc', 'theme_uebtheme');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'aboutsiteimage2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/aboutsitename2';
    $title = get_string('aboutsitename', 'theme_uebtheme');
    $description = get_string('saboutsitenamedesc', 'theme_uebtheme');
    $default = get_string('aboutsitename2default', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/aboutsitetext2';
    $title = get_string('aboutsitetext', 'theme_uebtheme');
    $description = get_string('saboutsitetextdesc', 'theme_uebtheme');
    $default = get_string('aboutsitetext2default', 'theme_uebtheme');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/aboutsiteurl2';
    $title = get_string('aboutsiteurl', 'theme_uebtheme');
    $description = get_string('saboutsiteurldesc', 'theme_uebtheme');
    $default = get_string('sliderurldefault', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*-------------*/

    $name = 'theme_uebtheme/aboutsiteimage3';
    $title = get_string('aboutsiteimage', 'theme_uebtheme');
    $description = get_string('taboutsiteimagedesc', 'theme_uebtheme');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'aboutsiteimage3');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/aboutsitename3';
    $title = get_string('aboutsitename', 'theme_uebtheme');
    $description = get_string('taboutsitenamedesc', 'theme_uebtheme');
    $default = get_string('aboutsitename3default', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/aboutsitetext3';
    $title = get_string('aboutsitetext', 'theme_uebtheme');
    $description = get_string('taboutsitetextdesc', 'theme_uebtheme');
    $default = get_string('aboutsitetext3default', 'theme_uebtheme');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/aboutsiteurl3';
    $title = get_string('aboutsiteurl', 'theme_uebtheme');
    $description = get_string('taboutsiteurldesc', 'theme_uebtheme');
    $default = get_string('sliderurldefault', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    /*-------------*/

    $name = 'theme_uebtheme/aboutsiteimage4';
    $title = get_string('aboutsiteimage', 'theme_uebtheme');
    $description = get_string('fraboutsiteimagedesc', 'theme_uebtheme');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'aboutsiteimage4');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/aboutsitename4';
    $title = get_string('aboutsitename', 'theme_uebtheme');
    $description = get_string('fraboutsitenamedesc', 'theme_uebtheme');
    $default = get_string('aboutsitename4default', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/aboutsitetext4';
    $title = get_string('aboutsitetext', 'theme_uebtheme');
    $description = get_string('fraboutsitetextdesc', 'theme_uebtheme');
    $default = get_string('fraboutsitetextdescdefault', 'theme_uebtheme');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/aboutsiteurl4';
    $title = get_string('aboutsiteurl', 'theme_uebtheme');
    $description = get_string('fraboutsiteurldesc', 'theme_uebtheme');
    $default = get_string('sliderurldefault', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);



    $name = 'theme_uebtheme/maincolor';
    $title = get_string('maincolor', 'theme_uebtheme');
    $description = get_string('maincolordesc', 'theme_uebtheme');
    $default = '#e74c3c';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $temp->add($setting);

    $name = 'theme_uebtheme/masonryheading';
    $title = get_string('masonryheading', 'theme_uebtheme');
    $description = get_string('masonryheadingdesc', 'theme_uebtheme');
    $default = get_string('masonryheadingdefault', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/masonrysubheading';
    $title = get_string('masonrysubheading', 'theme_uebtheme');
    $description = get_string('masonrysubheadingdesc', 'theme_uebtheme');
    $default = get_string('masonrysubheadingdefault', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/masonrycount';
    $title = get_string('masonrycount', 'theme_uebtheme');
    $description = get_string('masonrycountdesc', 'theme_uebtheme');
    $setting = new admin_setting_configselect($name, $title, $description, 0,
    array(
            1 => get_string('one', 'theme_uebtheme'),
            2 => get_string('two', 'theme_uebtheme'),
            3 => get_string('three', 'theme_uebtheme'),
            4 => get_string('four', 'theme_uebtheme'),
            5 => get_string('five', 'theme_uebtheme'),
            6 => get_string('six', 'theme_uebtheme'),
            7 => get_string('seven', 'theme_uebtheme'),
            8 => get_string('eight', 'theme_uebtheme'),
        ));
    $temp->add($setting);
    for ($masonrycounts = 1; $masonrycounts <= get_config('theme_uebtheme', 'masonrycount');
        $masonrycounts = $masonrycounts + 1) {
        $name = 'theme_uebtheme/masonryimage'.$masonrycounts;
        $title = get_string('masonryimage', 'theme_uebtheme').$masonrycounts;
        $description = get_string('masonryimagedesc', 'theme_uebtheme').$masonrycounts;
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'masonryimage'.$masonrycounts);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        $name = 'theme_uebtheme/masonrytext'.$masonrycounts;
        $title = get_string('masonrytext', 'theme_uebtheme').$masonrycounts;
        $description = get_string('masonrytextdesc', 'theme_uebtheme').$masonrycounts;
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        $name = 'theme_uebtheme/masonrysubtext'.$masonrycounts;
        $title = get_string('masonrysubtext', 'theme_uebtheme').$masonrycounts;
        $description = get_string('masonrysubtextdesc', 'theme_uebtheme').$masonrycounts;
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        $name = 'theme_uebtheme/masonryrurl'.$masonrycounts;
        $title = get_string('masonryurl', 'theme_uebtheme').$masonrycounts;
        $description = get_string('masonryurldesc', 'theme_uebtheme').$masonrycounts;
        $default = get_string('sliderurldefault', 'theme_uebtheme');
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);
    }
    
    /*banners*/
    
    $name = 'theme_uebtheme/banneruebimage1';
    $title = get_string('banneruebimage1', 'theme_uebtheme');
    $description = get_string('tbanneruebimage1desc', 'theme_uebtheme');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'banneruebimage1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_uebtheme/bannerueburl1';
    $title = get_string('bannerueburl1', 'theme_uebtheme');
    $description = get_string('tbannerueburl1desc', 'theme_uebtheme');
    $default = get_string('bannerueburl1default', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_uebtheme/banner1';
    $title = get_string('banner1', 'theme_uebtheme');
    $description = get_string('banner1desc', 'theme_uebtheme');
    $default = get_string('banner1default', 'theme_uebtheme');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_uebtheme/banneruebimage2';
    $title = get_string('banneruebimage2', 'theme_uebtheme');
    $description = get_string('tbanneruebimage2desc', 'theme_uebtheme');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'banneruebimage2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_uebtheme/bannerueburl2';
    $title = get_string('bannerueburl2', 'theme_uebtheme');
    $description = get_string('tbannerueburl2desc', 'theme_uebtheme');
    $default = get_string('bannerueburl2default', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_uebtheme/banner2';
    $title = get_string('banner2', 'theme_uebtheme');
    $description = get_string('banner2desc', 'theme_uebtheme');
    $default = get_string('banner2default', 'theme_uebtheme');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /*end banners*/

    $name = 'theme_uebtheme/addressfontawesomeicon';
    $title = get_string('addressfontawesomeicon', 'theme_uebtheme');
    $description = get_string('addressfontawesomeicondesc', 'theme_uebtheme');
    $default = '<i class="fa fa-map-marker"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/address';
    $title = get_string('address', 'theme_uebtheme');
    $description = get_string('addressdesc', 'theme_uebtheme');
    $default = get_string('addressdefault', 'theme_uebtheme');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/emailfontawesomeicon';
    $title = get_string('emailfontawesomeicon', 'theme_uebtheme');
    $description = get_string('emailfontawesomeicondesc', 'theme_uebtheme');
    $default = '<i class="fa fa-envelope"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/email';
    $title = get_string('email', 'theme_uebtheme');
    $description = get_string('emaildesc', 'theme_uebtheme');
    $default = get_string('emaildefault', 'theme_uebtheme');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_uebtheme/phonefontawesomeicon';
    $title = get_string('phonefontawesomeicon', 'theme_uebtheme');
    $description = get_string('phonefontawesomeicondesc', 'theme_uebtheme');
    $default = '<i class="fa fa-phone"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/phone';
    $title = get_string('phone', 'theme_uebtheme');
    $description = get_string('phonedesc', 'theme_uebtheme');
    $default = get_string('phonedefault', 'theme_uebtheme');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/socialheading';
    $title = get_string('socialheading', 'theme_uebtheme');
    $description = get_string('socialheadingdesc', 'theme_uebtheme');
    $default = get_string('socialheadingdefault', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/socialfontawesomeicon1';
    $title = get_string('socialfontawesomeicon1', 'theme_uebtheme');
    $description = get_string('socialfontawesomeicondesc1', 'theme_uebtheme');
    $default = '<i class="fa fa-facebook"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/socialicon1';
    $title = get_string('socialicon', 'theme_uebtheme');
    $description = get_string('socialicondesc', 'theme_uebtheme');
    $default = get_string('sliderurldefault', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/socialfontawesomeicon2';
    $title = get_string('socialfontawesomeicon2', 'theme_uebtheme');
    $description = get_string('socialfontawesomeicondesc2', 'theme_uebtheme');
    $default = '<i class="fa fa-twitter"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/socialicon2';
    $title = get_string('socialicon', 'theme_uebtheme');
    $description = get_string('socialicondesc', 'theme_uebtheme');
    $default = get_string('sliderurldefault', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/socialfontawesomeicon3';
    $title = get_string('socialfontawesomeicon3', 'theme_uebtheme');
    $description = get_string('socialfontawesomeicondesc3', 'theme_uebtheme');
    $default = '<i class="fa fa-linkedin"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/socialicon3';
    $title = get_string('socialicon', 'theme_uebtheme');
    $description = get_string('socialicondesc', 'theme_uebtheme');
    $default = get_string('sliderurldefault', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/socialfontawesomeicon4';
    $title = get_string('socialfontawesomeicon4', 'theme_uebtheme');
    $description = get_string('socialfontawesomeicondesc4', 'theme_uebtheme');
    $default = '<i class="fa fa-google-plus"></i>';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_uebtheme/socialicon4';
    $title = get_string('socialicon', 'theme_uebtheme');
    $description = get_string('socialicondesc', 'theme_uebtheme');
    $default = get_string('sliderurldefault', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_uebtheme', $temp);/*END OF GENERAL SETTINGS*/

    $temp = new admin_settingpage('theme_uebtheme_font',  get_string('fontsettings', 'theme_uebtheme'));
    $name = 'theme_uebtheme/fontselect';
    $title = get_string('fontselect', 'theme_uebtheme');
    $description = get_string('fontselectdesc', 'theme_uebtheme');
    $default = 1;
    $choices = array(
            1 => get_string('fonttypestandard', 'theme_uebtheme'),
            2 => get_string('fonttypecustom', 'theme_uebtheme'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Heading font name.
    $name = 'theme_uebtheme/fontnameheading';
    $title = get_string('fontnameheading', 'theme_uebtheme');
    $description = get_string('fontnameheadingdesc', 'theme_uebtheme');
    $default = get_string('fontnamedefault', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Text font name.
    $name = 'theme_uebtheme/fontnamebody';
    $title = get_string('fontnamebody', 'theme_uebtheme');
    $description = get_string('fontnamebodydesc', 'theme_uebtheme');
    $default = get_string('fontnamedefault', 'theme_uebtheme');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    if (get_config('theme_uebtheme', 'fontselect') === "2") {
        if (floatval($CFG->version) >= 2014111005.01) {
            $woff2 = true;
        } else {
            $woff2 = false;
        }
        // This is the descriptor for the font files.
        $name = 'theme_uebtheme/fontfiles';
        $heading = get_string('fontfiles', 'theme_uebtheme');
        $information = get_string('fontfilesdesc', 'theme_uebtheme');
        $setting = new admin_setting_heading($name, $heading, $information);
        $temp->add($setting);
        // Heading Fonts.
        // TTF Font.
        $name = 'theme_uebtheme/fontfilettfheading';
        $title = get_string('fontfilettfheading', 'theme_uebtheme');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfilettfheading');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);
        // OTF Font.
        $name = 'theme_uebtheme/fontfileotfheading';
        $title = get_string('fontfileotfheading', 'theme_uebtheme');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfileotfheading');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // WOFF Font.
        $name = 'theme_uebtheme/fontfilewoffheading';
        $title = get_string('fontfilewoffheading', 'theme_uebtheme');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfilewoffheading');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        if ($woff2) {
                // WOFF2 Font.
                $name = 'theme_uebtheme/fontfilewofftwoheading';
                $title = get_string('fontfilewofftwoheading', 'theme_uebtheme');
                $description = '';
                $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfilewofftwoheading');
                $setting->set_updatedcallback('theme_reset_all_caches');
                $temp->add($setting);
        }

        // EOT Font.
        $name = 'theme_uebtheme/fontfileeotheading';
        $title = get_string('fontfileeotheading', 'theme_uebtheme');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfileweotheading');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // SVG Font.
        $name = 'theme_uebtheme/fontfilesvgheading';
        $title = get_string('fontfilesvgheading', 'theme_uebtheme');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfilesvgheading');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // Body fonts.
        // TTF Font.
        $name = 'theme_uebtheme/fontfilettfbody';
        $title = get_string('fontfilettfbody', 'theme_uebtheme');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfilettfbody');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // OTF Font.
        $name = 'theme_uebtheme/fontfileotfbody';
        $title = get_string('fontfileotfbody', 'theme_uebtheme');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfileotfbody');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // WOFF Font.
        $name = 'theme_uebtheme/fontfilewoffbody';
        $title = get_string('fontfilewoffbody', 'theme_uebtheme');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfilewoffbody');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        if ($woff2) {
            // WOFF2 Font.
            $name = 'theme_uebtheme/fontfilewofftwobody';
            $title = get_string('fontfilewofftwobody', 'theme_uebtheme');
            $description = '';
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfilewofftwobody');
            $setting->set_updatedcallback('theme_reset_all_caches');
            $temp->add($setting);
        }

        // EOT Font.
        $name = 'theme_uebtheme/fontfileeotbody';
        $title = get_string('fontfileeotbody', 'theme_uebtheme');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfileweotbody');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);
        // SVG Font.
        $name = 'theme_uebtheme/fontfilesvgbody';
        $title = get_string('fontfilesvgbody', 'theme_uebtheme');
        $description = '';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfilesvgbody');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);
    }
    // Custom CSS file.
    $name = 'theme_uebtheme/customcss';
    $title = get_string('customcss', 'theme_uebtheme');
    $description = get_string('customcssdesc', 'theme_uebtheme');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    $ADMIN->add('theme_uebtheme', $temp);
}