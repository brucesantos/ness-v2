

$(document).ready(function() {


  // var paginaAtual = $(location).attr('pathname'); -- teste que eu fiz e nao funciona pq tem um / antes do nome
  var paginaAtual = window.location.href;
  // o jquery pega o valor do pathname

  $('.nav-item a').each(function(){
    // passa por cada item do menu
    if (paginaAtual == this.href) {
      // verifica qual é igual ao pathname
      $(this).addClass('active');
      // adiciona a classe de ativo para o item que é igual
    } else {
      $(this).removeClass('active');
      // remove a classe de ativo pros que não são iguais.
      // isso serve principalemnte pra sobre que tem a classe .active chumbada.
    }
  });


  // Adiciona class active no menu ativo

  // var url = window.location.href;
  // var myMenuLinks = $('.nav a');
  //
  // myMenuLinks.filter(function() {
  //     return this.href == url;
  // }).addClass('active');


});
