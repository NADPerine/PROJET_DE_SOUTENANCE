<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Réservation de Bus - À Propos</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Header with Navigation (Remplacé par la navbar mémorisée) -->
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

    <!-- About Main Section -->
    <section class="about-page">
        <div class="about-hero">
            <h1>Qui Sommes-Nous ?</h1>
            <h2>The Best Voyage :</h2>
            <p>Votre compagnon pour des trajets sûrs et confortables au Cameroun.</p>
        </div>

        <!-- About Content -->
        <div class="about-content">
            <div class="about-card">
                <h2>Notre Origine</h2>
                <p>Lancée en 2010 avec seulement 5 bus, *TheBestVoyage* s’est imposée comme un acteur majeur du transport interurbain grâce à une vision centrée sur la sécurité et l’accessibilité.</p>
            </div>
            <div class="about-card">
                <h2>Ce Que Nous Faisons</h2>
                <p>Nous connectons plus de 20 villes avec une flotte moderne, des conducteurs qualifiés et une plateforme de réservation simple pour rendre vos voyages sans tracas.</p>
            </div>
            <div class="about-card">
                <h2>Notre Engagement</h2>
                <p>Innover pour un avenir durable avec des bus écologiques et offrir une expérience client exceptionnelle à chaque trajet.</p>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="about-stats">
            <div class="stat-item">
                <h3>10+</h3>
                <p>Années d’expérience</p>
            </div>
            <div class="stat-item">
                <h3>20+</h3>
                <p>Villes desservies</p>
            </div>
            <div class="stat-item">
                <h3>1000+</h3>
                <p>Passagers par mois</p>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="about-cta">
            <h2>Rejoignez Notre Aventure</h2>
            <p>Prêt à voyager avec nous ? Réservez dès maintenant ou contactez-nous pour plus d’infos.</p>
            <a href="Connexion3.php" class="btn-primary">Réserver un Trajet</a>
        </div>
    </section>

    <!-- Footer (Identique à la page d'accueil) -->
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
        /* Réutilisation des styles existants de la page d'accueil, ajustés pour la navbar */
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

        /* Header and Navigation (Styles repris de la page précédente) */
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

        /* About Section */
        .about-page {
            padding: 8rem 2rem 5rem;
            background-color: #fff;
        }

        .about-hero {
            text-align: center;
            margin-bottom: 4rem;
        }

        .about-hero h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .about-hero p {
            font-size: 1.2rem;
            color: #7f8c8d;
        }

        /* About Content */
        .about-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto 4rem;
        }

        .about-card {
            background-color: #f8f9fa;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .about-card h2 {
            font-size: 1.8rem;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .about-card p {
            color: #7f8c8d;
            font-size: 1rem;
        }

        /* Stats Section */
        .about-stats {
            background-color: #1abc9c;
            padding: 3rem 2rem;
            display: flex;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
            color: white;
            margin-bottom: 4rem;
        }

        .stat-item {
            text-align: center;
        }

        .stat-item h3 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .stat-item p {
            font-size: 1.1rem;
        }

        /* Call to Action */
        .about-cta {
            text-align: center;
            padding: 3rem 2rem;
        }

        .about-cta h2 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .about-cta p {
            font-size: 1.2rem;
            color: #7f8c8d;
            margin-bottom: 2rem;
        }

        .btn-primary {
            padding: 1rem 2rem;
            background-color: #1abc9c;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
            display: inline-block;
        }

        .btn-primary:hover {
            background-color: #16a085;
        }

        /* Footer styles (identique) */
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
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
                padding: 1rem;
            }

            .nav-links.active {
                display: flex;
            }

            .about-page {
                padding: 6rem 1rem 3rem;
            }

            .about-hero h1 {
                font-size: 2rem;
            }

            .about-stats {
                flex-direction: column;
                gap: 2rem;
            }

            .about-cta h2 {
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

        // Search Bar Functionality (Repris de la page précédente)
        const searchBar = document.querySelector('.search-bar');
        const searchInput = document.querySelector('.search-input');

        searchBar.addEventListener('click', () => {
            searchInput.focus();
        });
    </script>
</body>

</html>