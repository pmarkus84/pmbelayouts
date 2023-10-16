<?php

/*
 * Copyright (c) 2018-2023 PARAT Beteiligungs GmbH. Typo3 Project - Pmbelayout
 * Markus Puffer (dvpm) - mpuffer@parat.eu
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

use Pmwebdesign\Pmbelayouts\Controller\AjaxController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

ExtensionUtility::configurePlugin(
	'pmbelayouts',
	'Pmbelayouts',   // Plugin
	[
        AjaxController::class => 'loadLogin, loadLogout'
    ],
    // non-cacheable actions
    [
        AjaxController::class => 'loadLogin, loadLogout'
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    @import "EXT:pmbelayouts/Configuration/TSconfig/Page.typoscript"
');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:pmbelayouts/Configuration/TSconfig/User.typoscript">'
);

// TODO: Test Language Files
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:frontend/Resources/Private/Language/locallang_tca.xlf'][] = 'EXT:pmbelayouts/Resources/Private/Language/locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:t3sbootstrap/Resources/Private/Language/locallang.xlf'][] = 'EXT:pmbelayouts/Resources/Private/Language/locallang.xlf';
//
//$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:pmbelayouts/Resources/Private/Language/locallang.xlf'][] = 'EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf';
//$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['en']['EXT:pmbelayouts/Resources/Private/Language/en.locallang.xlf'][] = 'EXT:' . $_EXTKEY . '/Resources/Private/Language/en.locallang.xlf';