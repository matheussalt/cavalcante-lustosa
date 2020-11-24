<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="icon" type="image/png" href="<?=get_template_directory_URI()?>/img/favicon.png" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <?php wp_head(); ?>

  <?php include "svg.php";  ?>
  <?php include "funcoesSalt.php"; ?>
</head>

<body <?php body_class(); ?>>

  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=243085426048812";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>

  <header class="header">
    <div class="header-lateral">
      <a href="<?=site_url()?>/contato" class="contato-a">CONTATO</a>
      <div class="lateral-wrapper">
        <a href="mailto:contato@cavalcantelutosa.com" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32" class="next">
            <use xlink:href="#mail"></use>
          </svg>
        </a>

        <a href="https://api.whatsapp.com/send?phone=+5561999975440" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32" class="next">
            <use xlink:href="#whatsapp"></use>
          </svg>
        </a>

        <a href="tel:61999973727" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32" class="next">
            <use xlink:href="#tel"></use>
          </svg>
        </a>
      </div>
    </div>

    <div class="container">
      <a href="<?=site_url()?>/" class="logo">
        <img src="<?=get_template_directory_URI()?>/img/rsc/logo.png">
      </a>

      <div class="header-wrapper">
        <div class="header-alinha">
          <img src="<?=get_template_directory_URI()?>/img/rsc/logo-header.png">

          <div class="menu">
            <a href="<?=site_url()?>/"><span>01</span>Home</a>
            <a href="<?=site_url()?>/sobre"><span>02</span>Sobre</a>
            <a href="<?=site_url()?>/servicos"><span>03</span>Serviços</a>
            <a href="<?=site_url()?>/artigos"><span>04</span>Artigos</a>
            <a href="<?=site_url()?>/contato"><span>05</span>Contato</a>
          </div>

          <div class="header-midias">
            <div class="midias-alinha">
              <a href="mailto:contato@cavalcantelustosa.com" target="_blank" class="alinha">
                <svg width="32" height="32" viewBox="0 0 32 32" class="next">
                  <use xlink:href="#mail"></use>
                </svg>
                <p>contato@cavalcantelustosa.com</p>
              </a>

              <a href="https://www.facebook.com/cavalcanteelustosa/" target="_blank" class="alinha">
                <svg width="32" height="32" viewBox="0 0 32 32" class="next">
                  <use xlink:href="#facebook"></use>
                </svg>
                <p>cavalcantelustosa</p>
              </a>

              <a href="https://www.linkedin.com/company/cavalcante-lustosa-advogados/?viewAsMember=true" target="_blank"
                class="alinha">
                <svg width="32" height="32" viewBox="0 0 32 32" class="next">
                  <use xlink:href="#linkedin"></use>
                </svg>
                <p>company/cavalcantelustosa</p>
              </a>

              <a href="https://www.instagram.com/huyanelustosa.adv/" target="_blank" class="alinha">
                <svg width="32" height="32" viewBox="0 0 32 32" class="next">
                  <use xlink:href="#instagram"></use>
                </svg>
                <p>@cavalcantelustosa</p>
              </a>
              <p class="close-menu">Fechar</p>
            </div>
          </div>
        </div>

      </div>

      <div class="menu-hamb">
        <span></span>
      </div>
    </div>

  </header>