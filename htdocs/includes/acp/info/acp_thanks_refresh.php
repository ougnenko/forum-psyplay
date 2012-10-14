<?php
/**
*
* @author Sergeiy Varzaev (Палыч)  phpbbguru.net varzaev@mail.ru
* @version $Id: acp_thanks_refresh.php,v 134 2012-05-07 10:02:51 Палыч $
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

class acp_thanks_refresh_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_thanks_refresh',
			'title'		=> 'ACP_THANKS_REFRESH',
			'version'	=> '1.3.4',
			'modes'		=> array(
				'thanks'			=> array('title' => 'ACP_THANKS_REFRESH', 'auth' => 'acl_a_board', 'cat' => array('ACP_THANKS')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>