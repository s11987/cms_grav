<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/cms_grav/user/pages/01.shop/04.imieninowe/snipcart_category.md',
    'modified' => 1607003302,
    'data' => [
        'header' => [
            'title' => 'Imieninowe',
            'media_order' => 'im1.jpg',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'title',
                    'dir' => 'asc'
                ]
            ],
            'category' => 'Imieninowe'
        ],
        'frontmatter' => 'title: Imieninowe
media_order: im1.jpg
content:
    items: \'@self.children\'
    order:
        by: title
        dir: asc
category: Imieninowe',
        'markdown' => '# Imieninowe'
    ]
];
