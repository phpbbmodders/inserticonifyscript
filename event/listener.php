<?php
/**
 *
 * Insert Iconify Script extension for the phpBB Forum Software package
 *
 * @copyright (c) 2024, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\inserticonifyscript\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;

	/**
	 * @param \phpbb\template\template $template Template object
	 */
	public function __construct(\phpbb\template\template $template)
	{
		$this->template = $template;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.page_footer' => 'on_page_footer',
		];
	}

	public function on_page_footer($event)
	{
		$this->template->assign_var('ICONIFY_SCRIPT', '<script src="https://code.iconify.design/3/3.1.1/iconify.min.js"></script>');
	}
}
