<?php
/**
*
* @package migration
* @copyright (c) 2014 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace prosk8er\steamcpf\migrations\v10x;

class release_1_0_1 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return version_compare($this->config['steam_mod_version'], '1.0.1', '>=');
	}

	static public function depends_on()
	{
		return array('\prosk8er\steamcpf\migrations\v10x\release_1_0_0');
	}

	public function update_data()
	{
		return array(
			array('config.update', array('steam_mod_version', '1.0.1')),
		);
	}
}