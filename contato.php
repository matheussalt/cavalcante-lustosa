<?php
/**
 * Template Name: contato
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<div class="cabecalho">
  <div class="container">
    <div class="sh-txt" data-anima-tempo>
      <h3>CAVALCANTE & LUSTOSA</h3>
      <h1>Contato</h1>
    </div>
  </div>

  <img class="banner-contato-img" src="<?=get_template_directory_URI()?>/img/rsc/banner_contato.png">
</div>

<section class="contato">
  <div class="container">

    <h2>Ficou com dúvidas ou quer saber mais
      sobre alguns de nossos serviços?</h2>

    <p>Envie-nos uma mensagem</p>

    <?php echo do_shortcode('[contact-form-7 id="5" title="Formulário de contato 1"]'); ?>

  </div>
</section>

<?php get_footer();