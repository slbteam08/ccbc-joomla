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
		'type' => 'general',
		'addon_name' => 'uicookie',
		'title' => \Joomla\CMS\Language\Text::_('Cookie Notification'),
		'desc' => \Joomla\CMS\Language\Text::_('Cookie Notification addon for alerting users about the use of cookies on your website.'),
		'icon'=>\Joomla\CMS\Uri\Uri::root() . 'plugins/sppagebuilder/jollyany/addons/uicookie/assets/images/icon.png',
		'category' => 'Jollyany',
		'attr' => array(
			'general' => array(
				'admin_label' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std' => '',
				),
				'position' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Position'),
					'values' => array(
						'bottom' => \Joomla\CMS\Language\Text::_('Banner bottom'),
						'top' => \Joomla\CMS\Language\Text::_('Banner top'),
						'left' => \Joomla\CMS\Language\Text::_('Floating left'),
						'right' => \Joomla\CMS\Language\Text::_('Floating right'),
					),
					'std' => 'left',
				),
				'cookie_background' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Background'),
					'std' => '#252e39',
				),
				'cookie_button_background' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Button Background'),
					'std' => '#1e87f0',
				),
				'message' => array(
					'type' => 'editor',
					'title' => \Joomla\CMS\Language\Text::_('Message'),
					'std' => 'This website uses cookies to ensure you get the best experience on our website.',
				),
				'dismiss' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Dismiss'),
					'std' => 'Got it',
				),
				'url' => array(
					'type' => 'media',
					'format' => 'attachment',
					'title' => \Joomla\CMS\Language\Text::_('Link'),
					'placeholder' => 'http://',
					'hide_preview' => true,
				),
				'link' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Policy'),
					'std' => 'Learn more',
				),
				'target' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK_NEWTAB'),
					'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK_NEWTAB_DESC'),
					'values' => array(
						'_self' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_SAME_WINDOW'),
						'_blank' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_NEW_WINDOW'),
					),
				),
			),
		),
	)
);
