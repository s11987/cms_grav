<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/cms_grav/user/plugins/grav-plugin-shoppingcart-personalizer-develop/blueprints.yaml',
    'modified' => 1533228900,
    'data' => [
        'name' => 'Shopping Cart Personalizer Addon',
        'version' => '1.0.1',
        'description' => 'Power overload the Shopping Cart Plugin with stock management, variations, product personalizations, country restrictions and plenty of other tweaks and features.',
        'icon' => 'shopping-cart',
        'author' => [
            'name' => 'Uli Hake',
            'email' => 'uli.hake@gmail.com',
            'url' => 'https://www.saveva.com'
        ],
        'homepage' => 'https://github.com/leotiger/grav-plugin-shoppingcart-personalizer',
        'demo' => 'https://www.tessa.es',
        'docs' => 'https://github.com/leotiger/grav-plugin-shoppingcart-personalizer/blob/master/README.md',
        'keywords' => 'shoppingcart, ecommerce, e-commerce, plugin, shop, cart, stock management, variations, product configuration',
        'bugs' => 'https://github.com/leotiger/grav-plugin-shoppingcart-personalizer/issues',
        'license' => 'MIT',
        'testing' => false,
        'dependencies' => [
            0 => [
                'name' => 'shoppingcart',
                'version' => '~1.1'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        0 => [
                            'type' => 'tab',
                            'title' => 'General',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'cart.display_remove_option' => [
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_CHECKOUT_REMOVE',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_CHECKOUT_REMOVE_HELP',
                                    'type' => 'toggle',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'cart.minimumSumToPlaceOrder' => [
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_MINIMUM_ORDER_AMOUNT',
                                    'type' => 'text',
                                    'default' => 50,
                                    'validate' => 'number'
                                ],
                                'cart.freeshipping' => [
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FREE_SHIPPING_AMOUNT',
                                    'type' => 'text',
                                    'default' => 0,
                                    'help' => 'Minimum amount for free shipping',
                                    'validate' => 'int'
                                ],
                                'ui.use_breadcrumbs' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_USE_BREADCRUMB',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_USE_BREADCRUMB_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'ui.currency_decimal_comma' => [
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_UI_DECIMAL',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_UI_DECIMAL_HELP',
                                    'type' => 'toggle',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'ui.short_labels_breakpoint' => [
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_UI_DESKTOP_BREAKPOINT',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_UI_DESKTOP_BREAKPOINT_HELP',
                                    'type' => 'text',
                                    'default' => 480,
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ],
                                'ui.image_container_square' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_CART_IMAGE_EQUALIZER',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_CART_IMAGE_EQUALIZER_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'ui.testmode' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_SHOP_TEST_MODE',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_SHOP_TEST_MODE_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'ui.fancybox' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_UI_FANCYBOX',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_UI_FANCYBOX_HELP',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'ui.loadfancybox' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FANCYBOX_LOAD',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FANCYBOX_LOAD_HELP',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'ui.shoppingcart_product_blueprint' => [
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_PRODUCT_BLUEPRINT_EXTENDS',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_PRODUCT_BLUEPRINT_EXTENDS_HELP',
                                    'type' => 'text',
                                    'default' => 'default',
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'ui.shoppingcart_products_blueprint' => [
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_PRODUCTS_BLUEPRINT_EXTENDS',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_PRODUCTS_BLUEPRINT_EXTENDS_HELP',
                                    'type' => 'text',
                                    'default' => 'default',
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'ui.shoppingcart_categories_blueprint' => [
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_CATEGORIES_BLUEPRINT_EXTENDS',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_CATEGORIES_BLUEPRINT_EXTENDS_HELP',
                                    'type' => 'text',
                                    'default' => 'default',
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'shop.restrict_countries' => [
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_RESTRICT_COUNTRIES',
                                    'type' => 'select',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_RESTRICT_COUNTRIES_HELP',
                                    'classes' => 'fancy',
                                    'multiple' => true,
                                    'default' => [
                                        0 => '*'
                                    ],
                                    '@data-options' => '\\Grav\\Plugin\\ShoppingCart\\ShoppingCart::getShippingCountries',
                                    'validate' => [
                                        'type' => 'commalist'
                                    ]
                                ],
                                'urls.shop_url' => [
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_SHOP_URL',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_SHOP_URL_HELP',
                                    'type' => 'text',
                                    'default' => '/shop',
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'urls.terms_url' => [
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_TERMS_URL',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_TERMS_URL_HELP',
                                    'type' => 'text',
                                    'default' => '/shop-terms-and-conditions',
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'urls.placeoffer_url' => [
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_QUOTE_URL',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_QUOTE_URL_HELP',
                                    'type' => 'text',
                                    'default' => '/shop-place-offer',
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'urls.personalize_url' => [
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_ORDER_URL',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_ORDER_URL_HELP',
                                    'type' => 'text',
                                    'default' => '/shop-personalize-order',
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'shop.from_email' => [
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_SHOP_EMAIL_SENDER',
                                    'type' => 'text',
                                    'size' => 'large',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_SHOP_EMAIL_SENDER_HELP',
                                    'validate' => 'email'
                                ],
                                'shop.force_emails' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FORCE_EMAILS',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FORCE_EMAILS_HELP',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'shop.cachetouch' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_CACHE_TOUCH',
                                    'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_CACHE_TOUCH_HELP',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        1 => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_QUOTE_FORM',
                            'fields' => [
                                'placeoffer_form.fields' => [
                                    'type' => 'list',
                                    'array' => true,
                                    'style' => 'vertical',
                                    'fields' => [
                                        '.type' => [
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_TYPE',
                                            'type' => 'select',
                                            'default' => 'text',
                                            'options' => [
                                                'text' => 'text',
                                                'display' => 'display',
                                                'select' => 'select',
                                                'checkbox' => 'checkbox',
                                                'email' => 'email',
                                                'toggle' => 'toggle',
                                                'textarea' => 'textarea',
                                                'captcha' => 'captcha',
                                                'spacer' => 'spacer'
                                            ],
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        '.validate' => [
                                            'toggleable' => true,
                                            'type' => 'array',
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_VALIDATE',
                                            'help' => NULL,
                                            'placeholder_key' => 'value',
                                            'placeholder_value' => 'label'
                                        ],
                                        '.name' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_NAME',
                                            'help' => NULL,
                                            'type' => 'text'
                                        ],
                                        '.label' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_LABEL',
                                            'help' => NULL,
                                            'type' => 'text'
                                        ],
                                        '.title' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_TITLE',
                                            'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_TITLE_HELP',
                                            'type' => 'text'
                                        ],
                                        '.underline' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_UNDERLINE',
                                            'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_UNDERLINE_HELP',
                                            'default' => 1,
                                            'type' => 'bool',
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => 'bool'
                                        ],
                                        '.help' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_HELP',
                                            'type' => 'text'
                                        ],
                                        '.ignore' => [
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_IGNORE',
                                            'type' => 'toggle',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        '.classes' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_CLASSES',
                                            'help' => NULL,
                                            'type' => 'text'
                                        ],
                                        '.id' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_ID',
                                            'type' => 'text'
                                        ],
                                        '.outerclasses' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_OUTER_CLASSES',
                                            'type' => 'text'
                                        ],
                                        '.content' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_CONTENT',
                                            'type' => 'text'
                                        ],
                                        '.markdown' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_CONTENT_MARKDOWN',
                                            'type' => 'text'
                                        ],
                                        '.options' => [
                                            'toggleable' => true,
                                            'type' => 'array',
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_OPTIONS',
                                            'placeholder_key' => 'value',
                                            'placeholder_value' => 'label'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        2 => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_ORDER_FORM',
                            'fields' => [
                                'personalizeorder_form.fields' => [
                                    'type' => 'list',
                                    'array' => true,
                                    'style' => 'vertical',
                                    'fields' => [
                                        '.type' => [
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_TYPE',
                                            'type' => 'select',
                                            'default' => 'text',
                                            'options' => [
                                                'text' => 'text',
                                                'display' => 'display',
                                                'select' => 'select',
                                                'checkbox' => 'checkbox',
                                                'email' => 'email',
                                                'toggle' => 'toggle',
                                                'textarea' => 'textarea',
                                                'captcha' => 'captcha',
                                                'spacer' => 'spacer'
                                            ],
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        '.validate' => [
                                            'toggleable' => true,
                                            'type' => 'array',
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_VALIDATE',
                                            'help' => NULL,
                                            'placeholder_key' => 'value',
                                            'placeholder_value' => 'label'
                                        ],
                                        '.name' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_NAME',
                                            'help' => NULL,
                                            'type' => 'text'
                                        ],
                                        '.label' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_LABEL',
                                            'help' => NULL,
                                            'type' => 'text'
                                        ],
                                        '.title' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_TITLE',
                                            'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_TITLE_HELP',
                                            'type' => 'text'
                                        ],
                                        '.underline' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_UNDERLINE',
                                            'help' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_UNDERLINE_HELP',
                                            'default' => 1,
                                            'type' => 'bool',
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => 'bool'
                                        ],
                                        '.help' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_HELP',
                                            'type' => 'text'
                                        ],
                                        '.ignore' => [
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_IGNORE',
                                            'type' => 'toggle',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        '.classes' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_CLASSES',
                                            'help' => NULL,
                                            'type' => 'text'
                                        ],
                                        '.id' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_ID',
                                            'type' => 'text'
                                        ],
                                        '.outerclasses' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_OUTER_CLASSES',
                                            'type' => 'text'
                                        ],
                                        '.content' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_CONTENT',
                                            'type' => 'text'
                                        ],
                                        '.markdown' => [
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_CONTENT_MARKDOWN',
                                            'type' => 'text'
                                        ],
                                        '.options' => [
                                            'toggleable' => true,
                                            'type' => 'array',
                                            'label' => 'PLUGIN_SHOPPINGCART.PERSONALIZE_FIELD_OPTIONS',
                                            'placeholder_key' => 'value',
                                            'placeholder_value' => 'label'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
