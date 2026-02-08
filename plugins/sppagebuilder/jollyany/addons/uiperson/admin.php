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
		'addon_name' => 'uiperson',
		'title' => \Joomla\CMS\Language\Text::_('UI Person'),
		'desc' => \Joomla\CMS\Language\Text::_('Present the person behind your company/team with beautiful design'),
		'icon'=>\Joomla\CMS\Uri\Uri::root() . 'plugins/sppagebuilder/jollyany/addons/uiperson/assets/images/icon.png',
		'category' => 'Jollyany',
		'attr' => array(
			'general' => array(
				'admin_label' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std' => '',
				),
				'title_addon' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Title'),
					'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
					'std' =>  '',
				),
				'title_heading_style' => array(
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
					'std' => 'h3',
					'depends' => array(array('title_addon', '!=', '')),
				),
				'title_heading_margin' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Title Margin'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the vertical margin for title.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Keep existing'),
						'uk-margin-small' => \Joomla\CMS\Language\Text::_('Small'),
						'uk-margin' => \Joomla\CMS\Language\Text::_('Default'),
						'uk-margin-medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'uk-margin-large' => \Joomla\CMS\Language\Text::_('Large'),
						'uk-margin-xlarge' => \Joomla\CMS\Language\Text::_('X-Large'),
						'uk-margin-remove-vertical' => \Joomla\CMS\Language\Text::_('None'),
					),
					'std' => 'uk-margin',
					'depends' => array(array('title_addon', '!=', '')),
				),
				'title_heading_decoration' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Decoration'),
					'desc' => \Joomla\CMS\Language\Text::_('Decorate the heading with a divider, bullet or a line that is vertically centered to the heading'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'uk-heading-divider' => \Joomla\CMS\Language\Text::_('Divider'),
						'uk-heading-bullet' => \Joomla\CMS\Language\Text::_('Bullet'),
						'uk-heading-line' => \Joomla\CMS\Language\Text::_('Line'),
					),
					'std' => '',
					'depends' => array(array('title_addon', '!=', '')),
				),
				'title_heading_color' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Color'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'text-muted' => \Joomla\CMS\Language\Text::_('Muted'),
						'text-emphasis' => \Joomla\CMS\Language\Text::_('Emphasis'),
						'text-primary' => \Joomla\CMS\Language\Text::_('Primary'),
						'text-secondary' => \Joomla\CMS\Language\Text::_('Secondary'),
						'text-success' => \Joomla\CMS\Language\Text::_('Success'),
						'text-warning' => \Joomla\CMS\Language\Text::_('Warning'),
						'text-danger' => \Joomla\CMS\Language\Text::_('Danger'),
						'text-background' => \Joomla\CMS\Language\Text::_('Background'),
					),
					'std' => '',
					'depends' => array(array('title_addon', '!=', '')),
				),
				'title_heading_selector' => array(
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
					'depends' => array(array('title_addon', '!=', '')),
				),
				'image' => array(
					'type' => 'media',
					'title' => \Joomla\CMS\Language\Text::_('Image'),
					'placeholder' => 'http://www.example.com/my-photo.jpg',
				),
				'name' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Name'),
					'placeholder' => 'Person Name',
					'std' => 'Carol Chavez',
				),
				'designation' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Designation'),
					'placeholder' => 'Photographer',
					'std' => 'Photographer',
				),
				'email' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Email'),
					'placeholder' => 'hello@example.com',
					'std' => '',
				),
				'introtext' => array(
					'type' => 'editor',
					'title' => \Joomla\CMS\Language\Text::_('Description'),
				),
				'use_social' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Add Social Icons'),
					'values' => array(
						1 => \Joomla\CMS\Language\Text::_('JYES'),
						0 => \Joomla\CMS\Language\Text::_('JNO'),
					),
					'std' => 0,
				),
				'facebook' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Facebook'),
					'std' => 'http://www.facebook.com/TemPlaza',
					'depends' => array('use_social' => 1)
				),

				'twitter' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Twitter'),
					'std' => 'http://twitter.com/TemPlaza',
					'depends' => array('use_social' => 1)
				),
				'youtube' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Youtube'),
					'depends' => array('use_social' => 1)
				),

				'linkedin' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Linkedin'),
					'depends' => array('use_social' => 1)
				),

				'pinterest' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Pinterest'),
					'depends' => array('use_social' => 1)
				),

				'flickr' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Flickr'),
					'depends' => array('use_social' => 1)
				),

				'dribbble' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Dribbble'),
					'depends' => array('use_social' => 1)
				),

				'behance' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Behance'),
					'depends' => array('use_social' => 1)
				),

				'instagram' => array(
					'type' => 'text',
					'title' => \Joomla\CMS\Language\Text::_('Instagram'),
					'depends' => array('use_social' => 1)
				),

				'separator_card_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Card'),
				),
				'card_styles' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Style'),
					'desc' => \Joomla\CMS\Language\Text::_('Select on of the boxed card styles or a blank card.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'default' => \Joomla\CMS\Language\Text::_('Card Default'),
						'primary' => \Joomla\CMS\Language\Text::_('Card Primary'),
						'secondary' => \Joomla\CMS\Language\Text::_('Card Secondary'),
						'hover' => \Joomla\CMS\Language\Text::_('Card Hover'),
						'custom' => \Joomla\CMS\Language\Text::_('Custom'),
					),
					'std' => '',
				),
				'card_background' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Background Color'),
					'std' => '#1e87f0',
					'depends' => array(array('card_styles', '=', 'custom')),
				),
				'card_color' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Color'),
					'depends' => array(array('card_styles', '=', 'custom')),
				),
				'card_size' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Size'),
					'desc' => \Joomla\CMS\Language\Text::_('Define the card\'s size by selecting the padding between the card and its content.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
					),
					'std' => '',
					'depends' => array(array('card_styles', '!=', '')),
				),
				'image_padding' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Align image without padding'),
					'desc' => \Joomla\CMS\Language\Text::_('Top, left or right aligned images can be attached to the card\'s edge. If image is aligned to the left or right, it will also exten to cover the whole space'),
					'values' => array(
						1 => \Joomla\CMS\Language\Text::_('JYES'),
						0 => \Joomla\CMS\Language\Text::_('JNO'),
					),
					'std' => 0,
					'depends' => array(array('card_styles', '!=', '')),
				),
				'card_content_padding' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Padding'),
					'desc' => \Joomla\CMS\Language\Text::_('Add padding to the content if the image is top, bottom, left or right aligned.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'default' => \Joomla\CMS\Language\Text::_('Default'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
					),
					'std' => '',
					'depends' => array(array('card_styles', '=', '')),
				),

				'separator_person_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Image'),
				),
				'image_styles' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Image Style'),
					'desc' => \Joomla\CMS\Language\Text::_('To modify the border radius of an element, like an image.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'rounded' => \Joomla\CMS\Language\Text::_('Rounded'),
						'circle' => \Joomla\CMS\Language\Text::_('Circle'),
						'pill' => \Joomla\CMS\Language\Text::_('Pill'),
					),
					'std' => '',
					'depends' => array(
						array('image_padding', '!=', 1)
					),
				),
				'image_transition' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Image Transition'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the image\'s transition style.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'scale-up' => \Joomla\CMS\Language\Text::_('Scales Up'),
						'scale-down' => \Joomla\CMS\Language\Text::_('Scales Down'),
					),
					'std' => '',
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
				'media_background' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Background Color'),
					'desc' => \Joomla\CMS\Language\Text::_('Use the background color in combination with blend modes.'),
					'depends' => array(
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
					'depends' => array(
						array('image_panel', '=', 1),
						array('media_background', '!=', '')
					),
				),
				'media_overlay' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Overlay Color'),
					'desc' => \Joomla\CMS\Language\Text::_('Set an additional transparent overlay to soften the image.'),
					'depends' => array(
						array('image_panel', '=', 1)
					),
				),
				'box_shadow' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Box Shadow'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the card\'s box shadow size.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
						'xlarge' => \Joomla\CMS\Language\Text::_('X-Large'),
					),
					'std' => '',
					'depends' => array(
						array('card_styles', '=', '')
					),
				),
				'hover_box_shadow' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Hover Box Shadow'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the card\'s box shadow size on hover.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
						'xlarge' => \Joomla\CMS\Language\Text::_('X-Large'),
					),
					'std' => '',
					'depends' => array(
						array('card_styles', '=', '')
					),
				),
				'separator_title_style_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Name'),
				),
				'heading_font_family' => array(
					'type' => 'fonts',
					'title' => \Joomla\CMS\Language\Text::_('Font Family'),
					'selector' => array(
						'type' => 'font',
						'font' => '{{ VALUE }}',
						'css' => '.ui-title { font-family: {{ VALUE }}; }',
					),
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
					'std' => 'h3',
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
				'name_color' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Predefined Color'),
					'desc' => \Joomla\CMS\Language\Text::_('Select the predefined name text color. If the background option is selected, you can use Light or Dark color text mode to inverse the text style.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'text-muted' => \Joomla\CMS\Language\Text::_('Muted'),
						'text-emphasis' => \Joomla\CMS\Language\Text::_('Emphasis'),
						'text-primary' => \Joomla\CMS\Language\Text::_('Primary'),
						'text-secondary' => \Joomla\CMS\Language\Text::_('Secondary'),
						'text-success' => \Joomla\CMS\Language\Text::_('Success'),
						'text-warning' => \Joomla\CMS\Language\Text::_('Warning'),
						'text-danger' => \Joomla\CMS\Language\Text::_('Danger'),
						'light' => \Joomla\CMS\Language\Text::_('Light'),
						'dark' => \Joomla\CMS\Language\Text::_('Dark'),
					),
					'std' => '',
					'depends' => array(array('name', '!=', '')),
				),
				'custom_title_color' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Custom Color'),
					'depends' => array(
						array('name_color', '=', ''),
						array('name', '!=', '')
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
					'std' => '',
				),
				'separator_meta_style_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Designation'),
				),
				'meta_font_family' => array(
					'type' => 'fonts',
					'title' => \Joomla\CMS\Language\Text::_('Font Family'),
					'selector' => array(
						'type' => 'font',
						'font' => '{{ VALUE }}',
						'css' => '.ui-meta { font-family: {{ VALUE }}; }',
					)
				),
				'meta_style' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Style'),
					'desc' => \Joomla\CMS\Language\Text::_('Select a predefined meta text style, including color, size and font-family'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'text-meta' => \Joomla\CMS\Language\Text::_('Meta'),
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
				'meta_font_weight' => array(
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
				'meta_text_transform' => array(
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
				'designation_style' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Predefined Color'),
					'desc' => \Joomla\CMS\Language\Text::_('Predefined text style for designation.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'muted' => \Joomla\CMS\Language\Text::_('Muted'),
						'emphasis' => \Joomla\CMS\Language\Text::_('Emphasis'),
						'primary' => \Joomla\CMS\Language\Text::_('Primary'),
						'secondary' => \Joomla\CMS\Language\Text::_('Secondary'),
						'success' => \Joomla\CMS\Language\Text::_('Success'),
						'warning' => \Joomla\CMS\Language\Text::_('Warning'),
						'danger' => \Joomla\CMS\Language\Text::_('Danger'),
						'light' => \Joomla\CMS\Language\Text::_('Light'),
						'dark' => \Joomla\CMS\Language\Text::_('Dark'),
					),
					'std' => '',
				),
				'meta_color' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Color'),
					'std' => '#999999',
					'depends' => array(
						array('designation_style', '=', '')
					),
				),
				'meta_alignment' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Alignment'),
					'desc' => \Joomla\CMS\Language\Text::_('Align the meta text above or below the title.'),
					'values' => array(
						'top' => \Joomla\CMS\Language\Text::_('Above Title'),
						'' => \Joomla\CMS\Language\Text::_('Below Title'),
						'content' => \Joomla\CMS\Language\Text::_('Below Content'),
					),
					'std' => '',
				),
				'meta_element' => array(
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
					'std' => 'div',
				),
				'meta_margin_top' => array(
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

				'separator_email_style_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Email'),
				),
				'email_font_family' => array(
					'type' => 'fonts',
					'title' => \Joomla\CMS\Language\Text::_('Font Family'),
					'selector' => array(
						'type' => 'font',
						'font' => '{{ VALUE }}',
						'css' => '.ui-email { font-family: {{ VALUE }}; }',
					)
				),
				'email_style' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Predefined Color'),
					'desc' => \Joomla\CMS\Language\Text::_('Add predefined text color to email elements.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'muted' => \Joomla\CMS\Language\Text::_('Muted'),
						'emphasis' => \Joomla\CMS\Language\Text::_('Emphasis'),
						'primary' => \Joomla\CMS\Language\Text::_('Primary'),
						'secondary' => \Joomla\CMS\Language\Text::_('Secondary'),
						'success' => \Joomla\CMS\Language\Text::_('Success'),
						'warning' => \Joomla\CMS\Language\Text::_('Warning'),
						'danger' => \Joomla\CMS\Language\Text::_('Danger'),
						'light' => \Joomla\CMS\Language\Text::_('Light'),
						'dark' => \Joomla\CMS\Language\Text::_('Dark'),
					),
					'std' => 'muted',
					'depends' => array(array('email', '!=', '')),
				),
				'email_color' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Color'),
					'std' => '#999999',
					'depends' => array(
						array('email_style', '=', '')
					),
				),
				'email_class' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Style'),
					'desc' => \Joomla\CMS\Language\Text::_('Select a predefined text style, including color, size and font-family'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'text-meta' => \Joomla\CMS\Language\Text::_('Meta'),
						'h4' => \Joomla\CMS\Language\Text::_('H4'),
						'h5' => \Joomla\CMS\Language\Text::_('H5'),
						'h6' => \Joomla\CMS\Language\Text::_('H6'),
					),
					'std' => 'h6',
				),
				'email_text_transform' => array(
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
				'email_margin_top' => array(
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
				'content_font_family' => array(
					'type' => 'fonts',
					'title' => \Joomla\CMS\Language\Text::_('Font Family'),
					'selector' => array(
						'type' => 'font',
						'font' => '{{ VALUE }}',
						'css' => '.ui-content { font-family: {{ VALUE }}; }',
					)
				),
				'content_style' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Style'),
					'desc' => \Joomla\CMS\Language\Text::_('Select a predefined meta text style, including color, size and font-family'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'text-lead' => \Joomla\CMS\Language\Text::_('Lead'),
					),
					'std' => '',
				),
				'content_color' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Color'),
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
				'separator_social_style_options' => array(
					'type' => 'separator',
					'title' => \Joomla\CMS\Language\Text::_('Social'),
					'depends' => array(
						array('use_social', '=', 1)
					)
				),
				'icons_button' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Display icons as buttons'),
					'values' => array(
						1 => \Joomla\CMS\Language\Text::_('JYES'),
						0 => \Joomla\CMS\Language\Text::_('JNO'),
					),
					'std' => 1,
					'depends' => array(
						array('use_social', '=', 1)
					)
				),
				'icon_background' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Background Color'),
					'depends' => array(
						array('use_social', '=', 1),
						array('icons_button', '=', 1)
					)
				),				
				'icon_color' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Color'),
					'depends' => array(
						array('use_social', '=', 1)
					)
				),				
				'social_position' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Position'),
					'desc' => \Joomla\CMS\Language\Text::_('Place social links before, after description text or overlay (place content on top of an image).'),
					'values' => array(
						'before' => \Joomla\CMS\Language\Text::_('Before'),
						'after' => \Joomla\CMS\Language\Text::_('After'),
						'overlay' => \Joomla\CMS\Language\Text::_('Overlay'),
					),
					'std' => 'after',
					'depends' => array(
						array('use_social', '=', 1)
					)
				),
				'social_margin_top' => array(
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
						array('social_position', '!=', 'overlay'),
						array('use_social', '=', 1)
					),
				),
				'overlay_on_hover' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Display overlay on hover'),
					'values' => array(
						1 => \Joomla\CMS\Language\Text::_('JYES'),
						0 => \Joomla\CMS\Language\Text::_('JNO'),
					),
					'std' => 1,
					'depends' => array(
						array('social_position', '=', 'overlay'),
						array('use_social', '=', 1)
					)
				),
				'vertical_icons' => array(
					'type' => 'checkbox',
					'title' => \Joomla\CMS\Language\Text::_('Vertical Social Icons'),
					'values' => array(
						1 => \Joomla\CMS\Language\Text::_('JYES'),
						0 => \Joomla\CMS\Language\Text::_('JNO'),
					),
					'std' => 0,
					'depends' => array(
						array('social_position', '=', 'overlay'),
						array('use_social', '=', 1)
					)
				),
				'overlay_styles' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Style'),
					'desc' => \Joomla\CMS\Language\Text::_('Select a style for the overlay.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'overlay-default' => \Joomla\CMS\Language\Text::_('Overlay Default'),
						'overlay-primary' => \Joomla\CMS\Language\Text::_('Overlay Primary'),
						'tile-default' => \Joomla\CMS\Language\Text::_('Tile Default'),
						'tile-muted' => \Joomla\CMS\Language\Text::_('Tile Muted'),
						'tile-primary' => \Joomla\CMS\Language\Text::_('Tile Primary'),
						'tile-secondary' => \Joomla\CMS\Language\Text::_('Tile Secondary'),
						'overlay-custom' => \Joomla\CMS\Language\Text::_('Custom'),
					),
					'std' => 'overlay-primary',
					'depends' => array(
						array('social_position', '=', 'overlay'),
						array('use_social', '=', 1)
					)
				),
				'overlay_background' => array(
					'type' => 'color',
					'title' => \Joomla\CMS\Language\Text::_('Background Color'),
					'std' => '#ffd49b',
					'depends' => array(
						array('social_position', '=', 'overlay'),
						array('overlay_styles', '=', 'overlay-custom'),
						array('use_social', '=', 1)
					), 
				),
				'overlay_padding' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Padding'),
					'desc' => \Joomla\CMS\Language\Text::_('Set the padding between the overlay and its content.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('Default'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
						'remove' => \Joomla\CMS\Language\Text::_('None'),
					),
					'std' => '',
					'depends' => array(
						array('social_position', '=', 'overlay'),
						array('use_social', '=', 1)
					)
				),
				'overlay_positions' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Overlay Positions'),
					'desc' => \Joomla\CMS\Language\Text::_('A collection of utility classes to position content.'),
					'values' => array(
						'top' => \Joomla\CMS\Language\Text::_('Top'),
						'bottom' => \Joomla\CMS\Language\Text::_('Bottom'),
						'left' => \Joomla\CMS\Language\Text::_('Left'),
						'right' => \Joomla\CMS\Language\Text::_('Right'),
						'top-left' => \Joomla\CMS\Language\Text::_('Top Left'),
						'top-center' => \Joomla\CMS\Language\Text::_('Top Center'),
						'top-right' => \Joomla\CMS\Language\Text::_('Top Right'),
						'bottom-left' => \Joomla\CMS\Language\Text::_('Bottom Left'),
						'bottom-center' => \Joomla\CMS\Language\Text::_('Bottom Center'),
						'bottom-right' => \Joomla\CMS\Language\Text::_('Bottom Right'),
						'center' => \Joomla\CMS\Language\Text::_('Center'),
						'center-left' => \Joomla\CMS\Language\Text::_('Center Left'),
						'center-right' => \Joomla\CMS\Language\Text::_('Center Right'),
					),
					'std' => 'center',
					'depends' => array(
						array('social_position', '=', 'overlay'),
						array('use_social', '=', 1)
					)
				),
				'overlay_margin' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Margin'),
					'desc' => \Joomla\CMS\Language\Text::_('Apply a margin between the overlay and the image container.'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'small' => \Joomla\CMS\Language\Text::_('Small'),
						'medium' => \Joomla\CMS\Language\Text::_('Medium'),
						'large' => \Joomla\CMS\Language\Text::_('Large'),
					),
					'std' => '',
					'depends' => array(
						array('social_position', '=', 'overlay'),
						array('use_social', '=', 1)
					)
				),
				'overlay_alignment' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Alignment'),
					'values' => array(
						'' => \Joomla\CMS\Language\Text::_('None'),
						'left' => \Joomla\CMS\Language\Text::_('Left'),
						'center' => \Joomla\CMS\Language\Text::_('Center'),
						'right' => \Joomla\CMS\Language\Text::_('Right'),
					),
					'std' => 'center',
					'depends' => array(
						array('social_position', '=', 'overlay'),
						array('use_social', '=', 1)
					)
				),
				'overlay_transition' => array(
					'type' => 'select',
					'title' => \Joomla\CMS\Language\Text::_('Overlay Transition'),
					'desc' => \Joomla\CMS\Language\Text::_('Select a hover transition for the overlay.'),
					'values' => array(
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
					),
					'std' => 'fade',
					'depends' => array(
						array('use_social', '=', 1),
						array('social_position', '=', 'overlay'),
						array('overlay_on_hover', '=', 1)
					)
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
					'title' => \Joomla\CMS\Language\Text::_('Customizing Parallax'),
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
