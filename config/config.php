<?php
/**
 * @author Deller myogogo@gmail.com
 */

return [
    'logAnalyzer' => [
        'storage' => [
          'localFiles' => [],
        ],
        'service' => [
            'fpm' => [
                'errors' => [
                    'storageTypes' => [
                        'localFiles'
                    ],
                    'regexp' => '',
                ],
                'access' => [

                ]
            ],
            'rabbit' => [

            ],
            'nginx' => [
                'errors' => [

                ],
                'access' => [

                ]
            ],
            'mysql' => [

            ],
        ],
    ],
];