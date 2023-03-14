<?php
/**
* Usage: --> make sure you have a backup of your Database before to run this tool!
* Download and/or unzip the file, upload it to your Board's root (i.e.: www.mydomain.com/phpBB3/)
* Point your browser to i.e.: www.mydomain.com/phpBB3/sos_admin.php), it auto-destroys itself once ran.
*
* This file will create an admin user named Admin1 with a password of admin. From that point you should be
* able to get into the ACP.
* As soon as you have done this, use the temporary admin account to change the details on the original admin
* account, then delete the temporary account.
* To remove the account you will first need to remove “founder” status from it:
* ACP > USERS AND GROUPS tab > Manage Users > Admin1 > Overview > Founder = No
*
* @package phpBB sos_admin.php v1.0.1-Ascraeus (3.1) and (3.2)
* @copyright (c) 2016/2017 3Di (Marco T.) http://3di.space/32
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

global $db;

$rows = array('user_type', 'group_id', 'username', 'username_clean', 'user_regdate', 'user_password', 'user_email', 'user_lang', 'user_style', 'user_rank', 'user_colour', 'user_posts', 'user_permissions', 'user_ip', 'user_birthday', 'user_lastpage', 'user_last_confirm_key', 'user_post_sortby_type', 'user_post_sortby_dir', 'user_topic_sortby_type', 'user_topic_sortby_dir', 'user_avatar', 'user_sig', 'user_sig_bbcode_uid', 'user_jabber', 'user_actkey', 'user_newpasswd');

$values = array(3, 5, 'Admin1', 'admin1', 0, '21232f297a57a5a743894a0e4a801fc3', 'admin@example.com', 'en', 1, 1, 'AA0000', 1, '', '', '', '', '', 't', 'a', 't', 'd', '', '', '', '', '', '');

$sql_ary = array_combine($rows, $values);

$sql = 'INSERT INTO ' . USERS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
$db->sql_query($sql);

echo 'Done! Username: Admin1 --- Password: admin';

remove_me();

/* Attempting to delete this file */
function remove_me()
{
	@unlink(__FILE__);

	/** Windows IIS servers may have a problem with unlinking recently created files.
	* * So check if file exists and give a message
	*/
	if (file_exists(__FILE__))
	{
		echo '<strong color="red">File could not be deleted.</strong> You will
		need to manually delete the ' . basename(__FILE__) . ' file from the server.';
	}
}
