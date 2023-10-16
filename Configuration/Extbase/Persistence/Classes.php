<?php

use Pmwebdesign\Pmbelayouts\Domain\Model\FrontendUserExtend;

return [
    // Extend classes and table mappings

    // Subclasses
//    \TYPO3\CMS\Extbase\Domain\Model\FrontendUser::class => [
//        'subclasses' => [
//            'Tx_Staffm_Mitarbeiter' => Mitarbeiter::class
//        ]
//    ],

    // Mappings
    FrontendUserExtend::class => [
        'tableName' => 'fe_users',
//        'properties' => [
//            'username' => [
//                'fieldName' => 'username'
//            ]
//        ],
    ],
];