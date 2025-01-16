<?php

return (new PhpCsFixer\Config())
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(['src', 'tests'])
    )
    ->setIndent('    ')
    ->setLineEnding("\n")
    ->setRules([
        'braces_position' => [
            'anonymous_classes_opening_brace'   => 'same_line',
            'anonymous_functions_opening_brace' => 'same_line',
            'classes_opening_brace'             => 'same_line',
            'control_structures_opening_brace'  => 'same_line',
            'functions_opening_brace'           => 'same_line',
        ]
    ]);

