<?php
// Fonction pour calculer la moyenne de trois notes
function calculerMoyenne($note1, $note2, $note3) {
    // Calcul de la moyenne
    $moyenne = ($note1 + $note2 + $note3) / 3;
    // Retourne la valeur calculée
    return $moyenne;
}

// Fonction pour afficher le résultat avec un message personnalisé
function afficherResultat($nom, $moyenne) {
    // Vérification si la moyenne est suffisante
    if ($moyenne >= 10) {
        echo $nom . " a réussi avec une moyenne de " . number_format($moyenne, 2) . ". Bravo ! Moyenne suffisante\n";
    } else {
        echo $nom . " n'a pas réussi avec une moyenne de " . number_format($moyenne, 2) . ". Il faut travailler plus !, moyenne insuffisante\n";
    }
}

// Exemples d'utilisation des fonctions
$note1 = 20;
$note2 = 8;
$note3 = 15;

// Calcul de la moyenne des trois notes
$moyenneAlice = calculerMoyenne($note1, $note2, $note3);

// Affichage du résultat pour Alice
afficherResultat("Alice", $moyenneAlice);
