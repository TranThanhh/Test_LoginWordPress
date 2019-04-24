<?php


use Step\Acceptance\Admin as Step;

class LI_20Cest
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
     * Verify if [Lost your password] HyperLink work
     */
    public function tryToTest(AcceptanceTester $I,$scenario)
    {
        $I = new Step($scenario);
        $I->clickLostPassHyperLink();
    }
}