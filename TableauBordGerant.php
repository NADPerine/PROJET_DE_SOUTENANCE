<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Gérant</title>
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
            transition: background-color 0.3s ease; /* Supprimé transform */
        }

        .action-btn.confirm {
            background-color: #1abc9c;
            color: #fff;
        }

        .action-btn.confirm:hover {
            background-color: #16a085;
        }

        .action-btn.cancel {
            background-color: #e74c3c;
            color: #fff;
        }

        .action-btn.cancel:hover {
            background-color: #c0392b;
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

        /* Ajout pour aligner les boutons sur la même ligne */
        .actions-container {
            display: flex;
            gap: 0.5rem; /* Espacement entre les boutons */
            flex-wrap: nowrap; /* Empêche le retour à la ligne */
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

            .actions-container {
                flex-direction: column; /* Sur mobile, les boutons passent en colonne si l'espace est trop petit */
                gap: 0.3rem;
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
        <h3>Tableau de Bord</h3>
        <ul>
            <li><a href="#overview" class="active">Vue d'ensemble</a></li>
            <li><a href="#bus">Bus</a></li>
            <li><a href="#trajets">Trajets</a></li>
            <li><a href="#voyages">Voyages</a></li>
            <li><a href="deconnexion.php">Déconnexion</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main>
        <div class="dashboard-header">
            <h2>Supervision - Gérant</h2>
            <span class="user-info">Paul M. | Dernière connexion : 06/03/2025</span>
        </div>

        <!-- Tabs -->
        <div class="tabs">
            <button class="tab-btn active" data-tab="overview">Vue d'ensemble</button>
            <button class="tab-btn" data-tab="bus">Bus</button>
            <button class="tab-btn" data-tab="trajets">Trajets</button>
            <button class="tab-btn" data-tab="voyages">Voyages</button>
        </div>

        <!-- Tab Contents -->
        <div class="tab-content active" id="overview">
            <section class="stats-section">
                <div class="stats-grid">
                    <div class="stat-card">
                        <h4>Réservations Aujourd'hui</h4>
                        <p>15</p>
                    </div>
                    <div class="stat-card">
                        <h4>Revenus du Jour</h4>
                        <p>75,000 XAF</p>
                    </div>
                    <div class="stat-card">
                        <h4>Trajets Actifs</h4>
                        <p>8</p>
                    </div>
                </div>
            </section>
            <section class="reservations-section">
                <h3>Supervision des Réservations</h3>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Client</th>
                                <th>Trajet</th>
                                <th>Date</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>R001</td>
                                <td>Marie D.</td>
                                <td>Yaoundé - Kribi</td>
                                <td>07/03/2025 08:00</td>
                                <td>En attente</td>
                                <td>
                                    <div class="actions-container">
                                        <button class="action-btn confirm" onclick="confirmerReservation('R001')">Confirmer</button>
                                        <button class="action-btn cancel" onclick="annulerReservation('R001')">Annuler</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>R002</td>
                                <td>Jean P.</td>
                                <td>Bafoussam - Yaoundé</td>
                                <td>08/03/2025 14:00</td>
                                <td>Confirmé</td>
                                <td>
                                    <div class="actions-container">
                                        <button class="action-btn cancel" onclick="annulerReservation('R002')">Annuler</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>R003</td>
                                <td>Sophie L.</td>
                                <td>Kribi - Douala</td>
                                <td>09/03/2025 10:00</td>
                                <td>En attente</td>
                                <td>
                                    <div class="actions-container">
                                        <button class="action-btn confirm" onclick="confirmerReservation('R003')">Confirmer</button>
                                        <button class="action-btn cancel" onclick="annulerReservation('R003')">Annuler</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>

        <div class="tab-content" id="bus">
            <section class="form-section">
                <h3>Ajouter un Bus</h3>
                <form class="form-grid">
                    <input type="text" placeholder="Numéro de bus" name="Numero" required>
                    <input type="number" placeholder="Capacité (sièges)" name="capaciter" required>
                    <select name="Trajet" required>
                        <option value="Yaounde">Trajet</option>
                        <option value="Yaounde">Yaounde</option>
                        <option value="Bafoussam">Bafoussam</option>
                        <option value="Kribi">Kribi</option>
                    </select>
                    <select required name="Etat">
                        <option value="">État du bus</option>
                        <option value="actif">Actif</option>
                        <option value="maintenance">En maintenance</option>
                    </select>
                    <input type="submit" name="Ajouter">
                    
                </form>
            </section>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Immatriculation</th>
                            <th>Capacité</th>
                            <th>État</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>B001</td>
                            <td>CMR-123-XYZ</td>
                            <td>50</td>
                            <td>Actif</td>
                            <td>
                                <div class="actions-container">
                                    <button class="action-btn edit">Modifier</button>
                                    <button class="action-btn delete">Supprimer</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-content" id="trajets">
            <section class="form-section">
                <h3>Ajouter un Trajet</h3>
                <form class="form-grid" method="POST" action="./Traitement/AjoutTrajet.php">
                    <input type="text" placeholder="Ville de départ" name="Depart" value="Douala" required>
                    <input type="text" placeholder="Ville d'arrivée" name="Arriver" required>
                    <!-- <input type="number" placeholder="Distance (km)" required> -->
                    <input type="number" placeholder="Prix (XAF)" name="Prix" required>
                    <input type="submit" name="Ajouter">
                </form>
            </section>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Départ</th>
                            <th>Arrivée</th>
                            <th>Distance</th>
                            <th>Prix</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>T001</td>
                            <td>Yaoundé</td>
                            <td>Kribi</td>
                            <td>150 km</td>
                            <td>5000 XAF</td>
                            <td>
                                <div class="actions-container">
                                    <button class="action-btn edit">Modifier</button>
                                    <button class="action-btn delete">Supprimer</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-content" id="voyages">
            <section class="form-section">
                <h3>Ajouter un Voyage</h3>
                <form class="form-grid">
                    <select required>
                        <option value="">Sélectionner un bus</option>
                        <option value="B001">CMR-123-XYZ</option>
                    </select>
                    <select required>
                        <option value="">Sélectionner un trajet</option>
                        <option value="T001">Yaoundé - Kribi</option>
                    </select>
                    <input type="datetime-local" placeholder="Date et heure" required>
                    <button type="submit">Ajouter</button>
                </form>
            </section>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Bus</th>
                            <th>Trajet</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>V001</td>
                            <td>CMR-123-XYZ</td>
                            <td>Yaoundé - Kribi</td>
                            <td>07/03/2025 08:00</td>
                            <td>
                                <div class="actions-container">
                                    <button class="action-btn edit">Modifier</button>
                                    <button class="action-btn delete">Supprimer</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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

        // Fonctions pour superviser les réservations (simulées)
        function confirmerReservation(id) {
            if (confirm(`Confirmer la réservation ${id} ?`)) {
                alert(`Réservation ${id} confirmée avec succès (simulation).`);
                // Ajouter une requête AJAX vers un script PHP ici
            }
        }

        function annulerReservation(id) {
            if (confirm(`Annuler la réservation ${id} ?`)) {
                alert(`Réservation ${id} annulée avec succès (simulation).`);
                // Ajouter une requête AJAX vers un script PHP ici
            }
        }
    </script>
</body>

</html>