function toggleR() {
    // var rtPos = window.scrollX + document.querySelector('#slider').getBoundingClientRect().right;
    // var ltPos = window.scrollX + document.querySelector('#slider').getBoundingClientRect().left;
    // var width = rtPos - ltPos;
    var slideview = document.getElementById('slider');
    var pos = window.scrollX + document.querySelector('#slider').getBoundingClientRect().left;
    var wid = window.scrollX + document.querySelector('#slider').getBoundingClientRect().left + window.scrollX + document.querySelector('#slider').getBoundingClientRect().right;
    if (pos >= (wid - (wid + "36.71875"))) {
        slideview.style.left = String( (pos - 355) + "px");
    }
}

function toggleL() {
    // var rtPos = window.scrollX + document.querySelector('#slider').getBoundingClientRect().right;
    // var ltPos = window.scrollX + document.querySelector('#slider').getBoundingClientRect().left;
    // var width = rtPos - ltPos;
    var slideview = document.getElementById('slider');
    var pos = window.scrollX + document.querySelector('#slider').getBoundingClientRect().left;
    if (pos <= "36.71875") {
        slideview.style.left = String( (pos + 235) + "px");
    }
}