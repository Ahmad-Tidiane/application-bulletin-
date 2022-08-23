<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/stylets.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li><div class="dropdown">
                <button class="boutonmenuprincipal">Gestion de Notes</button>
            </div></li>
        </li>
      <li><div class="dropdown">
                <button class="boutonmenuprincipal">Accueil</button>
               
            </div></li>
        </li>
       
        <li class="nav-item">
        <li><div class="dropdown">
                <button class="boutonmenuprincipal">TIC</button>
                <div class="dropdown-child">
                    <a href="DBE.php">DBE</a>
                    <a href="DFE.php">DFE</a>
                </div>
            </div></li>
        </li>
        <li class="nav-item">
        <li><div class="dropdown">
                <button class="boutonmenuprincipal">UEA</button>
                <div class="dropdown-child">
                    <a href="ajout_uea.php">Ajouter UEA</a>
                    <a href="uea.php">Voir UEA</a>
                </div>
            </div></li>
        </li>
        <li class="nav-item">
        <li><div class="dropdown">
                <button class="boutonmenuprincipal">compentences</button>
                <div class="dropdown-child">
                    <a href="ajout_comp.php">Ajouter Competences</a>
                    <a href="comp.php">Voir Competences</a>
                </div>
            </div></li>
        </li>
        <li class="nav-item">
        <li><div class="dropdown">
                <button class="boutonmenuprincipal">Apprenants</button>
                <div class="dropdown-child">
                    <a href="ajout_app.php">Ajouter Apprenants</a>
                </div>
            </div></li>
            <li><div class="dropdown">
                <button class="boutonmenuprincipal">Se deconnecter</button>
                <div class="dropdown-child">
                    
                    <a href="index.php">Deconnexion</a>
                </div>
            </div></li>
            <li><div class="dropdown">
               
               
            </div></li>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>