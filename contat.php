<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Réservation de Bus - Contactez-Nous</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header with Navigation -->
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
            <p>Nous sommes à votre disposition pour toute question ou assistance concernant vos voyages depuis Douala.</p>
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
                    <p><strong>Email:</strong> <a href="mailto:contact@thebestvoyage.com">contact@thebestvoyage.com</a></p>
                </div>
                <div class="info-item">
                    <span class="icon">📞</span>
                    <p><strong>Téléphone:</strong> +237 677 138 870</p>
                </div>
                <div class="info-item">
                    <span class="icon">📍</span>
                    <p><strong>Adresse:</strong> Boulevard de la Liberté, Akwa, Douala, Cameroun</p>
                </div>
                <div class="social-links">
                    <h3>Suivez-Nous</h3>
                    <a href="#" class="social-icon" title="Facebook">📘</a>
                    <a href="#" class="social-icon" title="Twitter">🐦</a>
                    <a href="#" class="social-icon" title="Instagram">📸</a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <h2>Envoyez un Message</h2>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Nom Complet</label>
                        <input type="text" id="name" name="name" placeholder="Entrez votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse Email</label>
                        <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Numéro de Téléphone</label>
                        <input type="tel" id="phone" name="phone" placeholder="Entrez votre numéro" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Votre Message</label>
                        <textarea id="message" name="message" placeholder="Décrivez votre demande" rows="6" required></textarea>
                    </div>
                    <button type="submit" class="btn-primary">Envoyer le Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <h2>Nous Trouver à Douala</h2>
        <div class="map-container">
            <!-- Google Maps iframe centré sur Douala (Boulevard de la Liberté, Akwa) -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.823073073074!2d9.701652314621885!3d4.051056449999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610d7b8e8e8f7f%3A0x5e5e8e8e6e8e8e8e!2sBoulevard%20de%20la%20Libert%C3%A9%2C%20Douala%2C%20Cameroun!5e0!3m2!1sfr!2sfr!4v1698765432109!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>TheBestVoyage</h4>
                <p>Votre partenaire de confiance pour des voyages sûrs et confortables depuis Douala.</p>
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
                <p><strong>Email:</strong> contact@thebestvoyage.com</p>
                <p><strong>Téléphone:</strong> +237 677 138 870</p>
            </div>
        </div>
        <p class="copyright">© 2025 TheBestVoyage. Tous droits réservés.</p>
    </footer>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            line-height: 1.6;
            color: #333;
            background-color: #f4f7fa;
        }

        /* Header and Navigation */
        header {
            background-color: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        nav {
            max-width: 1280px;
            margin: 0 auto;
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: #1a3c34;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 2.5rem;
        }

        .nav-links li a {
            text-decoration: none;
            color: #1a3c34;
            font-weight: 500;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .nav-links li a:hover {
            color: #e74c3c;
        }

        .nav-links li a.search-icon {
            font-size: 1.3rem;
        }

        /* Contact Hero Section */
        .contact-hero {
            height: 50vh;
            background: linear-gradient(rgba(26, 60, 52, 0.85), rgba(26, 60, 52, 0.85)), url('bus-background.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #ffffff;
            padding-top: 80px;
        }

        .contact-hero .hero-content h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
            border-bottom: 3px solid #e74c3c;
            padding-bottom: 0.5rem;
            display: inline-block;
        }

        .contact-hero .hero-content p {
            font-size: 1.2rem;
            max-width: 700px;
            font-weight: 400;
        }

        /* Contact Section */
        .contact-section {
            padding: 6rem 2rem;
            background-color: #ffffff;
        }

        .contact-container {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 3rem;
            align-items: start;
        }

        .contact-info h2,
        .contact-form h2 {
            font-size: 2rem;
            color: #1a3c34;
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .info-item .icon {
            font-size: 1.6rem;
            color: #e74c3c;
        }

        .info-item p {
            font-size: 1.1rem;
            color: #555;
        }

        .info-item strong {
            color: #1a3c34;
        }

        .info-item a {
            color: #1abc9c;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .info-item a:hover {
            color: #16a085;
            text-decoration: underline;
        }

        .social-links {
            margin-top: 2.5rem;
        }

        .social-links h3 {
            font-size: 1.4rem;
            color: #1a3c34;
            margin-bottom: 1rem;
        }

        .social-icon {
            font-size: 1.8rem;
            color: #1a3c34;
            margin: 0 1rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-icon:hover {
            color: #e74c3c;
        }

        /* Contact Form */
        .contact-form form {
            display: flex;
            flex-direction: column;
            gap: 1.8rem;
            background-color: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .form-group label {
            font-size: 1.1rem;
            color: #1a3c34;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            font-size: 1rem;
            color: #333;
            background-color: #fff;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #1abc9c;
            outline: none;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .btn-primary {
            padding: 1rem 2.5rem;
            background-color: #1abc9c;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #16a085;
            box-shadow: 0 6px 18px rgba(26, 188, 156, 0.4);
        }

        /* Map Section */
        .map-section {
            padding: 5rem 2rem;
            background-color: #f4f7fa;
            text-align: center;
        }

        .map-section h2 {
            font-size: 2rem;
            color: #1a3c34;
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .map-container {
            max-width: 1280px;
            margin: 0 auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        footer {
            background-color: #1a3c34;
            color: #ffffff;
            padding: 4rem 2rem;
        }

        .footer-content {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 3rem;
        }

        .footer-section h4 {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .footer-section p,
        .footer-section ul li a {
            font-size: 1rem;
            color: #d0d8d6;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.8rem;
        }

        .footer-section ul li a {
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: #1abc9c;
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            font-size: 0.9rem;
            color: #b0b8b6;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-hero {
                height: 40vh;
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
                font-size: 1.6rem;
            }

            .map-section h2 {
                font-size: 1.6rem;
            }

            .nav-links {
                gap: 1.5rem;
            }
        }
    </style>
</body>

</html>