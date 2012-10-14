<?php
/**
*
* @package Board3 Portal v2
* @copyright (c) Board3 Group ( www.board3.de )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
	// Portal Modules
	'ACP_PORTAL_MODULES'			=> 'Модули Портала',
	'ACP_PORTAL_MODULES_EXP'		=> 'Здесь Вы можете управлять модулями Вашего портала. Если Вы отключите ВСЕ модули, также нужно отключить и сам Портал',
	
	'MODULE_POS_TOP'				=> 'Верх',
	'MODULE_POS_LEFT'				=> 'Левая колонка',
	'MODULE_POS_RIGHT'				=> 'Правая колонка',
	'MODULE_POS_CENTER'				=> 'Центральная колонка',
	'MODULE_POS_BOTTOM'				=> 'Кнопки',
	'ADD_MODULE'					=> 'Добавить модуль',
	'CHOOSE_MODULE'					=> 'Выбрать модуль',
	'CHOOSE_MODULE_EXP'				=> 'Выбрать модуль из выпадающего списка',
	'SUCCESS_ADD'					=> 'Модуль успешно добавлен',
	'SUCCESS_DELETE'				=> 'Модуль успешно удален',
	'NO_MODULES'					=> 'Модули не обнаружены.',
	'MOVE_RIGHT'					=> 'Перенести вправо',
	'MOVE_LEFT'						=> 'Перенести влево',
	'B3P_FILE_NOT_FOUND'			=> 'Запрашиваемый файл не найден',
	'UNABLE_TO_MOVE'				=> 'Невозможно переместить модуль в выбранную колонку.',
	'UNABLE_TO_MOVE_ROW'			=> 'Невозможно переместить модуль в выбранную строку.',
	'DELETE_MODULE_CONFIRM'			=> 'Вы уверены, что хотите удалить модуль "%1$s"?',
	'MODULE_RESET_SUCCESS'			=> 'Настройки модуля успешно сохранены',
	'MODULE_RESET_CONFIRM'			=> 'Вы уверены, что хотите сбросить настройки модуля "%1$s"?',
	
	'MODULE_OPTIONS'			=> 'Опции модуля',
	'MODULE_NAME'				=> 'Название модуля',
	'MODULE_NAME_EXP'			=> 'Введите наименование модуля, которое будет отображаться в конфигурации.',
	'MODULE_IMAGE'				=> 'Лого модуля',
	'MODULE_IMAGE_EXP'			=> 'Ввелите имя файла логотипа модуля. Изображение должно находиться в директории styles/*yourstyle*/theme/images/portal/',
	'MODULE_PERMISSIONS'		=> 'Права доступа модуля',
	'MODULE_PERMISSIONS_EXP'	=> 'Выберите группы, которые смогут видеть модуль только после авторизации. Если Вы хотите, чтобы модель был доступен всем пользователям, не выбирайте ничего.<br />Вы можете выбрать несколько групп удерживая клавишу <samp>CTRL</samp>.',
	'MODULE_IMAGE_WIDTH'		=> 'Ширина изображения модуля',
	'MODULE_IMAGE_WIDTH_EXP'	=> 'Ввелите ширину логотипа модуля (в пикселах).',
	'MODULE_IMAGE_HEIGHT'		=> 'Высота изображения модуля',
	'MODULE_IMAGE_HEIGHT_EXP'	=> 'Ввелите высоту логотипа модуля (в пикселах).',
	'MODULE_RESET'				=> 'Сброс настроек модуля',
	'MODULE_RESET_EXP'			=> 'Это позволит вернуться к дефолтным настройкам модуля',
	'MODULE_STATUS'				=> 'Показывать модуль',
	'MODULE_ADD_ONCE'			=> 'Этот модуль можно добавить только один раз.',

	// general
	'ACP_PORTAL'							=> 'Портал',
	'ACP_PORTAL_GENERAL_INFO'				=> 'Общие настройки',
	'ACP_PORTAL_CONFIG_INFO'				=> 'Общие настройки',
	'ACP_PORTAL_GENERAL_TITLE'				=> 'Администрирование портала',
	'ACP_PORTAL_GENERAL_TITLE_EXP'			=> 'Благодарим за выбор Board3 Portal! Здесь Вы можете конфигурировать Ваш портал. Нижеприведенные опции помогут Вам настроить портал по Вашему усмотрению.',
	'PORTAL_ENABLE'							=> 'Показывать портал',
	'PORTAL_ENABLE_EXP'						=> 'Включение или выключение видимости портала',
	'PORTAL_LEFT_COLUMN'					=> 'Показывать левую колонку',
	'PORTAL_LEFT_COLUMN_EXP'				=> 'Укажите "нет", если Вы хотите отключить видимость левой колонки',
	'PORTAL_RIGHT_COLUMN'					=> 'Показывать правую колонку',
	'PORTAL_RIGHT_COLUMN_EXP'				=> 'Укажите "нет", если Вы хотите отключить видимость правой колонки',
	'PORTAL_VERSION_CHECK'					=> 'Проверка версии портала',
	'PORTAL_PHPBB_MENU'						=> 'Меню phpBB',
	'PORTAL_PHPBB_MENU_EXP'					=> 'Отображать шапку меню форума на портале',
	'PORTAL_DISPLAY_JUMPBOX'				=> 'Отображать jumpbox',
	'PORTAL_DISPLAY_JUMPBOX_EXP'			=> 'Позволяет отображать jumpbox на портале',
	'ACP_PORTAL_COLUMN_WIDTH_SETTINGS'		=> 'Настройка ширины левой и правой колонок',
	'PORTAL_LEFT_COLUMN_WIDTH'				=> 'Ширина левой колонки',
	'PORTAL_LEFT_COLUMN_WIDTH_EXP'			=> 'Установить ширину левой колонки в пикселях; рекомендуемой значение 180',
	'PORTAL_RIGHT_COLUMN_WIDTH'				=> 'Ширина правой колонки',
	'PORTAL_RIGHT_COLUMN_WIDTH_EXP'			=> 'Установить ширину правой колонки в пикселях; рекомендуемое значение 180',
	
	'LINK_ADDED'							=> 'Ссылка была успешно добавлена',
	'LINK_UPDATED'							=> 'Ссылка была успешно изменена',
	'LOG_PORTAL_LINK_ADDED'					=> '<strong>Изменение настроек портала</strong><br />&raquo; Добавлена ссылка: %s ',
	'LOG_PORTAL_LINK_UPDATED'				=> '<strong>Изменение настроек портала</strong><br />&raquo; Модифицирована ссылка: %s ',
	'LOG_PORTAL_EVENT_ADDED'				=> '<strong>Изменение настроек портала</strong><br />&raquo; Добавлено событие: %s ',
	'LOG_PORTAL_EVENT_UPDATED'				=> '<strong>Изменение настроек портала</strong><br />&raquo; Модифицировано событие: %s ',
	'LOG_PORTAL_EVENT_REMOVED'				=> '<strong>Изменение настроек портала</strong><br />&raquo; Удалено событие: %s ',

	// Upload Module
	'ACP_PORTAL_UPLOAD'				=> 'Загрузка модулей',
	'MODULE_UPLOAD'					=> 'Загрузить модуль',
	'MODULE_UPLOAD_EXP'				=> 'Выберите zip-файл модуля, который Вы желаете загрузить:',
	'MODULE_UPLOAD_GO'				=> 'Загрузить',
	'NO_MODULE_UPLOAD'				=> 'Загрузка файлов запрещена в конфигурации Вашего сервера.',
	'MODULE_UPLOADED'				=> 'Модуль успешно обновлен.',
	'MODULE_UPLOAD_MKDIR_FAILURE'	=> 'Невозможно создать папку.',
	'MODULE_COPY_FAILURE'			=> 'Невозможно скопировать выбранный файл: %1$s',
	'MODULE_CORRUPTED'				=> 'Модуль, который Вы пытаетесь загрузить, поврежден.',
	'PORTAL_NEW_FILES'				=> 'Новые файлы',
	'PORTAL_MODULE_SOURCE'			=> 'Ресурс',
	'PORTAL_MODULE_TARGET'			=> 'Цель',
	'PORTAL_MODULE_STATUS'			=> 'Статус',
	'PORTAL_MODULE_SUCCESS'			=> 'Успех',
	'PORTAL_MODULE_ERROR'			=> 'Ошибка',
	
	// Install
	'PORTAL_BASIC_INSTALL'			=> 'Добавление основных опций модулей',
	'PORTAL_BASIC_UNINSTALL'		=> 'Удаление модулей из базы',
	'PORTAL_CONVERT_SUCCESS'		=> 'Конвертация из Board3 Portal 1.0.6 & добавление основных опций моделдй',
	
	// Logs
	'LOG_PORTAL_CONFIG'			=> '<strong>Измененные настройки портала</strong><br />&raquo; %s',
	
	/**
	* A copy of Handyman` s MOD version check, to view it on the portal overview
	*/
	'ANNOUNCEMENT_TOPIC'	=> 'Release Announcement',
	'CURRENT_VERSION'		=> 'Текущая (установленная) версия',
	'DOWNLOAD_LATEST'		=> 'Загрузить последнюю версию',
	'LATEST_VERSION'		=> 'Последняя версия',
	'NO_INFO'				=> 'Невозможно подключиться к серверу для проверки версии',
	'NOT_UP_TO_DATE'		=> '%s не обновлен',
	'RELEASE_ANNOUNCEMENT'	=> 'Сообщения об обновлениях',
	'UP_TO_DATE'			=> '%s не обновлен',
	'VERSION_CHECK'			=> 'Проверка версии МОДа',
	
	// Adding the permissions
	'acl_a_manage_portal'		=> array('lang' => 'Может изменять настройки портала', 'cat' => 'misc'),
	'acl_u_view_portal'			=> array('lang' => 'Может просматривать портал', 'cat' => 'misc'),
));
