var tpj=jQuery;                  
var revapi486;
tpj(document).ready(function() {
    if(tpj("#rev_slider_one").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_one");
    }else{
        revapi486 = tpj("#rev_slider_one").show().revolution({
		sliderType:"standard",
            jsFileLocation:"plugins/revolution/js/",
            sliderLayout:"auto",
            dottedOverlay:"none",
            delay:15000,
            navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                onHoverStop:"off",
                touch:{
                    touchenabled:"on",
                    touchOnDesktop:"off",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    style:"metis",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:false,
                    tmp:'',
                    left: {
                        h_align:"left",
                        v_align:"center",
                        h_offset:0,
                        v_offset:0
                    },
                    right: {
                        h_align:"right",
                        v_align:"center",
                        h_offset:0,
                        v_offset:0
                    }
                }
                
            },
             responsiveLevels:[1200,1040,802,480],
             visibilityLevels:[1200,1040,802,480],
             gridwidth:[1200,1040,802,480],
             gridheight:[710,600,500,500],
             lazyType:"none",
             parallax: {
                 type:"mouse",
                 origo:"enterpoint",
                 speed:1000,
                 levels:[1,2,3,4,5]
             },
             shadow:0,
             spinner:"off",
             stopLoop:"off",
             stopAfterLoops:-1,
             stopAtSlide:-1,
             shuffle:"off",
             autoHeight:"off",
             hideThumbsOnMobile:"off",
             hideSliderAtLimit:0,
             hideCaptionAtLimit:0,
             hideAllCaptionAtLilmit:0,
             debugMode:false,
             fallbacks: {
                 simplifyAll:"off",
                 nextSlideOnWindowFocus:"off",
                 disableFocusListener:false,
             }
         });
     }


     if(tpj("#rev_slider_two").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_two");
    }else{
        revapi486 = tpj("#rev_slider_two").show().revolution({
        sliderType:"standard",
            jsFileLocation:"plugins/revolution/js/",
            sliderLayout:"auto",
            dottedOverlay:"none",
            delay:15000,
            navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                onHoverStop:"off",
                touch:{
                    touchenabled:"on",
                    touchOnDesktop:"off",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    style:"metis",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:false,
                    tmp:'',
                    left: {
                        h_align:"left",
                        v_align:"center",
                        h_offset:0,
                        v_offset:0
                    },
                    right: {
                        h_align:"right",
                        v_align:"center",
                        h_offset:0,
                        v_offset:0
                    }
                }
                
            },
             responsiveLevels:[1200,1040,802,480],
             visibilityLevels:[1200,1040,802,480],
             gridwidth:[1200,1040,802,480],
             gridheight:[850,600,500,500],
             lazyType:"none",
             parallax: {
                 type:"mouse",
                 origo:"enterpoint",
                 speed:1000,
                 levels:[1,2,3,4,5]
             },
             shadow:0,
             spinner:"off",
             stopLoop:"off",
             stopAfterLoops:-1,
             stopAtSlide:-1,
             shuffle:"off",
             autoHeight:"off",
             hideThumbsOnMobile:"off",
             hideSliderAtLimit:0,
             hideCaptionAtLimit:0,
             hideAllCaptionAtLilmit:0,
             debugMode:false,
             fallbacks: {
                 simplifyAll:"off",
                 nextSlideOnWindowFocus:"off",
                 disableFocusListener:false,
             }
         });
     }
	 
	 
 }); /*ready*/