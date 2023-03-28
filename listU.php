<?php
include('mesFUNCTON.php');
$utilisateurs=listAllUser();


echo '<div id="listutilisateur">';
echo '  Utilisateurs:';
echo'   <select>';
echo'            <option>Tous<option>';
foreach ($utilisateurs as $value) { 
echo'   <option>'.$value['login'].'</option>';
    }
echo'   </select>';
echo'    <form action="connection.php" methode="POST">';
echo'        <table  border="5" >';
echo'            <tr>';
echo'                <th >Num</th>';
echo'                <th >Login</th>';
echo'                <th >Nom</th>';
echo'               <th >Tel</th>';
echo'                <th >Role</th>';
echo'            </tr>';
            foreach ($utilisateurs as $value) { 
echo'              <tr>';
echo'                  <td>'.$value['N'].'</td>';
echo'                  <td>'.$value['login'].'</td>';
echo'                  <td>'.$value['nom'].'</td>';
echo'                  <td>'.$value['tel'].'</td>';
echo'                  <td>'.$value['role'].'</td>';
echo'                </tr>';
            
            }

           
echo'        </table>'; 
echo'    </form>';



?>