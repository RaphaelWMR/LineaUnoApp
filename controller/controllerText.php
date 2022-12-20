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

function getPay($lang)
{
    $content = getTextJSON();
    return array(
        "amount"            => $content->payForm->amount->$lang,
        "payInfo"           => $content->payForm->payInfo->$lang,
        "cardNumber"        => $content->payForm->cardNumber->$lang,
        "cardholder"        => $content->payForm->cardholder->$lang,
        "expirationDate"    => $content->payForm->expirationDate->$lang,
        "confirmRecharge"   => $content->payForm->confirmRecharge->$lang
    );
}
function getSuccess($lang)
{
    $content = getTextJSON();
    return array(
        "confirmRecharge"   => $content->succesPay->confirmRecharge->$lang,
        "totalPaid"         => $content->succesPay->totalPaid->$lang,
        "transactionDate"   => $content->succesPay->transactionDate->$lang,
        "transactionTime"   => $content->succesPay->transactionTime->$lang,
        "receptorCard"      => $content->succesPay->receptorCard->$lang,
        "receptor"          => $content->succesPay->receptor->$lang,
        "rechargeCode"      => $content->succesPay->rechargeCode->$lang,
        "successfulPayment" => $content->succesPay->successfulPayment->$lang,
        "backToHome"        => $content->succesPay->backToHome->$lang
    );
}
function getSignUp($lang)
{
    $content = getTextJSON();
    return array(
        "signUp"   => $content->signUp->signUp->$lang,
        "step"   => $content->signUp->step->$lang,
        "personalData"   => $content->signUp->personalData->$lang,
        "idDoc"   => $content->signUp->idDoc->$lang,
        "idNumber"   => $content->signUp->idNumber->$lang,
        "firstSurname"   => $content->signUp->firstSurname->$lang,
        "secondSurname"   => $content->signUp->secondSurname->$lang,
        "names"   => $content->signUp->names->$lang,
        "birth"   => $content->signUp->birth->$lang,
        "contactInfo"   => $content->signUp->contactInfo->$lang,
        "phone"   => $content->signUp->phone->$lang,
        "email"   => $content->signUp->email->$lang,
        "password"   => $content->signUp->password->$lang,
        "typePassword"   => $content->signUp->typePassword->$lang,
        "iveRead"   => $content->signUp->iveRead->$lang,
        "confirmRegistration"   => $content->signUp->confirmRegistration->$lang,
        "policy"   => $content->signUp->policy->$lang,
        "create"   => $content->signUp->create->$lang
    );
}
function getEndSignUp($lang)
{
    $content = getTextJSON();
    return array(
        "registrationCompleted"   => $content->endSignUp->registrationCompleted->$lang,
        "paragraph"               => $content->endSignUp->paragraph->$lang,
        "login"                   => $content->endSignUp->login->$lang
    );
}
