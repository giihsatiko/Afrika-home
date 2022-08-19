<?php include "header.php"; ?>
<section class="banner">
  <div class="swiper mySwiper-banner">
    <div class="swiper-wrapper">
      <?php for ($i = 0; $i < 5; $i++) : ?>
        <div class="swiper-slide">
          <div class="banner-img d-flex align-items-start align-md-center justify-content-start">
            <div class="container-md container-fluid">
              <div class="texto-banner">
                <h1 class="fw-700 fs-64">Cibersegurança</h1>
                <p class="fw-400 fs-22">A Infraestrutura da sua empresa precisa ser segura e eficiente, conheça nossas soluções</p>
                <div class="links-banner d-flex flex-column flex-sm-row justify-content-between align-items-center">
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
      <div class="d-flex flex-column-reverse flex-sm-row justify-content-between align-items-center w-100">
        <div class="banner-pagination d-none d-sm-block"></div>
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
<main class="vantagens d-flex align-items-center" id="conteudo">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-4">
        <div class="lista-vantagens fw-400 fs-22 white d-flex flex-column flex-sm-row flex-md-column justify-content-center">
          <a class="d-block item-vantagem">Soluções</a>
          <a class="d-block item-vantagem">Proteção de dados</a>
          <a class="d-block item-vantagem">Consultoria</a>
          <a class="d-none d-md-block item-vantagem">Gestão de Risco e Vulnerabilidade</a>
          <a class="d-md-none d-block item-vantagem">Gestão</a>
        </div>
      </div>
      <div class="container-swiper-vantagens col-12 col-md-8">
        <div class="swiper mySwiper-vantagens">
          <div class="swiper-wrapper">
            <?php for ($i = 0; $i < 5; $i++) : ?>
              <div class="swiper-slide">
                <a class="link-vantagens d-block w-100 white">
                  <svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="34" cy="34" r="34" fill="#5C2483" />
                    <path d="M43.7591 38.7494C42.1765 37.1131 40.2965 35.9058 38.2477 35.1731L37.6051 34.9453L38.1632 34.5467C40.3259 33.0053 41.7432 30.4351 41.7432 27.5232C41.7432 25.1731 40.8179 23.0433 39.3272 21.4981C37.8327 19.9567 35.7729 19 33.5 19C31.2271 19 29.1673 19.9567 27.6728 21.4981C26.1784 23.0433 25.2568 25.1731 25.2568 27.5232C25.2568 30.4351 26.6741 33.0091 28.8368 34.5467L29.3949 34.9453L28.756 35.1731C26.7035 35.9058 24.8235 37.1131 23.2446 38.7494C20.5789 41.4981 19.0881 45.1238 19 49H20.6376C20.8212 41.8246 26.5162 36.0463 33.5 36.0463C40.4838 36.0463 46.1788 41.8246 46.3624 49H48C47.9119 45.1238 46.4174 41.4981 43.7591 38.7494ZM26.8944 27.5232C26.8944 23.757 29.8576 20.6932 33.5 20.6932C37.1424 20.6932 40.1056 23.757 40.1056 27.5232C40.1056 31.2893 37.1424 34.3531 33.5 34.3531C29.8539 34.3531 26.8944 31.2893 26.8944 27.5232Z" fill="#C169FF" />
                  </svg>
                  <h2 class="fw-700 fs-26">Conscientização de usuários, campanhas e treinamentos</h2>
                  <p class="fw-300 fs-16">Ao clicar em "Aceitar todos os cookies", você concorda com o armazenamento de cookies no seu dispositivo para melhorar a navegação no site</p>
                </a>
              </div>
            <?php endfor; ?>
          </div>
          <div class="container-fluid itens-swiper-vantagens">
            <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column w-100">
              <div class="setas-vantagens d-flex justify-content-between align-items-center">
                <div class="vantagens-button-prev">
                  <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 2L9 9L2 2" stroke="#E5E5E5" stroke-width="3" />
                  </svg>
                </div>
                <div class="vantagens-pagination d-none d-sm-block"></div>
                <div class="vantagens-button-next">
                  <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 2L9 9L2 2" stroke="#E5E5E5" stroke-width="3" />
                  </svg>
                </div>
              </div>
              <a href="#" class="link-blog">+ PROTEÇÃO DE DADOS</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<section class="conheca d-flex align-items-center">
  <div class="container-conheca">
    <div class="divisao d-flex flex-column flex-sm-row align-items-center justify-content-between">
      <div class="parte-texto d-flex container-lg container-fluid">
        <div class="d-flex align-items-center">
          <div class="texto-conheca white">
            <h1 class="fw-700 fs-48">Nossa experiência de mercado supera 20 anos
              integrando soluções</h1>
            <p class="fw-300 fs-22">Afrika Tecnologia é um Integrador de Soluções de Infraestrutura de TI especializado em Segurança da Informação e Proteção de Dados.</p>
            <a href="#" class="botao-vermelho">
              CONHEÇA A EMPRESA
              <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 2L9 9L2 2" stroke="#E5E5E5" stroke-width="3" />
              </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="parte-swiper d-flex align-items-center">
        <div class="container-swiper d-block d-sm-none">
          <div class="swiper mySwiper-conheca">
            <h1 class="fw-700 fs-64 white">DIFERENCIAIS</h1>
            <div class="swiper-wrapper">
              <?php for ($i = 0; $i < 5; $i++) : ?>
                <div class="swiper-slide">
                  <a class="conheca-item d-flex flex-column align-items-start justify-content-center">
                    <h3 class="fw-700 fs-26">Equipe Multifuncional</h3>
                    <p class="fw-300 fs-16">Especialistas em diversas práticas de mercado, tais como: PMP, CGEIT, ITIL, COBIT, ISO 20000, CRISC, e BS7799.</p>
                    <span class="d-block link-blog fw-500 fs-16">SAIBA MAIS</span>
                  </a>
                </div>
              <?php endfor; ?>
            </div>
            <div class="itens-swiper-conheca">
              <div class="d-flex justify-content-between align-items-center w-100">
                <div class="setas-conheca d-flex justify-content-between align-items-center">
                  <div class="conheca-button-prev">
                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-none d-sm-block">
                      <path d="M16 2L9 9L2 2" stroke="#E5E5E5" stroke-width="3" />
                    </svg>
                    <svg width="40" height="40" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-block d-sm-none">
                      <rect x="69" y="1" width="68" height="68" rx="34" transform="rotate(90 69 1)" stroke="#FF3136" stroke-width="2" fill="#FF3136" />
                      <path d="M42 31L35 38L28 31" stroke="#FFFF" stroke-width="3" />
                    </svg>

                  </div>
                  <div class="conheca-pagination d-none d-sm-block"></div>
                  <div class="conheca-button-next">
                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-none d-sm-block">
                      <path d="M16 2L9 9L2 2" stroke="#E5E5E5" stroke-width="3" />
                    </svg>
                    <svg width="40" height="40" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-block d-sm-none">
                      <rect x="69" y="1" width="68" height="68" rx="34" transform="rotate(90 69 1)" stroke="#FF3136" stroke-width="2" fill="#FF3136" />
                      <path d="M42 31L35 38L28 31" stroke="#FFFF" stroke-width="3" />
                    </svg>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mais d-flex flex-column flex-sm-row align-items-center">
          <img src="assets/images/mais.png" alt="cruz">
          <div class="palavra fw-400 fs-24 white">
            <p class="diferenciais">DIFERENCIAIS</p>
            <p class="voltar">VOLTAR</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="empresas d-flex align-items-center">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="texto-empresas d-block d-lg-none">
          <h1 class="fw-700 fs-48">Empresas que confiam
            em nosso trabalho</h1>
        </div>
        <div class="container-caixas d-none d-lg-flex align-items-center mx-auto">
          <div class="divisao-caixas d-flex">
            <div class="caixa-branca">
              <a href="#"><img src="assets/images/empresa.png" alt="logo empresa"></a>
            </div>
            <div class="caixa-branca">
              <a href="#"><img src="assets/images/empresa2.png" alt="logo empresa"></a>
            </div>
          </div>
          <div class="divisao-caixas2 d-flex justify-content-end">
            <div class="caixa-branca">
              <a href="#"><img src="assets/images/empresa3.png" alt="logo empresa"></a>
            </div>
            <div class="caixa-branca">
              <a href="#"><img src="assets/images/empresa4.png" alt="logo empresa"></a>
            </div>
          </div>
        </div>
        <div class="swiper-container d-block d-lg-none">
          <div class="swiper mySwiper-empresas">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="caixa-branca">
                  <a href="#"><img src="assets/images/empresa.png" alt="logo empresa"></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="caixa-branca">
                  <a href="#"><img src="assets/images/empresa2.png" alt="logo empresa"></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="caixa-branca">
                  <a href="#"><img src="assets/images/empresa3.png" alt="logo empresa"></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="caixa-branca">
                  <a href="#"><img src="assets/images/empresa4.png" alt="logo empresa"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-block d-lg-none">
          <div class="texto-empresas">
            <h1 class="fw-700 fs-48 d-none d-lg-block">Empresas que confiam
              em nosso trabalho</h1>
            <p class="fw-300 fs-22">A relação que construímos ao longo de nossa caminhada com clientes, parceiros sempre será, pautada no crescimento mútuo, transparência e comprometimento.</p>
            <a href="#" class="botao-vermelho">VER TODOS OS CLIENTES
              <svg width=" 18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 2L9 9L2 2" stroke="#E5E5E5" stroke-width="3" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 d-none d-lg-flex">
        <div class="texto-empresas">
          <h1 class="fw-700 fs-48 d-none d-lg-block">Empresas que confiam
            em nosso trabalho</h1>
          <p class="fw-300 fs-22">A relação que construímos ao longo de nossa caminhada com clientes, parceiros sempre será, pautada no crescimento mútuo, transparência e comprometimento.</p>
          <a href="#" class="botao-vermelho">VER TODOS OS CLIENTES
            <svg width=" 18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 2L9 9L2 2" stroke="#E5E5E5" stroke-width="3" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="conteudos d-flex flex-column justify-content-center">
  <div class="container-fluid">
    <div class="titulo-conteudos d-flex flex-column flex-sm-row align-items-center justify-content-between w-100">
      <h1 class="fw-700 fs-64 white">CONTEÚDOS</h1>
      <div class="seletor-conteudo">
        <select id="conteudos" class="d-flex align-items-center">
          <option>a</option>
          <option>b</option>
          <option>c</option>
        </select>
      </div>
    </div>
    <div class="swiper mySwiper-conteudos">
      <div class="swiper-wrapper">
        <?php for ($i = 0; $i < 10; $i++) : ?>
          <div class="swiper-slide">
            <a href="#" class="link-conteudo">
              <img src="assets/images/notebook.png" alt="notebook">
              <span class="data white fw-500 fs-16 d-block">13 | 03 | 21</span>
              <h4 class="fw-700 fs-22 white">Você já sabe usar a criptografia para a segurança de seus dados?</h4>
            </a>
          </div>
        <?php endfor; ?>
      </div>
      <div class="paginacao-conteudo d-flex align-items-center justify-content-between">
        <div class="conteudos-pagination"></div>
        <a href="#" class="block link-blog fw-500 fs-16">VER TODAS DO BLOG</a>
      </div>
    </div>
  </div>
</section>
<section class="fale-conosco d-flex align-items-center">
  <div class="container-lg container-fluid">
    <div class="texto-fale-conosco">
      <h1 class="fw-700 fs-48 white">Sua empresa protegida dos riscos da era digital</h1>
      <p class="fw-300 fs-22 white">A AFRIKA Tecnologia pode ajudar sua empresa com soluções inovadoras em Segurança da Informação.</p>
      <div class="botoes-fale-conosco d-flex flex-column flex-sm-row align-items-center">
        <a href="#" class="botao-vermelho">SOLICITAR AVALIAÇÃO
          <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 2L9 9L2 2" stroke="#E5E5E5" stroke-width="3" />
          </svg>
        </a>
        <a href="#" class="botao-vermelho-nobg">FALE CONOSCO
          <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 2L9 9L2 2" stroke="#FF3136" stroke-width="3" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>