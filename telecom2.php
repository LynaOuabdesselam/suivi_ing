<?php
class Telecom2 {
    private $nom, $prenom, $idEtudiant, $dettes, $credits;

    //Année
    private $anneeMoyenne, $anneeResultat, $anneeTOEIC;

    //Niveau Anglais
    private $TOEICblanc1, $TOEICblanc2, $TOEICofficiel, $anglaisResultats;


    // SEMESTRE 3
    /******************************************************************************************/
    //UE Outils Informatique2
    private $bddTP, $bddCoef, $bdd;
    //private $bddNoteMin, $bddECTS;
    private $semP, $semTP, $semCoef, $sem,
    //private $semNoteMin, $semECTS;
    private $ueOutilsInformatiques2, $ueOutilsInformatiques2Reultats;
    //private $ueOutilsInformatiques2NoteMin, $ueOutilsInformatiques2ECTS;


    //UE Telecomunnication 2
    private $antennesP, $antennesTP, $antennesCoef, $antennes;
    //private $antennesNoteMin, $antennesECTS;
    private $theorieInofrmationP, $theorieInofrmationCoef, $theorieInofrmation;
    //private $theorieInofrmationNoteMin, $theorieInofrmationECTS;
    private $tOptP, $tOptTP, $tOptCoef, $tOpt;
    //private $tOptNoteMin, $tOptECTS;
    private $ueTelecom2, $ueTelecom2Resultats;
    //private $ueTelecom2NoteMin, $ueTelecom2ECTS;

    //UE Traitement du signal2
    private $tnsP , $tnsTP, $tnsCoef, $tns;
    //private $tnsNoteMin , $tnsECTS;$ueTelecom2, $ueTelecom2Resultats
    private $tsaP, $tsaTP ,$tsaCoef, $tsa;
    //private $tsaNoteMin, $tsaECTS ;
    private $ueTraitementSignal2 , $ueOutilsInformatiques2Resultats; 
    //private $ueTraitementSignal2NoteMin, $ueOutilsInformatiques2ECTS;

    //UE Langues vivante 1
    private $anglaisP , $anglaisCC, $anglaisCoef, $anglais;
    private $ueLanguesVivante1, $ueLanguesVivante1Resultat ;
    //private $ueLanguesVivante1NoteMin , $ueLanguesVivante1ECTS ;

    //UE Culture d'entreprise 7
    private $introAnalyseDonneesTP , $introAnalyseDonneesCoef, $introAnalyseDonnees ;
    //private $introAnalyseDonneesNoyeMin , $introAnalyseDonneesECTS ;
    private $ethiqueP, $ethiqueCoef, $ethique;
    //private $ethiqueNoteMin, $ethiqueECTS;
    private $introSociologieP , $introSociologieCoef, $introSociologie  ;
    //private $introSociologieNoteMin, $introSociologieECTS;
    private $ueCultureEntreprise, $ueCultureEntrepriseResultat;
    //private $ueCultureEntrepriseNoteMin, $ueCultureEntrepriseECTS;

    //S1 Resultats
    private $s3Moyenne ,$s3Resultat;
    //private $s3MoyenneNoteMin ,$s3MoyenneECTS;
    /*************************************************************************************************************/


    // SEMESTRE 4
    /*************************************************************************************************************/
    //UE Outils informatique 3 
    private $javaProjet, $javaTP, $javaCoef, $java;
    //private $javaNoteMin, $javaECTS;
    private $web2TP, $web2Coef, $web2,
    //private $web2NoteMin, $web2ECTS;
    private $ueOutilsInformatiques3, $ueOutilsInformatiques3Reultats;
    //private $ueOutilsInformatiques3NoteMin, $ueOutilsInformatiques3ECTS;

    //UE Réseaux 2
    private $modelMarkovP, $modelMarkovCoef, $modelMarkov;
    //private $modelMarkovNoteMin, $modelMarkovECTS;
    private $routageTP, $routageCoef, $routage;
    //private $routageNoteMin , $routageECTS;
    private $rtd2P, $rtd2TP, $rtd2Coef, $rtd2;
    //private $rtd2NoteMin, $rtd2ECTS;
    private $ueReseaux2, $ueReseaux2Resultat;
    //private $ueReseaux2NoteMin, $ueReseaux2ECTS;

    //UE Telecomunications 3
    private $commNumP1, $commNumP2, $commNumTP, $commNumCoef, $commNum;
    //private $commNumNoteMin, $commNumECTS;
    private $fhlsP, $fhlsCoef, $fhls;
    //private $fhlsNoteMin, $fhlsECTS;
    private $artP, $artCoef, $art;
    //private $artNoteMin, $artECTS;
    private $ueTelecom3, $ueTelecom3Resultats;
    //private $ueTelecom3NoteMin, $ueTelecom3ECTS;

    //UE Traitement du signal 3
    private $cdceP , $cdceTP, $cdceCoef, $cdce;
    //private $cdceNoteMin , $cdceECTS;
    private $dspTP ,$dspCoef, $dsp;
    //private $dspNoteMin, $dspECTS ;
    private $ueTraitementSignal3 , $ueOutilsInformatiques3Resultats; 
    //private $ueTraitementSignal3NoteMin, $ueOutilsInformatiques3ECTS;

    //UE Projet thématique
    private $rapportProjet, $exposeProjet, $TPProjet, $projetThematique;
    private $ueProjetThematique, $ueProjetThematiqueResultat;
    //private $ueProjetThematiqueNoteMin, $ueProjetThematiqueECTS;

    //UE Langues vivante 8
    private $anglaisCC, $anglais;
    //private $anglaisNoteMin, $anglaisECTS;
    private $anglaisRenforceCC, $anglaisRenforceCoef, $anglaisRenforce;
    //private $anglaisRenforceNoteMin, $anglaisRenforceECTS;
    private $ouvertureLinguistiqueCC, $ouvertureLinguistiqueCoef, $ouvertureLinguistique;
    //private $ouvertureLinguistiqueNoteMin, $ouvertureLinguistiqueECTS;
    private $anglais2; //$ouvertureLinguistique or $anglaisRenforce;
    private $ueLanguesVivante8, $ueLanguesVivanteR8esultat ;
    //private $ueLanguesVivante8NoteMin , $ueLanguesVivante8ECTS ;


    //UE Culture d'entreprise 8
    private $projetCreationEntrepriseCoef , $projetCreationEntrepriseCC, $projetCreationEntreprise;
    //private $projetCreationEntrepriseNoyeMin , $projetCreationEntrepriseECTS ;
    private $qseP, $qseCoef, $qse;
    //private $qseNoteMin, $qseECTS;
    private $santeSecuriteTravailP , $santeSecuriteTravailCoef, $santeSecuriteTravail  ;
    //private $santeSecuriteTravailNoteMin, $santeSecuriteTravailECTS;
    private $ueCultureEntreprise8, $ueCultureEntreprise8Resultat;
    //private $ueCultureEntreprise8NoteMin, $ueCultureEntreprise8ECTS;

    //S4 Resultats
    private $s4Moyenne ,$s4Resultat
    //private $s3MoyenneNoteMin ,$s3MoyenneECTS;
    /**************************************************************************************************/

    //Comms
    private $commentaires;
    private $dettesSpeT2, $remarques;


    public function __construct($nom, $prenom, $idEtudiant, $dettes, $credits,$anneeMoyenne,
        $anneeResultat, $anneeTOEIC,$TOEICblanc1, $TOEICblanc2, $TOEICofficiel, $anglaisResultats,
        $bddTP, $bddCoef, $bdd, $semP, $semTP, $semCoef, $sem, $ueOutilsInformatiques2, 
        $ueOutilsInformatiques2Reultats,$antennesP, $antennesTP, $antennesCoef, $antennes,
        $theorieInofrmationP, $theorieInofrmationCoef, $theorieInofrmation,$tOptP, $tOptTP,
         $tOptCoef, $tOpt,$ueTelecom2, $ueTelecom2Resultats,   $tnsP , $tnsTP, $tnsCoef, $tns,
         $tsaP, $tsaTP ,$tsaCoef, $tsa,$ueTraitementSignal2 , $ueOutilsInformatiques2Resultats,
        $anglaisP , $anglaisCC, $anglaisCoef, $anglais,$ueLanguesVivante1, 
        $ueLanguesVivante1Resultat, $introAnalyseDonneesTP ,$introAnalyseDonneesCoef, 
        $introAnalyseDonnees, $ethiqueP,$ethiqueCoef, $ethique,$introSociologieP , 
        $introSociologieCoef, $introSociologie,$ueCultureEntreprise, $ueCultureEntrepriseResultat,
        $s3Moyenne ,$s3Resultat, $javaProjet, $javaTP, $javaCoef, $java,$web2TP, $web2Coef, 
        $web2, $ueOutilsInformatiques3, $ueOutilsInformatiques3Reultats,$modelMarkovP,
         $modelMarkovCoef, $modelMarkov,$routageTP, $routageCoef, $routage, $rtd2P, $rtd2TP
         , $rtd2Coef, $rtd2,$ueReseaux2, $ueReseaux2Resultat, $commNumP1, $commNumP2, $commNumTP
         , $commNumCoef, $commNum,$fhlsP, $fhlsCoef, $fhls, $artP, $artCoef, $art,$ueTelecom3, 
         $ueTelecom3Resultats,$cdceP , $cdceTP, $cdceCoef, $cdce,$dspTP ,$dspCoef, $dsp,
         $ueTraitementSignal3 , $ueOutilsInformatiques3Resultats, $rapportProjet, $exposeProjet, 
         $TPProjet, $projetThematique, $ueProjetThematique, $ueProjetThematiqueResultat, $anglaisCC,
          $anglais,$anglaisRenforceCC, $anglaisRenforceCoef, 
          $anglaisRenforce,$ouvertureLinguistiqueCC, $ouvertureLinguistiqueCoef, 
          $ouvertureLinguistique, $anglais2,$ueLanguesVivante8, $ueLanguesVivanteR8esultat,
          $projetCreationEntrepriseCoef , $projetCreationEntrepriseCC, $projetCreationEntreprise, 
          $qseP, $qseCoef, $qse, $santeSecuriteTravailP , $santeSecuriteTravailCoef, 
          $santeSecuriteTravail, $ueCultureEntreprise8, $ueCultureEntreprise8Resultat,
           $s4Moyenne ,$s4Resultat, $dettesSpeT2, $remarques, $commentaires) {

            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->
            $this-->





            

    }

}
?>