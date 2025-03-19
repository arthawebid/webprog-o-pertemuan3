<?php
    //Array Index
    $teman = array("wahyudi","Santhi","Yeyen","Susanti","Jarjit");

    $teman[0] = "Putu";
    $teman[1] = "Wayan";
    $teman[2] = "Made";
    $teman[3] = "Komang";
    $teman[4] = "Ketut";
    $teman[5] = "Wayan Balik";

    //membaca data Array
    echo "<h3>Daftar Teman</h3>";
    echo "<ol>";
    for($i=0;$i<count($teman);$i++){
        echo "<li>". $teman[$i] . "</li>";
    }
    echo "</ol>";

    //menggunakan perulangan foreach
    echo "<h3>Daftar Teman - menggunakan foreach</h3>";
    echo "<ol>";
    foreach($teman as $nval){
        echo "<li>".$nval."</li>";
    }
    echo "</ol>";

    echo "<h3>Daftar teman - menggunakan while</h3>";
    echo "<ol>";
    $i=0;
    while($i<count($teman)){
        echo "<li>".$teman[$i]."</li>";
        $i++;
    }    
    echo "</ol>";
