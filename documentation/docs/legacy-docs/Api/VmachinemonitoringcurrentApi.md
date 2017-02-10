# WowzaApi\VmachinemonitoringcurrentApi

All URIs are relative to *http://localhost:8087/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCurrentMachineStatistics**](VmachinemonitoringcurrentApi.md#getCurrentMachineStatistics) | **GET** /v2/machine/monitoring/current | Retrieves current statictics for the machine


# **getCurrentMachineStatistics**
> \Model\CurrentMachineStatistics getCurrentMachineStatistics()

Retrieves current statictics for the machine

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VmachinemonitoringcurrentApi();

try {
    $result = $api_instance->getCurrentMachineStatistics();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmachinemonitoringcurrentApi->getCurrentMachineStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Model\CurrentMachineStatistics**](../Model/CurrentMachineStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

