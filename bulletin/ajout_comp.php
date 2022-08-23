
<!DOCTYPE html>
<?php
  //session_start();
  include('connect.php');
  include 'nav2.php';

?>


<html>
<head>
<link href="LoginCss/style.css" rel="stylesheet">

<link rel="stylesheet" href="assets/signup-form.css" type="text/css" />
<!-- <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">  -->
       
<?php include('inccss.php'); ?>
</head>



<body>


				
	<?php //include('menu.php'); ?>		
<div class="col-sm-8 col-sm-offset-3 col-lg-offset-2 main"> 
	

    <div class="signup-form-container  " style=" box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);" >
    
         <!-- form start -->
         <form   action="saveCompetences.php" method="post">
         
         <div class="form-header " >
         	<h3 class="form-title"><i class="fa fa-user"></i> Ajouter une competence</h3>
                      
         <div class="pull-right">
             <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
         </div>
                      
         </div>
                  
         <div class="form-body">
         
         	  <div class="alert alert-info" id="message" style="display:none;">
              Non Enregistrer
              </div>

    
<br> <br> <br>
              <div class="form-group" >
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                   <textarea name="code_Competences"  class="form-control" rows="2" placeholder="Code  competence (ex : C20)"></textarea>
                   </div>
                   <span class="help-block" id="error" ></span>
              </div>

                      
         	  <div class="form-group" >
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                   <textarea name="libelle_Competences"  class="form-control" rows="3" placeholder="libelle competence"></textarea>
                   </div>
                   <span class="help-block" id="error"></span>
              </div>

            <div class="form-footer">
                 <button type="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-log-in"></span> Enregistrer
                 </button>
            </div>


            </form>
            
           </div>

	</div>

</body>
</html>

	