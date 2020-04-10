<?php
phpinfo(INFO_VARIABLES );
function somme(...$args) {
    $somme = 0;
//    for($i=0;$i<func_num_args();$i++) {
//        $somme += func_get_arg($i);
//    }
    var_dump($args);
    foreach ( $args as $item) {
        $somme+=$item;
    }
    echo $somme;
    return $somme;
}
$som = 0; $prod = 0;
echo ("som = $som et prod = $prod<br>");
function f($x,$y,&$som,&$prod) {
    $som = $x+$y;
    $prod = $x*$y;
    echo ("som = $som et prod = $prod<br>");
}
f(3,4,$som,$prod);
echo ("som = $som et prod = $prod<br>");

//somme(10,12,31,47);