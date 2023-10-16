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
 * Description of NewsSlider
 * Renders the indicator of the slider to the columns of the news
 *
 * @author Markus Puffer <m.puffer@pm-webdesign.eu>
 */
class NewsSliderIndicatorViewHelper extends AbstractViewHelper
{    
    /**
     * Initialize Arguments
     * 
     * @return void
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('newscount', 'int', 'Sum of news', true);
    }

    /**
     * render<br>
     * Compute the 3-columns of all active news datasets
     * 
     * @param int $newscount Count of news     
     * @return array Column count
     */
    public static function renderStatic(
            array $arguments,
            \Closure $renderChildrenClosure,
            RenderingContextInterface $renderingContext)
    {
        $newscount = $arguments['newscount'];
        if($newscount == 1) {
            $spalten = 1;
        } elseif ($newscount == 2) {
            $spalten = 2;
        } else {
            $spalten = 3;
        }       
        
        $threeColumnCount = floor($newscount / $spalten);        
        $residue = $newscount % $spalten;  
        
        // residue smaller then 3?
        if ($residue < 3 && $residue > 0) {
            // Set residue to 1 (one column = 3 datasets)
            $residue = 1;
        }
        
        $allColumnsCount = $threeColumnCount + $residue;        
        $columns = array();
        
        for($i = 0; $i < $allColumnsCount; $i++) { 
            $columns[] = $i;            
        }
        return $columns;
    }
}
