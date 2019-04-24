<?php


use Page\Login as LoginPage;
use Step\Acceptance\Admin as Step;

class LI_24Cest
{
    /**
     * @param AcceptanceTester $I
     */
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * @param AcceptanceTester $I
     * @param $scenario
     * Verify if click on [Continue with Google] button
     */
    public function tryToTest(AcceptanceTester $I,$scenario)
    {
        $I = new Step($scenario);
        $I->clickOnContinueGG();
    }
}