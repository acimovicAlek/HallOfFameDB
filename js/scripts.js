"use strict";
//Galery
function openImage(imageSource) {
    var image = document.getElementById("image_container");
    var container = document.getElementById("image_container_div");
    image.src = imageSource;
    document.getElementById("image_show").style.display = 'block';
    var width = parseInt(document.body.clientWidth, 10) - parseInt(container.offsetWidth, 10);
    console.log(width);
    container.style.marginLeft = width / 2 + "px";
}

function closeImage() {
    document.getElementById("image_show").style.display = 'none';
}

var close = function (event) {
    if (event.keyCode == 27) { 
        closeImage();
    }
};

window.onkeydown = close;

//AjaxLoad
function ajaxLoad(page) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("pageContainer").innerHTML = this.resoponseText;
        }
    };
    xhttp.open("GET", page, true);
    xhttp.send();
}
window.onload = ajaxLoad('home.html');