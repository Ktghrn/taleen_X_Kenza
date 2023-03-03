<?php

  // 1. Soit un tableau T = [10, 20, 40, 13, -2].
  // Ecrire un programme qui cherche le maximum du tableau T et détermine sa position dans le tableau.

  $T = [10, 20, 40, 13, -2];

  $max_value = $T[0];
  $max_index = 0;

  for ($i = 1; $i < count($T); $i+=1) {
    if ($T[$i] > $max_value) {
      $max_value = $T[$i];
      $max_index = $i;
    }
  }

  echo "La valeur max de T est $max_value; son index est $max_index .<br>";

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  // 2. Soit un tableau T1 = [19, 12, 18, 10, 12].
  // Écrire un programme qui permet de trier le tableau T1 dans un nouveau tableau T2 par ordre décroissant.

  $T1 = [19, 12, 18, 10, 12];
  $T2 = $T1; // copie du tableau T1

  rsort($T2); // tri du tableau T2 par ordre décroissant avec rsort()

  echo "Le tableau T1 se présente comme tel: [";
  foreach ($T1 as $value) { //utilisation de 'foreach' pour inspecter les éléments un à un du tableau
      echo "$value,";
  }
  echo "]<br>";

  echo "Voici le tableau T1 renvoyé dans le tableau T2 trié par ordre décroissant : [";
  foreach ($T2 as $value) { //utilisation de 'foreach' pour inspecter les éléments un à un du tableau
      echo "$value,";
  }
  echo "] <br>";

  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  // 3. Soit un tableau T = [10, 20, 13, 0, -2].
  // Ecrire un programme qui calcule le nombre d'élément impair de ce tableau.
  // Petit Warning, ici le tableau 'T' portera le nom de 'Ta'.

  $Ta = [10, 20, 13, 0, -2];
  $count = 0;

  foreach ($T as $value) {
    if ($value % 2 !== 0) { // utilisation de modulo:  si le reste de la division de la valeur par 2 est différent de 0, alors la valeur est impaire
      $count++; // incrémentation du compteur à +1 : soit i++ = i+=1
    }
  }
  echo "Le nombre d'éléments impairs est de $count. <br>";

  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



  // 4. Soit les tableaux Tx= [10, 16, 0, 4] et Ty = [-40, 16, 17, 0].
  // Écrire un programme pour calculer l'intersection des deux tableaux Tx et Ty dans un nouveau tableau Tz.
  // Petit Warning, ici le tableau 'T1' portera le nom de 'Tx'. Il en sera de même pour le tableau 'T2' qui portera le nom de 'Ty' et le tableau 'T3' qui portera le nom de 'Tz'.

  $Tx = [10, 16, 0, 4];
  $Ty = [-40, 16, 17, 0];
  $Tz = [];

  foreach ($Tx as $x) { // on parcourt le tableau Tx
    foreach ($Ty as $y) { // on parcourt le tableau Ty
      if ($x === $y) { // si la valeur de Tx est égale à la valeur de Ty
        $Tz[] = $x; // on ajoute la valeur du point de rencontre dans le tableau Tz
      }
    }
  }

  echo "L'intersection des tableaux Tx et Ty est : [";
  foreach ($Tz as $z) {
    echo "$z,";
  }
  echo "]";
  echo "<br>On remarque ici que le programme a détecté que '16' était présent dans les deux tableaux et l'a donc affiché comme point d'intersection.<br> On observe également que les courbes se rejoignent sur le '0'. <br>";

?>
