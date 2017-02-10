<?php
/**
 * TranscoderEncodeAppConfig
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
 * TranscoderEncodeAppConfig Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TranscoderEncodeAppConfig extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TranscoderEncodeAppConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'followSource' => 'bool',
        'implementation' => 'string',
        'gpuid' => 'int',
        'profile' => 'string',
        'serverName' => 'string',
        'description' => 'string',
        'audioCodec' => 'string',
        'version' => 'string',
        'streamName' => 'string',
        'overlays' => TranscoderOverlayEncodeConfig::class.'[]',
        'audioBitrate' => 'string',
        'videoBitrate' => 'string',
        'enable' => 'bool',
        'name' => 'string',
        'width' => 'int',
        'interval' => 'int',
        'fitMode' => 'string',
        'saveFieldList' => 'string[]',
        'crop' => 'string',
        'videoCodec' => 'string',
        'height' => 'int',
        'sourceRectangle' => 'string'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'followSource' => 'followSource',
        'implementation' => 'implementation',
        'gpuid' => 'gpuid',
        'profile' => 'profile',
        'serverName' => 'serverName',
        'description' => 'description',
        'audioCodec' => 'audioCodec',
        'version' => 'version',
        'streamName' => 'streamName',
        'overlays' => 'Overlays',
        'audioBitrate' => 'audioBitrate',
        'videoBitrate' => 'videoBitrate',
        'enable' => 'enable',
        'name' => 'name',
        'width' => 'width',
        'interval' => 'interval',
        'fitMode' => 'fitMode',
        'saveFieldList' => 'saveFieldList',
        'crop' => 'crop',
        'videoCodec' => 'videoCodec',
        'height' => 'height',
        'sourceRectangle' => 'sourceRectangle'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'followSource' => 'setFollowSource',
        'implementation' => 'setImplementation',
        'gpuid' => 'setGpuid',
        'profile' => 'setProfile',
        'serverName' => 'setServerName',
        'description' => 'setDescription',
        'audioCodec' => 'setAudioCodec',
        'version' => 'setVersion',
        'streamName' => 'setStreamName',
        'overlays' => 'setOverlays',
        'audioBitrate' => 'setAudioBitrate',
        'videoBitrate' => 'setVideoBitrate',
        'enable' => 'setEnable',
        'name' => 'setName',
        'width' => 'setWidth',
        'interval' => 'setInterval',
        'fitMode' => 'setFitMode',
        'saveFieldList' => 'setSaveFieldList',
        'crop' => 'setCrop',
        'videoCodec' => 'setVideoCodec',
        'height' => 'setHeight',
        'sourceRectangle' => 'setSourceRectangle'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'followSource' => 'getFollowSource',
        'implementation' => 'getImplementation',
        'gpuid' => 'getGpuid',
        'profile' => 'getProfile',
        'serverName' => 'getServerName',
        'description' => 'getDescription',
        'audioCodec' => 'getAudioCodec',
        'version' => 'getVersion',
        'streamName' => 'getStreamName',
        'overlays' => 'getOverlays',
        'audioBitrate' => 'getAudioBitrate',
        'videoBitrate' => 'getVideoBitrate',
        'enable' => 'getEnable',
        'name' => 'getName',
        'width' => 'getWidth',
        'interval' => 'getInterval',
        'fitMode' => 'getFitMode',
        'saveFieldList' => 'getSaveFieldList',
        'crop' => 'getCrop',
        'videoCodec' => 'getVideoCodec',
        'height' => 'getHeight',
        'sourceRectangle' => 'getSourceRectangle'
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
        $this->container['followSource'] = isset($data['followSource']) ? $data['followSource'] : null;
        $this->container['implementation'] = isset($data['implementation']) ? $data['implementation'] : null;
        $this->container['gpuid'] = isset($data['gpuid']) ? $data['gpuid'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['audioCodec'] = isset($data['audioCodec']) ? $data['audioCodec'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['streamName'] = isset($data['streamName']) ? $data['streamName'] : null;
        $this->container['overlays'] = isset($data['overlays']) ? $data['overlays'] : null;
        $this->container['audioBitrate'] = isset($data['audioBitrate']) ? $data['audioBitrate'] : null;
        $this->container['videoBitrate'] = isset($data['videoBitrate']) ? $data['videoBitrate'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['fitMode'] = isset($data['fitMode']) ? $data['fitMode'] : null;
        $this->container['saveFieldList'] = isset($data['saveFieldList']) ? $data['saveFieldList'] : null;
        $this->container['crop'] = isset($data['crop']) ? $data['crop'] : null;
        $this->container['videoCodec'] = isset($data['videoCodec']) ? $data['videoCodec'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['sourceRectangle'] = isset($data['sourceRectangle']) ? $data['sourceRectangle'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['followSource'] === null) {
            $invalid_properties[] = "'followSource' can't be null";
        }
        if ($this->container['implementation'] === null) {
            $invalid_properties[] = "'implementation' can't be null";
        }
        if ($this->container['gpuid'] === null) {
            $invalid_properties[] = "'gpuid' can't be null";
        }
        if ($this->container['profile'] === null) {
            $invalid_properties[] = "'profile' can't be null";
        }
        if ($this->container['serverName'] === null) {
            $invalid_properties[] = "'serverName' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ($this->container['audioCodec'] === null) {
            $invalid_properties[] = "'audioCodec' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalid_properties[] = "'version' can't be null";
        }
        if ($this->container['streamName'] === null) {
            $invalid_properties[] = "'streamName' can't be null";
        }
        if ($this->container['overlays'] === null) {
            $invalid_properties[] = "'overlays' can't be null";
        }
        if ($this->container['audioBitrate'] === null) {
            $invalid_properties[] = "'audioBitrate' can't be null";
        }
        if ($this->container['videoBitrate'] === null) {
            $invalid_properties[] = "'videoBitrate' can't be null";
        }
        if ($this->container['enable'] === null) {
            $invalid_properties[] = "'enable' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalid_properties[] = "'width' can't be null";
        }
        if ($this->container['interval'] === null) {
            $invalid_properties[] = "'interval' can't be null";
        }
        if ($this->container['fitMode'] === null) {
            $invalid_properties[] = "'fitMode' can't be null";
        }
        if ($this->container['crop'] === null) {
            $invalid_properties[] = "'crop' can't be null";
        }
        if ($this->container['videoCodec'] === null) {
            $invalid_properties[] = "'videoCodec' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalid_properties[] = "'height' can't be null";
        }
        if ($this->container['sourceRectangle'] === null) {
            $invalid_properties[] = "'sourceRectangle' can't be null";
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
        if ($this->container['followSource'] === null) {
            return false;
        }
        if ($this->container['implementation'] === null) {
            return false;
        }
        if ($this->container['gpuid'] === null) {
            return false;
        }
        if ($this->container['profile'] === null) {
            return false;
        }
        if ($this->container['serverName'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['audioCodec'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        if ($this->container['streamName'] === null) {
            return false;
        }
        if ($this->container['overlays'] === null) {
            return false;
        }
        if ($this->container['audioBitrate'] === null) {
            return false;
        }
        if ($this->container['videoBitrate'] === null) {
            return false;
        }
        if ($this->container['enable'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['width'] === null) {
            return false;
        }
        if ($this->container['interval'] === null) {
            return false;
        }
        if ($this->container['fitMode'] === null) {
            return false;
        }
        if ($this->container['crop'] === null) {
            return false;
        }
        if ($this->container['videoCodec'] === null) {
            return false;
        }
        if ($this->container['height'] === null) {
            return false;
        }
        if ($this->container['sourceRectangle'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets followSource
     * @return bool
     */
    public function getFollowSource()
    {
        return $this->container['followSource'];
    }

    /**
     * Sets followSource
     * @param bool $followSource
     * @return $this
     */
    public function setFollowSource($followSource)
    {
        $this->container['followSource'] = $followSource;

        return $this;
    }

    /**
     * Gets implementation
     * @return string
     */
    public function getImplementation()
    {
        return $this->container['implementation'];
    }

    /**
     * Sets implementation
     * @param string $implementation
     * @return $this
     */
    public function setImplementation($implementation)
    {
        $this->container['implementation'] = $implementation;

        return $this;
    }

    /**
     * Gets gpuid
     * @return int
     */
    public function getGpuid()
    {
        return $this->container['gpuid'];
    }

    /**
     * Sets gpuid
     * @param int $gpuid
     * @return $this
     */
    public function setGpuid($gpuid)
    {
        $this->container['gpuid'] = $gpuid;

        return $this;
    }

    /**
     * Gets profile
     * @return string
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     * @param string $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

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
     * Gets audioCodec
     * @return string
     */
    public function getAudioCodec()
    {
        return $this->container['audioCodec'];
    }

    /**
     * Sets audioCodec
     * @param string $audioCodec
     * @return $this
     */
    public function setAudioCodec($audioCodec)
    {
        $this->container['audioCodec'] = $audioCodec;

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
     * Gets streamName
     * @return string
     */
    public function getStreamName()
    {
        return $this->container['streamName'];
    }

    /**
     * Sets streamName
     * @param string $streamName
     * @return $this
     */
    public function setStreamName($streamName)
    {
        $this->container['streamName'] = $streamName;

        return $this;
    }

    /**
     * Gets overlays
     * @return  TranscoderOverlayEncodeConfig[]
     */
    public function getOverlays()
    {
        return $this->container['overlays'];
    }

    /**
     * Sets overlays
     * @param TranscoderOverlayEncodeConfig[] $overlays
     * @return $this
     */
    public function setOverlays($overlays)
    {
        $this->container['overlays'] = $overlays;

        return $this;
    }

    /**
     * Gets audioBitrate
     * @return string
     */
    public function getAudioBitrate()
    {
        return $this->container['audioBitrate'];
    }

    /**
     * Sets audioBitrate
     * @param string $audioBitrate
     * @return $this
     */
    public function setAudioBitrate($audioBitrate)
    {
        $this->container['audioBitrate'] = $audioBitrate;

        return $this;
    }

    /**
     * Gets videoBitrate
     * @return string
     */
    public function getVideoBitrate()
    {
        return $this->container['videoBitrate'];
    }

    /**
     * Sets videoBitrate
     * @param string $videoBitrate
     * @return $this
     */
    public function setVideoBitrate($videoBitrate)
    {
        $this->container['videoBitrate'] = $videoBitrate;

        return $this;
    }

    /**
     * Gets enable
     * @return bool
     */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
     * Sets enable
     * @param bool $enable
     * @return $this
     */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;

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
     * Gets width
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param int $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets interval
     * @return int
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     * @param int $interval
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets fitMode
     * @return string
     */
    public function getFitMode()
    {
        return $this->container['fitMode'];
    }

    /**
     * Sets fitMode
     * @param string $fitMode
     * @return $this
     */
    public function setFitMode($fitMode)
    {
        $this->container['fitMode'] = $fitMode;

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
     * Gets crop
     * @return string
     */
    public function getCrop()
    {
        return $this->container['crop'];
    }

    /**
     * Sets crop
     * @param string $crop
     * @return $this
     */
    public function setCrop($crop)
    {
        $this->container['crop'] = $crop;

        return $this;
    }

    /**
     * Gets videoCodec
     * @return string
     */
    public function getVideoCodec()
    {
        return $this->container['videoCodec'];
    }

    /**
     * Sets videoCodec
     * @param string $videoCodec
     * @return $this
     */
    public function setVideoCodec($videoCodec)
    {
        $this->container['videoCodec'] = $videoCodec;

        return $this;
    }

    /**
     * Gets height
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param int $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets sourceRectangle
     * @return string
     */
    public function getSourceRectangle()
    {
        return $this->container['sourceRectangle'];
    }

    /**
     * Sets sourceRectangle
     * @param string $sourceRectangle
     * @return $this
     */
    public function setSourceRectangle($sourceRectangle)
    {
        $this->container['sourceRectangle'] = $sourceRectangle;

        return $this;
}

}
