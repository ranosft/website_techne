// Techne Engineers India - Interactive WOW Engine
// Inspired by elite engineering precision and dynamic glassmorphism

document.addEventListener('DOMContentLoaded', () => {
    // 1. Navbar Glass Blur & Scroll Reaction
    const navbar = document.getElementById('mainNavbar');
    const backToTopBtn = document.getElementById('backToTopBtn');

    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY > 40;
        if (navbar) {
            if (scrolled) {
                navbar.classList.add('bg-slate-950/85', 'shadow-2xl', 'border-white/10');
                navbar.classList.remove('bg-transparent', 'border-transparent');
            } else {
                navbar.classList.remove('bg-slate-950/85', 'shadow-2xl', 'border-white/10');
                navbar.classList.add('bg-transparent', 'border-transparent');
            }
        }

        if (backToTopBtn) {
            if (window.scrollY > 500) {
                backToTopBtn.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-4');
                backToTopBtn.classList.add('opacity-100', 'pointer-events-auto', 'translate-y-0');
            } else {
                backToTopBtn.classList.add('opacity-0', 'pointer-events-none', 'translate-y-4');
                backToTopBtn.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-0');
            }
        }
    }, { passive: true });

    if (backToTopBtn) {
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // 2. Dynamic Hero Text Rotator
    const heroWords = [
        "MEP Engineering",
        "Aviation & Airports",
        "Smart BMS & ELV",
        "Public Health & Fire Safety",
        "Digital Twin & 7D BIM",
        "Sustainable Infrastructure"
    ];
    const rotatorEl = document.getElementById('heroRotatorText');
    if (rotatorEl) {
        let index = 0;
        setInterval(() => {
            rotatorEl.style.opacity = '0';
            rotatorEl.style.transform = 'translateY(-12px)';
            setTimeout(() => {
                index = (index + 1) % heroWords.length;
                rotatorEl.textContent = heroWords[index];
                rotatorEl.style.opacity = '1';
                rotatorEl.style.transform = 'translateY(0px)';
            }, 300);
        }, 3200);
    }

    // 3. Live Stats Counter Animation
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = parseInt(entry.target.getAttribute('data-target') || '0', 10);
                const suffix = entry.target.getAttribute('data-suffix') || '';
                const duration = 2000;
                const startTime = performance.now();

                function update(now) {
                    const elapsed = now - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    // easeOutExpo
                    const ease = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
                    const current = Math.floor(ease * target);
                    entry.target.textContent = current.toLocaleString() + suffix;

                    if (progress < 1) {
                        requestAnimationFrame(update);
                    } else {
                        entry.target.textContent = target.toLocaleString() + suffix;
                    }
                }

                requestAnimationFrame(update);
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.25 });

    document.querySelectorAll('.stat-counter').forEach(el => counterObserver.observe(el));

    // 4. Parallax 3D Card Hover Tilt
    const cards = document.querySelectorAll('.tilt-card');
    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const cx = rect.width / 2;
            const cy = rect.height / 2;
            const rotX = ((y - cy) / cy) * -6;
            const rotY = ((x - cx) / cx) * 6;
            card.style.transform = `perspective(800px) rotateX(${rotX.toFixed(2)}deg) rotateY(${rotY.toFixed(2)}deg) translateY(-4px)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(800px) rotateX(0deg) rotateY(0deg) translateY(0px)';
        });
    });

    // 5. Project Portfolio Filtering
    const filterBtns = document.querySelectorAll('.project-filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter') || 'all';

            filterBtns.forEach(b => {
                b.classList.remove('bg-cyan-500', 'text-slate-950', 'font-bold', 'shadow-[0_0_20px_rgba(6,182,212,0.5)]');
                b.classList.add('bg-slate-900/80', 'text-slate-300', 'hover:bg-slate-800');
            });
            btn.classList.add('bg-cyan-500', 'text-slate-950', 'font-bold', 'shadow-[0_0_20px_rgba(6,182,212,0.5)]');
            btn.classList.remove('bg-slate-900/80', 'text-slate-300', 'hover:bg-slate-800');

            projectCards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filter === 'all' || category === filter) {
                    card.style.display = 'flex';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 250);
                }
            });
        });
    });

    // 6. Interactive BIM Dimension Switcher
    const bimBtns = document.querySelectorAll('.bim-tab-btn');
    const bimPanels = document.querySelectorAll('.bim-detail-panel');

    bimBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const bimKey = btn.getAttribute('data-bim');

            bimBtns.forEach(b => {
                b.classList.remove('border-cyan-400', 'bg-cyan-500/10', 'text-cyan-300');
                b.classList.add('border-white/10', 'bg-slate-900/40', 'text-slate-400');
            });
            btn.classList.add('border-cyan-400', 'bg-cyan-500/10', 'text-cyan-300');
            btn.classList.remove('border-white/10', 'bg-slate-900/40', 'text-slate-400');

            bimPanels.forEach(panel => {
                if (panel.id === `bim-panel-${bimKey}`) {
                    panel.classList.remove('hidden');
                    panel.classList.add('block');
                } else {
                    panel.classList.add('hidden');
                    panel.classList.remove('block');
                }
            });
        });
    });

    // 7. Pan-India Regional Footprint Tabs
    const regionBtns = document.querySelectorAll('.region-tab-btn');
    const regionContents = document.querySelectorAll('.region-content-panel');

    regionBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const region = btn.getAttribute('data-region');

            regionBtns.forEach(b => {
                b.classList.remove('border-amber-400', 'bg-amber-400/10', 'text-amber-300');
                b.classList.add('border-white/10', 'bg-slate-900/40', 'text-slate-400');
            });
            btn.classList.add('border-amber-400', 'bg-amber-400/10', 'text-amber-300');
            btn.classList.remove('border-white/10', 'bg-slate-900/40', 'text-slate-400');

            regionContents.forEach(panel => {
                if (panel.id === `region-${region}`) {
                    panel.classList.remove('hidden');
                    panel.classList.add('block');
                } else {
                    panel.classList.add('hidden');
                    panel.classList.remove('block');
                }
            });
        });
    });

    // 8. Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
            }
        });

        // Close when clicking mobile link
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    }

    // 9. Interactive RFP / Consultation Modal
    const openRfpBtns = document.querySelectorAll('.open-rfp-modal');
    const rfpModal = document.getElementById('rfpModal');
    const closeRfpBtn = document.getElementById('closeRfpBtn');
    const rfpForm = document.getElementById('rfpForm');

    function openModal() {
        if (rfpModal) {
            rfpModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeModal() {
        if (rfpModal) {
            rfpModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    }

    openRfpBtns.forEach(btn => btn.addEventListener('click', (e) => {
        e.preventDefault();
        openModal();
    }));

    if (closeRfpBtn) {
        closeRfpBtn.addEventListener('click', closeModal);
    }

    if (rfpModal) {
        rfpModal.addEventListener('click', (e) => {
            if (e.target === rfpModal) {
                closeModal();
            }
        });
    }

    if (rfpForm) {
        rfpForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const clientName = document.getElementById('rfpName')?.value || 'Client';
            const clientPhone = document.getElementById('rfpPhone')?.value || '';
            const clientEmail = document.getElementById('rfpEmail')?.value || '';
            const projectType = document.getElementById('rfpType')?.value || 'Engineering Project';
            const area = document.getElementById('rfpArea')?.value || '';
            const location = document.getElementById('rfpLocation')?.value || '';

            // Selected disciplines
            const checkedBoxes = Array.from(document.querySelectorAll('input[name="discipline"]:checked')).map(cb => cb.value);
            const disciplines = checkedBoxes.length ? checkedBoxes.join(', ') : 'Integrated MEP & BIM';

            const message = `Hello Techne Engineers India,
I would like to inquire about Engineering Consultancy for our project:
- Name: ${clientName}
- Phone: ${clientPhone}
- Email: ${clientEmail}
- Project Type: ${projectType}
- Built-up Area: ${area ? area + ' sq.ft.' : 'Not specified'}
- Location: ${location || 'India'}
- Required Disciplines: ${disciplines}`;

            const encoded = encodeURIComponent(message);
            window.open(`https://wa.me/919555118555?text=${encoded}`, '_blank');
            closeModal();
        });
    }
});
