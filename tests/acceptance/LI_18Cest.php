<?php

use Step\Acceptance\Admin as Step;

class LI_18Cest
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
     * Verify if  [Tems of Service] HyperLink work
     */
    public function clickHyperLink(AcceptanceTester $I, $scenario)
    {
        $I = new Step($scenario);
        $I->clickTemsHyperLink();
    }
}