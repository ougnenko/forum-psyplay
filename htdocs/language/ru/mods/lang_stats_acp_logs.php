<?php

/**
*
* @package phpBB Statistics
* @version $Id: lang_stats_acp_logs.php 023 2009-03-30 20:23:28UTC marc1706 $
* @copyright (c) 2009 Marc Alexander(marc1706) www.m-a-styles.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @based on: lang_portal_acp_logs.php included in the Board3 Portal package (www.board3.de)
* @translator (c) ( Marc Alexander - http://www.m-a-styles.de )
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'LOG_STATS_CONFIG_GENERAL'				=> '<strong>phpBB Statistics: Изменение главных настроек</strong>',
	'LOG_STATS_CONFIG_BASIC_ADVANCED'		=> '<strong>phpBB Statistics: Изменение прочих настроек</strong>',
	'LOG_STATS_CONFIG_BASIC_MISCELLANEOUS'	=> '<strong>phpBB Statistics: Изменение настроек вложений</strong>',
	'LOG_STATS_CONFIG_ACTIVITY_USERS'		=> '<strong>phpBB Statistics: Изменение настроек активности пользователей</strong>',

));

?>