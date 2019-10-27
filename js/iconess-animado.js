$( document ).ready(function() {

  var $circulo = $('.circulo');

  TweenMax.staggerFrom($circulo, 1, {
    delay: .3,
    scale: 0,
    transformOrigin: "50% 50%",
    ease: Back.easeOut.config(1),
  },
  .02);

  // TweenMax.from($('#curva-n'), 3, {
  //   delay: 1.5,
  //   scale: 1,
  //   transformOrigin: "50% 50%",
  //   ease: Elastic.easeOut.config(1, 0.5),
  // },
  // .02);

  TweenMax.from($('#curva-n'), .3, {
    delay: 1.3,
    opacity: 0,
    ease: Power2.easeOut
  });

  TweenMax.staggerTo($circulo, 3, {
    delay: 4,
    scale: 1.1,
    transformOrigin: "50% 50%",
    ease: Elastic.easeOut.config(1, 0.5),
    yoyo:true,
    yoyoEase:true,
    repeat: -1,
    // repeatDelay: 1.8,
  },
  .02);

});
