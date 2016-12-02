var index =0;
var pic = ["photo1.jpg", "photo2.jpg", "photo3.jpg", "photo4.jpg"];
var n= pic.length;
// functions
// function to get next imagee
function next() {
    "use strict";
    if (index == n-1){
        index =0;
    }
    else {
        index = index +1;
    }
    var main = document.getElementById('slides');
    main.src = 'images/' + pic[index];
}
// function to get previous imagee
function previous() {
    "use strict";
    if (index == 0) {
        index = n-1;
    }
    else {
        index = index-1;
    }
    var main = document.getElementById('slides');
    main.src = 'images/' + pic[index];
}

