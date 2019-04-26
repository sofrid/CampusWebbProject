
var url = document.URL;

// Kod som döljer och visar meny-val
$(document.body).click( function(e) {
    closeDropdowns();

});



$('.login').click( function(e) {
    e.stopPropagation();
});

$('.logout').click( function(e) {
    e.stopPropagation();
});

$('#searchicon').click( function(e) {
    e.stopPropagation();
});

$('.searchfield').click( function(e) {
    e.stopPropagation();
});

$('#utbildningar-click').click( function(e) {
    e.stopPropagation();
});

$('#studenttjänster-click').click( function(e) {
    e.stopPropagation();
});

$('#vägledning-click').click( function(e) {
    e.stopPropagation();
});

$('#kontakt-click').click( function(e) {
    e.stopPropagation();
});

$('.header-nav').click( function(e) {
    e.stopPropagation();
});

$('#usericonactive').click( function(e) {
    e.stopPropagation();
});

function closeDropdowns(){

    $('.header-nav').hide();
    $('#utbildningar-dropdown').hide();
    $('#utbildningar-click').css('color', '#EDF3F9');
    $('#studenttjänster-dropdown').hide();
    $('#studenttjänster-click').css('color', '#EDF3F9');
    $('#vägledning-dropdown').hide();
    $('#vägledning-click').css('color', '#EDF3F9');
    $('#kontakt-dropdown').hide();
    $('#kontakt-click').css('color', '#EDF3F9');

    $('.login').hide();
    $('#usericon').css('color', '#EDF3F9');
    $('.searchfield').hide();
    $('#searchicon').css('color', '#EDF3F9');
    $('.desktoputbildningar').hide();
    $('#menuutb').css('color', '#EDF3F9');
    $('.desktopstudent').hide();
    $('#menustu').css('color', '#EDF3F9');
    $('.desktopvagledning').hide();
    $('#menuvag').css('color', '#EDF3F9');
    $('.desktopkontakt').hide();
    $('#menukon').css('color', '#EDF3F9');

    $('.logout').hide();
}

$('#menu').click( function(e) {
    e.stopPropagation();
});

$('#usericon').click( function(e) {
    e.stopPropagation();
});

$('#menuutb').click( function(e) {
    e.stopPropagation();
});

$('#menustu').click( function(e) {
    e.stopPropagation();
});

$('#menuvag').click( function(e) {
    e.stopPropagation();
});

$('#menukon').click( function(e) {
    e.stopPropagation();
});

$('#schoolicon').click( function(e) {
    e.stopPropagation();
});


$('.header-nav').hide();

$('#menu').click(function() {
    $('.searchfield').hide();
    $('#searchicon').css('color', '#EDF3F9');

    $('.login').hide();
    $('#usericon').css('color', '#EDF3F9');

    $('.header-nav').toggle();
    $('.logout').hide();


});

$('.login').hide();

$('#usericon').click(function(){

    $('.searchfield').hide();

    $('.desktoputbildningar').hide();
    $('#menuutb').css('color', '#EDF3F9');

    $('.desktopstudent').hide();
    $('#menustu').css('color', '#EDF3F9');

    $('.desktopvagledning').hide();
    $('#menuvag').css('color', '#EDF3F9');

    $('.desktopkontakt').hide();
    $('#menukon').css('color', '#EDF3F9');

    $('.header-nav').hide();

    $('#searchicon').css('color', '#EDF3F9');

    $('.login').toggle();
});

$('.logout').hide();

$('#usericonactive').click(function(){

    $('.searchfield').hide();

    $('.desktoputbildningar').hide();
    $('#menuutb').css('color', '#EDF3F9');

    $('.desktopstudent').hide();
    $('#menustu').css('color', '#EDF3F9');

    $('.desktopvagledning').hide();
    $('#menuvag').css('color', '#EDF3F9');

    $('.desktopkontakt').hide();
    $('#menukon').css('color', '#EDF3F9');

    $('.header-nav').hide();

    $('#searchicon').css('color', '#EDF3F9');

    $('.logout').toggle();
});


$('.searchfield').hide();

$('#searchicon').click(function(){

    $('.login').hide();
    $('#usericon').css('color', '#EDF3F9');

    $('.desktoputbildningar').hide();
    $('#menuutb').css('color', '#EDF3F9');

    $('.desktopstudent').hide();
    $('#menustu').css('color', '#EDF3F9');

    $('.desktopvagledning').hide();
    $('#menuvag').css('color', '#EDF3F9');

    $('.desktopkontakt').hide();
    $('#menukon').css('color', '#EDF3F9');

    $('.header-nav').hide();

    $('.logout').hide();

    $('.searchfield').toggle();
});




$('#utbildningar-dropdown').hide();

$('#utbildningar-click').click(function(){
    $('#studenttjänster-dropdown').hide();
    $('#vägledning-dropdown').hide();
    $('#kontakt-dropdown').hide();

    $('#utbildningar-dropdown').toggle();
});


$('#studenttjänster-dropdown').hide();

$('#studenttjänster-click').click(function(){
    $('#vägledning-dropdown').hide();
    $('#kontakt-dropdown').hide();
    $('#utbildningar-dropdown').hide();

    $('#studenttjänster-dropdown').toggle();
});


$('#vägledning-dropdown').hide();

$('#vägledning-click').click(function(){
    $('#kontakt-dropdown').hide();
    $('#utbildningar-dropdown').hide();
    $('#studenttjänster-dropdown').hide();

    $('#vägledning-dropdown').toggle();
});


$('#kontakt-dropdown').hide();

$('#kontakt-click').click(function(){
    $('#utbildningar-dropdown').hide();
    $('#studenttjänster-dropdown').hide();
    $('#vägledning-dropdown').hide();

    $('#kontakt-dropdown').toggle();
});

// Ändrar färg på menyval när användaren klickar på den

$('#utbildningar-click').click(function(){

    $('#studenttjänster-click').css('color', '#EDF3F9');
    $('#vägledning-click').css('color', '#EDF3F9');
    $('#kontakt-click').css('color', '#EDF3F9');


    var color = $('#utbildningar-click').css('color');
    if (color == 'rgb(237, 243, 249)' || color == '#EDF3F9'){
        $('#utbildningar-click').css('color', '#FFB00D');
    }
    if (color == 'rgb(255, 176, 13)' || color == '#FFB00D'){
        $('#utbildningar-click').css('color', '#EDF3F9');
    }
});

$('#studenttjänster-click').click(function(){

    $('#utbildningar-click').css('color', '#EDF3F9');
    $('#vägledning-click').css('color', '#EDF3F9');
    $('#kontakt-click').css('color', '#EDF3F9');

    var color = $('#studenttjänster-click').css('color');
    if (color == 'rgb(237, 243, 249)' || color == '#EDF3F9'){
        $('#studenttjänster-click').css('color', '#FFB00D');
    }
    if (color == 'rgb(255, 176, 13)' || color == '#FFB00D'){
        $('#studenttjänster-click').css('color', '#EDF3F9');
    }
});

$('#vägledning-click').click(function(){

    $('#utbildningar-click').css('color', '#EDF3F9');
    $('#studenttjänster-click').css('color', '#EDF3F9');
    $('#kontakt-click').css('color', '#EDF3F9');

    var color = $('#vägledning-click').css('color');
    if (color == 'rgb(237, 243, 249)' || color == '#EDF3F9'){
        $('#vägledning-click').css('color', '#FFB00D');
    }
    if (color == 'rgb(255, 176, 13)' || color == '#FFB00D'){
        $('#vägledning-click').css('color', '#EDF3F9');
    }
});

$('#kontakt-click').click(function(){

    $('#utbildningar-click').css('color', '#EDF3F9');
    $('#vägledning-click').css('color', '#EDF3F9');
    $('#studenttjänster-click').css('color', '#EDF3F9');

    var color = $('#kontakt-click').css('color');
    if (color == 'rgb(237, 243, 249)' || color == '#EDF3F9'){
        $('#kontakt-click').css('color', '#FFB00D');
    }
    if (color == 'rgb(255, 176, 13)' || color == '#FFB00D'){
        $('#kontakt-click').css('color', '#EDF3F9');
    }
});





// Ändrar färg på sök-ikonen när användaren klickar på den

$('#searchicon').click(function(){

    var color = $('#searchicon').css('color');
    if (color == 'rgb(237, 243, 249)' || color == '#EDF3F9'){
        $('#searchicon').css('color', '#FFB00D');
    }
    if (color == 'rgb(255, 176, 13)' || color == '#FFB00D'){
        $('#searchicon').css('color', '#EDF3F9');
    }
});

// Ändrar färg på användar-ikonen när användaren klickar på den

$('#usericon').click(function(){
    var color = $('#usericon').css('color');
    console.log(color);
    if (color == 'rgb(237, 243, 249)' || color == '#EDF3F9'){
        $('#usericon').css('color', '#FFB00D');
    }
    if (color == 'rgb(255, 176, 13)' || color == '#FFB00D'){
        $('#usericon').css('color', '#EDF3F9');
    }
});

// Ändrar färg på menyvalet utbildningar när användaren klickar

$('#menuutb').click(function(){
    var color = $('#menuutb').css('color');
    if (color == 'rgb(237, 243, 249)' || color == '#EDF3F9'){
        $('#menuutb').css('color', '#FFB00D');
    }
    if (color == 'rgb(255, 176, 13)' || color == '#FFB00D'){
        $('#menuutb').css('color', '#EDF3F9');
    }
    if (url == "http://maedz.win/undersidor/javaStart.php" || url == "http://maedz.win/undersidor/it.php" ){
        $('#menuutb').css('color', '#FFB00D');
    }
});

$('#menustu').click(function(){
    var color = $('#menustu').css('color');
    if (color == 'rgb(237, 243, 249)' || color == '#EDF3F9'){
        $('#menustu').css('color', '#FFB00D');
    }
    if (color == 'rgb(255, 176, 13)' || color == '#FFB00D'){
        $('#menustu').css('color', '#EDF3F9');
    }
});

$('#menuvag').click(function(){
    var color = $('#menuvag').css('color');
    if (color == 'rgb(237, 243, 249)' || color == '#EDF3F9'){
        $('#menuvag').css('color', '#FFB00D');
    }
    if (color == 'rgb(255, 176, 13)' || color == '#FFB00D'){
        $('#menuvag').css('color', '#EDF3F9');
    }
    if (url == "http://maedz.win/undersidor/vagledningen.php"){
        $('#menuvag').css('color', '#FFB00D');
    }
});

$('#menukon').click(function(){
    var color = $('#menukon').css('color');
    if (color == 'rgb(237, 243, 249)' || color == '#EDF3F9'){
        $('#menukon').css('color', '#FFB00D');
    }
    if (color == 'rgb(255, 176, 13)' || color == '#FFB00D'){
        $('#menukon').css('color', '#EDF3F9');
    }


});



// Döljer och visar dropdown
$('.desktoputbildningar').hide();

$('#menuutb').click(function(){
    $('.searchfield').hide();
    $('#searchicon').css('color', '#EDF3F9');

    $('.login').hide();
    $('#usericon').css('color', '#EDF3F9');

    $('.desktopstudent').hide();
    $('#menustu').css('color', '#EDF3F9');

    $('.desktopvagledning').hide();
    $('#menuvag').css('color', '#EDF3F9');

    $('.desktopkontakt').hide();
    $('#menukon').css('color', '#EDF3F9');

    $('.desktoputbildningar').toggle();
});


$('.desktopstudent').hide();

$('#menustu').click(function(){

    $('.searchfield').hide();
    $('#searchicon').css('color', '#EDF3F9');

    $('.login').hide();
    $('#usericon').css('color', '#EDF3F9');


    $('.desktoputbildningar').hide();
    $('#menuutb').css('color', '#EDF3F9');

    $('.desktopvagledning').hide();
    $('#menuvag').css('color', '#EDF3F9');

    $('.desktopkontakt').hide();
    $('#menukon').css('color', '#EDF3F9');


    $('.desktopstudent').toggle();
});


$('.desktopvagledning').hide();

$('#menuvag').click(function(){

    $('.searchfield').hide();
    $('#searchicon').css('color', '#EDF3F9');

    $('.login').hide();
    $('#usericon').css('color', '#EDF3F9');

    $('.desktoputbildningar').hide();
    $('#menuutb').css('color', '#EDF3F9');

    $('.desktopstudent').hide();
    $('#menustu').css('color', '#EDF3F9');

    $('.desktopkontakt').hide();
    $('#menukon').css('color', '#EDF3F9');


    $('.desktopvagledning').toggle();
});


$('.desktopkontakt').hide();

$('#menukon').click(function(){

    $('.searchfield').hide();
    $('#searchicon').css('color', '#EDF3F9');

    $('.login').hide();
    $('#usericon').css('color', '#EDF3F9');

    $('.desktoputbildningar').hide();
    $('#menuutb').css('color', '#EDF3F9');

    $('.desktopstudent').hide();
    $('#menustu').css('color', '#EDF3F9');

    $('.desktopvagledning').hide();
    $('#menuvag').css('color', '#EDF3F9');

    $('.desktopkontakt').toggle();
});




/*

//bildspel
var slideIndex = 0;
showSlides();

function showSlides(){
    var i;
    var slides = document.getElementsByClassName("slide");
    for(i = 0; i <slides.length; i++){
        slides[i].style.display = "none";
    }
    slideIndex++;
    if(slideIndex > slides.length){slideIndex = 1}
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 6000);
}

let sliderImages = document.querySelectorAll('.slide'),
    arrowLeft = document.querySelector('#arrow-left'),
    arrowRight = document.querySelector('#arrow-right'),
    current = 0;

//clear all images
function reset(){
    for (let i=0; i<sliderImages.length; i++){
        sliderImages[i].style.display = 'none';
    }
}

//init slider
function startSlide(){
    reset();
    sliderImages[0].style.display = 'block';
}

// show prev
function slideLeft(){
    reset();
    sliderImages[current - 1].style.display = 'block';
    current--;


}
// show next
function slideRight(){
    reset();
    sliderImages[current +1].style.display = 'block';
    current++;
}

// left arrow click
arrowLeft.addEventListener('click', function(){
    if (current === 0){
        current = sliderImages.length;
    }
    slideLeft()
});
// right arrow click
arrowRight.addEventListener('click', function(){
    if (current === sliderImages.length -1){
        current = -1;
    }
    slideRight();
});
startSlide();







//Bildspel slut

*/


// Ansökningssystem

function addJava(){
    var input = document.getElementById("edu-java");
    localStorage.setItem("java", input.value);
    changecolor();
}

function addIT(){
    var input = document.getElementById("edu");
    localStorage.setItem("IT", input.value);
    changecolor();
}

var IT = localStorage.getItem("IT");
var java = localStorage.getItem("java");


if(IT == 1 || java == 1){
    changecolor();
}

if(IT == 0 && java == 0){
    noColor()
}

function changecolor() {
    console.log("Kör changecolor!");

    $('#schoolicon').css('color', '#ffb00d');
}

// Ikon blir grå
function noColor(){
    console.log("Kör nocolor!");

    $('#schoolicon').css('color', '#EDF3F9');
}

function removeIT(){
    var input = document.getElementById("edu");
    localStorage.setItem("IT", input.value);
    if(compare()){
        noColor();
    }
}

function removeJava(){
    var input = document.getElementById("edu-java");
    localStorage.setItem("java", input.value);
    if(compare()){
        noColor();
    }
}



function compare(){
    var IT = localStorage.getItem("IT");
    var java = localStorage.getItem("java");

    if(IT == 0 && java == 0){
        return true;
    }
}

function send(){
    localStorage.setItem('java', '0');
    localStorage.setItem('IT', '0');
    console.log("Inuti send");
    //window.location.href = "thankyou.php";
}

// Lyser upp menyn beroende på undersida
// URL:erna behöver ändras beroende på lokal sökväg

var url = document.URL;

if (url == "http://maedz.win/undersidor/javaStart.php" || url == "http://maedz.win/undersidor/it.php" ){
    $('#menuutb').css('color', '#FFB00D');
}


if (url == "http://maedz.win/undersidor/vagledningen.php"){
    $('#menuvag').css('color', '#FFB00D');
}














