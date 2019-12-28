<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Проверка языков');
$I->amOnPage('/');
$I->see('test YII2 new');

$I->amOnPage('/en');
$I->see('Русский', 'a');
$I->see('Welcome!');

$I->amOnPage('/ru');
$I->see('English', 'a');
$I->('Добро пожаловать!');