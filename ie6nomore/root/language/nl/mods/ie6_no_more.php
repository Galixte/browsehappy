<?php
/**
*
* ie6_no_more [Dutch-Nederlands]
*
* @package language
* @copyright (c) 2009 Matt Friedman 
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
	'IE6NOMORE_TITLE'		=> 'Je gebruikt een verouderde webbrowser',
	'IE6NOMORE_MESSAGE1'	=> 'Voor een betere ervaring die deze plaats gebruikt, gelieve te bevorderen aan moderne Webbrowser, of',
	'IE6NOMORE_MESSAGE2'	=> 'installeer dan Google Chrome Frame',
	'IE6NOMORE_MESSAGE3'	=> 'Gelieve te bevorderen aan moderne Webbrowser',
	'IE6NOMORE_WARNING'		=> 'Waarschuwing!',
));

?>