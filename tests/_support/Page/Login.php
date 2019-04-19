<?php
namespace Page;

class Login
{
    // include url of current page
    public static $URL = '/log-in/fr?redirect_to=https%3A%2F%2Fwordpress.com%2F';
    public  static  $usernamefield='//*[@id="usernameOrEmail"]';
    public  static  $passwordField='//*[@id="password"]';
    public static  $continueButton='//*[@id="primary"]/div/main/div[2]/div[1]/div/form/div[1]/div[2]/button';
    public  static  $loginButton='//*[@id="primary"]/div/main/div[2]/div[1]/div/form/div[1]/div[2]/button';

    public  static $cotinuewithGGButton='Continue with Google';
    public  static $creatnewAccHyperLink='//*[@id="primary"]/div/main/div/div[2]/a[1]';

    public  static $EmailaLinkHyperLink='//*[@id="primary"]/div/main/div[2]/div[2]/a[2]';
    public  static $lostPassHyperLink='//*[@id="primary"]/div/main/div/div[2]/a[3]';
    public  static $backWordpressHyperLink='//*[@id="primary"]/div/main/div/div[2]/a[4]';
    public  static $temsHyperLink='//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/p/a';
    public  static $changeEmailHyperLink='//*[@id="primary"]/div/main/div[2]/div[1]/div/form/div[1]/div[1]/label/a';


    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
