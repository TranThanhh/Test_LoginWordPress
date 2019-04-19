<?php


use Step\Acceptance\Admin1 as ThanhTest;

class LI_32Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(ThanhTest $I, $scenario)
    {
        $I = new ThanhTest($scenario);
        $I->loginUsername('admin');
        $I->wait(2);
        //$I->see('User does not exist.');
    }
}