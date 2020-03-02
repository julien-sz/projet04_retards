<?php
include ('config.php');

if (isset ($_GET['page']))                    // teste si page présente dans l'url
{$page = $_GET['page'];}              //si page présente, atr la variable page
else{$page = "connexion";}

switch ($page)
{
    case 'connexion':
        $title = "connexion";
        $metadescription = "Renseignez vos informations de connexion";
        include ('header.php');
        include ('connexion.php');
        include ('footer.php');
        break;
    //case 'inscription':
    //    $title = "inscription";
     //   $metadescription = "Inscription des admins";
     //   include ('header.php');
     //   include ('inscription.php');
      //  include ('footer.php');
     //   break;
    //case 'accueil':
     //   $title = "accueil";
     //   $metadescription = "Saisie ou Consultation?";
     //   include ('header.php');
     //   include ('accueil.php');
    //    include ('footer.php');
     //   break;
    case 'saisie':
        $title = "saisie";
        $metadescription = "Renseignez les absences de vos élèves";
        include ('header.php');
        include ('saisie.php');
        include ('footer.php');
        break;
    case 'consultation':
        $title = "consultation";
        $metadescription = "Recensement des absences";
        include ('header.php');
        include ('consultation.php');
        include ('footer.php');
        break;
    //case 'administration':
    //    $title = "admin";
    //    $metadescription = "Administration";
    //    include ('header.php');
     //   include ('admin.php');
     //   include ('footer.php');
     //   break;
    case 'consultation_student':
        $title = "consultation étudiant";
        $metadescription = "Vos absences";
        include ('header.php');
        include ('consultation_student.php');
        include ('footer.php');
        break;
    case 'configuration':
        $metadescription = "fichier config";
        include ('header.php');
        include ('footer.php');
        break;

}
?>
