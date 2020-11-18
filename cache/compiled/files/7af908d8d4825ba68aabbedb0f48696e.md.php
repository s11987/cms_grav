<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/cms_grav/user/pages/01.shop/01.t-shirts/snipcart_category.md',
    'modified' => 1441054790,
    'data' => [
        'header' => [
            'title' => 'T-Shirts',
            'category' => 'T-Shirts',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ]
            ]
        ],
        'frontmatter' => 'title: T-Shirts
category: T-Shirts
content:
    items: @self.children
    order:
        by: default
        dir: asc',
        'markdown' => '# T-Shirts
## We have both **cool** and **funny** t-shirts
'
    ]
];
