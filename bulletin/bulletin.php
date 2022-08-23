<!DOCTYPE html>
<html>
<head>
	<title>Bulletin de Notes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
		include 'connexion_db.php';
		$id=$_GET["editu"];
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
      		$mat = $row['matricule_Apprenants'];
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
		<div class="container">
	<header>
		<img src="css/img/islogo.png" class="logo">
		<img src="css/img/senegal.png" class="logo2">
		<nav>REPUBLIQUE DU SENEGAL</br>Un Peuple - Un But - Une Foi </br> MINISTERE DE L'ENSEIGNEMENT SUPERIEUR , DE LA RECHERCHE ET DE L'INNOVATION</br>_____</nav>
		<table class="table3">
		<td><h3>INSTITUT SUPERIEUR D'ENSEIGNEMENT PROFESSIONNEL DE DIAMNIADIO (ISEP-DD)</h3></td>
        <td><h2><strong><u>RELEVE DE NOTES DE LA PREMIERE ANNEE-SEMESTRE 1</u></strong></h2></td>
</table>
	</header>
	<section>
	<!------------------------------------------------POUR LA TABLE 1 de l'APPRENANT ---------------------------------------------->
    
			<table class="table1">
				<thead>
					<tr>
					<th id="th_tab1">Prénoms : </th>
					<td id="td_tab1"><?php echo $pre ; ?></td>
					</tr>
					<tr>
					<th  id="th_tab1">Nom : </th>
					<td id="td_tab1"><?php echo $nom; ?></td>
					</tr>
					<tr>
					<th  id="th_tab1">Date et lieu de naissance : </th>
					<td id="td_tab1"><?php echo $age ; ?></td>
					</tr>
					<tr>
					<th  id="th_tab1">Matricule : </th>
					<td id="td_tab1"><?php echo $mat ; ?></td>
					</tr>
					<tr>
					<th  id="th_tab1">Filière / Métier : </th>
					<td id="td_tab1"><?php echo $idf; ?></td>
					</tr>
					<tr>
					<th  id="th_tab1">Promotion : </th>
					<td id="td_tab1"><?php echo $pro; ?></td>
					</tr>

					
				</thead>

			</table>
		</br></br>
			 	<tr>
				 <?php 
		include 'connexion_db.php';

		$id=$_GET["editu"];
        $req = "SELECT competences.code_Competences,libelle_Competences,note_Evaluer,note_Integration,libelle_uea,coeff_uea FROM competences 
					INNER JOIN evaluer ON competences.code_Competences = evaluer.code_Competences 
					INNER JOIN uea ON competences.code_Competences = uea.code_Competences
					WHERE matricule_Apprenants='$id'";
		$result = $db->query($req);
		$somme=0;
		$sommet=0;
		if ($result->num_rows > 0){
		echo '
		
		<table class="table2">
			<thead>
		
				<tr class="id">
					<th>CODE</th>
					<th>COMPETENCE</th>
					<th>Unité d\'Enseignement</br>Apprentissage(UEA)</th>
					<th>Cr</th>
					<th>Note</br>UEA</th>
					<th>Moyenne</br>UEA</th>
					<th>Note</br>d\'Integration</th>
					<th>Moyenne</br>Compétence</th>
					<th>Totale</br>Compétence</th>
					<th>Décision</th>
				</tr>
				
			</thead>

			 <tbody>
			 

			 	<tr>';
				 while($row = $result->fetch_assoc()): ?>
				 <?php  for ($i=0; $i < 1 ; $i++) { 
							if (isset($row['coeff_uea'])) {
								$somme= $somme + $row['coeff_uea'];
						}	
					 }  ?>
					 
				 	<td><strong><?php echo $row['code_Competences'] ; ?></strong> </td>
				 	<td><strong><?php echo $row['libelle_Competences'] ; ?></strong></td>
				 	<td><?php echo $row['libelle_uea'] ; ?></td>
				 	<td> <?php
					 echo $row['coeff_uea'] ; 
					 ?></td>
		            <td><?php echo $row['note_Evaluer'] ; ?></td>
		            <td><?php echo $row['note_Evaluer'] ; ?></td>	 	<!--MOYENNE -->
		            <td><?php echo $row['note_Integration'] ; ?></td>			<!--NOTE D'INTEGRATION -->
		            <td><?php if(isset($row['note_Integration'])){
						$moy=0;
						$not=$row['note_Evaluer'];
						$int=$row['note_Integration'];
						$moy=(($not*3)/5)+(($int*2)/5);
						echo $moy;
					}else{
						echo '-';
					} ?></td> <!--MOYENNE COMPETENCE -->
					<td><?php if(isset($moy)){
						$totale=0;
						$not=$row['coeff_uea'];
						$totale=$not*$moy;
						echo $totale;
					}else{
						echo '-'; 
					}
					
					?></td>			
		            <td>
						<?php if($moy < 14){
							echo  "non Acquise";
							}elseif($moy >= 14){
								echo"Acquise";
							}elseif($moy = ''){
								echo  "En cours d'acquisition"  ;
							}	 
							$inc= array($moy);?> 
					</td><!--DECISION -->
					<?php  for ($j=0; $j < 1 ; $j++) { 
							if (isset($totale)) {
								$sommet= $sommet + $totale;
						}	
					 }  ?>	
		        </tr>
			
      		</tbody>
			  <?php endwhile;?>
      <tfoot>
	  <td colspan="3"><strong style="float:left;">Total</strong></td>
			<td>
			<?php
			
			echo $somme ;
					

			?></td>
			<td colspan="4"></td>
			<td>
			<?php
					
			echo $sommet;					
			?>
			</td>
			<td colspan="2"></td>
         <tr>
            <td colspan="10"> <strong>Moyenne de la compétence = Moyenne UEA * 60% + Integration * 40%</strong></td>
         </tr>
         <tr>
            <td colspan="10"><strong>Seuil d'acquisition d'une compétence = 70% soit la note moyenne de 14 / 20</strong> </td>
         </tr>
		 <tr>
            <td colspan="10"><strong><?php  
				$moyG = $sommet / $somme;
				echo "Moyenne Semestrielle = ".round($moyG,2)."/20<br>";
				if($moyG >=14){
					echo "Compétences acquises";
				}else{
					echo "Compétences non acquises";
				}
			?>
			</strong> </td>
         </tr>
		 <tr>
            
         </tr>
      </tfoot>
			
		</table>

		<h4 class="dg"><u>Directeur des Etudes</u></h4>
		<h4 class="resp"><u>Responsable de la filière</u></h4>
		</br></br></br></br></br></br>
		<?php  } else{ echo "<h2 text-align='center'>bulletin not found</h2>"; }	?>	
	
	</section>

	<footer>
		<h5>NB: il n'est délivré qu'un seul relevé, il appartient à  l'interessé(e) d'en faire des copies</h5><hr/>
		<h5>Copyright @ www.isepdiamniadio.com</h5>
	</footer>

	</div>

</body>
</html>