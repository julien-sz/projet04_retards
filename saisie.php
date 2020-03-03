<?php
include ('config.php');
if (isset($_POST['submit'])) {

    $heure_arrivee = $_POST['heure_arrivee'];
    $minutes_arrivee = $_POST['minutes_arrivee'];
    $id_utilisateur = $_POST['id_utilisateur'];
    $motifs = $_POST['motifs'];
    $dateArrivee = intval($heure_arrivee).":".intval($minutes_arrivee);
    $dateRetard = $_POST['date'];

    echo $dateRetard;
    echo '<br>';

    //$dateRetardOrig = DateTime::createFromFormat('d/m/Y', $dateRetard);

    //echo $dateRetardOrig->format('Y-m-d');


    //$dateRetardConv = $dateRetardOrig->format('Y-m-d');

   // $date = $dateArrivee = ''.intval($heure_arrivee).':'.intval($minutes_arrivee).'';
    //$date = date('d-m-y', strtotime('now') );


    //$today = date('Y-m-d', strtotime('now') );
    $heureE = ''. $dateRetard.'T'.$dateArrivee.'';




$insertData = $db->prepare("INSERT INTO retards (id_utilisateur, heure_arrivee, motifs) VALUES(?,?,?)");
$insertData->execute( array($id_utilisateur, $heureE, $motifs,) );
// print $DBserveur->lastInsertId();
}

?>


<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Saisie du retard élève</h5>
        <div class="card-body">
            <form action="index.php?page=saisie" id="saisie_retard_form" data-parsley-validate="" method="post">
                <div class="form-group">
                    <label for="inputstudent">Nom de l'élève</label>
                    <select id="inputstudent" name="id_utilisateur"  type="text" size="1">
                        <?php
                        $getEleves = $db->query('select role_id, id, nom from utilisateurs where role_id=1');
                        $getEleves->execute();
                        $getEleves->setFetchMode(PDO::FETCH_ASSOC);

                        foreach($getEleves->fetchAll() as $key => $eleve) {
                            echo  '<option value="'.$eleve['id'].'">'.$eleve['nom'].'</option>';
                        }
                        ?>
                    </select>
                </div><br/>

                <!-- LA DATE devra faire partie du flot de données envoyé vers la DB à la saisie du retard -->
                <p>Heure d'arrivée élève:</p>
                <label for="heure_arrivee">Heure</label>
                <input type="number" id="heure_arrivee" name="heure_arrivee" min="8" max="16">
                <label for="minutes_arrivee">Minutes</label>
                <input type="number" id="minutes_arrivee" name="minutes_arrivee" min="00" max="59">
                <label for="dateretard">Date</label>
                <!-- <input type="date" name="date" > -->
                <input type="date" name="date" >

              / <script>
                    $(function() {
                        $('input[name="birthday"]').daterangepicker({
                            singleDatePicker: true,
                            showDropdowns: true,
                            minYear: 1901,
                            maxYear: parseInt(moment().format('YYYY'),10)
                        }, function(start, end, label) {
                            var years = moment().diff(start, 'years');
                            alert("You are " + years + " years old!");
                        });
                    });
                </script>

                <br />
                <br />
                <label for="motif">Motif du retard :</label>
                <textarea id="motif" rows=2 cols=20 name="motifs" form="saisie_retard_form"></textarea>
                <div class="row">
                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0"></div>

                    </div>
                    <div class="col-sm-6 pl-0">
                        <p class="text-right">
                            <button type="submit" class="btn btn-space btn-primary" name="submit">Signaler le retard</button>
                            <button class="btn btn-space btn-secondary">Annuler</button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

