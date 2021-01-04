<?php
/**
 * Extension Manager/Repository config file for ext "chess_manager".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Simple News',
    'description' => 'An extension show News',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.0.0-10.4.99',
            'bootstrap_package' => '11.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'ChrisGruen\\SimpleNews\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Christian Grünwald',
    'author_email' => 'cg@romonta-schach.de',
    'author_company' => 'ChrisGruen',
    'version' => '1.0.0',
];
