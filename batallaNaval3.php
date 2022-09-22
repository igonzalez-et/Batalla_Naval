<?php
$vaixells = [];

echo "<table border : '2px'>";
$ancho = 16;
$altura = 16;

$alt = 0;
$anch = 0;

for ($i=0; $i<4;$i++){
    $alt = rand(1,$altura);
    $anch = rand(1,$ancho);
    $vaixells = [[[$alt,$anch]]];
}

$alt = 0;
$anch = 0;
for ($i=0; $i<3;$i++){
    $alt = rand(1,$altura);
    $anch = rand(1,$ancho);
    $num = rand(1,2);
    if ($num == 1){
        $vaixells = [[[$alt,$anch], [$alt+1,$anch]]];
    }
    else {
        $vaixells = [[[$alt,$anch], [$alt,$anch+1]]];
    }
    
}

$alt = 0;
$anch = 0;
for ($i=0; $i<2;$i++){
    $alt = rand(1,$altura);
    $anch = rand(1,$ancho);
    $num = rand(1,2);
    if ($num == 1){
        $vaixells = [[[$alt,$anch], [$alt+1,$anch], [$alt+2,$anch]]];
    }
    else {
        $vaixells = [[[$alt,$anch], [$alt,$anch+1], [$alt,$anch+2]]];
    }
    
}

$alt = 0;
$anch = 0;
for ($i=0; $i<1;$i++){
    $alt = rand(1,$altura);
    $anch = rand(1,$ancho);
    $num = rand(1,2);
    if ($num == 1){
        $vaixells = [[[$alt,$anch], [$alt+1,$anch], [$alt+2,$anch], [$alt+3,$anch]]];
    }
    else {
        $vaixells = [[[$alt,$anch], [$alt,$anch+1], [$alt,$anch+2], [$alt,$anch+3]]];
    }
    
}




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
                foreach ($k as $a) {

                    if (($j==$a[0]) && ($i == $a[1])) {
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