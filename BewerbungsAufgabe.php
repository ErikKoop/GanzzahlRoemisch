<?php 

  include('./template/head.php');         // Headbereich
  include('./template/input.php');        // Eingabe

  if (isset($_POST["inputZahl"])) {       // Prüft, ob die Eingabezahl schon vorhanden ist!
  function berechnungRoemisch(){          // Funktion der Berechnung der Aufgabe
  
  $eingabeZahl = $_POST['inputZahl'];     // Eingabezahl als Variable 
  $roemisch = ["M","CM",  "D",  "CD",   "C","XC", "L", "VX", "X", "IX","V","IV","I"];        // Array für die Buchstaben
  $wert = ["1000","900", "500", "400", "100","90", "50","40", "10","9", "5","4", "1"];       // Array für die Werte der Buchstaben
  $ergebnis [] = "";                      // Array für das Ergebnis
 
  if($eingabeZahl > 3000 || $eingabeZahl < 1){                                               // Begrenzung der Zahleingabe
    echo "Bitte wählen Sie erneut eine Zahl zwischen 1 und 3000";                            //Ausgabe
  }  
  else{                                   // Hier läuft die Begrechnung los, falls die Begrenzung nicht zutrifft.
    echo $eingabeZahl;                    //Ausgabe
    echo " = ";                           //Ausgabe
  for ($i = 0; $eingabeZahl > 0; $i++){   // For-Schleife läuft, solange die Eingabezahl größer als 0 ist
  if ($eingabeZahl >= $wert[$i]){         // If-Abfrage Berechnung startet, falls die Eingabezahl größer/gleich als die erste Zahl vom Array $Wert ist. Falls sie kleiner ist, startet die Vorschleife einfach die zweite Runde und vergleicht es mit der zweiten Zahl vom Array $Wert ... etc.
  $eingabeZahl -= $wert[$i];              // Wert wird von der Eingabe substrahiert
  $ergebnis [$i] = $roemisch[$i];         // Array Ergebnis wird mit den Werten gefüllt
    echo $ergebnis[$i];                   // Gibt den Wert aus 
  $i -= 1;                                // Setzt $i zurück, um zu überprüfen, ob der immer noch größer ist als der selbe Wert. z.B. 200 ist >= als 100 und nach 200 - 100 trifft es danach nochmal zu.
  }
  }
}
 return $ergebnis;                        // Liegt außerhalb der Schleife und gibt somit das Endergebnis aus der Funktion zurück, damit wir außerhalb der Funktion auf diesen Wert zurückgreifen können!
}
$ergebnis = berechnungRoemisch();         // Wir greifen auf den Wert aus der Funktion zu und betätigen sie hiermit auch.
//var_dump ($ergebnis);                   // Habe ich ausgegraut, da ich Echo in der Forschleife verwende.
}

?>