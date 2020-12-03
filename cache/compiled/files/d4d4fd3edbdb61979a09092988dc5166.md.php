<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/cms_grav/user/pages/01.shop/snipcart.md',
    'modified' => 1606334470,
    'data' => [
        'header' => [
            'title' => 'Sklep',
            'body_classes' => 'fullwidth',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'title',
                    'dir' => 'asc'
                ]
            ]
        ],
        'frontmatter' => 'title: Sklep
body_classes: fullwidth
content:
    items: \'@self.children\'
    order:
        by: title
        dir: asc',
        'markdown' => '## Kategorie'
    ]
];
