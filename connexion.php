<style>
    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 180px;
        padding-bottom: 80px;
    }
    form {
        width:100%;
        padding: 30px;
        border: 5px solid #f1f1f1;
        background: #fff;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
</style>

<?php
include ('config.php');
if (isset($_POST['login'])) {
    // et si les champs nom et password ne sont pas vides
    if (isset($_POST['adresse_mail']) AND isset($_POST['password'])) {

// recup des données du form
        $adresse_mail = $_POST['adresse_mail'];
        $password = $_POST['password'];

// select données db
        $response = $db->prepare('SELECT id, adresse_mail, password, nom
              FROM utilisateurs
              WHERE adresse_mail = :adresse_mail
            ');
        $response->bindValue(':adresse_mail', $adresse_mail, PDO::PARAM_STR);
        $response->execute();
        $member = $response->Fetch();
        $response->CloseCursor();

        // si l'ulisateur existe dans la db
        if (!$member) {
            header('location:connexion.php');
            exit();
        }

        //comparaison mdp avec celui de la db
        if ($password != $member['password']) {
            header('location:connexion.php');
            exit();
        }


        // si tout est OK
        $_SESSION['id'] = $member['id'];
        $_SESSION['nom'] = $member['nom'];

        // => redirection vers candidats php
        header('location:consultation.php');
    }
}

?>


<?php
if($session_id != 0) {

    header('location:consultation.php');

}

else {
    echo '

<!-- ============================================================== -->
<!-- login page  -->
<!-- ============================================================== -->
<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center"><a href="https://www.vosges.cci.fr/"><img class="logo-img" src="logo.jpg" alt="1"></a><span class="splash-description">Entrez votre adresse e-mail et votre mot de Passe</span></div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="adresse_mail" id="adresse_mail" type="text" placeholder="e-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Mot de Passe">
                </div>
                <!--<div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Enregistrer la Connexion</span>
                    </label>
                </div>-->
                <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">Connexion</button>
            </form>
        </div>
    </div>
    
</div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->

';
}

?>





