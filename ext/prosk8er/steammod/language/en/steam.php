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
));
