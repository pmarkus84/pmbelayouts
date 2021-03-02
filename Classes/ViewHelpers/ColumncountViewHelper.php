<?php

/*
 * Copyright (C) 2020 pm-webdesign.eu 
 * Markus Puffer <m.puffer@pm-webdesign.eu>
 *
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 */

namespace Pmwebdesign\Pmbelayouts\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class ColumncountViewHelper
 * Compute the column size for bootstrap
 *
 * @author Markus Puffer <m.puffer@pm-webdesign.eu>
 * @version 2.0 (2020-03-03)
 */
class ColumncountViewHelper extends AbstractViewHelper
{
    public function initializeArguments()
    {
        $this->registerArgument('ccount', 'int', 'Column count', true, 0);
    }
    
    /**
     * render
     * 	
     * @return int 
     */
    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
    {
        $ccount = $arguments['ccount'];
                
        $anzahl = 12 / $ccount;
        return $anzahl;
    }
}
