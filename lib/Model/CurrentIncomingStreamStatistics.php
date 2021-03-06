<?php
/**
 * CurrentIncomingStreamStatistics
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
 * CurrentIncomingStreamStatistics Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CurrentIncomingStreamStatistics extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CurrentIncomingStreamStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'totalConnections' => 'int',
        'applicationInstance' => 'string',
        'bytesOutRate' => 'int',
        'name' => 'string',
        'serverName' => 'string',
        'saveFieldList' => 'string[]',
        'version' => 'string',
        'uptime' => 'int',
        'bytesIn' => 'int',
        'bytesOut' => 'int',
        'bytesInRate' => 'int'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'totalConnections' => 'totalConnections',
        'applicationInstance' => 'applicationInstance',
        'bytesOutRate' => 'bytesOutRate',
        'name' => 'name',
        'serverName' => 'serverName',
        'saveFieldList' => 'saveFieldList',
        'version' => 'version',
        'uptime' => 'uptime',
        'bytesIn' => 'bytesIn',
        'bytesOut' => 'bytesOut',
        'bytesInRate' => 'bytesInRate'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'totalConnections' => 'setTotalConnections',
        'applicationInstance' => 'setApplicationInstance',
        'bytesOutRate' => 'setBytesOutRate',
        'name' => 'setName',
        'serverName' => 'setServerName',
        'saveFieldList' => 'setSaveFieldList',
        'version' => 'setVersion',
        'uptime' => 'setUptime',
        'bytesIn' => 'setBytesIn',
        'bytesOut' => 'setBytesOut',
        'bytesInRate' => 'setBytesInRate'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'totalConnections' => 'getTotalConnections',
        'applicationInstance' => 'getApplicationInstance',
        'bytesOutRate' => 'getBytesOutRate',
        'name' => 'getName',
        'serverName' => 'getServerName',
        'saveFieldList' => 'getSaveFieldList',
        'version' => 'getVersion',
        'uptime' => 'getUptime',
        'bytesIn' => 'getBytesIn',
        'bytesOut' => 'getBytesOut',
        'bytesInRate' => 'getBytesInRate'
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
        $this->container['applicationInstance'] = isset($data['applicationInstance']) ? $data['applicationInstance'] : null;
        $this->container['bytesOutRate'] = isset($data['bytesOutRate']) ? $data['bytesOutRate'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['saveFieldList'] = isset($data['saveFieldList']) ? $data['saveFieldList'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['uptime'] = isset($data['uptime']) ? $data['uptime'] : null;
        $this->container['bytesIn'] = isset($data['bytesIn']) ? $data['bytesIn'] : null;
        $this->container['bytesOut'] = isset($data['bytesOut']) ? $data['bytesOut'] : null;
        $this->container['bytesInRate'] = isset($data['bytesInRate']) ? $data['bytesInRate'] : null;
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
        if ($this->container['applicationInstance'] === null) {
            $invalid_properties[] = "'applicationInstance' can't be null";
        }
        if ($this->container['bytesOutRate'] === null) {
            $invalid_properties[] = "'bytesOutRate' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
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
        if ($this->container['bytesInRate'] === null) {
            $invalid_properties[] = "'bytesInRate' can't be null";
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
        if ($this->container['applicationInstance'] === null) {
            return false;
        }
        if ($this->container['bytesOutRate'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
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
        if ($this->container['bytesInRate'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets totalConnections
     * @return int
     */
    public function getTotalConnections()
    {
        return $this->container['totalConnections'];
    }

    /**
     * Sets totalConnections
     * @param int $totalConnections
     * @return $this
     */
    public function setTotalConnections($totalConnections)
    {
        $this->container['totalConnections'] = $totalConnections;

        return $this;
    }

    /**
     * Gets applicationInstance
     * @return string
     */
    public function getApplicationInstance()
    {
        return $this->container['applicationInstance'];
    }

    /**
     * Sets applicationInstance
     * @param string $applicationInstance
     * @return $this
     */
    public function setApplicationInstance($applicationInstance)
    {
        $this->container['applicationInstance'] = $applicationInstance;

        return $this;
    }

    /**
     * Gets bytesOutRate
     * @return int
     */
    public function getBytesOutRate()
    {
        return $this->container['bytesOutRate'];
    }

    /**
     * Sets bytesOutRate
     * @param int $bytesOutRate
     * @return $this
     */
    public function setBytesOutRate($bytesOutRate)
    {
        $this->container['bytesOutRate'] = $bytesOutRate;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @return int
     */
    public function getUptime()
    {
        return $this->container['uptime'];
    }

    /**
     * Sets uptime
     * @param int $uptime
     * @return $this
     */
    public function setUptime($uptime)
    {
        $this->container['uptime'] = $uptime;

        return $this;
    }

    /**
     * Gets bytesIn
     * @return int
     */
    public function getBytesIn()
    {
        return $this->container['bytesIn'];
    }

    /**
     * Sets bytesIn
     * @param int $bytesIn
     * @return $this
     */
    public function setBytesIn($bytesIn)
    {
        $this->container['bytesIn'] = $bytesIn;

        return $this;
    }

    /**
     * Gets bytesOut
     * @return int
     */
    public function getBytesOut()
    {
        return $this->container['bytesOut'];
    }

    /**
     * Sets bytesOut
     * @param int $bytesOut
     * @return $this
     */
    public function setBytesOut($bytesOut)
    {
        $this->container['bytesOut'] = $bytesOut;

        return $this;
    }

    /**
     * Gets bytesInRate
     * @return int
     */
    public function getBytesInRate()
    {
        return $this->container['bytesInRate'];
    }

    /**
     * Sets bytesInRate
     * @param int $bytesInRate
     * @return $this
     */
    public function setBytesInRate($bytesInRate)
    {
        $this->container['bytesInRate'] = $bytesInRate;

        return $this;
}

}
