<?php
session_start();
//unset() détruit la ou les variables dont le nom a été passé en argument
//unset() Supprime uniquement les données relatives aux noms
unset($_SESSION);
unset($_COOKIE);
//efface TOUTES les données associées à cet utilisateur.
session_destroy();
header ('Location: index.php');
?>