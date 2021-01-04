<?php

return [
    'table_name' => 'roles',

    'drop_scheme' => "DROP TABLE IF EXISTS `roles`",

    'scheme' => "CREATE TABLE IF NOT EXISTS `roles` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(80) NOT NULL,
        `created` timestamp NOT NULL,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=latin1;",

    'seeder' => [
        'type' => 'array',
        'data' => array(
        [
            'name'       => 'admin',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'user',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ]),
    ],
];