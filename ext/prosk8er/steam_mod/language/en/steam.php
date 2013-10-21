<?php

/**
*
* Steam Mod [British English]
*
* @package language
* @version $Id$
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'STEAM'			=> 'Steam',
	'STEAM_EXPLAIN'		=> 'Please visit the %sFAQ%s to learn more.',
	'TOO_LONG_STEAM'	=> 'The Steam name you entered is too long.',
	'TOO_SHORT_STEAM'	=> 'The Steam name you entered is too short.',

	'STEAM_MOD'			=> 'Steam Mod',
	'INSTALL_STEAM_MOD'		=> 'Install Steam Mod',
	'INSTALL_STEAM_MOD_CONFIRM'	=> 'Are you sure you want to install the Steam Mod?',
	'UPDATE_STEAM_MOD'		=> 'Update Steam Mod',
	'UPDATE_STEAM_MOD_CONFIRM'	=> 'Are you sure you want to update the Steam Mod?',
	'UNINSTALL_STEAM_MOD'		=> 'Uninstall Steam Mod',
	'UNINSTALL_STEAM_MOD_CONFIRM'	=> 'Are you sure you want to uninstall the Steam Mod?',
));