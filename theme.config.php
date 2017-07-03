<?php
return array(
    'extends' => 'bootstrap3',
    'helpers' => [
        'factories' => [
            'helptext' => 'TueLib\View\Helper\Root\Factory::getHelpText',
        ],
    ],
    'js' => [
        'ubtue.js',
    ],
);
