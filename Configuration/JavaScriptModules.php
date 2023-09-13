<?php

return [
    'dependencies' => ['backend'],
    'tags' => [
        'backend.form',
    ],
    'imports' => [
        '@sebkln/ckeditor-wordbreak' => 'EXT:ckeditor_wordbreak/Resources/Public/JavaScript/plugin/wordbreak.js',
	// Deprecated: Will be removed in v2.
        '@sebkln/ckeditor/wordbreak.js' => 'EXT:ckeditor_wordbreak/Resources/Public/JavaScript/plugin/wordbreak.js',
    ],
];
