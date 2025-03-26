<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="accueil_style.css"/>
        <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
        <!--lien Bootstrap pour le menu-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'><!--Lien pour télécharger les icônes-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <title>Accueil</title>
    </head>

    <body>
        <div id="progressBar"></div>

        <header>
            <?php
            include('menu.php');
            ?>
        </header>

        <h1 class="titre">Accueil</h1>


        <div class="evnt_container">

            <h2 class="newEvntTitle">Nouvel évènement</h2>

            <form id="eventForm" action="liste_evenement.php" method="post">

                <label for="eventID">
                    <i class='bx bx-calendar-event'></i><span class="evnt">Nom de l'évènement *</span>
                </label>

                <input name="event" id="eventID" type="text" required>

                <label for="descriptionID">
                    <i class='bx bx-notepad'></i><span class="descr">Description *</span>
                </label>

                <textarea name="description" id="descriptionID" required></textarea>

                <div class="date_container">
                    <div>
                        <label for="dateStartID">Date de <span class="highlight">début</span> : *</label>
                        <input name="event_date" type="date" id="dateStartID" required>
                    </div>
                    <i class='bx bx-right-arrow-alt'></i>
                    <div>
                        <label for="dateEndID">Date de <span class="highlight-2">fin</span> : *</label>
                        <input name="event_date" type="date" id="dateEndID" required>
                    </div>

                </div>

                <div class="button-container">
                    <button type="submit" id="createButtonID" name="send_con">
                        <span>Valider et créer l'événement</span> 
                        <i class='bx bx-check'></i>
                        <div class="loader"></div>
                    </button>
                </div>

            </form>

        </div>

        <script src="accueil_script.js"></script>
        
    </body>
    
</html>