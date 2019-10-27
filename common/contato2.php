<div class="botaum-modal-de-contato">
  <a id="abre-modal-de-contato"></a>
</div>


<!-- Contact 2 -->
<section id="contato" class="contact_2">
  <div class="toggle-do-contato">
    <a id="abre-contato"><i class="fas fa-times"></i></a>
    <!-- <a id="fecha-contato"><i class="fas fa-times"></i></a> -->
  </div>
  <div class="container-do-conteudo">
    <div class="header-do-contato">
      <h3 class="">Entre em Contato</h3>
      <!-- <a href="#"><i class="fas fa-times"></i></a> -->
    </div>
    <form action="form-handler.php" method="post">
      <div class="mensagem">
        <textarea name="message" placeholder="Sua mensagem" class="input w-full border-gray focus-action-1 color-heading placeholder-heading text-left" required></textarea>
      </div>
      <div class="d-flex">
        <div class="mr-10">
          <input type="email" name="email" placeholder="Seu email" class="input w-full border-gray focus-action-1 color-heading placeholder-heading text-center text-sm-left" required />
        </div>
        <div class="">
          <button class="btn w-full action-1"><i class="fas fa-paper-plane"></i></button>
        </div>
      </div>
    </form>
  </div>
</section>


<!-- forms alerts -->
<div class="alert alert-success alert-dismissible alert-form-success" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	Obrigado pela sua mensagem!
</div>
<div class="alert alert-warning alert-dismissible alert-form-check-fields" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	Preencha todos os campos.
</div>
<div class="alert alert-danger alert-dismissible alert-form-error" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	Ocorreu um erro ao enviar sua mensagem :(
</div>

<script type="text/javascript">
  $(".toggle-do-contato a").click(function(){
    $("#contato").toggleClass("aberto");
    console.log('togle working');
  });
</script>
