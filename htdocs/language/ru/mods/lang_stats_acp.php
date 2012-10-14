<?php
/**
*
* @package phpBB Statistics
* @version $Id: lang_stats_acp.php 141 2010-05-07 18:01:31Z marc1706 $
* @copyright (c) 2009 Marc Alexander(marc1706) www.m-a-styles.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @based on: lang_portal_acp.php included in the Board3 Portal package (www.board3.de)
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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	'ACP_STATS_VERSION'							=> '<strong>phpBB Statistics v%s</strong>',
	// General
	'ACP_STATS_GENERAL_INFO' 					=> 'Администрирование phpBB Statistics',
	'ACP_STATS_GENERAL_INFO_EXPLAIN'			=> 'Спасибо за выбор phpBB Statistics.',
	'ACP_STATS_GENERAL_SETTINGS' 				=> 'Главные настройки',
	'ACP_STATS_GENERAL_SETTINGS_EXPLAIN'		=> 'На этой странице Вы можете изменить настройки всего, что может касаться мода статистики',
	'ACP_STATS_ENABLE'							=> 'Включить статистику',
	'ACP_STATS_ENABLE_EXPLAIN'					=> 'Если будет подходящая погода, чтобы включить статистику',
	'ACP_BASIC_BASIC_ENABLE'					=> 'Включить базовую статистику',
	'ACP_BASIC_BASIC_ENABLE_EXPLAIN'			=> 'Выберите если хотите включить базовую статистику',
	'ACP_BASIC_ADVANCED_ENABLE'					=> 'Включить продвинутую статистику',
	'ACP_BASIC_ADVANCED_ENABLE_EXPLAIN'			=> 'Выберите если хотите включить продвинутую статистику',
	'ACP_BASIC_MISCELLANEOUS_ENABLE'			=> 'Включить статистику функциональности',
	'ACP_BASIC_MISCELLANEOUS_ENABLE_EXPLAIN'	=> 'Выберите если хотите включить статистику функциональности',
	'ACP_ACTIVITY_FORUMS_ENABLE'				=> 'Включить статистику активности на конференции',
	'ACP_ACTIVITY_FORUMS_ENABLE_EXPLAIN'		=> 'Выберите если хотите включить статистику активности',
	'ACP_ACTIVITY_TOPICS_ENABLE'				=> 'Включить статистику активности тем',
	'ACP_ACTIVITY_TOPICS_ENABLE_EXPLAIN'		=> 'Выберите если хотите включить статистику активности тем',
	'ACP_ACTIVITY_USERS_ENABLE'					=> 'Включить статистику активности пользователей на конференции',
	'ACP_ACTIVITY_USERS_ENABLE_EXPLAIN'			=> 'Выберите если хотите включить статистику пользователей',
	'ACP_CONTRIBUTIONS_ATTACHMENTS_ENABLE' 		=> 'Включить статистику вложений',
	'ACP_CONTRIBUTIONS_ATTACHMENTS_ENABLE_EXPLAIN' => 'Выберите если хотите включить статистику вложений',
	'ACP_CONTRIBUTIONS_POLLS_ENABLE'			=> 'Включить статистику голосований',
	'ACP_CONTRIBUTIONS_POLLS_ENABLE_EXPLAIN'	=> 'Выберите если хотите включить статистику голосований',
	'ACP_PERIODIC_DAILY_ENABLE'					=> 'Включить ежедневную статистику',
	'ACP_PERIODIC_DAILY_ENABLE_EXPLAIN'			=> 'Выберите если хотите включить статистику по дням',
	'ACP_PERIODIC_MONTHLY_ENABLE'				=> 'Включить месячную статистику',
	'ACP_PERIODIC_MONTHLY_ENABLE_EXPLAIN'		=> 'Выберите если хотите включить статистику по месяцам',
	'ACP_PERIODIC_HOURLY_ENABLE'				=> 'Включить часовую статистику',
	'ACP_PERIODIC_HOURLY_ENABLE_EXPLAIN'		=> 'Выберите если хотите включить статистику по часам',
	'ACP_SETTINGS_BOARD_ENABLE'					=> 'Включить статистику настроек конференции',
	'ACP_SETTINGS_BOARD_ENABLE_EXPLAIN'			=> 'Выберите если хотите включить статистику настроек конференции',
	'ACP_SETTINGS_PROFILE_ENABLE'				=> 'Включить статистику настроек профилей пользователей',
	'ACP_SETTINGS_PROFILE_ENABLE_EXPLAIN'		=> 'Выберите если хотите включить статистику настроек пользователей',
	'ACP_STATS_RESYNC_TIMEFRAME'				=> 'Resync Time',
	'ACP_STATS_RESYNC_TIMEFRAME_EXPLAIN'		=> 'Choose the days after which the cached Statistics should be refreshed. Setting this to 0 will automatically disable this feature.',

	// Advanced Stats
	'ACP_BASIC_ADVANCED_INFO'					=> 'Продвинутая статистика',
	'ACP_BASIC_ADVANCED_INFO_EXPLAIN'			=> 'Здесь Вы можете изменить настройки продвинутой статистики',
	'ACP_BASIC_ADVANCED_SETTINGS'				=> 'Настройки продвинутой статистики',
	'ACP_BASIC_ADVANCED_SECURITY'				=> 'Повышенный уровень безопасности',
	'ACP_BASIC_ADVANCED_SECURITY_EXPLAIN'		=> 'Версия phpBB и базы данных не будут показаны если эта опция включена',
	'ACP_BASIC_ADVANCED_PRETEND'				=> 'Предлагать установить новую версию phpBB',
	'ACP_BASIC_ADVANCED_PRETEND_EXPLAIN'		=> 'Если опция включена мод будет предлагать обновитсья до новой верссии phpBB. <br /><strong>Внимание:</strong> Это будет работать только если опция высокого уровня безопасности выключена. А так же если в панели управления не работает проверка верссии конференции, это не будет работать тоже.',
	
	// Miscellaneous Stats
	'ACP_BASIC_MISCELLANEOUS_INFO'				=> 'Прочая статистика',
	'ACP_BASIC_MISCELLANEOUS_INFO_EXPLAIN'		=> 'Здесь вы можете изменить настройки прочей статистики',
	'ACP_BASIC_MISCELLANEOUS_SETTINGS'			=> 'Настройки прочей статистики',
	'ACP_BASIC_MISCELLANEOUS_WARNINGS'			=> 'Скрыть настройки предупреждений',
	'ACP_BASIC_MISCELLANEOUS_WARNINGS_EXPLAIN'	=> 'Выберите если хотите скрыть настройки предупреждений',
	'ACP_BASIC_MISCELLANEOUS_BBCODES'			=> 'Пересчитать BB-коды',
	'ACP_BASIC_MISCELLANEOUS_BBCODES_EXPLAIN'	=> 'Выберите ДА если Вы добавили свои BB-коды. Настройка автоматически вернётся в положение НЕТ, после обсчета.',
	
	// Users Activity Stats
	'ACP_ACTIVITY_USERS_INFO'				=> 'Статистика активности пользователей',
	'ACP_ACTIVITY_USERS_INFO_EXPLAIN'		=> 'Здесь Вы можете изменить настройки статистики активности пользователей',
	'ACP_ACTIVITY_USERS_SETTINGS'			=> 'Настройки активности пользователей',
	'ACP_ACTIVITY_USERS_HIDE_ANONYMOUS'			=> 'Скрыть гостей из топа',
	'ACP_ACTIVITY_USERS_HIDE_ANONYMOUS_EXPLAIN' => 'Выберите если хотите скрыть гостей из топа статистики по пользователям',
	
	// Add-Ons
	'INSTALLED_ADDONS'						=> 'Устнановленные дополнения',
	'UNINSTALLED_ADDONS'					=> 'Не устнановленные дополнения',

	));


?>