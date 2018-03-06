<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('check if the home page is availiable');
$I->amOnPage('/');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->seeElement('//*[@id="horus-querytext"]'); //From my experience with FitNessse here and in similar cases I'd write it like //div[@id="horus-querytext], but here it gives a bad result
$I->see('Suchen');
$I->seeElement('//*[@id="header-hero-logo-id"]');  


//Actually, I'd add also checking for all controls and I'd write it like this, but:
//1.It feels like page in PHPBrowser looks different to chrome. I can't check with chrome driver, because I have some issues with it.
//2.Currency and "My profile" load later, than all other things on the page. BTW, why? 

//sleep(7); // Let's wait for these elements. I use "sleep" because I use PHPBrowser, which doesn't provide function wait()
//$I->seeElement('//*[@id="select-currency"]'); 
//$I->see('//*[@id="js_navigation"]/div/div[2]/button');
//$I->click('//*[@id="js_navigation"]/div/div[2]/button');
//$I->see('//*[@id="oeWindow_treloms_79"]/div[2]/div/ul/li[1]'); //Einloggen
//$I->see('//*[@id="oeWindow_treloms_79"]/div[2]/div/ul/li[2]');// Registrieren
    

