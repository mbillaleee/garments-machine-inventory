<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'MachinaTrack') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet">

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <style>
            *, *::before, *::after {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            html, body {
                height: 100%;
                width: 100%;
                overflow-x: hidden;
            }

            body {
                font-family: 'Raleway', sans-serif;
                background: #000;
                color: #fff;
            }

            /* ── Hero ── */
            .hero {
                position: relative;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                overflow: hidden;
            }

            .hero-bg {
                position: absolute;
                inset: 0;
                background-image: url({{asset('images/hero-image.jpg')}});
                background-size: cover;
                background-position: center top;
                filter: brightness(0.42);
                z-index: 0;
                animation: subtleZoom 22s ease-in-out infinite alternate;
                will-change: transform;
            }

            @keyframes subtleZoom {
                from { transform: scale(1); }
                to   { transform: scale(1.06); }
            }

            /* Gradient overlay — bottom fade for polish */
            .hero-overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient(
                    to bottom,
                    rgba(0,0,0,0.10) 0%,
                    rgba(0,0,0,0.00) 40%,
                    rgba(0,0,0,0.35) 100%
                );
                z-index: 1;
            }

            /* ── Navbar ── */
            .hero-nav {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 1.25rem 2rem;
                z-index: 10;
            }

            .nav-logo {
                font-family: 'Bebas Neue', sans-serif;
                font-size: 1.5rem;
                letter-spacing: 0.1em;
                color: #fff;
                text-decoration: none;
                opacity: 0.92;
            }

            .nav-links {
                display: flex;
                align-items: center;
                gap: 0.75rem;
            }

            .nav-links a {
                display: inline-block;
                padding: 0.45rem 1.35rem;
                border: 1px solid rgba(255,255,255,0.38);
                border-radius: 5px;
                color: #fff;
                text-decoration: none;
                font-size: 0.78rem;
                font-weight: 500;
                letter-spacing: 0.09em;
                text-transform: uppercase;
                transition: background 0.22s, border-color 0.22s, transform 0.18s;
            }

            .nav-links a:hover {
                background: rgba(255,255,255,0.13);
                border-color: rgba(255,255,255,0.72);
                transform: translateY(-1px);
            }

            .nav-links a.btn-register {
                background: rgba(255,255,255,0.10);
                border-color: rgba(255,255,255,0.55);
            }

            .nav-links a.btn-dashboard {
                background: rgba(255,255,255,0.14);
                border-color: rgba(255,255,255,0.6);
            }

            /* Mobile hamburger */
            .nav-hamburger {
                display: none;
                flex-direction: column;
                gap: 5px;
                cursor: pointer;
                padding: 4px;
                background: none;
                border: none;
            }

            .nav-hamburger span {
                display: block;
                width: 24px;
                height: 2px;
                background: #fff;
                border-radius: 2px;
                transition: all 0.25s;
            }

            /* Mobile nav drawer */
            .mobile-nav {
                display: none;
                position: fixed;
                top: 0; left: 0; right: 0; bottom: 0;
                background: rgba(10,10,10,0.96);
                z-index: 100;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 1.5rem;
            }

            .mobile-nav.open {
                display: flex;
            }

            .mobile-nav a {
                font-size: 1.1rem;
                font-weight: 500;
                letter-spacing: 0.12em;
                text-transform: uppercase;
                color: #fff;
                text-decoration: none;
                padding: 0.65rem 2.5rem;
                border: 1px solid rgba(255,255,255,0.3);
                border-radius: 6px;
                min-width: 180px;
                text-align: center;
                transition: background 0.2s;
            }

            .mobile-nav a:hover {
                background: rgba(255,255,255,0.1);
            }

            .mobile-nav-close {
                position: absolute;
                top: 1.5rem;
                right: 1.75rem;
                background: none;
                border: none;
                color: #fff;
                font-size: 1.8rem;
                cursor: pointer;
                line-height: 1;
                opacity: 0.75;
            }

            .mobile-nav-close:hover {
                opacity: 1;
            }

            /* ── Hero Content ── */
            .hero-content {
                position: relative;
                z-index: 5;
                text-align: center;
                padding: 1.5rem;
                max-width: 780px;
                width: 100%;
                animation: fadeUp 0.9s cubic-bezier(0.22, 1, 0.36, 1) both;
            }

            @keyframes fadeUp {
                from {
                    opacity: 0;
                    transform: translateY(32px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .hero-eyebrow {
                display: inline-block;
                font-size: 0.7rem;
                font-weight: 600;
                letter-spacing: 0.22em;
                text-transform: uppercase;
                color: rgba(255,255,255,0.6);
                margin-bottom: 1rem;
                animation: fadeUp 0.9s 0.1s cubic-bezier(0.22, 1, 0.36, 1) both;
            }

            .hero-title {
                font-family: 'Bebas Neue', sans-serif;
                font-size: clamp(3rem, 8.5vw, 6.5rem);
                letter-spacing: 0.055em;
                line-height: 0.96;
                color: #fff;
                text-shadow: 0 2px 40px rgba(0,0,0,0.45);
                margin-bottom: 1.4rem;
                animation: fadeUp 0.9s 0.18s cubic-bezier(0.22, 1, 0.36, 1) both;
            }

            .hero-subtitle {
                font-size: clamp(0.88rem, 1.9vw, 1.12rem);
                font-weight: 300;
                letter-spacing: 0.03em;
                color: rgba(255,255,255,0.80);
                line-height: 1.65;
                margin-bottom: 2.5rem;
                max-width: 520px;
                margin-left: auto;
                margin-right: auto;
                animation: fadeUp 0.9s 0.28s cubic-bezier(0.22, 1, 0.36, 1) both;
            }

            .hero-actions {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 1rem;
                flex-wrap: wrap;
                animation: fadeUp 0.9s 0.38s cubic-bezier(0.22, 1, 0.36, 1) both;
            }

            .btn-portal {
                display: inline-block;
                padding: 0.85rem 2.8rem;
                border: 1.5px solid rgba(255,255,255,0.82);
                border-radius: 50px;
                color: #fff;
                text-decoration: none;
                font-size: 0.76rem;
                font-weight: 600;
                letter-spacing: 0.2em;
                text-transform: uppercase;
                transition: background 0.28s, border-color 0.28s, transform 0.22s, box-shadow 0.28s;
                background: transparent;
            }

            .btn-portal:hover {
                background: rgba(255,255,255,0.14);
                border-color: #fff;
                transform: translateY(-2px);
                box-shadow: 0 10px 28px rgba(0,0,0,0.35);
            }

            .btn-portal:active {
                transform: translateY(0);
            }

            .btn-learn {
                display: inline-block;
                padding: 0.85rem 2.2rem;
                color: rgba(255,255,255,0.65);
                text-decoration: none;
                font-size: 0.76rem;
                font-weight: 500;
                letter-spacing: 0.14em;
                text-transform: uppercase;
                border-bottom: 1px solid rgba(255,255,255,0.3);
                transition: color 0.2s, border-color 0.2s;
            }

            .btn-learn:hover {
                color: rgba(255,255,255,0.95);
                border-color: rgba(255,255,255,0.7);
            }

            /* ── Footer strip ── */
            .hero-footer {
                position: absolute;
                bottom: 1.75rem;
                left: 50%;
                transform: translateX(-50%);
                z-index: 5;
                display: flex;
                align-items: center;
                gap: 2rem;
                opacity: 0.5;
                font-size: 0.68rem;
                font-weight: 500;
                letter-spacing: 0.15em;
                text-transform: uppercase;
                color: #fff;
                white-space: nowrap;
            }

            .hero-footer-dot {
                width: 3px;
                height: 3px;
                background: rgba(255,255,255,0.5);
                border-radius: 50%;
            }

            /* Scroll cue */
            .scroll-cue {
                position: absolute;
                bottom: 2rem;
                left: 50%;
                transform: translateX(-50%);
                z-index: 5;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 6px;
                opacity: 0.45;
                animation: scrollBob 2s ease-in-out infinite;
            }

            @keyframes scrollBob {
                0%, 100% { transform: translateX(-50%) translateY(0); }
                50%       { transform: translateX(-50%) translateY(6px); }
            }

            .scroll-cue span {
                font-size: 0.62rem;
                letter-spacing: 0.2em;
                text-transform: uppercase;
                color: #fff;
            }

            .scroll-arrow {
                width: 1px;
                height: 30px;
                background: rgba(255,255,255,0.5);
                position: relative;
            }

            /* ── Responsive ── */
            @media (max-width: 768px) {
                .hero-nav {
                    padding: 1rem 1.25rem;
                }

                .nav-links {
                    display: none;
                }

                .nav-hamburger {
                    display: flex;
                }

                .hero-content {
                    padding: 1.25rem;
                }

                .hero-title {
                    font-size: clamp(2.6rem, 12vw, 4.5rem);
                    margin-bottom: 1rem;
                }

                .hero-subtitle {
                    font-size: 0.88rem;
                    margin-bottom: 2rem;
                }

                .btn-portal {
                    padding: 0.8rem 2.2rem;
                    font-size: 0.72rem;
                }

                .hero-footer {
                    display: none;
                }

                .scroll-cue {
                    display: none;
                }
            }

            @media (max-width: 400px) {
                .hero-title {
                    font-size: 2.5rem;
                }

                .hero-actions {
                    flex-direction: column;
                    gap: 0.75rem;
                }
            }
        </style>
    </head>

    <body>

        {{-- ── Mobile Nav Drawer ── --}}
        <div class="mobile-nav" id="mobileNav">
            <button class="mobile-nav-close" onclick="closeMobileNav()" aria-label="Close menu">&times;</button>

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif

            @auth
            <a href="{{ url('/admin/dashboard') }}">My Portal</a>
            @endauth
        </div>

        {{-- ── Hero Section ── --}}
        <section class="hero">
            <div class="hero-bg" aria-hidden="true"></div>
            <div class="hero-overlay" aria-hidden="true"></div>

            {{-- Navbar --}}
            <nav class="hero-nav" aria-label="Main navigation">
                <a href="{{ url('/') }}" class="nav-logo">MachinaTrack</a>

                <div class="nav-links">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/admin/dashboard') }}" class="btn-dashboard">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}">Log in</a>
                        @endauth
                    @endif
                </div>

                <button class="nav-hamburger" onclick="openMobileNav()" aria-label="Open menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>

            {{-- Content --}}
            <div class="hero-content">
                <span class="hero-eyebrow">Garment Industry Management</span>
                <h1 class="hero-title">MachinaTrack<br>v1.0.0</h1>
                <p class="hero-subtitle">Manage all Garment Industry related functions in one place</p>

                <div class="hero-actions">
                    @auth
                    <a href="{{ url('/admin/dashboard') }}" class="btn-portal">My Portal</a>
                    @else
                    <a href="{{ route('login') }}" class="btn-portal">Login</a>
                    @endauth
                </div>
            </div>

            {{-- Scroll Cue --}}
            <div class="scroll-cue" aria-hidden="true">
                <span>Scroll</span>
                <div class="scroll-arrow"></div>
            </div>

            {{-- Footer strip --}}
            <div class="hero-footer" aria-hidden="true">
                <span>MachinaTrack</span>
                <div class="hero-footer-dot"></div>
                <span>v1.0.0</span>
                <div class="hero-footer-dot"></div>
                <span>Garment ERP</span>
            </div>
        </section>

        <script>
            function openMobileNav() {
                document.getElementById('mobileNav').classList.add('open');
                document.body.style.overflow = 'hidden';
            }
            function closeMobileNav() {
                document.getElementById('mobileNav').classList.remove('open');
                document.body.style.overflow = '';
            }
            document.getElementById('mobileNav').addEventListener('click', function(e) {
                if (e.target === this) closeMobileNav();
            });
        </script>
    </body>
</html>