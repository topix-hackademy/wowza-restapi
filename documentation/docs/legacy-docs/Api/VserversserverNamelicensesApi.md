# WowzaApi\VserversserverNamelicensesApi

All URIs are relative to *http://localhost:8087/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getServerLicensesConfig**](VserversserverNamelicensesApi.md#getServerLicensesConfig) | **GET** /v2/servers/{serverName}/licenses | Retrieves the list of server Licenses
[**putServerLicensesConfig**](VserversserverNamelicensesApi.md#putServerLicensesConfig) | **PUT** /v2/servers/{serverName}/licenses | Updates the Server License list


# **getServerLicensesConfig**
> \Model\ServerLicensesConfig getServerLicensesConfig($serverName)

Retrieves the list of server Licenses

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamelicensesApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getServerLicensesConfig($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamelicensesApi->getServerLicensesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\ServerLicensesConfig**](../Model/ServerLicensesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServerLicensesConfig**
> putServerLicensesConfig($serverName, $body)

Updates the Server License list

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamelicensesApi();
$serverName = "serverName_example"; // string | Reserved for future use
$body = new \Model\ServerLicensesConfig(); // \Model\ServerLicensesConfig | 

try {
    $api_instance->putServerLicensesConfig($serverName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamelicensesApi->putServerLicensesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **body** | [**\Model\ServerLicensesConfig**](../Model/\Model\ServerLicensesConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

