<?php

/**
 * @package Jollyany Addons SP Page Builder
 * @author TemPlaza https://templaza.com
 * @copyright Copyright (c) 2011 - 2021 TemPlaza
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('restricted aceess');

SpAddonsConfig::addonConfig(
	array(
		'type' => 'content',
		'addon_name' => 'uicontentalign',
		'title' => \Joomla\CMS\Language\Text::_('UI Content Align'),
		'desc' => \Joomla\CMS\Language\Text::_('Control the alignment of inline elements depending on the viewport size.'),
		'icon'=>\Joomla\CMS\Uri\Uri::root() . 'plugins/sppagebuilder/jollyany/addons/uicontentalign/assets/images/icon.png',
		'category' => 'Jollyany',
		'attr' => array(
			'general' => array(
				'admin_label' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std' => '',
				),
				'card_title' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Title'),
					'std' =>  'Title',
				),
				// Repeatable Items
				'ui_slideshow_items' => array(
					'title' => \Joomla\CMS\Language\Text::_('Image Items'),
					'attr' => array(
						'media_item' => array(
							'type' => 'media',
							'title' => \Joomla\CMS\Language\Text::_('Select Image'),
							'placeholder' => 'http://www.example.com/my-photo.jpg',
						),
						'image_alt' => array(
							'type' => 'text',
							'title' => \Joomla\CMS\Language\Text::_('Image Alt'),
							'std' => 'Image Alt',
						),
						'image_panel' => array(
							'type' => 'checkbox',
							'title' => \Joomla\CMS\Language\Text::_('Blend Mode Settings'),
							'values' => array(
								1 => \Joomla\CMS\Language\Text::_('JYES'),
								0 => \Joomla\CMS\Language\Text::_('JNO'),
							),
							'std' => 0,
						),
						'media_background'=>array(
							'type'=>'color',
							'title'=>\Joomla\CMS\Language\Text::_('Background Color'),
							'desc'=>\Joomla\CMS\Language\Text::_('Use the background color in combination with blend modes.'),
							'depends'=>array(
								array('image_panel', '=', 1)
							),
						),
						'media_blend_mode' => array(
							'type' => 'select',
							'title' => \Joomla\CMS\Language\Text::_('Blend modes'),
							'desc' => \Joomla\CMS\Language\Text::_('Determine how the image will blend with the background color.'),
							'values' => array(
								'' => \Joomla\CMS\Language\Text::_('None'),
								'multiply' => \Joomla\CMS\Language\Text::_('Multiply'),
								'screen' => \Joomla\CMS\Language\Text::_('Screen'),
								'overlay' => \Joomla\CMS\Language\Text::_('Overlay'),
								'darken' => \Joomla\CMS\Language\Text::_('Darken'),
								'lighten' => \Joomla\CMS\Language\Text::_('Lighten'),
								'color-dodge' => \Joomla\CMS\Language\Text::_('Color Dodge'),
								'color-burn' => \Joomla\CMS\Language\Text::_('Color Burn'),
								'hard-light' => \Joomla\CMS\Language\Text::_('Hard Light'),
								'soft-light' => \Joomla\CMS\Language\Text::_('Soft Light'),
								'difference' => \Joomla\CMS\Language\Text::_('Difference'),
								'exclusion' => \Joomla\CMS\Language\Text::_('Exclusion'),
								'hue' => \Joomla\CMS\Language\Text::_('Hue'),
								'color' => \Joomla\CMS\Language\Text::_('Color'),
								'luminosity' => \Joomla\CMS\Language\Text::_('Luminosity'),
							),
							'std' => '',
							'depends'=>array(
								array('image_panel', '=', 1),
								array('media_background', '!=', '')
							),
						),
						'media_overlay'=>array(
							'type'=>'color',
							'title'=>\Joomla\CMS\Language\Text::_('Overlay Color'),
							'desc'=>\Joomla\CMS\Language\Text::_('Set an additional transparent overlay to soften the image.'),
							'depends'=>array(
								array('image_panel', '=', 1)
							),
						),
						'navigation_image_item' => array(
							'type' => 'media',
							'title' => \Joomla\CMS\Language\Text::_('Navigation Thumbnail'),
							'desc' => \Joomla\CMS\Language\Text::_('This option is only used if the thumbnail navigation is set.'),
							'placeholder' => 'http://www.example.com/my-photo.jpg',
						),
					),
				),
				'text' => array(
					'type' => 'editor',
					'title' => \Joomla\CMS\Language\Text::_('Content'),
					'std' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>'
				),
				'title_link' => array(
					'type' => 'media',
					'format' => 'attachment',
					'title' => \Joomla\CMS\Language\Text::_('Link'),
					'placeholder' => 'http://www.example.com',
					'hide_preview' => true,
				),
				'link_new_tab' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK_NEWTAB'),
					'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK_NEWTAB_DESC'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_SAME_WINDOW'),
						'_blank' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_NEW_WINDOW'),
					),
					'depends' => array(array('title_link', '!=', '')),
				),
				'button_title' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Link Text'),
					'std' => 'Read more',
					'placeholder' => 'Read more',
					'depends' => array(array('title_link', '!=', '')),
				),
				'separator_slideshow_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('SlideShow'),
				),
				'ratio' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Ratio'),
					'desc' => \Joomla\CMS\Language\Text::_('Set a ratio. It\'s recommended to use the same ratio of the background image. Just use its width and height, like 1600:900'),
					'std' => '',
					'placeholder' => '16:9',
					'depends' => array(
						array('height', '=', ''),
					),
				),
				'min_height' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Min Height'),
					'min' => 200,
					'max' => 800,
					'desc' => \Joomla\CMS\Language\Text::_('Set the minimum height. This is useful if the content is too large on small devices'),
					'std' => 300,
				),
				'max_height' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Max Height'),
					'min' => 500,
					'max' => 1600,
					'desc' => \Joomla\CMS\Language\Text::_('Set the maximum height'),
				),
				'box_shadow' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Box Shadow'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the slideshow\'s box shadow size.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
						'xlarge' => \Joomla\CMS\Language\Text::_('X-Large'),
					),
					'std' => '',
				),

				'separator_animations_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Animation'),
				),
				'slideshow_transition' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Transition'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the transition between two slides'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Slide'),
						'pull' => \Joomla\CMS\Language\Text::_('Pull'),
						'push' => \Joomla\CMS\Language\Text::_('Push'),
						'fade' => \Joomla\CMS\Language\Text::_('Fade'),
						'scale' => \Joomla\CMS\Language\Text::_('Scale'),
					),
					'std' => '',
				),
				'velocity' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Velocity'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the velocity in pixels per milliseconds.'),
					'min' => 20,
					'max' => 300,
				),
				'autoplay' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Autoplay'),
					'desc' => \Joomla\CMS\Language\Text::_('To activate Slideslide autoplays to the attribute. '),
					'values' => array(
						1 => \Joomla\CMS\Language\Text::_('JYES'),
						0 => \Joomla\CMS\Language\Text::_('JNO'),
					),
					'std' => 0,
				),
				'pause' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Pause autoplay on hover'),
					'values' => array(
						1 => \Joomla\CMS\Language\Text::_('JYES'),
						0 => \Joomla\CMS\Language\Text::_('JNO'),
					),
					'std' => 0,
					'depends' => array(
						array('autoplay', '=', 1),
					)
				),
				'autoplay_interval' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Interval'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the autoplay interval in seconds.'),
					'placeholder'=>'7',
					'min' => 5,
					'max' => 15,
					'depends' => array(
						array('autoplay', '=', 1),
					)
				),
				'kenburns_transition' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Ken Burns Effect'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the transformation origin for the Ken Burns animation'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'top-left' => \Joomla\CMS\Language\Text::_('Top Left'),
						'top-center' => \Joomla\CMS\Language\Text::_('Top Center'),
						'top-right' => \Joomla\CMS\Language\Text::_('Top Right'),
						'center-left' => \Joomla\CMS\Language\Text::_('Center Left'),
						'center-center' => \Joomla\CMS\Language\Text::_('Center Center'),
						'center-right' => \Joomla\CMS\Language\Text::_('Center Right'),
						'bottom-left' => \Joomla\CMS\Language\Text::_('Bottom Left'),
						'bottom-center' => \Joomla\CMS\Language\Text::_('Bottom Center'),
						'bottom-right' => \Joomla\CMS\Language\Text::_('Bottom Right'),
					),
					'std' => '',
				),
				'kenburns_duration' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Duration'),
					'min' => 10,
					'max' => 30,
					'std' => 15,
					'desc' => \Joomla\CMS\Language\Text::_('Set the duration for the Ken Burns effect in seconds.'),
					'depends' => array(
						array('kenburns_transition', '!=', ''),
					),
				),
				'separator_navigation_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Navigation'),
				),
				'navigation' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Navigation Display'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the navigation type.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'dotnav' => \Joomla\CMS\Language\Text::_('Dotnav'),
						'thumbnav' => \Joomla\CMS\Language\Text::_('Thumbnav'),
					),
					'std' => 'dotnav',
				),
				'navigation_below' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Show below slideshow'),
					'values' => array(
						1 => \Joomla\CMS\Language\Text::_('JYES'),
						0 => \Joomla\CMS\Language\Text::_('JNO'),
					),
					'std' => 0,
					'depends' => array(
						array('navigation', '!=', ''),
					),
				),
				'navigation_below_position' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Position'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the position of the navigation.'),
					'values' => array(
						'left' => \Joomla\CMS\Language\Text::_('Left'),
						'center' => \Joomla\CMS\Language\Text::_('Center'),
						'right' => \Joomla\CMS\Language\Text::_('Right'),
					),
					'std' => 'center',
					'depends' => array(
						array('navigation_below', '=', 1),
						array('navigation', '!=', ''),
					),
				),
				'navigation_below_margin' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Margin'),
					'values' => array(
						'small-top' => \Joomla\CMS\Language\Text::_('Small'),
						'top' => \Joomla\CMS\Language\Text::_('Default'),
						'medium-top' => \Joomla\CMS\Language\Text::_('Medium'),
					),
					'std' => 'top',
					'depends' => array(
						array('navigation_below', '=', 1),
						array('navigation', '!=', ''),
					),
				),
				'navigation_vertical' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Vertical navigation'),
					'values' => array(
						1 => \Joomla\CMS\Language\Text::_('JYES'),
						0 => \Joomla\CMS\Language\Text::_('JNO'),
					),
					'std' => 0,
					'depends' => array(
						array('navigation_below', '!=', 1),
						array('navigation', '!=', ''),
					),
				),
				'navigation_position' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Position'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the position of the navigation.'),
					'values' => array(
						'top-left' => \Joomla\CMS\Language\Text::_('Top Left'),
						'top-right' => \Joomla\CMS\Language\Text::_('Top Right'),
						'center-left' => \Joomla\CMS\Language\Text::_('Center Left'),
						'center-right' => \Joomla\CMS\Language\Text::_('Center Right'),
						'bottom-left' => \Joomla\CMS\Language\Text::_('Bottom Left'),
						'bottom-center' => \Joomla\CMS\Language\Text::_('Bottom Center'),
						'bottom-right' => \Joomla\CMS\Language\Text::_('Bottom Right'),
					),
					'std' => 'bottom-center',
					'depends' => array(
						array('navigation', '!=', ''),
					),
				),
				'navigation_margin' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Margin'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
					),
					'std' => 'medium',
					'depends' => array(
						array('navigation', '!=', ''),
					),
				),
				'navigation_breakpoint' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Breakpoint'),
					'desc' => \Joomla\CMS\Language\Text::_('Display the navigation only on this device width and larger'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Always'),
						's' => \Joomla\CMS\Language\Text::_('Small (Phone Landscape)'),
						'm' => \Joomla\CMS\Language\Text::_('Medium (Tablet Landscape)'),
						'l' => \Joomla\CMS\Language\Text::_('Large (Desktop)'),
						'xl' => \Joomla\CMS\Language\Text::_('X-Large (Large Screens)'),
					),
					'std' => 's',
					'depends' => array(
						array('navigation', '!=', ''),
					),
				),
				'navigation_color' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Color'),
					'desc' => \Joomla\CMS\Language\Text::_('Set light or dark color if the navigation is below the slideshow.'),
					'values' => array(
						'light' => \Joomla\CMS\Language\Text::_('Light'),
						'' => \Joomla\CMS\Language\Text::_('None'),
						'dark' => \Joomla\CMS\Language\Text::_('Dark'),
					),
					'std' => '',
					'depends' => array(
						array('navigation', '!=', '')
					),
				),
				'thumbnav_wrap' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Thumbnav Wrap'),
					'desc' => \Joomla\CMS\Language\Text::_('Don\'t wrap into multiple lines. Define whether thumbnails wrap into multiple lines or not if the container is too small.'),
					'values' => array(
						1 => \Joomla\CMS\Language\Text::_('JYES'),
						0 => \Joomla\CMS\Language\Text::_('JNO'),
					),
					'std' => 0,
					'depends' => array(
						array('navigation', '=', 'thumbnav'),
					),
				),
				'thumbnail_width' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Thumbnail Width'),
					'min' => 0,
					'max' => 400,
					'desc' => \Joomla\CMS\Language\Text::_('Settings just one value preserves the original proportions. The image will be resized and croped automatically, and where possible, high resolution images will be auto-generated.'),
					'std' => 100,
					'depends' => array(
						array('navigation', '=', 'thumbnav'),
					),
				),

				'thumbnail_height' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Thumbnail Height'),
					'min' => 0,
					'max' => 400,
					'desc' => \Joomla\CMS\Language\Text::_('Settings just one value preserves the original proportions. The image will be resized and croped automatically, and where possible, high resolution images will be auto-generated.'),
					'std' => 75,
					'depends' => array(
						array('navigation', '=', 'thumbnav'),
					),
				),
				'image_svg_inline' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Make SVG stylable with CSS'),
					'desc' => \Joomla\CMS\Language\Text::_('Inject SVG images into the page markup, so that they can easily be styled with CSS.'),
					'std' => 0,
					'depends' => array(
						array('navigation', '=', 'thumbnav'),
					),
				),
				'image_svg_color' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('SVG Color'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the SVG color. It will only apply to supported elements defined in the SVG.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'muted' => \Joomla\CMS\Language\Text::_('Muted'),
						'emphasis' => \Joomla\CMS\Language\Text::_('Emphasis'),
						'primary' => \Joomla\CMS\Language\Text::_('Primary'),
						'secondary' => \Joomla\CMS\Language\Text::_('Secondary'),
						'success' => \Joomla\CMS\Language\Text::_('Success'),
						'warning' => \Joomla\CMS\Language\Text::_('Warning'),
						'danger' => \Joomla\CMS\Language\Text::_('Danger'),
					),
					'std' => '',
					'depends' => array(
						array('navigation', '=', 'thumbnav'),
						array('image_svg_inline', '=', 1)
					),
				),
				'separator_slidenav_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('SlideNav'),
				),
				'slidenav_position' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Position'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the position of the slidenav.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'default' => \Joomla\CMS\Language\Text::_('Default'),
						'outside' => \Joomla\CMS\Language\Text::_('Outside'),
						'top-left' => \Joomla\CMS\Language\Text::_('Top Left'),
						'top-right' => \Joomla\CMS\Language\Text::_('Top Right'),
						'center-left' => \Joomla\CMS\Language\Text::_('Center Left'),
						'center-right' => \Joomla\CMS\Language\Text::_('Center Right'),
						'bottom-left' => \Joomla\CMS\Language\Text::_('Bottom Left'),
						'bottom-center' => \Joomla\CMS\Language\Text::_('Bottom Center'),
						'bottom-right' => \Joomla\CMS\Language\Text::_('Bottom Right'),
					),
					'std' => 'default',
				),
				'slidenav_on_hover' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Show on hover only'),
					'values' => array(
						1 => \Joomla\CMS\Language\Text::_('JYES'),
						0 => \Joomla\CMS\Language\Text::_('JNO'),
					),
					'std' => 0,
					'depends' => array(array('slidenav_position', '!=', '')),
				),
				'larger_style' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Larger style'),
					'desc' => \Joomla\CMS\Language\Text::_('To increase the size of the slidenav icons'),
					'values' => array(
						'0' => \Joomla\CMS\Language\Text::_('JYES'),
						'1' => \Joomla\CMS\Language\Text::_('JNO'),
					),
					'std' => '0',
					'depends' => array(array('slidenav_position', '!=', '')),
				),
				'slidenav_margin' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Margin'),
					'desc' => \Joomla\CMS\Language\Text::_('Apply a margin between the slidnav and the slideshow container.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
					),
					'std' => 'medium',
					'depends' => array(array('slidenav_position', '!=', '')),
				),
				'slidenav_breakpoint' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Breakpoint'),
					'desc' => \Joomla\CMS\Language\Text::_('Display the slidenav on this device width and larger.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Always'),
						's' => \Joomla\CMS\Language\Text::_('Small (Phone Landscape)'),
						'm' => \Joomla\CMS\Language\Text::_('Medium (Tablet Landscape)'),
						'l' => \Joomla\CMS\Language\Text::_('Large (Desktop)'),
						'xl' => \Joomla\CMS\Language\Text::_('X-Large (Large Screens)'),
					),
					'std' => 's',
					'depends' => array(array('slidenav_position', '!=', '')),
				),

				'slidenav_outside_breakpoint' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Outside Breakpoint'),
					'desc' => \Joomla\CMS\Language\Text::_('Display the slidenav only outside on this device width and larger. Otherwise it will be displayed inside'),
					'values' => array(
						's' => \Joomla\CMS\Language\Text::_('Small (Phone Landscape)'),
						'm' => \Joomla\CMS\Language\Text::_('Medium (Tablet Landscape)'),
						'l' => \Joomla\CMS\Language\Text::_('Large (Desktop)'),
						'xl' => \Joomla\CMS\Language\Text::_('X-Large (Large Screens)'),
					),
					'std' => 'xl',
					'depends' => array(
						array('slidenav_position', '=', 'outside')
					),
				),
				'slidenav_outside_color' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Color'),
					'desc' => \Joomla\CMS\Language\Text::_('Set light or dark color for slidenav.'),
					'values' => array(
						'light' => \Joomla\CMS\Language\Text::_('Light'),
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'dark' => \Joomla\CMS\Language\Text::_('Dark'),
					),
					'std' => '',
					'depends' => array(
						array('slidenav_position', '!=', ''),
					),
				),
				'separator_img_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Image'),
				),
				'image_alignment' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Alignment'),
					'desc' => \Joomla\CMS\Language\Text::_('Align the image to the top,left,right or place it between the title and the content'),
					'values' => array(
						'top' => \Joomla\CMS\Language\Text::_('Top'),
						'bottom' => \Joomla\CMS\Language\Text::_('Bottom'),
						'left' => \Joomla\CMS\Language\Text::_('Left'),
						'right' => \Joomla\CMS\Language\Text::_('Right'),
					),
					'std' => 'top',
				),
				'grid_width' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Grid Width'),
					'desc' => \Joomla\CMS\Language\Text::_('Define the width of the image within the grid. Choose between percent and fixed widths or expand columns to the width of their content.'),
					'values' => array(
						'1-2' => \Joomla\CMS\Language\Text::_('50%'),
						'1-3' => \Joomla\CMS\Language\Text::_('33%'),
						'1-4' => \Joomla\CMS\Language\Text::_('25%'),
						'1-5' => \Joomla\CMS\Language\Text::_('20%'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
						'xlarge' => \Joomla\CMS\Language\Text::_('X-Large'),
						'2xlarge' => \Joomla\CMS\Language\Text::_('2X-Large'),
					),
					'std' => '1-2',
					'depends' => array(
						array('image_alignment', '!=', 'top'),
						array('image_alignment', '!=', 'bottom'),
					),
				),
				'grid_column_gap' => array( 
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Column Gap'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the size of the gap between the grid columns.'),
					'values' => array(
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
						'collapse' => \Joomla\CMS\Language\Text::_('None'),
					),
					'std' => '',
					'depends' => array(
						array('image_alignment', '!=', 'top'),
						array('image_alignment', '!=', 'bottom'),
					),
				),
				'grid_row_gap' => array( 
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Row Gap'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the size of the gap between the grid rows.'),
					'values' => array(
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
						'collapse' => \Joomla\CMS\Language\Text::_('None'),
					),
					'std' => '',
					'depends' => array(
						array('image_alignment', '!=', 'top'),
						array('image_alignment', '!=', 'bottom'),
					),
				),
				'grid_breakpoint' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Grid Breakpoint'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the breakpoint from which grid cells will stack.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Always'),
						's' => \Joomla\CMS\Language\Text::_('Small (Phone Landscape)'),
						'm' => \Joomla\CMS\Language\Text::_('Medium (Tablet Landscape)'),
						'l' => \Joomla\CMS\Language\Text::_('Large (Desktop)'),
					),
					'std' => 'm',
					'depends' => array(
						array('image_alignment', '!=', 'top'),
						array('image_alignment', '!=', 'bottom'),
					),
				),
				'vertical_alignment' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Vertical Alignment'),
					'desc' => \Joomla\CMS\Language\Text::_('Vertically center grid cells.'),
					'values' => array(
						1 => \Joomla\CMS\Language\Text::_('JYES'),
						0 => \Joomla\CMS\Language\Text::_('JNO'),
					),
					'std' => 1,
					'depends' => array(
						array('image_alignment', '!=', 'top'),
						array('image_alignment', '!=', 'bottom'),
					),
				),
				'image_margin_top' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Margin Top'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the top margin.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
						'xlarge' => \Joomla\CMS\Language\Text::_('X-Large'),
						'remove' => \Joomla\CMS\Language\Text::_('None'),
					),
					'std' => '',
					'depends' => array(
						array('image_alignment', '!=', 'top'),
						array('image_alignment', '!=', 'left'),
						array('image_alignment', '!=', 'right'),
					),
				),
				'separator_title_style_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Title'),
				),
				'title_font_family'=>array(
					'type'=>'fonts',
					'title'=>\Joomla\CMS\Language\Text::_('Font Family'),
					'selector'=> array(
						'type'=>'font',
						'font'=>'{{ VALUE }}',
						'css'=>'.ui-title { font-family: {{ VALUE }}; }',
					)
				),
				'heading_style' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Style'),
					'desc' => \Joomla\CMS\Language\Text::_('Heading styles differ in font-size but may also come with a predefined color, size and font'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'heading-2xlarge' => \Joomla\CMS\Language\Text::_('2XLarge'),
						'heading-xlarge' => \Joomla\CMS\Language\Text::_('XLarge'),
						'heading-large' => \Joomla\CMS\Language\Text::_('Large'),
						'heading-medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'heading-small' => \Joomla\CMS\Language\Text::_('Small'),
						'h1' => \Joomla\CMS\Language\Text::_('H1'),
						'h2' => \Joomla\CMS\Language\Text::_('H2'),
						'h3' => \Joomla\CMS\Language\Text::_('H3'),
						'h4' => \Joomla\CMS\Language\Text::_('H4'),
						'h5' => \Joomla\CMS\Language\Text::_('H5'),
						'h6' => \Joomla\CMS\Language\Text::_('H6'),
					),
					'std' => '',
				),
				'title_decoration' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Decoration'),
					'desc' => \Joomla\CMS\Language\Text::_('Decorate the title with a divider, bullet or a line that is vertically centered to the title'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'uk-heading-divider' => \Joomla\CMS\Language\Text::_('Divider'),
						'uk-heading-bullet' => \Joomla\CMS\Language\Text::_('Bullet'),
						'uk-heading-line' => \Joomla\CMS\Language\Text::_('Line'),
					),
					'std' => '',
				),
				'title_color' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Predefined Color'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the predefined title text color.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'muted' => \Joomla\CMS\Language\Text::_('Muted'),
						'emphasis' => \Joomla\CMS\Language\Text::_('Emphasis'),
						'primary' => \Joomla\CMS\Language\Text::_('Primary'),
						'secondary' => \Joomla\CMS\Language\Text::_('Secondary'),
						'success' => \Joomla\CMS\Language\Text::_('Success'),
						'warning' => \Joomla\CMS\Language\Text::_('Warning'),
						'danger' => \Joomla\CMS\Language\Text::_('Danger'),
					),
					'std' => '',
				),
				'custom_title_color'=>array(
					'type'=>'color',
					'title'=>\Joomla\CMS\Language\Text::_('Custom Color'),
					'depends' => array(
						array('title_color', '=', '')
					),
				),
				'heading_selector' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('HTML Element'),
					'desc' => \Joomla\CMS\Language\Text::_('Choose one of the six heading elements to fit your semantic structure.'),
					'values' => array(
						'h1' => \Joomla\CMS\Language\Text::_('h1'),
						'h2' => \Joomla\CMS\Language\Text::_('h2'),
						'h3' => \Joomla\CMS\Language\Text::_('h3'),
						'h4' => \Joomla\CMS\Language\Text::_('h4'),
						'h5' => \Joomla\CMS\Language\Text::_('h5'),
						'h6' => \Joomla\CMS\Language\Text::_('h6'),
						'div' => \Joomla\CMS\Language\Text::_('div'),
					),
					'std' => 'h3',
				),
				'title_margin_top' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Margin Top'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the top margin.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
						'xlarge' => \Joomla\CMS\Language\Text::_('X-Large'),
						'remove' => \Joomla\CMS\Language\Text::_('None'),
					),
					'std' => '',
				),
				'separator_content_style_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Content'),
				),
				'content_font_family'=>array(
					'type'=>'fonts',
					'title'=>\Joomla\CMS\Language\Text::_('Font Family'),
					'selector'=> array(
						'type'=>'font',
						'font'=>'{{ VALUE }}',
						'css'=>'.ui-content { font-family: {{ VALUE }}; }',
					)
				),
				'content_style' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Style'),
					'desc' => \Joomla\CMS\Language\Text::_('Select a predefined meta text style, including color, size and font-family'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'text-lead' => \Joomla\CMS\Language\Text::_('Lead'),
					),
					'std' => '',
				),
				'content_color'=>array(
					'type'=>'color',
					'title'=>\Joomla\CMS\Language\Text::_('Color'),
				),
				'content_margin_top' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Margin Top'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the top margin.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
						'xlarge' => \Joomla\CMS\Language\Text::_('X-Large'),
						'remove' => \Joomla\CMS\Language\Text::_('None'),
					),
					'std' => '',
				),

				'separator_button_style_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Link'),
				),
				'link_button_style' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Style'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the button style.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'primary' => \Joomla\CMS\Language\Text::_('Primary'),
						'secondary' => \Joomla\CMS\Language\Text::_('Secondary'),
						'danger' => \Joomla\CMS\Language\Text::_('Danger'),
						'text' => \Joomla\CMS\Language\Text::_('Text'),
						'link' => \Joomla\CMS\Language\Text::_('Link'),
						'link-muted' => \Joomla\CMS\Language\Text::_('Link Muted'),
						'link-text' => \Joomla\CMS\Language\Text::_('Link Text'),
						'custom' => \Joomla\CMS\Language\Text::_('Custom'),
					),
					'std' => '',
				),
				'separator_button_custom_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Custom Button Style'),
					'depends' => array(
						array('link_button_style', '=', 'custom'),
					),
				),
				'button_font_family' => array(
					'type' => 'fonts',
					'title' => \Joomla\CMS\Language\Text::_('Font Family'),
					'depends' => array(
						array('link_button_style', '=', 'custom'),
					),
					'selector' => array(
						'type' => 'font',
						'font' => '{{ VALUE }}',
						'css' => '.uk-button-custom { font-family: {{ VALUE }}; }',
					)
				),
				'button_background' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Background Color'),
					'std' => '#1e87f0',
					'depends' => array(
						array('link_button_style', '=', 'custom'),
					),
				),
				'button_color'=>array(
					'type'=>'color',
					'title'=>\Joomla\CMS\Language\Text::_('Button Color'),
					'depends' => array(
						array('link_button_style', '=', 'custom'),
					),
				),
				'button_background_hover' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Hover Background Color'),
					'std' => '#0f7ae5',
					'depends' => array(
						array('link_button_style', '=', 'custom'),
					),
				),
				'button_hover_color'=>array(
					'type'=>'color',
					'title'=>\Joomla\CMS\Language\Text::_('Hover Button Color'),
					'depends' => array(
						array('link_button_style', '=', 'custom'),
					),
				),
				'link_button_size' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Button Size'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'uk-button-small' => \Joomla\CMS\Language\Text::_('Small'),
						'uk-button-large' => \Joomla\CMS\Language\Text::_('Large'),
					),
					'std' => '',
				),
				'button_margin_top' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Margin Top'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the top margin.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
						'xlarge' => \Joomla\CMS\Language\Text::_('X-Large'),
						'remove' => \Joomla\CMS\Language\Text::_('None'),
					),
					'std' => '',
				),

				'separator_general_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('General'),
				),
				'addon_margin' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Margin'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the vertical margin. Note: The first element\'s top margin and the last element\'s bottom margin are always removed. Define those in the grid settings instead.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Keep existing'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'default' => \Joomla\CMS\Language\Text::_('Default'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
						'xlarge' => \Joomla\CMS\Language\Text::_('X-Large'),
						'remove-vertical' => \Joomla\CMS\Language\Text::_('None'),
					),
					'std' => '',
				),
				'addon_max_width' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Max Width'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the maximum content width.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
						'xlarge' => \Joomla\CMS\Language\Text::_('X-Large'),
						'2xlarge' => \Joomla\CMS\Language\Text::_('2X-Large'),
					),
					'std' => '',
				),
				'addon_max_width_breakpoint' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Max Width Breakpoint'),
					'desc' => \Joomla\CMS\Language\Text::_('Define the device width from which the element\'s max-width will apply.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Always'),
						's' => \Joomla\CMS\Language\Text::_('Small (Phone Landscape)'),
						'm' => \Joomla\CMS\Language\Text::_('Medium (Tablet Landscape)'),
						'l' => \Joomla\CMS\Language\Text::_('Large (Desktop)'),
						'xl' => \Joomla\CMS\Language\Text::_('X-Large (Large Screens)'),
					),
					'std' => '',
					'depends' => array(array('addon_max_width', '!=', '')),
				),
				'block_align'=>array(
					'type'=>'select',
					'title'=>\Joomla\CMS\Language\Text::_('Block Alignment'),
					'desc'=>\Joomla\CMS\Language\Text::_('Define the alignment in case the container exceeds the element\'s max-width.'),
					'values'=>array(
						''=>\Joomla\CMS\Language\Text::_('Left'),
						'center'=>\Joomla\CMS\Language\Text::_('Center'),
						'right'=>\Joomla\CMS\Language\Text::_('Right'),
					),
					'std'=>'',
					'depends'=>array(array('addon_max_width', '!=', '')),
				),
				'block_align_breakpoint'=>array(
					'type'=>'select',
					'title'=>\Joomla\CMS\Language\Text::_('Block Alignment Breakpoint'),
					'desc'=>\Joomla\CMS\Language\Text::_('Define the device width from which the alignment will apply.'),
					'values'=>array(
						''=>\Joomla\CMS\Language\Text::_('Always'),
						's'=>\Joomla\CMS\Language\Text::_('Small (Phone Landscape)'),
						'm'=>\Joomla\CMS\Language\Text::_('Medium (Tablet Landscape)'),
						'l'=>\Joomla\CMS\Language\Text::_('Large (Desktop)'),
						'xl'=>\Joomla\CMS\Language\Text::_('X-Large (Large Screens)'),
					),
					'std'=>'',
					'depends'=>array(array('addon_max_width', '!=', '')),
				),
				'block_align_fallback'=>array(
					'type'=>'select',
					'title'=>\Joomla\CMS\Language\Text::_('Block Alignment Fallback'),
					'desc'=>\Joomla\CMS\Language\Text::_('Define the alignment in case the container exceeds the element\'s max-width.'),
					'values'=>array(
						''=>\Joomla\CMS\Language\Text::_('Left'),
						'center'=>\Joomla\CMS\Language\Text::_('Center'),
						'right'=>\Joomla\CMS\Language\Text::_('Right'),
					),
					'std'=>'',
					'depends'=>array(
					  array('addon_max_width', '!=', ''),
					  array('block_align_breakpoint', '!=', '')
					),
				),
				'alignment' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Text Alignment'),
					'desc' => \Joomla\CMS\Language\Text::_('Center, left and right alignment.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Inherit'),
						'uk-text-left' => \Joomla\CMS\Language\Text::_('Left'),
						'uk-text-center' => \Joomla\CMS\Language\Text::_('Center'),
						'uk-text-right' => \Joomla\CMS\Language\Text::_('Right'),
						'uk-text-justify' => \Joomla\CMS\Language\Text::_('Justify'),
					),
					'std' => '',
				),
				'text_breakpoint' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Text Alignment Breakpoint'),
					'desc' => \Joomla\CMS\Language\Text::_('Display the text alignment only on this device width and larger'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Always'),
						's' => \Joomla\CMS\Language\Text::_('Small (Phone Landscape)'),
						'm' => \Joomla\CMS\Language\Text::_('Medium (Tablet Landscape)'),
						'l' => \Joomla\CMS\Language\Text::_('Large (Desktop)'),
						'xl' => \Joomla\CMS\Language\Text::_('X-Large (Large Screens)'),
					),
					'std' => '',
					'depends' => array(array('alignment', '!=', '')),
				),
				'text_alignment_fallback' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Text Alignment Fallback'),
					'desc' => \Joomla\CMS\Language\Text::_('Define an alignment fallback for device widths below the breakpoint'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Inherit'),
						'left' => \Joomla\CMS\Language\Text::_('Left'),
						'center' => \Joomla\CMS\Language\Text::_('Center'),
						'right' => \Joomla\CMS\Language\Text::_('Right'),
						'justify' => \Joomla\CMS\Language\Text::_('Justify'),
					),
					'std' => '',
					'depends' => array(
						array('text_breakpoint', '!=', ''),
						array('alignment', '!=', '')
					),
				),
				'animation' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Animation'),
					'desc' => \Joomla\CMS\Language\Text::_('A collection of smooth animations to use within your page.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Inherit'),
						'fade' => \Joomla\CMS\Language\Text::_('Fade'),
						'scale-up' => \Joomla\CMS\Language\Text::_('Scale Up'),
						'scale-down' => \Joomla\CMS\Language\Text::_('Scale Down'),
						'slide-top-small' => \Joomla\CMS\Language\Text::_('Slide Top Small'),
						'slide-bottom-small' => \Joomla\CMS\Language\Text::_('Slide Bottom Small'),
						'slide-left-small' => \Joomla\CMS\Language\Text::_('Slide Left Small'),
						'slide-right-small' => \Joomla\CMS\Language\Text::_('Slide Right Small'),
						'slide-top-medium' => \Joomla\CMS\Language\Text::_('Slide Top Medium'),
						'slide-bottom-medium' => \Joomla\CMS\Language\Text::_('Slide Bottom Medium'),
						'slide-left-medium' => \Joomla\CMS\Language\Text::_('Slide Left Medium'),
						'slide-right-medium' => \Joomla\CMS\Language\Text::_('Slide Right Medium'),
						'slide-top' => \Joomla\CMS\Language\Text::_('Slide Top 100%'),
						'slide-bottom' => \Joomla\CMS\Language\Text::_('Slide Bottom 100%'),
						'slide-left' => \Joomla\CMS\Language\Text::_('Slide Left 100%'),
						'slide-right' => \Joomla\CMS\Language\Text::_('Slide Right 100%'),
						'parallax' => \Joomla\CMS\Language\Text::_('Parallax'),
					),
					'std' => '',
				),
				'animation_repeat' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Repeat Animation'),
					'desc' => \Joomla\CMS\Language\Text::_('Applies the animation class every time the element is in view'),
					'std' => 0,
					'depends' => array(
						array('animation', '!=', ''),
						array('animation', '!=', 'parallax'),
					),
				),

				'separator_parallax_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Parallax Animation Settings'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'horizontal_start' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Horizontal Start'),
					'min' => -600,
					'max' => 600,
					'desc' => \Joomla\CMS\Language\Text::_('Animate the horizontal position (translateX) in pixels.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'horizontal_end' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Horizontal End'),
					'min' => -600,
					'max' => 600,
					'desc' => \Joomla\CMS\Language\Text::_('Animate the horizontal position (translateX) in pixels.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'vertical_start' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Vertical Start'),
					'min' => -600,
					'max' => 600,
					'desc' => \Joomla\CMS\Language\Text::_('Animate the vertical position (translateY) in pixels.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'vertical_end' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Vertical End'),
					'min' => -600,
					'max' => 600,
					'desc' => \Joomla\CMS\Language\Text::_('Animate the vertical position (translateY) in pixels.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'scale_start' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Scale Start'),
					'min' => 50,
					'max' => 200,
					'desc' => \Joomla\CMS\Language\Text::_('Animate the scaling. Min: 50, Max: 200 =>  100 means 100% scale, 200 means 200% scale, and 50 means 50% scale.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'scale_end' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Scale End'),
					'min' => 50,
					'max' => 200,
					'desc' => \Joomla\CMS\Language\Text::_('Animate the scaling. Min: 50, Max: 200 =>  100 means 100% scale, 200 means 200% scale, and 50 means 50% scale.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'rotate_start' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Rotate Start'),
					'min' => 0,
					'max' => 360,
					'desc' => \Joomla\CMS\Language\Text::_('Animate the rotation clockwise in degrees.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'rotate_end' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Rotate End'),
					'min' => 0,
					'max' => 360,
					'desc' => \Joomla\CMS\Language\Text::_('Animate the rotation clockwise in degrees.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'opacity_start' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Opacity Start'),
					'min' => 0,
					'max' => 100,
					'desc' => \Joomla\CMS\Language\Text::_('Animate the opacity. 100 means 100% opacity, and 0 means 0% opacity.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'opacity_end' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Opacity End'),
					'min' => 0,
					'max' => 100,
					'desc' => \Joomla\CMS\Language\Text::_('Animate the opacity. 100 means 100% opacity, and 0 means 0% opacity.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'easing' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Easing'),
					'min' => -200,
					'max' => 200,
					'desc' => \Joomla\CMS\Language\Text::_('Set the animation easing. A value below 100 is faster in the beginning and slower towards the end while a value above 100 behaves inversely.'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'viewport' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Viewport'),
					'min' => 10,
					'max' => 100,
					'desc' => \Joomla\CMS\Language\Text::_('Set the animation end point relative to viewport height, e.g. 50 for 50% of the viewport'),
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'parallax_target' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Target'),
					'desc' => \Joomla\CMS\Language\Text::_('Animate the element as long as the section is visible.'),
					'std' => 0,
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'parallax_zindex' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Z Index'),
					'desc' => \Joomla\CMS\Language\Text::_('Set a higher stacking order.'),
					'std' => 0,
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'breakpoint' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Breakpoint'),
					'desc' => \Joomla\CMS\Language\Text::_('Display the parallax effect only on this device width and larger. It is useful to disable the parallax animation on small viewports.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Always'),
						's' => \Joomla\CMS\Language\Text::_('Small (Phone)'),
						'm' => \Joomla\CMS\Language\Text::_('Medium (Tablet)'),
						'l' => \Joomla\CMS\Language\Text::_('Large (Desktop)'),
						'xl' => \Joomla\CMS\Language\Text::_('X-Large (Large Screens)'),
					),
					'std' => '',
					'depends' => array(array('animation', '=', 'parallax')),
				),
				'visibility' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Visibility'),
					'desc' => \Joomla\CMS\Language\Text::_('Display the element only on this device width and larger.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Always'),
						'uk-visible@s' => \Joomla\CMS\Language\Text::_('Small (Phone Landscape)'),
						'uk-visible@m' => \Joomla\CMS\Language\Text::_('Medium (Tablet Landscape)'),
						'uk-visible@l' => \Joomla\CMS\Language\Text::_('Large (Desktop)'),
						'uk-visible@xl' => \Joomla\CMS\Language\Text::_('X-Large (Large Screens)'),
						'uk-hidden@s' => \Joomla\CMS\Language\Text::_('Hidden Small (Phone Landscape)'),
						'uk-hidden@m' => \Joomla\CMS\Language\Text::_('Hidden Medium (Tablet Landscape)'),
						'uk-hidden@l' => \Joomla\CMS\Language\Text::_('Hidden Large (Desktop)'),
						'uk-hidden@xl' => \Joomla\CMS\Language\Text::_('Hidden X-Large (Large Screens)'),
					),
					'std' => '',
				),
				'class' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
					'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
					'std' => '',
				),
			),
		),
	)
);
