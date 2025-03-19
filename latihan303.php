<?php
    //array associative
    $nilai = array("web1"=>"80", "web2"=>95,"algo"=>75);

    echo "Menampilkan data array associative";
    echo "<ul>";
    foreach($nilai as $nlabel => $nval){
        echo "<li>". $nlabel . ": " . $nval . "</li>";
    }
    echo "</ul>";

    $nilaimhs = array(
        array("Wahyudi","22334455","Algo","84"),
        array("Warsito","11221166","Web1","78"),
    );


    echo json_encode($nilaimhs);
    //echo $nilaimhs[1][2];
