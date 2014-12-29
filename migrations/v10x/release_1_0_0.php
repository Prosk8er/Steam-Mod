<?php
/**
*
* Steam CPF extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 Prosk8er <http://www.gotskillslounge.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace prosk8er\steamcpf\migrations\v10x;

class release_1_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['steam_mod_version']) && version_compare($this->config['steam_mod_version'], '1.0.0', '>=');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			'add_columns' => array(
				$this->table_prefix . 'users' => array(
					'user_steam' => array('VCHAR', ''),
				),
			),

			array('config.add', array('steam_mod_version', '1.0.0')),
		);
	}
}