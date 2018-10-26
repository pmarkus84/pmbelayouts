<?php

/* 
 * Copyright (c) 2018 Markus Puffer <m.puffer@pm-webdesign.eu>.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Markus Puffer <m.puffer@pm-webdesign.eu> - Responsive Image Crop
 */
$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config'] = [
//'config' => [
    //'type' => 'imageManipulation',
    'cropVariants' => [       
        'default' => [
            //'title' => 'LLL:EXT:extkey/Resources/Private/Language/locallang_db.xlf:imageManipulation.desktop',
            'title' => 'desktop',
            'allowedAspectRatios' => [
                '625:204' => [
                    'title' => '625 : 204',
                    'value' => 625 / 204
                ]
            ],
            'coverAreas' => [
                [
                    'x' => 0.7,
                    'y' => 0.2,
                    'width' => 0.05,
                    'height' => 0.1,
                ],
                [
                    'x' => 0.25,
                    'y' => 0,
                    'width' => 0.1,
                    'height' => 0.3,
                ],
                [
                    'x' => 0.25,
                    'y' => 0.5,
                    'width' => 0.3,
                    'height' => 0.3,
                ],
                [
                    'x' => 0,
                    'y' => 0,
                    'width' => 1,
                    'height' => 0.1,
                ],
                [
                    'x' => 0,
                    'y' => 0.9,
                    'width' => 1,
                    'height' => 0.1,
                ]
            ],
        ],
        'landscape' => [
            'title' => 'landscape',
            'allowedAspectRatios' => [
                '76:25' => [
                    'title' => '76:25',
                    'value' => 76 / 25
                ]
            ]
        ],
        'tablet' => [
            'title' => 'tablet',
            'allowedAspectRatios' => [
                '767:255' => [
                    'title' => '767 : 255',
                    'value' => 767 / 255
                ]
            ]
        ],
        'mobile' => [
            'title' => 'mobile',
            'allowedAspectRatios' => [
                '124:51' => [
                    'title' => '124 : 51',
                    'value' => 124 / 51
                ]
            ]
        ]  
    ]
];