<footer>
  <div class="footer-container d-flex align-items-center flex-column justify-content-center">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-3 conteudo-footer">
          <div class="fw-700 fs-26 d-flex align-items-center titulo-footer">
            <img src="assets/images/seta-vermelha.svg" alt="seta abrir/fechar conteudo" class="d-block d-lg-none">
            <h2>Institucional</h2>
          </div>
          <div class="fw-300 fs-18 link-footer">
            <a href="">Sobre nós</a>
            <a href="">Onde atuamos</a>
            <a href="">Trabalhe conosco</a>
            <a href="">Clientes</a>
          </div>
        </div>
        <div class="col-12 col-lg-3 conteudo-footer">
          <div class="fw-700 fs-26 d-flex align-items-center titulo-footer">
            <img src="assets/images/seta-vermelha.svg" alt="seta abrir/fechar conteudo" class="d-block d-lg-none">
            <h2>Contato</h2>
          </div>
          <div class="fw-300 fs-18 link-footer">
            <a href="">Fale conosco</a>
            <a href="">Onde atuamos</a>
            <a href="">Trabalhe conosco</a>
          </div>
        </div>
        <div class="col-12 col-lg-3 conteudo-footer">
          <div class="fw-700 fs-26 d-flex align-items-center titulo-footer">
            <img src="assets/images/seta-vermelha.svg" alt="seta abrir/fechar conteudo" class="d-block d-lg-none">
            <h2>Conteúdos</h2>
          </div>
          <div class="fw-300 fs-18 link-footer">
            <a href="">Downloads</a>
            <a href="">Eventos</a>
            <a href="">Blog</a>
          </div>
        </div>
        <div class="col-12 col-lg-3 conteudo-footer">
          <div class="fw-700 fs-26 d-flex align-items-center titulo-footer">
            <img src="assets/images/seta-vermelha.svg" alt="seta abrir/fechar conteudo" class="d-block d-lg-none">
            <h2>Soluções e Serviços</h2>
          </div>
          <div class="fw-300 fs-18 link-footer">
            <a href="">Serviços para soluções</a>
            <a href="">Serviços para consultoria</a>
            <a href="">Proteção de dados</a>
            <a href="">Gestão de risco/vulnerabilidade</a>
          </div>
        </div>
        <div class="conteudo-fim row">
          <div class="col-3 d-none d-lg-block"><a href="index.php"><img src="assets/images/logo.png" alt="logo"></a></div>
          <div class="col-12 col-sm-2 d-flex flex-column align-items-center d-md-block d-lg-none logo-menor"><a href="index.php"><img src="assets/images/logo-menor.png" alt="logo"></a></div>
          <div class="politicas col-12 col-lg-3 d-md-block">
            <div class="d-flex align-items-center politicas-item">
              <span></span>
              <a href="#" class="fw-300 fs-14">POLÍTICA DE PRIVACIDADE</a>
            </div>
            <div class="d-flex align-items-center politicas-item">
              <span></span>
              <a href="#" class="fw-300 fs-14">POLÍTICA DE COOKIES</a>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-md-9 col-sm-10 d-flex flex-column flex-sm-row  align-items-center align-items-sm-start direitos">
            <a href="#"><svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M46.0602 46.0666V46.0652H46.0672V36.1386C46.0672 31.2828 45.0219 27.5414 39.3442 27.5414C36.615 27.5414 34.7838 29.0392 34.0359 30.4588H33.957V27.9946H28.5739V46.0652H34.179V37.1177C34.179 34.762 34.6259 32.4839 37.5433 32.4839C40.4185 32.4839 40.4607 35.1722 40.4607 37.2692V46.0666H46.0602Z" fill="#FF3136" />
                <path d="M25.0592 27.996H19.4471V46.0666H25.0592V27.996Z" fill="#FF3136" />
                <path d="M22.2501 19C20.4562 19 19 20.4562 19 22.2501C19 24.044 20.4562 25.5306 22.2501 25.5306C24.044 25.5306 25.5003 24.044 25.5003 22.2501C25.4996 20.4562 24.0433 19 22.2501 19Z" fill="#FF3136" />
                <rect x="1" y="1" width="64" height="64" rx="2" stroke="#FF3136" stroke-width="2" />
              </svg>
            </a>
            <p class="fw-400 fs-14">Afrika Tecnologia © 2021 -Todos os direitos reservados | Av. Adolfo Pinheiro, 1.029 – Santo Amaro, São Paulo – SP | CEP 04733-100, Helbor Offices São Paulo II – Torre Sul
              Criação de sites <img src="assets/images/logo-oxigen.png" alt="logo oxigenweb"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="voltar-topo d-flex justify-content-center align-items-center">
    <a href="#topo" class="d-flex align-items-center">
      <img src="assets/images/seta-cima.png" alt="seta apontando para cima">
      <p class="fw-400 fs-13">VOLTAR AO TOPO</p>
    </a>
  </div>
</footer>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script>
  $('document').ready(function() {
    $('.titulo-footer').on('click', function(){
      $(this).parent().find('.link-footer');
      if ($('.link-footer').attr('style')) {
        $('.link-footer').removeAttr('style');
      }
      else {
        $('.link-footer').css ({
          'max-height': $('.link-footer').prop('scrollHeight') + 'px'
        });
      }
    });

    $('.menu').on('click', function() {
      $('.burgir').toggleClass('menu-aberto');
      $('.links-nav').toggleClass('d-none');
    });
    
    $('.dropdown-nav').on('click', function () {
      $(this).find('.links-dropdown').toggleClass('d-none');
    });
    // $('.dropdown-nav').on('mouseenter', function() {
    //   $(this);
    //   $(this).find('.links-dropwdown').first().stop().slideDown(200);
    // }).on('mouseleave', function() {
    //   $(this).find('.links-dropwdown').first().stop().slideUP(200);
    // });
  });


</script>