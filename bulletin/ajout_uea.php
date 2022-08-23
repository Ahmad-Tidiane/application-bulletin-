
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
<link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> 
       
<?php include('inccss.php'); ?>
</head>



<body>


<div class="col-sm-8 col-sm-offset-3 col-lg-offset-2 main"> 
	

    <div class="signup-form-container  " style=" box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);" >
    
         <!-- form start -->
         <form action="saveUEA.php" method="post">
         
         <div class="form-header " >
         	<h3 class="form-title"><i class="fa fa-user"></i> Ajouter un UEA</h3>
                      
         <div class="pull-right">
             <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
         </div>
                      
         </div>
                  
         <div class="form-body">
         
         	  <div class="alert alert-info" id="message" style="display:none;">
              Non Enregistrer
              </div>

              <div class="row ">   
                   <div class="form-group col-lg-6">
                Veuillez choisir une compétence
            </div>
        

               
                       
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-book"></span></div>
                         <select class="form-control"  name="code_Competences">
                          <option selected >Competences</option>

                                     <?php
                                      $sql = "SELECT * FROM competences"; 
                                        $result=$pdo->query($sql);  

                                       $data=$result->fetchAll(PDO::FETCH_ASSOC);
                                      foreach ($data as $donne){
                                      
                                              
                                                       ?>
                                       <option  value="<?php echo $donne['code_Competences']; ?>"><?php echo $donne['libelle_Competences'] ?></option>

                                        
                  
                                       
                                          <?php

                                                          
                                            } ?>
                                    </select>
                                      
                                     
                                     
                             

                        </div>  

               </div>               
             
              </div>
<br> <br> <br>
           
              <div class="form-group" >
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                   <textarea name="code_uea"  class="form-control" rows="2" placeholder="Code de l'UEA"></textarea>
                   </div>
                   <span class="help-block" id="error"></span>
              </div>

                      
         	  <div class="form-group" >
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                   <textarea name="libelle_uea"  class="form-control" rows="3" placeholder="Nom de l'UEA"></textarea>
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
                        
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                   <input name="coeff_uea"  class="form-control" type="number" placeholder="Coéfficient"/>
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
                        

                  
                        
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

	