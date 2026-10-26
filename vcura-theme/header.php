<?php
/**
 * Header Template
 *
 * @package VCura
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-white text-brand-text flex flex-col min-h-screen' ); ?>>
<?php wp_body_open(); ?>

	<!-- BARRA DE PROGRESSO DE SCROLL SUPERIOR DINÂMICA -->
	<div id="scroll-progress-bar" class="fixed top-0 left-0 h-[3.5px] bg-gradient-to-r from-brand-green via-emerald-400 to-brand-blue z-[70] transition-all duration-100 ease-out w-0 shadow-[0_0_12px_rgba(55,168,23,0.8)] pointer-events-none"></div>

	<!-- ========================================================================= -->
	<!-- 2. BARRA DE UTILIDADE SUPERIOR (IDIOMAS & CONTACTO RÁPIDO) -->
	<!-- ========================================================================= -->
	<aside class="bg-[#07170E] text-white/90 text-xs border-b border-brand-green/20 py-2 px-3 sm:px-6 relative z-[60]">
		<div class="max-w-7xl mx-auto flex items-center justify-between gap-3">
			
			<!-- Contacto Rápido Sem Quebra de Linha -->
			<div class="flex items-center gap-3 sm:gap-5 overflow-hidden">
				<a href="https://wa.me/351964423853" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-emerald-300 hover:text-white transition-colors whitespace-nowrap text-[11px] sm:text-xs font-medium" aria-label="Contacto WhatsApp VCura">
					<span class="material-symbols-outlined text-[15px] sm:text-[16px] text-brand-green shrink-0">chat</span>
					<span class="whitespace-nowrap">WhatsApp: <strong>964&nbsp;423&nbsp;853</strong></span>
				</a>
				<span class="hidden md:inline text-white/30">•</span>
				<span class="hidden md:inline text-white/70 whitespace-nowrap text-xs" data-i18n="topbar.parking">
					Alta de Lisboa • Lumiar (Estacionamento gratuito à porta)
				</span>
			</div>

			<!-- Chave / Dropdown de Idiomas do Topo -->
			<div class="relative inline-block text-left lang-dropdown-wrapper shrink-0">
				<button type="button" class="lang-dropdown-btn inline-flex items-center gap-1.5 sm:gap-2 px-2.5 sm:px-3 py-1 rounded-full border border-white/20 bg-white/10 hover:bg-white/20 text-white text-[11px] sm:text-xs font-medium transition-all shadow-xs focus:outline-none" aria-expanded="false" aria-haspopup="true" aria-label="Selecionar Idioma">
					<span class="lang-flag-current flex items-center">
						<img src="https://flagcdn.com/w40/pt.png" srcset="https://flagcdn.com/w80/pt.png 2x" alt="Bandeira de Portugal" class="flag-icon" />
					</span>
					<span class="lang-name-current font-medium">Portugal</span>
					<span class="material-symbols-outlined text-[15px] sm:text-[16px] text-white/70">expand_more</span>
				</button>
				
				<div class="lang-dropdown-menu hidden absolute right-0 mt-1.5 w-48 sm:w-52 rounded-2xl bg-white shadow-elevated border border-brand-gray py-2 z-[90] text-brand-text text-xs focus:outline-none">
					<div class="px-3 py-1 text-[10px] font-bold text-brand-text/50 uppercase tracking-wider border-b border-brand-gray mb-1" data-i18n="lang.label">
						Idioma / Language
					</div>
					<button type="button" onclick="changeLanguage('pt', 'Portugal', 'pt')" class="w-full text-left px-3.5 py-2 flex items-center gap-2.5 hover:bg-brand-green-soft hover:text-brand-green-dark transition-colors font-medium">
						<img src="https://flagcdn.com/w40/pt.png" srcset="https://flagcdn.com/w80/pt.png 2x" alt="Portugal" class="flag-icon" />
						<div class="flex items-center justify-between w-full">
							<span class="font-semibold text-brand-text text-xs">Português</span>
							<span class="text-[10px] text-brand-text/60 ml-2">Portugal</span>
						</div>
					</button>
					<button type="button" onclick="changeLanguage('en', 'Reino Unido', 'gb')" class="w-full text-left px-3.5 py-2 flex items-center gap-2.5 hover:bg-brand-green-soft hover:text-brand-green-dark transition-colors font-medium">
						<img src="https://flagcdn.com/w40/gb.png" srcset="https://flagcdn.com/w80/gb.png 2x" alt="Reino Unido" class="flag-icon" />
						<div class="flex items-center justify-between w-full">
							<span class="font-semibold text-brand-text text-xs">English</span>
							<span class="text-[10px] text-brand-text/60 ml-2">UK</span>
						</div>
					</button>
					<button type="button" onclick="changeLanguage('fr', 'França', 'fr')" class="w-full text-left px-3.5 py-2 flex items-center gap-2.5 hover:bg-brand-green-soft hover:text-brand-green-dark transition-colors font-medium">
						<img src="https://flagcdn.com/w40/fr.png" srcset="https://flagcdn.com/w80/fr.png 2x" alt="França" class="flag-icon" />
						<div class="flex items-center justify-between w-full">
							<span class="font-semibold text-brand-text text-xs">Français</span>
							<span class="text-[10px] text-brand-text/60 ml-2">France</span>
						</div>
					</button>
					<button type="button" onclick="changeLanguage('es', 'Espanha', 'es')" class="w-full text-left px-3.5 py-2 flex items-center gap-2.5 hover:bg-brand-green-soft hover:text-brand-green-dark transition-colors font-medium">
						<img src="https://flagcdn.com/w40/es.png" srcset="https://flagcdn.com/w80/es.png 2x" alt="Espanha" class="flag-icon" />
						<div class="flex items-center justify-between w-full">
							<span class="font-semibold text-brand-text text-xs">Español</span>
							<span class="text-[10px] text-brand-text/60 ml-2">España</span>
						</div>
					</button>
				</div>
			</div>

		</div>
	</aside>

	<!-- ========================================================================= -->
	<!-- 3. CABEÇALHO & NAVEGAÇÃO -->
	<!-- ========================================================================= -->
	<header class="sticky top-0 z-50 w-full bg-white/95 backdrop-blur-md border-b border-brand-gray shadow-sm transition-all duration-300" id="main-header">
		<div class="max-w-7xl mx-auto px-2.5 sm:px-6 lg:px-8 h-16 sm:h-20 flex items-center justify-between gap-2 sm:gap-4">
			
			<!-- Logótipo Oficial VCura -->
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>#hero" class="flex items-center gap-2 sm:gap-3 group shrink-0" aria-label="VCura Terapias - Página Inicial">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Logo.png' ); ?>" alt="Logótipo Oficial VCura Terapias" class="h-9 sm:h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-105" />
				<div class="flex flex-col">
					<span class="font-gabriola text-xl sm:text-3xl font-bold text-brand-green-dark tracking-tight leading-none whitespace-nowrap">VCura</span>
					<span class="text-[8px] sm:text-[11px] font-semibold text-brand-green tracking-widest uppercase mt-0.5 whitespace-nowrap">Terapias • Lisboa</span>
				</div>
			</a>

			<!-- Menu Desktop -->
			<nav class="hidden lg:flex items-center gap-1 xl:gap-2 text-sm font-medium text-brand-text" aria-label="Navegação Principal">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#hero" data-i18n="nav.home" class="px-3 py-2 rounded-full hover:text-brand-green hover:bg-brand-green-soft transition-colors font-semibold text-brand-green-dark">Início</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#tratamentos" data-i18n="nav.treatments" class="px-3 py-2 rounded-full hover:text-brand-green hover:bg-brand-green-soft transition-colors">Tratamentos</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#terapias" data-i18n="nav.therapies" class="px-3 py-2 rounded-full hover:text-brand-green hover:bg-brand-green-soft transition-colors">Terapias</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#quem-somos" data-i18n="nav.about" class="px-3 py-2 rounded-full hover:text-brand-green hover:bg-brand-green-soft transition-colors">Quem Somos</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#workshops" data-i18n="nav.workshops" class="px-3 py-2 rounded-full hover:text-brand-green hover:bg-brand-green-soft transition-colors">Workshops</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#espaco" data-i18n="nav.space" class="px-3 py-2 rounded-full hover:text-brand-green hover:bg-brand-green-soft transition-colors">Espaço</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#contactos" data-i18n="nav.contact" class="px-3 py-2 rounded-full hover:text-brand-green hover:bg-brand-green-soft transition-colors">Contactos</a>
			</nav>

			<!-- Botões de Ação no Header -->
			<div class="flex items-center gap-1.5 sm:gap-3 shrink-0">
				<!-- WhatsApp Header Link (Desktop/Tablet) -->
				<a href="https://wa.me/351964423853" target="_blank" rel="noopener noreferrer" class="hidden sm:inline-flex items-center gap-1.5 px-3.5 py-2 rounded-full bg-brand-green-soft text-brand-green-dark text-xs font-semibold hover:bg-brand-green hover:text-white transition-all duration-200 whitespace-nowrap">
					<span class="material-symbols-outlined text-[17px] text-brand-green group-hover:text-white shrink-0">chat</span>
					<span class="whitespace-nowrap" data-i18n-html="btn.whatsapp_header">WhatsApp • 964&nbsp;423&nbsp;853</span>
				</a>

				<!-- Botão de Destaque "Marcar Consulta" -->
				<a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20marcar%20uma%20consulta%20na%20VCura%20Terapias." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-1 sm:gap-2 px-2.5 sm:px-5 py-1.5 sm:py-2.5 rounded-full bg-brand-green text-white text-[11px] sm:text-sm font-semibold shadow-sm hover:bg-brand-green-dark transition-all duration-200 hover:shadow-subtle whitespace-nowrap shrink-0">
					<span class="material-symbols-outlined text-[15px] sm:text-[18px] shrink-0">calendar_today</span>
					<span class="whitespace-nowrap" data-i18n="btn.book_header">Marcar consulta</span>
				</a>

				<!-- Botão Hambúrguer Mobile -->
				<button id="mobile-menu-btn" type="button" class="lg:hidden p-1.5 sm:p-2 rounded-xl text-brand-green-dark hover:bg-brand-green-soft transition-colors shrink-0" aria-label="Abrir Menu de Navegação" aria-expanded="false">
					<span id="menu-icon-open" class="material-symbols-outlined text-2xl sm:text-3xl">menu</span>
					<span id="menu-icon-close" class="material-symbols-outlined text-2xl sm:text-3xl hidden">close</span>
				</button>
			</div>
		</div>

		<!-- Menu Drawer Mobile -->
		<div id="mobile-menu" class="hidden lg:hidden border-t border-brand-gray bg-white/98 backdrop-blur-md px-4 pt-3 pb-6 shadow-elevated">
			<!-- Seletor de Idiomas no Menu Mobile -->
			<div class="pb-3 mb-3 border-b border-brand-gray flex items-center justify-between">
				<span class="text-xs font-bold text-brand-text/70 uppercase tracking-wider" data-i18n="lang.label">Idioma / Language:</span>
				<div class="flex items-center gap-1.5">
					<button type="button" onclick="changeLanguage('pt', 'Portugal', 'pt')" class="lang-btn-mobile px-2.5 py-1 rounded-lg bg-brand-green-soft text-brand-green-dark text-xs font-semibold flex items-center gap-1.5 border border-brand-green/20" data-lang="pt" title="Português">
						<img src="https://flagcdn.com/w40/pt.png" srcset="https://flagcdn.com/w80/pt.png 2x" alt="Portugal" class="flag-icon-sm" />
						<span>PT</span>
					</button>
					<button type="button" onclick="changeLanguage('en', 'Reino Unido', 'gb')" class="lang-btn-mobile px-2.5 py-1 rounded-lg bg-brand-gray hover:bg-brand-green-soft text-brand-text text-xs font-medium flex items-center gap-1.5 transition-colors" data-lang="en" title="English">
						<img src="https://flagcdn.com/w40/gb.png" srcset="https://flagcdn.com/w80/gb.png 2x" alt="Reino Unido" class="flag-icon-sm" />
						<span>EN</span>
					</button>
					<button type="button" onclick="changeLanguage('fr', 'França', 'fr')" class="lang-btn-mobile px-2.5 py-1 rounded-lg bg-brand-gray hover:bg-brand-green-soft text-brand-text text-xs font-medium flex items-center gap-1.5 transition-colors" data-lang="fr" title="Français">
						<img src="https://flagcdn.com/w40/fr.png" srcset="https://flagcdn.com/w80/fr.png 2x" alt="França" class="flag-icon-sm" />
						<span>FR</span>
					</button>
					<button type="button" onclick="changeLanguage('es', 'Espanha', 'es')" class="lang-btn-mobile px-2.5 py-1 rounded-lg bg-brand-gray hover:bg-brand-green-soft text-brand-text text-xs font-medium flex items-center gap-1.5 transition-colors" data-lang="es" title="Español">
						<img src="https://flagcdn.com/w40/es.png" srcset="https://flagcdn.com/w80/es.png 2x" alt="Espanha" class="flag-icon-sm" />
						<span>ES</span>
					</button>
				</div>
			</div>

			<nav class="flex flex-col space-y-1 text-base font-medium text-brand-text">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#hero" data-i18n="nav.home" class="mobile-nav-link px-4 py-2.5 rounded-xl hover:bg-brand-green-soft hover:text-brand-green transition-colors">Início</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#tratamentos" data-i18n="nav.treatments" class="mobile-nav-link px-4 py-2.5 rounded-xl hover:bg-brand-green-soft hover:text-brand-green transition-colors">Tratamentos</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#terapias" data-i18n="nav.therapies" class="mobile-nav-link px-4 py-2.5 rounded-xl hover:bg-brand-green-soft hover:text-brand-green transition-colors">Terapias</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#quem-somos" data-i18n="nav.about" class="mobile-nav-link px-4 py-2.5 rounded-xl hover:bg-brand-green-soft hover:text-brand-green transition-colors">Quem Somos</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#workshops" data-i18n="nav.workshops" class="mobile-nav-link px-4 py-2.5 rounded-xl hover:bg-brand-green-soft hover:text-brand-green transition-colors">Workshops</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#espaco" data-i18n="nav.space" class="mobile-nav-link px-4 py-2.5 rounded-xl hover:bg-brand-green-soft hover:text-brand-green transition-colors">Espaço</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#salas" data-i18n="nav.rooms" class="mobile-nav-link px-4 py-2.5 rounded-xl hover:bg-brand-green-soft hover:text-brand-green transition-colors">Aluguer de Salas</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#contactos" data-i18n="nav.contact" class="mobile-nav-link px-4 py-2.5 rounded-xl hover:bg-brand-green-soft hover:text-brand-green transition-colors">Contactos</a>
			</nav>
			<div class="mt-4 pt-4 border-t border-brand-gray flex flex-col gap-2">
				<a href="https://wa.me/351964423853" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center gap-2 w-full py-3 rounded-full bg-brand-green text-white font-semibold text-sm shadow-sm hover:bg-brand-green-dark transition-all whitespace-nowrap">
					<span class="material-symbols-outlined text-[18px] shrink-0">chat</span>
					<span class="whitespace-nowrap" data-i18n-html="btn.whatsapp_mobile">Marcar consulta no WhatsApp (964&nbsp;423&nbsp;853)</span>
				</a>
			</div>
		</div>
	</header>

	<main class="flex-grow">
