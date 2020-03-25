<!DOCTYPE html>
<html lang="pt-BR">

  <?php include("common/head.php"); ?>

  <!-- arquivo de traducao da pagina em questao -->
  <!-- é necessario tmb a parte do script no final da página que tem os links para os arquivos de tradução -->
  <script>
    $(document).ready(function(){
      $.MultiLanguage("language-law.json");
    })
  </script>

<body>


<body id="law">

<!-- ==================================== -->
<!-- CONTEUDO DA TELA FORA OS MODAIS -->
<!-- ==================================== -->

<!-- >>>>>>>>>>>>>>>> inicio do conteudo total -->
<div id="conteudo-total">

	<!-- Nav -->
  <?php include "common/nav.php" ?>

  <section id="capa-law" class="capa-da-vertical">
    <div class="conteudo-da-capa">
      <img class="img-logo-da-capa" src="images/verticais/vertical-ness-law.svg" alt="logo da vertical jurídica da ness" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
      <h1 id="ness-law-page-title" class="tagline-da-capa" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
        Soluções especializadas na vertical jurídica
      </h1>
    </div>
  </section>

		<!-- Content 3 -->
    <section class="content_3 bg-light pt-105 pb-85" style="overflow:hidden;">
      <div class="container px-xl-0">
        <div class="row align-items-center">
          <div class="col-xl-5 col-lg-6 col-sm-8">
            <h2 class="destaque-no-fundo-claro small" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">Simplificando o digital</h2>
            <div class="mt-30 mb-75 f-22 color-heading op-7 text-adaptive description" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
              <p>Você já ouviu falar das lawtechs?</p>
              <p>Assim como as fintechs - combinação de finanças e tecnologias - estão transformando o setor financeiro e bancário no Brasil, as lawtechs estão ganhando força no mercado jurídico.</p>
              <p>Desse modo, a NESS Law proporciona soluções especializadas com base tecnológica para o setor jurídico.</p>
            </div>
            <!-- <div class="mb-50 block" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
              <div class="destaque-no-fundo-claro mb-15 f-14 semibold text-uppercase sp-20 title">
                Expertises no setor jurídico:
              </div>
              <div class="color-heading op-7 text-adaptive">
                <ul>
                  <li>Reestruturação de Processos</li>
                  <li>Engenharia e desenvolvimento de software</li>
                  <li>Machine Learning e Inteligência Artificial</li>
                  <li>Suporte e Infraestrutura de TI</li>
                  <li>Cybersegurança</li>
                </ul>
              </div>
            </div> -->
          </div>
          <div class="col-xl-7 col-lg-6 col-sm-4" data-aos-duration="600" data-aos="fade-down" data-aos-delay="800">
            <img src="images/law/ness-law-sobre.png" class="bg" alt=""/>
          </div>
        </div>
      </div>
    </section>

	<!-- Feature 47 -->

	<section id="produtos" class="feature_47 pt-105 pb-70 color-white">
		<div class="container px-xl-0">
			<h2 class="mb-65 text-center destaque-no-fundo-escuro" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">Plataformas digitais</h2>
      <div class="text-center mb-75 f-22 text-adaptive description" data-aos-duration="600" data-aos="fade-down" data-aos-delay="100" style="opacity:.8;">
				Soluções inovadoras e transformadoras com alto <strong>impacto</strong> na vertical <strong>jurídica</strong>.
			</div>
			<div class="row justify-content-center text-center text-md-left">
				<div class="mb-30 col-md-6 col-sm-8 d-flex align-items-stretch" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
					<a id="abre-detalhe-portalIniciais" class="pt-35 pb-45 pl-40 pr-30 radius10 block">
						<h4 class="mb-20">Portal de Iniciais</h4>
						<div class="text-adaptive">
							Automação do fluxo de recebimento de processos, extração de informações, análise inteligente das iniciais e cadastro de processos integrado aos sistemas dos clientes e tribunais.
						</div>
					</a>
				</div>
        <div class="mb-30 col-md-6 col-sm-8 d-flex align-items-stretch" data-aos-duration="600" data-aos="fade-down" data-aos-delay="100">
					<a id="abre-detalhe-peticionamentoEletronico" class="pt-35 pb-45 pl-40 pr-30 radius10 block">
						<h4 class="mb-20">Peticionamento Eletrônico</h4>
						<div class="text-adaptive">
							Gestão do fluxo de peticionamento eletrônico de forma customizada, automática e integrada aos sistemas dos clientes e tribunais.
						</div>
					</a>
				</div>
      </div>
      <div class="row justify-content-center text-center text-md-left">
				<!-- <div class="mb-30 col-md-6 col-sm-8 d-flex align-items-stretch" data-aos-duration="600" data-aos="fade-down" data-aos-delay="200">
					<a id="abre-detalhe-mediacaoConciliacao" class="pt-35 pb-45 pl-40 pr-30 radius10 block">
						<h4 class="mb-20">Mediação e Conciliação</h4>
						<div class="text-adaptive">
              Gestão do fluxo de peticionamento eletrônico de forma customizada, automática e integrada aos sistemas dos clientes e tribunais.
						</div>
					</a>
				</div> -->
				<div class="mb-30 col-md-6 col-sm-8 d-flex align-items-stretch" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
					<a id="abre-detalhe-solucaoConflitos" class="pt-35 pb-45 pl-40 pr-30 radius10 block">
						<h4 class="mb-20">Solução de Conflitos</h4>
						<div class="text-adaptive">
							Uma plataforma para solução de conflitos, de forma integrada aos sistemas dos clientes e dos tribunais.
						</div>
					</a>
				</div>
      </div>

		</div>
	</section>



	<!-- FOOTER -->
	<?php include "common/footer.php" ?>


</div>
<!-- <<<<<<<<<<<<<<<<< fim do conteudo total -->

<!-- ===============================
PRODUTOS - DETALHAMENTO DE TELA CHEIA
=============================== -->

<a id="fechar-detalhamento">
	<i class="fas fa-times"></i>
</a>

<!-- Portal de Iniciais -->
<section id="portalIniciais" class="detalhamento">
  <div class="container-flex header-do-detalhamento">
    <div class="row logo-do-produto" data-aos-duration="600" data-aos="fade-down" data-aos-delay="100">
      <div class="espaco-branco-cima"></div>
      <h2 class="destaque-no-fundo-claro mt-20" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">Portal de Iniciais</h2>
    </div>
    <div style="margin:-2px auto 100px; width: 100%; overflow-x:hidden;">
      <img src="images/img-bottom-curve.svg" style="width:110%; margin-left:-5%;">
    </div>
  </div>
	<div class="container">
		<div class="row align-items-center mb-50">
			<div class="col-xl-5 col-lg-6 col-sm-8">
				<div class="mt-30 mb-75 op-7 description" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
					<p class="f-20 text-adaptive">
            Uma solução para escritórios de advocacia e empresas com grande volume de processos. <br>
            Para dar celeridade, reduzir custos e evitar erros humanos relacionados ao fluxo de entrada dos processos através da automação do recebimento, análise das iniciais e cadastro dos processos no sistema do cliente.
          </p>
				</div>
			</div>
			<div class="col-xl-7 col-lg-6 col-sm-4" data-aos-duration="600" data-aos="fade-down" data-aos-delay="1200">
				<img src="images/law/portal-iniciais-02.png" class="bg" alt="" width="1000" />
			</div>
		</div>
	</div>
  <div style="margin:-2px auto 0; width: 100%; overflow-x:hidden;">
    <img src="images/img-top-curve.svg" style="width:110%; margin-left:-5%;">
  </div>
  <section class="feature_8 bg-light pt-105 pb-100">
  	<div class="container px-xl-0">
  		<h2 class="mb-50 small text-lg-center destaque-no-fundo-claro" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">Características</h2>
  		<div class="row">
  			<div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-gavel f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Integrado aos tribunais</div>
  					<div class="color-heading op-7 text-adaptive">
  						Integração com os tribunais, automatizando a aquisição dos dados dos processos.
            </div>
  				</div>
  			</div>
  			<div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-plug f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Conectado ao seu sistema</div>
  					<div class="color-heading op-7 text-adaptive">
  						Transfere as informações obtidas diretamente para o sistema usado no escritório, sem a necessidade de criar um novo fluxo de trabalho.
            </div>
  				</div>
  			</div>
  			<div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="900">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-file-alt f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Captura de Iniciais</div>
  					<div class="color-heading op-7 text-adaptive">
  						Além das informações básicas, capturamos as cópias integrais dos processos, garantindo uma fonte confiável e consolidada dos dados.
            </div>
  				</div>
  			</div>
  			<div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-robot f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Inteligência Artificial</div>
  					<div class="color-heading op-7 text-adaptive">
  						Utilizamos Inteligência Artificial e Machine Learning para a extração de Informações e classificação automática dos objetos.
            </div>
  				</div>
  			</div>
  			<div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-microchip f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Automação do cadastro</div>
  					<div class="color-heading op-7 text-adaptive">
  						Utilizando apenas o número, cadastramos automaticamente o processo com os dados obtidos, sem desperdício de horas de trabalho.
            </div>
  				</div>
  			</div>
  			<div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="900">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-drafting-compass f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Workflow sob medida</div>
  					<div class="color-heading op-7 text-adaptive">
  						Cada escritório tem o seu fluxo de trabalho e necessidades particulares, sabendo disso, a nossa plataforma é modular e customizada para seu escritório.
            </div>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
</section>

<!-- Peticionamento Eletronico -->
<section id="peticionamentoEletronico" class="detalhamento pb-100">
  <div class="container-flex header-do-detalhamento">
    <div class="row logo-do-produto" data-aos-duration="600" data-aos="fade-down" data-aos-delay="100">
      <div class="espaco-branco-cima"></div>
      <h2 class="destaque-no-fundo-claro mt-20" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">Peticionamento Eletrônico</h2>
    </div>
    <div style="margin:-2px auto 100px; width: 100%; overflow-x:hidden;">
      <img src="images/img-bottom-curve.svg" style="width:110%; margin-left:-5%;">
    </div>
  </div>
	<div class="container px-xl-0 mb-50">
		<div class="row justify-content-between">
			<div class="col-xl-5 col-lg-6 col-sm-8">
				<div class="mt-80 mb-75 op-7 description" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
          <p class="f-20 text-adaptive">
            Uma solução para escritórios de advocacia e empresas com grande volume de processos.
          </p>
          <p class="f-20 text-adaptive">
            Para dar agilidade ao processo de peticionamento nos tribunais, garantindo a segurança, evitando retrabalho e reduzindo custos de backoffice.
          </p>
          <p class="f-20 text-adaptive">
            Tudo isso através de um local único para realização dessa atividade de forma segura, integrada aos sistemas dos clientes e tribunais, com regras de workflow customizadas.
          </p>
				</div>
			</div>
			<div class="col-xl-7 col-lg-6 col-sm-4" data-aos-duration="600" data-aos="fade-down" data-aos-delay="1200">
				<img src="images/law/peticionamento-02.png" class="bg" alt="" width="1000" />
			</div>
		</div>
	</div>
  <div style="margin:-2px auto 0; width: 100%; overflow-x:hidden;">
    <img src="images/img-top-curve.svg" style="width:110%; margin-left:-5%;">
  </div>
  <section class="feature_8 bg-light pt-105 pb-100">
  	<div class="container px-xl-0">
  		<h2 class="mb-50 small text-lg-center destaque-no-fundo-claro" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">Características</h2>
  		<div class="row">
  			<div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-gavel f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Integrado aos tribunais</div>
  					<div class="color-heading op-7 text-adaptive">
  						Integração com os tribunais, automatizando o fluxo de trabalho.
            </div>
  				</div>
  			</div>
  			<div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-plug f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Conectado ao seu sistema</div>
  					<div class="color-heading op-7 text-adaptive">
  						Obtém as informações diretamente do sistema usado no escritório, sem a necessidade de criar um novo fluxo de trabalho.
            </div>
  				</div>
  			</div>
  			<div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="900">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-file-upload f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Peticionamento único</div>
  					<div class="color-heading op-7 text-adaptive">
  						A integração com os tribunais torna o peticionamento simples, feito em local único sem a curva de aprendizado de cada sistema.
            </div>
  				</div>
  			</div>
  			<div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-file-archive f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Adaptação dos documentos</div>
  					<div class="color-heading op-7 text-adaptive">
  						A plataforma realiza o ajuste automático dos documentos para peticionar, adequando-os as regras de cada tribunal.
            </div>
  				</div>
  			</div>
        <div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="900">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-drafting-compass f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Workflow sob medida</div>
  					<div class="color-heading op-7 text-adaptive">
  						Cada escritório tem o seu fluxo de trabalho e necessidades particulares, sabendo disso, a nossa plataforma é modular e customizada para seu escritório.
            </div>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
</section>

<!-- Solução de Conflitos -->
<section id="solucaoConflitos" class="detalhamento pb-100">
  <div class="container-flex header-do-detalhamento">
    <div class="row logo-do-produto" data-aos-duration="600" data-aos="fade-down" data-aos-delay="100">
      <div class="espaco-branco-cima"></div>
      <h2 class="destaque-no-fundo-claro mt-20" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">Solução de Conflitos</h2>
    </div>
    <div style="margin:-2px auto 100px; width: 100%; overflow-x:hidden;">
      <img src="images/img-bottom-curve.svg" style="width:110%; margin-left:-5%;">
    </div>
  </div>
	<div class="container px-xl-0 mb-50">
		<div class="row justify-content-between">
			<div class="col-xl-5 col-lg-6 col-sm-8">
				<div class="mt-30 mb-75 op-7 description" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
          <p class="f-20 text-adaptive">
            Solução voltada para tribunais de justiça, instituições e câmaras com atuação na resolução de conflitos.
          </p>
          <p class="f-20 text-adaptive">
            Com o objetivo de melhorar a gestão e comunicação com os facilitadores (mediadores, conciliadores, etc), reduzindo a inadimplência nas sessões e permitindo a avaliação e reconhecimento dos mesmos.
          </p>
          <p class="f-20 text-adaptive">
            Isso se viabiliza por meio de uma plataforma que  consolida as informações dos facilitadores, gerencia a agenda e sessões de mediação ou conciliação.
          </p>
				</div>
			</div>
			<div class="col-xl-7 col-lg-6 col-sm-4" data-aos-duration="600" data-aos="fade-down" data-aos-delay="1200">
				<img src="images/law/solucao-conflitos-02.png" class="bg" alt="" width="1000" />
			</div>
		</div>
	</div>
  <div style="margin:-2px auto 0; width: 100%; overflow-x:hidden;">
    <img src="images/img-top-curve.svg" style="width:110%; margin-left:-5%;">
  </div>
  <section class="feature_8 bg-light pt-105 pb-100">
  	<div class="container px-xl-0">
  		<h2 class="mb-50 small text-lg-center destaque-no-fundo-claro" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">Características</h2>
  		<div class="row">
  			<div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-gavel f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Integrado aos tribunais</div>
  					<div class="color-heading op-7 text-adaptive">
  						Integração com os tribunais, automatizando a aquisição dos dados dos processos.
            </div>
  				</div>
  			</div>
  			<div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-plug f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Conectado ao seu sistema</div>
  					<div class="color-heading op-7 text-adaptive">
  						Transfere as informações obtidas diretamente para o sistema usado, sem a necessidade de criar um novo fluxo de trabalho.
            </div>
  				</div>
  			</div>
  			<div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="900">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-video f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Sessões online</div>
  					<div class="color-heading op-7 text-adaptive">
  						Síncronas e Assíncronas, ou seja, sessões ao vivo e gravadas.
            </div>
  				</div>
  			</div>
  			<div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-robot f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Inteligência Artificial</div>
  					<div class="color-heading op-7 text-adaptive">
  						Utilizamos Inteligência Artificial para a realização de acordos automatizados, de acordo com regras definidas.
            </div>
  				</div>
  			</div>
  			<div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-chart-pie f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Dashboard de gestão</div>
  					<div class="color-heading op-7 text-adaptive">
  						Acompanhamento dos indicadores de performance e visualização mais prática dos dados.
            </div>
  				</div>
  			</div>
  			<div class="mb-40 col-md-6 col-lg-4 d-flex align-items-baseline" data-aos-duration="600" data-aos="fade-down" data-aos-delay="900">
  				<div class="ml-15 w-30 mr-15 flex-shrink-0 text-lg-center icon">
  					<i class="fas fa-drafting-compass f-22 destaque-no-fundo-claro"></i>
          </div>
  				<div class="inner">
  					<div class="mb-20 f-14 semibold text-uppercase sp-20 title">Workflow sob medida</div>
  					<div class="color-heading op-7 text-adaptive">
  						Plataforma é modular e customizada para o fluxo de trabalho que já existe.
            </div>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
</section>



<!-- ====================
**** SCRIPTS DE DEPENDENCIAS
===================== -->

<?php include "common/scripts_dependencias.php" ?>


<!-- ====================
**** SCRIPTS CUSTOMIZADOS DA PAGINA
===================== -->

<!-- mostra e esconde produtos -->
<script src="js/law.js"></script>

<!-- links para os arquivos de tradução de cada página -->
<script type="text/javascript">
  $( "#toggle-trad-pt" ).click(function() {
    $.MultiLanguage('language-law.json', 'pt');
  });
  $( "#toggle-trad-pt-mob" ).click(function() {
    $.MultiLanguage('language-law.json', 'pt');
  });
  $( "#toggle-trad-en" ).click(function() {
    $.MultiLanguage('language-law.json', 'en');
  });
  $( "#toggle-trad-en-mob" ).click(function() {
    $.MultiLanguage('language-law.json', 'en');
  });
</script>

</body>
</html>
