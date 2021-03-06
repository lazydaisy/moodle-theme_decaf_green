<?php

/**
 * Settings for the decaf theme
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    // Enable edit buttons (replace rows of icons)
    $name = 'theme_decaf_green/useeditbuttons';
    $title = get_string('useeditbuttons','theme_decaf');
    $description = get_string('useeditbuttonsdesc', 'theme_decaf');
    $default = 1;
    $choices = array(1=>'Yes', 0=>'No');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Enable "persistent editing mode" (no need to turn on/off edit mode)
    $name = 'theme_decaf_green/persistentedit';
    $title = get_string('persistentedit','theme_decaf');
    $description = get_string('persistenteditdesc', 'theme_decaf');
    $default = 0;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Hide Settings block
    $name = 'theme_decaf_green/hidesettingsblock';
    $title = get_string('hidesettingsblock','theme_decaf');
    $description = get_string('hidesettingsblockdesc', 'theme_decaf');
    $default = 1;
    $choices = array(1=>'Yes', 0=>'No');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Hide Navigation block
    $name = 'theme_decaf_green/hidenavigationblock';
    $title = get_string('hidenavigationblock','theme_decaf');
    $description = get_string('hidenavigationblockdesc', 'theme_decaf');
    $default = 0;
    $choices = array(1=>'Yes', 0=>'No');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);
    
    // Show user profile picture
    $name = 'theme_decaf_green/showuserpicture';
    $title = get_string('showuserpicture','theme_decaf');
    $description = get_string('showuserpicturedesc', 'theme_decaf');
    $default = 0;
    $choices = array(1=>'Yes', 0=>'No');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Add custom menu to Awesomebar
    $name = 'theme_decaf_green/custommenuinawesomebar';
    $title = get_string('custommenuinawesomebar','theme_decaf');
    $description = get_string('custommenuinawesomebardesc', 'theme_decaf');
    $default = 0;
    $choices = array(1=>'Yes', 0=>'No');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Place custom menu after Awesomebar
    $name = 'theme_decaf_green/custommenuafterawesomebar';
    $title = get_string('custommenuafterawesomebar','theme_decaf');
    $description = get_string('custommenuafterawesomebardesc', 'theme_decaf');
    $default = 0;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Foot note setting
    $name = 'theme_decaf_green/footnote';
    $title = get_string('footnote','theme_decaf');
    $description = get_string('footnotedesc', 'theme_decaf');
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');
    $settings->add($setting);

}