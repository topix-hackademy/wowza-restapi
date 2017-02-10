# Welcome to Wowza Rest Api documentation


This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Package version: 0.0.1
- Build date: 2016-07-18T13:26:07.291Z
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

Anyway for compatibility and better usage we had to do some change to the generated source.

## Requirements

PHP 7.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/topix-hackademy/wowza-restapi.git"
    }
  ],
  "require": {
    "topix-hackademy/wowza-restapi": "*@dev"
  }
}
```

## Info

Much of the documentation can be found in the repository and has been generated automatically, (see [Legacy Docs]()) but is OBSOLETE regarding namespace and authorization.

### Namespace

All namespace reference to namespace `Topix\Hackademy\WowzaApi`. The children namespace Client reference to the api calls. 
The children namespace Model to the return type of the apis.

#### Client

The class names reference the api name. 

i.e. `VserversserverNamevhostsvhostNameapplicationsApi` reference the url "/v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/"

It's quite complicated to read and a refactor was outside the aim of the main project. Anyway it's possible and suggested to mantainers to plan it.

In the legacy doc you can find every method and class explaining the return type and information on the utilisation.
 
#### Model

This api describes the return type of the apis describing the data and the resources that can be extracted.

## Example of Usage

        $configurator = new Configuration();

        $configurator->setUsername('admin');
        $configurator->setPassword('password');
        $configurator->setHost('http://my.wowza.org:8087');
        $configurator->setSSLVerification(false);
        $configurator->setDebug(false); //turn on just if tests are failing for major debug

        $apiClient = new ApiClient($configurator);
        
        $api_instance = new RestinfoApi($this->apiClient);
        
        
Anyway is suggested to use the Laravel Wowza Api that include the ConnectionCounts endpoint and a better configuration handling