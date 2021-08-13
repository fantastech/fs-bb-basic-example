<?php
/**
 * @class FLBasicExampleModule
 */
class FLBasicExampleModule extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'          => 'Basic Example',
            'description'   => 'Description of the module.',
            'category'		=> 'FS Modules',
            'partial_refresh' => true,
        ));
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('FLBasicExampleModule', array(
    'general'       => array(
        'title'         => 'General',
        'sections'      => array(
            'general'       => array(
                'title'         => 'Section Title',
                'fields'        => array(
                    'text_field'     => array(
                        'type'          => 'text',
                        'label'         => 'Text Field',
                        'default'       => ''
                    ),
                    'textarea_field' => array(
                        'type'          => 'textarea',
                        'label'         => 'Textarea Field',
                        'default'       => '',
                        'placeholder'   => 'Placeholder Text',
                        'rows'          => '6'
                    ),
                )
            )
        )
    )
));
