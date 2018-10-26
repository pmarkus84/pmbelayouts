/*
 *    Project:	PARAT Intranet Konfiguration - PARAT_Intranet_Konfiguration
 *    Version:	1.0.0
 *    Date:	08.11.2017 10:20:11
 *    Author:	Markus Puffer <m.puffer@pm-webdesign.eu> 
 *
 *    Coded with Netbeans!
 */

################################################################################
## LOGIN-Formular                                                             ##
################################################################################
lib.loginform = COA
lib.loginform {
    10 = RECORDS
    10.tables = tt_content
    # Id of the formular
    10.source = 60

#    # set pages for registration below of the login-formular
#    20 = HMENU
#    20 {
#            special = directory
#            special.value = 20
#            1 = TMENU
#            1 {
#                    #noBlur = 1
#                    wrap = <ul>|</ul>
#                    expAll = 1
#
#                    #NO = Menüpunkt im Normalzustand
#                    NO = 1
#                    NO {
#                              wrapItemAndSub = <li>|</li>
#                              # Beschriftung des Menüpunktes in Div wrappen
#                              #linkWrap = <div class="caption">|</div>
#                    }
#            }
#    }
}