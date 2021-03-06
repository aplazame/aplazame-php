<?php

return Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->fixers(
        array(
            '-concat_without_spaces',
            '-empty_return',
            '-phpdoc_indent',
            '-phpdoc_no_empty_return',
            '-phpdoc_params',
            '-phpdoc_to_comment',
            '-unneeded_control_parentheses',
            'long_array_syntax',
            'concat_with_spaces',
            'ereg_to_preg',
            'ordered_use',
        )
    )
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->in('src')
            ->in('test')
    )
    ;
