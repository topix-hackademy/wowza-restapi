# WowzaApi\RestinfoApi

All URIs are relative to *http://localhost:8087/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRESTInfoConfig**](RestinfoApi.md#getRESTInfoConfig) | **GET** /restinfo | Retrieves the REST configuration information


# **getRESTInfoConfig**
> \Model\RESTInfoConfig getRESTInfoConfig()

Retrieves the REST configuration information

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\RestinfoApi();

try {
    $result = $api_instance->getRESTInfoConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestinfoApi->getRESTInfoConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Model\RESTInfoConfig**](../Model/RESTInfoConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

