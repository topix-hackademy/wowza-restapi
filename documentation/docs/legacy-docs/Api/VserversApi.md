# WowzaApi\VserversApi

All URIs are relative to *http://localhost:8087/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getServerConfig**](VserversApi.md#getServerConfig) | **GET** /v2/servers/{serverName} | Retrieves the Server configuration
[**getServerConfigAdv**](VserversApi.md#getServerConfigAdv) | **GET** /v2/servers/{serverName}/adv | Retrieves the advanced Server configuration
[**getServerLogFileConfig**](VserversApi.md#getServerLogFileConfig) | **GET** /v2/servers/{serverName}/logfiles/{logName} | Retrieves the contents of a Server Log with the specified log name
[**getServerLogFileDownloadConfig**](VserversApi.md#getServerLogFileDownloadConfig) | **GET** /v2/servers/{serverName}/logfiles/{logName}/download | Retrieves the Server Log file for the specified log name, zipped
[**getServerLogFilesConfig**](VserversApi.md#getServerLogFilesConfig) | **GET** /v2/servers/{serverName}/logfiles | Retrieves the list of server log files
[**getServerLogTypesConfig**](VserversApi.md#getServerLogTypesConfig) | **GET** /v2/servers/{serverName}/logs | Retrieves the list of available server Log Types
[**getServerLogsConfig**](VserversApi.md#getServerLogsConfig) | **GET** /v2/servers/{serverName}/logs/{logType} | Retrieves the contents of multiple Server Logs with the specified type in the log name
[**getServersConfig**](VserversApi.md#getServersConfig) | **GET** /v2/servers | Retrieves the list of Servers
[**getSourceDriverNamesList**](VserversApi.md#getSourceDriverNamesList) | **GET** /v2/servers/{serverName}/sourcecontrol/drivernames | Get the list of source control drivers
[**putServerAction**](VserversApi.md#putServerAction) | **PUT** /v2/servers/{serverName}/actions/{action} | Tells the Server to perform an action
[**putServerConfig**](VserversApi.md#putServerConfig) | **PUT** /v2/servers/{serverName} | Updates the Server configuration
[**putServerConfigAdv**](VserversApi.md#putServerConfigAdv) | **PUT** /v2/servers/{serverName}/adv | Updates the advanced Server configuration


# **getServerConfig**
> \Model\ServerConfig getServerConfig($serverName)

Retrieves the Server configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getServerConfig($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversApi->getServerConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\ServerConfig**](../Model/ServerConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerConfigAdv**
> \Model\ServerConfigAdv getServerConfigAdv($serverName)

Retrieves the advanced Server configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getServerConfigAdv($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversApi->getServerConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\ServerConfigAdv**](../Model/ServerConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerLogFileConfig**
> \Model\ServerLogFileConfig getServerLogFileConfig($serverName, $logName, $lineCount, $startOffset, $filter, $search, $regexSearch, $head, $tail)

Retrieves the contents of a Server Log with the specified log name

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversApi();
$serverName = "serverName_example"; // string | Reserved for future use
$logName = "logName_example"; // string | The name of the log
$lineCount = "100"; // string | The number of log lines requested, where a postive number indicates log lines after startOffset and a negative number indicate log lines before startOffset
$startOffset = "startOffset_example"; // string | The byte offset in the file at which to begin getting log lines
$filter = "filter_example"; // string | A string containing a list of predefined search filters separated by | where valid strings are noDebug,noInfo,noWarn,noError,noHeader,noColumnHeadings
$search = "search_example"; // string | A string containing a literal string on which to filter or a regex
$regexSearch = "false"; // string | Indicates if the 'search' parameter is a regex or a literal string
$head = "head_example"; // string | Returns the first x lines from the requested log file, the overrides the startoffset and linecount values
$tail = "tail_example"; // string | Returns the last x lines from the requested log file, the overrides the startoffset and linecount values

try {
    $result = $api_instance->getServerLogFileConfig($serverName, $logName, $lineCount, $startOffset, $filter, $search, $regexSearch, $head, $tail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversApi->getServerLogFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **logName** | **string**| The name of the log |
 **lineCount** | **string**| The number of log lines requested, where a postive number indicates log lines after startOffset and a negative number indicate log lines before startOffset | [optional] [default to 100]
 **startOffset** | **string**| The byte offset in the file at which to begin getting log lines | [optional]
 **filter** | **string**| A string containing a list of predefined search filters separated by | where valid strings are noDebug,noInfo,noWarn,noError,noHeader,noColumnHeadings | [optional]
 **search** | **string**| A string containing a literal string on which to filter or a regex | [optional]
 **regexSearch** | **string**| Indicates if the &#39;search&#39; parameter is a regex or a literal string | [optional] [default to false]
 **head** | **string**| Returns the first x lines from the requested log file, the overrides the startoffset and linecount values | [optional]
 **tail** | **string**| Returns the last x lines from the requested log file, the overrides the startoffset and linecount values | [optional]

### Return type

[**\Model\ServerLogFileConfig**](../Model/ServerLogFileConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerLogFileDownloadConfig**
> \Model\ServerLogFileDownloadConfig getServerLogFileDownloadConfig($serverName, $logName)

Retrieves the Server Log file for the specified log name, zipped

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversApi();
$serverName = "serverName_example"; // string | Reserved for future use
$logName = "logName_example"; // string | The name of the log

try {
    $result = $api_instance->getServerLogFileDownloadConfig($serverName, $logName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversApi->getServerLogFileDownloadConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **logName** | **string**| The name of the log |

### Return type

[**\Model\ServerLogFileDownloadConfig**](../Model/ServerLogFileDownloadConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerLogFilesConfig**
> \Model\ServerLogFilesConfig getServerLogFilesConfig($serverName, $order)

Retrieves the list of server log files

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversApi();
$serverName = "serverName_example"; // string | Reserved for future use
$order = "newestFirst"; // string | The order of files in serverLogs list

try {
    $result = $api_instance->getServerLogFilesConfig($serverName, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversApi->getServerLogFilesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **order** | **string**| The order of files in serverLogs list | [optional] [default to newestFirst]

### Return type

[**\Model\ServerLogFilesConfig**](../Model/ServerLogFilesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerLogTypesConfig**
> \Model\ServerLogTypesConfig getServerLogTypesConfig($serverName)

Retrieves the list of available server Log Types

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getServerLogTypesConfig($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversApi->getServerLogTypesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\ServerLogTypesConfig**](../Model/ServerLogTypesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerLogsConfig**
> \Model\ServerLogsConfig getServerLogsConfig($serverName, $logType, $lineCount, $startOffset, $filter, $search, $regexSearch, $head, $tail, $startDate, $endDate)

Retrieves the contents of multiple Server Logs with the specified type in the log name

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversApi();
$serverName = "serverName_example"; // string | Reserved for future use
$logType = "logType_example"; // string | The type of the log
$lineCount = "100"; // string | The number of log lines requested, where a postive number indicates log lines after startOffset and a negative number indicate log lines before startOffset
$startOffset = "startOffset_example"; // string | The byte offset in the file at which to begin getting log lines
$filter = "filter_example"; // string | A string containing a list of predefined search filters separated by | where valid strings are noDebug,noInfo,noWarn,noError,noHeader,noColumnHeadings
$search = "search_example"; // string | A string containing a literal string on which to filter or a regex
$regexSearch = "false"; // string | Indicates if the 'search' parameter is a regex or a literal string
$head = "head_example"; // string | Returns the first x lines from the requested log file, the overrides the startoffset and linecount values
$tail = "tail_example"; // string | Returns the last x lines from the requested log file, the overrides the startoffset and linecount values
$startDate = "startDate_example"; // string | The start date to filter on (UTC milliseconds)
$endDate = "endDate_example"; // string | The end date to filter on (UTC milliseconds)

try {
    $result = $api_instance->getServerLogsConfig($serverName, $logType, $lineCount, $startOffset, $filter, $search, $regexSearch, $head, $tail, $startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversApi->getServerLogsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **logType** | **string**| The type of the log |
 **lineCount** | **string**| The number of log lines requested, where a postive number indicates log lines after startOffset and a negative number indicate log lines before startOffset | [optional] [default to 100]
 **startOffset** | **string**| The byte offset in the file at which to begin getting log lines | [optional]
 **filter** | **string**| A string containing a list of predefined search filters separated by | where valid strings are noDebug,noInfo,noWarn,noError,noHeader,noColumnHeadings | [optional]
 **search** | **string**| A string containing a literal string on which to filter or a regex | [optional]
 **regexSearch** | **string**| Indicates if the &#39;search&#39; parameter is a regex or a literal string | [optional] [default to false]
 **head** | **string**| Returns the first x lines from the requested log file, the overrides the startoffset and linecount values | [optional]
 **tail** | **string**| Returns the last x lines from the requested log file, the overrides the startoffset and linecount values | [optional]
 **startDate** | **string**| The start date to filter on (UTC milliseconds) | [optional]
 **endDate** | **string**| The end date to filter on (UTC milliseconds) | [optional]

### Return type

[**\Model\ServerLogsConfig**](../Model/ServerLogsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServersConfig**
> \Model\ServersConfig getServersConfig()

Retrieves the list of Servers

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversApi();

try {
    $result = $api_instance->getServersConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversApi->getServersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Model\ServersConfig**](../Model/ServersConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSourceDriverNamesList**
> \Model\SourceDriverNamesList getSourceDriverNamesList($serverName)

Get the list of source control drivers

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversApi();
$serverName = "serverName_example"; // string | Reserved for future use

try {
    $result = $api_instance->getSourceDriverNamesList($serverName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversApi->getSourceDriverNamesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |

### Return type

[**\Model\SourceDriverNamesList**](../Model/SourceDriverNamesList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServerAction**
> putServerAction($serverName, $action)

Tells the Server to perform an action

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server

try {
    $api_instance->putServerAction($serverName, $action);
} catch (Exception $e) {
    echo 'Exception when calling VserversApi->putServerAction: ', $e->getMessage(), PHP_EOL;
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

# **putServerConfig**
> putServerConfig($serverName, $body)

Updates the Server configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversApi();
$serverName = "serverName_example"; // string | Reserved for future use
$body = new \Model\ServerConfig(); // \Model\ServerConfig | 

try {
    $api_instance->putServerConfig($serverName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversApi->putServerConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **body** | [**\Model\ServerConfig**](../Model/\Model\ServerConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServerConfigAdv**
> putServerConfigAdv($serverName, $body)

Updates the advanced Server configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversApi();
$serverName = "serverName_example"; // string | Reserved for future use
$body = new \Model\ServerConfigAdv(); // \Model\ServerConfigAdv | 

try {
    $api_instance->putServerConfigAdv($serverName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversApi->putServerConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **body** | [**\Model\ServerConfigAdv**](../Model/\Model\ServerConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

