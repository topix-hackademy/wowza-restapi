# WowzaApi\VserversserverNamemediacastersApi

All URIs are relative to *http://localhost:8087/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMediaCasterConfig**](VserversserverNamemediacastersApi.md#getMediaCasterConfig) | **GET** /v2/servers/{serverName}/mediacasters/{mediacastername} | Retrieves the specified MediaCaster configuration
[**getMediaCastersConfig**](VserversserverNamemediacastersApi.md#getMediaCastersConfig) | **GET** /v2/servers/{serverName}/mediacasters | Retrieves the list of MediaCasters


# **getMediaCasterConfig**
> \Model\MediaCasterConfig getMediaCasterConfig($serverName, $mediacastername)

Retrieves the specified MediaCaster configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamemediacastersApi();
$serverName = "serverName_example"; // string | Reserved for future use
$mediacastername = "mediacastername_example"; // string | 

try {
    $result = $api_instance->getMediaCasterConfig($serverName, $mediacastername);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamemediacastersApi->getMediaCasterConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **mediacastername** | **string**|  |

### Return type

[**\Model\MediaCasterConfig**](../Model/MediaCasterConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCastersConfig**
> \Model\MediaCastersConfig getMediaCastersConfig($serverName)

Retrieves the list of MediaCasters

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamemediacastersApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getMediaCastersConfig($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamemediacastersApi->getMediaCastersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\MediaCastersConfig**](../Model/MediaCastersConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

