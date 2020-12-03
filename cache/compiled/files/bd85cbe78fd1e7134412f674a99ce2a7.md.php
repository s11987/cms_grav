<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/cms_grav/user/pages/01.shop/01.slubne/snipcart_category.md',
    'modified' => 1606330639,
    'data' => [
        'header' => [
            'title' => 'Ślubne',
            'category' => 'Ślubne',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ]
            ],
            'media_order' => 'slub2.jpg'
        ],
        'frontmatter' => 'title: Ślubne
category: Ślubne
content:
    items: \'@self.children\'
    order:
        by: default
        dir: asc
media_order: slub2.jpg',
        'markdown' => '# Kartki ślubowe
'
    ]
];
