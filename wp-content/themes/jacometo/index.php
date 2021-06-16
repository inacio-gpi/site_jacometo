
<?php
  //Template Name: inicio
?>
<?php get_header(); ?>
  <div class="site-wrap">
    <div class="site-inner">
      <div class="psiu-b1 jarallax d-flex align-items-center home-section" id="home-section" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background.png); background-repeat: no-repeat; background-position: top;">
        <div class="container ct-mx-2 pt-5">
          <div class="row align-items-center py-5">

            <div class="col-lg-5 col-md-5 psiu-dev mx-auto text-left">
              <h2 class="subheading gsap-reveal-hero">
                <?php the_field('texto_para_o_cliente')?>
                Cadastre-se e receba sua cotação de seguros.
              </h2>
              <h1 class="heading gsap-reveal-hero psiu-dev" style="padding-right: 60px; line-height: 1 !important;">
                Proteja sua carga.
              </h1>
              <a href="#about-section" class="btn btn-outline-primary">SAIBA MAIS</a>

            </div>
            <div class="col-lg-2 col-md-1 relative align-self-center">
            </div>
            <div id="home-seguro" class="col-lg-5 col-md-6 col relative align-self-center">
            <?php 
                the_post();
                the_content();
            ?>
              <!-- <form action="#">
                <h2 class="mb-4 mt-0 text-center">Cadastre-se agora.</h2>
                <div class="form-group">
                  <input type="text" class="form-control heigth-50 reverse" placeholder="Nome">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control heigth-50 reverse" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control heigth-50 reverse" placeholder="Telefone">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control heigth-50 reverse" placeholder="CNPJ">
                </div>
                <div class="form-group">
                  <p class="text-center">Quero receber um contato</p>
                  <div class="pb_select-wrap">
                    <select class="form-control heigth-50 reverse">
                      <option value="" selected="">De manhã</option>
                      <option value="">tarde</option>
                      <option value="">noite</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill btn-shadow-blue" value="agendar">
                </div>
              </form> -->
              
              <!-- <form method="post" id="contactForm">
                <h2 class="mb-4 mt-0 text-center">Cadastre-se agora.</h2>
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control heigth-50 reverse" name="nome" id="nome">
                </div>
                <div class="form-group">
                  <label for="nome">Email</label>
                  <input type="email" class="form-control heigth-50 reverse" name="email" id="email">
                </div>
                <div class="form-group">
                  <label for="nome">Telefone</label>
                  <input type="text" class="form-control heigth-50 reverse" name="telefone" id="telefone">
                </div>
                <div class="form-group">
                  <label for="nome">CNPJ</label>
                  <input type="text" class="form-control heigth-50 reverse" name="cnpj" id="cnpj">
                </div>
                <div class="form-group">
                  <p class="text-center">Quero receber um contato</p>
                  <div class="pb_select-wrap">
                    <select class="form-control heigth-50 reverse" name="periodo" id="periodo">
                      <option value="manha" selected="">De manhã</option>
                      <option value="tarde">De tarde</option>
                      <option value="noite">De noite</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill btn-shadow-blue" value="agendar">
                  <span class="submitting"></span>
                </div>
              </form> -->
              
              <!-- <div id="form-message-warning" class="mt-4"></div>
              <div id="form-message-success">
                Sua mensagem foi enviada, Obrigado!
              </div> -->
              <h6 class="text-center text-description mt-5">
                Jacometo garante proteção de<br>
                carga para todo trecho.
              </h6>
            </div><!-- .col-md-5 -->
          </div>
        </div>
      </div>
      <div class="section about-section pt-3" id="about-section">
        <div class="container" style="max-width: 1200px;">
          <div class="row mt-md-5 justify-content-between align-items-center">

            <div class="col-12 py-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="mb-4 heading-h3 text-center mb-5">
                O que é o Seguro de Responsabilidade Civil do Transportador
                Rodoviário de Carga, ou RCTR-C
              </h3>

              <?php if(get_field('url_do_video_do_youtube')): ?>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="560" height="315" src="<?php the_field('url_do_video_do_youtube')?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
                <!-- <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/bBDnKSJ7SmQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   -->
              </div>
              <?php endif; ?>
            </div>

          </div>
        </div>
      </div>
      <div class="section-important" id="section-important">
        <div class="content-important" data-aos="fade-up" data-aos-delay="200">
          <h1>
            IMPORTANTE:
          </h1>
          <p class="px-lg-5">
            O seguro de <b>RCTR-C</b>, sua contratação é <b>obrigatória</b> se você trabalha
            com transporte de cargas de terceiros e emite <b>Conhecimento de
              Transporte Eletrônico.</b>
          </p>
        </div>
      </div>

      <!-- imagens parceiros -->
      <div class="section section-carga pb-4" id="section-carga">
        <div class="container" style="max-width: 1400px !important;">
          <div class="section-heading-wrap text-center mb-5" data-aos="fade-up">
            <h2 class="heading-h2 text-center divider">Confie sua carga com as principais seguradoras do país</h2>
          </div>

          <!-- start scroll -->
          <div class="row" style="box-shadow: 0 1px #e9e9e9; padding-bottom: 30px;">
            <div class="col-12">
              <div class="owl-carousel popular-slider">

                <?php
                  $imagem_parceiro = get_field('img_parceiros');
                  if (isset($imagem_parceiro)) { foreach ($imagem_parceiro as $parceiro) { ?>
                  
                    <div class="single-product">
                      <img class="default-img" src='<?php echo $parceiro["foto_rest"]; ?>'>
                    </div>
                    
                <?php } } ?>
                
              </div>
            </div>
          </div>

          <!-- fim scroll -->

        </div>
      </div>
      <!-- fim imagens parceiros -->

      <!-- section-seguro -->
      <div class="section-seguro" id="section-seguro">
        <div class="container text-center">
          <a href="#home-seguro" class="btn btn-primary mb-5" data-aos="fade-up" data-aos-delay="100">
            Quero fazer meu seguro
          </a>
          <h2 class="text-center mb-4">
            Coberturas
          </h2>

          <div class="row pt-5">

            <div class="col-6 col-xl-3 mb-5" data-aos="fade-up" data-aos-delay="0">
              <div class="psiu-card">
                <h4>
                  colisão
                </h4>
                <img class="seguro-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/seguro-1.png">
              </div>
            </div>

            <div class="col-6 col-xl-3 mb-5" data-aos="fade-up" data-aos-delay="50">
              <div class="psiu-card">
                <h4>
                  capotamenro/ tombamento
                </h4>
                <img class="seguro-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/seguro-2.png">
              </div>
            </div>

            <div class="col-6 col-xl-3 mb-5" data-aos="fade-up" data-aos-delay="100">
              <div class="psiu-card">
                <h4>
                  furto
                </h4>
                <img class="seguro-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/seguro-3.png">
              </div>
            </div>

            <div class="col-6 col-xl-3 mb-5" data-aos="fade-up" data-aos-delay="150">
              <div class="psiu-card">
                <h4>
                  incèndio
                </h4>
                <img class="seguro-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/seguro-4.png">
              </div>
            </div>

          </div>
        </div>
        <img class="seguro-bg d-none d-xl-block" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cobertura-bg.png">
      </div>
      <!-- fim section-seguro -->

      <!-- section-seguro -->
      <div class="section-vantages" id="section-vantages">

        <div class="wrapper">
          <div class="accordion active">
            <div class="accordion_tab active" data-aos="fade-up" data-aos-delay="100">
              <div class="accordion_arrow">
                <span class="icon-caret-right"></span>
              </div>
              <h6>
                Veja os detalhes sobre as coberturas aqui
              </h6>
            </div>
            <div class="accordion_content">
              <div class="accordion_item" data-aos="fade-up" data-aos-delay="100">
                <h6 class="item_title">RISCOS COBERTOS</h6>
                <p>
                  O Seguro de RCTR-C cobre a responsabilidade civil do transportador por eventuais perdas ou danos
                  sofridos pelos bens ou
                  mercadorias de terceiros, entregues para transporte contra a emissão de conhecimento do embarque.
                </p>
                <p>
                  Para efeito do contrato de Seguro RCTR-C
                  os motoristas são considerados prepostos do segurado.
                </p>
                <p>
                  Vale lembrar que as mercadorias de propriedade do segurado (transportador) não poderão ser incluídas
                  nesse seguro, já que
                  se trata de seguro contratado para cobrir a responsabilidade do segurado por danos causados aos bens
                  e/ou mercadorias de
                  terceiros.
                </p>
                <p>
                  Tais perdas ou danos estarão cobertos, desde que ocorram durante o transporte e sejam causados
                  diretamente por:
                </p>
                <p>
                  • Colisão, capotagem, abalroamento e/ou tombamento do veículo transportador; e
                </p>
                <p>
                  • Incêndio ou explosão no veículo transportador. O Seguro RCTR-C cobre a responsabilidade do
                  transportador por
                  eventuais perdas ou danos sofridos pelos bens ou mercadorias em consequência de: incêndio ou explosão
                  nos depósitos,
                  armazéns ou pátios usados pelo segurado, nas localidades de início, pernoite, baldeação e destino da
                  viagem, mesmo que
                  tais bens ou mercadorias encontrem-se fora do veículo transportador.
                </p>
                <p>
                  A Cobertura do Seguro RCTR-C não é interrompida quando o tráfego pela rodovia sofrer interrupções por
                  motivo de obras
                  de conservação, desmoronamento de taludes (terreno inclinado) ou por efeito de fenômenos da natureza,
                  ou, ainda, por
                  solução de continuidade e, quando na falta de pontes ou viadutos, houver necessidade da utilização de
                  serviços regulares de
                  balsas ou embarcações congêneres, adequadas para a transposição de cursos de água.
                </p>
                <p>
                  O pagamento das perdas e danos de que trata o seguro de RCTR-C será feito, pela seguradora,
                  diretamente ao terceiro
                  proprietário dos bens ou mercadorias, com a anuência do segurado.
                </p>
                <p>
                  Esse seguro não pode ser contratado coletivamente, devendo as apólices ser individualizadas por
                  segurado.
                </p>
                <p>
                  É proibida a emissão de mais de uma apólice desse seguro na mesma, ou em outra seguradora, salvo nas
                  seguintes situações:
                </p>
                <p>
                  I – Quando o segurado possuir fliais, em algum estado da Federação, não cobertas pela apólice
                  principal, e desde que fque
                  caracterizado, em cada uma das apólices adicionais, o local de início da viagem.
                </p>
                <p>
                  II – Quando as apólices adicionais forem específcas para um determinado tipo de mercadoria, não
                  abrangida pela apólice
                  principal.
                </p>
                <p>
                  III – Quando o valor do embarque for superior ao Limite Máximo de Garantia por veículo/acúmulo e,
                  consultada a
                  seguradora, esta tiver recusado o risco, desde que a consulta e a recusa tenham sido formuladas dentro
                  dos prazos
                  previstos na apólice principal.
                </p>
                <p>
                  IV – Quando as apólices adicionais forem estipuladas por um determinado embarcador, em nome do
                  transportador, nos
                  termos da Lei nº 11.442/20
                </p>
              </div>
              <!-- divisor -->
              <div class="accordion_item" data-aos="fade-up" data-aos-delay="100">
                <h6 class="item_title">RISCOS NÃO COBERTOS</h6>
                <p>
                  • Dolo em ato praticado, exclusiva e comprovadamente, pelo segurado ou benefciário do seguro ou pelo
                  representante de
                  um ou de outro. Se o segurado for pessoa jurídica, a exclusão se aplica aos 83 sócios controladores da
                  empresa segurada,
                  aos seus dirigentes e administradores legais, aos benefciários e, também, aos representantes de cada
                  uma dessas pessoas.
                </p>
                <p>
                  • Inobservância das disposições que disciplinam o transporte de carga por rodovia.
                </p>
                <p>
                  • Contrabando.
                </p>
                <p>
                  • Comércio e/ou embarque ilícitos ou proibidos; mau acondicionamento, insufciência ou impropriedade da
                  embalagem.
                </p>
                <p>
                  • Medidas sanitárias ou desinfecções; fumigações; invernada, quarentena, demora, contratos e
                  convenções de outra
                  natureza; futuações de preço e perda de mercado.
                </p>
                <p>
                  • Vício próprio ou da natureza dos objetos transportados; infuência da temperatura; mofo; diminuição
                  natural de peso,
                  exsudação; roeduras ou outros estragos causados por animais, vermes, insetos ou parasitas.
                </p>
                <p>
                  • Terremotos, ciclones, erupções vulcânicas e, em geral, quaisquer convulsões da natureza.
                </p>
                <p>
                  • Arresto, sequestro, detenção, embargo, penhora, apreensão, confsco, ocupação, apropriação,
                  requisição, nacionalização ou
                  destruição decorrente(s) de qualquer ato de autoridade, de direito ou de fato, civil ou militar; presa
                  ou captura, hostilidades
                  ou operações bélicas, quer tenham sido precedidas de declaração de guerra ou não; guerra civil,
                  revolução, rebelião,
                  insurreição ou consequentes agitações civis, bem como pirataria, minas, torpedos, bombas e outros
                  engenhos de guerra.
                </p>
                <p>
                  • Greves, lockouts, tumultos, motins, arruaças, desordens e quaisquer outras perturbações da ordem
                  pública.
                </p>
                <p>
                  • Radiações ionizantes ou contaminação pela radioatividade de qualquer combustível nuclear ou de
                  qualquer resíduo
                  nuclear, resultante de combustão de matéria nuclear.
                </p>
                <p>
                  • Extravio, quebra, derrame, vazamento, arranhadura, amolgamento, amassamento, má arrumação e/ou mau
                  acondiciona-
                  mento, água doce ou de chuva, oxidação ou ferrugem, mancha de rótulo, paralisação de máquinas
                  frigorífcas, furto, roubo
                  total ou parcial; contaminação ou contato com outras mercadorias, a não ser que se verifquem em
                  virtude de ocorrência
                  prevista e coberta nos termos do Título I das condições gerais.
                </p>
                <p>
                  • Acidentes ocorridos com veículos transportadores em vias proibidas ao trânsito de veículos
                  automotores pelas
                  autoridades competentes.
                </p>
                <p>
                  • Acidentes ocorridos com veículos transportadores com excesso de carga, peso ou altura, desde que
                  tal(is) excesso(s)
                  seja(m) a causa determinante do evento.
                </p>
                <p>
                  • Multas, assim como obrigações fscais, tributárias e/ou judiciárias, à exceção do valor dos impostos
                  suspensos e/ou
                  benefícios internos relativos aos bens ou mercadorias transportados, desde que contratada a cobertura
                  adicional específca,
                  prevista na Resolução no 123/2005.
                </p>
                <p>
                  • Operações de carga e descarga, com ou sem içamento, a não ser que seja contratada a cobertura
                  adicional específca.
                </p>
                <p>
                  • Ato terrorista, independentemente de seu propósito, quando reconhecido como atentatório à ordem
                  pública pela
                  autoridade competente. Essa também expressamente excluída desse seguro a cobertura da responsabilidade
                  do segurado
                  por danos morais e lucros cessantes, oriundos de qualquer causa, ainda que de ocorrência prevista e
                  coberta nos termos do
                  Capítulo I – Condições Gerais do Seguro de RCTR-C.
                </p>
              </div>
              <!-- divisor -->
              <div class="accordion_item" data-aos="fade-up" data-aos-delay="100">
                <h6 class="item_title">
                  COBERTURAS DE BENS OU MERCADORIAS
                  SUJEITOS A CONDIÇÕES PRÓPRIAS
                </h6>
                <p>
                  De acordo com o art. 6º das condições gerais do Seguro de RCTR-C, está sujeito a condições próprias,
                  devidamente
                  discriminadas na apólice e mediante inclusão de cláusula específca, o transporte das seguintes
                  mercadorias:
                </p>
                <p>
                  • Objetos de arte (quadros, esculturas, antiguidades e coleções).
                </p>
                <p>
                  • Mudanças de móveis e utensílios (residenciais ou de escritório).
                </p>
                <p>
                  • Animais vivos.
                </p>
                <p>
                  • Contêineres.
                </p>
                <p>
                  • Veículos trafegando por meios próprios. Para ratifcação da cobertura de bens ou mercadorias sujeitos
                  a condições
                  próprias, é necessária a inclusão de cláusula específca, conforme iremos abordar à frente.
                </p>
              </div>
              <!-- divisor -->
              <div class="accordion_item" data-aos="fade-up" data-aos-delay="100">
                <h6 class="item_title">AVERBAÇÃO SIMPLES</h6>
                <p>
                  O segurado (transportador) assume a obrigação de comunicar à seguradora todos os embarques abrangidos
                  pela apólice.
                  Essa comunicação deve ser realizada antes da saída do veículo transportador, com base nos
                  conhecimentos emitidos, em
                  rigorosa sequência numérica, mediante a transmissão eletrônica do arquivo Conhecimento de Transporte
                  Eletrônico
                  (CT-e), no padrão estabelecido na legislação, ou documento fscal equivalentem
                </p>
              </div>
              <!-- divisor -->
              <div class="accordion_item" data-aos="fade-up" data-aos-delay="100">
                <h6 class="item_title">IMPORTANTE</h6>
                <p>
                  O conhecimento de embarque (contrato de transporte) é um documento imprescindível ao despacho da
                  mercadoria. A
                  mercadoria transportada só é entregue ao destinatário mediante a apresentação do conhecimento original
                  de embarque. É
                  obrigação do transportador rodoviário examinar a carga embarcada e registrar, no conhecimento de
                  embarque, as ressalvas
                  necessárias sobre o estado da mercadoria que recebeu.
                </p>
              </div>

            </div>
          </div>
        </div>
        <h2 class="heading-h2 text-center divider">
          Vantagens
        </h2>

        <!-- <div class="row pt-5"> -->

        <div class="owl-carousel popular-slider-2">
          <div class="psiu-card">
            <h3>
              Cobertura de
              Limpeza de Pista
            </h3>
            <img class="cobertura-img mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cobertura-1.png">
            <p>
              cobertura adicional de Limpeza de pista do
              Seguro RCTR-C é muito importante e pouco
              divulgado, mas pode gerar uma grande
              economia a transportadora .
            </p>
            <img class="sombra-img mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sombra.png">
          </div>

          <div class="psiu-card">
            <h3>
              Averbação
              eletrônica
            </h3>
            <img class="cobertura-img mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cobertura-2.png">
            <p>
              Permite maior agilidade e praticidade na
              comunicação, com transmissão de dados
              de embarque via internet
            </p>
            <img class="sombra-img mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sombra.png">
          </div>

          <div class="psiu-card">
            <h3>
              Assistência
              à Carga
            </h3>
            <img class="cobertura-img mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cobertura-3.png">
            <p>
              comunicação, com transmissão de dados
              de embarque via internet
              Cobertura adicional para limpeza, contenção
              e remoção de produtos que possam
              sujar as vias em caso de acidente rodoviário
              com a carga transportada
            </p>
            <img class="sombra-img mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sombra.png">
          </div>

          <div class="psiu-card">
            <h3>
              Cobertura Para Riscos
              Não Atribuídos a
              Acidentes De Trânsito
            </h3>
            <img class="cobertura-img mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cobertura-4.png">
            <p>
              Você pode contar com pontos de
              atendimento a cada 100 Km nas principais rodovias do país
            </p>
            <img class="sombra-img mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sombra.png">
          </div>

          <div class="psiu-card">
            <h3>
              Avarias
            </h3>
            <img class="cobertura-img mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cobertura-5.png">
            <p>
              Você pode contar com pontos de
              atendimento a cada 100 Km nas principais rodovias do país
            </p>
            <img class="sombra-img mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sombra.png">
          </div>

        </div>
        <!-- </div> -->
      </div>
      <!-- fim section-seguro -->

      <div class="section section-counter" id="section-counter">
        <div class="container">

          <div class="row pt-5">
            <div class="col-md-4 px-md-5 px-3" data-aos="fade-up" data-aos-delay="0">

              <div class="col-12 py-md-5 py-3" data-aos="fade-up" data-aos-delay="100">
                <div class="counter-number text-center">
                  <span class="number-wrap">
                    +<span class="number number-counter" data-number="10534">0</span>
                  </span>
                  <span class="counter-label">embarques mensais</span>
                </div>
              </div>
              <div class="col-12 py-md-5 py-3" data-aos="fade-up" data-aos-delay="150">
                <div class="counter-number text-center">
                  <span class="number-wrap">
                    <span class="number number-counter" data-number="1430">0</span>
                  </span>
                  <span class="counter-label">Clientes atendidos</span>
                </div>
              </div>
              <div class="col-12 py-md-5 py-3" data-aos="fade-up" data-aos-delay="200">
                <div class="counter-number text-center border-bottom-0">
                  <span class="number-wrap">
                    +R$<span class="number number-counter" data-number="924">0</span>M
                  </span>
                  <span class="counter-label">em mercadorias asseguradas</span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- END .counter -->

      <div class="site-section section" id="site-section" style=" background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/doc-text.png);
                background-repeat: no-repeat;
                background-position: 87vw;
                background-size: 340px;
                ">
        <div class="container" style="max-width: 1200px">
          <div class="section-heading-wrap text-center" data-aos="fade-up">
            <p class="mb-0">
              Permita-me uma opinião, eu não consigo pensar em uma economia sem logística,
              sem processo produtivo e sem transporte de cargas.
              Sendo assim, o Seguro de Transporte de mercadorias entra como uma ferramen-
              ta de gestão de importância fundamental para proteger o transportador contra
              os riscos que essas mercadorias acabam enfrentando durante a viagem seja no
              Brasil ou até mesmo para fora dele.
              Evite prejuízos com imprevistos: Proteja a você e a seu cliente!
              Faça uma cotação sem compromisso do seu seguro hoje mesmo.
            </p>
          </div>
        </div>
      </div>
<?php get_footer(); ?>