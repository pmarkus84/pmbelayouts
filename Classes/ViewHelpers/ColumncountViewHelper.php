<?php
namespace Pmwebdesign\Pmbelayouts\ViewHelpers;
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

/**
 * Class ColumncountViewHelper<br>
 * Compute the column size for bootstrap
 *
 * @author Markus Puffer <m.puffer@pm-webdesign.eu>
 * @version 1.0 (2018-05-04)
 */
class ColumncountViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{
    /**
     * render<br>
     * 	
     * @param int $ccount
     * @return int 
     */
    public function render($ccount = 1) { 
        $anzahl = 12 / $ccount;
        return $anzahl;
    }
}
