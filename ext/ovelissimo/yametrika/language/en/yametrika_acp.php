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
	'ACP_YAMETRIKA_ID'             => 'Yandex Metrika ID',
	'ACP_YAMETRIKA_ID_EXPLAIN'     => 'Enter your Yandex Metrika ID code, e.g.: <samp>00000000...</samp>.',
	'ACP_YAMETRIKA_ID_INVALID'     => '“%s” is not a valid Yandex Metrika ID code.<br />It should be in the form “00000000...”.',
	//Donation
	'ACP_YAMETRIKA_DONATE_TEXT'    => 'Donate <i class="fa fa-flask" style="color:#5bbad5;font-size:1.5em;" aria-hidden="true"></i> <b>internet-lab.ru</b>',
	'ACP_YAMETRIKA_DONATE_URL'     => 'https://internet-lab.ru/donate',
	'ACP_YAMETRIKA_DONATE_BEER'    => 'Buy me a beer for creating this extension',
	'ACP_YAMETRIKA_DONATE_SHORT'   => 'Make a donation for this extension',
	'ACP_YAMETRIKA_DONATE_EXPLAIN' => 'This extension is completely free. The project is being developed by <b>internet-lab.ru</b> on a voluntary basis to support the phpBB community. If you enjoy using this extension, or if it has benefited your forum, please consider <a href="https://internet-lab.ru/donate" target="_blank" rel="noreferrer noopener">donation</a>. It would be greatly appreciated.',
));
