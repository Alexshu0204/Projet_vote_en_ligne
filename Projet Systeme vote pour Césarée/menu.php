
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- CSS personnalisé -->
        <link rel="stylesheet" href="menu_style.css">
    </head>

    <body>

        <nav>

            <div class="container-fluid d-flex justify-content-between align-items-center">

                <ul class="navbar-nav d-flex flex-row gap-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Listes évènements</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Résultats</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Paramètre</a>
                    </li>
                </ul>

                <!-- Onglet "Compte" aligné à droite -->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Compte
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Se déconnecter</a></li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

</html>