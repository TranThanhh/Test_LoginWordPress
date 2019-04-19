<?php


use Step\Acceptance\Admin1 as ThanhTest;

class LI_14Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(ThanhTest $I, $scenario)
    {
        $I = new ThanhTest($scenario);
        $I->loginUsername('http://tranthithanh200497@gmail.com');
        $I->wait(2);


    }
}