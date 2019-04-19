<?php
namespace Step\Acceptance;

use Page\Login as LoginPage;

class Admin1 extends \AcceptanceTester
{

    public function LoginUsername($name)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernamefield,$name);
        $I->click(LoginPage::$continueButton);
        $I->wait(2);
    }

}