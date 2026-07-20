@extends('layouts.app')

@section('page-title', 'Biographie')
@section('meta-description', 'Biographie complète de Cidson Alguewi - L\'Astre de Lumière, créateur du Saïtonic.')

@section('nav-bio', 'class="active"')

@section('hero')
    <section class="page-hero page-hero-bio">
        <div class="container">
            <p class="page-hero-badge">L'ASTRE DE LUMIÈRE</p>
            <h1 class="page-hero-title">Biographie</h1>
            <p class="page-hero-subtitle">Le parcours complet de CIDSON « L'Astre de Lumière »</p>
            <div class="title-underline"></div>
        </div>
    </section>
@endsection

@section('content')
    <section class="page-content">
        <div class="container">
            <div class="bio-page-grid">
                <div class="bio-page-images">
                    <div class="bio-page-image-main">
                        <img src="/img/about-p.gif" alt="Cidson Alguewi" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=800&h=1000&fit=crop'; this.onerror=null;">
                    </div>
                    <div class="bio-page-image-secondary">
                        <img src="/img/Galerie/g-1.jpg" alt="Cidson en concert" loading="lazy">
                    </div>
                    <div class="bio-page-image-secondary">
                        <img src="/img/Galerie/g-2.jpg" alt="Cidson en studio" loading="lazy">
                    </div>
                </div>

                <div class="bio-page-text">
                    <h2>Un Parcours de Virtuose</h2>
                    <p>Figure de proue de la scène musicale contemporaine au Tchad, <strong>Nguemourou Marouf Placide</strong>, plus connu sous le pseudonyme de <strong>CIDSON « L'Astre de Lumière »</strong>, est une force créatrice dont le rayonnement dépasse les frontières nationales. Né le 13 juillet 1986 à N'Djaména, cet artiste pluridisciplinaire — chanteur, auteur-compositeur, interprète, arrangeur et producteur — a su s'imposer comme l'architecte d'une identité sonore unique.</p>

                    <p>L'ascension de celui que l'on surnomme également le « Tigerman » prend racine dans la ferveur du gospel. Très tôt, son talent précoce pour le rythme le conduit à accompagner, en tant que batteur, les plus grands noms de la musique tchadienne et internationale, à l'instar de l'illustre Jacky Rapon.</p>

                    <p>Cette maîtrise technique et cette expérience de la scène le poussent, fin 2005, à fonder son propre groupe, la <strong>Sahel Academy</strong>. Ce virage marque le début d'une discographie prolifique qui redéfinit les standards de la musique urbaine tchadienne :</p>

                    <ul class="bio-list">
                        <li><strong>2006</strong> — <em>Champions League</em> (Maxi Single)</li>
                        <li><strong>2009</strong> — <em>Total Control</em> (réédité en 2012)</li>
                        <li><strong>2013</strong> — <em>Air Force One</em></li>
                        <li><strong>2019</strong> — <em>Tension</em></li>
                        <li><strong>2020</strong> — Le maxi-single <em>Tricolor</em>, ponctué de nombreux succès en solo</li>
                        <li><strong>2025</strong> — <em>ETREIZE</em> — Dernière sortie</li>
                    </ul>

                    <h2>Reconnaissance et Rayonnement International</h2>
                    <p>Ambassadeur infatigable de la culture tchadienne, Cidson a reçu de nombreuses distinctions sur le plan national. Son talent l'a mené à représenter le Tchad à plusieurs reprises sur les plus grandes scènes internationales :</p>
                    <ul class="bio-list">
                        <li><strong>2011</strong> — Le FESPAM au Congo</li>
                        <li><strong>2023</strong> — Le festival Africajarc en France</li>
                        <li><strong>2025</strong> — Le Tourasna Festival en Allemagne</li>
                    </ul>

                    <h2>L'Innovation Artistique : Le Saïtonic</h2>
                    <p>Au cœur de l'œuvre de Cidson réside une innovation stylistique majeure : le <strong>SAÏTONIC</strong>. Ce genre hybride et audacieux fusionne le Saï (danse et rythme traditionnel tchadien) avec des sonorités électro, tout en y insufflant des nuances de Bazaga et de Rumba. Cette alchimie sonore lui a permis de partager la scène avec des icônes du continent telles que <strong>Fally Ipupa, Magic System, Extra Musica, Meïway, Soum Bill, Roga-Roga, Papa Wemba, Oumou Sangaré, Espoir 2000</strong> ou encore <strong>J. Martins</strong>.</p>

                    <h2>Récompenses &amp; Distinctions</h2>
                    <ul class="bio-list">
                        <li><strong>2007</strong> — Espoir de l'année (Sao Awards)</li>
                        <li><strong>2008</strong> — Chanson de l'année pour « Roméo et Juliette » (Sao Awards)</li>
                        <li><strong>2017</strong> — Meilleur artiste masculin (Dari Awards)</li>
                    </ul>

                    <blockquote class="bio-page-quote">
                        « Il est temps que cette armée agisse pour le rayonnement de la culture tchadienne. »
                        <cite>— CIDSON « L'Astre de Lumière »</cite>
                    </blockquote>

                    <div class="bio-page-cta">
                        <a href="/" class="btn btn-primary">Retour à l'Accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
