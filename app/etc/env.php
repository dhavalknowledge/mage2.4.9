<?php
return [
    'cache' => [
        'graphql' => [
            'id_salt' => 'OQR1uEFvfW4OssalOu1cM2sQOVC8NViH'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '24e_',
                'backend_options' => [
                    'serializer' => 'igbinary'
                ]
            ],
            'page_cache' => [
                'id_prefix' => '24e_',
                'backend_options' => [
                    'serializer' => 'igbinary'
                ]
            ]
        ]
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'backend' => [
        'frontName' => 'admin_7fjgwar'
    ],
    'config' => [
        'async' => 0
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'crypt' => [
        'key' => 'base64onbZL71sKEeWbwcoNkADIPANyjdQYfZpwPVFU1/p3uE='
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'magento249',
                'username' => 'phpmyadmin',
                'password' => 'Toor@123',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'graphql_query_resolver_result' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'install' => [
        'date' => 'Fri, 21 Aug 2026 04:36:33 +0000'
    ]
];
