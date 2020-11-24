<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<? if (is_single()) { ?>
<style>
body {
  background-color: #fff;
}

.footer {
  background-color: #2c2c2c;
}

header {
  background-color: #2c2c2c;
}
</style>

<section class="artigo-in">
  <div class="container">

    <div class="artigo-wrapper">
      <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>">
      <h4>TAG CATEGORIA</h4>
      <h2><?=the_title()?></h2>
      <p><?=the_content()?></p>

      <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-num-posts="5" mobile="false"></div>
    </div>

  </div>
</section>

<? } else { ?>

<section class="artigos">
  <div class="container artigo-grid">
    <? query_posts( array( 
      'post_type' => 'post', 
      ) );  ?>

    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="artigo-wrapper fadeDown" data-animar>
      <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>">
      <h4>TAG CATEGORIA</h4>
      <h2><?=the_title()?></h2>
      <p><?=custom_excerpt(120)?></p>
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
      <div class="news-wrapper fadeDown" data-animar>
        <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>">
        <h4>TAG CATEGORIA</h4>
        <h2><?=the_title()?></h2>
        <p><?=custom_excerpt(120)?></p>
        <a href="<?=the_permalink()?>">VER MAIS</a>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<? } ?>