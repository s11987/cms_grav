<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/cms_grav/user/pages/01.shop/02.geek-toys/snipcart_category.md',
    'modified' => 1441054790,
    'data' => [
        'header' => [
            'title' => 'Geek Toys',
            'category' => 'Geek Toys',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'title',
                    'dir' => 'asc'
                ]
            ]
        ],
        'frontmatter' => 'title: Geek Toys
category: Geek Toys
content:
    items: @self.children
    order:
        by: title
        dir: asc',
        'markdown' => '# Geek Toys
## Anime, Gaming, Movies, Comics, we have **all your toys**
'
    ]
];
