<?php
require_once "getJSON.php";

function getCardType($n)
{
    $content = getCardsJSON();
    for ($i = 0; $i < count($content->cards); $i++) {
        if($n==$content->cards[$i]->id)
    }
}
