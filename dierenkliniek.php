<?php

class Veteranarian
{
    public $animal;
    public $symptom;
    public $diagnosis;
    public $treatment;
}

function diagnosticize($animal, $symptom, $diagnosis, $treatment)
{
    echo "Mijn dier is een: ".$_POST['animal']."<br> De symptomen zijn: ".$_POST['symptoms']."<br>";
    if ($animal = "kat" && $symptom = "niezen") {
        $diagnosis = "kattenverkoudheid";
        echo "Diagnose:".$diagnosis."<br>";
    }
    if ($animal = "kat" && $symptom = "eetlust") {
        $diagnosis = "wormen";
        echo "Diagnose:".$diagnosis."<br>";
    }
    if ($animal = "kat" && $symptom = "luiheid") {
        $diagnosis = "Wat wil je, het is een kat.";
        echo "Diagnose:".$diagnosis."<br>";
    }
    if ($animal = "hond" && $symptom = "niezen") {
        $diagnosis = "hondenverkoudheid";
        echo "Diagnose:".$diagnosis."<br>";
    }
    if ($animal = "hond" && $symptom = "eetlust") {
        $diagnosis = "wormen";
        echo "Diagnose:".$diagnosis."<br>";
    }
    if ($animal = "hond" && $symptom = "luiheid") {
        $diagnosis = "Mogelijk bent u een erg saaie baas.";
        echo "Diagnose:".$diagnosis."<br>";
    }
    if ($animal = "goudvis" && $symptom = "niezen") {
        $diagnosis = "U heeft waanideeen";
        echo "Diagnose:".$diagnosis."<br>";
    }
    if ($animal = "goudvis" && $symptom = "eetlust") {
        $diagnosis = "goudvisdolheid";
        echo "Diagnose:".$diagnosis."<br>";
    }
    if ($animal = "goudvis" && $symptom = "luiheid") {
        $diagnosis = "goudvismoeheid";
        echo "Diagnose:".$diagnosis."<br>";
    }
    function treatment($diagnosis, $treatment)
    {
        if ($diagnosis = "kattenverkoudheid" or "hondenverkoudheid") {
            $treatment = "Geef uw ".$animal." dagelijks een dosis Otrivin.<br>";
            echo $treatment;
        }
        if ($diagnosis = "wormen" && $animal = "kat") {
            $treatment = "Geef uw ".$animal." dagelijks een dosis anti-wormen kattenvoer.<br>";
            echo $treatment;
        }
        if ($diagnosis = "wormen" && $animal = "hond") {
            $treatment = "Geef uw ".$animal." dagelijks een dosis anti-wormen hondenvoer.<br>";
            echo $treatment;
        }
        if ($diagnosis = "Wat wil je, het is een kat") {
            $treatment = "Deal with it.<br>";
            echo $treatment;
        }
        if ($diagnosis = "Mogelijk bent u een erg saaie baas.") {
            $treatment = "Get a life.<br>";
            echo $treatment;
        }
        if ($diagnosis = "U heeft waanideeen") {
            $treatment = "Zoek een goede psychiater en het verder zelf uit.<br>";
            echo $treatment;
        }
        if ($diagnosis = "goudvisdolheid") {
            $treatment = "Zoek dekking!";
            echo $treatment;
        }
        if ($diagnosis = "goudvismoeheid") {
            $treatment = "Meng stiekem wat cocaine door het".$animal."voer";
            echo $treatment;
        }
    }
}

diagnosticize($_POST['animal'], $_POST['symptoms'], $_GET['diagnosis'], $_GET['treatment']);
?>
