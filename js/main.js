(function($) {
    
    const doc = $(document);
    const win = $(window);

    doc.ready(() => {
        if ( $('.annih_carousel').length > 0 ) {
            const aSliders = $('.annih_carousel');
            for(let aSlidersInt = 0; aSlidersInt < aSliders.length; aSlidersInt++) {
                initSliders(aSliders[aSlidersInt], 6000);
            }
        }
    });

    let initSliders = (parElem, speed) => {
        let sliderItems = $(parElem).find(".annih_carousel_item");
        let tabItems = $(parElem).find(".tabItems");
        let sliderInt = 0;
        let sliderMax = $(sliderItems).length;
        let sliderInterval;

        sliderInterval = setInterval(() => {
            if ( sliderInt >= sliderMax ) {
                sliderInt = 0;
            }

            $(sliderItems).removeClass("active");
            $(sliderItems[sliderInt]).addClass("active");

            $(tabItems).removeClass("active");
            $(tabItems[sliderInt]).addClass("active");

            sliderInt++;
        }, speed);
    }

    let checkBrowserFocus = () => {
        if ( document.hasFocus() ) {
            return true;
        } else {
            return false;
        }
    }

})(jQuery);