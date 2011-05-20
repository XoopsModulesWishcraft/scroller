<?php
// $Id: xoops_version.php,v 1.71 2005/07/07 C. Felix AKA the Cat
// ------------------------------------------------------------------------- //
// Catads for Xoops                                                          //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//---------------------------------------------------------------------------//

$modversion['name'] = 'Scroller';
$modversion['version'] = '0.10';
$modversion['description'] = 'Scroller for LGC';
$modversion['credits'] = "wishcraft";
$modversion['author'] = "wishcraft";
$modversion['license'] = "LGC";
$modversion['official'] = 0;
$modversion['image'] = "images/scroller_slogo.png";
$modversion['dirname'] = "scroller";

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
$modversion['tables'][0] = "scroller";

// insert values into catads_options with the right language
// $modversion['onInstall'] = 'admin/install_funcs.php'; 

// Templates
$modversion['templates'][1]['file'] = 'scroller_index.html';
$modversion['templates'][1]['description'] = '';

// Blocks

// Menu
$modversion['hasMain'] = 1;

for($i=0;$i<256;$i++)
	$option[$i] = $i;

// Config Settings
// Moderate
$modversion['config'][] = array(
	'name'			=> 'scroll_delay',
	'title' 		=> '_SC_SCROLLDELAY',
	'description'	=> '_SC_SCROLLDELAYDESC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> '3000'
) ;

$modversion['config'][] = array(
	'name'			=> 'scroll_maxstep',
	'title' 		=> '_SC_MAXSTEP',
	'description'	=> '_SC_MAXSTEPDESC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> '30'
) ;

$modversion['config'][] = array(
	'name'			=> 'scroll_stepdelay',
	'title' 		=> '_SC_STEPDELAY',
	'description'	=> '_SC_STEPDELAYDESC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> '45'
) ;

$modversion['config'][] = array(
	'name'			=> 'scroll_sc_red',
	'title' 		=> '_SC_STARTCOLOUR_RED',
	'description'	=> '_SC_STARTCOLOUR_REDDESC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> '255',
	'options'		=> $option
) ;

$modversion['config'][] = array(
	'name'			=> 'scroll_sc_green',
	'title' 		=> '_SC_STARTCOLOUR_GREEN',
	'description'	=> '_SC_STARTCOLOUR_GREENDESC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> '255',
	'options'		=> $option
) ;

$modversion['config'][] = array(
	'name'			=> 'scroll_sc_blue',
	'title' 		=> '_SC_STARTCOLOUR_BLUE',
	'description'	=> '_SC_STARTCOLOUR_BLUEDESC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> '255',
	'options'		=> $option
) ;


$modversion['config'][] = array(
	'name'			=> 'scroll_ec_red',
	'title' 		=> '_SC_ENDCOLOUR_RED',
	'description'	=> '_SC_ENDCOLOUR_REDDESC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> '0',
	'options'		=> $option
) ;

$modversion['config'][] = array(
	'name'			=> 'scroll_ec_green',
	'title' 		=> '_SC_ENDCOLOUR_GREEN',
	'description'	=> '_SC_ENDCOLOUR_GREENDESC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> '0',
	'options'		=> $option
) ;

$modversion['config'][] = array(
	'name'			=> 'scroll_ec_blue',
	'title' 		=> '_SC_ENDCOLOUR_BLUE',
	'description'	=> '_SC_ENDCOLOUR_BLUEDESC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> '0',
	'options'		=> $option
) ;

$modversion['config'][] = array(
	'name'			=> 'scroll_opentag',
	'title' 		=> '_SC_OPENTAG',
	'description'	=> '_SC_OPENTAGDESC',
	'formtype'		=> 'textarea',
	'valuetype'		=> 'text',
	'default'		=> '<div style="font: normal 14px Arial; padding: 5px;">'
) ;


$modversion['config'][] = array(
	'name'			=> 'scroll_closstag',
	'title' 		=> '_SC_CLOSETAG',
	'description'	=> '_SC_CLOSETAGESC',
	'formtype'		=> 'textarea',
	'valuetype'		=> 'text',
	'default'		=> '</div>'
) ;

$modversion['config'][] = array(
	'name'			=> 'scroll_width',
	'title' 		=> '_SC_WIDTH',
	'description'	=> '_SC_WIDTHDESC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> '100'
) ;

$modversion['config'][] = array(
	'name'			=> 'scroll_height',
	'title' 		=> '_SC_HEIGHT',
	'description'	=> '_SC_HEIGHTDESC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> '30'
) ;


?>