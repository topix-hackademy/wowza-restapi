# WowzaApi\VmachinemonitoringhistoricApi

All URIs are relative to *http://localhost:8087/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHistoricMachineStatistics**](VmachinemonitoringhistoricApi.md#getHistoricMachineStatistics) | **GET** /v2/machine/monitoring/historic | Retrieves historic statictics for the machine


# **getHistoricMachineStatistics**
> \Model\HistoricMachineStatistics getHistoricMachineStatistics()

Retrieves historic statictics for the machine

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VmachinemonitoringhistoricApi();

try {
    $result = $api_instance->getHistoricMachineStatistics();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmachinemonitoringhistoricApi->getHistoricMachineStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Model\HistoricMachineStatistics**](../Model/HistoricMachineStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

