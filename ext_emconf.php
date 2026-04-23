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
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-12.5.99',
            'indexed_search' => '12.0.0-12.5.99',
            'content_blocks' => '0.1.0-0.7.18',
            'news' => '12.0.0-12.3.1',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
