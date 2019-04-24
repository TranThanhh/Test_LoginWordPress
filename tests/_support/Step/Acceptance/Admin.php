<?php
namespace Step\Acceptance;
use Page\Login as LoginPage;
class Admin extends \AcceptanceTester
{
    /**
     * LoginasAdmin to create the login
     * @param $name
     * @param $password
     */
    public function LoginasAdmin($name, $password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernamefield, $name);
        $I->click(LoginPage::$continueButton);
        $I->wait(2);
        $I->fillField(LoginPage::$passwordField, $password);
        $I->click(LoginPage::$loginButton);
        $I->wait(2);
    }
    public function  loginUsername($name)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernamefield, $name);
        $I->click(LoginPage::$continueButton);
    }
    public  function  loginPass($pass)
    {
        $I = $this;
        $I->fillField(LoginPage::$passwordField,$pass);
        $I->click(LoginPage::$loginButton);
    }

    public  function  clickTemsHyperLink()
    {
        $I= $this;
        $I->amOnPage(LoginPage::$URL);
        $I->click(LoginPage::$temsHyperLink);
    }
    public  function  clickCreatHyperLink()
    {
        $I= $this;
        $I->amOnPage(LoginPage::$URL);
        $I->click(LoginPage::$creatnewAccHyperLink);
    }
    public  function  clickBackWordPressHyperLink()
    {
        $I= $this;
        $I->amOnPage(LoginPage::$URL);
        $I->click(LoginPage::$backWordpressHyperLink);
    }
    public  function  clickLostPassHyperLink()
    {
        $I= $this;
        $I->amOnPage(LoginPage::$URL);
        $I->click(LoginPage::$lostPassHyperLink);
    }
    public  function  clickOnContinueGG()
    {
        $I= $this;
        $I->amOnPage(LoginPage::$URL);
        $I->click(LoginPage::$cotinuewithGGButton);
    }
    public function pressKeyTab()
    {
        $I= $this;
        $I->amOnPage(LoginPage::$URL);
        $I->pressKey(['id' => 'filter_search_webservices'], WebDriverKeys::TAB);
        $I->wait('2');
}
}