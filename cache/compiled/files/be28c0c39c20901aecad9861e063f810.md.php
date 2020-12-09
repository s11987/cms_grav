<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/cms_grav/user/pages/01.shop/05.gratulacje/snipcart_category.md',
    'modified' => 1607003302,
    'data' => [
        'header' => [
            'title' => 'Gratulacje',
            'media_order' => 'con00.jpg',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'title',
                    'dir' => 'asc'
                ]
            ],
            'category' => 'Gratulacje'
        ],
        'frontmatter' => 'title: Gratulacje
media_order: con00.jpg
content:
    items: \'@self.children\'
    order:
        by: title
        dir: asc
category: Gratulacje',
        'markdown' => '# Gratulacje'
    ]
];
