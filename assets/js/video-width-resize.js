var $allVideos=jQuery("iframe"),$fluidEl=jQuery(".content-text p");$allVideos.each(function(){jQuery(this).data("aspectRatio",this.height/this.width).removeAttr("height").removeAttr("width")}),jQuery(window).resize(function(){var t=$fluidEl.width();window.innerWidth>780&&(t/=2),$allVideos.each(function(){var i=jQuery(this);i.width(t).height(t*i.data("aspectRatio"))})}).resize();