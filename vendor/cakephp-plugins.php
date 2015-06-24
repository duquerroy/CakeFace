<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'AkkaFacebook' => $baseDir . '/vendor/akkaweb/cakephp-facebook/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/'
    ]
];
