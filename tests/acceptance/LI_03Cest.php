<?php


use Step\Acceptance\Admin1 as SecondStep;

class LI_03Cest
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
     * Verify user not able to login with Email address Invalid
     */
    public function loginUnsucceed(SecondStep $I, $scenario)
    {
        $I = new SecondStep($scenario);
        $I->loginUsername('tranthithanhgmail.com');
        $I->waitForText('User does not exist.',2);
    }
}