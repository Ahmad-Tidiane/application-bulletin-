
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
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        
<?php include('inccss.php'); ?>
</head>
<body>



<div class="col-sm-8 col-sm-offset-3 col-lg-offset-2 main"> 
	

    <div class="signup-form-container  " style=" box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);color:red" >
    
         <!-- form start -->
         <form   action="saveNote.php" method="post">
         
         <div class="form-header " >
         	<h3 class="form-title"><i class="fa fa-user"></i> Ajouter une note </h3>
                      
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
                <div class='input-group date' id='datetimepicker'>
                                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    <input type='date' class="form-control" name="date_Evaluer" placeholder="Date de l'évaluation"/>

                </div>
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
                                       <option value="<?php echo $donne['code_Competences']; ?>"><?php echo $donne['code_Competences']." ".$donne['libelle_Competences']; ?></option>
                                     
                                       
                                          <?php

                                                          
                                             }?>
                                     
                                     
                              </select>

                        </div>  

               </div>               
             

               
                       
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-book"></span></div>
                         <select class="form-control"  name="code_uea">
                          <option selected >UEA</option>

                                     <?php
                                      $sql = "SELECT * FROM uea"; 
                                        $result=$pdo->query($sql);  

                                       $data=$result->fetchAll(PDO::FETCH_ASSOC);
                                      foreach ($data as $donne){
                                      
                                              
                                                       ?>
                                       <option value="<?php echo $donne['code_uea']; ?>"><?php echo $donne['code_Competences']." ".$donne['libelle_uea']; ?></option>
                                     
                                       
                                          <?php

                                                          
                                             }?>
                                     
                                     
                              </select>

                        </div>  

               </div>               
             
<br> 
<div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-login"></span></div>
                         <select class="form-control"  name="Matricule_Formateurs">
                          <option selected >Formateurs</option>

                                     <?php
                                      $sql = "SELECT * FROM formateurs"; 
                                        $result=$pdo->query($sql);  

                                       $data=$result->fetchAll(PDO::FETCH_ASSOC);
                                      foreach ($data as $donne){
                                      
                                              
                                                       ?>
                                       <option value="<?php echo $donne['Matricule_Formateurs'];  ?>"><?php echo  $donne['Prenom_Formateurs']." ".$donne['Nom_Formateurs'];?></option>
                                     
                                       
                                          <?php

                                                          
                                             }?>
                                     
                                     
                              </select>

                        </div>  

               </div>               
     <br><br>
<!----------------------------------INFORMATION DE L'APPRENANT---------------------------------------------->
                                   <h5 style="text-align:center;">Information de l'apprenant</h5><hr/>
<div class="row ">   
                   <div class="form-group col-lg-6">
                
                   <h5>Choisir le nom de l'apprenant</h5>

                
            </div>
            
          <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                        <select class="form-control"  name="matricule_Apprenants">
                          <option selected >Apprenants</option>

                                     <?php
                                      $sql = "SELECT * FROM apprenants"; 
                                        $result=$pdo->query($sql);  

                                       $data=$result->fetchAll(PDO::FETCH_ASSOC);
                                      foreach ($data as $donne){
                                      
                                              
                                                       ?>
                                       <option value="<?php echo $donne['matricule_Apprenants']; ?>"><?php echo $donne['Prenom_Apprenants']." ".$donne['Nom_Apprenants']; ?></option>
                                     
                                       
                                          <?php

                                                          
                                             }?>
                                     
                                     
                              </select>
                        </div>  

               </div>               
             

                      
         	  <div class="form-group" >
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                   <textarea name="note_Evaluer"  class="form-control" rows="2" placeholder="Note évaluation"></textarea>
                   </div>
                   <span class="help-block" id="error"></span>
              </div>

              <div class="form-group" >
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                   <textarea name="note_Integration"  class="form-control" rows="2" placeholder="Note Integration"></textarea>
                   </div>
                   <span class="help-block" id="error"></span>
              </div>

              
                      
         	  <div class="form-group" >
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                   <textarea name="semestre_Evaluer"  class="form-control" rows="2" placeholder="Semestre"></textarea>
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
                        
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                   <textarea name="commentaire_Evaluer"  class="form-control" rows="2" placeholder="Commentaire évaluation"></textarea>
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
                        

                  
                        
            </div>
            
            <div class="form-footer" >
                 <button type="submit" class="btn btn-success">
                 <span class="glyphicon glyphicon-log-in"></span> Enregistrer
                 </button>
            </div>


            </form>
            
           </div>

	</div>	
</body>
</html>

	