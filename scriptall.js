// navigation
let searchBtn = document.querySelector('.searchBtn');
let closeBtn = document.querySelector('.closeBtn');
let searchBox = document.querySelector('.searchBox');
let navigation = document.querySelector('.navigation');
let menuToggle = document.querySelector('.menuToggle');
let header = document.querySelector('header');


searchBtn.onclick = function(){
    searchBox.classList.add('active');
    closeBtn.classList.add('active');
    searchBtn.classList.add('active');
    menuToggle.classList.add('hide');
    header.classList.remove('open');

}

closeBtn.onclick = function(){
    searchBox.classList.remove('active')
    closeBtn.classList.remove('active');
    searchBtn.classList.remove('active');
    menuToggle.classList.remove('hide');

}
menuToggle.onclick = function(){
    header.classList.toggle('open');
    searchBox.classList.remove('active')
    closeBtn.classList.remove('active');
    searchBtn.classList.remove('active');
}

// slider
var swiper = new Swiper(".home-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 7500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true,
  });

// review slider

var swiper = new Swiper(".review-slider", {
  loop: true,
  spaceBetween: 20,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },

  breakpoints: {
   0:{
    slidesPreview: 1,
   },
   768: {
    slidesPreview: 2,
   },
   1020:{
    slidesPreview: 3,
   },
  },
});

// animation
AOS.init();


// scroll up bar

let calcScrollValue = () => {
  let scrollProgress = document.getElementById
  ("progress");
  let progressValue = document.getElementById
  ("progress-value");
  let pos = document.documentElement.scrollTop;
  let calcHeight = 
    document.documentElement.scrollHeight - 
    document.documentElement.clientHeight;
  let scrollValue = Math.round((pos * 100) / calcHeight);

  if (pos > 100){
    scrollProgress.style.display = "grid";
  } else {
    scrollProgress.style.display = "none";
  }
  scrollProgress.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;


// slider

var slider = new  Swiper(".swiper2", {
  slidesPerView: 1,
  spaceBetween: 30,
  slidesPerGroup: 1,
  loop: true,
  breakpoints: {  
  '480': {
  slidesPerView: 2,
  spaceBetween: 40,},
  '640': {
  slidesPerView: 3,
  spaceBetween: 50, },
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
      delay: 2000,
  }
});


//food menu btn

filterObjects("all");

function filterObjects(c){
  var x, i;
  x = document.getElementsByClassName("box");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++){
    removeClass(x[i], "show");
    if(x[i].className.indexOf(c) > -1) addClass(x[i], "show")
  }
}

function addClass(element, name){
  var i, arr1, arr2;
  arr1 = element.className.split(" ")
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++){
    if (arr1.indexOf(arr2[i]) == -1){
      element.className += " " + arr2[i];
    }
  }
}

function removeClass(element, name){
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++){
    while (arr1.indexOf(arr2[i]) > -1){
      arr1.splice(arr1.indexOf(arr2[i]), 1)
    }
  }
  element.className = arr1.join(" ");
}

