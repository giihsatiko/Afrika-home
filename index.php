<?php include "header.php"; ?>
<section class="banner">
  <div class="swiper mySwiper-banner">
    <div class="swiper-wrapper">
      <?php for ($i = 0; $i < 5; $i++) : ?>
        <div class="swiper-slide">
          <div class="banner-img d-flex align-items-center justify-content-start">
            <div class="container">
              <div class="texto-banner">
                <h1 class="fw-700 fs-64">Cibersegurança</h1>
                <p class="fw-400 fs-22">A Infraestrutura da sua empresa precisa ser segura e eficiente, conheça nossas soluções</p>
                <div class="links-banner d-flex justify-content-between align-items-center">
                  <a href="#" class="botao-vermelho ">QUERO CONHECER<svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16 2L9 9L2 2" stroke="#E5E5E5" stroke-width="3" />
                    </svg>
                  </a>
                  <a href="#" class="botao-vermelho-nobg">VER OUTROS SERVIÇOS</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
    <div class="container-fluid itens-swiper-banner ">
      <div class="d-flex justify-content-between align-items-center w-100">
        <div class="banner-pagination"></div>
        <a href="#conteudo" class="scroll-down fw-400 fs-13 d-flex justify-content-between align-items-center">
          <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 2L9 9L2 2" stroke="#E5E5E5" stroke-width="3" />
          </svg>
          SCROLL DOWN
        </a>
        <div class="setas-banner d-flex justify-content-between align-items-center">
          <div class="banner-button-prev fw-400 fs-13">ANTERIOR</div>
          <span class="divisao-botoes"></span>
          <div class="banner-button-next fw-400 fs-13">PRÓXIMO</div>
        </div>
      </div>
    </div>
  </div>
</section>
<main></main>
<section class="empresas d-flex align-items-center">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="container-caixas d-flex align-items-center flex-wrap mx-auto">
          <div class="divisao-caixas d-flex w-100">
            <div class="caixa-branca">
              <a href="#"><img src="assets/images/empresa.png" alt="logo empresa"></a>
            </div>
            <div class="caixa-branca">
              <a href="#"><img src="assets/images/empresa2.png" alt="logo empresa"></a>
            </div>
          </div>
          <div class="divisao-caixas2 d-flex justify-content-end w-100">
            <div class="caixa-branca">
              <a href="#"><img src="assets/images/empresa3.png" alt="logo empresa"></a>
            </div>
            <div class="caixa-branca">
              <a href="#"><img src="assets/images/empresa4.png" alt="logo empresa"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="texto-empresas">
          <h1 class="fw-700 fs-48">Empresas que confiam
            em nosso trabalho</h1>
          <p class="fw-300 fs-22">A relação que construímos ao longo de nossa caminhada com clientes, parceiros sempre será, pautada no crescimento mútuo, transparência e comprometimento.</p>
          <a href="#" class="botao-vermelho fw-500 fs-16">VER TODOS OS CLIENTES
            <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 2L9 9L2 2" stroke="#E5E5E5" stroke-width="3" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include "footer.php"; ?>