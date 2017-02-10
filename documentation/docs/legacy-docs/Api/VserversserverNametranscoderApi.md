# WowzaApi\VserversserverNametranscoderApi

All URIs are relative to *http://localhost:8087/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTranscoderConfig**](VserversserverNametranscoderApi.md#getTranscoderConfig) | **GET** /v2/servers/{serverName}/transcoder | Retrieves the Transcoder information


# **getTranscoderConfig**
> \Model\TranscoderConfig getTranscoderConfig($serverName)

Retrieves the Transcoder information

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNametranscoderApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getTranscoderConfig($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNametranscoderApi->getTranscoderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\TranscoderConfig**](../Model/TranscoderConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

