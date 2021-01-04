<?php

return [
    'table_name' => 'users',

    'drop_scheme' => "DROP TABLE IF EXISTS `users`",

    'scheme' => "CREATE TABLE IF NOT EXISTS `users` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(80) NOT NULL,
        `insertion` varchar(20),
        `last_name` varchar(80) NOT NULL,
        `email` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        `role`int(11) NOT NULL,
        `country` int(11),
        `city` varchar(255),
        `birthday` date,
        `created` timestamp,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=latin1;",

    'seeder' => [
        'type' => 'array',
        'data' => array([
            'first_name' => 'Toby',
            'last_name'  => 'Versteeg',
            'email'      => 'toby@codegorilla.nl',
            'password'   => password_hash('Gorilla1!', PASSWORD_DEFAULT),
            'role'       => 1,
            'country'    => 156,
            'city'       => 'Groningen',
            'birthday'   => '1970-05-17',
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ]),
    ],
];