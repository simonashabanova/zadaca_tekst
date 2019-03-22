<?php 
$fh = fopen('procitaj_txt.txt', 'r');
$text = fread($fh, filesize('procitaj_txt.txt'));
fclose($fh);

$broj_na_karakteri = strlen($text);
$broj_na_zborovi = count(explode(' ', $text));
$broj_na_recenici = count(explode('. ', $text));

$mali = 0;
$sredni = 0;
$golemi =0;

$zborovi = explode(' ', $text);

// for($i=0; $i < count($zborovi); $i++) {

// }
foreach($zborovi as $zbor) {
    $d = strlen($zbor);
    if($d < 4){
        $mali ++;
    }else if($d >= 4 && $d <= 7){
        $sredni++;
    }else {
        $golemi++;
    }
}

echo "<p>Broj na karakteri: $broj_na_karakteri</p>";
echo "<p>Broj na zborovi: $broj_na_zborovi</p>";
echo "<p>Broj na recenici: $broj_na_recenici</p>";
echo "<p>Zborovi < 4: $mali</p>";
echo "<p>Zborovi >= 4 && <= 7: $sredni</p>";
echo "<p>Zborovi > 7: $golemi</p>";

?>