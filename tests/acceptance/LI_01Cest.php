<?php

use Step\Acceptance\Admin;
use Step\Acceptance\Admin as FirstStep;
use Step\Acceptance\Admin as AdminTester;

class LI_01Cest
{
    /**
     * @param AcceptanceTester $I
     */
    public function _before(AcceptanceTester $I)
        {

        }

    /**
     * @param AdminTester $I
     * @param $scenario
     * Check login succeed with Email address valid, Password valid
     */
    public function loginSuccess(FirstStep $I, $scenario)
    {
        $I = new FirstStep($scenario);
        $I->loginAsAdmin('tranthithanh200497@gmail.com','conyeugiadinh136204');
        $I->see('Welcome to Reader');
    }
}