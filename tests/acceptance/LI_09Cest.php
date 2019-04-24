<?php


use Step\Acceptance\Admin1 as SecondStep;

class LI_09Cest
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
     * Verify user not able to login with Username or Email not register
     */
    public function loginUnsucceed(SecondStep $I, $scenario)
    {
        $I = new SecondStep($scenario);
        $I->loginUsername('gaconbietbay');
        $I->waitForText('User does not exist.',2);
    }
}