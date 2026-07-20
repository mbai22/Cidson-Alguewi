// Mobile Menu Toggle
const menuToggle = document.getElementById('menuToggle');
const navLinks = document.getElementById('navLinks');

menuToggle.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});

// Close mobile menu when clicking on a link
const navLinkItems = navLinks.querySelectorAll('a');
navLinkItems.forEach(link => {
    link.addEventListener('click', () => {
        navLinks.classList.remove('active');
    });
});

// Smooth Scroll for Navigation Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href === '#') return;
        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
            const offset = 80;
            const targetPosition = target.offsetTop - offset;
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// Navbar Background on Scroll
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll > 100) {
        navbar.style.backgroundColor = 'rgba(250, 249, 247, 0.98)';
        navbar.style.boxShadow = '0 2px 12px rgba(0,0,0,0.08)';
    } else {
        navbar.style.backgroundColor = 'rgba(250, 249, 247, 0.95)';
        navbar.style.boxShadow = 'none';
    }
});

// Intersection Observer for Scroll Animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

const animatedElements = document.querySelectorAll('.music-card, .album-card, .gallery-preview-item, .concert-blog-card, .press-card, .press-media-card, .award-card');
animatedElements.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
});

// Active nav link based on scroll
const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', () => {
    let current = '';
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        if (window.pageYOffset >= sectionTop - 200) {
            current = section.getAttribute('id');
        }
    });
    
    navLinkItems.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
});

// Contact Form Submission
const contactForm = document.getElementById('contactForm');

contactForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const submitBtn = contactForm.querySelector('button[type=""submit""]');
    const originalText = submitBtn.textContent;
    submitBtn.textContent = 'Envoi en cours...';
    submitBtn.disabled = true;

    const formData = new FormData(contactForm);

    fetch('/contact', {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name=""csrf-token""]')?.content || contactForm.querySelector('input[name=""_token""]')?.value
        }
    })
    .then(response => {
        if (response.ok) {
            showFormMessage('success', 'Merci pour votre message ! Cidson Alguewi vous répondra dans les plus brefs délais.');
            contactForm.reset();
        } else {
            showFormMessage('error', 'Une erreur est survenue. Veuillez réessayer ou contactez-nous directement par email.');
        }
    })
    .catch(() => {
        showFormMessage('success', 'Merci pour votre message ! Cidson Alguewi vous répondra dans les plus brefs délais.');
        contactForm.reset();
    })
    .finally(() => {
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    });
});

function showFormMessage(type, message) {
    let msgEl = document.querySelector('.form-message');
    if (!msgEl) {
        msgEl = document.createElement('div');
        msgEl.className = 'form-message';
        contactForm.parentNode.insertBefore(msgEl, contactForm.nextSibling);
    }
    msgEl.textContent = message;
    msgEl.className = 'form-message form-message-' + type;
    msgEl.style.display = 'block';
    setTimeout(() => { msgEl.style.display = 'none'; }, 6000);
}

// Video Modal
const videoModal = document.getElementById('videoModal');
const modalVideo = document.getElementById('modalVideo');
const videoModalClose = document.querySelector('.video-modal-close');
const aboutPlayButton = document.querySelector('.about-play-button');

if (aboutPlayButton) {
    aboutPlayButton.addEventListener('click', () => {
        const videoSrc = aboutPlayButton.getAttribute('data-video');
        if (videoSrc) {
            modalVideo.src = videoSrc;
            videoModal.classList.add('active');
            document.body.style.overflow = 'hidden';
            modalVideo.play();
        }
    });
}

if (videoModalClose) {
    videoModalClose.addEventListener('click', closeVideoModal);
}

videoModal.addEventListener('click', (e) => {
    if (e.target === videoModal) closeVideoModal();
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        if (videoModal.classList.contains('active')) closeVideoModal();
    }
});

function closeVideoModal() {
    videoModal.classList.remove('active');
    document.body.style.overflow = '';
    modalVideo.pause();
    modalVideo.src = '';
}

// Gallery Filter
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
                item.style.display = 'block';
            } else {
                item.classList.add('hidden');
                item.style.display = 'none';
            }
        });
    });
});

// Lightbox
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
        if (e.key === 'ArrowLeft') {
            const visibleItems = galleryImages.filter(item => !item.classList.contains('hidden'));
            const currentVisibleIndex = visibleItems.indexOf(galleryImages[currentImageIndex]);
            showImage(currentVisibleIndex - 1);
        } else if (e.key === 'ArrowRight') {
            const visibleItems = galleryImages.filter(item => !item.classList.contains('hidden'));
            const currentVisibleIndex = visibleItems.indexOf(galleryImages[currentImageIndex]);
            showImage(currentVisibleIndex + 1);
        }
    }
});

// Scroll to top button (only if not provided by layout)
if (!document.getElementById('scrollTopBtn')) {
    const scrollBtn = document.createElement('button');
    scrollBtn.innerHTML = '&#8593;';
    scrollBtn.className = 'scroll-top-btn';
    scrollBtn.id = 'scrollTopBtn';
    document.body.appendChild(scrollBtn);

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollBtn.style.opacity = '1';
            scrollBtn.style.visibility = 'visible';
        } else {
            scrollBtn.style.opacity = '0';
            scrollBtn.style.visibility = 'hidden';
        }
    });

    scrollBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

// Form validation colors
const formInputs = document.querySelectorAll('.form-input, .form-textarea');

formInputs.forEach(input => {
    input.addEventListener('blur', () => {
        if (input.hasAttribute('required') && !input.value.trim()) {
            input.style.borderColor = '#e74c3c';
        } else {
            input.style.borderColor = '';
        }
    });
    
    input.addEventListener('focus', () => {
        input.style.borderColor = '#c0392b';
    });
});

// Console branding
console.log('%c🎤 CIDSON ALGUEWI — L\'Astre de Lumière', 'font-size: 20px; font-weight: bold; color: #c0392b;');
console.log('%cCréateur du Saïtonic | Artiste Tchadien | #ArméeRouge', 'font-size: 14px; color: #1a365d;');
