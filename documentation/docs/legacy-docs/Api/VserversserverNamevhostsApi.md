# WowzaApi\VserversserverNamevhostsApi

All URIs are relative to *http://localhost:8087/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePublisherVhostConfig**](VserversserverNamevhostsApi.md#deletePublisherVhostConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/publishers/{publisherName} | Deletes the specified Publisher configuration
[**deleteSDPFileConfig**](VserversserverNamevhostsApi.md#deleteSDPFileConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/sdpfiles/{sdpfileName} | Deletes the specified SDP file
[**deleteSMILFileConfig**](VserversserverNamevhostsApi.md#deleteSMILFileConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles/{smilfileName} | Deletes the specified SMIL File configuration
[**deleteStartupStreamConfig**](VserversserverNamevhostsApi.md#deleteStartupStreamConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams/applications/{appName}/instances/{instanceName}/streams/{streamName} | Deletes the specified Startup Stream configuration
[**deleteStreamFileConfig**](VserversserverNamevhostsApi.md#deleteStreamFileConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName} | Deletes the specified Stream File configuration
[**deleteTranscoderEncodeConfig**](VserversserverNamevhostsApi.md#deleteTranscoderEncodeConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName} | Deletes the specified Trancoder Encode configuration
[**deleteTranscoderOverlayDecodeConfig**](VserversserverNamevhostsApi.md#deleteTranscoderOverlayDecodeConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/decode/overlays/{overlayName} | Deletes the specified Trancoder Overlay Decode configuration
[**deleteTranscoderOverlayEncodeConfig**](VserversserverNamevhostsApi.md#deleteTranscoderOverlayEncodeConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName} | Deletes the specified Trancoder Overlay Encode configuration
[**deleteTranscoderStreamNameGroupConfig**](VserversserverNamevhostsApi.md#deleteTranscoderStreamNameGroupConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups/{groupName} | Deletes the specified Trancoder StreamNameGroup configuration
[**deleteTranscoderTemplateConfig**](VserversserverNamevhostsApi.md#deleteTranscoderTemplateConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName} | Deletes the specified Trancoder Template configuration
[**getCurrentVHostStatistics**](VserversserverNamevhostsApi.md#getCurrentVHostStatistics) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/monitoring/current | Retrieves the current VHost statistics
[**getHistoricVHostStatistics**](VserversserverNamevhostsApi.md#getHistoricVHostStatistics) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/monitoring/historic | Retrieves the historic VHost statistics
[**getHostPortConfig**](VserversserverNamevhostsApi.md#getHostPortConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/hostports/{portname} | Retrieves the HostPort for the specifed vhost and port
[**getHostPortConfigAdv**](VserversserverNamevhostsApi.md#getHostPortConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/hostports/{portname}/adv | Retrieves the advanced HostPort configuration for the specified vhost and port
[**getHostPortsConfig**](VserversserverNamevhostsApi.md#getHostPortsConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/hostports | Retrieves the list of server HostPorts for the specified vhost
[**getHostportsTuneConfig**](VserversserverNamevhostsApi.md#getHostportsTuneConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/tunehostports | Retrieves the host port configuration used for server tuning for the specified vhost
[**getMediaCacheStoreList**](VserversserverNamevhostsApi.md#getMediaCacheStoreList) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/mediacache/stores | Retrieves all entries in the MediaCache system
[**getPublisherVhostConfig**](VserversserverNamevhostsApi.md#getPublisherVhostConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/publishers/{publisherName} | Retrieves the specified Publisher configuration
[**getPublishersVhostConfig**](VserversserverNamevhostsApi.md#getPublishersVhostConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/publishers | Retrieves the list of Publishers for the specified VHost
[**getSDPFilesConfig**](VserversserverNamevhostsApi.md#getSDPFilesConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/sdpfiles | Retrieves the list of SDP Files for the specified VHost
[**getSMILFileConfig**](VserversserverNamevhostsApi.md#getSMILFileConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles/{smilfileName} | Retrieves the specified SMIL File configuration
[**getSMILFilesConfig**](VserversserverNamevhostsApi.md#getSMILFilesConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles | Retrieves the list of SMIL Files for the specified VHost
[**getSSLConfig**](VserversserverNamevhostsApi.md#getSSLConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/hostports/{portname}/ssl | Retrieves the SSL configuration for the specified vhost and port
[**getStartupStreamConfig**](VserversserverNamevhostsApi.md#getStartupStreamConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams/applications/{appName}/instances/{instanceName}/streams/{streamName} | Retrieves the specified Startup Stream configuration
[**getStartupStreamsConfig**](VserversserverNamevhostsApi.md#getStartupStreamsConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams | Retrieves the list of Startup Streams for the specified VHost
[**getStreamFileConfig**](VserversserverNamevhostsApi.md#getStreamFileConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName} | Retrieves the specified Stream File configuration
[**getStreamFileConfigAdv**](VserversserverNamevhostsApi.md#getStreamFileConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName}/adv | Retrieves the Advanced Stream File configuration
[**getStreamFilesConfig**](VserversserverNamevhostsApi.md#getStreamFilesConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles | Retrieves the list of Stream Files for the specified VHost
[**getTranscoderConfig**](VserversserverNamevhostsApi.md#getTranscoderConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder | Retrieves the Transcoder configuration for the specified VHost
[**getTranscoderEncodeConfig**](VserversserverNamevhostsApi.md#getTranscoderEncodeConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName} | Retrieves the specified Trancoder Encode configuration
[**getTranscoderEncodeConfigAdv**](VserversserverNamevhostsApi.md#getTranscoderEncodeConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}/adv | Retrieves the Advanced Transcoder Encode configuration
[**getTranscoderEncodesConfig**](VserversserverNamevhostsApi.md#getTranscoderEncodesConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes | Retrieves the list of Transcoder Encode Configurations for the specified VHost
[**getTranscoderOverlayDecodeConfig**](VserversserverNamevhostsApi.md#getTranscoderOverlayDecodeConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/decode/overlays/{overlayName} | Retrieves the specified Trancoder Overlay Decode configuration
[**getTranscoderOverlayEncodeConfig**](VserversserverNamevhostsApi.md#getTranscoderOverlayEncodeConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName} | Retrieves the specified Trancoder Overlay Encode configuration
[**getTranscoderStreamNameGroupConfig**](VserversserverNamevhostsApi.md#getTranscoderStreamNameGroupConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups/{groupName} | Retrieves the specified Trancoder StreamNameGroup configuration
[**getTranscoderStreamNameGroupsConfig**](VserversserverNamevhostsApi.md#getTranscoderStreamNameGroupsConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups | Retrieves the list of Transcoder Stream Name Groups for the specified Template
[**getTranscoderTemplateConfig**](VserversserverNamevhostsApi.md#getTranscoderTemplateConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName} | Retrieves the specified Trancoder Template configuration
[**getTranscoderTemplateConfigAdv**](VserversserverNamevhostsApi.md#getTranscoderTemplateConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/adv | Retrieves the Advanced Transcoder Template configuration
[**getTranscoderTemplatesConfig**](VserversserverNamevhostsApi.md#getTranscoderTemplatesConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates | Retrieves the list of Transcoder Template Configurations for the specified VHost
[**getVHostConfig**](VserversserverNamevhostsApi.md#getVHostConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName} | Retrieves the specified VHost configuration
[**getVHostConfigAdv**](VserversserverNamevhostsApi.md#getVHostConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/adv | Retrieves the specified advanced VHost configuration
[**getVHostTuneConfig**](VserversserverNamevhostsApi.md#getVHostTuneConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/tune | Retrieves the Tuning configuration for the specifed vhost
[**getVHostsConfig**](VserversserverNamevhostsApi.md#getVHostsConfig) | **GET** /v2/servers/{serverName}/vhosts | Retrieves the list of VHosts
[**postPublisherVhostConfig**](VserversserverNamevhostsApi.md#postPublisherVhostConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/publishers/{publisherName} | Adds the specified Publisher configuration
[**postPublishersVhostConfig**](VserversserverNamevhostsApi.md#postPublishersVhostConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/publishers | Add a Publisher to list of Publishers for the specified VHost
[**postSMILFileConfig**](VserversserverNamevhostsApi.md#postSMILFileConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles/{smilfileName} | Adds the specified SMIL File configuration
[**postSMILFilesConfig**](VserversserverNamevhostsApi.md#postSMILFilesConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles | Adds a SMIL File to the list of SMIL Files for the specified VHost
[**postStartupStreamConfig**](VserversserverNamevhostsApi.md#postStartupStreamConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams/applications/{appName}/instances/{instanceName}/streams/{streamName} | Adds the specified Startup Stream configuration
[**postStartupStreamsConfig**](VserversserverNamevhostsApi.md#postStartupStreamsConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams | Adds a Startup Stream to the list of Startup Streams for the specified VHost
[**postStreamFileConfig**](VserversserverNamevhostsApi.md#postStreamFileConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName} | Adds the specified Stream File configuration
[**postStreamFilesConfig**](VserversserverNamevhostsApi.md#postStreamFilesConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles | Adds a Stream File to the list of Stream Files for the specified VHost
[**postTranscoderEncodeConfig**](VserversserverNamevhostsApi.md#postTranscoderEncodeConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName} | Adds the specified Trancoder Encode configuration
[**postTranscoderEncodesConfig**](VserversserverNamevhostsApi.md#postTranscoderEncodesConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes | Adds a Transcoder Encode Configuration to the specified VHost
[**postTranscoderStreamNameGroupConfig**](VserversserverNamevhostsApi.md#postTranscoderStreamNameGroupConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups/{groupName} | Adds the specified Trancoder StreamNameGroup configuration
[**postTranscoderStreamNameGroupsConfig**](VserversserverNamevhostsApi.md#postTranscoderStreamNameGroupsConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups | Adds a Transcoder Stream Name Groups Configuration to the specified Template
[**postTranscoderTemplateConfig**](VserversserverNamevhostsApi.md#postTranscoderTemplateConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName} | Adds the specified Trancoder Template configuration
[**postTranscoderTemplatesConfig**](VserversserverNamevhostsApi.md#postTranscoderTemplatesConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates | Adds a Transcoder Templates Configuration to the specified VHost
[**putHostPortConfigAdv**](VserversserverNamevhostsApi.md#putHostPortConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/hostports/{portname}/adv | 
[**putHostportsTuneConfig**](VserversserverNamevhostsApi.md#putHostportsTuneConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/tunehostports | Updates the host port configuration used for server tuning for the specified vhost
[**putMediaCacheStoreAction**](VserversserverNamevhostsApi.md#putMediaCacheStoreAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/mediacache/stores/actions/{action} | 
[**putPublisherVhostConfig**](VserversserverNamevhostsApi.md#putPublisherVhostConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/publishers/{publisherName} | Updates the specified Publisher configuration
[**putSDPFileAction**](VserversserverNamevhostsApi.md#putSDPFileAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/sdpfiles/{sdpfileName}/actions/{action} | 
[**putSMILFileAction**](VserversserverNamevhostsApi.md#putSMILFileAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles/{smilfileName}/actions/{action} | 
[**putSMILFileConfig**](VserversserverNamevhostsApi.md#putSMILFileConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles/{smilfileName} | Updates the specified SMIL File configuration
[**putSSLConfig**](VserversserverNamevhostsApi.md#putSSLConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/hostports/{portname}/ssl | Updates the SSL configuration for the specified vhost and port
[**putStartupStreamConfig**](VserversserverNamevhostsApi.md#putStartupStreamConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams/applications/{appName}/instances/{instanceName}/streams/{streamName} | Updates the specified Startup Stream configuration
[**putStreamFileAction**](VserversserverNamevhostsApi.md#putStreamFileAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName}/actions/{action} | 
[**putStreamFileConfig**](VserversserverNamevhostsApi.md#putStreamFileConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName} | Updates the specified Stream File configuration
[**putStreamFileConfigAdv**](VserversserverNamevhostsApi.md#putStreamFileConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName}/adv | Updates the Advanced Stream File configuration
[**putTranscoderConfig**](VserversserverNamevhostsApi.md#putTranscoderConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder | Updates the Transcoder configuration for the specified VHost
[**putTranscoderEncodeConfig**](VserversserverNamevhostsApi.md#putTranscoderEncodeConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName} | Updates the specified Trancoder Encode configuration
[**putTranscoderEncodeConfigAdv**](VserversserverNamevhostsApi.md#putTranscoderEncodeConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}/adv | Updates the Advanced Transcoder Encode configuration
[**putTranscoderOverlayDecodeConfig**](VserversserverNamevhostsApi.md#putTranscoderOverlayDecodeConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/decode/overlays/{overlayName} | Updates the specified Trancoder Overlay Decode configuration
[**putTranscoderOverlayEncodeConfig**](VserversserverNamevhostsApi.md#putTranscoderOverlayEncodeConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName} | Updates the specified Trancoder Overlay Encode configuration
[**putTranscoderStreamNameGroupConfig**](VserversserverNamevhostsApi.md#putTranscoderStreamNameGroupConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups/{groupName} | Updates the specified Trancoder StreamNameGroup configuration
[**putTranscoderTemplateAction**](VserversserverNamevhostsApi.md#putTranscoderTemplateAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/actions/{action} | 
[**putTranscoderTemplateConfig**](VserversserverNamevhostsApi.md#putTranscoderTemplateConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName} | Updates the specified Trancoder Template configuration
[**putTranscoderTemplateConfigAdv**](VserversserverNamevhostsApi.md#putTranscoderTemplateConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/adv | Updates the Advanced Transcoder Template configuration
[**putVHostAction**](VserversserverNamevhostsApi.md#putVHostAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/actions/{action} | 
[**putVHostConfig**](VserversserverNamevhostsApi.md#putVHostConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName} | Updates the specified VHost configuration
[**putVHostConfigAdv**](VserversserverNamevhostsApi.md#putVHostConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/adv | Updates the specified advanced VHost configuration
[**putVHostTuneConfig**](VserversserverNamevhostsApi.md#putVHostTuneConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/tune | Updates the Tuning configuration for the specifed vhost


# **deletePublisherVhostConfig**
> deletePublisherVhostConfig($serverName, $vhostName, $publisherName)

Deletes the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name
$publisherName = "publisherName_example"; // string | The publisher name

try {
    $api_instance->deletePublisherVhostConfig($serverName, $vhostName, $publisherName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->deletePublisherVhostConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |
 **publisherName** | **string**| The publisher name |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSDPFileConfig**
> deleteSDPFileConfig($serverName, $vhostName, $sdpfileName)

Deletes the specified SDP file

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$sdpfileName = "sdpfileName_example"; // string | The SDP file name without the extension

try {
    $api_instance->deleteSDPFileConfig($serverName, $vhostName, $sdpfileName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->deleteSDPFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **sdpfileName** | **string**| The SDP file name without the extension |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSMILFileConfig**
> deleteSMILFileConfig($serverName, $vhostName, $smilfileName)

Deletes the specified SMIL File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$smilfileName = "smilfileName_example"; // string | The SMIL file name without the extension

try {
    $api_instance->deleteSMILFileConfig($serverName, $vhostName, $smilfileName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->deleteSMILFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **smilfileName** | **string**| The SMIL file name without the extension |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStartupStreamConfig**
> deleteStartupStreamConfig($serverName, $vhostName, $streamName, $appName, $instanceName)

Deletes the specified Startup Stream configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$streamName = "streamName_example"; // string | 
$appName = "appName_example"; // string | 
$instanceName = "instanceName_example"; // string | 

try {
    $api_instance->deleteStartupStreamConfig($serverName, $vhostName, $streamName, $appName, $instanceName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->deleteStartupStreamConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **streamName** | **string**|  |
 **appName** | **string**|  |
 **instanceName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStreamFileConfig**
> deleteStreamFileConfig($serverName, $vhostName, $streamfileName)

Deletes the specified Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$streamfileName = "streamfileName_example"; // string | The stream file name without the extension

try {
    $api_instance->deleteStreamFileConfig($serverName, $vhostName, $streamfileName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->deleteStreamFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **streamfileName** | **string**| The stream file name without the extension |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderEncodeConfig**
> deleteTranscoderEncodeConfig($serverName, $vhostName, $templateName, $encodeName)

Deletes the specified Trancoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$encodeName = "encodeName_example"; // string | 

try {
    $api_instance->deleteTranscoderEncodeConfig($serverName, $vhostName, $templateName, $encodeName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->deleteTranscoderEncodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **encodeName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderOverlayDecodeConfig**
> deleteTranscoderOverlayDecodeConfig($serverName, $vhostName, $templateName, $overlayName)

Deletes the specified Trancoder Overlay Decode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$overlayName = "overlayName_example"; // string | 

try {
    $api_instance->deleteTranscoderOverlayDecodeConfig($serverName, $vhostName, $templateName, $overlayName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->deleteTranscoderOverlayDecodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **overlayName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderOverlayEncodeConfig**
> deleteTranscoderOverlayEncodeConfig($serverName, $vhostName, $templateName, $overlayName, $encodeName)

Deletes the specified Trancoder Overlay Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$overlayName = "overlayName_example"; // string | 
$encodeName = "encodeName_example"; // string | 

try {
    $api_instance->deleteTranscoderOverlayEncodeConfig($serverName, $vhostName, $templateName, $overlayName, $encodeName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->deleteTranscoderOverlayEncodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **overlayName** | **string**|  |
 **encodeName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderStreamNameGroupConfig**
> deleteTranscoderStreamNameGroupConfig($serverName, $vhostName, $templateName, $groupName)

Deletes the specified Trancoder StreamNameGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$groupName = "groupName_example"; // string | 

try {
    $api_instance->deleteTranscoderStreamNameGroupConfig($serverName, $vhostName, $templateName, $groupName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->deleteTranscoderStreamNameGroupConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **groupName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderTemplateConfig**
> deleteTranscoderTemplateConfig($serverName, $vhostName, $templateName)

Deletes the specified Trancoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 

try {
    $api_instance->deleteTranscoderTemplateConfig($serverName, $vhostName, $templateName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->deleteTranscoderTemplateConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentVHostStatistics**
> \Model\CurrentVHostStatistics getCurrentVHostStatistics($serverName, $vhostName)

Retrieves the current VHost statistics

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 

try {
    $result = $api_instance->getCurrentVHostStatistics($serverName, $vhostName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getCurrentVHostStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |

### Return type

[**\Model\CurrentVHostStatistics**](../Model/CurrentVHostStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricVHostStatistics**
> \Model\HistoricVHostStatistics getHistoricVHostStatistics($serverName, $vhostName)

Retrieves the historic VHost statistics

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 

try {
    $result = $api_instance->getHistoricVHostStatistics($serverName, $vhostName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getHistoricVHostStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |

### Return type

[**\Model\HistoricVHostStatistics**](../Model/HistoricVHostStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHostPortConfig**
> \Model\HostPortConfig getHostPortConfig($serverName, $vhostName, $portname)

Retrieves the HostPort for the specifed vhost and port

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$portname = "portname_example"; // string | The port name

try {
    $result = $api_instance->getHostPortConfig($serverName, $vhostName, $portname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getHostPortConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **portname** | **string**| The port name |

### Return type

[**\Model\HostPortConfig**](../Model/HostPortConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHostPortConfigAdv**
> \Model\HostPortConfigAdv getHostPortConfigAdv($serverName, $vhostName, $portname)

Retrieves the advanced HostPort configuration for the specified vhost and port

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$portname = "portname_example"; // string | The port name

try {
    $result = $api_instance->getHostPortConfigAdv($serverName, $vhostName, $portname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getHostPortConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **portname** | **string**| The port name |

### Return type

[**\Model\HostPortConfigAdv**](../Model/HostPortConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHostPortsConfig**
> \Model\HostPortsConfig getHostPortsConfig($serverName, $vhostName)

Retrieves the list of server HostPorts for the specified vhost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 

try {
    $result = $api_instance->getHostPortsConfig($serverName, $vhostName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getHostPortsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |

### Return type

[**\Model\HostPortsConfig**](../Model/HostPortsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHostportsTuneConfig**
> \Model\HostportsTuneConfig getHostportsTuneConfig($serverName, $vhostName)

Retrieves the host port configuration used for server tuning for the specified vhost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name

try {
    $result = $api_instance->getHostportsTuneConfig($serverName, $vhostName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getHostportsTuneConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |

### Return type

[**\Model\HostportsTuneConfig**](../Model/HostportsTuneConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCacheStoreList**
> \Model\MediaCacheStoreList getMediaCacheStoreList($serverName, $vhostName)

Retrieves all entries in the MediaCache system

This API is available in builds 15942 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 

try {
    $result = $api_instance->getMediaCacheStoreList($serverName, $vhostName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getMediaCacheStoreList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |

### Return type

[**\Model\MediaCacheStoreList**](../Model/MediaCacheStoreList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublisherVhostConfig**
> \Model\PublisherVhostConfig getPublisherVhostConfig($serverName, $vhostName, $publisherName)

Retrieves the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name
$publisherName = "publisherName_example"; // string | The publisher name

try {
    $result = $api_instance->getPublisherVhostConfig($serverName, $vhostName, $publisherName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getPublisherVhostConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |
 **publisherName** | **string**| The publisher name |

### Return type

[**\Model\PublisherVhostConfig**](../Model/PublisherVhostConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublishersVhostConfig**
> \Model\PublishersVhostConfig getPublishersVhostConfig($serverName, $vhostName)

Retrieves the list of Publishers for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name

try {
    $result = $api_instance->getPublishersVhostConfig($serverName, $vhostName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getPublishersVhostConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |

### Return type

[**\Model\PublishersVhostConfig**](../Model/PublishersVhostConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSDPFilesConfig**
> \Model\SDPFilesConfig getSDPFilesConfig($serverName, $vhostName)

Retrieves the list of SDP Files for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 

try {
    $result = $api_instance->getSDPFilesConfig($serverName, $vhostName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getSDPFilesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |

### Return type

[**\Model\SDPFilesConfig**](../Model/SDPFilesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSMILFileConfig**
> \Model\SMILFileConfig getSMILFileConfig($serverName, $vhostName, $smilfileName)

Retrieves the specified SMIL File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$smilfileName = "smilfileName_example"; // string | The SMIL file name without the extension

try {
    $result = $api_instance->getSMILFileConfig($serverName, $vhostName, $smilfileName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getSMILFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **smilfileName** | **string**| The SMIL file name without the extension |

### Return type

[**\Model\SMILFileConfig**](../Model/SMILFileConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSMILFilesConfig**
> \Model\SMILFilesConfig getSMILFilesConfig($serverName, $vhostName)

Retrieves the list of SMIL Files for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on

try {
    $result = $api_instance->getSMILFilesConfig($serverName, $vhostName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getSMILFilesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |

### Return type

[**\Model\SMILFilesConfig**](../Model/SMILFilesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSSLConfig**
> \Model\SSLConfig getSSLConfig($serverName, $vhostName, $portname)

Retrieves the SSL configuration for the specified vhost and port

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$portname = "portname_example"; // string | The port name

try {
    $result = $api_instance->getSSLConfig($serverName, $vhostName, $portname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getSSLConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **portname** | **string**| The port name |

### Return type

[**\Model\SSLConfig**](../Model/SSLConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStartupStreamConfig**
> \Model\StartupStreamConfig getStartupStreamConfig($serverName, $vhostName, $streamName, $appName, $instanceName)

Retrieves the specified Startup Stream configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$streamName = "streamName_example"; // string | 
$appName = "appName_example"; // string | 
$instanceName = "instanceName_example"; // string | 

try {
    $result = $api_instance->getStartupStreamConfig($serverName, $vhostName, $streamName, $appName, $instanceName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getStartupStreamConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **streamName** | **string**|  |
 **appName** | **string**|  |
 **instanceName** | **string**|  |

### Return type

[**\Model\StartupStreamConfig**](../Model/StartupStreamConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStartupStreamsConfig**
> \Model\StartupStreamsConfig getStartupStreamsConfig($serverName, $vhostName)

Retrieves the list of Startup Streams for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 

try {
    $result = $api_instance->getStartupStreamsConfig($serverName, $vhostName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getStartupStreamsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |

### Return type

[**\Model\StartupStreamsConfig**](../Model/StartupStreamsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamFileConfig**
> \Model\StreamFileConfig getStreamFileConfig($serverName, $vhostName, $streamfileName)

Retrieves the specified Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$streamfileName = "streamfileName_example"; // string | The stream file name without the extension

try {
    $result = $api_instance->getStreamFileConfig($serverName, $vhostName, $streamfileName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getStreamFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **streamfileName** | **string**| The stream file name without the extension |

### Return type

[**\Model\StreamFileConfig**](../Model/StreamFileConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamFileConfigAdv**
> \Model\StreamFileConfigAdv getStreamFileConfigAdv($serverName, $vhostName, $streamfileName)

Retrieves the Advanced Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$streamfileName = "streamfileName_example"; // string | The stream file name without the .stream extension

try {
    $result = $api_instance->getStreamFileConfigAdv($serverName, $vhostName, $streamfileName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getStreamFileConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **streamfileName** | **string**| The stream file name without the .stream extension |

### Return type

[**\Model\StreamFileConfigAdv**](../Model/StreamFileConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamFilesConfig**
> \Model\StreamFilesConfig getStreamFilesConfig($serverName, $vhostName)

Retrieves the list of Stream Files for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 

try {
    $result = $api_instance->getStreamFilesConfig($serverName, $vhostName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getStreamFilesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |

### Return type

[**\Model\StreamFilesConfig**](../Model/StreamFilesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderConfig**
> \Model\TranscoderConfig getTranscoderConfig($serverName, $vhostName)

Retrieves the Transcoder configuration for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 

try {
    $result = $api_instance->getTranscoderConfig($serverName, $vhostName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getTranscoderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |

### Return type

[**\Model\TranscoderConfig**](../Model/TranscoderConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderEncodeConfig**
> \Model\TranscoderEncodeConfig getTranscoderEncodeConfig($serverName, $vhostName, $templateName, $encodeName)

Retrieves the specified Trancoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$encodeName = "encodeName_example"; // string | 

try {
    $result = $api_instance->getTranscoderEncodeConfig($serverName, $vhostName, $templateName, $encodeName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getTranscoderEncodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **encodeName** | **string**|  |

### Return type

[**\Model\TranscoderEncodeConfig**](../Model/TranscoderEncodeConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderEncodeConfigAdv**
> \Model\TranscoderEncodeConfigAdv getTranscoderEncodeConfigAdv($serverName, $vhostName, $templateName, $encodeName)

Retrieves the Advanced Transcoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$encodeName = "encodeName_example"; // string | 

try {
    $result = $api_instance->getTranscoderEncodeConfigAdv($serverName, $vhostName, $templateName, $encodeName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getTranscoderEncodeConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **encodeName** | **string**|  |

### Return type

[**\Model\TranscoderEncodeConfigAdv**](../Model/TranscoderEncodeConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderEncodesConfig**
> \Model\TranscoderEncodesConfig getTranscoderEncodesConfig($serverName, $vhostName, $templateName)

Retrieves the list of Transcoder Encode Configurations for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 

try {
    $result = $api_instance->getTranscoderEncodesConfig($serverName, $vhostName, $templateName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getTranscoderEncodesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |

### Return type

[**\Model\TranscoderEncodesConfig**](../Model/TranscoderEncodesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderOverlayDecodeConfig**
> \Model\TranscoderOverlayDecodeConfig getTranscoderOverlayDecodeConfig($serverName, $vhostName, $templateName, $overlayName)

Retrieves the specified Trancoder Overlay Decode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$overlayName = "overlayName_example"; // string | 

try {
    $result = $api_instance->getTranscoderOverlayDecodeConfig($serverName, $vhostName, $templateName, $overlayName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getTranscoderOverlayDecodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **overlayName** | **string**|  |

### Return type

[**\Model\TranscoderOverlayDecodeConfig**](../Model/TranscoderOverlayDecodeConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderOverlayEncodeConfig**
> \Model\TranscoderOverlayEncodeConfig getTranscoderOverlayEncodeConfig($serverName, $vhostName, $templateName, $overlayName, $encodeName)

Retrieves the specified Trancoder Overlay Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$overlayName = "overlayName_example"; // string | 
$encodeName = "encodeName_example"; // string | 

try {
    $result = $api_instance->getTranscoderOverlayEncodeConfig($serverName, $vhostName, $templateName, $overlayName, $encodeName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getTranscoderOverlayEncodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **overlayName** | **string**|  |
 **encodeName** | **string**|  |

### Return type

[**\Model\TranscoderOverlayEncodeConfig**](../Model/TranscoderOverlayEncodeConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderStreamNameGroupConfig**
> \Model\TranscoderStreamNameGroupConfig getTranscoderStreamNameGroupConfig($serverName, $vhostName, $templateName, $groupName)

Retrieves the specified Trancoder StreamNameGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$groupName = "groupName_example"; // string | 

try {
    $result = $api_instance->getTranscoderStreamNameGroupConfig($serverName, $vhostName, $templateName, $groupName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getTranscoderStreamNameGroupConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **groupName** | **string**|  |

### Return type

[**\Model\TranscoderStreamNameGroupConfig**](../Model/TranscoderStreamNameGroupConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderStreamNameGroupsConfig**
> \Model\TranscoderStreamNameGroupsConfig getTranscoderStreamNameGroupsConfig($serverName, $vhostName, $templateName)

Retrieves the list of Transcoder Stream Name Groups for the specified Template

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 

try {
    $result = $api_instance->getTranscoderStreamNameGroupsConfig($serverName, $vhostName, $templateName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getTranscoderStreamNameGroupsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |

### Return type

[**\Model\TranscoderStreamNameGroupsConfig**](../Model/TranscoderStreamNameGroupsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderTemplateConfig**
> \Model\TranscoderTemplateConfig getTranscoderTemplateConfig($serverName, $vhostName, $templateName)

Retrieves the specified Trancoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 

try {
    $result = $api_instance->getTranscoderTemplateConfig($serverName, $vhostName, $templateName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getTranscoderTemplateConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |

### Return type

[**\Model\TranscoderTemplateConfig**](../Model/TranscoderTemplateConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderTemplateConfigAdv**
> \Model\TranscoderTemplateConfigAdv getTranscoderTemplateConfigAdv($serverName, $vhostName, $templateName)

Retrieves the Advanced Transcoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 

try {
    $result = $api_instance->getTranscoderTemplateConfigAdv($serverName, $vhostName, $templateName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getTranscoderTemplateConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |

### Return type

[**\Model\TranscoderTemplateConfigAdv**](../Model/TranscoderTemplateConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderTemplatesConfig**
> \Model\TranscoderTemplatesConfig getTranscoderTemplatesConfig($serverName, $vhostName)

Retrieves the list of Transcoder Template Configurations for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on

try {
    $result = $api_instance->getTranscoderTemplatesConfig($serverName, $vhostName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getTranscoderTemplatesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |

### Return type

[**\Model\TranscoderTemplatesConfig**](../Model/TranscoderTemplatesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVHostConfig**
> \Model\VHostConfig getVHostConfig($serverName, $vhostName)

Retrieves the specified VHost configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name

try {
    $result = $api_instance->getVHostConfig($serverName, $vhostName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getVHostConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |

### Return type

[**\Model\VHostConfig**](../Model/VHostConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVHostConfigAdv**
> \Model\VHostConfigAdv getVHostConfigAdv($serverName, $vhostName)

Retrieves the specified advanced VHost configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 

try {
    $result = $api_instance->getVHostConfigAdv($serverName, $vhostName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getVHostConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |

### Return type

[**\Model\VHostConfigAdv**](../Model/VHostConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVHostTuneConfig**
> \Model\VHostTuneConfig getVHostTuneConfig($serverName, $vhostName)

Retrieves the Tuning configuration for the specifed vhost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name

try {
    $result = $api_instance->getVHostTuneConfig($serverName, $vhostName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getVHostTuneConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |

### Return type

[**\Model\VHostTuneConfig**](../Model/VHostTuneConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVHostsConfig**
> \Model\VHostsConfig getVHostsConfig($serverName)

Retrieves the list of VHosts

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getVHostsConfig($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->getVHostsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\VHostsConfig**](../Model/VHostsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPublisherVhostConfig**
> postPublisherVhostConfig($serverName, $vhostName, $publisherName, $body)

Adds the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name
$publisherName = "publisherName_example"; // string | The publisher name
$body = new \Model\PublisherVhostConfig(); // \Model\PublisherVhostConfig | 

try {
    $api_instance->postPublisherVhostConfig($serverName, $vhostName, $publisherName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->postPublisherVhostConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |
 **publisherName** | **string**| The publisher name |
 **body** | [**\Model\PublisherVhostConfig**](../Model/\Model\PublisherVhostConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPublishersVhostConfig**
> postPublishersVhostConfig($serverName, $vhostName, $body)

Add a Publisher to list of Publishers for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name
$body = new \Model\PublisherVhostConfig(); // \Model\PublisherVhostConfig | 

try {
    $api_instance->postPublishersVhostConfig($serverName, $vhostName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->postPublishersVhostConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |
 **body** | [**\Model\PublisherVhostConfig**](../Model/\Model\PublisherVhostConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSMILFileConfig**
> postSMILFileConfig($serverName, $vhostName, $smilfileName, $body)

Adds the specified SMIL File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$smilfileName = "smilfileName_example"; // string | The SMIL file name without the extension
$body = new \Model\SMILFileConfig(); // \Model\SMILFileConfig | 

try {
    $api_instance->postSMILFileConfig($serverName, $vhostName, $smilfileName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->postSMILFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **smilfileName** | **string**| The SMIL file name without the extension |
 **body** | [**\Model\SMILFileConfig**](../Model/\Model\SMILFileConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSMILFilesConfig**
> postSMILFilesConfig($serverName, $vhostName, $body)

Adds a SMIL File to the list of SMIL Files for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$body = new \Model\SMILFileConfig(); // \Model\SMILFileConfig | 

try {
    $api_instance->postSMILFilesConfig($serverName, $vhostName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->postSMILFilesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **body** | [**\Model\SMILFileConfig**](../Model/\Model\SMILFileConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStartupStreamConfig**
> postStartupStreamConfig($serverName, $vhostName, $streamName, $appName, $instanceName, $body)

Adds the specified Startup Stream configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$streamName = "streamName_example"; // string | 
$appName = "appName_example"; // string | 
$instanceName = "instanceName_example"; // string | 
$body = new \Model\StartupStreamConfig(); // \Model\StartupStreamConfig | 

try {
    $api_instance->postStartupStreamConfig($serverName, $vhostName, $streamName, $appName, $instanceName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->postStartupStreamConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **streamName** | **string**|  |
 **appName** | **string**|  |
 **instanceName** | **string**|  |
 **body** | [**\Model\StartupStreamConfig**](../Model/\Model\StartupStreamConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStartupStreamsConfig**
> postStartupStreamsConfig($serverName, $vhostName, $body)

Adds a Startup Stream to the list of Startup Streams for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$body = new \Model\StartupStreamConfig(); // \Model\StartupStreamConfig | 

try {
    $api_instance->postStartupStreamsConfig($serverName, $vhostName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->postStartupStreamsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **body** | [**\Model\StartupStreamConfig**](../Model/\Model\StartupStreamConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStreamFileConfig**
> postStreamFileConfig($serverName, $vhostName, $streamfileName, $body)

Adds the specified Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$streamfileName = "streamfileName_example"; // string | The stream file name without the extension
$body = new \Model\StreamFileConfig(); // \Model\StreamFileConfig | 

try {
    $api_instance->postStreamFileConfig($serverName, $vhostName, $streamfileName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->postStreamFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **streamfileName** | **string**| The stream file name without the extension |
 **body** | [**\Model\StreamFileConfig**](../Model/\Model\StreamFileConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStreamFilesConfig**
> postStreamFilesConfig($serverName, $vhostName, $body)

Adds a Stream File to the list of Stream Files for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$body = new \Model\StreamFileConfig(); // \Model\StreamFileConfig | 

try {
    $api_instance->postStreamFilesConfig($serverName, $vhostName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->postStreamFilesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **body** | [**\Model\StreamFileConfig**](../Model/\Model\StreamFileConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderEncodeConfig**
> postTranscoderEncodeConfig($serverName, $vhostName, $templateName, $encodeName, $body)

Adds the specified Trancoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$encodeName = "encodeName_example"; // string | 
$body = new \Model\TranscoderEncodeConfig(); // \Model\TranscoderEncodeConfig | 

try {
    $api_instance->postTranscoderEncodeConfig($serverName, $vhostName, $templateName, $encodeName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->postTranscoderEncodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **encodeName** | **string**|  |
 **body** | [**\Model\TranscoderEncodeConfig**](../Model/\Model\TranscoderEncodeConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderEncodesConfig**
> postTranscoderEncodesConfig($serverName, $vhostName, $templateName, $body)

Adds a Transcoder Encode Configuration to the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$body = new \Model\TranscoderEncodeConfig(); // \Model\TranscoderEncodeConfig | 

try {
    $api_instance->postTranscoderEncodesConfig($serverName, $vhostName, $templateName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->postTranscoderEncodesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **body** | [**\Model\TranscoderEncodeConfig**](../Model/\Model\TranscoderEncodeConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderStreamNameGroupConfig**
> postTranscoderStreamNameGroupConfig($serverName, $vhostName, $templateName, $groupName, $body)

Adds the specified Trancoder StreamNameGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$groupName = "groupName_example"; // string | 
$body = new \Model\TranscoderStreamNameGroupConfig(); // \Model\TranscoderStreamNameGroupConfig | 

try {
    $api_instance->postTranscoderStreamNameGroupConfig($serverName, $vhostName, $templateName, $groupName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->postTranscoderStreamNameGroupConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **groupName** | **string**|  |
 **body** | [**\Model\TranscoderStreamNameGroupConfig**](../Model/\Model\TranscoderStreamNameGroupConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderStreamNameGroupsConfig**
> postTranscoderStreamNameGroupsConfig($serverName, $vhostName, $templateName, $body)

Adds a Transcoder Stream Name Groups Configuration to the specified Template

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$body = new \Model\TranscoderStreamNameGroupConfig(); // \Model\TranscoderStreamNameGroupConfig | 

try {
    $api_instance->postTranscoderStreamNameGroupsConfig($serverName, $vhostName, $templateName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->postTranscoderStreamNameGroupsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **body** | [**\Model\TranscoderStreamNameGroupConfig**](../Model/\Model\TranscoderStreamNameGroupConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderTemplateConfig**
> postTranscoderTemplateConfig($serverName, $vhostName, $templateName, $body)

Adds the specified Trancoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$body = new \Model\TranscoderTemplateConfig(); // \Model\TranscoderTemplateConfig | 

try {
    $api_instance->postTranscoderTemplateConfig($serverName, $vhostName, $templateName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->postTranscoderTemplateConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **body** | [**\Model\TranscoderTemplateConfig**](../Model/\Model\TranscoderTemplateConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderTemplatesConfig**
> postTranscoderTemplatesConfig($serverName, $vhostName, $body)

Adds a Transcoder Templates Configuration to the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$body = new \Model\TranscoderTemplateConfig(); // \Model\TranscoderTemplateConfig | 

try {
    $api_instance->postTranscoderTemplatesConfig($serverName, $vhostName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->postTranscoderTemplatesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **body** | [**\Model\TranscoderTemplateConfig**](../Model/\Model\TranscoderTemplateConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putHostPortConfigAdv**
> putHostPortConfigAdv($serverName, $vhostName, $portname, $body)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$portname = "portname_example"; // string | The port name
$body = new \Model\HostPortConfigAdv(); // \Model\HostPortConfigAdv | 

try {
    $api_instance->putHostPortConfigAdv($serverName, $vhostName, $portname, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putHostPortConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **portname** | **string**| The port name |
 **body** | [**\Model\HostPortConfigAdv**](../Model/\Model\HostPortConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putHostportsTuneConfig**
> putHostportsTuneConfig($serverName, $vhostName, $body)

Updates the host port configuration used for server tuning for the specified vhost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name
$body = new \Model\HostportsTuneConfig(); // \Model\HostportsTuneConfig | 

try {
    $api_instance->putHostportsTuneConfig($serverName, $vhostName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putHostportsTuneConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |
 **body** | [**\Model\HostportsTuneConfig**](../Model/\Model\HostportsTuneConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMediaCacheStoreAction**
> putMediaCacheStoreAction($serverName, $action, $vhostName, $filename)



This API is available in builds 15942 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$filename = "filename_example"; // string | The file or stream name item to be used in all rest action requests

try {
    $api_instance->putMediaCacheStoreAction($serverName, $action, $vhostName, $filename);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putMediaCacheStoreAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **filename** | **string**| The file or stream name item to be used in all rest action requests | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPublisherVhostConfig**
> putPublisherVhostConfig($serverName, $vhostName, $publisherName, $body)

Updates the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name
$publisherName = "publisherName_example"; // string | The publisher name
$body = new \Model\PublisherVhostConfig(); // \Model\PublisherVhostConfig | 

try {
    $api_instance->putPublisherVhostConfig($serverName, $vhostName, $publisherName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putPublisherVhostConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |
 **publisherName** | **string**| The publisher name |
 **body** | [**\Model\PublisherVhostConfig**](../Model/\Model\PublisherVhostConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSDPFileAction**
> putSDPFileAction($serverName, $action, $mediaCasterType, $vhostName, $sdpfileName, $connectAppName, $appInstance)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$mediaCasterType = "rtp"; // string | The MediaCasterType to use for the connection
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$sdpfileName = "sdpfileName_example"; // string | The SDP file name needed for this REST call
$connectAppName = "connectAppName_example"; // string | The name of the application to connect to
$appInstance = "appInstance_example"; // string | The name of the application instance to connect to

try {
    $api_instance->putSDPFileAction($serverName, $action, $mediaCasterType, $vhostName, $sdpfileName, $connectAppName, $appInstance);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putSDPFileAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **mediaCasterType** | **string**| The MediaCasterType to use for the connection | [default to rtp]
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **sdpfileName** | **string**| The SDP file name needed for this REST call |
 **connectAppName** | **string**| The name of the application to connect to | [optional]
 **appInstance** | **string**| The name of the application instance to connect to | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSMILFileAction**
> putSMILFileAction($serverName, $action, $mediaCasterType, $vhostName, $smilfileName, $connectAppName, $appInstance, $dstEntryName)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$mediaCasterType = "rtp"; // string | The MediaCasterType to use for the connection
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$smilfileName = "smilfileName_example"; // string | The SMIL file, file name needed for this REST call
$connectAppName = "connectAppName_example"; // string | The name of the application to connect to
$appInstance = "appInstance_example"; // string | The name of the application instance to connect to
$dstEntryName = "dstEntryName_example"; // string | The destination SMIL file name when copying

try {
    $api_instance->putSMILFileAction($serverName, $action, $mediaCasterType, $vhostName, $smilfileName, $connectAppName, $appInstance, $dstEntryName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putSMILFileAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **mediaCasterType** | **string**| The MediaCasterType to use for the connection | [default to rtp]
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **smilfileName** | **string**| The SMIL file, file name needed for this REST call |
 **connectAppName** | **string**| The name of the application to connect to | [optional]
 **appInstance** | **string**| The name of the application instance to connect to | [optional]
 **dstEntryName** | **string**| The destination SMIL file name when copying | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSMILFileConfig**
> putSMILFileConfig($serverName, $vhostName, $smilfileName, $body)

Updates the specified SMIL File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$smilfileName = "smilfileName_example"; // string | The SMIL file name without the extension
$body = new \Model\SMILFileConfig(); // \Model\SMILFileConfig | 

try {
    $api_instance->putSMILFileConfig($serverName, $vhostName, $smilfileName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putSMILFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **smilfileName** | **string**| The SMIL file name without the extension |
 **body** | [**\Model\SMILFileConfig**](../Model/\Model\SMILFileConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSSLConfig**
> putSSLConfig($serverName, $vhostName, $portname, $body)

Updates the SSL configuration for the specified vhost and port

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$portname = "portname_example"; // string | The port name
$body = new \Model\SSLConfig(); // \Model\SSLConfig | 

try {
    $api_instance->putSSLConfig($serverName, $vhostName, $portname, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putSSLConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **portname** | **string**| The port name |
 **body** | [**\Model\SSLConfig**](../Model/\Model\SSLConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStartupStreamConfig**
> putStartupStreamConfig($serverName, $vhostName, $streamName, $appName, $instanceName, $body)

Updates the specified Startup Stream configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$streamName = "streamName_example"; // string | 
$appName = "appName_example"; // string | 
$instanceName = "instanceName_example"; // string | 
$body = new \Model\StartupStreamConfig(); // \Model\StartupStreamConfig | 

try {
    $api_instance->putStartupStreamConfig($serverName, $vhostName, $streamName, $appName, $instanceName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putStartupStreamConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **streamName** | **string**|  |
 **appName** | **string**|  |
 **instanceName** | **string**|  |
 **body** | [**\Model\StartupStreamConfig**](../Model/\Model\StartupStreamConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamFileAction**
> putStreamFileAction($serverName, $action, $mediaCasterType, $vhostName, $streamfileName, $connectAppName, $appInstance, $dstEntryName)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$mediaCasterType = "rtp"; // string | The MediaCasterType to use for the connection
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$streamfileName = "streamfileName_example"; // string | The stream file, file name needed for this REST call
$connectAppName = "connectAppName_example"; // string | The name of the application to connect to
$appInstance = "appInstance_example"; // string | The name of the application instance to connect to
$dstEntryName = "dstEntryName_example"; // string | The destination stream file name when copying

try {
    $api_instance->putStreamFileAction($serverName, $action, $mediaCasterType, $vhostName, $streamfileName, $connectAppName, $appInstance, $dstEntryName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putStreamFileAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **mediaCasterType** | **string**| The MediaCasterType to use for the connection | [default to rtp]
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **streamfileName** | **string**| The stream file, file name needed for this REST call |
 **connectAppName** | **string**| The name of the application to connect to | [optional]
 **appInstance** | **string**| The name of the application instance to connect to | [optional]
 **dstEntryName** | **string**| The destination stream file name when copying | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamFileConfig**
> putStreamFileConfig($serverName, $vhostName, $streamfileName, $body)

Updates the specified Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$streamfileName = "streamfileName_example"; // string | The stream file name without the extension
$body = new \Model\StreamFileConfig(); // \Model\StreamFileConfig | 

try {
    $api_instance->putStreamFileConfig($serverName, $vhostName, $streamfileName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putStreamFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **streamfileName** | **string**| The stream file name without the extension |
 **body** | [**\Model\StreamFileConfig**](../Model/\Model\StreamFileConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamFileConfigAdv**
> putStreamFileConfigAdv($serverName, $vhostName, $streamfileName, $body)

Updates the Advanced Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$streamfileName = "streamfileName_example"; // string | The stream file name without the .stream extension
$body = new \Model\StreamFileConfigAdv(); // \Model\StreamFileConfigAdv | 

try {
    $api_instance->putStreamFileConfigAdv($serverName, $vhostName, $streamfileName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putStreamFileConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **streamfileName** | **string**| The stream file name without the .stream extension |
 **body** | [**\Model\StreamFileConfigAdv**](../Model/\Model\StreamFileConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderConfig**
> putTranscoderConfig($serverName, $vhostName, $body)

Updates the Transcoder configuration for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$body = new \Model\TranscoderConfig(); // \Model\TranscoderConfig | 

try {
    $api_instance->putTranscoderConfig($serverName, $vhostName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putTranscoderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **body** | [**\Model\TranscoderConfig**](../Model/\Model\TranscoderConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderEncodeConfig**
> putTranscoderEncodeConfig($serverName, $vhostName, $templateName, $encodeName, $body)

Updates the specified Trancoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$encodeName = "encodeName_example"; // string | 
$body = new \Model\TranscoderEncodeConfig(); // \Model\TranscoderEncodeConfig | 

try {
    $api_instance->putTranscoderEncodeConfig($serverName, $vhostName, $templateName, $encodeName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putTranscoderEncodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **encodeName** | **string**|  |
 **body** | [**\Model\TranscoderEncodeConfig**](../Model/\Model\TranscoderEncodeConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderEncodeConfigAdv**
> putTranscoderEncodeConfigAdv($serverName, $vhostName, $templateName, $encodeName, $body)

Updates the Advanced Transcoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$encodeName = "encodeName_example"; // string | 
$body = new \Model\TranscoderEncodeConfigAdv(); // \Model\TranscoderEncodeConfigAdv | 

try {
    $api_instance->putTranscoderEncodeConfigAdv($serverName, $vhostName, $templateName, $encodeName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putTranscoderEncodeConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **encodeName** | **string**|  |
 **body** | [**\Model\TranscoderEncodeConfigAdv**](../Model/\Model\TranscoderEncodeConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderOverlayDecodeConfig**
> putTranscoderOverlayDecodeConfig($serverName, $vhostName, $templateName, $overlayName, $body)

Updates the specified Trancoder Overlay Decode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$overlayName = "overlayName_example"; // string | 
$body = new \Model\TranscoderOverlayDecodeConfig(); // \Model\TranscoderOverlayDecodeConfig | 

try {
    $api_instance->putTranscoderOverlayDecodeConfig($serverName, $vhostName, $templateName, $overlayName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putTranscoderOverlayDecodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **overlayName** | **string**|  |
 **body** | [**\Model\TranscoderOverlayDecodeConfig**](../Model/\Model\TranscoderOverlayDecodeConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderOverlayEncodeConfig**
> putTranscoderOverlayEncodeConfig($serverName, $vhostName, $templateName, $overlayName, $encodeName, $body)

Updates the specified Trancoder Overlay Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$overlayName = "overlayName_example"; // string | 
$encodeName = "encodeName_example"; // string | 
$body = new \Model\TranscoderOverlayEncodeConfig(); // \Model\TranscoderOverlayEncodeConfig | 

try {
    $api_instance->putTranscoderOverlayEncodeConfig($serverName, $vhostName, $templateName, $overlayName, $encodeName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putTranscoderOverlayEncodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **overlayName** | **string**|  |
 **encodeName** | **string**|  |
 **body** | [**\Model\TranscoderOverlayEncodeConfig**](../Model/\Model\TranscoderOverlayEncodeConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderStreamNameGroupConfig**
> putTranscoderStreamNameGroupConfig($serverName, $vhostName, $templateName, $groupName, $body)

Updates the specified Trancoder StreamNameGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$groupName = "groupName_example"; // string | 
$body = new \Model\TranscoderStreamNameGroupConfig(); // \Model\TranscoderStreamNameGroupConfig | 

try {
    $api_instance->putTranscoderStreamNameGroupConfig($serverName, $vhostName, $templateName, $groupName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putTranscoderStreamNameGroupConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **groupName** | **string**|  |
 **body** | [**\Model\TranscoderStreamNameGroupConfig**](../Model/\Model\TranscoderStreamNameGroupConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderTemplateAction**
> putTranscoderTemplateAction($serverName, $action, $vhostName, $templateName, $dstEntryName)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$templateName = "templateName_example"; // string | The template name needed for this REST call
$dstEntryName = "dstEntryName_example"; // string | The destination transcoder template name when copying

try {
    $api_instance->putTranscoderTemplateAction($serverName, $action, $vhostName, $templateName, $dstEntryName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putTranscoderTemplateAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **templateName** | **string**| The template name needed for this REST call |
 **dstEntryName** | **string**| The destination transcoder template name when copying | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderTemplateConfig**
> putTranscoderTemplateConfig($serverName, $vhostName, $templateName, $body)

Updates the specified Trancoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$body = new \Model\TranscoderTemplateConfig(); // \Model\TranscoderTemplateConfig | 

try {
    $api_instance->putTranscoderTemplateConfig($serverName, $vhostName, $templateName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putTranscoderTemplateConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **body** | [**\Model\TranscoderTemplateConfig**](../Model/\Model\TranscoderTemplateConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderTemplateConfigAdv**
> putTranscoderTemplateConfigAdv($serverName, $vhostName, $templateName, $body)

Updates the Advanced Transcoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$body = new \Model\TranscoderTemplateConfigAdv(); // \Model\TranscoderTemplateConfigAdv | 

try {
    $api_instance->putTranscoderTemplateConfigAdv($serverName, $vhostName, $templateName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putTranscoderTemplateConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **body** | [**\Model\TranscoderTemplateConfigAdv**](../Model/\Model\TranscoderTemplateConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVHostAction**
> putVHostAction($serverName, $action, $vhostName)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on

try {
    $api_instance->putVHostAction($serverName, $action, $vhostName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putVHostAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVHostConfig**
> putVHostConfig($serverName, $vhostName, $body)

Updates the specified VHost configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name
$body = new \Model\VHostConfig(); // \Model\VHostConfig | 

try {
    $api_instance->putVHostConfig($serverName, $vhostName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putVHostConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |
 **body** | [**\Model\VHostConfig**](../Model/\Model\VHostConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVHostConfigAdv**
> putVHostConfigAdv($serverName, $vhostName, $body)

Updates the specified advanced VHost configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$body = new \Model\VHostConfigAdv(); // \Model\VHostConfigAdv | 

try {
    $api_instance->putVHostConfigAdv($serverName, $vhostName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putVHostConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **body** | [**\Model\VHostConfigAdv**](../Model/\Model\VHostConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVHostTuneConfig**
> putVHostTuneConfig($serverName, $vhostName, $body)

Updates the Tuning configuration for the specifed vhost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name
$body = new \Model\VHostTuneConfig(); // \Model\VHostTuneConfig | 

try {
    $api_instance->putVHostTuneConfig($serverName, $vhostName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsApi->putVHostTuneConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |
 **body** | [**\Model\VHostTuneConfig**](../Model/\Model\VHostTuneConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

