<?php

return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOPgSql\Driver',
                'params' => array(
                    'host' => '179.188.16.34',
                    'port' => '5432',
                    'user' => 'sabaocatarina',
                    'password' => 'onfrota12',
                    'dbname' => 'sabaocatarina',
                    'charset' => 'utf8',
                    'driverOptions' => array(
                        1002 => 'SET NAMES utf8'
                    )
                )
            )
        )
    ),
);
