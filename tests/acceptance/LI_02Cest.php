<?php
use Step\Acceptance\Admin as ThanhTest;

class LI_02Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(ThanhTest $I, $scenario)
    {
        $I = new ThanhTest($scenario);
        $I->loginAsAdmin('tranthithanh200497@gmail.com', 'abc');
        //$I->see('');
    }
}