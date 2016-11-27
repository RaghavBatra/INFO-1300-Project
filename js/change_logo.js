function hover(element) {
    "use strict";
    if (element.id === "fb") {
        element.setAttribute('src', 'images/fb_logo_color.png');
    } else if (element.id === "twitter") {
        element.setAttribute('src', 'images/twitter_logo_color.png');
    } else if (element.id === "instagram") {
        element.setAttribute('src', 'images/instagram_logo_color.png');
    }
}
function unhover(element) {
    "use strict";
    
    if (element.id === "fb") {
        element.setAttribute('src', 'images/fb_logo_bw.png');
    } else if (element.id === "twitter") {
        element.setAttribute('src', 'images/twitter_logo_bw.png');
    } else if (element.id === "instagram") {
        element.setAttribute('src', 'images/instagram_logo_bw.png');
    }
}