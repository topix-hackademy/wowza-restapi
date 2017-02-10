<?php
/**
 * DvrRESTConverterStoresAction
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
 * DvrRESTConverterStoresAction Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DvrRESTConverterStoresAction extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DvrRESTConverterStoresAction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'vhostName' => 'string',
        'instanceName' => 'string',
        'appName' => 'string',
        'serverName' => 'string'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'vhostName' => 'vhostName',
        'instanceName' => 'instanceName',
        'appName' => 'appName',
        'serverName' => 'serverName'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'vhostName' => 'setVhostName',
        'instanceName' => 'setInstanceName',
        'appName' => 'setAppName',
        'serverName' => 'setServerName'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'vhostName' => 'getVhostName',
        'instanceName' => 'getInstanceName',
        'appName' => 'getAppName',
        'serverName' => 'getServerName'
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
        $this->container['vhostName'] = isset($data['vhostName']) ? $data['vhostName'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['vhostName'] === null) {
            $invalid_properties[] = "'vhostName' can't be null";
        }
        if ($this->container['instanceName'] === null) {
            $invalid_properties[] = "'instanceName' can't be null";
        }
        if ($this->container['appName'] === null) {
            $invalid_properties[] = "'appName' can't be null";
        }
        if ($this->container['serverName'] === null) {
            $invalid_properties[] = "'serverName' can't be null";
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
        if ($this->container['vhostName'] === null) {
            return false;
        }
        if ($this->container['instanceName'] === null) {
            return false;
        }
        if ($this->container['appName'] === null) {
            return false;
        }
        if ($this->container['serverName'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets vhostName
     * @return string
     */
    public function getVhostName()
    {
        return $this->container['vhostName'];
    }

    /**
     * Sets vhostName
     * @param string $vhostName
     * @return $this
     */
    public function setVhostName($vhostName)
    {
        $this->container['vhostName'] = $vhostName;

        return $this;
    }

    /**
     * Gets instanceName
     * @return string
     */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
     * Sets instanceName
     * @param string $instanceName
     * @return $this
     */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;

        return $this;
    }

    /**
     * Gets appName
     * @return string
     */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
     * Sets appName
     * @param string $appName
     * @return $this
     */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;

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

}
