<?php
/**
 * SourceControlConfig
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
 * SourceControlConfig Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SourceControlConfig extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SourceControlConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'featureList' => 'string[]',
        'serverName' => 'string',
        'model' => 'string',
        'saveFieldList' => 'string[]',
        'version' => 'string',
        'firmware' => 'string',
        'manufacturer' => 'string'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'featureList' => 'featureList',
        'serverName' => 'serverName',
        'model' => 'model',
        'saveFieldList' => 'saveFieldList',
        'version' => 'version',
        'firmware' => 'firmware',
        'manufacturer' => 'manufacturer'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'featureList' => 'setFeatureList',
        'serverName' => 'setServerName',
        'model' => 'setModel',
        'saveFieldList' => 'setSaveFieldList',
        'version' => 'setVersion',
        'firmware' => 'setFirmware',
        'manufacturer' => 'setManufacturer'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'featureList' => 'getFeatureList',
        'serverName' => 'getServerName',
        'model' => 'getModel',
        'saveFieldList' => 'getSaveFieldList',
        'version' => 'getVersion',
        'firmware' => 'getFirmware',
        'manufacturer' => 'getManufacturer'
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
        $this->container['featureList'] = isset($data['featureList']) ? $data['featureList'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['saveFieldList'] = isset($data['saveFieldList']) ? $data['saveFieldList'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['firmware'] = isset($data['firmware']) ? $data['firmware'] : null;
        $this->container['manufacturer'] = isset($data['manufacturer']) ? $data['manufacturer'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['featureList'] === null) {
            $invalid_properties[] = "'featureList' can't be null";
        }
        if ($this->container['serverName'] === null) {
            $invalid_properties[] = "'serverName' can't be null";
        }
        if ($this->container['model'] === null) {
            $invalid_properties[] = "'model' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalid_properties[] = "'version' can't be null";
        }
        if ($this->container['firmware'] === null) {
            $invalid_properties[] = "'firmware' can't be null";
        }
        if ($this->container['manufacturer'] === null) {
            $invalid_properties[] = "'manufacturer' can't be null";
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
        if ($this->container['featureList'] === null) {
            return false;
        }
        if ($this->container['serverName'] === null) {
            return false;
        }
        if ($this->container['model'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        if ($this->container['firmware'] === null) {
            return false;
        }
        if ($this->container['manufacturer'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets featureList
     * @return string[]
     */
    public function getFeatureList()
    {
        return $this->container['featureList'];
    }

    /**
     * Sets featureList
     * @param string[] $featureList
     * @return $this
     */
    public function setFeatureList($featureList)
    {
        $this->container['featureList'] = $featureList;

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
     * Gets model
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     * @param string $model
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

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
     * Gets firmware
     * @return string
     */
    public function getFirmware()
    {
        return $this->container['firmware'];
    }

    /**
     * Sets firmware
     * @param string $firmware
     * @return $this
     */
    public function setFirmware($firmware)
    {
        $this->container['firmware'] = $firmware;

        return $this;
    }

    /**
     * Gets manufacturer
     * @return string
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     * @param string $manufacturer
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
}

}
