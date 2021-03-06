<?php
/**
 * SMILFileStreamConfig
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
 * SMILFileStreamConfig Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SMILFileStreamConfig extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SMILFileStreamConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'systemLanguage' => 'string',
        'dur' => 'string',
        'ngrp' => 'string',
        'keyFrameOnly' => 'string',
        'src' => 'string',
        'systemBitrate' => 'string',
        'serverName' => 'string',
        'videoCodecId' => 'string',
        'type' => 'string',
        'version' => 'string',
        'audioBitrate' => 'string',
        'audioCodecId' => 'string',
        'videoBitrate' => 'string',
        'isWowzaCaptionStream' => 'string',
        'videoOnly' => 'string',
        'audioOnly' => 'string',
        'width' => 'string',
        'saveFieldList' => 'string[]',
        'idx' => 'int',
        'begin' => 'string',
        'wowzaCaptionIngestType' => 'string',
        'height' => 'string'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'systemLanguage' => 'systemLanguage',
        'dur' => 'dur',
        'ngrp' => 'ngrp',
        'keyFrameOnly' => 'keyFrameOnly',
        'src' => 'src',
        'systemBitrate' => 'systemBitrate',
        'serverName' => 'serverName',
        'videoCodecId' => 'videoCodecId',
        'type' => 'type',
        'version' => 'version',
        'audioBitrate' => 'audioBitrate',
        'audioCodecId' => 'audioCodecId',
        'videoBitrate' => 'videoBitrate',
        'isWowzaCaptionStream' => 'isWowzaCaptionStream',
        'videoOnly' => 'videoOnly',
        'audioOnly' => 'audioOnly',
        'width' => 'width',
        'saveFieldList' => 'saveFieldList',
        'idx' => 'idx',
        'begin' => 'begin',
        'wowzaCaptionIngestType' => 'wowzaCaptionIngestType',
        'height' => 'height'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'systemLanguage' => 'setSystemLanguage',
        'dur' => 'setDur',
        'ngrp' => 'setNgrp',
        'keyFrameOnly' => 'setKeyFrameOnly',
        'src' => 'setSrc',
        'systemBitrate' => 'setSystemBitrate',
        'serverName' => 'setServerName',
        'videoCodecId' => 'setVideoCodecId',
        'type' => 'setType',
        'version' => 'setVersion',
        'audioBitrate' => 'setAudioBitrate',
        'audioCodecId' => 'setAudioCodecId',
        'videoBitrate' => 'setVideoBitrate',
        'isWowzaCaptionStream' => 'setIsWowzaCaptionStream',
        'videoOnly' => 'setVideoOnly',
        'audioOnly' => 'setAudioOnly',
        'width' => 'setWidth',
        'saveFieldList' => 'setSaveFieldList',
        'idx' => 'setIdx',
        'begin' => 'setBegin',
        'wowzaCaptionIngestType' => 'setWowzaCaptionIngestType',
        'height' => 'setHeight'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'systemLanguage' => 'getSystemLanguage',
        'dur' => 'getDur',
        'ngrp' => 'getNgrp',
        'keyFrameOnly' => 'getKeyFrameOnly',
        'src' => 'getSrc',
        'systemBitrate' => 'getSystemBitrate',
        'serverName' => 'getServerName',
        'videoCodecId' => 'getVideoCodecId',
        'type' => 'getType',
        'version' => 'getVersion',
        'audioBitrate' => 'getAudioBitrate',
        'audioCodecId' => 'getAudioCodecId',
        'videoBitrate' => 'getVideoBitrate',
        'isWowzaCaptionStream' => 'getIsWowzaCaptionStream',
        'videoOnly' => 'getVideoOnly',
        'audioOnly' => 'getAudioOnly',
        'width' => 'getWidth',
        'saveFieldList' => 'getSaveFieldList',
        'idx' => 'getIdx',
        'begin' => 'getBegin',
        'wowzaCaptionIngestType' => 'getWowzaCaptionIngestType',
        'height' => 'getHeight'
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
        $this->container['systemLanguage'] = isset($data['systemLanguage']) ? $data['systemLanguage'] : null;
        $this->container['dur'] = isset($data['dur']) ? $data['dur'] : null;
        $this->container['ngrp'] = isset($data['ngrp']) ? $data['ngrp'] : null;
        $this->container['keyFrameOnly'] = isset($data['keyFrameOnly']) ? $data['keyFrameOnly'] : null;
        $this->container['src'] = isset($data['src']) ? $data['src'] : null;
        $this->container['systemBitrate'] = isset($data['systemBitrate']) ? $data['systemBitrate'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['videoCodecId'] = isset($data['videoCodecId']) ? $data['videoCodecId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['audioBitrate'] = isset($data['audioBitrate']) ? $data['audioBitrate'] : null;
        $this->container['audioCodecId'] = isset($data['audioCodecId']) ? $data['audioCodecId'] : null;
        $this->container['videoBitrate'] = isset($data['videoBitrate']) ? $data['videoBitrate'] : null;
        $this->container['isWowzaCaptionStream'] = isset($data['isWowzaCaptionStream']) ? $data['isWowzaCaptionStream'] : null;
        $this->container['videoOnly'] = isset($data['videoOnly']) ? $data['videoOnly'] : null;
        $this->container['audioOnly'] = isset($data['audioOnly']) ? $data['audioOnly'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['saveFieldList'] = isset($data['saveFieldList']) ? $data['saveFieldList'] : null;
        $this->container['idx'] = isset($data['idx']) ? $data['idx'] : null;
        $this->container['begin'] = isset($data['begin']) ? $data['begin'] : null;
        $this->container['wowzaCaptionIngestType'] = isset($data['wowzaCaptionIngestType']) ? $data['wowzaCaptionIngestType'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['systemLanguage'] === null) {
            $invalid_properties[] = "'systemLanguage' can't be null";
        }
        if ($this->container['dur'] === null) {
            $invalid_properties[] = "'dur' can't be null";
        }
        if ($this->container['ngrp'] === null) {
            $invalid_properties[] = "'ngrp' can't be null";
        }
        if ($this->container['keyFrameOnly'] === null) {
            $invalid_properties[] = "'keyFrameOnly' can't be null";
        }
        if ($this->container['src'] === null) {
            $invalid_properties[] = "'src' can't be null";
        }
        if ($this->container['systemBitrate'] === null) {
            $invalid_properties[] = "'systemBitrate' can't be null";
        }
        if ($this->container['serverName'] === null) {
            $invalid_properties[] = "'serverName' can't be null";
        }
        if ($this->container['videoCodecId'] === null) {
            $invalid_properties[] = "'videoCodecId' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalid_properties[] = "'version' can't be null";
        }
        if ($this->container['audioBitrate'] === null) {
            $invalid_properties[] = "'audioBitrate' can't be null";
        }
        if ($this->container['audioCodecId'] === null) {
            $invalid_properties[] = "'audioCodecId' can't be null";
        }
        if ($this->container['videoBitrate'] === null) {
            $invalid_properties[] = "'videoBitrate' can't be null";
        }
        if ($this->container['isWowzaCaptionStream'] === null) {
            $invalid_properties[] = "'isWowzaCaptionStream' can't be null";
        }
        if ($this->container['videoOnly'] === null) {
            $invalid_properties[] = "'videoOnly' can't be null";
        }
        if ($this->container['audioOnly'] === null) {
            $invalid_properties[] = "'audioOnly' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalid_properties[] = "'width' can't be null";
        }
        if ($this->container['idx'] === null) {
            $invalid_properties[] = "'idx' can't be null";
        }
        if ($this->container['begin'] === null) {
            $invalid_properties[] = "'begin' can't be null";
        }
        if ($this->container['wowzaCaptionIngestType'] === null) {
            $invalid_properties[] = "'wowzaCaptionIngestType' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalid_properties[] = "'height' can't be null";
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
        if ($this->container['systemLanguage'] === null) {
            return false;
        }
        if ($this->container['dur'] === null) {
            return false;
        }
        if ($this->container['ngrp'] === null) {
            return false;
        }
        if ($this->container['keyFrameOnly'] === null) {
            return false;
        }
        if ($this->container['src'] === null) {
            return false;
        }
        if ($this->container['systemBitrate'] === null) {
            return false;
        }
        if ($this->container['serverName'] === null) {
            return false;
        }
        if ($this->container['videoCodecId'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        if ($this->container['audioBitrate'] === null) {
            return false;
        }
        if ($this->container['audioCodecId'] === null) {
            return false;
        }
        if ($this->container['videoBitrate'] === null) {
            return false;
        }
        if ($this->container['isWowzaCaptionStream'] === null) {
            return false;
        }
        if ($this->container['videoOnly'] === null) {
            return false;
        }
        if ($this->container['audioOnly'] === null) {
            return false;
        }
        if ($this->container['width'] === null) {
            return false;
        }
        if ($this->container['idx'] === null) {
            return false;
        }
        if ($this->container['begin'] === null) {
            return false;
        }
        if ($this->container['wowzaCaptionIngestType'] === null) {
            return false;
        }
        if ($this->container['height'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets systemLanguage
     * @return string
     */
    public function getSystemLanguage()
    {
        return $this->container['systemLanguage'];
    }

    /**
     * Sets systemLanguage
     * @param string $systemLanguage
     * @return $this
     */
    public function setSystemLanguage($systemLanguage)
    {
        $this->container['systemLanguage'] = $systemLanguage;

        return $this;
    }

    /**
     * Gets dur
     * @return string
     */
    public function getDur()
    {
        return $this->container['dur'];
    }

    /**
     * Sets dur
     * @param string $dur
     * @return $this
     */
    public function setDur($dur)
    {
        $this->container['dur'] = $dur;

        return $this;
    }

    /**
     * Gets ngrp
     * @return string
     */
    public function getNgrp()
    {
        return $this->container['ngrp'];
    }

    /**
     * Sets ngrp
     * @param string $ngrp
     * @return $this
     */
    public function setNgrp($ngrp)
    {
        $this->container['ngrp'] = $ngrp;

        return $this;
    }

    /**
     * Gets keyFrameOnly
     * @return string
     */
    public function getKeyFrameOnly()
    {
        return $this->container['keyFrameOnly'];
    }

    /**
     * Sets keyFrameOnly
     * @param string $keyFrameOnly
     * @return $this
     */
    public function setKeyFrameOnly($keyFrameOnly)
    {
        $this->container['keyFrameOnly'] = $keyFrameOnly;

        return $this;
    }

    /**
     * Gets src
     * @return string
     */
    public function getSrc()
    {
        return $this->container['src'];
    }

    /**
     * Sets src
     * @param string $src
     * @return $this
     */
    public function setSrc($src)
    {
        $this->container['src'] = $src;

        return $this;
    }

    /**
     * Gets systemBitrate
     * @return string
     */
    public function getSystemBitrate()
    {
        return $this->container['systemBitrate'];
    }

    /**
     * Sets systemBitrate
     * @param string $systemBitrate
     * @return $this
     */
    public function setSystemBitrate($systemBitrate)
    {
        $this->container['systemBitrate'] = $systemBitrate;

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
     * Gets videoCodecId
     * @return string
     */
    public function getVideoCodecId()
    {
        return $this->container['videoCodecId'];
    }

    /**
     * Sets videoCodecId
     * @param string $videoCodecId
     * @return $this
     */
    public function setVideoCodecId($videoCodecId)
    {
        $this->container['videoCodecId'] = $videoCodecId;

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
     * Gets audioCodecId
     * @return string
     */
    public function getAudioCodecId()
    {
        return $this->container['audioCodecId'];
    }

    /**
     * Sets audioCodecId
     * @param string $audioCodecId
     * @return $this
     */
    public function setAudioCodecId($audioCodecId)
    {
        $this->container['audioCodecId'] = $audioCodecId;

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
     * Gets isWowzaCaptionStream
     * @return string
     */
    public function getIsWowzaCaptionStream()
    {
        return $this->container['isWowzaCaptionStream'];
    }

    /**
     * Sets isWowzaCaptionStream
     * @param string $isWowzaCaptionStream
     * @return $this
     */
    public function setIsWowzaCaptionStream($isWowzaCaptionStream)
    {
        $this->container['isWowzaCaptionStream'] = $isWowzaCaptionStream;

        return $this;
    }

    /**
     * Gets videoOnly
     * @return string
     */
    public function getVideoOnly()
    {
        return $this->container['videoOnly'];
    }

    /**
     * Sets videoOnly
     * @param string $videoOnly
     * @return $this
     */
    public function setVideoOnly($videoOnly)
    {
        $this->container['videoOnly'] = $videoOnly;

        return $this;
    }

    /**
     * Gets audioOnly
     * @return string
     */
    public function getAudioOnly()
    {
        return $this->container['audioOnly'];
    }

    /**
     * Sets audioOnly
     * @param string $audioOnly
     * @return $this
     */
    public function setAudioOnly($audioOnly)
    {
        $this->container['audioOnly'] = $audioOnly;

        return $this;
    }

    /**
     * Gets width
     * @return string
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param string $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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
     * Gets idx
     * @return int
     */
    public function getIdx()
    {
        return $this->container['idx'];
    }

    /**
     * Sets idx
     * @param int $idx
     * @return $this
     */
    public function setIdx($idx)
    {
        $this->container['idx'] = $idx;

        return $this;
    }

    /**
     * Gets begin
     * @return string
     */
    public function getBegin()
    {
        return $this->container['begin'];
    }

    /**
     * Sets begin
     * @param string $begin
     * @return $this
     */
    public function setBegin($begin)
    {
        $this->container['begin'] = $begin;

        return $this;
    }

    /**
     * Gets wowzaCaptionIngestType
     * @return string
     */
    public function getWowzaCaptionIngestType()
    {
        return $this->container['wowzaCaptionIngestType'];
    }

    /**
     * Sets wowzaCaptionIngestType
     * @param string $wowzaCaptionIngestType
     * @return $this
     */
    public function setWowzaCaptionIngestType($wowzaCaptionIngestType)
    {
        $this->container['wowzaCaptionIngestType'] = $wowzaCaptionIngestType;

        return $this;
    }

    /**
     * Gets height
     * @return string
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param string $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
}

}
