<?php


use Step\Acceptance\Admin as FirstStep;
use Step\Acceptance\Admin2 as ThirdStep;


class LI_11Cest
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
     * Verify user not able to login with Email address valid, Password null, click multitime on Login button show same error
     */
    public function loginUnseucceed(FirstStep $I, $scenario)
    {
        $I = new FirstStep($scenario);
        $I->loginAsAdmin('tranthithanh200497@gmail.com',null);
        $I->see('Don\'t forget to enter your password.');
        $I=new ThirdStep($scenario);
        $I->loginPassword(null);
        $I->see('Don\'t forget to enter your password.');
        $I->loginPassword(null);
        $I->see('Don\'t forget to enter your password.');
        $I->loginPassword(null);
        $I->see('Don\'t forget to enter your password.');
    }
}