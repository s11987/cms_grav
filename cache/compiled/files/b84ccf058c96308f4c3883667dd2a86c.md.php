<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/cms_grav/user/pages/01.shop/02.geek-toys/snipcart_category.md',
    'modified' => 1606326946,
    'data' => [
        'header' => [
            'title' => 'Urodzinowe',
            'category' => 'Geek Toys',
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
category: \'Geek Toys\'
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
