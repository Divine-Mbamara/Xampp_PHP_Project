$(document).ready(function() {
    $("#meta-data").load("meta.html");
    $("#header").load("header.html");
    $("#footer").load("footer.html");
});
function slideRight(){
    var reveals = document.querySelectorAll(".left");
    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 100;
        if(elementTop < windowHeight - elementVisible){
            reveals[i].classList.add("active");
        }else{
            reveals[i].classList.remove("active");
        }
    }
}
window.addEventListener("scroll", slideRight);

function slideLeft(){
    var reveals = document.querySelectorAll(".right");
    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 100;
        if(elementTop < windowHeight - elementVisible){
            reveals[i].classList.add("active-left");
        }else{
            reveals[i].classList.remove("active-left");
        }
    }
}
window.addEventListener("scroll", slideLeft);