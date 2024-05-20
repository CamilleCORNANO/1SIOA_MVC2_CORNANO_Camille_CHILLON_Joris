<?php
include 'modele/modele.php';
$action = isset($_REQUEST['action'])?$_REQUEST['action']:"";
include_once 'controllerMain/controller.php';
$fichier = controleurPrincipal($action);
include  "$racine/controleur/$fichier";