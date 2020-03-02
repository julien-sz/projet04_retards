<?php

$dateRetard = '14/03/2020';
$dateRetardOrig = DateTime::createFromFormat('d/m/Y', $dateRetard);
echo $dateRetardOrig->format('Y-m-d');

