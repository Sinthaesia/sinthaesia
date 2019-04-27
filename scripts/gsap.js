// function buttonFade(){
//   TweenMax.fromTo("#button", 1, {
//     y: -100,
//     opacity: 0
//   });
// }
function buttonFade(){
  TweenMax.to("#button", 1, {
    y: -100,
    opacity: 0
  });
  TweenMax.to(".fade_me_out", 0.5, {
    y: -250,
    opacity: 0,
    // ease: Power2.easeInOut,
    // delay: 0.25
  });
}
