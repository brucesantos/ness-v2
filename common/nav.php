<header>
  <nav>
    <div class="container">

        <div class="logo">
          <a href="index.php">
            <img class="logo-sans-bg" height="32px" src="images/logo-ness-text.svg">
            <img class="logo-sticky" height="32px" src="images/logo-ness-text-blue.svg">
          </a>
        </div>

        <div>
          <ul class="nav">
            <li class="nav-item"><a id="ml-nav-about" class="active link f-16 mx-25" href="index.php">Sobre</a></li>
            <!-- <li class="nav-item">
              <a class="link f-16 mx-25" href="">Verticais</a>
              <ul class="sub-menu">
                <li><a href="health.html">Health</a></li>
                <li><a href="energy.html">Energy</a></li>
                <li><a href="education.html">Education</a></li>
                <li><a href="smart-cities.html">City</a></li>
                <li><a href="legal.html">Law</a></li>
                <li><a href="#">Security</a></li>
              </ul>
            </li> -->
            <li class="nav-item"><a class="link f-16 mx-25" translate="no" href="health.php">Health</a></li>
            <li class="nav-item"><a class="link f-16 mx-25" translate="no" href="law.php">Law</a></li>
            <li class="nav-item"><a class="link f-16 mx-25" href="energy.php">Energy</a></li>
            <li class="nav-item"><a class="link f-16 mx-25" href="security.php">Security</a></li>
            <li class="nav-item"><a class="link f-16 mx-25" href="tech.php">Tech</a></li>
            <li class="nav-item"><a class="contato link f-20 mx-25" href="contato.php"><i class="far fa-comments"></i></a></li>
          </ul>
        </div>

    </div>
  </nav>
</header>

<!-- Navigation Mobile type 2 -->
<a class="open_menu bg-light radius_full"><i class="fas fa-bars lh-40"></i></a>
<a id="loguinho-mobile" href="index.php"><img src="images/logo-ness-text.svg" alt=""></a>
<div class="navigation_mobile bg-light">
	<a class="close_menu op-5"><i class="fas fa-times"></i></a>
	<div class="px-40 pt-60 pb-60 text-center">
		<div><a href="index.php" class="f-heading f-22 link mb-40"> <img src="images/logo-ness-text-blue.svg" alt=""> </a></div>
		<div><a href="index.php" class="f-heading f-22 link mb-20" id="ml-nav-about-mobile">Sobre</a></div>
		<div><a href="health.php" class="f-heading f-22 link mb-20">Health</a></div>
		<div><a href="law.php" class="f-heading f-22 link mb-20">Law</a></div>
		<div><a href="energy.php" class="f-heading f-22 link mb-20">Energy</a></div>
		<div><a href="security.php" class="f-heading f-22 link mb-20">Security</a></div>
		<div><a href="tech.php" class="f-heading f-22 link mb-20">Tech</a></div>

		<!-- links pequenos -->
		<!-- <div><a href="#" class="f-12 link op-7 text-uppercase sp-20 mb-20">Aplicativo Android</a></div>
		<div><a href="#" class="f-12 link op-7 text-uppercase sp-20 mb-20">Aplicativo iPhone</a></div> -->
		<div><a target="_blank" href="https://forms.gle/MZ6dfkLV4RWz43bn7" class="f-12 link op-7 text-uppercase sp-20 mb-20">Jobs</a></div>
		<div><a id="link-contato-mobile" href="contato.php" class="btn action-1">Contato<i class="far fa-comments direita"></i></a></div>

		<!-- links sociais -->
		<div class="socials mt-20 change-lang">
			<a href="https://www.facebook.com/NESSITPROCESS/" target="_blank" class="link f-18 mx-10"><i class="fab fa-facebook"></i></a>
			<a href="https://www.linkedin.com/company/ness-processos-e-tecnologia" target="_blank" class="link f-18 mx-10"><i class="fab fa-linkedin"></i></a>
      <a class="toggle-trad" onclick="$.MultiLanguage('language.json', 'pt')"><img src="images/lang/portuguese.png" alt="portugues"></a>
      <a class="toggle-trad" onclick="$.MultiLanguage('language.json', 'en')"><img src="images/lang/english.png" alt="english"></a>
		</div>
	</div>
</div>
<!-- Header 18 -->

<style media="screen">
  .toggle-trad img {
    height: 24px;
  }
  .toggle-trad {
    opacity: 1 !important;
    margin: -5px 10px;
  }
</style>

<!-- menu de traducao -->
<!-- <ul class="change-lang">
  <a onclick="$.MultiLanguage('language.json', 'pt')">Pt</a>
  <a onclick="$.MultiLanguage('language.json', 'en')">En</a>
</ul> -->
<!-- <style media="screen">
  .change-lang {
    position: fixed;
    z-index: 200;
    bottom: 30px;
    right: 30px;
    background-color: white;
    list-style: none;
    padding: 1em;
    margin: 0;
  }
</style> -->
<!-- menu de traducao -->


<script type="text/javascript">
  $('#link-contato-mobile').click(function() {
    $('.navigation_mobile').removeClass('opened');
  });
</script>

<script src="js/nav.js"></script>
