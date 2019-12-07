<?php

namespace Tests;

use Laravel\Dusk\TestCase as BaseTestCase;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;

abstract class DuskTestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Prepare for Dusk test execution.
     *
     * @beforeClass
     * @return void
     */
    public static function prepare()
    {
         // static::startChromeDriver();
    }


    /**
     * Create the RemoteWebDriver instance.
     *
     * @return \Facebook\WebDriver\Remote\RemoteWebDriver
     */
    /*
        ①　composer require --dev laravel/dusk
        ②　php artisan dusk:install
        ③ laravelの.envを.env.dusk.localの名前でコピー
        　 APP_URL=http://nginx　にする
        ④ docker-compose up -d nginx mysql selenium する
        ⑤ src/tests/DuskTestCase.php の　return RemoteWebDriver::create　の部分
        　 第一引数を 'http://selenium:4444/wd/hub' にする
        ⑥ Browser/ExampleTest.php にテストを書く
        ⑦ php artisan dusk
    */
    protected function driver()
    {
        $options = (new ChromeOptions)->addArguments([
            '--disable-gpu',
            '--headless',
            '--window-size=1920,1080',
        ]);

        // circleciで使う時はhostをlocalhostに
        // workspaceで使う時はseleniumに
        return RemoteWebDriver::create(
            'http://selenium:4444/wd/hub', DesiredCapabilities::chrome()->setCapability(
                ChromeOptions::CAPABILITY, $options
            )
        );
    }
}
