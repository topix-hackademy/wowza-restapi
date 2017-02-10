# WowzaApi\VserversserverNamemonitoringApi

All URIs are relative to *http://localhost:8087/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHistoricServerStatistics**](VserversserverNamemonitoringApi.md#getHistoricServerStatistics) | **GET** /v2/servers/{serverName}/monitoring/historic | Retrieves the server historical statictics
[**getMonitoringConfig**](VserversserverNamemonitoringApi.md#getMonitoringConfig) | **GET** /v2/servers/{serverName}/monitoring | Retrieves the server monitoring configuration
[**putMonitoringConfig**](VserversserverNamemonitoringApi.md#putMonitoringConfig) | **PUT** /v2/servers/{serverName}/monitoring | Updates the server monitoring configuration


# **getHistoricServerStatistics**
> \Model\HistoricServerStatistics getHistoricServerStatistics($serverName)

Retrieves the server historical statictics

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamemonitoringApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getHistoricServerStatistics($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamemonitoringApi->getHistoricServerStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\HistoricServerStatistics**](../Model/HistoricServerStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMonitoringConfig**
> \Model\MonitoringConfig getMonitoringConfig($serverName)

Retrieves the server monitoring configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamemonitoringApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getMonitoringConfig($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamemonitoringApi->getMonitoringConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\MonitoringConfig**](../Model/MonitoringConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMonitoringConfig**
> putMonitoringConfig($serverName, $body)

Updates the server monitoring configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamemonitoringApi();
$serverName = "serverName_example"; // string | Reserved for future use
$body = new \Model\MonitoringConfig(); // \Model\MonitoringConfig | 

try {
    $api_instance->putMonitoringConfig($serverName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamemonitoringApi->putMonitoringConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **body** | [**\Model\MonitoringConfig**](../Model/\Model\MonitoringConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

