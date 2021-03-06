<?php
/**
 * MediaCacheSourceConfig
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
 * MediaCacheSourceConfig Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MediaCacheSourceConfig extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MediaCacheSourceConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'readerClass' => 'string',
        'isPassThru' => 'bool',
        'minTimeToLive' => 'int',
        'prefix' => 'string',
        'serverName' => 'string',
        'description' => 'string',
        'baseClass' => 'string',
        'type' => 'string',
        'isAmazonS3' => 'bool',
        's3BucketNameInDomain' => 'bool',
        'googleServicePrivateKeyFile' => 'string',
        'googleServiceID' => 'string',
        'googleServicePrivateKeyPassword' => 'string',
        'saveFieldList' => 'string[]',
        'azureAccountKey' => 'string',
        'awsSecretAccessKey' => 'string',
        'azureAccountName' => 'string',
        'awsAccessKeyId' => 'string',
        'httpReaderFactoryClass' => 'string',
        'googleServiceKey' => 'string',
        'azureContainerName' => 'string',
        'version' => 'string',
        'basePath' => 'string',
        'googleEncMethod' => 'string',
        'name' => 'string',
        'maxTimeToLive' => 'int'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'readerClass' => 'readerClass',
        'isPassThru' => 'isPassThru',
        'minTimeToLive' => 'minTimeToLive',
        'prefix' => 'prefix',
        'serverName' => 'serverName',
        'description' => 'description',
        'baseClass' => 'baseClass',
        'type' => 'type',
        'isAmazonS3' => 'isAmazonS3',
        's3BucketNameInDomain' => 's3BucketNameInDomain',
        'googleServicePrivateKeyFile' => 'googleServicePrivateKeyFile',
        'googleServiceID' => 'googleServiceID',
        'googleServicePrivateKeyPassword' => 'googleServicePrivateKeyPassword',
        'saveFieldList' => 'saveFieldList',
        'azureAccountKey' => 'azureAccountKey',
        'awsSecretAccessKey' => 'awsSecretAccessKey',
        'azureAccountName' => 'azureAccountName',
        'awsAccessKeyId' => 'awsAccessKeyId',
        'httpReaderFactoryClass' => 'httpReaderFactoryClass',
        'googleServiceKey' => 'googleServiceKey',
        'azureContainerName' => 'azureContainerName',
        'version' => 'version',
        'basePath' => 'basePath',
        'googleEncMethod' => 'googleEncMethod',
        'name' => 'name',
        'maxTimeToLive' => 'maxTimeToLive'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'readerClass' => 'setReaderClass',
        'isPassThru' => 'setIsPassThru',
        'minTimeToLive' => 'setMinTimeToLive',
        'prefix' => 'setPrefix',
        'serverName' => 'setServerName',
        'description' => 'setDescription',
        'baseClass' => 'setBaseClass',
        'type' => 'setType',
        'isAmazonS3' => 'setIsAmazonS3',
        's3BucketNameInDomain' => 'setS3BucketNameInDomain',
        'googleServicePrivateKeyFile' => 'setGoogleServicePrivateKeyFile',
        'googleServiceID' => 'setGoogleServiceID',
        'googleServicePrivateKeyPassword' => 'setGoogleServicePrivateKeyPassword',
        'saveFieldList' => 'setSaveFieldList',
        'azureAccountKey' => 'setAzureAccountKey',
        'awsSecretAccessKey' => 'setAwsSecretAccessKey',
        'azureAccountName' => 'setAzureAccountName',
        'awsAccessKeyId' => 'setAwsAccessKeyId',
        'httpReaderFactoryClass' => 'setHttpReaderFactoryClass',
        'googleServiceKey' => 'setGoogleServiceKey',
        'azureContainerName' => 'setAzureContainerName',
        'version' => 'setVersion',
        'basePath' => 'setBasePath',
        'googleEncMethod' => 'setGoogleEncMethod',
        'name' => 'setName',
        'maxTimeToLive' => 'setMaxTimeToLive'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'readerClass' => 'getReaderClass',
        'isPassThru' => 'getIsPassThru',
        'minTimeToLive' => 'getMinTimeToLive',
        'prefix' => 'getPrefix',
        'serverName' => 'getServerName',
        'description' => 'getDescription',
        'baseClass' => 'getBaseClass',
        'type' => 'getType',
        'isAmazonS3' => 'getIsAmazonS3',
        's3BucketNameInDomain' => 'getS3BucketNameInDomain',
        'googleServicePrivateKeyFile' => 'getGoogleServicePrivateKeyFile',
        'googleServiceID' => 'getGoogleServiceID',
        'googleServicePrivateKeyPassword' => 'getGoogleServicePrivateKeyPassword',
        'saveFieldList' => 'getSaveFieldList',
        'azureAccountKey' => 'getAzureAccountKey',
        'awsSecretAccessKey' => 'getAwsSecretAccessKey',
        'azureAccountName' => 'getAzureAccountName',
        'awsAccessKeyId' => 'getAwsAccessKeyId',
        'httpReaderFactoryClass' => 'getHttpReaderFactoryClass',
        'googleServiceKey' => 'getGoogleServiceKey',
        'azureContainerName' => 'getAzureContainerName',
        'version' => 'getVersion',
        'basePath' => 'getBasePath',
        'googleEncMethod' => 'getGoogleEncMethod',
        'name' => 'getName',
        'maxTimeToLive' => 'getMaxTimeToLive'
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
        $this->container['readerClass'] = isset($data['readerClass']) ? $data['readerClass'] : null;
        $this->container['isPassThru'] = isset($data['isPassThru']) ? $data['isPassThru'] : null;
        $this->container['minTimeToLive'] = isset($data['minTimeToLive']) ? $data['minTimeToLive'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['baseClass'] = isset($data['baseClass']) ? $data['baseClass'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['isAmazonS3'] = isset($data['isAmazonS3']) ? $data['isAmazonS3'] : null;
        $this->container['s3BucketNameInDomain'] = isset($data['s3BucketNameInDomain']) ? $data['s3BucketNameInDomain'] : null;
        $this->container['googleServicePrivateKeyFile'] = isset($data['googleServicePrivateKeyFile']) ? $data['googleServicePrivateKeyFile'] : null;
        $this->container['googleServiceID'] = isset($data['googleServiceID']) ? $data['googleServiceID'] : null;
        $this->container['googleServicePrivateKeyPassword'] = isset($data['googleServicePrivateKeyPassword']) ? $data['googleServicePrivateKeyPassword'] : null;
        $this->container['saveFieldList'] = isset($data['saveFieldList']) ? $data['saveFieldList'] : null;
        $this->container['azureAccountKey'] = isset($data['azureAccountKey']) ? $data['azureAccountKey'] : null;
        $this->container['awsSecretAccessKey'] = isset($data['awsSecretAccessKey']) ? $data['awsSecretAccessKey'] : null;
        $this->container['azureAccountName'] = isset($data['azureAccountName']) ? $data['azureAccountName'] : null;
        $this->container['awsAccessKeyId'] = isset($data['awsAccessKeyId']) ? $data['awsAccessKeyId'] : null;
        $this->container['httpReaderFactoryClass'] = isset($data['httpReaderFactoryClass']) ? $data['httpReaderFactoryClass'] : null;
        $this->container['googleServiceKey'] = isset($data['googleServiceKey']) ? $data['googleServiceKey'] : null;
        $this->container['azureContainerName'] = isset($data['azureContainerName']) ? $data['azureContainerName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['basePath'] = isset($data['basePath']) ? $data['basePath'] : null;
        $this->container['googleEncMethod'] = isset($data['googleEncMethod']) ? $data['googleEncMethod'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['maxTimeToLive'] = isset($data['maxTimeToLive']) ? $data['maxTimeToLive'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['readerClass'] === null) {
            $invalid_properties[] = "'readerClass' can't be null";
        }
        if ($this->container['isPassThru'] === null) {
            $invalid_properties[] = "'isPassThru' can't be null";
        }
        if ($this->container['minTimeToLive'] === null) {
            $invalid_properties[] = "'minTimeToLive' can't be null";
        }
        if ($this->container['prefix'] === null) {
            $invalid_properties[] = "'prefix' can't be null";
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
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['isAmazonS3'] === null) {
            $invalid_properties[] = "'isAmazonS3' can't be null";
        }
        if ($this->container['s3BucketNameInDomain'] === null) {
            $invalid_properties[] = "'s3BucketNameInDomain' can't be null";
        }
        if ($this->container['googleServicePrivateKeyFile'] === null) {
            $invalid_properties[] = "'googleServicePrivateKeyFile' can't be null";
        }
        if ($this->container['googleServiceID'] === null) {
            $invalid_properties[] = "'googleServiceID' can't be null";
        }
        if ($this->container['googleServicePrivateKeyPassword'] === null) {
            $invalid_properties[] = "'googleServicePrivateKeyPassword' can't be null";
        }
        if ($this->container['azureAccountKey'] === null) {
            $invalid_properties[] = "'azureAccountKey' can't be null";
        }
        if ($this->container['awsSecretAccessKey'] === null) {
            $invalid_properties[] = "'awsSecretAccessKey' can't be null";
        }
        if ($this->container['azureAccountName'] === null) {
            $invalid_properties[] = "'azureAccountName' can't be null";
        }
        if ($this->container['awsAccessKeyId'] === null) {
            $invalid_properties[] = "'awsAccessKeyId' can't be null";
        }
        if ($this->container['httpReaderFactoryClass'] === null) {
            $invalid_properties[] = "'httpReaderFactoryClass' can't be null";
        }
        if ($this->container['googleServiceKey'] === null) {
            $invalid_properties[] = "'googleServiceKey' can't be null";
        }
        if ($this->container['azureContainerName'] === null) {
            $invalid_properties[] = "'azureContainerName' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalid_properties[] = "'version' can't be null";
        }
        if ($this->container['basePath'] === null) {
            $invalid_properties[] = "'basePath' can't be null";
        }
        if ($this->container['googleEncMethod'] === null) {
            $invalid_properties[] = "'googleEncMethod' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['maxTimeToLive'] === null) {
            $invalid_properties[] = "'maxTimeToLive' can't be null";
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
        if ($this->container['readerClass'] === null) {
            return false;
        }
        if ($this->container['isPassThru'] === null) {
            return false;
        }
        if ($this->container['minTimeToLive'] === null) {
            return false;
        }
        if ($this->container['prefix'] === null) {
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
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['isAmazonS3'] === null) {
            return false;
        }
        if ($this->container['s3BucketNameInDomain'] === null) {
            return false;
        }
        if ($this->container['googleServicePrivateKeyFile'] === null) {
            return false;
        }
        if ($this->container['googleServiceID'] === null) {
            return false;
        }
        if ($this->container['googleServicePrivateKeyPassword'] === null) {
            return false;
        }
        if ($this->container['azureAccountKey'] === null) {
            return false;
        }
        if ($this->container['awsSecretAccessKey'] === null) {
            return false;
        }
        if ($this->container['azureAccountName'] === null) {
            return false;
        }
        if ($this->container['awsAccessKeyId'] === null) {
            return false;
        }
        if ($this->container['httpReaderFactoryClass'] === null) {
            return false;
        }
        if ($this->container['googleServiceKey'] === null) {
            return false;
        }
        if ($this->container['azureContainerName'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        if ($this->container['basePath'] === null) {
            return false;
        }
        if ($this->container['googleEncMethod'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['maxTimeToLive'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets readerClass
     * @return string
     */
    public function getReaderClass()
    {
        return $this->container['readerClass'];
    }

    /**
     * Sets readerClass
     * @param string $readerClass
     * @return $this
     */
    public function setReaderClass($readerClass)
    {
        $this->container['readerClass'] = $readerClass;

        return $this;
    }

    /**
     * Gets isPassThru
     * @return bool
     */
    public function getIsPassThru()
    {
        return $this->container['isPassThru'];
    }

    /**
     * Sets isPassThru
     * @param bool $isPassThru
     * @return $this
     */
    public function setIsPassThru($isPassThru)
    {
        $this->container['isPassThru'] = $isPassThru;

        return $this;
    }

    /**
     * Gets minTimeToLive
     * @return int
     */
    public function getMinTimeToLive()
    {
        return $this->container['minTimeToLive'];
    }

    /**
     * Sets minTimeToLive
     * @param int $minTimeToLive
     * @return $this
     */
    public function setMinTimeToLive($minTimeToLive)
    {
        $this->container['minTimeToLive'] = $minTimeToLive;

        return $this;
    }

    /**
     * Gets prefix
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     * @param string $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

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
     * Gets isAmazonS3
     * @return bool
     */
    public function getIsAmazonS3()
    {
        return $this->container['isAmazonS3'];
    }

    /**
     * Sets isAmazonS3
     * @param bool $isAmazonS3
     * @return $this
     */
    public function setIsAmazonS3($isAmazonS3)
    {
        $this->container['isAmazonS3'] = $isAmazonS3;

        return $this;
    }

    /**
     * Gets s3BucketNameInDomain
     * @return bool
     */
    public function getS3BucketNameInDomain()
    {
        return $this->container['s3BucketNameInDomain'];
    }

    /**
     * Sets s3BucketNameInDomain
     * @param bool $s3BucketNameInDomain
     * @return $this
     */
    public function setS3BucketNameInDomain($s3BucketNameInDomain)
    {
        $this->container['s3BucketNameInDomain'] = $s3BucketNameInDomain;

        return $this;
    }

    /**
     * Gets googleServicePrivateKeyFile
     * @return string
     */
    public function getGoogleServicePrivateKeyFile()
    {
        return $this->container['googleServicePrivateKeyFile'];
    }

    /**
     * Sets googleServicePrivateKeyFile
     * @param string $googleServicePrivateKeyFile
     * @return $this
     */
    public function setGoogleServicePrivateKeyFile($googleServicePrivateKeyFile)
    {
        $this->container['googleServicePrivateKeyFile'] = $googleServicePrivateKeyFile;

        return $this;
    }

    /**
     * Gets googleServiceID
     * @return string
     */
    public function getGoogleServiceID()
    {
        return $this->container['googleServiceID'];
    }

    /**
     * Sets googleServiceID
     * @param string $googleServiceID
     * @return $this
     */
    public function setGoogleServiceID($googleServiceID)
    {
        $this->container['googleServiceID'] = $googleServiceID;

        return $this;
    }

    /**
     * Gets googleServicePrivateKeyPassword
     * @return string
     */
    public function getGoogleServicePrivateKeyPassword()
    {
        return $this->container['googleServicePrivateKeyPassword'];
    }

    /**
     * Sets googleServicePrivateKeyPassword
     * @param string $googleServicePrivateKeyPassword
     * @return $this
     */
    public function setGoogleServicePrivateKeyPassword($googleServicePrivateKeyPassword)
    {
        $this->container['googleServicePrivateKeyPassword'] = $googleServicePrivateKeyPassword;

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
     * Gets azureAccountKey
     * @return string
     */
    public function getAzureAccountKey()
    {
        return $this->container['azureAccountKey'];
    }

    /**
     * Sets azureAccountKey
     * @param string $azureAccountKey
     * @return $this
     */
    public function setAzureAccountKey($azureAccountKey)
    {
        $this->container['azureAccountKey'] = $azureAccountKey;

        return $this;
    }

    /**
     * Gets awsSecretAccessKey
     * @return string
     */
    public function getAwsSecretAccessKey()
    {
        return $this->container['awsSecretAccessKey'];
    }

    /**
     * Sets awsSecretAccessKey
     * @param string $awsSecretAccessKey
     * @return $this
     */
    public function setAwsSecretAccessKey($awsSecretAccessKey)
    {
        $this->container['awsSecretAccessKey'] = $awsSecretAccessKey;

        return $this;
    }

    /**
     * Gets azureAccountName
     * @return string
     */
    public function getAzureAccountName()
    {
        return $this->container['azureAccountName'];
    }

    /**
     * Sets azureAccountName
     * @param string $azureAccountName
     * @return $this
     */
    public function setAzureAccountName($azureAccountName)
    {
        $this->container['azureAccountName'] = $azureAccountName;

        return $this;
    }

    /**
     * Gets awsAccessKeyId
     * @return string
     */
    public function getAwsAccessKeyId()
    {
        return $this->container['awsAccessKeyId'];
    }

    /**
     * Sets awsAccessKeyId
     * @param string $awsAccessKeyId
     * @return $this
     */
    public function setAwsAccessKeyId($awsAccessKeyId)
    {
        $this->container['awsAccessKeyId'] = $awsAccessKeyId;

        return $this;
    }

    /**
     * Gets httpReaderFactoryClass
     * @return string
     */
    public function getHttpReaderFactoryClass()
    {
        return $this->container['httpReaderFactoryClass'];
    }

    /**
     * Sets httpReaderFactoryClass
     * @param string $httpReaderFactoryClass
     * @return $this
     */
    public function setHttpReaderFactoryClass($httpReaderFactoryClass)
    {
        $this->container['httpReaderFactoryClass'] = $httpReaderFactoryClass;

        return $this;
    }

    /**
     * Gets googleServiceKey
     * @return string
     */
    public function getGoogleServiceKey()
    {
        return $this->container['googleServiceKey'];
    }

    /**
     * Sets googleServiceKey
     * @param string $googleServiceKey
     * @return $this
     */
    public function setGoogleServiceKey($googleServiceKey)
    {
        $this->container['googleServiceKey'] = $googleServiceKey;

        return $this;
    }

    /**
     * Gets azureContainerName
     * @return string
     */
    public function getAzureContainerName()
    {
        return $this->container['azureContainerName'];
    }

    /**
     * Sets azureContainerName
     * @param string $azureContainerName
     * @return $this
     */
    public function setAzureContainerName($azureContainerName)
    {
        $this->container['azureContainerName'] = $azureContainerName;

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
     * Gets basePath
     * @return string
     */
    public function getBasePath()
    {
        return $this->container['basePath'];
    }

    /**
     * Sets basePath
     * @param string $basePath
     * @return $this
     */
    public function setBasePath($basePath)
    {
        $this->container['basePath'] = $basePath;

        return $this;
    }

    /**
     * Gets googleEncMethod
     * @return string
     */
    public function getGoogleEncMethod()
    {
        return $this->container['googleEncMethod'];
    }

    /**
     * Sets googleEncMethod
     * @param string $googleEncMethod
     * @return $this
     */
    public function setGoogleEncMethod($googleEncMethod)
    {
        $this->container['googleEncMethod'] = $googleEncMethod;

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
     * Gets maxTimeToLive
     * @return int
     */
    public function getMaxTimeToLive()
    {
        return $this->container['maxTimeToLive'];
    }

    /**
     * Sets maxTimeToLive
     * @param int $maxTimeToLive
     * @return $this
     */
    public function setMaxTimeToLive($maxTimeToLive)
    {
        $this->container['maxTimeToLive'] = $maxTimeToLive;

        return $this;
}

}
