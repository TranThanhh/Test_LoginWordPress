<?php


use Page\Login as LoginPage;

class LI_35Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/log-in/fr?redirect_to=https%3A%2F%2Fwordpress.com%2F');
        //$I->fillField('username', 'TranThanhh');
        $I->fillField("//*[@id=\"usernameOrEmail\"]", "tranthithanh200497@gmail.com");
        $I->click('Continue');

        $I->wait(2);
        $I->click(LoginPage::$changeEmailHyperLink);
        $I->wait(2);
    }
}