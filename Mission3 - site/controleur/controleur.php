<?php
$action = $_POST['action'];
function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "vueConnexion.php" ;
    $lesActions["connexion"] = "vueAccueil.php";
    

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}
switch ($action) {
    case 'defaut' :
        include 'vueConnexion';
        break;
    
    case 'connexion' :
        $login = $_POST['login'];
        $mdp = $_POST['pw'];
        if (connexion($login,$mdp) == True) {
            include 'vueAccueil.php';
        } else {
            include 'vueConnexion.php';
        }
    
}
?>