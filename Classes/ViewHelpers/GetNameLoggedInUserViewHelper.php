<?php

/*
 * Copyright (c) 2020 Markus Blöchl <mbloechl@parat.eu>.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Markus Blöchl <mbloechl@parat.eu> - initial API and implementation and/or initial documentation
 */

namespace Pmwebdesign\Pmbelayouts\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;

/**
 * Description of GetLoggedInUserViewHelper
 *
 * @author Markus Blöchl <mbloechl@parat.eu>
 */
class GetNameLoggedInUserViewHelper extends \TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper
{
    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext): string
    {
        return $GLOBALS['TSFE']->fe_user->user['first_name'] . ' ' . $GLOBALS['TSFE']->fe_user->user['last_name'];
    }
}
