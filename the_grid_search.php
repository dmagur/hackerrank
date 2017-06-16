<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d",$R,$C);
    $G = array();
    for($G_i = 0; $G_i < $R; $G_i++){
       fscanf($handle,"%s",$G[]);
    }
    fscanf($handle,"%d %d",$r,$c);
    $P = array();
    for($P_i = 0; $P_i < $r; $P_i++){
       fscanf($handle,"%s",$P[]);
    }
    $res = "NO";
    $i = 0;
    while($res == "NO" and $i<$R and isset($G[$i])){
        while(isset($G[$i]) and strpos($G[$i],$P[0])===false){
            $i++;
        }
        
        if ($i<=$R-$r){
            $start = strpos($G[$i],$P[0]);
            $res = "YES";
            $j = 1;
            while ($j<$r){                
                $start2 = strpos($G[$i+$j],$P[$j]);
                while ($start2 !== $start){                    
                    /*
                    if ($i==2){
                        var_dump($i);
                        var_dump($start);
                        var_dump($start2);
                        print "----\n";
                    }
                    */
                    $res = "NO";
                    if ($start2===false)
                        break;
                    else{
                        $G[$i+$j][$start2] = 'x';
                        $start2 = strpos($G[$i+$j],$P[$j]);
                    }
                }
                if ($start2==$start){
                    $res = "YES";
                    break;
                }
                $j++;
            }                        
            $G[$i][$start] = 'x';
            /*
            if ($i==2){
                var_dump($i);
                var_dump($start);
                print "----\n";
            }
            */
        }        
        else break;
    }
    
    print $res."\n";
}

?>
