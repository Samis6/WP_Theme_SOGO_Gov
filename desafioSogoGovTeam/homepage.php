<?php
/*
Template Name: HOMEPAGE
*/
?>

<?php get_header(); ?>



<main>
<section class="primary section">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-1-home.png" alt="banner">
          <div class="search-container"  >
          <?php get_search_form(); ?>


          </div>
      </section>
      <section>
          <div>

          
 
                                                              <?php query_posts( array(
                                                                'posts_per_page' => 1,
                                                                'category_name' => 'destaque_rotativocom_imagens'
                                                              )); ?>

                                                              <?php if( have_posts() ): while ( have_posts() ) : the_post();  ?>

                                                              <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
          
                <article class="main article" id="content" style="background: url('<?php echo $backgroundImg[0]; ?>');">
              
                  <div>
                      <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), 9 );; ?></a></h2>
                      <hr>
                      <p><a href="<?php the_permalink() ?>"> <?php the_excerpt(); ?></a></p>
                  </div>
              </article>

                                                              <?php
          
                                                              // Stop the loop when all posts are displayed
                                                              endwhile;
                                                              endif;
                                                              ?>

          </div>
          <div class="column-2">
              <div>

                                                              <?php query_posts( array(
                                                                'posts_per_page' => 1,
                                                                  'offset' => 1,
                                                                 'category_name' => 'destaque_rotativocom_imagens'
                                                              )); ?>

                                                              <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>

                  <article class="secundary article">
                      <div>
                          <?php the_post_thumbnail(); ?>
                          <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                      </div>
                  </article>

                                                                <?php
                                                                  // Stop the loop when all posts are displayed
                                                                endwhile;
                                                                endif;
                                                                ?>

                                                              <?php query_posts( array(
                                                                'posts_per_page' => 1,
                                                                  'offset' => 2,
                                                                  'category_name' => 'destaque_rotativocom_imagens'
                                                              )); ?>

                                                              <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>

                  <article class="secundary article 2">
                      <div>
                          <?php the_post_thumbnail(); ?>
                          <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                      </div>
                  </article>

                                                                <?php
                                                                  // Stop the loop when all posts are displayed
                                                                endwhile;
                                                                endif;
                                                                ?>
              </div>
              <div>
                                                              <?php query_posts( array(
                                                                'posts_per_page' => 1,
                                                                  'offset' => 3,
                                                                  'category_name' => 'destaque_rotativocom_imagens'
                                                              )); ?>

                                                              <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
                  <article class="end article">
                      <div>
                      <?php the_post_thumbnail(); ?>
                          <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                      </div>
                  </article>
                                                              <?php
                                                                // Stop the loop when all posts are displayed
                                                              endwhile;
                                                              endif;
                                                              ?>
              </div>
              <div id="container-home">
                <ul style="display: flex; flex-direction: column; justify-content: space-between; text-align: left;">
                <?php query_posts( array(
                                                                'posts_per_page' => 6,
                                                                'category_name' => 'destaque-fixo'
                                                              )); ?>

                                                              <?php if( have_posts() ): while ( have_posts() ) : the_post();  ?>
                  <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), 6 );; ?></a></li>
                  <?php
          
          // Stop the loop when all posts are displayed
          endwhile;
          endif;
          ?>

                </ul>
              </div>
          </div>

      </section>
  </main>

  <body>
  
    <div class="compet" id="competencias">
      <h2>Descubra todas as competências das secretarias e órgãos do seu município.</h2>
      <hr>
      <ul class="tab">
        <li><a href="#competencias" class="active">Secretarias</a></li>
        <li><a href="#competencias">Órgãos</a></li>
      </ul>
      <div class="form">
        <select>
          <option>Selecione a secretaria</option>
          <option>Secretaria 1</option>
          <option>Secretaria 2</option>
          <option>Secretaria 3</option>
        </select>
        <button>Ver detalhes</button>
      </div>
    </div>
  
    <div class="section1">
      <div class="image-container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sogoonline.png" alt="Descrição da imagem">
      </div>
      <div class="subsections1">
        <div class="subsection1">
          <div class="circle">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/oficios.png" alt="Ícone ofícios">
          </div>
          <h2>Ofícios</h2>
          <p>Consulte a autenticidade e andamento dos ofícios recebidos.</p>
        </div>
        <div class="subsection1">
          <div class="circle">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/protocolos.png" alt="Ícone protocolos">
          </div>
          <h2>Protocolos</h2>
          <p>Abertura e Consulta de Requerimentos Administrativos</p>
        </div>
        <div class="subsection1">
          <div class="circle">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/chamados.png" alt="Ícone chamados">
          </div>
          <h2>Chamados</h2>
          <p>Servidor Municipal, abra aqui o seu Chamado para a Informática.</p>
        </div>
        <div class="subsection1">
          <div class="circle">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/viabilidade.png" alt="Ícone viabilidade">
          </div>
          <h2>Viabilidade de Construção</h2>
          <p>Abertura e consulta.</p>
        </div>
        <div class="subsection1">
          <div class="circle">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/intimacoes.png" alt="Ícone intimações">
          </div>
          <h2>Intimações</h2>
          <p>Consulte a autenticidade de intimações recebidas.</p>
        </div>
      </div>
      
    </div>
  
    
   
  
  </body>

  



<body>
  <section class="ajuda-section">
    <h2 class="ajuda-title">Em que podemos te ajudar?</h2>
    <p class="ajuda-subtitle">Escolha de forma rápida o serviço que procura</p>
    <ul class="tab">
      <li><a href="#mais-acessados" class="active">Mais acessados</a></li>
      <li><a href="#transparencia">Transparência</a></li>
      <li><a href="#cidadao">Cidadão</a></li>
      <li><a href="#servidor">Servidor</a></li>
      <li><a href="#turismo">Turismo</a></li>
      <li><a href="#tributario">Tributário</a></li>
    </ul>

    <table class="botao-table">
      <tr>
        <td><button class="botao"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/portal.png" alt="Ícone 1"><span class="botao-titulo">Portal da Transparência</span></button></td>
        <td><button class="botao"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/serviços.png" alt="Ícone 2"><span class="botao-titulo">Serviços SAAE</span></button></td>
        <td><button class="botao"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/licita.png" alt="Ícone 3"><span class="botao-titulo">licitações e Contratos</span></button></td>
      </tr>
      <tr>
        <td><button class="botao"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/diario.png" alt="Ícone 4"><span class="botao-titulo">Diário Oficial</span></button></td>
        <td><button class="botao"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/plano.png" alt="Ícone 5"><span class="botao-titulo">Plano Plurianual</span></button></td>
        <td><button class="botao"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/conven.png" alt="Ícone 6"><span class="botao-titulo">Convênios</span></button></td>
      </tr>
      <tr>
        <td><button class="botao"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/regula.png" alt="Ícone 7"><span class="botao-titulo">Regulamentação da LAI</span></button></td>
        <td><button class="botao"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ouvidoria.png" alt="Ícone 8"><span class="botao-titulo">Ouvidoria</span></button></td>
        <td><button class="botao"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/escola.png" alt="Ícone 9"><span class="botao-titulo">Escola de Gestão</span></button></td>
      </tr>
    </table>
    

     </section>
  
</body>

<body>
  
  <div class="containerinsta">
    <div class="wrapper">
      <div class="headersection">
        <p class="instagram"><strong>Acompanhe</strong> nosso Instagram</p>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Instagram/Images/perfis.png" alt="imagem" class="logo">
      </div>
      <hr>
      <div class="content">
        <p class="subtitle">Um novo tempo de trabalho!</p>
        <table class="gallery">
          <tr>
            <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Instagram/Images/1.png" alt="imagem1"></td>
            <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Instagram/Images/2.png" alt="imagem2"></td>
            <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Instagram/Images/3.png" alt="imagem3"></td>
            <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Instagram/Images/4.png" alt="imagem4"></td>
          </tr>
          <tr>
            <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Instagram/Images/5.png" alt="imagem5"></td>
            <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Instagram/Images/6.png" alt="imagem6"></td>
            <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Instagram/Images/7.png" alt="imagem7"></td>
            <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Instagram/Images/8.png" alt="imagem8"></td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <div class="videos">
    <div class="videos-header">
      <div class="videos-title">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video.png" alt="Ícone de câmera">
        <h2>Acompanhe <strong>nossos vídeos</strong></h2>
      </div>
      <a href="#" class="videos-link">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/plus.png" alt="Ícone de seta para a direita">
        <span>Ver mais vídeos</span>
      </a>
    </div>
    <div class="videos-body">
      <div class="video">
        <iframe width="590" height="266" src="https://www.youtube.com/embed/jfKfPfyJRdk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div class="videos-images">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video1.png" alt="Imagem 1">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video2.png" alt="Imagem 2">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video3.png" alt="Imagem 3">
      </div>
    </div>
  </div>


 

	
<?php get_footer(); ?>

