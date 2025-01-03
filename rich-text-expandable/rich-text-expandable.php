<?php

/**
 * @class FLRichTextExpandableModule
 */
class FLRichTextExpandableModule extends FLBuilderModule {

	/**
	 * @method __construct
	 */
	public function __construct() {
		parent::__construct(array(
			'name'            => __( 'Text Editor (Expandable)', 'fl-builder' ),
			'description'     => __( 'A WYSIWYG text editor with a "read more" link.', 'fl-builder' ),
			'category'        => __( 'Basic', 'fl-builder' ),
			'partial_refresh' => true,
			'icon'            => 'text.svg',
		));
	}
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('FLRichTextExpandableModule', array(
	'general' => array( // Tab
		'title'    => __( 'General', 'fl-builder' ), // Tab title
		'sections' => array( // Tab Sections
			'general' => array( // Section
				'title'  => '', // Section Title
				'fields' => array( // Section Fields
					'collapsed_height' => array(
						'type'         => 'unit',
						'label'        => 'Collapsed Height',
						'help'		   => 'What percentage of the text should be visible before expanding? (Note: This will not update in the builder - instead, press P to preview.)',
						'default'	   => 50,
						'units'        => array( '%' ),
						'sanitize'	   => 'crm_limit_percentage',
						'slider' => array(
							'min'   => 0,
							'max'   => 100,
							'step'  => 1,
						),
					),
					'read_more_text' => array(
						'type'        => 'text',
						'label'       => '"Read More" Button Text',
						'help'		  => 'Shows when collapsed.',
						'default'	  => 'Read More',
						'preview'	  => array(
							'type'	   => 'text',
							'selector' => '.fl-rich-text-expandable-button',
						),
						'connections' => array( 'string' ),
					),
					'read_less_text' => array(
						'type'        => 'text',
						'label'       => '"Read Less" Button Text',
						'help'		  => 'Shows when expanded.',
						'default'	  => 'Read Less',
						'connections' => array( 'string' ),
					),
					'text' => array(
						'type'        => 'editor',
						'label'       => 'Text Content',
						'rows'        => 10,
						'wpautop'     => false,
						'preview'     => array(
							'type'     => 'text',
							'selector' => '.fl-rich-text-expandable-content',
						),
						'connections' => array( 'string' ),
					),
				),
			),
		),
	),
	'style'   => array( // Tab
		'title'    => __( 'Style', 'fl-builder' ), // Tab title
		'sections' => array( // Tab Sections
			'style' => array( // Section
				'title'  => '', // Section Title
				'fields' => array( // Section Fields
					'color'      => array(
						'type'        => 'color',
						'connections' => array( 'color' ),
						'label'       => __( 'Color', 'fl-builder' ),
						'show_reset'  => true,
						'show_alpha'  => true,
						'preview'     => array(
							'type'      => 'css',
							'selector'  => '{node} .fl-rich-text-expandable, {node} .fl-rich-text-expandable *',
							'property'  => 'color',
							'important' => true,
						),
					),
					'typography' => array(
						'type'       => 'typography',
						'label'      => __( 'Typography', 'fl-builder' ),
						'responsive' => true,
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.fl-rich-text-expandable, .fl-rich-text-expandable *:not(b, strong)',
						),
					),
				),
			),
		),
	),
));
