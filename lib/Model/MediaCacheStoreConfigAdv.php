<?php
/**
 * MediaCacheStoreConfigAdv
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
 * MediaCacheStoreConfigAdv Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MediaCacheStoreConfigAdv extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MediaCacheStoreConfigAdv';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'advancedSettings' => AdvancedSetting::class.'[]',
        'serverName' => 'string',
        'saveFieldList' => 'string[]',
        'version' => 'string'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'advancedSettings' => 'advancedSettings',
        'serverName' => 'serverName',
        'saveFieldList' => 'saveFieldList',
        'version' => 'version'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'advancedSettings' => 'setAdvancedSettings',
        'serverName' => 'setServerName',
        'saveFieldList' => 'setSaveFieldList',
        'version' => 'setVersion'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'advancedSettings' => 'getAdvancedSettings',
        'serverName' => 'getServerName',
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
        $this->container['advancedSettings'] = isset($data['advancedSettings']) ? $data['advancedSettings'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
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
        if ($this->container['advancedSettings'] === null) {
            $invalid_properties[] = "'advancedSettings' can't be null";
        }
        if ($this->container['serverName'] === null) {
            $invalid_properties[] = "'serverName' can't be null";
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
        if ($this->container['advancedSettings'] === null) {
            return false;
        }
        if ($this->container['serverName'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets advancedSettings
     * @return  AdvancedSetting[]
     */
    public function getAdvancedSettings()
    {
        return $this->container['advancedSettings'];
    }

    /**
     * Sets advancedSettings
     * @param AdvancedSetting[] $advancedSettings
     * @return $this
     */
    public function setAdvancedSettings($advancedSettings)
    {
        $this->container['advancedSettings'] = $advancedSettings;

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

}
