<?php

return [

    'theme_slug' => '',

    'menu_settings' => [
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
        'utility' => 'Utility Menu',
    ],

    'admin_logo' => 'images/logo.png',
    'site_logo' => 'images/logo.png',
    'footer_logo' => '',

    'typekit_id' => '',

    'custom_thumbnail_sizes' => [
        // name => [width, height, crop]

    ],

    'custom_post_type' => [
//        'project' => [
//            'singular_name' => 'Project',
//            'plural_name' => 'Projects',
//            'url_slug' => 'projects',
//            'menu_icon' => 'dashicons-portfolio',
//        ]
    ],

    'custom_taxonomy' => [
//        'product_type' => [
//            'singular_name' => 'Product Type',
//            'plural_name' => 'Product Types',
//            'url_slug' => 'product-types',
//            'post_type' => 'product'
//        ],
    ],

    'tinycme_custom_format_styles' => [
        [
            'title'   => 'Intro Paragraph',
            'block'   => 'p',
            'classes' => 'intro',
            'wrapper' => false,
        ],
    ],

    'acf_option_pages' => [
        //'Global'
    ],

    'custom_editor_styles' => [
        'google-fonts' => 'https://fonts.googleapis.com/css?family=Open+Sans',
        //'fancybox' => 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css',
        //'slick' => 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css',
        //'fontawesome' => 'src/vendor/font-awesome/css/all.css',
        'main-style' => 'styles/css/main-style.css',
    ],

    'custom_editor_scripts' => [
        'jquery-migrate' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js',
        //'fancybox' => 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js',
        //'slick' => 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',
        'main-foundation' => 'scripts/site-js.js',
    ]

];
