<?php


use Step\Acceptance\Admin1 as SecondStep;

class LI_14Cest
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
     * Verify user not able to login with [Email address or Username]  Text field like a link
     */
    public function loginUnsucceed(SecondStep $I, $scenario)
    {
        $I = new SecondStep($scenario);
        $I->loginUsername('http://tranthithanh200497@gmail.com');
        $I->waitForText('404 status code for "GET /users/http://tranthithanh200497@gmail.com/auth-options"',2);
    }
}