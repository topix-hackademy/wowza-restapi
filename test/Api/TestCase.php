<?php
/**
 * Created by PhpStorm.
 * User: gab88slash
 * Date: 21/07/16
 * Time: 15:56
 */

namespace Topix\Hackademy\WowzaApi\Test\Api;

use Topix\Hackademy\WowzaApi\ApiClient;
use Topix\Hackademy\WowzaApi\Configuration;

abstract class TestCase extends \PHPUnit_Framework_TestCase
{

    protected $apiClient;

    public function setUp()
    {
        parent::setUp();
        $this->setUpApiClient();
    }

    private function setUpApiClient()
    {

        $configurator = new Configuration();

        $configurator->setUsername('');
        $configurator->setPassword('');
        $configurator->setHost('');
        $configurator->setSSLVerification(false);
        $configurator->setDebug(false); //turn on just if tests are failing for major debug


        $this->apiClient = new ApiClient($configurator);
    }
}