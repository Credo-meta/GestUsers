<?php
include('mesFUNCTON.php');

$choixDepartement=$_REQUEST['choixDepartement'];
$communes=listCommune($choixDepartement);


            $chaine="<option>Veuillez choisir une commune</option>\n";
            foreach ($communes as $value) { 
                //$chaine=$chaine." ".$value['nom'];
               $chaine=$chaine."<option > ".$value['nom']." </option>\n";
            }

           
      echo $chaine;

             
                



?>