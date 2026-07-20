<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta-description', 'Cidson Alguewi - L\'Astre de Lumière, créateur du Saïtonic.')">
    <title>@yield('page-title', 'CIDSON ALGUEWI') — CIDSON ALGUEWI</title>

    <meta property="og:title" content="@yield('og-title', 'CIDSON ALGUEWI — L\'Astre de Lumière')">
    <meta property="og:description" content="@yield('meta-description', 'Cidson Alguewi - L\'Astre de Lumière, créateur du Saïtonic.')">
    <meta property="og:image" content="@yield('og-image', '/img/about-p.gif')">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="fr_FR">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og-title', 'CIDSON ALGUEWI — L\'Astre de Lumière')">
    <meta name="twitter:description" content="@yield('meta-description', 'Cidson Alguewi - L\'Astre de Lumière, créateur du Saïtonic.')">
    <meta name="twitter:image" content="@yield('og-image', '/img/about-p.gif')">

    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Poppins:wght@400;500;600&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link rel="canonical" href="{{ url()->current() }}">
    @yield('head-extra')
    <link rel="stylesheet" href="/styles.css">
</head>
<body @yield('body-classes')>
    <nav class="navbar" role="navigation" aria-label="Navigation principale">
        <div class="container">
            <div class="nav-content">
                <a href="/" class="logo"><span class="logo-highlight">CIDSON</span> ALGUEWI</a>
                <div class="nav-links" id="navLinks">
                    <a href="/#home">Accueil</a>
                    <a href="/biographie" @yield('nav-bio')>Bio</a>
                    <a href="/musique" @yield('nav-musique')>Musique</a>
                    <a href="/armee-rouge" @yield('nav-armee')>Armée Rouge</a>
                    <a href="/galerie" @yield('nav-galerie')>Galerie</a>
                    <a href="/blog" @yield('nav-blog')>Blog</a>
                    <a href="/evenements" @yield('nav-evenements')>Événements</a>
                    <a href="/#contact">Contact</a>
                </div>
                <button class="menu-toggle" id="menuToggle" aria-label="Ouvrir le menu" aria-expanded="false">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    @yield('hero')

    @yield('content')

    <button class="scroll-top-btn" id="scrollTopBtn" aria-label="Retour en haut">&#8593;</button>

    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <h3 class="footer-logo">
                        <span class="logo-highlight">CIDSON</span> ALGUEWI
                    </h3>
                    <p class="footer-description">
                        L'Astre de Lumière — Créateur du Saïtonic, artiste tchadien. Chanteur, auteur-compositeur, arrangeur et producteur. La révolution musicale tchadienne vers l'international.
                    </p>
                    <div class="hashtags">
                        <span class="hashtag">Saïtonic</span>
                        <span class="hashtag">Armée Rouge</span>
                        <span class="hashtag">Cidson Alguewi</span>
                    </div>
                </div>

                <div class="footer-links">
                    <h4 class="footer-title">Navigation</h4>
                    <a href="/#home" class="footer-link">Accueil</a>
                    <a href="/biographie" class="footer-link">Bio</a>
                    <a href="/musique" class="footer-link">Musique</a>
                    <a href="/armee-rouge" class="footer-link">Armée Rouge</a>
                    <a href="/#contact" class="footer-link">Contact</a>
                </div>

                <div class="footer-social">
                    <h4 class="footer-title">Réseaux Sociaux</h4>
                    <div class="social-icons">
                        <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="YouTube">
                            <svg fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        <a href="https://www.facebook.com/share/1CivzvBDWK/" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="Facebook">
                            <svg fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/cidsonalguewi30" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="Instagram">
                            <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="https://www.tiktok.com/@cidsonalguewi" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="TikTok">
                            <svg fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 Cidson Alguewi — <a href="https://www.chelkaconcept.online/" target="_blank" rel="noopener noreferrer" class="footer-chelka-link">CHELKA CONCEPT</a>. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            menuToggle.setAttribute('aria-expanded', navLinks.classList.contains('active'));
        });
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => navLinks.classList.remove('active'));
        });

        const scrollTopBtn = document.getElementById('scrollTopBtn');
        window.addEventListener('scroll', () => {
            scrollTopBtn.style.opacity = window.pageYOffset > 300 ? '1' : '0';
            scrollTopBtn.style.visibility = window.pageYOffset > 300 ? 'visible' : 'hidden';
        });
        scrollTopBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

        document.querySelectorAll('a[href^="/#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const path = this.getAttribute('href');
                if (window.location.pathname === '/') {
                    e.preventDefault();
                    const hash = path.substring(1);
                    const target = document.querySelector(hash);
                    if (target) {
                        window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });
                    }
                }
            });
        });
    </script>

    @yield('page-scripts')
</body>
</html>



