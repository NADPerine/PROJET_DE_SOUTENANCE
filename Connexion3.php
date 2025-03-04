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
            /* border-bottom: 3px solid #e74c3c; */
            /* Liseré rouge sous le logo */
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 2rem;
        }

        .nav-links li a {
            text-decoration: none;
            color: #2c3e50;
            /* Couleur par défaut */
            font-weight: 500;
            position: relative;
            transition: color 0.3s;
        }

        /* Style pour les liens visités */
        .nav-links li a:visited {
            color: #e74c3c;
            /* Rouge pour les liens visités */
            opacity: 0.8;
            /* Légère transparence pour différencier */
        }

        /* Style au survol (priorité sur :visited) */
        .nav-links li a:hover {
            color: #e74c3c;
            /* Rouge au survol */
            opacity: 1;
            /* Pleine opacité au survol */
        }

        .nav-links li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: #e74c3c;
            /* Soulignement rouge */
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

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
            padding: 2rem;
        }

        .login-box {
            background-color: rgba(0, 42, 58, 0.95);
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            transition: transform 0.3s ease;
            margin-top: 60px;
        }

        .login-box:hover {
            transform: translateY(-5px);
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 0.5rem;
            font-size: 1rem;
            font-weight: 600;
            color: #f4f4f4;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 1.5rem;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #fff;
            font-size: 1rem;
            color: #2c3e50;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #1abc9c;
            box-shadow: 0 0 8px rgba(26, 188, 156, 0.4);
            outline: none;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
        }

        input[type="submit"],
        input[type="reset"] {
            width: 48%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        input[type="submit"] {
            background-color: #1abc9c;
            color: white;
        }

        input[type="reset"] {
            background-color: #7f8c8d;
            color: white;
        }

        input[type="submit"]:hover {
            background-color: #16a085;
            transform: translateY(-2px);
        }

        input[type="reset"]:hover {
            background-color: #6c7778;
            transform: translateY(-2px);
        }

        .signup-link {
            margin-top: 1.5rem;
            font-size: 0.9rem;
            color: #f4f4f4;
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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
    </style>
</head>

<body>
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

    <div class="container">
        <form class="login-box">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>

            <div class="btn-container">
                <input type="reset" value="Réinitialiser">
                <input type="submit" value="Connexion">
            </div>

            <p class="signup-link">Vous n'avez pas de compte ? <a href="Inscription2.php">S'inscrire</a></p>
        </form>
    </div>
    <!-- Footer (unchanged) -->
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

</body>

</html>