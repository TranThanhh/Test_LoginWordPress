<?php


use Step\Acceptance\Admin1 as ThanhTest;

class LI_03Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(ThanhTest $I, $scenario)
    {
        $I = new ThanhTest($scenario);
        $I->loginUsername('tranthithanhgmail.com');
        $I->wait(2);
        $I->see('User does not exist.');
    }
}