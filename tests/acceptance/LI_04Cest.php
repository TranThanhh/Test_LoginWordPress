<?php


use Step\Acceptance\Admin as FirstStep;

class LI_04Cest
{
    /**
     * @param AcceptanceTester $I
     */
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * @param FirstStep $I
     * @param $scenario
     * Verify user not able to login with Email address valid, Password null
     */
    public function loginUnsucceed(FirstStep $I, $scenario)
    {
        $I = new FirstStep($scenario);
        $I->loginAsAdmin('tranthithanh200497@gmail.com',null);
        $I->see('Don\'t forget to enter your password.');
    }
}