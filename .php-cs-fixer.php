<?php

return (new PhpCsFixer\Config())
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(['src', 'tests'])
    )
    ->setIndent('    ')
    ->setLineEnding("\n");

