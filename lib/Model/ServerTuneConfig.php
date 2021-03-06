<?php
/**
 * ServerTuneConfig
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
 * ServerTuneConfig Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ServerTuneConfig extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ServerTuneConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'heapSizeCurrent' => 'int',
        'garbageCollectorCurrent' => 'string',
        'serverName' => 'string',
        'heapSize' => 'string',
        'garbageCollector' => 'string',
        'saveFieldList' => 'string[]',
        'version' => 'string'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'heapSizeCurrent' => 'heapSizeCurrent',
        'garbageCollectorCurrent' => 'garbageCollectorCurrent',
        'serverName' => 'serverName',
        'heapSize' => 'heapSize',
        'garbageCollector' => 'garbageCollector',
        'saveFieldList' => 'saveFieldList',
        'version' => 'version'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'heapSizeCurrent' => 'setHeapSizeCurrent',
        'garbageCollectorCurrent' => 'setGarbageCollectorCurrent',
        'serverName' => 'setServerName',
        'heapSize' => 'setHeapSize',
        'garbageCollector' => 'setGarbageCollector',
        'saveFieldList' => 'setSaveFieldList',
        'version' => 'setVersion'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'heapSizeCurrent' => 'getHeapSizeCurrent',
        'garbageCollectorCurrent' => 'getGarbageCollectorCurrent',
        'serverName' => 'getServerName',
        'heapSize' => 'getHeapSize',
        'garbageCollector' => 'getGarbageCollector',
        'saveFieldList' => 'getSaveFieldList',
        'version' => 'getVersion'
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
        $this->container['heapSizeCurrent'] = isset($data['heapSizeCurrent']) ? $data['heapSizeCurrent'] : null;
        $this->container['garbageCollectorCurrent'] = isset($data['garbageCollectorCurrent']) ? $data['garbageCollectorCurrent'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['heapSize'] = isset($data['heapSize']) ? $data['heapSize'] : null;
        $this->container['garbageCollector'] = isset($data['garbageCollector']) ? $data['garbageCollector'] : null;
        $this->container['saveFieldList'] = isset($data['saveFieldList']) ? $data['saveFieldList'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['heapSizeCurrent'] === null) {
            $invalid_properties[] = "'heapSizeCurrent' can't be null";
        }
        if ($this->container['garbageCollectorCurrent'] === null) {
            $invalid_properties[] = "'garbageCollectorCurrent' can't be null";
        }
        if ($this->container['serverName'] === null) {
            $invalid_properties[] = "'serverName' can't be null";
        }
        if ($this->container['heapSize'] === null) {
            $invalid_properties[] = "'heapSize' can't be null";
        }
        if ($this->container['garbageCollector'] === null) {
            $invalid_properties[] = "'garbageCollector' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalid_properties[] = "'version' can't be null";
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
        if ($this->container['heapSizeCurrent'] === null) {
            return false;
        }
        if ($this->container['garbageCollectorCurrent'] === null) {
            return false;
        }
        if ($this->container['serverName'] === null) {
            return false;
        }
        if ($this->container['heapSize'] === null) {
            return false;
        }
        if ($this->container['garbageCollector'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets heapSizeCurrent
     * @return int
     */
    public function getHeapSizeCurrent()
    {
        return $this->container['heapSizeCurrent'];
    }

    /**
     * Sets heapSizeCurrent
     * @param int $heapSizeCurrent
     * @return $this
     */
    public function setHeapSizeCurrent($heapSizeCurrent)
    {
        $this->container['heapSizeCurrent'] = $heapSizeCurrent;

        return $this;
    }

    /**
     * Gets garbageCollectorCurrent
     * @return string
     */
    public function getGarbageCollectorCurrent()
    {
        return $this->container['garbageCollectorCurrent'];
    }

    /**
     * Sets garbageCollectorCurrent
     * @param string $garbageCollectorCurrent
     * @return $this
     */
    public function setGarbageCollectorCurrent($garbageCollectorCurrent)
    {
        $this->container['garbageCollectorCurrent'] = $garbageCollectorCurrent;

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
     * Gets heapSize
     * @return string
     */
    public function getHeapSize()
    {
        return $this->container['heapSize'];
    }

    /**
     * Sets heapSize
     * @param string $heapSize
     * @return $this
     */
    public function setHeapSize($heapSize)
    {
        $this->container['heapSize'] = $heapSize;

        return $this;
    }

    /**
     * Gets garbageCollector
     * @return string
     */
    public function getGarbageCollector()
    {
        return $this->container['garbageCollector'];
    }

    /**
     * Sets garbageCollector
     * @param string $garbageCollector
     * @return $this
     */
    public function setGarbageCollector($garbageCollector)
    {
        $this->container['garbageCollector'] = $garbageCollector;

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

}
