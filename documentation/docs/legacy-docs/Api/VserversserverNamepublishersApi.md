# WowzaApi\VserversserverNamepublishersApi

All URIs are relative to *http://localhost:8087/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePublisherConfig**](VserversserverNamepublishersApi.md#deletePublisherConfig) | **DELETE** /v2/servers/{serverName}/publishers/{publisher} | Deletes the specified Publisher configuration
[**deletePublisherConfig3**](VserversserverNamepublishersApi.md#deletePublisherConfig3) | **DELETE** /v3/servers/{serverName}/publishers/{publisher} | Deletes the specified Publisher configuration
[**getPublisherConfig**](VserversserverNamepublishersApi.md#getPublisherConfig) | **GET** /v2/servers/{serverName}/publishers/{publisher} | Retrieves the specified Publisher configuration
[**getPublisherConfig3**](VserversserverNamepublishersApi.md#getPublisherConfig3) | **GET** /v3/servers/{serverName}/publishers/{publisher} | Retrieves the specified Publisher configuration
[**getPublishersConfig**](VserversserverNamepublishersApi.md#getPublishersConfig) | **GET** /v2/servers/{serverName}/publishers | Retrieves the list of server Publishers
[**getPublishersConfig3**](VserversserverNamepublishersApi.md#getPublishersConfig3) | **GET** /v3/servers/{serverName}/publishers | Retrieves the list of server Publishers
[**postPublisherConfig**](VserversserverNamepublishersApi.md#postPublisherConfig) | **POST** /v2/servers/{serverName}/publishers/{publisher} | Adds the specified Publisher configuration
[**postPublisherConfig3**](VserversserverNamepublishersApi.md#postPublisherConfig3) | **POST** /v3/servers/{serverName}/publishers/{publisher} | Adds the specified Publisher configuration
[**postPublishersConfig**](VserversserverNamepublishersApi.md#postPublishersConfig) | **POST** /v2/servers/{serverName}/publishers | Adds a new Publisher to the list
[**postPublishersConfig3**](VserversserverNamepublishersApi.md#postPublishersConfig3) | **POST** /v3/servers/{serverName}/publishers | Adds a new Publisher to the list
[**putPublisherConfig**](VserversserverNamepublishersApi.md#putPublisherConfig) | **PUT** /v2/servers/{serverName}/publishers/{publisher} | Updates the specified Publisher configuration
[**putPublisherConfig3**](VserversserverNamepublishersApi.md#putPublisherConfig3) | **PUT** /v3/servers/{serverName}/publishers/{publisher} | Updates the specified Publisher configuration


# **deletePublisherConfig**
> deletePublisherConfig($serverName)

Deletes the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamepublishersApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $api_instance->deletePublisherConfig($serverName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamepublishersApi->deletePublisherConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePublisherConfig3**
> deletePublisherConfig3($serverName, $publisher)

Deletes the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamepublishersApi();
$serverName = "serverName_example"; // string | Reserved for future use
$publisher = "publisher_example"; // string | 

try {
    $api_instance->deletePublisherConfig3($serverName, $publisher);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamepublishersApi->deletePublisherConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **publisher** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublisherConfig**
> \Model\PublisherConfig getPublisherConfig($serverName)

Retrieves the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamepublishersApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getPublisherConfig($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamepublishersApi->getPublisherConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\PublisherConfig**](../Model/PublisherConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublisherConfig3**
> \Model\PublisherConfig3 getPublisherConfig3($serverName, $publisher)

Retrieves the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamepublishersApi();
$serverName = "serverName_example"; // string | Reserved for future use
$publisher = "publisher_example"; // string | 

try {
    $result = $api_instance->getPublisherConfig3($serverName, $publisher);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamepublishersApi->getPublisherConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **publisher** | **string**|  |

### Return type

[**\Model\PublisherConfig3**](../Model/PublisherConfig3.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublishersConfig**
> \Model\PublishersConfig getPublishersConfig($serverName)

Retrieves the list of server Publishers

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamepublishersApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getPublishersConfig($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamepublishersApi->getPublishersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\PublishersConfig**](../Model/PublishersConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublishersConfig3**
> \Model\PublishersConfig3 getPublishersConfig3($serverName)

Retrieves the list of server Publishers

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamepublishersApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getPublishersConfig3($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamepublishersApi->getPublishersConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\PublishersConfig3**](../Model/PublishersConfig3.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPublisherConfig**
> postPublisherConfig($serverName, $body)

Adds the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamepublishersApi();
$serverName = "serverName_example"; // string | Reserved for future use
$body = new \Model\PublisherConfig(); // \Model\PublisherConfig | 

try {
    $api_instance->postPublisherConfig($serverName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamepublishersApi->postPublisherConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **body** | [**\Model\PublisherConfig**](../Model/\Model\PublisherConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPublisherConfig3**
> postPublisherConfig3($serverName, $publisher, $body)

Adds the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamepublishersApi();
$serverName = "serverName_example"; // string | Reserved for future use
$publisher = "publisher_example"; // string | 
$body = new \Model\PublisherConfig3(); // \Model\PublisherConfig3 | 

try {
    $api_instance->postPublisherConfig3($serverName, $publisher, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamepublishersApi->postPublisherConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **publisher** | **string**|  |
 **body** | [**\Model\PublisherConfig3**](../Model/\Model\PublisherConfig3.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPublishersConfig**
> postPublishersConfig($serverName, $body)

Adds a new Publisher to the list

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamepublishersApi();
$serverName = "serverName_example"; // string | Reserved for future use
$body = new \Model\PublisherConfig(); // \Model\PublisherConfig | 

try {
    $api_instance->postPublishersConfig($serverName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamepublishersApi->postPublishersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **body** | [**\Model\PublisherConfig**](../Model/\Model\PublisherConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPublishersConfig3**
> postPublishersConfig3($serverName, $body)

Adds a new Publisher to the list

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamepublishersApi();
$serverName = "serverName_example"; // string | Reserved for future use
$body = new \Model\PublisherConfig(); // \Model\PublisherConfig | 

try {
    $api_instance->postPublishersConfig3($serverName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamepublishersApi->postPublishersConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **body** | [**\Model\PublisherConfig**](../Model/\Model\PublisherConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPublisherConfig**
> putPublisherConfig($serverName, $body)

Updates the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamepublishersApi();
$serverName = "serverName_example"; // string | Reserved for future use
$body = new \Model\PublisherConfig(); // \Model\PublisherConfig | 

try {
    $api_instance->putPublisherConfig($serverName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamepublishersApi->putPublisherConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **body** | [**\Model\PublisherConfig**](../Model/\Model\PublisherConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPublisherConfig3**
> putPublisherConfig3($serverName, $publisher, $body)

Updates the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamepublishersApi();
$serverName = "serverName_example"; // string | Reserved for future use
$publisher = "publisher_example"; // string | 
$body = new \Model\PublisherConfig3(); // \Model\PublisherConfig3 | 

try {
    $api_instance->putPublisherConfig3($serverName, $publisher, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamepublishersApi->putPublisherConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **publisher** | **string**|  |
 **body** | [**\Model\PublisherConfig3**](../Model/\Model\PublisherConfig3.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

