var banner_images = document.querySelectorAll("#banner-image");

var i = 0;
const interval = setInterval(function() {
    
    banner_images[i % 4].classList.toggle("hidden");
    i++; 
    banner_images[i % 4].classList.toggle("hidden");

}, 5000);