<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Check languages');

$I->amOnPage('/');
$I->see('Viseo School');

$I->amOnPage('/en');
$I->see('Welcome!');
$I->see('Русский', 'a');

$I->amOnPage('/ru');
$I->see('Добро пожаловать!');
$I->see('English', 'a');
