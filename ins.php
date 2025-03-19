<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url("i3.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-color: #1abc9c;
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Navbar (inchangée) */
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

        /* Signup Form */
        .container {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 5rem 1rem 1rem; /* Réduit de 6rem à 5rem */
        }

        .signup-box {
            background-color: rgba(0, 42, 58, 0.95);
            padding: 1.5rem; /* Réduit de 2rem */
            border-radius: 12px; /* Légèrement réduit */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Adouci */
            width: 100%;
            max-width: 400px; /* Réduit de 450px pour plus de compacité */
            text-align: center;
        }

        .signup-box h2 {
            font-size: 1.6rem; /* Réduit de 1.8rem */
            font-weight: 600;
            margin-bottom: 1rem; /* Réduit de 1.5rem */
            color: #fff;
        }

        .form-grid {
            display: grid;
            gap: 0.8rem; /* Réduit de 1rem */
            text-align: left;
        }

        .form-grid label {
            font-size: 0.85rem; /* Réduit de 0.9rem */
            color: #e0e0e0;
            font-weight: 400;
        }

        .form-grid input {
            width: 100%;
            padding: 0.6rem; /* Réduit de 0.7rem */
            border: 1px solid #e0e6ed;
            border-radius: 6px; /* Réduit de 8px */
            font-size: 0.9rem; /* Réduit de 0.95rem */
            color: #2c3e50;
            background-color: #f8f9fa;
            transition: border-color 0.3s ease;
        }

        .form-grid input:focus {
            border-color: #1abc9c;
            outline: none;
        }

        .form-grid input::placeholder {
            color: #7f8c8d;
        }

        .btn-container {
            display: flex;
            gap: 0.6rem; /* Réduit de 0.8rem */
            margin-top: 1rem; /* Réduit de 1.2rem */
        }

        .form-grid button {
            width: 100%;
            padding: 0.6rem; /* Réduit de 0.7rem */
            border: none;
            border-radius: 6px; /* Réduit de 8px */
            font-size: 0.9rem; /* Réduit de 0.95rem */
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-grid button[type="submit"] {
            background-color: #1abc9c;
            color: #fff;
        }

        .form-grid button[type="submit"]:hover {
            background-color: #16a085;
        }

        .form-grid button[type="reset"] {
            background-color: #7f8c8d;
            color: #fff;
        }

        .form-grid button[type="reset"]:hover {
            background-color: #636e72;
        }

        .login-link {
            margin-top: 0.8rem; /* Réduit de 1.2rem */
            font-size: 0.8rem; /* Réduit de 0.85rem */
            color: #e0e0e0;
        }

        .login-link a {
            color: #1abc9c;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Footer (inchangé) */
        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 3rem 2rem;
            width: 100%;
        }

        .footer-content {
            max-width: 1300px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .footer-section h4 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #1abc9c;
        }

        .footer-section p,
        .footer-section ul li a {
            font-size: 0.9rem;
            color: #ecf0f1;
            font-weight: 300;
        }

        .footer-section ul {
            list-style: none;
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
            font-size: 0.85rem;
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bdc3c7;
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

            .signup-box {
                padding: 1.2rem; /* Réduit pour mobile */
                max-width: 90%;
            }

            .btn-container {
                flex-direction: column;
                gap: 0.5rem; /* Réduit de 0.6rem */
            }
        }
    </style>
</head>

<body>
    <!-- Navbar (inchangée) -->
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
            </ul>
        </nav>
    </header>

    <!-- Signup Form -->
    <div class="container">
        <form class="signup-box" method="POST" action="Traitement/inscription.php" enctype="multipart/form-data">
            <h2>Inscription</h2>
            <div class="form-grid">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required placeholder="Votre nom">

                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" required placeholder="Votre prénom">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Votre email">

                <label for="tel">Téléphone</label>
                <input type="tel" id="tel" name="tel" required placeholder="Votre numéro" pattern="[0-9]{9,}" title="Numéro invalide">

                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required placeholder="Mot de passe" minlength="8">

                <label for="photo">Photo</label>
                <input type="file" id="photo" name="photo" accept="image/*" required>

                <div class="btn-container">
                    <button type="reset">Réinitialiser</button>
                    <button type="submit" name="inscrire">S'inscrire</button>
                </div>
            </div>
            <p class="login-link">Déjà un compte ? <a href="Connexion3.php">Se connecter</a></p>
        </form>
    </div>

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