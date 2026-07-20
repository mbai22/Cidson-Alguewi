@extends('layouts.app')

@section('page-title', 'Galerie')
@section('meta-description', 'Galerie photos de Cidson Alguewi - Concerts, studio, backstage et moments capturés.')

@section('nav-galerie', 'class="active"')

@section('hero')
    <section class="page-hero page-hero-galerie">
        <div class="container">
            <p class="page-hero-badge">MOMENTS CAPTURÉS</p>
            <h1 class="page-hero-title">Galerie</h1>
            <p class="page-hero-subtitle">Scène, studio et backstage — retrouvez tous les moments de Cidson</p>
            <div class="title-underline"></div>
        </div>
    </section>
@endsection

@section('content')
    <section class="page-content">
        <div class="container">
            <div class="gallery-filters">
                <button class="filter-btn active" data-filter="all">Toutes</button>
                <button class="filter-btn" data-filter="concerts">Concerts</button>
                <button class="filter-btn" data-filter="studio">Studio</button>
                <button class="filter-btn" data-filter="backstage">Backstage</button>
            </div>

            <div class="gallery-grid gallery-grid-full">
                <div class="gallery-item" data-category="concerts">
                    <img src="/img/Galerie/g-1.jpg" alt="Concert 1" class="gallery-image" loading="lazy">
                </div>
                <div class="gallery-item" data-category="studio">
                    <img src="/img/Galerie/g-2.jpg" alt="Studio 1" class="gallery-image" loading="lazy">
                </div>
                <div class="gallery-item" data-category="backstage">
                    <img src="/img/Galerie/g-3.jpg" alt="Backstage 1" class="gallery-image" loading="lazy">
                </div>
                <div class="gallery-item" data-category="concerts">
                    <img src="/img/Galerie/g-4.jpg" alt="Concert 2" class="gallery-image" loading="lazy">
                </div>
                <div class="gallery-item" data-category="studio">
                    <img src="/img/Galerie/g-5.jpg" alt="Studio 2" class="gallery-image" loading="lazy">
                </div>
                <div class="gallery-item" data-category="backstage">
                    <img src="/img/Galerie/g-6.jpg" alt="Backstage 2" class="gallery-image" loading="lazy">
                </div>
                <div class="gallery-item" data-category="concerts">
                    <img src="/img/concert/c-1.jpg" alt="Concert 3" class="gallery-image" loading="lazy">
                </div>
                <div class="gallery-item" data-category="concerts">
                    <img src="/img/concert/C-2.jpg" alt="Concert 4" class="gallery-image" loading="lazy">
                </div>
                <div class="gallery-item" data-category="concerts">
                    <img src="/img/concert/C-3.jpg" alt="Concert FESPAM" class="gallery-image" loading="lazy">
                </div>
                <div class="gallery-item" data-category="concerts">
                    <img src="/img/concert/c-4.jpg" alt="Concert Live" class="gallery-image" loading="lazy">
                </div>
                <div class="gallery-item" data-category="studio">
                    <img src="/img/about-p.gif" alt="Portrait Cidson" class="gallery-image" loading="lazy">
                </div>
                <div class="gallery-item" data-category="studio">
                    <img src="/img/album-1.jpg" alt="Album Champions League" class="gallery-image" loading="lazy">
                </div>
                <div class="gallery-item" data-category="studio">
                    <img src="/img/album-2.jpg" alt="Album Air Force One" class="gallery-image" loading="lazy">
                </div>
                <div class="gallery-item" data-category="backstage">
                    <img src="/img/audio-cidson.jpg" alt="Studio Session" class="gallery-image" loading="lazy">
                </div>
                <div class="gallery-item" data-category="backstage">
                    <img src="/img/audio-cidson-2.jpg" alt="Studio Recording" class="gallery-image" loading="lazy">
                </div>
                <div class="gallery-item" data-category="backstage">
                    <img src="/img/audio-cidson-3.jpg" alt="Backstage" class="gallery-image" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <div id="lightbox" class="lightbox">
        <span class="lightbox-close">&times;</span>
        <img src="" alt="" class="lightbox-image">
        <button class="lightbox-prev" aria-label="Image précédente">&#10094;</button>
        <button class="lightbox-next" aria-label="Image suivante">&#10095;</button>
    </div>
@endsection

@section('page-scripts')
    <script>
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                const filter = button.getAttribute('data-filter');
                galleryItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.classList.remove('hidden');
                        item.style.display = '';
                    } else {
                        item.classList.add('hidden');
                        item.style.display = 'none';
                    }
                });
            });
        });

        const lightbox = document.getElementById('lightbox');
        const lightboxImage = lightbox.querySelector('.lightbox-image');
        const lightboxClose = lightbox.querySelector('.lightbox-close');
        const lightboxPrev = lightbox.querySelector('.lightbox-prev');
        const lightboxNext = lightbox.querySelector('.lightbox-next');
        let currentImageIndex = 0;
        const galleryImages = Array.from(galleryItems);

        galleryItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                currentImageIndex = index;
                const img = item.querySelector('.gallery-image');
                lightboxImage.src = img.src;
                lightboxImage.alt = img.alt;
                lightbox.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        lightboxClose.addEventListener('click', () => {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        });

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                lightbox.classList.remove('active');
                document.body.style.overflow = '';
            }
        });

        function showImage(index) {
            const visibleItems = galleryImages.filter(item => !item.classList.contains('hidden'));
            if (visibleItems.length === 0) return;
            if (index < 0) index = visibleItems.length - 1;
            else if (index >= visibleItems.length) index = 0;
            currentImageIndex = galleryImages.indexOf(visibleItems[index]);
            const img = visibleItems[index].querySelector('.gallery-image');
            lightboxImage.src = img.src;
            lightboxImage.alt = img.alt;
        }

        lightboxPrev.addEventListener('click', (e) => {
            e.stopPropagation();
            const visibleItems = galleryImages.filter(item => !item.classList.contains('hidden'));
            const currentVisibleIndex = visibleItems.indexOf(galleryImages[currentImageIndex]);
            showImage(currentVisibleIndex - 1);
        });

        lightboxNext.addEventListener('click', (e) => {
            e.stopPropagation();
            const visibleItems = galleryImages.filter(item => !item.classList.contains('hidden'));
            const currentVisibleIndex = visibleItems.indexOf(galleryImages[currentImageIndex]);
            showImage(currentVisibleIndex + 1);
        });

        document.addEventListener('keydown', (e) => {
            if (lightbox.classList.contains('active')) {
                if (e.key === 'Escape') {
                    lightbox.classList.remove('active');
                    document.body.style.overflow = '';
                }
                const visibleItems = galleryImages.filter(item => !item.classList.contains('hidden'));
                const currentVisibleIndex = visibleItems.indexOf(galleryImages[currentImageIndex]);
                if (e.key === 'ArrowLeft') showImage(currentVisibleIndex - 1);
                else if (e.key === 'ArrowRight') showImage(currentVisibleIndex + 1);
            }
        });
    </script>
@endsection
