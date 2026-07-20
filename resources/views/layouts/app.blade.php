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

    @hasSection('footer')
        @yield('footer')
    @else
    <footer class="footer">
        <div class="container">
            <div class="footer-bottom">
                <p>&copy; 2026 Cidson Alguewi — <a href="https://www.chelkaconcept.online/" target="_blank" rel="noopener noreferrer" class="footer-chelka-link">CHELKA CONCEPT</a>. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    @endif

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


