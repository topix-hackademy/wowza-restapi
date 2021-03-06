<?php
/**
 * VHostTuneConfig
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
 * VHostTuneConfig Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VHostTuneConfig extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'VHostTuneConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'multicastOutgoingProcessorCountAutoValue' => 'string',
        'netConnectionsProcessorCountAutoValue' => 'string',
        'idleWorkerCountAutoValue' => 'string',
        'unicastIncomingProcessorCountAutoValue' => 'string',
        'unicastOutgoingProcessorCountAutoValue' => 'string',
        'mediaCasterProcessorCount' => 'string',
        'serverName' => 'string',
        'multicastOutgoingProcessorCount' => 'string',
        'multicastIncomingProcessorCountAutoValue' => 'string',
        'version' => 'string',
        'netConnectionsProcessorCount' => 'string',
        'unicastOutgoingProcessorCount' => 'string',
        'mediaCasterProcessorCountAutoValue' => 'string',
        'idleWorkerCount' => 'string',
        'transportThreadPoolSize' => 'int',
        'clientIdleFrequency' => 'int',
        'name' => 'string',
        'unicastIncomingProcessorCount' => 'string',
        'saveFieldList' => 'string[]',
        'multicastIncomingProcessorCount' => 'string',
        'rtpIdleFrequency' => 'int',
        'handlerThreadPoolSize' => 'int'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'multicastOutgoingProcessorCountAutoValue' => 'multicastOutgoingProcessorCountAutoValue',
        'netConnectionsProcessorCountAutoValue' => 'netConnectionsProcessorCountAutoValue',
        'idleWorkerCountAutoValue' => 'idleWorkerCountAutoValue',
        'unicastIncomingProcessorCountAutoValue' => 'unicastIncomingProcessorCountAutoValue',
        'unicastOutgoingProcessorCountAutoValue' => 'unicastOutgoingProcessorCountAutoValue',
        'mediaCasterProcessorCount' => 'mediaCasterProcessorCount',
        'serverName' => 'serverName',
        'multicastOutgoingProcessorCount' => 'multicastOutgoingProcessorCount',
        'multicastIncomingProcessorCountAutoValue' => 'multicastIncomingProcessorCountAutoValue',
        'version' => 'version',
        'netConnectionsProcessorCount' => 'netConnectionsProcessorCount',
        'unicastOutgoingProcessorCount' => 'unicastOutgoingProcessorCount',
        'mediaCasterProcessorCountAutoValue' => 'mediaCasterProcessorCountAutoValue',
        'idleWorkerCount' => 'idleWorkerCount',
        'transportThreadPoolSize' => 'transportThreadPoolSize',
        'clientIdleFrequency' => 'clientIdleFrequency',
        'name' => 'name',
        'unicastIncomingProcessorCount' => 'unicastIncomingProcessorCount',
        'saveFieldList' => 'saveFieldList',
        'multicastIncomingProcessorCount' => 'multicastIncomingProcessorCount',
        'rtpIdleFrequency' => 'rtpIdleFrequency',
        'handlerThreadPoolSize' => 'handlerThreadPoolSize'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'multicastOutgoingProcessorCountAutoValue' => 'setMulticastOutgoingProcessorCountAutoValue',
        'netConnectionsProcessorCountAutoValue' => 'setNetConnectionsProcessorCountAutoValue',
        'idleWorkerCountAutoValue' => 'setIdleWorkerCountAutoValue',
        'unicastIncomingProcessorCountAutoValue' => 'setUnicastIncomingProcessorCountAutoValue',
        'unicastOutgoingProcessorCountAutoValue' => 'setUnicastOutgoingProcessorCountAutoValue',
        'mediaCasterProcessorCount' => 'setMediaCasterProcessorCount',
        'serverName' => 'setServerName',
        'multicastOutgoingProcessorCount' => 'setMulticastOutgoingProcessorCount',
        'multicastIncomingProcessorCountAutoValue' => 'setMulticastIncomingProcessorCountAutoValue',
        'version' => 'setVersion',
        'netConnectionsProcessorCount' => 'setNetConnectionsProcessorCount',
        'unicastOutgoingProcessorCount' => 'setUnicastOutgoingProcessorCount',
        'mediaCasterProcessorCountAutoValue' => 'setMediaCasterProcessorCountAutoValue',
        'idleWorkerCount' => 'setIdleWorkerCount',
        'transportThreadPoolSize' => 'setTransportThreadPoolSize',
        'clientIdleFrequency' => 'setClientIdleFrequency',
        'name' => 'setName',
        'unicastIncomingProcessorCount' => 'setUnicastIncomingProcessorCount',
        'saveFieldList' => 'setSaveFieldList',
        'multicastIncomingProcessorCount' => 'setMulticastIncomingProcessorCount',
        'rtpIdleFrequency' => 'setRtpIdleFrequency',
        'handlerThreadPoolSize' => 'setHandlerThreadPoolSize'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'multicastOutgoingProcessorCountAutoValue' => 'getMulticastOutgoingProcessorCountAutoValue',
        'netConnectionsProcessorCountAutoValue' => 'getNetConnectionsProcessorCountAutoValue',
        'idleWorkerCountAutoValue' => 'getIdleWorkerCountAutoValue',
        'unicastIncomingProcessorCountAutoValue' => 'getUnicastIncomingProcessorCountAutoValue',
        'unicastOutgoingProcessorCountAutoValue' => 'getUnicastOutgoingProcessorCountAutoValue',
        'mediaCasterProcessorCount' => 'getMediaCasterProcessorCount',
        'serverName' => 'getServerName',
        'multicastOutgoingProcessorCount' => 'getMulticastOutgoingProcessorCount',
        'multicastIncomingProcessorCountAutoValue' => 'getMulticastIncomingProcessorCountAutoValue',
        'version' => 'getVersion',
        'netConnectionsProcessorCount' => 'getNetConnectionsProcessorCount',
        'unicastOutgoingProcessorCount' => 'getUnicastOutgoingProcessorCount',
        'mediaCasterProcessorCountAutoValue' => 'getMediaCasterProcessorCountAutoValue',
        'idleWorkerCount' => 'getIdleWorkerCount',
        'transportThreadPoolSize' => 'getTransportThreadPoolSize',
        'clientIdleFrequency' => 'getClientIdleFrequency',
        'name' => 'getName',
        'unicastIncomingProcessorCount' => 'getUnicastIncomingProcessorCount',
        'saveFieldList' => 'getSaveFieldList',
        'multicastIncomingProcessorCount' => 'getMulticastIncomingProcessorCount',
        'rtpIdleFrequency' => 'getRtpIdleFrequency',
        'handlerThreadPoolSize' => 'getHandlerThreadPoolSize'
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
        $this->container['multicastOutgoingProcessorCountAutoValue'] = isset($data['multicastOutgoingProcessorCountAutoValue']) ? $data['multicastOutgoingProcessorCountAutoValue'] : null;
        $this->container['netConnectionsProcessorCountAutoValue'] = isset($data['netConnectionsProcessorCountAutoValue']) ? $data['netConnectionsProcessorCountAutoValue'] : null;
        $this->container['idleWorkerCountAutoValue'] = isset($data['idleWorkerCountAutoValue']) ? $data['idleWorkerCountAutoValue'] : null;
        $this->container['unicastIncomingProcessorCountAutoValue'] = isset($data['unicastIncomingProcessorCountAutoValue']) ? $data['unicastIncomingProcessorCountAutoValue'] : null;
        $this->container['unicastOutgoingProcessorCountAutoValue'] = isset($data['unicastOutgoingProcessorCountAutoValue']) ? $data['unicastOutgoingProcessorCountAutoValue'] : null;
        $this->container['mediaCasterProcessorCount'] = isset($data['mediaCasterProcessorCount']) ? $data['mediaCasterProcessorCount'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['multicastOutgoingProcessorCount'] = isset($data['multicastOutgoingProcessorCount']) ? $data['multicastOutgoingProcessorCount'] : null;
        $this->container['multicastIncomingProcessorCountAutoValue'] = isset($data['multicastIncomingProcessorCountAutoValue']) ? $data['multicastIncomingProcessorCountAutoValue'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['netConnectionsProcessorCount'] = isset($data['netConnectionsProcessorCount']) ? $data['netConnectionsProcessorCount'] : null;
        $this->container['unicastOutgoingProcessorCount'] = isset($data['unicastOutgoingProcessorCount']) ? $data['unicastOutgoingProcessorCount'] : null;
        $this->container['mediaCasterProcessorCountAutoValue'] = isset($data['mediaCasterProcessorCountAutoValue']) ? $data['mediaCasterProcessorCountAutoValue'] : null;
        $this->container['idleWorkerCount'] = isset($data['idleWorkerCount']) ? $data['idleWorkerCount'] : null;
        $this->container['transportThreadPoolSize'] = isset($data['transportThreadPoolSize']) ? $data['transportThreadPoolSize'] : null;
        $this->container['clientIdleFrequency'] = isset($data['clientIdleFrequency']) ? $data['clientIdleFrequency'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['unicastIncomingProcessorCount'] = isset($data['unicastIncomingProcessorCount']) ? $data['unicastIncomingProcessorCount'] : null;
        $this->container['saveFieldList'] = isset($data['saveFieldList']) ? $data['saveFieldList'] : null;
        $this->container['multicastIncomingProcessorCount'] = isset($data['multicastIncomingProcessorCount']) ? $data['multicastIncomingProcessorCount'] : null;
        $this->container['rtpIdleFrequency'] = isset($data['rtpIdleFrequency']) ? $data['rtpIdleFrequency'] : null;
        $this->container['handlerThreadPoolSize'] = isset($data['handlerThreadPoolSize']) ? $data['handlerThreadPoolSize'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['multicastOutgoingProcessorCountAutoValue'] === null) {
            $invalid_properties[] = "'multicastOutgoingProcessorCountAutoValue' can't be null";
        }
        if ($this->container['netConnectionsProcessorCountAutoValue'] === null) {
            $invalid_properties[] = "'netConnectionsProcessorCountAutoValue' can't be null";
        }
        if ($this->container['idleWorkerCountAutoValue'] === null) {
            $invalid_properties[] = "'idleWorkerCountAutoValue' can't be null";
        }
        if ($this->container['unicastIncomingProcessorCountAutoValue'] === null) {
            $invalid_properties[] = "'unicastIncomingProcessorCountAutoValue' can't be null";
        }
        if ($this->container['unicastOutgoingProcessorCountAutoValue'] === null) {
            $invalid_properties[] = "'unicastOutgoingProcessorCountAutoValue' can't be null";
        }
        if ($this->container['mediaCasterProcessorCount'] === null) {
            $invalid_properties[] = "'mediaCasterProcessorCount' can't be null";
        }
        if ($this->container['serverName'] === null) {
            $invalid_properties[] = "'serverName' can't be null";
        }
        if ($this->container['multicastOutgoingProcessorCount'] === null) {
            $invalid_properties[] = "'multicastOutgoingProcessorCount' can't be null";
        }
        if ($this->container['multicastIncomingProcessorCountAutoValue'] === null) {
            $invalid_properties[] = "'multicastIncomingProcessorCountAutoValue' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalid_properties[] = "'version' can't be null";
        }
        if ($this->container['netConnectionsProcessorCount'] === null) {
            $invalid_properties[] = "'netConnectionsProcessorCount' can't be null";
        }
        if ($this->container['unicastOutgoingProcessorCount'] === null) {
            $invalid_properties[] = "'unicastOutgoingProcessorCount' can't be null";
        }
        if ($this->container['mediaCasterProcessorCountAutoValue'] === null) {
            $invalid_properties[] = "'mediaCasterProcessorCountAutoValue' can't be null";
        }
        if ($this->container['idleWorkerCount'] === null) {
            $invalid_properties[] = "'idleWorkerCount' can't be null";
        }
        if ($this->container['transportThreadPoolSize'] === null) {
            $invalid_properties[] = "'transportThreadPoolSize' can't be null";
        }
        if ($this->container['clientIdleFrequency'] === null) {
            $invalid_properties[] = "'clientIdleFrequency' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['unicastIncomingProcessorCount'] === null) {
            $invalid_properties[] = "'unicastIncomingProcessorCount' can't be null";
        }
        if ($this->container['multicastIncomingProcessorCount'] === null) {
            $invalid_properties[] = "'multicastIncomingProcessorCount' can't be null";
        }
        if ($this->container['rtpIdleFrequency'] === null) {
            $invalid_properties[] = "'rtpIdleFrequency' can't be null";
        }
        if ($this->container['handlerThreadPoolSize'] === null) {
            $invalid_properties[] = "'handlerThreadPoolSize' can't be null";
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
        if ($this->container['multicastOutgoingProcessorCountAutoValue'] === null) {
            return false;
        }
        if ($this->container['netConnectionsProcessorCountAutoValue'] === null) {
            return false;
        }
        if ($this->container['idleWorkerCountAutoValue'] === null) {
            return false;
        }
        if ($this->container['unicastIncomingProcessorCountAutoValue'] === null) {
            return false;
        }
        if ($this->container['unicastOutgoingProcessorCountAutoValue'] === null) {
            return false;
        }
        if ($this->container['mediaCasterProcessorCount'] === null) {
            return false;
        }
        if ($this->container['serverName'] === null) {
            return false;
        }
        if ($this->container['multicastOutgoingProcessorCount'] === null) {
            return false;
        }
        if ($this->container['multicastIncomingProcessorCountAutoValue'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        if ($this->container['netConnectionsProcessorCount'] === null) {
            return false;
        }
        if ($this->container['unicastOutgoingProcessorCount'] === null) {
            return false;
        }
        if ($this->container['mediaCasterProcessorCountAutoValue'] === null) {
            return false;
        }
        if ($this->container['idleWorkerCount'] === null) {
            return false;
        }
        if ($this->container['transportThreadPoolSize'] === null) {
            return false;
        }
        if ($this->container['clientIdleFrequency'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['unicastIncomingProcessorCount'] === null) {
            return false;
        }
        if ($this->container['multicastIncomingProcessorCount'] === null) {
            return false;
        }
        if ($this->container['rtpIdleFrequency'] === null) {
            return false;
        }
        if ($this->container['handlerThreadPoolSize'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets multicastOutgoingProcessorCountAutoValue
     * @return string
     */
    public function getMulticastOutgoingProcessorCountAutoValue()
    {
        return $this->container['multicastOutgoingProcessorCountAutoValue'];
    }

    /**
     * Sets multicastOutgoingProcessorCountAutoValue
     * @param string $multicastOutgoingProcessorCountAutoValue
     * @return $this
     */
    public function setMulticastOutgoingProcessorCountAutoValue($multicastOutgoingProcessorCountAutoValue)
    {
        $this->container['multicastOutgoingProcessorCountAutoValue'] = $multicastOutgoingProcessorCountAutoValue;

        return $this;
    }

    /**
     * Gets netConnectionsProcessorCountAutoValue
     * @return string
     */
    public function getNetConnectionsProcessorCountAutoValue()
    {
        return $this->container['netConnectionsProcessorCountAutoValue'];
    }

    /**
     * Sets netConnectionsProcessorCountAutoValue
     * @param string $netConnectionsProcessorCountAutoValue
     * @return $this
     */
    public function setNetConnectionsProcessorCountAutoValue($netConnectionsProcessorCountAutoValue)
    {
        $this->container['netConnectionsProcessorCountAutoValue'] = $netConnectionsProcessorCountAutoValue;

        return $this;
    }

    /**
     * Gets idleWorkerCountAutoValue
     * @return string
     */
    public function getIdleWorkerCountAutoValue()
    {
        return $this->container['idleWorkerCountAutoValue'];
    }

    /**
     * Sets idleWorkerCountAutoValue
     * @param string $idleWorkerCountAutoValue
     * @return $this
     */
    public function setIdleWorkerCountAutoValue($idleWorkerCountAutoValue)
    {
        $this->container['idleWorkerCountAutoValue'] = $idleWorkerCountAutoValue;

        return $this;
    }

    /**
     * Gets unicastIncomingProcessorCountAutoValue
     * @return string
     */
    public function getUnicastIncomingProcessorCountAutoValue()
    {
        return $this->container['unicastIncomingProcessorCountAutoValue'];
    }

    /**
     * Sets unicastIncomingProcessorCountAutoValue
     * @param string $unicastIncomingProcessorCountAutoValue
     * @return $this
     */
    public function setUnicastIncomingProcessorCountAutoValue($unicastIncomingProcessorCountAutoValue)
    {
        $this->container['unicastIncomingProcessorCountAutoValue'] = $unicastIncomingProcessorCountAutoValue;

        return $this;
    }

    /**
     * Gets unicastOutgoingProcessorCountAutoValue
     * @return string
     */
    public function getUnicastOutgoingProcessorCountAutoValue()
    {
        return $this->container['unicastOutgoingProcessorCountAutoValue'];
    }

    /**
     * Sets unicastOutgoingProcessorCountAutoValue
     * @param string $unicastOutgoingProcessorCountAutoValue
     * @return $this
     */
    public function setUnicastOutgoingProcessorCountAutoValue($unicastOutgoingProcessorCountAutoValue)
    {
        $this->container['unicastOutgoingProcessorCountAutoValue'] = $unicastOutgoingProcessorCountAutoValue;

        return $this;
    }

    /**
     * Gets mediaCasterProcessorCount
     * @return string
     */
    public function getMediaCasterProcessorCount()
    {
        return $this->container['mediaCasterProcessorCount'];
    }

    /**
     * Sets mediaCasterProcessorCount
     * @param string $mediaCasterProcessorCount
     * @return $this
     */
    public function setMediaCasterProcessorCount($mediaCasterProcessorCount)
    {
        $this->container['mediaCasterProcessorCount'] = $mediaCasterProcessorCount;

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
     * Gets multicastOutgoingProcessorCount
     * @return string
     */
    public function getMulticastOutgoingProcessorCount()
    {
        return $this->container['multicastOutgoingProcessorCount'];
    }

    /**
     * Sets multicastOutgoingProcessorCount
     * @param string $multicastOutgoingProcessorCount
     * @return $this
     */
    public function setMulticastOutgoingProcessorCount($multicastOutgoingProcessorCount)
    {
        $this->container['multicastOutgoingProcessorCount'] = $multicastOutgoingProcessorCount;

        return $this;
    }

    /**
     * Gets multicastIncomingProcessorCountAutoValue
     * @return string
     */
    public function getMulticastIncomingProcessorCountAutoValue()
    {
        return $this->container['multicastIncomingProcessorCountAutoValue'];
    }

    /**
     * Sets multicastIncomingProcessorCountAutoValue
     * @param string $multicastIncomingProcessorCountAutoValue
     * @return $this
     */
    public function setMulticastIncomingProcessorCountAutoValue($multicastIncomingProcessorCountAutoValue)
    {
        $this->container['multicastIncomingProcessorCountAutoValue'] = $multicastIncomingProcessorCountAutoValue;

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
     * Gets netConnectionsProcessorCount
     * @return string
     */
    public function getNetConnectionsProcessorCount()
    {
        return $this->container['netConnectionsProcessorCount'];
    }

    /**
     * Sets netConnectionsProcessorCount
     * @param string $netConnectionsProcessorCount
     * @return $this
     */
    public function setNetConnectionsProcessorCount($netConnectionsProcessorCount)
    {
        $this->container['netConnectionsProcessorCount'] = $netConnectionsProcessorCount;

        return $this;
    }

    /**
     * Gets unicastOutgoingProcessorCount
     * @return string
     */
    public function getUnicastOutgoingProcessorCount()
    {
        return $this->container['unicastOutgoingProcessorCount'];
    }

    /**
     * Sets unicastOutgoingProcessorCount
     * @param string $unicastOutgoingProcessorCount
     * @return $this
     */
    public function setUnicastOutgoingProcessorCount($unicastOutgoingProcessorCount)
    {
        $this->container['unicastOutgoingProcessorCount'] = $unicastOutgoingProcessorCount;

        return $this;
    }

    /**
     * Gets mediaCasterProcessorCountAutoValue
     * @return string
     */
    public function getMediaCasterProcessorCountAutoValue()
    {
        return $this->container['mediaCasterProcessorCountAutoValue'];
    }

    /**
     * Sets mediaCasterProcessorCountAutoValue
     * @param string $mediaCasterProcessorCountAutoValue
     * @return $this
     */
    public function setMediaCasterProcessorCountAutoValue($mediaCasterProcessorCountAutoValue)
    {
        $this->container['mediaCasterProcessorCountAutoValue'] = $mediaCasterProcessorCountAutoValue;

        return $this;
    }

    /**
     * Gets idleWorkerCount
     * @return string
     */
    public function getIdleWorkerCount()
    {
        return $this->container['idleWorkerCount'];
    }

    /**
     * Sets idleWorkerCount
     * @param string $idleWorkerCount
     * @return $this
     */
    public function setIdleWorkerCount($idleWorkerCount)
    {
        $this->container['idleWorkerCount'] = $idleWorkerCount;

        return $this;
    }

    /**
     * Gets transportThreadPoolSize
     * @return int
     */
    public function getTransportThreadPoolSize()
    {
        return $this->container['transportThreadPoolSize'];
    }

    /**
     * Sets transportThreadPoolSize
     * @param int $transportThreadPoolSize
     * @return $this
     */
    public function setTransportThreadPoolSize($transportThreadPoolSize)
    {
        $this->container['transportThreadPoolSize'] = $transportThreadPoolSize;

        return $this;
    }

    /**
     * Gets clientIdleFrequency
     * @return int
     */
    public function getClientIdleFrequency()
    {
        return $this->container['clientIdleFrequency'];
    }

    /**
     * Sets clientIdleFrequency
     * @param int $clientIdleFrequency
     * @return $this
     */
    public function setClientIdleFrequency($clientIdleFrequency)
    {
        $this->container['clientIdleFrequency'] = $clientIdleFrequency;

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
     * Gets unicastIncomingProcessorCount
     * @return string
     */
    public function getUnicastIncomingProcessorCount()
    {
        return $this->container['unicastIncomingProcessorCount'];
    }

    /**
     * Sets unicastIncomingProcessorCount
     * @param string $unicastIncomingProcessorCount
     * @return $this
     */
    public function setUnicastIncomingProcessorCount($unicastIncomingProcessorCount)
    {
        $this->container['unicastIncomingProcessorCount'] = $unicastIncomingProcessorCount;

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
     * Gets multicastIncomingProcessorCount
     * @return string
     */
    public function getMulticastIncomingProcessorCount()
    {
        return $this->container['multicastIncomingProcessorCount'];
    }

    /**
     * Sets multicastIncomingProcessorCount
     * @param string $multicastIncomingProcessorCount
     * @return $this
     */
    public function setMulticastIncomingProcessorCount($multicastIncomingProcessorCount)
    {
        $this->container['multicastIncomingProcessorCount'] = $multicastIncomingProcessorCount;

        return $this;
    }

    /**
     * Gets rtpIdleFrequency
     * @return int
     */
    public function getRtpIdleFrequency()
    {
        return $this->container['rtpIdleFrequency'];
    }

    /**
     * Sets rtpIdleFrequency
     * @param int $rtpIdleFrequency
     * @return $this
     */
    public function setRtpIdleFrequency($rtpIdleFrequency)
    {
        $this->container['rtpIdleFrequency'] = $rtpIdleFrequency;

        return $this;
    }

    /**
     * Gets handlerThreadPoolSize
     * @return int
     */
    public function getHandlerThreadPoolSize()
    {
        return $this->container['handlerThreadPoolSize'];
    }

    /**
     * Sets handlerThreadPoolSize
     * @param int $handlerThreadPoolSize
     * @return $this
     */
    public function setHandlerThreadPoolSize($handlerThreadPoolSize)
    {
        $this->container['handlerThreadPoolSize'] = $handlerThreadPoolSize;

        return $this;
}

}
