<?php
require_once "getJSON.php";
function getLogin($lang)
{
    $content = getTextJSON();
    return array(
        "pageTittleLabel"           =>  $content->login->pageTittleLabel->$lang,
        "tittleLabel"               =>  $content->login->tittleLabel->$lang,
        "loginLabel"                =>  $content->login->loginLabel->$lang,
        "idLabel"                   =>  $content->login->idLabel->$lang,
        "idInput"                   =>  $content->login->idInput->$lang,
        "passLabel"                 =>  $content->login->passLabel->$lang,
        "loginButton"               =>  $content->login->loginButton->$lang,
        "forgotPasswordLabel"       =>  $content->login->forgotPasswordLabel->$lang,
        "donthaveaccountyetLabel"   =>  $content->login->donthaveaccountyetLabel->$lang,
        "singupLink"                =>  $content->login->singupLink->$lang,
        "termsLabel"                =>  $content->login->termsLabel->$lang,
        "policyLabel"               =>  $content->login->policyLabel->$lang
    );
}
