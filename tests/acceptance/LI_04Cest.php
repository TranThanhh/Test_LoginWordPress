<?php


use Step\Acceptance\Admin as ThanhTest;

class LI_04Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(ThanhTest $I, $scenario)
    {
        $I = new ThanhTest($scenario);
        $I->loginAsAdmin('tranthithanh200497@gmail.com',null);
        //$I->see('Don\'t forget to enter your password.');
    }
}