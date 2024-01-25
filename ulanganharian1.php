<?php

function PesertaDidik($noabsen, $kondisiTerminasi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6, $kt7){
    for($noabsen; $noabsen <= $kondisiTerminasi; $noabsen++){
        if($noabsen == $kt1 || $noabsen == $kt2 || $noabsen == $kt6){
            echo "Peserta Didik no Absen $noabsen tidak hadir <br/>";
        } else if($noabsen == $kt3 || $noabsen == $kt4){
            echo "Peserta Didik no Absen $noabsen terlambat <br/>";
        } else if($noabsen == $kt5 || $noabsen == $kt7){
            echo "Peserta Didik no Absen $noabsen sakit <br/>";
        } else {
            echo "Peserta Didik no Absen $noabsen hadir <br/>";
        }
    }
}


echo PesertaDidik(1, 15, 2, 3, 6, 8, 9, 10, 13);

?>