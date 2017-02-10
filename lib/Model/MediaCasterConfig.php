<?php
/**
 * MediaCasterConfig
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
 * MediaCasterConfig Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MediaCasterConfig extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MediaCasterConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'streamType' => 'string',
        'keepAliveTime' => 'string',
        'name' => 'string',
        'serverName' => 'string',
        'description' => 'string',
        'baseClass' => 'string',
        'saveFieldList' => 'string[]',
        'version' => 'string',
        'connectionTimeout' => 'string'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'streamType' => 'streamType',
        'keepAliveTime' => 'keepAliveTime',
        'name' => 'name',
        'serverName' => 'serverName',
        'description' => 'description',
        'baseClass' => 'baseClass',
        'saveFieldList' => 'saveFieldList',
        'version' => 'version',
        'connectionTimeout' => 'connectionTimeout'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'streamType' => 'setStreamType',
        'keepAliveTime' => 'setKeepAliveTime',
        'name' => 'setName',
        'serverName' => 'setServerName',
        'description' => 'setDescription',
        'baseClass' => 'setBaseClass',
        'saveFieldList' => 'setSaveFieldList',
        'version' => 'setVersion',
        'connectionTimeout' => 'setConnectionTimeout'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'streamType' => 'getStreamType',
        'keepAliveTime' => 'getKeepAliveTime',
        'name' => 'getName',
        'serverName' => 'getServerName',
        'description' => 'getDescription',
        'baseClass' => 'getBaseClass',
        'saveFieldList' => 'getSaveFieldList',
        'version' => 'getVersion',
        'connectionTimeout' => 'getConnectionTimeout'
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
        $this->container['streamType'] = isset($data['streamType']) ? $data['streamType'] : null;
        $this->container['keepAliveTime'] = isset($data['keepAliveTime']) ? $data['keepAliveTime'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['baseClass'] = isset($data['baseClass']) ? $data['baseClass'] : null;
        $this->container['saveFieldList'] = isset($data['saveFieldList']) ? $data['saveFieldList'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['connectionTimeout'] = isset($data['connectionTimeout']) ? $data['connectionTimeout'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['streamType'] === null) {
            $invalid_properties[] = "'streamType' can't be null";
        }
        if ($this->container['keepAliveTime'] === null) {
            $invalid_properties[] = "'keepAliveTime' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['serverName'] === null) {
            $invalid_properties[] = "'serverName' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ($this->container['baseClass'] === null) {
            $invalid_properties[] = "'baseClass' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalid_properties[] = "'version' can't be null";
        }
        if ($this->container['connectionTimeout'] === null) {
            $invalid_properties[] = "'connectionTimeout' can't be null";
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
        if ($this->container['streamType'] === null) {
            return false;
        }
        if ($this->container['keepAliveTime'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['serverName'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['baseClass'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        if ($this->container['connectionTimeout'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets streamType
     * @return string
     */
    public function getStreamType()
    {
        return $this->container['streamType'];
    }

    /**
     * Sets streamType
     * @param string $streamType
     * @return $this
     */
    public function setStreamType($streamType)
    {
        $this->container['streamType'] = $streamType;

        return $this;
    }

    /**
     * Gets keepAliveTime
     * @return string
     */
    public function getKeepAliveTime()
    {
        return $this->container['keepAliveTime'];
    }

    /**
     * Sets keepAliveTime
     * @param string $keepAliveTime
     * @return $this
     */
    public function setKeepAliveTime($keepAliveTime)
    {
        $this->container['keepAliveTime'] = $keepAliveTime;

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
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets baseClass
     * @return string
     */
    public function getBaseClass()
    {
        return $this->container['baseClass'];
    }

    /**
     * Sets baseClass
     * @param string $baseClass
     * @return $this
     */
    public function setBaseClass($baseClass)
    {
        $this->container['baseClass'] = $baseClass;

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
     * Gets connectionTimeout
     * @return string
     */
    public function getConnectionTimeout()
    {
        return $this->container['connectionTimeout'];
    }

    /**
     * Sets connectionTimeout
     * @param string $connectionTimeout
     * @return $this
     */
    public function setConnectionTimeout($connectionTimeout)
    {
        $this->container['connectionTimeout'] = $connectionTimeout;

        return $this;
}

}
