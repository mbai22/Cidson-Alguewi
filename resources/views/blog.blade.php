@extends('layouts.app')

@section('page-title', "Blog — CIDSON ALGUEWI | Actualités, Coulisses & Réflexions")
@section('meta-description', "Le blog de Cidson Alguewi : actualités musicales, coulisses du studio, réflexions sur la musique tchadienne et les Coulisses du Saïtonic.")
@section('og-title', "Blog — CIDSON ALGUEWI")
@section('og-image', '/img/hero.gif')
@section('body-classes', 'page-blog')
@section('nav-blog', 'class="active"')

@section('hero')
    <section class="page-hero page-hero-blog">
        <div class="page-hero-bg" style="background-image:url('/img/Galerie/g-3.jpg')"></div>
        <div class="page-hero-overlay"></div>
        <div class="container">
            <div class="page-hero-content">
                <p class="hero-badge">ACTUALITÉS & RÉFLEXIONS</p>
                <h1 class="hero-title">Le <span class="text-highlight">Blog</span></h1>
                <p class="hero-tagline">Coulisses, histoires de studio, réflexions sur la musique et la culture tchadienne</p>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="section section-blog">
        <div class="container">

            <div class="blog-featured">
                <article class="blog-card blog-card-featured">
                    <div class="blog-card-image">
                        <img src="/img/concert/C-2.jpg" alt="ETREIZE - Le nouvel album" loading="lazy">
                        <div class="blog-card-badge">À la une</div>
                        <div class="blog-card-date">
                            <span class="date-day">15</span>
                            <span class="date-month">Juin 2025</span>
                        </div>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-tags">
                            <span class="blog-tag">Sortie</span>
                            <span class="blog-tag">Album</span>
                        </div>
                        <h2 class="blog-card-title">ETREIZE : le nouvel album qui redéfinit le Saïtonic</h2>
                        <p class="blog-card-excerpt">
                            Après plusieurs années de travail en studio, ETREIZE voit le jour. Ce sixième album marque une nouvelle ère pour le Saïtonic, avec des sonorités plus modernes tout en préservant l'âme du Saï traditionnel tchadien. Découvrez les coulisses de cette création et les histoires qui se cachent derrière chaque titre.
                        </p>
                    </div>
                    <a href="#" class="blog-card-arrow" aria-label="Lire l'article">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
</article>
            </div>

            <div class="blog-grid">
                <article class="blog-card">
                    <div class="blog-card-image">
                        <img src="/img/concert/c-1.jpg" alt="Tourasna Festival" loading="lazy">
                        <div class="blog-card-date">
                            <span class="date-day">22</span>
                            <span class="date-month">Mars 2025</span>
                        </div>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-tags">
                            <span class="blog-tag">Concert</span>
                            <span class="blog-tag">International</span>
                        </div>
                        <h2 class="blog-card-title">Tourasna Festival : porter le Tchad sur la scène allemande</h2>
                        <p class="blog-card-excerpt">
                            Retour sur mon expérience au Tourasna Festival en Allemagne. Une occasion unique de représenter la musique tchadienne devant un public international passionné et curieux.
                        </p>
                    </div>
                    <a href="#" class="blog-card-arrow" aria-label="Lire l'article">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
</article>

                <article class="blog-card">
                    <div class="blog-card-image">
                        <img src="/img/audio-cidson.jpg" alt="Session studio" loading="lazy">
                        <div class="blog-card-date">
                            <span class="date-day">10</span>
                            <span class="date-month">Janv 2025</span>
                        </div>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-tags">
                            <span class="blog-tag">Studio</span>
                            <span class="blog-tag">Coulisses</span>
                        </div>
                        <h2 class="blog-card-title">Dans le studio : comment naît un titre Saïtonic</h2>
                        <p class="blog-card-excerpt">
                            Plongée dans mon processus créatif : de la première mélodie à la mix finale. Comment le Saï traditionnel se mêle aux beats électro pour créer un son unique.
                        </p>
                    </div>
                    <a href="#" class="blog-card-arrow" aria-label="Lire l'article">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
</article>

                <article class="blog-card">
                    <div class="blog-card-image">
                        <img src="/img/Galerie/g-5.jpg" alt="L'Armée Rouge" loading="lazy">
                        <div class="blog-card-date">
                            <span class="date-day">05</span>
                            <span class="date-month">Déc 2024</span>
                        </div>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-tags">
                            <span class="blog-tag">Communauté</span>
                            <span class="blog-tag">Armée Rouge</span>
                        </div>
                        <h2 class="blog-card-title">L'Armée Rouge : une famille, une révolution musicale</h2>
                        <p class="blog-card-excerpt">
                            Comment l'Armée Rouge est née et pourquoi cette communauté est au cœur de mon parcours. Une révolution musicale portée par la passion et l'unité.
                        </p>
                    </div>
                    <a href="#" class="blog-card-arrow" aria-label="Lire l'article">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
</article>

                <article class="blog-card">
                    <div class="blog-card-image">
                        <img src="/img/Galerie/g-1.jpg" alt="Scène tchadienne" loading="lazy">
                        <div class="blog-card-date">
                            <span class="date-day">18</span>
                            <span class="date-month">Nov 2024</span>
                        </div>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-tags">
                            <span class="blog-tag">Réflexion</span>
                            <span class="blog-tag">Culture</span>
                        </div>
                        <h2 class="blog-card-title">La scène musicale tchadienne en 2025 : où en sommes-nous ?</h2>
                        <p class="blog-card-excerpt">
                            Mon regard sur l'évolution de la musique au Tchad, les défis et les opportunités pour les artistes de nouvelle génération qui veulent se faire entendre.
                        </p>
                    </div>
                    <a href="#" class="blog-card-arrow" aria-label="Lire l'article">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
</article>

                <article class="blog-card">
                    <div class="blog-card-image">
                        <img src="/img/concert/C-3.jpg" alt="FESPAM" loading="lazy">
                        <div class="blog-card-date">
                            <span class="date-day">01</span>
                            <span class="date-month">Oct 2024</span>
                        </div>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-tags">
                            <span class="blog-tag">Souvenirs</span>
                            <span class="blog-tag">Festival</span>
                        </div>
                        <h2 class="blog-card-title">FESPAM : quand le Tchad rayonne sur le continent</h2>
                        <p class="blog-card-excerpt">
                            Souvenirs du Festival Panafricain des Arts et de la Musique au Congo. Un moment historique qui a ouvert les portes de l'international pour la musique tchadienne.
                        </p>
                    </div>
                    <a href="#" class="blog-card-arrow" aria-label="Lire l'article">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
</article>

                <article class="blog-card">
                    <div class="blog-card-image">
                        <img src="/img/Galerie/g-4.jpg" alt="Création musicale" loading="lazy">
                        <div class="blog-card-date">
                            <span class="date-day">12</span>
                            <span class="date-month">Sept 2024</span>
                        </div>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-tags">
                            <span class="blog-tag">Musique</span>
                            <span class="blog-tag">Inspiration</span>
                        </div>
                        <h2 class="blog-card-title">Le Saïtonic : un genre musical né de la fusion des cultures</h2>
                        <p class="blog-card-excerpt">
                            Comment le Saïtonic est né de la rencontre entre le Saï traditionnel, la rumba congolaise et les beats modernes. L'histoire d'un genre qui fait vibrer tout le Tchad.
                        </p>
                    </div>
                    <a href="#" class="blog-card-arrow" aria-label="Lire l'article">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
</article>
            </div>

            <div class="blog-cta" style="text-align:center;margin-top:var(--spacing-2xl);">
                <p style="color:var(--text-muted);margin-bottom:1rem;">Plus d'articles à venir. Suivez mes réseaux pour ne rien manquer.</p>
                <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
                    <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="btn btn-outline">YouTube</a>
                    <a href="https://www.facebook.com/share/1CivzvBDWK/" target="_blank" rel="noopener noreferrer" class="btn btn-outline">Facebook</a>
                    <a href="https://www.instagram.com/cidsonalguewi30" target="_blank" rel="noopener noreferrer" class="btn btn-outline">Instagram</a>
                    <a href="https://www.tiktok.com/@cidsonalguewi" target="_blank" rel="noopener noreferrer" class="btn btn-outline">TikTok</a>
                </div>
            </div>
        </div>
    </section>
@endsection





