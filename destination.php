<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Réservation de Bus - Destinations</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Header with Navigation (Identique à la page d'accueil) -->
    <header>
        <nav>
            <div class="logo">TheBestVoyage</div>
            <ul class="nav-links">
                <li><a href="ACCUEIL5.php">Accueil</a></li>
                <li><a href="service.php">Nos Services</a></li>
                <li><a href="Apropos.php">À Propos</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#search" class="search-icon">🔍</a></li>
            </ul>
        </nav>
    </header>

    <!-- Destinations Main Section -->
    <section class="destinations-page">
        <div class="destinations-header">
            <h1>Nos Destinations</h1>
            <p>Explorez nos trajets et découvrez des destinations incroyables à travers le Cameroun.</p>
        </div>

        <!-- Search Bar for Destinations -->
        <div class="destination-search">
            <form>
                <input type="text" placeholder="Rechercher une destination" required>
                <button type="submit">Rechercher</button>
            </form>
        </div>

        <!-- Destinations Grid -->
        <div class="destinations-grid">
            <div class="destination-card">
                <img src="yaounde.jpeg" alt="Yaoundé">
                <h3>Yaoundé</h3>
                <p>Découvrez la capitale politique avec ses collines verdoyantes et son riche patrimoine culturel.</p>
                <div class="destination-buttons">
                    <a href="#" class="btn-secondary">En savoir plus</a>
                    <a href="Connexion3.php" class="btn-primary">Réserver</a>
                </div>
            </div>
            <div class="destination-card">
                <img src="Douala.jpeg" alt="Douala">
                <h3>Douala</h3>
                <p>Explorez le cœur économique avec ses marchés animés et son ambiance vibrante.</p>
                <div class="destination-buttons">
                    <a href="#" class="btn-secondary">En savoir plus</a>
                    <a href="Connexion3.php" class="btn-primary">Réserver</a>
                </div>
            </div>
            <div class="destination-card">
                <img src="bafoussam.jpeg" alt="Bafoussam">
                <h3>Bafoussam</h3>
                <p>Profitez des paysages montagneux et de la culture riche des hauts plateaux.</p>
                <div class="destination-buttons">
                    <a href="#" class="btn-secondary">En savoir plus</a>
                    <a href="Connexion3.php" class="btn-primary">Réserver</a>
                </div>
            </div>
            <div class="destination-card">
                <img src="kribi.jpeg" alt="Kribi">
                <h3>Kribi</h3>
                <p>Détendez-vous sur les plages de sable blanc et admirez les chutes de la Lobé.</p>
                <div class="destination-buttons">
                    <a href="#" class="btn-secondary">En savoir plus</a>
                    <a href="Connexion3.php" class="btn-primary">Réserver</a>
                </div>
            </div>
            <div class="destination-card">
                <img src="bamenda.jpeg" alt="Bamenda">
                <h3>Bamenda</h3>
                <p>Vivez l’expérience des hauts plateaux anglophones et de leurs traditions uniques.</p>
                <div class="destination-buttons">
                    <a href="#" class="btn-secondary">En savoir plus</a>
                    <a href="Connexion3.php" class="btn-primary">Réserver</a>
                </div>
            </div>
            <div class="destination-card">
                <img src="garoua.jpeg" alt="Garoua">
                <h3>Garoua</h3>
                <p>Plongez dans le nord avec ses parcs naturels et son climat sahélien.</p>
                <div class="destination-buttons">
                    <a href="#" class="btn-secondary">En savoir plus</a>
                    <a href="Connexion3.php" class="btn-primary">Réserver</a>
                </div>
            </div>
            <div class="destination-card">
                <img src="buea.jpeg" alt="Buea">
                <h3>Buea</h3>
                <p>Explorez la ville au pied du mont Cameroun, idéale pour les amateurs de randonnée.</p>
                <div class="destination-buttons">
                    <a href="#" class="btn-secondary">En savoir plus</a>
                    <a href="Connexion3.php" class="btn-primary">Réserver</a>
                </div>
            </div>
            <div class="destination-card">
                <img src="ebolowa.jpeg" alt="Ebolowa">
                <h3>ebolowa</h3>
                <p>Découvrez une ville paisible entourée de forêts luxuriantes et de traditions authentiques.</p>
                <div class="destination-buttons">
                    <a href="#" class="btn-secondary">En savoir plus</a>
                    <a href="Connexion3.php" class="btn-primary">Réserver</a>
                </div>
            </div>
            <div class="destination-card">
                <img src="ngaoundere.jpeg" alt="Ngaoundéré">
                <h3>Ngaoundéré</h3>
                <p>Visitez le carrefour du nord, connu pour ses hauts plateaux et son lac Tison.</p>
                <div class="destination-buttons">
                    <a href="#" class="btn-secondary">En savoir plus</a>
                    <a href="Connexion3.php" class="btn-primary">Réserver</a>
                </div>
            </div>
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
        /* Réutilisation des styles existants de la page d'accueil */
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
            border-bottom: 3px solid #e74c3c; /* Liseré rouge sous le logo */
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 2rem;
        }

        .nav-links li a {
            text-decoration: none;
            color: #2c3e50; /* Couleur par défaut */
            font-weight: 500;
            position: relative;
            transition: color 0.3s;
        }

        /* Style pour les liens visités */
        .nav-links li a:visited {
            color: #e74c3c; /* Rouge pour les liens visités */
            opacity: 0.8; /* Légère transparence pour différencier */
        }

        /* Style au survol (priorité sur :visited) */
        .nav-links li a:hover {
            color: #e74c3c; /* Rouge au survol */
            opacity: 1; /* Pleine opacité au survol */
        }

        .nav-links li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: #e74c3c; /* Soulignement rouge */
            bottom: -5px;
            left: 0;
            transition: width 0.3s;
        }

        .nav-links li a:hover::after {
            width: 100%;
        }

        /* Exception pour l’icône de recherche (pas de :visited) */
        .nav-links li a.search-icon {
            font-size: 1.2rem;
            cursor: pointer;
        }

        .nav-links li a.search-icon:hover {
            color: #e74c3c;
        }

        /* [Le reste du CSS reste identique, je ne le répète pas ici] */

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
            /* border-left: 5px solid #e74c3c; */
            padding-left: 1rem;
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
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .btn-primary {
            background-color: #1abc9c;
            color: white;
            box-shadow: 0 0 10px rgba(231, 76, 60, 0.5);
        }

        .btn-primary:hover {
            background-color: #16a085;
            box-shadow: 0 0 15px rgba(231, 76, 60, 0.8);
        }

        .btn-secondary {
            background-color: #ecf0f1;
            color: #2c3e50;
        }

        .btn-secondary:hover {
            background-color: #d5dbdb;
            border: 2px solid #e74c3c;
        }

        /* Destinations Section */
        .destinations-page {
            padding: 8rem 2rem 5rem;
            /* Ajustement pour le header fixe */
            background-color: #fff;
            text-align: center;
        }

        .destinations-header h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .destinations-header p {
            font-size: 1.2rem;
            color: #7f8c8d;
            margin-bottom: 3rem;
        }

        .destination-search {
            max-width: 600px;
            margin: 0 auto 3rem;
        }

        .destination-search form {
            display: flex;
            gap: 1rem;
        }

        .destination-search input {
            padding: 0.8rem;
            border: 1px solid #ecf0f1;
            border-radius: 5px;
            flex: 1;
            min-width: 200px;
        }

        .destination-search button {
            padding: 0.8rem 2rem;
            background-color: #1abc9c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .destination-search button:hover {
            background-color: #16a085;
        }

        .destinations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .destination-card {
            background-color: #f8f9fa;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .destination-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .destination-card h3 {
            color: #2c3e50;
            padding: 1rem;
            font-size: 1.5rem;
        }

        .destination-card p {
            color: #7f8c8d;
            padding: 0 1rem 1rem;
        }

        .destination-buttons {
            display: flex;
            gap: 1rem;
            padding: 0 1rem 1rem;
        }

        .btn-primary,
        .btn-secondary {
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
            flex: 1;
        }

        .btn-primary:hover {
            background-color: #16a085;
        }

        .btn-secondary {
            background-color: #ecf0f1;
            color: #2c3e50;
            flex: 1;
        }

        .btn-secondary:hover {
            background-color: #d5dbdb;
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
            .destinations-page {
                padding: 6rem 1rem 3rem;
            }

            .destinations-header h1 {
                font-size: 2rem;
            }

            .destination-search form {
                flex-direction: column;
            }

            .destination-buttons {
                flex-direction: column;
            }

            .btn-primary,
            .btn-secondary {
                width: 100%;
            }

            .nav-links {
                display: none;
            }
        }
    </style>
</body>

</html>