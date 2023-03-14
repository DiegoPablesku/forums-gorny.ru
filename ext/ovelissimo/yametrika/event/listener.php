<?php
/**
*
* Yandex Metrika extension for the phpBB Forum Software package.
*
* @copyright (c) 2013 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace ovelissimo\yametrika\event;

use phpbb\config\config;
use phpbb\template\template;
use phpbb\user;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/**
	* Constructor
	*
	* @param \phpbb\config\config        $config             Config object
	* @param \phpbb\template\template    $template           Template object
	* @param \phpbb\user                 $user               User object
	* @return \ovelissimo\yametrika\event\listener
	* @access public
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->config = $config;
		$this->template = $template;
		$this->user = $user;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.acp_extensions_run_action_after'	=> 'acp_extensions_run_action_after',
			'core.acp_board_config_edit_add'		=> 'add_yametrika_configs',
			'core.page_header'						=> 'load_yametrika',
			'core.validate_config_variable'			=> 'validate_yametrika_id',
		);
	}
	
	/* Display additional metadate in extension details
	*
	* @param $event			event object
	* @param return null
	* @access public
	*/
	public function acp_extensions_run_action_after($event)
	{
		if ($event['ext_name'] == 'ovelissimo/yametrika' && $event['action'] == 'details')
		{
			$this->user->add_lang_ext('ovelissimo/yametrika', 'yametrika_acp');
			$this->template->assign_var('S_DONATE_YAMETRIKA', true);
		}
	}
	
	/**
	* Load Yandex Metrika js code
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function load_yametrika($event)
	{
		$this->template->assign_var('YAMETRIKA_ID', $this->config['yametrika_id']);
	}
	
	/**
	* Add config vars to ACP Board Settings
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function add_yametrika_configs($event)
	{
		// Load language file
		$this->user->add_lang_ext('ovelissimo/yametrika', 'yametrika_acp');

		// Add a config to the settings mode, after board_timezone
		if ($event['mode'] == 'settings' && isset($event['display_vars']['vars']['board_timezone']))
		{
			// Store display_vars event in a local variable
			$display_vars = $event['display_vars'];

			// Define the new config vars
			$ym_config_vars = array(
				'yametrika_id' => array(
					'lang' => 'ACP_YAMETRIKA_ID',
					'validate' => 'yametrika_id',
					'type' => 'text:40:20',
					'explain' => true,
				),
			);

			// Add the new config vars after board_timezone in the display_vars config array
			$insert_after = array('after' => 'board_timezone');
			$display_vars['vars'] = phpbb_insert_config_array($display_vars['vars'], $ym_config_vars, $insert_after);

			// Update the display_vars event with the new array
			$event['display_vars'] = $display_vars;
		}
	}
	/**
	* Validate the Yandex Metrika ID
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function validate_yametrika_id($event)
	{
		$input = $event['cfg_array']['yametrika_id'];

		// Check if the validate test is for ynadex_metrika
		if (($event['config_definition']['validate'] == 'yametrika_id') && ($input !== ''))
		{
			// Store the error and input event data
			$error = $event['error'];

			// Add error message if the input is not a valid Yandex Metrika ID
			if (!preg_match('/^\d+$/', $input))
			{
				$error[] = $this->user->lang('ACP_YAMETRIKA_ID_INVALID', $input);
			}

			// Update error event data
			$event['error'] = $error;
		}
	}
}
?>