<?php 

$server = 'localhost:3308';
$username = 'root';
$userpass = '';
$dbname = 'utilisateur';

try {
    $dbconn = new PDO("mysql:host=$server;dbname=$dbname", $username, $userpass);
    
} catch (PDOException $e) {
    echo 'Echec de connexion : ' . $e->getMessage();
}



if (isset($_GET['supp'])) {

	$id=$_GET['supp'];

	$req=$dbconn->prepare("DELETE FROM users WHERE N='$id'");
	$req->execute();


	header("location: home.php");


}

?>