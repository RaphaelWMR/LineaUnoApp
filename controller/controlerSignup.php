<?php
function getPhoneCodes(){
    $array = [];
    $rute = "\..\model\phoneCode.json";
    $content = json_decode(file_get_contents(__DIR__.$rute));
    foreach ($content as $country){
        $array[$country->es]=$country->code;
    }
    return $array;
}
/*
$arr = getPhoneCodes();
foreach ($arr as $key=>$value){
    echo $key." ".$value;
}*/
?>