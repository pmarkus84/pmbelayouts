<?php

/*
 * Copyright (c) 2023 PARAT Technology Group GmbH. Typo3 Project - Pmbelayout
 * Markus Puffer (dvpm) - mpuffer@parat-technology.com
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

// Z_PARAT: Add upload type for corporate design
$GLOBALS['TCA']['tt_content']['columns']['uploads_type'] = [
        'exclude' => true,
        'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.0', 0],
                ['LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.1', 1],
                ['LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.2', 2],
                ['LLL:EXT:pmbelayouts/Resources/Private/Language/locallang.xlf:tt_content.uploads_type.3', 3],
            ],
            'default' => 0,
        ],
];