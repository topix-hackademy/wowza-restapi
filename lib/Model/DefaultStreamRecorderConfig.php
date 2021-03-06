<?php
/**
 * DefaultStreamRecorderConfig
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
 * DefaultStreamRecorderConfig Class Doc Comment
 *
 * @category    Class
 * @package     WowzaApi
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DefaultStreamRecorderConfig extends SwaggerModel
 {

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DefaultStreamRecorderConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'instanceName' => 'string',
        'fileVersionDelegateName' => 'string',
        'serverName' => 'string',
        'recorderName' => 'string',
        'currentSize' => 'int',
        'segmentSchedule' => 'string',
        'startOnKeyFrame' => 'bool',
        'outputPath' => 'string',
        'currentFile' => 'string',
        'saveFieldList' => 'string[]',
        'recordData' => 'bool',
        'applicationName' => 'string',
        'moveFirstVideoFrameToZero' => 'bool',
        'recorderErrorString' => 'string',
        'segmentSize' => 'int',
        'defaultRecorder' => 'bool',
        'splitOnTcDiscontinuity' => 'bool',
        'version' => 'string',
        'baseFile' => 'string',
        'segmentDuration' => 'int',
        'recordingStartTime' => 'string',
        'fileTemplate' => 'string',
        'segmentationType' => 'string',
        'currentDuration' => 'int',
        'fileFormat' => 'string',
        'recorderState' => 'string',
        'option' => 'string'
);

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'instanceName' => 'instanceName',
        'fileVersionDelegateName' => 'fileVersionDelegateName',
        'serverName' => 'serverName',
        'recorderName' => 'recorderName',
        'currentSize' => 'currentSize',
        'segmentSchedule' => 'segmentSchedule',
        'startOnKeyFrame' => 'startOnKeyFrame',
        'outputPath' => 'outputPath',
        'currentFile' => 'currentFile',
        'saveFieldList' => 'saveFieldList',
        'recordData' => 'recordData',
        'applicationName' => 'applicationName',
        'moveFirstVideoFrameToZero' => 'moveFirstVideoFrameToZero',
        'recorderErrorString' => 'recorderErrorString',
        'segmentSize' => 'segmentSize',
        'defaultRecorder' => 'defaultRecorder',
        'splitOnTcDiscontinuity' => 'splitOnTcDiscontinuity',
        'version' => 'version',
        'baseFile' => 'baseFile',
        'segmentDuration' => 'segmentDuration',
        'recordingStartTime' => 'recordingStartTime',
        'fileTemplate' => 'fileTemplate',
        'segmentationType' => 'segmentationType',
        'currentDuration' => 'currentDuration',
        'fileFormat' => 'fileFormat',
        'recorderState' => 'recorderState',
        'option' => 'option'
);

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'instanceName' => 'setInstanceName',
        'fileVersionDelegateName' => 'setFileVersionDelegateName',
        'serverName' => 'setServerName',
        'recorderName' => 'setRecorderName',
        'currentSize' => 'setCurrentSize',
        'segmentSchedule' => 'setSegmentSchedule',
        'startOnKeyFrame' => 'setStartOnKeyFrame',
        'outputPath' => 'setOutputPath',
        'currentFile' => 'setCurrentFile',
        'saveFieldList' => 'setSaveFieldList',
        'recordData' => 'setRecordData',
        'applicationName' => 'setApplicationName',
        'moveFirstVideoFrameToZero' => 'setMoveFirstVideoFrameToZero',
        'recorderErrorString' => 'setRecorderErrorString',
        'segmentSize' => 'setSegmentSize',
        'defaultRecorder' => 'setDefaultRecorder',
        'splitOnTcDiscontinuity' => 'setSplitOnTcDiscontinuity',
        'version' => 'setVersion',
        'baseFile' => 'setBaseFile',
        'segmentDuration' => 'setSegmentDuration',
        'recordingStartTime' => 'setRecordingStartTime',
        'fileTemplate' => 'setFileTemplate',
        'segmentationType' => 'setSegmentationType',
        'currentDuration' => 'setCurrentDuration',
        'fileFormat' => 'setFileFormat',
        'recorderState' => 'setRecorderState',
        'option' => 'setOption'
);

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'instanceName' => 'getInstanceName',
        'fileVersionDelegateName' => 'getFileVersionDelegateName',
        'serverName' => 'getServerName',
        'recorderName' => 'getRecorderName',
        'currentSize' => 'getCurrentSize',
        'segmentSchedule' => 'getSegmentSchedule',
        'startOnKeyFrame' => 'getStartOnKeyFrame',
        'outputPath' => 'getOutputPath',
        'currentFile' => 'getCurrentFile',
        'saveFieldList' => 'getSaveFieldList',
        'recordData' => 'getRecordData',
        'applicationName' => 'getApplicationName',
        'moveFirstVideoFrameToZero' => 'getMoveFirstVideoFrameToZero',
        'recorderErrorString' => 'getRecorderErrorString',
        'segmentSize' => 'getSegmentSize',
        'defaultRecorder' => 'getDefaultRecorder',
        'splitOnTcDiscontinuity' => 'getSplitOnTcDiscontinuity',
        'version' => 'getVersion',
        'baseFile' => 'getBaseFile',
        'segmentDuration' => 'getSegmentDuration',
        'recordingStartTime' => 'getRecordingStartTime',
        'fileTemplate' => 'getFileTemplate',
        'segmentationType' => 'getSegmentationType',
        'currentDuration' => 'getCurrentDuration',
        'fileFormat' => 'getFileFormat',
        'recorderState' => 'getRecorderState',
        'option' => 'getOption'
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
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['fileVersionDelegateName'] = isset($data['fileVersionDelegateName']) ? $data['fileVersionDelegateName'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['recorderName'] = isset($data['recorderName']) ? $data['recorderName'] : null;
        $this->container['currentSize'] = isset($data['currentSize']) ? $data['currentSize'] : null;
        $this->container['segmentSchedule'] = isset($data['segmentSchedule']) ? $data['segmentSchedule'] : null;
        $this->container['startOnKeyFrame'] = isset($data['startOnKeyFrame']) ? $data['startOnKeyFrame'] : null;
        $this->container['outputPath'] = isset($data['outputPath']) ? $data['outputPath'] : null;
        $this->container['currentFile'] = isset($data['currentFile']) ? $data['currentFile'] : null;
        $this->container['saveFieldList'] = isset($data['saveFieldList']) ? $data['saveFieldList'] : null;
        $this->container['recordData'] = isset($data['recordData']) ? $data['recordData'] : null;
        $this->container['applicationName'] = isset($data['applicationName']) ? $data['applicationName'] : null;
        $this->container['moveFirstVideoFrameToZero'] = isset($data['moveFirstVideoFrameToZero']) ? $data['moveFirstVideoFrameToZero'] : null;
        $this->container['recorderErrorString'] = isset($data['recorderErrorString']) ? $data['recorderErrorString'] : null;
        $this->container['segmentSize'] = isset($data['segmentSize']) ? $data['segmentSize'] : null;
        $this->container['defaultRecorder'] = isset($data['defaultRecorder']) ? $data['defaultRecorder'] : null;
        $this->container['splitOnTcDiscontinuity'] = isset($data['splitOnTcDiscontinuity']) ? $data['splitOnTcDiscontinuity'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['baseFile'] = isset($data['baseFile']) ? $data['baseFile'] : null;
        $this->container['segmentDuration'] = isset($data['segmentDuration']) ? $data['segmentDuration'] : null;
        $this->container['recordingStartTime'] = isset($data['recordingStartTime']) ? $data['recordingStartTime'] : null;
        $this->container['fileTemplate'] = isset($data['fileTemplate']) ? $data['fileTemplate'] : null;
        $this->container['segmentationType'] = isset($data['segmentationType']) ? $data['segmentationType'] : null;
        $this->container['currentDuration'] = isset($data['currentDuration']) ? $data['currentDuration'] : null;
        $this->container['fileFormat'] = isset($data['fileFormat']) ? $data['fileFormat'] : null;
        $this->container['recorderState'] = isset($data['recorderState']) ? $data['recorderState'] : null;
        $this->container['option'] = isset($data['option']) ? $data['option'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['instanceName'] === null) {
            $invalid_properties[] = "'instanceName' can't be null";
        }
        if ($this->container['fileVersionDelegateName'] === null) {
            $invalid_properties[] = "'fileVersionDelegateName' can't be null";
        }
        if ($this->container['serverName'] === null) {
            $invalid_properties[] = "'serverName' can't be null";
        }
        if ($this->container['recorderName'] === null) {
            $invalid_properties[] = "'recorderName' can't be null";
        }
        if ($this->container['currentSize'] === null) {
            $invalid_properties[] = "'currentSize' can't be null";
        }
        if ($this->container['segmentSchedule'] === null) {
            $invalid_properties[] = "'segmentSchedule' can't be null";
        }
        if ($this->container['startOnKeyFrame'] === null) {
            $invalid_properties[] = "'startOnKeyFrame' can't be null";
        }
        if ($this->container['outputPath'] === null) {
            $invalid_properties[] = "'outputPath' can't be null";
        }
        if ($this->container['currentFile'] === null) {
            $invalid_properties[] = "'currentFile' can't be null";
        }
        if ($this->container['recordData'] === null) {
            $invalid_properties[] = "'recordData' can't be null";
        }
        if ($this->container['applicationName'] === null) {
            $invalid_properties[] = "'applicationName' can't be null";
        }
        if ($this->container['moveFirstVideoFrameToZero'] === null) {
            $invalid_properties[] = "'moveFirstVideoFrameToZero' can't be null";
        }
        if ($this->container['recorderErrorString'] === null) {
            $invalid_properties[] = "'recorderErrorString' can't be null";
        }
        if ($this->container['segmentSize'] === null) {
            $invalid_properties[] = "'segmentSize' can't be null";
        }
        if ($this->container['defaultRecorder'] === null) {
            $invalid_properties[] = "'defaultRecorder' can't be null";
        }
        if ($this->container['splitOnTcDiscontinuity'] === null) {
            $invalid_properties[] = "'splitOnTcDiscontinuity' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalid_properties[] = "'version' can't be null";
        }
        if ($this->container['baseFile'] === null) {
            $invalid_properties[] = "'baseFile' can't be null";
        }
        if ($this->container['segmentDuration'] === null) {
            $invalid_properties[] = "'segmentDuration' can't be null";
        }
        if ($this->container['recordingStartTime'] === null) {
            $invalid_properties[] = "'recordingStartTime' can't be null";
        }
        if ($this->container['fileTemplate'] === null) {
            $invalid_properties[] = "'fileTemplate' can't be null";
        }
        if ($this->container['segmentationType'] === null) {
            $invalid_properties[] = "'segmentationType' can't be null";
        }
        if ($this->container['currentDuration'] === null) {
            $invalid_properties[] = "'currentDuration' can't be null";
        }
        if ($this->container['fileFormat'] === null) {
            $invalid_properties[] = "'fileFormat' can't be null";
        }
        if ($this->container['recorderState'] === null) {
            $invalid_properties[] = "'recorderState' can't be null";
        }
        if ($this->container['option'] === null) {
            $invalid_properties[] = "'option' can't be null";
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
        if ($this->container['instanceName'] === null) {
            return false;
        }
        if ($this->container['fileVersionDelegateName'] === null) {
            return false;
        }
        if ($this->container['serverName'] === null) {
            return false;
        }
        if ($this->container['recorderName'] === null) {
            return false;
        }
        if ($this->container['currentSize'] === null) {
            return false;
        }
        if ($this->container['segmentSchedule'] === null) {
            return false;
        }
        if ($this->container['startOnKeyFrame'] === null) {
            return false;
        }
        if ($this->container['outputPath'] === null) {
            return false;
        }
        if ($this->container['currentFile'] === null) {
            return false;
        }
        if ($this->container['recordData'] === null) {
            return false;
        }
        if ($this->container['applicationName'] === null) {
            return false;
        }
        if ($this->container['moveFirstVideoFrameToZero'] === null) {
            return false;
        }
        if ($this->container['recorderErrorString'] === null) {
            return false;
        }
        if ($this->container['segmentSize'] === null) {
            return false;
        }
        if ($this->container['defaultRecorder'] === null) {
            return false;
        }
        if ($this->container['splitOnTcDiscontinuity'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        if ($this->container['baseFile'] === null) {
            return false;
        }
        if ($this->container['segmentDuration'] === null) {
            return false;
        }
        if ($this->container['recordingStartTime'] === null) {
            return false;
        }
        if ($this->container['fileTemplate'] === null) {
            return false;
        }
        if ($this->container['segmentationType'] === null) {
            return false;
        }
        if ($this->container['currentDuration'] === null) {
            return false;
        }
        if ($this->container['fileFormat'] === null) {
            return false;
        }
        if ($this->container['recorderState'] === null) {
            return false;
        }
        if ($this->container['option'] === null) {
            return false;
        }
        return true;
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
     * Gets fileVersionDelegateName
     * @return string
     */
    public function getFileVersionDelegateName()
    {
        return $this->container['fileVersionDelegateName'];
    }

    /**
     * Sets fileVersionDelegateName
     * @param string $fileVersionDelegateName
     * @return $this
     */
    public function setFileVersionDelegateName($fileVersionDelegateName)
    {
        $this->container['fileVersionDelegateName'] = $fileVersionDelegateName;

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
     * Gets recorderName
     * @return string
     */
    public function getRecorderName()
    {
        return $this->container['recorderName'];
    }

    /**
     * Sets recorderName
     * @param string $recorderName
     * @return $this
     */
    public function setRecorderName($recorderName)
    {
        $this->container['recorderName'] = $recorderName;

        return $this;
    }

    /**
     * Gets currentSize
     * @return int
     */
    public function getCurrentSize()
    {
        return $this->container['currentSize'];
    }

    /**
     * Sets currentSize
     * @param int $currentSize
     * @return $this
     */
    public function setCurrentSize($currentSize)
    {
        $this->container['currentSize'] = $currentSize;

        return $this;
    }

    /**
     * Gets segmentSchedule
     * @return string
     */
    public function getSegmentSchedule()
    {
        return $this->container['segmentSchedule'];
    }

    /**
     * Sets segmentSchedule
     * @param string $segmentSchedule
     * @return $this
     */
    public function setSegmentSchedule($segmentSchedule)
    {
        $this->container['segmentSchedule'] = $segmentSchedule;

        return $this;
    }

    /**
     * Gets startOnKeyFrame
     * @return bool
     */
    public function getStartOnKeyFrame()
    {
        return $this->container['startOnKeyFrame'];
    }

    /**
     * Sets startOnKeyFrame
     * @param bool $startOnKeyFrame
     * @return $this
     */
    public function setStartOnKeyFrame($startOnKeyFrame)
    {
        $this->container['startOnKeyFrame'] = $startOnKeyFrame;

        return $this;
    }

    /**
     * Gets outputPath
     * @return string
     */
    public function getOutputPath()
    {
        return $this->container['outputPath'];
    }

    /**
     * Sets outputPath
     * @param string $outputPath
     * @return $this
     */
    public function setOutputPath($outputPath)
    {
        $this->container['outputPath'] = $outputPath;

        return $this;
    }

    /**
     * Gets currentFile
     * @return string
     */
    public function getCurrentFile()
    {
        return $this->container['currentFile'];
    }

    /**
     * Sets currentFile
     * @param string $currentFile
     * @return $this
     */
    public function setCurrentFile($currentFile)
    {
        $this->container['currentFile'] = $currentFile;

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
     * Gets recordData
     * @return bool
     */
    public function getRecordData()
    {
        return $this->container['recordData'];
    }

    /**
     * Sets recordData
     * @param bool $recordData
     * @return $this
     */
    public function setRecordData($recordData)
    {
        $this->container['recordData'] = $recordData;

        return $this;
    }

    /**
     * Gets applicationName
     * @return string
     */
    public function getApplicationName()
    {
        return $this->container['applicationName'];
    }

    /**
     * Sets applicationName
     * @param string $applicationName
     * @return $this
     */
    public function setApplicationName($applicationName)
    {
        $this->container['applicationName'] = $applicationName;

        return $this;
    }

    /**
     * Gets moveFirstVideoFrameToZero
     * @return bool
     */
    public function getMoveFirstVideoFrameToZero()
    {
        return $this->container['moveFirstVideoFrameToZero'];
    }

    /**
     * Sets moveFirstVideoFrameToZero
     * @param bool $moveFirstVideoFrameToZero
     * @return $this
     */
    public function setMoveFirstVideoFrameToZero($moveFirstVideoFrameToZero)
    {
        $this->container['moveFirstVideoFrameToZero'] = $moveFirstVideoFrameToZero;

        return $this;
    }

    /**
     * Gets recorderErrorString
     * @return string
     */
    public function getRecorderErrorString()
    {
        return $this->container['recorderErrorString'];
    }

    /**
     * Sets recorderErrorString
     * @param string $recorderErrorString
     * @return $this
     */
    public function setRecorderErrorString($recorderErrorString)
    {
        $this->container['recorderErrorString'] = $recorderErrorString;

        return $this;
    }

    /**
     * Gets segmentSize
     * @return int
     */
    public function getSegmentSize()
    {
        return $this->container['segmentSize'];
    }

    /**
     * Sets segmentSize
     * @param int $segmentSize
     * @return $this
     */
    public function setSegmentSize($segmentSize)
    {
        $this->container['segmentSize'] = $segmentSize;

        return $this;
    }

    /**
     * Gets defaultRecorder
     * @return bool
     */
    public function getDefaultRecorder()
    {
        return $this->container['defaultRecorder'];
    }

    /**
     * Sets defaultRecorder
     * @param bool $defaultRecorder
     * @return $this
     */
    public function setDefaultRecorder($defaultRecorder)
    {
        $this->container['defaultRecorder'] = $defaultRecorder;

        return $this;
    }

    /**
     * Gets splitOnTcDiscontinuity
     * @return bool
     */
    public function getSplitOnTcDiscontinuity()
    {
        return $this->container['splitOnTcDiscontinuity'];
    }

    /**
     * Sets splitOnTcDiscontinuity
     * @param bool $splitOnTcDiscontinuity
     * @return $this
     */
    public function setSplitOnTcDiscontinuity($splitOnTcDiscontinuity)
    {
        $this->container['splitOnTcDiscontinuity'] = $splitOnTcDiscontinuity;

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
     * Gets baseFile
     * @return string
     */
    public function getBaseFile()
    {
        return $this->container['baseFile'];
    }

    /**
     * Sets baseFile
     * @param string $baseFile
     * @return $this
     */
    public function setBaseFile($baseFile)
    {
        $this->container['baseFile'] = $baseFile;

        return $this;
    }

    /**
     * Gets segmentDuration
     * @return int
     */
    public function getSegmentDuration()
    {
        return $this->container['segmentDuration'];
    }

    /**
     * Sets segmentDuration
     * @param int $segmentDuration
     * @return $this
     */
    public function setSegmentDuration($segmentDuration)
    {
        $this->container['segmentDuration'] = $segmentDuration;

        return $this;
    }

    /**
     * Gets recordingStartTime
     * @return string
     */
    public function getRecordingStartTime()
    {
        return $this->container['recordingStartTime'];
    }

    /**
     * Sets recordingStartTime
     * @param string $recordingStartTime
     * @return $this
     */
    public function setRecordingStartTime($recordingStartTime)
    {
        $this->container['recordingStartTime'] = $recordingStartTime;

        return $this;
    }

    /**
     * Gets fileTemplate
     * @return string
     */
    public function getFileTemplate()
    {
        return $this->container['fileTemplate'];
    }

    /**
     * Sets fileTemplate
     * @param string $fileTemplate
     * @return $this
     */
    public function setFileTemplate($fileTemplate)
    {
        $this->container['fileTemplate'] = $fileTemplate;

        return $this;
    }

    /**
     * Gets segmentationType
     * @return string
     */
    public function getSegmentationType()
    {
        return $this->container['segmentationType'];
    }

    /**
     * Sets segmentationType
     * @param string $segmentationType
     * @return $this
     */
    public function setSegmentationType($segmentationType)
    {
        $this->container['segmentationType'] = $segmentationType;

        return $this;
    }

    /**
     * Gets currentDuration
     * @return int
     */
    public function getCurrentDuration()
    {
        return $this->container['currentDuration'];
    }

    /**
     * Sets currentDuration
     * @param int $currentDuration
     * @return $this
     */
    public function setCurrentDuration($currentDuration)
    {
        $this->container['currentDuration'] = $currentDuration;

        return $this;
    }

    /**
     * Gets fileFormat
     * @return string
     */
    public function getFileFormat()
    {
        return $this->container['fileFormat'];
    }

    /**
     * Sets fileFormat
     * @param string $fileFormat
     * @return $this
     */
    public function setFileFormat($fileFormat)
    {
        $this->container['fileFormat'] = $fileFormat;

        return $this;
    }

    /**
     * Gets recorderState
     * @return string
     */
    public function getRecorderState()
    {
        return $this->container['recorderState'];
    }

    /**
     * Sets recorderState
     * @param string $recorderState
     * @return $this
     */
    public function setRecorderState($recorderState)
    {
        $this->container['recorderState'] = $recorderState;

        return $this;
    }

    /**
     * Gets option
     * @return string
     */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
     * Sets option
     * @param string $option
     * @return $this
     */
    public function setOption($option)
    {
        $this->container['option'] = $option;

        return $this;
}

}
