<?php

/* 
 * Copyright (c) 2018 Markus Puffer <m.puffer@pm-webdesign.eu>.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Markus Puffer <m.puffer@pm-webdesign.eu> - initial API and implementation and/or initial documentation
 */

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Pmwebdesign.pmbelayouts',
	'Pmbelayouts',   // Plugin
	[
            'Ajax' => 'loadLogin, loadLogout'
        ],
        // non-cacheable actions
        [
            'Ajax' => 'loadLogin, loadLogout'
        ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:pmbelayouts/Configuration/TSconfig/Page.txt">'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:pmbelayouts/Configuration/TSconfig/User.txt">'
);

// TODO: Test Language Files
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:frontend/Resources/Private/Language/locallang_tca.xlf'][] = 'EXT:pmbelayouts/Resources/Private/Language/locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:t3sbootstrap/Resources/Private/Language/locallang.xlf'][] = 'EXT:pmbelayouts/Resources/Private/Language/locallang.xlf';
//
//$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:pmbelayouts/Resources/Private/Language/locallang.xlf'][] = 'EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf';
//$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['en']['EXT:pmbelayouts/Resources/Private/Language/en.locallang.xlf'][] = 'EXT:' . $_EXTKEY . '/Resources/Private/Language/en.locallang.xlf';