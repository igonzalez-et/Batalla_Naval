<?php

$submarino = [[2,2],[2,3]];

echo "<table border : '2px'>";
$ancho = 7;
$altura = 7;

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
            if (($j==$submarino[0][0]) && ($i == $submarino[0][1]) || ($j==$submarino[1][0]) && ($i == $submarino[1][1])) {
                echo "<td>X</td>";
            }
            else {
                echo "<td> </td>";
            }
        }
    }
    echo "</tr>";
}
echo "</table>";
?>