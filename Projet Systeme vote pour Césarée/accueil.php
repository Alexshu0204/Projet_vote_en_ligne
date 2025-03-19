<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="accueil_style.css"/>
        <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'><!--Lien pour télécharger les icônes-->
        <title>Accueil</title>
    </head>

    <body>

        <header>
            <?php
            include('menu.php');
            ?>
        </header>

        <h1 class="titre">Accueil</h1>


        <div class="evnt_container">

            <h2 class="newEvntTitle">Nouvel évènement</h2>

            <form id="loginForm" action="liste_evenement.php" method="post">

                <input name="event" id="eventID" type="text" placeholder="Nom de l'évènement *" required>
                <textarea name="description" id="descriptionID" placeholder="Description *" required></textarea>

                <div class="date_container">
                    <div>
                        <label for="date">Date de début : *</label>
                        <input name="event_date" type="date" id="dateStartID" required onekeydown="return true;">
                    </div>

                    <div>
                        <label for="date">Date de fin : *</label>
                        <input name="event_date" type="date" id="dateEndID" required>
                    </div>

                </div>

                <div class="button-container">
                    <button type="submit" id="createButtonID" name="send_con">
                        Créer 
                        <i class='bx bx-chevrons-right'></i>
                        <div class="loader"></div>
                    </button>
                </div>

            </form>

        </div>
        
    </body>
    
</html>