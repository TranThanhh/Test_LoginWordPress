<?php


use Step\Acceptance\Admin1 as ThanhTest;

class LI_05Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(ThanhTest $I, $scenario)
    {
        $I = new ThanhTest($scenario);
        $I->loginUsername(null);
        $I->wait(2);
        //$I->see('User does not exist.');
    }
}