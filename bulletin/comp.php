
<html>
    <head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
        <meta charset="UTF-8">
    </head>


    <body>
    <?php
          include 'nav2.php';

    ?>
       
        <div class="float-start">
		<a href="ajout_comp.php" class="btn-primary btn">Ajouter Competences</a>
		</div><br>
    <div class="container">
        
    
    <table class="table table-dark">
    <h2 class="table table-dark">Liste Competences</h2>
        <thead>
            <tr>
                <th scope="col">Code Competences</th>
                <th scope="col">Libelle Competences</th>
                <th scope="col">Action</th>
            </tr>
            <?php 
                include_once"connexion_db.php";
                $sql=mysqli_query($db,"SELECT * FROM competences");

                while($row=mysqli_fetch_assoc($sql)){
                   

           ?>

        </thead>
        <tbody>
            <tr>
                <td><?=$row["code_Competences"] ?></td>
                <td><?=$row["libelle_Competences"] ?></td>
                <td><a class='btn btn-danger float-start' href="supprimer_comp.php?delte=<?= $row['code_Competences']; ?>">Supprimer</a></td>
               
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