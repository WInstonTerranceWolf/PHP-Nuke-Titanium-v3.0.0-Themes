<?php
#---------------------------------------------------------------------------------------#
# THEME SYSTEM FILE                                                                     #
#---------------------------------------------------------------------------------------#
# THEME INFO                                                                            #
# CarbinFiber Theme v1.0 (Fixed & Full Width)                                           #
#                                                                                       #
# Final Build Date 08/17/2019 Saturday 7:40pm                                           #
#                                                                                       #
# A Very Nice Black Carbin Fiber Styled Design.                                         #
# Copyright © 2019 By: TheGhost AKA Ernest Allen Bffington                              #
# e-Mail : ernest.buffington@gmail.com                                                  #
#---------------------------------------------------------------------------------------#
# CREATION INFO                                                                         #
# Created On: 1st August, 2019 (v1.0)                                                   #
#                                                                                       #
# Updated On: 1st August, 2019 (v3.0)                                                   #
# HTML5 Theme Code Updated By: Lonestar (Lonestar-Modules.com)                          #
#                                                                                       #
# Read CHANGELOG File for Updates & Upgrades Info                                       #
#                                                                                       #
# Designed By: TheGhost                                                                 #
# Web Site: https://theghost.86it.us                                                    #
# Purpose: PHP-Nuke Titanium | Xtreme Evo                                               #
#---------------------------------------------------------------------------------------#
# CMS INFO                                                                              #
# PHP-Nuke Copyright (c) 2006 by Francisco Burzi phpnuke.org                            #
# PHP-Nuke Titanium (c) 2019 : Enhanced PHP-Nuke Web Portal System                      #
#---------------------------------------------------------------------------------------#

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) { exit('Access Denied'); }

$theme_name = basename(dirname(__FILE__));

#--------------------------#
# Theme Management Section #
#--------------------------#
include(NUKE_THEMES_DIR.$theme_name.'/theme_info.php');

#-------------------------#
# Theme Colors Definition #
#-------------------------#
global $digits_color, $fieldset_border_width, $fieldset_color, $define_theme_xtreme_209e, $avatar_overide_size, $ThemeInfo, $use_xtreme_voting, $make_xtreme_avatar_small;

# This is to tell the main portal menu to luook for the images
# in the theme dir "theme_name/images/menu"
global $use_theme_image_dir_for_portal_menu;

$use_theme_image_dir_for_portal_menu = false;

$digits_color ='#ffb825';
$fieldset_border_width = '1px'; 
$fieldset_color = '#4e4e4e';
$define_theme_xtreme_209e = false;
$avatar_overide_size = '150';
$make_xtreme_avatar_small = true;
$use_xtreme_voting = false;

$bgcolor1   = $ThemeInfo['bgcolor1'];
$bgcolor2   = $ThemeInfo['bgcolor2'];
$bgcolor3   = $ThemeInfo['bgcolor3'];
$bgcolor4   = $ThemeInfo['bgcolor4'];
$textcolor1 = $ThemeInfo['textcolor1'];
$textcolor2 = $ThemeInfo['textcolor2'];

define('carbinfiber_red_flames_theme_dir', 'themes/'.$theme_name.'/');
define('carbinfiber_red_flames_images_dir', carbinfiber_red_flames_theme_dir.'images/');
define('carbinfiber_red_flames_style_dir', carbinfiber_red_flames_theme_dir.'style/');

define('carbinfiber_red_flames_phpstyle_dir', carbinfiber_red_flames_theme_dir.'css/'); //Titanium Themes Only

define('carbinfiber_red_flames_js_dir', carbinfiber_red_flames_style_dir.'js/');
define('carbinfiber_red_flames_hdr_images', carbinfiber_red_flames_images_dir.'hdr/');
define('carbinfiber_red_flames_ftr_images', carbinfiber_red_flames_images_dir.'ftr/');

define('carbinfiber_red_flames_width', ((substr($ThemeInfo['themewidth'], -1) == '%') ? str_replace('%','',($ThemeInfo['themewidth'])).'%' : str_replace('px','',($ThemeInfo['themewidth'])).'px'));

define('carbinfiber_red_flames_copyright', 'CarbinFiber Red Flames Designed By: TheGhost<br />Copyright &copy '.date('Y').' The 86it Developer Network<br />All Rights Reserved');
define('carbinfiber_red_flames_copyright_click', 'Click the Link to Display Copyrights');

addCSSToHead(carbinfiber_red_flames_style_dir.'style.css','file');
addCSSToHead(carbinfiber_red_flames_style_dir.'menu.css','file');

addPHPCSSToHead(carbinfiber_red_flames_phpstyle_dir.'body.php','file'); //Titanium Themes Only
addPHPCSSToHead(carbinfiber_red_flames_phpstyle_dir.'maintable.php','file'); //Titanium Themes Only
addPHPCSSToHead(carbinfiber_red_flames_phpstyle_dir.'CKeditor.php','file'); //Titanium Themes Only

#-------------------#
# OpenTable Section #
#-------------------#
include_once(carbinfiber_red_flames_theme_dir.'function_OpenTable.php');
include_once(carbinfiber_red_flames_theme_dir.'function_CloseTable.php');
include_once(carbinfiber_red_flames_theme_dir.'function_OpenTable2.php');
include_once(carbinfiber_red_flames_theme_dir.'function_CloseTable2.php');
include_once(carbinfiber_red_flames_theme_dir.'function_OpenTable3.php');
include_once(carbinfiber_red_flames_theme_dir.'function_CloseTable3.php');
include_once(carbinfiber_red_flames_theme_dir.'function_OpenTable4.php');
include_once(carbinfiber_red_flames_theme_dir.'function_CloseTable4.php');

#---------------------#
# FormatStory Section #
#---------------------#
include_once(carbinfiber_red_flames_theme_dir.'function_FormatStory.php');

#----------------#
# Header Section #
#----------------#
function themeheader(){	include_once(carbinfiber_red_flames_theme_dir.'HDRcarbinfiber.php'); }

#----------------#
# Footer Section #
#----------------#
function themefooter(){ include_once(carbinfiber_red_flames_theme_dir.'FTRcarbinfiber.php'); }

#--------------------#
# News Index Section #
#--------------------#
include_once(carbinfiber_red_flames_theme_dir.'function_themeindex.php');

#----------------------#
# News Article Section #
#----------------------#
include_once(carbinfiber_red_flames_theme_dir.'function_themearticle.php');

#-------------------#
# Centerbox Section #
#-------------------#
include_once(carbinfiber_red_flames_theme_dir.'function_themecenterbox.php');

#-----------------#
# Preview Section #
#-----------------#
include_once(carbinfiber_red_flames_theme_dir.'function_themepreview.php');

#-----------------#
# Sidebox Section #
#-----------------#
include_once(carbinfiber_red_flames_theme_dir.'function_themesidebox.php');
?>
