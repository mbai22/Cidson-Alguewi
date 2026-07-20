@extends('layouts.app')

@section('page-title', 'À Propos')
@section('meta-description', 'À propos de Cidson Alguewi - L\'Astre de Lumière, artiste tchadien, créateur du Saïtonic.')

@section('hero')
    <section class="page-hero page-hero-about">
        <div class="container">
            <p class="page-hero-badge">L'ASTRE DE LUMIÈRE</p>
            <h1 class="page-hero-title">À Propos</h1>
            <p class="page-hero-subtitle">Découvrez l'homme derrière la musique</p>
            <div class="title-underline"></div>
        </div>
    </section>
@endsection

@section('content')
    <section class="page-content">
        <div class="container">
            <div class="about-page-grid">
                <div class="about-page-image">
                    <img src="/img/about-p.gif" alt="Cidson Alguewi" class="about-page-photo" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=800&h=800&fit=crop'; this.onerror=null;">
                    <div class="about-page-name-card">
                        <h2>CIDSON</h2>
                        <p>L'Astre de Lumière</p>
                    </div>
                </div>

                <div class="about-page-text">
                    <h2>CIDSON « L'Astre de Lumière »</h2>
                    <p class="about-page-realname">De son vrai nom <strong>Nguemourou Marouf Placide</strong></p>

                    <p>Né le 13 juillet 1986 à N'Djaména, Cidson Alguewi est une figure majeure de la scène musicale contemporaine au Tchad. Artiste pluridisciplinaire — chanteur, auteur-compositeur, interprète, arrangeur et producteur — il est le créateur du <strong>Saïtonic</strong>, un genre hybride qui fusionne le Saï traditionnel tchadien avec des sonorités électro, Bazaga et Rumba.</p>

                    <p>Son talent précoce le conduit à accompagner en tant que batteur les plus grands noms de la musique tchadienne et internationale. Fin 2005, il fonde la <strong>Sahel Academy</strong> et entame une discographie prolifique.</p>

                    <p>Nommé <strong>« Tigerman »</strong>, il représente le Tchad sur les scènes internationales : FESPAM (Congo, 2011), Africajarc (France, 2023), Tourasna Festival (Allemagne, 2025). Il est aussi le chef de file de <strong>l'Armée Rouge</strong>, une communauté massive de fans engagés pour le rayonnement de la culture tchadienne.</p>

                    <div class="about-page-highlights">
                        <div class="about-highlight-card">
                            <div class="about-highlight-icon">
                                <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/></svg>
                            </div>
                            <h3>Saïtonic</h3>
                            <p>Créateur du genre Saïtonic — fusion de Saï traditionnel et sonorités modernes</p>
                        </div>
                        <div class="about-highlight-card">
                            <div class="about-highlight-icon">
                                <svg fill="currentColor" viewBox="0 0 24 24"><path d="M19 5h-2V3H7v2H5c-1.1 0-2 .9-2 2v1c0 2.55 1.92 4.63 4.39 4.94.63 1.5 1.98 2.63 3.61 2.96V19H7v2h10v-2h-4v-3.1c1.63-.33 2.98-1.46 3.61-2.96C19.08 12.63 21 10.55 21 8V7c0-1.1-.9-2-2-2z"/></svg>
                            </div>
                            <h3>Tigerman</h3>
                            <p>Surnom donné pour sa puissance et son énergie sur scène</p>
                        </div>
                        <div class="about-highlight-card">
                            <div class="about-highlight-icon">
                                <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </div>
                            <h3>Awards</h3>
                            <p>3 récompenses nationales — Espoir, Chanson et Artiste de l'Année</p>
                        </div>
                    </div>

                    <h2>Icônes Continentales Partagées</h2>
                    <p>Cidson a partagé la scène avec des icônes continentales : <strong>Fally Ipupa, Magic System, Extra Musica, Meïway, Soum Bill, Roga-Roga, Papa Wemba, Oumou Sangaré, Espoir 2000 et J. Martins</strong>.</p>

                    <blockquote class="bio-page-quote">
                        « Il est temps que cette armée agisse pour le rayonnement de la culture tchadienne. »
                        <cite>— CIDSON « L'Astre de Lumière »</cite>
                    </blockquote>

                    <div class="bio-page-cta">
                        <a href="/biographie" class="btn btn-primary">Lire la Biographie Complète</a>
                        <a href="/" class="btn btn-outline">Retour à l'Accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
