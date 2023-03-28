<?php
include('mesFUNCTON.php');
$utilisateurs=listAllUser();


$chaine="";
            foreach ($utilisateurs as $value) { 
                
                $chaine=$chaine." ".$value['N']." ".$value['login'];
            }

           
                echo $chaine;
                



?>