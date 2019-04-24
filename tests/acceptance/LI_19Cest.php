<?php

use Step\Acceptance\Admin as Step;

class LI_19Cest
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
     * Verify if [Create a new account] HyperLink work
     */
    public function tryToTest(AcceptanceTester $I,$scenario)
    {
        $I = new Step($scenario);
        $I->clickCreatHyperLink();
    }
}