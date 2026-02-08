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
    'addon_name' => 'uiparticles',
    'title' => \Joomla\CMS\Language\Text::_('UI Particles'),
    'desc' => \Joomla\CMS\Language\Text::_('A simple and easy to use addon for creating particles'),
    'icon'=>\Joomla\CMS\Uri\Uri::root() . 'plugins/sppagebuilder/jollyany/addons/uiparticles/assets/images/icon.png',
    'category' => 'Jollyany',
    'attr' => array(
      'general' => array(
        'admin_label' => array(
          'type' => 'text',
          'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
          'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
          'std' => ''
        ),
        'ui_particle_list_items' => array(
          'title' => \Joomla\CMS\Language\Text::_('Particle ID(s)'),
          'attr' =>  array(
            'type' => array(
              'type' => 'select',
              'title' => \Joomla\CMS\Language\Text::_('Style'),
              'values' => array(
                '' => \Joomla\CMS\Language\Text::_('Default'),
                'nasa' => \Joomla\CMS\Language\Text::_('Nasa'),
                'bubble' => \Joomla\CMS\Language\Text::_('Bubble'),
                'snow' => \Joomla\CMS\Language\Text::_('Snow'),
                'nyancat2' => \Joomla\CMS\Language\Text::_('Nyan'),
              ),
              'std' => '',
            ),
            'title' => array(
              'type' => 'text',
              'title' => \Joomla\CMS\Language\Text::_('Section ID'),
              'desc' => 'Enter the section ID you wish to apply the particle effect. NOTE: You need to define the section ID for the section in page builder First.',
              'std' => 'your-section-id',
            ),
            'value' => array(
              'type' => 'number',
              'title' => \Joomla\CMS\Language\Text::_('Value'),
              'desc' => 'Default: 80, Nasa: 160, Bubble: 160. Snow: 400, Nyan: 400',
              'placeholder' => '80',
              'std' => '80',
              'depends' => array(array('title', '!=', '')),
            ),
            'color' => array(
              'type' => 'color',
              'title' => \Joomla\CMS\Language\Text::_('Color'),
              'desc' => 'Default: #ffffff, Nasa: #ffffff, Bubble: #1b1e34. Snow: #ffffff, Nyan: #ffffff',
              'std' => '',
              'depends' => array(array('title', '!=', '')),
            ),
            'shape' => array(
              'type' => 'select',
              'title' => \Joomla\CMS\Language\Text::_('Shape'),
              'desc' => 'Shape types: "circle", "edge", "triangle", Style Bubble: Polygon, "star"',
              'values' => array(
                'circle' => \Joomla\CMS\Language\Text::_('Circle'),
                'edge' => \Joomla\CMS\Language\Text::_('Edge'),
                'triangle' => \Joomla\CMS\Language\Text::_('Triangle'),
                'polygon' => \Joomla\CMS\Language\Text::_('Polygon'),
                'star' => \Joomla\CMS\Language\Text::_('Star'),
              ),
              'std' => 'circle',
              'depends' => array(array('title', '!=', '')),
            ),
            'size' => array(
              'type' => 'number',
              'title' => \Joomla\CMS\Language\Text::_('Size'),
              'desc' => 'Default: 3, Nasa: 3, Bubble: 20. Snow: 10, Nyan: 4',
              'placeholder' => '3',
              'std' => '3',
              'depends' => array(array('title', '!=', '')),
            ),
            'line_linked' => array(
              'type' => 'color',
              'title' => \Joomla\CMS\Language\Text::_('Line Linked'),
              'desc' => 'Default: #ffffff, Nasa: #ffffff, Bubble: #1b1e34. Snow: #ffffff, Nyan: #ffffff',
              'std' => '',
              'depends' => array(array('title', '!=', '')),
            ),
            'speed' => array(
              'type' => 'number',
              'title' => 'Speed of particles movement',
              'desc' => 'Enter the speed of particles movement. Default Style: Default - 6, Nasa - 1, Bubble - 8, Nyan - 14, Snow - 6.',
              'placeholder' => '6',
              'std' => '6',
            ),
            'outmode' => array(
              'type' => 'select',
              'title' => 'Out Mode',
              'desc' => 'Choose the mode when particles touch the edge',
              'values' => array(
                'out' => \Joomla\CMS\Language\Text::_('Out'),
                'bounce' => \Joomla\CMS\Language\Text::_('Bounce'),
              ),
              'std' => 'out',
            ),
            'direction' => array(
              'type' => 'select',
              'title' => 'Direction Mode',
              'desc' => 'Choose the direction mode when particles appear: "none, top, top-right, right, bottom-right, bottom, bottom-left, left, top-left',
              'values' => array(
                '' => \Joomla\CMS\Language\Text::_('None'),
                'top' => \Joomla\CMS\Language\Text::_('Top'),
                'top-right' => \Joomla\CMS\Language\Text::_('Top Right'),
                'right' => \Joomla\CMS\Language\Text::_('Right'),
                'bottom-right' => \Joomla\CMS\Language\Text::_('Bottom Right'),
                'bottom' => \Joomla\CMS\Language\Text::_('Bottom'),
                'bottom-left' => \Joomla\CMS\Language\Text::_('Bottom Left'),
                'left' => \Joomla\CMS\Language\Text::_('Left'),
                'top-left' => \Joomla\CMS\Language\Text::_('Top Left'),
              ),
              'std' => '',
            ),
          )
        ),
      )
    )
  )
);
