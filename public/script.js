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
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const offset = 80; // Height of navbar
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
let lastScroll = 0;

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 100) {
        navbar.style.backgroundColor = 'rgba(0, 0, 0, 0.98)';
    } else {
        navbar.style.backgroundColor = 'rgba(0, 0, 0, 0.9)';
    }
    
    lastScroll = currentScroll;
});

// Form Submission Handler
const contactForm = document.getElementById('contactForm');

contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    // Get form values
    const formData = {
        firstName: document.getElementById('firstName').value,
        lastName: document.getElementById('lastName').value,
        email: document.getElementById('email').value,
        project: document.getElementById('project').value,
        message: document.getElementById('message').value
    };
    
    // Here you would typically send the data to a server
    console.log('Form submitted:', formData);
    
    // Show success message
    alert('Merci pour votre message ! Cidson Alguewi vous répondra dans les plus brefs délais.');
    
    // Reset form
    contactForm.reset();
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

// Observe all cards for animations
const animatedElements = document.querySelectorAll('.portfolio-card, .service-card, .testimonial-card, .music-card, .video-card, .gallery-item, .concert-blog-card, .press-card, .timeline-item, .blog-card');
animatedElements.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
});

// Add active state to navigation based on scroll position
const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', () => {
    let current = '';
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
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

// Parallax effect for hero section
const heroSection = document.querySelector('.hero-section');
const heroBlobs = document.querySelectorAll('.hero-blob');

window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const heroHeight = heroSection.offsetHeight;
    
    if (scrolled < heroHeight) {
        heroBlobs.forEach((blob, index) => {
            const speed = 0.5 + (index * 0.2);
            blob.style.transform = `translateY(${scrolled * speed}px)`;
        });
    }
});

// Add hover effect for portfolio cards
const portfolioCards = document.querySelectorAll('.portfolio-card');

portfolioCards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.zIndex = '10';
    });
    
    card.addEventListener('mouseleave', () => {
        card.style.zIndex = '1';
    });
});

// Lazy loading for images
const images = document.querySelectorAll('img');

const imageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const img = entry.target;
            if (img.dataset.src) {
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
            }
            observer.unobserve(img);
        }
    });
});

images.forEach(img => {
    imageObserver.observe(img);
});

// Add typing effect to hero subtitle (optional enhancement)
function typeWriter(element, text, speed = 50) {
    let i = 0;
    element.innerHTML = '';
    
    function type() {
        if (i < text.length) {
            element.innerHTML += text.charAt(i);
            i++;
            setTimeout(type, speed);
        }
    }
    
    type();
}

// Uncomment to enable typing effect
// const heroSubtitle = document.querySelector('.hero-subtitle');
// const originalText = heroSubtitle.textContent;
// window.addEventListener('load', () => {
//     typeWriter(heroSubtitle, originalText, 30);
// });

// Handle external link clicks
document.querySelectorAll('a[href^="http"]').forEach(link => {
    link.setAttribute('target', '_blank');
    link.setAttribute('rel', 'noopener noreferrer');
});

// Add ripple effect to buttons
const buttons = document.querySelectorAll('.btn');

buttons.forEach(button => {
    button.addEventListener('click', function(e) {
        const ripple = document.createElement('span');
        const rect = button.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;
        
        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.classList.add('ripple');
        
        button.appendChild(ripple);
        
        setTimeout(() => {
            ripple.remove();
        }, 600);
    });
});

// Video Modal Functionality
const videoModal = document.getElementById('videoModal');
const modalVideo = document.getElementById('modalVideo');
const videoModalClose = document.querySelector('.video-modal-close');
const aboutPlayButton = document.querySelector('.about-play-button');

// Open video modal
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

// Close video modal
if (videoModalClose) {
    videoModalClose.addEventListener('click', () => {
        closeVideoModal();
    });
}

// Close modal when clicking outside
videoModal.addEventListener('click', (e) => {
    if (e.target === videoModal) {
        closeVideoModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && videoModal.classList.contains('active')) {
        closeVideoModal();
    }
});

function closeVideoModal() {
    videoModal.classList.remove('active');
    document.body.style.overflow = '';
    modalVideo.pause();
    modalVideo.src = '';
}

// Newsletter Form Handler
const newsletterForm = document.getElementById('newsletterForm');
if (newsletterForm) {
    newsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const email = document.getElementById('newsletterEmail').value;
        console.log('Newsletter subscription:', email);
        alert('Merci pour votre inscription à la newsletter !');
        newsletterForm.reset();
    });
}

// Blog Modal Functionality
const blogModal = document.getElementById('blogModal');
const blogModalClose = document.querySelector('.blog-modal-close');
const blogReadMoreButtons = document.querySelectorAll('.blog-read-more');
const blogModalTitle = document.querySelector('.blog-modal-title');
const blogModalMeta = document.querySelector('.blog-modal-meta');
const blogFullContent = document.querySelector('.blog-full-content');
const commentsList = document.querySelector('.comments-list');
const commentForm = document.getElementById('commentForm');

// Blog data (you can expand this with real data)
const blogData = {
    1: {
        title: 'Nouveau Single "Asso" Disponible',
        date: '15 Mars 2026',
        author: 'Browning T',
        comments: 12,
        content: 'Découvrez le nouveau single "Asso" disponible sur toutes les plateformes de streaming. Un titre qui marque une nouvelle étape dans l\'évolution musicale de Browning T. Ce morceau combine les sonorités afrobeat authentiques avec des influences modernes, créant une expérience musicale unique qui résonne avec les fans du monde entier. Le clip officiel sera disponible très prochainement !'
    },
    2: {
        title: 'Retour sur le Festival Afrobeat 2026',
        date: '10 Mars 2026',
        author: 'Browning T',
        comments: 8,
        content: 'Revivez les moments forts du Festival Afrobeat 2026 avec une performance mémorable et une énergie incroyable partagée avec le public. Ce fut une soirée inoubliable avec des interactions authentiques, des moments de partage et une connexion unique avec les fans. Merci à tous ceux qui ont rendu ce moment possible !'
    },
    3: {
        title: 'Nouvelle Collaboration en Préparation',
        date: '5 Mars 2026',
        author: 'Browning T',
        comments: 25,
        content: 'Browning T annonce une collaboration surprise avec un artiste international. Plus d\'infos très bientôt ! Cette collaboration promet d\'être exceptionnelle et marquera un nouveau chapitre dans la carrière de l\'artiste. Restez connectés pour découvrir les détails dans les prochaines semaines.'
    }
};

// Store comments (in a real app, this would be in a database)
let blogComments = {
    1: [
        { name: 'Jean Dupont', text: 'Superbe single ! J\'adore !', date: '16 Mars 2026' },
        { name: 'Marie Koné', text: 'Félicitations pour cette sortie !', date: '16 Mars 2026' }
    ],
    2: [
        { name: 'Thomas', text: 'Concert incroyable ! Merci pour cette soirée.', date: '11 Mars 2026' }
    ],
    3: [
        { name: 'Sarah', text: 'Hâte de découvrir cette collaboration !', date: '6 Mars 2026' },
        { name: 'Paul', text: 'Qui est l\'artiste ? On veut savoir !', date: '6 Mars 2026' }
    ]
};

function openBlogModal(blogId) {
    const data = blogData[blogId];
    if (!data) return;
    
    blogModalTitle.textContent = data.title;
    blogModalMeta.innerHTML = `
        <span>Par ${data.author}</span>
        <span>${data.date}</span>
        <span>${data.comments} commentaires</span>
    `;
    blogFullContent.textContent = data.content;
    
    // Load comments
    const comments = blogComments[blogId] || [];
    commentsList.innerHTML = comments.map(comment => `
        <div class="comment-item">
            <div class="comment-author">${comment.name}</div>
            <div class="comment-text">${comment.text}</div>
            <div style="font-size: 0.85rem; color: var(--color-muted); margin-top: 0.5rem;">${comment.date}</div>
        </div>
    `).join('');
    
    // Store current blog ID for comment submission
    commentForm.dataset.blogId = blogId;
    
    blogModal.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeBlogModal() {
    blogModal.classList.remove('active');
    document.body.style.overflow = '';
}

// Open blog modal
blogReadMoreButtons.forEach(button => {
    button.addEventListener('click', () => {
        const blogId = button.getAttribute('data-blog-id');
        openBlogModal(blogId);
    });
});

// Close blog modal
if (blogModalClose) {
    blogModalClose.addEventListener('click', closeBlogModal);
}

blogModal.addEventListener('click', (e) => {
    if (e.target === blogModal) {
        closeBlogModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && blogModal.classList.contains('active')) {
        closeBlogModal();
    }
});

// Comment form submission
if (commentForm) {
    commentForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const blogId = commentForm.dataset.blogId;
        const name = document.getElementById('commentName').value;
        const text = document.getElementById('commentText').value;
        
        if (!blogId || !name || !text) return;
        
        // Add comment
        if (!blogComments[blogId]) {
            blogComments[blogId] = [];
        }
        
        const newComment = {
            name: name,
            text: text,
            date: new Date().toLocaleDateString('fr-FR', { day: 'numeric', month: 'long', year: 'numeric' })
        };
        
        blogComments[blogId].unshift(newComment);
        
        // Update comments list
        const comments = blogComments[blogId];
        commentsList.innerHTML = comments.map(comment => `
            <div class="comment-item">
                <div class="comment-author">${comment.name}</div>
                <div class="comment-text">${comment.text}</div>
                <div style="font-size: 0.85rem; color: var(--color-muted); margin-top: 0.5rem;">${comment.date}</div>
            </div>
        `).join('');
        
        // Update comment count
        const commentCount = comments.length;
        const metaText = blogModalMeta.textContent;
        blogModalMeta.innerHTML = metaText.replace(/\d+ commentaires/, `${commentCount} commentaires`);
        
        // Reset form
        commentForm.reset();
        
        // Show success message
        const successMsg = document.createElement('div');
        successMsg.textContent = 'Commentaire publié !';
        successMsg.style.cssText = 'padding: 0.75rem; background: rgba(251, 191, 36, 0.2); color: var(--color-gold); border-radius: 8px; margin-bottom: 1rem; text-align: center;';
        commentForm.parentElement.insertBefore(successMsg, commentForm);
        
        setTimeout(() => {
            successMsg.remove();
        }, 3000);
    });
}

// Console message
console.log('%c🎤 Bienvenue sur le site de Cidson Alguewi!', 'font-size: 20px; font-weight: bold; color: #dc2626;');
console.log('%cCréateur du Saïtonic | Artiste Tchadien | #ArméeRouge', 'font-size: 14px; color: #1a365d;');

// Performance monitoring
window.addEventListener('load', () => {
    const loadTime = window.performance.timing.domContentLoadedEventEnd - window.performance.timing.navigationStart;
    console.log(`Page loaded in ${loadTime}ms`);
});

// Handle form validation
const formInputs = document.querySelectorAll('.form-input, .form-textarea');

formInputs.forEach(input => {
    input.addEventListener('blur', () => {
        if (input.hasAttribute('required') && !input.value.trim()) {
            input.style.borderColor = '#ef4444';
        } else {
            input.style.borderColor = 'rgba(42, 42, 42, 0.5)';
        }
    });
    
    input.addEventListener('focus', () => {
        input.style.borderColor = '#fbbf24';
    });
});

// Email validation
const emailInput = document.getElementById('email');

emailInput.addEventListener('blur', () => {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (emailInput.value && !emailPattern.test(emailInput.value)) {
        emailInput.style.borderColor = '#ef4444';
    } else if (emailInput.value) {
        emailInput.style.borderColor = '#fbbf24';
    }
});

// Add scroll to top button
const scrollTopBtn = document.createElement('button');
scrollTopBtn.innerHTML = '↑';
scrollTopBtn.className = 'scroll-top-btn';
scrollTopBtn.style.cssText = `
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #fbbf24;
    color: #000000;
    border: none;
    font-size: 24px;
    cursor: pointer;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    z-index: 1000;
    box-shadow: 0 4px 12px rgba(251, 191, 36, 0.4);
`;

document.body.appendChild(scrollTopBtn);

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        scrollTopBtn.style.opacity = '1';
        scrollTopBtn.style.visibility = 'visible';
    } else {
        scrollTopBtn.style.opacity = '0';
        scrollTopBtn.style.visibility = 'hidden';
    }
});

scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

scrollTopBtn.addEventListener('mouseenter', () => {
    scrollTopBtn.style.backgroundColor = '#f59e0b';
    scrollTopBtn.style.transform = 'scale(1.1)';
});

scrollTopBtn.addEventListener('mouseleave', () => {
    scrollTopBtn.style.backgroundColor = '#fbbf24';
    scrollTopBtn.style.transform = 'scale(1)';
});

// Gallery Filter Functionality
const filterButtons = document.querySelectorAll('.filter-btn');
const galleryItems = document.querySelectorAll('.gallery-item');

filterButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove active class from all buttons
        filterButtons.forEach(btn => btn.classList.remove('active'));
        // Add active class to clicked button
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

// Lightbox Functionality
const lightbox = document.getElementById('lightbox');
const lightboxImage = lightbox.querySelector('.lightbox-image');
const lightboxClose = lightbox.querySelector('.lightbox-close');
const lightboxPrev = lightbox.querySelector('.lightbox-prev');
const lightboxNext = lightbox.querySelector('.lightbox-next');

let currentImageIndex = 0;
const galleryImages = Array.from(galleryItems);

// Open lightbox when clicking on gallery image
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

// Close lightbox
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

// Navigate lightbox
function showImage(index) {
    const visibleItems = galleryImages.filter(item => !item.classList.contains('hidden'));
    if (visibleItems.length === 0) return;
    
    if (index < 0) {
        index = visibleItems.length - 1;
    } else if (index >= visibleItems.length) {
        index = 0;
    }
    
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

// Keyboard navigation for lightbox
document.addEventListener('keydown', (e) => {
    if (lightbox.classList.contains('active')) {
        if (e.key === 'Escape') {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        } else if (e.key === 'ArrowLeft') {
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

// Update form validation colors
formInputs.forEach(input => {
    input.addEventListener('blur', () => {
        if (input.hasAttribute('required') && !input.value.trim()) {
            input.style.borderColor = '#ef4444';
        } else {
            input.style.borderColor = 'rgba(42, 42, 42, 0.5)';
        }
    });
});
