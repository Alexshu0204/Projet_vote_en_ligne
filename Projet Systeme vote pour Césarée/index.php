<!DOCTYPE html>
<html>
   <head>
       <title>Authentification</title>
       <meta charset="utf-8" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="login_mainStyle.css"/>
       <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'><!--Lien pour télécharger les icônes-->
       <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
   </head>

    <body>

        <div id="progressBar"></div>


        <header class="header">
                <h1 class="loginTitle">Page d'authentification</h1>
        </header>


        <div class="auth_container">


            <!----------------------------------------------Formulaire de connexion---------------------------------------------->
            <form id="loginForm" action="accueil.php" method="post">

                <div class="container">

                    <div class="adminIcone">
                        <img src="images/icon-2426371_1280(2).png">
                        <div class="adminTitle">ADMINISTRATEUR</div>
                    </div>

                    <br/>

                    <!--Ici les champs-->
                    <div class="input-container">
                        <i class='bx bxs-user'></i>
                        <input name="user" id="username" type="text" placeholder="Utilisateur *" required>
                    </div>
                    
                    <div class="input-container">
                        <i class='bx bxs-lock-alt'></i>
                        <input name="mdp" id="password" type="password" placeholder="Mot de passe *" required>
                    </div>

                    <i id="togglePassword" class='bx bx-toggle-left'></i>


                    <!--Ici le reste-->
                    <div class="RemFog">
                        <a href="oubli.php">Mot de passe oublié ?</a>
                    </div>

                    <button type="submit" id="loginButton" name="send_con">
                        Se connecter 
                        <div class="loader"></div>
                    </button>
                    
                    <!--Message d'erreur caché-->
                    <p id="errorMessage" class="error-message">Nom d'utilisateur ou mot de passe incorrect. Veuillez vérifier vos informations et réessayez.</p>


                </div>

            </form>

        </div>

        <script src="login_script.js"></script>

    </body>

</html>