<p> Wyszukiwanie pliku z rozszerzeniem gif</p>

<?php
  $wzorzec ='/\S*.gif/i';
  // i - oznacza ignorowanie wielkośći liter 
  $tekst="w pliku obrazek.gif jest ikona";
  if(preg_match ($wzorzec ,$tekst ) )
    echo "znaleziono obrazek ";
else
    echo " nie znaleziono obrazku ";
?>