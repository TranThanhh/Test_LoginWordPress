<?php


use Step\Acceptance\Admin1 as FirstStep;

class LI_05Cest
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
     * Verify user not able to login with Email address is null
     */
    public function loginUnsucceed(FirstStep $I, $scenario)
    {
        $I = new FirstStep($scenario);
        $I->loginUsername(null);
        $I->waitForText('Please enter a username or email address.',3);
    }
}