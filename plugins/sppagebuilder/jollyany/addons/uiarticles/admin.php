<?php
/**
 * @package Jollyany
 * @author TemPlaza http://www.templaza.com
 * @copyright Copyright (c) 2010 - 2022 Jollyany
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

SpAddonsConfig::addonConfig(
array(
	'type'=>'content',
	'addon_name'=>'uiarticles',
	'title'=>\Joomla\CMS\Language\Text::_('UI Articles'),
	'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_DESC'),
    'icon'=>\Joomla\CMS\Uri\Uri::root() . 'plugins/sppagebuilder/jollyany/addons/uiarticles/assets/images/icon.png',
    'category' => 'Jollyany',
	'attr'=>array(
		'general' => array(
			'admin_label'=>array(
				'type'=>'text',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
				'std'=> ''
			),

			'separator_options'=>array(
				'type'=>'separator',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_ADDON_OPTIONS')
			),

			'resource'=>array(
				'type'=>'select',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLE_RESOURCE'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLE_RESOURCE_DESC'),
				'values'=>array(
					'article'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLE_RESOURCE_ARTICLE'),
					'k2'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLE_RESOURCE_K2'),
					),
				'std'=>'article',
			),

			'catid'=>array(
				'type'=>'category',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_CATID'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_CATID_DESC'),
				'depends'=>array('resource'=>'article'),
				'multiple'=>true,
			),

			'tagids'=>array(
				'type'=>'select',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_TAGS'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_TAGS_DESC'),
				'depends'=>array('resource'=>'article'),
				'values'=> SpPgaeBuilderBase::getArticleTags(),
				'multiple'=>true,
			),

			'k2catid'=>array(
				'type'=>'select',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_K2_CATID'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_K2_CATID_DESC'),
				'depends'=>array('resource'=>'k2'),
				'values'=> SpPgaeBuilderBase::k2CatList(),
				'multiple'=>true,
			),

			'post_type'=>array(
				'type'=>'select',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_POST_TYPE'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_POST_TYPE_DESC'),
				'values'=>array(
					''	=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_POST_TYPE_ALL'),
					'standard'	=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_POST_TYPE_STANDARD'),
					'audio'		=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_POST_TYPE_AUDIO'),
					'video'		=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_POST_TYPE_VIDEO'),
					'gallery'	=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_POST_TYPE_GALLERY'),
					'link'		=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_POST_TYPE_LINK'),
					'quote'		=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_POST_TYPE_QUOTE'),
					'status'	=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_POST_TYPE_STATUS'),
				),
				'std'=>'',
				'depends'=>array('resource'=>'article')
			),

			'include_subcat'=>array(
				'type'=>'select',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_INCLUDE_SUBCATEGORIES'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_INCLUDE_SUBCATEGORIES_DESC'),
				'values'=>array(
					1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
					0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
				),
				'std'=> 1,
			),

			'ordering'=>array(
				'type'=>'select',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ORDERING'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ORDERING_DESC'),
				'values'=>array(
					'latest'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ORDERING_LATEST'),
					'oldest'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ORDERING_OLDEST'),
					'hits'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ORDERING_POPULAR'),
					'featured'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ORDERING_FEATURED'),
					'alphabet_asc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ORDERING_ALPHABET_ASC'),
					'alphabet_desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ORDERING_ALPHABET_DESC'),
					'random'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ORDERING_RANDOM'),
				),
				'std'=>'latest',
			),

            'lead_limit'=>array(
                'type'=>'number',
                'title'=>\Joomla\CMS\Language\Text::_('JOLLYANY_ADDON_ARTICLES_LEAD_LIMIT'),
                'desc'=>\Joomla\CMS\Language\Text::_('JOLLYANY_ADDON_ARTICLES_LEAD_LIMIT_DESC'),
                'std'=>'1'
            ),

			'limit'=>array(
				'type'=>'number',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_LIMIT'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_LIMIT_DESC'),
				'std'=>'3'
			),

            'lead_position'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Lead Position'),
                'values'=>array(
                    'top'=>\Joomla\CMS\Language\Text::_('Top'),
                    'left'=>\Joomla\CMS\Language\Text::_('Left'),
                    'right'=>\Joomla\CMS\Language\Text::_('Right'),
                    'between'=>\Joomla\CMS\Language\Text::_('Between'),
                ),
                'std'=>'top'
            ),

            'lead_width_xl' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Lead Width Large Desktop' ),
                'type' => 'select',
                'values'       => array(
                    '1-1'    => \Joomla\CMS\Language\Text::_('1-1'),
                    '1-2'    => \Joomla\CMS\Language\Text::_('1-2'),
                    '1-3'    => \Joomla\CMS\Language\Text::_('1-3'),
                    '2-3'    => \Joomla\CMS\Language\Text::_('2-3'),
                    '1-4'    => \Joomla\CMS\Language\Text::_('1-4'),
                    '3-4'    => \Joomla\CMS\Language\Text::_('3-4'),
                    '1-5'    => \Joomla\CMS\Language\Text::_('1-5'),
                    '2-5'    => \Joomla\CMS\Language\Text::_('2-5'),
                    '3-5'    => \Joomla\CMS\Language\Text::_('3-5'),
                    '4-5'    => \Joomla\CMS\Language\Text::_('4-5'),
                    '1-6'    => \Joomla\CMS\Language\Text::_('1-6'),
                    '5-6'    => \Joomla\CMS\Language\Text::_('5-6'),
                ),
                'std'   => '1-2',
                'depends'=>array(
                    array('lead_position', '!=', 'top'),
                )
            ),
            'lead_width_l' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Lead Width Desktop' ),
                'type' => 'select',
                'values'       => array(
                    '1-1'    => \Joomla\CMS\Language\Text::_('1-1'),
                    '1-2'    => \Joomla\CMS\Language\Text::_('1-2'),
                    '1-3'    => \Joomla\CMS\Language\Text::_('1-3'),
                    '2-3'    => \Joomla\CMS\Language\Text::_('2-3'),
                    '1-4'    => \Joomla\CMS\Language\Text::_('1-4'),
                    '3-4'    => \Joomla\CMS\Language\Text::_('3-4'),
                    '1-5'    => \Joomla\CMS\Language\Text::_('1-5'),
                    '2-5'    => \Joomla\CMS\Language\Text::_('2-5'),
                    '3-5'    => \Joomla\CMS\Language\Text::_('3-5'),
                    '4-5'    => \Joomla\CMS\Language\Text::_('4-5'),
                    '1-6'    => \Joomla\CMS\Language\Text::_('1-6'),
                    '5-6'    => \Joomla\CMS\Language\Text::_('5-6'),
                ),
                'std'   => '1-2',
                'depends'=>array(
                    array('lead_position', '!=', 'top'),
                )
            ),
            'lead_width_m' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Lead Width Laptop' ),
                'type' => 'select',
                'values'       => array(
                    '1-1'    => \Joomla\CMS\Language\Text::_('1-1'),
                    '1-2'    => \Joomla\CMS\Language\Text::_('1-2'),
                    '1-3'    => \Joomla\CMS\Language\Text::_('1-3'),
                    '2-3'    => \Joomla\CMS\Language\Text::_('2-3'),
                    '1-4'    => \Joomla\CMS\Language\Text::_('1-4'),
                    '3-4'    => \Joomla\CMS\Language\Text::_('3-4'),
                    '1-5'    => \Joomla\CMS\Language\Text::_('1-5'),
                    '2-5'    => \Joomla\CMS\Language\Text::_('2-5'),
                    '3-5'    => \Joomla\CMS\Language\Text::_('3-5'),
                    '4-5'    => \Joomla\CMS\Language\Text::_('4-5'),
                    '1-6'    => \Joomla\CMS\Language\Text::_('1-6'),
                    '5-6'    => \Joomla\CMS\Language\Text::_('5-6'),
                ),
                'std'   => '1-2',
                'depends'=>array(
                    array('lead_position', '!=', 'top'),
                )
            ),
            'lead_width_s' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Lead Width Tablet' ),
                'type' => 'select',
                'values'       => array(
                    '1-1'    => \Joomla\CMS\Language\Text::_('1-1'),
                    '1-2'    => \Joomla\CMS\Language\Text::_('1-2'),
                    '1-3'    => \Joomla\CMS\Language\Text::_('1-3'),
                    '2-3'    => \Joomla\CMS\Language\Text::_('2-3'),
                    '1-4'    => \Joomla\CMS\Language\Text::_('1-4'),
                    '3-4'    => \Joomla\CMS\Language\Text::_('3-4'),
                    '1-5'    => \Joomla\CMS\Language\Text::_('1-5'),
                    '2-5'    => \Joomla\CMS\Language\Text::_('2-5'),
                    '3-5'    => \Joomla\CMS\Language\Text::_('3-5'),
                    '4-5'    => \Joomla\CMS\Language\Text::_('4-5'),
                    '1-6'    => \Joomla\CMS\Language\Text::_('1-6'),
                    '5-6'    => \Joomla\CMS\Language\Text::_('5-6'),
                ),
                'std'   => '1-2',
                'depends'=>array(
                    array('lead_position', '!=', 'top'),
                )
            ),
            'lead_width' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Lead Width Mobile' ),
                'type' => 'select',
                'values'       => array(
                    '1-1'    => \Joomla\CMS\Language\Text::_('1-1'),
                    '1-2'    => \Joomla\CMS\Language\Text::_('1-2'),
                    '1-3'    => \Joomla\CMS\Language\Text::_('1-3'),
                    '2-3'    => \Joomla\CMS\Language\Text::_('2-3'),
                    '1-4'    => \Joomla\CMS\Language\Text::_('1-4'),
                    '3-4'    => \Joomla\CMS\Language\Text::_('3-4'),
                    '1-5'    => \Joomla\CMS\Language\Text::_('1-5'),
                    '2-5'    => \Joomla\CMS\Language\Text::_('2-5'),
                    '3-5'    => \Joomla\CMS\Language\Text::_('3-5'),
                    '4-5'    => \Joomla\CMS\Language\Text::_('4-5'),
                    '1-6'    => \Joomla\CMS\Language\Text::_('1-6'),
                    '5-6'    => \Joomla\CMS\Language\Text::_('5-6'),
                ),
                'std'   => '1-2',
                'depends'=>array(
                    array('lead_position', '!=', 'top'),
                )
            ),

            'lead_column_gutter' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Lead Column Gutter' ),
                'type' => 'select',
                'values'        => array(
                    ''          => \Joomla\CMS\Language\Text::_('Default'),
                    'small'     => \Joomla\CMS\Language\Text::_('Small'),
                    'medium'    => \Joomla\CMS\Language\Text::_('Medium'),
                    'large'     => \Joomla\CMS\Language\Text::_('Large'),
                    'collapse'  => \Joomla\CMS\Language\Text::_('Collapse'),
                ),
                'std'   => '',
            ),

            'lead_column_divider'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Lead Column Divider'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>0,
            ),

			'link_articles'=>array(
				'type'=>'checkbox',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ALL_ARTICLES_BUTTON'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ALL_ARTICLES_BUTTON_DESC'),
				'values'=>array(
					1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
					0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
				),
				'std'=>0,
			),

			'link_catid'=>array(
				'type'=>'category',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_CATID'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_CATID_DESC'),
				'depends'=> array(
					array('resource', '=', 'article'),
					array('link_articles', '=', '1')
				)
			),

			'link_k2catid'=>array(
				'type'=>'select',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_K2_CATID'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_K2_CATID_DESC'),
				'depends'=> array(
					array('resource', '=', 'k2'),
					array('link_articles', '=', '1')
				),
				'values'=> SpPgaeBuilderBase::k2CatList(),
			),

			'all_articles_btn_text'=>array(
				'type'=>'text',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ALL_ARTICLES_BUTTON_TEXT'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ALL_ARTICLES_BUTTON_TEXT_DESC'),
				'std'=>'See all posts',
				'depends'=>array('link_articles'=>'1')
			),

			'all_articles_btn_font_family'=>array(
				'type'=>'fonts',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_FONT_FAMILY'),
				'depends'=>array('link_articles'=>'1'),
				'selector'=> array(
					'type'=>'font',
					'font'=>'{{ VALUE }}',
					'css'=>'.sppb-btn { font-family: "{{ VALUE }}"; }'
				)
			),

			'all_articles_btn_font_style'=>array(
				'type'=>'fontstyle',
				'title'=> \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_FONT_STYLE'),
				'depends'=>array('link_articles'=>'1')
			),

			'all_articles_btn_letterspace'=>array(
				'type'=>'select',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_LETTER_SPACING'),
				'values'=>array(
					'0'=> 'Default',
					'1px'=> '1px',
					'2px'=> '2px',
					'3px'=> '3px',
					'4px'=> '4px',
					'5px'=> '5px',
					'6px'=>	'6px',
					'7px'=>	'7px',
					'8px'=>	'8px',
					'9px'=>	'9px',
					'10px'=> '10px'
				),
				'std'=>'0',
				'depends'=>array('link_articles'=>'1')
			),

			'all_articles_btn_type'=>array(
				'type'=>'select',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE_DESC'),
				'values'=>array(
					'default'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_DEFAULT'),
					'primary'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_PRIMARY'),
					'secondary'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_SECONDARY'),
					'success'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_SUCCESS'),
					'info'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_INFO'),
					'warning'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_WARNING'),
					'danger'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_DANGER'),
					'dark'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_DARK'),
					'link'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK'),
					'custom'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_CUSTOM'),
				),
				'std'=>'default',
				'depends'=>array('link_articles'=>'1')
			),

			'all_articles_btn_appearance'=>array(
				'type'=>'select',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_DESC'),
				'values'=>array(
					''=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_FLAT'),
					'outline'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_OUTLINE'),
					'3d'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_3D'),
				),
				'std'=>'flat',
				'depends'=>array('link_articles'=>'1')
			),

			'all_articles_btn_background_color'=>array(
				'type'=>'color',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR_DESC'),
				'std' => '#444444',
				'depends'=>array(
					array('link_articles', '=', '1'),
					array('all_articles_btn_type' , '=', 'custom')
				),
			),

			'all_articles_btn_color'=>array(
				'type'=>'color',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR_DESC'),
				'std' => '#fff',
				'depends'=>array(
					array('link_articles', '=', '1'),
					array('all_articles_btn_type' , '=', 'custom')
				),
			),

			'all_articles_btn_background_color_hover'=>array(
				'type'=>'color',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR_HOVER'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR_HOVER_DESC'),
				'std' => '#222',
				'depends'=>array(
					array('link_articles', '=', '1'),
					array('all_articles_btn_type' , '=', 'custom')
				),
			),

			'all_articles_btn_color_hover'=>array(
				'type'=>'color',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR_HOVER'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR_HOVER_DESC'),
				'std' => '#fff',
				'depends'=>array(
					array('link_articles', '=', '1'),
					array('all_articles_btn_type' , '=', 'custom')
				),
			),

			'all_articles_btn_size'=>array(
				'type'=>'select',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_DESC'),
				'values'=>array(
					''=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_DEFAULT'),
					'lg'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_LARGE'),
					'xlg'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_XLARGE'),
					'sm'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_SMALL'),
					'xs'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_EXTRA_SAMLL'),
				),
				'depends'=>array('link_articles'=>'1')
			),

			'all_articles_btn_icon'=>array(
				'type'=>'icon',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON_DESC'),
				'depends'=>array('link_articles'=>'1')
			),

			'all_articles_btn_icon_position'=>array(
				'type'=>'select',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON_POSITION'),
				'values'=>array(
					'left'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_LEFT'),
					'right'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
				),
				'depends'=>array('link_articles'=>'1')
			),

			'all_articles_btn_block'=>array(
				'type'=>'select',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BLOCK'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BLOCK_DESC'),
				'values'=>array(
					''=>\Joomla\CMS\Language\Text::_('JNO'),
					'sppb-btn-block'=>\Joomla\CMS\Language\Text::_('JYES'),
				),
				'depends'=>array('link_articles'=>'1')
			),

			'class'=>array(
				'type'=>'text',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
				'std'=>''
			),

		),

        //Lead article options
        'lead-options' => array(
            'lead_layout'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Choose Layout'),
                'desc'=>\Joomla\CMS\Language\Text::_('Choose layout display'),
                'values'=>array(
                    ''=>\Joomla\CMS\Language\Text::_('Classic'),
                    'thumbnail'=>\Joomla\CMS\Language\Text::_('Thumbnail'),
                ),
                'std'=>'',
            ),

            'lead_overlay_color' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('Overlay Color'),
                'std' => '',
                'depends' => array(array('lead_layout', '=', 'thumbnail'))
            ),

            'lead_color_style'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Color Mode'),
                'values'=>array(
                    ''=>\Joomla\CMS\Language\Text::_('Dark'),
                    'uk-light'=>\Joomla\CMS\Language\Text::_('Light')
                ),
                'std'=>''
            ),
            'lead_hide_thumbnail'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_HIDE_THUMBNAIL'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_HIDE_THUMBNAIL_DESC'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>0,
            ),

            'lead_thumbnail_height'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_THUMBNAIL_HEIGHT'),
                'std'=>'',
                'max'=>1500,
                'responsive'=>true,
                'depends'=>array('lead_hide_thumbnail'=>'0')
            ),

            'lead_image_position'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Image Position'),
                'values'=>array(
                    'top'=>\Joomla\CMS\Language\Text::_('Top'),
                    'left'=>\Joomla\CMS\Language\Text::_('Left'),
                    'right'=>\Joomla\CMS\Language\Text::_('Right'),
                    'bottom'=>\Joomla\CMS\Language\Text::_('Bottom'),
                ),
                'std'=>'top'
            ),

            'lead_image_width_xl' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Image Width Large Desktop' ),
                'type' => 'select',
                'values'       => array(
                    '1-1'    => \Joomla\CMS\Language\Text::_('1-1'),
                    '1-2'    => \Joomla\CMS\Language\Text::_('1-2'),
                    '1-3'    => \Joomla\CMS\Language\Text::_('1-3'),
                    '2-3'    => \Joomla\CMS\Language\Text::_('2-3'),
                    '1-4'    => \Joomla\CMS\Language\Text::_('1-4'),
                    '3-4'    => \Joomla\CMS\Language\Text::_('3-4'),
                    '1-5'    => \Joomla\CMS\Language\Text::_('1-5'),
                    '2-5'    => \Joomla\CMS\Language\Text::_('2-5'),
                    '3-5'    => \Joomla\CMS\Language\Text::_('3-5'),
                    '4-5'    => \Joomla\CMS\Language\Text::_('4-5'),
                    '1-6'    => \Joomla\CMS\Language\Text::_('1-6'),
                    '5-6'    => \Joomla\CMS\Language\Text::_('5-6'),
                ),
                'std'   => '1-2',
                'depends'=>array(
                    array('lead_image_position', '!=', 'top'),
                    array('lead_image_position', '!=', 'bottom'),
                )
            ),
            'lead_image_width_l' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Image Width Desktop' ),
                'type' => 'select',
                'values'       => array(
                    '1-1'    => \Joomla\CMS\Language\Text::_('1-1'),
                    '1-2'    => \Joomla\CMS\Language\Text::_('1-2'),
                    '1-3'    => \Joomla\CMS\Language\Text::_('1-3'),
                    '2-3'    => \Joomla\CMS\Language\Text::_('2-3'),
                    '1-4'    => \Joomla\CMS\Language\Text::_('1-4'),
                    '3-4'    => \Joomla\CMS\Language\Text::_('3-4'),
                    '1-5'    => \Joomla\CMS\Language\Text::_('1-5'),
                    '2-5'    => \Joomla\CMS\Language\Text::_('2-5'),
                    '3-5'    => \Joomla\CMS\Language\Text::_('3-5'),
                    '4-5'    => \Joomla\CMS\Language\Text::_('4-5'),
                    '1-6'    => \Joomla\CMS\Language\Text::_('1-6'),
                    '5-6'    => \Joomla\CMS\Language\Text::_('5-6'),
                ),
                'std'   => '1-2',
                'depends'=>array(
                    array('lead_image_position', '!=', 'top'),
                    array('lead_image_position', '!=', 'bottom'),
                )
            ),
            'lead_image_width_m' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Image Width Laptop' ),
                'type' => 'select',
                'values'       => array(
                    '1-1'    => \Joomla\CMS\Language\Text::_('1-1'),
                    '1-2'    => \Joomla\CMS\Language\Text::_('1-2'),
                    '1-3'    => \Joomla\CMS\Language\Text::_('1-3'),
                    '2-3'    => \Joomla\CMS\Language\Text::_('2-3'),
                    '1-4'    => \Joomla\CMS\Language\Text::_('1-4'),
                    '3-4'    => \Joomla\CMS\Language\Text::_('3-4'),
                    '1-5'    => \Joomla\CMS\Language\Text::_('1-5'),
                    '2-5'    => \Joomla\CMS\Language\Text::_('2-5'),
                    '3-5'    => \Joomla\CMS\Language\Text::_('3-5'),
                    '4-5'    => \Joomla\CMS\Language\Text::_('4-5'),
                    '1-6'    => \Joomla\CMS\Language\Text::_('1-6'),
                    '5-6'    => \Joomla\CMS\Language\Text::_('5-6'),
                ),
                'std'   => '1-2',
                'depends'=>array(
                    array('lead_image_position', '!=', 'top'),
                    array('lead_image_position', '!=', 'bottom'),
                )
            ),
            'lead_image_width_s' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Image Width Tablet' ),
                'type' => 'select',
                'values'       => array(
                    '1-1'    => \Joomla\CMS\Language\Text::_('1-1'),
                    '1-2'    => \Joomla\CMS\Language\Text::_('1-2'),
                    '1-3'    => \Joomla\CMS\Language\Text::_('1-3'),
                    '2-3'    => \Joomla\CMS\Language\Text::_('2-3'),
                    '1-4'    => \Joomla\CMS\Language\Text::_('1-4'),
                    '3-4'    => \Joomla\CMS\Language\Text::_('3-4'),
                    '1-5'    => \Joomla\CMS\Language\Text::_('1-5'),
                    '2-5'    => \Joomla\CMS\Language\Text::_('2-5'),
                    '3-5'    => \Joomla\CMS\Language\Text::_('3-5'),
                    '4-5'    => \Joomla\CMS\Language\Text::_('4-5'),
                    '1-6'    => \Joomla\CMS\Language\Text::_('1-6'),
                    '5-6'    => \Joomla\CMS\Language\Text::_('5-6'),
                ),
                'std'   => '1-2',
                'depends'=>array(
                    array('lead_image_position', '!=', 'top'),
                    array('lead_image_position', '!=', 'bottom'),
                )
            ),
            'lead_image_width' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Image Width Mobile' ),
                'type' => 'select',
                'values'       => array(
                    '1-1'    => \Joomla\CMS\Language\Text::_('1-1'),
                    '1-2'    => \Joomla\CMS\Language\Text::_('1-2'),
                    '1-3'    => \Joomla\CMS\Language\Text::_('1-3'),
                    '2-3'    => \Joomla\CMS\Language\Text::_('2-3'),
                    '1-4'    => \Joomla\CMS\Language\Text::_('1-4'),
                    '3-4'    => \Joomla\CMS\Language\Text::_('3-4'),
                    '1-5'    => \Joomla\CMS\Language\Text::_('1-5'),
                    '2-5'    => \Joomla\CMS\Language\Text::_('2-5'),
                    '3-5'    => \Joomla\CMS\Language\Text::_('3-5'),
                    '4-5'    => \Joomla\CMS\Language\Text::_('4-5'),
                    '1-6'    => \Joomla\CMS\Language\Text::_('1-6'),
                    '5-6'    => \Joomla\CMS\Language\Text::_('5-6'),
                ),
                'std'   => '1-2',
                'depends'=>array(
                    array('lead_image_position', '!=', 'top'),
                    array('lead_image_position', '!=', 'bottom'),
                )
            ),

            'lead_responsive_separator_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('COLUMN OPTIONS')
            ),

            'lead_column_xl' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Large Desktop Columns' ),
                'type' => 'select',
                'values'       => array(
                    '1'    => \Joomla\CMS\Language\Text::_('1 Column'),
                    '2'    => \Joomla\CMS\Language\Text::_('2 Columns'),
                    '3'    => \Joomla\CMS\Language\Text::_('3 Columns'),
                    '4'    => \Joomla\CMS\Language\Text::_('4 Columns'),
                    '5'    => \Joomla\CMS\Language\Text::_('5 Columns'),
                    '6'    => \Joomla\CMS\Language\Text::_('6 Columns'),
                ),
                'std'   => '4',
            ),

            'lead_column_l' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Desktop Columns' ),
                'type' => 'select',
                'values'       => array(
                    '1'    => \Joomla\CMS\Language\Text::_('1 Column'),
                    '2'    => \Joomla\CMS\Language\Text::_('2 Columns'),
                    '3'    => \Joomla\CMS\Language\Text::_('3 Columns'),
                    '4'    => \Joomla\CMS\Language\Text::_('4 Columns'),
                    '5'    => \Joomla\CMS\Language\Text::_('5 Columns'),
                    '6'    => \Joomla\CMS\Language\Text::_('6 Columns'),
                ),
                'std'   => '4',
            ),

            'lead_column_m' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Laptop Columns' ),
                'type' => 'select',
                'values'       => array(
                    '1'    => \Joomla\CMS\Language\Text::_('1 Column'),
                    '2'    => \Joomla\CMS\Language\Text::_('2 Columns'),
                    '3'    => \Joomla\CMS\Language\Text::_('3 Columns'),
                    '4'    => \Joomla\CMS\Language\Text::_('4 Columns'),
                    '5'    => \Joomla\CMS\Language\Text::_('5 Columns'),
                    '6'    => \Joomla\CMS\Language\Text::_('6 Columns'),
                ),
                'std'   => '3',
            ),

            'lead_column_s' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Tablet Columns' ),
                'type' => 'select',
                'values'       => array(
                    '1'    => \Joomla\CMS\Language\Text::_('1 Column'),
                    '2'    => \Joomla\CMS\Language\Text::_('2 Columns'),
                    '3'    => \Joomla\CMS\Language\Text::_('3 Columns'),
                    '4'    => \Joomla\CMS\Language\Text::_('4 Columns'),
                    '5'    => \Joomla\CMS\Language\Text::_('5 Columns'),
                    '6'    => \Joomla\CMS\Language\Text::_('6 Columns'),
                ),
                'std'   => '2',
            ),

            'lead_column_xs' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Mobile Columns' ),
                'type' => 'select',
                'values'       => array(
                    '1'    => \Joomla\CMS\Language\Text::_('1 Column'),
                    '2'    => \Joomla\CMS\Language\Text::_('2 Columns'),
                    '3'    => \Joomla\CMS\Language\Text::_('3 Columns'),
                    '4'    => \Joomla\CMS\Language\Text::_('4 Columns'),
                    '5'    => \Joomla\CMS\Language\Text::_('5 Columns'),
                    '6'    => \Joomla\CMS\Language\Text::_('6 Columns'),
                ),
                'std'   => '1',
            ),

            'lead_card_separator_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('CARD OPTIONS')
            ),

            'lead_card_style'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Card Size'),
                'values'=>array(
                    ''=>\Joomla\CMS\Language\Text::_('None'),
                    'default'=>\Joomla\CMS\Language\Text::_('Default'),
                    'primary'=>\Joomla\CMS\Language\Text::_('Primary'),
                    'secondary'=>\Joomla\CMS\Language\Text::_('Secondary'),
                ),
                'std'=>''
            ),

            'lead_card_size'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Card Size'),
                'values'=>array(
                    'none'=>\Joomla\CMS\Language\Text::_('None'),
                    ''=>\Joomla\CMS\Language\Text::_('Default'),
                    'small'=>\Joomla\CMS\Language\Text::_('Small'),
                    'large'=>\Joomla\CMS\Language\Text::_('Large'),
                ),
                'std'=>''
            ),

            'lead_card_border_radius' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('Card Border Radius'),
                'values' => array(
                    '' => \Joomla\CMS\Language\Text::_('Default'),
                    'rounded' => \Joomla\CMS\Language\Text::_('Rounded'),
                    'circle' => \Joomla\CMS\Language\Text::_('Circle'),
                    'pill' => \Joomla\CMS\Language\Text::_('Pill'),
                ),
                'std' => '',
            ),

            'lead_card_gutter'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Card Gutter'),
                'values'=>array(
                    ''=>\Joomla\CMS\Language\Text::_('Default'),
                    'small'=>\Joomla\CMS\Language\Text::_('Small'),
                    'medium'=>\Joomla\CMS\Language\Text::_('Medium'),
                    'large'=>\Joomla\CMS\Language\Text::_('Large'),
                    'collapse'=>\Joomla\CMS\Language\Text::_('Collapse'),
                ),
                'std'=>''
            ),

            'lead_card_divider'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Lead Card Divider'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>0,
            ),

            'lead_separator_title_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_ADDON_TITLE_OPTIONS')
            ),

            'lead_heading_selector'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DESC'),
                'values'=>array(
                    'h1'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H1'),
                    'h2'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H2'),
                    'h3'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H3'),
                    'h4'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H4'),
                    'h5'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H5'),
                    'h6'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H6'),
                ),
                'std'=>'h3',
            ),

            'lead_title_font_family'=>array(
                'type'=>'fonts',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_FAMILY'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_FAMILY_DESC'),

                'selector'=> array(
                    'type'=>'font',
                    'font'=>'{{ VALUE }}',
                    'css'=>'.uk-title { font-family: "{{ VALUE }}"; }'
                )
            ),

            'lead_title_fontsize'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_SIZE'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_SIZE_DESC'),
                'std'=>'',

                'responsive' => true,
                'max'=> 400,
            ),

            'lead_title_lineheight'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_LINE_HEIGHT'),
                'std'=>'',

                'responsive' => true,
                'max'=> 400,
            ),

            'lead_title_font_style'=>array(
                'type'=>'fontstyle',
                'title'=> \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_STYLE'),

            ),

            'lead_title_letterspace'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_LETTER_SPACING'),
                'values'=>array(
                    '-10px'=> '-10px',
                    '-9px'=> '-9px',
                    '-8px'=> '-8px',
                    '-7px'=> '-7px',
                    '-6px'=> '-6px',
                    '-5px'=> '-5px',
                    '-4px'=> '-4px',
                    '-3px'=> '-3px',
                    '-2px'=> '-2px',
                    '-1px'=> '-1px',
                    '0px'=> 'Default',
                    '1px'=> '1px',
                    '2px'=> '2px',
                    '3px'=> '3px',
                    '4px'=> '4px',
                    '5px'=> '5px',
                    '6px'=>	'6px',
                    '7px'=>	'7px',
                    '8px'=>	'8px',
                    '9px'=>	'9px',
                    '10px'=> '10px'
                ),
                'std'=>'0',
            ),

            'lead_title_text_color'=>array(
                'type'=>'color',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR_DESC'),

            ),

            'lead_title_margin_top'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_TOP'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_TOP_DESC'),
                'placeholder'=>'10',

                'responsive' => true,
                'max'=> 400,
            ),

            'lead_title_margin_bottom'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_BOTTOM'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_BOTTOM_DESC'),
                'placeholder'=>'10',

                'responsive' => true,
                'max'=> 400,
            ),

            'lead_separator_content_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_ADDON_CONTENT_OPTIONS')
            ),

            'lead_text_font_family'=>array(
                'type'=>'fonts',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_FONT_FAMILY'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_FONT_FAMILY_DESC'),
                'selector'=> array(
                    'type'=>'font',
                    'font'=>'{{ VALUE }}',
                    'css'=>'.sppb-article-introtext { font-family: "{{ VALUE }}"; }'
                )
            ),

            'lead_text_fontsize'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_FONT_SIZE'),
                'std'=>'',
                'max'=>400,
                'responsive'=>true
            ),

            'lead_text_lineheight'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_LINE_HEIGHT'),
                'std'=>'',
                'max'=>400,
                'responsive'=>true
            ),

            'lead_text_fontweight'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_FONTWEIGHT'),
                'values'=>array(
                    100=>100,
                    200=>200,
                    300=>300,
                    400=>400,
                    500=>500,
                    600=>600,
                    700=>700,
                    800=>800,
                    900=>900,
                ),
                'std'=>'',
            ),

            'lead_separator_meta_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_ADDON_META_OPTIONS')
            ),

            'lead_meta_font_family'=>array(
                'type'=>'fonts',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_FONT_FAMILY'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_FONT_FAMILY_DESC'),
                'selector'=> array(
                    'type'=>'font',
                    'font'=>'{{ VALUE }}',
                    'css'=>'.sppb-article-meta { font-family: "{{ VALUE }}"; }'
                )
            ),

            'lead_meta_fontsize'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_FONT_SIZE'),
                'std'=>'',
                'max'=>400,
                'responsive'=>true
            ),

            'lead_meta_font_style'=>array(
                'type'=>'fontstyle',
                'title'=> \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_STYLE'),
            ),

            'lead_meta_lineheight'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_LINE_HEIGHT'),
                'std'=>'',
                'max'=>400,
                'responsive'=>true
            ),

            'lead_meta_fontweight'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_FONTWEIGHT'),
                'values'=>array(
                    100=>100,
                    200=>200,
                    300=>300,
                    400=>400,
                    500=>500,
                    600=>600,
                    700=>700,
                    800=>800,
                    900=>900,
                ),
                'std'=>'',
            ),

            'lead_content_separator_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('CONTENT OPTIONS')
            ),

            'lead_show_intro'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_INTRO'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_INTRO_DESC'),
                'std'=>1,
            ),

            'lead_intro_limit'=>array(
                'type'=>'number',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_INTRO_LIMIT'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_INTRO_LIMIT_DESC'),
                'std'=>'200',
                'depends'=>array('lead_show_intro'=>'1')
            ),

            'lead_show_author'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_AUTHOR'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_AUTHOR_DESC'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
            ),

            'lead_show_category'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_CATEGORY'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_CATEGORY_DESC'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
            ),

            'lead_show_date'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_DATE'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_DATE_DESC'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
            ),

            'lead_slider_separator_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('SLIDER OPTIONS')
            ),

            'lead_use_slider'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Display Articles as Slider'),
                'desc'=>\Joomla\CMS\Language\Text::_('Display Articles as Carousel Slider'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>0,
            ),

            'lead_enable_slider_autoplay'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Auto Play'),
                'desc'=>\Joomla\CMS\Language\Text::_('Enable Auto Play'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
                'depends'=>array('lead_use_slider'=>'1')
            ),

            'lead_slider_autoplay_interval'=>array(
                'type'=>'number',
                'title'=>\Joomla\CMS\Language\Text::_('Auto Play Interval'),
                'desc'=>\Joomla\CMS\Language\Text::_('The delay between switching slides in autoplay mode.'),
                'std'=>'7000',
                'depends'=>array('lead_enable_slider_autoplay'=>'1')
            ),

            'lead_enable_navigation'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Navigation'),
                'desc'=>\Joomla\CMS\Language\Text::_('Enable Navigation'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
                'depends'=>array('lead_use_slider'=>'1')
            ),

            'lead_navigation_position'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Navigation Position'),
                'values'=>array(
                    ''=>\Joomla\CMS\Language\Text::_('Outside'),
                    'inside'=>\Joomla\CMS\Language\Text::_('Inside')
                ),
                'std'=>'',
                'depends'=>array(
                    array('lead_use_slider', '=', '1'),
                    array('lead_enable_navigation' , '=', '1')
                )
            ),

            'lead_enable_dotnav'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Dot Navigation'),
                'desc'=>\Joomla\CMS\Language\Text::_('Enable Dot Navigation'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
                'depends'=>array('lead_use_slider'=>'1')
            ),

            'lead_dotnav_margin'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Dot Navigation Margin'),
                'values'=>array(
                    'uk-margin-small-top' => \Joomla\CMS\Language\Text::_('Small'),
                    'uk-margin-top' => \Joomla\CMS\Language\Text::_('Default'),
                    'uk-margin-medium-top' => \Joomla\CMS\Language\Text::_('Medium'),
                ),
                'std' => 'uk-margin-top',
                'depends'=>array(
                    array('lead_use_slider', '=', '1'),
                    array('lead_enable_dotnav' , '=', '1')
                )
            ),

            'lead_center_slider'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Center Slider'),
                'desc'=>\Joomla\CMS\Language\Text::_('To center the list items'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>0,
                'depends'=>array('lead_use_slider'=>'1')
            ),

            'lead_event_separator_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('EVENT OPTIONS')
            ),

            'lead_show_event'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Show Event'),
                'desc'=>\Joomla\CMS\Language\Text::_('Whether to show article event.'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>0,
            ),

            'lead_show_event_date'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Show Event Date'),
                'desc'=>\Joomla\CMS\Language\Text::_('Whether to show date of event.'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
                'depends'=>array('lead_show_event'=>'1')
            ),

            'lead_show_event_duration'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Show Event Duration'),
                'desc'=>\Joomla\CMS\Language\Text::_('Whether to show duration of event.'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
                'depends'=>array('lead_show_event'=>'1')
            ),

            'lead_show_event_location'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Show Event Location'),
                'desc'=>\Joomla\CMS\Language\Text::_('Whether to show location of event.'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
                'depends'=>array('lead_show_event'=>'1')
            ),

            'lead_show_event_spot'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Show Event Spot'),
                'desc'=>\Joomla\CMS\Language\Text::_('Whether to show spot of event.'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
                'depends'=>array('lead_show_event'=>'1')
            ),

            'lead_show_event_phone'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Show Event Phone'),
                'desc'=>\Joomla\CMS\Language\Text::_('Whether to show phone of event.'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>0,
                'depends'=>array('lead_show_event'=>'1')
            ),

            'lead_course_separator_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('COURSE OPTIONS')
            ),

            'lead_show_course'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Course Event'),
                'desc'=>\Joomla\CMS\Language\Text::_('Whether to show article course.'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>0,
            ),

            'lead_show_course_lecture_count'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Show Lecture Count'),
                'desc'=>\Joomla\CMS\Language\Text::_('Whether to show total of lecture.'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
                'depends'=>array('lead_show_course'=>'1')
            ),

            // Button
            'lead_btn_separator'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_BUTTON_READMORE_OPTIONS')
            ),

            'lead_show_readmore'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_READMORE'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_READMORE_DESC'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
            ),

            'lead_button_text' => array(
                'type' => 'text',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_TEXT'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_TEXT_DESC'),
                'std' => 'Read more',
                'depends'=>array('lead_show_readmore'=>'1')
            ),
            'lead_button_font_family' => array(
                'type' => 'fonts',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_FONT_FAMILY'),
                'selector' => array(
                    'type' => 'font',
                    'font' => '{{ VALUE }}',
                    'css' => '.sppb-readmore { font-family: "{{ VALUE }}"; }'
                ),
                'depends'=>array('lead_show_readmore'=>'1')
            ),
            'lead_button_font_style' => array(
                'type' => 'fontstyle',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_FONT_STYLE'),
                'depends'=>array('lead_show_readmore'=>'1')
            ),
            'lead_button_letterspace' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_LETTER_SPACING'),
                'values' => array(
                    '0' => 'Default',
                    '1px' => '1px',
                    '2px' => '2px',
                    '3px' => '3px',
                    '4px' => '4px',
                    '5px' => '5px',
                    '6px' => '6px',
                    '7px' => '7px',
                    '8px' => '8px',
                    '9px' => '9px',
                    '10px' => '10px'
                ),
                'std' => '0',
                'depends'=>array('lead_show_readmore'=>'1')
            ),
            'lead_button_type' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE_DESC'),
                'values' => array(
                    'default' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_DEFAULT'),
                    'primary' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_PRIMARY'),
                    'secondary' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_SECONDARY'),
                    'success' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_SUCCESS'),
                    'info' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_INFO'),
                    'warning' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_WARNING'),
                    'danger' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_DANGER'),
                    'dark' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_DARK'),
                    'link' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK'),
                    'custom' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_CUSTOM'),
                ),
                'std' => 'success',
                'depends'=>array('lead_show_readmore'=>'1')
            ),
            'lead_fontsize' => array(
                'type' => 'slider',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_FONT_SIZE'),
                'std' => array('md' => 16),
                'responsive' => true,
                'max' => 400,
                'depends' => array(
                    array('lead_button_type', '=', 'custom'),
                )
            ),
            //Link Button Style
            'lead_link_button_status' => array(
                'type' => 'buttons',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE'),
                'std' => 'normal',
                'values' => array(
                    array(
                        'label' => 'Normal',
                        'value' => 'normal'
                    ),
                    array(
                        'label' => 'Hover',
                        'value' => 'hover'
                    ),
                ),
                'tabs' => true,
                'depends' => array(
                    array('lead_button_type', '=', 'link'),
                )
            ),
            'lead_link_button_color' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR'),
                'std' => '',
                'depends' => array(
                    array('lead_button_type', '=', 'link'),
                    array('lead_link_button_status', '=', 'normal'),
                )
            ),
            'lead_link_button_border_width' => array(
                'type' => 'slider',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_WIDTH'),
                'max'=> 30,
                'std' => '',
                'depends' => array(
                    array('lead_button_type', '=', 'link'),
                    array('lead_link_button_status', '=', 'normal'),
                )
            ),
            'lead_link_border_color' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_COLOR'),
                'std' => '',
                'depends' => array(
                    array('lead_button_type', '=', 'link'),
                    array('lead_link_button_status', '=', 'normal'),
                )
            ),
            'lead_link_button_padding_bottom' => array(
                'type' => 'slider',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_PADDING_BOTTOM'),
                'max'=>100,
                'std' => '',
                'depends' => array(
                    array('lead_button_type', '=', 'link'),
                    array('lead_link_button_status', '=', 'normal'),
                )
            ),
            //Link Hover
            'lead_link_button_hover_color' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR_HOVER'),
                'std' => '',
                'depends' => array(
                    array('lead_button_type', '=', 'link'),
                    array('lead_link_button_status', '=', 'hover'),
                )
            ),
            'lead_link_button_border_hover_color' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_COLOR_HOVER'),
                'std' => '',
                'depends' => array(
                    array('lead_button_type', '=', 'link'),
                    array('lead_link_button_status', '=', 'hover'),
                )
            ),
            'lead_button_padding' => array(
                'type' => 'padding',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_PADDING'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_PADDING_DESC'),
                'std' => '',
                'depends' => array(
                    array('lead_button_type', '=', 'custom'),
                ),
                'responsive' => true
            ),
            'lead_button_appearance' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_DESC'),
                'values' => array(
                    '' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_FLAT'),
                    'gradient' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_GRADIENT'),
                    'outline' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_OUTLINE'),
                    '3d' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_3D'),
                ),
                'std' => '',
                'depends' => array(
                    array('lead_use_custom_button', '=', 1),
                    array('lead_button_type', '!=', 'link'),
                )
            ),
            'lead_button_status' => array(
                'type' => 'buttons',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_ENABLE_BACKGROUND_OPTIONS'),
                'std' => 'normal',
                'values' => array(
                    array(
                        'label' => 'Normal',
                        'value' => 'normal'
                    ),
                    array(
                        'label' => 'Hover',
                        'value' => 'hover'
                    ),
                ),
                'tabs' => true,
                'depends' => array(
                    array('lead_use_custom_button', '=', 1),
                    array('lead_button_type', '=', 'custom'),
                    array('lead_button_type', '!=', 'link'),
                )
            ),
            'lead_button_background_color' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BACKGROUND_COLOR'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BACKGROUND_COLOR_DESC'),
                'std' => '#444444',
                'depends' => array(
                    array('lead_button_appearance', '!=', 'gradient'),
                    array('lead_use_custom_button', '=', 1),
                    array('lead_button_type', '=', 'custom'),
                    array('lead_button_status', '=', 'normal'),
                    array('lead_button_type', '!=', 'link'),
                ),
            ),
            'lead_button_background_gradient' => array(
                'type' => 'gradient',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_GRADIENT'),
                'std' => array(
                    "color" => "#B4EC51",
                    "color2" => "#429321",
                    "deg" => "45",
                    "type" => "linear"
                ),
                'depends' => array(
                    array('lead_use_custom_button', '=', 1),
                    array('lead_button_appearance', '=', 'gradient'),
                    array('lead_button_type', '=', 'custom'),
                    array('lead_button_status', '=', 'normal'),
                    array('lead_button_type', '!=', 'link'),
                )
            ),
            'lead_button_color' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_COLOR'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_COLOR_DESC'),
                'std' => '#fff',
                'depends' => array(
                    array('lead_use_custom_button', '=', 1),
                    array('lead_button_type', '=', 'custom'),
                    array('lead_button_status', '=', 'normal'),
                    array('lead_button_type', '!=', 'link'),
                ),
            ),
            'lead_button_background_color_hover' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BACKGROUND_COLOR_HOVER'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BACKGROUND_COLOR_HOVER_DESC'),
                'std' => '#222',
                'depends' => array(
                    array('lead_button_appearance', '!=', 'gradient'),
                    array('lead_use_custom_button', '=', 1),
                    array('lead_button_type', '=', 'custom'),
                    array('lead_button_status', '=', 'hover'),
                    array('lead_button_type', '!=', 'link'),
                ),
            ),
            'lead_button_background_gradient_hover' => array(
                'type' => 'gradient',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_GRADIENT'),
                'std' => array(
                    "color" => "#429321",
                    "color2" => "#B4EC51",
                    "deg" => "45",
                    "type" => "linear"
                ),
                'depends' => array(
                    array('lead_use_custom_button', '=', 1),
                    array('lead_button_appearance', '=', 'gradient'),
                    array('lead_button_type', '=', 'custom'),
                    array('lead_button_status', '=', 'hover'),
                    array('lead_button_type', '!=', 'link'),
                )
            ),
            'lead_button_color_hover' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_COLOR_HOVER'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_COLOR_HOVER_DESC'),
                'std' => '#fff',
                'depends' => array(
                    array('lead_use_custom_button', '=', 1),
                    array('lead_button_type', '=', 'custom'),
                    array('lead_button_status', '=', 'hover'),
                    array('lead_button_type', '!=', 'link'),
                ),
            ),
            'lead_button_size' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_DESC'),
                'values' => array(
                    '' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_DEFAULT'),
                    'lg' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_LARGE'),
                    'xlg' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_XLARGE'),
                    'sm' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_SMALL'),
                    'xs' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_EXTRA_SAMLL'),
                ),
                'depends'=>array('lead_show_readmore'=>'1')
            ),
            'lead_button_shape' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_DESC'),
                'values' => array(
                    'rounded' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_ROUNDED'),
                    'square' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_SQUARE'),
                    'round' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_ROUND'),
                ),
                'depends' => array(
                    array('lead_use_custom_button', '=', 1),
                    array('lead_button_type', '!=', 'link'),
                )
            ),
            'lead_button_block' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BLOCK'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BLOCK_DESC'),
                'values' => array(
                    '' => \Joomla\CMS\Language\Text::_('JNO'),
                    'sppb-btn-block' => \Joomla\CMS\Language\Text::_('JYES'),
                ),
                'depends' => array(
                    array('lead_use_custom_button', '=', 1),
                    array('lead_button_type', '!=', 'link'),
                )
            ),
            'lead_button_icon' => array(
                'type' => 'icon',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON_DESC'),
                'depends' => array(
                    array('lead_use_custom_button', '=', 1),
                    array('lead_button_type', '!=', 'link'),
                )
            ),
            'lead_button_icon_margin' => array(
                'type' => 'margin',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_TAB_ICON_MARGIN'),
                'depends' => array(
                    array('lead_use_custom_button', '=', 1),
                    array('lead_button_type', '!=', 'link'),
                ),
                'std'=>''
            ),
            'lead_button_icon_position' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON_POSITION'),
                'values' => array(
                    'left' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_LEFT'),
                    'right' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
                ),
                'depends' => array(
                    array('lead_use_custom_button', '=', 1),
                    array('lead_button_type', '!=', 'link'),
                )
            ),
            'lead_button_position' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_POSITION'),
                'values' => array(
                    'sppb-text-left' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_LEFT'),
                    'sppb-text-center' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_CENTER'),
                    'sppb-text-right' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
                ),
                'std' => 'sppb-text-left',
                'depends'=>array('lead_show_readmore'=>'1')
            ),
        ),
		// Normal Options
		'options' => array(
            'layout'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Choose Layout'),
                'desc'=>\Joomla\CMS\Language\Text::_('Choose layout display'),
                'values'=>array(
                    ''=>\Joomla\CMS\Language\Text::_('Classic'),
                    'thumbnail'=>\Joomla\CMS\Language\Text::_('Thumbnail'),
                ),
                'std'=>'',
            ),

            'overlay_color' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('Overlay Color'),
                'std' => '',
                'depends' => array(array('layout', '=', 'thumbnail'))
            ),

            'color_style'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Color Mode'),
                'values'=>array(
                    ''=>\Joomla\CMS\Language\Text::_('Dark'),
                    'uk-light'=>\Joomla\CMS\Language\Text::_('Light')
                ),
                'std'=>''
            ),
			'hide_thumbnail'=>array(
				'type'=>'checkbox',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_HIDE_THUMBNAIL'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_HIDE_THUMBNAIL_DESC'),
				'values'=>array(
					1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
					0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
				),
				'std'=>0,
			),

            'thumbnail_height'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_THUMBNAIL_HEIGHT'),
                'std'=>'',
                'max'=>1500,
                'responsive'=>true,
                'depends'=>array('hide_thumbnail'=>'0')
            ),

            'image_position'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Image Position'),
                'values'=>array(
                    'top'=>\Joomla\CMS\Language\Text::_('Top'),
                    'left'=>\Joomla\CMS\Language\Text::_('Left'),
                    'right'=>\Joomla\CMS\Language\Text::_('Right'),
                    'bottom'=>\Joomla\CMS\Language\Text::_('Bottom'),
                ),
                'std'=>'top'
            ),

            'image_width_xl' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Image Width Large Desktop' ),
                'type' => 'select',
                'values'       => array(
                    '1-1'    => \Joomla\CMS\Language\Text::_('1-1'),
                    '1-2'    => \Joomla\CMS\Language\Text::_('1-2'),
                    '1-3'    => \Joomla\CMS\Language\Text::_('1-3'),
                    '2-3'    => \Joomla\CMS\Language\Text::_('2-3'),
                    '1-4'    => \Joomla\CMS\Language\Text::_('1-4'),
                    '3-4'    => \Joomla\CMS\Language\Text::_('3-4'),
                    '1-5'    => \Joomla\CMS\Language\Text::_('1-5'),
                    '2-5'    => \Joomla\CMS\Language\Text::_('2-5'),
                    '3-5'    => \Joomla\CMS\Language\Text::_('3-5'),
                    '4-5'    => \Joomla\CMS\Language\Text::_('4-5'),
                    '1-6'    => \Joomla\CMS\Language\Text::_('1-6'),
                    '5-6'    => \Joomla\CMS\Language\Text::_('5-6'),
                ),
                'std'   => '1-2',
                'depends'=>array(
                    array('image_position', '!=', 'top'),
                    array('image_position', '!=', 'bottom'),
                )
            ),
            'image_width_l' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Image Width Desktop' ),
                'type' => 'select',
                'values'       => array(
                    '1-1'    => \Joomla\CMS\Language\Text::_('1-1'),
                    '1-2'    => \Joomla\CMS\Language\Text::_('1-2'),
                    '1-3'    => \Joomla\CMS\Language\Text::_('1-3'),
                    '2-3'    => \Joomla\CMS\Language\Text::_('2-3'),
                    '1-4'    => \Joomla\CMS\Language\Text::_('1-4'),
                    '3-4'    => \Joomla\CMS\Language\Text::_('3-4'),
                    '1-5'    => \Joomla\CMS\Language\Text::_('1-5'),
                    '2-5'    => \Joomla\CMS\Language\Text::_('2-5'),
                    '3-5'    => \Joomla\CMS\Language\Text::_('3-5'),
                    '4-5'    => \Joomla\CMS\Language\Text::_('4-5'),
                    '1-6'    => \Joomla\CMS\Language\Text::_('1-6'),
                    '5-6'    => \Joomla\CMS\Language\Text::_('5-6'),
                ),
                'std'   => '1-2',
                'depends'=>array(
                    array('image_position', '!=', 'top'),
                    array('image_position', '!=', 'bottom'),
                )
            ),
            'image_width_m' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Image Width Laptop' ),
                'type' => 'select',
                'values'       => array(
                    '1-1'    => \Joomla\CMS\Language\Text::_('1-1'),
                    '1-2'    => \Joomla\CMS\Language\Text::_('1-2'),
                    '1-3'    => \Joomla\CMS\Language\Text::_('1-3'),
                    '2-3'    => \Joomla\CMS\Language\Text::_('2-3'),
                    '1-4'    => \Joomla\CMS\Language\Text::_('1-4'),
                    '3-4'    => \Joomla\CMS\Language\Text::_('3-4'),
                    '1-5'    => \Joomla\CMS\Language\Text::_('1-5'),
                    '2-5'    => \Joomla\CMS\Language\Text::_('2-5'),
                    '3-5'    => \Joomla\CMS\Language\Text::_('3-5'),
                    '4-5'    => \Joomla\CMS\Language\Text::_('4-5'),
                    '1-6'    => \Joomla\CMS\Language\Text::_('1-6'),
                    '5-6'    => \Joomla\CMS\Language\Text::_('5-6'),
                ),
                'std'   => '1-2',
                'depends'=>array(
                    array('image_position', '!=', 'top'),
                    array('image_position', '!=', 'bottom'),
                )
            ),
            'image_width_s' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Image Width Tablet' ),
                'type' => 'select',
                'values'       => array(
                    '1-1'    => \Joomla\CMS\Language\Text::_('1-1'),
                    '1-2'    => \Joomla\CMS\Language\Text::_('1-2'),
                    '1-3'    => \Joomla\CMS\Language\Text::_('1-3'),
                    '2-3'    => \Joomla\CMS\Language\Text::_('2-3'),
                    '1-4'    => \Joomla\CMS\Language\Text::_('1-4'),
                    '3-4'    => \Joomla\CMS\Language\Text::_('3-4'),
                    '1-5'    => \Joomla\CMS\Language\Text::_('1-5'),
                    '2-5'    => \Joomla\CMS\Language\Text::_('2-5'),
                    '3-5'    => \Joomla\CMS\Language\Text::_('3-5'),
                    '4-5'    => \Joomla\CMS\Language\Text::_('4-5'),
                    '1-6'    => \Joomla\CMS\Language\Text::_('1-6'),
                    '5-6'    => \Joomla\CMS\Language\Text::_('5-6'),
                ),
                'std'   => '1-2',
                'depends'=>array(
                    array('image_position', '!=', 'top'),
                    array('image_position', '!=', 'bottom'),
                )
            ),
            'image_width' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Image Width Mobile' ),
                'type' => 'select',
                'values'       => array(
                    '1-1'    => \Joomla\CMS\Language\Text::_('1-1'),
                    '1-2'    => \Joomla\CMS\Language\Text::_('1-2'),
                    '1-3'    => \Joomla\CMS\Language\Text::_('1-3'),
                    '2-3'    => \Joomla\CMS\Language\Text::_('2-3'),
                    '1-4'    => \Joomla\CMS\Language\Text::_('1-4'),
                    '3-4'    => \Joomla\CMS\Language\Text::_('3-4'),
                    '1-5'    => \Joomla\CMS\Language\Text::_('1-5'),
                    '2-5'    => \Joomla\CMS\Language\Text::_('2-5'),
                    '3-5'    => \Joomla\CMS\Language\Text::_('3-5'),
                    '4-5'    => \Joomla\CMS\Language\Text::_('4-5'),
                    '1-6'    => \Joomla\CMS\Language\Text::_('1-6'),
                    '5-6'    => \Joomla\CMS\Language\Text::_('5-6'),
                ),
                'std'   => '1-2',
                'depends'=>array(
                    array('image_position', '!=', 'top'),
                    array('image_position', '!=', 'bottom'),
                )
            ),

            'responsive_separator_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('COLUMN OPTIONS')
            ),

            'column_xl' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Large Desktop Columns' ),
                'type' => 'select',
                'values'       => array(
                    '1'    => \Joomla\CMS\Language\Text::_('1 Column'),
                    '2'    => \Joomla\CMS\Language\Text::_('2 Columns'),
                    '3'    => \Joomla\CMS\Language\Text::_('3 Columns'),
                    '4'    => \Joomla\CMS\Language\Text::_('4 Columns'),
                    '5'    => \Joomla\CMS\Language\Text::_('5 Columns'),
                    '6'    => \Joomla\CMS\Language\Text::_('6 Columns'),
                ),
                'std'   => '4',
            ),

            'column_l' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Desktop Columns' ),
                'type' => 'select',
                'values'       => array(
                    '1'    => \Joomla\CMS\Language\Text::_('1 Column'),
                    '2'    => \Joomla\CMS\Language\Text::_('2 Columns'),
                    '3'    => \Joomla\CMS\Language\Text::_('3 Columns'),
                    '4'    => \Joomla\CMS\Language\Text::_('4 Columns'),
                    '5'    => \Joomla\CMS\Language\Text::_('5 Columns'),
                    '6'    => \Joomla\CMS\Language\Text::_('6 Columns'),
                ),
                'std'   => '4',
            ),

            'column_m' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Laptop Columns' ),
                'type' => 'select',
                'values'       => array(
                    '1'    => \Joomla\CMS\Language\Text::_('1 Column'),
                    '2'    => \Joomla\CMS\Language\Text::_('2 Columns'),
                    '3'    => \Joomla\CMS\Language\Text::_('3 Columns'),
                    '4'    => \Joomla\CMS\Language\Text::_('4 Columns'),
                    '5'    => \Joomla\CMS\Language\Text::_('5 Columns'),
                    '6'    => \Joomla\CMS\Language\Text::_('6 Columns'),
                ),
                'std'   => '3',
            ),

            'column_s' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Tablet Columns' ),
                'type' => 'select',
                'values'       => array(
                    '1'    => \Joomla\CMS\Language\Text::_('1 Column'),
                    '2'    => \Joomla\CMS\Language\Text::_('2 Columns'),
                    '3'    => \Joomla\CMS\Language\Text::_('3 Columns'),
                    '4'    => \Joomla\CMS\Language\Text::_('4 Columns'),
                    '5'    => \Joomla\CMS\Language\Text::_('5 Columns'),
                    '6'    => \Joomla\CMS\Language\Text::_('6 Columns'),
                ),
                'std'   => '2',
            ),

            'column_xs' => array(
                'title' => \Joomla\CMS\Language\Text::_( 'Mobile Columns' ),
                'type' => 'select',
                'values'       => array(
                    '1'    => \Joomla\CMS\Language\Text::_('1 Column'),
                    '2'    => \Joomla\CMS\Language\Text::_('2 Columns'),
                    '3'    => \Joomla\CMS\Language\Text::_('3 Columns'),
                    '4'    => \Joomla\CMS\Language\Text::_('4 Columns'),
                    '5'    => \Joomla\CMS\Language\Text::_('5 Columns'),
                    '6'    => \Joomla\CMS\Language\Text::_('6 Columns'),
                ),
                'std'   => '1',
            ),

            'card_separator_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('CARD OPTIONS')
            ),

            'card_style'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Card Size'),
                'values'=>array(
                    ''=>\Joomla\CMS\Language\Text::_('None'),
                    'default'=>\Joomla\CMS\Language\Text::_('Default'),
                    'primary'=>\Joomla\CMS\Language\Text::_('Primary'),
                    'secondary'=>\Joomla\CMS\Language\Text::_('Secondary'),
                ),
                'std'=>''
            ),

            'card_size'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Card Size'),
                'values'=>array(
                    'none'=>\Joomla\CMS\Language\Text::_('None'),
                    ''=>\Joomla\CMS\Language\Text::_('Default'),
                    'small'=>\Joomla\CMS\Language\Text::_('Small'),
                    'large'=>\Joomla\CMS\Language\Text::_('Large'),
                ),
                'std'=>''
            ),

            'card_border_radius' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('Card Border Radius'),
                'values' => array(
                    '' => \Joomla\CMS\Language\Text::_('Default'),
                    'rounded' => \Joomla\CMS\Language\Text::_('Rounded'),
                    'circle' => \Joomla\CMS\Language\Text::_('Circle'),
                    'pill' => \Joomla\CMS\Language\Text::_('Pill'),
                ),
                'std' => '',
            ),

            'card_gutter'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Card Gutter'),
                'values'=>array(
                    ''=>\Joomla\CMS\Language\Text::_('Default'),
                    'small'=>\Joomla\CMS\Language\Text::_('Small'),
                    'medium'=>\Joomla\CMS\Language\Text::_('Medium'),
                    'large'=>\Joomla\CMS\Language\Text::_('Large'),
                    'collapse'=>\Joomla\CMS\Language\Text::_('Collapse'),
                ),
                'std'=>''
            ),

            'card_divider'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Card Divider'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>0,
            ),

            'separator_title_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_ADDON_TITLE_OPTIONS')
            ),

            'heading_selector'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DESC'),
                'values'=>array(
                    'h1'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H1'),
                    'h2'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H2'),
                    'h3'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H3'),
                    'h4'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H4'),
                    'h5'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H5'),
                    'h6'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H6'),
                ),
                'std'=>'h3',
            ),

            'title_font_family'=>array(
                'type'=>'fonts',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_FAMILY'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_FAMILY_DESC'),

                'selector'=> array(
                    'type'=>'font',
                    'font'=>'{{ VALUE }}',
                    'css'=>'.uk-title { font-family: "{{ VALUE }}"; }'
                )
            ),

            'title_fontsize'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_SIZE'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_SIZE_DESC'),
                'std'=>'',

                'responsive' => true,
                'max'=> 400,
            ),

            'title_lineheight'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_LINE_HEIGHT'),
                'std'=>'',

                'responsive' => true,
                'max'=> 400,
            ),

            'title_font_style'=>array(
                'type'=>'fontstyle',
                'title'=> \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_STYLE'),

            ),

            'title_letterspace'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_LETTER_SPACING'),
                'values'=>array(
                    '-10px'=> '-10px',
                    '-9px'=> '-9px',
                    '-8px'=> '-8px',
                    '-7px'=> '-7px',
                    '-6px'=> '-6px',
                    '-5px'=> '-5px',
                    '-4px'=> '-4px',
                    '-3px'=> '-3px',
                    '-2px'=> '-2px',
                    '-1px'=> '-1px',
                    '0px'=> 'Default',
                    '1px'=> '1px',
                    '2px'=> '2px',
                    '3px'=> '3px',
                    '4px'=> '4px',
                    '5px'=> '5px',
                    '6px'=>	'6px',
                    '7px'=>	'7px',
                    '8px'=>	'8px',
                    '9px'=>	'9px',
                    '10px'=> '10px'
                ),
                'std'=>'0',
            ),

            'title_text_color'=>array(
                'type'=>'color',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR_DESC'),

            ),

            'title_margin_top'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_TOP'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_TOP_DESC'),
                'placeholder'=>'10',

                'responsive' => true,
                'max'=> 400,
            ),

            'title_margin_bottom'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_BOTTOM'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_BOTTOM_DESC'),
                'placeholder'=>'10',

                'responsive' => true,
                'max'=> 400,
            ),

            'separator_content_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_ADDON_CONTENT_OPTIONS')
            ),

            'text_font_family'=>array(
                'type'=>'fonts',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_FONT_FAMILY'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_FONT_FAMILY_DESC'),
                'selector'=> array(
                    'type'=>'font',
                    'font'=>'{{ VALUE }}',
                    'css'=>'.sppb-article-introtext { font-family: "{{ VALUE }}"; }'
                )
            ),

            'text_fontsize'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_FONT_SIZE'),
                'std'=>'',
                'max'=>400,
                'responsive'=>true
            ),

            'text_lineheight'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_LINE_HEIGHT'),
                'std'=>'',
                'max'=>400,
                'responsive'=>true
            ),

            'text_fontweight'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_FONTWEIGHT'),
                'values'=>array(
                    100=>100,
                    200=>200,
                    300=>300,
                    400=>400,
                    500=>500,
                    600=>600,
                    700=>700,
                    800=>800,
                    900=>900,
                ),
                'std'=>'',
            ),

            'separator_meta_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_ADDON_META_OPTIONS')
            ),

            'meta_font_family'=>array(
                'type'=>'fonts',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_FONT_FAMILY'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_FONT_FAMILY_DESC'),
                'selector'=> array(
                    'type'=>'font',
                    'font'=>'{{ VALUE }}',
                    'css'=>'.sppb-article-meta { font-family: "{{ VALUE }}"; }'
                )
            ),

            'meta_fontsize'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_FONT_SIZE'),
                'std'=>'',
                'max'=>400,
                'responsive'=>true
            ),

            'meta_font_style'=>array(
                'type'=>'fontstyle',
                'title'=> \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_STYLE'),
            ),

            'meta_lineheight'=>array(
                'type'=>'slider',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_LINE_HEIGHT'),
                'std'=>'',
                'max'=>400,
                'responsive'=>true
            ),

            'meta_fontweight'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_FONTWEIGHT'),
                'values'=>array(
                    100=>100,
                    200=>200,
                    300=>300,
                    400=>400,
                    500=>500,
                    600=>600,
                    700=>700,
                    800=>800,
                    900=>900,
                ),
                'std'=>'',
            ),

            'content_separator_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('CONTENT OPTIONS')
            ),

            'show_intro'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_INTRO'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_INTRO_DESC'),
                'std'=>1,
            ),

            'intro_limit'=>array(
                'type'=>'number',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_INTRO_LIMIT'),
                'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_INTRO_LIMIT_DESC'),
                'std'=>'200',
                'depends'=>array('show_intro'=>'1')
            ),

			'show_author'=>array(
				'type'=>'checkbox',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_AUTHOR'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_AUTHOR_DESC'),
				'values'=>array(
					1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
					0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
				),
				'std'=>1,
			),

			'show_category'=>array(
				'type'=>'checkbox',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_CATEGORY'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_CATEGORY_DESC'),
				'values'=>array(
					1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
					0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
				),
				'std'=>1,
			),

			'show_date'=>array(
				'type'=>'checkbox',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_DATE'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_DATE_DESC'),
				'values'=>array(
					1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
					0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
				),
				'std'=>1,
			),

            'slider_separator_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('SLIDER OPTIONS')
            ),

            'use_slider'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Display Articles as Slider'),
                'desc'=>\Joomla\CMS\Language\Text::_('Display Articles as Carousel Slider'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>0,
            ),

            'enable_slider_autoplay'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Auto Play'),
                'desc'=>\Joomla\CMS\Language\Text::_('Enable Auto Play'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
                'depends'=>array('use_slider'=>'1')
            ),

            'slider_autoplay_interval'=>array(
                'type'=>'number',
                'title'=>\Joomla\CMS\Language\Text::_('Auto Play Interval'),
                'desc'=>\Joomla\CMS\Language\Text::_('The delay between switching slides in autoplay mode.'),
                'std'=>'7000',
                'depends'=>array('enable_slider_autoplay'=>'1')
            ),

            'enable_navigation'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Navigation'),
                'desc'=>\Joomla\CMS\Language\Text::_('Enable Navigation'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
                'depends'=>array('use_slider'=>'1')
            ),

            'navigation_position'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Navigation Position'),
                'values'=>array(
                    ''=>\Joomla\CMS\Language\Text::_('Outside'),
                    'inside'=>\Joomla\CMS\Language\Text::_('Inside')
                ),
                'std'=>'',
                'depends'=>array(
                    array('use_slider', '=', '1'),
                    array('enable_navigation' , '=', '1')
                )
            ),

            'enable_dotnav'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Dot Navigation'),
                'desc'=>\Joomla\CMS\Language\Text::_('Enable Dot Navigation'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
                'depends'=>array('use_slider'=>'1')
            ),

            'dotnav_margin'=>array(
                'type'=>'select',
                'title'=>\Joomla\CMS\Language\Text::_('Dot Navigation Margin'),
                'values'=>array(
                    'uk-margin-small-top' => \Joomla\CMS\Language\Text::_('Small'),
                    'uk-margin-top' => \Joomla\CMS\Language\Text::_('Default'),
                    'uk-margin-medium-top' => \Joomla\CMS\Language\Text::_('Medium'),
                ),
                'std' => 'uk-margin-top',
                'depends'=>array(
                    array('use_slider', '=', '1'),
                    array('enable_dotnav' , '=', '1')
                )
            ),

            'center_slider'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Center Slider'),
                'desc'=>\Joomla\CMS\Language\Text::_('To center the list items'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>0,
                'depends'=>array('use_slider'=>'1')
            ),

            'event_separator_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('EVENT OPTIONS')
            ),

            'show_event'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Show Event'),
                'desc'=>\Joomla\CMS\Language\Text::_('Whether to show article event.'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>0,
            ),

            'show_event_date'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Show Event Date'),
                'desc'=>\Joomla\CMS\Language\Text::_('Whether to show date of event.'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
                'depends'=>array('show_event'=>'1')
            ),

            'show_event_duration'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Show Event Duration'),
                'desc'=>\Joomla\CMS\Language\Text::_('Whether to show duration of event.'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
                'depends'=>array('show_event'=>'1')
            ),

            'show_event_location'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Show Event Location'),
                'desc'=>\Joomla\CMS\Language\Text::_('Whether to show location of event.'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
                'depends'=>array('show_event'=>'1')
            ),

            'show_event_spot'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Show Event Spot'),
                'desc'=>\Joomla\CMS\Language\Text::_('Whether to show spot of event.'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
                'depends'=>array('show_event'=>'1')
            ),

            'show_event_phone'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Show Event Phone'),
                'desc'=>\Joomla\CMS\Language\Text::_('Whether to show phone of event.'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>0,
                'depends'=>array('show_event'=>'1')
            ),

            'course_separator_options'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('COURSE OPTIONS')
            ),

            'show_course'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Course Event'),
                'desc'=>\Joomla\CMS\Language\Text::_('Whether to show article course.'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>0,
            ),

            'show_course_lecture_count'=>array(
                'type'=>'checkbox',
                'title'=>\Joomla\CMS\Language\Text::_('Show Lecture Count'),
                'desc'=>\Joomla\CMS\Language\Text::_('Whether to show total of lecture.'),
                'values'=>array(
                    1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
                    0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
                ),
                'std'=>1,
                'depends'=>array('show_course'=>'1')
            ),

            // Button
            'btn_separator'=>array(
                'type'=>'separator',
                'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_BUTTON_READMORE_OPTIONS')
            ),

			'show_readmore'=>array(
				'type'=>'checkbox',
				'title'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_READMORE'),
				'desc'=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_READMORE_DESC'),
				'values'=>array(
					1=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_YES'),
					0=>\Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_NO'),
				),
				'std'=>1,
			),

            'button_text' => array(
                'type' => 'text',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_TEXT'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_TEXT_DESC'),
                'std' => 'Read more',
                'depends'=>array('show_readmore'=>'1')
            ),
            'button_font_family' => array(
                'type' => 'fonts',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_FONT_FAMILY'),
                'selector' => array(
                    'type' => 'font',
                    'font' => '{{ VALUE }}',
                    'css' => '.sppb-readmore { font-family: "{{ VALUE }}"; }'
                ),
                'depends'=>array('show_readmore'=>'1')
            ),
            'button_font_style' => array(
                'type' => 'fontstyle',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_FONT_STYLE'),
                'depends'=>array('show_readmore'=>'1')
            ),
            'button_letterspace' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_LETTER_SPACING'),
                'values' => array(
                    '0' => 'Default',
                    '1px' => '1px',
                    '2px' => '2px',
                    '3px' => '3px',
                    '4px' => '4px',
                    '5px' => '5px',
                    '6px' => '6px',
                    '7px' => '7px',
                    '8px' => '8px',
                    '9px' => '9px',
                    '10px' => '10px'
                ),
                'std' => '0',
                'depends'=>array('show_readmore'=>'1')
            ),
            'button_type' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE_DESC'),
                'values' => array(
                    'default' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_DEFAULT'),
                    'primary' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_PRIMARY'),
                    'secondary' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_SECONDARY'),
                    'success' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_SUCCESS'),
                    'info' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_INFO'),
                    'warning' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_WARNING'),
                    'danger' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_DANGER'),
                    'dark' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_DARK'),
                    'link' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK'),
                    'custom' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_CUSTOM'),
                ),
                'std' => 'success',
                'depends'=>array('show_readmore'=>'1')
            ),
            'fontsize' => array(
                'type' => 'slider',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_FONT_SIZE'),
                'std' => array('md' => 16),
                'responsive' => true,
                'max' => 400,
                'depends' => array(
                    array('button_type', '=', 'custom'),
                )
            ),
            //Link Button Style
            'link_button_status' => array(
                'type' => 'buttons',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE'),
                'std' => 'normal',
                'values' => array(
                    array(
                        'label' => 'Normal',
                        'value' => 'normal'
                    ),
                    array(
                        'label' => 'Hover',
                        'value' => 'hover'
                    ),
                ),
                'tabs' => true,
                'depends' => array(
                    array('button_type', '=', 'link'),
                )
            ),
            'link_button_color' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR'),
                'std' => '',
                'depends' => array(
                    array('button_type', '=', 'link'),
                    array('link_button_status', '=', 'normal'),
                )
            ),
            'link_button_border_width' => array(
                'type' => 'slider',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_WIDTH'),
                'max'=> 30,
                'std' => '',
                'depends' => array(
                    array('button_type', '=', 'link'),
                    array('link_button_status', '=', 'normal'),
                )
            ),
            'link_border_color' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_COLOR'),
                'std' => '',
                'depends' => array(
                    array('button_type', '=', 'link'),
                    array('link_button_status', '=', 'normal'),
                )
            ),
            'link_button_padding_bottom' => array(
                'type' => 'slider',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_PADDING_BOTTOM'),
                'max'=>100,
                'std' => '',
                'depends' => array(
                    array('button_type', '=', 'link'),
                    array('link_button_status', '=', 'normal'),
                )
            ),
            //Link Hover
            'link_button_hover_color' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR_HOVER'),
                'std' => '',
                'depends' => array(
                    array('button_type', '=', 'link'),
                    array('link_button_status', '=', 'hover'),
                )
            ),
            'link_button_border_hover_color' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_COLOR_HOVER'),
                'std' => '',
                'depends' => array(
                    array('button_type', '=', 'link'),
                    array('link_button_status', '=', 'hover'),
                )
            ),
            'button_padding' => array(
                'type' => 'padding',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_PADDING'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_PADDING_DESC'),
                'std' => '',
                'depends' => array(
                    array('button_type', '=', 'custom'),
                ),
                'responsive' => true
            ),
            'button_appearance' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_DESC'),
                'values' => array(
                    '' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_FLAT'),
                    'gradient' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_GRADIENT'),
                    'outline' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_OUTLINE'),
                    '3d' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_3D'),
                ),
                'std' => '',
                'depends' => array(
                    array('use_custom_button', '=', 1),
                    array('button_type', '!=', 'link'),
                )
            ),
            'button_status' => array(
                'type' => 'buttons',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_ENABLE_BACKGROUND_OPTIONS'),
                'std' => 'normal',
                'values' => array(
                    array(
                        'label' => 'Normal',
                        'value' => 'normal'
                    ),
                    array(
                        'label' => 'Hover',
                        'value' => 'hover'
                    ),
                ),
                'tabs' => true,
                'depends' => array(
                    array('use_custom_button', '=', 1),
                    array('button_type', '=', 'custom'),
                    array('button_type', '!=', 'link'),
                )
            ),
            'button_background_color' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BACKGROUND_COLOR'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BACKGROUND_COLOR_DESC'),
                'std' => '#444444',
                'depends' => array(
                    array('button_appearance', '!=', 'gradient'),
                    array('use_custom_button', '=', 1),
                    array('button_type', '=', 'custom'),
                    array('button_status', '=', 'normal'),
                    array('button_type', '!=', 'link'),
                ),
            ),
            'button_background_gradient' => array(
                'type' => 'gradient',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_GRADIENT'),
                'std' => array(
                    "color" => "#B4EC51",
                    "color2" => "#429321",
                    "deg" => "45",
                    "type" => "linear"
                ),
                'depends' => array(
                    array('use_custom_button', '=', 1),
                    array('button_appearance', '=', 'gradient'),
                    array('button_type', '=', 'custom'),
                    array('button_status', '=', 'normal'),
                    array('button_type', '!=', 'link'),
                )
            ),
            'button_color' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_COLOR'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_COLOR_DESC'),
                'std' => '#fff',
                'depends' => array(
                    array('use_custom_button', '=', 1),
                    array('button_type', '=', 'custom'),
                    array('button_status', '=', 'normal'),
                    array('button_type', '!=', 'link'),
                ),
            ),
            'button_background_color_hover' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BACKGROUND_COLOR_HOVER'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BACKGROUND_COLOR_HOVER_DESC'),
                'std' => '#222',
                'depends' => array(
                    array('button_appearance', '!=', 'gradient'),
                    array('use_custom_button', '=', 1),
                    array('button_type', '=', 'custom'),
                    array('button_status', '=', 'hover'),
                    array('button_type', '!=', 'link'),
                ),
            ),
            'button_background_gradient_hover' => array(
                'type' => 'gradient',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_GRADIENT'),
                'std' => array(
                    "color" => "#429321",
                    "color2" => "#B4EC51",
                    "deg" => "45",
                    "type" => "linear"
                ),
                'depends' => array(
                    array('use_custom_button', '=', 1),
                    array('button_appearance', '=', 'gradient'),
                    array('button_type', '=', 'custom'),
                    array('button_status', '=', 'hover'),
                    array('button_type', '!=', 'link'),
                )
            ),
            'button_color_hover' => array(
                'type' => 'color',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_COLOR_HOVER'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_COLOR_HOVER_DESC'),
                'std' => '#fff',
                'depends' => array(
                    array('use_custom_button', '=', 1),
                    array('button_type', '=', 'custom'),
                    array('button_status', '=', 'hover'),
                    array('button_type', '!=', 'link'),
                ),
            ),
            'button_size' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_DESC'),
                'values' => array(
                    '' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_DEFAULT'),
                    'lg' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_LARGE'),
                    'xlg' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_XLARGE'),
                    'sm' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_SMALL'),
                    'xs' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_EXTRA_SAMLL'),
                ),
                'depends'=>array('show_readmore'=>'1')
            ),
            'button_shape' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_DESC'),
                'values' => array(
                    'rounded' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_ROUNDED'),
                    'square' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_SQUARE'),
                    'round' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_ROUND'),
                ),
                'depends' => array(
                    array('use_custom_button', '=', 1),
                    array('button_type', '!=', 'link'),
                )
            ),
            'button_block' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BLOCK'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BLOCK_DESC'),
                'values' => array(
                    '' => \Joomla\CMS\Language\Text::_('JNO'),
                    'sppb-btn-block' => \Joomla\CMS\Language\Text::_('JYES'),
                ),
                'depends' => array(
                    array('use_custom_button', '=', 1),
                    array('button_type', '!=', 'link'),
                )
            ),
            'button_icon' => array(
                'type' => 'icon',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON'),
                'desc' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON_DESC'),
                'depends' => array(
                    array('use_custom_button', '=', 1),
                    array('button_type', '!=', 'link'),
                )
            ),
            'button_icon_margin' => array(
                'type' => 'margin',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_TAB_ICON_MARGIN'),
                'depends' => array(
                    array('use_custom_button', '=', 1),
                    array('button_type', '!=', 'link'),
                ),
                'std'=>''
            ),
            'button_icon_position' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON_POSITION'),
                'values' => array(
                    'left' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_LEFT'),
                    'right' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
                ),
                'depends' => array(
                    array('use_custom_button', '=', 1),
                    array('button_type', '!=', 'link'),
                )
            ),
            'button_position' => array(
                'type' => 'select',
                'title' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_POSITION'),
                'values' => array(
                    'sppb-text-left' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_LEFT'),
                    'sppb-text-center' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_CENTER'),
                    'sppb-text-right' => \Joomla\CMS\Language\Text::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
                ),
                'std' => 'sppb-text-left',
                'depends'=>array('show_readmore'=>'1')
            ),

		),
	),
	)
);
