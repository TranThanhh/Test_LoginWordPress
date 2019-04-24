<?php


use Step\Acceptance\Admin as FirstStep;

class LI_08Cest
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
     *Verify user not able to login with Email address has all space
     */
    public function loginUnsucceed(FirstStep $I, $scenario)
    {
        $I = new FirstStep($scenario);
        $I->loginAsAdmin('            ','            ');
        $I->see('<strong>ERROR</strong>: The username field is empty.');
    }
}