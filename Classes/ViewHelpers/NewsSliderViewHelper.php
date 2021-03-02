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
 * Renders the news to the setted columns
 *
 * @author Markus Puffer <m.puffer@pm-webdesign.eu>
 */
class NewsSliderViewHelper extends AbstractViewHelper
{
    /**
     * Initialize Arguments
     */
    public function initializeArguments()
    {       
        $this->registerArgument('newscount', 'int', 'Count news', true);
        $this->registerArgument('newsindex', 'int', 'Index of actually news', true);
        $this->registerArgument('newsstatus', 'string', 'Status of news', true);
    }
    
    /**
     * @return int
     */
    public static function renderStatic(
            array $arguments,
            \Closure $renderChildrenClosure,
            RenderingContextInterface $renderingContext)
    {
        $newscount = $arguments['newscount'];
        $newsindex = $arguments['newsindex'];
        $newsstatus = $arguments['newsstatus'];
        
        // Set columns
        if($newscount == 1) {
            $spalten = 1;
        } elseif ($newscount == 2) {
            $spalten = 2;
        } else {
            $spalten = 3;
        }
        
        $join = 0;
        $threeColumnCount = floor($newscount / $spalten);
        $spaltenindex = $spalten - 1;
        $residue = $newscount % $spalten;  
        
        // residue smaller then 3?
        if ($residue < 3 && $residue > 0) {
            $residue = 1;
        }
        
        $allColumnsCountIndex = $threeColumnCount * $spalten - 1;
        //$threeColumnCount = ceil($newscount / 3);
        
        for($i = 0; $i < $threeColumnCount; $i++) { 
            if($newsindex < $spaltenindex) {
                // it´s ok
            } elseif ($newsindex == $spaltenindex && $newsstatus == 'after' && ($newsindex <= $allColumnsCountIndex)) {
                return 3; // End Normal
            } elseif(($newsindex == ($spaltenindex + 1)) && ($newsstatus == 'before') && ($newsindex < $allColumnsCountIndex)) {
                return 2; // Begin Normal           
            } elseif($newsindex > $spaltenindex) {
                $spaltenindex += $spalten;
            } else {
                
            }
        }            
        if ($newsstatus == 'before') {
            // First Element?
            if($newsindex == 0) {
                $join = 1; // Begin Active           
            } elseif($newsindex < $spaltenindex) {
                $join = 0;
            } 
        } elseif($newsstatus == 'after') {
            if(($newsindex == $spaltenindex) && ($newsindex <= $allColumnsCountIndex)) {
                $join = 3; // End Normal
            }
        }  
        if($residue > 0) {
            //$residue--;        
            if($newsindex > ($allColumnsCountIndex)) {             
                if(($newsindex == ($allColumnsCountIndex + 1)) && ($newsstatus == 'before')) {
                    $join = 4; // Begin Rest
                //} elseif((($residue + $allColumnsCountIndex) == $newsindex) && (($newsstatus == 'after'))) {
                } elseif((--$newscount == $newsindex) && ($newsstatus == 'after')) {
                    $join = 5; // End Rest
                }
            }       
        }
        return $join;
    }
}
