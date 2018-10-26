

$(document).ready(function () {   
    /*$('ul.nav li.dropdown').hover(function () {        
        //$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        //$('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        alert('in');
    }, function () {
        //$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        //$('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        alert('out');
    });*/
    
    /* GoTop-Button */
    var gotop = document.getElementById('gotop'); 
    
    var gotopa = document.getElementById('gotopa');  
    var mainnav = document.getElementById('mainnav');  
    var subnavs = document.getElementsByClassName('dropdown-menu');
    var navbutton = document.getElementById('navbutton');
    var subnavslast = document.getElementsByClassName('dropdown-menu-last');
    var navline = document.getElementById('navline');
    var navitems = document.getElementsByClassName('navitemmain');
    var navlinks = document.getElementsByClassName('navlinkmain');
    var navlogo = document.getElementById('navlogo');
    var vwidth = 0;  
    var vheight = 0;
    //var vwidth = window.innerWidth || (window.document.documentElement.clientWidth || window.document.body.clientWidth);  
    //var vheight = window.innerHeight || (window.document.documentElement.clientHeight || window.document.body.clientHeight);
    
    var wname = ""    
    var navlogosrc = ""   
    
    //function picturewidth() {  
        //alert('jetzt');
        var bgimage = document.getElementById('bgimage');
        vwidth = window.innerWidth || (window.document.documentElement.clientWidth || window.document.body.clientWidth);  
        //bgimage.width = vwidth;
        //return vwidth;
    //};
        
    /**
     * On change window size
     * 
     * @returns {undefined}
     */
    function resize() { 
        vwidth = window.innerWidth || (window.document.documentElement.clientWidth || window.document.body.clientWidth);  
        vheight = window.innerHeight || (window.document.documentElement.clientHeight || window.document.body.clientHeight);
        
        var navcoll = document.getElementsByClassName('navbarcollapsemain');
        wname = mainnav.className
        wname = wname.substr(wname.length -5, 5);
        navlogosrc = navlogo.src
        navlogosrc = navlogosrc.substr(navlogosrc.length - 11, 11);
        //alert(vwidth);
        /*if (vwidth < 768) {*/
        if (vwidth < 992) {
        /*if (vwidth < 1200) {*/
            navlogo.style.height = '35px';
            
            /*mainnav.style.backgroundColor = 'transparent';*/
            for(var i = 0; i < navitems.length; i++) {
                navitems[i].style.paddingTop = 0;
            }
            for(var i = 0; i < navlinks.length; i++) {
                navlinks[i].style.color = '#000000';
                navlinks[i].style.paddingTop = 0;
            }        
            for(var i = 0; i < navcoll.length; i++) {
                    navcoll[i].style.background = 'rgba(255,255,255,1)';
                }
        } else {            
            //navlogo.style.height = '60px';            
            for(var i = 0; i < navcoll.length; i++) {
                navcoll[i].style.background = 'transparent';
            }
            for(var i = 0; i < navlinks.length; i++) {
                navlinks[i].style.color = '#000000';
            }
            if (navlogosrc == "logo_bl.svg") {                 
                for(var i = 0; i < navlinks.length; i++) {
                    navlinks[i].style.color = '#000000';
                }
                if (wname == "white") {
                    navlogo.style.height = '35px';
                } 
                for(var i = 0; i < navcoll.length; i++) {
                    navcoll[i].style.background = 'rgba(255,255,255,1)';
                }
            } else {                
                for(var i = 0; i < navlinks.length; i++) {
                    navlinks[i].style.color = '#ffffff';
                }                
            }
            // Set Navitems-padding-top
            for(var i = 0; i < navitems.length; i++) {
                navitems[i].style.paddingTop = 
                        ((window.pageYOffset || document.documentElement.scrollTop)
                            > 50) ? '0' : '12px';
            }  
            for(var i = 0; i < navlinks.length; i++) {
                navlinks[i].style.paddingTop = 
                        ((window.pageYOffset || document.documentElement.scrollTop)
                            > 50) ? '0' : '12px';
            }  
        }
        /* Seitennavigation */
        if (vwidth < 992) {
            $('.frame-layout-6 ul ul').css('margin-top','30px');
            $('.frame-layout-7').css('position','fixed');
            $('.frame-layout-7').css('left','0');
        } else if (vwidth >= 992 && vwidth < 1600) {
            $('.frame-layout-6 ul ul').css('margin-top','30px');
            $('.frame-layout-7').css('position','fixed');
            $('.frame-layout-7').css('left','0');
        } else {
            $('.frame-layout-6 ul ul').css('margin-top','0');
            $('.frame-layout-7').css('position','absolute');
            $('.frame-layout-7').css('left','-150px');
        }
    }    
    window.onresize = resize;
    
    /**
     * Window on scroll
     * 
     * @returns {void}
     */
    window.onscroll = function() {        
        vwidth = window.innerWidth || (window.document.documentElement.clientWidth || window.document.body.clientWidth);  
        vheight = window.innerHeight || (window.document.documentElement.clientHeight || window.document.body.clientHeight);
        var scrollHeight = jQuery(document).height();
        var scrollPosition = jQuery(window).height() + jQuery(window).scrollTop();  
        var navcoll = document.getElementsByClassName('navbarcollapsemain');
        
        wname = mainnav.className
        wname = wname.substr(wname.length -5, 5);
        navlogosrc = navlogo.src
        navlogosrc = navlogosrc.substr(navlogosrc.length - 11, 11);
        //alert(vwidth);
        
//        if (navlogosrc !== "logo_bl.svg") {
            mainnav.style.backgroundColor = 
                    ((window.pageYOffset || document.documentElement.scrollTop)
                            > 50) ? 'rgba(255,255,255,1)' : 'transparent';
//              mainnav.style.backgroundColor = 'transparent';
//        }
        // TODO: Show GoTop-Button
        gotop.style.opacity =
                ((window.pageYOffset || document.documentElement.scrollTop)
                        > 100) ? '1' : '0';
        /*var body = document.body,
        html = document.documentElement;        
        var siteheight = Math.max( body.scrollHeight, body.offsetHeight, 
                html.clientHeight, html.scrollHeight, html.offsetHeight );*/
        
        /* Gotop-Button */
        if ((scrollHeight - scrollPosition) < 150) {
            /*var bottom = 160 - (scrollHeight - scrollPosition);

            if (bottom < 20){
                    bottom = 20;
            }*/
            jQuery('#gotop').css('bottom',150 - (scrollHeight - scrollPosition));
            jQuery('#gotopa').css('bottom',150 - (scrollHeight - scrollPosition));
        } else {
            jQuery('#gotop').css('bottom',20);
            jQuery('#gotopa').css('bottom',20);
        } 
        // TODO ERROR: scroll body to 0px on click
        $('#gotopa').click(function () {
//            var elem = this.id;
//            var elemname = this.href;
//            var sizeelem = elemname.length;
//            var strel = String.prototype.substr(elemname, sizeelem - 4, 1);
            
//            if (elem = "gotopa") {
//                alert(elem);
                //$('#gotopa').tooltip('hide');
                var body = $("html, body");
                //var top = body.scrollTop(); // Position of the body
                //console.log(top);
                body.stop().animate({scrollTop:0}, 700, 'swing', function() {
                   //alert("Finished") ;
                });
                return false;
//            } else if (strel == "#") {
//                alert("Ja");
//                var body = $("html, body");
//                body.stop().animate({scrollTop:100}, 700, 'swing', function() {
//                   //alert("Finished") ;
//                });
//                return false;
//            }
//            return true;
        });
        //$('#gotopa').tooltip('show');
        
        // Show/Hide Navline
//        navline.style.display = 
//                ((window.pageYOffset || document.documentElement.scrollTop)
//                        > 100) ? 'none' : 'block';        
        
        // Set Brand Logo
        //alert(navlogosrc);
        if (navlogosrc == "logo_bl.svg") {
            for(var i = 0; i < navlinks.length; i++) {
                navlinks[i].style.color = '#000000';
            }
        } else {  
            if (wname == "white") {
                navlogo.src = 
                        ((window.pageYOffset || document.documentElement.scrollTop)
                                > 50) ? 'fileadmin/private/images/logo_bl.svg' : 'fileadmin/private/images/logo.svg';
            }
        }
//        navlogo.src = 
//                    ((window.pageYOffset || document.documentElement.scrollTop)
//                            > 100) ? 'fileadmin/private/images/logo_bl.svg' : 'fileadmin/private/images/logo.svg';
                
        // if ( screen.width > 750 ) { // Gerätebildschirmweite
        //if (window.innerWidth > 750) {        
        /*if (vwidth < 768) {*/
        if (vwidth >= 992) {
        /*if (vwidth >= 1200) {*/
                    //}
            // Set Nav-Logo
            navlogo.style.height = 
                    ((window.pageYOffset || document.documentElement.scrollTop)
                            > 50) ? '35px' : '60px';
            for(var i = 0; i < navcoll.length; i++) {
                navcoll[i].style.background = 'transparent';
            }
            // Set Navlinks-Color TODO
            if (navlogosrc == "logo_bl.svg") {          
                for(var i = 0; i < navlinks.length; i++) {
                    navlinks[i].style.color = '#000000';
                }
                if (wname == "white") {
                    navlogo.style.height = '35px';
                } 
            } //else { // TODO: Test -> Commented out, because it occurs a problem at internet explorer
                for(var i = 0; i < navlinks.length; i++) {
                    navlinks[i].style.color = 
                            ((window.pageYOffset || document.documentElement.scrollTop)
                                > 50) ? '#000000' : '#ffffff';    
                }
            //}
            
            if (wname == "white") {
                navlogo.src = 
                        ((window.pageYOffset || document.documentElement.scrollTop)
                                > 50) ? 'fileadmin/private/images/logo_bl.svg' : 'fileadmin/private/images/logo.svg';
            }
                /*var cn = navlinks[i].className;
                var start = cn.length - 5;                
                //alert (start);
                var test = cn.substr(start, 5);
                var oblack = "";
                if (test != "black") {                        
                    //alert('Test: ' + test + '\nStar: ' + start + '\nLäng: ' + cn.length + '\nLink: ' + navlinks[i].className);
                    mblack = cn + " black";
                    //alert(mblack);
                    oblack = cn;    
                } else {
                    var laenge = cn.length - 6;
                    oblack = cn.substr(0, laenge);                    
                }
                navlinks[i].className = 
                    ((window.pageYOffset || document.documentElement.scrollTop)
                                //> 100) ? "'" + cn + " black'" : "'" + oblack + "'";
                                > 100) ? mblack : oblack; */
            
            // Set Navitems-padding-top
            for(var i = 0; i < navitems.length; i++) {
                navitems[i].style.paddingTop = 
                        ((window.pageYOffset || document.documentElement.scrollTop)
                            > 50) ? '0' : '12px';
            }    
            // Set Navlinks-padding-top
            for(var i = 0; i < navlinks.length; i++) {
                navlinks[i].style.paddingTop = 
                        ((window.pageYOffset || document.documentElement.scrollTop)
                            > 50) ? '0' : '12px';
            }            
        } else {
            mainnav.style.top = '0';
            if (wname == "white") {
                navlogo.src = 
                        ((window.pageYOffset || document.documentElement.scrollTop)
                                > 50) ? 'fileadmin/private/images/logo_bl.svg' : 'fileadmin/private/images/logo.svg';
            }
        }
        
        
    };

    /* Gotop 
    $('a[href^=#]').on('click', function(scroller)
    {
        alert('Test');
        scroller.preventDefault();
        var ziel = $(this).attr('href');
        $('html,body').animate({scrollTop:$(ziel).offset().top}, 'slow');
    });*/
    
    /**
     * Site Navigation One-Page
     */
    $('#menu_section_btn').click(function() {  
        var list = document.getElementsByClassName("frame-layout-6");        
        for(var i = 0; i < list.length; i++) {
            if (list[i].style.display === '') {               
                $('.frame-layout-6').css('display','block');
                //$('.frame-layout-6 ul').css('left','0');
                if (vwidth < 992) {
                    $('.frame-layout-6 ul ul').css('margin-top','30px');
                } else if (vwidth >= 992 && vwidth < 1600) {
                    $('.frame-layout-6 ul ul').css('margin-top','30px');
                } else {
                    $('.frame-layout-6 ul ul').css('margin-top','0');
                }
            } else {                
                $('.frame-layout-6').css('display','');
                //$('.frame-layout-6 ul').css('left','-30px');
                $('.frame-layout-6 ul ul').css('margin-top','0');
            }
        }        
    });
    $('.frame-layout-6 a').click(function() { 
        $('.frame-layout-6').css('display','');        
    });
    
    /**
     * Site Navigation Sub-Pages
     */
    $('#menu_subpage_btn').click(function() {  
        var list = document.getElementsByClassName("frame-layout-7");        
        for(var i = 0; i < list.length; i++) {
            if (list[i].style.display === '') {               
                $('.frame-layout-7').css('display','block');
                $('.frame-layout-7').css('position','fixed');
                $('.frame-layout-7').css('left','0');
                //$('.frame-layout-7 ul').css('left','0');                
            } else {                
                $('.frame-layout-7').css('display','');
                $('.frame-layout-7').css('position','absolut');               
            }
        }        
    });
    $('.frame-layout-6 a').click(function() { 
        $('.frame-layout-6').css('display','');        
    });

    /**
     * Readmore-Button for contents per jquery
     */
    // Marker vorhanden?
    if($('.content-readmore').length) {
         
        // Alle durchlaufen
        $('.content-readmore').each(function() {
            
           var $button = $(this);
           var $parent = $button.parent();
            
           // Text nach dem Marker wrappen
           $parent.append('<div class="temp-content-readmore-end"></div>');
           $button.nextUntil('.temp-content-readmore-end').wrapAll('<div class="readmore-text" />');
           $('.temp-content-readmore-end',$parent).remove();
            
           // Button ans Ende des Elements setzen
           $button.appendTo($parent);
            
           // Weiterlesen Text holen und Höhe merken 
           var $readMoreText = $parent.find('.readmore-text');
           var height = $readMoreText.height() + 20;
            
           // Höhe auf 0 setzen
           $readMoreText.css('height','0px');
            
           // Ausfahren bei Klick
           $button.click(function() {
               $readMoreText.toggleClass('shown');
                
               // Wir lassen unseren Button nach der Betaetiung verschwinden
               $button.remove();
                
               if($readMoreText.hasClass('shown')) {
                    $readMoreText.css('height',height+'px');                   
               } else {
                   $readMoreText.css('height','0px');
               }
           });
        });
    }

    /* Bootstrap Carousel */    
    $('#carouselNews').carousel({
        /* Disable automatically start */
        interval: false
    }); 
});