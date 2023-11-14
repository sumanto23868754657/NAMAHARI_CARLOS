<?php
function  hari_ini(){
    $hari = date ("D");
    switch($hari){
        case 'sun';
        $hari_ini = "hari minggu";
        break;

        case 'Mon';
        $hari_ini = "hari senin";
        break;

        case 'Tue';
        $hari_ini = "hari selasa";
        break;

        case 'Wed';
        $hari_ini = "hari rabu";
        break;

        case 'Thu';
        $hari_ini = "hari kamis";
        break;

        case 'fri';
        $hari_ini = "hari jumat";
        break;    

        case 'Sat';
        $hari_ini = "hari sabtu";
        break;

        default: 
        $hari_ini = "tidak diketahui";
        break;
    }

    return "<b>" . $hari_ini . "</b>";

}

echo  "hari ini adalah" . hari_ini();
?>
