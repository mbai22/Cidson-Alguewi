<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cidson Alguewi - Créateur du Saïtonic, artiste tchadien. Chanteur, auteur-compositeur, arrangeur. Découvrez sa musique, son parcours et l'Armée Rouge.">
    <title>Cidson Alguewi - Créateur du Saïtonic | Artiste Tchadien</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Poppins:wght@400;500;600&family=Inter:wght@400;500&display=swap" rel="stylesheet">
</head>
<body class="dark">
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <span class="logo-highlight">CIDSON</span> ALGUEWI
                </div>
                <div class="nav-links" id="navLinks">
                    <a href="#home">Accueil</a>
                    <a href="#about">Bio</a>
                    <a href="#music">Musique</a>
                    <a href="#awards">Récompenses</a>
                    <a href="#community">Armée Rouge</a>
                    <a href="#gallery">Galerie</a>
                    <a href="#press">Presse</a>
                    <a href="#contact">Contact</a>
                </div>
                <div class="nav-actions">
                    <a href="#contact" class="btn btn-booking">BOOKING</a>
                </div>
                <button class="menu-toggle" id="menuToggle">
                    <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-background-image"></div>
        <div class="hero-overlay"></div>
        <div class="hero-bg-decoration"></div>
        
        <!-- Secondary Navigation in Hero -->
        <div class="hero-secondary-nav">
            <div class="container">
                <div class="secondary-nav-links">
                    <a href="#about">Bio</a>
                    <a href="#music">Musique</a>
                    <a href="#awards">Récompenses</a>
                    <a href="#community">Armée Rouge</a>
                    <a href="#gallery">Galerie</a>
                </div>
            </div>
        </div>
        
        <div class="container hero-container">
            <div class="hero-content">
                <p class="hero-badge">CRÉATEUR DU SAÏTONIC</p>
                <h1 class="hero-title">CIDSON ALGUEWI</h1>
                <p class="hero-tagline">La révolution <span class="text-highlight">Saïtonic</span> tchadienne</p>
                
                <div class="hero-buttons">
                    <a href="#music" class="btn btn-primary">Écouter le Single</a>
                    <a href="#press" class="btn btn-outline">Voir le Press-Kit</a>
                </div>
            </div>
        </div>

        <!-- Statistics Section -->
        <div class="hero-stats-container">
            <div class="container">
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">2007</span>
                        <span class="stat-label">Début</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">2</span>
                        <span class="stat-label">Albums</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">7+</span>
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

    <!-- About Section -->
    <section id="about" class="section section-about">
        <div class="container">
            <div class="about-grid">
                <div class="about-text">
                    <h2 class="about-title">À PROPOS</h2>
                    <p class="about-paragraph">
                        Cidson Alguewi, de son vrai nom Nguemouro Marouf Placide, est un artiste tchadien originaire de N'Djaména. Surnommé <strong>« Tigerman »</strong>, il est chanteur, auteur-compositeur et arrangeur. Il est le créateur du style <strong>« Saïtonic »</strong>, une fusion innovante entre la musique traditionnelle tchadienne (Saï), l'afrobeat, la rumba congolaise et l'électro moderne.
                    </p>
                    
                    <p class="about-paragraph">
                        Son parcours musical débute dans le gospel avant de devenir batteur dans un groupe. Il crée ensuite son propre groupe <strong>Sahel Academy (Sahel AK2MI)</strong>. Il a partagé la scène avec des poids lourds africains comme Fally Ipupa, Magic System, Extra Musica, Meiway, Soum Bill et Roga Roga. Figure majeure de la musique tchadienne moderne, il porte la culture locale vers l'international.
                    </p>
                    
                    <a href="#about" class="btn btn-outline btn-bio">Lire la Biographie Complète</a>
                </div>
                
                <div class="about-visual">
                    <div class="about-image-wrapper">
                        <div class="about-image-circle">
                            <img src="./img/about-p.gif" alt="Cidson Alguewi" class="about-image" onerror="this.src='https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=600&h=600&fit=crop'; this.onerror=null;">
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

    <!-- Music Section -->
    <section id="music" class="section section-music">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Ma <span class="text-highlight">Musique</span></h2>
                <p class="section-subtitle">Découvrez mes dernières sorties et ma discographie complète</p>
                <div class="title-underline"></div>
            </div>

            <!-- Latest Releases -->
            <div class="latest-releases">
                <h3 class="subsection-title">SINGLES POPULAIRES</h3>
                <div class="music-grid">
                    <div class="music-card">
                        <div class="music-image">
                            <img src="./img/audio-cidson.jpg" alt="Saïtonic mondiale">
                            <div class="music-overlay">
                                <button class="play-button-music">
                                    <svg class="play-icon" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="music-content">
                            <h4 class="music-title">Saïtonic Mondiale</h4>
                            <p class="music-year">Hit</p>
                            <div class="music-links">
                                <a href="#" class="stream-link" aria-label="Spotify">Spotify</a>
                                <a href="#" class="stream-link" aria-label="Apple Music">Apple Music</a>
                                <a href="#" class="stream-link" aria-label="YouTube">YouTube</a>
                            </div>
                        </div>
                    </div>

                    <div class="music-card">
                        <div class="music-image">
                            <img src="./img/audio-cidson-2.jpg" alt="Sao du Tchad">
                            <div class="music-overlay">
                                <button class="play-button-music">
                                    <svg class="play-icon" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="music-content">
                            <h4 class="music-title">Sao du Tchad</h4>
                            <p class="music-year">Classique</p>
                            <div class="music-links">
                                <a href="#" class="stream-link" aria-label="Spotify">Spotify</a>
                                <a href="#" class="stream-link" aria-label="Apple Music">Apple Music</a>
                                <a href="#" class="stream-link" aria-label="YouTube">YouTube</a>
                            </div>
                        </div>
                    </div>

                    <div class="music-card">
                        <div class="music-image">
                            <img src="./img/audio-cidson-3.jpg" alt="Love Me">
                            <div class="music-overlay">
                                <button class="play-button-music">
                                    <svg class="play-icon" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="music-content">
                            <h4 class="music-title">Love Me</h4>
                            <p class="music-year">Romantique</p>
                            <div class="music-links">
                                <a href="#" class="stream-link" aria-label="Spotify">Spotify</a>
                                <a href="#" class="stream-link" aria-label="Apple Music">Apple Music</a>
                                <a href="#" class="stream-link" aria-label="YouTube">YouTube</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Albums -->
            <div class="video-clips">
                <h3 class="subsection-title">ALBUMS</h3>
                <div class="video-grid">
                    <div class="video-card">
                        <div class="video-thumbnail">
                            <img src="./img/album-1.jpg" alt="Total Contrôle">
                            <div class="video-overlay">
                                <button class="play-button-video">
                                    <svg class="play-icon" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <h4 class="video-title">Total Contrôle (2009)</h4>
                    </div>
                    <div class="video-card">
                        <div class="video-thumbnail">
                            <img src="./img/album-2.jpg" alt="Air Force One">
                            <div class="video-overlay">
                                <button class="play-button-video">
                                    <svg class="play-icon" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <h4 class="video-title">Air Force One (2012)</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="section section-gallery">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Galerie <span class="text-highlight">Photos</span></h2>
                <p class="section-subtitle">Moments capturés sur scène et en studio</p>
                <div class="title-underline"></div>
            </div>

            <div class="gallery-filters">
                <button class="filter-btn active" data-filter="all">Toutes</button>
                <button class="filter-btn" data-filter="concerts">Concerts</button>
                <button class="filter-btn" data-filter="studio">Studio</button>
                <button class="filter-btn" data-filter="backstage">Backstage</button>
            </div>

            <div class="gallery-grid">
                <div class="gallery-item" data-category="concerts">
                    <img src="./img/Galerie/g-1.jpg" alt="Concert 1" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="studio">
                    <img src="./img/Galerie/g-2.jpg" alt="Studio 1" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="backstage">
                    <img src="./img/Galerie/g-3.jpg" alt="Backstage 1" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="concerts">
                    <img src="./img/Galerie/g-4.jpg" alt="Concert 2" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="studio">
                    <img src="./img/Galerie/g-5.jpg" alt="Studio 2" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="backstage">
                    <img src="./img/Galerie/g-6.jpg" alt="Backstage 2" class="gallery-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Concerts Section -->
    <section id="concerts" class="section section-concerts">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Concerts & <span class="text-highlight">Événements récents</span></h2>
                <p class="section-subtitle">Retrouvez-moi sur scène</p>
                <div class="title-underline"></div>
            </div>

            <div class="concerts-blog-grid">
                <article class="concert-blog-card">
                    <div class="concert-blog-image">
                        <img src="./img/concert/c-1.jpg" alt="Festival Afrobeat 2026">
                        <div class="concert-blog-date-badge">
                            <span class="date-day">15</span>
                            <span class="date-month">MAR</span>
                        </div>
                    </div>
                    <div class="concert-blog-content">
                        <h3 class="concert-blog-title">Festival Afrobeat 2026</h3>
                        <div class="concert-blog-meta">
                            <div class="meta-item">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>N'Djamena, Tchad</span>
                            </div>
                            <div class="meta-item">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>20:00</span>
                            </div>
                        </div>
                        <p class="concert-blog-description">Performance exceptionnelle au Festival Afrobeat 2026 avec une énergie incroyable et une connexion unique avec le public.</p>
                        <a href="#contact" class="btn btn-outline btn-small">Voir les Photos</a>
                    </div>
                </article>

                <article class="concert-blog-card">
                    <div class="concert-blog-image">
                        <img src="./img/concert/C-2.jpg" alt="Concert Privé">
                        <div class="concert-blog-date-badge">
                            <span class="date-day">28</span>
                            <span class="date-month">AVR</span>
                        </div>
                    </div>
                    <div class="concert-blog-content">
                        <h3 class="concert-blog-title">Concert Privé</h3>
                        <div class="concert-blog-meta">
                            <div class="meta-item">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Tchad</span>
                            </div>
                            <div class="meta-item">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>19:30</span>
                            </div>
                        </div>
                        <p class="concert-blog-description">Concert privé intime avec un setlist spécial et des moments inoubliables partagés avec les fans.</p>
                        <a href="#contact" class="btn btn-outline btn-small">Voir les Photos</a>
                    </div>
                </article>

                <article class="concert-blog-card">
                    <div class="concert-blog-image">
                        <img src="./img/concert/C-3.jpg" alt="Showcase Live">
                        <div class="concert-blog-date-badge">
                            <span class="date-day">10</span>
                            <span class="date-month">FEV</span>
                        </div>
                    </div>
                    <div class="concert-blog-content">
                        <h3 class="concert-blog-title">Showcase Live Session</h3>
                        <div class="concert-blog-meta">
                            <div class="meta-item">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Studio Live, Tchad</span>
                            </div>
                            <div class="meta-item">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>18:00</span>
                            </div>
                        </div>
                        <p class="concert-blog-description">Session live acoustique avec présentation de nouveaux morceaux et interactions avec le public.</p>
                        <a href="#contact" class="btn btn-outline btn-small">Voir les Photos</a>
                    </div>
                </article>
            </div>

            <div class="booking-cta">
                <h3>Vous souhaitez me booker pour un événement ?</h3>
                <a href="#contact" class="btn btn-primary">Booking</a>
            </div>
        </div>
    </section>

    <!-- Awards Section -->
    <section id="awards" class="section section-awards">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Récompenses & <span class="text-highlight">Distinctions</span></h2>
                <p class="section-subtitle">Reconnaissance et succès artistiques</p>
                <div class="title-underline"></div>
            </div>

            <div class="awards-grid">
                <div class="award-card">
                    <div class="award-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 5h-2V3H7v2H5c-1.1 0-2 .9-2 2v1c0 2.55 1.92 4.63 4.39 4.94.63 1.5 1.98 2.63 3.61 2.96V19H7v2h10v-2h-4v-3.1c1.63-.33 2.98-1.46 3.61-2.96C19.08 12.63 21 10.55 21 8V7c0-1.1-.9-2-2-2zM5 8V7h2v3.82C5.84 10.4 5 9.3 5 8zm14 0c0 1.3-.84 2.4-2 2.82V7h2v1z"/>
                        </svg>
                    </div>
                    <h3 class="award-title">Espoir de l'année</h3>
                    <p class="award-year">2007 - Sao Awards</p>
                    <p class="award-description">Reconnaissance comme talent émergent de la scène musicale tchadienne.</p>
                </div>

                <div class="award-card">
                    <div class="award-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/>
                        </svg>
                    </div>
                    <h3 class="award-title">Chanson de l'année</h3>
                    <p class="award-year">2008 - Sao Awards</p>
                    <p class="award-description">Pour le titre "Roméo et Juliette", succès majeur de l'année.</p>
                </div>

                <div class="award-card">
                    <div class="award-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                        </svg>
                    </div>
                    <h3 class="award-title">Meilleur artiste masculin</h3>
                    <p class="award-year">2017 - Dari Awards</p>
                    <p class="award-description">Consécration comme meilleur artiste masculin de l'année.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Section -->
    <!-- <section id="community" class="section section-community">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">L'<span class="text-highlight">Armée Rouge</span></h2>
                <p class="section-subtitle">Rejoignez la communauté de fans engagés</p>
                <div class="title-underline"></div>
            </div>

            <div class="community-content">
                <div class="community-text">
                    <h3 class="community-title">Une communauté passionnée</h3>
                    <p class="community-description">
                        L'Armée Rouge est la fanbase officielle de Cidson Alguewi, créée en 2019. Cette communauté très engagée porte une vision : <strong>révolutionner la musique tchadienne</strong> et la porter vers l'international.
                    </p>
                    <p class="community-description">
                        En rejoignant l'Armée Rouge, vous faites partie d'un mouvement qui célèbre la culture tchadienne et soutient l'innovation musicale à travers le style Saïtonic.
                    </p>
                    <a href="#contact" class="btn btn-primary">Rejoindre l'Armée Rouge</a>
                </div>
                <div class="community-visual">
                    <div class="community-badge">
                        <span class="badge-text">ARMÉE ROUGE</span>
                        <span class="badge-subtitle">Depuis 2019</span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Newsletter Section -->
    <section id="newsletter" class="section section-newsletter">
        <div class="container">
            <div class="newsletter-container">
                <div class="newsletter-content">
                    <h2 class="newsletter-title">Restez <span class="text-highlight">Connecté</span></h2>
                    <p class="newsletter-description">Inscrivez-vous à la newsletter pour recevoir les dernières actualités, sorties musicales et dates de concerts.</p>
                </div>
                <form id="newsletterForm" class="newsletter-form">
                    <input type="email" id="newsletterEmail" class="newsletter-input" placeholder="Votre adresse email" required>
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="section section-blog">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Blog & <span class="text-highlight">Actualités</span></h2>
                <p class="section-subtitle">Dernières nouvelles et actualités</p>
                <div class="title-underline"></div>
            </div>

            <div class="blog-carousel">
                <div class="blog-carousel-track">
                    <article class="blog-card">
                        <div class="blog-image">
                            <img src="./img/blog/b-1 (1).jpg" alt="Article 1">
                            <div class="blog-date-badge">
                                <span>15</span>
                                <span>MAR</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-category">Actualité</div>
                            <h3 class="blog-title">Nouveau Single "Saïtonic Lib" Disponible</h3>
                            <p class="blog-excerpt">Découvrez le nouveau single "Saïtonic Lib" disponible sur toutes les plateformes de streaming.</p>
                            <div class="blog-meta">
                                <span class="blog-author">Par Cidson Alguewi</span>
                            </div>
                        </div>
                    </article>

                    <article class="blog-card">
                        <div class="blog-image">
                            <img src="./img/blog/b-1 (2).jpg" alt="Article 2">
                            <div class="blog-date-badge">
                                <span>10</span>
                                <span>MAR</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-category">Concert</div>
                            <h3 class="blog-title">Retour sur le Concert avec Fally Ipupa</h3>
                            <p class="blog-excerpt">Revivez les moments forts de cette collaboration exceptionnelle avec Fally Ipupa.</p>
                            <div class="blog-meta">
                                <span class="blog-author">Par Cidson Alguewi</span>
                            </div>
                        </div>
                    </article>

                    <article class="blog-card">
                        <div class="blog-image">
                            <img src="./img/blog/b-1 (3).jpg" alt="Article 3">
                            <div class="blog-date-badge">
                                <span>05</span>
                                <span>MAR</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-category">Collaboration</div>
                            <h3 class="blog-title">L'Armée Rouge en pleine expansion</h3>
                            <p class="blog-excerpt">La communauté de fans de Cidson Alguewi ne cesse de grandir.</p>
                            <div class="blog-meta">
                                <span class="blog-author">Par Cidson Alguewi</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="blog-carousel-dots"></div>
            </div>
        </div>
    </section>

    <!-- Blog Comments Modal -->
    <div id="blogModal" class="blog-modal">
        <div class="blog-modal-content">
            <button class="blog-modal-close">&times;</button>
            <div class="blog-modal-header">
                <h2 class="blog-modal-title"></h2>
                <div class="blog-modal-meta"></div>
            </div>
            <div class="blog-modal-body">
                <div class="blog-full-content"></div>
                <div class="blog-comments-section">
                    <h3 class="comments-title">Commentaires</h3>
                    <div class="comments-list"></div>
                    <form id="commentForm" class="comment-form">
                        <textarea id="commentText" class="comment-input" placeholder="Ajouter un commentaire..." rows="3" required></textarea>
                        <div class="comment-form-row">
                            <input type="text" id="commentName" class="comment-name-input" placeholder="Votre nom" required>
                            <button type="submit" class="btn btn-primary btn-small">Publier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Press Section -->
    <section id="press" class="section section-press">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Presse & <span class="text-highlight">Médias</span></h2>
                <p class="section-subtitle">Dossier de presse et ressources médias</p>
                <div class="title-underline"></div>
            </div>

            <div class="press-grid">
                <div class="press-card">
                    <div class="press-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="press-title">Press-book 2026</h3>
                    <p class="press-description">Téléchargez le dossier de presse complet</p>
                    <a href="#" class="btn btn-outline btn-small">Télécharger PDF</a>
                </div>

                <div class="press-card">
                    <div class="press-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="press-title">Kit Média</h3>
                    <p class="press-description">Photos HD, logos et ressources</p>
                    <a href="#" class="btn btn-outline btn-small">Télécharger</a>
                </div>

                <div class="press-card">
                    <div class="press-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                    </div>
                    <h3 class="press-title">Communiqués</h3>
                    <p class="press-description">Derniers communiqués de presse</p>
                    <a href="#" class="btn btn-outline btn-small">Voir</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section section-contact">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-form-container">
                    <h2 class="contact-form-title">CONTACT</h2>
                    <form id="contactForm" class="contact-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName" class="form-label">Prénom</label>
                                <input type="text" id="firstName" class="form-input" placeholder="Jean" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName" class="form-label">Nom</label>
                                <input type="text" id="lastName" class="form-input" placeholder="Dupont" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-input" placeholder="jean@example.com" required>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="form-label">Téléphone</label>
                            <input type="tel" id="phone" class="form-input" placeholder="+235 XX XX XX XX">
                        </div>

                        <div class="form-group">
                            <label for="requestType" class="form-label">Type de demande</label>
                            <select id="requestType" class="form-input" required>
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
                            <textarea id="message" class="form-textarea" placeholder="Décrivez votre projet, vos besoins..." rows="5" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-full">ENVOYER</button>
                    </form>
                </div>

                <div class="contact-info">
                    <h3 class="contact-info-title">Infos Booking</h3>
                    <div class="contact-details">
                        <div class="contact-detail">
                            <p class="contact-detail-label">Email</p>
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
                    </div>
                    <div class="contact-map">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1253486.4398386!2d15.0!3d12.1!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11d6e3e3e3e3e3e3%3A0x3e3e3e3e3e3e3e3e!2sN%27Djamena%2C%20Tchad!5e0!3m2!1sfr!2sfr!4v1234567890"
                            width="100%" 
                            height="250" 
                            style="border:0; border-radius: 12px;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <h3 class="footer-logo">
                        <span class="logo-highlight">CIDSON</span> ALGUEWI
                    </h3>
                    <p class="footer-description">
                        Créateur du Saïtonic, artiste tchadien. Chanteur, auteur-compositeur, arrangeur. La révolution musicale tchadienne vers l'international.
                    </p>
                    <div class="hashtags">
                        <span class="hashtag">#Saïtonic</span>
                        <span class="hashtag">#ArméeRouge</span>
                        <span class="hashtag">#CidsonAlguewi</span>
                    </div>
                </div>

                <div class="footer-links">
                    <h4 class="footer-title">Navigation</h4>
                    <a href="#home" class="footer-link">Accueil</a>
                    <a href="#about" class="footer-link">Bio</a>
                    <a href="#music" class="footer-link">Musique</a>
                    <a href="#awards" class="footer-link">Récompenses</a>
                    <a href="#community" class="footer-link">Armée Rouge</a>
                    <a href="#gallery" class="footer-link">Galerie</a>
                    <a href="#press" class="footer-link">Presse</a>
                    <a href="#contact" class="footer-link">Contact</a>
                </div>

                <div class="footer-social">
                    <h4 class="footer-title">Réseaux Sociaux</h4>
                    <div class="social-icons">
                        <a href="https://youtube.com" target="_blank" class="social-icon" aria-label="YouTube">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                        <a href="https://facebook.com/cidsonalguewi_official" target="_blank" class="social-icon" aria-label="Facebook">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="https://instagram.com/cidsonalguewi07" target="_blank" class="social-icon" aria-label="Instagram">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="https://tiktok.com/@cidsonalguewi" target="_blank" class="social-icon" aria-label="TikTok">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 Cidson Alguewi. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Lightbox for Gallery -->
    <div id="lightbox" class="lightbox">
        <span class="lightbox-close">&times;</span>
        <img src="" alt="" class="lightbox-image">
        <button class="lightbox-prev">&#10094;</button>
        <button class="lightbox-next">&#10095;</button>
    </div>

    <!-- Video Modal -->
    <div id="videoModal" class="video-modal">
        <div class="video-modal-content">
            <button class="video-modal-close">&times;</button>
            <video id="modalVideo" class="modal-video" controls autoplay>
                <source src="" type="video/mp4">
                Votre navigateur ne supporte pas la lecture de vidéos.
            </video>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
