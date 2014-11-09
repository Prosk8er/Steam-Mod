<?php
/**
*
* Steam CPF extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 Prosk8er <http://www.gotskillslounge.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace prosk8er\steamcpf\event;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Event listener
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'						=> 'load_language_on_setup',
			'core.generate_profile_fields_template_data'		=> 'profile_fields_template_data',
		);
	}

	public function setup($event)
	{
		global $config;
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'prosk8er/steamcpf',
			'lang_set' => 'steam',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function profile_fields_template_data($event)
	{
		global $template;

		$tpl_fields = array(
			'STEAM_IS_INT'	=> (!empty($member['user_steam']) && is_numeric($member['user_steam'])) ? true : false,
		);

		$template->assign_vars($tpl_fields);
	}
}
