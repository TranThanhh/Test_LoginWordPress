<?php
namespace Step\Acceptance;

use Page\Login as LoginPage;

class Admin2 extends \AcceptanceTester
{
    public function LoginPassword($password)
    {
        $I = $this;
        $I->fillField(LoginPage::$passwordField,$password);
        $I->click(LoginPage::$loginButton);
        $I->waitForText('Don\'t forget to enter your password.',3);
    }
}