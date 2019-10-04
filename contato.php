<!DOCTYPE html>
<html lang="pt-BR">

  <?php include("common/head.php"); ?>

<body>

  <!-- Nav -->
  <?php include "common/nav.php" ?>

<div id="particles-js">
</div>

<section class="contact_4 contato-sec pt-50 pb-50">
  <div class="container px-xl-0">
    <div class="row justify-content-center justify-content-lg-between align-items-center mt-100">
      <div class="col-xl-5 col-lg-6 mb-lg-0 mb-50" data-aos-duration="600" data-aos="fade-down" data-aos-delay="100">
        <form id="form-de-contato" action="form-handler.php" method="post" class="bg-light px-50 pt-55 pb-55 radius10">
          <div class="row">
            <div class="col">
              <div class="mb-10 f-14 semibold text-uppercase sp-20">Nome</div>
              <input type="text" name="name" placeholder="Fulano" class="mb-35 input w-full border-gray focus-action-1 color-heading placeholder-heading" required />
            </div>
          </div>
          <div class="mb-10 f-14 semibold text-uppercase sp-20">Email</div>
          <input type="email" name="email" placeholder="fulanoexemplo@email.com" class="mb-35 input w-full border-gray focus-action-1 color-heading placeholder-heading" required />
          <div class="mb-10 f-14 semibold text-uppercase sp-20">Mensagem</div>
          <textarea name="message" placeholder="Gostaria de saber..." class="mb-30 input w-full radius10 border-gray focus-action-1 color-heading placeholder-heading" required></textarea>
          <div class="row justify-content-between align-items-center">
            <div class="col">
              <button class="mt-20 mt-sm-0 btn action-1">Enviar</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-xl-1 col-lg-1"></div>
      <div class="col-xl-6 col-lg-5 col-sm-10 color-white">
        <h2 class="mb-25 small" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">Contato</h2>
        <div class="pb-10 f-22 text-adaptive" style="opacity:.7;" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
          Envie uma mensagem direta através do formulário ou pelos canais abaixo.
        </div>
        <div data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
          <a href="tel:+551125047650" class="mt-45 link color-white d-flex align-items-baseline">
            <i class="w-30 fas fa-phone flex-shrink-0 fa-flip-horizontal f-14 text-right"></i>
            <div class="text-adaptive">
              +55 (11) 2504-7650
            </div>
          </a>
          <a href="mailto:contato@ness.com.br" class="mt-45 link color-white d-flex align-items-baseline">
            <i class="w-30 fas fa-envelope flex-shrink-0"></i>
            <div class="text-adaptive">
              contato@ness.com.br
            </div>
          </a>
          <div class="mt-45 d-flex align-items-baseline">
            <i class="w-30 far fa-building flex-shrink-0"></i>
            <div class="text-adaptive">
              R. Dr. Geraldo Campos Moreira, 240 <br>
              Edifício Ríver Park - 14º Andar <br>
              Cidade Monções - São Paulo/SP <br>
              CEP 04571-020
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="col-xl-1"></div> -->
    </div>
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



<!-- ====================
**** SCRIPTS DE DEPENDENCIAS
===================== -->

<?php include "common/scripts_dependencias.php" ?>


<!-- scripts da pagina -->
<script src="node_modules/particles.js/particles.js"></script>

<script type="text/javascript">
  /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
  particlesJS.load('particles-js', 'node_modules/particles.js/particlesjs-config.json', function() {
    console.log('callback - particles.js config loaded');
  });
</script>


</body>
</html>
