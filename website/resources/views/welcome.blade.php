<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Techne Engineers India - Consulting Engineers for the Built Environment. Premier MEP, HVAC, Fire Fighting, Electrical, Public Health, Aviation ELV and Digital Twin BIM engineering.">
    <meta name="keywords" content="Techne Engineers, MEP Consultant, HVAC Design, Fire Safety Engineer, Plumbing Engineering, BIM Services, Jewar Airport MEP, Building Engineering India">
    <meta property="og:title" content="Techne Engineers India — Consulting Engineers for the Built Environment">
    <meta property="og:description" content="Over 50 years of collective industry expertise. 250M+ sq.ft engineered across 800+ landmark projects in 60+ cities.">
    <meta property="og:image" content="{{ asset('images/brand/techne-logo.jpg') }}">
    <link rel="icon" type="image/jpeg" href="{{ asset('images/brand/techne-logo.jpg') }}">

    <title>Techne Engineers India | Consulting Engineers for the Built Environment</title>

    <!-- Google Fonts: Instrument Sans & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

    @if (file_exists(public_path('build/manifest.json')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Fallback Tailwind CSS v4 CDN for instantaneous rendering -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <style>
            @theme {
                --font-sans: 'Instrument Sans', sans-serif;
                --font-display: 'Plus Jakarta Sans', sans-serif;
            }
        </style>
    @endif

    <style>
        body {
            background-color: #060911;
            color: #f1f5f9;
            font-family: 'Instrument Sans', sans-serif;
            overflow-x: hidden;
        }
        .font-display {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .blueprint-grid {
            background-image: 
                linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .glass-card {
            background: rgba(13, 20, 36, 0.65);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transition: transform 0.25s ease-out, border-color 0.25s ease, box-shadow 0.25s ease;
        }
        .glass-card:hover {
            border-color: rgba(6, 182, 212, 0.4);
            box-shadow: 0 25px 60px rgba(6, 182, 212, 0.15), inset 0 1px 0 rgba(255, 255, 255, 0.2);
        }
        .text-gradient-cyan {
            background: linear-gradient(135deg, #38bdf8 0%, #06b6d4 50%, #2dd4bf 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .text-gradient-gold {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 50%, #d97706 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .text-gradient-white {
            background: linear-gradient(135deg, #ffffff 0%, #e2e8f0 60%, #94a3b8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .glow-orb {
            position: absolute;
            border-radius: 9999px;
            filter: blur(120px);
            pointer-events: none;
            z-index: 0;
        }
    </style>
</head>
<body class="selection:bg-cyan-500/30 selection:text-cyan-200">

    <!-- Ambient Glow Orbs -->
    <div class="glow-orb w-[600px] h-[600px] bg-cyan-500/10 -top-40 -left-40"></div>
    <div class="glow-orb w-[500px] h-[500px] bg-blue-600/10 top-1/4 -right-40"></div>
    <div class="glow-orb w-[650px] h-[650px] bg-indigo-600/10 top-2/3 -left-40"></div>

    <!-- Background Blueprint Grid -->
    <div class="fixed inset-0 blueprint-grid pointer-events-none opacity-40 z-0"></div>

    <!-- Navigation Header -->
    <header id="mainNavbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-slate-950/70 backdrop-blur-xl border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between relative z-10">
            <!-- Brand Logo & Name -->
            <a href="#" class="flex items-center gap-3.5 group">
                <div class="relative w-11 h-11 rounded-xl overflow-hidden border border-white/20 p-0.5 bg-slate-900 shadow-[0_0_20px_rgba(6,182,212,0.3)] group-hover:border-cyan-400 transition-all">
                    <img src="{{ asset('images/brand/techne-logo.jpg') }}" alt="Techne Engineers India" class="w-full h-full object-cover rounded-lg">
                </div>
                <div>
                    <span class="font-display font-extrabold text-xl tracking-tight text-white flex items-center gap-1.5">
                        TECHNE <span class="text-cyan-400">ENGINEERS</span>
                    </span>
                    <span class="block text-[10px] tracking-widest text-slate-400 uppercase font-semibold">Evolve to Create · Since 2012</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden lg:flex items-center gap-8">
                <a href="#disciplines" class="text-sm font-medium text-slate-300 hover:text-cyan-400 transition-colors">Disciplines</a>
                <a href="#projects" class="text-sm font-medium text-slate-300 hover:text-cyan-400 transition-colors">Projects</a>
                <a href="#bim" class="text-sm font-medium text-slate-300 hover:text-cyan-400 transition-colors">7D BIM & Twin</a>
                <a href="#footprint" class="text-sm font-medium text-slate-300 hover:text-cyan-400 transition-colors">Footprint</a>
                <a href="#leadership" class="text-sm font-medium text-slate-300 hover:text-cyan-400 transition-colors">Leadership</a>
                <a href="#contact" class="text-sm font-medium text-slate-300 hover:text-cyan-400 transition-colors">Offices</a>
            </nav>

            <!-- Quick Action & Call -->
            <div class="hidden sm:flex items-center gap-4">
                <a href="tel:+919555118555" class="flex items-center gap-2 text-xs font-semibold text-slate-300 hover:text-white px-3 py-1.5 rounded-lg border border-white/10 bg-slate-900/60 hover:border-cyan-500/40 transition-all">
                    <i data-lucide="phone-call" class="w-3.5 h-3.5 text-cyan-400"></i>
                    <span>+91 95551 18555</span>
                </a>
                <button class="open-rfp-modal relative group overflow-hidden rounded-full font-bold text-xs px-5 py-2.5 bg-gradient-to-r from-cyan-500 to-blue-600 text-white shadow-[0_0_20px_rgba(6,182,212,0.4)] hover:shadow-[0_0_30px_rgba(6,182,212,0.6)] transition-all">
                    <span class="relative z-10 flex items-center gap-1.5">
                        <span>Request RFP</span>
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform"></i>
                    </span>
                </button>
            </div>

            <!-- Mobile Hamburger Button -->
            <button id="mobileMenuBtn" aria-label="Toggle Menu" class="lg:hidden p-2 rounded-lg border border-white/10 text-slate-300 hover:text-white hover:bg-slate-800">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>

        <!-- Mobile Drawer -->
        <div id="mobileMenu" class="hidden lg:hidden px-6 py-6 bg-slate-950/95 backdrop-blur-2xl border-b border-white/10 space-y-4">
            <a href="#disciplines" class="block text-base font-medium text-slate-200 hover:text-cyan-400">Disciplines</a>
            <a href="#projects" class="block text-base font-medium text-slate-200 hover:text-cyan-400">Projects</a>
            <a href="#bim" class="block text-base font-medium text-slate-200 hover:text-cyan-400">7D BIM & Digital Twin</a>
            <a href="#footprint" class="block text-base font-medium text-slate-200 hover:text-cyan-400">Pan-India Footprint</a>
            <a href="#leadership" class="block text-base font-medium text-slate-200 hover:text-cyan-400">Engineering Leadership</a>
            <a href="#contact" class="block text-base font-medium text-slate-200 hover:text-cyan-400">Offices & Contact</a>
            <div class="pt-4 border-t border-white/10 flex flex-col gap-3">
                <a href="tel:+919555118555" class="flex items-center justify-center gap-2 text-sm font-semibold py-2.5 rounded-lg border border-white/10 text-slate-200 bg-slate-900">
                    <i data-lucide="phone" class="w-4 h-4 text-cyan-400"></i>
                    Call: +91 95551 18555
                </a>
                <button class="open-rfp-modal w-full py-3 rounded-xl font-bold text-sm bg-gradient-to-r from-cyan-500 to-blue-600 text-white shadow-lg shadow-cyan-500/30">
                    Request RFP / Estimate
                </button>
            </div>
        </div>
    </header>

    <main class="relative z-10 pt-24">

        <!-- HERO SECTION -->
        <section class="relative min-h-[90vh] flex items-center justify-center px-4 sm:px-6 lg:px-8 py-20 overflow-hidden">
            <div class="max-w-6xl mx-auto text-center">
                <!-- Elite Credentials Pill -->
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-cyan-500/30 bg-cyan-950/40 backdrop-blur-md mb-8 shadow-[0_0_25px_rgba(6,182,212,0.2)]">
                    <span class="flex h-2 w-2 rounded-full bg-cyan-400 animate-ping"></span>
                    <span class="text-xs font-semibold tracking-wider uppercase text-cyan-300">
                        Nearing 2 Decades in India · 50+ Years Collective Expertise
                    </span>
                </div>

                <!-- Main Slogan -->
                <h1 class="font-display font-black text-4xl sm:text-6xl lg:text-7xl tracking-tight leading-[1.08] mb-6">
                    <span class="block text-gradient-white">CONSULTING ENGINEERS FOR</span>
                    <span class="block text-gradient-cyan">THE BUILT ENVIRONMENT</span>
                </h1>

                <!-- Dynamic Hero Rotator Subtitle -->
                <p class="max-w-3xl mx-auto text-lg sm:text-2xl font-normal text-slate-300 mb-10 leading-relaxed">
                    Integrated, high-precision consultancy for 
                    <span id="heroRotatorText" class="inline-block font-bold text-cyan-400 border-b-2 border-cyan-400/50 pb-0.5 transition-all duration-300">MEP Engineering</span>.
                    From hyper-scale airports to smart townships, we evolve engineering into art.
                </p>

                <!-- CTA Button Group -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
                    <button class="open-rfp-modal w-full sm:w-auto px-8 py-4 rounded-full font-display font-bold text-base bg-gradient-to-r from-cyan-500 via-sky-500 to-blue-600 text-white shadow-[0_0_35px_rgba(6,182,212,0.4)] hover:shadow-[0_0_50px_rgba(6,182,212,0.6)] hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2 group">
                        <span>Initiate Project Consultation</span>
                        <i data-lucide="arrow-up-right" class="w-5 h-5 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                    </button>
                    <a href="#projects" class="w-full sm:w-auto px-8 py-4 rounded-full font-display font-semibold text-base border border-white/20 bg-slate-900/50 hover:bg-slate-800/80 hover:border-white/40 text-slate-200 transition-all flex items-center justify-center gap-2">
                        <i data-lucide="layers" class="w-5 h-5 text-cyan-400"></i>
                        <span>Explore 800+ Landmark Projects</span>
                    </a>
                </div>

                <!-- Live Animated Counters Grid (The Wow Stats) -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4 max-w-5xl mx-auto">
                    <!-- Stat 1 -->
                    <div class="glass-card tilt-card p-5 rounded-2xl text-center group">
                        <div class="font-display font-extrabold text-3xl sm:text-4xl text-cyan-400 stat-counter" data-target="250" data-suffix="M+">0</div>
                        <div class="text-xs font-semibold text-slate-400 uppercase tracking-wider mt-1">Sq. Ft. Designed</div>
                    </div>
                    <!-- Stat 2 -->
                    <div class="glass-card tilt-card p-5 rounded-2xl text-center group">
                        <div class="font-display font-extrabold text-3xl sm:text-4xl text-amber-400 stat-counter" data-target="800" data-suffix="+">0</div>
                        <div class="text-xs font-semibold text-slate-400 uppercase tracking-wider mt-1">Projects Done</div>
                    </div>
                    <!-- Stat 3 -->
                    <div class="glass-card tilt-card p-5 rounded-2xl text-center group">
                        <div class="font-display font-extrabold text-3xl sm:text-4xl text-cyan-400 stat-counter" data-target="25" data-suffix="M+">0</div>
                        <div class="text-xs font-semibold text-slate-400 uppercase tracking-wider mt-1">Tendered / Year</div>
                    </div>
                    <!-- Stat 4 -->
                    <div class="glass-card tilt-card p-5 rounded-2xl text-center group">
                        <div class="font-display font-extrabold text-3xl sm:text-4xl text-sky-400 stat-counter" data-target="60" data-suffix="+">0</div>
                        <div class="text-xs font-semibold text-slate-400 uppercase tracking-wider mt-1">Cities in India</div>
                    </div>
                    <!-- Stat 5 -->
                    <div class="glass-card tilt-card p-5 rounded-2xl text-center group">
                        <div class="font-display font-extrabold text-3xl sm:text-4xl text-teal-400 stat-counter" data-target="51" data-suffix="+">0</div>
                        <div class="text-xs font-semibold text-slate-400 uppercase tracking-wider mt-1">Engineers & Staff</div>
                    </div>
                    <!-- Stat 6 -->
                    <div class="glass-card tilt-card p-5 rounded-2xl text-center group">
                        <div class="font-display font-extrabold text-3xl sm:text-4xl text-indigo-400 stat-counter" data-target="3" data-suffix="+">0</div>
                        <div class="text-xs font-semibold text-slate-400 uppercase tracking-wider mt-1">Countries</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FLAGSHIP MARQUEE BANNER: JEWAR INTERNATIONAL AIRPORT -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="relative rounded-3xl overflow-hidden glass-card border border-cyan-500/30 p-8 sm:p-12">
                <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/80 to-transparent z-10"></div>
                <img src="{{ asset('images/projects/pdf_img_139_1400x569.jpg') }}" alt="Jewar International Airport Flagship" class="absolute inset-0 w-full h-full object-cover object-center opacity-40 z-0">
                
                <div class="relative z-20 max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/20 text-cyan-300 text-xs font-bold uppercase tracking-wider mb-4 border border-cyan-500/40">
                        <i data-lucide="plane-takeoff" class="w-3.5 h-3.5"></i>
                        Flagship Aviation Delivery
                    </div>
                    <h2 class="font-display font-extrabold text-3xl sm:text-5xl text-white tracking-tight mb-4">
                        Noida International Airport (Jewar)
                    </h2>
                    <p class="text-slate-300 text-base sm:text-lg mb-6 leading-relaxed">
                        End-to-end design and delivery of integrated critical systems: IBMS, PAVA, CCTV, FIDS, Access Control, Perimeter Intrusion Detection (PIDS), TETRA, BMS and Unified Airport Security infrastructure.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 rounded-md bg-white/10 backdrop-blur-md text-xs font-semibold text-slate-200">IBMS & Automation</span>
                        <span class="px-3 py-1 rounded-md bg-white/10 backdrop-blur-md text-xs font-semibold text-slate-200">Fire Alarm & PAVA</span>
                        <span class="px-3 py-1 rounded-md bg-white/10 backdrop-blur-md text-xs font-semibold text-slate-200">Aviation FIDS & CCTV</span>
                        <span class="px-3 py-1 rounded-md bg-white/10 backdrop-blur-md text-xs font-semibold text-slate-200">PTS & TETRA Radio</span>
                    </div>
                    <button class="open-rfp-modal px-6 py-3 rounded-full font-bold text-sm bg-cyan-500 hover:bg-cyan-400 text-slate-950 shadow-[0_0_20px_rgba(6,182,212,0.5)] transition-all flex items-center gap-2">
                        <span>Consult on Large Infrastructure</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- CORE DISCIPLINES OF SPECIALISATION -->
        <section id="disciplines" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-cyan-400 font-bold uppercase tracking-widest text-xs">Full Spectrum MEPF Solutions</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-5xl text-white tracking-tight mt-2 mb-4">
                    Disciplines of Specialisation
                </h2>
                <p class="text-slate-400 text-base sm:text-lg">
                    Comprehensive feasibility, engineering calculations, 3D BIM coordination, GFC drawings, and tender BOQs across all building lifecycle phases.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- 1. Public Health Engineering (PHE) -->
                <div class="glass-card tilt-card p-8 rounded-3xl relative overflow-hidden group">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 border border-cyan-500/30 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-cyan-500/20 transition-all">
                        <i data-lucide="droplets" class="w-7 h-7 text-cyan-400"></i>
                    </div>
                    <h3 class="font-display font-bold text-2xl text-white mb-3">Public Health Engineering (PHE)</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        Complete water supply, rising mains, overhead & underground reservoirs, water filtration/softening, RO systems, STP schemes, recycled water networks, and stormwater harvesting.
                    </p>
                    <ul class="space-y-2 text-xs text-slate-300 font-medium">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0"></i> Underground & Overhead Reservoirs</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0"></i> Sewage Treatment Plant (STP) Schemes</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0"></i> Rainwater Harvesting & Groundwater Recharge</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-cyan-400 shrink-0"></i> Solar & Central Water Heating Systems</li>
                    </ul>
                </div>

                <!-- 2. Fire Fighting & Life Safety -->
                <div class="glass-card tilt-card p-8 rounded-3xl relative overflow-hidden group">
                    <div class="w-14 h-14 rounded-2xl bg-red-500/10 border border-red-500/30 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-red-500/20 transition-all">
                        <i data-lucide="flame" class="w-7 h-7 text-red-400"></i>
                    </div>
                    <h3 class="font-display font-bold text-2xl text-white mb-3">Fire Fighting & Life Safety</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        National Building Code (NBC) compliant wet riser systems, fire pumps, automatic sprinkler networks, gas suppression, addressable fire detection & alarm systems.
                    </p>
                    <ul class="space-y-2 text-xs text-slate-300 font-medium">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-red-400 shrink-0"></i> Wet Riser & Fire Hydrant Hydraulics</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-red-400 shrink-0"></i> NBC Compliant Automatic Sprinkler Systems</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-red-400 shrink-0"></i> Dedicated Fire Pump Houses & Reservoirs</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-red-400 shrink-0"></i> Intelligent Smoke Extraction & Alarm</li>
                    </ul>
                </div>

                <!-- 3. Electrical Engineering -->
                <div class="glass-card tilt-card p-8 rounded-3xl relative overflow-hidden group">
                    <div class="w-14 h-14 rounded-2xl bg-amber-500/10 border border-amber-500/30 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-amber-500/20 transition-all">
                        <i data-lucide="zap" class="w-7 h-7 text-amber-400"></i>
                    </div>
                    <h3 class="font-display font-bold text-2xl text-white mb-3">Electrical Engineering</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        33/11 KV substations, HT/LT power distribution, transformer & DG set synchronization, power zoning, single line diagrams (SLD), earthing & lightning surge protection.
                    </p>
                    <ul class="space-y-2 text-xs text-slate-300 font-medium">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-amber-400 shrink-0"></i> 33/11 KV Substation & Transformer Sizing</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-amber-400 shrink-0"></i> DG Sets & Automatic Synchronizing Panels</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-amber-400 shrink-0"></i> Low Voltage (LT) Panel & Cable Tray Layouts</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-amber-400 shrink-0"></i> Comprehensive Earthing & Lightning Protection</li>
                    </ul>
                </div>

                <!-- 4. HVAC & Climate Control -->
                <div class="glass-card tilt-card p-8 rounded-3xl relative overflow-hidden group">
                    <div class="w-14 h-14 rounded-2xl bg-sky-500/10 border border-sky-500/30 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-sky-500/20 transition-all">
                        <i data-lucide="wind" class="w-7 h-7 text-sky-400"></i>
                    </div>
                    <h3 class="font-display font-bold text-2xl text-white mb-3">HVAC & Energy Modeling</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        Computerized BTUH heat load calculations, sensible and latent gains, VRV/VRF systems, chiller plants, airflow CFM distribution, duct routing, and energy optimization.
                    </p>
                    <ul class="space-y-2 text-xs text-slate-300 font-medium">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sky-400 shrink-0"></i> Multi-Zone BTUH Computerized Heat Load</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sky-400 shrink-0"></i> Central Chiller & VRV/VRF System Engineering</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sky-400 shrink-0"></i> Airflow CFM, Throw Patterns & Duct Sizing</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sky-400 shrink-0"></i> IAQ Cleanroom & Basement Ventilation</li>
                    </ul>
                </div>

                <!-- 5. ICT, ELV & Smart IBMS -->
                <div class="glass-card tilt-card p-8 rounded-3xl relative overflow-hidden group">
                    <div class="w-14 h-14 rounded-2xl bg-purple-500/10 border border-purple-500/30 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-purple-500/20 transition-all">
                        <i data-lucide="cpu" class="w-7 h-7 text-purple-400"></i>
                    </div>
                    <h3 class="font-display font-bold text-2xl text-white mb-3">ICT, ELV & Smart IBMS</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        Specialist principal-led ELV infrastructure: Data center planning, IP CCTV, biometric access control, Public Address & Voice Alarm (PAVA), FIDS, EPABX, and IBMS.
                    </p>
                    <ul class="space-y-2 text-xs text-slate-300 font-medium">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0"></i> Data Centre Standards (CDCP Certified)</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0"></i> Command & Control Center Architecture</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0"></i> IP CCTV, Access Control & PIDS Security</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-purple-400 shrink-0"></i> Integrated Building Management (IBMS)</li>
                    </ul>
                </div>

                <!-- 6. Sustainability & Green Buildings -->
                <div class="glass-card tilt-card p-8 rounded-3xl relative overflow-hidden group">
                    <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-emerald-500/20 transition-all">
                        <i data-lucide="leaf" class="w-7 h-7 text-emerald-400"></i>
                    </div>
                    <h3 class="font-display font-bold text-2xl text-white mb-3">Sustainability & Green Assets</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        LEED & IGBC compliant green building design, passive climate controls, energy modeling, water efficiency loops, and carbon footprint reduction strategies.
                    </p>
                    <ul class="space-y-2 text-xs text-slate-300 font-medium">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-400 shrink-0"></i> IGBC / LEED Rating Compliance</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-400 shrink-0"></i> Net-Zero Energy & Carbon Strategies</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-400 shrink-0"></i> Water Neutrality & Waste Stream Recovery</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-400 shrink-0"></i> Rooftop Solar PV & Central Thermal Recovery</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- BEYOND BIM & DIGITAL TWIN (INTERACTIVE 2D - 7D EXPLORER) -->
        <section id="bim" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="relative glass-card rounded-3xl p-8 sm:p-14 border border-cyan-500/30 overflow-hidden">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-cyan-400 font-bold uppercase tracking-widest text-xs">Fast-Track Adoption</span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-white tracking-tight mt-2 mb-4">
                        Beyond BIM & Digital Twin
                    </h2>
                    <p class="text-slate-300 text-base">
                        Get it right over and over, project after project. Digital Twins simulate multiple data points for design, construction, and asset operations.
                    </p>
                </div>

                <!-- Dimension Switcher Tabs -->
                <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-10">
                    <button class="bim-tab-btn px-4 py-2 rounded-xl border border-cyan-400 bg-cyan-500/10 text-cyan-300 font-bold text-sm transition-all" data-bim="2d">
                        2D GFC
                    </button>
                    <button class="bim-tab-btn px-4 py-2 rounded-xl border border-white/10 bg-slate-900/40 text-slate-400 hover:text-white font-bold text-sm transition-all" data-bim="3d">
                        3D BIM
                    </button>
                    <button class="bim-tab-btn px-4 py-2 rounded-xl border border-white/10 bg-slate-900/40 text-slate-400 hover:text-white font-bold text-sm transition-all" data-bim="4d">
                        4D Time
                    </button>
                    <button class="bim-tab-btn px-4 py-2 rounded-xl border border-white/10 bg-slate-900/40 text-slate-400 hover:text-white font-bold text-sm transition-all" data-bim="5d">
                        5D Cost
                    </button>
                    <button class="bim-tab-btn px-4 py-2 rounded-xl border border-white/10 bg-slate-900/40 text-slate-400 hover:text-white font-bold text-sm transition-all" data-bim="6d">
                        6D Lifecycle
                    </button>
                    <button class="bim-tab-btn px-4 py-2 rounded-xl border border-white/10 bg-slate-900/40 text-slate-400 hover:text-white font-bold text-sm transition-all" data-bim="7d">
                        7D Digital Twin
                    </button>
                </div>

                <!-- Dimension Panels -->
                <div class="max-w-4xl mx-auto">
                    <!-- 2D Panel -->
                    <div id="bim-panel-2d" class="bim-detail-panel block">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center bg-slate-900/60 p-8 rounded-2xl border border-white/10">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-wider text-cyan-400">Dimension 2D</span>
                                <h3 class="font-display font-extrabold text-2xl text-white mt-1 mb-3">Good For Construction (GFC)</h3>
                                <p class="text-slate-300 text-sm leading-relaxed mb-4">
                                    Precision 2D construction drawings generated directly from verified 3D models, eliminating drafting inconsistencies and on-site clashes.
                                </p>
                                <ul class="space-y-2 text-xs text-slate-400">
                                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i> Full MEP single-line and double-line schematics</li>
                                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i> Clear ceiling height clearance checks</li>
                                </ul>
                            </div>
                            <div class="rounded-xl overflow-hidden border border-white/10 bg-slate-950 p-4">
                                <div class="font-mono text-xs text-cyan-300 mb-2">// 2D GFC Extraction</div>
                                <div class="text-xs text-slate-400 space-y-1">
                                    <div>[STATUS] Coordinated MEP Overlay: 100%</div>
                                    <div>[OUTPUT] Electrical Schematics & DB Schedules</div>
                                    <div>[OUTPUT] HVAC Duct & Pipe Sections</div>
                                    <div>[OUTPUT] Plumbing Risers & Invert Levels</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3D Panel -->
                    <div id="bim-panel-3d" class="bim-detail-panel hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center bg-slate-900/60 p-8 rounded-2xl border border-white/10">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-wider text-cyan-400">Dimension 3D</span>
                                <h3 class="font-display font-extrabold text-2xl text-white mt-1 mb-3">Integrated Parametric BIM</h3>
                                <p class="text-slate-300 text-sm leading-relaxed mb-4">
                                    Full clash detection between Architecture, Structure, HVAC, Electrical, PHE and Fire Fighting before concrete is poured.
                                </p>
                                <ul class="space-y-2 text-xs text-slate-400">
                                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i> Navisworks multi-trade clash resolution</li>
                                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i> Accurate dynamic Bill of Quantities (BOQ)</li>
                                </ul>
                            </div>
                            <div class="rounded-xl overflow-hidden border border-white/10 bg-slate-950 p-4">
                                <div class="font-mono text-xs text-cyan-300 mb-2">// 3D Parametric Clash Engine</div>
                                <div class="text-xs text-slate-400 space-y-1">
                                    <div>[RESOLVED] Beam vs Chilled Water Pipe: 0 Clashes</div>
                                    <div>[RESOLVED] Duct vs Cable Tray Clearance: OK</div>
                                    <div>[TOLERANCE] Hard Clashes: 0 | Soft Clashes: 0</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4D Panel -->
                    <div id="bim-panel-4d" class="bim-detail-panel hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center bg-slate-900/60 p-8 rounded-2xl border border-white/10">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-wider text-cyan-400">Dimension 4D</span>
                                <h3 class="font-display font-extrabold text-2xl text-white mt-1 mb-3">Time & Construction Scheduling</h3>
                                <p class="text-slate-300 text-sm leading-relaxed mb-4">
                                    Interactive 4D Gantt sequencing showing visual construction progression, contractor mobilization, and milestone readiness.
                                </p>
                                <ul class="space-y-2 text-xs text-slate-400">
                                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i> Work breakdown structure synchronized with 3D nodes</li>
                                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i> Early detection of installation bottlenecks</li>
                                </ul>
                            </div>
                            <div class="rounded-xl overflow-hidden border border-white/10 bg-slate-950 p-4">
                                <div class="font-mono text-xs text-cyan-300 mb-2">// 4D Time Simulation</div>
                                <div class="text-xs text-slate-400 space-y-1">
                                    <div>[PHASE 1] Basements & Risers: Week 1-12</div>
                                    <div>[PHASE 2] Plant Room & DG Sets: Week 13-20</div>
                                    <div>[PHASE 3] Floor-by-Floor Fit-out: Week 21-36</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 5D Panel -->
                    <div id="bim-panel-5d" class="bim-detail-panel hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center bg-slate-900/60 p-8 rounded-2xl border border-white/10">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-wider text-cyan-400">Dimension 5D</span>
                                <h3 class="font-display font-extrabold text-2xl text-white mt-1 mb-3">Cost Modeling & BOM</h3>
                                <p class="text-slate-300 text-sm leading-relaxed mb-4">
                                    Real-time cost derivation directly connected to model geometry. Exact Bill of Materials (BOM), contractor cash flow curves, and variation control.
                                </p>
                                <ul class="space-y-2 text-xs text-slate-400">
                                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i> Zero-waste material procurement lists</li>
                                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i> Dynamic progressive billing validation</li>
                                </ul>
                            </div>
                            <div class="rounded-xl overflow-hidden border border-white/10 bg-slate-950 p-4">
                                <div class="font-mono text-xs text-cyan-300 mb-2">// 5D Real-Time Financials</div>
                                <div class="text-xs text-slate-400 space-y-1">
                                    <div>[METRIC] Material Deviation Tolerance: &lt; 1.5%</div>
                                    <div>[TRACKER] Automated Bill of Quantities (BOQ)</div>
                                    <div>[AUDIT] Contractor Milestone Verification</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6D Panel -->
                    <div id="bim-panel-6d" class="bim-detail-panel hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center bg-slate-900/60 p-8 rounded-2xl border border-white/10">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-wider text-cyan-400">Dimension 6D</span>
                                <h3 class="font-display font-extrabold text-2xl text-white mt-1 mb-3">Sustainability & Lifecycle</h3>
                                <p class="text-slate-300 text-sm leading-relaxed mb-4">
                                    Comprehensive whole-life carbon and energy consumption analysis to achieve Platinum / Gold certifications and reduced operating expenses.
                                </p>
                                <ul class="space-y-2 text-xs text-slate-400">
                                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i> Daylight & solar heat gain modeling</li>
                                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i> Annualized kWh and water consumption curves</li>
                                </ul>
                            </div>
                            <div class="rounded-xl overflow-hidden border border-white/10 bg-slate-950 p-4">
                                <div class="font-mono text-xs text-cyan-300 mb-2">// 6D Energy & Carbon Analysis</div>
                                <div class="text-xs text-slate-400 space-y-1">
                                    <div>[STANDARD] ECBC & ASHRAE 90.1 Compliance</div>
                                    <div>[REDUCTION] OPEX Energy Savings: ~28%</div>
                                    <div>[RATING] IGBC / LEED Platinum Pathway</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 7D Panel -->
                    <div id="bim-panel-7d" class="bim-detail-panel hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center bg-slate-900/60 p-8 rounded-2xl border border-white/10">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-wider text-cyan-400">Dimension 7D</span>
                                <h3 class="font-display font-extrabold text-2xl text-white mt-1 mb-3">Asset Management & Digital Twin</h3>
                                <p class="text-slate-300 text-sm leading-relaxed mb-4">
                                    Live operational digital twins connected to building BMS sensors, providing facility managers predictive maintenance alerts and warranty registries.
                                </p>
                                <ul class="space-y-2 text-xs text-slate-400">
                                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i> Complete As-Built asset telemetry</li>
                                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i> IoT feedback loops for chiller & pump longevity</li>
                                </ul>
                            </div>
                            <div class="rounded-xl overflow-hidden border border-white/10 bg-slate-950 p-4">
                                <div class="font-mono text-xs text-cyan-300 mb-2">// 7D Digital Twin Telemetry</div>
                                <div class="text-xs text-slate-400 space-y-1">
                                    <div>[STATUS] Live Sensor Feeds: Online</div>
                                    <div>[PREDICTION] Chiller 2 Bearing Service in 42 Days</div>
                                    <div>[FACILITY] O&M Manuals Linked Directly to Assets</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MARQUEE PROJECTS SHOWCASE (FILTERABLE PORTFOLIO WITH REAL PHOTOS) -->
        <section id="projects" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span class="text-cyan-400 font-bold uppercase tracking-widest text-xs">Track Record</span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-5xl text-white tracking-tight mt-1">
                        Landmark Projects Delivered
                    </h2>
                </div>
                <p class="text-slate-400 text-sm md:text-base max-w-md mt-4 md:mt-0">
                    A curated selection from 800+ projects spanning airports, luxury hospitality, townships, hospitals, and national infrastructure.
                </p>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap items-center gap-2 mb-10">
                <button class="project-filter-btn px-4 py-2 rounded-full font-bold text-xs bg-cyan-500 text-slate-950 shadow-[0_0_20px_rgba(6,182,212,0.5)] transition-all" data-filter="all">
                    All Landmark Works
                </button>
                <button class="project-filter-btn px-4 py-2 rounded-full font-bold text-xs bg-slate-900/80 text-slate-300 hover:bg-slate-800 transition-all border border-white/10" data-filter="aviation">
                    Aviation & Airports
                </button>
                <button class="project-filter-btn px-4 py-2 rounded-full font-bold text-xs bg-slate-900/80 text-slate-300 hover:bg-slate-800 transition-all border border-white/10" data-filter="hospitality">
                    Hotels & Resorts
                </button>
                <button class="project-filter-btn px-4 py-2 rounded-full font-bold text-xs bg-slate-900/80 text-slate-300 hover:bg-slate-800 transition-all border border-white/10" data-filter="townships">
                    Townships & Cities
                </button>
                <button class="project-filter-btn px-4 py-2 rounded-full font-bold text-xs bg-slate-900/80 text-slate-300 hover:bg-slate-800 transition-all border border-white/10" data-filter="healthcare">
                    Hospitals & Healthcare
                </button>
                <button class="project-filter-btn px-4 py-2 rounded-full font-bold text-xs bg-slate-900/80 text-slate-300 hover:bg-slate-800 transition-all border border-white/10" data-filter="sports">
                    Sports & Stadiums
                </button>
                <button class="project-filter-btn px-4 py-2 rounded-full font-bold text-xs bg-slate-900/80 text-slate-300 hover:bg-slate-800 transition-all border border-white/10" data-filter="railways">
                    Railways & Tunnels
                </button>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- 1. Jewar Airport -->
                <div class="project-card glass-card rounded-3xl overflow-hidden flex flex-col group" data-category="aviation">
                    <div class="relative h-60 overflow-hidden bg-slate-900">
                        <img src="{{ asset('images/projects/pdf_img_139_1400x569.jpg') }}" alt="Jewar International Airport" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-cyan-400 border border-cyan-500/30 text-[10px] font-bold uppercase tracking-wider">
                            Aviation Flagship
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display font-bold text-xl text-white group-hover:text-cyan-400 transition-colors">
                                Noida International Airport (Jewar)
                            </h3>
                            <p class="text-slate-400 text-xs mt-2 leading-relaxed">
                                Complete IBMS, PAVA, FIDS, Access Control, CCTV, Security, DAS, TETRA radio and Airport Command integration.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-white/10 flex items-center justify-between text-xs text-slate-400">
                            <span>Location: Jewar, UP</span>
                            <span class="text-cyan-400 font-semibold">Flagship Airport</span>
                        </div>
                    </div>
                </div>

                <!-- 2. Maldives Airport -->
                <div class="project-card glass-card rounded-3xl overflow-hidden flex flex-col group" data-category="aviation">
                    <div class="relative h-60 overflow-hidden bg-slate-900">
                        <img src="{{ asset('images/projects/pdf_img_138_817x332.jpg') }}" alt="Hanimaadhoo International Airport Maldives" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-cyan-400 border border-cyan-500/30 text-[10px] font-bold uppercase tracking-wider">
                            International Project
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display font-bold text-xl text-white group-hover:text-cyan-400 transition-colors">
                                Hanimaadhoo Int'l Airport, Maldives
                            </h3>
                            <p class="text-slate-400 text-xs mt-2 leading-relaxed">
                                Complete ICT, CCTV, FIDS, PAVA, Access Control, Security, DAS and TETRA systems for international airport expansion.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-white/10 flex items-center justify-between text-xs text-slate-400">
                            <span>Location: Maldives</span>
                            <span class="text-cyan-400 font-semibold">Overseas Scope</span>
                        </div>
                    </div>
                </div>

                <!-- 3. Omaxe Amritsar Hotel -->
                <div class="project-card glass-card rounded-3xl overflow-hidden flex flex-col group" data-category="hospitality">
                    <div class="relative h-60 overflow-hidden bg-slate-900">
                        <img src="{{ asset('images/projects/pdf_img_61_662x447.jpg') }}" alt="Omaxe Amritsar Hotel 746 Keys" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-amber-400 border border-amber-500/30 text-[10px] font-bold uppercase tracking-wider">
                            Hospitality · 746 Keys
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display font-bold text-xl text-white group-hover:text-amber-400 transition-colors">
                                Omaxe Amritsar Luxury Hotel
                            </h3>
                            <p class="text-slate-400 text-xs mt-2 leading-relaxed">
                                Client: Omaxe Limited. 746 keys mega-hotel MEP, central chiller plant, high-pressure hot water distribution and NBC fire protection.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-white/10 flex items-center justify-between text-xs text-slate-400">
                            <span>Client: Omaxe Ltd</span>
                            <span class="text-amber-400 font-semibold">746 Keys</span>
                        </div>
                    </div>
                </div>

                <!-- 4. Omaxe Amritsar Township (1,000 Acres) -->
                <div class="project-card glass-card rounded-3xl overflow-hidden flex flex-col group" data-category="townships">
                    <div class="relative h-60 overflow-hidden bg-slate-900">
                        <img src="{{ asset('images/projects/pdf_img_1_874x765.jpg') }}" alt="Omaxe Amritsar Township" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-emerald-400 border border-emerald-500/30 text-[10px] font-bold uppercase tracking-wider">
                            Megastructure · 1,000 Acres
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display font-bold text-xl text-white group-hover:text-emerald-400 transition-colors">
                                Omaxe Amritsar Integrated Township
                            </h3>
                            <p class="text-slate-400 text-xs mt-2 leading-relaxed">
                                Complete infrastructure master planning: 33KV external electrical grid, bulk water supply, underground sewage networks, and stormwater detention.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-white/10 flex items-center justify-between text-xs text-slate-400">
                            <span>Scale: 1,000 Acres</span>
                            <span class="text-emerald-400 font-semibold">Master Plan</span>
                        </div>
                    </div>
                </div>

                <!-- 5. Dharamshala International Cricket Stadium -->
                <div class="project-card glass-card rounded-3xl overflow-hidden flex flex-col group" data-category="sports">
                    <div class="relative h-60 overflow-hidden bg-slate-900">
                        <img src="{{ asset('images/projects/pdf_img_94_662x447.jpg') }}" alt="International Cricket Stadium Dharamshala" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-sky-400 border border-sky-500/30 text-[10px] font-bold uppercase tracking-wider">
                            International Sports Arena
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display font-bold text-xl text-white group-hover:text-sky-400 transition-colors">
                                Dharamshala Cricket Stadium
                            </h3>
                            <p class="text-slate-400 text-xs mt-2 leading-relaxed">
                                High-altitude stadium MEP services, floodlight substation power distribution, crowd safety fire protection, and rapid turf drainage.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-white/10 flex items-center justify-between text-xs text-slate-400">
                            <span>Location: HP, India</span>
                            <span class="text-sky-400 font-semibold">HPCA Stadium</span>
                        </div>
                    </div>
                </div>

                <!-- 6. Oncology Dept - Kailash & Rockland Hospitals -->
                <div class="project-card glass-card rounded-3xl overflow-hidden flex flex-col group" data-category="healthcare">
                    <div class="relative h-60 overflow-hidden bg-slate-900">
                        <img src="{{ asset('images/projects/pdf_img_51_474x520.jpg') }}" alt="Oncology Department Kailash Hospital" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-red-400 border border-red-500/30 text-[10px] font-bold uppercase tracking-wider">
                            Critical Healthcare
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display font-bold text-xl text-white group-hover:text-red-400 transition-colors">
                                Kailash & Rockland Hospital Oncology
                            </h3>
                            <p class="text-slate-400 text-xs mt-2 leading-relaxed">
                                Architect: Sandal Kapoor. Medical gas piping, cleanroom positive pressure HVAC, isolated electrical earthing, and radiation shielding coordination.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-white/10 flex items-center justify-between text-xs text-slate-400">
                            <span>Location: Dehradun & Manesar</span>
                            <span class="text-red-400 font-semibold">Oncology Centers</span>
                        </div>
                    </div>
                </div>

                <!-- 7. Rishikesh to Karnaprayag Rail Tunnel -->
                <div class="project-card glass-card rounded-3xl overflow-hidden flex flex-col group" data-category="railways">
                    <div class="relative h-60 overflow-hidden bg-slate-900">
                        <img src="{{ asset('images/projects/pdf_img_156_1214x750.jpg') }}" alt="Rishikesh to Karnaprayag Rail Tunnel" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-indigo-400 border border-indigo-500/30 text-[10px] font-bold uppercase tracking-wider">
                            Tunnels · 125 KM Rail
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display font-bold text-xl text-white group-hover:text-indigo-400 transition-colors">
                                Rishikesh to Karnaprayag Rail Tunnel
                            </h3>
                            <p class="text-slate-400 text-xs mt-2 leading-relaxed">
                                125 km critical mountain rail link. Tender engineering: Tunnel ICT, emergency telecom, LTE, emergency call help points, and PAVA systems.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-white/10 flex items-center justify-between text-xs text-slate-400">
                            <span>Scope: 125 km Link</span>
                            <span class="text-indigo-400 font-semibold">National Project</span>
                        </div>
                    </div>
                </div>

                <!-- 8. Coca-Cola Factory (1,000,000 Sq Ft) -->
                <div class="project-card glass-card rounded-3xl overflow-hidden flex flex-col group" data-category="sports">
                    <div class="relative h-60 overflow-hidden bg-slate-900">
                        <img src="{{ asset('images/projects/pdf_img_84_662x447.jpg') }}" alt="Coca Cola Mega Factory 65 Acres" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-teal-400 border border-teal-500/30 text-[10px] font-bold uppercase tracking-wider">
                            Industrial · 65 Acres
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display font-bold text-xl text-white group-hover:text-teal-400 transition-colors">
                                Coca-Cola Mega-Manufacturing Plant
                            </h3>
                            <p class="text-slate-400 text-xs mt-2 leading-relaxed">
                                1,000,000 sq.ft built-up area across 65 acres. Heavy industrial power distribution, process water piping, industrial fire deluge, and effluent treatment.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-white/10 flex items-center justify-between text-xs text-slate-400">
                            <span>Scale: 1,000,000 Sq. Ft.</span>
                            <span class="text-teal-400 font-semibold">Industrial Plant</span>
                        </div>
                    </div>
                </div>

                <!-- 9. Kanpur Integrated Township (250 Acres) -->
                <div class="project-card glass-card rounded-3xl overflow-hidden flex flex-col group" data-category="townships">
                    <div class="relative h-60 overflow-hidden bg-slate-900">
                        <img src="{{ asset('images/projects/pdf_img_4_764x493.jpg') }}" alt="Kanpur Township 250 Acres" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-amber-400 border border-amber-500/30 text-[10px] font-bold uppercase tracking-wider">
                            Township · 250 Acres
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-display font-bold text-xl text-white group-hover:text-amber-400 transition-colors">
                                Kanpur Mega Township
                            </h3>
                            <p class="text-slate-400 text-xs mt-2 leading-relaxed">
                                Architect: Arinem Consultant. 250 acres smart township master layout, high-voltage substations, zero-liquid discharge STP, and campus lighting.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-white/10 flex items-center justify-between text-xs text-slate-400">
                            <span>Scale: 250 Acres</span>
                            <span class="text-amber-400 font-semibold">Smart Township</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PAN-INDIA & OVERSEAS FOOTPRINT MATRIX -->
        <section id="footprint" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="glass-card rounded-3xl p-8 sm:p-12 border border-amber-500/20 relative overflow-hidden">
                <div class="text-center max-w-3xl mx-auto mb-10">
                    <span class="text-amber-400 font-bold uppercase tracking-widest text-xs">Nationwide Reach</span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-5xl text-white tracking-tight mt-1 mb-4">
                        Project Footprint Across 60+ Cities
                    </h2>
                    <p class="text-slate-300 text-sm sm:text-base">
                        800+ projects delivered seamlessly with on-site deployment, assembly-line delivery teams, and digital twin remote tracking.
                    </p>
                </div>

                <!-- Region Selector Tabs -->
                <div class="flex flex-wrap items-center justify-center gap-2 mb-8">
                    <button class="region-tab-btn px-4 py-2 rounded-xl border border-amber-400 bg-amber-400/10 text-amber-300 font-bold text-xs uppercase transition-all" data-region="west">
                        West (15 Cities)
                    </button>
                    <button class="region-tab-btn px-4 py-2 rounded-xl border border-white/10 bg-slate-900/40 text-slate-400 hover:text-white font-bold text-xs uppercase transition-all" data-region="south">
                        South (9 Cities)
                    </button>
                    <button class="region-tab-btn px-4 py-2 rounded-xl border border-white/10 bg-slate-900/40 text-slate-400 hover:text-white font-bold text-xs uppercase transition-all" data-region="north">
                        North (10 Cities)
                    </button>
                    <button class="region-tab-btn px-4 py-2 rounded-xl border border-white/10 bg-slate-900/40 text-slate-400 hover:text-white font-bold text-xs uppercase transition-all" data-region="east">
                        East (7 Cities)
                    </button>
                    <button class="region-tab-btn px-4 py-2 rounded-xl border border-white/10 bg-slate-900/40 text-slate-400 hover:text-white font-bold text-xs uppercase transition-all" data-region="overseas">
                        Overseas & International
                    </button>
                </div>

                <!-- Region Content Panels -->
                <div class="max-w-4xl mx-auto">
                    <!-- West Panel -->
                    <div id="region-west" class="region-content-panel block bg-slate-900/60 p-6 rounded-2xl border border-white/10">
                        <h4 class="font-bold text-amber-400 text-sm mb-3 uppercase tracking-wider">Western India Presence (15 Key Cities):</h4>
                        <div class="flex flex-wrap gap-2 text-xs">
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Mumbai</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Pune</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Ahmedabad</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Surat</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Navi Mumbai</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Nagpur</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Goa</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Rajkot</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Alibaug</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Karjat</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Amravati</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Gujarat Region</span>
                        </div>
                    </div>

                    <!-- South Panel -->
                    <div id="region-south" class="region-content-panel hidden bg-slate-900/60 p-6 rounded-2xl border border-white/10">
                        <h4 class="font-bold text-amber-400 text-sm mb-3 uppercase tracking-wider">Southern India Presence (9 Key Cities):</h4>
                        <div class="flex flex-wrap gap-2 text-xs">
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Bangalore</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Hyderabad</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Chennai</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Kochi (Kerala)</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Mysore</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Vizag</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Andhra Pradesh</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Tamil Nadu</span>
                        </div>
                    </div>

                    <!-- North Panel -->
                    <div id="region-north" class="region-content-panel hidden bg-slate-900/60 p-6 rounded-2xl border border-white/10">
                        <h4 class="font-bold text-amber-400 text-sm mb-3 uppercase tracking-wider">Northern India Presence (10 Key Cities):</h4>
                        <div class="flex flex-wrap gap-2 text-xs">
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">New Delhi / NCR</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Noida & Greater Noida</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Gurugram</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Jaipur</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Jammu & Kashmir</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Amritsar</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Varanasi</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Patna</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Zirakpur</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Punjab & Haryana</span>
                        </div>
                    </div>

                    <!-- East Panel -->
                    <div id="region-east" class="region-content-panel hidden bg-slate-900/60 p-6 rounded-2xl border border-white/10">
                        <h4 class="font-bold text-amber-400 text-sm mb-3 uppercase tracking-wider">Eastern & Central Presence (7+ Key Cities):</h4>
                        <div class="flex flex-wrap gap-2 text-xs">
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Bhubaneswar (Regional Office)</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Cuttack</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Kolkata</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Ranchi</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Jamshedpur</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Itanagar (Arunachal Pradesh)</span>
                        </div>
                    </div>

                    <!-- Overseas Panel -->
                    <div id="region-overseas" class="region-content-panel hidden bg-slate-900/60 p-6 rounded-2xl border border-white/10">
                        <h4 class="font-bold text-amber-400 text-sm mb-3 uppercase tracking-wider">Beyond India International Footprint:</h4>
                        <div class="flex flex-wrap gap-2 text-xs">
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200 font-semibold text-cyan-400">Hanimaadhoo International Airport (Maldives)</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200 font-semibold text-amber-400">Dawa Hotel Paro (Bhutan)</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">RIGA BHS Pre-Bid (Latvia, Europe)</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Rose Hall & Lethem (Guyana)</span>
                            <span class="px-3 py-1.5 rounded-lg bg-slate-800 text-slate-200">Solar PV Plant (Mozambique)</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- LEADERSHIP & TECHNICAL PERSONNEL -->
        <section id="leadership" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-cyan-400 font-bold uppercase tracking-widest text-xs">Engineering Excellence</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-5xl text-white tracking-tight mt-1 mb-4">
                    Leadership & Technical Personnel
                </h2>
                <p class="text-slate-400 text-base">
                    Guided by senior engineers with up to 45+ years of specialized experience in public health, fire safety, power, and high-security aviation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Shri R.N. Samal -->
                <div class="glass-card tilt-card p-6 rounded-3xl border border-white/10">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-cyan-600 to-blue-500 flex items-center justify-center font-bold text-xl text-white shadow-lg shadow-cyan-500/20">
                            RS
                        </div>
                        <div>
                            <h3 class="font-display font-bold text-lg text-white">Shri R. N. Samal</h3>
                            <span class="text-xs font-semibold text-cyan-400">Principal Consultant · 45+ Years Exp</span>
                        </div>
                    </div>
                    <p class="text-slate-300 text-xs mb-2">B.E. (Civil Engineering), Utkal University</p>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Pioneer in Plumbing, Public Health Engineering and NBC Fire Fighting Systems with over four decades of national infrastructure mastery.
                    </p>
                </div>

                <!-- Mr. Jayant Samal -->
                <div class="glass-card tilt-card p-6 rounded-3xl border border-white/10">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-blue-600 to-indigo-500 flex items-center justify-center font-bold text-xl text-white shadow-lg shadow-blue-500/20">
                            JS
                        </div>
                        <div>
                            <h3 class="font-display font-bold text-lg text-white">Mr. Jayant Samal</h3>
                            <span class="text-xs font-semibold text-cyan-400">Building Services Consultant · 18+ Years Exp</span>
                        </div>
                    </div>
                    <p class="text-slate-300 text-xs mb-2">B.E. (Mech), ITER · MBA (Material Mgmt) IIMM Delhi</p>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Leading integrated MEP township execution, advanced BIM workflows, value engineering, and high-efficiency material logistics.
                    </p>
                </div>

                <!-- Mr. Vikas Khattar -->
                <div class="glass-card tilt-card p-6 rounded-3xl border border-white/10">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-amber-600 to-orange-500 flex items-center justify-center font-bold text-xl text-white shadow-lg shadow-amber-500/20">
                            VK
                        </div>
                        <div>
                            <h3 class="font-display font-bold text-lg text-white">Mr. Vikas Khattar</h3>
                            <span class="text-xs font-semibold text-amber-400">Principal Consultant · 30+ Years Global Exp</span>
                        </div>
                    </div>
                    <p class="text-slate-300 text-xs mb-2">EXIN EPI Certified Data Centre Professional (CDCP)</p>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Global security and aviation specialist leading Jewar International Airport, command & control centers, IBMS, and critical data infrastructure.
                    </p>
                </div>

                <!-- Mr. Md. Sadiq -->
                <div class="glass-card tilt-card p-6 rounded-3xl border border-white/10">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-emerald-600 to-teal-500 flex items-center justify-center font-bold text-xl text-white">
                            MS
                        </div>
                        <div>
                            <h3 class="font-display font-bold text-lg text-white">Mr. Md. Sadiq</h3>
                            <span class="text-xs font-semibold text-emerald-400">Township Services Consultant · 19+ Years Exp</span>
                        </div>
                    </div>
                    <p class="text-slate-300 text-xs mb-2">B.Tech (Electrical Engg), Purvanchal University</p>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Specialist in 33/11 KV substations, complex power transmission, transformer grid synchronizing, and industrial low voltage networks.
                    </p>
                </div>

                <!-- Mr. Jayaprakash Kavati -->
                <div class="glass-card tilt-card p-6 rounded-3xl border border-white/10">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-sky-600 to-cyan-500 flex items-center justify-center font-bold text-xl text-white">
                            JK
                        </div>
                        <div>
                            <h3 class="font-display font-bold text-lg text-white">Mr. Jayaprakash Kavati</h3>
                            <span class="text-xs font-semibold text-sky-400">Design Engineer (PHE & Fire) · 15+ Years Exp</span>
                        </div>
                    </div>
                    <p class="text-slate-300 text-xs mb-2">B.Tech (Civil) JNTU · M.Tech (Environmental Engg) IIT Roorkee</p>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        IIT Roorkee alumnus specializing in environmental engineering, advanced hydraulic modeling, WTP/STP design, and life safety hydraulics.
                    </p>
                </div>

                <!-- Mr. Arun Mahapatra -->
                <div class="glass-card tilt-card p-6 rounded-3xl border border-white/10">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-purple-600 to-pink-500 flex items-center justify-center font-bold text-xl text-white">
                            AM
                        </div>
                        <div>
                            <h3 class="font-display font-bold text-lg text-white">Mr. Arun Mahapatra</h3>
                            <span class="text-xs font-semibold text-purple-400">HVAC Design Engineer · 25+ Years Exp</span>
                        </div>
                    </div>
                    <p class="text-slate-300 text-xs mb-2">B.Tech (Mechanical Engineering)</p>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Expert in computerized BTUH heat load calculations, central chiller plants, cleanroom air balancing, and energy-conserving ventilation.
                    </p>
                </div>
            </div>
        </section>

        <!-- WHO WE SERVE & ENGAGEMENT VALUE -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="glass-card rounded-3xl p-8 sm:p-14 border border-white/10">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-cyan-400 font-bold uppercase tracking-widest text-xs">Collaborative Framework</span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-white tracking-tight mt-1 mb-4">
                        Who We Serve
                    </h2>
                    <p class="text-slate-300 text-sm sm:text-base">
                        Tailored engineering clarity designed to accelerate every stakeholder node across the project lifecycle.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-slate-900/60 p-6 rounded-2xl border border-white/10 hover:border-cyan-500/30 transition-all">
                        <i data-lucide="compass" class="w-8 h-8 text-cyan-400 mb-4"></i>
                        <h4 class="font-display font-bold text-lg text-white mb-2">Master Architects</h4>
                        <p class="text-slate-400 text-xs leading-relaxed">
                            Coordination from schematics, ceiling height maximization, and seamless blending of MEP services without compromising architectural vision.
                        </p>
                    </div>

                    <div class="bg-slate-900/60 p-6 rounded-2xl border border-white/10 hover:border-amber-500/30 transition-all">
                        <i data-lucide="briefcase" class="w-8 h-8 text-amber-400 mb-4"></i>
                        <h4 class="font-display font-bold text-lg text-white mb-2">Promoters & Funds</h4>
                        <p class="text-slate-400 text-xs leading-relaxed">
                            CAPEX and OPEX optimization, BIM-enabled progress tracking, complete BOQ transparency, and predictable project milestones.
                        </p>
                    </div>

                    <div class="bg-slate-900/60 p-6 rounded-2xl border border-white/10 hover:border-emerald-500/30 transition-all">
                        <i data-lucide="hard-hat" class="w-8 h-8 text-emerald-400 mb-4"></i>
                        <h4 class="font-display font-bold text-lg text-white mb-2">Project Teams & PMCs</h4>
                        <p class="text-slate-400 text-xs leading-relaxed">
                            Clash-free Good For Construction (GFC) drawings, contractor onboarding visits, testing & commissioning protocols, and QA/QC guidance.
                        </p>
                    </div>

                    <div class="bg-slate-900/60 p-6 rounded-2xl border border-white/10 hover:border-purple-500/30 transition-all">
                        <i data-lucide="shield-check" class="w-8 h-8 text-purple-400 mb-4"></i>
                        <h4 class="font-display font-bold text-lg text-white mb-2">Asset & Facility Teams</h4>
                        <p class="text-slate-400 text-xs leading-relaxed">
                            7D Digital Twin handover, As-Built asset tagging, IoT telemetry, maintenance manuals, and lifelong equipment upkeep frameworks.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- OFFICES & CONTACT SECTION -->
        <section id="contact" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-cyan-400 font-bold uppercase tracking-widest text-xs">Direct Engagement</span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-5xl text-white tracking-tight mt-1 mb-6">
                        Ready to Engineer the Exceptional?
                    </h2>
                    <p class="text-slate-300 text-base leading-relaxed mb-8">
                        Whether you are planning a greenfield township, a multi-specialty healthcare facility, or high-security aviation infrastructure, our engineering leadership is ready to assist.
                    </p>

                    <!-- Office Locations Cards -->
                    <div class="space-y-4 mb-8">
                        <div class="glass-card p-5 rounded-2xl flex items-start gap-4">
                            <div class="p-3 rounded-xl bg-cyan-500/10 border border-cyan-500/30 text-cyan-400">
                                <i data-lucide="building-2" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-display font-bold text-sm text-white">Head Office — New Delhi</h4>
                                <p class="text-xs text-slate-400 mt-1">A-96/97, Ignou Road, Paryavaran Complex, New Delhi - 110030</p>
                                <p class="text-xs text-cyan-400 font-semibold mt-1">Direct: +91 95551 18555 / +91 76693 71155</p>
                            </div>
                        </div>

                        <div class="glass-card p-5 rounded-2xl flex items-start gap-4">
                            <div class="p-3 rounded-xl bg-amber-500/10 border border-amber-500/30 text-amber-400">
                                <i data-lucide="map-pin" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-display font-bold text-sm text-white">Regional Office — Bhubaneswar</h4>
                                <p class="text-xs text-slate-400 mt-1">Sashtri Nagar, Bhubaneswar, Odisha</p>
                                <p class="text-xs text-amber-400 font-semibold mt-1">Eastern Region Delivery Hub</p>
                            </div>
                        </div>
                    </div>

                    <!-- Direct Contact Buttons -->
                    <div class="flex flex-wrap gap-4">
                        <a href="https://wa.me/919555118555?text=Hello%20Techne%20Engineers%2C%20I%20would%20like%20to%20discuss%20an%20engineering%20consultancy%20requirement." target="_blank" class="px-6 py-3.5 rounded-full font-bold text-sm bg-emerald-500 hover:bg-emerald-400 text-slate-950 shadow-[0_0_20px_rgba(16,185,129,0.4)] transition-all flex items-center gap-2">
                            <i data-lucide="message-square" class="w-4 h-4"></i>
                            <span>Chat on WhatsApp</span>
                        </a>
                        <a href="tel:+919555118555" class="px-6 py-3.5 rounded-full font-semibold text-sm border border-white/20 bg-slate-900/60 hover:bg-slate-800 text-white transition-all flex items-center gap-2">
                            <i data-lucide="phone" class="w-4 h-4 text-cyan-400"></i>
                            <span>+91 95551 18555</span>
                        </a>
                    </div>
                </div>

                <!-- Instant RFP Calculator Form Card -->
                <div class="glass-card p-8 sm:p-10 rounded-3xl border border-cyan-500/30">
                    <div class="mb-6">
                        <span class="text-xs font-bold uppercase tracking-wider text-cyan-400">Engineering Inquiry</span>
                        <h3 class="font-display font-bold text-2xl text-white mt-1">Request Project Consultation</h3>
                        <p class="text-slate-400 text-xs mt-1">Share project specifications for rapid feasibility and scope breakdown.</p>
                    </div>

                    <form id="rfpForm" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1">Your Name</label>
                                <input type="text" id="rfpName" required placeholder="John Doe" class="w-full px-4 py-2.5 rounded-xl bg-slate-950/70 border border-white/10 text-white text-xs focus:border-cyan-400 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1">Phone / WhatsApp</label>
                                <input type="tel" id="rfpPhone" required placeholder="+91 98765 43210" class="w-full px-4 py-2.5 rounded-xl bg-slate-950/70 border border-white/10 text-white text-xs focus:border-cyan-400 focus:outline-none">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1">Email Address</label>
                                <input type="email" id="rfpEmail" placeholder="name@company.com" class="w-full px-4 py-2.5 rounded-xl bg-slate-950/70 border border-white/10 text-white text-xs focus:border-cyan-400 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1">Project Typology</label>
                                <select id="rfpType" class="w-full px-4 py-2.5 rounded-xl bg-slate-950/70 border border-white/10 text-white text-xs focus:border-cyan-400 focus:outline-none">
                                    <option value="Township / Real Estate">Township / Real Estate</option>
                                    <option value="Aviation & Airport">Aviation & Airport</option>
                                    <option value="Hospital & Healthcare">Hospital & Healthcare</option>
                                    <option value="Hotel & Luxury Hospitality">Hotel & Luxury Hospitality</option>
                                    <option value="Stadium & Sports Arena">Stadium & Sports Arena</option>
                                    <option value="Industrial & Data Center">Industrial & Data Center</option>
                                    <option value="Railways & Tunnels">Railways & Tunnels</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1">Approx. Built-up Area (Sq. Ft.)</label>
                                <input type="number" id="rfpArea" placeholder="e.g. 250000" class="w-full px-4 py-2.5 rounded-xl bg-slate-950/70 border border-white/10 text-white text-xs focus:border-cyan-400 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1">Project Location</label>
                                <input type="text" id="rfpLocation" placeholder="City, State" class="w-full px-4 py-2.5 rounded-xl bg-slate-950/70 border border-white/10 text-white text-xs focus:border-cyan-400 focus:outline-none">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-300 mb-2">Required Engineering Disciplines</label>
                            <div class="grid grid-cols-2 gap-2 text-xs text-slate-300">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" name="discipline" value="Public Health (PHE)" checked class="rounded border-white/20 text-cyan-500 focus:ring-0">
                                    <span>PHE / Water Supply</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" name="discipline" value="Fire Fighting & NBC" checked class="rounded border-white/20 text-cyan-500 focus:ring-0">
                                    <span>Fire Fighting & Alarm</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" name="discipline" value="Electrical & Substation" checked class="rounded border-white/20 text-cyan-500 focus:ring-0">
                                    <span>Electrical & Substation</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" name="discipline" value="HVAC & Ventilation" checked class="rounded border-white/20 text-cyan-500 focus:ring-0">
                                    <span>HVAC & Energy</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" name="discipline" value="ELV / CCTV / IBMS" class="rounded border-white/20 text-cyan-500 focus:ring-0">
                                    <span>ELV & Smart IBMS</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" name="discipline" value="BIM & 3D Coordination" class="rounded border-white/20 text-cyan-500 focus:ring-0">
                                    <span>BIM & Digital Twin</span>
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="w-full py-3.5 rounded-xl font-display font-bold text-sm bg-gradient-to-r from-cyan-500 to-blue-600 text-white shadow-[0_0_25px_rgba(6,182,212,0.4)] hover:shadow-[0_0_40px_rgba(6,182,212,0.6)] transition-all flex items-center justify-center gap-2">
                            <span>Submit RFP via Official WhatsApp</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="relative z-10 border-t border-white/10 bg-slate-950/80 backdrop-blur-xl py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/brand/techne-logo.jpg') }}" alt="Techne Logo" class="w-9 h-9 rounded-lg border border-white/20 object-cover">
                <div>
                    <span class="font-display font-bold text-white text-base">TECHNE ENGINEERS INDIA</span>
                    <span class="block text-[10px] tracking-wider text-slate-400 uppercase">Consulting Engineers for the Built Environment</span>
                </div>
            </div>

            <div class="text-xs text-slate-400 text-center md:text-right">
                <div>© {{ date('Y') }} Techne Engineers India. All Rights Reserved.</div>
                <div class="text-[11px] text-slate-400 mt-1">Evolve to Create · Since 2012 · Operating Across 60+ Cities</div>
            </div>
        </div>
    </footer>

    <!-- FLOATING QUICK ACTIONS -->
    <div class="fixed bottom-6 right-6 z-40 flex flex-col items-end gap-3">
        <!-- Floating WhatsApp -->
        <a href="https://wa.me/919555118555?text=Hello%20Techne%20Engineers%2C%20I%20would%20like%20to%20inquire%20about%20MEP%20Consultancy." target="_blank" aria-label="WhatsApp Us" class="w-13 h-13 rounded-full bg-emerald-500 text-slate-950 flex items-center justify-center shadow-[0_0_25px_rgba(16,185,129,0.5)] hover:scale-110 transition-all">
            <i data-lucide="message-circle" class="w-6 h-6"></i>
        </a>

        <!-- Back to Top Button -->
        <button id="backToTopBtn" aria-label="Back to Top" class="opacity-0 pointer-events-none translate-y-4 w-11 h-11 rounded-full bg-slate-900 border border-white/20 text-cyan-400 flex items-center justify-center shadow-xl hover:bg-slate-800 transition-all">
            <i data-lucide="arrow-up" class="w-5 h-5"></i>
        </button>
    </div>

    <!-- RFP MODAL (TRIGGERED BY ANY .open-rfp-modal BUTTON) -->
    <div id="rfpModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md">
        <div class="glass-card max-w-lg w-full p-6 sm:p-8 rounded-3xl border border-cyan-500/40 relative shadow-2xl">
            <button id="closeRfpBtn" class="absolute top-5 right-5 text-slate-400 hover:text-white p-1">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
            <div class="mb-5">
                <span class="text-[10px] font-bold uppercase tracking-wider text-cyan-400">Project Estimation</span>
                <h3 class="font-display font-bold text-xl text-white mt-0.5">Quick Project Consultation</h3>
                <p class="text-slate-400 text-xs mt-1">Directly routes your requirements to Techne Engineering Leadership.</p>
            </div>
            
            <form onsubmit="event.preventDefault(); const p = document.getElementById('modalPhone').value; const t = document.getElementById('modalType').value; window.open('https://wa.me/919555118555?text=' + encodeURIComponent('Inquiry for ' + t + '. Contact: ' + p), '_blank'); document.getElementById('rfpModal').classList.add('hidden');">
                <div class="space-y-3 mb-5">
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1">Your Contact / Phone</label>
                        <input id="modalPhone" type="text" required placeholder="+91 95551 18555" class="w-full px-4 py-2.5 rounded-xl bg-slate-950/70 border border-white/10 text-white text-xs focus:border-cyan-400 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1">Project Type</label>
                        <select id="modalType" class="w-full px-4 py-2.5 rounded-xl bg-slate-950/70 border border-white/10 text-white text-xs focus:border-cyan-400 focus:outline-none">
                            <option value="Aviation & Airport Systems">Aviation & Airport Systems</option>
                            <option value="High-Rise Township / Real Estate">High-Rise Township / Real Estate</option>
                            <option value="Hospital & Healthcare MEP">Hospital & Healthcare MEP</option>
                            <option value="Hotel & Luxury Hospitality">Hotel & Luxury Hospitality</option>
                            <option value="Stadiums & Arenas">Stadiums & Arenas</option>
                            <option value="7D BIM & Digital Twin Modeling">7D BIM & Digital Twin Modeling</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="w-full py-3 rounded-xl font-bold text-sm bg-cyan-500 hover:bg-cyan-400 text-slate-950 shadow-[0_0_20px_rgba(6,182,212,0.4)] transition-all flex items-center justify-center gap-2">
                    <span>Connect with Engineers</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- Initialize Lucide Icons & Techne Engine -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (window.lucide) {
                window.lucide.createIcons();
            }
        });
    </script>
</body>
</html>
