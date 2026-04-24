<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '[AASHRO] HighTech - IT solutions',
    'description' => 'HighTech empowers businesses with advanced TYPO3 solutions, combining performance, flexibility, and modern design.',
    'category' => 'templates',
    'author' => 'Team AASHRO',
    'author_email' => 'info@aashro.com',
    'author_company' => 'AASHRO Tech',
    'state' => 'stable',
    'uploadfolder' => false,
    'clearcacheonload' => false,
    'version' => '1.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.5.99',
            'indexed_search' => '13.0.0-13.5.99',
            'content_blocks' => '1.0.0-1.3.18',
            'news' => '14.0.1',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
