<?php
namespace Page;

class Login
{
    // include url of current page
    /**
     * @var string
     */
    public static $URL = '/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F';
    /**
     * @var string
     */
    public  static  $usernamefield='//input[@id="usernameOrEmail"]';
    /**
     * @var string
     */
    public  static  $passwordField='//input[@id="password"]';
    /**
     * @var string
     */
    public static  $continueButton='Continue';
    /**
     * @var string
     */
    public  static  $loginButton='Log In';
    /**
     * @var string
     */
    public  static $cotinuewithGGButton='Continue with Google';
    /**
     * @var string
     */
    public  static $creatnewAccHyperLink='//div[@class="wp-login__links"]/a';
    /**
     * @var string
     */
    public  static $emailaLinkHyperLink='//div[@class="wp-login__links"]/a[2]';
    /**
     * @var string
     */
    public  static $lostPassHyperLink='//div[@class="wp-login__links"]/a[3]';
    /**
     * @var string
     */
    public  static $backWordpressHyperLink='//div[@class="wp-login__links"]/a[4]';
    /**
     * @var string
     */
    public  static $temsHyperLink='//p[@class="login__form-terms"]/a';
    /**
     * @var string
     */
    public  static $changeEmailHyperLink='//div[@class="login__form-userdata"]/label/a';

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
