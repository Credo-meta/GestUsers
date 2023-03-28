<?php
    function listAllUser()
    {
        include('connection.php');
    
    
        $req = $dbconn->prepare("SELECT * FROM users ");
        $req->execute();
        
        $resultat = $req->fetchAll();
        return $resultat;

    }
    
    function listDepartement()
    {
        include('connection.php');
    
    
        $req = $dbconn->prepare("SELECT * FROM departement ");
        $req->execute();
        
        $resultat = $req->fetchAll();
        return $resultat;

    }

    

    function listAllCommune()
    {
        include('connection.php');
    
    
        $req = $dbconn->prepare("SELECT * FROM communes ");
        $req->execute();
        
        $resultat = $req->fetchAll();
        return $resultat;

    }
    

    //liste des Communes Par Departement
        
    function listCommune($choixDepartement)
    {
        include('connection.php');
    
    
        $req = $dbconn->prepare("SELECT * FROM communes WHERE iddepartement='".$choixDepartement."'  ");
        $req->execute();
        
        $resultat = $req->fetchAll();
        return $resultat;

    }

    
    //liste des Arrondissemen par Communes 
    function listeArrondissement($choixCommune)
    {
        include('connection.php');
    
    
        $req = $dbconn->prepare("SELECT * FROM arrondissement WHERE idcommunes='".$choixCommune."'  ");
        $req->execute();
        
        $resultat = $req->fetchAll();
        return $resultat;

    }


    function listArrondissement()
    {
        include('connection.php');
    
    
        $req = $dbconn->prepare("SELECT * FROM arrondissement ");
        $req->execute();
        
        $resultat = $req->fetchAll();
        return $resultat;

    }
?>