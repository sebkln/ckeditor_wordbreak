<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'CKEditor 5: wordbreak Plugin',
    'description' => 'Adds the <wbr> HTML element to CKEditor 5 in TYPO3. If set in a long word, the browser may break a line (without adding a hyphen character). Useful e.g. for long URLs and file paths.',
    'version' => '1.0.0',
    'state' => 'stable',
    'category' => 'be',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sebkln.de',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
