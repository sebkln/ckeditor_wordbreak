<?php

return [
    'dependencies' => ['backend'],
    'tags' => [
        'backend.form',
    ],
    'imports' => [
        '@sebkln/ckeditor/wordbreak.js' => 'EXT:ckeditor_wordbreak/Resources/Public/JavaScript/plugin/wordbreak.js',
    ],
];
