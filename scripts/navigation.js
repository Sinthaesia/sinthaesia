// $('.menu-toggle').click(function() {
//
//   $('.menu-toggle').fadeOut("fast");
// });

$('ul li').click(function() {
  $(this).siblings().removeClass('active');
  $(this).toggleClass('active');
});


// var $hamburger = $(".hamburger");
//
// $hamburger.on("click", function(e) {
//   $hamburger.toggleClass("is-active");
//   // $('nav').animate({left: "0%"}, 250);
// });
//
// $hamburger.on("click", function(e) {
//   event.preventDefault();
//   $('nav').toggle(function() {
//      $(this).animate({
//        width: '100vw'
//      }, 300);
//      },
//      function() {
//      $(this).animate({
//        width: '100vw'
//      }, 300);
//   });
// });


// // Look for .hamburger
//   var hamburger = document.querySelector(".hamburger");
//   // On click
//   hamburger.addEventListener("click", function() {
//     // Toggle class "is-active"
//     hamburger.classList.toggle("is-active");
//     ('nav').animate({left: "0%"}, 250);
//   });

  var $hamburger = $(".hamburger");
  $hamburger.on("click", function(e) {
    $hamburger.toggleClass("is-active");
    $('nav').toggleClass('is__active');
  });

  var $active = $(".hamburger--emphatic.is__active");
  $active.on("click", function(e) {
    // $active.toggleClass("is__closed");
    $('nav').animate({right: "0%"}, 250);
  });

//
// $hamburger.toggle(
//     function(){
//         $('nav').animate({
//             left: "0%"
//         }, 500);
//     },
//     function(){
//         $('nav').animate({
//             height: "-100%"
//         }, 500);
// });
