<?php
/**
 * Footer Template
 *
 * @package VCura
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
	</main>

	<!-- ========================================================================= -->
	<!-- 17. RODAPÉ E CONTACTOS -->
	<!-- ========================================================================= -->
	<footer id="contactos" class="bg-brand-gray text-brand-text border-t border-brand-gray pt-16 pb-12">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 mb-12">
				
				<!-- Coluna 1: Apresentação da Clínica e Logótipo -->
				<div class="lg:col-span-4 flex flex-col">
					<div class="flex items-center gap-3 mb-4">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Logo.png' ); ?>" alt="VCura Terapias" class="h-10 w-auto object-contain" />
						<div class="flex flex-col">
							<span class="font-gabriola text-2xl sm:text-3xl font-bold text-brand-green-dark leading-none">VCura</span>
							<span class="text-[10px] font-semibold text-brand-green tracking-widest uppercase">Terapias • Lisboa</span>
						</div>
					</div>
					<p class="text-sm text-brand-text/75 leading-relaxed mb-6" data-i18n="footer.desc">
						Clínica de Medicina Tradicional Chinesa e Saúde Integrativa na Alta de Lisboa. Cuidado centrado na pessoa, com rigor ético, prevenção e promoção do bem-estar global.
					</p>
					<div class="text-xs text-brand-text/70 space-y-1">
						<p><strong data-i18n="footer.director_label">Diretora Técnica:</strong> <span data-i18n="footer.director_name">Elisabete Monteiro</span></p>
						<p><strong data-i18n="footer.cedula_label">Cédula Profissional ACSS:</strong> <span class="whitespace-nowrap">C-006284</span></p>
					</div>

					<!-- Chave / Dropdown de Idiomas do Rodapé -->
					<div class="mt-6 pt-5 border-t border-brand-gray/80">
						<span class="text-[11px] font-bold text-brand-text/60 uppercase tracking-wider block mb-2" data-i18n="footer.lang_title">Tradução / Language</span>
						<div class="relative inline-block text-left lang-dropdown-wrapper">
							<button type="button" class="lang-dropdown-btn inline-flex items-center gap-2 px-3.5 py-2 rounded-full border border-brand-gray bg-white text-brand-text text-xs font-semibold hover:border-brand-green transition-all shadow-xs" aria-expanded="false" aria-haspopup="true" aria-label="Alterar Idioma" data-i18n-aria="header.change_lang">
								<span class="lang-flag-current flex items-center">
									<img src="https://flagcdn.com/w40/pt.png" srcset="https://flagcdn.com/w80/pt.png 2x" alt="Bandeira de Portugal" class="flag-icon" />
								</span>
								<span class="lang-name-current">Portugal</span>
								<span class="material-symbols-outlined text-[16px] text-brand-green-dark">expand_less</span>
							</button>
							
							<div class="lang-dropdown-menu hidden absolute left-0 bottom-full mb-2 w-48 sm:w-52 rounded-2xl bg-white shadow-elevated border border-brand-gray py-2 z-[90] text-brand-text text-xs focus:outline-none">
								<div class="px-3 py-1 text-[10px] font-bold text-brand-text/50 uppercase tracking-wider border-b border-brand-gray mb-1">
									Selecione o Idioma
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
				</div>

				<!-- Coluna 2: Informações Obrigatórias (Morada, Localização, Horário, Estacionamento) -->
				<div class="lg:col-span-4 flex flex-col space-y-4">
					<h4 class="font-serif text-base font-bold text-brand-text" data-i18n="footer.loc_title">Localização &amp; Horário</h4>
					
					<div class="flex items-start gap-3 text-sm text-brand-text/80">
						<span class="material-symbols-outlined text-brand-green text-[20px] shrink-0 mt-0.5">location_on</span>
						<div>
							<p class="font-semibold text-brand-text" data-i18n="footer.address">Av. David Mourão Ferreira, 25B, Loja A, 1750-209 Lisboa</p>
							<p class="text-xs text-brand-green-dark font-medium" data-i18n="footer.zone">Alta de Lisboa / Lumiar</p>
							<a href="https://maps.google.com/?q=Av.+David+Mour%C3%A3o-Ferreira+25B+Lisboa" target="_blank" rel="noopener noreferrer" class="text-xs text-brand-blue font-semibold hover:underline inline-flex items-center gap-1 mt-1">
								<span data-i18n="footer.open_maps">Abrir no Google Maps</span>
								<span class="material-symbols-outlined text-[14px]">open_in_new</span>
							</a>
						</div>
					</div>

					<div class="flex items-start gap-3 text-sm text-brand-text/80">
						<span class="material-symbols-outlined text-brand-green text-[20px] shrink-0 mt-0.5">schedule</span>
						<div>
							<p class="font-semibold text-brand-text" data-i18n="footer.hours_title">Horário de Funcionamento:</p>
							<p class="text-xs" data-i18n="footer.hours_week">Terça a sexta-feira: 9h–21h</p>
							<p class="text-xs" data-i18n="footer.hours_sat">Sábado: 9h–13h</p>
							<p class="text-[11px] text-brand-text/60" data-i18n="footer.hours_closed">Domingos e Segundas: Encerrado</p>
						</div>
					</div>

					<div class="flex items-start gap-3 text-sm text-brand-text/80">
						<span class="material-symbols-outlined text-brand-green text-[20px] shrink-0 mt-0.5">local_parking</span>
						<div>
							<p class="font-semibold text-brand-text" data-i18n="footer.parking_title">Estacionamento:</p>
							<p class="text-xs" data-i18n="footer.parking_desc">Estacionamento gratuito facilitado em frente à clínica.</p>
						</div>
					</div>
				</div>

				<!-- Coluna 3: Contactos & Mapa Incorporado Obrigatórios -->
				<div class="lg:col-span-4 flex flex-col">
					<h4 class="font-serif text-base font-bold text-brand-text mb-4" data-i18n="footer.contacts_title">Contactos Diretos</h4>
					
					<div class="space-y-3 mb-6">
						<!-- WhatsApp sem quebra de linha -->
						<a href="https://wa.me/351964423853" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2.5 text-sm font-semibold text-brand-green-dark hover:text-brand-green transition-colors">
							<span class="material-symbols-outlined text-[20px] shrink-0">chat</span>
							<span class="whitespace-nowrap" data-i18n-html="footer.whatsapp">WhatsApp: <strong>964&nbsp;423&nbsp;853</strong></span>
						</a>

						<!-- Instagram Oficial Solicitado abaixo do WhatsApp -->
						<a href="https://www.instagram.com/vcuramtc/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2.5 text-sm font-semibold text-brand-text/85 hover:text-[#E1306C] transition-colors group" aria-label="Instagram Oficial VCura Terapias">
							<svg class="w-5 h-5 shrink-0 fill-current text-brand-text/70 group-hover:text-[#E1306C] transition-colors" viewBox="0 0 24 24" aria-hidden="true">
								<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
							</svg>
							<span class="break-words" data-i18n="footer.instagram">Instagram: <strong>@vcuramtc</strong></span>
						</a>

						<!-- Email -->
						<a href="mailto:vcuramtc@gmail.com" class="flex items-center gap-2.5 text-sm text-brand-text/80 hover:text-brand-green transition-colors min-w-0">
							<span class="material-symbols-outlined text-[20px] text-brand-green shrink-0">mail</span>
							<span class="break-all" data-i18n="footer.email">vcuramtc@gmail.com</span>
						</a>
					</div>

					<!-- Mapa Google Incorporado com Localização Oficial -->
					<div class="w-full h-36 rounded-2xl overflow-hidden border border-brand-gray/80 shadow-xs relative">
						<iframe 
							title="Localização da VCura Terapias na Alta de Lisboa" 
							src="https://maps.google.com/maps?q=Avenida+David+Mour%C3%A3o-Ferreira+25B+Lisboa&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=&amp;output=embed" 
							class="w-full h-full border-0" 
							loading="lazy" 
							referrerpolicy="no-referrer-when-downgrade">
						</iframe>
					</div>
				</div>

			</div>

			<!-- Barra Inferior de Direitos e Políticas -->
			<div class="pt-8 border-t border-brand-gray/80 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-brand-text/70">
				<div>
					<span data-i18n="footer.rights">&copy; <?php echo esc_html( date( 'Y' ) ); ?> VCura Terapias. Todos os direitos reservados. Lisboa, Portugal.</span>
				</div>
				<div class="flex items-center gap-4">
					<button onclick="openModal('modal-privacidade')" type="button" class="hover:text-brand-green transition-colors underline" data-i18n="footer.privacy">
						Política de Privacidade
					</button>
					<span>•</span>
					<button onclick="openModal('modal-cookies')" type="button" class="hover:text-brand-green transition-colors underline" data-i18n="footer.cookies">
						Informação sobre Cookies
					</button>
				</div>
			</div>

		</div>
	</footer>

	<!-- ========================================================================= -->
	<!-- BOTÕES FLUTUANTES (WHATSAPP & VOLTAR AO TOPO COM SCROLL DINÂMICO) -->
	<!-- ========================================================================= -->
	<div class="fixed bottom-4 sm:bottom-6 right-4 sm:right-6 z-40 flex items-center gap-2 sm:gap-2.5">
		<!-- Botão Voltar ao Topo Dinâmico -->
		<button id="back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" aria-label="Voltar ao topo da página" data-i18n-aria="btn.back_to_top" data-i18n-title="btn.back_to_top" class="opacity-0 pointer-events-none transition-all duration-300 w-10 sm:w-11 h-10 sm:h-11 rounded-full bg-white/95 hover:bg-white text-brand-green-dark shadow-card border border-brand-gray flex items-center justify-center hover:scale-110 active:scale-95 group shrink-0" title="Voltar ao início">
			<span class="material-symbols-outlined text-[18px] sm:text-[20px] group-hover:-translate-y-0.5 transition-transform">arrow_upward</span>
		</button>

		<!-- Botão Flutuante de WhatsApp -->
		<a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20marcar%20uma%20consulta%20na%20VCura%20Terapias." target="_blank" rel="noopener noreferrer" class="group flex items-center gap-2 sm:gap-2.5 px-3.5 sm:px-4 py-2.5 sm:py-3 bg-brand-green text-white rounded-full shadow-card hover:bg-brand-green-dark hover:shadow-elevated transition-all duration-300 transform hover:scale-105 relative shrink-0" aria-label="Falar connosco pelo WhatsApp" data-i18n-aria="floating.whatsapp">
			<span class="material-symbols-outlined text-[20px] sm:text-[24px] shrink-0">chat</span>
			<span class="text-xs sm:text-sm font-semibold whitespace-nowrap hidden sm:inline-block" data-i18n="floating.whatsapp">Fale connosco</span>
			<span class="absolute -top-1 -right-1 w-3.5 h-3.5 bg-white border-2 border-brand-green rounded-full"></span>
		</a>
	</div>

	<!-- ========================================================================= -->
	<!-- MODAIS INTERATIVOS: LIGHTBOX, FLYERS E POLÍTICAS -->
	<!-- ========================================================================= -->
	
	<!-- Modal 1: Lightbox de Imagens -->
	<div id="modal-lightbox" class="fixed inset-0 z-50 bg-black/85 backdrop-blur-sm hidden flex items-center justify-center p-3 sm:p-4">
		<div class="relative max-w-4xl w-full max-h-[90vh] flex flex-col items-center">
			<button onclick="closeModal('modal-lightbox')" type="button" class="absolute top-2 right-2 sm:-top-12 sm:right-0 bg-black/60 sm:bg-transparent rounded-full text-white hover:text-brand-green transition-colors p-2 z-20" aria-label="Fechar Imagem">
				<span class="material-symbols-outlined text-2xl sm:text-3xl">close</span>
			</button>
			<img id="lightbox-img" src="" alt="Ampliação" class="max-h-[80vh] w-auto max-w-[92vw] rounded-2xl object-contain shadow-2xl" />
			<p id="lightbox-caption" class="text-white text-xs sm:text-sm mt-3 text-center px-4 font-medium"></p>
		</div>
	</div>

	<!-- Modal 2: Visualizador de Cartazes de Workshops (Flyers Oficiais) -->
	<div id="modal-flyer" class="fixed inset-0 z-50 bg-black/85 backdrop-blur-sm hidden flex items-center justify-center p-3 sm:p-4">
		<div class="relative max-w-lg w-full max-h-[92vh] flex flex-col items-center">
			<button onclick="closeModal('modal-flyer')" type="button" class="absolute top-2 right-2 sm:-top-12 sm:right-0 bg-black/60 sm:bg-transparent rounded-full text-white hover:text-brand-green transition-colors p-2 z-20" aria-label="Fechar Cartaz">
				<span class="material-symbols-outlined text-2xl sm:text-3xl">close</span>
			</button>
			<img id="flyer-img" src="" alt="Cartaz Oficial do Workshop" class="max-h-[82vh] w-auto max-w-[92vw] rounded-2xl object-contain shadow-2xl bg-white" />
		</div>
	</div>

	<!-- Modal 3: Certificação Hospitalar (Sanya, China) -->
	<div id="modal-cert" class="fixed inset-0 z-50 bg-black/85 backdrop-blur-sm hidden flex items-center justify-center p-4">
		<div class="relative max-w-2xl w-full bg-white rounded-3xl p-6 flex flex-col items-center shadow-2xl">
			<div class="w-full flex items-center justify-between pb-4 border-b border-brand-gray mb-4">
				<h4 class="font-serif text-lg font-bold text-brand-text" data-i18n="modal.cert_title">Certificação Hospitalar • Sanya, China</h4>
				<button onclick="closeModal('modal-cert')" type="button" class="text-brand-text hover:text-brand-green p-1">
					<span class="material-symbols-outlined text-2xl">close</span>
				</button>
			</div>
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/30.jpg' ); ?>" alt="Certificado Hospitalar Sanya Traditional Chinese Medicine Hospital" class="w-full h-auto max-h-[65vh] object-contain rounded-xl border border-brand-gray" />
			<p class="text-xs text-brand-text/70 mt-3 text-center" data-i18n="modal.cert_desc">
				Certificado de estudos hospitalares em Acupuntura, Fitoterapia Chinesa e Massagem Tuina no Sanya TCM Hospital (China) atribuído à Dra. Elisabete Pina Monteiro.
			</p>
		</div>
	</div>

	<!-- Modal 4: Política de Privacidade Placeholder -->
	<div id="modal-privacidade" class="fixed inset-0 z-50 bg-black/75 backdrop-blur-sm hidden flex items-center justify-center p-4">
		<div class="relative max-w-xl w-full bg-white rounded-3xl p-6 sm:p-8 shadow-2xl">
			<div class="flex items-center justify-between pb-4 border-b border-brand-gray mb-4">
				<h4 class="font-serif text-xl font-bold text-brand-text" data-i18n="modal.privacy_title">Política de Privacidade</h4>
				<button onclick="closeModal('modal-privacidade')" type="button" class="text-brand-text hover:text-brand-green p-1">
					<span class="material-symbols-outlined text-2xl">close</span>
				</button>
			</div>
			<div class="space-y-3 text-sm text-brand-text/80 max-h-[60vh] overflow-y-auto pr-2">
				<p data-i18n="modal.privacy_p1">A VCura Terapias está empenhada em proteger a privacidade e os dados pessoais dos seus pacientes e visitantes.</p>
				<p data-i18n="modal.privacy_p2">Todos os dados recolhidos através de canais diretos (como formulários de contacto ou mensagens de WhatsApp) destinam-se exclusivamente à gestão de consultas, prestação de esclarecimentos clínicos e informações sobre eventos solicitados pelo titular.</p>
				<p data-i18n="modal.privacy_p3">Os seus dados não são cedidos a terceiros sem consentimento prévio e são tratados ao abrigo do Regulamento Geral sobre a Proteção de Dados (RGPD).</p>
			</div>
			<div class="pt-4 border-t border-brand-gray mt-4 text-right">
				<button onclick="closeModal('modal-privacidade')" type="button" class="px-5 py-2.5 rounded-full bg-brand-green text-white text-xs font-semibold hover:bg-brand-green-dark transition-colors" data-i18n="modal.privacy_btn">
					Compreendi
				</button>
			</div>
		</div>
	</div>

	<!-- Modal 5: Informação sobre Cookies Placeholder -->
	<div id="modal-cookies" class="fixed inset-0 z-50 bg-black/75 backdrop-blur-sm hidden flex items-center justify-center p-4">
		<div class="relative max-w-xl w-full bg-white rounded-3xl p-6 sm:p-8 shadow-2xl">
			<div class="flex items-center justify-between pb-4 border-b border-brand-gray mb-4">
				<h4 class="font-serif text-xl font-bold text-brand-text" data-i18n="modal.cookies_title">Informação sobre Cookies</h4>
				<button onclick="closeModal('modal-cookies')" type="button" class="text-brand-text hover:text-brand-green p-1">
					<span class="material-symbols-outlined text-2xl">close</span>
				</button>
			</div>
			<div class="space-y-3 text-sm text-brand-text/80 max-h-[60vh] overflow-y-auto pr-2">
				<p data-i18n="modal.cookies_p1">Este website utiliza apenas cookies técnicos e estritamente necessários para assegurar a navegação fluida, o correto carregamento de fontes e a exibição de componentes interativos (como mapas e vídeos).</p>
				<p data-i18n="modal.cookies_p2">Não utilizamos cookies de rastreio publicitário intrusivo. Pode configurar o seu navegador a qualquer momento para bloquear ou alertar sobre a presença de cookies.</p>
			</div>
			<div class="pt-4 border-t border-brand-gray mt-4 text-right">
				<button onclick="closeModal('modal-cookies')" type="button" class="px-5 py-2.5 rounded-full bg-brand-green text-white text-xs font-semibold hover:bg-brand-green-dark transition-colors" data-i18n="modal.cookies_btn">
					Aceitar e Fechar
				</button>
			</div>
		</div>
	</div>

	<?php wp_footer(); ?>
</body>
</html>
