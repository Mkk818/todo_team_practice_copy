'use strict';

var imglist = new Array(
    "./img/0.png",
    "./img/1.png",
    "./img/2.png",
);
var selectnum = Math.floor(Math.random() * imglist.length);
var output = "<img src=" + imglist[selectnum] + ">";
document.write(output);