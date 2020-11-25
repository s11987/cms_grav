<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/cms_grav/user/pages/01.shop/01.ślubne/snipcart_category.md',
    'modified' => 1606326720,
    'data' => [
        'header' => [
            'title' => 'Ślubowe',
            'category' => 'T-Shirts',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ]
            ],
            'media_order' => 'slub0.jpg'
        ],
        'frontmatter' => 'title: Ślubowe
category: T-Shirts
content:
    items: \'@self.children\'
    order:
        by: default
        dir: asc
media_order: slub0.jpg',
        'markdown' => '# Kartki ślubowe
'
    ]
];
