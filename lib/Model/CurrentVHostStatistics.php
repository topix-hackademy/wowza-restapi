<?php
/**
 * CurrentVHostStatistics
 *
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

namespace Topix\Hackademy\WowzaApi\Model;


/**
 * CurrentVHostStatistics Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CurrentVHostStatistics extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CurrentVHostStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'totalConnections' => Long::class,
        'serverName' => 'string',
        'saveFieldList' => 'string[]',
        'version' => 'string',
        'uptime' => Long::class,
        'bytesIn' => Long::class,
        'bytesOut' => Long::class
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'totalConnections' => 'totalConnections',
        'serverName' => 'serverName',
        'saveFieldList' => 'saveFieldList',
        'version' => 'version',
        'uptime' => 'uptime',
        'bytesIn' => 'bytesIn',
        'bytesOut' => 'bytesOut'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'totalConnections' => 'setTotalConnections',
        'serverName' => 'setServerName',
        'saveFieldList' => 'setSaveFieldList',
        'version' => 'setVersion',
        'uptime' => 'setUptime',
        'bytesIn' => 'setBytesIn',
        'bytesOut' => 'setBytesOut'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'totalConnections' => 'getTotalConnections',
        'serverName' => 'getServerName',
        'saveFieldList' => 'getSaveFieldList',
        'version' => 'getVersion',
        'uptime' => 'getUptime',
        'bytesIn' => 'getBytesIn',
        'bytesOut' => 'getBytesOut'
);

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['totalConnections'] = isset($data['totalConnections']) ? $data['totalConnections'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['saveFieldList'] = isset($data['saveFieldList']) ? $data['saveFieldList'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['uptime'] = isset($data['uptime']) ? $data['uptime'] : null;
        $this->container['bytesIn'] = isset($data['bytesIn']) ? $data['bytesIn'] : null;
        $this->container['bytesOut'] = isset($data['bytesOut']) ? $data['bytesOut'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['totalConnections'] === null) {
            $invalid_properties[] = "'totalConnections' can't be null";
        }
        if ($this->container['serverName'] === null) {
            $invalid_properties[] = "'serverName' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalid_properties[] = "'version' can't be null";
        }
        if ($this->container['uptime'] === null) {
            $invalid_properties[] = "'uptime' can't be null";
        }
        if ($this->container['bytesIn'] === null) {
            $invalid_properties[] = "'bytesIn' can't be null";
        }
        if ($this->container['bytesOut'] === null) {
            $invalid_properties[] = "'bytesOut' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['totalConnections'] === null) {
            return false;
        }
        if ($this->container['serverName'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        if ($this->container['uptime'] === null) {
            return false;
        }
        if ($this->container['bytesIn'] === null) {
            return false;
        }
        if ($this->container['bytesOut'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets totalConnections
     * @return  Long
     */
    public function getTotalConnections()
    {
        return $this->container['totalConnections'];
    }

    /**
     * Sets totalConnections
     * @param Long $totalConnections
     * @return $this
     */
    public function setTotalConnections($totalConnections)
    {
        $this->container['totalConnections'] = $totalConnections;

        return $this;
    }

    /**
     * Gets serverName
     * @return string
     */
    public function getServerName()
    {
        return $this->container['serverName'];
    }

    /**
     * Sets serverName
     * @param string $serverName
     * @return $this
     */
    public function setServerName($serverName)
    {
        $this->container['serverName'] = $serverName;

        return $this;
    }

    /**
     * Gets saveFieldList
     * @return string[]
     */
    public function getSaveFieldList()
    {
        return $this->container['saveFieldList'];
    }

    /**
     * Sets saveFieldList
     * @param string[] $saveFieldList
     * @return $this
     */
    public function setSaveFieldList($saveFieldList)
    {
        $this->container['saveFieldList'] = $saveFieldList;

        return $this;
    }

    /**
     * Gets version
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets uptime
     * @return  Long
     */
    public function getUptime()
    {
        return $this->container['uptime'];
    }

    /**
     * Sets uptime
     * @param Long $uptime
     * @return $this
     */
    public function setUptime($uptime)
    {
        $this->container['uptime'] = $uptime;

        return $this;
    }

    /**
     * Gets bytesIn
     * @return  Long
     */
    public function getBytesIn()
    {
        return $this->container['bytesIn'];
    }

    /**
     * Sets bytesIn
     * @param Long $bytesIn
     * @return $this
     */
    public function setBytesIn($bytesIn)
    {
        $this->container['bytesIn'] = $bytesIn;

        return $this;
    }

    /**
     * Gets bytesOut
     * @return  Long
     */
    public function getBytesOut()
    {
        return $this->container['bytesOut'];
    }

    /**
     * Sets bytesOut
     * @param Long $bytesOut
     * @return $this
     */
    public function setBytesOut($bytesOut)
    {
        $this->container['bytesOut'] = $bytesOut;

        return $this;
}

}
