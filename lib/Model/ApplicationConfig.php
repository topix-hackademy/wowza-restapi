<?php
/**
 * ApplicationConfig
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
 * ApplicationConfig Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ApplicationConfig extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ApplicationConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'httpOptimizeFileReads' => 'bool',
        'captionLiveIngestType' => 'string',
        'streamConfig' => StreamConfigurationConfig::class,
        'serverName' => 'string',
        'description' => 'string',
        'mediaCacheSourceList' => 'string[]',
        'repeaterOriginURL' => 'string',
        'clientStreamReadAccess' => 'string',
        'appType' => 'string',
        'pingTimeout' => 'int',
        'vodTimedTextProviders' => 'string[]',
        'saveFieldList' => 'string[]',
        'mediaReaderRandomAccessReaderClass' => 'string',
        'mediaReaderBufferSeekIO' => 'bool',
        'httpStreamers' => 'string[]',
        'httpCORSHeadersEnabled' => 'bool',
        'avSyncMethod' => 'string',
        'transcoderConfig' => TranscoderAppConfig::class,
        'clientStreamWriteAccess' => 'string',
        'repeaterQueryString' => 'string',
        'drmConfig' => DRMConfig::class,
        'version' => 'string',
        'modules' => ModulesConfig::class,
        'maxRTCPWaitTime' => 'int',
        'securityConfig' => SecurityConfig::class,
        'dvrConfig' => DVRConfig::class,
        'applicationTimeout' => 'int',
        'name' => 'string'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'httpOptimizeFileReads' => 'httpOptimizeFileReads',
        'captionLiveIngestType' => 'captionLiveIngestType',
        'streamConfig' => 'streamConfig',
        'serverName' => 'serverName',
        'description' => 'description',
        'mediaCacheSourceList' => 'mediaCacheSourceList',
        'repeaterOriginURL' => 'repeaterOriginURL',
        'clientStreamReadAccess' => 'clientStreamReadAccess',
        'appType' => 'appType',
        'pingTimeout' => 'pingTimeout',
        'vodTimedTextProviders' => 'vodTimedTextProviders',
        'saveFieldList' => 'saveFieldList',
        'mediaReaderRandomAccessReaderClass' => 'mediaReaderRandomAccessReaderClass',
        'mediaReaderBufferSeekIO' => 'mediaReaderBufferSeekIO',
        'httpStreamers' => 'httpStreamers',
        'httpCORSHeadersEnabled' => 'httpCORSHeadersEnabled',
        'avSyncMethod' => 'avSyncMethod',
        'transcoderConfig' => 'transcoderConfig',
        'clientStreamWriteAccess' => 'clientStreamWriteAccess',
        'repeaterQueryString' => 'repeaterQueryString',
        'drmConfig' => 'drmConfig',
        'version' => 'version',
        'modules' => 'modules',
        'maxRTCPWaitTime' => 'maxRTCPWaitTime',
        'securityConfig' => 'securityConfig',
        'dvrConfig' => 'dvrConfig',
        'applicationTimeout' => 'applicationTimeout',
        'name' => 'name'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'httpOptimizeFileReads' => 'setHttpOptimizeFileReads',
        'captionLiveIngestType' => 'setCaptionLiveIngestType',
        'streamConfig' => 'setStreamConfig',
        'serverName' => 'setServerName',
        'description' => 'setDescription',
        'mediaCacheSourceList' => 'setMediaCacheSourceList',
        'repeaterOriginURL' => 'setRepeaterOriginURL',
        'clientStreamReadAccess' => 'setClientStreamReadAccess',
        'appType' => 'setAppType',
        'pingTimeout' => 'setPingTimeout',
        'vodTimedTextProviders' => 'setVodTimedTextProviders',
        'saveFieldList' => 'setSaveFieldList',
        'mediaReaderRandomAccessReaderClass' => 'setMediaReaderRandomAccessReaderClass',
        'mediaReaderBufferSeekIO' => 'setMediaReaderBufferSeekIO',
        'httpStreamers' => 'setHttpStreamers',
        'httpCORSHeadersEnabled' => 'setHttpCORSHeadersEnabled',
        'avSyncMethod' => 'setAvSyncMethod',
        'transcoderConfig' => 'setTranscoderConfig',
        'clientStreamWriteAccess' => 'setClientStreamWriteAccess',
        'repeaterQueryString' => 'setRepeaterQueryString',
        'drmConfig' => 'setDrmConfig',
        'version' => 'setVersion',
        'modules' => 'setModules',
        'maxRTCPWaitTime' => 'setMaxRTCPWaitTime',
        'securityConfig' => 'setSecurityConfig',
        'dvrConfig' => 'setDvrConfig',
        'applicationTimeout' => 'setApplicationTimeout',
        'name' => 'setName'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'httpOptimizeFileReads' => 'getHttpOptimizeFileReads',
        'captionLiveIngestType' => 'getCaptionLiveIngestType',
        'streamConfig' => 'getStreamConfig',
        'serverName' => 'getServerName',
        'description' => 'getDescription',
        'mediaCacheSourceList' => 'getMediaCacheSourceList',
        'repeaterOriginURL' => 'getRepeaterOriginURL',
        'clientStreamReadAccess' => 'getClientStreamReadAccess',
        'appType' => 'getAppType',
        'pingTimeout' => 'getPingTimeout',
        'vodTimedTextProviders' => 'getVodTimedTextProviders',
        'saveFieldList' => 'getSaveFieldList',
        'mediaReaderRandomAccessReaderClass' => 'getMediaReaderRandomAccessReaderClass',
        'mediaReaderBufferSeekIO' => 'getMediaReaderBufferSeekIO',
        'httpStreamers' => 'getHttpStreamers',
        'httpCORSHeadersEnabled' => 'getHttpCORSHeadersEnabled',
        'avSyncMethod' => 'getAvSyncMethod',
        'transcoderConfig' => 'getTranscoderConfig',
        'clientStreamWriteAccess' => 'getClientStreamWriteAccess',
        'repeaterQueryString' => 'getRepeaterQueryString',
        'drmConfig' => 'getDrmConfig',
        'version' => 'getVersion',
        'modules' => 'getModules',
        'maxRTCPWaitTime' => 'getMaxRTCPWaitTime',
        'securityConfig' => 'getSecurityConfig',
        'dvrConfig' => 'getDvrConfig',
        'applicationTimeout' => 'getApplicationTimeout',
        'name' => 'getName'
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
        $this->container['httpOptimizeFileReads'] = isset($data['httpOptimizeFileReads']) ? $data['httpOptimizeFileReads'] : null;
        $this->container['captionLiveIngestType'] = isset($data['captionLiveIngestType']) ? $data['captionLiveIngestType'] : null;
        $this->container['streamConfig'] = isset($data['streamConfig']) ? $data['streamConfig'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['mediaCacheSourceList'] = isset($data['mediaCacheSourceList']) ? $data['mediaCacheSourceList'] : null;
        $this->container['repeaterOriginURL'] = isset($data['repeaterOriginURL']) ? $data['repeaterOriginURL'] : null;
        $this->container['clientStreamReadAccess'] = isset($data['clientStreamReadAccess']) ? $data['clientStreamReadAccess'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['pingTimeout'] = isset($data['pingTimeout']) ? $data['pingTimeout'] : null;
        $this->container['vodTimedTextProviders'] = isset($data['vodTimedTextProviders']) ? $data['vodTimedTextProviders'] : null;
        $this->container['saveFieldList'] = isset($data['saveFieldList']) ? $data['saveFieldList'] : null;
        $this->container['mediaReaderRandomAccessReaderClass'] = isset($data['mediaReaderRandomAccessReaderClass']) ? $data['mediaReaderRandomAccessReaderClass'] : null;
        $this->container['mediaReaderBufferSeekIO'] = isset($data['mediaReaderBufferSeekIO']) ? $data['mediaReaderBufferSeekIO'] : null;
        $this->container['httpStreamers'] = isset($data['httpStreamers']) ? $data['httpStreamers'] : null;
        $this->container['httpCORSHeadersEnabled'] = isset($data['httpCORSHeadersEnabled']) ? $data['httpCORSHeadersEnabled'] : null;
        $this->container['avSyncMethod'] = isset($data['avSyncMethod']) ? $data['avSyncMethod'] : null;
        $this->container['transcoderConfig'] = isset($data['transcoderConfig']) ? $data['transcoderConfig'] : null;
        $this->container['clientStreamWriteAccess'] = isset($data['clientStreamWriteAccess']) ? $data['clientStreamWriteAccess'] : null;
        $this->container['repeaterQueryString'] = isset($data['repeaterQueryString']) ? $data['repeaterQueryString'] : null;
        $this->container['drmConfig'] = isset($data['drmConfig']) ? $data['drmConfig'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['modules'] = isset($data['modules']) ? $data['modules'] : null;
        $this->container['maxRTCPWaitTime'] = isset($data['maxRTCPWaitTime']) ? $data['maxRTCPWaitTime'] : null;
        $this->container['securityConfig'] = isset($data['securityConfig']) ? $data['securityConfig'] : null;
        $this->container['dvrConfig'] = isset($data['dvrConfig']) ? $data['dvrConfig'] : null;
        $this->container['applicationTimeout'] = isset($data['applicationTimeout']) ? $data['applicationTimeout'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['httpOptimizeFileReads'] === null) {
            $invalid_properties[] = "'httpOptimizeFileReads' can't be null";
        }
        if ($this->container['captionLiveIngestType'] === null) {
            $invalid_properties[] = "'captionLiveIngestType' can't be null";
        }
        if ($this->container['streamConfig'] === null) {
            $invalid_properties[] = "'streamConfig' can't be null";
        }
        if ($this->container['serverName'] === null) {
            $invalid_properties[] = "'serverName' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ($this->container['mediaCacheSourceList'] === null) {
            $invalid_properties[] = "'mediaCacheSourceList' can't be null";
        }
        if ($this->container['repeaterOriginURL'] === null) {
            $invalid_properties[] = "'repeaterOriginURL' can't be null";
        }
        if ($this->container['clientStreamReadAccess'] === null) {
            $invalid_properties[] = "'clientStreamReadAccess' can't be null";
        }
        if ($this->container['appType'] === null) {
            $invalid_properties[] = "'appType' can't be null";
        }
        if ($this->container['pingTimeout'] === null) {
            $invalid_properties[] = "'pingTimeout' can't be null";
        }
        if ($this->container['vodTimedTextProviders'] === null) {
            $invalid_properties[] = "'vodTimedTextProviders' can't be null";
        }
        if ($this->container['mediaReaderRandomAccessReaderClass'] === null) {
            $invalid_properties[] = "'mediaReaderRandomAccessReaderClass' can't be null";
        }
        if ($this->container['mediaReaderBufferSeekIO'] === null) {
            $invalid_properties[] = "'mediaReaderBufferSeekIO' can't be null";
        }
        if ($this->container['httpStreamers'] === null) {
            $invalid_properties[] = "'httpStreamers' can't be null";
        }
        if ($this->container['httpCORSHeadersEnabled'] === null) {
            $invalid_properties[] = "'httpCORSHeadersEnabled' can't be null";
        }
        if ($this->container['avSyncMethod'] === null) {
            $invalid_properties[] = "'avSyncMethod' can't be null";
        }
        if ($this->container['transcoderConfig'] === null) {
            $invalid_properties[] = "'transcoderConfig' can't be null";
        }
        if ($this->container['clientStreamWriteAccess'] === null) {
            $invalid_properties[] = "'clientStreamWriteAccess' can't be null";
        }
        if ($this->container['repeaterQueryString'] === null) {
            $invalid_properties[] = "'repeaterQueryString' can't be null";
        }
        if ($this->container['drmConfig'] === null) {
            $invalid_properties[] = "'drmConfig' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalid_properties[] = "'version' can't be null";
        }
        if ($this->container['modules'] === null) {
            $invalid_properties[] = "'modules' can't be null";
        }
        if ($this->container['maxRTCPWaitTime'] === null) {
            $invalid_properties[] = "'maxRTCPWaitTime' can't be null";
        }
        if ($this->container['securityConfig'] === null) {
            $invalid_properties[] = "'securityConfig' can't be null";
        }
        if ($this->container['dvrConfig'] === null) {
            $invalid_properties[] = "'dvrConfig' can't be null";
        }
        if ($this->container['applicationTimeout'] === null) {
            $invalid_properties[] = "'applicationTimeout' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
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
        if ($this->container['httpOptimizeFileReads'] === null) {
            return false;
        }
        if ($this->container['captionLiveIngestType'] === null) {
            return false;
        }
        if ($this->container['streamConfig'] === null) {
            return false;
        }
        if ($this->container['serverName'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['mediaCacheSourceList'] === null) {
            return false;
        }
        if ($this->container['repeaterOriginURL'] === null) {
            return false;
        }
        if ($this->container['clientStreamReadAccess'] === null) {
            return false;
        }
        if ($this->container['appType'] === null) {
            return false;
        }
        if ($this->container['pingTimeout'] === null) {
            return false;
        }
        if ($this->container['vodTimedTextProviders'] === null) {
            return false;
        }
        if ($this->container['mediaReaderRandomAccessReaderClass'] === null) {
            return false;
        }
        if ($this->container['mediaReaderBufferSeekIO'] === null) {
            return false;
        }
        if ($this->container['httpStreamers'] === null) {
            return false;
        }
        if ($this->container['httpCORSHeadersEnabled'] === null) {
            return false;
        }
        if ($this->container['avSyncMethod'] === null) {
            return false;
        }
        if ($this->container['transcoderConfig'] === null) {
            return false;
        }
        if ($this->container['clientStreamWriteAccess'] === null) {
            return false;
        }
        if ($this->container['repeaterQueryString'] === null) {
            return false;
        }
        if ($this->container['drmConfig'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        if ($this->container['modules'] === null) {
            return false;
        }
        if ($this->container['maxRTCPWaitTime'] === null) {
            return false;
        }
        if ($this->container['securityConfig'] === null) {
            return false;
        }
        if ($this->container['dvrConfig'] === null) {
            return false;
        }
        if ($this->container['applicationTimeout'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets httpOptimizeFileReads
     * @return bool
     */
    public function getHttpOptimizeFileReads()
    {
        return $this->container['httpOptimizeFileReads'];
    }

    /**
     * Sets httpOptimizeFileReads
     * @param bool $httpOptimizeFileReads
     * @return $this
     */
    public function setHttpOptimizeFileReads($httpOptimizeFileReads)
    {
        $this->container['httpOptimizeFileReads'] = $httpOptimizeFileReads;

        return $this;
    }

    /**
     * Gets captionLiveIngestType
     * @return string
     */
    public function getCaptionLiveIngestType()
    {
        return $this->container['captionLiveIngestType'];
    }

    /**
     * Sets captionLiveIngestType
     * @param string $captionLiveIngestType
     * @return $this
     */
    public function setCaptionLiveIngestType($captionLiveIngestType)
    {
        $this->container['captionLiveIngestType'] = $captionLiveIngestType;

        return $this;
    }

    /**
     * Gets streamConfig
     * @return  StreamConfigurationConfig
     */
    public function getStreamConfig()
    {
        return $this->container['streamConfig'];
    }

    /**
     * Sets streamConfig
     * @param StreamConfigurationConfig $streamConfig
     * @return $this
     */
    public function setStreamConfig($streamConfig)
    {
        $this->container['streamConfig'] = $streamConfig;

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
     * Gets mediaCacheSourceList
     * @return string[]
     */
    public function getMediaCacheSourceList()
    {
        return $this->container['mediaCacheSourceList'];
    }

    /**
     * Sets mediaCacheSourceList
     * @param string[] $mediaCacheSourceList
     * @return $this
     */
    public function setMediaCacheSourceList($mediaCacheSourceList)
    {
        $this->container['mediaCacheSourceList'] = $mediaCacheSourceList;

        return $this;
    }

    /**
     * Gets repeaterOriginURL
     * @return string
     */
    public function getRepeaterOriginURL()
    {
        return $this->container['repeaterOriginURL'];
    }

    /**
     * Sets repeaterOriginURL
     * @param string $repeaterOriginURL
     * @return $this
     */
    public function setRepeaterOriginURL($repeaterOriginURL)
    {
        $this->container['repeaterOriginURL'] = $repeaterOriginURL;

        return $this;
    }

    /**
     * Gets clientStreamReadAccess
     * @return string
     */
    public function getClientStreamReadAccess()
    {
        return $this->container['clientStreamReadAccess'];
    }

    /**
     * Sets clientStreamReadAccess
     * @param string $clientStreamReadAccess
     * @return $this
     */
    public function setClientStreamReadAccess($clientStreamReadAccess)
    {
        $this->container['clientStreamReadAccess'] = $clientStreamReadAccess;

        return $this;
    }

    /**
     * Gets appType
     * @return string
     */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
     * Sets appType
     * @param string $appType 
     * @return $this
     */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;

        return $this;
    }

    /**
     * Gets pingTimeout
     * @return int
     */
    public function getPingTimeout()
    {
        return $this->container['pingTimeout'];
    }

    /**
     * Sets pingTimeout
     * @param int $pingTimeout
     * @return $this
     */
    public function setPingTimeout($pingTimeout)
    {
        $this->container['pingTimeout'] = $pingTimeout;

        return $this;
    }

    /**
     * Gets vodTimedTextProviders
     * @return string[]
     */
    public function getVodTimedTextProviders()
    {
        return $this->container['vodTimedTextProviders'];
    }

    /**
     * Sets vodTimedTextProviders
     * @param string[] $vodTimedTextProviders
     * @return $this
     */
    public function setVodTimedTextProviders($vodTimedTextProviders)
    {
        $this->container['vodTimedTextProviders'] = $vodTimedTextProviders;

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
     * Gets mediaReaderRandomAccessReaderClass
     * @return string
     */
    public function getMediaReaderRandomAccessReaderClass()
    {
        return $this->container['mediaReaderRandomAccessReaderClass'];
    }

    /**
     * Sets mediaReaderRandomAccessReaderClass
     * @param string $mediaReaderRandomAccessReaderClass
     * @return $this
     */
    public function setMediaReaderRandomAccessReaderClass($mediaReaderRandomAccessReaderClass)
    {
        $this->container['mediaReaderRandomAccessReaderClass'] = $mediaReaderRandomAccessReaderClass;

        return $this;
    }

    /**
     * Gets mediaReaderBufferSeekIO
     * @return bool
     */
    public function getMediaReaderBufferSeekIO()
    {
        return $this->container['mediaReaderBufferSeekIO'];
    }

    /**
     * Sets mediaReaderBufferSeekIO
     * @param bool $mediaReaderBufferSeekIO
     * @return $this
     */
    public function setMediaReaderBufferSeekIO($mediaReaderBufferSeekIO)
    {
        $this->container['mediaReaderBufferSeekIO'] = $mediaReaderBufferSeekIO;

        return $this;
    }

    /**
     * Gets httpStreamers
     * @return string[]
     */
    public function getHttpStreamers()
    {
        return $this->container['httpStreamers'];
    }

    /**
     * Sets httpStreamers
     * @param string[] $httpStreamers
     * @return $this
     */
    public function setHttpStreamers($httpStreamers)
    {
        $this->container['httpStreamers'] = $httpStreamers;

        return $this;
    }

    /**
     * Gets httpCORSHeadersEnabled
     * @return bool
     */
    public function getHttpCORSHeadersEnabled()
    {
        return $this->container['httpCORSHeadersEnabled'];
    }

    /**
     * Sets httpCORSHeadersEnabled
     * @param bool $httpCORSHeadersEnabled
     * @return $this
     */
    public function setHttpCORSHeadersEnabled($httpCORSHeadersEnabled)
    {
        $this->container['httpCORSHeadersEnabled'] = $httpCORSHeadersEnabled;

        return $this;
    }

    /**
     * Gets avSyncMethod
     * @return string
     */
    public function getAvSyncMethod()
    {
        return $this->container['avSyncMethod'];
    }

    /**
     * Sets avSyncMethod
     * @param string $avSyncMethod
     * @return $this
     */
    public function setAvSyncMethod($avSyncMethod)
    {
        $this->container['avSyncMethod'] = $avSyncMethod;

        return $this;
    }

    /**
     * Gets transcoderConfig
     * @return  TranscoderAppConfig
     */
    public function getTranscoderConfig()
    {
        return $this->container['transcoderConfig'];
    }

    /**
     * Sets transcoderConfig
     * @param TranscoderAppConfig $transcoderConfig
     * @return $this
     */
    public function setTranscoderConfig($transcoderConfig)
    {
        $this->container['transcoderConfig'] = $transcoderConfig;

        return $this;
    }

    /**
     * Gets clientStreamWriteAccess
     * @return string
     */
    public function getClientStreamWriteAccess()
    {
        return $this->container['clientStreamWriteAccess'];
    }

    /**
     * Sets clientStreamWriteAccess
     * @param string $clientStreamWriteAccess
     * @return $this
     */
    public function setClientStreamWriteAccess($clientStreamWriteAccess)
    {
        $this->container['clientStreamWriteAccess'] = $clientStreamWriteAccess;

        return $this;
    }

    /**
     * Gets repeaterQueryString
     * @return string
     */
    public function getRepeaterQueryString()
    {
        return $this->container['repeaterQueryString'];
    }

    /**
     * Sets repeaterQueryString
     * @param string $repeaterQueryString
     * @return $this
     */
    public function setRepeaterQueryString($repeaterQueryString)
    {
        $this->container['repeaterQueryString'] = $repeaterQueryString;

        return $this;
    }

    /**
     * Gets drmConfig
     * @return  DRMConfig
     */
    public function getDrmConfig()
    {
        return $this->container['drmConfig'];
    }

    /**
     * Sets drmConfig
     * @param DRMConfig $drmConfig
     * @return $this
     */
    public function setDrmConfig($drmConfig)
    {
        $this->container['drmConfig'] = $drmConfig;

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
     * Gets modules
     * @return  ModulesConfig
     */
    public function getModules()
    {
        return $this->container['modules'];
    }

    /**
     * Sets modules
     * @param ModulesConfig $modules
     * @return $this
     */
    public function setModules($modules)
    {
        $this->container['modules'] = $modules;

        return $this;
    }

    /**
     * Gets maxRTCPWaitTime
     * @return int
     */
    public function getMaxRTCPWaitTime()
    {
        return $this->container['maxRTCPWaitTime'];
    }

    /**
     * Sets maxRTCPWaitTime
     * @param int $maxRTCPWaitTime
     * @return $this
     */
    public function setMaxRTCPWaitTime($maxRTCPWaitTime)
    {
        $this->container['maxRTCPWaitTime'] = $maxRTCPWaitTime;

        return $this;
    }

    /**
     * Gets securityConfig
     * @return  SecurityConfig
     */
    public function getSecurityConfig()
    {
        return $this->container['securityConfig'];
    }

    /**
     * Sets securityConfig
     * @param SecurityConfig $securityConfig
     * @return $this
     */
    public function setSecurityConfig($securityConfig)
    {
        $this->container['securityConfig'] = $securityConfig;

        return $this;
    }

    /**
     * Gets dvrConfig
     * @return  DVRConfig
     */
    public function getDvrConfig()
    {
        return $this->container['dvrConfig'];
    }

    /**
     * Sets dvrConfig
     * @param DVRConfig $dvrConfig
     * @return $this
     */
    public function setDvrConfig($dvrConfig)
    {
        $this->container['dvrConfig'] = $dvrConfig;

        return $this;
    }

    /**
     * Gets applicationTimeout
     * @return int
     */
    public function getApplicationTimeout()
    {
        return $this->container['applicationTimeout'];
    }

    /**
     * Sets applicationTimeout
     * @param int $applicationTimeout
     * @return $this
     */
    public function setApplicationTimeout($applicationTimeout)
    {
        $this->container['applicationTimeout'] = $applicationTimeout;

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

}
