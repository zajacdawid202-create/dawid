<p>Wyszukiwaie daty</p>

<?php

   $wzorzec=
   '/([0123]?\d)+[-\.\/]+([01]?\d)+[-\.\/]+(\d{4})/';
   $tekst="Sucha Beskidzka, dn 04.10.2023";
   if (preg_match($wzorzec, $tekst))
    echo  "znaleziono date ";
  else 
    echo "nie znaleziono daty ";
  ?>