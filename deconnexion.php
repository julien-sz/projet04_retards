<?php
// demarre session
session_start();

// destruction de la session
session_destroy();

// redirection vers page de connexion
header('location:index.php');
exit;
?>