<?php
/**
 * VserversserverNamevhostsApiTest
 * PHP version 5
 *
 * @category Class
 * @package  WowzaApi
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Topix\Hackademy\WowzaApi\Test\Api;

use Topix\Hackademy\WowzaApi\ApiException;
use Topix\Hackademy\WowzaApi\Client\VserversserverNamevhostsApi;
use Topix\Hackademy\WowzaApi\Configuration;
use Topix\Hackademy\WowzaApi\Model\CurrentVHostStatistics;
use Topix\Hackademy\WowzaApi\Model\HistoricVHostStatistics;
use Topix\Hackademy\WowzaApi\Model\VHostConfig;
use Topix\Hackademy\WowzaApi\Model\VHostsConfig;

/**
 * VserversserverNamevhostsApiTest Class Doc Comment
 *
 * @category Class
 * @package  WowzaApi
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VserversserverNamevhostsApiTest extends TestCase
{


    /**
     * @var VserversserverNamevhostsApi
     */
    protected $api;

    /**
     *
     * Retrieves the REST configuration information.
     * @test
     */
    public function it_should_throw_an_exception()
    {

        $this->setExpectedException(ApiException::class);

        $api_instance = new VserversserverNamevhostsApi();

        $result = $api_instance->getVHostsConfig(Configuration::$DEFAULT_SERVER);

    }

    /**
     *
     * Retrieves the REST configuration information.
     * @test
     */
    public function it_should_not_throw_an_exception()
    {
        try {
            $api_instance = new VserversserverNamevhostsApi($this->apiClient);
            $result = $api_instance->getVHostsConfig(Configuration::$DEFAULT_SERVER);
        } catch (ApiException $notExpected) {
            $this->fail();
            echo $notExpected->getMessage();
        }

        $this->assertTrue(TRUE);

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->api = new VserversserverNamevhostsApi($this->apiClient);

    }

    /**
     * Test case for deletePublisherVhostConfig
     *
     * Deletes the specified Publisher configuration.
     *
     */
    public function testDeletePublisherVhostConfig()
    {

    }
    /**
     * Test case for deleteSDPFileConfig
     *
     * Deletes the specified SDP file.
     *
     */
    public function testDeleteSDPFileConfig()
    {

    }
    /**
     * Test case for deleteSMILFileConfig
     *
     * Deletes the specified SMIL File configuration.
     *
     */
    public function testDeleteSMILFileConfig()
    {

    }
    /**
     * Test case for deleteStartupStreamConfig
     *
     * Deletes the specified Startup Stream configuration.
     *
     */
    public function testDeleteStartupStreamConfig()
    {

    }
    /**
     * Test case for deleteStreamFileConfig
     *
     * Deletes the specified Stream File configuration.
     *
     */
    public function testDeleteStreamFileConfig()
    {

    }
    /**
     * Test case for deleteTranscoderEncodeConfig
     *
     * Deletes the specified Trancoder Encode configuration.
     *
     */
    public function testDeleteTranscoderEncodeConfig()
    {

    }
    /**
     * Test case for deleteTranscoderOverlayDecodeConfig
     *
     * Deletes the specified Trancoder Overlay Decode configuration.
     *
     */
    public function testDeleteTranscoderOverlayDecodeConfig()
    {

    }
    /**
     * Test case for deleteTranscoderOverlayEncodeConfig
     *
     * Deletes the specified Trancoder Overlay Encode configuration.
     *
     */
    public function testDeleteTranscoderOverlayEncodeConfig()
    {

    }
    /**
     * Test case for deleteTranscoderStreamNameGroupConfig
     *
     * Deletes the specified Trancoder StreamNameGroup configuration.
     *
     */
    public function testDeleteTranscoderStreamNameGroupConfig()
    {

    }
    /**
     * Test case for deleteTranscoderTemplateConfig
     *
     * Deletes the specified Trancoder Template configuration.
     *
     */
    public function testDeleteTranscoderTemplateConfig()
    {

    }
    /**
     * Test case for getCurrentVHostStatistics
     *
     * Retrieves the current VHost statistics.
     *
     */
    public function testGetCurrentVHostStatistics()
    {

        try {
            $result = $this->api->getCurrentVHostStatistics(Configuration::$DEFAULT_SERVER,Configuration::$DEFAULT_VHOST);
            $this->assertInstanceOf(CurrentVHostStatistics::class,$result);

        } catch (ApiException $notExpected) {
            $this->fail();
            echo $notExpected->getMessage();
        }

        $this->assertTrue(TRUE);

    }
    /**
     * Test case for getHistoricVHostStatistics
     *
     * Retrieves the historic VHost statistics.
     *
     */
    public function testGetHistoricVHostStatistics()
    {
        try {
            $result = $this->api->getHistoricVHostStatistics(Configuration::$DEFAULT_SERVER,Configuration::$DEFAULT_VHOST);
            $this->assertInstanceOf(HistoricVHostStatistics::class,$result);

        } catch (ApiException $notExpected) {
            $this->fail();
            echo $notExpected->getMessage();
        }

        $this->assertTrue(TRUE);
    }
    /**
     * Test case for getHostPortConfig
     *
     * Retrieves the HostPort for the specifed vhost and port.
     *
     */
    public function testGetHostPortConfig()
    {

    }
    /**
     * Test case for getHostPortConfigAdv
     *
     * Retrieves the advanced HostPort configuration for the specified vhost and port.
     *
     */
    public function testGetHostPortConfigAdv()
    {

    }
    /**
     * Test case for getHostPortsConfig
     *
     * Retrieves the list of server HostPorts for the specified vhost.
     *
     */
    public function testGetHostPortsConfig()
    {

    }
    /**
     * Test case for getHostportsTuneConfig
     *
     * Retrieves the host port configuration used for server tuning for the specified vhost.
     *
     */
    public function testGetHostportsTuneConfig()
    {

    }
    /**
     * Test case for getMediaCacheStoreList
     *
     * Retrieves all entries in the MediaCache system.
     *
     */
    public function testGetMediaCacheStoreList()
    {

    }
    /**
     * Test case for getPublisherVhostConfig
     *
     * Retrieves the specified Publisher configuration.
     *
     */
    public function testGetPublisherVhostConfig()
    {

    }
    /**
     * Test case for getPublishersVhostConfig
     *
     * Retrieves the list of Publishers for the specified VHost.
     *
     */
    public function testGetPublishersVhostConfig()
    {

    }
    /**
     * Test case for getSDPFilesConfig
     *
     * Retrieves the list of SDP Files for the specified VHost.
     *
     */
    public function testGetSDPFilesConfig()
    {

    }
    /**
     * Test case for getSMILFileConfig
     *
     * Retrieves the specified SMIL File configuration.
     *
     */
    public function testGetSMILFileConfig()
    {

    }
    /**
     * Test case for getSMILFilesConfig
     *
     * Retrieves the list of SMIL Files for the specified VHost.
     *
     */
    public function testGetSMILFilesConfig()
    {

    }
    /**
     * Test case for getSSLConfig
     *
     * Retrieves the SSL configuration for the specified vhost and port.
     *
     */
    public function testGetSSLConfig()
    {

    }
    /**
     * Test case for getStartupStreamConfig
     *
     * Retrieves the specified Startup Stream configuration.
     *
     */
    public function testGetStartupStreamConfig()
    {

    }
    /**
     * Test case for getStartupStreamsConfig
     *
     * Retrieves the list of Startup Streams for the specified VHost.
     *
     */
    public function testGetStartupStreamsConfig()
    {

    }
    /**
     * Test case for getStreamFileConfig
     *
     * Retrieves the specified Stream File configuration.
     *
     */
    public function testGetStreamFileConfig()
    {

    }
    /**
     * Test case for getStreamFileConfigAdv
     *
     * Retrieves the Advanced Stream File configuration.
     *
     */
    public function testGetStreamFileConfigAdv()
    {

    }
    /**
     * Test case for getStreamFilesConfig
     *
     * Retrieves the list of Stream Files for the specified VHost.
     *
     */
    public function testGetStreamFilesConfig()
    {

    }
    /**
     * Test case for getTranscoderConfig
     *
     * Retrieves the Transcoder configuration for the specified VHost.
     *
     */
    public function testGetTranscoderConfig()
    {

    }
    /**
     * Test case for getTranscoderEncodeConfig
     *
     * Retrieves the specified Trancoder Encode configuration.
     *
     */
    public function testGetTranscoderEncodeConfig()
    {

    }
    /**
     * Test case for getTranscoderEncodeConfigAdv
     *
     * Retrieves the Advanced Transcoder Encode configuration.
     *
     */
    public function testGetTranscoderEncodeConfigAdv()
    {

    }
    /**
     * Test case for getTranscoderEncodesConfig
     *
     * Retrieves the list of Transcoder Encode Configurations for the specified VHost.
     *
     */
    public function testGetTranscoderEncodesConfig()
    {

    }
    /**
     * Test case for getTranscoderOverlayDecodeConfig
     *
     * Retrieves the specified Trancoder Overlay Decode configuration.
     *
     */
    public function testGetTranscoderOverlayDecodeConfig()
    {

    }
    /**
     * Test case for getTranscoderOverlayEncodeConfig
     *
     * Retrieves the specified Trancoder Overlay Encode configuration.
     *
     */
    public function testGetTranscoderOverlayEncodeConfig()
    {

    }
    /**
     * Test case for getTranscoderStreamNameGroupConfig
     *
     * Retrieves the specified Trancoder StreamNameGroup configuration.
     *
     */
    public function testGetTranscoderStreamNameGroupConfig()
    {

    }
    /**
     * Test case for getTranscoderStreamNameGroupsConfig
     *
     * Retrieves the list of Transcoder Stream Name Groups for the specified Template.
     *
     */
    public function testGetTranscoderStreamNameGroupsConfig()
    {

    }
    /**
     * Test case for getTranscoderTemplateConfig
     *
     * Retrieves the specified Trancoder Template configuration.
     *
     */
    public function testGetTranscoderTemplateConfig()
    {

    }
    /**
     * Test case for getTranscoderTemplateConfigAdv
     *
     * Retrieves the Advanced Transcoder Template configuration.
     *
     */
    public function testGetTranscoderTemplateConfigAdv()
    {

    }
    /**
     * Test case for getTranscoderTemplatesConfig
     *
     * Retrieves the list of Transcoder Template Configurations for the specified VHost.
     *
     */
    public function testGetTranscoderTemplatesConfig()
    {

    }
    /**
     * Test case for getVHostConfig
     *
     * Retrieves the specified VHost configuration.
     *
     */
    public function testGetVHostConfig()
    {

    }
    /**
     * Test case for getVHostConfigAdv
     *
     * Retrieves the specified advanced VHost configuration.
     *
     */
    public function testGetVHostConfigAdv()
    {

    }
    /**
     * Test case for getVHostTuneConfig
     *
     * Retrieves the Tuning configuration for the specifed vhost.
     *
     */
    public function testGetVHostTuneConfig()
    {

    }
    /**
     * Test case for getVHostsConfig
     *
     * Retrieves the list of VHosts.
     *
     */
    public function testGetVHostsConfig()
    {
        try {
            $result = $this->api->getVHostsConfig(Configuration::$DEFAULT_SERVER);
            $this->assertInstanceOf(VHostsConfig::class,$result);

        } catch (ApiException $notExpected) {
            $this->fail();
            echo $notExpected->getMessage();
        }

        $this->assertTrue(TRUE);
    }
    /**
     * Test case for postPublisherVhostConfig
     *
     * Adds the specified Publisher configuration.
     *
     */
    public function testPostPublisherVhostConfig()
    {

    }
    /**
     * Test case for postPublishersVhostConfig
     *
     * Add a Publisher to list of Publishers for the specified VHost.
     *
     */
    public function testPostPublishersVhostConfig()
    {

    }
    /**
     * Test case for postSMILFileConfig
     *
     * Adds the specified SMIL File configuration.
     *
     */
    public function testPostSMILFileConfig()
    {

    }
    /**
     * Test case for postSMILFilesConfig
     *
     * Adds a SMIL File to the list of SMIL Files for the specified VHost.
     *
     */
    public function testPostSMILFilesConfig()
    {

    }
    /**
     * Test case for postStartupStreamConfig
     *
     * Adds the specified Startup Stream configuration.
     *
     */
    public function testPostStartupStreamConfig()
    {

    }
    /**
     * Test case for postStartupStreamsConfig
     *
     * Adds a Startup Stream to the list of Startup Streams for the specified VHost.
     *
     */
    public function testPostStartupStreamsConfig()
    {

    }
    /**
     * Test case for postStreamFileConfig
     *
     * Adds the specified Stream File configuration.
     *
     */
    public function testPostStreamFileConfig()
    {

    }
    /**
     * Test case for postStreamFilesConfig
     *
     * Adds a Stream File to the list of Stream Files for the specified VHost.
     *
     */
    public function testPostStreamFilesConfig()
    {

    }
    /**
     * Test case for postTranscoderEncodeConfig
     *
     * Adds the specified Trancoder Encode configuration.
     *
     */
    public function testPostTranscoderEncodeConfig()
    {

    }
    /**
     * Test case for postTranscoderEncodesConfig
     *
     * Adds a Transcoder Encode Configuration to the specified VHost.
     *
     */
    public function testPostTranscoderEncodesConfig()
    {

    }
    /**
     * Test case for postTranscoderStreamNameGroupConfig
     *
     * Adds the specified Trancoder StreamNameGroup configuration.
     *
     */
    public function testPostTranscoderStreamNameGroupConfig()
    {

    }
    /**
     * Test case for postTranscoderStreamNameGroupsConfig
     *
     * Adds a Transcoder Stream Name Groups Configuration to the specified Template.
     *
     */
    public function testPostTranscoderStreamNameGroupsConfig()
    {

    }
    /**
     * Test case for postTranscoderTemplateConfig
     *
     * Adds the specified Trancoder Template configuration.
     *
     */
    public function testPostTranscoderTemplateConfig()
    {

    }
    /**
     * Test case for postTranscoderTemplatesConfig
     *
     * Adds a Transcoder Templates Configuration to the specified VHost.
     *
     */
    public function testPostTranscoderTemplatesConfig()
    {

    }
    /**
     * Test case for putHostPortConfigAdv
     *
     * .
     *
     */
    public function testPutHostPortConfigAdv()
    {

    }
    /**
     * Test case for putHostportsTuneConfig
     *
     * Updates the host port configuration used for server tuning for the specified vhost.
     *
     */
    public function testPutHostportsTuneConfig()
    {

    }
    /**
     * Test case for putMediaCacheStoreAction
     *
     * .
     *
     */
    public function testPutMediaCacheStoreAction()
    {

    }
    /**
     * Test case for putPublisherVhostConfig
     *
     * Updates the specified Publisher configuration.
     *
     */
    public function testPutPublisherVhostConfig()
    {

    }
    /**
     * Test case for putSDPFileAction
     *
     * .
     *
     */
    public function testPutSDPFileAction()
    {

    }
    /**
     * Test case for putSMILFileAction
     *
     * .
     *
     */
    public function testPutSMILFileAction()
    {

    }
    /**
     * Test case for putSMILFileConfig
     *
     * Updates the specified SMIL File configuration.
     *
     */
    public function testPutSMILFileConfig()
    {

    }
    /**
     * Test case for putSSLConfig
     *
     * Updates the SSL configuration for the specified vhost and port.
     *
     */
    public function testPutSSLConfig()
    {

    }
    /**
     * Test case for putStartupStreamConfig
     *
     * Updates the specified Startup Stream configuration.
     *
     */
    public function testPutStartupStreamConfig()
    {

    }
    /**
     * Test case for putStreamFileAction
     *
     * .
     *
     */
    public function testPutStreamFileAction()
    {

    }
    /**
     * Test case for putStreamFileConfig
     *
     * Updates the specified Stream File configuration.
     *
     */
    public function testPutStreamFileConfig()
    {

    }
    /**
     * Test case for putStreamFileConfigAdv
     *
     * Updates the Advanced Stream File configuration.
     *
     */
    public function testPutStreamFileConfigAdv()
    {

    }
    /**
     * Test case for putTranscoderConfig
     *
     * Updates the Transcoder configuration for the specified VHost.
     *
     */
    public function testPutTranscoderConfig()
    {

    }
    /**
     * Test case for putTranscoderEncodeConfig
     *
     * Updates the specified Trancoder Encode configuration.
     *
     */
    public function testPutTranscoderEncodeConfig()
    {

    }
    /**
     * Test case for putTranscoderEncodeConfigAdv
     *
     * Updates the Advanced Transcoder Encode configuration.
     *
     */
    public function testPutTranscoderEncodeConfigAdv()
    {

    }
    /**
     * Test case for putTranscoderOverlayDecodeConfig
     *
     * Updates the specified Trancoder Overlay Decode configuration.
     *
     */
    public function testPutTranscoderOverlayDecodeConfig()
    {

    }
    /**
     * Test case for putTranscoderOverlayEncodeConfig
     *
     * Updates the specified Trancoder Overlay Encode configuration.
     *
     */
    public function testPutTranscoderOverlayEncodeConfig()
    {

    }
    /**
     * Test case for putTranscoderStreamNameGroupConfig
     *
     * Updates the specified Trancoder StreamNameGroup configuration.
     *
     */
    public function testPutTranscoderStreamNameGroupConfig()
    {

    }
    /**
     * Test case for putTranscoderTemplateAction
     *
     * .
     *
     */
    public function testPutTranscoderTemplateAction()
    {

    }
    /**
     * Test case for putTranscoderTemplateConfig
     *
     * Updates the specified Trancoder Template configuration.
     *
     */
    public function testPutTranscoderTemplateConfig()
    {

    }
    /**
     * Test case for putTranscoderTemplateConfigAdv
     *
     * Updates the Advanced Transcoder Template configuration.
     *
     */
    public function testPutTranscoderTemplateConfigAdv()
    {

    }
    /**
     * Test case for putVHostAction
     *
     * .
     *
     */
    public function testPutVHostAction()
    {

    }
    /**
     * Test case for putVHostConfig
     *
     * Updates the specified VHost configuration.
     *
     */
    public function testPutVHostConfig()
    {

    }
    /**
     * Test case for putVHostConfigAdv
     *
     * Updates the specified advanced VHost configuration.
     *
     */
    public function testPutVHostConfigAdv()
    {

    }
    /**
     * Test case for putVHostTuneConfig
     *
     * Updates the Tuning configuration for the specifed vhost.
     *
     */
    public function testPutVHostTuneConfig()
    {

    }
}
