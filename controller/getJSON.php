<?php
function getTextJSON()
{
    $rute = "\..\model\\text.json";
    $content = json_decode(file_get_contents(__DIR__ . $rute));
    return $content;
}
function getUsersJSON()
{
    $rute = "\..\model\\users.json";
    $content = json_decode(file_get_contents(__DIR__ . $rute));
    return $content;
}

function getCardsJSON()
{
    $rute = "\..\model\\cards.json";
    $content = json_decode(file_get_contents(__DIR__ . $rute));
    return $content;
}
