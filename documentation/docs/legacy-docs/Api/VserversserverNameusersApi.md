# WowzaApi\VserversserverNameusersApi

All URIs are relative to *http://localhost:8087/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUserConfig**](VserversserverNameusersApi.md#deleteUserConfig) | **DELETE** /v2/servers/{serverName}/users/{userName} | Deletes the specified User configuration
[**getUserConfig**](VserversserverNameusersApi.md#getUserConfig) | **GET** /v2/servers/{serverName}/users/{userName} | Retrieves the specified User configuration
[**getUsersConfig**](VserversserverNameusersApi.md#getUsersConfig) | **GET** /v2/servers/{serverName}/users | Retrieves the list of server Users
[**postUserConfig**](VserversserverNameusersApi.md#postUserConfig) | **POST** /v2/servers/{serverName}/users/{userName} | Adds the specified User configuration
[**postUsersConfig**](VserversserverNameusersApi.md#postUsersConfig) | **POST** /v2/servers/{serverName}/users | Adds a new server User to the list
[**putUserConfig**](VserversserverNameusersApi.md#putUserConfig) | **PUT** /v2/servers/{serverName}/users/{userName} | Updates the specified User configuration


# **deleteUserConfig**
> deleteUserConfig($serverName, $userName)

Deletes the specified User configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNameusersApi();
$serverName = "serverName_example"; // string | Reserved for future use
$userName = "userName_example"; // string | The user name

try {
    $api_instance->deleteUserConfig($serverName, $userName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNameusersApi->deleteUserConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **userName** | **string**| The user name |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserConfig**
> \Model\UserConfig getUserConfig($serverName, $userName)

Retrieves the specified User configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNameusersApi();
$serverName = "serverName_example"; // string | Reserved for future use
$userName = "userName_example"; // string | The user name

try {
    $result = $api_instance->getUserConfig($serverName, $userName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNameusersApi->getUserConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **userName** | **string**| The user name |

### Return type

[**\Model\UserConfig**](../Model/UserConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersConfig**
> \Model\UsersConfig getUsersConfig($serverName)

Retrieves the list of server Users

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNameusersApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getUsersConfig($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNameusersApi->getUsersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\UsersConfig**](../Model/UsersConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserConfig**
> postUserConfig($serverName, $userName, $body)

Adds the specified User configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNameusersApi();
$serverName = "serverName_example"; // string | Reserved for future use
$userName = "userName_example"; // string | The user name
$body = new \Model\UserConfig(); // \Model\UserConfig | 

try {
    $api_instance->postUserConfig($serverName, $userName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNameusersApi->postUserConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **userName** | **string**| The user name |
 **body** | [**\Model\UserConfig**](../Model/\Model\UserConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUsersConfig**
> postUsersConfig($serverName, $body)

Adds a new server User to the list

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNameusersApi();
$serverName = "serverName_example"; // string | Reserved for future use
$body = new \Model\UserConfig(); // \Model\UserConfig | 

try {
    $api_instance->postUsersConfig($serverName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNameusersApi->postUsersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **body** | [**\Model\UserConfig**](../Model/\Model\UserConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUserConfig**
> putUserConfig($serverName, $userName, $body)

Updates the specified User configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNameusersApi();
$serverName = "serverName_example"; // string | Reserved for future use
$userName = "userName_example"; // string | The user name
$body = new \Model\UserConfig(); // \Model\UserConfig | 

try {
    $api_instance->putUserConfig($serverName, $userName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNameusersApi->putUserConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **userName** | **string**| The user name |
 **body** | [**\Model\UserConfig**](../Model/\Model\UserConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

