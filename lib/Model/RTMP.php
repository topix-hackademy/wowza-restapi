<?php
/**
 * RTMP
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
 * RTMP Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RTMP extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RTMP';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'password' => 'string',
        'stream' => 'string',
        'backupUrl' => 'string',
        'url' => 'string',
        'username' => 'string'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'password' => 'password',
        'stream' => 'stream',
        'backupUrl' => 'backup_url',
        'url' => 'url',
        'username' => 'username'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'password' => 'setPassword',
        'stream' => 'setStream',
        'backupUrl' => 'setBackupUrl',
        'url' => 'setUrl',
        'username' => 'setUsername'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'password' => 'getPassword',
        'stream' => 'getStream',
        'backupUrl' => 'getBackupUrl',
        'url' => 'getUrl',
        'username' => 'getUsername'
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
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['stream'] = isset($data['stream']) ? $data['stream'] : null;
        $this->container['backupUrl'] = isset($data['backupUrl']) ? $data['backupUrl'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['password'] === null) {
            $invalid_properties[] = "'password' can't be null";
        }
        if ($this->container['stream'] === null) {
            $invalid_properties[] = "'stream' can't be null";
        }
        if ($this->container['backupUrl'] === null) {
            $invalid_properties[] = "'backupUrl' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalid_properties[] = "'url' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalid_properties[] = "'username' can't be null";
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
        if ($this->container['password'] === null) {
            return false;
        }
        if ($this->container['stream'] === null) {
            return false;
        }
        if ($this->container['backupUrl'] === null) {
            return false;
        }
        if ($this->container['url'] === null) {
            return false;
        }
        if ($this->container['username'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets stream
     * @return string
     */
    public function getStream()
    {
        return $this->container['stream'];
    }

    /**
     * Sets stream
     * @param string $stream
     * @return $this
     */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;

        return $this;
    }

    /**
     * Gets backupUrl
     * @return string
     */
    public function getBackupUrl()
    {
        return $this->container['backupUrl'];
    }

    /**
     * Sets backupUrl
     * @param string $backupUrl
     * @return $this
     */
    public function setBackupUrl($backupUrl)
    {
        $this->container['backupUrl'] = $backupUrl;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
}

}
