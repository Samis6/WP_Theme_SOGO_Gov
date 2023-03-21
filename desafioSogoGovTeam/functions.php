<?php 

		// Register Menus.
		register_nav_menus(
      array(
        'main_menu'	 => esc_html__( 'Main Menu' ),
        'main_menu_home' => esc_html__( 'Homepage main menu' ),
      )
      );


      if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}


function widgets_novos_widgets_init() {

	register_sidebar( array(
		'name' => 'Rodape',
		'id' => 'rodape_widgets',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'widgets_novos_widgets_init' );

add_theme_support( 'post-thumbnails' );



//Inicio das cores personalizadas
function meu_tema_personalizado($wp_customize) {

  // Adicionando a seção de cores personalizadas
  $wp_customize->add_section('cores_personalizadas', array(
    'title' => __('Cores Personalizadas', 'meu-tema'),
    'description' => __('Personalize as cores do seu tema', 'meu-tema'),
    'priority' => 30
  ));

  // Adicionando a opção de cor padrão do tema
  $wp_customize->add_setting('cor_padrao', array(
    'default' => '#213465',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_padrao', array(
    'label' => __('Cor Padrão do Tema', 'meu-tema'),
    'section' => 'cores_personalizadas',
    'settings' => 'cor_padrao'
  )));

}
add_action('customize_register', 'meu_tema_personalizado');
//Fim das cores personalizadas

// /**
//  * Tornar obrigatória a adição de imagem destacada para post, adicionar ou atualizar, somente para postagens da categoria "destaque_rotativocom_imagens".
//  */
// function obrigar_imagem_destacada( $post_id ) {
// 	// Verifica se é uma atualização ou uma nova postagem.
// 	if ( !wp_is_post_revision( $post_id ) && !isset( $_POST['add_post'] ) ) {
// 			$post = get_post( $post_id );
// 			// Verifica se a postagem é do tipo que deve ter uma imagem destacada (pode ser personalizado para diferentes tipos).
// 			if ( $post->post_type == 'post' || $post->post_type == 'page' ) {
// 					// Verifica se a postagem está na categoria "destaque_rotativocom_imagens".
// 					if ( has_term( 'destaque_rotativocom_imagens', 'category', $post_id ) ) {
// 							// Verifica se uma imagem destacada já foi definida.
// 							if ( !has_post_thumbnail( $post_id ) ) {
// 									// Não há imagem destacada, portanto, exibe uma mensagem de erro e impede que a postagem seja salva.
// 									$error_message = __( 'Por favor, adicione uma imagem destacada para esta postagem.' );
// 									wp_die( $error_message );
// 							}
// 					}
// 			}
// 	}
// }
// add_action( 'save_post', 'obrigar_imagem_destacada' );
