<?php
require_once "getJSON.php";
function searchUser($user, $password)
{
    $content = getUsersJSON();
    for ($i = 0; $i < count($content->users); $i++) {
        $userAndPass = $content->users[$i]->docN == $user && $content->users[$i]->pass == $password;
        $justUser = $content->users[$i]->docN == $user && $content->users[$i]->pass != $password;
        if ($content->users[$i]->docN == $user) {
            if ($content->users[$i]->pass == $password) {
                return $i;
            } else {
                return -2;
            }
        }
    }
    return -1;
}
function userData($id)
{
    $content = getUsersJSON();
    $users = count($content->users);
    for ($i = 0; $i < $users; $i++) {
        if ($id == $content->users[$i]->id) {
            return array(
                "id" => $content->users[$i]->id,
                "name" => $content->users[$i]->n,
                "cards" => $content->users[$i]->cards
            );
        }
    }
}

function getAllUsers()
{
    $content = getUsersJSON();
    return array($content->users);
}

function showCardCode($code)
{
    return substr($code, 0, 4) . '-' . substr($code, 4, 4) . '-' . substr($code, 8, 4);
}