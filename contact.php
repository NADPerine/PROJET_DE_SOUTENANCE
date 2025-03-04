<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Réservation de Bus - Contact</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Header with Navigation (inchangé) -->
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

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="hero-content">
            <h1>Contactez-Nous</h1>
            <p>Nous sommes là pour répondre à toutes vos questions et rendre votre voyage encore plus agréable.</p>
        </div>
    </section>

    <!-- Contact Information and Form Section -->
    <section class="contact-section">
        <div class="contact-container">
            <!-- Contact Infos -->
            <div class="contact-info">
                <h2>Nos Coordonnées</h2>
                <div class="info-item">
                    <span class="icon">📧</span>
                    <p>Email: <a href="mailto:contact@TheBestVoyage.com">contact@TheBestVoyage.com</a></p>
                </div>
                <div class="info-item">
                    <span class="icon">📞</span>
                    <p>Téléphone: +237 677 138 870</p>
                </div>
                <div class="info-item">
                    <span class="icon">📍</span>
                    <p>Adresse: Rue Principale, Douala, Cameroun</p>
                </div>
                <div class="social-links">
                    <h3>Suivez-Nous</h3>
                    <a href="#" class="social-icon">📘</a>
                    <a href="#" class="social-icon">🐦</a>
                    <a href="#" class="social-icon">📸</a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <h2>Envoyez-Nous un Message</h2>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" id="name" name="name" placeholder="Votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Votre email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone" placeholder="Votre numéro" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Votre message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <h2>Notre Localisation</h2>
        <div class="map-container">
            <!-- Exemple avec Google Maps iframe, remplacez par vos coordonnées réelles -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.815171872774!2d11.501347614616174!3d3.8480324499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcf6e8f6d8f7f%3A0x5e5e8e8e6e8e8e8e!2sYaound%C3%A9%2C%20Cameroun!5e0!3m2!1sfr!2sfr!4v1635781234567!5m2!1sfr!2sfr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <!-- Footer (inchangé) -->
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

        body {
            line-height: 1.6;
            color: #333;
        }

        /* Header and Navigation (inchangé) */
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
            /* border-bottom: 3px solid #e74c3c; */
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
            position: relative;
            transition: color 0.3s;
        }

        .nav-links li a:not(.search-icon):visited {
            color: #e74c3c;
            opacity: 0.8;
        }

        .nav-links li a:hover {
            color: #e74c3c;
            opacity: 1;
        }

        .nav-links li a:not(.search-icon)::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: #e74c3c;
            bottom: -5px;
            left: 0;
            transition: width 0.3s;
        }

        .nav-links li a:not(.search-icon):hover::after,
        .nav-links li a:not(.search-icon):active::after {
            width: 100%;
        }

        .nav-links li a.search-icon {
            font-size: 1.2rem;
            cursor: pointer;
        }

        .nav-links li a.search-icon:hover {
            color: #e74c3c;
        }

        .nav-links li a.search-icon::after {
            content: none;
        }

        /* Contact Hero Section */
        .contact-hero {
            height: 60vh;
            background: linear-gradient(rgba(44, 62, 80, 0.7), rgba(44, 62, 80, 0.7)), url('bus-background.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding-top: 80px; /* Ajustement pour la navbar fixe */
        }

        .contact-hero .hero-content h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            border-left: 5px solid #e74c3c;
            padding-left: 1rem;
        }

        .contact-hero .hero-content p {
            font-size: 1.2rem;
            max-width: 600px;
        }

        /* Contact Section */
        .contact-section {
            padding: 5rem 2rem;
            background-color: #fff;
            text-align: center;
        }

        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }

        .contact-info h2,
        .contact-form h2 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 2rem;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .info-item .icon {
            font-size: 1.5rem;
            color: #e74c3c;
        }

        .info-item p {
            color: #7f8c8d;
            font-size: 1.1rem;
        }

        .info-item a {
            color: #1abc9c;
            text-decoration: none;
        }

        .info-item a:hover {
            text-decoration: underline;
        }

        .social-links {
            margin-top: 2rem;
        }

        .social-links h3 {
            font-size: 1.5rem;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .social-icon {
            font-size: 1.5rem;
            color: #2c3e50;
            margin: 0 0.5rem;
            text-decoration: none;
            transition: color 0.3s;
        }

        .social-icon:hover {
            color: #e74c3c;
        }

        /* Contact Form */
        .contact-form form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 1.1rem;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #d5dbdb;
            border-radius: 5px;
            font-size: 1rem;
            color: #333;
        }

        .form-group textarea {
            resize: vertical;
        }

        .btn-primary {
            padding: 1rem 2rem;
            background-color: #1abc9c;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .btn-primary:hover {
            background-color: #16a085;
            box-shadow: 0 0 15px rgba(231, 76, 60, 0.8);
        }

        /* Map Section */
        .map-section {
            padding: 5rem 2rem;
            background-color: #f8f9fa;
            text-align: center;
        }

        .map-section h2 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 2rem;
        }

        .map-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Footer (inchangé) */
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
            .contact-hero {
                height: 50vh;
                padding: 2rem;
            }

            .contact-hero .hero-content h1 {
                font-size: 2rem;
            }

            .contact-hero .hero-content p {
                font-size: 1rem;
            }

            .contact-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .contact-info h2,
            .contact-form h2 {
                font-size: 1.5rem;
            }

            .map-section h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</body>

</html>