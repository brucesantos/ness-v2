$( document ).ready(function() {

  var $circulo = jQuery('.circulo');

  TweenMax.staggerFromTo($circulo, 2, {
    repeat: -1,
    scale: .9,
    ease: Elastic.easeOut.config(1, 0.5),
    transformOrigin: "50% 50%"
  },
  {
    repeat: -1,
    scale: 1.1,
    ease: Elastic.easeOut.config(1, 0.5),
    transformOrigin: "50% 50%"
  },
  .01);

});
