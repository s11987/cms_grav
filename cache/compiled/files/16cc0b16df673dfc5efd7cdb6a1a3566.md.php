<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/cms_grav/user/pages/01.shop/02.urodzinowe/snipcart_category.md',
    'modified' => 1611522811,
    'data' => [
        'header' => [
            'title' => 'Urodzinowe',
            'category' => 'Urodzinowe',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'title',
                    'dir' => 'asc'
                ]
            ],
            'media_order' => 'happy_bday.jpg'
        ],
        'frontmatter' => 'title: Urodzinowe
category: Urodzinowe
content:
    items: \'@self.children\'
    order:
        by: title
        dir: asc
media_order: happy_bday.jpg',
        'markdown' => '# Urodzinowe
'
    ]
];
