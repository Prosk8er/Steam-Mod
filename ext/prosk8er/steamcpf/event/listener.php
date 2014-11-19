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

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'					=> 'load_language_on_setup',
			'core.memberlist_view_profile'		=> 'memberlist_view_profile',
			'core.viewtopic_modify_post_row'	=> 'viewtopic_modify_post_row',
			'core.ucp_pm_view_messsage'			=> '',
		);
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

	public function memberlist_view_profile($event)
	{
		$profile_fields = array();
		if ($config['load_cpf_viewprofile'])
		{
			$cp = $phpbb_container->get('profilefields.manager');
			$profile_fields = $cp->grab_profile_fields_data($user_id);
			'STEAM_IS_INT'	=> (!empty($profile_fields['pf_phpbb_steam']) && is_numeric($profile_fields['pf_phpbb_steam'])) ? true : false,);
		{
		$vars = array('profile_fields',);
	}

	public function viewtopic_modify_post_row($event)
	{
		$cp_row = array();
		$post_row = array(
			'STEAM_IS_INT'			=> (!empty($cp_row['pf_phpbb_steam']) && is_numeric($cp_row['pf_phpbb_steam'])) ? true : false,);
		);
		$vars = array('row', 'cp_row',);
	}
}
