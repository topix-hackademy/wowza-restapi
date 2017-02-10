<?php
/**
 * VmachinemonitoringcurrentApiTest
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
use Topix\Hackademy\WowzaApi\Client\VmachinemonitoringcurrentApi;


/**
 * VmachinemonitoringcurrentApiTest Class Doc Comment
 *
 * @category Class
 * @package  WowzaApi
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VmachinemonitoringcurrentApiTest extends TestCase
{

    /**
     *
     * Retrieves the REST configuration information.
     * @test
     */
    public function it_should_throw_an_exception()
    {

        $this->setExpectedException(ApiException::class);

        $api_instance = new VmachinemonitoringcurrentApi();

        $result = $api_instance->getCurrentMachineStatistics();

    }

    /**
     *
     * Retrieves the REST configuration information.
     * @test
     */
    public function it_should_not_throw_an_exception()
    {
        try {
            $api_instance = new VmachinemonitoringcurrentApi($this->apiClient);
            $result = $api_instance->getCurrentMachineStatistics();
        } catch (ApiException $notExpected) {
            $this->fail();
            echo $notExpected->getMessage();
        }

        $this->assertTrue(TRUE);

    }

}
