<?php
/**
 * VserversserverNamelogjApi
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
use Topix\Hackademy\WowzaApi\Model\Log4js;
use Topix\Hackademy\WowzaApi\ObjectSerializer;

/**
 * VserversserverNamelogjApi Class Doc Comment
 *
 * @category Class
 * @package  WowzaApi
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VserversserverNamelogjApi extends SwaggerApi
{


    /**
     * Operation getLog4js
     *
     * Retrieves the Server log4j configuration.
     *
     * @param string $serverName Reserved for future use (required)
     *
     * @return  Log4js
     * @throws ApiException on non-2xx response
     */
    public function getLog4js($serverName)
    {
        list($response) = $this->getLog4jsWithHttpInfo($serverName);
        return $response;
    }


    /**
     * Operation getLog4jsWithHttpInfo
     *
     * Retrieves the Server log4j configuration.
     *
     * @param string $serverName Reserved for future use (required)
     *
     * @return array of \Model\Log4js, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getLog4jsWithHttpInfo($serverName)
    {
        
        // verify the required parameter 'serverName' is set
        if ($serverName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $serverName when calling getLog4js');
        }

        // parse inputs
        $resourcePath = "/v2/servers/{serverName}/log4j";
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
                Log4js::class
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, Log4js::class, $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), Log4js::class, $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation putLog4jAction
     *
     * Tells the specified log4j logger to perform an action.
     *
     * @param string $serverName Reserved for future use (required)
     * @param string $action The action which should be performed by the server (required)
     * @param string $loggerName The logger name needed for this REST call (required)
     *
     * @return void
     * @throws ApiException on non-2xx response
     */
    public function putLog4jAction($serverName, $action, $loggerName)
    {
        list($response) = $this->putLog4jActionWithHttpInfo($serverName, $action, $loggerName);
        return $response;
    }


    /**
     * Operation putLog4jActionWithHttpInfo
     *
     * Tells the specified log4j logger to perform an action.
     *
     * @param string $serverName Reserved for future use (required)
     * @param string $action The action which should be performed by the server (required)
     * @param string $loggerName The logger name needed for this REST call (required)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function putLog4jActionWithHttpInfo($serverName, $action, $loggerName)
    {
        
        // verify the required parameter 'serverName' is set
        if ($serverName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $serverName when calling putLog4jAction');
        }

        // verify the required parameter 'action' is set
        if ($action === null) {
            throw new \InvalidArgumentException('Missing the required parameter $action when calling putLog4jAction');
        }

        // verify the required parameter 'loggerName' is set
        if ($loggerName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loggerName when calling putLog4jAction');
        }

        // parse inputs
        $resourcePath = "/v2/servers/{serverName}/log4j/{loggerName}/actions/{action}";
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
        }// path params
        if ($action !== null) {
            $resourcePath = str_replace(
                "{" . "action" . "}",
                $this->apiClient->getSerializer()->toPathValue($action),
                $resourcePath
            );
        }// path params
        if ($loggerName !== null) {
            $resourcePath = str_replace(
                "{" . "loggerName" . "}",
                $this->apiClient->getSerializer()->toPathValue($loggerName),
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
    /**
     * Operation putLog4jsAction
     *
     * Tells the log4j system to perform an action.
     *
     * @param string $serverName Reserved for future use (required)
     * @param string $action The action which should be performed by the server (required)
     *
     * @return void
     * @throws ApiException on non-2xx response
     */
    public function putLog4jsAction($serverName, $action)
    {
        list($response) = $this->putLog4jsActionWithHttpInfo($serverName, $action);
        return $response;
    }


    /**
     * Operation putLog4jsActionWithHttpInfo
     *
     * Tells the log4j system to perform an action.
     *
     * @param string $serverName Reserved for future use (required)
     * @param string $action The action which should be performed by the server (required)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function putLog4jsActionWithHttpInfo($serverName, $action)
    {
        
        // verify the required parameter 'serverName' is set
        if ($serverName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $serverName when calling putLog4jsAction');
        }

        // verify the required parameter 'action' is set
        if ($action === null) {
            throw new \InvalidArgumentException('Missing the required parameter $action when calling putLog4jsAction');
        }

        // parse inputs
        $resourcePath = "/v2/servers/{serverName}/log4j/actions/{action}";
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
        }// path params
        if ($action !== null) {
            $resourcePath = str_replace(
                "{" . "action" . "}",
                $this->apiClient->getSerializer()->toPathValue($action),
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
