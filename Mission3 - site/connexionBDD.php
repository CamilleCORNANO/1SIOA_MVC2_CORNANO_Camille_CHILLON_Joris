<?php
$host = 'localhost'; // Hôte de la base de données
$dbname = ' m3ress'; // Nom de la base de données
$username = 'root'; // Nom d'res pour se connecter
$password = ''; // Mot de passe de l'res pour se connecter

try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configuration des options de PDO pour afficher les erreurs en mode exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
    exit;
}
function getUsers($bdd) {
    try {
        $sql = "SELECT nom, prenom, email, telepphone, remarque, motdepasse FROM res";
        $stmt = $bdd->prepare($sql);
        $stmt->execute();
    
        $ress = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
    } catch (PDOException $e) {
        // Gestion des erreurs
        echo 'Erreur : ' . $e->getMessage();
    }

    return $ress;

}

function getUser($key) {
    global $bdd;
    $tempo = getUsers($bdd) ;
    $utilisateurs = getUsers($bdd);
    $result = [];
    foreach ($tempo as $list) {
        foreach ($list as $element) {
            if ($key == $element) {
            $tempo = $list;
            }
        }
    }
    foreach ($tempo as $res) {
        $utilisateur = array();
        $nom = $res['nom'];
        $prenom = $res['prenom'] ;
        $mail = $res['email'] ;
        $telephone = $res['telepphone'] ;
        $remarque = $res['remarque'] ;
        $motdepasse = $res['motdepasse'] ;
    }

    return $utilisateur;

}

