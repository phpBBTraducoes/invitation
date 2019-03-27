<?php

/**
 *
 * Invite. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid [2019][ver 4.2.0] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2010-2015, KillBill
 * @copyright (c) 2017, kasimi
 * @copyright (c) 2017-2018, Leinad4Mind, https://leinad4mind.top/forum
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
// Some characters you may want to copy&paste: ’ « » „ “ ” …

$lang = array_merge($lang, array(
	'INVITE'								=> 'Convites',
	'INVITE_DELETE_CONFIRM'					=> 'Se você quiser excluir o convite, clique %sAQUI%s.',
	'INVITE_DELETE_SUCCESS'					=> 'Seu convite foi excluído com sucesso.',
	'INVITE_DELETE_SUCCESSES'				=> 'Seus convites foram excluídos com sucesso.',
	'INVITE_DISABLED'						=> '<span class="meghivo_tred">O sistema de convite está atualmente desativado!</span>',
	'INVITE_EMAIL_BLOCK'					=> 'Bloqueado!',
	'INVITE_INVITED'						=> 'Convidado por',
	'INVITE_INVITES'						=> 'Convidou',
	'INVITE_KEY_ERROR'						=> '<div class="meghivo_error">O convite não é válido!</div>',
	'INVITE_PERSON'							=> '%s pessoa(s)',
	'INVITE_POINTS_PRESENT'					=> 'A cada %s convite(s), enviamos %s %s !',
	'INVITE_REGISTRATION'					=> '<div class="meghivo_error">O registro atualmente é apenas por convite!</div>',
	'INVITE_COPYRIGHT'						=> 'phpBB Invite by <a href="https://leinad4mind.top/forum">Leinad4Mind</a> &copy; 2018',
));
