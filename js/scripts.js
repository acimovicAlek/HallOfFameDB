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
            document.getElementById("pageContainer").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", page, true);
    xhttp.send();
}
window.document.onload = ajaxLoad('home.html');

//Validacija

function validateName (validating, errormsg) {
    var name = document.getElementById(validating).value;
    if(!name.match(/\w{5}/ig)) {
        document.getElementById(errormsg).className = "errormsg";
        return false;
    }else {
        document.getElementById(errormsg).className = "hide";
        return true;
    }
}

function validatePassword (validating, errormsg) {
    var name = document.getElementById(validating).value;
    if(name.match(/^$|\s+/ig)) {
        document.getElementById(errormsg).className = "errormsg";
        return false;
    }else {
        document.getElementById(errormsg).className = "hide";
        return true;
    }
}

function validateLogin(){
    return validateName("username_inp" , "error_username") && validatePassword("password_inp" , "error_password");
}

function validateDescription(validating, errormsg) {
    var name = document.getElementById(validating).value;
    if(!name.match(/^.{20,100}$/ig)) {
        document.getElementById(errormsg).className = "errormsg";
        return false;
    }else {
        document.getElementById(errormsg).className = "hide";
        return true;
    }
}

function validateEmail (validating, errormsg) {
    var name = document.getElementById(validating).value;
    if(!name.match(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i)) {
        document.getElementById(errormsg).className = "errormsg";
        return false;
    }else {
        document.getElementById(errormsg).className = "hide";
        return true;
    }
}

function validateContact(){
    return validateName("name_inp" , "error_name") && validateEmail("mail_inp" , "error_mail") && validateDescription("msg_inp" , "error_msg");
}

function validateCeleb(){
    return validateName("name_inp" , "error_name");
}