# WowzaApi\VserversserverNamelogjApi

All URIs are relative to *http://localhost:8087/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLog4js**](VserversserverNamelogjApi.md#getLog4js) | **GET** /v2/servers/{serverName}/log4j | Retrieves the Server log4j configuration
[**putLog4jAction**](VserversserverNamelogjApi.md#putLog4jAction) | **PUT** /v2/servers/{serverName}/log4j/{loggerName}/actions/{action} | Tells the specified log4j logger to perform an action
[**putLog4jsAction**](VserversserverNamelogjApi.md#putLog4jsAction) | **PUT** /v2/servers/{serverName}/log4j/actions/{action} | Tells the log4j system to perform an action


# **getLog4js**
> \Model\Log4js getLog4js($serverName)

Retrieves the Server log4j configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamelogjApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getLog4js($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamelogjApi->getLog4js: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\Log4js**](../Model/Log4js.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putLog4jAction**
> putLog4jAction($serverName, $action, $loggerName)

Tells the specified log4j logger to perform an action

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamelogjApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$loggerName = "loggerName_example"; // string | The logger name needed for this REST call

try {
    $api_instance->putLog4jAction($serverName, $action, $loggerName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamelogjApi->putLog4jAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **loggerName** | **string**| The logger name needed for this REST call |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putLog4jsAction**
> putLog4jsAction($serverName, $action)

Tells the log4j system to perform an action

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamelogjApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server

try {
    $api_instance->putLog4jsAction($serverName, $action);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamelogjApi->putLog4jsAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

