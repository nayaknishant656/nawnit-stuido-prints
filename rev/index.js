var swiper = new Swiper(".mySwiper", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: true,
  stopOnLast: true,
  autoplay: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: true,
  },
});
var swiper = new Swiper(".mySwiper2", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  spaceBetween: 2,
  slidesPerView: 3,
  slideToClickedSlide: true,
  loopedSlides: true,
  //   autoplay: {
  //     delay: 3000,
  //     disableOnInteraction: true,
  // },
});

var swiper = new Swiper(".mySwiper3", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  // loop: true,
  spaceBetween: 3,
  slidesPerView: 3,
  slideToClickedSlide: true,
  // loop: true,
  loopedSlides: 2,
  //   autoplay: {
  //     delay: 5000,
  //     disableOnInteraction: true,
  // },
});

function myFunction() {
  console.log("clicked");
  document.getElementById("toggle_bx").style.display = "block";
}

$(document).ready(function () {
  $("#toggle_btn").click(function () {
    $("#toggle_bx").slideToggle(200);
  });

  $("#toggle_btn2").click(function () {
    $("#toggle_bx2").slideToggle(200);
  });


  $("#toggle_btn3").click(function () {
    $("#toggle_bx3").slideToggle(200);
  });

  $("#toggle_btn4").click(function () {
    $("#toggle_bx4").slideToggle(200);
  });


  $("#toggle_btn5").click(function () {
    $("#toggle_bx5").slideToggle(200);
  });

  $("#toggle_btn6").click(function () {
    $("#toggle_bx6").slideToggle(200);
  });


  $("#toggle_btn7").click(function () {
    $("#toggle_bx7").slideToggle(200);
  });

  $("#toggle_btn8").click(function () {
    $("#toggle_bx8").slideToggle(200);
  });

  $("#toggle_btn9").click(function () {
    $("#toggle_bx").slideToggle(200);
  });



});

$("#togglebtn2").on('mouseenter', function () {
  $("#toggleboxa2").slideToggle(100);
});

$("#togglebtn3").on('mouseenter', function () {
  $("#toggleboxa3").slideToggle(100);
});
$("#togglebtn4").on('mouseenter', function () {

  $("#toggleboxa4").slideToggle(100);
});
$("#togglebtn5").on('mouseenter', function () {

  $("#toggleboxa5").slideToggle(100);
});
$("#togglebtn6").on('mouseenter', function () {

  $("#toggleboxa6").slideToggle(100);
});
$("#togglebtn7").on('mouseenter', function () {
  $("#toggleboxa7").slideToggle(100);
});

$("#togglebtn2").on('mouseleave', function () {

});

let buttonfa = document.getElementById("buttonfa");
let buttonfacl  = document.getElementById("butttofacl");

buttonfacl.addEventListener("click" ,  function clickonbutton() {
  document.getElementById("navigation").style.transform = "translateX(100%)";
});

buttonfa.addEventListener("click" ,  function clickonbutton() {

  document.getElementById("navigation").style.transform = "translateX(0%)";
});

function click() {
  document.querySelector(".navigation").style.backgroundColor = "red";
  console.log("nishant");
}