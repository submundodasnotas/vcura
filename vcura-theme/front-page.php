<?php
/**
 * The template for displaying the home/front page
 *
 * @package VCura
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
    <!-- ========================================================================= -->
    <!-- 4. SECÇÃO HERO — APRESENTAÇÃO DA CLÍNICA -->
    <!-- ========================================================================= -->
    <section id="hero" class="relative overflow-hidden bg-white py-10 lg:py-20 border-b border-brand-gray/60">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-8 items-center">
          
          <!-- Coluna Esquerda: Conteúdo Textual -->
          <div class="lg:col-span-7 flex flex-col justify-center order-1 v-reveal-left">
            
            <!-- Etiqueta de Localização -->
            <div class="inline-flex items-center gap-2 px-3 py-1.5 sm:px-3.5 rounded-full bg-brand-green-soft text-brand-green-dark w-fit mb-4 sm:mb-5 shadow-xs max-w-full">
              <span class="w-2 h-2 rounded-full bg-brand-green animate-pulse shrink-0"></span>
              <span class="text-xs font-semibold uppercase tracking-wider truncate" data-i18n="hero.tag">Alta de Lisboa • Lumiar</span>
            </div>

            <!-- Título Principal Obrigatório -->
            <h1 class="font-serif text-2xl sm:text-4xl lg:text-5xl font-bold text-brand-text tracking-tight leading-[1.2] mb-3 sm:mb-4" data-i18n-html="hero.title">
              Medicina Tradicional Chinesa &amp; Saúde Integrativa na Alta de Lisboa
            </h1>

            <!-- Subtítulo Obrigatório -->
            <p class="font-serif text-lg sm:text-2xl font-normal text-brand-green-dark mb-2 sm:mb-3" data-i18n="hero.subtitle">
              Promoção, prevenção e bem-estar.
            </p>

            <!-- Texto de Posicionamento Obrigatório -->
            <p class="text-sm sm:text-lg font-medium text-brand-text/90 mb-3 sm:mb-4" data-i18n="hero.tagline">
              Saúde integrativa, personalizada e centrada em cada pessoa.
            </p>

            <!-- Parágrafo Obrigatório -->
            <p class="text-sm sm:text-lg text-brand-text/80 leading-relaxed max-w-2xl mb-6 sm:mb-8" data-i18n="hero.paragraph">
              Na VCura, acreditamos numa abordagem integrada da saúde, que respeita a individualidade de cada pessoa e procura promover equilíbrio, prevenção e bem-estar.
            </p>

            <!-- Botões de Ação Hero (Responsivos para Tablet e Smartphone sem quebra feia) -->
            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4 mb-8 sm:mb-10 w-full sm:w-auto">
              <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20marcar%20uma%20consulta%20na%20VCura%20Terapias." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center text-center gap-2 px-5 sm:px-8 py-3.5 sm:py-4 rounded-full bg-brand-green text-white font-semibold text-xs sm:text-base shadow-card hover:bg-brand-green-dark transition-all duration-300 hover:shadow-elevated transform hover:-translate-y-0.5">
                <span class="material-symbols-outlined text-[18px] sm:text-[22px] shrink-0">chat</span>
                <span data-i18n="hero.btn_whatsapp">Marcar consulta no WhatsApp</span>
              </a>
              <a href="#tratamentos" class="inline-flex items-center justify-center text-center gap-2 px-5 sm:px-6 py-3.5 sm:py-4 rounded-full bg-brand-gray text-brand-text hover:bg-brand-green-soft hover:text-brand-green-dark font-medium text-xs sm:text-base transition-all duration-200">
                <span data-i18n="hero.btn_areas">Conhecer áreas de cuidado</span>
                <span class="material-symbols-outlined text-[16px] sm:text-[18px] shrink-0">arrow_downward</span>
              </a>
            </div>

            <!-- Faixa Discreta com 3 Elementos de Confiança Obrigatórios (No desktop abaixo dos botões, no mobile abaixo da imagem) -->
            <div class="hidden lg:grid grid-cols-1 sm:grid-cols-3 gap-3 pt-6 border-t border-brand-gray">
              
              <!-- Elemento 1: Avaliações 5 Estrelas -->
              <div class="flex items-center gap-3 p-3 rounded-2xl bg-brand-green-soft/70 border border-brand-green-soft min-w-0">
                <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center text-amber-500 shadow-xs shrink-0">
                  <span class="material-symbols-outlined text-[20px] fill-1">star</span>
                </div>
                <div class="flex flex-col min-w-0">
                  <span class="text-xs font-semibold text-brand-text leading-snug" data-i18n="hero.trust1_title">Avaliações 5 estrelas</span>
                  <span class="text-[11px] text-brand-text/70" data-i18n="hero.trust1_sub">no Google</span>
                </div>
              </div>

              <!-- Elemento 2: Acordos de Saúde -->
              <div class="flex items-center gap-3 p-3 rounded-2xl bg-brand-green-soft/70 border border-brand-green-soft min-w-0">
                <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center text-brand-blue shadow-xs shrink-0">
                  <span class="material-symbols-outlined text-[20px]">verified_user</span>
                </div>
                <div class="flex flex-col min-w-0">
                  <span class="text-xs font-semibold text-brand-text leading-snug" data-i18n="hero.trust2_title">Acordos de Saúde</span>
                  <span class="text-[11px] text-brand-text/70" data-i18n="hero.trust2_sub">Multicare, Medicare e SCML</span>
                </div>
              </div>

              <!-- Elemento 3: Estacionamento Gratuito -->
              <div class="flex items-center gap-3 p-3 rounded-2xl bg-brand-green-soft/70 border border-brand-green-soft min-w-0">
                <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center text-brand-green-dark shadow-xs shrink-0">
                  <span class="material-symbols-outlined text-[20px]">local_parking</span>
                </div>
                <div class="flex flex-col min-w-0">
                  <span class="text-xs font-semibold text-brand-text leading-snug" data-i18n="hero.trust3_title">Estacionamento gratuito</span>
                  <span class="text-[11px] text-brand-text/70" data-i18n="hero.trust3_sub">À porta na Alta de Lisboa</span>
                </div>
              </div>

            </div>

          </div>

          <!-- Coluna Direita: Fotografia Acolhedora da Clínica -->
          <div class="lg:col-span-5 relative flex justify-center items-center order-2 v-reveal-right">
            <!-- Aura em degradê luminoso ao redor do cartão da foto -->
            <div class="absolute -inset-4 bg-gradient-to-tr from-brand-green/20 via-brand-blue/15 to-emerald-400/20 rounded-[2.5rem] blur-2xl -z-10 opacity-70 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

            <div class="relative w-full max-w-[460px] aspect-[4/5] rounded-3xl overflow-hidden shadow-elevated border-4 border-white bg-brand-gray group">
              <!-- Nova Fotografia Oficial da Fachada da Clínica em Luz Natural -->
              <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/Fachada-da-Clinica-VCura-em-Luz-Natural.png" ); ?>" onerror="this.onerror=null; this.src='<?php echo esc_url( get_template_directory_uri() . "/assets/images/Fachada-da-Clinica-VCura-em-Luz-Natural.png" ); ?>';" alt="Fachada da Clínica VCura em Luz Natural na Alta de Lisboa" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
              
              <!-- Cartão Flutuante 1: Cuidado Integrativo -->
              <div class="absolute top-3 left-3 sm:top-5 sm:left-5 p-2 sm:p-3.5 bg-white/95 backdrop-blur-md rounded-2xl shadow-card flex items-center gap-2 sm:gap-3 border border-brand-gray/80 max-w-[170px] sm:max-w-[220px] transform hover:scale-105 transition-transform duration-300">
                <div class="w-7 h-7 sm:w-9 sm:h-9 rounded-xl bg-brand-green-soft flex items-center justify-center text-brand-green-dark shrink-0">
                  <span class="material-symbols-outlined text-[16px] sm:text-[20px]">spa</span>
                </div>
                <div class="min-w-0">
                  <p class="text-[9px] sm:text-[10px] uppercase font-bold text-brand-green tracking-wider truncate" data-i18n="hero.badge1_cat">Espaço Clínico</p>
                  <p class="text-[11px] sm:text-xs font-semibold text-brand-text leading-tight" data-i18n="hero.badge1_title">Ambiente Sereno &amp; Acolhedor</p>
                </div>
              </div>

              <!-- Cartão Flutuante 2: MTC & Saúde -->
              <div class="absolute bottom-3 right-3 sm:bottom-5 sm:right-5 p-2 sm:p-3.5 bg-white/95 backdrop-blur-md rounded-2xl shadow-card flex items-center gap-2 sm:gap-3 border border-brand-gray/80 max-w-[175px] sm:max-w-[230px] transform hover:scale-105 transition-transform duration-300">
                <div class="w-7 h-7 sm:w-9 sm:h-9 rounded-xl bg-brand-green-soft flex items-center justify-center text-brand-green-dark shrink-0">
                  <span class="material-symbols-outlined text-[16px] sm:text-[20px]">self_improvement</span>
                </div>
                <div class="min-w-0">
                  <p class="text-[9px] sm:text-[10px] uppercase font-bold text-brand-green-dark tracking-wider truncate" data-i18n="hero.badge2_cat">Medicina Chinesa</p>
                  <p class="text-[11px] sm:text-xs font-semibold text-brand-text leading-tight" data-i18n="hero.badge2_title">Equilíbrio, Prevenção e Cura</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Faixa de Elementos de Confiança EXCLUSIVA para Mobile/Tablet (fica logo abaixo da imagem da fachada) -->
          <div class="lg:hidden col-span-1 grid grid-cols-1 sm:grid-cols-3 gap-3 pt-4 order-3">
            
            <!-- Elemento 1: Avaliações 5 Estrelas -->
            <div class="flex items-center gap-3 p-3 rounded-2xl bg-brand-green-soft/70 border border-brand-green-soft min-w-0">
              <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center text-amber-500 shadow-xs shrink-0">
                <span class="material-symbols-outlined text-[20px] fill-1">star</span>
              </div>
              <div class="flex flex-col min-w-0">
                <span class="text-xs font-semibold text-brand-text leading-snug" data-i18n="hero.trust1_title">Avaliações 5 estrelas</span>
                <span class="text-[11px] text-brand-text/70" data-i18n="hero.trust1_sub">no Google</span>
              </div>
            </div>

            <!-- Elemento 2: Acordos de Saúde -->
            <div class="flex items-center gap-3 p-3 rounded-2xl bg-brand-green-soft/70 border border-brand-green-soft min-w-0">
              <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center text-brand-blue shadow-xs shrink-0">
                <span class="material-symbols-outlined text-[20px]">verified_user</span>
              </div>
              <div class="flex flex-col min-w-0">
                <span class="text-xs font-semibold text-brand-text leading-snug" data-i18n="hero.trust2_title">Acordos de Saúde</span>
                <span class="text-[11px] text-brand-text/70" data-i18n="hero.trust2_sub">Multicare, Medicare e SCML</span>
              </div>
            </div>

            <!-- Elemento 3: Estacionamento Gratuito -->
            <div class="flex items-center gap-3 p-3 rounded-2xl bg-brand-green-soft/70 border border-brand-green-soft min-w-0">
              <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center text-brand-green-dark shadow-xs shrink-0">
                <span class="material-symbols-outlined text-[20px]">local_parking</span>
              </div>
              <div class="flex flex-col min-w-0">
                <span class="text-xs font-semibold text-brand-text leading-snug" data-i18n="hero.trust3_title">Estacionamento gratuito</span>
                <span class="text-[11px] text-brand-text/70" data-i18n="hero.trust3_sub">À porta na Alta de Lisboa</span>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. SECÇÃO DE TRATAMENTOS -->
    <!-- ========================================================================= -->
    <section id="tratamentos" class="py-16 lg:py-24 bg-brand-green-soft/50 border-b border-brand-gray">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Cabeçalho da Secção Obrigatório -->
        <div class="text-center max-w-3xl mx-auto mb-14 v-reveal-up">
          <span class="text-xs font-bold uppercase tracking-widest text-brand-green-dark mb-2 block" data-i18n="treatments.tag">Áreas de Acompanhamento</span>
          <h2 class="font-serif text-3xl sm:text-4xl font-bold text-brand-text mb-4" data-i18n="treatments.title">Como podemos ajudar?</h2>
          <p class="text-base sm:text-lg text-brand-text/80 leading-relaxed" data-i18n="treatments.desc">
            Conheça as nossas principais áreas de acompanhamento e descubra a abordagem mais adequada às suas necessidades.
          </p>
        </div>

        <!-- 4 Cartões de Categoria Obrigatórios com Dimensões Consistentes -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12 v-stagger-group">
          
          <!-- Cartão 1 — Saúde Feminina -->
          <div class="bg-white rounded-2xl overflow-hidden border border-brand-gray/80 shadow-subtle hover:shadow-card hover:-translate-y-1.5 transition-all duration-300 flex flex-col group">
            <div class="h-48 overflow-hidden relative bg-brand-gray">
              <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>saude-feminina.PNG" alt="Gabinete Harmony - Saúde Feminina na VCura" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
              <span class="absolute top-3 left-3 px-3 py-1 bg-white/90 backdrop-blur-sm text-brand-green-dark font-semibold text-xs rounded-full shadow-xs" data-i18n="treatments.card1_cat">
                Especialidade
              </span>
            </div>
            <div class="p-6 flex flex-col flex-grow justify-between">
              <div>
                <h3 class="font-serif text-xl font-bold text-brand-text mb-3 group-hover:text-brand-green-dark transition-colors" data-i18n="treatments.card1_title">
                  Saúde Feminina
                </h3>
                <p class="text-sm text-brand-text/80 leading-relaxed mb-4" data-i18n="treatments.card1_desc">
                  Ciclo menstrual, TPM, cistite, endometriose, climatério e menopausa.
                </p>
              </div>
              <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20a%20consulta%20de%20Sa%C3%BAde%20Feminina." target="_blank" rel="noopener noreferrer" class="mt-4 inline-flex items-center justify-center gap-2 w-full py-3 px-5 rounded-full bg-gradient-to-r from-brand-green to-emerald-500 hover:from-emerald-400 hover:to-brand-green text-white font-semibold text-sm shadow-[0_4px_16px_rgba(55,168,23,0.30)] hover:shadow-[0_6px_24px_rgba(55,168,23,0.45)] transition-all duration-300 hover:scale-[1.02] group/btn">
                <span data-i18n="btn.learn_more">Saber mais</span>
                <span class="material-symbols-outlined text-[18px] group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
              </a>
            </div>
          </div>

          <!-- Cartão 2 — Stress, Ansiedade & Sono -->
          <div class="bg-white rounded-2xl overflow-hidden border border-brand-gray/80 shadow-subtle hover:shadow-card hover:-translate-y-1.5 transition-all duration-300 flex flex-col group">
            <div class="h-48 overflow-hidden relative bg-brand-gray">
              <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>stress-ansiedade.PNG" alt="Gabinete Healing - Relaxamento, Ansiedade e Sono" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
              <span class="absolute top-3 left-3 px-3 py-1 bg-white/90 backdrop-blur-sm text-brand-green-dark font-semibold text-xs rounded-full shadow-xs" data-i18n="treatments.card2_cat">
                Equilíbrio Emocional
              </span>
            </div>
            <div class="p-6 flex flex-col flex-grow justify-between">
              <div>
                <h3 class="font-serif text-xl font-bold text-brand-text mb-3 group-hover:text-brand-green-dark transition-colors" data-i18n-html="treatments.card2_title">
                  Stress, Ansiedade &amp; Sono
                </h3>
                <p class="text-sm text-brand-text/80 leading-relaxed mb-4" data-i18n="treatments.card2_desc">
                  Exaustão, ansiedade, insónia, depressão e fadiga mental.
                </p>
              </div>
              <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20o%20tratamento%20de%20Stress,%20Ansiedade%20e%20Sono." target="_blank" rel="noopener noreferrer" class="mt-4 inline-flex items-center justify-center gap-2 w-full py-3 px-5 rounded-full bg-gradient-to-r from-brand-green to-emerald-500 hover:from-emerald-400 hover:to-brand-green text-white font-semibold text-sm shadow-[0_4px_16px_rgba(55,168,23,0.30)] hover:shadow-[0_6px_24px_rgba(55,168,23,0.45)] transition-all duration-300 hover:scale-[1.02] group/btn">
                <span data-i18n="btn.learn_more">Saber mais</span>
                <span class="material-symbols-outlined text-[18px] group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
              </a>
            </div>
          </div>

          <!-- Cartão 3 — Dores, Lesões & Recuperação -->
          <div class="bg-white rounded-2xl overflow-hidden border border-brand-gray/80 shadow-subtle hover:shadow-card hover:-translate-y-1.5 transition-all duration-300 flex flex-col group">
            <div class="h-48 overflow-hidden relative bg-brand-gray">
              <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>dores.PNG" alt="Tratamento de dores e lesões na VCura" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
              <span class="absolute top-3 left-3 px-3 py-1 bg-white/90 backdrop-blur-sm text-brand-green-dark font-semibold text-xs rounded-full shadow-xs" data-i18n="treatments.card3_cat">
                Alívio da Dor
              </span>
            </div>
            <div class="p-6 flex flex-col flex-grow justify-between">
              <div>
                <h3 class="font-serif text-xl font-bold text-brand-text mb-3 group-hover:text-brand-green-dark transition-colors" data-i18n-html="treatments.card3_title">
                  Dores, Lesões &amp; Recuperação
                </h3>
                <p class="text-sm text-brand-text/80 leading-relaxed mb-4" data-i18n="treatments.card3_desc">
                  Desconforto cervical e lombar, ciática, ombros, joelhos, dores musculares, contraturas e recuperação muscular.
                </p>
              </div>
              <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20o%20tratamento%20de%20Dores%20e%20Les%C3%B5es." target="_blank" rel="noopener noreferrer" class="mt-4 inline-flex items-center justify-center gap-2 w-full py-3 px-5 rounded-full bg-gradient-to-r from-brand-green to-emerald-500 hover:from-emerald-400 hover:to-brand-green text-white font-semibold text-sm shadow-[0_4px_16px_rgba(55,168,23,0.30)] hover:shadow-[0_6px_24px_rgba(55,168,23,0.45)] transition-all duration-300 hover:scale-[1.02] group/btn">
                <span data-i18n="btn.learn_more">Saber mais</span>
                <span class="material-symbols-outlined text-[18px] group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
              </a>
            </div>
          </div>

          <!-- Cartão 4 — Saúde Digestiva & Nutrição -->
          <div class="bg-white rounded-2xl overflow-hidden border border-brand-gray/80 shadow-subtle hover:shadow-card hover:-translate-y-1.5 transition-all duration-300 flex flex-col group">
            <div class="h-48 overflow-hidden relative bg-brand-gray">
              <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>saude.PNG" alt="Consulta de Saúde Digestiva e Nutrição na VCura" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
              <span class="absolute top-3 left-3 px-3 py-1 bg-white/90 backdrop-blur-sm text-brand-green-dark font-semibold text-xs rounded-full shadow-xs" data-i18n="treatments.card4_cat">
                Vitalidade &amp; Nutrição
              </span>
            </div>
            <div class="p-6 flex flex-col flex-grow justify-between">
              <div>
                <h3 class="font-serif text-xl font-bold text-brand-text mb-3 group-hover:text-brand-green-dark transition-colors" data-i18n-html="treatments.card4_title">
                  Saúde Digestiva &amp; Nutrição
                </h3>
                <p class="text-sm text-brand-text/80 leading-relaxed mb-4" data-i18n="treatments.card4_desc">
                  Obstipação, refluxo, gastrite, desequilíbrios digestivos, sistema imunitário, obesidade e reeducação alimentar.
                </p>
              </div>
              <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Sa%C3%BAde%20Digestiva%20e%20Nutri%C3%A7%C3%A3o." target="_blank" rel="noopener noreferrer" class="mt-4 inline-flex items-center justify-center gap-2 w-full py-3 px-5 rounded-full bg-gradient-to-r from-brand-green to-emerald-500 hover:from-emerald-400 hover:to-brand-green text-white font-semibold text-sm shadow-[0_4px_16px_rgba(55,168,23,0.30)] hover:shadow-[0_6px_24px_rgba(55,168,23,0.45)] transition-all duration-300 hover:scale-[1.02] group/btn">
                <span data-i18n="btn.learn_more">Saber mais</span>
                <span class="material-symbols-outlined text-[18px] group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
              </a>
            </div>
          </div>

        </div>

        <!-- Chamada de Atenção Abaixo dos Cartões Obrigatória (Destaque Criativo em Degradê Escuro) -->
        <div class="v-reveal-scale p-5 sm:p-7 md:p-9 rounded-3xl bg-dark-emerald-gradient text-white border border-brand-green/35 shadow-glow-dark flex flex-col md:flex-row items-center justify-between gap-5 sm:gap-6 max-w-4xl mx-auto relative overflow-hidden group">
          <div class="absolute -right-16 -top-16 w-60 h-60 bg-brand-green/20 rounded-full blur-2xl pointer-events-none group-hover:scale-125 transition-transform duration-700"></div>
          <div class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left gap-3.5 sm:gap-4 relative z-10">
            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-emerald-300 shrink-0 shadow-subtle">
              <span class="material-symbols-outlined text-[26px] sm:text-[30px]">help_outline</span>
            </div>
            <div>
              <h4 class="font-serif text-base sm:text-xl font-bold text-white leading-snug" data-i18n="treatments.highlight_title">
                Tem outras queixas ou não sabe qual a abordagem indicada para si?
              </h4>
              <p class="text-xs sm:text-sm text-emerald-100/80 mt-1" data-i18n="treatments.highlight_desc">
                Envie-nos uma mensagem e a nossa equipa ajuda a esclarecer o melhor caminho para o seu caso.
              </p>
            </div>
          </div>
          <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Tenho%20d%C3%BAvidas%20sobre%20qual%20a%20abordagem%20indicada%20para%20o%20meu%20caso." target="_blank" rel="noopener noreferrer" class="relative z-10 inline-flex items-center justify-center gap-2 px-6 sm:px-7 py-3 sm:py-3.5 rounded-full bg-gradient-to-r from-brand-green to-emerald-500 hover:from-emerald-400 hover:to-brand-green text-white font-semibold text-xs sm:text-sm shadow-[0_4px_20px_rgba(55,168,23,0.4)] transition-all duration-300 hover:scale-105 whitespace-nowrap shrink-0 w-full sm:w-auto text-center">
            <span class="material-symbols-outlined text-[18px]">chat</span>
            <span data-i18n="btn.talk">Fale connosco</span>
          </a>
        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 6. SECÇÃO DE TERAPIAS E ESPECIALIDADES -->
    <!-- ========================================================================= -->
    <section id="terapias" class="py-14 sm:py-16 lg:py-24 bg-white border-b border-brand-gray">
      <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
        
        <!-- Título da Secção Obrigatório -->
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-16 v-reveal-up">
          <span class="text-xs font-bold uppercase tracking-widest text-brand-green-dark mb-2 block" data-i18n="therapies.tag">Modalidades Clínicas</span>
          <h2 class="font-serif text-2xl sm:text-4xl font-bold text-brand-text mb-3 sm:mb-4" data-i18n="therapies.title">Terapias e especialidades</h2>
          <p class="text-sm sm:text-lg text-brand-text/80 leading-relaxed" data-i18n="therapies.desc">
            Modalidades integrativas praticadas por profissionais devidamente qualificados e com cédula profissional, atuando de forma sinérgica para a sua saúde.
          </p>
        </div>

        <!-- Bloco 1: Medicina Tradicional Chinesa -->
        <div class="v-reveal-up p-4 sm:p-6 md:p-8 lg:p-10 rounded-3xl bg-brand-green-soft/60 border border-brand-green-soft mb-12 sm:mb-16 shadow-subtle">
          <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 sm:gap-4 mb-6 sm:mb-8 pb-5 sm:pb-6 border-b border-brand-green/20">
            <div>
              <span class="text-xs font-bold uppercase tracking-wider text-brand-green-dark block mb-1" data-i18n-html="mtc.tag">Fundamento &amp; Tradição</span>
              <h3 class="font-serif text-xl sm:text-2xl font-bold text-brand-text" data-i18n="mtc.title">Medicina Tradicional Chinesa</h3>
              <p class="text-xs sm:text-sm text-brand-text/80 mt-1 max-w-2xl" data-i18n="mtc.desc">
                Diagnóstico minucioso e tratamento integrativo que restabelece o fluxo energético, harmonizando corpo, mente e emoções.
              </p>
            </div>
            <div class="inline-flex items-center gap-1.5 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full bg-white text-xs font-semibold text-brand-green-dark border border-brand-gray shadow-xs self-start md:self-center shrink-0">
              <span class="material-symbols-outlined text-brand-green text-[18px]">verified</span>
              <span data-i18n="mtc.cedula">Cédula ACSS C-006284</span>
            </div>
          </div>

          <!-- Grelha das Modalidades de MTC Obrigatórias -->
          <div class="grid grid-cols-1 min-[440px]:grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-2.5 sm:gap-3.5 md:gap-4 v-stagger-group">
            
            <div class="p-3 sm:p-3.5 md:p-4 rounded-2xl bg-white border border-brand-gray/70 shadow-xs flex items-center gap-2.5 sm:gap-3 min-w-0 overflow-hidden hover:border-brand-green/40 hover:-translate-y-1 transition-all">
              <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-brand-green-soft flex items-center justify-center text-brand-green-dark shrink-0">
                <span class="material-symbols-outlined text-[19px] sm:text-[20px]">colorize</span>
              </div>
              <span class="font-semibold text-xs sm:text-sm text-brand-text break-words min-w-0 leading-snug" data-i18n="mtc.mod1">Acupuntura</span>
            </div>

            <div class="p-3 sm:p-3.5 md:p-4 rounded-2xl bg-white border border-brand-gray/70 shadow-xs flex items-center gap-2.5 sm:gap-3 min-w-0 overflow-hidden hover:border-brand-green/40 hover:-translate-y-1 transition-all">
              <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-brand-green-soft flex items-center justify-center text-brand-green-dark shrink-0">
                <span class="material-symbols-outlined text-[19px] sm:text-[20px]">healing</span>
              </div>
              <span class="font-semibold text-xs sm:text-sm text-brand-text break-words min-w-0 leading-snug" data-i18n="mtc.mod2">Tui Na</span>
            </div>

            <div class="p-3 sm:p-3.5 md:p-4 rounded-2xl bg-white border border-brand-gray/70 shadow-xs flex items-center gap-2.5 sm:gap-3 min-w-0 overflow-hidden hover:border-brand-green/40 hover:-translate-y-1 transition-all">
              <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-brand-green-soft flex items-center justify-center text-brand-green-dark shrink-0">
                <span class="material-symbols-outlined text-[19px] sm:text-[20px]">local_fire_department</span>
              </div>
              <span class="font-semibold text-xs sm:text-sm text-brand-text break-words min-w-0 leading-snug" data-i18n="mtc.mod3">Moxabustão</span>
            </div>

            <div class="p-3 sm:p-3.5 md:p-4 rounded-2xl bg-white border border-brand-gray/70 shadow-xs flex items-center gap-2.5 sm:gap-3 min-w-0 overflow-hidden hover:border-brand-green/40 hover:-translate-y-1 transition-all">
              <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-brand-green-soft flex items-center justify-center text-brand-green-dark shrink-0">
                <span class="material-symbols-outlined text-[19px] sm:text-[20px]">filter_vintage</span>
              </div>
              <span class="font-semibold text-xs sm:text-sm text-brand-text break-words min-w-0 leading-snug" data-i18n="mtc.mod4">Ventosaterapia</span>
            </div>

            <div class="p-3 sm:p-3.5 md:p-4 rounded-2xl bg-white border border-brand-gray/70 shadow-xs flex items-center gap-2.5 sm:gap-3 min-w-0 overflow-hidden hover:border-brand-green/40 hover:-translate-y-1 transition-all">
              <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-brand-green-soft flex items-center justify-center text-brand-green-dark shrink-0">
                <span class="material-symbols-outlined text-[19px] sm:text-[20px]">hearing</span>
              </div>
              <span class="font-semibold text-xs sm:text-sm text-brand-text break-words min-w-0 leading-snug" data-i18n="mtc.mod5">Auriculoterapia</span>
            </div>

            <div class="p-3 sm:p-3.5 md:p-4 rounded-2xl bg-white border border-brand-gray/70 shadow-xs flex items-center gap-2.5 sm:gap-3 min-w-0 overflow-hidden hover:border-brand-green/40 hover:-translate-y-1 transition-all">
              <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-brand-green-soft flex items-center justify-center text-brand-green-dark shrink-0">
                <span class="material-symbols-outlined text-[19px] sm:text-[20px]">waves</span>
              </div>
              <span class="font-semibold text-xs sm:text-sm text-brand-text break-words min-w-0 leading-snug" data-i18n="mtc.mod6">Terapia Termo Auricular</span>
            </div>

            <div class="p-3 sm:p-3.5 md:p-4 rounded-2xl bg-white border border-brand-gray/70 shadow-xs flex items-center gap-2.5 sm:gap-3 min-w-0 overflow-hidden hover:border-brand-green/40 hover:-translate-y-1 transition-all">
              <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-brand-green-soft flex items-center justify-center text-brand-green-dark shrink-0">
                <span class="material-symbols-outlined text-[19px] sm:text-[20px]">eco</span>
              </div>
              <span class="font-semibold text-xs sm:text-sm text-brand-text break-words min-w-0 leading-snug" data-i18n="mtc.mod7">Fitoterapia Chinesa</span>
            </div>

            <div class="p-3 sm:p-3.5 md:p-4 rounded-2xl bg-white border border-brand-gray/70 shadow-xs flex items-center gap-2.5 sm:gap-3 min-w-0 overflow-hidden hover:border-brand-green/40 hover:-translate-y-1 transition-all">
              <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-brand-green-soft flex items-center justify-center text-brand-green-dark shrink-0">
                <span class="material-symbols-outlined text-[19px] sm:text-[20px]">restaurant</span>
              </div>
              <span class="font-semibold text-xs sm:text-sm text-brand-text break-words min-w-0 leading-snug" data-i18n="mtc.mod8">Dietoterapia</span>
            </div>

          </div>
        </div>

        <!-- Bloco 2: Outras Terapias Obrigatórias -->
        <div class="mb-16">
          <div class="mb-8 v-reveal-up">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-green-dark block mb-1" data-i18n="other_therapies.tag">Cuidados Integrados</span>
            <h3 class="font-serif text-2xl font-bold text-brand-text" data-i18n="other_therapies.title">Outras terapias</h3>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 v-stagger-group">
            
            <!-- Osteopatia -->
            <div class="p-6 rounded-2xl bg-brand-gray/70 border border-brand-gray flex flex-col justify-between hover:bg-brand-green-soft/40 hover:-translate-y-1.5 transition-all">
              <div>
                <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center text-brand-green-dark mb-4 shadow-xs">
                  <span class="material-symbols-outlined text-[24px]">accessibility_new</span>
                </div>
                <h4 class="font-serif text-lg font-bold text-brand-text mb-2" data-i18n="osteo.title">Osteopatia</h4>
                <p class="text-sm text-brand-text/75 leading-relaxed" data-i18n="osteo.desc">
                  Avaliação biomecânica e manipulação articular e muscular para alinhamento postural, libertação de tensões e recuperação do movimento natural.
                </p>
              </div>
            </div>

            <!-- Naturopatia (Descrição Obrigatória) -->
            <div class="p-6 rounded-2xl bg-brand-gray/70 border border-brand-gray flex flex-col justify-between hover:bg-brand-green-soft/40 hover:-translate-y-1.5 transition-all">
              <div>
                <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center text-brand-green-dark mb-4 shadow-xs">
                  <span class="material-symbols-outlined text-[24px]">psychiatry</span>
                </div>
                <h4 class="font-serif text-lg font-bold text-brand-text mb-2" data-i18n="naturop.title">Naturopatia</h4>
                <p class="text-sm text-brand-text/75 leading-relaxed" data-i18n="naturop.desc">
                  Acompanhamento personalizado para melhorar a alimentação, os hábitos e o estilo de vida, com estratégias naturais ajustadas às suas necessidades e objetivos.
                </p>
              </div>
            </div>

            <!-- Massagens -->
            <div class="p-6 rounded-2xl bg-brand-gray/70 border border-brand-gray flex flex-col justify-between hover:bg-brand-green-soft/40 hover:-translate-y-1.5 transition-all">
              <div>
                <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center text-brand-green-dark mb-4 shadow-xs">
                  <span class="material-symbols-outlined text-[24px]">self_improvement</span>
                </div>
                <h4 class="font-serif text-lg font-bold text-brand-text mb-2" data-i18n="massages.title">Massagens</h4>
                <p class="text-sm text-brand-text/75 leading-relaxed" data-i18n="massages.desc">
                  Massagens de relaxamento, terapêutica e miofascial para alívio de contraturas, relaxamento muscular profundo e drenagem de tensões acumuladas.
                </p>
              </div>
            </div>

            <!-- Shiatsu Terapêutico & Reflexologia Podal -->
            <div class="p-6 rounded-2xl bg-brand-gray/70 border border-brand-gray flex flex-col justify-between hover:bg-brand-green-soft/40 hover:-translate-y-1.5 transition-all">
              <div>
                <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center text-brand-green-dark mb-4 shadow-xs">
                  <span class="material-symbols-outlined text-[24px]">footprint</span>
                </div>
                <h4 class="font-serif text-lg font-bold text-brand-text mb-2" data-i18n-html="shiatsu.title">Shiatsu &amp; Reflexologia</h4>
                <p class="text-sm text-brand-text/75 leading-relaxed" data-i18n="shiatsu.desc">
                  Shiatsu Terapêutico e Reflexologia Podal. Pressão pontual nos meridianos e pontos reflexos dos pés para restabelecer a harmonia orgânica.
                </p>
              </div>
            </div>

          </div>
        </div>

        <!-- Bloco 3: Especialidade — Bem-Estar & Equilíbrio (Harmonização Integral: Reiki Usui, Constelações Familiares, Biofeedback) -->
        <div class="mb-12 sm:mb-16">
          <div class="mb-8">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-green-dark block mb-1" data-i18n="wellness.tag">Harmonização Integral</span>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            
            <!-- Cartão 1: Reiki Usui -->
            <div class="p-5 sm:p-6 rounded-2xl bg-white border border-brand-gray/80 shadow-subtle flex flex-col justify-between">
              <div>
                <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-green-soft flex items-center justify-center text-brand-green-dark mb-4">
                  <span class="material-symbols-outlined text-[24px]">energy_savings_leaf</span>
                </div>
                <h4 class="font-serif text-base sm:text-lg font-bold text-brand-text mb-2" data-i18n="wellness.reiki_title">Reiki Usui</h4>
                <p class="text-xs sm:text-sm text-brand-text/75 leading-relaxed" data-i18n="wellness.reiki_desc">
                  Prática de canalização energética suave que atua no desbloqueio dos centros de energia vital, promovendo relaxamento somático, redução da ansiedade e equilíbrio interior.
                </p>
              </div>
            </div>

            <!-- Cartão 2: Constelações Familiares -->
            <div class="p-5 sm:p-6 rounded-2xl bg-white border border-brand-gray/80 shadow-subtle flex flex-col justify-between">
              <div>
                <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-green-soft flex items-center justify-center text-brand-green-dark mb-4">
                  <span class="material-symbols-outlined text-[24px]">diversity_3</span>
                </div>
                <h4 class="font-serif text-base sm:text-lg font-bold text-brand-text mb-2" data-i18n="wellness.constel_title">Constelações Familiares</h4>
                <p class="text-xs sm:text-sm text-brand-text/75 leading-relaxed" data-i18n="wellness.constel_desc">
                  Abordagem sistémica e fenomenológica para identificar e harmonizar dinâmicas inconscientes familiares, bloqueios relacionais e padrões emocionais repetitivos.
                </p>
              </div>
            </div>

            <!-- Cartão 3: Terapia Quântica — Biofeedback (Descrição Obrigatória) -->
            <div class="p-5 sm:p-6 rounded-2xl bg-white border border-brand-gray/80 shadow-subtle flex flex-col justify-between">
              <div>
                <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-green-soft flex items-center justify-center text-brand-green-dark mb-4">
                  <span class="material-symbols-outlined text-[24px]">hub</span>
                </div>
                <h4 class="font-serif text-base sm:text-lg font-bold text-brand-text mb-2" data-i18n="wellness.quantum_title">Terapia Quântica — Biofeedback</h4>
                <p class="text-xs sm:text-sm text-brand-text/75 leading-relaxed" data-i18n="wellness.quantum_desc">
                  Uma abordagem que utiliza tecnologia de biofeedback como ferramenta de avaliação e acompanhamento, integrada numa perspetiva de equilíbrio e bem-estar.
                </p>
              </div>
            </div>

          </div>

          <!-- Botão Obrigatório -->
          <div class="text-center">
            <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20consulta%20de%20Bem-Estar%20e%20Equil%C3%ADbrio." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center text-center gap-2 px-6 sm:px-8 py-3.5 rounded-full bg-brand-green text-white font-semibold text-xs sm:text-sm shadow-sm hover:bg-brand-green-dark transition-all w-full sm:w-auto">
              <span class="material-symbols-outlined text-[18px] shrink-0">calendar_today</span>
              <span data-i18n="wellness.btn">Agendar consulta</span>
            </a>
          </div>
        </div>

        <!-- Bloco 4: Especialidade — Saúde Feminina, Climatério & Menopausa (Bloco com Degradê Suave Verde ao Rosa) -->
        <div class="v-reveal-scale rounded-3xl bg-dark-rose-feminine text-brand-text p-5 sm:p-8 md:p-12 mb-12 sm:mb-16 border border-emerald-300/40 shadow-glow-rose overflow-hidden relative group">
          <!-- Brilhos decorativos no fundo suave -->
          <div class="absolute -right-20 -top-20 w-80 h-80 bg-white/40 rounded-full blur-3xl pointer-events-none group-hover:scale-125 transition-transform duration-700"></div>
          <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-rose-200/40 rounded-full blur-3xl pointer-events-none"></div>
          <div class="absolute top-1/2 left-1/3 -translate-y-1/2 w-72 h-72 bg-brand-green/20 rounded-full blur-3xl pointer-events-none"></div>

          <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 items-center relative z-10">
            
            <div class="lg:col-span-7">
              <span class="inline-flex items-center gap-1.5 px-3 py-1 sm:px-3.5 rounded-full bg-white/70 text-brand-green-dark border border-brand-green/30 font-semibold text-[11px] sm:text-xs mb-3 shadow-xs max-w-full backdrop-blur-sm">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-green animate-pulse shrink-0"></span>
                <span class="truncate" data-i18n="women.badge">Saúde da Mulher • Especialidade Integrativa</span>
              </span>
              <!-- Título Explícito para a Mulher -->
              <h3 class="font-serif text-xl sm:text-3xl lg:text-4xl font-bold text-brand-text mb-3 tracking-tight leading-snug" data-i18n="women.title">
                Saúde Feminina: Cuidar de si em todas as fases da vida.
              </h3>
              <!-- Texto Obrigatório -->
              <p class="text-sm sm:text-base text-brand-text/85 leading-relaxed mb-6 font-normal" data-i18n="women.desc">
                Na VCura Terapias, integramos Medicina Tradicional Chinesa, Fitoterapia e Naturopatia, num plano de acordo com as necessidades individuais de cada mulher.
              </p>

              <!-- Grupos Visuais de Queixas e Temas Acompanhados Obrigatórios (Cards com Glassmorphism) -->
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 sm:gap-3 mb-6 sm:mb-8">
                <div class="flex items-center gap-2.5 text-xs sm:text-sm font-semibold text-brand-text glass-dark-rose p-2.5 sm:p-3 rounded-xl transition-all min-w-0 shadow-xs">
                  <span class="material-symbols-outlined text-brand-green text-[18px] shrink-0">check_circle</span>
                  <span class="break-words min-w-0 leading-snug" data-i18n="women.sym1">Ciclo menstrual, TPM e endometriose.</span>
                </div>
                <div class="flex items-center gap-2.5 text-xs sm:text-sm font-semibold text-brand-text glass-dark-rose p-2.5 sm:p-3 rounded-xl transition-all min-w-0 shadow-xs">
                  <span class="material-symbols-outlined text-brand-green text-[18px] shrink-0">check_circle</span>
                  <span class="break-words min-w-0 leading-snug" data-i18n="women.sym2">Cistite e desconforto íntimo.</span>
                </div>
                <div class="flex items-center gap-2.5 text-xs sm:text-sm font-semibold text-brand-text glass-dark-rose p-2.5 sm:p-3 rounded-xl transition-all min-w-0 shadow-xs">
                  <span class="material-symbols-outlined text-brand-green text-[18px] shrink-0">check_circle</span>
                  <span class="break-words min-w-0 leading-snug" data-i18n="women.sym3">Afrontamentos e suores noturnos.</span>
                </div>
                <div class="flex items-center gap-2.5 text-xs sm:text-sm font-semibold text-brand-text glass-dark-rose p-2.5 sm:p-3 rounded-xl transition-all min-w-0 shadow-xs">
                  <span class="material-symbols-outlined text-brand-green text-[18px] shrink-0">check_circle</span>
                  <span class="break-words min-w-0 leading-snug" data-i18n="women.sym4">Alterações do sono, humor e peso.</span>
                </div>
                <div class="flex items-center gap-2.5 text-xs sm:text-sm font-semibold text-brand-text glass-dark-rose p-2.5 sm:p-3 rounded-xl transition-all min-w-0 shadow-xs">
                  <span class="material-symbols-outlined text-brand-green text-[18px] shrink-0">check_circle</span>
                  <span class="break-words min-w-0 leading-snug" data-i18n="women.sym5">Fadiga mental e cansaço.</span>
                </div>
                <div class="flex items-center gap-2.5 text-xs sm:text-sm font-semibold text-brand-text glass-dark-rose p-2.5 sm:p-3 rounded-xl transition-all min-w-0 shadow-xs">
                  <span class="material-symbols-outlined text-brand-green text-[18px] shrink-0">check_circle</span>
                  <span class="break-words min-w-0 leading-snug" data-i18n="women.sym6">Alterações da libido.</span>
                </div>
                <div class="flex items-center gap-2.5 text-xs sm:text-sm font-semibold text-brand-text glass-dark-rose p-2.5 sm:p-3 rounded-xl transition-all sm:col-span-2 min-w-0 shadow-xs">
                  <span class="material-symbols-outlined text-brand-green text-[18px] shrink-0">check_circle</span>
                  <span class="break-words min-w-0 leading-snug" data-i18n="women.sym7">Dores e rigidez articulares.</span>
                </div>
              </div>

              <!-- Informação Complementar Obrigatória -->
              <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4 pt-2 w-full">
                <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20marcar%20consulta%20de%20Sa%C3%BAde%20Feminina." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center text-center gap-2 px-6 sm:px-8 py-3.5 sm:py-4 rounded-full bg-gradient-to-r from-brand-green to-emerald-600 hover:from-emerald-500 hover:to-brand-green text-white font-bold text-xs sm:text-sm shadow-[0_6px_25px_rgba(55,168,23,0.35)] transition-all hover:scale-105 w-full sm:w-auto">
                  <span class="material-symbols-outlined text-[18px] text-white shrink-0">calendar_today</span>
                  <span data-i18n="women.btn">Marcar consulta de Saúde Feminina</span>
                </a>
                <span class="text-xs font-semibold text-brand-text/75 flex items-center justify-center sm:justify-start gap-1.5 text-center sm:text-left">
                  <span class="material-symbols-outlined text-[16px] text-brand-green shrink-0">schedule</span>
                  <span data-i18n="women.schedule">Consultas presenciais ou online · Primeira consulta de 1 hora.</span>
                </span>
              </div>
            </div>

            <!-- Imagem Natural e Elegante da Especialidade -->
            <div class="lg:col-span-5 flex justify-center">
              <div class="relative w-full aspect-square max-w-[340px] sm:max-w-[380px] rounded-3xl overflow-hidden shadow-2xl border-4 border-white/60 bg-white group/img hover:border-white transition-all duration-500">
                <div class="absolute -inset-4 bg-gradient-to-tr from-white/40 to-brand-green/30 rounded-[2.5rem] blur-2xl -z-10 pointer-events-none"></div>
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>saude-feminina.PNG" alt="Acolhimento de Saúde Feminina na VCura Terapias" class="w-full h-full object-cover group-hover/img:scale-105 transition-transform duration-700" />
              </div>
            </div>

          </div>
        </div>

        <!-- Bloco 5: Especialidade — Nutrição Funcional (Destaque em Degradê Verde Esmeralda) -->
        <div class="v-reveal-scale rounded-3xl bg-dark-emerald-gradient text-white p-5 sm:p-8 md:p-12 mb-12 sm:mb-16 border border-brand-green/35 shadow-glow-dark overflow-hidden relative group">
          <!-- Brilhos decorativos botânicos no fundo escuro -->
          <div class="absolute -right-20 -top-20 w-80 h-80 bg-brand-green/20 rounded-full blur-3xl pointer-events-none group-hover:scale-125 transition-transform duration-700"></div>
          <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-emerald-500/15 rounded-full blur-3xl pointer-events-none"></div>

          <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 items-center relative z-10">
            
            <div class="lg:col-span-7">
              <span class="inline-flex items-center gap-1.5 px-3 py-1 sm:px-3.5 rounded-full bg-brand-green/20 text-emerald-300 border border-brand-green/35 font-semibold text-[11px] sm:text-xs mb-3 shadow-xs backdrop-blur-sm max-w-full">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse shrink-0"></span>
                <span class="truncate" data-i18n-html="nutrition.tag">Nutrição &amp; Terreno Biológico</span>
              </span>
              <!-- Título Obrigatório -->
              <h3 class="font-serif text-xl sm:text-3xl lg:text-4xl font-bold text-white mb-3 tracking-tight leading-snug" data-i18n="nutrition.title">
                Nutrição Funcional Acompanhamento &amp; Suplementação
              </h3>
              <!-- Texto Obrigatório -->
              <p class="text-sm sm:text-base text-emerald-100/90 leading-relaxed mb-3 font-light" data-i18n="nutrition.desc1">
                Uma abordagem personalizada à alimentação, nutrição e estilo de vida, adaptada às necessidades de cada pessoa.
              </p>
              <!-- Segundo Parágrafo Obrigatório -->
              <p class="text-sm sm:text-base text-emerald-100/85 leading-relaxed mb-6 sm:mb-8 font-light" data-i18n="nutrition.desc2">
                O acompanhamento pode ajudar a melhorar energia, digestão, equilíbrio metabólico e bem-estar, através de estratégias alimentares e, quando adequado, suplementação personalizada.
              </p>

              <!-- Bloco Visual Secundário Obrigatório: Avaliação Bionutricional (Glassmorphism Escuro) -->
              <div class="p-4 sm:p-6 rounded-2xl glass-dark border border-white/15 shadow-subtle mb-6">
                <div class="flex items-center gap-2 mb-2">
                  <span class="material-symbols-outlined text-emerald-400 text-[20px] shrink-0">biotech</span>
                  <h4 class="font-serif text-base sm:text-lg font-bold text-white" data-i18n="nutrition.eval_title">Avaliação Bionutricional</h4>
                </div>
                <p class="text-xs sm:text-sm text-emerald-100/80 mb-4 font-light" data-i18n="nutrition.eval_desc">
                  Uma avaliação complementar que permite identificar possíveis necessidades nutricionais e apoiar a definição de um plano individualizado.
                </p>
                <!-- Indicações Apresentadas em Lista Obrigatórias -->
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs sm:text-sm text-emerald-50">
                  <li class="flex items-center gap-2 min-w-0">
                    <span class="material-symbols-outlined text-emerald-400 text-[16px] shrink-0">check_circle</span>
                    <span class="break-words min-w-0 leading-tight" data-i18n="nutrition.list1">Reeducação alimentar e melhoria dos hábitos.</span>
                  </li>
                  <li class="flex items-center gap-2 min-w-0">
                    <span class="material-symbols-outlined text-emerald-400 text-[16px] shrink-0">check_circle</span>
                    <span class="break-words min-w-0 leading-tight" data-i18n="nutrition.list2">Saúde digestiva e intestinal.</span>
                  </li>
                  <li class="flex items-center gap-2 min-w-0">
                    <span class="material-symbols-outlined text-emerald-400 text-[16px] shrink-0">check_circle</span>
                    <span class="break-words min-w-0 leading-tight" data-i18n="nutrition.list3">Cansaço e baixa energia.</span>
                  </li>
                  <li class="flex items-center gap-2 min-w-0">
                    <span class="material-symbols-outlined text-emerald-400 text-[16px] shrink-0">check_circle</span>
                    <span class="break-words min-w-0 leading-tight" data-i18n="nutrition.list4">Equilíbrio metabólico.</span>
                  </li>
                  <li class="flex items-center gap-2 min-w-0">
                    <span class="material-symbols-outlined text-emerald-400 text-[16px] shrink-0">check_circle</span>
                    <span class="break-words min-w-0 leading-tight" data-i18n="nutrition.list5">Necessidades nutricionais específicas.</span>
                  </li>
                  <li class="flex items-center gap-2 min-w-0">
                    <span class="material-symbols-outlined text-emerald-400 text-[16px] shrink-0">check_circle</span>
                    <span class="break-words min-w-0 leading-tight" data-i18n="nutrition.list6">Suplementação personalizada.</span>
                  </li>
                </ul>
              </div>

              <!-- Botão Obrigatório -->
              <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20consulta%20de%20Nutri%C3%A7%C3%A3o%20Funcional." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center text-center gap-2 px-6 sm:px-8 py-3.5 rounded-full bg-gradient-to-r from-brand-green to-emerald-500 hover:from-emerald-400 hover:to-brand-green text-white font-semibold text-xs sm:text-sm shadow-[0_4px_25px_rgba(55,168,23,0.45)] transition-all duration-300 hover:scale-105 w-full sm:w-auto">
                <span class="material-symbols-outlined text-[18px] shrink-0">calendar_today</span>
                <span data-i18n="nutrition.btn">Agendar consulta</span>
              </a>
            </div>

            <div class="lg:col-span-5 flex justify-center">
              <div class="relative w-full aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl border-4 border-emerald-400/30 bg-[#0B2116] group/img hover:border-emerald-300/60 transition-all duration-500">
                <div class="absolute -inset-4 bg-gradient-to-tr from-brand-green/30 to-emerald-400/20 rounded-[2.5rem] blur-2xl -z-10 pointer-events-none"></div>
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>7.jpg" alt="Mesa de avaliação clínica e nutrição funcional" class="w-full h-full object-cover group-hover/img:scale-105 transition-transform duration-700" />
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 7. A NOSSA ABORDAGEM (SECÇÃO EM DEGRADÊ ESCURO BOTÂNICO PROFUNDO) -->
    <!-- ========================================================================= -->
    <section class="py-20 lg:py-28 bg-dark-botanical-section text-white border-y border-brand-green/20 relative overflow-hidden">
      <!-- Elementos de iluminação ambiental sutil -->
      <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-brand-green/15 rounded-full blur-[110px] pointer-events-none"></div>
      <div class="absolute -bottom-32 right-10 w-[500px] h-[300px] bg-brand-blue/15 rounded-full blur-[100px] pointer-events-none"></div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Título da Secção Obrigatório -->
        <div class="text-center max-w-3xl mx-auto mb-16 v-reveal-up">
          <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-2 block" data-i18n="approach.tag">O Seu Percurso na VCura</span>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4 tracking-tight" data-i18n="approach.title">Um acompanhamento pensado para si</h2>
          <p class="text-base sm:text-lg text-emerald-100/80 leading-relaxed font-light" data-i18n="approach.desc">
            Cada pessoa é única. Desenhamos um percurso claro, transparente e acompanhado de perto em cada fase.
          </p>
        </div>

        <!-- 4 Etapas Ligadas: Linha horizontal no desktop, sequência vertical no telemóvel -->
        <div class="relative mb-14">
          <!-- Linha conetora horizontal (Desktop) com rasto de progresso dinâmico -->
          <div class="hidden lg:block absolute top-[64px] left-[12%] right-[12%] h-[3px] bg-white/10 z-0 rounded-full overflow-hidden pointer-events-none">
            <div id="timelineProgressDesktop" class="h-full bg-gradient-to-r from-brand-green via-emerald-400 to-emerald-300 shadow-[0_0_15px_rgba(55,168,23,0.95)] transition-all duration-200 w-0"></div>
          </div>

          <!-- Linha conetora vertical (Mobile / Tablet) com rasto de progresso dinâmico -->
          <div class="block lg:hidden absolute top-[64px] bottom-24 left-1/2 -translate-x-1/2 w-[3px] bg-white/10 z-0 rounded-full overflow-hidden pointer-events-none">
            <div id="timelineProgressMobile" class="w-full bg-gradient-to-b from-brand-green via-emerald-400 to-emerald-300 shadow-[0_0_15px_rgba(55,168,23,0.95)] transition-all duration-200 h-0"></div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative z-10 v-stagger-group">
            
            <!-- Etapa 1 — Fale connosco -->
            <div class="v-timeline-step flex flex-col items-center text-center group glass-dark p-5 sm:p-6 rounded-3xl border border-white/10 hover:border-emerald-400/50 transition-all duration-500 transform hover:-translate-y-1.5 shadow-subtle relative z-10" data-timeline-step="1">
              <div class="timeline-badge w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-[#0a1e14] backdrop-blur-md border-2 border-emerald-400/40 flex items-center justify-center text-emerald-300 shadow-[0_0_25px_rgba(55,168,23,0.3)] mb-4 sm:mb-5 group-hover:scale-110 group-hover:bg-brand-green group-hover:text-white group-hover:border-emerald-300 transition-all duration-300 relative">
                <span class="timeline-halo absolute inset-0 rounded-full bg-emerald-400/30 -z-10 transition-all duration-500 opacity-0 scale-95 pointer-events-none"></span>
                <span class="font-serif text-lg sm:text-xl font-bold">01</span>
              </div>
              <h4 class="timeline-title font-serif text-base sm:text-lg font-bold text-white mb-2 group-hover:text-emerald-300 transition-colors" data-i18n="approach.step1_title">Fale connosco</h4>
              <p class="timeline-desc text-xs sm:text-sm text-emerald-100/75 leading-relaxed font-light" data-i18n="approach.step1_desc">
                Envie mensagem e indicamos a consulta mais adequada para si.
              </p>
            </div>

            <!-- Etapa 2 — Avaliação -->
            <div class="v-timeline-step flex flex-col items-center text-center group glass-dark p-5 sm:p-6 rounded-3xl border border-white/10 hover:border-emerald-400/50 transition-all duration-500 transform hover:-translate-y-1.5 shadow-subtle relative z-10" data-timeline-step="2">
              <div class="timeline-badge w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-[#0a1e14] backdrop-blur-md border-2 border-emerald-400/40 flex items-center justify-center text-emerald-300 shadow-[0_0_25px_rgba(55,168,23,0.3)] mb-4 sm:mb-5 group-hover:scale-110 group-hover:bg-brand-green group-hover:text-white group-hover:border-emerald-300 transition-all duration-300 relative">
                <span class="timeline-halo absolute inset-0 rounded-full bg-emerald-400/30 -z-10 transition-all duration-500 opacity-0 scale-95 pointer-events-none"></span>
                <span class="font-serif text-lg sm:text-xl font-bold">02</span>
              </div>
              <h4 class="timeline-title font-serif text-base sm:text-lg font-bold text-white mb-2 group-hover:text-emerald-300 transition-colors" data-i18n="approach.step2_title">Avaliação</h4>
              <p class="timeline-desc text-xs sm:text-sm text-emerald-100/75 leading-relaxed font-light" data-i18n="approach.step2_desc">
                Conhecemos a sua história, sintomas e necessidades.
              </p>
            </div>

            <!-- Etapa 3 — Personalização -->
            <div class="v-timeline-step flex flex-col items-center text-center group glass-dark p-5 sm:p-6 rounded-3xl border border-white/10 hover:border-emerald-400/50 transition-all duration-500 transform hover:-translate-y-1.5 shadow-subtle relative z-10" data-timeline-step="3">
              <div class="timeline-badge w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-[#0a1e14] backdrop-blur-md border-2 border-emerald-400/40 flex items-center justify-center text-emerald-300 shadow-[0_0_25px_rgba(55,168,23,0.3)] mb-4 sm:mb-5 group-hover:scale-110 group-hover:bg-brand-green group-hover:text-white group-hover:border-emerald-300 transition-all duration-300 relative">
                <span class="timeline-halo absolute inset-0 rounded-full bg-emerald-400/30 -z-10 transition-all duration-500 opacity-0 scale-95 pointer-events-none"></span>
                <span class="font-serif text-lg sm:text-xl font-bold">03</span>
              </div>
              <h4 class="timeline-title font-serif text-base sm:text-lg font-bold text-white mb-2 group-hover:text-emerald-300 transition-colors" data-i18n="approach.step3_title">Personalização</h4>
              <p class="timeline-desc text-xs sm:text-sm text-emerald-100/75 leading-relaxed font-light" data-i18n="approach.step3_desc">
                Definimos a abordagem mais adequada ao seu caso.
              </p>
            </div>

            <!-- Etapa 4 — Acompanhamento -->
            <div class="v-timeline-step flex flex-col items-center text-center group glass-dark p-5 sm:p-6 rounded-3xl border border-white/10 hover:border-emerald-400/50 transition-all duration-500 transform hover:-translate-y-1.5 shadow-subtle relative z-10" data-timeline-step="4">
              <div class="timeline-badge w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-[#0a1e14] backdrop-blur-md border-2 border-emerald-400/40 flex items-center justify-center text-emerald-300 shadow-[0_0_25px_rgba(55,168,23,0.3)] mb-4 sm:mb-5 group-hover:scale-110 group-hover:bg-brand-green group-hover:text-white group-hover:border-emerald-300 transition-all duration-300 relative">
                <span class="timeline-halo absolute inset-0 rounded-full bg-emerald-400/30 -z-10 transition-all duration-500 opacity-0 scale-95 pointer-events-none"></span>
                <span class="font-serif text-lg sm:text-xl font-bold">04</span>
              </div>
              <h4 class="timeline-title font-serif text-base sm:text-lg font-bold text-white mb-2 group-hover:text-emerald-300 transition-colors" data-i18n="approach.step4_title">Acompanhamento</h4>
              <p class="timeline-desc text-xs sm:text-sm text-emerald-100/75 leading-relaxed font-light" data-i18n="approach.step4_desc">
                Monitorizamos e ajustamos a sua evolução sempre que necessário.
              </p>
            </div>

          </div>
        </div>

        <!-- Texto de Encerramento e Botão Único Obrigatórios -->
        <div class="text-center max-w-2xl mx-auto pt-4 v-reveal-up">
          <p class="text-sm sm:text-base text-emerald-100/90 font-medium mb-6" data-i18n="approach.conclusion">
            O objetivo é ajudar a cuidar da sua saúde de forma mais consciente e sustentável.
          </p>
          <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20falar%20convosco%20para%20conhecer%20a%20consulta%20mais%20indicada." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center text-center gap-2 px-6 sm:px-9 py-3.5 sm:py-4 rounded-full bg-gradient-to-r from-brand-green to-emerald-500 hover:from-emerald-400 hover:to-brand-green text-white font-semibold text-xs sm:text-base shadow-[0_4px_25px_rgba(55,168,23,0.4)] transition-all duration-300 hover:scale-105 w-full sm:w-auto">
            <span class="material-symbols-outlined text-[18px] sm:text-[20px] shrink-0">chat</span>
            <span data-i18n="approach.btn">Fale connosco</span>
          </a>
        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 8. TESTEMUNHOS -->
    <!-- ========================================================================= -->
    <section class="py-14 sm:py-16 lg:py-24 bg-white border-b border-brand-gray">
      <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 sm:mb-12 v-reveal-up">
          <div>
            <span class="text-xs font-bold uppercase tracking-widest text-brand-green-dark mb-2 block" data-i18n="testimonials.tag">Experiências Partilhadas</span>
            <!-- Título Obrigatório -->
            <h2 class="font-serif text-2xl sm:text-4xl font-bold text-brand-text" data-i18n="testimonials.title">O que dizem os nossos pacientes</h2>
          </div>
          <!-- Ligação Obrigatória: Ver todas as avaliações no Google -->
          <a href="https://maps.google.com/?q=VCura+Terapias+Lisboa" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-xs sm:text-sm font-semibold text-brand-green-dark hover:text-brand-green transition-colors mt-3 md:mt-0">
            <span data-i18n="testimonials.google_link">Ver todas as avaliações no Google</span>
            <span class="material-symbols-outlined text-[16px] sm:text-[18px]">open_in_new</span>
          </a>
        </div>

        <!-- Carrossel de Testemunhos e Avaliações do Google -->
        <div class="relative group v-stagger-group">
          <div id="testimonials-carousel" class="flex items-start gap-4 sm:gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory no-scrollbar pb-3 pt-1 px-1 cursor-grab active:cursor-grabbing" style="scrollbar-width: none; -ms-overflow-style: none;">
            
            <!-- Testemunho 1: Francine Subtil Alves -->
            <div class="testimonial-slide snap-start shrink-0 w-[88%] min-[480px]:w-[80%] sm:w-[48%] lg:w-[32%] p-5 sm:p-7 rounded-2xl bg-brand-green-soft/40 border border-brand-green-soft flex flex-col justify-between shadow-subtle hover:shadow-card hover:-translate-y-1.5 transition-all duration-300">
              <div>
                <div class="flex items-center justify-between mb-4">
                  <div class="flex items-center text-amber-500">
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                  </div>
                  <span class="text-xs font-semibold text-brand-text/60 flex items-center gap-1">
                    <span class="material-symbols-outlined text-brand-blue text-[16px]">verified</span> Google
                  </span>
                </div>
                <div class="mb-5 sm:mb-6">
                  <span class="text-[11px] sm:text-xs font-bold uppercase tracking-wider text-brand-green-dark block mb-2" data-i18n="testimonials.card_topic">Tema de Acompanhamento</span>
                  <p class="font-serif text-base font-semibold text-brand-text mb-2 leading-snug" data-i18n="testimonials.t1_title">
                    Saúde Integral, Acolhimento &amp; Bem-Estar
                  </p>
                  <p class="text-xs sm:text-sm text-brand-text/80 italic bg-white/70 p-3 sm:p-3.5 rounded-xl border border-brand-gray/50 leading-relaxed" data-i18n="testimonials.t1_desc">
                    &ldquo;Visitei a clínica e foi uma das melhores decisões que tomei para minha saúde e bem-estar. Desde a recepção, me senti acolhida. O ambiente é tranquilo, limpo e tem aquele cheiro suave que já te coloca em outro estado de espírito. Recomendo de olhos fechados. A clínica vai além do tratamento, é um espaço de cuidado real.&rdquo;
                  </p>
                </div>
              </div>
              <div class="flex items-center gap-3 pt-4 border-t border-brand-gray">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>avaliacao-1.png" alt="Francine Subtil Alves" class="w-10 h-10 rounded-full object-cover border border-white shadow-xs shrink-0" />
                <div>
                  <p class="text-xs sm:text-sm font-bold text-brand-text">Francine Subtil Alves</p>
                  <p class="text-[11px] sm:text-xs text-brand-text/65" data-i18n="testimonials.card_patient">Paciente • Google Reviews</p>
                </div>
              </div>
            </div>

            <!-- Testemunho 2: Rita Lucena -->
            <div class="testimonial-slide snap-start shrink-0 w-[88%] min-[480px]:w-[80%] sm:w-[48%] lg:w-[32%] p-5 sm:p-7 rounded-2xl bg-brand-green-soft/40 border border-brand-green-soft flex flex-col justify-between shadow-subtle hover:shadow-card hover:-translate-y-1.5 transition-all duration-300">
              <div>
                <div class="flex items-center justify-between mb-4">
                  <div class="flex items-center text-amber-500">
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                  </div>
                  <span class="text-xs font-semibold text-brand-text/60 flex items-center gap-1">
                    <span class="material-symbols-outlined text-brand-blue text-[16px]">verified</span> Google
                  </span>
                </div>
                <div class="mb-5 sm:mb-6">
                  <span class="text-[11px] sm:text-xs font-bold uppercase tracking-wider text-brand-green-dark block mb-2" data-i18n="testimonials.card_topic">Tema de Acompanhamento</span>
                  <p class="font-serif text-base font-semibold text-brand-text mb-2 leading-snug" data-i18n="testimonials.t4_title">
                    Profissionalismo, Dedicação &amp; Resultados Eficazes
                  </p>
                  <div class="text-xs sm:text-sm text-brand-text/80 italic bg-white/70 p-3 sm:p-3.5 rounded-xl border border-brand-gray/50 leading-relaxed space-y-2" data-i18n-html="testimonials.t4_desc">
                    <p>&ldquo;Para além da sua enorme simpatia, a Elisabete é uma profissional de excelência. O espaço está sempre a uma temperatura agradável e, durante os tratamentos, demonstra uma atenção constante ao nosso bem-estar, certificando-se de que estamos confortáveis, quentes e tranquilos em todos os momentos.</p>
                    <p>A Elisabete preocupa-se genuinamente com os seus clientes, recebe-nos sempre com um sorriso e cria um ambiente acolhedor que nos faz sentir imediatamente à vontade.</p>
                    <p>Estou extremamente satisfeita com a minha experiência no VCura. Cada sessão é um verdadeiro momento de relaxamento, onde consigo desligar-me das preocupações do dia a dia. Além disso, os tratamentos têm produzido resultados visíveis e eficazes.</p>
                    <p>Obrigada, Elisabete, pelo profissionalismo, dedicação e carinho com que cuida de cada cliente.&rdquo;</p>
                  </div>
                </div>
              </div>
              <div class="flex items-center gap-3 pt-4 border-t border-brand-gray">
                <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-purple-600 to-indigo-500 text-white flex items-center justify-center font-bold text-sm shadow-xs shrink-0">R</div>
                <div>
                  <p class="text-xs sm:text-sm font-bold text-brand-text">Rita Lucena</p>
                  <p class="text-[11px] sm:text-xs text-brand-text/65" data-i18n="testimonials.card_patient">Paciente • Google Reviews</p>
                </div>
              </div>
            </div>

            <!-- Testemunho 3: Pedro Marquês -->
            <div class="testimonial-slide snap-start shrink-0 w-[88%] min-[480px]:w-[80%] sm:w-[48%] lg:w-[32%] p-5 sm:p-7 rounded-2xl bg-brand-green-soft/40 border border-brand-green-soft flex flex-col justify-between shadow-subtle hover:shadow-card hover:-translate-y-1.5 transition-all duration-300">
              <div>
                <div class="flex items-center justify-between mb-4">
                  <div class="flex items-center text-amber-500">
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                  </div>
                  <span class="text-xs font-semibold text-brand-text/60 flex items-center gap-1">
                    <span class="material-symbols-outlined text-brand-blue text-[16px]">verified</span> Google
                  </span>
                </div>
                <div class="mb-5 sm:mb-6">
                  <span class="text-[11px] sm:text-xs font-bold uppercase tracking-wider text-brand-green-dark block mb-2" data-i18n="testimonials.card_topic">Tema de Acompanhamento</span>
                  <p class="font-serif text-base font-semibold text-brand-text mb-2 leading-snug" data-i18n="testimonials.t2_title">
                    Alívio de Dores nas Costas &amp; Competência Clínica
                  </p>
                  <p class="text-xs sm:text-sm text-brand-text/80 italic bg-white/70 p-3 sm:p-3.5 rounded-xl border border-brand-gray/50 leading-relaxed" data-i18n="testimonials.t2_desc">
                    &ldquo;Fui à VCura, um espaço bom e agradável, por causa das minhas dores nas costas e fui tratado pela Elisabete, uma profissional muito boa e competente. Senti-me muito melhor depois da consulta e, por isso, irei voltar. Recomendo.&rdquo;
                  </p>
                </div>
              </div>
              <div class="flex items-center gap-3 pt-4 border-t border-brand-gray">
                <div class="w-10 h-10 rounded-full bg-brand-green text-white flex items-center justify-center font-bold text-sm shadow-xs shrink-0">P</div>
                <div>
                  <p class="text-xs sm:text-sm font-bold text-brand-text">Pedro Marquês</p>
                  <p class="text-[11px] sm:text-xs text-brand-text/65" data-i18n="testimonials.card_patient">Paciente • Google Reviews</p>
                </div>
              </div>
            </div>

            <!-- Testemunho 4: Dierê Fernandez -->
            <div class="testimonial-slide snap-start shrink-0 w-[88%] min-[480px]:w-[80%] sm:w-[48%] lg:w-[32%] p-5 sm:p-7 rounded-2xl bg-brand-green-soft/40 border border-brand-green-soft flex flex-col justify-between shadow-subtle hover:shadow-card hover:-translate-y-1.5 transition-all duration-300">
              <div>
                <div class="flex items-center justify-between mb-4">
                  <div class="flex items-center text-amber-500">
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                    <span class="material-symbols-outlined text-[18px] sm:text-[20px] fill-1">star</span>
                  </div>
                  <span class="text-xs font-semibold text-brand-text/60 flex items-center gap-1">
                    <span class="material-symbols-outlined text-brand-blue text-[16px]">verified</span> Google
                  </span>
                </div>
                <div class="mb-5 sm:mb-6">
                  <span class="text-[11px] sm:text-xs font-bold uppercase tracking-wider text-brand-green-dark block mb-2" data-i18n="testimonials.card_topic">Tema de Acompanhamento</span>
                  <p class="font-serif text-base font-semibold text-brand-text mb-2 leading-snug" data-i18n="testimonials.t3_title">
                    Recuperação de Tendinite &amp; Cuidado Personalizado
                  </p>
                  <p class="text-xs sm:text-sm text-brand-text/80 italic bg-white/70 p-3 sm:p-3.5 rounded-xl border border-brand-gray/50 leading-relaxed" data-i18n="testimonials.t3_desc">
                    &ldquo;Todos os meus elogios ao atendimento da VCura Terapias. A Elisabete é uma profissional extremamente competente e atenciosa: curou-me uma tendinite no braço de forma exemplar, nunca mais tive dores. Totalmente recomendada.&rdquo;
                  </p>
                </div>
              </div>
              <div class="flex items-center gap-3 pt-4 border-t border-brand-gray">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>avaliacao-3.png" alt="Dierê Fernandez" class="w-10 h-10 rounded-full object-cover border border-white shadow-xs shrink-0" />
                <div>
                  <p class="text-xs sm:text-sm font-bold text-brand-text">Dierê Fernandez</p>
                  <p class="text-[11px] sm:text-xs text-brand-text/65" data-i18n="testimonials.card_patient">Paciente • Google Reviews</p>
                </div>
              </div>
            </div>

          </div>

          <!-- Controles de Navegação do Carrossel de Testemunhos -->
          <div class="flex items-center justify-between mt-6 px-2">
            <button type="button" id="testimonials-prev" aria-label="Avaliação anterior" class="w-11 h-11 rounded-full bg-white hover:bg-brand-green-soft text-brand-text hover:text-brand-green-dark border border-brand-gray shadow-xs flex items-center justify-center transition-all duration-200 hover:scale-105 active:scale-95">
              <span class="material-symbols-outlined text-[22px]">arrow_back</span>
            </button>

            <!-- Indicadores Centrais (Dots) -->
            <div id="testimonials-dots" class="flex items-center justify-center gap-2">
              <button type="button" class="testimonial-dot w-6 h-2.5 rounded-full bg-brand-green transition-all duration-300" aria-label="Avaliação 1"></button>
              <button type="button" class="testimonial-dot w-2.5 h-2.5 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Avaliação 2"></button>
              <button type="button" class="testimonial-dot w-2.5 h-2.5 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Avaliação 3"></button>
              <button type="button" class="testimonial-dot w-2.5 h-2.5 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Avaliação 4"></button>
            </div>

            <button type="button" id="testimonials-next" aria-label="Próxima avaliação" class="w-11 h-11 rounded-full bg-white hover:bg-brand-green-soft text-brand-text hover:text-brand-green-dark border border-brand-gray shadow-xs flex items-center justify-center transition-all duration-200 hover:scale-105 active:scale-95">
              <span class="material-symbols-outlined text-[22px]">arrow_forward</span>
            </button>
          </div>
        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 9. QUEM SOMOS -->
    <!-- ========================================================================= -->
    <section id="quem-somos" class="py-16 lg:py-24 bg-brand-green-soft/40 border-b border-brand-gray">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
          
          <!-- Coluna Esquerda: Conteúdo Editorial -->
          <div class="lg:col-span-7 flex flex-col justify-center v-reveal-left">
            
            <span class="text-xs font-bold uppercase tracking-widest text-brand-green-dark mb-2 block" data-i18n="about.tag">Fundadora &amp; Direção Técnica</span>
            
            <!-- Título Obrigatório -->
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-brand-text mb-6" data-i18n="about.title">
              Cuidar de cada pessoa de forma única
            </h2>

            <!-- Biografia Obrigatória -->
            <div class="space-y-4 text-base text-brand-text/85 leading-relaxed mb-6">
              <p data-i18n="about.p1">
                Com experiência clínica internacional e estágios hospitalares na China, em Luzhou e Sanya, e no Brasil, em São Paulo, Elisabete Monteiro lidera uma equipa de terapeutas que une diferentes abordagens para cuidar de cada pessoa de forma única, integrativa e humana.
              </p>
              <p data-i18n="about.p2">
                A sua prática clínica assenta no diagnóstico rigoroso e na escuta ativa, integrando técnicas ancestrais e complementares para restabelecer a vitalidade e a harmonia interior de cada paciente.
              </p>
            </div>

            <!-- Fotografia Oficial da Fundadora (Aparece aqui no Telemóvel / Tablet: logo após o texto da biografia) -->
            <div class="lg:hidden flex justify-center my-6">
              <div class="relative w-full max-w-[340px] sm:max-w-[380px] rounded-3xl overflow-hidden shadow-elevated border-4 border-white bg-white p-2 group">
                <div class="absolute -inset-3 bg-gradient-to-tr from-brand-green/20 to-brand-blue/15 rounded-3xl blur-xl -z-10 opacity-70 group-hover:opacity-100 transition-opacity"></div>
                <div class="w-full aspect-[3/4] rounded-2xl overflow-hidden bg-brand-gray relative">
                  <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/Imagens%20EM/Fotos%20EM%20Green%20Brand%20VCura.jpeg" ); ?>" alt="Elisabete Monteiro - Fundadora e Diretora Técnica da VCura Terapias" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="p-3.5 sm:p-4 text-center">
                  <span class="font-serif text-base font-bold text-brand-text block" data-i18n="about.name">Elisabete Monteiro</span>
                  <p class="text-xs font-semibold text-brand-green-dark mt-1 flex items-center justify-center gap-1">
                    <span class="material-symbols-outlined text-[18px]">workspace_premium</span>
                    <span data-i18n="about.specialist">Especialista de Medicina Tradicional Chinesa</span>
                  </p>
                  <span class="text-[11px] text-brand-text/65 block mt-0.5" data-i18n-html="about.photo_badge">Fundadora &amp; Diretora Técnica • Cédula C-006284</span>
                </div>
              </div>
            </div>

            <!-- Ações e Credenciais (Centralizados no telemóvel e alinhados à esquerda no desktop) -->
            <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-center lg:justify-start gap-3 sm:gap-4 w-full">
              <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20marcar%20uma%20consulta%20com%20a%20Dra.%20Elisabete%20Monteiro." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center text-center gap-2 px-5 sm:px-7 py-3 sm:py-3.5 rounded-full bg-brand-green text-white font-semibold text-xs sm:text-sm shadow-card hover:bg-brand-green-dark transition-all hover:scale-105 w-full sm:w-auto">
                <span class="material-symbols-outlined text-[18px] shrink-0">calendar_today</span>
                <span data-i18n="about.btn">Marcar consulta com Elisabete Monteiro</span>
              </a>
              <button onclick="openModal('modal-cert')" type="button" class="inline-flex items-center justify-center text-center gap-1.5 px-4 sm:px-5 py-2.5 sm:py-3 rounded-full bg-white text-brand-green-dark text-xs font-semibold border border-brand-gray hover:bg-brand-gray transition-colors w-full sm:w-auto">
                <span class="material-symbols-outlined text-[18px] text-brand-blue shrink-0">school</span>
                <span data-i18n="about.btn_cert">Ver Certificação Hospitalar (Sanya, China)</span>
              </button>
            </div>

          </div>

          <!-- Coluna Direita (Visível apenas em Desktop lg: 1024px+) -->
          <div class="hidden lg:flex lg:col-span-5 justify-center v-reveal-right">
            <div class="relative w-full max-w-[420px] rounded-3xl overflow-hidden shadow-elevated border-4 border-white bg-white p-2 group">
              <!-- Brilho ambiental sutil -->
              <div class="absolute -inset-3 bg-gradient-to-tr from-brand-green/20 to-brand-blue/15 rounded-3xl blur-xl -z-10 opacity-70 group-hover:opacity-100 transition-opacity"></div>
              <div class="w-full aspect-[3/4] rounded-2xl overflow-hidden bg-brand-gray relative">
                <!-- Fotografia Oficial da Fundadora Elisabete Monteiro com farda e logótipo oficial -->
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/Imagens%20EM/Fotos%20EM%20Green%20Brand%20VCura.jpeg" ); ?>" alt="Elisabete Monteiro - Fundadora e Diretora Técnica da VCura Terapias" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700 ease-out" />
              </div>
              <div class="p-4 text-center">
                <span class="font-serif text-base font-bold text-brand-text block" data-i18n="about.name">Elisabete Monteiro</span>
                <p class="text-xs font-semibold text-brand-green-dark mt-1 flex items-center justify-center gap-1">
                  <span class="material-symbols-outlined text-[18px]">workspace_premium</span>
                  <span data-i18n="about.specialist">Especialista de Medicina Tradicional Chinesa</span>
                </p>
                <span class="text-[11px] text-brand-text/65 block mt-0.5" data-i18n-html="about.photo_badge">Fundadora &amp; Diretora Técnica • Cédula C-006284</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 10. CONDIÇÕES ESPECIAIS, ACORDOS E PARCERIAS -->
    <!-- ========================================================================= -->
    <section class="py-14 sm:py-16 lg:py-20 bg-white border-b border-brand-gray overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Título e Texto Obrigatórios -->
        <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-10 v-reveal-up">
          <span class="text-xs font-bold uppercase tracking-widest text-brand-green-dark mb-2 block" data-i18n="protocols.tag">Protocolos de Saúde</span>
          <h2 class="font-serif text-2xl sm:text-4xl font-bold text-brand-text mb-3" data-i18n="protocols.title">Condições especiais para si</h2>
          <p class="text-sm sm:text-lg text-brand-text/80 leading-relaxed" data-i18n="protocols.desc">
            Tem seguro ou é parceiro? Pode ter condições especiais.
          </p>
        </div>

        <!-- 4. Selo Superior (Separado da animação, cápsula translúcida elegante e centralizada) -->
        <div class="text-center mb-6 sm:mb-8 v-reveal-up">
          <span class="inline-flex items-center gap-1.5 sm:gap-2 px-3 sm:px-4 py-1.5 rounded-full bg-brand-green-soft text-brand-green-dark text-[10px] sm:text-xs font-semibold uppercase tracking-wider border border-brand-green/30 shadow-xs max-w-full text-center">
            <span class="w-2 h-2 rounded-full bg-brand-green animate-pulse shrink-0"></span>
            <span class="break-words">ENTIDADES, SEGUROS &amp; PARCEIROS CONVENCIONADOS</span>
          </span>
        </div>

      </div>

      <!-- CARROSSEL INFINITO DE EMPRESAS PARCEIRAS COM FUNDO DEGRADÊ E FAIXA NEON -->
      <div class="relative w-full bg-emerald-strip-gradient py-8 sm:py-12 shadow-[inset_0_6px_20px_rgba(0,0,0,0.25),inset_0_-6px_20px_rgba(0,0,0,0.25)] mb-10 sm:mb-12 overflow-hidden">
        
        <!-- Faixa Neon Contínua Iluminada atrás dos blocos -->
        <div class="neon-partner-strip"></div>
        <div class="neon-partner-line"></div>

        <div class="relative w-full overflow-hidden [mask-image:linear-gradient(to_right,transparent,black_4%,black_96%,transparent)] z-10">
          <div class="animate-marquee-infinite items-center gap-6 sm:gap-10 py-2">
            
            <!-- Conjunto 1: Blocos Brancos com Logos Originais -->
            <div class="flex items-center gap-6 sm:gap-10 shrink-0">
              
              <!-- 1. Medicare -->
              <div class="partner-card-box">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/logo_empresas/" ); ?>3.png" alt="Medicare - Acordos e Parcerias VCura" class="w-full h-full object-contain" loading="lazy" />
              </div>

              <!-- 2. Atlântico Europa -->
              <div class="partner-card-box overflow-hidden">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/logo_empresas/" ); ?>4.png" alt="Atlântico Europa - Acordos e Parcerias VCura" class="w-full h-full object-cover rounded-[18px] sm:rounded-[22px]" loading="lazy" />
              </div>

              <!-- 3. Multicare -->
              <div class="partner-card-box">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/logo_empresas/" ); ?>5.png" alt="Multicare - Acordos e Parcerias VCura" class="w-full h-full object-contain" loading="lazy" />
              </div>

              <!-- 4. Misericórdias Saúde -->
              <div class="partner-card-box">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/logo_empresas/" ); ?>1.png" alt="Misericórdias Saúde - Acordos e Parcerias VCura" class="w-full h-full object-contain" loading="lazy" />
              </div>

            </div>

            <!-- Conjunto 2 duplicado para Loop Infinito Contínuo e Perfeito -->
            <div class="flex items-center gap-6 sm:gap-10 shrink-0" aria-hidden="true">
              
              <!-- 1. Medicare -->
              <div class="partner-card-box">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/logo_empresas/" ); ?>3.png" alt="Medicare - Acordos e Parcerias VCura" class="w-full h-full object-contain" loading="lazy" />
              </div>

              <!-- 2. Atlântico Europa -->
              <div class="partner-card-box overflow-hidden">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/logo_empresas/" ); ?>4.png" alt="Atlântico Europa - Acordos e Parcerias VCura" class="w-full h-full object-cover rounded-[18px] sm:rounded-[22px]" loading="lazy" />
              </div>

              <!-- 3. Multicare -->
              <div class="partner-card-box">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/logo_empresas/" ); ?>5.png" alt="Multicare - Acordos e Parcerias VCura" class="w-full h-full object-contain" loading="lazy" />
              </div>

              <!-- 4. Misericórdias Saúde -->
              <div class="partner-card-box">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/logo_empresas/" ); ?>1.png" alt="Misericórdias Saúde - Acordos e Parcerias VCura" class="w-full h-full object-contain" loading="lazy" />
              </div>

            </div>

          </div>
        </div>
      </div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- 5. Botão Preservado em Degradê Esmeralda puxando para Verde Claro -->
        <div class="text-center v-reveal-up">
          <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20confirmar%20as%20condi%C3%A7%C3%B5es%20do%20meu%20acordo%20ou%20seguro%20de%20sa%C3%BAde." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center text-center gap-2 px-5 sm:px-10 py-3.5 sm:py-4 rounded-full bg-gradient-to-r from-emerald-600 via-brand-green to-emerald-400 hover:from-emerald-500 hover:via-brand-green hover:to-emerald-300 text-white font-semibold text-xs sm:text-base shadow-[0_6px_22px_rgba(16,185,129,0.38)] hover:shadow-[0_10px_30px_rgba(16,185,129,0.55)] transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-[1.02] w-full sm:w-auto max-w-full">
            <span class="material-symbols-outlined text-[18px] sm:text-[20px] shrink-0">verified</span>
            <span data-i18n="protocols.btn">Confirmar as condições do meu acordo</span>
          </a>
        </div>
      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 11. WORKSHOPS E FORMAÇÕES -->
    <!-- ========================================================================= -->
    <section id="workshops" class="py-16 lg:py-24 bg-brand-green-soft/40 border-b border-brand-gray">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header de Seção com Badges de Navegação em Folha dos 2 Workshops -->
        <div class="text-center max-w-3xl mx-auto mb-10 v-reveal-up">
          <span class="text-xs font-bold uppercase tracking-widest text-brand-green-dark mb-2 block" data-i18n="workshops.tag">Cursos &amp; Desenvolvimento</span>
          <h2 class="font-serif text-3xl sm:text-4xl font-bold text-brand-text mb-4" data-i18n="workshops.title">Cursos, Formações &amp; Workshops</h2>
          <p class="text-base sm:text-lg text-brand-text/80 leading-relaxed mb-6" data-i18n="workshops.desc">
            Cursos práticos e formações certificadas para particulares e empresas. Aprenda técnicas integrativas, desenvolva novos conhecimentos e promova a saúde e o bem-estar pessoal ou da sua equipa.
          </p>

        </div>

        <!-- Eventos em Destaque — Carrossel Interativo Tipo Folhas com Prévia Lateral (Peek) e Setas -->
        <div class="relative max-w-5xl mx-auto mb-16 v-reveal-up group">
          <div id="events-cards-carousel" class="flex gap-4 sm:gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory no-scrollbar pb-3 px-2 sm:px-4 cursor-grab active:cursor-grabbing" style="scrollbar-width: none; -ms-overflow-style: none;">
            
            <!-- Evento 1: Workshop Menopausa Consciente -->
            <div class="event-card-slide snap-center shrink-0 w-[90%] sm:w-[84%] lg:w-[80%] mx-auto">
              <div class="bg-white rounded-3xl p-5 sm:p-8 md:p-10 border border-brand-gray/80 shadow-card hover:shadow-elevated transition-all duration-300 flex flex-col justify-between group/card h-full">
                <div>
                  <div class="flex items-center justify-between mb-4">
                    <span class="px-3 sm:px-3.5 py-1 rounded-full bg-brand-green-soft text-brand-green-dark font-semibold text-[11px] sm:text-xs" data-i18n="workshops.ev1_badge">
                      Workshop Presencial em Destaque
                    </span>
                  </div>

                  <!-- Título Obrigatório -->
                  <h3 class="font-serif text-xl sm:text-2xl font-bold text-brand-text mb-3 sm:mb-4 leading-snug" data-i18n="workshops.ev1_title">
                    Menopausa Consciente | Conhecer. Escolher. Cuidar.
                  </h3>

                  <!-- Cartaz Oficial do Workshop -->
                  <div class="mb-5 rounded-2xl overflow-hidden border border-brand-gray/80 bg-brand-gray/20 shadow-sm flex items-center justify-center">
                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/IMG_2869.PNG" ); ?>" alt="Cartaz Oficial — Workshop Menopausa Consciente" class="w-full h-auto max-h-[340px] sm:max-h-[440px] object-contain rounded-xl group-hover/card:scale-[1.01] transition-transform duration-300" />
                  </div>

                  <!-- Descrição Obrigatória -->
                  <p class="text-xs sm:text-base text-brand-text/80 leading-relaxed mb-6" data-i18n="workshops.ev1_desc">
                    Um encontro dirigido a mulheres que querem compreender melhor as transformações do climatério e da menopausa, conhecer diferentes possibilidades de cuidado e adquirir ferramentas para viver esta fase de forma mais consciente.
                  </p>
                </div>

                <!-- Botões: Inscrição em Degradê Esmeralda & Saber mais -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-5 sm:pt-6 border-t border-brand-gray">
                  <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20fazer%20a%20minha%20inscri%C3%A7%C3%A3o%20no%20Workshop%20Menopausa%20Consciente." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center text-center gap-2 px-6 sm:px-7 py-3 rounded-full bg-gradient-to-r from-brand-green to-emerald-500 hover:from-emerald-400 hover:to-brand-green text-white font-semibold text-xs sm:text-sm shadow-[0_4px_16px_rgba(55,168,23,0.30)] hover:shadow-[0_6px_22px_rgba(55,168,23,0.45)] transition-all duration-300 hover:scale-[1.02] w-full sm:w-auto">
                    <span class="material-symbols-outlined text-[18px]">how_to_reg</span>
                    <span data-i18n="btn.inscriptions">Inscrição</span>
                  </a>
                  <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20informa%C3%A7%C3%B5es%20sobre%20o%20Workshop%20Menopausa%20Consciente." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center text-center gap-1.5 px-4 sm:px-5 py-3 rounded-full bg-brand-gray text-brand-text font-semibold text-xs sm:text-sm hover:bg-brand-green-soft hover:text-brand-green-dark transition-all w-full sm:w-auto">
                    <span data-i18n="btn.learn_more">Saber mais</span>
                    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- Evento 2: Formação Presencial Reiki Usui Nível 1 -->
            <div class="event-card-slide snap-center shrink-0 w-[90%] sm:w-[84%] lg:w-[80%] mx-auto">
              <div class="bg-white rounded-3xl p-5 sm:p-8 md:p-10 border border-brand-gray/80 shadow-card hover:shadow-elevated transition-all duration-300 flex flex-col justify-between group/card h-full">
                <div>
                  <div class="flex items-center justify-between mb-4">
                    <span class="px-3 sm:px-3.5 py-1 rounded-full bg-brand-green-soft text-brand-green-dark font-semibold text-[11px] sm:text-xs" data-i18n="workshops.ev2_badge">
                      Formação Presencial Certificada
                    </span>
                  </div>

                  <!-- Título Obrigatório -->
                  <h3 class="font-serif text-xl sm:text-2xl font-bold text-brand-text mb-3 sm:mb-4 leading-snug" data-i18n="workshops.ev2_title">
                    Formação presencial — Reiki Usui, Nível 1
                  </h3>

                  <!-- Cartaz Oficial da Formação -->
                  <div class="mb-5 rounded-2xl overflow-hidden border border-brand-gray/80 bg-brand-gray/20 shadow-sm flex items-center justify-center">
                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/IMG_2868.PNG" ); ?>" alt="Cartaz Oficial — Formação Reiki Usui Nível 1" class="w-full h-auto max-h-[340px] sm:max-h-[440px] object-contain rounded-xl group-hover/card:scale-[1.01] transition-transform duration-300" />
                  </div>

                  <!-- Descrição Obrigatória -->
                  <p class="text-xs sm:text-base text-brand-text/80 leading-relaxed mb-6" data-i18n="workshops.ev2_desc">
                    Uma formação presencial de iniciação ao Reiki Usui, dirigida a quem deseja conhecer e aprofundar esta prática.
                  </p>
                </div>

                <!-- Botões: Inscrição em Degradê Esmeralda & Saber mais -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-5 sm:pt-6 border-t border-brand-gray">
                  <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20fazer%20a%20minha%20inscri%C3%A7%C3%A3o%20na%20Forma%C3%A7%C3%A3o%20presencial%20de%20Reiki%20Usui%20N%C3%ADvel%201." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center text-center gap-2 px-6 sm:px-7 py-3 rounded-full bg-gradient-to-r from-brand-green to-emerald-500 hover:from-emerald-400 hover:to-brand-green text-white font-semibold text-xs sm:text-sm shadow-[0_4px_16px_rgba(55,168,23,0.30)] hover:shadow-[0_6px_22px_rgba(55,168,23,0.45)] transition-all duration-300 hover:scale-[1.02] w-full sm:w-auto">
                    <span class="material-symbols-outlined text-[18px]">how_to_reg</span>
                    <span data-i18n="btn.interest">Inscrições</span>
                  </a>
                  <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20informa%C3%A7%C3%B5es%20sobre%20o%20curso%20de%20Reiki%20Usui%20N%C3%ADvel%201." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center text-center gap-1.5 px-4 sm:px-5 py-3 rounded-full bg-brand-gray text-brand-text font-semibold text-xs sm:text-sm hover:bg-brand-green-soft hover:text-brand-green-dark transition-all w-full sm:w-auto">
                    <span data-i18n="btn.learn_more">Saber mais</span>
                    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                  </a>
                </div>
              </div>
            </div>

          </div>

          <!-- Setas Flutuantes Discretas no Meio das Laterais -->
          <button type="button" id="events-cards-prev" aria-label="Evento anterior" class="absolute -left-2 sm:-left-5 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-white/95 backdrop-blur-md hover:bg-brand-green hover:text-white text-brand-text border border-brand-gray shadow-card flex items-center justify-center transition-all duration-300 hover:scale-110 active:scale-95 z-20">
            <span class="material-symbols-outlined text-[24px]">chevron_left</span>
          </button>
          <button type="button" id="events-cards-next" aria-label="Próximo evento" class="absolute -right-2 sm:-right-5 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-white/95 backdrop-blur-md hover:bg-brand-green hover:text-white text-brand-text border border-brand-gray shadow-card flex items-center justify-center transition-all duration-300 hover:scale-110 active:scale-95 z-20">
            <span class="material-symbols-outlined text-[24px]">chevron_right</span>
          </button>

          <!-- Indicadores de Navegação dos Eventos com Contador -->
          <div id="events-cards-dots" class="flex items-center justify-center gap-2 mt-4">
            <button type="button" class="event-card-dot w-6 h-2.5 rounded-full bg-brand-green transition-all duration-300" aria-label="Workshop 1"></button>
            <button type="button" class="event-card-dot w-2.5 h-2.5 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Workshop 2"></button>
          </div>
        </div>

        <!-- Workshops Presenciais e Online — Carrossel de Temáticas Deslizável com Tom Verde Claro Leve -->
        <div class="mb-16 v-reveal-up">
          <div class="text-center max-w-2xl mx-auto mb-6">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-green-dark block mb-1" data-i18n="workshops.catalog_tag">Catálogo de Temáticas</span>
            <h3 class="font-serif text-2xl font-bold text-brand-text" data-i18n="workshops.catalog_title">Workshops presenciais e online</h3>
          </div>

          <!-- Trilho do Carrossel de Cards -->
          <div class="relative group">
            <div id="topics-carousel" class="flex gap-3.5 sm:gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory no-scrollbar pb-4 pt-1 px-1 cursor-grab active:cursor-grabbing" style="scrollbar-width: none; -ms-overflow-style: none;">
              
              <!-- Tema 1: Fadiga Mental -->
              <div class="topic-slide snap-start shrink-0 w-[88%] min-[420px]:w-[84%] sm:w-[48%] lg:w-[28%] p-5 sm:p-6 rounded-3xl bg-gradient-to-br from-[#003D26] via-[#087A4A] to-[#16A765] text-white border border-emerald-400/40 shadow-glow-dark hover:border-emerald-300 hover:shadow-[0_12px_28px_rgba(22,167,101,0.35)] hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group/card relative overflow-hidden">
                <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-white/10 rounded-full blur-2xl pointer-events-none group-hover/card:scale-125 transition-transform duration-500"></div>
                <div class="relative z-10">
                  <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-2xl bg-white/15 backdrop-blur-md text-emerald-200 shadow-xs flex items-center justify-center mb-3 sm:mb-4 border border-white/25">
                    <span class="material-symbols-outlined text-[20px] sm:text-[22px]">psychology</span>
                  </div>
                  <h4 class="font-serif text-base sm:text-lg font-bold text-white mb-1.5 sm:mb-2" data-i18n="workshops.t1_title">Fadiga Mental</h4>
                  <p class="text-xs sm:text-sm text-emerald-50/90 leading-relaxed mb-4 sm:mb-6 font-light" data-i18n="workshops.t1_desc">
                    Identificar, Compreender e Recuperar.
                  </p>
                </div>
                <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20informa%C3%A7%C3%B5es%20e%20inscri%C3%A7%C3%A3o%20no%20Workshop%20de%20Fadiga%20Mental." target="_blank" rel="noopener noreferrer" class="relative z-10 inline-flex items-center justify-between w-full px-4 py-2.5 rounded-xl bg-white text-[#003D26] hover:bg-emerald-50 font-bold text-xs shadow-md hover:scale-[1.02] transition-all">
                  <span data-i18n="btn.info_inscriptions">InformaÃ§Ãµes e inscriÃ§Ãµes</span>
                  <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </a>
              </div>

              <!-- Tema 2: Stress CrÃ³nico -->
              <div class="topic-slide snap-start shrink-0 w-[88%] min-[420px]:w-[84%] sm:w-[48%] lg:w-[28%] p-5 sm:p-6 rounded-3xl bg-gradient-to-br from-[#003D26] via-[#087A4A] to-[#16A765] text-white border border-emerald-400/40 shadow-glow-dark hover:border-emerald-300 hover:shadow-[0_12px_28px_rgba(22,167,101,0.35)] hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group/card relative overflow-hidden">
                <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-white/10 rounded-full blur-2xl pointer-events-none group-hover/card:scale-125 transition-transform duration-500"></div>
                <div class="relative z-10">
                  <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-2xl bg-white/15 backdrop-blur-md text-emerald-200 shadow-xs flex items-center justify-center mb-3 sm:mb-4 border border-white/25">
                    <span class="material-symbols-outlined text-[20px] sm:text-[22px]">bolt</span>
                  </div>
                  <h4 class="font-serif text-base sm:text-lg font-bold text-white mb-1.5 sm:mb-2" data-i18n="workshops.t2_title">Stress CrÃ³nico</h4>
                  <p class="text-xs sm:text-sm text-emerald-50/90 leading-relaxed mb-4 sm:mb-6 font-light" data-i18n="workshops.t2_desc">
                    Compreender, Prevenir e Intervir.
                  </p>
                </div>
                <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20informa%C3%A7%C3%B5es%20e%20inscri%C3%A7%C3%A3o%20no%20Workshop%20de%20Stress%20Cr%C3%B3nico." target="_blank" rel="noopener noreferrer" class="relative z-10 inline-flex items-center justify-between w-full px-4 py-2.5 rounded-xl bg-white text-[#003D26] hover:bg-emerald-50 font-bold text-xs shadow-md hover:scale-[1.02] transition-all">
                  <span data-i18n="btn.info_inscriptions">InformaÃ§Ãµes e inscriÃ§Ãµes</span>
                  <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </a>
              </div>

              <!-- Tema 3: ClimatÃ©rio & Menopausa -->
              <div class="topic-slide snap-start shrink-0 w-[88%] min-[420px]:w-[84%] sm:w-[48%] lg:w-[28%] p-5 sm:p-6 rounded-3xl bg-gradient-to-br from-[#003D26] via-[#087A4A] to-[#16A765] text-white border border-emerald-400/40 shadow-glow-dark hover:border-emerald-300 hover:shadow-[0_12px_28px_rgba(22,167,101,0.35)] hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group/card relative overflow-hidden">
                <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-white/10 rounded-full blur-2xl pointer-events-none group-hover/card:scale-125 transition-transform duration-500"></div>
                <div class="relative z-10">
                  <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-2xl bg-white/15 backdrop-blur-md text-emerald-200 shadow-xs flex items-center justify-center mb-3 sm:mb-4 border border-white/25">
                    <span class="material-symbols-outlined text-[20px] sm:text-[22px]">nature_people</span>
                  </div>
                  <h4 class="font-serif text-base sm:text-lg font-bold text-white mb-1.5 sm:mb-2" data-i18n="workshops.t3_title">ClimatÃ©rio &amp; Menopausa</h4>
                  <p class="text-xs sm:text-sm text-emerald-50/90 leading-relaxed mb-4 sm:mb-6 font-light" data-i18n="workshops.t3_desc">
                    Do Sofrimento ao Florescimento.
                  </p>
                </div>
                <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20informa%C3%A7%C3%B5es%20e%20inscri%C3%A7%C3%A3o%20no%20Workshop%20de%20Climat%C3%A9rio%20e%20Menopausa." target="_blank" rel="noopener noreferrer" class="relative z-10 inline-flex items-center justify-between w-full px-4 py-2.5 rounded-xl bg-white text-[#003D26] hover:bg-emerald-50 font-bold text-xs shadow-md hover:scale-[1.02] transition-all">
                  <span data-i18n="btn.info_inscriptions">InformaÃ§Ãµes e inscriÃ§Ãµes</span>
                  <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </a>
              </div>

              <!-- Tema 4: AlimentaÃ§Ã£o SaudÃ¡vel -->
              <div class="topic-slide snap-start shrink-0 w-[88%] min-[420px]:w-[84%] sm:w-[48%] lg:w-[28%] p-5 sm:p-6 rounded-3xl bg-gradient-to-br from-[#003D26] via-[#087A4A] to-[#16A765] text-white border border-emerald-400/40 shadow-glow-dark hover:border-emerald-300 hover:shadow-[0_12px_28px_rgba(22,167,101,0.35)] hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group/card relative overflow-hidden">
                <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-white/10 rounded-full blur-2xl pointer-events-none group-hover/card:scale-125 transition-transform duration-500"></div>
                <div class="relative z-10">
                  <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-2xl bg-white/15 backdrop-blur-md text-emerald-200 shadow-xs flex items-center justify-center mb-3 sm:mb-4 border border-white/25">
                    <span class="material-symbols-outlined text-[20px] sm:text-[22px]">nutrition</span>
                  </div>
                  <h4 class="font-serif text-base sm:text-lg font-bold text-white mb-1.5 sm:mb-2" data-i18n="workshops.t4_title">AlimentaÃ§Ã£o SaudÃ¡vel</h4>
                  <p class="text-xs sm:text-sm text-emerald-50/90 leading-relaxed mb-4 sm:mb-6 font-light" data-i18n="workshops.t4_desc">
                    Integrar a alimentaÃ§Ã£o como pilar no seu estilo de vida com Dietoterapia Chinesa e Naturopatia.
                  </p>
                </div>
                <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20informa%C3%A7%C3%B5es%20e%20inscri%C3%A7%C3%A3o%20no%20Workshop%20de%20Alimenta%C3%A7%C3%A3o%20Saud%C3%A1vel." target="_blank" rel="noopener noreferrer" class="relative z-10 inline-flex items-center justify-between w-full px-4 py-2.5 rounded-xl bg-white text-[#003D26] hover:bg-emerald-50 font-bold text-xs shadow-md hover:scale-[1.02] transition-all">
                  <span data-i18n="btn.info_inscriptions">InformaÃ§Ãµes e inscriÃ§Ãµes</span>
                  <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </a>
              </div>
            </div>

            <!-- Controles de Navegação Embaixo em cada extremidade com Dots no Centro -->
            <div class="flex items-center justify-between mt-5 px-2">
              <button type="button" id="topics-carousel-prev" aria-label="Tema anterior" class="w-11 h-11 rounded-full bg-white hover:bg-brand-green-soft text-brand-text hover:text-brand-green-dark border border-brand-gray shadow-xs flex items-center justify-center transition-all duration-200 hover:scale-105 active:scale-95">
                <span class="material-symbols-outlined text-[22px]">arrow_back</span>
              </button>

              <!-- Indicadores / Bolinhas de Navegação dos Temas -->
              <div id="topics-carousel-dots" class="flex items-center justify-center gap-2">
                <button type="button" class="topic-dot w-6 h-2.5 rounded-full bg-brand-green transition-all duration-300" aria-label="Tema 1"></button>
                <button type="button" class="topic-dot w-2.5 h-2.5 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Tema 2"></button>
                <button type="button" class="topic-dot w-2.5 h-2.5 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Tema 3"></button>
                <button type="button" class="topic-dot w-2.5 h-2.5 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Tema 4"></button>
              </div>

              <button type="button" id="topics-carousel-next" aria-label="Próximo tema" class="w-11 h-11 rounded-full bg-white hover:bg-brand-green-soft text-brand-text hover:text-brand-green-dark border border-brand-gray shadow-xs flex items-center justify-center transition-all duration-200 hover:scale-105 active:scale-95">
                <span class="material-symbols-outlined text-[22px]">arrow_forward</span>
              </button>
            </div>
          </div>
        </div>

        <!-- Bloco de Formações Obrigatório -->
        <div class="v-reveal-scale p-5 sm:p-8 rounded-3xl bg-white border border-brand-gray shadow-subtle flex flex-col md:flex-row items-center justify-between gap-5 sm:gap-6 mb-12 sm:mb-16 hover:border-brand-green/30 transition-colors">
          <div class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left gap-3.5 sm:gap-4">
            <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-2xl bg-brand-green-soft flex items-center justify-center text-brand-green-dark shrink-0">
              <span class="material-symbols-outlined text-[24px] sm:text-[26px]">school</span>
            </div>
            <div>
              <span class="text-xs font-bold uppercase tracking-wider text-brand-green-dark block" data-i18n="workshops.reiki_badge">Cursos com Certificação</span>
              <h4 class="font-serif text-base sm:text-lg font-bold text-brand-text" data-i18n="workshops.reiki_course">
                Reiki Usui - para quem deseja aprender e aprofundar a prática de Reiki Usui.
              </h4>
            </div>
          </div>
          <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20consultar%20as%20datas%20e%20programa%20das%20forma%C3%A7%C3%B5es%20de%20Reiki%20Usui." target="_blank" rel="noopener noreferrer" class="px-6 sm:px-7 py-3 sm:py-3.5 rounded-full bg-brand-green text-white font-semibold text-xs sm:text-sm hover:bg-brand-green-dark transition-all shadow-sm hover:scale-105 shrink-0 w-full sm:w-auto text-center justify-center inline-flex items-center" data-i18n="btn.consult_courses">
            Saber Mais
          </a>
        </div>

        <!-- Workshops para Empresas Obrigatório (Destaque Criativo em Degradê Escuro) -->
        <div class="v-reveal-scale p-5 sm:p-8 md:p-12 rounded-3xl bg-dark-navy-emerald text-white border border-brand-green/35 shadow-glow-dark mb-12 sm:mb-16 relative overflow-hidden group">
          <div class="absolute -right-16 -bottom-16 w-64 h-64 bg-brand-green/20 rounded-full blur-3xl pointer-events-none group-hover:scale-125 transition-transform duration-700"></div>
          <div class="max-w-3xl relative z-10">
            <span class="inline-flex items-center gap-2 px-3 py-1 sm:px-3.5 rounded-full bg-brand-green/20 text-emerald-300 border border-brand-green/35 text-[11px] sm:text-xs font-bold uppercase tracking-widest mb-3 backdrop-blur-sm max-w-full">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse shrink-0"></span>
              <span class="truncate" data-i18n="workshops.corporate_tag">Corporate Wellness</span>
            </span>
            <!-- Título Obrigatório -->
            <h3 class="font-serif text-xl sm:text-3xl lg:text-4xl font-bold text-white mb-3 leading-snug" data-i18n="workshops.corporate_title">
              Uma experiência à medida da sua equipa
            </h3>
            <!-- Texto Obrigatório -->
            <p class="text-sm sm:text-base text-emerald-100/85 leading-relaxed mb-4 font-light" data-i18n="workshops.corporate_desc">
              Têm uma necessidade específica? Criamos workshops à medida da sua empresa ou equipa.
            </p>
            <!-- Informação Obrigatória -->
            <p class="text-sm font-semibold text-emerald-300 mb-6" data-i18n="workshops.corporate_price">
              Preços sob consulta.
            </p>
            <!-- Botão Obrigatório -->
            <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20solicitar%20uma%20proposta%20de%20workshop%20para%20a%20minha%20empresa." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center text-center gap-2 px-6 sm:px-8 py-3 sm:py-3.5 rounded-full bg-gradient-to-r from-brand-green to-emerald-500 hover:from-emerald-400 hover:to-brand-green text-white font-semibold text-xs sm:text-sm shadow-[0_4px_25px_rgba(55,168,23,0.45)] transition-all hover:scale-105 w-full sm:w-auto">
              <span class="material-symbols-outlined text-[18px]">chat</span>
              <span data-i18n="btn.talk">Fale connosco</span>
            </a>
          </div>
        </div>

        <!-- Galeria de Eventos — Carrossel Interativo com Autoplay a cada 2s e Scroll Manual/Touch -->
        <div class="v-reveal-up">
          <div class="text-center max-w-2xl mx-auto mb-6">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-green-dark block mb-1" data-i18n="workshops.gallery_tag">Momentos de Partilha</span>
            <h3 class="font-serif text-2xl font-bold text-brand-text mb-1" data-i18n="workshops.gallery_title">Galeria de eventos</h3>
            <p class="text-xs sm:text-sm text-brand-text/60" data-i18n="workshops.gallery_sub">Registos de workshops e encontros na clínica</p>
          </div>

          <!-- Trilho do Carrossel (com peek para mostrar que há mais fotos) -->
          <div class="relative group">
            <div id="events-carousel" class="flex gap-4 sm:gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory no-scrollbar pb-4 pt-1 px-1 cursor-grab active:cursor-grabbing" style="scrollbar-width: none; -ms-overflow-style: none;">
              
              <!-- Slide 1 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/1.jpeg', 'Momento de partilha e workshop na VCura Terapias')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/1.jpeg" alt="Workshop e formação na VCura Terapias - Imagem 1" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 2 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/2.jpeg', 'Formação e prática terapêutica na VCura')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/2.jpeg" alt="Workshop e formação na VCura Terapias - Imagem 2" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 3 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/3.jpeg', 'Encontro e dinâmicas de grupo na VCura')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/3.jpeg" alt="Workshop e formação na VCura Terapias - Imagem 3" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 4 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/4.jpeg', 'Acolhimento e vivências na VCura Terapias')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/4.jpeg" alt="Workshop e formação na VCura Terapias - Imagem 4" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 5 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/5.jpeg', 'Momentos de formação prática na VCura')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/5.jpeg" alt="Workshop e formação na VCura Terapias - Imagem 5" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 6 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/6.jpeg', 'Aprendizagem e desenvolvimento pessoal')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/6.jpeg" alt="Workshop e formação na VCura Terapias - Imagem 6" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 7 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/7.jpeg', 'Partilha de saberes em grupo')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/7.jpeg" alt="Workshop e formação na VCura Terapias - Imagem 7" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 8 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/8.jpeg', 'Ambiente de tranquilidade e estudo')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/8.jpeg" alt="Workshop e formação na VCura Terapias - Imagem 8" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 9 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/9.jpeg', 'Workshops e formações clínicas')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/9.jpeg" alt="Workshop e formação na VCura Terapias - Imagem 9" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 10 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/10.jpeg', 'Encontros temáticos de saúde')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/10.jpeg" alt="Workshop e formação na VCura Terapias - Imagem 10" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 11 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/11.jpeg', 'Técnicas e demonstrações práticas')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/11.jpeg" alt="Workshop e formação na VCura Terapias - Imagem 11" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 12 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/12.jpeg', 'Vivência em grupo na clínica')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/12.jpeg" alt="Workshop e formação na VCura Terapias - Imagem 12" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 13 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/13.jpeg', 'Formação com terapeutas e especialistas')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/13.jpeg" alt="Workshop e formação na VCura Terapias - Imagem 13" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 14 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/14.jpeg', 'Dinâmicas interativas e desenvolvimento')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/14.jpeg" alt="Workshop e formação na VCura Terapias - Imagem 14" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 15 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/15.jpeg', 'Convivência acolhedora e integrada')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/15.jpeg" alt="Workshop e formação na VCura Terapias - Imagem 15" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 16 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/16.jpeg', 'Espaço de partilha e bem-estar')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/16.jpeg" alt="Workshop e formação na VCura Terapias - Imagem 16" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>

              <!-- Slide 17 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/17.jpeg', 'Momentos de formao e desenvolvimento na VCura')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/17.jpeg" alt="Workshop e formao na VCura Terapias - Imagem 17" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 18 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/18.jpeg', 'Interao e partilha de conhecimento')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/18.jpeg" alt="Workshop e formao na VCura Terapias - Imagem 18" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 19 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/19.jpeg', 'Ambiente colaborativo e integrativo')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/19.jpeg" alt="Workshop e formao na VCura Terapias - Imagem 19" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 20 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/20.jpeg', 'Vivncia prtica em workshops')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/20.jpeg" alt="Workshop e formao na VCura Terapias - Imagem 20" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 21 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/21.jpeg', 'Formao com foco no bem-estar humano')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/21.jpeg" alt="Workshop e formao na VCura Terapias - Imagem 21" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 22 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/22.jpeg', 'Encontros teraputicos e dinmicas')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/22.jpeg" alt="Workshop e formao na VCura Terapias - Imagem 22" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>

              <!-- Slide 23 -->
              <div class="events-slide snap-start shrink-0 w-[84%] sm:w-[48%] lg:w-[32%] aspect-[4/3] rounded-3xl overflow-hidden shadow-card border border-brand-gray/80 bg-white group/item cursor-pointer hover:-translate-y-1.5 transition-all duration-300 relative" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/23.jpeg', 'Concluso de workshops e partilhas')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>galeria-carrosel/23.jpeg" alt="Workshop e formao na VCura Terapias - Imagem 23" class="w-full h-full object-cover group-hover/item:scale-105 transition-transform duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover/item:opacity-100 transition-opacity duration-300 flex items-end p-4">
                  <span class="text-white text-xs font-medium flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px]">zoom_in</span> Ver ampliado
                  </span>
                </div>
              </div>
              </div>

            </div>

            <!-- Controles de Navegação Embaixo em cada extremidade com Dots no Centro -->
            <div class="flex items-center justify-between mt-5 px-2">
              <button type="button" id="events-carousel-prev" aria-label="Imagem anterior" class="w-11 h-11 rounded-full bg-white hover:bg-brand-green-soft text-brand-text hover:text-brand-green-dark border border-brand-gray shadow-xs flex items-center justify-center transition-all duration-200 hover:scale-105 active:scale-95 shrink-0">
                <span class="material-symbols-outlined text-[22px]">arrow_back</span>
              </button>

              <!-- Indicadores / Bolinhas de Navegação -->
              <div id="events-carousel-dots" class="flex items-center justify-center gap-1.5 px-3 flex-wrap max-w-xs sm:max-w-md mx-auto">
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-green transition-all duration-300" aria-label="Slide 1"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 2"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 3"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 4"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 5"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 6"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 7"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 8"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 9"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 10"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 11"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 12"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 13"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 14"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 15"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 16"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 17"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 18"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 19"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 20"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 21"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 22"></button>
                <button type="button" class="carousel-dot w-2 h-2 rounded-full bg-brand-gray hover:bg-brand-green-soft transition-all duration-300" aria-label="Slide 23"></button>
              </div>

              <button type="button" id="events-carousel-next" aria-label="Próxima imagem" class="w-11 h-11 rounded-full bg-white hover:bg-brand-green-soft text-brand-text hover:text-brand-green-dark border border-brand-gray shadow-xs flex items-center justify-center transition-all duration-200 hover:scale-105 active:scale-95 shrink-0">
                <span class="material-symbols-outlined text-[22px]">arrow_forward</span>
              </button>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 13. ESPAÇO VCURA TERAPIAS -->
    <!-- ========================================================================= -->
    <section id="espaco" class="py-16 lg:py-24 bg-white border-b border-brand-gray">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Título e Texto Obrigatórios -->
        <div class="text-center max-w-3xl mx-auto mb-14 v-reveal-up">
          <span class="text-xs font-bold uppercase tracking-widest text-brand-green-dark mb-2 block" data-i18n="space.tag">Instalações Clínicas</span>
          <h2 class="font-serif text-3xl sm:text-4xl font-bold text-brand-text mb-4" data-i18n="space.title">Conheça o Espaço VCura Terapias</h2>
          <p class="text-base sm:text-lg text-brand-text/80 leading-relaxed" data-i18n="space.desc">
            Um espaço pensado para acolher, acompanhar e proporcionar momentos de cuidado e bem-estar.
          </p>
        </div>

        <!-- Destaques Obrigatórios: Localização Alta de Lisboa / Lumiar e Estacionamento Gratuito -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-3xl mx-auto mb-12 v-stagger-group">
          <div class="p-4 rounded-2xl bg-brand-green-soft/70 border border-brand-green-soft flex items-center gap-3.5">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand-green to-emerald-700 text-white flex items-center justify-center shrink-0 shadow-[0_4px_12px_rgba(55,168,23,0.35)]">
              <span class="material-symbols-outlined text-[22px]">location_on</span>
            </div>
            <div>
              <p class="text-xs font-bold text-brand-green-dark uppercase tracking-wider" data-i18n="space.loc_title">Localização de Excelência</p>
              <p class="text-sm font-semibold text-brand-text" data-i18n="space.loc_desc">Alta de Lisboa / Lumiar (Fácil acesso Eixo Norte-Sul)</p>
            </div>
          </div>

          <div class="p-4 rounded-2xl bg-brand-green-soft/70 border border-brand-green-soft flex items-center gap-3.5">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand-green to-emerald-700 text-white flex items-center justify-center shrink-0 shadow-[0_4px_12px_rgba(55,168,23,0.35)]">
              <span class="material-symbols-outlined text-[22px]">local_parking</span>
            </div>
            <div>
              <p class="text-xs font-bold text-brand-green-dark uppercase tracking-wider" data-i18n="space.park_title">Comodidade Total</p>
              <p class="text-sm font-semibold text-brand-text" data-i18n="space.park_desc">Estacionamento gratuito</p>
            </div>
          </div>
        </div>

        <!-- Vídeo de Apresentação do Espaço Obrigatório (Otimizado para formato vertical 9:16) -->
        <div class="v-reveal-scale mb-14 max-w-sm sm:max-w-md mx-auto">
          <div class="rounded-3xl overflow-hidden shadow-2xl border-4 border-white/80 bg-black relative group/video">
            <div class="relative aspect-[9/16] w-full max-h-[78vh] flex items-center justify-center bg-black">
              <video controls preload="metadata" playsinline class="w-full h-full object-cover">
                <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/Video/Video%20VCura.mp4" ); ?>" type="video/mp4" />
                O seu navegador não suporta a reprodução de vídeo HTML5.
              </video>
            </div>
            <div class="p-4 bg-white border-t border-brand-gray flex items-center justify-between text-xs text-brand-text/75">
              <span class="flex items-center gap-1.5 font-medium truncate">
                <span class="material-symbols-outlined text-brand-green text-[18px] shrink-0">play_circle</span>
                <span class="truncate" data-i18n="space.video_title">Vídeo de Apresentação das Instalações VCura Terapias</span>
              </span>
              <span class="text-brand-green-dark font-semibold shrink-0 ml-2" data-i18n="space.video_loc">Alta de Lisboa</span>
            </div>
          </div>
        </div>

        <!-- Botão Obrigatório -->
        <div class="text-center pt-2 v-reveal-up">
          <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Gostaria%20de%20marcar%20uma%20consulta%20na%20VCura%20Terapias." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center text-center gap-2 px-6 sm:px-8 py-3 sm:py-3.5 rounded-full bg-brand-green text-white font-semibold text-xs sm:text-sm shadow-sm hover:bg-brand-green-dark transition-all hover:scale-105 w-full sm:w-auto max-w-full">
            <span class="material-symbols-outlined text-[18px] shrink-0">calendar_today</span>
            <span data-i18n="space.btn">Marcar consulta</span>
          </a>
        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 14. ALUGUER DE SALAS -->
    <!-- ========================================================================= -->
    <section id="salas" class="py-16 lg:py-24 bg-brand-green-soft/30 border-b border-brand-gray overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center mb-14">
          
          <div class="lg:col-span-8 v-reveal-left">
            <span class="text-xs font-bold uppercase tracking-widest text-brand-green-dark mb-2 block" data-i18n="rooms.tag">Aluguer de Salas &amp; Gabinetes Clínicos</span>
            <!-- Título Obrigatório -->
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-brand-text mb-4" data-i18n="rooms.title">
              Aluguer de Salas para Desenvolver a Sua Atividade Clínica
            </h2>
            
            <!-- Descrição fiel ao serviço oficial sem inventar preços ou condições não fornecidas -->
            <p class="text-base sm:text-lg text-brand-text/85 leading-relaxed mb-6" data-i18n="rooms.desc">
              A VCura Terapias disponibiliza o serviço de aluguer de salas e gabinetes clínicos totalmente equipados para terapeutas, psicólogos, nutricionistas, osteopatas e profissionais de saúde integrativa que procuram um espaço acolhedor, profissional e com excelente localização na Alta de Lisboa.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-brand-text/80 mb-8">
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-brand-green text-[18px]">check</span>
                <span data-i18n="rooms.check1">Salas preparadas para consultas e terapias manuais</span>
              </div>
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-brand-green text-[18px]">check</span>
                <span data-i18n="rooms.check2">Sala multiusos para workshops, cursos e palestras</span>
              </div>
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-brand-green text-[18px]">check</span>
                <span data-i18n="rooms.check3">Zona de acolhimento e receção serena</span>
              </div>
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-brand-green text-[18px]">check</span>
                <span data-i18n="rooms.check4">Estacionamento público gratuito</span>
              </div>
            </div>

            <!-- Botão Obrigatório -->
            <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Tenho%20interesse%20no%20aluguer%20de%20salas%20e%20gostaria%20de%20marcar%20visita." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center text-center gap-2 px-6 sm:px-8 py-3 sm:py-3.5 rounded-full bg-brand-green text-white font-semibold text-xs sm:text-sm shadow-sm hover:bg-brand-green-dark transition-all hover:scale-105 w-full sm:w-auto max-w-full">
              <span class="material-symbols-outlined text-[18px] shrink-0">meeting_room</span>
              <span data-i18n="rooms.btn">Marcar visita</span>
            </a>
          </div>

          <div class="lg:col-span-4 v-reveal-right">
            <div class="p-6 rounded-3xl bg-white border border-brand-gray shadow-card">
              <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 rounded-xl bg-brand-green-soft flex items-center justify-center text-brand-green-dark">
                  <span class="material-symbols-outlined text-[22px]">info</span>
                </div>
                <div>
                  <h4 class="font-serif text-base font-bold text-brand-text" data-i18n="rooms.box_title">Visitas e Condições</h4>
                  <p class="text-xs text-brand-text/65" data-i18n="rooms.box_sub">Agendamento sob consulta</p>
                </div>
              </div>
              <p class="text-xs text-brand-text/75 leading-relaxed mb-4" data-i18n="rooms.box_desc">
                Para conhecer as salas disponíveis, opções de horários e condições de aluguer, agende uma visita presencial connosco através do WhatsApp.
              </p>
              <div class="text-xs font-semibold text-brand-green-dark flex items-center gap-1.5 whitespace-nowrap">
                <span class="material-symbols-outlined text-[16px] shrink-0">call</span>
                <span class="whitespace-nowrap" data-i18n-html="rooms.contact">Contacto direto: <strong>964&nbsp;423&nbsp;853</strong></span>
              </div>
            </div>
          </div>

        </div>

        <!-- Galeria Dedicada Exclusivamente às Salas Disponíveis Obrigatória -->
        <div>
          <h3 class="font-serif text-xl font-bold text-brand-text mb-6 v-reveal-up" data-i18n="rooms.gallery_title">Salas disponíveis para aluguer</h3>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 v-stagger-group">
            
            <!-- Sala 1: Sala Healing com Carrossel Automático (Loop de 2 em 2s) -->
            <!-- Sala 1: Sala Healing -->
            <div class="bg-white rounded-2xl overflow-hidden border border-brand-gray shadow-subtle group hover:-translate-y-1.5 transition-all">
              <div class="aspect-[4/3] overflow-hidden bg-brand-gray relative cursor-pointer group/img" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>2.jpg', 'Sala Healing - Sala para consultas e terapias com marquesa e secretÃ¡ria')">
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>2.jpg" alt="Sala Healing" class="w-full h-full object-cover group-hover/img:scale-105 transition-transform duration-500" loading="lazy" />
                <span class="absolute top-3 left-3 px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-bold text-brand-green-dark shadow-xs z-10 pointer-events-none" data-i18n="space.photo3">
                  Sala Healing
                </span>
              </div>
              <div class="p-5">
                <h4 class="font-serif text-base font-bold text-brand-text mb-1" data-i18n="rooms.room1_title">Sala Clínica Healing</h4>
                <p class="text-xs text-brand-text/75" data-i18n="rooms.room1_desc">
                  Equipada com marquesa clínica, mesa de consulta e iluminação natural.
                </p>
              </div>
            </div>

            <!-- Sala 2: Sala Formação Harmony & Vitality com Carrossel Automático (Loop de 2 em 2s) -->
            <div class="bg-white rounded-2xl overflow-hidden border border-brand-gray shadow-subtle group hover:-translate-y-1.5 transition-all">
              <div class="aspect-[4/3] overflow-hidden bg-brand-gray relative cursor-pointer group/img">
                <div class="room-carousel relative w-full h-full overflow-hidden" data-interval="2000">
                  <div class="room-carousel-track flex w-full h-full transition-transform duration-700 ease-in-out">
                    <div class="room-carousel-slide shrink-0 w-full h-full" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/sala-formacao-harmony-vitality.jpeg" ); ?>', 'Sala Formação Harmony & Vitality - Vista 1')">
                      <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/sala-formacao-harmony-vitality.jpeg" ); ?>" alt="Sala Formação Harmony & Vitality - Vista 1" class="w-full h-full object-cover group-hover/img:scale-105 transition-transform duration-500" loading="lazy" />
                    </div>
                    <div class="room-carousel-slide shrink-0 w-full h-full" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/sala-formacao-harmony-vitality-2.jpeg" ); ?>', 'Sala Formação Harmony & Vitality - Vista 2')">
                      <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/sala-formacao-harmony-vitality-2.jpeg" ); ?>" alt="Sala Formação Harmony & Vitality - Vista 2" class="w-full h-full object-cover group-hover/img:scale-105 transition-transform duration-500" loading="lazy" />
                    </div>
                    <div class="room-carousel-slide shrink-0 w-full h-full" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/sala-formacao-harmony-vitality-3.jpeg" ); ?>', 'Sala Formação Harmony & Vitality - Vista 3')">
                      <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/sala-formacao-harmony-vitality-3.jpeg" ); ?>" alt="Sala Formação Harmony & Vitality - Vista 3" class="w-full h-full object-cover group-hover/img:scale-105 transition-transform duration-500" loading="lazy" />
                    </div>
                    <div class="room-carousel-slide shrink-0 w-full h-full" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/sala-formacao-harmony-vitality-4.jpeg" ); ?>', 'Sala Formação Harmony & Vitality - Vista 4')">
                      <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/sala-formacao-harmony-vitality-4.jpeg" ); ?>" alt="Sala Formação Harmony & Vitality - Vista 4" class="w-full h-full object-cover group-hover/img:scale-105 transition-transform duration-500" loading="lazy" />
                    </div>
                  </div>
                </div>
                <span class="absolute top-3 left-3 px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-bold text-brand-green-dark shadow-xs z-10 pointer-events-none" data-i18n="space.photo_training">
                  Sala Formação Harmony &amp; Vitality
                </span>
                <span class="absolute bottom-3 right-3 px-2.5 py-1 bg-black/60 backdrop-blur-sm text-white rounded-full text-[11px] font-medium flex items-center gap-1 z-10 pointer-events-none">
                  <span class="material-symbols-outlined text-[13px]">view_carousel</span>
                  <span class="room-carousel-counter">1/4</span>
                </span>
              </div>
              <div class="p-5">
                <h4 class="font-serif text-base font-bold text-brand-text mb-1" data-i18n="rooms.room2_title">Sala Formação Harmony &amp; Vitality</h4>
                <p class="text-xs text-brand-text/75" data-i18n="rooms.room2_desc">
                  Espaço amplo e acolhedor preparado para formações, cursos, palestras e sessões integrativas.
                </p>
              </div>
            </div>

            <!-- Sala 3: Sala Multiusos & Formações com Carrossel Automático (Loop de 2 em 2s) -->
            <div class="bg-white rounded-2xl overflow-hidden border border-brand-gray shadow-subtle group hover:-translate-y-1.5 transition-all">
              <div class="aspect-[4/3] overflow-hidden bg-brand-gray relative cursor-pointer group/img">
                <div class="room-carousel relative w-full h-full overflow-hidden" data-interval="2000">
                  <div class="room-carousel-track flex w-full h-full transition-transform duration-700 ease-in-out">
                    <div class="room-carousel-slide shrink-0 w-full h-full" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>1.jpg', 'Sala Multiusos - Sala ampla para formações, workshops e cursos com cadeiras individuais')">
                      <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>1.jpg" alt="Sala Multiusos e Workshops - Vista 1" class="w-full h-full object-cover group-hover/img:scale-105 transition-transform duration-500" loading="lazy" />
                    </div>
                    <!-- Slot preparado para fotos adicionais -->
                    <div class="room-carousel-slide shrink-0 w-full h-full" onclick="openLightbox('<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>17.jpg', 'Sala Multiusos - Disposição para eventos e palestras')">
                      <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/" ); ?>17.jpg" alt="Sala Multiusos e Workshops - Vista 2" class="w-full h-full object-cover group-hover/img:scale-105 transition-transform duration-500" loading="lazy" />
                    </div>
                  </div>
                </div>
                <span class="absolute top-3 left-3 px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-bold text-brand-green-dark shadow-xs z-10 pointer-events-none" data-i18n="nav.rooms">
                  Sala Multiusos
                </span>
                <span class="absolute bottom-3 right-3 px-2.5 py-1 bg-black/60 backdrop-blur-sm text-white rounded-full text-[11px] font-medium flex items-center gap-1 z-10 pointer-events-none">
                  <span class="material-symbols-outlined text-[13px]">view_carousel</span>
                  <span class="room-carousel-counter">1/2</span>
                </span>
              </div>
              <div class="p-5">
                <h4 class="font-serif text-base font-bold text-brand-text mb-1" data-i18n="rooms.room3_title">Sala Multiusos &amp; Workshops</h4>
                <p class="text-xs text-brand-text/75" data-i18n="rooms.room3_desc">
                  Espaço amplo com cadeiras individuais com prancheta, mesa de formador e luz natural.
                </p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 15. PERGUNTAS FREQUENTES -->
    <!-- ========================================================================= -->
    <section class="py-16 lg:py-24 bg-white border-b border-brand-gray">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-14 v-reveal-up">
          <span class="text-xs font-bold uppercase tracking-widest text-brand-green-dark mb-2 block" data-i18n="faq.tag">Esclareça as suas dúvidas</span>
          <h2 class="font-serif text-3xl sm:text-4xl font-bold text-brand-text mb-3" data-i18n="faq.title">Perguntas frequentes</h2>
          <p class="text-base text-brand-text/80" data-i18n="faq.desc">
            Respostas às dúvidas mais habituais antes da sua primeira consulta na VCura.
          </p>
        </div>

        <!-- Acordeão com 4 Perguntas e Respostas Obrigatórias -->
        <div class="space-y-4 v-stagger-group" id="faq-list">
          
          <!-- Pergunta 1 -->
          <div class="rounded-2xl border border-brand-gray bg-brand-green-soft/30 overflow-hidden transition-all duration-200">
            <button type="button" class="faq-toggle w-full px-4 sm:px-6 py-4 sm:py-5 text-left flex items-center justify-between gap-3 sm:gap-4 font-serif text-base sm:text-lg font-bold text-brand-text hover:text-brand-green-dark transition-colors" data-target="faq-ans-1" aria-expanded="false">
              <span data-i18n="faq.q1">Nunca fiz acupuntura. Posso marcar?</span>
              <span class="material-symbols-outlined text-brand-green-dark transition-transform duration-300 shrink-0">expand_more</span>
            </button>
            <div id="faq-ans-1" class="accordion-content hidden px-4 sm:px-6 pb-4 sm:pb-6 text-sm sm:text-base text-brand-text/80 border-t border-brand-gray/50 pt-3" data-i18n="faq.a1">
              Sim. Na primeira consulta avaliamos a sua situação e explicamos tudo antes de começar.
            </div>
          </div>

          <!-- Pergunta 2 -->
          <div class="rounded-2xl border border-brand-gray bg-brand-green-soft/30 overflow-hidden transition-all duration-200">
            <button type="button" class="faq-toggle w-full px-4 sm:px-6 py-4 sm:py-5 text-left flex items-center justify-between gap-3 sm:gap-4 font-serif text-base sm:text-lg font-bold text-brand-text hover:text-brand-green-dark transition-colors" data-target="faq-ans-2" aria-expanded="false">
              <span data-i18n="faq.q2">Não sei que terapia preciso. E agora?</span>
              <span class="material-symbols-outlined text-brand-green-dark transition-transform duration-300 shrink-0">expand_more</span>
            </button>
            <div id="faq-ans-2" class="accordion-content hidden px-4 sm:px-6 pb-4 sm:pb-6 text-sm sm:text-base text-brand-text/80 border-t border-brand-gray/50 pt-3" data-i18n="faq.a2">
              Não precisa de saber. Fale connosco e orientamos para a consulta mais indicada.
            </div>
          </div>

          <!-- Pergunta 3 -->
          <div class="rounded-2xl border border-brand-gray bg-brand-green-soft/30 overflow-hidden transition-all duration-200">
            <button type="button" class="faq-toggle w-full px-4 sm:px-6 py-4 sm:py-5 text-left flex items-center justify-between gap-3 sm:gap-4 font-serif text-base sm:text-lg font-bold text-brand-text hover:text-brand-green-dark transition-colors" data-target="faq-ans-3" aria-expanded="false">
              <span data-i18n="faq.q3">Têm consultas online?</span>
              <span class="material-symbols-outlined text-brand-green-dark transition-transform duration-300 shrink-0">expand_more</span>
            </button>
            <div id="faq-ans-3" class="accordion-content hidden px-4 sm:px-6 pb-4 sm:pb-6 text-sm sm:text-base text-brand-text/80 border-t border-brand-gray/50 pt-3" data-i18n="faq.a3">
              Sim. Disponibilizamos consultas online de Saúde Feminina, Nutrição Funcional, Naturopatia, Fitoterapia Chinesa e Dietoterapia.
            </div>
          </div>

          <!-- Pergunta 4 -->
          <div class="rounded-2xl border border-brand-gray bg-brand-green-soft/30 overflow-hidden transition-all duration-200">
            <button type="button" class="faq-toggle w-full px-4 sm:px-6 py-4 sm:py-5 text-left flex items-center justify-between gap-3 sm:gap-4 font-serif text-base sm:text-lg font-bold text-brand-text hover:text-brand-green-dark transition-colors" data-target="faq-ans-4" aria-expanded="false">
              <span data-i18n="faq.q4">Posso usar o meu seguro?</span>
              <span class="material-symbols-outlined text-brand-green-dark transition-transform duration-300 shrink-0">expand_more</span>
            </button>
            <div id="faq-ans-4" class="accordion-content hidden px-4 sm:px-6 pb-4 sm:pb-6 text-sm sm:text-base text-brand-text/80 border-t border-brand-gray/50 pt-3" data-i18n="faq.a4">
              Temos acordos com várias seguradoras e entidades. Envie mensagem e confirmamos as condições do seu caso.
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 16. CHAMADA FINAL PARA MARCAÇÃO (DEGRADÊ ESCURO EM DESTAQUE CRIATIVO) -->
    <!-- ========================================================================= -->
    <section class="py-14 sm:py-20 lg:py-28 bg-dark-cta-gradient text-white border-y border-brand-green/30 relative overflow-hidden">
      <!-- Glow ambient auras -->
      <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-96 h-96 bg-brand-green/20 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -bottom-24 right-10 w-72 h-72 bg-emerald-500/15 rounded-full blur-3xl pointer-events-none"></div>

      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 v-reveal-scale">
        
        <div class="w-14 h-14 sm:w-[72px] sm:h-[72px] rounded-full bg-gradient-to-br from-brand-green to-emerald-700 flex items-center justify-center text-white mx-auto mb-5 sm:mb-6 shadow-glow-green ring-4 ring-brand-green/30">
          <span class="material-symbols-outlined text-[28px] sm:text-[36px] animate-pulse">spa</span>
        </div>

        <!-- Título Obrigatório -->
        <h2 class="font-serif text-2xl sm:text-4xl lg:text-5xl font-bold text-white mb-3 sm:mb-4 leading-snug" data-i18n="cta_final.title">
          Pronta(o) para começar a cuidar de si?
        </h2>

        <!-- Texto Obrigatório -->
        <p class="text-sm sm:text-lg text-emerald-100/90 leading-relaxed max-w-2xl mx-auto mb-6 sm:mb-8 font-light" data-i18n="cta_final.desc">
          Estamos aqui para esclarecer as suas dúvidas e ajudar a encontrar a abordagem mais adequada às suas necessidades.
        </p>

        <!-- Botão Principal Obrigatório (Verde destacado com texto branco) -->
        <a href="https://wa.me/351964423853?text=Ol%C3%A1!%20Estou%20pronta(o)%20para%20come%C3%A7ar%20a%20cuidar%20de%20mim%20e%20gostaria%20de%20marcar%20consulta." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center text-center gap-2 sm:gap-3 px-6 sm:px-10 py-3.5 sm:py-4 rounded-full bg-gradient-to-r from-brand-green to-emerald-500 hover:from-emerald-400 hover:to-brand-green text-white font-semibold text-xs sm:text-base shadow-[0_4px_30px_rgba(55,168,23,0.5)] transition-all duration-300 hover:scale-105 transform w-full sm:w-auto max-w-full">
          <span class="material-symbols-outlined text-[18px] sm:text-[22px] shrink-0">chat</span>
          <span data-i18n="cta_final.btn">Marcar consulta no WhatsApp</span>
        </a>

        <p class="text-xs text-emerald-200/70 mt-4 sm:mt-5 flex flex-wrap items-center justify-center gap-1 sm:gap-2">
          <span data-i18n="cta_final.disclaimer1">Contacto direto</span>
          <span>•</span>
          <span data-i18n="cta_final.disclaimer2">Resposta rápida em horário de funcionamento</span>
        </p>

      </div>
    </section>

<?php
get_footer();
