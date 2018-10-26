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
 * Renders the indicator of the slider to the columns of the news
 *
 * @author Markus Puffer <m.puffer@pm-webdesign.eu>
 */
class NewsSliderIndicatorViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{
    /**
     * render<br>
     * Compute the 3-columns of all active news datasets
     * 
     * @param int $newscount Count of news     
     * @return array Column count
     */
    public function render($newscount)
    {        
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
        //$array = array();
        //$array = [0,1,2];       
        return $columns;
        
    }
}
