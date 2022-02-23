<?php
include 'Calendar.php';
$calendar = new Calendar('2021-02-02');
$calendar->add_event('Birthday', '2021-02-03', 1, 'green');
$calendar->add_event('Doctors', '2021-02-04', 1, 'red');
$calendar->add_event('Holiday', '2021-02-16', 7);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Event Calendar</title>
		<link href="styleCal.css" rel="stylesheet" type="text/css">
		<link href="calendar.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	    <nav class="navtop">
	    	<div>
	    		<h1>Event Calendar</h1>
	    	</div>
	    </nav>
		<div class="content home">
			<?=$calendar?>
		</div>
	</body>
</html>


<?php
class Calendar {

    //Année
    private $anneeMoyenne, $anneeResultat, $anneeTOEIC;

    //Niveau Anglais
    private $TOEICblanc1, $TOEICblanc2, $TOEICofficiel, $anglaisResultats;


    //UE Outils Informatique2
    private $bddTP, $bddCoef, $bdd;
    //private $bddNoteMin, $bddECTS;

    private $semP, $sem$TP, $semCoef, $sem,
    //private $semNoteMin, $semECTS;

    private $ueOutilsInformatiques2, $ueOutilsInformatiques2Reultats;
    //private $ueOutilsInformatiques2NoteMin, $ueOutilsInformatiques2ECTS;


    //UE Telecomunnication 2

    private 

}
?>