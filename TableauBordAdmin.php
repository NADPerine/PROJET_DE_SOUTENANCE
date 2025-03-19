<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Administrateur</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f4f7fa;
            color: #2c3e50;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar */
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

        /* Sidebar */
        .sidebar {
            width: 260px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            background-color: #2c3e50;
            color: #fff;
            padding: 2rem 1.5rem;
            box-shadow: 2px 0 15px rgba(0, 0, 0, 0.1);
        }

        .sidebar h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 2.5rem;
            color: #1abc9c;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li a {
            display: flex;
            align-items: center;
            color: #ecf0f1;
            text-decoration: none;
            padding: 0.9rem 1.2rem;
            font-size: 1rem;
            font-weight: 400;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .sidebar ul li a:hover,
        .sidebar ul li a.active {
            background-color: #1abc9c;
            color: #fff;
        }

        /* Main Content */
        main {
            margin-left: 260px;
            padding: 6rem 3rem 4rem;
            flex: 1;
        }

        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .dashboard-header h2 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #2c3e50;
        }

        .dashboard-header .user-info {
            font-size: 0.9rem;
            color: #7f8c8d;
            font-weight: 300;
        }

        /* Tabs */
        .tabs {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 2rem;
            border-bottom: 1px solid #e0e6ed;
        }

        .tab-btn {
            background: none;
            border: none;
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            color: #7f8c8d;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tab-btn.active {
            color: #1abc9c;
            border-bottom: 2px solid #1abc9c;
            font-weight: 600;
        }

        .tab-btn:hover {
            color: #1abc9c;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* Statistiques */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .stat-card {
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-card h4 {
            color: #2c3e50;
            font-size: 1.1rem;
            font-weight: 400;
            margin-bottom: 1rem;
        }

        .stat-card p {
            font-size: 1.8rem;
            font-weight: 600;
            color: #1abc9c;
        }

        /* Tableaux */
        .table-container {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            margin-bottom: 2rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 1rem 1.5rem;
            text-align: left;
        }

        th {
            background-color: #2c3e50;
            color: #fff;
            font-weight: 600;
            font-size: 0.95rem;
        }

        td {
            color: #2c3e50;
            font-weight: 400;
            font-size: 0.9rem;
            border-bottom: 1px solid #e0e6ed;
        }

        .action-btn {
            padding: 0.6rem 1.2rem;
            border: none;
            border-radius: 6px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .action-btn.edit {
            background-color: #3498db;
            color: #fff;
        }

        .action-btn.edit:hover {
            background-color: #2980b9;
        }

        .action-btn.delete {
            background-color: #e74c3c;
            color: #fff;
        }

        .action-btn.delete:hover {
            background-color: #c0392b;
        }

        /* Formulaires */
        .form-section {
            background-color: #fff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }

        .form-section h3 {
            font-size: 1.4rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 1.5rem;
        }

        .form-grid {
            display: grid;
            gap: 1.2rem;
        }

        .form-grid input,
        .form-grid select {
            padding: 0.9rem;
            border: 1px solid #e0e6ed;
            border-radius: 8px;
            font-size: 0.95rem;
            color: #2c3e50;
            background-color: #f8f9fa;
            transition: border-color 0.3s ease;
        }

        .form-grid input:focus,
        .form-grid select:focus {
            border-color: #1abc9c;
            outline: none;
        }

        .form-grid button {
            padding: 0.9rem;
            background-color: #1abc9c;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-grid button:hover {
            background-color: #16a085;
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

            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding: 1.5rem;
            }

            main {
                margin-left: 0;
                padding: 2rem 1.5rem 3rem;
            }

            .tabs {
                flex-direction: column;
                gap: 0.5rem;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .table-container {
                overflow-x: auto;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
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

    <!-- Sidebar -->
    <aside class="sidebar">
        <h3>Tableau de Bord Admin</h3>
        <ul>
            <li><a href="#overview" class="active">Vue d'ensemble</a></li>
            <li><a href="#gerants">Gérants</a></li>
            <li><a href="#system">Paramètres Système</a></li>
            <li><a href="deconnexion.php">Déconnexion</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main>
        <div class="dashboard-header">
            <h2>Tableau de Bord Administrateur</h2>
            <span class="user-info">Admin Principal | Dernière connexion : 06/03/2025</span>
        </div>

        <!-- Tabs -->
        <div class="tabs">
            <button class="tab-btn active" data-tab="overview">Vue d'ensemble</button>
            <button class="tab-btn" data-tab="gerants">Gérants</button>
            <button class="tab-btn" data-tab="system">Paramètres Système</button>
        </div>

        <!-- Tab Contents -->
        <div class="tab-content active" id="overview">
            <section class="stats-section">
                <div class="stats-grid">
                    <div class="stat-card">
                        <h4>Gérants Actifs</h4>
                        <p>5</p>
                    </div>
                    <div class="stat-card">
                        <h4>Clients Inscrits</h4>
                        <p>120</p>
                    </div>
                    <div class="stat-card">
                        <h4>Revenus Totaux</h4>
                        <p>1,500,000 XAF</p>
                    </div>
                    <div class="stat-card">
                        <h4>Réservations ce Mois</h4>
                        <p>450</p>
                    </div>
                </div>
            </section>
        </div>

        <div class="tab-content" id="gerants">
            <section class="form-section">
                <h3>Ajouter un Gérant</h3>
                <form class="form-grid">
                    <input type="text" placeholder="Nom complet" required>
                    <input type="email" placeholder="Email" required>
                    <input type="password" placeholder="Mot de passe" required>
                    <input type="text" placeholder="Agence assignée" required>
                    <button type="submit">Ajouter</button>
                </form>
            </section>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Agence</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>G001</td>
                            <td>Paul M.</td>
                            <td>paul@bestvoyage.com</td>
                            <td>Agence Yaoundé</td>
                            <td>
                                <button class="action-btn edit">Modifier</button>
                                <button class="action-btn delete">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>G002</td>
                            <td>Marie T.</td>
                            <td>marie@bestvoyage.com</td>
                            <td>Agence Douala</td>
                            <td>
                                <button class="action-btn edit">Modifier</button>
                                <button class="action-btn delete">Supprimer</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-content" id="system">
            <section class="form-section">
                <h3>Ajouter une Agence</h3>
                <form class="form-grid">
                    <input type="text" placeholder="Nom de l'agence" required>
                    <input type="text" placeholder="Ville" required>
                    <input type="text" placeholder="Adresse" required>
                    <button type="submit">Ajouter</button>
                </form>
            </section>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Ville</th>
                            <th>Adresse</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A001</td>
                            <td>Agence Yaoundé</td>
                            <td>Yaoundé</td>
                            <td>Rue 123</td>
                            <td>
                                <button class="action-btn edit">Modifier</button>
                                <button class="action-btn delete">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>A002</td>
                            <td>Agence Douala</td>
                            <td>Douala</td>
                            <td>Avenue 456</td>
                            <td>
                                <button class="action-btn edit">Modifier</button>
                                <button class="action-btn delete">Supprimer</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Footer
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
    </footer> -->

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

        // Tab Functionality
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('active'));

                button.classList.add('active');
                document.getElementById(button.dataset.tab).classList.add('active');
            });
        });
    </script>
</body>

</html>