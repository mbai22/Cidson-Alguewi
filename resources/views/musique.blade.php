@extends('layouts.app')

@section('page-title', "Ma Musique — CIDSON ALGUEWI | Discographie Saïtonic")
@section('meta-description', "Découvrez la discographie complète de Cidson Alguewi : singles, albums, hits Saïtonic. Champions League, Total Control, Air Force One, Tension, Tricolor, ETREIZE.")
@section('og-title', "Ma Musique — CIDSON ALGUEWI")
@section('og-image', '/img/album-1.jpg')
@section('body-classes', 'page-musique')
@section('nav-musique', 'class="active"')

@section('hero')
    <section class="page-hero page-hero-musique">
        <div class="page-hero-bg" style="background-image:url('/img/audio-cidson.jpg')"></div>
        <div class="page-hero-overlay"></div>
        <div class="container">
            <div class="page-hero-content">
                <p class="hero-badge">DISCOGRAPHIE</p>
                <h1 class="hero-title">Ma <span class="text-highlight">Musique</span></h1>
                <p class="hero-tagline">Singles, albums et hits — l'univers sonore du Saïtonic</p>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="section section-music">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Singles <span class="text-highlight">Populaires</span></h2>
                <p class="section-subtitle">Mes titres les plus écoutés, disponibles sur YouTube</p>
                <div class="title-underline"></div>
            </div>

            <div class="music-grid">
                <div class="music-card">
                    <div class="music-image">
                        <img src="/img/audio-cidson.jpg" alt="Saïtonic Mondiale" loading="lazy">
                        <div class="music-overlay">
                            <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="play-button-music">
                                <svg class="play-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="music-content">
                        <h4 class="music-title">Saïtonic Mondiale</h4>
                        <p class="music-year">Hit Saïtonic</p>
                        <div class="music-links">
                            <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="stream-link">YouTube</a>
                        </div>
                    </div>
                </div>

                <div class="music-card">
                    <div class="music-image">
                        <img src="/img/audio-cidson-2.jpg" alt="Sao du Tchad" loading="lazy">
                        <div class="music-overlay">
                            <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="play-button-music">
                                <svg class="play-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="music-content">
                        <h4 class="music-title">Sao du Tchad</h4>
                        <p class="music-year">Classique Tchadien</p>
                        <div class="music-links">
                            <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="stream-link">YouTube</a>
                        </div>
                    </div>
                </div>

                <div class="music-card">
                    <div class="music-image">
                        <img src="/img/audio-cidson-3.jpg" alt="Love Me" loading="lazy">
                        <div class="music-overlay">
                            <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="play-button-music">
                                <svg class="play-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="music-content">
                        <h4 class="music-title">Love Me</h4>
                        <p class="music-year">Romantique</p>
                        <div class="music-links">
                            <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="stream-link">YouTube</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-albums-full">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Albums</h2>
                <p class="section-subtitle">6 albums qui ont façonné le Saïtonic de 2006 à 2025</p>
                <div class="title-underline"></div>
            </div>

            <div class="albums-grid">
                <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="album-card">
                    <div class="album-cover">
                        <img src="/img/album-1.jpg" alt="Champions League" loading="lazy">
                        <div class="album-overlay">
                            <svg class="play-icon-album" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="album-info">
                        <h4 class="album-title">Champions League</h4>
                        <p class="album-year">2006 — Maxi Single</p>
                    </div>
                </a>

                <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="album-card">
                    <div class="album-cover">
                        <img src="/img/Galerie/g-5.jpg" alt="Total Control" loading="lazy">
                        <div class="album-overlay">
                            <svg class="play-icon-album" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="album-info">
                        <h4 class="album-title">Total Control</h4>
                        <p class="album-year">2009 — réédité en 2012</p>
                    </div>
                </a>

                <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="album-card">
                    <div class="album-cover">
                        <img src="/img/album-2.jpg" alt="Air Force One" loading="lazy">
                        <div class="album-overlay">
                            <svg class="play-icon-album" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="album-info">
                        <h4 class="album-title">Air Force One</h4>
                        <p class="album-year">2013</p>
                    </div>
                </a>

                <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="album-card">
                    <div class="album-cover">
                        <img src="/img/Galerie/g-6.jpg" alt="Tension" loading="lazy">
                        <div class="album-overlay">
                            <svg class="play-icon-album" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="album-info">
                        <h4 class="album-title">Tension</h4>
                        <p class="album-year">2019</p>
                    </div>
                </a>

                <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="album-card">
                    <div class="album-cover">
                        <img src="/img/concert/c-1.jpg" alt="Tricolor" loading="lazy">
                        <div class="album-overlay">
                            <svg class="play-icon-album" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="album-info">
                        <h4 class="album-title">Tricolor</h4>
                        <p class="album-year">2020 — Maxi Single</p>
                    </div>
                </a>

                <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="album-card album-card-new">
                    <div class="album-cover">
                        <img src="/img/concert/C-2.jpg" alt="ETREIZE" loading="lazy">
                        <div class="album-overlay">
                            <svg class="play-icon-album" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                        <span class="album-badge-new">NOUVEAU</span>
                    </div>
                    <div class="album-info">
                        <h4 class="album-title">ETREIZE</h4>
                        <p class="album-year">2025 — Sortie récente</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="section section-youtube-cta">
        <div class="container" style="text-align:center;">
            <div class="section-header">
                <h2 class="section-title">Écoutez sur <span class="text-highlight">YouTube</span></h2>
                <p class="section-subtitle">Abonnez-vous à ma chaîne pour ne manquer aucune sortie</p>
                <div class="title-underline"></div>
            </div>
            <a href="https://youtube.com/@cidson1307" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="margin-top:2rem;display:inline-flex;align-items:center;gap:0.5rem;">
                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                @cidson1307
            </a>
        </div>
    </section>
@endsection
