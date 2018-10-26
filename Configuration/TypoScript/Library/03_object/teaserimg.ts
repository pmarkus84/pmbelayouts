/*
 *    Project:	PARAT Intranet Konfiguration - PARAT_Intranet_Konfiguration
 *    Version:	1.0.0
 *    Date:		27.10.2017 07:59:33
 *    Author:	Markus Puffer <m.puffer@pm-webdesign.eu> 
 *
 *    Coded with Netbeans!
 */
#page = PAGE
#page.typeNum = 0

#page.10 < styles.content.get
#page.10.select.where = colpos=3
#page.10.renderObj {
#    lib.teaserimg = COA
#    lib.teaserimg {
#        20 = FILES
#        20 {
#            references {
#                table = tt_content
#                uid.data = field:uid
#                fieldName = image        
#            }
#            renderObj = IMAGE
#            renderObj.file.import.data = file:current:uid
#            renderObj.file.treatIdAsReference = 1
#        }
#    }
    lib.teaserimg = CONTENT
    lib.teaserimg {
        wrap = |
        table = tt_content
        select {
                where = colPos=3
                orderBy = sorting                
                #pidInList = 4
        }
        renderObj = COA
        renderObj{
            #wrap = <div class="item">|</div>
            10 = FILES
            10 {
                references {
                    table = tt_content
                    uid.data = uid
                    fieldName = assets
                }
                renderObj = IMG_RESOURCE
                renderObj {
                    #wrap = <div class="item-image">|</div>
                    #file.import.data = file:current:originalUid
                    file.import.data = file:current:originalUid:Uid
                    #params = class="srcSet"
                    #file.width = 100%
                    #file.width = 1920c
                    #file.height = 600c
                }
            }
            20 = TEXT
            #20.wrap = <div class="item-text">|</div>
            20.field = bodytext
        }
    }
#}

## Always show whole image in background:cover for padding-bottom
lib.teaserimagesize = TEXT
#$bgImage is Constant in the Basis-Template
lib.teaserimagesize.value = ({$bgImage.bgImageHeight} * 200) / {$bgImage.bgImageWidth} 
#lib.bgimagesize.value = (lib.teaser.file.bgImageHeight * 100) / lib.teaser.file.bgImageWidth
lib.teaserimagesize.stdWrap.prioriCalc = 1

page.10.variables {
        teaserimagesize < lib.teaserimagesize        
        teaserimage < lib.teaserimg
        #teaserimage = TEXT
        #teaserimage.value = Test
        #bgimage < lib.teaser
        teaserimagewrap < lib.teaserimg
        teaserimagewrap.if.isTrue.data = lib.teaserimg        
}