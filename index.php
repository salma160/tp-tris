<?php
require_once "tris.php";

$tab = [5 , 3 , 8 , 1 , 4];
 $trie = triBulles ( $tab ) ;
 $time=triBullesChrono($tab);
 $compa=triBullesCompt($tab);
 echo "voici le tableau avant:".implode(',',$tab)."<br>";
 echo "le voici apres:".implode (', ', $trie )." avec $compa comparaisons et $time ms" ;
 
 echo"--------------------------------";

 $tailles = [100 , 500 , 1000 , 2000 , 5000 , 10000];

 foreach ( $tailles as $n ) {
 $tab = range ( $n , 1) ; // [n, n -1 , ... , 2 , 1] = cas defav
 $nbComp = triBullesCompt ( $tab ) ;
 $temps = triBullesChrono ( $tab ) ;
 echo "n = $n : $nbComp comparaisons , $temps ms <br>";
 }

?>