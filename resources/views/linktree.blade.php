<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

        <title>Relojería Universal - Tu tiempo en las mejores manos</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Instrument+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            brand: {
                                amber: '#f39c12',
                                gray: '#1a1a1a',
                                light: '#f9f9fb',
                            }
                        },
                        fontFamily: {
                            'serif': ['Cinzel', 'serif'],
                            'sans': ['Instrument Sans', 'sans-serif'],
                        }
                    }
                }
            }
        </script>

        <style>
            :root {
                --brand-amber: #f39c12;
                --brand-bg: #ffffff;
            }

            body {
                background-color: var(--brand-bg);
                color: #1a1a1a;
                overflow-x: hidden;
                font-family: 'Instrument Sans', sans-serif;
            }

            /* Subtle texture background */
            .bg-texture {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-image: url('{{ asset('images/background_light.png') }}');
                background-size: cover;
                background-position: center;
                opacity: 0.08;
                filter: blur(5px);
                z-index: -1;
            }

            .mesh-gradient {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: radial-gradient(at 0% 0%, rgba(243, 156, 18, 0.03) 0px, transparent 50%),
                            radial-gradient(at 100% 100%, rgba(243, 156, 18, 0.03) 0px, transparent 50%);
                z-index: -1;
            }

            .btn-luxury {
                background: white;
                border: 1px solid #eee;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
                transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
                position: relative;
                overflow: hidden;
            }

            .btn-luxury::after {
                content: '';
                position: absolute;
                top: 0; left: -100%;
                width: 100%; height: 100%;
                background: linear-gradient(90deg, transparent, rgba(243, 156, 18, 0.05), transparent);
                transition: 0.5s;
            }

            .btn-luxury:hover::after {
                left: 100%;
            }

            .btn-luxury:hover {
                border-color: var(--brand-amber);
                transform: translateY(-4px) scale(1.02);
                box-shadow: 0 15px 35px rgba(243, 156, 18, 0.12);
            }

            .social-btn {
                background: #fdfdfd;
                border: 1px solid #f0f0f0;
                transition: all 0.3s ease;
            }

            .social-btn:hover {
                background: white;
                border-color: var(--brand-amber);
                color: var(--brand-amber);
                transform: translateY(-2px);
            }

            .serif-title {
                font-family: 'Cinzel', serif;
                letter-spacing: 0.25em;
                font-weight: 700;
            }

            @keyframes amber-pulse {
                0% { box-shadow: 0 0 0 0 rgba(243, 156, 18, 0.4); }
                70% { box-shadow: 0 0 0 10px rgba(243, 156, 18, 0); }
                100% { box-shadow: 0 0 0 0 rgba(243, 156, 18, 0); }
            }

            .pulse-icon {
                animation: amber-pulse 2s infinite;
                border-radius: 50%;
            }

            /* Staggered Content Reveal */
            .reveal-item {
                opacity: 0;
                transform: translateY(20px);
                animation: revealFadeIn 0.8s cubic-bezier(0.23, 1, 0.32, 1) forwards;
            }

            @keyframes revealFadeIn {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .delay-1 { animation-delay: 0.1s; }
            .delay-2 { animation-delay: 0.2s; }
            .delay-3 { animation-delay: 0.3s; }
            .delay-4 { animation-delay: 0.4s; }
            .delay-5 { animation-delay: 0.5s; }
            .delay-6 { animation-delay: 0.6s; }

            .logo-eye {
                width: 70px;
                height: 40px;
                margin: 0 auto 20px;
                position: relative;
            }

            .logo-eye::before, .logo-eye::after {
                content: '';
                position: absolute;
                left: 0; right: 0;
                border: 2px solid var(--brand-amber);
                border-radius: 100% / 100%;
            }

            .logo-eye::before {
                top: -5px; height: 50px;
                clip-path: inset(0 0 50% 0);
            }

            .logo-eye::after {
                bottom: -5px; height: 50px;
                clip-path: inset(50% 0 0 0);
            }

            .logo-tick {
                position: absolute;
                top: 50%; left: 50%;
                transform: translate(-50%, -50%);
                width: 14px; height: 14px;
                border-left: 2px solid var(--brand-amber);
                border-bottom: 2px solid var(--brand-amber);
                rotate: -45deg;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="bg-texture"></div>
        <div class="mesh-gradient"></div>

        <div class="max-w-md mx-auto px-7 py-16 min-h-screen flex flex-col items-stretch">
            
            <!-- Branding -->
            <header class="text-center mb-16 reveal-item delay-1">
                <div class="logo-eye">
                    <div class="logo-tick"></div>
                </div>
                <h1 class="serif-title text-2xl uppercase mb-3 text-brand-gray">Relojería Universal</h1>
                <p class="text-[10px] uppercase tracking-[0.4em] text-gray-400 font-medium">Tu tiempo en las mejores manos</p>
            </header>

            <!-- Links Content -->
            <main class="space-y-14 flex-grow">
                
                <!-- Section 1: Contact -->
                <div class="space-y-4">
                    <a href="https://wa.me/573001169576" target="_blank" class="btn-luxury p-6 rounded-2xl flex items-center justify-between group reveal-item delay-2">
                        <div class="flex items-center space-x-5">
                            <div class="text-brand-amber">
                                <i class="fab fa-whatsapp text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-sm tracking-tight text-gray-800">Línea Comercial</h3>
                                <p class="text-[10px] text-gray-400 uppercase tracking-widest mt-0.5">Ventas y Asesoría</p>
                            </div>
                        </div>
                        <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-300 group-hover:bg-brand-amber group-hover:text-white transition-all">
                            <i class="fas fa-arrow-right text-[10px]"></i>
                        </div>
                    </a>

                    <a href="https://wa.me/573155517641" target="_blank" class="btn-luxury p-6 rounded-2xl flex items-center justify-between group reveal-item delay-3">
                        <div class="flex items-center space-x-5">
                            <div class="text-brand-amber">
                                <i class="fas fa-toolbox text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-sm tracking-tight text-gray-800">Relojeros y Negocios</h3>
                                <p class="text-[10px] text-gray-400 uppercase tracking-widest mt-0.5">Servicio Técnico</p>
                            </div>
                        </div>
                        <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-300 group-hover:bg-brand-amber group-hover:text-white transition-all">
                            <i class="fas fa-arrow-right text-[10px]"></i>
                        </div>
                    </a>

                    <a href="#" target="_blank" class="btn-luxury p-6 rounded-2xl flex items-center justify-between group reveal-item delay-4">
                        <div class="flex items-center space-x-5">
                            <div class="text-brand-amber relative">
                                <i class="fas fa-location-dot text-xl"></i>
                                <div class="absolute inset-0 bg-brand-amber/20 pulse-icon"></div>
                            </div>
                            <div>
                                <h3 class="font-bold text-sm tracking-tight text-gray-800">Ubicación del Local</h3>
                                <p class="text-[10px] text-gray-400 uppercase tracking-widest mt-0.5">Visítanos en Cali</p>
                            </div>
                        </div>
                        <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-300 group-hover:bg-brand-amber group-hover:text-white transition-all">
                            <i class="fas fa-map text-[10px]"></i>
                        </div>
                    </a>
                </div>

                <!-- Section 2: Social Discovery -->
                <div class="grid grid-cols-3 gap-3 reveal-item delay-5">
                    <a href="https://www.instagram.com/relojeriauniversalur/" target="_blank" class="social-btn py-5 rounded-2xl flex flex-col items-center justify-center space-y-2">
                        <i class="fab fa-instagram text-lg"></i>
                        <span class="text-[9px] font-bold uppercase tracking-tight">Instagram</span>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61583932522563" target="_blank" class="social-btn py-5 rounded-2xl flex flex-col items-center justify-center space-y-2">
                        <i class="fab fa-facebook-f text-lg"></i>
                        <span class="text-[9px] font-bold uppercase tracking-tight">Facebook</span>
                    </a>
                    <a href="https://www.tiktok.com/@relojeriauniversalur" target="_blank" class="social-btn py-5 rounded-2xl flex flex-col items-center justify-center space-y-2">
                        <i class="fab fa-tiktok text-lg"></i>
                        <span class="text-[9px] font-bold uppercase tracking-tight">TikTok</span>
                    </a>
                </div>

                <!-- Expertise Banner -->
                <div class="text-center py-4 reveal-item delay-6">
                    <p class="text-[11px] font-serif text-gray-400 italic tracking-wide max-w-[250px] mx-auto leading-relaxed">
                        "El repuesto exacto hace la diferencia. Excelencia técnica en cada detalle."
                    </p>
                </div>

            </main>

            <!-- Copyright -->
            <footer class="mt-auto pt-20 text-center animate-fade-in" style="animation-delay: 0.9s">
                <p class="text-[9px] text-gray-300 uppercase letter-spacing-[0.2em] mb-2 font-medium">Relojería Universal</p>
                <p class="text-[8px] text-gray-200">Desde Cali para los amantes del tiempo</p>
            </footer>

        </div>
    </body>
</html>
