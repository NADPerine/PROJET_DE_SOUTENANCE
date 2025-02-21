<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Réservation de Bus - Accueil</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header with Navigation -->
    <header>
        <nav>
            <div class="logo">TheBestVoyage</div>
            <ul class="nav-links">
                <li><a href="#home">Accueil</a></li>
                <li><a href="#services">Nos Services</a></li>
                <li><a href="#about">À Propos</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#search" class="search-icon">🔍</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section with Carousel -->
    <section class="hero">
        <div class="hero-content">
            <h1>VOYAGER DOIT POUVOIR ÊTRE SANS DANGER</h1>
            <p>Réservez votre trajet en toute sécurité et simplicité</p>
            <div class="cta-buttons">
                <a href="Connexion2.php" class="btn-primary">Réserver Maintenant</a>
                <a href="Connexion2.php" class="btn-secondary">Explorer Nos Destinations</a>
            </div>
        </div>
        <div class="carousel">
            <div class="carousel-images">
                <img src="i5.jpg" alt="Bus moderne 1">
                <img src="i6.jpg" alt="Bus moderne 2">
                <img src="i3.jpg" alt="Bus moderne 3">
                <img src="i4.jpg" alt="Bus moderne 4">
            </div>
            <button class="carousel-prev">❮</button>
            <button class="carousel-next">❯</button>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="features">
        <h2>Pourquoi Nous Choisir ?</h2>
        <div class="feature-grid">
            <div class="feature-card security">
                <h3>Sécurité Garantie</h3>
                <p>Bus modernes, conducteurs formés, suivi en temps réel.</p>
            </div>
            <div class="feature-card booking">
                <h3>Réservations Faciles</h3>
                <p>Interface intuitive et paiement sécurisé.</p>
            </div>
            <div class="feature-card schedule">
                <h3>Horaires Flexibles</h3>
                <p>Départs 24/7 pour s’adapter à votre emploi du temps.</p>
            </div>
        </div>
    </section>

    <!-- Search and Booking Widget -->
    <section class="booking-widget">
        <h2>Trouvez Votre Prochain Trajet</h2>
        <form>
            <input type="text" placeholder="Ville de départ" required>
            <input type="text" placeholder="Ville d'arrivée" required>
            <input type="date" required>
            <button type="submit">Rechercher</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>TheBestVoyage</h4>
                <p>Votre partenaire de voyage sûr et fiable.</p>
            </div>
            <div class="footer-section">
                <h4>Liens Utiles</h4>
                <ul>
                    <li><a href="#terms">Conditions d'Utilisation</a></li>
                    <li><a href="#privacy">Politique de Confidentialité</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Contact</h4>
                <p>Email: contact@TheBestVoyage.com</p>
                <p>Téléphone: +237 677138870</p>
            </div>
        </div>
        <p class="copyright">© 2025 BusVoyage. Tous droits réservés.</p>
    </footer>
    <style>
       * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

body {
    line-height: 1.6;
    color: #333;
}

/* Header and Navigation */
header {
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

nav {
    max-width: 1200px;
    margin: 0 auto;
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: #2c3e50;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 2rem;
}

.nav-links li a {
    text-decoration: none;
    color: #2c3e50;
    font-weight: 500;
}

.nav-links li a:hover, .search-icon:hover {
    color: #1abc9c;
}

.search-icon {
    font-size: 1.2rem;
    cursor: pointer;
}

/* Hero Section with Carousel */
.hero {
    height: 100vh;
    background: url('bus-background.jpg') no-repeat center center/cover;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 5rem;
    position: relative;
    overflow: hidden;
}

.hero-content {
    z-index: 10;
    max-width: 50%;
}

.hero-content h1 {
    font-size: 3rem;
    color: #2c3e50;
    margin-bottom: 1rem;
}

.hero-content p {
    font-size: 1.2rem;
    color: #7f8c8d;
    margin-bottom: 2rem;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
}

.btn-primary, .btn-secondary {
    padding: 1rem 2rem;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s;
}

.btn-primary {
    background-color: #1abc9c;
    color: white;
}

.btn-primary:hover {
    background-color: #16a085;
}

.btn-secondary {
    background-color: #ecf0f1;
    color: #2c3e50;
}

.btn-secondary:hover {
    background-color: #d5dbdb;
}

/* Carousel Styles */
.carousel {
    position: relative;
    width: 50%;
    height: 70%;
    overflow: hidden;
}

.carousel-images {
    display: flex;
    width: 400%;
    height: 100%;
    transition: transform 0.5s ease;
}

.carousel-images img {
    width: 25%;
    height: 100%;
    object-fit: cover;
}

.carousel-prev, .carousel-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 1rem;
    cursor: pointer;
    z-index: 11;
}

.carousel-prev {
    left: 10px;
}

.carousel-next {
    right: 10px;
}

/* Features Section */
/* modifier  */
.features {
    padding: 5rem 2rem;
    background-color: #fff;
    text-align: center;
}

.features h2 {
    font-size: 2rem;
    color: #2c3e50;
    margin-bottom: 3rem;
}

.feature-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto;
}

.feature-card {
    padding: 2rem;
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    position: relative;
}

.feature-card::before {
    display: block;
    width: 50px;
    height: 50px;
    margin: 0 auto 1rem;
}

.feature-card.security::before {
    content: url('.png'); /*Icône de sécurité*/
    background-image: url("i4.jpg");
    background-position: center;
    background-size: cover;
    border-radius: 50px;
    height: 150px;
    width: 200px;
}


.feature-card.booking::before {
    content: url('.png'); /* Icône de réservation */
    background-image: url("i7.jpg");
    background-position: center;
    background-size: cover;
    border-radius: 50px;
    height: 150px;
    width: 200px;
}

.feature-card.schedule::before {
    content: url('.png'); /* Icône d'horloge */
    background-image: url("i5.jpg");
    background-position: center;
    background-size: cover;
    border-radius: 50px;
    height: 150px;
    width: 200px;
}
.feature-card.security,.feature-card.booking,.feature-card.schedule{
    font-weight: bold;
}


.feature-card h3 {
    color: #2c3e50;
    margin-bottom: 1rem;
}

.feature-card p {
    color: #7f8c8d;
}

/* Booking Widget */
.booking-widget {
    padding: 4rem 2rem;
    background: linear-gradient(rgba(26, 188, 156, 0.9), rgba(26, 188, 156, 0.9)), url('bus-subtle-bg.jpg') no-repeat center center/cover;
    color: white;
    text-align: center;
}

.booking-widget h2 {
    font-size: 2rem;
    margin-bottom: 2rem;
}

.booking-widget form {
    max-width: 600px;
    margin: 0 auto;
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.booking-widget input {
    padding: 0.8rem;
    border: none;
    border-radius: 5px;
    flex: 1;
    min-width: 200px;
}

.booking-widget button {
    padding: 0.8rem 2rem;
    background-color: #2c3e50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.booking-widget button:hover {
    background-color: #34495e;
}

/* Footer */
footer {
    background-color: #2c3e50;
    color: white;
    padding: 3rem 2rem;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    margin-bottom: 2rem;
}

.footer-section h4 {
    margin-bottom: 1rem;
}

.footer-section ul {
    list-style: none;
}

.footer-section ul li a {
    color: white;
    text-decoration: none;
}

.footer-section ul li a:hover {
    color: #1abc9c;
}

.copyright {
    text-align: center;
    padding-top: 1rem;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero {
        padding: 0 2rem;
        flex-direction: column;
        text-align: center;
        height: auto;
        padding-top: 80px;
    }

    .hero-content {
        max-width: 100%;
    }

    .carousel {
        width: 100%;
        margin-top: 2rem;
    }

    .hero-content h1 {
        font-size: 2rem;
    }

    .nav-links {
        display: none;
    }

    .cta-buttons {
        flex-direction: column;
    }

    .btn-primary, .btn-secondary {
        width: 100%;
    }
}
    </style>
    <script>
        // Basic carousel functionality
        const carouselImages = document.querySelector('.carousel-images');
        const prevButton = document.querySelector('.carousel-prev');
        const nextButton = document.querySelector('.carousel-next');
        let currentIndex = 0;

        function updateCarousel() {
            const width = 25; // 100% / 4 images
            carouselImages.style.transform = translateX(-${currentIndex * width}%);
        }

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : 3;
            updateCarousel();
        });

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex < 3) ? currentIndex + 1 : 0;
            updateCarousel();
        });

        // Auto-advance carousel every 5 seconds
        setInterval(() => {
            currentIndex = (currentIndex < 3) ? currentIndex + 1 : 0;
            updateCarousel();
        }, 5000);
    </script>
</body>
</html>