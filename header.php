<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="assets/images/favicon.png">
  <title>Afrika</title>
</head>

<body>
  <header class="d-flex align-items-center" id="#topo">
    <div class="container-fluid">
      <div class="itens-nav d-flex justify-content-between align-items-center">
        <div class="menu-logo d-flex justify-content-between align-items-center w-100">
          <div class="menu d-flex align-items-center d-lg-none">
            <div class="burgir">
              <span class="top"></span>
              <span class="mid"></span>
              <span class="bot"></span>
            </div>
            <p class="fw-500 fs-18">Menu</p>
          </div>
          <a href="index.php" class="logo d-none d-sm-block"><img src="assets/images/logo.png" alt="logo"></a>
          <a href="index.php" class=" logo d-block d-sm-none"><img src="assets/images/logo-menor-nav.png" alt="logo"></a>
        </div>
        <div class="links-nav fw-500 fs-18 d-none d-lg-flex">
          <div class="dropdown-nav">
            <a href="">Home</a>
          </div>
          <div class="dropdown-nav">
            <a>Soluções</a>
            <div class="links-dropdown">
              <div class="row">
                <div class="col-12 col-lg-3 itens-dropdown">
                  <h3>SOLUÇÕES</h3>
                  <div class="itens-sub">
                    <a href="#" class="d-block">Implantação e capacitação</a>
                    <a href="#" class="d-block">Rollout do ambiente</a>
                    <a href="#" class="d-block">Consultoria de boas práticas</a>
                    <a href="#" class="d-block">Operação assistida</a>
                    <a href="#" class="d-block">Suport</a>
                  </div>
                </div>
                <div class="col-12 col-lg-3 itens-dropdown">
                  <h3>CONSULTORIA</h3>
                  <div>
                    <a href="#" class="d-block">Diagnóstico e recomendação</a>
                    <a href="#" class="d-block">Planos de ação para implantação</a>
                    <a href="#" class="d-block">Implantação de planos de ação</a>
                  </div>
                </div>
                <div class="col-12 col-lg-3 itens-dropdown">
                  <h3>PROTEÇÃO DE DADOS</h3>
                  <div class="itens-sub">
                    <a href="#" class="d-block">Conscientização de usuários</a>
                    <a href="#" class="d-block">Mapeamento de dados</a>
                    <a href="#" class="d-block">Gestão de acessos</a>
                    <a href="#" class="d-block">Automatização de políticas</a>
                    <a href="#" class="d-block">Definição de workflow</a>
                    <a href="#" class="d-block">Prevenção de vazamento de dados</a>
                    <a href="#" class="d-block">Automação e avaliação LGPD</a>
                  </div>
                </div>
                <div class="col-12 col-lg-3 itens-dropdown">
                  <h3>GESTÃO DE RISCO</h3>
                  <div>
                    <a href="#" class="d-block">Gerenciamento do risco de aplicativos</a>
                    <a href="#" class="d-block">Proteção as aplicações em nuvem</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="dropdown-nav">
            <a href="">Institucional</a>
          </div>
          <div class="dropdown-nav">
            <a href="">Clientes</a>
          </div>
          <div class="dropdown-nav">
            <a href="">Conteúdos</a>
          </div>
          <div class="dropdown-nav">
            <a href="">Contato</a>
          </div>

        </div>
        <!-- fim links nav -->
        <div class="links-nav-mobile">
          <div class="dropdown-nav-mobile">
            <a href="" class="fw-500 fs-18">Home</a>
          </div>
          <div class="dropdown-nav-mobile">
            <a class="fw-500 fs-18">Soluções</a>
            <div class="links-dropdown-mobile">
              <div class="aaaa">
                <div class="itens-dropdown-mobile">
                  <div class="sub-dropdown d-flex align-items-center">
                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16 2L9 9L2 2" stroke="#E5E5E5" stroke-width="3" />
                    </svg>
                    <h3 class="fw-700 fs-18">SOLUÇÕES</h3>
                  </div>
                  <div class="itens-sub">
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Implantação e capacitação</a>
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Rollout do ambiente</a>
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Consultoria de boas práticas</a>
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Operação assistida</a>
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Suport</a>
                  </div>
                </div>
                <div class="itens-dropdown-mobile">
                  <div class="sub-dropdown d-flex align-items-center">
                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16 2L9 9L2 2" stroke="#E5E5E5" stroke-width="3" />
                    </svg>
                    <h3 class="fw-700 fs-18">CONSULTORIA</h3>
                  </div>
                  <div class="itens-sub">
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Diagnóstico e recomendação</a>
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Planos de ação para implantação</a>
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Implantação de planos de ação</a>
                  </div>
                </div>
                <div class="itens-dropdown-mobile">
                  <div class="sub-dropdown d-flex align-items-center">
                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16 2L9 9L2 2" stroke="#E5E5E5" stroke-width="3" />
                    </svg>
                    <h3 class="fw-700 fs-18">PROTEÇÃO DE DADOS</h3>
                  </div>
                  <div class="itens-sub">
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Conscientização de usuários</a>
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Mapeamento de dados</a>
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Gestão de acessos</a>
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Automatização de políticas</a>
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Definição de workflow</a>
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Prevenção de vazamento de dados</a>
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Automação e avaliação LGPD</a>
                  </div>
                </div>
                <div class="itens-dropdown-mobile">
                  <div class="sub-dropdown d-flex align-items-center">
                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16 2L9 9L2 2" stroke="#E5E5E5" stroke-width="3" />
                    </svg>
                    <h3 class="fw-700 fs-18">GESTÃO DE RISCO</h3>
                  </div>
                  <div class="itens-sub">
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Gerenciamento do risco de aplicativos</a>
                    <a href="#" class="d-flex align-items-center"><span class="faixa-branca"></span>Proteção as aplicações em nuvem</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="dropdown-nav-mobile">
            <a class="fw-500 fs-18">Institucional</a>
          </div>
          <div class="dropdown-nav-mobile">
            <a class="fw-500 fs-18">Clientes</a>
          </div>
          <div class="dropdown-nav-mobile">
            <a class="fw-500 fs-18">Conteúdos</a>
          </div>
          <div class="dropdown-nav-mobile">
            <a class="fw-500 fs-18">Contato</a>
          </div>
        </div>
      </div>
    </div>
  </header>