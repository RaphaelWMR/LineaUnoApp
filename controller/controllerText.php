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
function getDash($lang)
{
    $content = getTextJSON();
    return array(
        "cardLabel"             => $content->dash->card->$lang,
        "adultCardLabel"        => $content->dash->adultCard->$lang,
        "halfFareLabel"         => $content->dash->halfFare->$lang,
        "balanceLabel"          => $content->dash->balance->$lang,
        "hideBalanceLabel"      => $content->dash->hideBalance->$lang,
        "checkBalanceLabel"     => $content->dash->checkBalance->$lang,
        "rechargeCardLabel"     => $content->dash->rechargeCard->$lang,
        "amountLabel"           => $content->dash->amount->$lang,
        "payLabel"              => $content->dash->pay->$lang,
        "reloadOtherCardLabel"  => $content->dash->reloadOtherCard->$lang,
        "receptorCardLabel"     => $content->dash->receptorCard->$lang,
        "cardCodeLabel"         => $content->dash->cardCode->$lang,
        "searchLabel"           => $content->dash->search->$lang,
        "receptorLabel"         => $content->dash->receptor->$lang,
        "cancelLabel"           => $content->dash->cancel->$lang,
        "logoutLabel"           => $content->dash->logout->$lang

    );
}

function showCardType($n)
{
    if ($n == 1) {
        return "adultCardLabel";
    } else {
        return "halfFareLabel";
    }
}