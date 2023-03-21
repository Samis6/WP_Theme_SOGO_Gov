<footer id="footer">



	
<div class="coluna coluna-logo">
  <a href="#">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="Logo">
</a>
</div>
<div class="coluna coluna-endereco">
  <h4>Endereço</h4>
  <hr>
  <p><?php the_field('rua','option')?> - <?php the_field('bairro','option')?> </p>
  <p>CEP: <?php the_field('cep','option') ?> - <?php the_field('cidade','option') ?> - <?php the_field('estado','option') ?> </p>
  <br>
  <h4>Contato</h4>
  <hr>
  <p><strong>Telefone: </strong><?php the_field('telefone','option') ?> </p>
  <p><strong>Email: </strong><?php the_field('email','option') ?> </p>
  <br>
  <h4>Horário de Funcionamento</h4>
  <hr>
  <p><strong>Expediente: </strong><?php the_field('expediente','option') ?></p>
</div>
<div class="coluna coluna-guia">
  <h4>Guia Rápido</h4>
  <hr>
  <ul>
    <li><a href="<?php the_field('glossario','option') ?>">Glossário</a></li>
    <li><a href="<?php the_field('ouvidoria','option') ?>">Ouvidoria</a></li>
    <li><a href="<?php the_field('mapa_do_site','option') ?>">Mapa do Site</a></li>
    <li><a href="<?php the_field('perguntas_frequentes','option') ?>">Perguntas Frequentes</a></li>
    <li><a href="<?php the_field('manual_de_navegacao','option') ?>">Manual de Navegação</a></li>
    <li><a href="<?php the_field('politica_de_privacidade','option') ?>">Política de Privacidade</a></li>
  </ul>
</div>
<div class="coluna coluna-redes">
  <h4>Redes Sociais</h4>
  <hr>
  <ul>
    <li><a href="<?php the_field('facebook','option') ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/face.png" alt="Facebook"></a></li>
    <li><a href="<?php the_field('youtube','option') ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube.png" alt="YouTube"></a></li>
    <li><a href="<?php the_field('instagram','option') ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insta.png" alt="Instagram"></a></li>
  </ul>
  <br>
  <h4>Newsletter</h4>
  <hr class="branca">
  <form>
    <input type="email" placeholder=" Digite seu e-mail">
    <button type="submit">Enviar</button>
  </form>
</div>
</footer>


<section class="copy">
<div class="copy-line"></div>
<div class="copy-content">
  Copyright 2022 | <strong>Desenvolvido por SOGO Tecnologia</strong>
</div>
</section>


</body>


</html>