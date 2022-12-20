<?php
function getPhoneCodes($lang)
{
    $array = [];
    $rute = "\..\model\phoneCode.json";
    $content = json_decode(file_get_contents(__DIR__ . $rute));
    for ($i = 0; $i < count($content->codes); $i++) {
        $array[$i] = array(
            "country" => $content->codes[$i]->$lang,
            "code"    => $content->codes[$i]->code
        );
    }
    return $array;
}
/*
$arr = getPhoneCodes('en');
for ($j = 0; $j < count($arr); $j++) {
    echo $arr[$j]['country'] . ' ' . $arr[$j]['code'] . '<br>';
}
*/