
// Navbar Fixed Top
let navfixed = document.querySelector(".navigation");
window.addEventListener('scroll', () => {
 if(window.pageYOffset > 200){
  navfixed.classList.add("navBarfixed");
 }else{
  navfixed.classList.remove("navBarfixed");
 }
});

// Counter Up of Happy Clients
$(document).ready(function() {
 $('.counter').each(function () {
  $(this).prop('Counter',0).animate({
   Counter: $(this).text()
  }, {
   duration: 3000,
   easing: 'swing',
   step: function (now) {
   $(this).text(Math.ceil(now));
   }
  });
 });
});

// Our Client Review 
$('.client_review').owlCarousel({
     loop:true,
     margin:10,
     nav:true,
     autoplay:true,
     responsive:{
         0:{
             items:1
         },
         480:{
             items:1
         },
         576:{
             items:1
         },
         767:{
             items:2
         },
         991:{
             items:3
         },
         1200:{
             items:3
         }
     }
 })