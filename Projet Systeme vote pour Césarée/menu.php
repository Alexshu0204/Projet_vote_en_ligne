
        <style>

            .container-fluid{
                background-color:rgb(240, 232, 248) !important;
                color:rgb(125, 27, 27);
            }  

            .home{
                margin-left: 5px; /* Décalage vers la droite */
            }
            
            .dropdown-item{
                color:rgb(147, 32, 32); 
            }

            .account{
                width: 38px;
                height: 38px;
                background-color:rgb(147, 32, 32); 
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                overflow: hidden;
                margin-right: 10px; /* Décalage vers la gauche */
            }

            .account img{
                width: 40px;
                height: auto;
                max-width: 20px;
            }

            .action{
                margin-left: 5px;
            }

            .nav-link.dropdown-toggle::after {
                display: none !important;
            }

            /* Style des liens */
            .nav-link {
                position: relative;
                padding: 8px 16px;
                text-decoration: none;
                transition: color 0.12s ease-in-out;
            }

            /* Effet de soulignement animé */
            .nav-link::after {
                content: "";
                position: absolute;
                left: 50%;
                bottom: 0;
                width: 0;
                height: 3px;
                background-color: rgb(255, 0, 0); /* Couleur de l'effet */
                transition: width 0.3s ease-in-out, left 0.3s ease-in-out;
            }

            /* Animation au survol */
            .nav-link:hover {
                color:rgb(255, 0, 0);
            }

            .nav-link:hover::after {
                width: 100%;
                left: 0;
            }

            .account:hover {
                background-color: rgb(255, 0, 0); 
                transition: background-color 0.12s ease; 
            }

            
            .dropdown-item:hover{
                color:rgb(255, 0, 0);
            }

            .nav-link.active {
                font-weight: bold;
                color: red !important;
                border-bottom: 3px solid red; /* Ajoute une bordure sous l'onglet actif */
            }
            
        </style>

        <nav>

            <div class="container-fluid d-flex justify-content-between align-items-center">

                <ul class="navbar-nav d-flex flex-row gap-5">

                     <li class="nav-item">
                        <a class="nav-link" href="accueil.php"><span class="home">Accueil</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="liste_evenement.php"><span class="li_evnt">Liste évènement</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="results">Résultats</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="setting">Paramètre</span></a>
                    </li>
                </ul>

                <!-- Onglet "Compte" aligné à droite -->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="account" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Mon compte"> 
                                <img src="images/icon-2426371_1280(2).png"> 
                        </span>

                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><span class="action">Action</span></a></li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="index.php">
                                    <i class='bx bx-log-out'></i>Se déconnecter
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

            document.addEventListener("DOMContentLoaded", function() {
                // Récupère tous les liens du menu
                const navLinks = document.querySelectorAll(".nav-link");

                // Récupère le chemin complet de la page actuelle
                const currentPage = window.location.pathname.split("/").pop() || "index.php"; // Si vide, met "index.php"

                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl);
                });

                navLinks.forEach(link => {
                    // Récupère le href du lien sans le domaine
                    const linkPage = link.getAttribute("href").split("/").pop();

                    if (linkPage === currentPage) {
                        link.classList.add("active");
                    }
                });

            });

        </script>