# WowzaApi\VserversserverNamelistenersApi

All URIs are relative to *http://localhost:8087/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getServerListenersConfig**](VserversserverNamelistenersApi.md#getServerListenersConfig) | **GET** /v2/servers/{serverName}/listeners | Retrieves the list of server Listeners
[**putServerListenersConfig**](VserversserverNamelistenersApi.md#putServerListenersConfig) | **PUT** /v2/servers/{serverName}/listeners | Updates the server Listeners list


# **getServerListenersConfig**
> \Model\ServerListenersConfig getServerListenersConfig($serverName)

Retrieves the list of server Listeners

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamelistenersApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getServerListenersConfig($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamelistenersApi->getServerListenersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\ServerListenersConfig**](../Model/ServerListenersConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServerListenersConfig**
> putServerListenersConfig($serverName, $body)

Updates the server Listeners list

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamelistenersApi();
$serverName = "serverName_example"; // string | Reserved for future use
$body = new \Model\ServerListenersConfig(); // \Model\ServerListenersConfig | 

try {
    $api_instance->putServerListenersConfig($serverName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamelistenersApi->putServerListenersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **body** | [**\Model\ServerListenersConfig**](../Model/\Model\ServerListenersConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

