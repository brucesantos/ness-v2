$(document).ready(function() {
  // mostra apenas a div com o detalhamento do produto clicado
  $('#abre-detalhe-nFlow').click(function() {
    $('#nFlow').fadeIn();
    $('#conteudo-total').hide();
    $('#fechar-detalhamento').fadeIn();
    $(window).scrollTop(0);
    console.log('porrasdsd');
  });
  // fecha todos os detalhamentos e scrolla para #produtos
  $('#fechar-detalhamento').click(function() {
    $('.detalhamento').fadeOut();
    $('#conteudo-total').show();
    $(this).fadeOut();
    $('html, body').animate({
        scrollTop: $("#produtos").offset().top
    }, 0);
  });
});
