    const VCURA_CONFIG = {
      whatsappNumber: "351964423853",
      whatsappDisplay: "964 423 853",
      email: "vcuramtc@gmail.com",
      address: "Av. David Mourão Ferreira, 25B, Loja A, 1750-209 Lisboa",
      location: "Alta de Lisboa / Lumiar, Portugal",
      mapsUrl: "https://maps.google.com/?q=Av.+David+Mour%C3%A3o-Ferreira+25B+Lisboa",
      cedula: "C-006284"
    };

    function getWhatsAppLink(customMsg = "") {
      const msg = customMsg || "Olá! Gostaria de obter mais informações e marcar uma consulta na VCura Terapias.";
      return `https://wa.me/${VCURA_CONFIG.whatsappNumber}?text=${encodeURIComponent(msg)}`;
    }
  </script>

    // 1. Menu Mobile Hamburger Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIconOpen = document.getElementById('menu-icon-open');
    const menuIconClose = document.getElementById('menu-icon-close');

    if (mobileMenuBtn && mobileMenu) {
      mobileMenuBtn.addEventListener('click', () => {
        const isOpen = !mobileMenu.classList.contains('hidden');
        if (isOpen) {
          mobileMenu.classList.add('hidden');
          menuIconOpen.classList.remove('hidden');
          menuIconClose.classList.add('hidden');
          mobileMenuBtn.setAttribute('aria-expanded', 'false');
        } else {
          mobileMenu.classList.remove('hidden');
          menuIconOpen.classList.add('hidden');
          menuIconClose.classList.remove('hidden');
          mobileMenuBtn.setAttribute('aria-expanded', 'true');
        }
      });

      // Fechar menu mobile ao clicar em qualquer link de navegação
      document.querySelectorAll('.mobile-nav-link').forEach(link => {
        link.addEventListener('click', () => {
          mobileMenu.classList.add('hidden');
          menuIconOpen.classList.remove('hidden');
          menuIconClose.classList.add('hidden');
          mobileMenuBtn.setAttribute('aria-expanded', 'false');
        });
      });
    }

    // 2. Acordeão das Perguntas Frequentes (FAQ)
    document.querySelectorAll('.faq-toggle').forEach(button => {
      button.addEventListener('click', () => {
        const targetId = button.getAttribute('data-target');
        const targetContent = document.getElementById(targetId);
        const icon = button.querySelector('.material-symbols-outlined');
        const isExpanded = !targetContent.classList.contains('hidden');

        // Fechar outros acordeões para manter a leitura limpa
        document.querySelectorAll('.accordion-content').forEach(c => {
          c.classList.add('hidden');
        });
        document.querySelectorAll('.faq-toggle').forEach(b => {
          b.setAttribute('aria-expanded', 'false');
          const ic = b.querySelector('.material-symbols-outlined');
          if (ic) ic.style.transform = 'rotate(0deg)';
        });

        if (!isExpanded) {
          targetContent.classList.remove('hidden');
          button.setAttribute('aria-expanded', 'true');
          if (icon) icon.style.transform = 'rotate(180deg)';
        }
      });
    });

    // 3. Funções de Modais e Lightbox
    function openModal(modalId) {
      const modal = document.getElementById(modalId);
      if (modal) {
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
      }
    }

    function closeModal(modalId) {
      const modal = document.getElementById(modalId);
      if (modal) {
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
      }
    }

    function openLightbox(src, caption) {
      const lightboxImg = document.getElementById('lightbox-img');
      const lightboxCaption = document.getElementById('lightbox-caption');
      if (lightboxImg) lightboxImg.src = src;
      if (lightboxCaption) lightboxCaption.textContent = caption || '';
      openModal('modal-lightbox');
    }

    function openFlyer(filename) {
      const flyerImg = document.getElementById('flyer-img');
      if (flyerImg) {
        flyerImg.src = `./${filename}`;
      }
      openModal('modal-flyer');
    }

    // 4. Carrossel de Galeria de Eventos (Autoplay 2s, navegação manual e touch)
    (function initEventsCarousel() {
      const carousel = document.getElementById('events-carousel');
      const prevBtn = document.getElementById('events-carousel-prev');
      const nextBtn = document.getElementById('events-carousel-next');
      const dotsContainer = document.getElementById('events-carousel-dots');
      if (!carousel) return;

      const slides = carousel.querySelectorAll('.events-slide');
      const dots = dotsContainer ? dotsContainer.querySelectorAll('.carousel-dot') : [];
      let currentIndex = 0;
      let autoPlayTimer = null;
      let isPaused = false;

      function getScrollStep() {
        if (!slides.length) return 300;
        const firstSlide = slides[0];
        const gap = parseInt(window.getComputedStyle(carousel).gap || '16', 10) || 16;
        return firstSlide.offsetWidth + gap;
      }

      function updateDots(index) {
        dots.forEach((dot, idx) => {
          if (idx === index) {
            dot.classList.add('bg-brand-green', 'w-6');
            dot.classList.remove('bg-brand-gray', 'w-2.5');
          } else {
            dot.classList.remove('bg-brand-green', 'w-6');
            dot.classList.add('bg-brand-gray', 'w-2.5');
          }
        });
      }

      function scrollToIndex(index) {
        if (index < 0) index = slides.length - 1;
        if (index >= slides.length) index = 0;
        currentIndex = index;
        const step = getScrollStep();
        carousel.scrollTo({
          left: currentIndex * step,
          behavior: 'smooth'
        });
        updateDots(currentIndex);
      }

      function nextSlide() {
        let nextIndex = currentIndex + 1;
        if (nextIndex >= slides.length) {
          nextIndex = 0;
        }
        scrollToIndex(nextIndex);
      }

      function prevSlide() {
        let prevIndex = currentIndex - 1;
        if (prevIndex < 0) {
          prevIndex = slides.length - 1;
        }
        scrollToIndex(prevIndex);
      }

      // Autoplay a cada 2 segundos (2000ms)
      function startAutoplay() {
        stopAutoplay();
        autoPlayTimer = setInterval(() => {
          if (!isPaused) {
            nextSlide();
          }
        }, 2000);
      }

      function stopAutoplay() {
        if (autoPlayTimer) {
          clearInterval(autoPlayTimer);
          autoPlayTimer = null;
        }
      }

      if (nextBtn) {
        nextBtn.addEventListener('click', () => {
          nextSlide();
          startAutoplay(); // reinicia o timer ao clicar
        });
      }

      if (prevBtn) {
        prevBtn.addEventListener('click', () => {
          prevSlide();
          startAutoplay();
        });
      }

      dots.forEach((dot, idx) => {
        dot.addEventListener('click', () => {
          scrollToIndex(idx);
          startAutoplay();
        });
      });

      // Pausar autoplay ao passar o mouse ou segurar o toque
      carousel.addEventListener('mouseenter', () => { isPaused = true; });
      carousel.addEventListener('mouseleave', () => { isPaused = false; });
      carousel.addEventListener('touchstart', () => { isPaused = true; }, { passive: true });
      carousel.addEventListener('touchend', () => {
        isPaused = false;
        startAutoplay();
      }, { passive: true });

      // Sincronizar índice quando o usuário rolar manualmente
      let scrollTimeout;
      carousel.addEventListener('scroll', () => {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
          const step = getScrollStep();
          if (step > 0) {
            const calculated = Math.round(carousel.scrollLeft / step);
            if (calculated >= 0 && calculated < slides.length) {
              currentIndex = calculated;
              updateDots(currentIndex);
            }
          }
        }, 80);
      }, { passive: true });

      // Suporte para arrastar com o mouse no computador (drag to scroll)
      let isDown = false;
      let startX;
      let scrollLeft;

      carousel.addEventListener('mousedown', (e) => {
        isDown = true;
        isPaused = true;
        startX = e.pageX - carousel.offsetLeft;
        scrollLeft = carousel.scrollLeft;
      });

      window.addEventListener('mouseup', () => {
        if (isDown) {
          isDown = false;
          isPaused = false;
          startAutoplay();
        }
      });

      carousel.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - carousel.offsetLeft;
        const walk = (x - startX) * 1.5;
        carousel.scrollLeft = scrollLeft - walk;
      });

      // Iniciar
      updateDots(0);
      startAutoplay();
    })();

    // 6.5 Carrossel de Testemunhos & Avaliações (Autoplay suave a cada 4s com controles manuais)
    (function initTestimonialsCarousel() {
      const carousel = document.getElementById('testimonials-carousel');
      const prevBtn = document.getElementById('testimonials-prev');
      const nextBtn = document.getElementById('testimonials-next');
      const dotsContainer = document.getElementById('testimonials-dots');
      if (!carousel) return;

      const slides = carousel.querySelectorAll('.testimonial-slide');
      const dots = dotsContainer ? dotsContainer.querySelectorAll('.testimonial-dot') : [];
      let currentIndex = 0;
      let autoplayTimer = null;
      let isPaused = false;

      function getScrollStep() {
        if (!slides.length) return 340;
        const firstSlide = slides[0];
        const gap = parseInt(window.getComputedStyle(carousel).gap || '24', 10) || 24;
        return firstSlide.offsetWidth + gap;
      }

      function updateDots(index) {
        dots.forEach((dot, idx) => {
          if (idx === index) {
            dot.classList.add('bg-brand-green', 'w-6');
            dot.classList.remove('bg-brand-gray', 'w-2.5');
          } else {
            dot.classList.remove('bg-brand-green', 'w-6');
            dot.classList.add('bg-brand-gray', 'w-2.5');
          }
        });
      }

      function scrollToIndex(index) {
        if (index < 0) index = 0;
        if (index >= slides.length) index = slides.length - 1;
        currentIndex = index;
        const step = getScrollStep();
        carousel.scrollTo({
          left: currentIndex * step,
          behavior: 'smooth'
        });
        updateDots(currentIndex);
      }

      function startAutoplay() {
        clearInterval(autoplayTimer);
        autoplayTimer = setInterval(() => {
          if (!isPaused) {
            let next = currentIndex + 1;
            if (next >= slides.length) next = 0;
            scrollToIndex(next);
          }
        }, 4000);
      }

      if (nextBtn) {
        nextBtn.addEventListener('click', () => {
          let next = currentIndex + 1;
          if (next >= slides.length) next = 0;
          scrollToIndex(next);
          startAutoplay();
        });
      }

      if (prevBtn) {
        prevBtn.addEventListener('click', () => {
          let prev = currentIndex - 1;
          if (prev < 0) prev = slides.length - 1;
          scrollToIndex(prev);
          startAutoplay();
        });
      }

      dots.forEach((dot, idx) => {
        dot.addEventListener('click', () => {
          scrollToIndex(idx);
          startAutoplay();
        });
      });

      carousel.addEventListener('mouseenter', () => { isPaused = true; });
      carousel.addEventListener('mouseleave', () => { isPaused = false; });
      carousel.addEventListener('touchstart', () => { isPaused = true; }, { passive: true });
      carousel.addEventListener('touchend', () => {
        isPaused = false;
        startAutoplay();
      }, { passive: true });

      let scrollTimeout;
      carousel.addEventListener('scroll', () => {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
          const step = getScrollStep();
          if (step > 0) {
            const calculated = Math.round(carousel.scrollLeft / step);
            if (calculated >= 0 && calculated < slides.length) {
              currentIndex = calculated;
              updateDots(currentIndex);
            }
          }
        }, 80);
      }, { passive: true });

      updateDots(0);
      startAutoplay();
    })();

    // 5. Carrossel de Temáticas de Workshops (Scroll suave, arrastar, botões, touch e Autoplay 2s)
    (function initTopicsCarousel() {
      const carousel = document.getElementById('topics-carousel');
      const prevBtn = document.getElementById('topics-carousel-prev');
      const nextBtn = document.getElementById('topics-carousel-next');
      const dotsContainer = document.getElementById('topics-carousel-dots');
      if (!carousel) return;

      const slides = carousel.querySelectorAll('.topic-slide');
      const dots = dotsContainer ? dotsContainer.querySelectorAll('.topic-dot') : [];
      let currentIndex = 0;
      let autoplayTimer = null;
      let isPaused = false;

      function getScrollStep() {
        if (!slides.length) return 320;
        const firstSlide = slides[0];
        const gap = parseInt(window.getComputedStyle(carousel).gap || '16', 10) || 16;
        return firstSlide.offsetWidth + gap;
      }

      function updateDots(index) {
        dots.forEach((dot, idx) => {
          if (idx === index) {
            dot.classList.add('bg-brand-green', 'w-6');
            dot.classList.remove('bg-brand-gray', 'w-2.5');
          } else {
            dot.classList.remove('bg-brand-green', 'w-6');
            dot.classList.add('bg-brand-gray', 'w-2.5');
          }
        });
      }

      function scrollToIndex(index) {
        if (index < 0) index = 0;
        if (index >= slides.length) index = slides.length - 1;
        currentIndex = index;
        const step = getScrollStep();
        carousel.scrollTo({
          left: currentIndex * step,
          behavior: 'smooth'
        });
        updateDots(currentIndex);
      }

      function startAutoplay() {
        clearInterval(autoplayTimer);
        autoplayTimer = setInterval(() => {
          if (!isPaused) {
            let next = currentIndex + 1;
            if (next >= slides.length) next = 0;
            scrollToIndex(next);
          }
        }, 2000);
      }

      if (nextBtn) {
        nextBtn.addEventListener('click', () => {
          let next = currentIndex + 1;
          if (next >= slides.length) next = 0;
          scrollToIndex(next);
          startAutoplay();
        });
      }

      if (prevBtn) {
        prevBtn.addEventListener('click', () => {
          let prev = currentIndex - 1;
          if (prev < 0) prev = slides.length - 1;
          scrollToIndex(prev);
          startAutoplay();
        });
      }

      dots.forEach((dot, idx) => {
        dot.addEventListener('click', () => {
          scrollToIndex(idx);
          startAutoplay();
        });
      });

      carousel.addEventListener('mouseenter', () => { isPaused = true; });
      carousel.addEventListener('mouseleave', () => { isPaused = false; });
      carousel.addEventListener('touchstart', () => { isPaused = true; }, { passive: true });
      carousel.addEventListener('touchend', () => {
        isPaused = false;
        startAutoplay();
      }, { passive: true });

      let scrollTimeout;
      carousel.addEventListener('scroll', () => {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
          const step = getScrollStep();
          if (step > 0) {
            const calculated = Math.round(carousel.scrollLeft / step);
            if (calculated >= 0 && calculated < slides.length) {
              currentIndex = calculated;
              updateDots(currentIndex);
            }
          }
        }, 80);
      }, { passive: true });

      // Suporte para arrastar com o mouse no computador (drag to scroll)
      let isDown = false;
      let startX;
      let scrollLeft;

      carousel.addEventListener('mousedown', (e) => {
        isDown = true;
        isPaused = true;
        startX = e.pageX - carousel.offsetLeft;
        scrollLeft = carousel.scrollLeft;
      });

      window.addEventListener('mouseup', () => {
        if (isDown) {
          isDown = false;
          isPaused = false;
          startAutoplay();
        }
      });

      carousel.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - carousel.offsetLeft;
        const walk = (x - startX) * 1.5;
        carousel.scrollLeft = scrollLeft - walk;
      });

      updateDots(0);
      startAutoplay();
    })();

    // 6. Carrossel dos Cards de Eventos em Destaque (Autoplay a cada 2s com transição suave)
    (function initEventsCardsCarousel() {
      const carousel = document.getElementById('events-cards-carousel');
      const prevBtn = document.getElementById('events-cards-prev');
      const nextBtn = document.getElementById('events-cards-next');
      const dotsContainer = document.getElementById('events-cards-dots');
      if (!carousel) return;

      const slides = carousel.querySelectorAll('.event-card-slide');
      const dots = dotsContainer ? dotsContainer.querySelectorAll('.event-card-dot') : [];
      let currentIndex = 0;
      let autoplayTimer = null;
      let isPaused = false;

      function getScrollStep() {
        if (!slides.length) return carousel.offsetWidth || 500;
        return slides[0].offsetWidth;
      }

      function updateDots(index) {
        dots.forEach((dot, idx) => {
          if (idx === index) {
            dot.classList.add('bg-brand-green', 'w-6');
            dot.classList.remove('bg-brand-gray', 'w-2.5');
          } else {
            dot.classList.remove('bg-brand-green', 'w-6');
            dot.classList.add('bg-brand-gray', 'w-2.5');
          }
        });
      }

      function scrollToIndex(index) {
        if (index < 0) index = 0;
        if (index >= slides.length) index = slides.length - 1;
        currentIndex = index;
        const step = getScrollStep();
        carousel.scrollTo({
          left: currentIndex * step,
          behavior: 'smooth'
        });
        updateDots(currentIndex);
      }

      function startAutoplay() {
        clearInterval(autoplayTimer);
        autoplayTimer = setInterval(() => {
          if (!isPaused) {
            let next = currentIndex + 1;
            if (next >= slides.length) next = 0;
            scrollToIndex(next);
          }
        }, 2000);
      }

      if (nextBtn) {
        nextBtn.addEventListener('click', () => {
          let next = currentIndex + 1;
          if (next >= slides.length) next = 0;
          scrollToIndex(next);
          startAutoplay();
        });
      }

      if (prevBtn) {
        prevBtn.addEventListener('click', () => {
          let prev = currentIndex - 1;
          if (prev < 0) prev = slides.length - 1;
          scrollToIndex(prev);
          startAutoplay();
        });
      }

      dots.forEach((dot, idx) => {
        dot.addEventListener('click', () => {
          scrollToIndex(idx);
          startAutoplay();
        });
      });

      carousel.addEventListener('mouseenter', () => { isPaused = true; });
      carousel.addEventListener('mouseleave', () => { isPaused = false; });
      carousel.addEventListener('touchstart', () => { isPaused = true; }, { passive: true });
      carousel.addEventListener('touchend', () => {
        isPaused = false;
        startAutoplay();
      }, { passive: true });

      let scrollTimeout;
      carousel.addEventListener('scroll', () => {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
          const step = getScrollStep();
          if (step > 0) {
            const calculated = Math.round(carousel.scrollLeft / step);
            if (calculated >= 0 && calculated < slides.length) {
              currentIndex = calculated;
              updateDots(currentIndex);
            }
          }
        }, 80);
      }, { passive: true });

      // Suporte a arrasto (drag)
      let isDown = false;
      let startX;
      let scrollLeft;

      carousel.addEventListener('mousedown', (e) => {
        isDown = true;
        isPaused = true;
        startX = e.pageX - carousel.offsetLeft;
        scrollLeft = carousel.scrollLeft;
      });

      window.addEventListener('mouseup', () => {
        if (isDown) {
          isDown = false;
          isPaused = false;
          startAutoplay();
        }
      });

      carousel.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - carousel.offsetLeft;
        const walk = (x - startX) * 1.5;
        carousel.scrollLeft = scrollLeft - walk;
      });

      updateDots(0);
      window.scrollEventsCard = scrollToIndex;
      startAutoplay();
    })();


    // 8. Carrossel Automático de Cada Sala Disponível (Loop a cada 2s)
    (function initRoomCarousels() {
      const roomCarousels = document.querySelectorAll('.room-carousel');
      if (!roomCarousels.length) return;

      roomCarousels.forEach(carousel => {
        const track = carousel.querySelector('.room-carousel-track');
        if (!track) return;
        const slides = track.querySelectorAll('.room-carousel-slide');
        if (slides.length <= 1) return;

        const counter = carousel.parentElement.querySelector('.room-carousel-counter');
        const interval = parseInt(carousel.getAttribute('data-interval') || '2000', 10);
        let currentIndex = 0;
        let isPaused = false;

        function updateCounter() {
          if (counter) {
            counter.textContent = `${currentIndex + 1}/${slides.length}`;
          }
        }

        function nextSlide() {
          if (isPaused) return;
          currentIndex = (currentIndex + 1) % slides.length;
          track.style.transform = `translateX(-${currentIndex * 100}%)`;
          updateCounter();
        }

        let timer = setInterval(nextSlide, interval);

        carousel.addEventListener('mouseenter', () => { isPaused = true; });
        carousel.addEventListener('mouseleave', () => { isPaused = false; });
        carousel.addEventListener('touchstart', () => { isPaused = true; }, { passive: true });
        carousel.addEventListener('touchend', () => { isPaused = false; }, { passive: true });

        updateCounter();
      });
    })();

    // Fechar modais ao carregar na tecla ESC ou fora do conteúdo
    window.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        ['modal-lightbox', 'modal-flyer', 'modal-cert', 'modal-privacidade', 'modal-cookies'].forEach(id => {
          closeModal(id);
        });
      }
    });

    document.querySelectorAll('#modal-lightbox, #modal-flyer, #modal-cert, #modal-privacidade, #modal-cookies').forEach(m => {
      m.addEventListener('click', (e) => {
        if (e.target === m) {
          closeModal(m.id);
        }
      });
    });

    // 4. Controlador de Scroll Dinâmico Bidirecional & Barra de Progresso
    (function initDynamicScroll() {
      const progressBar = document.getElementById('scroll-progress-bar');
      const backToTopBtn = document.getElementById('back-to-top');
      const revealElements = document.querySelectorAll(
        '.v-reveal, .v-reveal-up, .v-reveal-left, .v-reveal-right, .v-reveal-scale, .v-reveal-fade, .v-stagger-group'
      );

      let isTicking = false;

      function updateScrollAnimations() {
        const scrollY = window.pageYOffset || document.documentElement.scrollTop;
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        const docHeight = document.documentElement.scrollHeight - windowHeight;

        // Barra de progresso no topo
        if (progressBar && docHeight > 0) {
          const progressPercent = Math.min(100, Math.max(0, (scrollY / docHeight) * 100));
          progressBar.style.width = progressPercent + '%';
        }

        // Botão Voltar ao Topo
        if (backToTopBtn) {
          if (scrollY > 350) {
            backToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
            backToTopBtn.classList.add('opacity-100', 'pointer-events-auto');
          } else {
            backToTopBtn.classList.remove('opacity-100', 'pointer-events-auto');
            backToTopBtn.classList.add('opacity-0', 'pointer-events-none');
          }
        }

        // Revelação e Ocultação Dinâmica Bidirecional dos Blocos
        // - Ao descer: se o bloco entra no viewport (rect.top <= windowHeight * 0.88), ativa .v-in-view
        // - Ao subir: se o bloco sai para baixo do viewport (rect.top > windowHeight * 0.96), desativa .v-in-view
        //   garantindo que suma e volte a surgir suavemente ao descer novamente
        revealElements.forEach(el => {
          const rect = el.getBoundingClientRect();
          if (rect.top <= windowHeight * 0.88 && rect.bottom >= 40) {
            el.classList.add('v-in-view');
          } else if (rect.top > windowHeight * 0.96) {
            el.classList.remove('v-in-view');
          }
        });

        // Controlo da Linha do Tempo Dinâmica (O Seu Percurso na VCura: 01, 02, 03, 04)
        // Ao descer: quando passa no meio da tela (visão do telemóvel), acende verde sozinho um a um
        // Ao subir: vai apagando o de baixo e acendendo o de cima
        (function updateTimeline() {
          const steps = document.querySelectorAll('.v-timeline-step');
          if (!steps.length) return;

          const isDesktop = window.innerWidth >= 1024;
          const triggerY = windowHeight * 0.52; // Ponto focal central no ângulo de visão
          const progMobile = document.getElementById('timelineProgressMobile');
          const progDesktop = document.getElementById('timelineProgressDesktop');

          if (!isDesktop) {
            // MODO TELEMÓVEL & TABLET (Linha vertical sequencial)
            let lastActiveIdx = -1;
            let firstCenterY = null;
            let lastCenterY = null;

            steps.forEach((step, idx) => {
              const badge = step.querySelector('.timeline-badge') || step;
              const bRect = badge.getBoundingClientRect();
              const centerY = bRect.top + bRect.height / 2;

              if (idx === 0) firstCenterY = centerY;
              if (idx === steps.length - 1) lastCenterY = centerY;

              if (centerY <= triggerY) {
                step.classList.add('timeline-active');
                lastActiveIdx = idx;
              } else {
                step.classList.remove('timeline-active');
                step.classList.remove('timeline-focal');
              }
            });

            // Adiciona halo pulsante ao passo que está no foco atual
            steps.forEach((step, idx) => {
              if (idx === lastActiveIdx) {
                step.classList.add('timeline-focal');
              } else {
                step.classList.remove('timeline-focal');
              }
            });

            // Atualiza linha conetora vertical
            if (progMobile && firstCenterY !== null && lastCenterY !== null) {
              if (triggerY < firstCenterY) {
                progMobile.style.height = '0%';
              } else if (triggerY >= lastCenterY) {
                progMobile.style.height = '100%';
              } else {
                const pct = Math.max(0, Math.min(100, ((triggerY - firstCenterY) / (lastCenterY - firstCenterY)) * 100));
                progMobile.style.height = pct + '%';
              }
            }
          } else {
            // MODO DESKTOP (Horizontal sequencial com preenchimento da linha)
            const firstStep = steps[0];
            const sRect = firstStep.getBoundingClientRect();
            const startTrigger = triggerY + 60;

            if (sRect.top <= startTrigger) {
              const span = Math.max(120, sRect.height * 0.85);
              const progress = Math.max(0, Math.min(1, (startTrigger - sRect.top) / span));

              if (progDesktop) progDesktop.style.width = (progress * 100) + '%';

              const thresholds = [0.05, 0.32, 0.62, 0.88];
              let activeCount = -1;
              steps.forEach((step, idx) => {
                if (progress >= thresholds[idx]) {
                  step.classList.add('timeline-active');
                  activeCount = idx;
                } else {
                  step.classList.remove('timeline-active');
                  step.classList.remove('timeline-focal');
                }
              });

              steps.forEach((step, idx) => {
                if (idx === activeCount) {
                  step.classList.add('timeline-focal');
                } else {
                  step.classList.remove('timeline-focal');
                }
              });
            } else {
              steps.forEach(step => step.classList.remove('timeline-active', 'timeline-focal'));
              if (progDesktop) progDesktop.style.width = '0%';
            }
          }
        })();

        isTicking = false;
      }

      function onScrollTick() {
        if (!isTicking) {
          requestAnimationFrame(updateScrollAnimations);
          isTicking = true;
        }
      }

      window.addEventListener('scroll', onScrollTick, { passive: true });
      window.addEventListener('resize', onScrollTick, { passive: true });

      // Disparo inicial quando a página carrega
      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', updateScrollAnimations);
      } else {
        updateScrollAnimations();
      }
      setTimeout(updateScrollAnimations, 100);
      setTimeout(updateScrollAnimations, 400);
    })();

    // 5. Controlador dos Dropdowns de Tradução & Troca de Idioma (PT, EN, FR, ES)
    const LANG_DATA = {
      pt: { name: 'Português', country: 'Portugal', code: 'pt' },
      en: { name: 'English', country: 'Reino Unido', code: 'gb' },
      fr: { name: 'Français', country: 'França', code: 'fr' },
      es: { name: 'Español', country: 'Espanha', code: 'es' }
    };

    function updateLanguageUI(langCode) {
      const info = LANG_DATA[langCode] || LANG_DATA.pt;
      const flagImg = `<img src="https://flagcdn.com/w40/${info.code}.png" srcset="https://flagcdn.com/w80/${info.code}.png 2x" alt="${info.country}" class="flag-icon" />`;
      document.querySelectorAll('.lang-flag-current').forEach(el => {
        el.innerHTML = flagImg;
      });
      document.querySelectorAll('.lang-name-current').forEach(el => {
        el.textContent = info.country;
      });

      // Atualizar destaque dos botões no menu mobile
      document.querySelectorAll('.lang-btn-mobile').forEach(btn => {
        const blang = btn.getAttribute('data-lang');
        if (blang === langCode) {
          btn.className = 'lang-btn-mobile px-2.5 py-1 rounded-lg bg-brand-green-soft text-brand-green-dark text-xs font-semibold flex items-center gap-1.5 border border-brand-green/30 shadow-xs';
        } else {
          btn.className = 'lang-btn-mobile px-2.5 py-1 rounded-lg bg-brand-gray hover:bg-brand-green-soft text-brand-text text-xs font-medium flex items-center gap-1.5 transition-colors';
        }
      });
    }

    function applyTranslations(langCode) {
      const code = (langCode || 'pt').toLowerCase();
      if (!window.VCURA_TRANSLATIONS) return;
      const dict = window.VCURA_TRANSLATIONS[code] || window.VCURA_TRANSLATIONS.pt;
      if (!dict) return;

      // 1. Tradução de texto padrão
      document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (dict[key] !== undefined) {
          el.textContent = dict[key];
        }
      });

      // 2. Tradução com formatação HTML
      document.querySelectorAll('[data-i18n-html]').forEach(el => {
        const key = el.getAttribute('data-i18n-html');
        if (dict[key] !== undefined) {
          el.innerHTML = dict[key];
        }
      });

      // 3. Atributos de título e acessibilidade
      document.querySelectorAll('[data-i18n-title]').forEach(el => {
        const key = el.getAttribute('data-i18n-title');
        if (dict[key] !== undefined) {
          el.setAttribute('title', dict[key]);
        }
      });

      document.querySelectorAll('[data-i18n-aria]').forEach(el => {
        const key = el.getAttribute('data-i18n-aria');
        if (dict[key] !== undefined) {
          el.setAttribute('aria-label', dict[key]);
        }
      });

      // 4. Atualizar o idioma da página
      document.documentElement.lang = code === 'pt' ? 'pt-PT' : code;
      updateLanguageUI(code);
    }

    function changeLanguage(langCode, countryName, flag) {
      try {
        localStorage.setItem('vcura_selected_lang', langCode);
      } catch (e) {}

      applyTranslations(langCode);

      // Fechar todos os menus dropdown abertos
      document.querySelectorAll('.lang-dropdown-menu').forEach(m => m.classList.add('hidden'));
      document.querySelectorAll('.lang-dropdown-btn').forEach(b => b.setAttribute('aria-expanded', 'false'));
    }

    // Gerir abertura/fecho ao clicar nos botões dos dropdowns
    document.addEventListener('click', (e) => {
      const btn = e.target.closest('.lang-dropdown-btn');
      if (btn) {
        e.stopPropagation();
        const wrapper = btn.closest('.lang-dropdown-wrapper');
        const menu = wrapper ? wrapper.querySelector('.lang-dropdown-menu') : null;
        if (menu) {
          const isHidden = menu.classList.contains('hidden');
          // Fechar todos os outros
          document.querySelectorAll('.lang-dropdown-menu').forEach(m => m.classList.add('hidden'));
          document.querySelectorAll('.lang-dropdown-btn').forEach(b => b.setAttribute('aria-expanded', 'false'));
          if (isHidden) {
            menu.classList.remove('hidden');
            btn.setAttribute('aria-expanded', 'true');
          }
        }
      } else if (!e.target.closest('.lang-dropdown-menu')) {
        document.querySelectorAll('.lang-dropdown-menu').forEach(m => m.classList.add('hidden'));
        document.querySelectorAll('.lang-dropdown-btn').forEach(b => b.setAttribute('aria-expanded', 'false'));
      }
    });

    // Restaurar idioma guardado na inicialização
    (function initSavedLanguage() {
      try {
        const saved = localStorage.getItem('vcura_selected_lang') || 'pt';
        applyTranslations(saved);
      } catch (e) {
        applyTranslations('pt');
      }
    })();
  </script>