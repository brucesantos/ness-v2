$(document).ready(function() {
  // mostra apenas a div com o detalhamento do produto clicado
  $('#abre-detalhe-centroOperacoesSeguranca').click(function() {
    $('#centroOperacoesSeguranca').fadeIn();
    $('#conteudo-total').hide();
    $('#fechar-detalhamento').fadeIn();
    $(window).scrollTop(0);
  });
  $('#abre-detalhe-riscoConformidade').click(function() {
    $('#riscoConformidade').fadeIn(); 
    $('#conteudo-total').hide();
    $('#fechar-detalhamento').fadeIn();
    $(window).scrollTop(0);
  });
  $('#abre-detalhe-testePenetracao').click(function() {
    $('#testePenetracao').fadeIn();
    $('#conteudo-total').hide();
    $('#fechar-detalhamento').fadeIn();
    $(window).scrollTop(0);
  });
  $('#abre-detalhe-forenseDigital').click(function() {
    $('#forenseDigital').fadeIn();
    $('#conteudo-total').hide();
    $('#fechar-detalhamento').fadeIn();
    $(window).scrollTop(0);
  });
  $('#abre-detalhe-virtualCiso').click(function() {
    $('#virtualCiso').fadeIn();
    $('#conteudo-total').hide();
    $('#fechar-detalhamento').fadeIn();
    $(window).scrollTop(0);
  });
  $('#abre-detalhe-respostaIncidentes').click(function() {
    $('#respostaIncidentes').fadeIn();
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
