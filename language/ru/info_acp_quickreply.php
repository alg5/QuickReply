<?php
/**
*
* quickreply [Russian]
*
* @package language quickreply
* @copyright (c) 2013 Татьяна5
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

$lang = array_merge($lang, array(
	'ACP_QUICKREPLY'				=> 'Быстрый ответ',
	'ACP_QUICKREPLY_EXPLAIN'		=> 'Настройки быстрого ответа',

	'ACP_QR_BBCODE'					=> 'Включить bbcode',
	'ACP_QR_BBCODE_EXPLAIN'			=> 'Разрешить отображение кнопок bbcode в форме быстрого ответа.',
	'ACP_QR_COMMA'					=> 'Включить запятую',
	'ACP_QR_COMMA_EXPLAIN'			=> 'Автоматически добавлять запятую после ника при использовании опции «Обращение по никнейму».',
	'ACP_QR_CTRLENTER'				=> 'Включить отправку по «Ctrl+Enter»',
	'ACP_QR_CTRLENTER_EXPLAIN'		=> 'Разрешить отправку сообщения при нажатии «Ctrl+Enter» в формах полного и быстрого ответа.',
	'ACP_QR_ENABLE_RE'				=> 'Включить префикс «Re:»',
	'ACP_QR_ENABLE_RE_EXPLAIN'		=> 'Автоматически добавлять префикс «Re:» в поле «Заголовок сообщения» в формах полного и быстрого ответа.',
	'ACP_QR_QUICKNICK'				=> 'Включить обращение по никнейму',
	'ACP_QR_QUICKNICK_EXPLAIN'		=> 'Разрешить вставку никнейма в форму быстрого ответа при клике на надпись «Обратиться по никнейму».',
	'ACP_QR_QUICKNICK_REF'			=> 'Включить специальный тег для обращения по никнейму',
	'ACP_QR_QUICKNICK_REF_EXPLAIN'	=> 'BBCode [ref] будет добавляться вместо [b] в функции «Обратиться по никнейму».',
	'ACP_QR_QUICKNICK_PM'			=> 'Включить кнопку «Ответить в ЛС» в выпадающий список функции «Обратиться по никнейму»',
	'ACP_QR_QUICKQUOTE'				=> 'Включить быстрое цитирование',
	'ACP_QR_QUICKQUOTE_EXPLAIN'		=> 'Разрешить возможность цитирования через «всплывашку», появляющуюся при выделении текста в сообщении.',
	'ACP_QR_QUICKQUOTE_LINK'		=> 'Добавлять ссылку на профиль автора сообщения при использовании быстрого цитирования',
	'ACP_QR_FULL_QUOTE'				=> 'Вставлять полные цитаты в форму быстрого ответа',
	'ACP_QR_FULL_QUOTE_EXPLAIN'		=> 'Переопределяет стандартное поведение кнопки “Ответить с цитатой”.',
	'ACP_QR_SMILIES'				=> 'Включить смайлы',
	'ACP_QR_SMILIES_EXPLAIN'		=> 'Разрешить отображение смайлов в форме быстрого ответа.',
	'ACP_QR_CAPSLOCK'				=> 'Включить преобразование текста в верхний/нижний регистр',
	'ACP_QR_AJAX_SUBMIT'			=> 'Включить Ajax отправку сообщений',
	'ACP_QR_AJAX_SUBMIT_EXPLAIN'	=> 'Разрешить отправку сообщений без перезагрузки страницы.',
	'ACP_QR_AJAX_PAGINATION'		=> 'Разрешить просмотр тем без перезагрузки страницы',
	'ACP_QR_AJAX_PAGINATION_EXPLAIN'=> 'Разрешить пользователям использовать настройку «Не очищать форму быстрого ответа при просмотре темы».',
	'ACP_QR_SCROLL_TIME'			=> 'Время выполнения одного действия прокрутки и анимации',
	'ACP_QR_SCROLL_TIME_EXPLAIN'	=> 'Время в миллисекундах для функции плавной прокрутки. Введите 0 для стандартной прокрутки.',
	'ACP_QR_SHOW_SUBJECTS'			=> 'Отображать заголовки сообщений в темах',
	'ACP_QR_SHOW_SUBJECTS_IN_SEARCH'=> 'Отображать заголовки сообщений в результатах поиска',
	'ACP_QR_SHOW_BUTTON_TRANSLIT'	=> 'Отображать кнопку «Транслит»',
	'ACP_QR_SOURCE_POST'			=> 'Добавлять в цитату ссылку на процитированное сообщение',
	'ACP_QR_ATTACH'					=> 'Разрешить загрузку вложений',
	'ACP_QR_ALLOW_FOR_GUESTS'		=> 'Разрешить быстрый ответ для гостей, если он включён',
	'ACP_QR_COLOUR_NICKNAME'		=> 'Добавлять цвет при обращении по нику',
));
