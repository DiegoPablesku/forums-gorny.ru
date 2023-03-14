<?php
/**
*
* Yandex Metrika extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_YAMETRIKA_ID'             => 'Яндекс Метрика',
	'ACP_YAMETRIKA_ID_EXPLAIN'     => 'Введите ваш ID Яндекс Метрики. Идентификатор может состоять только из цифр, например: <samp>00000000</samp>.',
	'ACP_YAMETRIKA_ID_INVALID'     => '“%s” неверный ID. Идентификатор может состоять только из цифр.<br />Например “00000000”.',
	//Donation
	'ACP_YAMETRIKA_DONATE_TEXT'    => 'Поддержать <i class="fa fa-flask" style="color:#5bbad5;font-size:1.5em;" aria-hidden="true"></i> <b>internet-lab.ru</b>',
	'ACP_YAMETRIKA_DONATE_URL'     => 'https://internet-lab.ru/donate',
	'ACP_YAMETRIKA_DONATE_BEER'    => 'Подкинуть на пиво',
	'ACP_YAMETRIKA_DONATE_SHORT'   => 'Пожертвовать символическую сумму на это расширение',
	'ACP_YAMETRIKA_DONATE_EXPLAIN' => 'Это расширение полностью бесплатно. Проект разрабатывается в <b>internet-lab.ru</b> на добровольной основе для поддержки phpBB сообщества. Если вам нравится расширение, или оно принесло пользу вашему форуму, рассмотрите вариант <a href="https://internet-lab.ru/donate" target="_blank" rel="noreferrer noopener">поддержки</a>. Это было бы ценно.',
));
