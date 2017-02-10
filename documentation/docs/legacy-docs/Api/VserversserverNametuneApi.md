# WowzaApi\VserversserverNametuneApi

All URIs are relative to *http://localhost:8087/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getServerTuneConfig**](VserversserverNametuneApi.md#getServerTuneConfig) | **GET** /v2/servers/{serverName}/tune | Retrieves the server Tuning configuration
[**putServerTuneConfig**](VserversserverNametuneApi.md#putServerTuneConfig) | **PUT** /v2/servers/{serverName}/tune | Updates the server Tuning configuration


# **getServerTuneConfig**
> \Model\ServerTuneConfig getServerTuneConfig($serverName)

Retrieves the server Tuning configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNametuneApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getServerTuneConfig($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNametuneApi->getServerTuneConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\ServerTuneConfig**](../Model/ServerTuneConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServerTuneConfig**
> putServerTuneConfig($serverName, $body)

Updates the server Tuning configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNametuneApi();
$serverName = "serverName_example"; // string | Reserved for future use
$body = new \Model\ServerTuneConfig(); // \Model\ServerTuneConfig | 

try {
    $api_instance->putServerTuneConfig($serverName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNametuneApi->putServerTuneConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **body** | [**\Model\ServerTuneConfig**](../Model/\Model\ServerTuneConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

