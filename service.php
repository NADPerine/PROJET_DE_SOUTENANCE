<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Réservation de Bus - Nos Services</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header with Updated Navigation -->
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

    <!-- Services Main Section -->
    <section class="services-page">
        <div class="services-header">
            <h1>Nos Services</h1>
            <p>Découvrez ce que *TheBestVoyage* met à votre disposition pour un voyage agréable et sécurisé.</p>
        </div>

        <!-- Services Grid -->
        <div class="services-grid">
            <div class="service-card">
                <img src="i5.jpg" alt="Réservations en ligne">
                <h3>Réservations en Ligne</h3>
                <p>Réservez vos billets rapidement via notre plateforme intuitive, disponible 24/7.</p>
                <a href="Connexion3.php" class="btn-primary">Réserver Maintenant</a>
            </div>
            <div class="service-card">
                <img src="Ai6.jpeg" alt="Sécurité garantie">
                <h3>Sécurité Garantie</h3>
                <p>Nos bus modernes et nos conducteurs formés assurent votre tranquillité à chaque trajet.</p>
                <a href="#" class="btn-secondary">En savoir plus</a>
            </div>
            <div class="service-card">
                <img src="i12.jpg" alt="Horaires flexibles">
                <h3>Horaires Flexibles</h3>
                <p>Profitez de départs fréquents adaptés à votre emploi du temps, jour et nuit.</p>
                <a href="#" class="btn-secondary">Voir les Horaires</a>
            </div>
            <div class="service-card">
                <img src="i14.jpg" alt="Confort à bord">
                <h3>Confort à Bord</h3>
                <p>Sièges spacieux, Wi-Fi gratuit et climatisation pour un voyage agréable.</p>
                <a href="#" class="btn-secondary">Découvrir</a>
            </div>
            <div class="service-card">
                <img src="the1.jpg" alt="Service client">
                <h3>Service Client 24/7</h3>
                <p>Une équipe dédiée pour répondre à vos questions et vous assister à tout moment.</p>
                <a href="contact.php" class="btn-secondary">Nous Contacter</a>
            </div>
            <div class="service-card">
                <img src="i9.jpg" alt="Suivi en temps réel">
                <h3>Suivi en Temps Réel</h3>
                <p>Suivez votre bus via notre application pour une planification sans stress.</p>
                <a href="#" class="btn-secondary">Télécharger l’App</a>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="services-cta">
            <h2>Prêt à Voyager avec Nous ?</h2>
            <p>Réservez dès maintenant et profitez de nos services exceptionnels.</p>
            <a href="Connexion3.php" class="btn-primary">Réserver un Trajet</a>
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
        /* Réutilisation des styles existants avec ajustements pour la navbar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif; /* Remplacé Montserrat par Poppins pour cohérence */
        }

        body {
            line-height: 1.6;
            color: #333;
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

        /* Services Section */
        .services-page {
            padding: 8rem 2rem 5rem;
            background-color: #fff;
            text-align: center;
        }

        .services-header h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .services-header p {
            font-size: 1.2rem;
            color: #7f8c8d;
            margin-bottom: 3rem;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto 4rem;
        }

        .service-card {
            background-color: #f8f9fa;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .service-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .service-card h3 {
            color: #2c3e50;
            padding: 1rem;
            font-size: 1.5rem;
        }

        .service-card p {
            color: #7f8c8d;
            padding: 0 1rem 1rem;
        }

        .service-card a {
            display: block;
            margin: 0 1rem 1rem;
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
            text-align: center;
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

        /* Call to Action Section */
        .services-cta {
            background: linear-gradient(rgba(26, 188, 156, 0.9), rgba(26, 188, 156, 0.9)), url('bus-subtle-bg.jpg') no-repeat center center/cover;
            padding: 3rem 2rem;
            color: white;
            text-align: center;
        }

        .services-cta h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .services-cta p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .services-cta .btn-primary {
            display: inline-block;
            padding: 1rem 2rem;
        }

        /* Footer styles */
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
                padding: 1rem;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            }

            .nav-links.active {
                display: flex;
            }

            .services-page {
                padding: 6rem 1rem 3rem;
            }

            .services-header h1 {
                font-size: 2rem;
            }

            .services-cta h2 {
                font-size: 1.5rem;
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
    </script>
</body>

</html>