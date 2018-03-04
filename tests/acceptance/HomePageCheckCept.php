<?php 
#$I = new AcceptanceTester($scenario);
#$I->wantTo('check if the home page is availiable');
#$I->amOnPage('/');
#$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
#$I->seeElement('#horus-querytext');
#$I->see('Suchen');
#$I->click('//*[@id="js_redirect_notification"]/div/span/a');
#$I->amOnPage('/trivago.com');
#$I->seeElement('#horus-querytext');
#$I->see('Search');

$I = new AcceptanceTester($scenario);
$I->wantTo('check if the home page is availiable');
$I->amOnPage('/');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->seeElement('//*[@id="horus-querytext"]');
$I->see('Suchen');
$I->seeElement('//*[@id="header-hero-logo-id"]');
$I->see('EUR','#select-currency');
$I->see('Mein Profil', '.flex-wrapper');
$I->click('Mein Profil','.flex-wrapper');
$I->see('Einloggen');
$I->see('Registrieren');
    

