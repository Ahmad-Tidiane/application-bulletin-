<?php
  include('bootstrap.php');
   include 'nav2.php';
  include('connexion_db.php');

  $id=$_GET["edit"];
		$nom = '';
		$pre = '';
		$age = '';
		$tel = '';
		$ema = '';
		$idf = '';
		$add = '';
		$pro = 0;
		$mat= '';
        $req = "SELECT * FROM apprenants WHERE matricule_Apprenants='$id'";
		$result = $db->query($req);
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
			$nom = $row['Nom_Apprenants'];
      		$pre = $row['Prenom_Apprenants'];
			$ema = $row['Email_Apprenants'];
      		$age = $row['Date_Naissance_Apprenants'];
			$add = $row['Adresse_Apprenants'];
      		$tel = $row['Num_tel_Apprenants'];
      		$pro = $row["promotion_Apprenants"];
      		$idf = $row['code_Filieres'];
			}
		}
?>
<br><br>
<div class="container">
  <div class="card">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">
      <div class="container">
        <form method="POST" action="update_app.php?edit=<?=$id ?>">
          <div class="row">
            <div class="col">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" name="nom" class="form-control" id="nom" value='<?php echo $nom ?>'>
              <label for="prenom" class="form-label">Prénom</label>
              <input type="text" name="prenom" class="form-control" id="prenom" value='<?php echo $pre  ?>'>
            </div>
            <div class="col">
              <label for="age" class="form-label">Age</label>
              <input type="date" name="age" class="form-control" id="age" value='<?php echo $age ?>'>
              <label for="telephone" class="form-label">Téléphone</label>
              <input type="text" name="telephone" class="form-control" id="telephone" value='<?php echo $tel ?>'>
            </div>
          </div>
          <div class="col">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email" value='<?php echo $ema ?>'>
              <label for="adress" class="form-label">Adresse</label>
              <input type="adress" name="adresse" class="form-control" id="adresse" value='<?php echo $add ?>'>
            </div>
            <div class="col">
              <label for="promotion" class="form-label">promotion</label>
              <input type="number" name="promotion" class="form-control" id="promo" value='<?php echo $pro ?>'>
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
            <button type="submit" class="btn btn-success align-middle">mise a jour</button>
        </form>
      </div>
    </div>
  </div>
</div>