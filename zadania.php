
<?php


$plik='dane.txt';
if(file_exists( $plik)  ){
    $plik_licznik=fopen( $plikm, "r");
    $count=fgets( $plik_licznik, 100);
    fclose( $plik_licznik );
}else{
    $plik_licznik=fopen ($plik,"w");
    $count=0;
    fputs( $plik_licznik,$count );


}
   echo "odwiedzin:"  .$count++;


   $plik_licznik=fopen($plik,"w");
   fputs($plik_licznik,$count);
   fclose($plik_licznik);
   ?>

