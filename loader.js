// var myVar;

// function myFunction() {
//   myVar = setTimeout(showPage, 300);
// }

// function showPage() {
//   document.getElementById("mainLoader").style.display = "none";
//   document.getElementById("wholePage").style.display = "block";
// }


window.addEventListener("load", function(){
var load_screen = document.getElementById('mainLoader');
document.body.removeChild(load_screen);
})