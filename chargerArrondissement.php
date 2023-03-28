<?php
include('mesFUNCTON.php');

$choixCommune=$_REQUEST['choixCommune'];
$arrondissement=listeArrondissement($choixCommune);


            $chaine="<option>Veuillez choisir  un arrondissement</option>\n";
        foreach ($arrondissement as $value) { 
    //         $chaine=$chaine." ".$value['nom'];
                $chaine=$chaine."<option > ".$value['nom']." </option>\n";
            }

                
  
      echo $chaine;

             
                



?>