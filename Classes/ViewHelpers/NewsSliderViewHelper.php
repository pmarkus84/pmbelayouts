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
 * Description of NewsSlider
 * Renders the news to the setted columns
 *
 * @author Markus Puffer <m.puffer@pm-webdesign.eu>
 */
class NewsSliderViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{
    /**
     * 
     * @param int $newscount
     * @param int $newsindex
     * @param string $newsstatus
     * @return int
     */
    public function render($newscount, $newsindex, $newsstatus)
    {
        // TODO: If column = 1 then error
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
                //echo "<script>alert('Newsindex: ".$newsindex."<br />Spaltenindex: ".$spaltenindex."')</script>";
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
