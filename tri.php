<?php

unset($argv[0]);
$tableau = array_values($argv);

foreach ($tableau as $k => $v) {
    $tableau[$k] = intval($v);
}

function triABulles($tableau_a_trier)
{
    $tri = false;
    while(!$tri)
    {
        $tri = true;
        for($i = 0; $i < count($tableau_a_trier) - 1; $i++)
        {
            if($tableau_a_trier[$i] > $tableau_a_trier[$i + 1])
            {
                $temp = $tableau_a_trier[$i]; // on stocke temporairement la valeur
                $tableau_a_trier[$i] = $tableau_a_trier[$i + 1]; //on recule d'un cran la valeur au rang $i + 1
                $tableau_a_trier[$i + 1] = $temp; //on avance d'un cran la valeur au rang $i grace à $temp
                $tri = false; // le tableau n'est pas encore trié...
            }
        }
    }
    return $tableau_a_trier;
}

var_dump(triABulles($tableau));