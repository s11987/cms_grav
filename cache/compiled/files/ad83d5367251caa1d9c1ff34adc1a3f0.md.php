<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/cms_grav/user/pages/01.shop/06.swiateczne/snipcart_category.md',
    'modified' => 1607029283,
    'data' => [
        'header' => [
            'title' => 'Świąteczne',
            'media_order' => 'sw4.jpg',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'title',
                    'dir' => 'asc'
                ]
            ],
            'category' => 'Świąteczne'
        ],
        'frontmatter' => 'title: Świąteczne
media_order: sw4.jpg
content:
    items: \'@self.children\'
    order:
        by: title
        dir: asc
category: Świąteczne',
        'markdown' => '# Świąteczne'
    ]
];
