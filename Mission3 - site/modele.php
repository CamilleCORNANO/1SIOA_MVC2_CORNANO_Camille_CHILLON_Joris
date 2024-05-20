<?php
include "connexionBDD.php";
function connexion($login, $mdp) {
    global $bdd;
    $logged = False ;
    $utilisateurs = getUsers($bdd);
    foreach ($utilisateurs as $log) {
        $trtmt = getUser($login);
        if ($login == $trtmt['mail'] && $mdp == $trtmt['motdepasse']) {
            $logged = True;
            return $logged;
        } else {
            return $logged;
        }
    }
    
}
