<!DOCTYPE html>
<html>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet"  href="style.css">
            <link rel="stylesheet" href="bootstrap.min.css">

            <title>Home Page</title>
        </head>
        <header>
		
			<h1 class="titre" color="blue">--Gest Users--</h1>
        </header>
<body onload="document.getElementById('listutilisateur').style.display='none'">
   


    
<div class="login-form">
    <form >
                <h2 class="text-center">Menu Principal</h2>       
                <div class="ok">
                <input onclick="acceuil()" type="radio" name="Acceuil"   value="" checked="True" >Acceuil             
              </div>

                <div>
                
                <div class="form-group">
                <input  onclick="listUser()" type="radio" name="Acceuil"  value="" >List des Utilisateurs               </div>
                <div>
                
                <div class="form-group">
                <input type="radio" name="Acceuil"  value="" >Creer des Utilisateurs              </div>
                <div>
                
                <div class="form-group">
                <input  onclick="geographique()"  type="radio" name="Acceuil"  value=""  >Situation Geographique              </div> 
                <div>
    </form>

</div>
        
<br>
<br>
<br>
<br>


<script>

        function acceuil() {
          
          document.getElementById('listU').style.display = 'none';  
          document.getElementById('geographique').style.display = 'none';  


        }

        function geographique() {
          
            document.getElementById('listU').style.display = 'none';  
            document.getElementById('geographique').style.display = '';  


        }

         function listUser() {
    		
              document.getElementById('listU').style.display = '';
              document.getElementById('geographique').style.display = 'none';
              const xmlHTTP=new XMLHttpRequest();
              xmlHTTP.onload=function () {
                    document.getElementById('listU').innerHTML=xmlHTTP.responseText;

              }
              xmlHTTP.open("GET", "listU.php");
    			xmlHTTP.send();
    	}  
        
        function chargerCommune() {
            var choixDepartement = document.getElementById('departement').value; 
              const xmlHTTPCommune=new XMLHttpRequest();
              xmlHTTPCommune.onload=function () {
                    document.getElementById('commune').innerHTML=xmlHTTPCommune.responseText;

              }
              xmlHTTPCommune.open("GET", "chargerCommune.php?choixDepartement="+choixDepartement);
              xmlHTTPCommune.send();


        }
        function chargerArrondissement() {
            var choixCommune = document.getElementById('commune').value; 
              const xmlHTTPArron=new XMLHttpRequest();
              xmlHTTPArron.onload=function () {
                    document.getElementById('test').innerHTML=xmlHTTPArron.responseText;

              }
              xmlHTTPArron.open("GET", "chargerArrondissement.php?choixCommune="+choixCommune);
              xmlHTTPArron.send();


        }
 </script>
    
    
    
    
    
    <div id="listU">
           
    </div>
    
    
        <div id="listutilisateur">
                Utilisateurs<select>
                        <option>Tous<option>
                </select>
                <form action="connection.php" methode="POST">
                    <table  border="5" >
                        <tr>
                            <th >Num</th>
                            <th >Login</th>
                            <th >Nom</th>
                            <th >Tel</th>
                            <th >Role</th>
                            
                        </tr>


                        <?php
                    
                        require ('connection.php');

                        foreach ($resultat as $value) { ?>
                            <tr>
                                <td><?php echo $value->N ?></td>
                                <td><?php echo $value->login ?></td>
                                <td><?php echo $value->nom ?></td>
                                <td><?php echo $value->tel ?></td>
                                <td><?php echo $value->role ?></td>
                                </tr>
                        <?php
                        }

                        ?>
                    </table>

                    
                    
                        
                        
                </form>

    </div>  
<?php
            include('mesFUNCTON.php');
            $departement=listDepartement();
            $commune=listAllCommune();
            $arrondissement=listArrondissement();?>
         <div class="ok">
         <div id="geographique" >
                 <form >
                     <table class="table">
                         <tr>
                                   <td id="ok">Departement</td>
                            <td>
                               <select id="departement" onchange="chargerCommune()">
                                <option class="list" >Veuillez choisir un Departement<option>
                                           <?php  foreach ($departement as $value) { ?>
                                           <option value="<?php echo $value['iddepartement']; ?>"> <?php echo $value['nom']; ?></option>   
       <?php                                       } ?>
                               </select> 

                              
                            </td>
                          </tr>
                          <tr>
                                   <td id="ok">Commune</td>
                            <td>
                               <select id="commune"  onchange="chargerArrondissement()">
                                <option class="list">Veuillez choisir une Commune<option>
                                           <?php  foreach ($commune as $value) { ?>
                                             <option value="<?php echo $value['idcommunes']; ?>"> <?php echo $value['nom']; ?></option>   
       <?php                                       } ?>
                               </select> 

                              
                            </td>
                          </tr>

                          <tr>
                                   <td id="ok">Arrondissement</td>
                            <td>
                               <select id="arrondissement">
                                <option class="list">Veuillez choisir un Arrondissement<option>
                                           <?php  foreach ($arrondissement as $value) { ?>
                                           <option value="<?php echo $value['idarrondissement']; ?>"> <?php echo $value['nom']; ?></option>   
       <?php                                       } ?>
                               </select> 

                              
                            </td>
                          </tr>
                      </table >
                  </form >
  </div>
  </div>        
 <div id="tesdt"> 
    <select id="test">

    </select>
 </div>   
   
   <!-- <div id="cool">
    <form action="connection.php" methode="POST">
    <table  border="5" >
        <tr>
        	<th >Num</th>
            <th >Login</th>
            <th >Nom</th>
            <th >Tel</th>
            <th >Role</th>
            <th >Action</th>
        </tr>


        
        <?php
    
                require ('connection.php');

                foreach ($resultat as $value) { ?>
                    <tr>
                        <td><?php echo $value->N ?></td>
                        <td><?php echo $value->login ?></td>
                        <td><?php echo $value->nom ?></td>
                        <td><?php echo $value->tel ?></td>
                        <td><?php echo $value->role ?></td>
                        <td><button><a href="connection.php?supp=<?php echo $value->N ?>">Supprimer</a></button></td>

                        </tr>
        <?php
        }

        ?>
    </table>

  
           
        
</form>
    </div> -->
    
    
    
    <style>
        .form-group{
            display: inline;
           
        }
            .login-form {

                width: 680px;
                margin: 50px auto;
                
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
            .ok table .list{
                height: 20px;
 	            width: 400px;

            }
        </style>
        </body>
</html>