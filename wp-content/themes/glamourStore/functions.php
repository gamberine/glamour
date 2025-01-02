<!-- Gamberine - Editar functions em \inc\class-storefront.php -->

<?php

/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme('storefront');
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if (! isset($content_width)) {
    $content_width = 980; /* pixels */
}

$storefront = (object) array(
    'version'    => $storefront_version,

    /**
     * Initialize all the things.
     */
    'main'       => require 'inc/class-storefront.php',
    'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';
require 'inc/wordpress-shims.php';

if (class_exists('Jetpack')) {
    $storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if (storefront_is_woocommerce_activated()) {
    $storefront->woocommerce            = require 'inc/woocommerce/class-storefront-woocommerce.php';
    $storefront->woocommerce_customizer = require 'inc/woocommerce/class-storefront-woocommerce-customizer.php';

    require 'inc/woocommerce/class-storefront-woocommerce-adjacent-products.php';

    require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
    require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
    require 'inc/woocommerce/storefront-woocommerce-functions.php';
}

if (is_admin()) {
    $storefront->admin = require 'inc/admin/class-storefront-admin.php';

    require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if (version_compare(get_bloginfo('version'), '4.7.3', '>=') && (is_admin() || is_customize_preview())) {
    require 'inc/nux/class-storefront-nux-admin.php';
    require 'inc/nux/class-storefront-nux-guided-tour.php';
    require 'inc/nux/class-storefront-nux-starter-content.php';
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */

// ------------------- gamberine _____________ 


function tema_base_gamb_scripts()
{
    global $is_IE, $wp_scripts;
    if ($is_IE) {
        // If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
        // wp_enqueue_style('tema-base-gamb-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get('Version'));
    } else {
        // If not IE, use the standard stylesheet.
        wp_enqueue_style('style-theme', get_template_directory_uri() . '/style-gamberine.css', array(), wp_get_theme()->get('Version'));
        wp_enqueue_style('variaveis', get_stylesheet_directory_uri() . '/style-variaveis.css');
        // wp_enqueue_style('quesha-font', 'https://fonts.cdnfonts.com/css/quesha', array(), null);
        wp_enqueue_style('corinthia-noto-font', 'https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap', array(), null);
        wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js');
        wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css');
        wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap/bootstrap.js', array('jquery'), null, true);
        wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap/bootstrap.bundle.min.js', array('jquery'), null, true);
        wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/css/slick.css');
        wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css');
        wp_enqueue_script('slick-min', get_stylesheet_directory_uri() . '/assets/js/slick.min.js');
        wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/css/animate.css');
        wp_enqueue_style('fontAwesome', get_stylesheet_directory_uri() . '/assets/fonts/quesha.css');
        // wp_enqueue_style('fontAwesome', get_stylesheet_directory_uri() . '/assets/fonts/fontAwesome/css/all.css');

    }
    // // RTL styles.
    // wp_style_add_data('tema-base-gamb-style', 'rtl', 'replace');
    // // Print styles.
    // wp_enqueue_style('tema-base-gamb-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get('Version'), 'print');
    // // Threaded comment reply styles.
    // if (is_singular() && comments_open() && get_option('thread_comments')) {
    //     wp_enqueue_script('comment-reply');
    // }
}
add_action('wp_enqueue_scripts', 'tema_base_gamb_scripts');


/* Admin CSS file */
function tpw_admin_styles()
{
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style-admin.css');
}
add_action('admin_head', 'tpw_admin_styles');


/* Esconder a versão do WordPress */
remove_action('wp_head', 'wp_generator');


/* Alterar o rodapé da administração */
add_filter('admin_footer_text', 'bl_admin_footer');
function bl_admin_footer()
{
    echo ' Desenvolvido por: <a href="https://gamberine.com.br" target="_blank">Gamberine Comunicação Digital</a> ';
}

// Logo Login
function gamberine_login_edit()
{
    echo '<style type="text/css">';
    echo 'h1 { background: url(' . get_bloginfo('template_directory') . '/' . 'imagens/';
    // Imagem
    echo 'logo.png';
    echo ') 50% 50% no-repeat !important;   
				width: auto !important;
				background-size: contain !important;
				height: 100px !important; 
			}
        .login h1 a,
        .language-switcher {
            display: none !important;
        }
        body {
            background: linear-gradient(261deg, #090d1e 10%, #13235e 90%) !important;
        }

        .wp-core-ui .button-primary {
            background: #B78406 !important;
            border-color: transparent;
            box-shadow: none;
            border: 0 !important;
            border-radius: 10px !important;
            color: #fff !important;
            text-decoration: none;
            text-shadow: none;
            transition: all ease .3s !important;
        }
        .wp-core-ui .button-primary:hover {
            background: #D8AA2B !important;
            opacity: 0.9;
            border: 0 !important;
            transition: all ease .3s !important;
        }
        .wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large {
            min-height: 40px;
            padding: 0 2vw;
        }
        input[type=color], input[type=date], input[type=datetime-local], input[type=datetime], input[type=email], input[type=month], input[type=number], input[type=password], input[type=search], input[type=tel], input[type=text], input[type=time], input[type=url], input[type=week], select, textarea {
            border: 1px solid #B78406 !important;
            outline: none!important;
        }
        input[type=checkbox]:focus, input[type=color]:focus, input[type=date]:focus, input[type=datetime-local]:focus, input[type=datetime]:focus, input[type=email]:focus, input[type=month]:focus, input[type=number]:focus, input[type=password]:focus, input[type=radio]:focus, input[type=search]:focus, input[type=tel]:focus, input[type=text]:focus, input[type=time]:focus, input[type=url]:focus, input[type=week]:focus, select:focus, textarea:focus{
        outline-color: #B78406 !important;
            box-shadow:none !important;
            border: 1px solid #B78406 !important;
            outline: none !important;
            border-radius: 3px;
        }
        .wp-core-ui .button, .wp-core-ui .button-secondary{
            border: 0;
            transition: all ease .3s !important;
        }
        input[type=checkbox], input[type=radio] {
            border: 1px solid #B78406 !important;
        }
        input[type=checkbox]:checked::before {  
            filter: brightness(0);
        }
        .login #login_error, .login .message, .login .success {
            border-left: 1px solid #B78406 !important;
        }
        #login {
            padding: 2% 0 0 !important;
        }
        .login #nav {
            float: right;
            margin-block: 1rem !important;
        }
        .login #backtoblog a:hover, .login #nav a:hover, .login h1:hover {
            color: #fff !important;
            // transition: all ease .3s !important;
        }
        .login form {
            border: 1px solid #fff;
            box-shadow: 5px 5px 10px rgba(0,0,0,.08);
            color: #63696B !important;
            border-radius: 10px;
            margin-top: 10px;
        }
        .login .button.wp-hide-pw .dashicons {
            color: #D8AA2B;
        }
        .login a {
        text-decoration: none !important;
        }
        .login #backtoblog a {
            color: #fff;
        }
        .login #backtoblog a:focus, .login #nav a:focus, .login h1:focus {
            box-shadow: none;
        }
        .login h1 {
            height: 120px !important;
            padding-block: 1rem;
            margin-bottom: 1rem;
        }
        .login h1:focus {
            margin: 0;
        }
        #backtoblog {
            background: #b78506b4;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80%;
            margin: 0 auto;
            margin-top: 1rem;
            margin-bottom: 2rem;
            border-radius: 10px;
            transition: all ease .3s !important;
        }
        #backtoblog:hover {
            background: #e2a50bb4;
            transition: all ease .3s !important;
        }
                </style>';
}
add_action('login_head', 'gamberine_login_edit');
// fim Logo Login


/* função utilizar editor clássico */
add_filter('use_block_editor_for_post', '__return_false', 10);


/* gamberine função detectar qual navegador está acessando */
add_filter('body_class', 'detect_browser');
function detect_browser($classes)
{
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
    if ($is_opera) $classes[] = 'opera';
    elseif ($is_safari) $classes[] = 'safari';
    elseif ($is_chrome) $classes[] = 'chrome';
    elseif ($is_IE) $classes[] = 'ie';
    elseif ($is_iphone) $classes[] = 'ios-app';
    // Verificar se o acesso é feito por um aplicativo iOS
    if ($is_iphone) $classes[] = 'ios-app';
    return $classes;
}

// Salvando os grupos de campos ACF no diretório do tema
add_filter('acf/settings/save_json', function ($path) {
    // Define o caminho onde os arquivos JSON serão salvos
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
});

// Carregando os grupos de campos ACF a partir do diretório do tema
add_filter('acf/settings/load_json', function ($paths) {
    // Remove o caminho padrão
    unset($paths[0]);
    // Adiciona o caminho do diretório 'acf-json' no tema
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});


// Função para renomear o rótulo da função "Administrador" para "Super Admin"
function renomear_funcao_administrador($roles)
{
    if (isset($roles['administrator'])) {
        $roles['administrator']['name'] = 'Super Admin';
    }
    return $roles;
}
add_filter('editable_roles', 'renomear_funcao_administrador');
function renomear_funcao_administrador_dropdown($role)
{
    return $role === 'Administrator' ? 'Super-Admin' : $role;
}
add_filter('role_names', 'renomear_funcao_administrador_dropdown');


// Função para remover as funções padrão "Colaborador" e "Autor"
function remover_funcoes_padrao()
{
    // Verifica e remove a função "Colaborador" (contributor)
    if (get_role('contributor')) {
        remove_role('contributor');
    }
    // Verifica e remove a função "Autor" (author)
    if (get_role('author')) {
        remove_role('author');
    }
    // Verifica e remove a função "editor" (editor)
    if (get_role('editor')) {
        remove_role('editor');
    }
    // Verifica e remove a função "Assinante" (Assinante)
    if (get_role('subscriber')) {
        remove_role('subscriber');
    }
}
add_action('init', 'remover_funcoes_padrao');



/**Criação de Post-Types**/
function create_post_types()
{
    // /** Post Type: Conteúdo **/
    // $labels = array(
    //     "name" => __("Conteúdo", "post-type-conteudo"),
    //     "singular_name" => __("Conteúdo", "post-type-conteudo"),
    //     "all_items" => __("Todos", "post-type-conteudo"),
    //     "add_new" => __("Novo", "post-type-conteudo"), // Texto do botão "Novo" na barra menu superior
    //     "add_new_item" => __("", "post-type-conteudo"), // Texto do botão "Adicionar Novo", aqui está vazio
    //     "new_item" => __("Novo Conteúdo", "post-type-conteudo"), // Texto do botão no sidebar
    //     "edit_item" => __("Editar Conteúdo", "post-type-conteudo"),
    //     "view_item" => __("Ver Conteúdo", "post-type-conteudo"),
    //     "search_items" => __("Procurar Conteúdo", "post-type-conteudo"),
    //     "not_found" => __("Nenhum Conteúdo encontrado", "post-type-conteudo"),
    //     "not_found_in_trash" => __("Nenhum Conteúdo encontrado na lixeira", "post-type-conteudo"),
    //     "menu_name" => __("Conteúdo", "post-type-conteudo"),
    // );
    // $args = array(
    //     "label" => __("Conteúdo", "post-type-conteudo"),
    //     "labels" => $labels,
    //     "description" => "",
    //     "public" => true,
    //     "publicly_queryable" => true,
    //     "show_ui" => true, // O tipo de post será mostrado na interface do usuário
    //     "show_in_rest" => true,
    //     "rest_base" => "",
    //     "rest_controller_class" => "WP_REST_Posts_Controller",
    //     "has_archive" => false,
    //     "show_in_menu" => true, // Mostrar no menu
    //     "show_in_nav_menus" => true, // Não mostrar em menus de navegação
    //     "exclude_from_search" => true,
    //     "capability_type" => "post",
    //     "map_meta_cap" => true,
    //     "hierarchical" => true,
    //     "rewrite" => array("slug" => "conteudo", "with_front" => true),
    //     "query_var" => true,
    //     "menu_position" => 3,
    //     "menu_icon" => "dashicons-admin-customizer",
    //     "supports" => array("title"),
    // );
    // register_post_type("conteudo", $args);
    // /** Fim Post Type: Conteúdo **/

    /** Post Type: Banner **/
    $labels = array(
        "name" => __("Banner", "post-type-banner"),
        "singular_name" => __("Banner", "post-type-banner"),
        "all_items" => __("Todos", "post-type-banner"),
        "add_new" => __("Novo", "post-type-banner"), // Texto do botão "Novo" na barra menu superior
        "add_new_item" => __("Novo Banner", "post-type-banner"), // Texto do botão no alto da página
        "new_item" => __("Novo Banner", "post-type-banner"), // Texto do botão no sidebar
        "edit_item" => __("Editar Banner", "post-type-banner"),
        "view_item" => __("Ver Banner", "post-type-banner"),
        "search_items" => __("Procurar Banner", "post-type-banner"),
        "not_found" => __("Nenhum Banner encontrado", "post-type-banner"),
        "not_found_in_trash" => __("Nenhum Banner encontrado na lixeira", "post-type-banner"),
        "menu_name" => __("Banner", "post-type-banner"),
    );
    $args = array(
        "label" => __("Banner", "post-type-banner"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true, //somente conteúdo
        "show_in_nav_menus" => true, //somente conteúdo
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => array("slug" => "banner", "with_front" => true),
        "query_var" => true,
        "menu_position" => 4,
        "menu_icon" => "dashicons-cover-image",
        "supports" => array("title"),
    );
    register_post_type("banner", $args);
    /** fim post Type: Banner **/


    /** Post Type: Informações **/
    $labels = array(
        "name" => __("Informações", "post-type-infos"),
        "singular_name" => __("Informação", "post-type-infos"),
        "all_items" => __("Todos", "post-type-infos"),
        "add_new" => __("Novo", "post-type-infos"), // Texto do botão "Novo" na barra menu superior
        "add_new_item" => __("Nova Informação", "post-type-infos"), // Texto do botão no alto da página
        "new_item" => __("Nova Informação", "post-type-infos"), // Texto do botão no sidebar
        "edit_item" => __("Editar Informações", "post-type-infos"),
        "view_item" => __("Ver Informações", "post-type-infos"),
        "search_items" => __("Procurar Informações", "post-type-infos"),
        "not_found" => __("Nenhuma Informação encontrada", "post-type-infos"),
        "not_found_in_trash" => __("Nenhuma Informação na lixeira", "post-type-infos"),
        "menu_name" => __("Informações", "post-type-infos"),
    );
    $args = array(
        "label" => __("Informações", "post-type-infos"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true, //somente conteúdo
        "show_in_nav_menus" => true, //somente conteúdo
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => array("slug" => "infos", "with_front" => true),
        "query_var" => true,
        "menu_position" => 4,
        "menu_icon" => "dashicons-cover-image",
        "supports" => array("title"),
    );
    register_post_type("infos", $args);
    /** fim post Type: Informações **/
};
add_action('init', 'create_post_types');
/**Fecha Post-Types**/


/*Taxonomys*/
function create_taxonomys()
{
    /* Taxonomy: Banners*/
    $labels = [
        "name" => __("Categoria Banner", "custom-post-type-ui"),
        "singular_name" => __("Categoria Banner", "custom-post-type-ui"),
    ];
    $args = [
        "label" => __("Categoria Banner", "custom-post-type-ui"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => ['slug' => 'category_banner', 'with_front' => true,  'hierarchical' => true,],
        "show_admin_column" => true,
        "show_in_rest" => true,
        "rest_base" => "category_banner",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => true,
    ];
    register_taxonomy("category_banner", ["banner"], $args);
    /* fim Taxonomy: Banners*/
};
add_action('init', 'create_taxonomys');
/* fecha Taxonomys */
