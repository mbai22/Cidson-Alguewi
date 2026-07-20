@extends('layouts.app')

@section('head-extra')
    <link rel="preload" as="image" href="/img/hero.gif">
@endsection

@section('page-title', "Cidson Alguewi - L'Astre de Lumière | Créateur du Saïtonic")
@section('meta-description', "Cidson Alguewi - L'Astre de Lumière, créateur du Saïtonic. Chanteur, auteur-compositeur, arrangeur et producteur tchadien. Découvrez sa musique, son parcours et l'Armée Rouge.")
@section('og-title', 'CIDSON ALGUEWI — L\'Astre de Lumière')
@section('og-image', '/img/hero.gif')

@section('hero')
    <section id="home" class="hero-section">
        <div class="hero-background-image"></div>
        <div class="hero-overlay"></div>

        <div class="container hero-container">
            <div class="hero-content">
                <p class="hero-badge">L'ASTRE DE LUMIÈRE</p>
                <h1 class="hero-title">CIDSON ALGUEWI</h1>
                <p class="hero-tagline">Le Maître d'Œuvre du <span class="text-highlight">Saïtonic</span></p>

                <div class="hero-buttons">
                    <a href="/musique" class="btn btn-primary">Écouter la Musique</a>
                    <a href="/biographie" class="btn btn-outline">Découvrir le Parcours</a>
                </div>
            </div>
        </div>

        <div class="hero-stats-container">
            <div class="container">
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">2005</span>
                        <span class="stat-label">Début</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">6</span>
                        <span class="stat-label">Albums</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">5+</span>
                        <span class="stat-label">Singles</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">3</span>
                        <span class="stat-label">Awards</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">ARMÉE</span>
                        <span class="stat-label">ROUGE</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">SAÏTONIC</span>
                        <span class="stat-label">Style</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section id="about" class="section section-about">
        <div class="container">
            <div class="about-grid">
                <div class="about-text">
                    <h2 class="about-title">À PROPOS</h2>
                    <p class="about-paragraph">
                        <strong>CIDSON « L'Astre de Lumière »</strong>, de son vrai nom <strong>Nguemourou Marouf Placide</strong>, né le 13 juillet 1986 à N'Djaména, est une figure majeure de la scène musicale contemporaine au Tchad. Artiste pluridisciplinaire — chanteur, auteur-compositeur, interprète, arrangeur et producteur — il est le créateur du <strong>Saïtonic</strong>, un genre hybride qui fusionne le Saï traditionnel tchadien avec des sonorités électro, Bazaga et Rumba.
                    </p>

                    <a href="/biographie" class="btn btn-outline btn-bio">Lire la Biographie Complète</a>
                </div>

                <div class="about-visual">
                    <div class="about-image-wrapper">
                        <div class="about-image-square">
                            <img src="./img/about-p.gif" alt="Cidson Alguewi" loading="lazy" class="about-image" onerror="this.src='https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=600&h=600&fit=crop'; this.onerror=null;">
                        </div>
                        <button class="about-play-button" data-video="img/official salama.mp4">
                            <svg class="play-icon-large" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="music" class="section section-music">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Ma <span class="text-highlight">Musique</span></h2>
                <p class="section-subtitle">Singles, albums et hits — découvrez ma discographie complète</p>
                <div class="title-underline"></div>
            </div>

            <div class="music-grid">
                <div class="music-card">
                    <div class="music-image">
                        <img src="./img/audio-cidson.jpg" alt="Saïtonic Mondiale" loading="lazy">
                        <div class="music-overlay">
                            <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="play-button-music">
                                <svg class="play-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="music-content">
                        <h4 class="music-title">Saïtonic Mondiale</h4>
                        <p class="music-year">Hit Saïtonic</p>
                    </div>
                </div>

                <div class="music-card">
                    <div class="music-image">
                        <img src="./img/audio-cidson-2.jpg" alt="Sao du Tchad" loading="lazy">
                        <div class="music-overlay">
                            <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="play-button-music">
                                <svg class="play-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="music-content">
                        <h4 class="music-title">Sao du Tchad</h4>
                        <p class="music-year">Classique Tchadien</p>
                    </div>
                </div>

                <div class="music-card">
                    <div class="music-image">
                        <img src="./img/audio-cidson-3.jpg" alt="Love Me" loading="lazy">
                        <div class="music-overlay">
                            <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="play-button-music">
                                <svg class="play-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="music-content">
                        <h4 class="music-title">Love Me</h4>
                        <p class="music-year">Romantique</p>
                    </div>
                </div>
            </div>

            <div style="text-align:center;margin-top:var(--spacing-xl);">
                <a href="/musique" class="btn btn-outline">Voir toute la Discographie</a>
            </div>
        </div>
    </section>

    <section id="gallery" class="section section-gallery">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Galerie <span class="text-highlight">Photos</span></h2>
                <p class="section-subtitle">Moments capturés sur scène et en studio</p>
                <div class="title-underline"></div>
            </div>

            <div class="gallery-preview">
                <div class="gallery-preview-grid">
                    <div class="gallery-preview-item">
                        <img src="./img/Galerie/g-1.jpg" alt="Cidson en concert" loading="lazy">
                    </div>
                    <div class="gallery-preview-item">
                        <img src="./img/Galerie/g-2.jpg" alt="Cidson en studio" loading="lazy">
                    </div>
                    <div class="gallery-preview-item">
                        <img src="./img/Galerie/g-3.jpg" alt="Cidson backstage" loading="lazy">
                    </div>
                    <div class="gallery-preview-item">
                        <img src="./img/Galerie/g-4.jpg" alt="Cidson sur scène" loading="lazy">
                    </div>
                </div>
                <div class="gallery-preview-cta">
                    <a href="/galerie" class="btn btn-outline">Voir toute la Galerie</a>
                </div>
            </div>

            <div id="gallery-full" class="gallery-full" style="display:none;">
                <div class="gallery-filters">
                    <button class="filter-btn active" data-filter="all">Toutes</button>
                    <button class="filter-btn" data-filter="concerts">Concerts</button>
                    <button class="filter-btn" data-filter="studio">Studio</button>
                    <button class="filter-btn" data-filter="backstage">Backstage</button>
                </div>
                <div class="gallery-grid">
                    <div class="gallery-item" data-category="concerts">
                        <img src="./img/concert/c-1.jpg" alt="Concert 3" loading="lazy" class="gallery-image">
                    </div>
                    <div class="gallery-item" data-category="concerts">
                        <img src="./img/concert/C-2.jpg" alt="Concert 4" loading="lazy" class="gallery-image">
                    </div>
                    <div class="gallery-item" data-category="concerts">
                        <img src="./img/concert/C-3.jpg" alt="FESPAM" loading="lazy" class="gallery-image">
                    </div>
                    <div class="gallery-item" data-category="studio">
                        <img src="./img/audio-cidson.jpg" alt="Studio Session" loading="lazy" class="gallery-image">
                    </div>
                    <div class="gallery-item" data-category="backstage">
                        <img src="./img/audio-cidson-2.jpg" alt="Studio Recording" loading="lazy" class="gallery-image">
                    </div>
                    <div class="gallery-item" data-category="backstage">
                        <img src="./img/audio-cidson-3.jpg" alt="Backstage" loading="lazy" class="gallery-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="concerts" class="section section-concerts">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Concerts & <span class="text-highlight">Événements</span></h2>
                <p class="section-subtitle">Retrouvez-moi sur scène à travers le monde</p>
                <div class="title-underline"></div>
            </div>

            <div class="concerts-blog-grid">
                <article class="concert-blog-card">
                    <div class="concert-blog-image">
                        <img src="./img/concert/c-1.jpg" alt="Tourasna Festival" loading="lazy">
                        <div class="concert-blog-date-badge">
                            <span class="date-day">2025</span>
                            <span class="date-month">Tourasna</span>
                        </div>
                    </div>
                    <div class="concert-blog-content">
                        <h3 class="concert-blog-title">Tourasna Festival</h3>
                        <div class="concert-blog-meta">
                            <div class="meta-item">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Allemagne</span>
                            </div>
                            <div class="meta-item">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Festival International</span>
                            </div>
                        </div>
                        <p class="concert-blog-description">Représentation du Tchad sur la scène internationale du Tourasna Festival en Allemagne.</p>
                    </div>
                </article>

                <article class="concert-blog-card">
                    <div class="concert-blog-image">
                        <img src="./img/concert/C-2.jpg" alt="Africajarc" loading="lazy">
                        <div class="concert-blog-date-badge">
                            <span class="date-day">2023</span>
                            <span class="date-month">Africajarc</span>
                        </div>
                    </div>
                    <div class="concert-blog-content">
                        <h3 class="concert-blog-title">Festival Africajarc</h3>
                        <div class="concert-blog-meta">
                            <div class="meta-item">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>France</span>
                            </div>
                            <div class="meta-item">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Festival</span>
                            </div>
                        </div>
                        <p class="concert-blog-description">Performance au festival Africajarc en France, portant les sonorités Saïtonic sur la scène européenne.</p>
                    </div>
                </article>

                <article class="concert-blog-card">
                    <div class="concert-blog-image">
                        <img src="./img/concert/C-3.jpg" alt="FESPAM" loading="lazy">
                        <div class="concert-blog-date-badge">
                            <span class="date-day">2011</span>
                            <span class="date-month">FESPAM</span>
                        </div>
                    </div>
                    <div class="concert-blog-content">
                        <h3 class="concert-blog-title">FESPAM Congo</h3>
                        <div class="concert-blog-meta">
                            <div class="meta-item">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Congo-Brazzaville</span>
                            </div>
                            <div class="meta-item">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Festival Panafricain</span>
                            </div>
                        </div>
                        <p class="concert-blog-description">Première représentation internationale au FESPAM, festival panafricain des arts et de la musique.</p>
                    </div>
                </article>
            </div>

            <div style="text-align:center;margin-top:var(--spacing-xl);">
                <a href="/evenements" class="btn btn-outline">Voir tous les Événements</a>
            </div>
        </div>
    </section>

    <section id="awards" class="section section-awards">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Récompenses & <span class="text-highlight">Distinctions</span></h2>
                <p class="section-subtitle">Nombreuses distinctions sur le plan national et rayonnement international</p>
                <div class="title-underline"></div>
            </div>

            <div class="awards-grid">
                <div class="award-card">
                    <div class="award-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M19 5h-2V3H7v2H5c-1.1 0-2 .9-2 2v1c0 2.55 1.92 4.63 4.39 4.94.63 1.5 1.98 2.63 3.61 2.96V19H7v2h10v-2h-4v-3.1c1.63-.33 2.98-1.46 3.61-2.96C19.08 12.63 21 10.55 21 8V7c0-1.1-.9-2-2-2zM5 8V7h2v3.82C5.84 10.4 5 9.3 5 8zm14 0c0 1.3-.84 2.4-2 2.82V7h2v1z"/></svg>
                    </div>
                    <h3 class="award-title">Espoir de l'année</h3>
                    <p class="award-year">2007 — Sao Awards</p>
                    <p class="award-description">Reconnaissance comme talent émergent de la scène musicale tchadienne.</p>
                </div>

                <div class="award-card">
                    <div class="award-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/></svg>
                    </div>
                    <h3 class="award-title">Chanson de l'année</h3>
                    <p class="award-year">2008 — Sao Awards</p>
                    <p class="award-description">Pour le titre « Roméo et Juliette », succès majeur de l'année.</p>
                </div>

                <div class="award-card">
                    <div class="award-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    </div>
                    <h3 class="award-title">Meilleur artiste masculin</h3>
                    <p class="award-year">2017 — Dari Awards</p>
                    <p class="award-description">Consécration comme meilleur artiste masculin de l'année au Tchad.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="community" class="section section-community">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">L'<span class="text-highlight">Armée Rouge</span></h2>
                <p class="section-subtitle">Une armée de révolution musicale pour la culture tchadienne</p>
                <div class="title-underline"></div>
                <a href="/armee-rouge" class="btn btn-primary" style="margin-top:2rem;">Savoir plus</a>
            </div>
        </div>
    </section>

    <section id="press" class="section section-press">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">CIDSON <span class="text-highlight">dans la Presse</span></h2>
                <p class="section-subtitle">Retrouvez les articles et apparitions médiatiques</p>
                <div class="title-underline"></div>
            </div>

            <div class="press-media-grid">
                <a href="https://www.dailymotion.com/video/x8gffdb" target="_blank" rel="noopener noreferrer" class="press-media-card">
                    <div class="press-media-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="press-media-content">
                        <span class="press-media-source">Africa24 TV / Dailymotion</span>
                        <h3 class="press-media-title">CIDSON sur Africa24 TV</h3>
                        <p class="press-media-desc">Regardez l'apparition de CIDSON sur la chaîne Africa24 TV — interview et performance live.</p>
                        <span class="press-media-link">Voir la vidéo &rarr;</span>
                    </div>
                </a>

                <a href="https://share.google/xMI0f1Lfymm6zBhSp" target="_blank" rel="noopener noreferrer" class="press-media-card">
                    <div class="press-media-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                    </div>
                    <div class="press-media-content">
                        <span class="press-media-source">Source : Africa24 TV</span>
                        <h3 class="press-media-title">Article Africa24 TV</h3>
                        <p class="press-media-desc">Découvrez le profil de CIDSON « L'Astre de Lumière » et son parcours musical.</p>
                        <span class="press-media-link">Lire l'article &rarr;</span>
                    </div>
                </a>
            </div>

            <div class="press-resources">
                <div class="press-grid">
                    <div class="press-card">
                        <div class="press-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="press-title">Press-book 2026</h3>
                        <p class="press-description">Dossier de presse complet — bientôt disponible</p>
                        <span class="btn btn-outline btn-small" style="opacity:0.5;cursor:not-allowed;">Bientôt disponible</span>
                    </div>

                    <div class="press-card">
                        <div class="press-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="press-title">Kit Média</h3>
                        <p class="press-description">Photos HD, logos et ressources — bientôt disponible</p>
                        <span class="btn btn-outline btn-small" style="opacity:0.5;cursor:not-allowed;">Bientôt disponible</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section section-contact">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-form-container">
                    <h2 class="contact-form-title">CONTACT</h2>
                    <form id="contactForm" class="contact-form" action="/contact" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName" class="form-label">Prénom</label>
                                <input type="text" id="firstName" name="name" class="form-input" placeholder="Jean" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName" class="form-label">Nom</label>
                                <input type="text" id="lastName" class="form-input" placeholder="Dupont" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="jean@example.com" required>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="form-label">Téléphone</label>
                            <input type="tel" id="phone" name="phone" class="form-input" placeholder="+235 XX XX XX XX" required>
                        </div>

                        <div class="form-group">
                            <label for="requestType" class="form-label">Type de demande</label>
                            <select id="requestType" name="service" class="form-input" required>
                                <option value="">Sélectionnez...</option>
                                <option value="booking">Booking</option>
                                <option value="collaboration">Collaboration</option>
                                <option value="press">Presse</option>
                                <option value="other">Autre</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="eventDate" class="form-label">Date d'événement (si booking)</label>
                            <input type="date" id="eventDate" class="form-input">
                        </div>

                        <div class="form-group">
                            <label for="budget" class="form-label">Budget (optionnel)</label>
                            <input type="text" id="budget" class="form-input" placeholder="Montant approximatif">
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" class="form-textarea" placeholder="Décrivez votre projet, vos besoins..." rows="5" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-full">ENVOYER</button>
                    </form>
                </div>

                <div class="contact-info">
                    <h3 class="contact-info-title">Infos Booking</h3>
                    <div class="contact-details">
                        <div class="contact-detail">
                            <p class="contact-detail-label">Email Booking</p>
                            <p class="contact-detail-value">bookingcidsonalguewi01@gmail.com</p>
                        </div>
                        <div class="contact-detail">
                            <p class="contact-detail-label">Téléphone</p>
                            <p class="contact-detail-value">+235 66 22 98 51</p>
                        </div>
                        <div class="contact-detail">
                            <p class="contact-detail-label">Localisation</p>
                            <p class="contact-detail-value">N'Djamena, Tchad</p>
                        </div>
                        <div class="contact-detail">
                            <p class="contact-detail-label">Réseaux Sociaux</p>
                            <div class="contact-social-links">
                                <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="contact-social-link">YouTube</a>
                                <a href="https://www.facebook.com/share/1CivzvBDWK/" target="_blank" rel="noopener noreferrer" class="contact-social-link">Facebook</a>
                                <a href="https://www.tiktok.com/@cidsonalguewi" target="_blank" rel="noopener noreferrer" class="contact-social-link">TikTok</a>
                                <a href="https://www.instagram.com/cidsonalguewi30" target="_blank" rel="noopener noreferrer" class="contact-social-link">Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="lightbox" class="lightbox">
        <span class="lightbox-close">&times;</span>
        <img src="" alt="" loading="lazy" class="lightbox-image">
        <button class="lightbox-prev" aria-label="Image précédente">&#10094;</button>
        <button class="lightbox-next" aria-label="Image suivante">&#10095;</button>
    </div>

    <div id="videoModal" class="video-modal">
        <div class="video-modal-content">
            <button class="video-modal-close">&times;</button>
            <video id="modalVideo" class="modal-video" controls autoplay>
                <source src="" type="video/mp4">
                Votre navigateur ne supporte pas la lecture de vidéos.
            </video>
        </div>
    </div>
@endsection
@section('page-scripts')
    <script src="/script.js"></script>
@endsection





