<?php

/**
*
* @package - Board3portal
* @version $Id$
* @copyright (c) kevin / saint ( http://www.board3.de/ ), (c) Ice, (c) nickvergessen ( http://mods.flying-bits.org/ ), (c) redbull254 ( http://www.digitalfotografie-foren.de )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

if (!defined('IN_PHPBB'))
{
   exit;
}

if (!defined('IN_PORTAL'))
{
   exit;
}

$s_display = true;

// Assign specific vars
$template->assign_vars(array(
	'U_PORTAL'				=> append_sid("{$phpbb_root_path}portal.$phpEx"),
	'S_DISPLAY_FULL_LOGIN'	=> ($s_display) ? true : false,
	'S_AUTOLOGIN_ENABLED'	=> ($config['allow_autologin']) ? true : false,
	'S_LOGIN_ACTION'		=> append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=login'),
));

?>