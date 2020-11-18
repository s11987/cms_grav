<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/cms_grav/user/plugins/shoppingcart-personalizer/shoppingcart-personalizer.yaml',
    'modified' => 1533228900,
    'data' => [
        'enabled' => true,
        'shop' => [
            'restrict_countries' => [
                0 => '*'
            ]
        ],
        'placeoffer_form' => [
            'name' => 'placeoffer',
            'fields' => [
                0 => [
                    'name' => 'name',
                    'type' => 'text',
                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_PLACE_OFFER_NAME',
                    'classes' => 'placeoffer-firstname',
                    'style' => 'vertical',
                    'validate' => [
                        'required' => true
                    ]
                ],
                1 => [
                    'name' => 'email',
                    'type' => 'email',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_EMAIL',
                    'classes' => 'placeoffer-email',
                    'style' => 'vertical',
                    'validate' => [
                        'required' => true
                    ]
                ],
                2 => [
                    'name' => 'message',
                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_PLACE_OFFER_MESSAGE',
                    'type' => 'textarea',
                    'style' => 'vertical',
                    'outerclasses' => 'placeoffer-message',
                    'validate' => [
                        'required' => true
                    ]
                ]
            ],
            'buttons' => [
                0 => [
                    'type' => 'submit',
                    'classes' => 'btn btn-primary',
                    'outerclasses' => 'modal-footer',
                    'value' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_PLACE_OFFER_SUBMIT'
                ]
            ],
            'process' => [
                0 => [
                    'email' => [
                        'subject' => '{{PLUGIN_SHOPPINGCART.PERSONALIZE_OFFER_SUBJECTID}}: [{{form.value.name|e}}] {{ form.value.subject|e }}',
                        'body' => '{% include \'forms/data.html.twig\' %}'
                    ]
                ],
                1 => [
                    'save' => [
                        'fileprefix' => 'placeoffer-',
                        'dateformat' => 'Ymd-His-u',
                        'extension' => 'txt',
                        'body' => '{% include \'forms/data.txt.twig\' %}'
                    ]
                ],
                2 => [
                    'message' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_PLACE_OFFER_THANKS'
                ]
            ]
        ],
        'personalizeorder_form' => [
            'fields' => [
                0 => [
                    'type' => 'display',
                    'name' => 'personalize_your_products',
                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_YOUR_PRODUCTS',
                    'ignore' => false
                ]
            ]
        ]
    ]
];
