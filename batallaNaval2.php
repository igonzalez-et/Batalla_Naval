<?php

$vaixells = [ [[1,6]], [[2,2],[2,3]], [[3,6],[4,6],[5,6]], [[6,2],[6,3],[6,4],[6,5]] ];

echo "<table border : '2px'>";
$ancho = 11;
$altura = 11;

$alt = 0;
$anch = 0;

for($j=0; $j<$altura;$j++){
    echo "<tr>\n";
    for($i=0;$i<$ancho;$i++){
        if (($j==0) && ($i != 0)){
            echo "<td>$i</td>\n";
        }
        elseif (($j!=0) && ($i==0)){
            echo "<td>".chr($j+64)."</td>";
        }
        else{
            $tocado = false;
            foreach ($vaixells as $k) {   
                foreach ($k as list($a, $b)) {
                    $alt = $a;
                    $anch = $b;
                    
                    if (($j==$alt) && ($i == $anch)) {
                        $tocado = true;
                        echo "<td>X</td>";
                    }
                } 
            }
            if ($tocado == false){
                    echo "<td></td>";
                }
           
                      
        }
    }
    echo "</tr>";
}
echo "</table>";

?>