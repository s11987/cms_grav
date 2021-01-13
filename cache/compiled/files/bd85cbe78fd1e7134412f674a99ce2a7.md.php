<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/cms_grav/user/pages/01.shop/01.slubne/snipcart_category.md',
    'modified' => 1608195167,
    'data' => [
        'header' => [
            'title' => 'Ślubne',
            'category' => 'Ślubne',
            'languages' => [
                'supported' => [
                    0 => 'pl',
                    1 => 'en'
                ]
            ],
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
languages:
  supported:
    - pl
    - en
content:
    items: \'@self.children\'
    order:
        by: default
        dir: asc
media_order: slub2.jpg',
        'markdown' => '# Kartki ślubne
'
    ]
];
