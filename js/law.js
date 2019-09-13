$(document).ready(function() {
  // mostra apenas a div com o detalhamento do produto clicado
  $('#abre-detalhe-portalIniciais').click(function() {
    $('#portalIniciais').fadeIn();
    $('#conteudo-total').hide();
    $('#fechar-detalhamento').fadeIn();
    $(window).scrollTop(0);
  });
  $('#abre-detalhe-peticionamentoEletronico').click(function() {
    $('#peticionamentoEletronico').fadeIn();
    $('#conteudo-total').hide();
    $('#fechar-detalhamento').fadeIn();
    $(window).scrollTop(0);
  });
  $('#abre-detalhe-mediacaoConciliacao').click(function() {
    $('#mediacaoConciliacao').fadeIn();
    $('#conteudo-total').hide();
    $('#fechar-detalhamento').fadeIn();
    $(window).scrollTop(0);
  });
  $('#abre-detalhe-solucaoConflitos').click(function() {
    $('#solucaoConflitos').fadeIn();
    $('#conteudo-total').hide();
    $('#fechar-detalhamento').fadeIn();
    $(window).scrollTop(0);
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
