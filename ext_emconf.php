<?php

$EM_CONF['pmbelayouts'] = [
    'title' => 'BE-Layouts',
    'description' => 'Various Backend Layouts',
    'category' => 'distribution',
    'version' => '3.0.0',
    'author' => 'Markus Puffer',
    'author_email' => 'mpuffer@parat.eu',
    'author_company' => 'PARAT Beteiligungs GmbH',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
