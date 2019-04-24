<?php


use Step\Acceptance\Admin as FirstStep;

class LI_07Cest
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
     *Verify user not able to login with Email address valid, Password has all space
     */
    public function loginUnsucceed(FirstStep $I, $scenario)
    {
        $I = new FirstStep($scenario);
        $I->loginAsAdmin('tranthithanh200497@gmail.com','        ');
        $I->see('<strong>ERROR</strong>: The password field is empty.');
    }
}