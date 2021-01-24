<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/cms_grav/user/pages/01.shop/03.uniwersalne/snipcart_category.md',
    'modified' => 1611522811,
    'data' => [
        'header' => [
            'title' => 'Uniwersalne',
            'category' => 'Uniwersalne',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'title',
                    'dir' => 'asc'
                ]
            ],
            'media_order' => 'uniwer1.jpg'
        ],
        'frontmatter' => 'title: Uniwersalne
category: Uniwersalne
content:
    items: \'@self.children\'
    order:
        by: title
        dir: asc
media_order: uniwer1.jpg',
        'markdown' => '# Uniwersalne'
    ]
];
