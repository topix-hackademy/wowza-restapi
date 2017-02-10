<?php
/**
 * HostPortConfig
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
 * HostPortConfig Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class HostPortConfig extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'HostPortConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'sslDomainToKeyStoreMapPath' => 'string',
        'ipAddress' => 'string',
        'serverName' => 'string',
        'sslKeyStoreType' => 'string',
        'sslAlgorithm' => 'string',
        'type' => 'string',
        'sslKeyStorePath' => 'string',
        'version' => 'string',
        'ssl' => 'string[]',
        'sslEnable' => 'bool',
        'sslKeyStorePassword' => 'string',
        'sslProtocols' => 'string[]',
        'port' => 'string',
        'name' => 'string',
        'sslProtocol' => 'string',
        'saveFieldList' => 'string[]'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'sslDomainToKeyStoreMapPath' => 'sslDomainToKeyStoreMapPath',
        'ipAddress' => 'ipAddress',
        'serverName' => 'serverName',
        'sslKeyStoreType' => 'sslKeyStoreType',
        'sslAlgorithm' => 'sslAlgorithm',
        'type' => 'type',
        'sslKeyStorePath' => 'sslKeyStorePath',
        'version' => 'version',
        'ssl' => 'ssl',
        'sslEnable' => 'sslEnable',
        'sslKeyStorePassword' => 'sslKeyStorePassword',
        'sslProtocols' => 'sslProtocols',
        'port' => 'port',
        'name' => 'name',
        'sslProtocol' => 'sslProtocol',
        'saveFieldList' => 'saveFieldList'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'sslDomainToKeyStoreMapPath' => 'setSslDomainToKeyStoreMapPath',
        'ipAddress' => 'setIpAddress',
        'serverName' => 'setServerName',
        'sslKeyStoreType' => 'setSslKeyStoreType',
        'sslAlgorithm' => 'setSslAlgorithm',
        'type' => 'setType',
        'sslKeyStorePath' => 'setSslKeyStorePath',
        'version' => 'setVersion',
        'ssl' => 'setSsl',
        'sslEnable' => 'setSslEnable',
        'sslKeyStorePassword' => 'setSslKeyStorePassword',
        'sslProtocols' => 'setSslProtocols',
        'port' => 'setPort',
        'name' => 'setName',
        'sslProtocol' => 'setSslProtocol',
        'saveFieldList' => 'setSaveFieldList'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'sslDomainToKeyStoreMapPath' => 'getSslDomainToKeyStoreMapPath',
        'ipAddress' => 'getIpAddress',
        'serverName' => 'getServerName',
        'sslKeyStoreType' => 'getSslKeyStoreType',
        'sslAlgorithm' => 'getSslAlgorithm',
        'type' => 'getType',
        'sslKeyStorePath' => 'getSslKeyStorePath',
        'version' => 'getVersion',
        'ssl' => 'getSsl',
        'sslEnable' => 'getSslEnable',
        'sslKeyStorePassword' => 'getSslKeyStorePassword',
        'sslProtocols' => 'getSslProtocols',
        'port' => 'getPort',
        'name' => 'getName',
        'sslProtocol' => 'getSslProtocol',
        'saveFieldList' => 'getSaveFieldList'
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
        $this->container['sslDomainToKeyStoreMapPath'] = isset($data['sslDomainToKeyStoreMapPath']) ? $data['sslDomainToKeyStoreMapPath'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['sslKeyStoreType'] = isset($data['sslKeyStoreType']) ? $data['sslKeyStoreType'] : null;
        $this->container['sslAlgorithm'] = isset($data['sslAlgorithm']) ? $data['sslAlgorithm'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['sslKeyStorePath'] = isset($data['sslKeyStorePath']) ? $data['sslKeyStorePath'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['ssl'] = isset($data['ssl']) ? $data['ssl'] : null;
        $this->container['sslEnable'] = isset($data['sslEnable']) ? $data['sslEnable'] : null;
        $this->container['sslKeyStorePassword'] = isset($data['sslKeyStorePassword']) ? $data['sslKeyStorePassword'] : null;
        $this->container['sslProtocols'] = isset($data['sslProtocols']) ? $data['sslProtocols'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sslProtocol'] = isset($data['sslProtocol']) ? $data['sslProtocol'] : null;
        $this->container['saveFieldList'] = isset($data['saveFieldList']) ? $data['saveFieldList'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['sslDomainToKeyStoreMapPath'] === null) {
            $invalid_properties[] = "'sslDomainToKeyStoreMapPath' can't be null";
        }
        if ($this->container['ipAddress'] === null) {
            $invalid_properties[] = "'ipAddress' can't be null";
        }
        if ($this->container['serverName'] === null) {
            $invalid_properties[] = "'serverName' can't be null";
        }
        if ($this->container['sslKeyStoreType'] === null) {
            $invalid_properties[] = "'sslKeyStoreType' can't be null";
        }
        if ($this->container['sslAlgorithm'] === null) {
            $invalid_properties[] = "'sslAlgorithm' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['sslKeyStorePath'] === null) {
            $invalid_properties[] = "'sslKeyStorePath' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalid_properties[] = "'version' can't be null";
        }
        if ($this->container['ssl'] === null) {
            $invalid_properties[] = "'ssl' can't be null";
        }
        if ($this->container['sslEnable'] === null) {
            $invalid_properties[] = "'sslEnable' can't be null";
        }
        if ($this->container['sslKeyStorePassword'] === null) {
            $invalid_properties[] = "'sslKeyStorePassword' can't be null";
        }
        if ($this->container['sslProtocols'] === null) {
            $invalid_properties[] = "'sslProtocols' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalid_properties[] = "'port' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['sslProtocol'] === null) {
            $invalid_properties[] = "'sslProtocol' can't be null";
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
        if ($this->container['sslDomainToKeyStoreMapPath'] === null) {
            return false;
        }
        if ($this->container['ipAddress'] === null) {
            return false;
        }
        if ($this->container['serverName'] === null) {
            return false;
        }
        if ($this->container['sslKeyStoreType'] === null) {
            return false;
        }
        if ($this->container['sslAlgorithm'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['sslKeyStorePath'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        if ($this->container['ssl'] === null) {
            return false;
        }
        if ($this->container['sslEnable'] === null) {
            return false;
        }
        if ($this->container['sslKeyStorePassword'] === null) {
            return false;
        }
        if ($this->container['sslProtocols'] === null) {
            return false;
        }
        if ($this->container['port'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['sslProtocol'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets sslDomainToKeyStoreMapPath
     * @return string
     */
    public function getSslDomainToKeyStoreMapPath()
    {
        return $this->container['sslDomainToKeyStoreMapPath'];
    }

    /**
     * Sets sslDomainToKeyStoreMapPath
     * @param string $sslDomainToKeyStoreMapPath
     * @return $this
     */
    public function setSslDomainToKeyStoreMapPath($sslDomainToKeyStoreMapPath)
    {
        $this->container['sslDomainToKeyStoreMapPath'] = $sslDomainToKeyStoreMapPath;

        return $this;
    }

    /**
     * Gets ipAddress
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
     * Sets ipAddress
     * @param string $ipAddress
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;

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
     * Gets sslKeyStoreType
     * @return string
     */
    public function getSslKeyStoreType()
    {
        return $this->container['sslKeyStoreType'];
    }

    /**
     * Sets sslKeyStoreType
     * @param string $sslKeyStoreType
     * @return $this
     */
    public function setSslKeyStoreType($sslKeyStoreType)
    {
        $this->container['sslKeyStoreType'] = $sslKeyStoreType;

        return $this;
    }

    /**
     * Gets sslAlgorithm
     * @return string
     */
    public function getSslAlgorithm()
    {
        return $this->container['sslAlgorithm'];
    }

    /**
     * Sets sslAlgorithm
     * @param string $sslAlgorithm
     * @return $this
     */
    public function setSslAlgorithm($sslAlgorithm)
    {
        $this->container['sslAlgorithm'] = $sslAlgorithm;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets sslKeyStorePath
     * @return string
     */
    public function getSslKeyStorePath()
    {
        return $this->container['sslKeyStorePath'];
    }

    /**
     * Sets sslKeyStorePath
     * @param string $sslKeyStorePath
     * @return $this
     */
    public function setSslKeyStorePath($sslKeyStorePath)
    {
        $this->container['sslKeyStorePath'] = $sslKeyStorePath;

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
     * Gets ssl
     * @return string[]
     */
    public function getSsl()
    {
        return $this->container['ssl'];
    }

    /**
     * Sets ssl
     * @param string[] $ssl
     * @return $this
     */
    public function setSsl($ssl)
    {
        $this->container['ssl'] = $ssl;

        return $this;
    }

    /**
     * Gets sslEnable
     * @return bool
     */
    public function getSslEnable()
    {
        return $this->container['sslEnable'];
    }

    /**
     * Sets sslEnable
     * @param bool $sslEnable
     * @return $this
     */
    public function setSslEnable($sslEnable)
    {
        $this->container['sslEnable'] = $sslEnable;

        return $this;
    }

    /**
     * Gets sslKeyStorePassword
     * @return string
     */
    public function getSslKeyStorePassword()
    {
        return $this->container['sslKeyStorePassword'];
    }

    /**
     * Sets sslKeyStorePassword
     * @param string $sslKeyStorePassword
     * @return $this
     */
    public function setSslKeyStorePassword($sslKeyStorePassword)
    {
        $this->container['sslKeyStorePassword'] = $sslKeyStorePassword;

        return $this;
    }

    /**
     * Gets sslProtocols
     * @return string[]
     */
    public function getSslProtocols()
    {
        return $this->container['sslProtocols'];
    }

    /**
     * Sets sslProtocols
     * @param string[] $sslProtocols
     * @return $this
     */
    public function setSslProtocols($sslProtocols)
    {
        $this->container['sslProtocols'] = $sslProtocols;

        return $this;
    }

    /**
     * Gets port
     * @return string
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     * @param string $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

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
     * Gets sslProtocol
     * @return string
     */
    public function getSslProtocol()
    {
        return $this->container['sslProtocol'];
    }

    /**
     * Sets sslProtocol
     * @param string $sslProtocol
     * @return $this
     */
    public function setSslProtocol($sslProtocol)
    {
        $this->container['sslProtocol'] = $sslProtocol;

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

}
