<?php

/**
 * @package Jollyany Addons SP Page Builder
 * @author TemPlaza https://templaza.com
 * @copyright Copyright (c) 2011 - 2021 TemPlaza
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('Restricted access');
SpAddonsConfig::addonConfig(
	array(
		'type' => 'content',
		'addon_name' => 'uinotification',
		'title' => \Joomla\CMS\Language\Text::_('UI Notification'),
		'desc' => \Joomla\CMS\Language\Text::_('Create toggleable notifications that fade out automatically.'),
		'icon'=>\Joomla\CMS\Uri\Uri::root() . 'plugins/sppagebuilder/jollyany/addons/uinotification/assets/images/icon.png',
		'category' => 'Jollyany',
		'attr' => array(
			'general' => array(
				'admin_label' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std' => '',
				),
				'notification_styles' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Notification Style'),
					'desc' => \Joomla\CMS\Language\Text::_('A notification can be styled by adding a status to the message to indicate a primary, success, warning or a danger status.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'primary' => \Joomla\CMS\Language\Text::_('Primary'),
						'success' => \Joomla\CMS\Language\Text::_('Success'),
						'warning' => \Joomla\CMS\Language\Text::_('Warning'),
						'danger' => \Joomla\CMS\Language\Text::_('Danger'),
					),
					'std' => 'primary',
				),
				'notification_positions' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Position'),
					'desc' => \Joomla\CMS\Language\Text::_('Select one of the following parameters to adjust the notification\'s position to different corners.'),
					'values' => array(
						'top-left' => \Joomla\CMS\Language\Text::_('Top Left'),
						'top-center' => \Joomla\CMS\Language\Text::_('Top Center'),
						'top-right' => \Joomla\CMS\Language\Text::_('Top Right'),
						'bottom-left' => \Joomla\CMS\Language\Text::_('Bottom Left'),
						'bottom-center' => \Joomla\CMS\Language\Text::_('Bottom Center'),
						'bottom-right' => \Joomla\CMS\Language\Text::_('Bottom Right'),
					),
					'std' => 'bottom-left',
				),
				'notification_content' => array(
					'type' => 'textarea',
					'title' => \Joomla\CMS\Language\Text::_('Message'),
					'desc' => \Joomla\CMS\Language\Text::_('Custom notification message that fade out automatically.'),
					'std' => 'You can turn your popup into a notification that can easily server as a banner to inform your visitors.',
				),
			),
		),
	)
);
