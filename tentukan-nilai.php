<?php
function tentukan_nilai($number)
{
    //  kode disini
    if($number>= 85 and  $number <100){
        return "Sangat Baik"
    }elseif($number >= 70 and $number <85){
        return "Baik"
    }elseif($number>=60 and $number <70){
        return "Cukup"
    }else{
        return "Kurang"
    }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>