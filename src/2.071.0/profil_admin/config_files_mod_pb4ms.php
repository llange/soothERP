<?php
// *************************************************************************************************************
// EDITION DES FICHIERS DE CONFIGURATION
// *************************************************************************************************************
// Variables n�cessaires � l'affichage
/* D�sactiv� pour des raisons de s�curit�
require ("_dir.inc.php");
require ("_profil.inc.php");
require ($DIR."_session.inc.php");

$file_name = $_REQUEST['nom_fichier'];

//cr�ation du nouveau fichier
$new_file_id = fopen ($DIR."ressources/phpbackup4mysql/config/tmp_".$file_name, "w");
fwrite($new_file_id, $_REQUEST['new_text_file']);
fclose($new_file_id);

// Remplacement du fichier existant
unlink($DIR."ressources/phpbackup4mysql/config/".$file_name);
rename($DIR."ressources/phpbackup4mysql/config/tmp_".$file_name, $DIR."ressources/phpbackup4mysql/config/".$file_name);

// *************************************************************************************************************
// AFFICHAGE
// *************************************************************************************************************
*/
/*include ($DIR."profil_admin/smenu_configuration_config_files.php");*/

?>