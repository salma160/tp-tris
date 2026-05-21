<?php

function triBulles($tab){
    $n=count($tab);
    $compt=0;
    

    do{
        $compt=0;
        for($j=0;$j<$n-1;$j++){
            if( $tab[$j]>$tab[$j+1]){
                $temp=$tab[$j];
                $tab[$j]=$tab[$j+1];
                $tab[$j+1]=$temp;
                $compt++;
                
            }
        }

    }while($compt!=0);
    return $tab;
}

function triBullesCompt($tab){
    $n=count($tab);
    $comparaison=0;
    

    do{
        $compt=0;
        for($j=0;$j<$n-1;$j++){
            if( $tab[$j]>$tab[$j+1]){
                $comparaison++;
                $temp=$tab[$j];
                $tab[$j]=$tab[$j+1];
                $tab[$j+1]=$temp;
                $compt++;
                
            }
        }

    }while($compt!=0);
    return $comparaison;
}



 function triBullesChrono ( $tab ) {
    $debut = microtime ( true ) ;
    triBulles ( $tab ) ;
    $fin = microtime ( true ) ;
    return round (( $fin - $debut ) * 1000 , 2) ; // en ms
 }


?>