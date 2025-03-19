<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <style>
        body {
            background-color: #1abc9c;
            background-image: url("i7.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header and Navigation (Navbar mémorisée) */
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

        /* Formulaire de Connexion (Taille réduite) */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
            padding: 1rem;
        }

        .login-box {
            background-color: rgba(44, 62, 80, 0.95);
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 320px;
            margin-top: 70px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .login-box:hover {
            transform: translateY(-5px);
        }

        .login-box h2 {
            font-size: 1.5rem;
            color: #fff;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 1rem;
            text-align: left;
        }

        .form-group label {
            font-size: 0.9rem;
            font-weight: 500;
            color: #ecf0f1;
            margin-bottom: 0.3rem;
        }

        .form-group input {
            width: 100%;
            padding: 0.6rem;
            border: none;
            border-radius: 6px;
            background-color: #f8f9fa;
            font-size: 0.9rem;
            color: #2c3e50;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease, border 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            box-shadow: 0 0 8px rgba(26, 188, 156, 0.5);
            border: 1px solid #1abc9c;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .btn {
            width: 48%;
            padding: 0.6rem;
            border: none;
            border-radius: 6px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Supprimé transform */
        }

        .btn-login {
            background-color: #1abc9c;
            color: white;
        }

        .btn-reset {
            background-color: #7f8c8d;
            color: white;
        }

        .btn-login:hover {
            background-color: #16a085;
        }

        .btn-reset:hover {
            background-color: #6c7778;
        }

        .signup-link {
            margin-top: 1rem;
            font-size: 0.85rem;
            color: #ecf0f1;
        }

        .signup-link a {
            color: #1abc9c;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .signup-link a:hover {
            color: #16a085;
            text-decoration: underline;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: white;
            padding: 3rem 2rem;
            margin-top: 40px;
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

            .login-box {
                padding: 1.2rem;
                max-width: 280px;
            }

            .btn-container {
                flex-direction: column;
                gap: 0.3rem;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Header with Navigation (Navbar mémorisée) -->
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

    <!-- Formulaire de Connexion (Taille réduite, boutons fixes) -->
    <div class="container">
        <form class="login-box" method="POST" action="Traitement/inscription.php">
            <h2>Connexion</h2>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Votre email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>
            </div>
            <div class="btn-container">
                <button type="reset" class="btn btn-reset">Réinitialiser</button>
                <button type="submit" class="btn btn-login" name="connexion">Connexion</button>
            </div>
            <p class="signup-link">Pas de compte ? <a href="Inscription2.php">S'inscrire</a></p>
        </form>
    </div>

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