<?php 

// Registrar custom post type "empreendimentos"
function registrar_custom_post_empreendimentos() {
    $labels = array(
        'name'               => 'Empreendimentos',
        'singular_name'      => 'Empreendimento',
        // outros rótulos
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'supports'           => array( 'title', 'editor', 'thumbnail' ), // Adicione 'thumbnail' aqui
        // outras opções
    );

    register_post_type( 'empreendimentos', $args );
}
add_action( 'init', 'registrar_custom_post_empreendimentos' );


// Registrar taxonomia "Cidades"
function registrar_taxonomia_cidades() {
    $labels = array(
        'name'                       => 'Cidades',
        'singular_name'              => 'Cidade',
        'search_items'               => 'Pesquisar Cidades',
        'all_items'                  => 'Todas as Cidades',
        'parent_item'                => 'Cidade Pai',
        'parent_item_colon'          => 'Cidade Pai:',
        'edit_item'                  => 'Editar Cidade',
        'update_item'                => 'Atualizar Cidade',
        'add_new_item'               => 'Adicionar Nova Cidade',
        'new_item_name'              => 'Nome da Nova Cidade',
        'menu_name'                  => 'Cidades',
    );

    $args = array(
        'hierarchical'              => true,
        'labels'                    => $labels,
        'show_ui'                   => true,
        'show_admin_column'         => true,
        'query_var'                 => true,
        'rewrite'                   => array( 'slug' => 'cidade' ),
        'show_in_menu'              => true, // Adicionado para exibir no menu lateral
    );

    register_taxonomy( 'cidades', 'empreendimentos', $args );
}
add_action( 'init', 'registrar_taxonomia_cidades', 0 );


// Registrar taxonomia "Estados"
function registrar_taxonomia_estados() {
    $labels = array(
        'name'                       => 'Estados',
        'singular_name'              => 'Estado',
        'search_items'               => 'Pesquisar Estados',
        'all_items'                  => 'Todos os Estados',
        'parent_item'                => 'Estado Pai',
        'parent_item_colon'          => 'Estado Pai:',
        'edit_item'                  => 'Editar Estado',
        'update_item'                => 'Atualizar Estado',
        'add_new_item'               => 'Adicionar Novo Estado',
        'new_item_name'              => 'Nome do Novo Estado',
        'menu_name'                  => 'Estados',
    );

    $args = array(
        'hierarchical'              => true,
        'labels'                    => $labels,
        'show_ui'                   => true,
        'show_admin_column'         => true,
        'query_var'                 => true,
        'rewrite'                   => array( 'slug' => 'estado' ),
        'show_in_menu'              => true, // Adicionado para exibir no menu lateral
    );

    register_taxonomy( 'estados', 'empreendimentos', $args );
}
add_action( 'init', 'registrar_taxonomia_estados', 0 );


// Registrar taxonomia "Tipos"
function registrar_taxonomia_tipos() {
    $labels = array(
        'name'                       => 'Tipos',
        'singular_name'              => 'Tipo',
        'search_items'               => 'Pesquisar Tipos',
        'all_items'                  => 'Todos os Tipos',
        'parent_item'                => 'Tipo Pai',
        'parent_item_colon'          => 'Tipo Pai:',
        'edit_item'                  => 'Editar Tipo',
        'update_item'                => 'Atualizar Tipo',
        'add_new_item'               => 'Adicionar Novo Tipo',
        'new_item_name'              => 'Nome do Novo Tipo',
        'menu_name'                  => 'Tipos',
    );

    $args = array(
        'hierarchical'              => true,
        'labels'                    => $labels,
        'show_ui'                   => true,
        'show_admin_column'         => true,
        'query_var'                 => true,
        'rewrite'                   => array( 'slug' => 'tipo' ),
        'show_in_menu'              => true, // Adicionado para exibir no menu lateral
    );

    register_taxonomy( 'tipos', 'empreendimentos', $args );
}
add_action( 'init', 'registrar_taxonomia_tipos', 0 );


add_theme_support( 'post-thumbnails' ); 

add_filter( 'wpcf7_autop_or_not', '__return_false' );

?>
