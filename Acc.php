<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Réservation de Bus - Accueil</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Header with Navigation -->
    <header>
        <nav>
            <div class="logo">TheBestVoyage</div>
            <div class="search-bar">
                <span class="search-icon">🔍</span>
                <input type="text" class="search-input" placeholder="Rechercher...">
            </div>
            <button class="hamburger">☰</button>
            <ul class="nav-links">
                <li><a href="ACCUEIL5.php">Accueil</a></li>
                <li><a href="service.php">Nos Services</a></li>
                <li><a href="Apropos.php">À Propos</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="TableauBordClient.php">Tableau de bord</a></li> <!-- Ajout du lien Tableau de bord -->

            </ul>
        </nav>
    </header>

    <!-- Hero Section with Carousel -->
    <section class="hero">
        <div class="carousel">
            <div class="carousel-images">
                <img src="ist5.jpg" alt="Bus moderne 1">
                <img src="i18.jpg" alt="Bus moderne 2">
                <img src="i16.jpg" alt="Bus moderne 3">
                <img src="i11.jpg" alt="Bus moderne 4">
            </div>
            <button class="carousel-prev">❮</button>
            <button class="carousel-next">❯</button>
        </div>
        <div class="hero-content">
            <h1>VOYAGER DOIT POUVOIR ÊTRE SANS DANGER</h1>
            <p>Réservez votre trajet en toute sécurité et simplicité</p>
            <div class="cta-buttons">
                <a href="Connexion3.php" class="btn-primary">Réserver Maintenant</a>
                <a href="destination.php" class="btn-secondary">Explorer Nos Destinations</a>
            </div>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="features">
        <h2>Pourquoi Nous Choisir ?</h2>
        <div class="feature-grid">
            <div class="feature-card security">
                <img src="i4.jpg" alt="Sécurité Garantie">
                <h3>Sécurité Garantie</h3>
                <p>Bus modernes, conducteurs formés, suivi en temps réel.</p>
            </div>
            <div class="feature-card booking">
                <img src="i7.jpg" alt="Réservations Faciles">
                <h3>Réservations Faciles</h3>
                <p>Interface intuitive et paiement sécurisé.</p>
            </div>
            <div class="feature-card schedule">
                <img src="i5.jpg" alt="Horaires Flexibles">
                <h3>Horaires Flexibles</h3>
                <p>Départs 24/7 pour s’adapter à votre emploi du temps.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>Ce Que Disent Nos Clients</h2>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <p>"Voyage confortable et sécurisé. Le processus de réservation est tellement simple !"</p>
                <h4>Marie D.</h4>
                <span>Cliente régulière</span>
            </div>
            <div class="testimonial-card">
                <p>"Les bus sont modernes et toujours à l'heure. Je recommande vivement !"</p>
                <h4>Jean P.</h4>
                <span>Voyageur d'affaires</span>
            </div>
            <div class="testimonial-card">
                <p>"Service client exceptionnel et trajets flexibles. Une expérience parfaite."</p>
                <h4>Sophie L.</h4>
                <span>Touriste</span>
            </div>
        </div>
    </section>

    <!-- New Partners Section -->
    <section class="partners">
        <h2>Nos Partenaires</h2>
        <div class="partner-grid">
            <div class="partner-card">
                <img src="partner1.jpg" alt="Partenaire 1">
                <h3>Transport Express</h3>
                <p>Collaboration pour des trajets longue distance.</p>
            </div>
            <div class="partner-card">
                <img src="partner2.jpg" alt="Partenaire 2">
                <h3>Hotel Comfort</h3>
                <p>Offres spéciales pour les voyageurs.</p>
            </div>
            <div class="partner-card">
                <img src="partner3.jpg" alt="Partenaire 3">
                <h3>Tourisme Local</h3>
                <p>Excursions organisées à l'arrivée.</p>
            </div>
        </div>
    </section>

    <!-- Search and Booking Widget -->
    <section class="booking-widget">
        <h2>Trouvez Votre Prochain Trajet</h2>
        <form>
            <input type="text" placeholder="Ville de départ" required>
            <input type="text" placeholder="Ville d'arrivée" required>
            <input type="date" required>
            <button type="submit">Rechercher</button>
        </form>
    </section>

    <!-- Popular Destinations Section -->
    <section class="destinations">
        <h2>Destinations Populaires</h2>
        <div class="destination-grid">
            <div class="destination-card">
                <img src="yaounde.jpeg" alt="Destination 1">
                <h3>Yaoundé</h3>
                <p>Découvrez la capitale politique avec ses collines verdoyantes.</p>
                <a href="destination.php" class="btn-secondary">En savoir plus</a>
            </div>
            <div class="destination-card">
                <img src="kribi.jpeg" alt="Kribi">
                <h3>Kribi</h3>
                <p>Détendez-vous sur les plages de sable blanc et admirez les chutes de la Lobé.</p>
                <div class="destination-buttons">
                    <a href="destination.php" class="btn-secondary">En savoir plus</a>
                </div>
            </div>
            <div class="destination-card">
                <img src="bafoussam.jpeg" alt="Destination 3">
                <h3>Bafoussam</h3>
                <p>Profitez des paysages montagneux et de la culture riche.</p>
                <a href="destination.php" class="btn-secondary">En savoir plus</a>
            </div>
        </div>
    </section>

    <!-- New FAQ Section -->
    <section class="faq">
        <h2>Foire Aux Questions</h2>
        <div class="faq-grid">
            <div class="faq-item">
                <h3>Comment réserver un billet ?</h3>
                <p>Utilisez notre widget de recherche, sélectionnez votre trajet et suivez les étapes de paiement sécurisé.</p>
            </div>
            <div class="faq-item">
                <h3>Puis-je annuler ma réservation ?</h3>
                <p>Oui, les annulations sont possibles jusqu'à 24 heures avant le départ avec un remboursement partiel.</p>
            </div>
            <div class="faq-item">
                <h3>Les bus ont-ils le Wi-Fi ?</h3>
                <p>La plupart de nos bus modernes sont équipés du Wi-Fi gratuit pour votre confort.</p>
            </div>
            <div class="faq-item">
                <h3>Que faire en cas de retard ?</h3>
                <p>Contactez notre service client au +237 677138870 pour une assistance immédiate.</p>
            </div>
        </div>
    </section>

    <!-- Travel Tips Section -->
    <section class="travel-tips">
        <h2>Conseils de Voyage</h2>
        <div class="tips-grid">
            <div class="tip-card">
                <h3>Planifiez à l'avance</h3>
                <p>Réservez vos billets tôt pour obtenir les meilleurs prix et places.</p>
            </div>
            <div class="tip-card">
                <h3>Voyagez léger</h3>
                <p>Apportez uniquement l’essentiel pour un trajet plus confortable.</p>
            </div>
            <div class="tip-card">
                <h3>Restez connecté</h3>
                <p>Téléchargez notre application pour suivre votre bus en temps réel.</p>
            </div>
        </div>
    </section>

    <!-- New Photo Gallery Section -->
    <section class="gallery">
        <h2>Galerie Photos</h2>
        <div class="gallery-grid">
            <img src="i14.jpg" alt="Intérieur du bus">
            <img src="i19.jpg" alt="Paysage depuis la fenêtre">
            <img src="i12.jpg" alt="Conducteur professionnel">
            <img src="i20.jpg" alt="Arrêt de bus">
            <img src="i9.jpg" alt="Bus en mouvement">
            <img src="i16.jpg" alt="Passagers satisfaits">
            <img src="i13.jpg" alt="Passagers satisfaits">
            <img src="i7.jpg" alt="Passagers satisfaits">
            <img src="i8.jpg" alt="Passagers satisfaits">
            <img src="i10.jpg" alt="Passagers satisfaits">
        </div>
    </section>

    <!-- New Our Story Section -->
    <section class="our-story">
        <h2>Notre Histoire</h2>
        <div class="story-content">
            <p>Fondée en 2010, TheBestVoyage a débuté avec une mission simple : rendre les voyages en bus sûrs, abordables et confortables pour tous. Avec une flotte initiale de 5 bus, nous avons grandi pour devenir un leader dans le transport interurbain au Cameroun.</p>
            <p>Au fil des ans, nous avons investi dans des technologies modernes, formé nos conducteurs aux normes internationales et élargi notre réseau pour connecter plus de 20 villes. Aujourd’hui, nous transportons des milliers de passagers chaque mois grâce à notre engagement envers l’excellence.</p>
            <p>Notre vision est de continuer à innover, en intégrant des solutions écologiques comme des bus hybrides et en améliorant constamment l’expérience client.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>TheBestVoyage</h4>
                <p>Votre partenaire de voyage sûr et fiable.</p>
            </div>
            <div class="footer-section">
                <h4>Liens Utiles</h4>
                <ul>
                    <li><a href="#terms">Conditions d'Utilisation</a></li>
                    <li><a href="#privacy">Politique de Confidentialité</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Contact</h4>
                <p>Email: contact@TheBestVoyage.com</p>
                <p>Téléphone: +237 677138870</p>
            </div>
        </div>
        <p class="copyright">© 2025 BusVoyage. Tous droits réservés.</p>
    </footer>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        html {
            background-color: #fff;
        }

        body {
            line-height: 1.6;
            color: #333;
            background-color: #fff;
        }

        /* Header and Navigation */
        header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        nav {
            max-width: 1300px;
            margin: 0 auto;
            padding: 1.2rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.6rem;
            font-weight: 600;
            color: #1abc9c;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 2.5rem;
        }

        .nav-links li a {
            text-decoration: none;
            color: #2c3e50;
            font-weight: 400;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .nav-links li a:hover {
            color: #1abc9c;
        }

        .search-bar {
            display: flex;
            align-items: center;
            background-color: #f8f9fa;
            border-radius: 25px;
            padding: 0.5rem 1rem;
            max-width: 350px;
            transition: all 0.3s ease;
        }

        .search-bar:hover {
            background-color: #eef2f5;
        }

        .search-icon {
            font-size: 1.1rem;
            color: #2c3e50;
            margin-right: 0.5rem;
        }

        .search-input {
            border: none;
            background: none;
            outline: none;
            font-size: 0.95rem;
            color: #2c3e50;
            width: 100%;
        }

        .hamburger {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #2c3e50;
            cursor: pointer;
        }

        /* Hero Section with Carousel */
        .hero {
            height: 100vh;
            position: relative;
            overflow: hidden;
            background-color: #fff;
        }

        .carousel {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
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

        .carousel-prev,
        .carousel-next {
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

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            text-align: center;
            color: white;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
        }

        .hero-content h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .btn-primary,
        .btn-secondary {
            padding: 1rem 2rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .btn-primary {
            background-color: #1abc9c;
            color: white;
            box-shadow: 0 0 10px rgba(231, 76, 60, 0.5);
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

        /* Features Section */
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
            background-color: #f8f9fa;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 20px 5px rgba(0, 0, 0, 0.1);
        }

        .feature-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .feature-card h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .feature-card p {
            color: #7f8c8d;
            padding: 0 1rem 1rem;
        }

        /* Testimonials Section Styles */
        .testimonials {
            padding: 5rem 2rem;
            background-color: #f8f9fa;
            text-align: center;
        }

        .testimonials h2 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 3rem;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .testimonial-card {
            padding: 2rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .testimonial-card p {
            font-style: italic;
            color: #7f8c8d;
            margin-bottom: 1rem;
        }

        .testimonial-card h4 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .testimonial-card span {
            color: #1abc9c;
            font-size: 0.9rem;
        }

        /* New Partners Section Styles */
        .partners {
            padding: 5rem 2rem;
            background-color: #fff;
            text-align: center;
        }

        .partners h2 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 3rem;
        }

        .partner-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .partner-card {
            padding: 2rem;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .partner-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .partner-card h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .partner-card p {
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

        /* Popular Destinations Section Styles */
        .destinations {
            padding: 5rem 2rem;
            background-color: #fff;
            text-align: center;
        }

        .destinations h2 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 3rem;
        }

        .destination-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .destination-card {
            background-color: #f8f9fa;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .destination-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .destination-card h3 {
            color: #2c3e50;
            padding: 1rem;
        }

        .destination-card p {
            color: #7f8c8d;
            padding: 0 1rem 1rem;
        }

        .destination-card a {
            display: block;
            margin: 0 1rem 1rem;
        }

        /* New FAQ Section Styles */
        .faq {
            padding: 5rem 2rem;
            background-color: #f8f9fa;
            text-align: center;
        }

        .faq h2 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 3rem;
        }

        .faq-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .faq-item {
            padding: 2rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .faq-item h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .faq-item p {
            color: #7f8c8d;
        }

        /* Travel Tips Section Styles */
        .travel-tips {
            padding: 5rem 2rem;
            background-color: #f8f9fa;
            text-align: center;
        }

        .travel-tips h2 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 3rem;
        }

        .tips-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .tip-card {
            padding: 2rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .tip-card h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .tip-card p {
            color: #7f8c8d;
        }

        /* New Gallery Section Styles */
        .gallery {
            padding: 5rem 2rem;
            background-color: #fff;
            text-align: center;
        }

        .gallery h2 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 3rem;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-grid img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* New Our Story Section Styles */
        .our-story {
            padding: 5rem 2rem;
            background-color: #f8f9fa;
            text-align: center;
        }

        .our-story h2 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 3rem;
        }

        .story-content {
            max-width: 1100px;
            margin: 0 auto;
            text-align: left;
        }

        .story-content p {
            color: #7f8c8d;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
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

        /* Responsive Design with Hamburger Menu */
        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background-color: #fff;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
                padding: 1rem;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links li {
                margin: 0.5rem 0;
            }

            .search-bar {
                margin: 0 0.5rem;
            }

            .hero {
                padding-top: 80px;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .cta-buttons {
                flex-direction: column;
            }

            .btn-primary,
            .btn-secondary {
                width: 100%;
            }
        }
    </style>

    <script>
        // Hamburger Menu Functionality
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            hamburger.textContent = navLinks.classList.contains('active') ? '✕' : '☰';
        });

        // Search Bar Functionality
        const searchBar = document.querySelector('.search-bar');
        const searchInput = document.querySelector('.search-input');

        searchBar.addEventListener('click', () => {
            searchInput.focus();
        });

        // Basic carousel functionality
        const carouselImages = document.querySelector('.carousel-images');
        const prevButton = document.querySelector('.carousel-prev');
        const nextButton = document.querySelector('.carousel-next');
        let currentIndex = 0;

        function updateCarousel() {
            const width = 25; // 100% / 4 images
            carouselImages.style.transform = `translateX(-${currentIndex * width}%)`;
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