<?php
/**
*
* @package migration
* @copyright (c) 2012 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License v2
*
*/

namespace prosk8er\steamcpf\migrations\v11x;

class release_1_1_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return version_compare($this->config['steam_mod_version'], '1.1.0', '>=');
	}

	static public function depends_on()
	{
		return array('\prosk8er\steamcpf\migrations\v10x\release_1_0_2');
	}

	public function update_data()
	{
		return array(
			array('config.update', array('steam_mod_version', '1.1.0')),
		);
	}
}
