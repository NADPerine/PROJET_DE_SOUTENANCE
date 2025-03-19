<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Client</title>
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

        .hamburger {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #2c3e50;
            cursor: pointer;
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
            transition: color 0.3s ease;
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
            transition: background-color 0.3s ease; /* Supprimé transform */
        }

        .form-grid button:hover {
            background-color: #16a085;
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
            transition: background-color 0.3s ease; /* Supprimé transform */
        }

        .action-btn.cancel {
            background-color: #e74c3c;
            color: #fff;
        }

        .action-btn.cancel:hover {
            background-color: #c0392b;
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
                <input type="text" class="search-input" placeholder="Rechercher un trajet...">
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
        <h3>Espace Client</h3>
        <ul>
            <li><a href="#reservations" class="active">Réserver un trajet</a></li>
            <li><a href="#mes-reservations">Mes Réservations</a></li>
            <li><a href="#trajets">Trajets Disponibles</a></li>
            <li><a href="deconnexion.php">Déconnexion</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main>
        <div class="dashboard-header">
            <h2>Bienvenue dans votre espace</h2>
            <span class="user-info">Jean Dupont | Dernière connexion : 06/03/2025</span>
        </div>

        <!-- Tabs -->
        <div class="tabs">
            <button class="tab-btn active" data-tab="reservations">Réserver un trajet</button>
            <button class="tab-btn" data-tab="mes-reservations">Mes Réservations</button>
            <button class="tab-btn" data-tab="trajets">Trajets Disponibles</button>
        </div>

        <!-- Tab Contents -->
        <div class="tab-content active" id="reservations">
            <section class="form-section">
                <h3>Réserver un Trajet</h3>
                <form class="form-grid">
                    <select required>
                        <option value="">Sélectionner un trajet</option>
                        <option value="T001">Yaoundé - Kribi (5000 XAF)</option>
                        <option value="T002">Bafoussam - Yaoundé (6000 XAF)</option>
                    </select>
                    <select required>
                        <option value="">Sélectionner une date</option>
                        <option value="V001">07/03/2025 08:00</option>
                        <option value="V002">08/03/2025 14:00</option>
                    </select>
                    <input type="number" placeholder="Nombre de places" min="1" required>
                    <button type="submit">Réserver maintenant</button>
                </form>
            </section>
        </div>

        <div class="tab-content" id="mes-reservations">
            <section class="reservations-section">
                <h3>Mes Réservations</h3>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Trajet</th>
                                <th>Date</th>
                                <th>Places</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>R001</td>
                                <td>Yaoundé - Kribi</td>
                                <td>07/03/2025 08:00</td>
                                <td>2</td>
                                <td>En attente</td>
                                <td>
                                    <button class="action-btn cancel" onclick="annulerReservation('R001')">Annuler</button>
                                </td>
                            </tr>
                            <tr>
                                <td>R002</td>
                                <td>Bafoussam - Yaoundé</td>
                                <td>08/03/2025 14:00</td>
                                <td>1</td>
                                <td>Confirmé</td>
                                <td>
                                    <button class="action-btn cancel" onclick="annulerReservation('R002')">Annuler</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>

        <div class="tab-content" id="trajets">
            <section class="trajets-section">
                <h3>Trajets Disponibles</h3>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Départ</th>
                                <th>Arrivée</th>
                                <th>Distance</th>
                                <th>Prix</th>
                                <th>Prochain départ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>T001</td>
                                <td>Yaoundé</td>
                                <td>Kribi</td>
                                <td>150 km</td>
                                <td>5000 XAF</td>
                                <td>07/03/2025 08:00</td>
                            </tr>
                            <tr>
                                <td>T002</td>
                                <td>Bafoussam</td>
                                <td>Yaoundé</td>
                                <td>200 km</td>
                                <td>6000 XAF</td>
                                <td>08/03/2025 14:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>

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

        // Fonction pour annuler une réservation (simulation)
        function annulerReservation(id) {
            if (confirm(`Voulez-vous annuler la réservation ${id} ?`)) {
                alert(`Réservation ${id} annulée avec succès (simulation).`);
                // Ajouter une requête AJAX vers un script PHP ici
            }
        }
    </script>
</body>

</html>