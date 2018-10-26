/*
 *    Project:	PARAT Intranet Konfiguration - PARAT_Intranet_Konfiguration
 *    Version:	1.0.0
 *    Date:		03.11.2017 12:32:37
 *    Author:	Markus Puffer <m.puffer@pm-webdesign.eu> 
 *
 *    Coded with Netbeans!
 */
lib.languagebt = COA
lib.languagebt {  
                wrap = <div class="dropdown-divider"></div><div class="nav-link form-inline"><ul class="navbar-nav languagebox">|</ul></div>
                10 = COA
                10 {
                    wrap = <li class="langua"> | </li>                    
                    10 = TEXT
                    10.value = DE
                    10.typolink.parameter.data = page:uid
                    10.typolink.additionalParams = &L=0    
                    10.typolink.ATagParams = class="{$languagesetd} btn btn-sm"  
                }                
                20 = COA
                20 {
                    wrap = <li class="langua"> | </li>
                    10 = TEXT
                    10.value = EN
                    10.typolink.parameter.data = page:uid
                    10.typolink.additionalParams = &L=1 
                    10.typolink.ATagParams = class="{$languagesete} btn btn-sm"                     
                }
                
#                [globalVar = GP:L = 1]
#                       20.10.typolink.ATagParams = class="nav-link active" 
#                [global]
#                [globalVar = GP:L = 0]
#                        10.10.typolink.ATagParams = class="nav-link active" 
#                [global]
}