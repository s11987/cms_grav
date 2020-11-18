<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/cms_grav/user/pages/01.shop/snipcart.md',
    'modified' => 1441054790,
    'data' => [
        'header' => [
            'title' => 'Shop',
            'body_classes' => 'fullwidth',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'title',
                    'dir' => 'asc'
                ]
            ]
        ],
        'frontmatter' => 'title: Shop
body_classes: fullwidth
content:
    items: @self.children
    order:
        by: title
        dir: asc',
        'markdown' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat.
'
    ]
];
