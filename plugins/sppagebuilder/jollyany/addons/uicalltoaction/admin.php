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
		'addon_name' => 'uicalltoaction',
		'title' => \Joomla\CMS\Language\Text::_('UI Call To Action'),
		'desc' => \Joomla\CMS\Language\Text::_('Create Beautiful Call To Action That Drive Engagement'),
		'icon'=>\Joomla\CMS\Uri\Uri::root() . 'plugins/sppagebuilder/jollyany/addons/uicalltoaction/assets/images/icon.png',
		'category' => 'Jollyany',
		'attr' => array(
			'general' => array(
				'admin_label' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std' => '',
				),
				// Title
				'title' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Title'),
					'std' =>  'Are you looking for something individual?',
				),
				// Content
				'content' => array(
					'type' => 'editor',
					'title' => \Joomla\CMS\Language\Text::_('Content'),
					'std' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
				),
				'title_link' => array(
					'type' => 'media',
					'format' => 'attachment',
					'title' => \Joomla\CMS\Language\Text::_('Link'),
					'desc' => \Joomla\CMS\Language\Text::_('Enter or pick a link, an image or a video file.'),
					'placeholder' => 'http://',
					'std' => '#',
					'hide_preview' => true,
				),
				'button_title' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Link Text'),
					'std' => 'Read more',
					'placeholder' => 'Read more',
					'depends' => array(
						array('title_link', '!=', ''),
					),
				),
				'separator_layout_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Layout'),
				),
				'button_alignment' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Button Alignment'),
					'desc' => \Joomla\CMS\Language\Text::_('Align the button to the top,left,right or place it between the title and the content'),
					'values' => array(
						'top' => \Joomla\CMS\Language\Text::_('Top'),
						'bottom' => \Joomla\CMS\Language\Text::_('Bottom'),
						'left' => \Joomla\CMS\Language\Text::_('Left'),
						'right' => \Joomla\CMS\Language\Text::_('Right'),
					),
					'std' => 'right',
				),
				'grid_width' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Grid Width'),
					'desc' => \Joomla\CMS\Language\Text::_('Define the width of the button within the grid. Choose between percent and fixed widths or expand columns to the width of their content.'),
					'values' => array(
						'auto' => \Joomla\CMS\Language\Text::_('Auto'),
						'4-5' => \Joomla\CMS\Language\Text::_('80%'),
						'3-4' => \Joomla\CMS\Language\Text::_('75%'),
						'2-3' => \Joomla\CMS\Language\Text::_('66%'),
						'3-5' => \Joomla\CMS\Language\Text::_('60%'),
						'1-2' => \Joomla\CMS\Language\Text::_('50%'),
						'2-5' => \Joomla\CMS\Language\Text::_('40%'),
						'1-3' => \Joomla\CMS\Language\Text::_('33%'),
						'1-4' => \Joomla\CMS\Language\Text::_('25%'),
						'1-5' => \Joomla\CMS\Language\Text::_('20%'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
						'xlarge' => \Joomla\CMS\Language\Text::_('X-Large'),
						'2xlarge' => \Joomla\CMS\Language\Text::_('2X-Large'),
					),
					'std' => '1-5',
					'depends' => array(
						array('button_alignment', '!=', 'top'),
						array('button_alignment', '!=', 'bottom'),
					),
				),
				'grid_gutter' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Grid Gutter'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the gutter width between the button and content items.'),
					'values' => array(
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
						'collapse' => \Joomla\CMS\Language\Text::_('None'),
					),
					'std' => '',
					'depends' => array(
						array('button_alignment', '!=', 'top'),
						array('button_alignment', '!=', 'bottom'),
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
						'xl' => \Joomla\CMS\Language\Text::_('X-Large (Large Screens)'),
					),
					'std' => 'm',
					'depends' => array(
						array('button_alignment', '!=', 'top'),
						array('button_alignment', '!=', 'bottom'),
					),
				),
				'grid_divider' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Show dividers'),
					'desc' => \Joomla\CMS\Language\Text::_('Select this option to separate grid cells with lines.'),
					'values' => array(
						1 => \Joomla\CMS\Language\Text::_('JYES'),
						0 => \Joomla\CMS\Language\Text::_('JNO'),
					),
					'std' => 0,
					'depends' => array(
						array('grid_gutter', '!=', 'collapse'),
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
					'std' => 0,
					'depends' => array(
						array('button_alignment', '!=', 'top'),
						array('button_alignment', '!=', 'bottom'),
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
					'std' => '',
				),
				'decoration' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Heading Decoration'),
					'desc' => \Joomla\CMS\Language\Text::_('Decorate the heading with a divider, bullet or a line that is vertically centered to the heading'),
					'values' => array(
						'' => 'None',
						'divider' => 'Divider',
						'bullet' => 'Bullet',
						'line' => 'Line',
					),
					'std' => ''
				),
				'title_color' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Predefined Color'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the predefined title text color.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'text-muted' => \Joomla\CMS\Language\Text::_('Muted'),
						'text-primary' => \Joomla\CMS\Language\Text::_('Primary'),
						'text-secondary' => \Joomla\CMS\Language\Text::_('Secondary'),
						'text-success' => \Joomla\CMS\Language\Text::_('Success'),
						'text-warning' => \Joomla\CMS\Language\Text::_('Warning'),
						'text-danger' => \Joomla\CMS\Language\Text::_('Danger'),
						'text-background' => \Joomla\CMS\Language\Text::_('Background'),
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
				'title_text_transform' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Transform'),
					'desc' => \Joomla\CMS\Language\Text::_('The following options will transform text into uppercased, capitalized or lowercased characters.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Inherit'),
						'uppercase' => \Joomla\CMS\Language\Text::_('Uppercase'),
						'capitalize' => \Joomla\CMS\Language\Text::_('Capitalize'),
						'lowercase' => \Joomla\CMS\Language\Text::_('Lowercase'),
					),
					'std' => '',
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
					'std' => 'remove',
				),

				'separator_content_options' => array(
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
				'content_colors' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Predefined Color'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the predefined content text color.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'text-muted' => \Joomla\CMS\Language\Text::_('Muted'),
						'text-emphasis' => \Joomla\CMS\Language\Text::_('Emphasis'),
						'text-primary' => \Joomla\CMS\Language\Text::_('Primary'),
						'text-secondary' => \Joomla\CMS\Language\Text::_('Secondary'),
						'text-success' => \Joomla\CMS\Language\Text::_('Success'),
						'text-warning' => \Joomla\CMS\Language\Text::_('Warning'),
						'text-danger' => \Joomla\CMS\Language\Text::_('Danger'),
					),
					'std' => '',
				),
				'custom_content_color'=>array(
					'type'=>'color',
					'title'=>\Joomla\CMS\Language\Text::_('Color'),
					'depends' => array(
						array('content_colors', '=', '')
					),
				),
				'content_dropcap' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Drop Cap'),
					'desc' => \Joomla\CMS\Language\Text::_('Display the first letter of the paragraph as a large initial.'),
					'values' => array(
						1 => \Joomla\CMS\Language\Text::_('JYES'),
						0 => \Joomla\CMS\Language\Text::_('JNO'),
					),
					'std' => 0,
				),
				'content_column' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Columns'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the number of text columns.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'1-2' => \Joomla\CMS\Language\Text::_('Halves'),
						'1-3' => \Joomla\CMS\Language\Text::_('Thirds'),
						'1-4' => \Joomla\CMS\Language\Text::_('Quarters'),
						'1-5' => \Joomla\CMS\Language\Text::_('Fifths'),
						'1-6' => \Joomla\CMS\Language\Text::_('Sixths'),
					),
					'std' => '',
				),
				'content_column_divider' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Show dividers'),
					'desc' => \Joomla\CMS\Language\Text::_('Show a divider between text columns.'),
					'values' => array(
						1 => \Joomla\CMS\Language\Text::_('JYES'),
						0 => \Joomla\CMS\Language\Text::_('JNO'),
					),
					'std' => 0,
					'depends' => array(array('content_column', '!=', '')),
				),
				'content_column_breakpoint' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Columns Breakpoint'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the device width from which the text columns should apply'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Always'),
						's' => \Joomla\CMS\Language\Text::_('Small (Phone Landscape)'),
						'm' => \Joomla\CMS\Language\Text::_('Medium (Tablet Landscape)'),
						'l' => \Joomla\CMS\Language\Text::_('Large (Desktop)'),
						'xl' => \Joomla\CMS\Language\Text::_('X-Large (Large Screens)'),
					),
					'std' => 'm',
					'depends' => array(array('content_column', '!=', '')),
				),
				'content_style' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Style'),
					'desc' => \Joomla\CMS\Language\Text::_('Select a predefined meta text style, including color, size and font-family'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'text-lead' => \Joomla\CMS\Language\Text::_('Lead'),
						'text-meta' => \Joomla\CMS\Language\Text::_('Meta'),
					),
					'std' => '',
				),
				'content_text_transform' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Transform'),
					'desc' => \Joomla\CMS\Language\Text::_('The following options will transform text into uppercased, capitalized or lowercased characters.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Inherit'),
						'uppercase' => \Joomla\CMS\Language\Text::_('Uppercase'),
						'capitalize' => \Joomla\CMS\Language\Text::_('Capitalize'),
						'lowercase' => \Joomla\CMS\Language\Text::_('Lowercase'),
					),
					'std' => '',
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
				'link_new_tab' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK_NEWTAB'),
					'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK_NEWTAB_DESC'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_SAME_WINDOW'),
						'_blank' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_NEW_WINDOW'),
					),
					'std' => '',
					'depends' => array(
						array('button_title', '!=', ''),
					),
				),
				'link_button_style' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Style'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the button style.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Button Default'),
						'primary' => \Joomla\CMS\Language\Text::_('Button Primary'),
						'secondary' => \Joomla\CMS\Language\Text::_('Button Secondary'),
						'danger' => \Joomla\CMS\Language\Text::_('Button Danger'),
						'text' => \Joomla\CMS\Language\Text::_('Button Text'),
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
					)
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
					)
				),
				'button_color'=>array(
					'type'=>'color',
					'title'=>\Joomla\CMS\Language\Text::_('Button Color'),
					'depends' => array(
						array('link_button_style', '=', 'custom'),
					)
				),
				'button_background_hover' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Hover Background Color'),
					'std' => '#1e87f0',
					'depends' => array(
						array('link_button_style', '=', 'custom'),
					)
				),
				'button_hover_color'=>array(
					'type'=>'color',
					'title'=>\Joomla\CMS\Language\Text::_('Hover Button Color'),
					'depends' => array(
						array('link_button_style', '=', 'custom'),
					)
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
				'button_width' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Full Width'),
					'std' => 0,
				),
				'link_margin_top' => array(
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
					'std' => '',
				),
			),
		),
	)
);
