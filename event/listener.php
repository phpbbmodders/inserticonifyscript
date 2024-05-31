<?php

/**
 * @package modders\inserticonifyscript
 * @copyright (c) 2024 Your Name
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 */

namespace modders\inserticonifyscript\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            'core.page_footer' => 'on_page_footer',
        ];
    }

    public function on_page_footer($event)
    {
        $event['template']->assign_var('ICONIFY_SCRIPT', '<script src="https://code.iconify.design/3/3.1.1/iconify.min.js"></script>');
    }
}
