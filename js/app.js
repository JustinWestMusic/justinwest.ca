$(document).foundation();


(function()
{
	"use strict";
	
//---NAV---	
	
var open = document.querySelector("#open");
var close = document.querySelector("#close");
var menu = document.querySelector("#menu");
	

function openNav() 
{
    menu.style.height = "100%";
}

function closeNav() 
{
    menu.style.height = "0%";
}
	
open.addEventListener("click", openNav, false);
close.addEventListener("click", closeNav, false);
	
})();
