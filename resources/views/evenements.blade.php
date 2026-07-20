@extends('layouts.app')

@section('page-title', "Événements — CIDSON ALGUEWI | Concerts & Festivals")
@section('meta-description', "Retrouvez Cidson Alguewi sur scène : concerts, festivals et tournées. Tourasna Festival, Africajarc, FESPAM et plus encore.")
@section('og-title', "Événements — CIDSON ALGUEWI")
@section('og-image', '/img/concert/c-1.jpg')
@section('body-classes', 'page-evenements')
@section('nav-evenements', 'class="active"')

@section('hero')
    <section class="page-hero page-hero-evenements">
        <div class="page-hero-bg" style="background-image:url('/img/concert/C-3.jpg')"></div>
        <div class="page-hero-overlay"></div>
        <div class="container">
            <div class="page-hero-content">
                <p class="hero-badge">SCÈNE & Tournée</p>
                <h1 class="hero-title">Concerts & <span class="text-highlight">Événements</span></h1>
                <p class="hero-tagline">Retrouvez-moi sur scène à travers le monde</p>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="section section-concerts">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Mes <span class="text-highlight">Événements</span></h2>
                <p class="section-subtitle">Passages mémorables sur des scènes nationales et internationales</p>
                <div class="title-underline"></div>
            </div>

            <div class="concerts-blog-grid">
                <article class="concert-blog-card">
                    <div class="concert-blog-image">
                        <img src="/img/concert/c-1.jpg" alt="Tourasna Festival" loading="lazy">
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
                        <p class="concert-blog-description">Représentation du Tchad sur la scène internationale du Tourasna Festival en Allemagne. Une performance mémorable portant les sonorités Saïtonic devant un public international.</p>
                    </div>
                </article>

                <article class="concert-blog-card">
                    <div class="concert-blog-image">
                        <img src="/img/concert/C-2.jpg" alt="Africajarc" loading="lazy">
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
                        <p class="concert-blog-description">Performance au festival Africajarc en France, portant les sonorités Saïtonic sur la scène européenne. Un moment de partage culturel unique.</p>
                    </div>
                </article>

                <article class="concert-blog-card">
                    <div class="concert-blog-image">
                        <img src="/img/concert/C-3.jpg" alt="FESPAM" loading="lazy">
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
                        <p class="concert-blog-description">Première représentation internationale au FESPAM, festival panafricain des arts et de la musique. Un tournant décisif dans la carrière artistique de Cidson.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="section section-booking" style="background:var(--color-card);">
        <div class="container" style="text-align:center;">
            <div class="section-header">
                <h2 class="section-title">Vous souhaitez me <span class="text-highlight">booker</span> ?</h2>
                <p class="section-subtitle">Pour festivals, concerts privés, événements culturels et collaborations</p>
                <div class="title-underline"></div>
            </div>
            <div class="booking-contact-links" style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:2rem;">
                <a href="mailto:bookingcidsonalguewi01@gmail.com" class="btn btn-primary" style="display:inline-flex;align-items:center;gap:0.5rem;">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    Envoyer un email
                </a>
                <a href="tel:+23566229851" class="btn btn-outline" style="display:inline-flex;align-items:center;gap:0.5rem;">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    +235 66 22 98 51
                </a>
            </div>
            <p style="color:var(--text-light);margin-top:1.5rem;font-size:0.95rem;">Email : <strong>bookingcidsonalguewi01@gmail.com</strong></p>
        </div>
    </section>
@endsection
