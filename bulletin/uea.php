
<html>
    <head>
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
        
    </head>


    <body >
    <?php
          include 'nav2.php';
    ?>
       
        <div class="float-start">
		<a href="ajout_uea.php" class="btn-primary btn">Ajouter UEA</a>
		</div><br>
    <div class="container">
        
    
    <table class="table table-dark">
    <h2 class="table table-dark">Liste UEA</h2>
        <thead>
            <tr>
                <th scope="col">Code UEA</th>
                <th scope="col">Libelle UEA</th>
                <th scope="col">Code Competences</th>
                <th scope="col">Action</th>
            </tr>
            <?php 
                include_once"connexion_db.php";
                $sql=mysqli_query($db,"SELECT * FROM uea");

                while($row=mysqli_fetch_assoc($sql)){
                   

           ?>

        </thead>
        <tbody>
            <tr>
                <td><?=$row["code_uea"] ?></td>
                <td><?=$row["libelle_uea"] ?></td>
                <td><?=$row["code_Competences"] ?></td>
                <td><a class='btn btn-danger float-start' href="supprimer_uea.php?delete=<?= $row['code_uea']; ?>">Supprimer</a></td>
               
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