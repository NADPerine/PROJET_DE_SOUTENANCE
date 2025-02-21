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
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            font-weight: bold;
        }

        header {
            background-color: #003b55;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            /* position: fixed;
            /* width: 100%;
            /* top: 0;
            left: 0;
            z-index: 1000; */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        .login-box {
            background-color: #002a3a;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            width: 300px;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            opacity: 0.9;


        }

        .btn-container {
            display: flex;
            justify-content: space-between;
        }

        input[type="submit"],
        input[type="reset"] {
            width: 48%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #0088a9;
            color: white;
            font-weight: bold;
            margin-top: 5px;
            opacity: 0.8;
        }

        input[type="reset"] {
            background-color: #004f66;
        }

        .signup-link {
            display: block;
            margin-top: 15px;
            color: #f4f4f4;
            text-decoration: none;
        }

        .signup-link:hover {
            text-decoration: underline;
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

        .nav-links li a:hover,
        .search-icon:hover {
            color: #1abc9c;
        }

        .search-icon {
            font-size: 1.2rem;
            cursor: pointer;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        /* form */
        form {
            opacity: 0.6;
            margin-top: 70px;
        }
    </style>
</head>

<body>
    <!-- Header with Navigation -->
    <header>
        <nav>
            <div class="logo">TheBestVoyage</div>
            <ul class="nav-links">
                <li><a href="ACCUEIL4.php">Accueil</a></li>
                <li><a href="#services">Nos Services</a></li>
                <li><a href="#about">À Propos</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#search" class="search-icon">🔍</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <form class="login-box">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password"  required>
            <div class="btn-container">
                <input type="reset" value="SUPPRIMER">
                <input type="submit" value="VALIDER">
            </div>

            <!-- <a href="inscription.html" class="signup-link">Vous n'avez pas de compte ? S'inscrire</a> -->
            <br>
            <p>Vous n'avez pas de compte ? <a href="Inscription2.php">S'inscrire</a></p>
        </form>
    </div>
</body>

</html>