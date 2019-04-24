<?php


use Step\Acceptance\Admin1 as SecondStep;

class LI_10Cest
{
    /**
     * @param AcceptanceTester $I
     */
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * @param SecondStep $I
     * @param $scenario
     * Verify user not able to login with Email address null, click multitime on Continue button show same error
     */
    public function loginUnsucceed(SecondStep $I, $scenario)
    {
        $I = new SecondStep($scenario);
        $I->loginUsername(null);
        $I->see('Please enter a username or email address.');
        $I->loginUsername(null);
        $I->see('Please enter a username or email address.');
        $I->loginUsername(null);
        $I->see('Please enter a username or email address.');
    }
}