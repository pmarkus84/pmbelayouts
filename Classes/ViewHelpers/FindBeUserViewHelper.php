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

namespace Pmwebdesign\Pmbelayouts\ViewHelpers;

/**
 * Description of FindBeUserViewHelper
 *
 * @author Markus Puffer <m.puffer@pm-webdesign.eu>
 */
class FindBeUserViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{
    /**
     * 
     * @return string
     */
    public function render()
    {
        $beuser = $GLOBALS['BE_USER']->user['username'];
        return $beuser;
    }
}
