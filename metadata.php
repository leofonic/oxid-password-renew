<?php
$sMetadataVersion = '2.0';
$aModule = array(
    'id'          => 'password_renew',
    'title'       => 'Zunderweb force password renewal',
    'description' =>  array(
        'de'=>'Wenn der Kunde ein leeres Passwort besitzt, muss er beim Login ein neues erstellen.',
        'en'=>'If customer has an empty password, he is forced to assign a new one at login',
    ),
    'version'     => '1.0.0',
    'url'         => 'http://zunderweb.de',
    'email'       => 'info@zunderweb.de',
    'author'      => 'Zunderweb',
    'extend'      => array(
        \OxidEsales\Eshop\Application\Component\UserComponent::class => \zunderweb\password_renew\component\UserComponent::class,
    ),
    'controllers'       => array(
    ),
    'blocks' => array(
    ),
    'templates' => array(
    ),
    'settings' => array(
    ),
    'events'       => array(
    ),
);
