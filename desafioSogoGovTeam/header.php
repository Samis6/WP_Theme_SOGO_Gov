<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title><?php bloginfo('name'); ?></title>

  <style>
    :root {
      --cor-padrao: <?php echo get_theme_mod('cor_padrao', '#213465'); ?>;
    }
  </style>

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <?php wp_head(); ?>
</head>




<div id="filtro-contraste"></div>

<header>
        <nav class="nav primary">
            <div class="div primary">
                <ul>
                    <li><div>1</div><a href="#content">Ir para o conteúdo</a></li>
                    <li><div>2</div><a href="#navegacao">Ir para o menu</a></li>
                    <li><div>3</div><a href="#s">Ir para a busca</a></li>
                    <li><div>4</div><a href="#footer">Ir para o rodapé</a></li>
                </ul>
            </div>
            <div class="div secundary">
                <ul>
                    <li><span>A+</span><a href="#" id="aumentar-fonte">Aumentar Fonte</a></li>
                    <li>|<span>A-</span><a href="#" id="diminuir-fonte">Diminuir Fonte</a></li>
                    <li>|<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/contrast.png" alt=""></span><a href="#" id="contraste">Contraste</a></li>
                    <li>|<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/transparencia-fiscal.png" alt=""></span><a href="">Transparência Fiscal</a></li>
                </ul>
            </div>
        </nav>
        <nav class="nav secundary">
            <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo-header.png" alt="logo-sogo"></div>
            <div id="navegacao">
            
                <?php wp_nav_menu( array('theme_location'=>'Main Menu'))?>
                
            </div>
        </nav>
    </header>
    


    <script>

// Teclas numéricas como atalhos
document.addEventListener('keypress', function(event) {
    if (event.key === '1') {
      window.location.href = '#content';
    } else if (event.key === '2') {
      window.location.href = '#navegacao';
    } else if (event.key === '3') {
      window.location.href = '#s';
    } else if (event.key === '4') {
      window.location.href = '#footer';
    }
  });

//   Aumento de letras
var tamanhoFonte = 16; // tamanho da fonte inicial
var incremento = 2; // quantidade de pixels para aumentar/diminuir a fonte

// adiciona evento de clique para o botão de aumentar a fonte
document.getElementById('aumentar-fonte').addEventListener('click', function() {
  tamanhoFonte += incremento; // aumenta o tamanho da fonte
  document.querySelectorAll('*').forEach(function(elemento) {
    elemento.style.fontSize = tamanhoFonte + 'px'; // define o novo tamanho da fonte para todos os elementos
  });
});

// adiciona evento de clique para o botão de diminuir a fonte
document.getElementById('diminuir-fonte').addEventListener('click', function() {
  tamanhoFonte -= incremento; // diminui o tamanho da fonte
  document.querySelectorAll('*').forEach(function(elemento) {
    elemento.style.fontSize = tamanhoFonte + 'px'; // define o novo tamanho da fonte para todos os elementos
  });
});



// Acessibilidade:

var linkContraste = document.getElementById('contraste');

var body = document.querySelector('body');

function toggleContraste() {
  body.classList.toggle('contrast');
}

linkContraste.addEventListener('click', toggleContraste);


// Fim da Sessão de acessibilidade

//Tabs sessão de ajuda

    document.addEventListener('DOMContentLoaded', function() {
      // Get all the tabs
      var tabs = document.querySelectorAll('.tab a');
  
      // Add a click event listener to each tab
      tabs.forEach(function(tab) {
        tab.addEventListener('click', function(event) {
  
          // Remove the 'active' class from all tabs
          tabs.forEach(function(tab) {
            tab.classList.remove('active');
          });
  
          // Add the 'active' class to the clicked tab
          event.target.classList.add('active');
          
        });
      });
    });
// ^ Fim da parte responsável pelas tabs na sessão de ajuda
  


  </script>