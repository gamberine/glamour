<?php

/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define('ASTRA_THEME_VERSION', '4.8.7');
define('ASTRA_THEME_SETTINGS', 'astra-settings');
define('ASTRA_THEME_DIR', trailingslashit(get_template_directory()));
define('ASTRA_THEME_URI', trailingslashit(esc_url(get_template_directory_uri())));
define('ASTRA_THEME_ORG_VERSION', file_exists(ASTRA_THEME_DIR . 'inc/w-org-version.php'));

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define('ASTRA_EXT_MIN_VER', '4.8.4');

/**
 * Load in-house compatibility.
 */
if (ASTRA_THEME_ORG_VERSION) {
    require_once ASTRA_THEME_DIR . 'inc/w-org-version.php';
}

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define('ASTRA_PRO_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url('https://wpastra.com/pricing/', 'dashboard', 'free-theme', 'dashboard') : 'https://woocommerce.com/products/astra-pro/');
define('ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url('https://wpastra.com/pricing/', 'customizer', 'free-theme', 'upgrade') : 'https://woocommerce.com/products/astra-pro/');

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if (is_admin()) {
    require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

// Enable NPS Survey only if the starter templates version is < 4.3.7 or > 4.4.4 to prevent fatal error.
if (! defined('ASTRA_SITES_VER') || version_compare(ASTRA_SITES_VER, '4.3.7', '<') || version_compare(ASTRA_SITES_VER, '4.4.4', '>')) {
    // NPS Survey Integration
    require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-notice.php';
    require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-survey.php';
}

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if (is_admin()) {
    /**
     * Admin Menu Settings
     */
    require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
    require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
    require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/surecart/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if (version_compare(PHP_VERSION, '5.4', '>=')) {
    require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
    require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
    require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if (version_compare(PHP_VERSION, '5.3', '>=')) {
    require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';


// ------------------- gamberine _____________ 


function tema_base_gamb_scripts()
{
    // Note, the is_IE global variable is defined by WordPress and is used
    // to detect if the current browser is internet explorer.
    global $is_IE, $wp_scripts;
    if ($is_IE) {
        // If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
        // wp_enqueue_style('tema-base-gamb-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get('Version'));
    } else {
        // If not IE, use the standard stylesheet.
        wp_enqueue_style('style-theme', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
        wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/style-variaveis.css');
        wp_enqueue_style('quesha-font', 'https://fonts.cdnfonts.com/css/quesha', array(), null);
        wp_enqueue_style('corinthia-noto-font', 'https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap', array(), null);
        // wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/css/slick.css');
        // wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
        // wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css');
        // wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/css/animate.css');
        // wp_enqueue_style('bootstrap-icons', get_stylesheet_directory_uri() . '/assets/fonts/bootstrap-icons.css');
        // wp_enqueue_style('fontAwesome', get_stylesheet_directory_uri() . '/assets/fonts/fontAwesome/css/all.css');
        // wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), null, true);
        // wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);
        // wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-1.11.0.min.js');
        // wp_enqueue_script('jquery-migrate', get_stylesheet_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js');
        // wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js');
        // wp_enqueue_script('popper', get_stylesheet_directory_uri() . '/assets/js/popper.min.js');
        // wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/assets/js/slick.min.js');

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
            background: linear-gradient(261deg, #090d1e 10%, #101a3f 90%) !important;
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

/* add novo formato get_field ACF - gamberine */
add_filter('acf/the_field/escape_html_optin', '__return_true');
add_filter('wpcf7_form_autocomplete', function ($autocomplete) {
    $autocomplete = 'off';
    return $autocomplete;
}, 10, 1);
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
// Passo 1: Criar uma função personalizada "Administrador Site" com permissões específicas
function criar_funcao_administrador_site()
{
    // Verifica se a função já existe
    if (!get_role('administrador_site')) {
        add_role(
            'administrador_site',
            __('Administrador Site'),
            [
                // Capabilidades básicas de leitura e edição
                'read'                   => true,
                'edit_posts'             => true,
                'delete_posts'           => true,
                'publish_posts'          => true,
                'upload_files'           => true,
                'manage_categories'      => true,
                // Gerenciamento de plugins e temas
                'install_plugins'        => true,
                'activate_plugins'       => true,
                'edit_plugins'           => false,
                'delete_plugins'         => false,
                'install_themes'         => false,
                'edit_themes'            => false,
                'delete_themes'          => false,
                // Capacidade de gerenciar usuários e definir permissões
                'list_users'             => true,
                'edit_users'             => true,
                'delete_users'           => true,
                'create_users'           => true,
                'promote_users'          => true,
                // Configurações do site
                'manage_options'         => false,
                'edit_dashboard'         => false,
                'update_core'            => false,
                'update_plugins'         => true,
                'update_themes'          => false,
                'manage_links'           => true,
                'edit_files'             => false,
                // Outras permissões administrativas
                'edit_private_posts'     => true,
                'edit_published_posts'   => true,
                'delete_private_posts'   => true,
                'delete_published_posts' => true,
                'publish_pages'          => true,
                'edit_pages'             => true,
                'delete_pages'           => true,
                'edit_private_pages'     => true,
                'delete_private_pages'   => true,
                'edit_published_pages'   => true,
                'delete_published_pages' => true,
                'unfiltered_html'        => false, // Atenção: permite HTML sem filtro (use com cautela)
                // Defina outras permissões conforme necessário
                'manage_options'         => false, // Removendo acesso a configurações
                'edit_theme_options'     => false, // Removendo acesso a temas
                'activate_plugins'       => true, // Removendo acesso a plugins
                'update_core'            => false, // Removendo acesso a atualizações
            ]
        );
    }
}
add_action('init', 'criar_funcao_administrador_site');

// Passo 2: Atribuir a função de "Administrador Comum" a novos usuários
function atribuir_funcao_administrador_site($user_id)
{
    $user = new WP_User($user_id);
    $user->set_role('administrador_site');
}
add_action('user_register', 'atribuir_funcao_administrador_site');


// Função para remover as funções padrão "Colaborador" e "Autor"
function remover_funcoes_padrao()
{
    // Verifica se a função existe antes de tentar removê-la
    if (get_role('administrador_comum')) {
        remove_role('administrador_comum');
    }
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
}
add_action('init', 'remover_funcoes_padrao');

// Função para renomear rótulos dos perfis
function renomear_funcoes_usuario($roles)
{
    if (isset($roles['shop_manager'])) {
        $roles['shop_manager']['name'] = 'Gerente';
    }
    if (isset($roles['customer'])) {
        $roles['customer']['name'] = 'Cliente';
    }
    if (isset($roles['subscriber'])) {
        unset($roles['subscriber']); // Remove o perfil Assinante
    }
    return $roles;
}
add_filter('editable_roles', 'renomear_funcoes_usuario');

// Função para renomear rótulos no dropdown
function renomear_funcoes_usuario_dropdown($role)
{
    if ($role === 'Shop manager') {
        return 'Gerente';
    }
    if ($role === 'Customer') {
        return 'Cliente';
    }
    if ($role === 'Subscriber') {
        return ''; // Remove a exibição do Assinante
    }
    return $role;
}
add_filter('role_names', 'renomear_funcoes_usuario_dropdown');

// Modifica o HTML do dropdown dinamicamente
function modificar_dropdown_roles($role_options)
{
    unset($role_options['subscriber']); // Remove a opção Assinante
    $role_options['shop_manager'] = 'Gerente'; // Atualiza Shop manager
    $role_options['customer'] = 'Cliente'; // Atualiza Customer
    return $role_options;
}
add_filter('wp_dropdown_roles', 'modificar_dropdown_roles');
