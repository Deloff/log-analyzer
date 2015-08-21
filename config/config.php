<?php
/**
 * @author Deller myogogo@gmail.com
 */

return [
    'logAnalyzer' => [
        'service' => [
            'fpm' => [
                'errors' => [],
                'access' => []
            ],
            'rabbit' => [],
            'nginx' => [
                'errors' => [],
                'access' => []
            ],
            'mysql' => [],
        ],
    ],
];