### EXTENSIONS
## tx_news
plugin.tx_news {    
    # tx_news: Hide Dummy-Picture
    settings.displayDummyIfNoMedia = 0
    # tx_news: Back-Button
    enableConfigValidation = 0
    dontUseBackPid = 0
    # Set a new partial for categories to make a link to a categorie
    view {
        partialRootPaths {
            100 = {$resDir}/Private/ext/news/Resources/Private/Templates/Styles/Twb/Partials/
        }
        templateRootPaths {
            100 = {$resDir}/Private/ext/news/Resources/Private/Templates/Styles/Twb/Templates/
        }
    }
    ## Set this to PageTS, then you can select various Layouts
    #tx_news.templateLayouts {
    #    1 = A custom layout
    #    99 = LLL:fileadmin/somelocallang/locallang.xlf:someTranslation
    #}
}

## newsslider
plugin.tx_newsslider.view {
    partialRootPaths {
        100 = {$resDir}/Private/ext/newsslider/Resources/Private/Partials/
    }
    templateRootPaths {
        100 = {$resDir}/Private/ext/newsslider/Resources/Private/Templates/
    }
}

## Fluid Content for Headers and so on
lib.contentElement {
    partialRootPaths {        
        100 = {$resDir}/Private/ext/fluid_styled_content/Resources/Private/Partials/
        #99 = fileadmin/private/partials
    }
    templateRootPaths {        
        100 = {$resDir}/Private/ext/fluid_styled_content/Resources/Private/Templates/
        #99 = fileadmin/private/partials
    }
}

# Anchor links
tt_content.stdWrap {
  # Delete old prepend function of CSS Styled Content
  dataWrap = |
  prepend >
  prepend = COA
  prepend {
    # Set a Anchor for every content
    10 = TEXT
    10.dataWrap = <a id="c{field:uid}" class="anchor"></a>
    # Anker aber nur setzen, wenn der Content-Block mit Anker umschlossen werden soll 
    if.isTrue.field = sectionIndex
  }
#  prepend.10 = TEXT
#  prepend.10 {
#    field = header
#    case = lower
#    replacement {
#      # Use Regex to replace all spaces with hyphens
#      10 {
#        search = / /
#        useRegExp = 1
#        replace = -
#      }
#      # Use Regex to remove all unauthorized characters 
#      20 {
#        search = /[^a-zA-Z0-9-]/
#        useRegExp = 1
#        replace = 
#      }
#    }
#    # But only set anchor if the content block should be enclosed with an anchor
#    if.isTrue.field = sectionIndex
#  }
}

# Default PAGE object:
page = PAGE
page {     
        theme.metasection.enable = 0
        typeNum = 0
        config {
            
            ## Typo3 Errormessages (0=on, 1=off)
            contentObjectExceptionHandler = 0
            ## Set DocType to html5 and langKey to DE
            doctype = html5
            
            ## Clean the HTML-Code
            #xhtml_cleaning = all
            ## For development and testing, disable caching
            #no_cache = 1                
            cache = 1
            # For right extension caching
            sendCacheHeaders = 1
            #tx_cooluri_enable = 1

            ## Set local Anker, important for #top functionality
            prefixLocalAnchors = all

            index_enable = 1
            index_externals = 1
            index_metatags = 1
            
            ## REALURL
            #simulateStaticDocuments = 0 #For Extension simulatestatic
            baseURL = {$baseUrl}
            absRelPath = /            
            tx_realurl_enable = 1
            # newer Version for baseURL, important for #top functionality
            absRefPrefix = {$baseUrl}   
            
            
            ## Compress Data
            compressCss = 0
            #compressJs = 1
            ## Merge all files
            concatenateCss = 0
            #concatenateJs = 1

            ## TODO: rlmplanguagedetection
            #987 =< plugin.tx_rlmplanguagedetection_pi1            
        }
        
        #headerData {
        #        10 = TEXT
        #        10 {
        #            #Include Font in the html header
        #            value = <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,400,700" rel="stylesheet">
        #            #value = <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
        #            insertData = 1
        #        }
        #}
}

## Favicon
page.shortcutIcon = {$resDir}/Public/Icons/parat_favicon_512-32x32.png

## Load CSS Files
page.includeCSS {    
    bootstrap = {$resDir}/Public/bootstrap4/css/bootstrap.min.css
    normalize = {$resDir}/Public/Css/normalize.min.css
    #main = {$resDir}/Public/Css/main.css
    navfixed = {$resDir}/Public/Css/Navigation_top_fixed.css
    bs4navbar = {$resDir}/Public/Css/bootstrap-4-navbar.css    
    gotop = {$resDir}/Public/Css/gotop.css    
    style = {$resDir}/Public/Css/style.css    
    txnews = {$resDir}/Public/Css/tx_news.css    
    tvtemp = {$resDir}/Public/Css/site_tv.css    
}

## Load JavaScript
page.includeJS {    
    jquery = {$resDir}/Public/JavaScript/vendor/jquery-1.11.2.min.js
}

page.includeJSlibs {
    modernizr = {$resDir}/Public/JavaScript/vendor/modernizr-2.8.3-respond-1.4.2.min.js   
}

page.includeJSFooterlibs {
    # TODO: Do not run, therefore I set it on includeJS
    #jquery = {$resDir}/Public/JavaScript/vendor/jquery-1.11.2.min.js

    #jquery.forceOnTop = 1
    bootjs = {$resDir}/Public/bootstrap4/js/bootstrap.bundle.min.js
    bs4navbar = {$resDir}/Public/JavaScript/vendor/bootstrap-4-navbar.js
    #Slider-buttons doesn´t run if this is included -> solution in function.js
    smoothjs = {$resDir}/Public/JavaScript/vendor/smoothscroll.js
}

page.includeJSFooter {
    #main = {$resDir}/Public/JavaScript/main.js
    myfunctions = {$resDir}/Public/JavaScript/myfunctions.js
}

page.10 = FLUIDTEMPLATE
page.10 {
    partialRootPaths {
        30 = {$resDir}/Private/Partials 
    }
    layoutRootPaths {
        30 = {$resDir}/Private/Layouts
    }
    #file = {$resDir}/Private/Templates/DefaultTemplate.html

    ## Backend Layouts
    file.stdWrap.cObject = CASE
    file.stdWrap.cObject {
        key.data = levelfield:-1, backend_layout_next_level, slide
        key.override.field = backend_layout

        # Default Template
        default = TEXT
        default.value = {$resDir}/Private/Templates/DefaultTemplate.html
        
        # If BE-Layout is saved in PageTS then "pagets__" must be prefixed to ID. If BE-Layout is saved in DB, then nothing is prefixed to ID.
        # Two columns with Teaser Template
        pagets__2 < .default

        # TV Template
        pagets__3 = TEXT
        pagets__3.value = {$resDir}/Private/Templates/TvTemplate.html
    }

    variables {
        languagesetd = {$languagesetd}
        languagesete = {$languagesete}
        baseUrltext = TEXT
        baseUrltext.value = {$baseUrl}
        baseUrl < lib.absRefPrefix
        teaserBereich < styles.content.get
        teaserBereich.select.where = colPos=3  
        headliner < styles.content.get
        headliner.select.where = colPos=4
        inhalt < styles.content.get
        inhalt.select.where = colPos=0
        sidebar < styles.content.get
        sidebar.select.where = colPos=2
        footer < styles.content.get
        footer.select.where = colPos=1
        languageid = TEXT
#        inhalt < styles.content.get
#        sidebar < styles.content.get
#        sidebar.select.where = colPos = 1
#        sidebar.stdWrap {
#            wrap = <aside>|</aside>
#            required = 1
#        }
    }    
}

page {
    # Default language - German
    config {
        # delimit Languages, otherwise the cache can grow to infinity
        linkVars = L(0-2)
        #uniqueLinkVars = 1
        #defaultGetVars.L = 0
        sys_language_uid = 0
        # contents who are not translated are displayed in default language
        sys_language_overlay = 1
        # if a page is not translated do not change to default language
        sys_language_mode = default
        # needed for language files in extensions
        language = de
        # needed for language spezifical output, example: data format
        locale_all = de_DE.UTF-8  
        #htmlTag_langKey = de
        # Set content for headersite, example: html5 sites
        htmlTag_setParams = lang="de" dir="ltr" class="no-js"
        lib.language.value = Deutsch
        lib.language.typolink.additionalParams = &L=0        
    }
    10.variables.languageid.value = 0
}

# if global param L is 1 (=English):
[globalVar = GP:L = 1]
        page.config {
            sys_language_uid = 1
            language = en
            locale_all = en_UK.UTF-8
            #htmlTag_langKey = en
            htmlTag_setParams = lang="en" dir="ltr" class="no-js"
            #lib.language.value = English
            #lib.language.typolink.additionalParams = &L=1
        }
        page.10.variables.languageid.value = 1
[else]
    page.config.language = default
[end]

## TODO: rlmplanguagedetection
plugin.tx_rlmplanguagedetection_pi1 {
    #useOneTreeMethod = 0
    #multipleTreesRootPages  {
    #   de = 216
    #   en = 120     
    #}
    defaultLang = de
    limitToLanguages = de,en
}

loginPage = PAGE
loginPage  {
    typeNum = 528456
    10 < tt_content.list.20.pmbelayouts_pmbelayouts
 
    config {
        disableAllHeaderCode = 1
        xhtml_cleaning = 0
        admPanel = 0
        additionalHeaders = Content-type:application/octet-stream
    }
}