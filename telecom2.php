<?php
class Telecom2 {
    private $nom, $prenom, $idEtudiant, $dettes, $credits, $redoublants;

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
    private $ueTraitementSignal2 , $ueTraitementSignal2Resultats; 
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

    //S3 Resultats
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
    private $ueOutilsInformatiques3, $ueOutilsInformatiques3Resultats;
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
    private $ueTraitementSignal3 , $ueTraitementSignal3Resultats; 
    //private $ueTraitementSignal3NoteMin, $ueOutilsInformatiques3ECTS;

    //UE Projet thématique
    private $rapportProjet, $exposeProjet, $TPProjet, $projetThematique;
    private $ueProjetThematique, $ueProjetThematiqueResultat;
    //private $ueProjetThematiqueNoteMin, $ueProjetThematiqueECTS;

    //UE Langues vivante 8
    private $anglais1CC, $anglais1;
    //private $anglaisNoteMin, $anglaisECTS;
    private $anglaisRenforceCC, $anglaisRenforceCoef, $anglaisRenforce;
    //private $anglaisRenforceNoteMin, $anglaisRenforceECTS;
    private $ouvertureLinguistiqueCC, $ouvertureLinguistiqueCoef, $ouvertureLinguistique;
    //private $ouvertureLinguistiqueNoteMin, $ouvertureLinguistiqueECTS;
    private $anglais2, $option; //$ouvertureLinguistique or $anglaisRenforce;
    private $ueLanguesVivante8, $ueLanguesVivante8Resultat ;
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


    public function __construct($nom, $prenom, $idEtudiant, $dettes, $credits, $redoublants
        ,$anneeMoyenne,$anneeResultat, $anneeTOEIC,$TOEICblanc1, $TOEICblanc2, $TOEICofficiel, 
        $anglaisResultats, $bddTP, $bddCoef, $bdd, $semP, $semTP, $semCoef, $sem, 
        $ueOutilsInformatiques2,$ueOutilsInformatiques2Reultats,$antennesP, $antennesTP,
        $antennesCoef, $antennes, $theorieInofrmationP, $theorieInofrmationCoef, 
        $theorieInofrmation,$tOptP, $tOptTP, $tOptCoef, $tOpt,$ueTelecom2, $ueTelecom2Resultats,
        $tnsP , $tnsTP, $tnsCoef, $tns, $tsaP, $tsaTP ,$tsaCoef, $tsa,$ueTraitementSignal2 , 
        $ueTraitementSignal2Resultats,$anglaisP , $anglaisCC, $anglaisCoef, $anglais,$ueLanguesVivante1, 
        $ueLanguesVivante1Resultat, $introAnalyseDonneesTP ,$introAnalyseDonneesCoef, 
        $introAnalyseDonnees, $ethiqueP,$ethiqueCoef, $ethique,$introSociologieP , 
        $introSociologieCoef, $introSociologie,$ueCultureEntreprise, $ueCultureEntrepriseResultat,
        $s3Moyenne ,$s3Resultat, $javaProjet, $javaTP, $javaCoef, $java,$web2TP, $web2Coef, 
        $web2, $ueOutilsInformatiques3, $ueOutilsInformatiques3Resultats,$modelMarkovP,
         $modelMarkovCoef, $modelMarkov,$routageTP, $routageCoef, $routage, $rtd2P, $rtd2TP
         , $rtd2Coef, $rtd2,$ueReseaux2, $ueReseaux2Resultat, $commNumP1, $commNumP2, $commNumTP
         , $commNumCoef, $commNum,$fhlsP, $fhlsCoef, $fhls, $artP, $artCoef, $art,$ueTelecom3, 
         $ueTelecom3Resultats,$cdceP , $cdceTP, $cdceCoef, $cdce,$dspTP ,$dspCoef, $dsp,
         $ueTraitementSignal3 , $ueTraitementSignal3Resultats, $rapportProjet, $exposeProjet, 
         $TPProjet, $projetThematique, $ueProjetThematique, $ueProjetThematiqueResultat, $anglais1CC,
          $anglais1,$anglaisRenforceCC, $anglaisRenforceCoef, 
          $anglaisRenforce,$ouvertureLinguistiqueCC, $ouvertureLinguistiqueCoef, 
          $ouvertureLinguistique, $anglais2,$option,$ueLanguesVivante8, $ueLanguesVivante8Resultat,
          $projetCreationEntrepriseCoef , $projetCreationEntrepriseCC, $projetCreationEntreprise, 
          $qseP, $qseCoef, $qse, $santeSecuriteTravailP , $santeSecuriteTravailCoef, 
          $santeSecuriteTravail, $ueCultureEntreprise8, $ueCultureEntreprise8Resultat,
           $s4Moyenne ,$s4Resultat, $commentaires, $dettesSpeT2, $remarques) {

            $this-->$nom = $nom;
            $this-->$prenom = $prenom;
            $this-->$idEtudiant = $idEtudiant ;
            $this-->$dettes = $dettes ;
            $this-->$credits = $credits ;
            $this-->$redoublants = $redoublants ;
            $this-->$anneeMoyenne = $anneeMoyenne ;
            $this-->$anneeResultat = $anneeResultat ;
            $this-->$anneeTOEIC = $anneeTOEIC ;
            $this-->$TOEICblanc2 = $TOEICblanc1 ;
            $this-->$TOEICofficiel = $ ;
            $this-->$anglaisResultats = $anglaisResultats ;
            $this-->$bddTP = $bddTP ;
            $this-->$bddCoef = $bddCoef ;
            $this-->$bdd = $bdd ;
            $this-->$semP = $semP ;
            $this-->$semTP = $semTP ;
            $this-->$semCoef = $semCoef ;
            $this-->$sem = $sem ;
            $this-->$ueOutilsInformatiques2 = $ueOutilsInformatiques2 ;
            $this-->$ueOutilsInformatiques2Reultats = $ueOutilsInformatiques2Reultats;
            $this-->$antennesP = $antennesP ;
            $this-->$antennesTP = $antennesTP ;
            $this-->$antennesCoef = $antennesCoef ;
            $this-->$antennes = $antennes ;
            $this-->$theorieInofrmationP = $theorieInofrmationP ;
            $this-->$theorieInofrmationCoef = $theorieInofrmationCoef ;
            $this-->$theorieInofrmation = $theorieInofrmation ;
            $this-->$tOptP = $tOptP ;
            $this-->$tOptTP = $tOptTP ;
            $this-->$tOptCoef = $tOptCoef ;
            $this-->$tOpt = $tOpt ;
            $this-->$ueTelecom2 = $ueTelecom2 ;
            $this-->$ueTelecom2Resultats = $ueTelecom2Resultats ;
            $this-->$tnsP = $tnsP ;
            $this-->$tnsTP = $tnsTP ;
            $this-->$tnsCoef = $tnsCoef ;
            $this-->$tns = $tns ;
            $this-->$tsaP = $tsaP ;
            $this-->$tsaTP = $tsaTP ;
            $this-->$tsaCoef = $tsaCoef ;
            $this-->$tsa = $tsa ;
            $this-->$ueTraitementSignal2 = $ueTraitementSignal2 ;
            $this-->$ueTraitementSignal2Resultats = $ueTraitementSignal2Resultats ;
            $this-->$anglaisP = $anglaisP ;
            $this-->$anglaisCC = $anglaisCC ;
            $this-->$anglaisCoef = $anglaisCoef ;
            $this-->$anglais = $anglais ;
            $this-->$ueLanguesVivante1 = $ueLanguesVivante1 ;
            $this-->$ueLanguesVivante1Resultat = $ueLanguesVivante1Resultat;
            $this-->$introAnalyseDonneesTP = $introAnalyseDonneesTP ;
            $this-->$introAnalyseDonneesCoef = $introAnalyseDonneesCoef ;
            $this-->$introAnalyseDonnees = $introAnalyseDonnees ;
            $this-->$ethiqueP = $ethiqueP ;
            $this-->$ethiqueCoef = $ethiqueCoef ;
            $this-->$ethique = $ethique ;
            $this-->$introSociologieP = $introSociologieP ;
            $this-->$introSociologieCoef = $introSociologieCoef ;
            $this-->$introSociologie = $introSociologie;
            $this-->$ueCultureEntreprise = $ueCultureEntreprise ;
            $this-->$ueCultureEntrepriseResultat = $ueCultureEntrepriseResultat ;
            $this-->$s3Moyenne = $s3Moyenne;
            $this-->$s3Resultat = $s3Resultat;

            $this-->$javaProjet = $javaProjet ;
            $this-->$javaTP = $javaTP;
            $this-->$javaCoef = $javaCoef;
            $this-->$java = $java;
            $this-->$web2TP = $web2TP;
            $this-->$web2Coef = $web2Coef;
            $this-->$web2 = $web2 ;
            $this-->$ueOutilsInformatiques3 = $ueOutilsInformatiques3 ;
            $this-->$ueOutilsInformatiques3Resultats = $ueOutilsInformatiques3Resultats ;
            $this-->$modelMarkovP = $modelMarkovP;
            $this-->$modelMarkovCoef = $modelMarkovCoef;
            $this-->$modelMarkov = $modelMarkov ;
            $this-->$routageTP = $routageTP;
            $this-->$routageCoef = $routageCoef;
            $this-->$routage = $routage ;
            $this-->$rtd2P = $rtd2P ;
            $this-->$rtd2TP = $rtd2TP ;
            $this-->$rtd2Coef = $rtd2Coef;
            $this-->$rtd2 = $rtd2;
            $this-->$ueReseaux2 = $ueReseaux2Resultat;
            $this-->$commNumP1 = $commNumP1;
            $this-->$commNumP2 = $commNumP2;
            $this-->$commNumTP = $commNumTP;
            $this-->$commNumCoef = $commNumCoef;
            $this-->$commNum = $commNum;
            $this-->$fhlsP = $fhlsP;
            $this-->$fhlsCoef = $fhlsCoef;
            $this-->$fhls = $fhls;
            $this-->$artP = $artP;
            $this-->$artCoef = $artCoef;
            $this-->$art = $art;
            $this-->$ueTelecom3 = $ueTelecom3;
            $this-->$ueTelecom3Resultats = $ueTelecom3Resultats;
            $this-->$cdceP = $cdceP ;
            $this-->$cdceTP = $cdceTP ;
            $this-->$cdceCoef = $cdceCoef;
            $this-->$cdce = $cdce;
            $this-->$dspTP = $dspTP ;
            $this-->$dspCoef = $dspCoef;
            $this-->$dsp = $dsp;
            $this-->$ueTraitementSignal3 = $ueTraitementSignal3;
            $this-->$ueTraitementSignal3Resultats = $ueTraitementSignal3Resultats;
            $this-->$rapportProjet = $rapportProjet ;
            $this-->$exposeProjet = $exposeProjet;
            $this-->$TPProjet = $TPProjet;
            $this-->$projetThematique = $projetThematique;
            $this-->$ueProjetThematique = $ueProjetThematique;
            $this-->$ueProjetThematiqueResultat = $ueProjetThematiqueResultat ;
            $this-->$anglais1CC = $anglais1CC ;
            $this-->$anglais1 = $anglais1 ;
            $this-->$anglaisRenforceCC = $anglaisRenforceCC;
            $this-->$anglaisRenforceCoef = $anglaisRenforceCoef;
            $this-->$anglaisRenforce = $anglaisRenforce ;
            $this-->$ouvertureLinguistiqueCC = $ouvertureLinguistiqueCC;
            $this-->$ouvertureLinguistiqueCoef = $ouvertureLinguistiqueCoef;
            $this-->$ouvertureLinguistique = $ouvertureLinguistique;
            $this-->$anglais2 = $anglais2;
            $this-->$option = $option;
            $this-->$ueLanguesVivante8 = $ueLanguesVivante8 ;
            $this-->$ueLanguesVivante8Resultat = $ueLanguesVivante8Resultat;
            $this-->$projetCreationEntrepriseCoef = $projetCreationEntrepriseCoef;
            $this-->$projetCreationEntrepriseCC = $projetCreationEntrepriseCC;
            $this-->$projetCreationEntreprise = $projetCreationEntreprise;
            $this-->$qseP = $qseP;
            $this-->$qseCoef = $qseCoef;
            $this-->$qse = $qse;
            $this-->$santeSecuriteTravailP = $santeSecuriteTravailP;
            $this-->$santeSecuriteTravailCoef = $santeSecuriteTravailCoef;
            $this-->$santeSecuriteTravail = $santeSecuriteTravail;
            $this-->$ueCultureEntreprise8 = $ueCultureEntreprise8 ;
            $this-->$ueCultureEntreprise8Resultat = $ueCultureEntreprise8Resultat;
            $this-->$s4Moyenne = $s4Moyenne ;
            $this-->$s4Resultat = $s4Resultat ;
            $this-->$commentaires = $commentaires;
            $this-->$dettesSpeT2 = $dettesSpeT2;
            $this-->$remarques = $remarques;
    }

}
?>