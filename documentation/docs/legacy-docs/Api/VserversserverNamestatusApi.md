# WowzaApi\VserversserverNamestatusApi

All URIs are relative to *http://localhost:8087/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getServerStatusConfig**](VserversserverNamestatusApi.md#getServerStatusConfig) | **GET** /v2/servers/{serverName}/status | Retrieves the server Status


# **getServerStatusConfig**
> \Model\ServerStatusConfig getServerStatusConfig($serverName)

Retrieves the server Status

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamestatusApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getServerStatusConfig($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamestatusApi->getServerStatusConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\ServerStatusConfig**](../Model/ServerStatusConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

