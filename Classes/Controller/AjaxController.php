<?php

/*
 * Copyright (c) 2021-2023 PARAT Beteiligungs GmbH. Typo3 Project - Pmbelayout
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
namespace Pmwebdesign\Pmbelayouts\Controller;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Mvc\Exception\NoSuchArgumentException;

/**
 * Description of AjaxController
 *
 * @author Markus Puffer
 */
class AjaxController extends ActionController
{
    /**
     * Load the login template
     *
     * @return void
     */
    public function loadLoginAction(): void
    {
        $baseUrl = $GLOBALS['TSFE']->getSite()->getConfiguration()['base'];
        $pid = $GLOBALS['TSFE']->tmpl->setup_constants['plugin.']['tx_staffm.']['persistence.']['storagePid'];
        $this->view->assign('baseUrl', $baseUrl);
        $this->view->assign('pid', $pid);
    }

    /**
     * Load the logout template
     *
     * @throws NoSuchArgumentException
     */
    public function loadLogoutAction(): void
    {
        if($this->request->hasArgument('dropdownAnimate')) {
            $dropdownAnimate = $this->request->getArgument("dropdownAnimate");
            $this->view->assign('dropdownAnimate', $dropdownAnimate);
        }
    }
}
