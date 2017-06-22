<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle, "%i",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle, "%i %i %li %li", $n, $m, $x, $y);
    if ($n==1){
        print $x."\n";
    }
    $components = array(array());
    for($a1 = 0; $a1 < $m; $a1++){
        fscanf($handle, "%i %i", $city_1, $city_2);
        foreach ($components as $key => $c){
            if (empty($c)){
                $components[$key][] = $city_1;
                $components[$key][] = $city_2;
                break;
            }
            else{
                if (in_array($city_1,$c) and !in_array($city_2,$c)) $components[$key][] = $city_2;
                elseif (in_array($city_2,$c) and !in_array($city_1,$c)) $components[$key][] = $city_1;
                else{

                }
            }
        }
    }
}

?>
