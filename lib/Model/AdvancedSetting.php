<?php
/**
 * AdvancedSetting
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
 * AdvancedSetting Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AdvancedSetting extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AdvancedSetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'sectionName' => 'string',
        'canRemove' => 'bool',
        'defaultValue' => 'string',
        'documented' => 'bool',
        'name' => 'string',
        'section' => 'string',
        'type' => 'string',
        'value' => 'string',
        'enabled' => 'bool'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'sectionName' => 'sectionName',
        'canRemove' => 'canRemove',
        'defaultValue' => 'defaultValue',
        'documented' => 'documented',
        'name' => 'name',
        'section' => 'section',
        'type' => 'type',
        'value' => 'value',
        'enabled' => 'enabled'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'sectionName' => 'setSectionName',
        'canRemove' => 'setCanRemove',
        'defaultValue' => 'setDefaultValue',
        'documented' => 'setDocumented',
        'name' => 'setName',
        'section' => 'setSection',
        'type' => 'setType',
        'value' => 'setValue',
        'enabled' => 'setEnabled'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'sectionName' => 'getSectionName',
        'canRemove' => 'getCanRemove',
        'defaultValue' => 'getDefaultValue',
        'documented' => 'getDocumented',
        'name' => 'getName',
        'section' => 'getSection',
        'type' => 'getType',
        'value' => 'getValue',
        'enabled' => 'getEnabled'
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
        $this->container['sectionName'] = isset($data['sectionName']) ? $data['sectionName'] : null;
        $this->container['canRemove'] = isset($data['canRemove']) ? $data['canRemove'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['documented'] = isset($data['documented']) ? $data['documented'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['section'] = isset($data['section']) ? $data['section'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['sectionName'] === null) {
            $invalid_properties[] = "'sectionName' can't be null";
        }
        if ($this->container['canRemove'] === null) {
            $invalid_properties[] = "'canRemove' can't be null";
        }
        if ($this->container['defaultValue'] === null) {
            $invalid_properties[] = "'defaultValue' can't be null";
        }
        if ($this->container['documented'] === null) {
            $invalid_properties[] = "'documented' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['section'] === null) {
            $invalid_properties[] = "'section' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalid_properties[] = "'value' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalid_properties[] = "'enabled' can't be null";
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
        if ($this->container['sectionName'] === null) {
            return false;
        }
        if ($this->container['canRemove'] === null) {
            return false;
        }
        if ($this->container['defaultValue'] === null) {
            return false;
        }
        if ($this->container['documented'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['section'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['value'] === null) {
            return false;
        }
        if ($this->container['enabled'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets sectionName
     * @return string
     */
    public function getSectionName()
    {
        return $this->container['sectionName'];
    }

    /**
     * Sets sectionName
     * @param string $sectionName
     * @return $this
     */
    public function setSectionName($sectionName)
    {
        $this->container['sectionName'] = $sectionName;

        return $this;
    }

    /**
     * Gets canRemove
     * @return bool
     */
    public function getCanRemove()
    {
        return $this->container['canRemove'];
    }

    /**
     * Sets canRemove
     * @param bool $canRemove
     * @return $this
     */
    public function setCanRemove($canRemove)
    {
        $this->container['canRemove'] = $canRemove;

        return $this;
    }

    /**
     * Gets defaultValue
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
     * Sets defaultValue
     * @param string $defaultValue
     * @return $this
     */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;

        return $this;
    }

    /**
     * Gets documented
     * @return bool
     */
    public function getDocumented()
    {
        return $this->container['documented'];
    }

    /**
     * Sets documented
     * @param bool $documented
     * @return $this
     */
    public function setDocumented($documented)
    {
        $this->container['documented'] = $documented;

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
     * Gets section
     * @return string
     */
    public function getSection()
    {
        return $this->container['section'];
    }

    /**
     * Sets section
     * @param string $section
     * @return $this
     */
    public function setSection($section)
    {
        $this->container['section'] = $section;

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
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets enabled
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
}


}
