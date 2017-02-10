<?php
/**
 * TranscoderMemberConfig
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
 * TranscoderMemberConfig Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TranscoderMemberConfig extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TranscoderMemberConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'wowzaVideoOnly' => 'bool',
        'encodeName' => 'string',
        'wowzaAudioOnly' => 'bool',
        'serverName' => 'string',
        'memberName' => 'string',
        'saveFieldList' => 'string[]',
        'version' => 'string'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'wowzaVideoOnly' => 'wowzaVideoOnly',
        'encodeName' => 'encodeName',
        'wowzaAudioOnly' => 'wowzaAudioOnly',
        'serverName' => 'serverName',
        'memberName' => 'memberName',
        'saveFieldList' => 'saveFieldList',
        'version' => 'version'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'wowzaVideoOnly' => 'setWowzaVideoOnly',
        'encodeName' => 'setEncodeName',
        'wowzaAudioOnly' => 'setWowzaAudioOnly',
        'serverName' => 'setServerName',
        'memberName' => 'setMemberName',
        'saveFieldList' => 'setSaveFieldList',
        'version' => 'setVersion'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'wowzaVideoOnly' => 'getWowzaVideoOnly',
        'encodeName' => 'getEncodeName',
        'wowzaAudioOnly' => 'getWowzaAudioOnly',
        'serverName' => 'getServerName',
        'memberName' => 'getMemberName',
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
        $this->container['wowzaVideoOnly'] = isset($data['wowzaVideoOnly']) ? $data['wowzaVideoOnly'] : null;
        $this->container['encodeName'] = isset($data['encodeName']) ? $data['encodeName'] : null;
        $this->container['wowzaAudioOnly'] = isset($data['wowzaAudioOnly']) ? $data['wowzaAudioOnly'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['memberName'] = isset($data['memberName']) ? $data['memberName'] : null;
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
        if ($this->container['wowzaVideoOnly'] === null) {
            $invalid_properties[] = "'wowzaVideoOnly' can't be null";
        }
        if ($this->container['encodeName'] === null) {
            $invalid_properties[] = "'encodeName' can't be null";
        }
        if ($this->container['wowzaAudioOnly'] === null) {
            $invalid_properties[] = "'wowzaAudioOnly' can't be null";
        }
        if ($this->container['serverName'] === null) {
            $invalid_properties[] = "'serverName' can't be null";
        }
        if ($this->container['memberName'] === null) {
            $invalid_properties[] = "'memberName' can't be null";
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
        if ($this->container['wowzaVideoOnly'] === null) {
            return false;
        }
        if ($this->container['encodeName'] === null) {
            return false;
        }
        if ($this->container['wowzaAudioOnly'] === null) {
            return false;
        }
        if ($this->container['serverName'] === null) {
            return false;
        }
        if ($this->container['memberName'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets wowzaVideoOnly
     * @return bool
     */
    public function getWowzaVideoOnly()
    {
        return $this->container['wowzaVideoOnly'];
    }

    /**
     * Sets wowzaVideoOnly
     * @param bool $wowzaVideoOnly
     * @return $this
     */
    public function setWowzaVideoOnly($wowzaVideoOnly)
    {
        $this->container['wowzaVideoOnly'] = $wowzaVideoOnly;

        return $this;
    }

    /**
     * Gets encodeName
     * @return string
     */
    public function getEncodeName()
    {
        return $this->container['encodeName'];
    }

    /**
     * Sets encodeName
     * @param string $encodeName
     * @return $this
     */
    public function setEncodeName($encodeName)
    {
        $this->container['encodeName'] = $encodeName;

        return $this;
    }

    /**
     * Gets wowzaAudioOnly
     * @return bool
     */
    public function getWowzaAudioOnly()
    {
        return $this->container['wowzaAudioOnly'];
    }

    /**
     * Sets wowzaAudioOnly
     * @param bool $wowzaAudioOnly
     * @return $this
     */
    public function setWowzaAudioOnly($wowzaAudioOnly)
    {
        $this->container['wowzaAudioOnly'] = $wowzaAudioOnly;

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
     * Gets memberName
     * @return string
     */
    public function getMemberName()
    {
        return $this->container['memberName'];
    }

    /**
     * Sets memberName
     * @param string $memberName
     * @return $this
     */
    public function setMemberName($memberName)
    {
        $this->container['memberName'] = $memberName;

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
