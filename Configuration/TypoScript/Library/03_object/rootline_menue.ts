/*
 *    Project:  PARAT Intranet Konfiguration - PARAT_Intranet_Konfiguration
 *    Version:  1.0.0
 *    Date:    14.09.2017 07:46:45
 *    Author:  Markus Puffer <m.puffer@pm-webdesign.eu> 
 *
 *    Coded with Netbeans!
 */
#Rootline Menue
lib.rootline_menue = HMENU
lib.rootline_menue {
  special = rootline
  special.range = 2 | 0
  wrap = Sie sind hier: &nbsp; |
  1 = TMENU
  1.NO.allWrap = |&nbsp;/&nbsp; |*| |&nbsp;/&nbsp; |*| |
  1.CUR = 1
  1.CUR < .1.NO
  1.CUR.doNotLinkIt = 1
}