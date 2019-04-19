<?php

use Step\Acceptance\Admin;
use Step\Acceptance\Admin as ThanhTest;
use Step\Acceptance\Admin as AdminTester;

class LI_01Cest
{
    public function _before(AcceptanceTester $I)
{
}

    // tests
    public function tryToTest(ThanhTest $I, $scenario)
    {
        $I = new ThanhTest($scenario);
        $I->loginAsAdmin('tranthithanh200497@gmail.com','conyeugiadinh136204');
        $I->see('Welcome!');
    }
}