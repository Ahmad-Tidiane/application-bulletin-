
<html>
    <head>
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
        
    </head>


    <body>
    <?php
          include 'nav2.php';

    ?>
        <div class="float-end" class="position-fixed">
		<a href="ajout_note.php" class="btn-primary btn">Ajouter note</a>
        </div><br>

    <div class="container" style="margin-left: 35px;">
        
    
    <table class="table table-secondary">
    <h2 class="table table-link">Liste des Apprenants du Développement FRONT-END</h2>
        <thead>
            <tr>
                <th scope="col">Matricule</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Email</th>
                <th scope="col">Date naissance</th>
                <th scope="col">Adresse</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Promotion</th>
                <th scope="col">Filières</th>
                <th scope="col">Voir Bulletin</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
            <?php 
                include_once"connexion_db.php";
                $sql=mysqli_query($db,"SELECT * FROM apprenants WHERE code_Filieres = 'TS-DFE'");

                while($row=mysqli_fetch_assoc($sql)){
                   

           ?>

        </thead>
        <tbody>
            <tr>
                <td><?=$row["matricule_Apprenants"] ?></td>
                <td><?=$row["Nom_Apprenants"] ?></td>
                <td><?=$row["Prenom_Apprenants"] ?></td>
                <td><?=$row["Email_Apprenants"] ?></td>
                <td><?=$row["Date_Naissance_Apprenants"] ?></td>
                <td><?=$row["Adresse_Apprenants"] ?></td>  
                <td><?=$row["Num_tel_Apprenants"] ?></td>
                <td><?=$row["promotion_Apprenants"] ?></td>
                <td><?=$row["code_Filieres"] ?> </td>
                <td><a class='btn btn-primary float-start' href="bulletin.php?editu=<?= $row['matricule_Apprenants']; ?>">Bulletin</a></td>
                <td><a class='btn btn-warning float-start' href="edit_app.php?edit=<?= $row['matricule_Apprenants']; ?>">Modifier</a></td>
	            <td><a class='btn btn-danger float-end' href="supprimer_app.php?delete=<?= $row['matricule_Apprenants']; ?>">Supprimer</a></td>

            </tr>
            <?php 
                }
            ?>
           
        </tbody>
    </table>
    
    </div>
    </body>

    <!-- <div class="form-group row">
              <div class="col-sm-1"></div>
                  <div class="col-sm-3">
                    <a href="#"><input type="reset" class="btn btn-success" value="Retour au menu principal"></a>
                </div>
            </div> -->

</html>