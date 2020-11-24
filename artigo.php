<?php
/**
 * Template Name: artigos
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.cabecalho {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/banner_artigo.png');
}
</style>

<div class="cabecalho cabecalho-artigo">
  <div class="container">
    <div class="sh-txt">
      <h3>CAVALCANTE & LUSTOSA</h3>
      <h1>Artigos</h1>
    </div>
  </div>

  <!-- <div class="cabecalho-img">
    <picture>
      <source srcset="<?=get_template_directory_URI()?>/img/webp/artigo-a.webp" type="image/webp" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/artigo-a.jpg" type="image/jpg" />
      <img src="<?=get_template_directory_URI()?>/img/rsc/artigo-a.jpg">
    </picture>

    <picture>
      <source srcset="<?=get_template_directory_URI()?>/img/webp/artigo-h.webp" type="image/webp" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/artigo-h.jpg" type="image/jpg" />
      <img src="<?=get_template_directory_URI()?>/img/rsc/artigo-h.jpg">
    </picture>
  </div> -->
</div>

<section class="artigos">
  <div class="container artigo-grid">
    <? query_posts( array( 
      'post_type' => 'post', 
      ) );  ?>

    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="artigo-wrapper">
      <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>">
      <h4>TAG CATEGORIA</h4>
      <h2><?=the_title()?></h2>
      <p><?=custom_excerpt(40)?></p>
      <a href="<?=the_permalink()?>">VER MAIS</a>
    </div>
    <?php endwhile; endif; ?>
  </div>
</section>

<div class="noticias">
  <div class="container">
    <h2 class="news">Outras Notícias</h2>

    <div class=" news-grid">
      <? query_posts( array( 
      'post_type' => 'noticias', 
      'posts_per_page' => "3"
      ) );  ?>

      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="news-wrapper">
        <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>">
        <h4>TAG CATEGORIA</h4>
        <h2><?=the_title()?></h2>
        <p><?=custom_excerpt(40)?></p>
        <a href="<?=the_permalink()?>">VER MAIS</a>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<?php get_footer();