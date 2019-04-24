<?php
use Step\Acceptance\Admin as FirstStep;

class LI_02Cest
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
     * Check login unsucceed with Email address valid, Password invalid
     */
    public function loginUnsucceed(FirstStep $I, $scenario)
    {
        $I = new FirstStep($scenario);
        $I->loginAsAdmin('tranthithanh200497@gmail.com', 'abc');
        $I->see('Oops, that\'s not the right password. Please try again!');
    }
}