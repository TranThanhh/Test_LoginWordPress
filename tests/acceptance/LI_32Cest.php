<?php


use Step\Acceptance\Admin as AdminTester;
use Step\Acceptance\Admin as FirstStep;

class LI_32Cest
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