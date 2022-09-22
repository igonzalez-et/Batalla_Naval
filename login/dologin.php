<?php


$listaUsers = [["iker","Superlocal123"],["xavi","SuperlocalXavi"],["raul","SuperlocalRaul"]];

foreach ($listaUsers as $k) {   
    foreach ($k as list($a, $b)) {
        $user = $a;
        $password = $b;
        if (($_POST["user"]==$user) && ($_POST["pswd"] == $password)) {
            echo "Login Correcto";
        }
    } 
}


?>