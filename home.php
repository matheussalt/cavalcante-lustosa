<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="banner">
  <div class="container">
    <div class="banner-txt fadeRight" data-animar>
      <h3>CAVALCANTE & LUSTOSA</h3>

      <h1 class="b-h1">
        Direito imobiliário<br>
        <span>com especialistas</span>
      </h1>

      <p>Nossos advogados especialistas em direito imobiliário contam com vasta experiência na resolução de questões
        juntamente aos diversos cartórios, como Registro Civil, Títulos e Documentos, Registro de Imóveis, Cartório de
        Notas e de Protestos.</p>

      <a href="<?=site_url()?>/contato">contate-nos</a>
    </div>

    <div class="banner-img fadeLeft" data-animar>
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/banner.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/banner.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/banner.jpg">
      </picture>
    </div>
  </div>
</section>

<section class="homesobre">
  <p class="sobre-bg">Sobre</p>
  <div class="quadrado"></div>
  <div class="container">
    <div class="homesobre-img" data-animar>
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/homesobre.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/homesobre.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/homesobre.jpg">
      </picture>
    </div>

    <div class="homesobre-txt fadeLeft" data-animar>
      <h2>Sobre a<br> <span> empresa</span></h2>

      <p>Cavalcante & Lustosa Advogados é um escritório de advocacia em Brasília, estabelecido em 2019, 100%
        especializado e voltado ao atendimento de demandas do Direito Imobiliário e suas áreas afins, tais como questões
        imobiliárias relacionadas ao Direito do Consumidor, ao Direito Contratual, ao Direito Cartorário (Registral e
        Notarial), ao Direito das Sucessões e ao Direito de Família. </p>

      <a href="<?=site_url()?>/sobre">SAIBA MAIS</a>
    </div>
  </div>

  <div class="container container-homesobre">
    <div class="adv-wrap">

      <div class="img-wrap">
        <div class="hs-img">
          <picture>
            <source srcset="<?=get_template_directory_URI()?>/img/webp/amauri-home.webp" type="image/webp" />
            <source srcset="<?=get_template_directory_URI()?>/img/rsc/amauri-home.jpg" type="image/jpg" />
            <img src="<?=get_template_directory_URI()?>/img/rsc/amauri-home.jpg">
          </picture>
        </div>

        <h2 class="fadeDown" data-animar>Amauri <span>Cavalcante</span></h2>

        <div class="midias">
          <a href="<?=site_url()?>/contato" target="_blank" class="alinha">
            <svg width="32" height="32" viewBox="0 0 32 32" class="next">
              <use xlink:href="#mail"></use>
            </svg>
          </a>

          <a href="https://www.facebook.com/profile.php?id=100041120700252" target="_blank" class="alinha">
            <svg width="32" height="32" viewBox="0 0 32 32" class="next">
              <use xlink:href="#facebook"></use>
            </svg>
          </a>

          <a href="https://www.linkedin.com/in/amauri-cavalcante-56398615b/" target="_blank" class="alinha">
            <svg width="32" height="32" viewBox="0 0 32 32" class="next">
              <use xlink:href="#linkedin"></use>
            </svg>
          </a>

          <a href="https://www.instagram.com/amauricavalcante.adv/" target="_blank" class="alinha">
            <svg width="32" height="32" viewBox="0 0 32 32" class="next">
              <use xlink:href="#instagram"></use>
            </svg>
          </a>
        </div>
      </div>

      <h3>eSPECIALISTA EM
        Direito imobiliário</h3>

      <h4>OAB/DF 59.430</h4>

      <p>O <strong>Dr. Amauri Cavalcante</strong> é graduado em direito, Especialista em Direito Imobiliário e Direito
        Notarial e
        Registral, ambos pelo Centro de Ensino Renato Saraiva (CERS). É membro do Instituto Brasileiro de Direito
        Imobiliário (Ibradim), atuando mais fortemente nas comissões de “Locações” e “Contencioso Imobiliário”.
        Atualmente, também exerce o cargo de Auditor Federal de Controle Externo do Tribunal de Contas da União, onde
        elabora pareceres jurídicos de alta complexidade, inclusive em resposta a demandas da Advocacia-Geral da União,
        Superior Tribunal de Justiça e Procuradoria-Geral da República.</p>

      <a href="<?=site_url()?>/sobre">conheça</a>
    </div>

    <div class="adv-wrap">

      <div class="img-wrap">
        <div class="hs-img">
          <picture>
            <source srcset="<?=get_template_directory_URI()?>/img/webp/huyane-home.webp" type="image/webp" />
            <source srcset="<?=get_template_directory_URI()?>/img/rsc/huyane-home.jpg" type="image/jpg" />
            <img src="<?=get_template_directory_URI()?>/img/rsc/huyane-home.jpg">
          </picture>
        </div>

        <h2 class="fadeDown" data-animar>Huyane <span>Lustosa</span></h2>

        <div class="midias">
          <a href="<?=site_url()?>/contato" target="_blank" class="alinha">
            <svg width="32" height="32" viewBox="0 0 32 32" class="next">
              <use xlink:href="#mail"></use>
            </svg>
          </a>

          <a href="https://www.facebook.com/huyane.dejesuslustosa" target="_blank" class="alinha">
            <svg width="32" height="32" viewBox="0 0 32 32" class="next">
              <use xlink:href="#facebook"></use>
            </svg>
          </a>

          <a href="https://www.linkedin.com/in/huyane-lustosa-05b313154/" target="_blank" class="alinha">
            <svg width="32" height="32" viewBox="0 0 32 32" class="next">
              <use xlink:href="#linkedin"></use>
            </svg>
          </a>

          <a href="https://www.instagram.com/huyanelustosa.adv/" target="_blank" class="alinha">
            <svg width="32" height="32" viewBox="0 0 32 32" class="next">
              <use xlink:href="#instagram"></use>
            </svg>
          </a>
        </div>
      </div>

      <h3>eSPECIALISTA EM
        Direito imobiliário</h3>

      <h4>OAB/DF 59.430</h4>

      <p>A <strong>Dra. Huyane Lustosa</strong> é graduada em direito pelo Instituto de Educação Superior de Brasília
        (IESB/2015), especialista em Direito Imobiliário pelo Centro de Ensino Renato Saraiva (CERS) e em Advocacia
        Contratual e Responsabilidade Civil pela Escola Brasileira de Direito (Ebradi). É membra das Comissões de
        Direito Imobiliário e Direito Contratual da Ordem dos Advogados do Brasil - Seccional DF (OAB-DF)</p>

      <a href="<?=site_url()?>/sobre">conheça</a>
    </div>
  </div>
</section>

<section class="servicos-home">
  <div class="container">
    <h2>Nossos
      <span>serviços</span>
    </h2>

    <div class="hns-wrapper">
      <div class="hns-servico">
        <div class="hns-img">
          <picture>
            <source srcset="<?=get_template_directory_URI()?>/img/webp/s01.webp" type="image/webp" />
            <source srcset="<?=get_template_directory_URI()?>/img/rsc/s01.jpg" type="image/jpg" />
            <img src="<?=get_template_directory_URI()?>/img/rsc/s01.jpg">
          </picture>
        </div>

        <div class="hns-txt fadeLeft" data-animar>
          <div class="alinha">
            <span>01</span>
            <h4>Contencioso
              imobiliário</h4>
          </div>

          <p>Proteger os interesses do cliente em relação aos direitos sobre a propriedade ou a posse de bens e no
            desenvolvimento de negócios imobiliários.</p>
        </div>
      </div>

      <div class="hns-servico">
        <div class="hns-img">
          <picture>
            <source srcset="<?=get_template_directory_URI()?>/img/webp/s02.webp" type="image/webp" />
            <source srcset="<?=get_template_directory_URI()?>/img/rsc/s02.jpg" type="image/jpg" />
            <img src="<?=get_template_directory_URI()?>/img/rsc/s02.jpg">
          </picture>
        </div>

        <div class="hns-txt fadeLeft" data-animar>
          <div class="alinha">
            <span>02</span>
            <h4>Direito
              Condominial</h4>
          </div>

          <p>O escritório de Advocacia em Brasília Cavalcante e Lustosa conta com advogados especializados em direito
            condominial.</p>
        </div>
      </div>

      <div class="hns-servico">
        <div class="hns-img">
          <picture>
            <source srcset="<?=get_template_directory_URI()?>/img/webp/s03.webp" type="image/webp" />
            <source srcset="<?=get_template_directory_URI()?>/img/rsc/s03.jpg" type="image/jpg" />
            <img src="<?=get_template_directory_URI()?>/img/rsc/s03.jpg">
          </picture>
        </div>

        <div class="hns-txt fadeLeft" data-animar>
          <div class="alinha">
            <span>03</span>
            <h4>Ações
              possessórias</h4>
          </div>

          <p>São formas de assegurar o direito à posse de um bem em caso de lesão possessória de esbulho, interdito
            proibitório, entre outros.</p>
        </div>
      </div>

      <div class="hns-servico">
        <div class="hns-img">
          <picture>
            <source srcset="<?=get_template_directory_URI()?>/img/webp/s04.webp" type="image/webp" />
            <source srcset="<?=get_template_directory_URI()?>/img/rsc/s04.jpg" type="image/jpg" />
            <img src="<?=get_template_directory_URI()?>/img/rsc/s04.jpg">
          </picture>
        </div>

        <div class="hns-txt fadeLeft" data-animar>
          <div class="alinha">
            <span>04</span>
            <h4> Inventários e
              Testamentos</h4>
          </div>

          <p>Relaciona todos os bens encontrados em nome da pessoa falecida, para que os
            herdeiros possam obter
            atribuição legal dos bens.</p>
        </div>
      </div>
    </div>
  </div>

  <a href="<?=site_url()?>/servicos">TODOS OS SERVIÇOS</a>
</section>

<section class="home-artigos">
  <h2>Artigos e
    <span>notícias</span>
  </h2>

  <div class="container">
    <div class="ah-ab fadeLeft" data-animar></div>
    <? query_posts( array( 
      'post_type' => 'post', 
      'posts_per_page' => "6"
      ) );  ?>

    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <div class="home-noticia">
      <div class="ah-img ah-img2 fadeRight" data-animar>
        <img src="<?=catch_that_image(1)?>">
      </div>

      <div class="ah-txt">
        <div class="ah-bg">

          <h3><?=the_title()?></h3>
          <p><?=custom_excerpt('30')?></p>
          <a href="<?=the_permalink()?>">LER MAIS</a>
        </div>


      </div>
    </div>
    <?php endwhile; endif; ?>
    <div class="ah-svg">
      <svg width="32" height="32" viewBox="0 0 32 32" class="ant">
        <use xlink:href="#arrowg"></use>
      </svg>

      <svg width="32" height="32" viewBox="0 0 32 32" class="prox">
        <use xlink:href="#arrowg"></use>
      </svg>
    </div>
  </div>
</section>
<?php get_footer();