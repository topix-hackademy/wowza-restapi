<?php
/**
 * InstanceConfig
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
 * InstanceConfig Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InstanceConfig extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'InstanceConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'incomingStreams' => IncomingStreamConfig::class.'[]',
        'name' => 'string',
        'outgoingStreams' => OutgoingStreamConfig::class.'[]',
        'serverName' => 'string',
        'streamGroups' => StreamGroupConfig::class.'[]',
        'saveFieldList' => 'string[]',
        'version' => 'string',
        'recorders' => StreamRecorderConfig::class.'[]'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'incomingStreams' => 'incomingStreams',
        'name' => 'name',
        'outgoingStreams' => 'outgoingStreams',
        'serverName' => 'serverName',
        'streamGroups' => 'streamGroups',
        'saveFieldList' => 'saveFieldList',
        'version' => 'version',
        'recorders' => 'recorders'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'incomingStreams' => 'setIncomingStreams',
        'name' => 'setName',
        'outgoingStreams' => 'setOutgoingStreams',
        'serverName' => 'setServerName',
        'streamGroups' => 'setStreamGroups',
        'saveFieldList' => 'setSaveFieldList',
        'version' => 'setVersion',
        'recorders' => 'setRecorders'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'incomingStreams' => 'getIncomingStreams',
        'name' => 'getName',
        'outgoingStreams' => 'getOutgoingStreams',
        'serverName' => 'getServerName',
        'streamGroups' => 'getStreamGroups',
        'saveFieldList' => 'getSaveFieldList',
        'version' => 'getVersion',
        'recorders' => 'getRecorders'
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
        $this->container['incomingStreams'] = isset($data['incomingStreams']) ? $data['incomingStreams'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['outgoingStreams'] = isset($data['outgoingStreams']) ? $data['outgoingStreams'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['streamGroups'] = isset($data['streamGroups']) ? $data['streamGroups'] : null;
        $this->container['saveFieldList'] = isset($data['saveFieldList']) ? $data['saveFieldList'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['recorders'] = isset($data['recorders']) ? $data['recorders'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['incomingStreams'] === null) {
            $invalid_properties[] = "'incomingStreams' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['outgoingStreams'] === null) {
            $invalid_properties[] = "'outgoingStreams' can't be null";
        }
        if ($this->container['serverName'] === null) {
            $invalid_properties[] = "'serverName' can't be null";
        }
        if ($this->container['streamGroups'] === null) {
            $invalid_properties[] = "'streamGroups' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalid_properties[] = "'version' can't be null";
        }
        if ($this->container['recorders'] === null) {
            $invalid_properties[] = "'recorders' can't be null";
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
        if ($this->container['incomingStreams'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['outgoingStreams'] === null) {
            return false;
        }
        if ($this->container['serverName'] === null) {
            return false;
        }
        if ($this->container['streamGroups'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        if ($this->container['recorders'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets incomingStreams
     * @return  IncomingStreamConfig[]
     */
    public function getIncomingStreams()
    {
        return $this->container['incomingStreams'];
    }

    /**
     * Sets incomingStreams
     * @param IncomingStreamConfig[] $incomingStreams
     * @return $this
     */
    public function setIncomingStreams($incomingStreams)
    {
        $this->container['incomingStreams'] = $incomingStreams;

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
     * Gets outgoingStreams
     * @return  OutgoingStreamConfig[]
     */
    public function getOutgoingStreams()
    {
        return $this->container['outgoingStreams'];
    }

    /**
     * Sets outgoingStreams
     * @param OutgoingStreamConfig[] $outgoingStreams
     * @return $this
     */
    public function setOutgoingStreams($outgoingStreams)
    {
        $this->container['outgoingStreams'] = $outgoingStreams;

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
     * Gets streamGroups
     * @return  StreamGroupConfig[]
     */
    public function getStreamGroups()
    {
        return $this->container['streamGroups'];
    }

    /**
     * Sets streamGroups
     * @param StreamGroupConfig[] $streamGroups
     * @return $this
     */
    public function setStreamGroups($streamGroups)
    {
        $this->container['streamGroups'] = $streamGroups;

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
     * Gets recorders
     * @return  StreamRecorderConfig[]
     */
    public function getRecorders()
    {
        return $this->container['recorders'];
    }

    /**
     * Sets recorders
     * @param StreamRecorderConfig[] $recorders
     * @return $this
     */
    public function setRecorders($recorders)
    {
        $this->container['recorders'] = $recorders;

        return $this;
}

}
