<?php

use Step\Acceptance\Admin as Step;

class LI_21Cest
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
     * Verify if  [Back to WordPress.com] HyperLink work
     */
    public function tryToTest(AcceptanceTester $I,$scenario)
    {
        $I = new Step($scenario);
        $I->clickBackWordPressHyperLink();
    }
}