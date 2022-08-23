<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Gestion de Bulletin</title>
</head>
<body>

    <?php
    session_start();
    include 'nav.php';
    ?>    
    <div>
            <?php
            if($_SESSION['Matricule_Formateurs'] !== ""){
                $user = $_SESSION['Matricule_Formateurs'];
                echo "<h2 style='font-size: 40px;
                color: white;
                text-decoration: none;
                '>Bienvenue $user, vous êtes connecté</h2><br>";
                time(); 
            }
        
        ?>
        </div>
       
</body>
</html>