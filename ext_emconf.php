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
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.0.0-14.9.99',
            'indexed_search' => '14.0.0-14.9.99',
            'content_blocks' => '2.0.0-2.3.5',
            'news' => '14.0.3',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
