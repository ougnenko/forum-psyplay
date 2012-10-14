<?php
/**
*
* @package phpBB Statistics
* @version $Id: stats_test.php 96 2010-02-21 14:47:13Z marc1706 $
* @copyright (c) 2009 Marc Alexander(marc1706) www.m-a-styles.de, (c) TheUniqueTiger - Nayan Ghosh
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @based on: Forum Statistics by TheUniqueTiger - Nayan Ghosh
* @translator (c) ( Marc Alexander - http://www.m-a-styles.de ), TheUniqueTiger - Nayan Ghosh
*/

if (!defined('IN_PHPBB') || !defined('IN_STATS_MOD'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}


/*	Example:
$lang = array_merge($lang, array(	
	'STATS'								=> 'phpBB Statistics',	

));
*/

$lang = array_merge($lang, array(	
	'STATS_TEST'				=> 'Тест',
	'STATS_TEST_EXPLAIN'		=> 'Это тестовое дополнение',
	'STATS_TEST_SHOW'			=> 'Показать тестовое дополнение (не выполняет никаких действий)',
	'STATS_TEST_SHOW_EXPLAIN' 	=> 'Он действительно ничего не делает',
	'INFO'						=> 'Это дополнение только в целях тестирования. Вы можете удалить его, если вы уже добавили дополнения.',
));
?>