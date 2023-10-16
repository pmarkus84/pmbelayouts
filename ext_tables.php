<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {
        ExtensionManagementUtility::addStaticFile('pmbelayouts', 'Configuration/TypoScript', 'BE-Layouts');

        /**
         * Registers a plugin
         */
        ExtensionUtility::registerPlugin(
            'pmbelayouts',
            'Pmbelayouts',   // Plugin
            'Layout' // Plugin-Titel
        );
    }
);
