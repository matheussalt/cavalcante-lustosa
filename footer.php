<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<?php if(!is_page(11)){ ?>
<footer class="footer">

  <div class="container">
    <div class="mapa">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.056229428979!2d-47.886104734972385!3d-15.800988839047081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a33d84e168d6f%3A0x7a04fd1f41e33481!2sCavalcante%20%26%20Lustosa%20Advogados!5e0!3m2!1spt-BR!2sbr!4v1600098426042!5m2!1spt-BR!2sbr"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
    </div>

    <div class="footer-txt">
      <h2>Entre em <span>contato</span></h2>

      <div class="footer-wrapper">
        <a href="https://api.whatsapp.com/send?phone=+5561999975440" target="_blank" class="tel">
          <p>(61) 9.9997-5440 <br> (61) 9.9997-3727</p>
        </a>

        <div class="alinha">
          <svg width="32" height="32" viewBox="0 0 32 32" class="next">
            <use xlink:href="#pin"></use>
          </svg>

          <p><strong>Edifício Prime Business Convenience</strong><br>
            Setor Bancário Sul, Quadra 2<br>
            Bloco E, Sala 206.<br>
            Brasília-DF.</p>
        </div>

        <a href="mailto:contato@cavalcantelutosa.com" target="_blank">
          <p>contato@cavalcantelustosa.com</p>
        </a>
      </div>

      <div class="footer-midias">
        <a href="mailto:contato@cavalcantelustosa.com" target="_blank" class="alinha">
          <svg width="32" height="32" viewBox="0 0 32 32" class="next">
            <use xlink:href="#mail"></use>
          </svg>
        </a>

        <a href="https://www.facebook.com/cavalcanteelustosa/" target="_blank" class="alinha">
          <svg width="32" height="32" viewBox="0 0 32 32" class="next">
            <use xlink:href="#facebook"></use>
          </svg>
        </a>

        <a href="https://www.linkedin.com/company/cavalcante-lustosa-advogados/?viewAsMember=true" target="_blank"
          class="alinha">
          <svg width="32" height="32" viewBox="0 0 32 32" class="next">
            <use xlink:href="#linkedin"></use>
          </svg>
        </a>

        <a href="https://www.instagram.com/huyanelustosa.adv/ " target="_blank" class="alinha">
          <svg width="32" height="32" viewBox="0 0 32 32" class="next">
            <use xlink:href="#instagram"></use>
          </svg>
        </a>
      </div>
    </div>
  </div>

  <div class="rodape">
    <p>Todos os direitos reservados para Cavalcante & Lustosa Advogados. Desenvolvido por <a
        href="https://agenciasalt.com.br" target="_blank">Agéncia Salt.</a></p>

  </div>
</footer>

<? } ?>

<script src="<?=get_template_directory_URI()?>/app/app.js" type="module">

</script>

<script>

</script>
<?php wp_footer(); ?>

</body>

</html>