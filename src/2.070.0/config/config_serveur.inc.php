<?php
// *************************************************************************************************************
// INFORMATIONS SUR LE PROPRIETAIRE
// *************************************************************************************************************
$REF_CONTACT_ENTREPRISE = "C-000000-00001";

// *************************************************************************************************************
// INFORMATIONS SUR LE SERVEUR
// *************************************************************************************************************
$_SERVER['REF_SERVEUR'] = "000000";
$_SERVER['ACTIF'] = 1;

// *************************************************************************************************************
// INFORMATIONS SUR LE SERVEUR DE MISE A JOUR
// *************************************************************************************************************
$_SERVER['VERSION'] = '2.0700';
$MAJ_SERVEUR['url'] = "http://ftp2.lundimatin.fr/__maj_serveur/";
$ACTIVE_MAJ = true;
$CODE_SECU = "toto";		//code de s�curit� transmis aux serveurs d'importation de donn�es

// *************************************************************************************************************
// SYSTEME
// *************************************************************************************************************
$ETAT_APPLICATION = "PROD";		// DEV ou PROD
$AFFICHE_DEBUG = 0;
$EMAIL_DEV = null; // Configurez ici l'adresse email de l'administrateur
$FORCE_EMAIL_DEBUG = true;
// *************************************************************************************************************
// BACKUP
// *************************************************************************************************************
$SESSION_START_BACKUP = false;		// r�alise un backup MySQL au d�marrage de la session si true

?>