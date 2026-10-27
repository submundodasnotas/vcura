<?php
/**
 * VCura Terapias Theme Functions
 *
 * @package VCura
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme Setup
 */
function vcura_theme_setup() {
	// Suporte a título dinâmico pelo WordPress
	add_theme_support( 'title-tag' );

	// Suporte a imagens de destaque
	add_theme_support( 'post-thumbnails' );

	// Suporte a logotipo customizado no painel
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 300,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Registo de menus de navegação do WordPress
	register_nav_menus( array(
		'primary' => __( 'Menu Principal (Cabeçalho)', 'vcura' ),
		'footer'  => __( 'Menu do Rodapé', 'vcura' ),
	) );

	// Suporte a HTML5 semântico
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );
}
add_action( 'after_setup_theme', 'vcura_theme_setup' );

/**
 * Enfileiramento de Estilos e Scripts
 */
function vcura_enqueue_scripts() {
	// Google Fonts & Material Symbols
	wp_enqueue_style( 'vcura-google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap', array(), null );
	wp_enqueue_style( 'vcura-material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', array(), null );

	// Estilo principal do tema
	wp_enqueue_style( 'vcura-main-style', get_stylesheet_uri(), array(), '1.0.1' );

	// Tailwind CSS via CDN (carregado no <head> com prioridade)
	wp_enqueue_script( 'vcura-tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false );

	$tailwind_config = "
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						brand: {
							green: '#37A817',
							'green-dark': '#216D25',
							'green-soft': '#F2F8EF',
							white: '#FFFFFF',
							blue: '#173E8C',
							gray: '#F6F7F5',
							text: '#303830',
							'dark-forest': '#07170E',
							'dark-emerald': '#0E291B',
							'dark-surface': '#143825',
							'dark-accent': '#1C4A32',
							'dark-navy': '#0A1B24'
						}
					},
					fontFamily: {
						serif: ['\"Noto Serif\"', 'serif'],
						sans: ['\"Plus Jakarta Sans\"', 'sans-serif'],
						gabriola: ['Gabriola', 'Georgia', '\"Noto Serif\"', 'serif']
					},
					boxShadow: {
						'subtle': '0 4px 20px -2px rgba(33, 109, 37, 0.06)',
						'card': '0 8px 30px -4px rgba(33, 109, 37, 0.08)',
						'elevated': '0 16px 40px -8px rgba(33, 109, 37, 0.14)',
						'glow-green': '0 0 30px -4px rgba(55, 168, 23, 0.35)',
						'glow-dark': '0 20px 40px -10px rgba(7, 23, 14, 0.5)'
					}
				}
			}
		};
	";
	wp_add_inline_script( 'vcura-tailwindcss', $tailwind_config, 'after' );

	// Dicionário de Traduções
	wp_enqueue_script( 'vcura-translations', get_template_directory_uri() . '/assets/js/translations.js', array(), '1.0.1', false );

	// Script interativo principal (no rodapé)
	wp_enqueue_script( 'vcura-main-script', get_template_directory_uri() . '/assets/js/main.js', array( 'vcura-translations' ), '1.0.1', true );

	// Passar variáveis PHP/WordPress para o JavaScript
	wp_localize_script( 'vcura-main-script', 'vcuraData', array(
		'themeUri' => get_template_directory_uri(),
		'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
		'homeUrl'  => home_url( '/' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'vcura_enqueue_scripts' );
