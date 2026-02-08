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
		'type' => 'repeatable',
		'addon_name' => 'uibusinesshours',
		'title' => \Joomla\CMS\Language\Text::_('UI Business Hours'),
		'desc' => \Joomla\CMS\Language\Text::_('You can beautify your business hours on page too!'),
		'icon'=>\Joomla\CMS\Uri\Uri::root() . 'plugins/sppagebuilder/jollyany/addons/uibusinesshours/assets/images/icon.png',
		'category' => 'Jollyany',
		'attr' => array(
			'general' => array(
				'admin_label' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std' => ''
				),
				// Repeatable Items
				'ui_business_day_items' => array(
					'title' => \Joomla\CMS\Language\Text::_('Days and Timings'),
					'attr' => array(
						'business_day' => array(
							'type' => 'text',
							'title' => \Joomla\CMS\Language\Text::_('Enter Day'),
							'std' => 'Monday',
						),
						'business_time' => array(
							'type' => 'text',
							'title' => \Joomla\CMS\Language\Text::_('Enter Time'),
							'std' => '09:00 - 19:00'
						),
						'active' => array(
							'type' => 'checkbox',
							'title' => \Joomla\CMS\Language\Text::_('Style This Day'),
							'std' => 0
						),
						'active_color' => array(
							'type' => 'color',
							'title' => \Joomla\CMS\Language\Text::_('Color Highlight'),
							'std' =>  '#f6121c',
							'depends' => array(array('active', '=', 1)),
						),
					),
				),
				'title' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
					'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
					'std' =>  'Business Hours',
				),
				'separator_title_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Title'),
				),
				'title_font_family'=>array(
					'type'=>'fonts',
					'title'=>\Joomla\CMS\Language\Text::_('Font Family'),
					'selector'=> array(
						'type'=>'font',
						'font'=>'{{ VALUE }}',
						'css'=>'.tz-title { font-family: {{ VALUE }}; }',
					)
				),
				'font_weight' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Font weight'),
					'desc' => \Joomla\CMS\Language\Text::_('Add one of the following classes to modify the font weight of your text.'),
					'values' => array(
					  '' => \Joomla\CMS\Language\Text::_('Default'),
					  'light' => \Joomla\CMS\Language\Text::_('Light'),
					  'normal' => \Joomla\CMS\Language\Text::_('Normal'),
					  'bold' => \Joomla\CMS\Language\Text::_('Bold'),
					  'lighter' => \Joomla\CMS\Language\Text::_('Lighter'),
					  'bolder' => \Joomla\CMS\Language\Text::_('Bolder'),
					),
				),				
				'icon' => array(
					'type' => 'icon',
					'title' => \Joomla\CMS\Language\Text::_('Icon'),
				),				
				'title_icon_position' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_ICON_POSITION'),
					'values' => array(
						'before' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_ICON_POSITION_BEFORE'),
						'after' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_ICON_POSITION_AFTER'),
					),
					'std' => 'before',
					'depends' => array(array('icon', '!=', '', 'title', '!=', '')),
				),
				'heading_style' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Style'),
					'desc' => \Joomla\CMS\Language\Text::_('Heading styles differ in font-size but may also come with a predefined color, size and font'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
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
					'std' => 'h4',
					'depends' => array(array('title', '!=', '')),
				),
				'title_color' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Color'),
					'std' =>  '#ffffff',
					'depends' => array(array('title', '!=', '')),
				),
				'title_background' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Background'),
					'std' =>  '#4c89f2',
					'depends' => array(array('title', '!=', '')),
				),
				'head_padding' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Padding'),
					'std' => '20',
					'max' => 100,
				),
				'title_alignment' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Alignment'),
					'desc' => \Joomla\CMS\Language\Text::_('Choose title alignment (position)'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Inherit'),
						'uk-text-left' => \Joomla\CMS\Language\Text::_('Left'),
						'uk-text-center' => \Joomla\CMS\Language\Text::_('Center'),
						'uk-text-right' => \Joomla\CMS\Language\Text::_('Right'),
						'uk-text-justify' => \Joomla\CMS\Language\Text::_('Justify'),
					),
					'std' => 'uk-text-center',
					'depends' => array(array('title', '!=', '')),
				),

				'title_text_transform' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Transform'),
					'desc' => \Joomla\CMS\Language\Text::_('The following options will transform title into uppercased, capitalized or lowercased characters.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'uk-text-uppercase' => \Joomla\CMS\Language\Text::_('Uppercase'),
						'uk-text-capitalize' => \Joomla\CMS\Language\Text::_('Capitalize'),
						'uk-text-lowercase' => \Joomla\CMS\Language\Text::_('Lowercase'),
					),
					'std' => '',
					'depends' => array(array('title', '!=', '')),
				),
				'heading_selector' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('HTML Element'),
					'desc' => \Joomla\CMS\Language\Text::_('Choose one of the seven heading elements to fit your semantic structure.'),
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
					'depends' => array(array('title', '!=', '')),
				),
				'separator_style_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Style'),
				),
				'content_font_family'=>array(
					'type'=>'fonts',
					'title'=>\Joomla\CMS\Language\Text::_('Font Family'),
					'selector'=> array(
						'type'=>'font',
						'font'=>'{{ VALUE }}',
						'css'=>'.tz-body-wrapper { font-family: {{ VALUE }}; }',
					)
				),
				'card_style' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Style'),
					'desc' => \Joomla\CMS\Language\Text::_('Select on of the boxed card styles or a blank card.'),
					'values' => array(
						'uk-card-default' => \Joomla\CMS\Language\Text::_('Default'),
						'uk-card-primary' => \Joomla\CMS\Language\Text::_('Primary'),
						'uk-card-secondary' => \Joomla\CMS\Language\Text::_('Secondary'),
						'uk-card-hover' => \Joomla\CMS\Language\Text::_('Hover'),
						'uk-card-custom' => \Joomla\CMS\Language\Text::_('Custom'),
					),
					'std' => '',
				),
				'card_background' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Background Color'),
					'std' => '#f7f7f7',
					'depends' => array(
						array('card_style', '=', 'uk-card-custom'),
					),
				),
				'card_color'=>array(
					'type'=>'color',
					'title'=>\Joomla\CMS\Language\Text::_('Color'),
					'depends' => array(
						array('card_style', '=', 'uk-card-custom'),
					),
				),
				'card_padding' => array(
					'type' => 'slider',
					'title' => \Joomla\CMS\Language\Text::_('Padding'),
					'std' => '20',
					'max' => 100,
				),
				'large_padding' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Larger padding'),
					'desc' => \Joomla\CMS\Language\Text::_('To increase the spacing between list items.'),
					'std' => 0
				),
				'list_style' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('List Style'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the list style for list items.'),
					'values' => array(
						'' => 'Default',
						'uk-list-bullet' => 'Bullet',
						'uk-list-divider' => 'Divider',
						'uk-list-striped' => 'Striped',
					),
					'std' => ''
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
				'addon_max_width'=>array(
					'type'=>'select',
					'title'=>\Joomla\CMS\Language\Text::_('Max Width'),
					'desc'=>\Joomla\CMS\Language\Text::_('Set the maximum content width.'),
					'values'=> array(
						''=>\Joomla\CMS\Language\Text::_('None'),
						'small'=>\Joomla\CMS\Language\Text::_('Small'),
						'medium'=>\Joomla\CMS\Language\Text::_('Medium'),
						'large'=>\Joomla\CMS\Language\Text::_('Large'),
						'xlarge'=>\Joomla\CMS\Language\Text::_('X-Large'),
						'2xlarge' => \Joomla\CMS\Language\Text::_('2X-Large'),
					),
					'std'=> '',
				),
				'addon_max_width_breakpoint'=>array(
					'type'=>'select',
					'title'=>\Joomla\CMS\Language\Text::_('Max Width Breakpoint'),
					'desc'=>\Joomla\CMS\Language\Text::_('Define the device width from which the element\'s max-width will apply.'),
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
						array('alignment', '!=', ''),
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
						array('animation', '!=', 'parallax')
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
					'std' => ''
				),
			),
		),
	)
);
