<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="css/styl.css" media="screen" type="text/css" />
    </head>
    <body>
    <img src="css/img/logo.png" alt="isep">
        <div class="login">
        <h1 class="login-header">Connexion</h1>
            <form action="verification.php" method="POST" class="login-container">
                
                <p><input type="text" placeholder="Matricule_Formateur" name="username" ></p>
                <p><input type="password" placeholder="password" name="password" ></p>

                <p><input type="submit" id='submit' value='LOGIN' ></p>
                <?php
                session_start();
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>