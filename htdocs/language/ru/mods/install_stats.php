<?php
/**
*
* @package phpBB Statistics
* @version $Id: install_stats.php 146 2010-05-18 22:33:54Z marc1706 $
* @copyright (c) 2009 Marc Alexander(marc1706) www.m-a-styles.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @based on: phpBB Statistics Installer (www.board3.de)
*/

/**
* DO NOT CHANGE
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
	'INSTALL_CONGRATS_EXPLAIN'		=> 	'<p>Вы успешно установили phpBB Statistics v%s<br/><br/><strong>Сейчас удалите, переместите или переименуйте папку "install", прежде чем пользоваться конференцией. Пока папка существует Вы сможете попасть только в панель управления.</strong></p>',
	'INSTALL_INTRO_BODY'			=> 	'Этот мастер поможет Вам установить на свой форум phpBB Statistics.',

	'MISSING_CONSTANTS'			=> 	'Перед тем как запустить скрипт установки, вы должны загрузить отредактированные файлы, особенно /includes/constants.php.',
	'MODULES_CREATE_PARENT'		=> 	'Создать родительский стандартный модуль',
	'MODULES_PARENT_SELECT'		=> 	'Указать родительский модуль',
	'MODULES_SELECT_4ACP'		=> 	'Родительский модуль для ACP',
	'MODULES_SELECT_NONE'		=> 	'Нет родительского модуля',

	'STAGE_ADVANCED_EXPLAIN'        =>  'The phpBB Statistics modules will now be created.',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 	'Таблицы базы данных phpBB Statistics созданы и инициализированы с базовыми значениями. Перейдите к следующему этапу для завершения установки phpBB Statistics.',
	'STAGE_ADVANCED_IN_PROGRESS'	=> 	'The BBCode and Smilies in your posts are being counted. This might take a while and the page will refresh itself every 5 seconds.<br />Please be patient and let the script finish.',
	'STAGE_ADVANCED_SUCCESSFUL'		=> 	'Модули phpBB Statistics созданы. Продолжите для завершения установки phpBB Statistics.',
	'STAGE_UNINSTALL'				=> 	'Деинсталляция',

	'FILES_EXISTS'				=> 	'Файл все еще существует',
	'FILES_OUTDATED'			=> 	'Устаревшие файлы',
	'FILES_OUTDATED_EXPLAIN'	=> 	'<strong>Устаревшие файлы</strong> - пожалуйста удалите эти фалы во избежание проблем безопасности.',
	'FILES_CHANGE'				=> 	'File has been changed in the current release',
	'FILES_CHANGED'				=> 	'Changed files',
	'FILES_CHANGED_EXPLAIN'		=> 	'<strong>Changed files</strong> - please make sure you copied the changed files to your website.',
	'REQUIREMENTS_EXPLAIN'		=> 	'Для продолжения обновления, удалите с сервера все устаревшие файлы.',
	'NOT_REQUIREMENTS_EXPLAIN'	=> 	'Устаревших файлов на сервере не обнаружено, вы можете продолжить обновление.',

	'UPDATE_INSTALLATION'			=> 	'Обновление phpBB Statistics',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 	'Эта опция обновит ваш phpBB Statistics до последней версии.',
	'UPDATE_CONGRATS_EXPLAIN'		=> 	'<p>Вы успешно обновили phpBB Statistics до v%s<br/><br/><strong>Теперь удалите, переместите или переименуйте директорию "install", прежде чем использовать форум. До тех пор, пока существует эта директория, доступной будет только ACP.</strong></p>',

	'UNINSTALL_INTRO'				=> 	'Мастер Деинсталляции',
	'UNINSTALL_INTRO_BODY'			=> 	'Мастер проведет вас по этапам удаления phpBB Statistics с вашего phpBB форума.',
	'CAT_UNINSTALL'					=> 	'Деинсталляция',
	'UNINSTALL_CONGRATS'			=> 	'<h1>phpBB Statistics удален.</h1><br>Вы благополучно удалили phpBB Statistics.',
	'UNINSTALL_CONGRATS_EXPLAIN'	=> 	'<strong>Теперь удалите, переместите или переименуйте директорию "install", прежде чем использовать форум. До тех пор, пока существует эта директория, доступной будет только ACP.<br /><br />Убедитесь, что удалили файлы, относящиеся к поратлу и вернули в прежний вид все исправления, сделанные в оригинальных файлах phpBB.</strong></p>',

	'SUPPORT_BODY'		=> 	'Support for the latest version of the phpBB Statistics is available free of charge for:</p><ul><li>Installation</li><li>Technical questions</li><li>Program-related issues</li><li>Updating Forum Statistics MOD or betas to the latest version of phpBB Statistics</li></ul><p>You will find support in these forums:</p><ul><li><a href="http://www.m-a-styles.de/">M-A-Styles - Homepage of Marc Alexander (marc1706) - MOD author</a></li><li><a href="http://www.phpbb.de/">phpbb.de</a></li><li><a href="http://www.phpbb.com/">phpbb.com</a></li></ul><p>',
	'GOTO_INDEX'		=> 	'Перейти к Форуму',
	'GOTO_STATS'		=> 	'Перейти к phpBB Statistics',
	'UNSUPPORTED_DB'	=>	'Sorry, unsupported Databases found',
	'UNSUPPORTED_VERSION' => 'Sorry, unsupported version found',
));

?>