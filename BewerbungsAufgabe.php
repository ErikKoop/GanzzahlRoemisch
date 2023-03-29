<?php 

  include('./template/head.php');                   // Headbereich
  include('./template/input.php');                  // Eingabe

  if (isset($_POST["inputZahl"])) {  
    $inputZahl = (int)$_POST['inputZahl'];          // Prüft, ob die Eingabezahl schon vorhanden ist!
  function berechnungRoemisch($inputZahl){          // Funktion der Berechnung der Aufgabe
  $roemisch = ["M"=>1000,"CM"=>900,"D"=>500,"CD"=>400,"C"=>100,"XC"=>90,"L"=>50,"VX"=>40,"X"=>10,"IX"=>9,"V"=>5,"IV"=>4,"I"=>1]; //Array assoziativ
  $ergebnis = "";                      
  if ($inputZahl < 1 || $inputZahl > 3000){         //Begrenzung Eingabe
    echo "Falsche Eingabe! Wählen Sie ein Zahl zwischen 1 und 3000!";
    exit();                                         //Bricht die Funktion ab
  }
    else{                       
      foreach($roemisch as $roemischneu => $wert){  //Aus dem Assoziativen Array werden der Schlüssel sowie der Schlüsselwert zugewiesen
      while($inputZahl >= $wert){                   //solange die Eingabezahl größer/gleich des Wertes ist.
      $inputZahl -= $wert;                          //Aus der Eingabezahl wird der Wert subtrahiert
      $ergebnis .=$roemischneu;                     //Ergebnis zugewiesen
      }
    }
  return $ergebnis;                                 //Gibt den Wert zurück, damit wir außerhalb der Funktion darauf zugreifen können.
  }
}
  echo  $inputZahl . ' = ' . berechnungRoemisch($inputZahl); //Ausgebe des Ergebnisses, sowie start der Funktion.
} 
?>