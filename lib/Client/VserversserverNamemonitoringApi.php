<?php
/**
 * VserversserverNamemonitoringApi
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
 * Do not edit the class manually.
 */

namespace Topix\Hackademy\WowzaApi\Client;

use Topix\Hackademy\WowzaApi\Configuration;
use Topix\Hackademy\WowzaApi\ApiClient;
use Topix\Hackademy\WowzaApi\ApiException;
use Topix\Hackademy\WowzaApi\Model\HistoricServerStatistics;
use Topix\Hackademy\WowzaApi\Model\MonitoringConfig;
use Topix\Hackademy\WowzaApi\ObjectSerializer;

/**
 * VserversserverNamemonitoringApi Class Doc Comment
 *
 * @category Class
 * @package  WowzaApi
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VserversserverNamemonitoringApi extends SwaggerApi
{

    /**
     * API Client
     *
     * @var ApiClient instance of the ApiClient
     */
    protected $apiClient;


    /**
     * Operation getHistoricServerStatistics
     *
     * Retrieves the server historical statictics.
     *
     * @param string $serverName Reserved for future use (required)
     *
     * @return  HistoricServerStatistics
     * @throws ApiException on non-2xx response
     */
    public function getHistoricServerStatistics($serverName)
    {
        list($response) = $this->getHistoricServerStatisticsWithHttpInfo($serverName);
        return $response;
    }


    /**
     * Operation getHistoricServerStatisticsWithHttpInfo
     *
     * Retrieves the server historical statictics.
     *
     * @param string $serverName Reserved for future use (required)
     *
     * @return Array of \Model\HistoricServerStatistics, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getHistoricServerStatisticsWithHttpInfo($serverName)
    {
        
        // verify the required parameter 'serverName' is set
        if ($serverName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $serverName when calling getHistoricServerStatistics');
        }

        // parse inputs
        $resourcePath = "/v2/servers/{serverName}/monitoring/historic";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/xml', 'text/xml', 'application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/xml','text/xml','application/json'));

        
        
        // path params
        if ($serverName !== null) {
            $resourcePath = str_replace(
                "{" . "serverName" . "}",
                $this->apiClient->getSerializer()->toPathValue($serverName),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
                // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                HistoricServerStatistics::class
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, HistoricServerStatistics::class, $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), HistoricServerStatistics::class, $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation getMonitoringConfig
     *
     * Retrieves the server monitoring configuration.
     *
     * @param string $serverName Reserved for future use (required)
     *
     * @return  MonitoringConfig
     * @throws ApiException on non-2xx response
     */
    public function getMonitoringConfig($serverName)
    {
        list($response) = $this->getMonitoringConfigWithHttpInfo($serverName);
        return $response;
    }


    /**
     * Operation getMonitoringConfigWithHttpInfo
     *
     * Retrieves the server monitoring configuration.
     *
     * @param string $serverName Reserved for future use (required)
     *
     * @return Array of \Model\MonitoringConfig, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getMonitoringConfigWithHttpInfo($serverName)
    {
        
        // verify the required parameter 'serverName' is set
        if ($serverName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $serverName when calling getMonitoringConfig');
        }

        // parse inputs
        $resourcePath = "/v2/servers/{serverName}/monitoring";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/xml', 'text/xml', 'application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/xml','text/xml','application/json'));

        
        
        // path params
        if ($serverName !== null) {
            $resourcePath = str_replace(
                "{" . "serverName" . "}",
                $this->apiClient->getSerializer()->toPathValue($serverName),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
                // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                MonitoringConfig::class
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, MonitoringConfig::class, $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), MonitoringConfig::class, $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation putMonitoringConfig
     *
     * Updates the server monitoring configuration.
     *
     * @param string $serverName Reserved for future use (required)
     * @param MonitoringConfig $body  (required)
     *
     * @return void
     * @throws ApiException on non-2xx response
     */
    public function putMonitoringConfig($serverName, $body)
    {
        list($response) = $this->putMonitoringConfigWithHttpInfo($serverName, $body);
        return $response;
    }


    /**
     * Operation putMonitoringConfigWithHttpInfo
     *
     * Updates the server monitoring configuration.
     *
     * @param string $serverName Reserved for future use (required)
     * @param MonitoringConfig $body  (required)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function putMonitoringConfigWithHttpInfo($serverName, $body)
    {
        
        // verify the required parameter 'serverName' is set
        if ($serverName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $serverName when calling putMonitoringConfig');
        }

        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling putMonitoringConfig');
        }

        // parse inputs
        $resourcePath = "/v2/servers/{serverName}/monitoring";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/xml', 'text/xml', 'application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/xml','text/xml','application/json'));

        
        
        // path params
        if ($serverName !== null) {
            $resourcePath = str_replace(
                "{" . "serverName" . "}",
                $this->apiClient->getSerializer()->toPathValue($serverName),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
                // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams
            );
            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}