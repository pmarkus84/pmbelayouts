/*
 *    Project:	web - web
 *    Version:	1.0.0
 *    Date:		08.01.2018 14:08:34
 *    Author:	Markus Puffer <m.puffer@pm-webdesign.eu> 
 *
 *    Coded with Netbeans!
 */
page.meta {
    X-UA-Compatible = IE=edge,chrome=1
    X-UA-Compatible.httpEquivalent = 1
    viewport = width=device-width, initial-scale=1
    description.field = description
    # If a Field description is empty on a page -> set a defaultDescription -> look at constants
    description.ifEmpty = {$defaultDescription}
}