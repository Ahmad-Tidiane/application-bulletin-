<?php
  include('bootstrap.php');
  include 'nav2.php';
?>
<br><br>
<div class="container">
  <div class="card">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">
      <div class="container">
        <form method="POST" action="insert-apprenants.php">
          <div class="row">
          <div class="col">
              <label for="Matricule" class="form-label">Matricule</label>
              <input type="text" name="matricule" class="form-control" id="mat">
            </div>
            <div class="col">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" name="nom" class="form-control" id="nom">
              <label for="prenom" class="form-label">Prénom</label>
              <input type="text" name="prenom" class="form-control" id="prenom">
            </div>
            <div class="col">
              <label for="age" class="form-label">Age</label>
              <input type="date" name="age" class="form-control" id="age">
              <label for="telephone" class="form-label">Téléphone</label>
              <input type="number" name="telephone" class="form-control" id="telephone">
            </div>
          </div>
          <div class="col">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email">
              <label for="adress" class="form-label">Adresse</label>
              <input type="adress" name="adresse" class="form-control" id="adresse">
            </div>
            <div class="col">
              <label for="promotion" class="form-label">promotion</label>
              <input type="number" name="promotion" class="form-control" id="promo">
            </div>
          </div>
          <?php 
            include('connexion_db.php');
            echo '<div class="col"><label for="idfilière" class="form-label">filière</label>
              <select id="filière" name="filière" class="form-control">';
            $query = "SELECT * FROM filieres";
            $result = $db->query($query);
            if($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '
                <option value="'.$row['code_Filieres'].'">'.$row['code_Filieres'].'</option>';
              }
            }
              echo '</select>';
              echo '</div>';
              $db->close();
           ?>
           <br>
            <button type="submit" class="btn btn-success align-middle">Enregistrer</button>
        </form>
      </div>
    </div>
  </div>
</div>