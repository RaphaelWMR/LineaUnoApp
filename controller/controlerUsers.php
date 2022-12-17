<?php
require_once "getJSON.php";
function searchUser($user, $password)
{
    $content = getUsersJSON();
    for ($i = 0; $i < count($content); $i++) {
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
    for ($i = 0; $i < count($content); $i++) {
        if ($id == $content->users[$i]->id) {
            return array();
        }
    }
}

$content = getUsersJSON();
echo count($content->users);
echo $content->users[0]->docN;
