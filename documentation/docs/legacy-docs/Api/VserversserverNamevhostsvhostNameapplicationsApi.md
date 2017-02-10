# WowzaApi\VserversserverNamevhostsvhostNameapplicationsApi

All URIs are relative to *http://localhost:8087/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteApplicationConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#deleteApplicationConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName} | Deletes the specified Application configuration
[**deletePublisherAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#deletePublisherAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/publishers/{publisherName} | Deletes the specified Publisher configuration
[**deletePushPublishStreamAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#deletePushPublishStreamAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/pushpublish/mapentries/{entryName} | Deletes the specified PushPublish map entry configuration
[**deleteSDPFileAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#deleteSDPFileAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/sdpfiles/{sdpfileName} | Deletes the specified SDP file
[**deleteSMILFileAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#deleteSMILFileAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/smilfiles/{smilfileName} | Deletes the specified SMIL File configuration
[**deleteStreamFileAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#deleteStreamFileAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles/{streamfileName} | Deletes the specified Stream File configuration
[**deleteTranscoderEncodeAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#deleteTranscoderEncodeAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName} | Deletes the specified Trancoder Encode configuration
[**deleteTranscoderOverlayDecodeAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#deleteTranscoderOverlayDecodeAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/decode/overlays/{overlayName} | Deletes the specified Trancoder Overlay Decode configuration
[**deleteTranscoderOverlayEncodeAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#deleteTranscoderOverlayEncodeAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName} | Deletes the specified Trancoder Overlay Encode configuration
[**deleteTranscoderStreamNameGroupAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#deleteTranscoderStreamNameGroupAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/streamnamegroups/{groupName} | Deletes the specified Trancoder StreamNameGroup configuration
[**deleteTranscoderTemplateAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#deleteTranscoderTemplateAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName} | Deletes the specified Trancoder Template configuration
[**getApplicationConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getApplicationConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName} | Retrieves the specified Application configuration
[**getApplicationConfigAdv**](VserversserverNamevhostsvhostNameapplicationsApi.md#getApplicationConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/adv | Retrieves the specified advanced Application configuration
[**getApplicationsConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getApplicationsConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications | Retrieves the list of Applications for the specifed vhost
[**getBuyDRMStreamMapsConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getBuyDRMStreamMapsConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/drm/buydrmmapfile | Retrieves the BuyDRM stream mapfile for the specified Application
[**getCurrentApplicationStatistics**](VserversserverNamevhostsvhostNameapplicationsApi.md#getCurrentApplicationStatistics) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/monitoring/current | Retrieves the current Application statistics
[**getCurrentIncomingStreamStatistics**](VserversserverNamevhostsvhostNameapplicationsApi.md#getCurrentIncomingStreamStatistics) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/monitoring/current | Retrieves the Current Incoming Stream statistics for the specifed Incoming Stream
[**getDRMConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getDRMConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/drm | Retrieves the DRM configuration for the specified Application
[**getDRMConfigAdv**](VserversserverNamevhostsvhostNameapplicationsApi.md#getDRMConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/drm/adv | Retrieves the advanced DRM configuration for the specified Application
[**getDVRConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getDVRConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/dvr | Retrieves the DVR configuration for the specified Application
[**getDVRConfigAdv**](VserversserverNamevhostsvhostNameapplicationsApi.md#getDVRConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/dvr/adv | Retrieves the advanced DVR configuration for the specified Application
[**getDefaultStreamRecorderConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getDefaultStreamRecorderConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamrecorders/{recorderName}/default | Retrieves a Stream Recorder of the requested name, popluated with the default values
[**getDvrRESTConverterStore**](VserversserverNamevhostsvhostNameapplicationsApi.md#getDvrRESTConverterStore) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/dvrstores/{dvrStoreName} | Retrieves the information about a store/converter associated with the application instance
[**getDvrRESTConverterStores**](VserversserverNamevhostsvhostNameapplicationsApi.md#getDvrRESTConverterStores) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/dvrstores | Retrieves the list of DVR stores associated with this application instance
[**getHistoricApplicationStatistics**](VserversserverNamevhostsvhostNameapplicationsApi.md#getHistoricApplicationStatistics) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/monitoring/historic | Retrieves the historic Application statistics
[**getIncomingStreamConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getIncomingStreamConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/incomingstreams/{streamName} | Retrieves the Incoming Stream information for the specifed Incoming Stream
[**getInstanceConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getInstanceConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName} | Retrieves the specified Application Instance information
[**getInstancesConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getInstancesConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances | Retrieves the list of Instances for the specified Application
[**getLiveEncoderConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getLiveEncoderConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/encoder/live | Retrieves the LiveEncoder configuration for the specified IncomingStream
[**getModulesConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getModulesConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/modules | Retrieves the list of Modules for the specified Application
[**getPublisherAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getPublisherAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/publishers/{publisherName} | Retrieves the specified Publisher configuration
[**getPublishersAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getPublishersAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/publishers | Retrieves the list of Publishers for the specified Application
[**getPushPublishStreamAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getPushPublishStreamAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/pushpublish/mapentries/{entryName} | Retrieves the PushPublish map entry configuration for the specified Application
[**getPushPublishStreamsAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getPushPublishStreamsAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/pushpublish/mapentries | Retrieves the list of PushPublish Streams for the specified Application
[**getSDPFilesAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getSDPFilesAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/sdpfiles | Retrieves the list of SDP Files for the specified Application
[**getSMILFileAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getSMILFileAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/smilfiles/{smilfileName} | Retrieves the specified SMIL File configuration
[**getSMILFilesAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getSMILFilesAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/smilfiles | Retrieves the list of SMIL Files for the specified Application
[**getSecurityConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getSecurityConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/security | Retrieves the Security configuration for the specified Application
[**getShortUrlEncoderConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getShortUrlEncoderConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/encoder/shorturl | Retrieves the Short URL for the LiveEncoder configuration for the specified IncomingStream
[**getSourceControlConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getSourceControlConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/sourcecontrol | Gets information about the Source Control and it&#39;s supported features
[**getStreamConfigurationConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getStreamConfigurationConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamconfiguration | Retrieves the Stream configuration for the specified Application
[**getStreamFileAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getStreamFileAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles/{streamfileName} | Retrieves the specified Stream File configuration
[**getStreamFileAppConfigAdv**](VserversserverNamevhostsvhostNameapplicationsApi.md#getStreamFileAppConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles/{streamfileName}/adv | Retrieves the Advanced Stream File configuration
[**getStreamFilesAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getStreamFilesAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles | Retrieves the list of Stream Files for the specified Application
[**getStreamGroupConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getStreamGroupConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamgroups/{groupName} | Retrieves the specified StreamGroup configuration
[**getStreamGroupsConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getStreamGroupsConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamgroups | Retrieves the list of Stream Groups for the specified Application Instance
[**getStreamRecorderConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getStreamRecorderConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamrecorders/{recorderName} | Retrieves the specifed Stream Recorder
[**getStreamRecordersConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getStreamRecordersConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamrecorders | Retrieves the list of Stream Recorders for the specified Application Instance
[**getTranscoderAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder | Retrieves the Transcoder configuration for the specified Application
[**getTranscoderAppConfigAdv**](VserversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderAppConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/adv | Retrieves the Advanced Transcoder configuration for the specified Application
[**getTranscoderEncodeAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderEncodeAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName} | Retrieves the specified Trancoder Encode configuration
[**getTranscoderEncodeAppConfigAdv**](VserversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderEncodeAppConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}/adv | Retrieves the Advanced Transcoder Encode configuration
[**getTranscoderEncodesAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderEncodesAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes | Retrieves the list of Transcoder Encode Configurations for the specified Application
[**getTranscoderOverlayDecodeAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderOverlayDecodeAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/decode/overlays/{overlayName} | Retrieves the specified Trancoder Overlay Decode configuration
[**getTranscoderOverlayEncodeAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderOverlayEncodeAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName} | Retrieves the specified Trancoder Overlay Encode configuration
[**getTranscoderStreamNameGroupAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderStreamNameGroupAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/streamnamegroups/{groupName} | Retrieves the specified Trancoder StreamNameGroup configuration
[**getTranscoderStreamNameGroupsAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderStreamNameGroupsAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/streamnamegroups | Retrieves the list of Transcoder Stream Name Groups for the specified Template
[**getTranscoderTemplateAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderTemplateAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName} | Retrieves the specified Trancoder Template configuration
[**getTranscoderTemplateAppConfigAdv**](VserversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderTemplateAppConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/adv | Retrieves the Advanced Transcoder Template configuration
[**getTranscoderTemplatesAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderTemplatesAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates | Retrieves the list of Transcoder Template Configurations for the specified Application
[**getVerimatrixStreamMapsConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#getVerimatrixStreamMapsConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/drm/verimatrixmapfile | Retrieves the Verimatrix stream mapfile for the specified Application
[**postApplicationConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postApplicationConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName} | Adds the specified Application configuration
[**postApplicationConfigAdv**](VserversserverNamevhostsvhostNameapplicationsApi.md#postApplicationConfigAdv) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/adv | Adds the specified advanced Application configuration
[**postApplicationsConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postApplicationsConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications | Adds an Application to the list of Applications  for the specifed vhost
[**postPublisherAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postPublisherAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/publishers/{publisherName} | Adds the specified Publisher configuration
[**postPublishersAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postPublishersAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/publishers | Add a Publisher to list of Publishers for the specified Application
[**postPushPublishStreamAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postPushPublishStreamAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/pushpublish/mapentries/{entryName} | Adds the specified PushPublish map entry configuration
[**postPushPublishStreamsAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postPushPublishStreamsAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/pushpublish/mapentries | Adds a PushPublish Stream to list of PushPublish Streams for the specified Application
[**postSMILFileAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postSMILFileAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/smilfiles/{smilfileName} | Adds the specified SMIL File configuration
[**postSMILFilesAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postSMILFilesAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/smilfiles | Adds a SMIL File to the list of SMIL Files for the specified Application
[**postStreamFileAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postStreamFileAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles/{streamfileName} | Adds the specified Stream File configuration
[**postStreamFilesAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postStreamFilesAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles | Adds a Stream File to the list of Stream Files for the specified Application
[**postStreamRecorderConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postStreamRecorderConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamrecorders/{recorderName} | Creates a new Stream Recorder and starts recording
[**postStreamRecordersConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postStreamRecordersConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamrecorders | Creates a new Stream Recorder in the specified Application Instance and starts recording
[**postTranscoderEncodeAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postTranscoderEncodeAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName} | Adds the specified Trancoder Encode configuration
[**postTranscoderEncodesAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postTranscoderEncodesAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes | Adds a Transcoder Encode Configuration to the specified Application
[**postTranscoderStreamNameGroupAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postTranscoderStreamNameGroupAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/streamnamegroups/{groupName} | Adds the specified Trancoder StreamNameGroup configuration
[**postTranscoderStreamNameGroupsAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postTranscoderStreamNameGroupsAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/streamnamegroups | Adds a Transcoder Stream Name Groups Configuration to the specified Template
[**postTranscoderTemplateAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postTranscoderTemplateAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName} | Adds the specified Trancoder Template configuration
[**postTranscoderTemplatesAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#postTranscoderTemplatesAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates | Adds a Transcoder Templates Configuration to the specified Application
[**putApplicationAction**](VserversserverNamevhostsvhostNameapplicationsApi.md#putApplicationAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/actions/{action} | 
[**putApplicationConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putApplicationConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName} | Updates the specified Application configuration
[**putApplicationConfigAdv**](VserversserverNamevhostsvhostNameapplicationsApi.md#putApplicationConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/adv | Updates the specified advanced Application configuration
[**putBuyDRMStreamMapsConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putBuyDRMStreamMapsConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/drm/buydrmmapfile | Updates the BuyDRM stream mapfile for the specified Application
[**putDRMConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putDRMConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/drm | Updates the DRM configuration for the specified Application
[**putDRMConfigAdv**](VserversserverNamevhostsvhostNameapplicationsApi.md#putDRMConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/drm/adv | Updates the advanced DRM configuration for the specified Application
[**putDVRConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putDVRConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/dvr | Updates the DVR configuration for the specified Application
[**putDVRConfigAdv**](VserversserverNamevhostsvhostNameapplicationsApi.md#putDVRConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/dvr/adv | Updates the advanced DVR configuration for the specified Application
[**putDvrRESTConverterStoreAction**](VserversserverNamevhostsvhostNameapplicationsApi.md#putDvrRESTConverterStoreAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/dvrstores/{dvrStoreName}/actions/{action} | 
[**putDvrRESTConverterStoresAction**](VserversserverNamevhostsvhostNameapplicationsApi.md#putDvrRESTConverterStoresAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/dvrstores/actions/{action} | 
[**putIncomingStreamAction**](VserversserverNamevhostsvhostNameapplicationsApi.md#putIncomingStreamAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/actions/{action} | 
[**putInstanceAction**](VserversserverNamevhostsvhostNameapplicationsApi.md#putInstanceAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/actions/{action} | 
[**putMediaCacheApplicationStoreAction**](VserversserverNamevhostsvhostNameapplicationsApi.md#putMediaCacheApplicationStoreAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/mediacache/stores/actions/{action} | 
[**putModulesConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putModulesConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/modules | Updates the list of Modules for the specified Application
[**putPublisherAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putPublisherAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/publishers/{publisherName} | Updates the specified Publisher configuration
[**putPushPublishStreamAppAction**](VserversserverNamevhostsvhostNameapplicationsApi.md#putPushPublishStreamAppAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/pushpublish/mapentries/{entryName}/actions/{action} | 
[**putPushPublishStreamAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putPushPublishStreamAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/pushpublish/mapentries/{entryName} | Updates the specified PushPublish map entry configuration
[**putPushPublishStreamsAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putPushPublishStreamsAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/pushpublish/mapentries | 
[**putSDPFileAppAction**](VserversserverNamevhostsvhostNameapplicationsApi.md#putSDPFileAppAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/sdpfiles/{sdpfileName}/actions/{action} | 
[**putSMILFileAppAction**](VserversserverNamevhostsvhostNameapplicationsApi.md#putSMILFileAppAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/smilfiles/{smilfileName}/actions/{action} | 
[**putSMILFileAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putSMILFileAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/smilfiles/{smilfileName} | Updates the specified SMIL File configuration
[**putSecurityConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putSecurityConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/security | Updates the Security configuration for the specified Application
[**putSourceControlAction**](VserversserverNamevhostsvhostNameapplicationsApi.md#putSourceControlAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/sourcecontrol/actions/{action} | 
[**putStreamConfigurationConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putStreamConfigurationConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamconfiguration | Updates the Stream configuration for the specified Application
[**putStreamFileAppAction**](VserversserverNamevhostsvhostNameapplicationsApi.md#putStreamFileAppAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles/{streamfileName}/actions/{action} | 
[**putStreamFileAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putStreamFileAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles/{streamfileName} | Updates the specified Stream File configuration
[**putStreamFileAppConfigAdv**](VserversserverNamevhostsvhostNameapplicationsApi.md#putStreamFileAppConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles/{streamfileName}/adv | Updates the Advanced Stream File configuration
[**putStreamGroupAction**](VserversserverNamevhostsvhostNameapplicationsApi.md#putStreamGroupAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamgroups/{groupName}/actions/{action} | 
[**putStreamRecorderAction**](VserversserverNamevhostsvhostNameapplicationsApi.md#putStreamRecorderAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamrecorders/{recorderName}/actions/{action} | 
[**putTranscoderAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder | Updates the Transcoder configuration for the specified Application
[**putTranscoderAppConfigAdv**](VserversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderAppConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/adv | Updates the Advanced Transcoder configuration for the specified Application
[**putTranscoderEncodeAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderEncodeAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName} | Updates the specified Trancoder Encode configuration
[**putTranscoderEncodeAppConfigAdv**](VserversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderEncodeAppConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}/adv | Updates the Advanced Transcoder Encode configuration
[**putTranscoderOverlayDecodeAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderOverlayDecodeAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/decode/overlays/{overlayName} | Updates the specified Trancoder Overlay Decode configuration
[**putTranscoderOverlayEncodeAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderOverlayEncodeAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName} | Updates the specified Trancoder Overlay Encode configuration
[**putTranscoderStreamNameGroupAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderStreamNameGroupAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/streamnamegroups/{groupName} | Updates the specified Trancoder StreamNameGroup configuration
[**putTranscoderTemplateAppAction**](VserversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderTemplateAppAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/actions/{action} | 
[**putTranscoderTemplateAppConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderTemplateAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName} | Updates the specified Trancoder Template configuration
[**putTranscoderTemplateAppConfigAdv**](VserversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderTemplateAppConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/adv | Updates the Advanced Transcoder Template configuration
[**putVerimatrixStreamMapsConfig**](VserversserverNamevhostsvhostNameapplicationsApi.md#putVerimatrixStreamMapsConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/drm/verimatrixmapfile | Updates the Verimatrix stream mapfile for the specified Application


# **deleteApplicationConfig**
> deleteApplicationConfig($serverName, $vhostName, $appName)

Deletes the specified Application configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $api_instance->deleteApplicationConfig($serverName, $vhostName, $appName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->deleteApplicationConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePublisherAppConfig**
> deletePublisherAppConfig($serverName, $vhostName, $publisherName, $appName)

Deletes the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name
$publisherName = "publisherName_example"; // string | The publisher name
$appName = "appName_example"; // string | 

try {
    $api_instance->deletePublisherAppConfig($serverName, $vhostName, $publisherName, $appName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->deletePublisherAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |
 **publisherName** | **string**| The publisher name |
 **appName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePushPublishStreamAppConfig**
> deletePushPublishStreamAppConfig($serverName, $vhostName, $appName, $entryName)

Deletes the specified PushPublish map entry configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$entryName = "entryName_example"; // string | The entry name needed for this REST call

try {
    $api_instance->deletePushPublishStreamAppConfig($serverName, $vhostName, $appName, $entryName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->deletePushPublishStreamAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **entryName** | **string**| The entry name needed for this REST call |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSDPFileAppConfig**
> deleteSDPFileAppConfig($serverName, $vhostName, $sdpfileName, $appName)

Deletes the specified SDP file

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$sdpfileName = "sdpfileName_example"; // string | The SDP file name without the extension
$appName = "appName_example"; // string | 

try {
    $api_instance->deleteSDPFileAppConfig($serverName, $vhostName, $sdpfileName, $appName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->deleteSDPFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **sdpfileName** | **string**| The SDP file name without the extension |
 **appName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSMILFileAppConfig**
> deleteSMILFileAppConfig($serverName, $vhostName, $smilfileName, $appName)

Deletes the specified SMIL File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$smilfileName = "smilfileName_example"; // string | The SMIL file name without the extension
$appName = "appName_example"; // string | 

try {
    $api_instance->deleteSMILFileAppConfig($serverName, $vhostName, $smilfileName, $appName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->deleteSMILFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **smilfileName** | **string**| The SMIL file name without the extension |
 **appName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStreamFileAppConfig**
> deleteStreamFileAppConfig($serverName, $vhostName, $streamfileName, $appName)

Deletes the specified Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$streamfileName = "streamfileName_example"; // string | The stream file name without the extension
$appName = "appName_example"; // string | 

try {
    $api_instance->deleteStreamFileAppConfig($serverName, $vhostName, $streamfileName, $appName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->deleteStreamFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **streamfileName** | **string**| The stream file name without the extension |
 **appName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderEncodeAppConfig**
> deleteTranscoderEncodeAppConfig($serverName, $vhostName, $templateName, $encodeName, $appName)

Deletes the specified Trancoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$encodeName = "encodeName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $api_instance->deleteTranscoderEncodeAppConfig($serverName, $vhostName, $templateName, $encodeName, $appName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->deleteTranscoderEncodeAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **encodeName** | **string**|  |
 **appName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderOverlayDecodeAppConfig**
> deleteTranscoderOverlayDecodeAppConfig($serverName, $vhostName, $templateName, $overlayName, $appName)

Deletes the specified Trancoder Overlay Decode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$overlayName = "overlayName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $api_instance->deleteTranscoderOverlayDecodeAppConfig($serverName, $vhostName, $templateName, $overlayName, $appName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->deleteTranscoderOverlayDecodeAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **overlayName** | **string**|  |
 **appName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderOverlayEncodeAppConfig**
> deleteTranscoderOverlayEncodeAppConfig($serverName, $vhostName, $templateName, $overlayName, $encodeName, $appName)

Deletes the specified Trancoder Overlay Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$overlayName = "overlayName_example"; // string | 
$encodeName = "encodeName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $api_instance->deleteTranscoderOverlayEncodeAppConfig($serverName, $vhostName, $templateName, $overlayName, $encodeName, $appName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->deleteTranscoderOverlayEncodeAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **overlayName** | **string**|  |
 **encodeName** | **string**|  |
 **appName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderStreamNameGroupAppConfig**
> deleteTranscoderStreamNameGroupAppConfig($serverName, $vhostName, $templateName, $groupName, $appName)

Deletes the specified Trancoder StreamNameGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$groupName = "groupName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $api_instance->deleteTranscoderStreamNameGroupAppConfig($serverName, $vhostName, $templateName, $groupName, $appName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->deleteTranscoderStreamNameGroupAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **groupName** | **string**|  |
 **appName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderTemplateAppConfig**
> deleteTranscoderTemplateAppConfig($serverName, $vhostName, $templateName, $appName)

Deletes the specified Trancoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $api_instance->deleteTranscoderTemplateAppConfig($serverName, $vhostName, $templateName, $appName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->deleteTranscoderTemplateAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **appName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApplicationConfig**
> \Model\ApplicationConfig getApplicationConfig($serverName, $vhostName, $appName)

Retrieves the specified Application configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getApplicationConfig($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getApplicationConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\ApplicationConfig**](../Model/ApplicationConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApplicationConfigAdv**
> \Model\ApplicationConfigAdv getApplicationConfigAdv($serverName, $vhostName, $appName)

Retrieves the specified advanced Application configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getApplicationConfigAdv($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getApplicationConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\ApplicationConfigAdv**](../Model/ApplicationConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApplicationsConfig**
> \Model\ApplicationsConfig getApplicationsConfig($serverName, $vhostName)

Retrieves the list of Applications for the specifed vhost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 

try {
    $result = $api_instance->getApplicationsConfig($serverName, $vhostName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getApplicationsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |

### Return type

[**\Model\ApplicationsConfig**](../Model/ApplicationsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuyDRMStreamMapsConfig**
> \Model\BuyDRMStreamMapsConfig getBuyDRMStreamMapsConfig($serverName, $vhostName, $appName)

Retrieves the BuyDRM stream mapfile for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getBuyDRMStreamMapsConfig($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getBuyDRMStreamMapsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\BuyDRMStreamMapsConfig**](../Model/BuyDRMStreamMapsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentApplicationStatistics**
> \Model\CurrentApplicationStatistics getCurrentApplicationStatistics($serverName, $vhostName, $appName)

Retrieves the current Application statistics

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getCurrentApplicationStatistics($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getCurrentApplicationStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\CurrentApplicationStatistics**](../Model/CurrentApplicationStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentIncomingStreamStatistics**
> \Model\CurrentIncomingStreamStatistics getCurrentIncomingStreamStatistics($serverName, $vhostName, $appName, $instanceName, $streamName)

Retrieves the Current Incoming Stream statistics for the specifed Incoming Stream

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$instanceName = "instanceName_example"; // string | 
$streamName = "streamName_example"; // string | 

try {
    $result = $api_instance->getCurrentIncomingStreamStatistics($serverName, $vhostName, $appName, $instanceName, $streamName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getCurrentIncomingStreamStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **instanceName** | **string**|  |
 **streamName** | **string**|  |

### Return type

[**\Model\CurrentIncomingStreamStatistics**](../Model/CurrentIncomingStreamStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDRMConfig**
> \Model\DRMConfig getDRMConfig($serverName, $vhostName, $appName)

Retrieves the DRM configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getDRMConfig($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getDRMConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\DRMConfig**](../Model/DRMConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDRMConfigAdv**
> \Model\DRMConfigAdv getDRMConfigAdv($serverName, $vhostName, $appName)

Retrieves the advanced DRM configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getDRMConfigAdv($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getDRMConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\DRMConfigAdv**](../Model/DRMConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDVRConfig**
> \Model\DVRConfig getDVRConfig($serverName, $vhostName, $appName)

Retrieves the DVR configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getDVRConfig($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getDVRConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\DVRConfig**](../Model/DVRConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDVRConfigAdv**
> \Model\DVRConfigAdv getDVRConfigAdv($serverName, $vhostName, $appName)

Retrieves the advanced DVR configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getDVRConfigAdv($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getDVRConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\DVRConfigAdv**](../Model/DVRConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDefaultStreamRecorderConfig**
> \Model\DefaultStreamRecorderConfig getDefaultStreamRecorderConfig($serverName, $vhostName, $appName, $recorderName, $instanceName)

Retrieves a Stream Recorder of the requested name, popluated with the default values

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$recorderName = "recorderName_example"; // string | 
$instanceName = "instanceName_example"; // string | 

try {
    $result = $api_instance->getDefaultStreamRecorderConfig($serverName, $vhostName, $appName, $recorderName, $instanceName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getDefaultStreamRecorderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **recorderName** | **string**|  |
 **instanceName** | **string**|  |

### Return type

[**\Model\DefaultStreamRecorderConfig**](../Model/DefaultStreamRecorderConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDvrRESTConverterStore**
> \Model\DvrRESTConverterStore getDvrRESTConverterStore($serverName, $vhostName, $appName, $instanceName, $dvrStoreName)

Retrieves the information about a store/converter associated with the application instance

This API is available in builds 15942 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$instanceName = "instanceName_example"; // string | 
$dvrStoreName = "dvrStoreName_example"; // string | 

try {
    $result = $api_instance->getDvrRESTConverterStore($serverName, $vhostName, $appName, $instanceName, $dvrStoreName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getDvrRESTConverterStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **instanceName** | **string**|  |
 **dvrStoreName** | **string**|  |

### Return type

[**\Model\DvrRESTConverterStore**](../Model/DvrRESTConverterStore.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDvrRESTConverterStores**
> \Model\DvrRESTConverterStores getDvrRESTConverterStores($serverName, $vhostName, $appName, $instanceName)

Retrieves the list of DVR stores associated with this application instance

This API is available in builds 15942 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$instanceName = "instanceName_example"; // string | 

try {
    $result = $api_instance->getDvrRESTConverterStores($serverName, $vhostName, $appName, $instanceName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getDvrRESTConverterStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **instanceName** | **string**|  |

### Return type

[**\Model\DvrRESTConverterStores**](../Model/DvrRESTConverterStores.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricApplicationStatistics**
> \Model\HistoricApplicationStatistics getHistoricApplicationStatistics($serverName, $vhostName, $appName)

Retrieves the historic Application statistics

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getHistoricApplicationStatistics($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getHistoricApplicationStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\HistoricApplicationStatistics**](../Model/HistoricApplicationStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIncomingStreamConfig**
> \Model\IncomingStreamConfig getIncomingStreamConfig($serverName, $vhostName, $appName, $instanceName, $streamName)

Retrieves the Incoming Stream information for the specifed Incoming Stream

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$instanceName = "instanceName_example"; // string | 
$streamName = "streamName_example"; // string | 

try {
    $result = $api_instance->getIncomingStreamConfig($serverName, $vhostName, $appName, $instanceName, $streamName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getIncomingStreamConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **instanceName** | **string**|  |
 **streamName** | **string**|  |

### Return type

[**\Model\IncomingStreamConfig**](../Model/IncomingStreamConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInstanceConfig**
> \Model\InstanceConfig getInstanceConfig($serverName, $vhostName, $appName, $instanceName)

Retrieves the specified Application Instance information

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$instanceName = "instanceName_example"; // string | 

try {
    $result = $api_instance->getInstanceConfig($serverName, $vhostName, $appName, $instanceName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getInstanceConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **instanceName** | **string**|  |

### Return type

[**\Model\InstanceConfig**](../Model/InstanceConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInstancesConfig**
> \Model\InstancesConfig getInstancesConfig($serverName, $vhostName, $appName)

Retrieves the list of Instances for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getInstancesConfig($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getInstancesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\InstancesConfig**](../Model/InstancesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLiveEncoderConfig**
> \Model\LiveEncoderConfig getLiveEncoderConfig($serverName, $vhostName, $appName, $instanceName, $streamName, $publishUser, $publishHost, $publishPort)

Retrieves the LiveEncoder configuration for the specified IncomingStream

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$instanceName = "instanceName_example"; // string | 
$streamName = "streamName_example"; // string | 
$publishUser = "publishUser_example"; // string | The publish username to use in the encoder configuration
$publishHost = "publishHost_example"; // string | The IP address then encoder will publish to
$publishPort = "publishPort_example"; // string | The Port number the encoder will publish to

try {
    $result = $api_instance->getLiveEncoderConfig($serverName, $vhostName, $appName, $instanceName, $streamName, $publishUser, $publishHost, $publishPort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getLiveEncoderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **instanceName** | **string**|  |
 **streamName** | **string**|  |
 **publishUser** | **string**| The publish username to use in the encoder configuration |
 **publishHost** | **string**| The IP address then encoder will publish to |
 **publishPort** | **string**| The Port number the encoder will publish to |

### Return type

[**\Model\LiveEncoderConfig**](../Model/LiveEncoderConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getModulesConfig**
> \Model\ModulesConfig getModulesConfig($serverName, $vhostName, $appName)

Retrieves the list of Modules for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getModulesConfig($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getModulesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\ModulesConfig**](../Model/ModulesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublisherAppConfig**
> \Model\PublisherAppConfig getPublisherAppConfig($serverName, $vhostName, $publisherName, $appName)

Retrieves the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name
$publisherName = "publisherName_example"; // string | The publisher name
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getPublisherAppConfig($serverName, $vhostName, $publisherName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getPublisherAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |
 **publisherName** | **string**| The publisher name |
 **appName** | **string**|  |

### Return type

[**\Model\PublisherAppConfig**](../Model/PublisherAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublishersAppConfig**
> \Model\PublishersAppConfig getPublishersAppConfig($serverName, $vhostName, $appName)

Retrieves the list of Publishers for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getPublishersAppConfig($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getPublishersAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |
 **appName** | **string**|  |

### Return type

[**\Model\PublishersAppConfig**](../Model/PublishersAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPushPublishStreamAppConfig**
> \Model\PushPublishStreamAppConfig getPushPublishStreamAppConfig($serverName, $vhostName, $appName, $entryName)

Retrieves the PushPublish map entry configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$entryName = "entryName_example"; // string | The entry name needed for this REST call

try {
    $result = $api_instance->getPushPublishStreamAppConfig($serverName, $vhostName, $appName, $entryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getPushPublishStreamAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **entryName** | **string**| The entry name needed for this REST call |

### Return type

[**\Model\PushPublishStreamAppConfig**](../Model/PushPublishStreamAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPushPublishStreamsAppConfig**
> \Model\PushPublishStreamsAppConfig getPushPublishStreamsAppConfig($serverName, $vhostName, $appName)

Retrieves the list of PushPublish Streams for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getPushPublishStreamsAppConfig($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getPushPublishStreamsAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\PushPublishStreamsAppConfig**](../Model/PushPublishStreamsAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSDPFilesAppConfig**
> \Model\SDPFilesAppConfig getSDPFilesAppConfig($serverName, $vhostName, $appName)

Retrieves the list of SDP Files for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getSDPFilesAppConfig($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getSDPFilesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\SDPFilesAppConfig**](../Model/SDPFilesAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSMILFileAppConfig**
> \Model\SMILFileAppConfig getSMILFileAppConfig($serverName, $vhostName, $smilfileName, $appName)

Retrieves the specified SMIL File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$smilfileName = "smilfileName_example"; // string | The SMIL file name without the extension
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getSMILFileAppConfig($serverName, $vhostName, $smilfileName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getSMILFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **smilfileName** | **string**| The SMIL file name without the extension |
 **appName** | **string**|  |

### Return type

[**\Model\SMILFileAppConfig**](../Model/SMILFileAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSMILFilesAppConfig**
> \Model\SMILFilesAppConfig getSMILFilesAppConfig($serverName, $vhostName, $appName)

Retrieves the list of SMIL Files for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | The application name needed for this REST call

try {
    $result = $api_instance->getSMILFilesAppConfig($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getSMILFilesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**| The application name needed for this REST call |

### Return type

[**\Model\SMILFilesAppConfig**](../Model/SMILFilesAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSecurityConfig**
> \Model\SecurityConfig getSecurityConfig($serverName, $vhostName, $appName)

Retrieves the Security configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getSecurityConfig($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getSecurityConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\SecurityConfig**](../Model/SecurityConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShortUrlEncoderConfig**
> \Model\ShortUrlEncoderConfig getShortUrlEncoderConfig($serverName, $vhostName, $appName, $instanceName, $streamName)

Retrieves the Short URL for the LiveEncoder configuration for the specified IncomingStream

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$instanceName = "instanceName_example"; // string | 
$streamName = "streamName_example"; // string | 

try {
    $result = $api_instance->getShortUrlEncoderConfig($serverName, $vhostName, $appName, $instanceName, $streamName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getShortUrlEncoderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **instanceName** | **string**|  |
 **streamName** | **string**|  |

### Return type

[**\Model\ShortUrlEncoderConfig**](../Model/ShortUrlEncoderConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSourceControlConfig**
> \Model\SourceControlConfig getSourceControlConfig($serverName, $vhostName, $appName, $instanceName, $streamName)

Gets information about the Source Control and it's supported features

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$instanceName = "instanceName_example"; // string | 
$streamName = "streamName_example"; // string | 

try {
    $result = $api_instance->getSourceControlConfig($serverName, $vhostName, $appName, $instanceName, $streamName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getSourceControlConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **instanceName** | **string**|  |
 **streamName** | **string**|  |

### Return type

[**\Model\SourceControlConfig**](../Model/SourceControlConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamConfigurationConfig**
> \Model\StreamConfigurationConfig getStreamConfigurationConfig($serverName, $vhostName, $appName)

Retrieves the Stream configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getStreamConfigurationConfig($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getStreamConfigurationConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\StreamConfigurationConfig**](../Model/StreamConfigurationConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamFileAppConfig**
> \Model\StreamFileAppConfig getStreamFileAppConfig($serverName, $vhostName, $streamfileName, $appName)

Retrieves the specified Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$streamfileName = "streamfileName_example"; // string | The stream file name without the extension
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getStreamFileAppConfig($serverName, $vhostName, $streamfileName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getStreamFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **streamfileName** | **string**| The stream file name without the extension |
 **appName** | **string**|  |

### Return type

[**\Model\StreamFileAppConfig**](../Model/StreamFileAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamFileAppConfigAdv**
> \Model\StreamFileAppConfigAdv getStreamFileAppConfigAdv($serverName, $vhostName, $streamfileName, $appName)

Retrieves the Advanced Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$streamfileName = "streamfileName_example"; // string | The stream file name without the .stream extension
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getStreamFileAppConfigAdv($serverName, $vhostName, $streamfileName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getStreamFileAppConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **streamfileName** | **string**| The stream file name without the .stream extension |
 **appName** | **string**|  |

### Return type

[**\Model\StreamFileAppConfigAdv**](../Model/StreamFileAppConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamFilesAppConfig**
> \Model\StreamFilesAppConfig getStreamFilesAppConfig($serverName, $vhostName, $appName)

Retrieves the list of Stream Files for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getStreamFilesAppConfig($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getStreamFilesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\StreamFilesAppConfig**](../Model/StreamFilesAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamGroupConfig**
> \Model\StreamGroupConfig getStreamGroupConfig($serverName, $vhostName, $appName, $groupName, $instanceName)

Retrieves the specified StreamGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$groupName = "groupName_example"; // string | 
$instanceName = "instanceName_example"; // string | 

try {
    $result = $api_instance->getStreamGroupConfig($serverName, $vhostName, $appName, $groupName, $instanceName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getStreamGroupConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **groupName** | **string**|  |
 **instanceName** | **string**|  |

### Return type

[**\Model\StreamGroupConfig**](../Model/StreamGroupConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamGroupsConfig**
> \Model\StreamGroupsConfig getStreamGroupsConfig($serverName, $vhostName, $appName, $instanceName)

Retrieves the list of Stream Groups for the specified Application Instance

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$instanceName = "instanceName_example"; // string | 

try {
    $result = $api_instance->getStreamGroupsConfig($serverName, $vhostName, $appName, $instanceName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getStreamGroupsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **instanceName** | **string**|  |

### Return type

[**\Model\StreamGroupsConfig**](../Model/StreamGroupsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamRecorderConfig**
> \Model\StreamRecorderConfig getStreamRecorderConfig($serverName, $vhostName, $appName, $recorderName, $instanceName)

Retrieves the specifed Stream Recorder

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$recorderName = "recorderName_example"; // string | 
$instanceName = "instanceName_example"; // string | 

try {
    $result = $api_instance->getStreamRecorderConfig($serverName, $vhostName, $appName, $recorderName, $instanceName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getStreamRecorderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **recorderName** | **string**|  |
 **instanceName** | **string**|  |

### Return type

[**\Model\StreamRecorderConfig**](../Model/StreamRecorderConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamRecordersConfig**
> \Model\StreamRecordersConfig getStreamRecordersConfig($serverName, $vhostName, $appName, $instanceName)

Retrieves the list of Stream Recorders for the specified Application Instance

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$instanceName = "instanceName_example"; // string | 

try {
    $result = $api_instance->getStreamRecordersConfig($serverName, $vhostName, $appName, $instanceName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getStreamRecordersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **instanceName** | **string**|  |

### Return type

[**\Model\StreamRecordersConfig**](../Model/StreamRecordersConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderAppConfig**
> \Model\TranscoderAppConfig getTranscoderAppConfig($serverName, $vhostName, $appName)

Retrieves the Transcoder configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getTranscoderAppConfig($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getTranscoderAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\TranscoderAppConfig**](../Model/TranscoderAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderAppConfigAdv**
> \Model\TranscoderAppConfigAdv getTranscoderAppConfigAdv($serverName, $vhostName, $appName)

Retrieves the Advanced Transcoder configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getTranscoderAppConfigAdv($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getTranscoderAppConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\TranscoderAppConfigAdv**](../Model/TranscoderAppConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderEncodeAppConfig**
> \Model\TranscoderEncodeAppConfig getTranscoderEncodeAppConfig($serverName, $vhostName, $templateName, $encodeName, $appName)

Retrieves the specified Trancoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$encodeName = "encodeName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getTranscoderEncodeAppConfig($serverName, $vhostName, $templateName, $encodeName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getTranscoderEncodeAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **encodeName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\TranscoderEncodeAppConfig**](../Model/TranscoderEncodeAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderEncodeAppConfigAdv**
> \Model\TranscoderEncodeAppConfigAdv getTranscoderEncodeAppConfigAdv($serverName, $vhostName, $templateName, $encodeName, $appName)

Retrieves the Advanced Transcoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$encodeName = "encodeName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getTranscoderEncodeAppConfigAdv($serverName, $vhostName, $templateName, $encodeName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getTranscoderEncodeAppConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **encodeName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\TranscoderEncodeAppConfigAdv**](../Model/TranscoderEncodeAppConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderEncodesAppConfig**
> \Model\TranscoderEncodesAppConfig getTranscoderEncodesAppConfig($serverName, $vhostName, $templateName, $appName)

Retrieves the list of Transcoder Encode Configurations for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getTranscoderEncodesAppConfig($serverName, $vhostName, $templateName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getTranscoderEncodesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\TranscoderEncodesAppConfig**](../Model/TranscoderEncodesAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderOverlayDecodeAppConfig**
> \Model\TranscoderOverlayDecodeAppConfig getTranscoderOverlayDecodeAppConfig($serverName, $vhostName, $templateName, $overlayName, $appName)

Retrieves the specified Trancoder Overlay Decode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$overlayName = "overlayName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getTranscoderOverlayDecodeAppConfig($serverName, $vhostName, $templateName, $overlayName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getTranscoderOverlayDecodeAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **overlayName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\TranscoderOverlayDecodeAppConfig**](../Model/TranscoderOverlayDecodeAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderOverlayEncodeAppConfig**
> \Model\TranscoderOverlayEncodeAppConfig getTranscoderOverlayEncodeAppConfig($serverName, $vhostName, $templateName, $overlayName, $encodeName, $appName)

Retrieves the specified Trancoder Overlay Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$overlayName = "overlayName_example"; // string | 
$encodeName = "encodeName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getTranscoderOverlayEncodeAppConfig($serverName, $vhostName, $templateName, $overlayName, $encodeName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getTranscoderOverlayEncodeAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **overlayName** | **string**|  |
 **encodeName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\TranscoderOverlayEncodeAppConfig**](../Model/TranscoderOverlayEncodeAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderStreamNameGroupAppConfig**
> \Model\TranscoderStreamNameGroupAppConfig getTranscoderStreamNameGroupAppConfig($serverName, $vhostName, $templateName, $groupName, $appName)

Retrieves the specified Trancoder StreamNameGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$groupName = "groupName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getTranscoderStreamNameGroupAppConfig($serverName, $vhostName, $templateName, $groupName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getTranscoderStreamNameGroupAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **groupName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\TranscoderStreamNameGroupAppConfig**](../Model/TranscoderStreamNameGroupAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderStreamNameGroupsAppConfig**
> \Model\TranscoderStreamNameGroupsAppConfig getTranscoderStreamNameGroupsAppConfig($serverName, $vhostName, $templateName, $appName)

Retrieves the list of Transcoder Stream Name Groups for the specified Template

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getTranscoderStreamNameGroupsAppConfig($serverName, $vhostName, $templateName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getTranscoderStreamNameGroupsAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\TranscoderStreamNameGroupsAppConfig**](../Model/TranscoderStreamNameGroupsAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderTemplateAppConfig**
> \Model\TranscoderTemplateAppConfig getTranscoderTemplateAppConfig($serverName, $vhostName, $templateName, $appName)

Retrieves the specified Trancoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getTranscoderTemplateAppConfig($serverName, $vhostName, $templateName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getTranscoderTemplateAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\TranscoderTemplateAppConfig**](../Model/TranscoderTemplateAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderTemplateAppConfigAdv**
> \Model\TranscoderTemplateAppConfigAdv getTranscoderTemplateAppConfigAdv($serverName, $vhostName, $templateName, $appName)

Retrieves the Advanced Transcoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getTranscoderTemplateAppConfigAdv($serverName, $vhostName, $templateName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getTranscoderTemplateAppConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\TranscoderTemplateAppConfigAdv**](../Model/TranscoderTemplateAppConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderTemplatesAppConfig**
> \Model\TranscoderTemplatesAppConfig getTranscoderTemplatesAppConfig($serverName, $vhostName, $appName)

Retrieves the list of Transcoder Template Configurations for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getTranscoderTemplatesAppConfig($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getTranscoderTemplatesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**|  |

### Return type

[**\Model\TranscoderTemplatesAppConfig**](../Model/TranscoderTemplatesAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVerimatrixStreamMapsConfig**
> \Model\VerimatrixStreamMapsConfig getVerimatrixStreamMapsConfig($serverName, $vhostName, $appName)

Retrieves the Verimatrix stream mapfile for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 

try {
    $result = $api_instance->getVerimatrixStreamMapsConfig($serverName, $vhostName, $appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->getVerimatrixStreamMapsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |

### Return type

[**\Model\VerimatrixStreamMapsConfig**](../Model/VerimatrixStreamMapsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApplicationConfig**
> postApplicationConfig($serverName, $vhostName, $appName, $body)

Adds the specified Application configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\ApplicationConfig(); // \Model\ApplicationConfig | 

try {
    $api_instance->postApplicationConfig($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postApplicationConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\ApplicationConfig**](../Model/\Model\ApplicationConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApplicationConfigAdv**
> postApplicationConfigAdv($serverName, $vhostName, $appName, $body)

Adds the specified advanced Application configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\ApplicationConfigAdv(); // \Model\ApplicationConfigAdv | 

try {
    $api_instance->postApplicationConfigAdv($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postApplicationConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\ApplicationConfigAdv**](../Model/\Model\ApplicationConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApplicationsConfig**
> postApplicationsConfig($serverName, $vhostName, $body)

Adds an Application to the list of Applications  for the specifed vhost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$body = new \Model\ApplicationConfig(); // \Model\ApplicationConfig | 

try {
    $api_instance->postApplicationsConfig($serverName, $vhostName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postApplicationsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **body** | [**\Model\ApplicationConfig**](../Model/\Model\ApplicationConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPublisherAppConfig**
> postPublisherAppConfig($serverName, $vhostName, $publisherName, $appName, $body)

Adds the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name
$publisherName = "publisherName_example"; // string | The publisher name
$appName = "appName_example"; // string | 
$body = new \Model\PublisherAppConfig(); // \Model\PublisherAppConfig | 

try {
    $api_instance->postPublisherAppConfig($serverName, $vhostName, $publisherName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postPublisherAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |
 **publisherName** | **string**| The publisher name |
 **appName** | **string**|  |
 **body** | [**\Model\PublisherAppConfig**](../Model/\Model\PublisherAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPublishersAppConfig**
> postPublishersAppConfig($serverName, $vhostName, $appName, $body)

Add a Publisher to list of Publishers for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name
$appName = "appName_example"; // string | 
$body = new \Model\PublisherAppConfig(); // \Model\PublisherAppConfig | 

try {
    $api_instance->postPublishersAppConfig($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postPublishersAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |
 **appName** | **string**|  |
 **body** | [**\Model\PublisherAppConfig**](../Model/\Model\PublisherAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPushPublishStreamAppConfig**
> postPushPublishStreamAppConfig($serverName, $vhostName, $appName, $entryName, $body)

Adds the specified PushPublish map entry configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$entryName = "entryName_example"; // string | The entry name needed for this REST call
$body = new \Model\PushPublishStreamAppConfig(); // \Model\PushPublishStreamAppConfig | 

try {
    $api_instance->postPushPublishStreamAppConfig($serverName, $vhostName, $appName, $entryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postPushPublishStreamAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **entryName** | **string**| The entry name needed for this REST call |
 **body** | [**\Model\PushPublishStreamAppConfig**](../Model/\Model\PushPublishStreamAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPushPublishStreamsAppConfig**
> postPushPublishStreamsAppConfig($serverName, $vhostName, $appName, $body)

Adds a PushPublish Stream to list of PushPublish Streams for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\PushPublishStreamAppConfig(); // \Model\PushPublishStreamAppConfig | 

try {
    $api_instance->postPushPublishStreamsAppConfig($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postPushPublishStreamsAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\PushPublishStreamAppConfig**](../Model/\Model\PushPublishStreamAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSMILFileAppConfig**
> postSMILFileAppConfig($serverName, $vhostName, $smilfileName, $appName, $body)

Adds the specified SMIL File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$smilfileName = "smilfileName_example"; // string | The SMIL file name without the extension
$appName = "appName_example"; // string | 
$body = new \Model\SMILFileAppConfig(); // \Model\SMILFileAppConfig | 

try {
    $api_instance->postSMILFileAppConfig($serverName, $vhostName, $smilfileName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postSMILFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **smilfileName** | **string**| The SMIL file name without the extension |
 **appName** | **string**|  |
 **body** | [**\Model\SMILFileAppConfig**](../Model/\Model\SMILFileAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSMILFilesAppConfig**
> postSMILFilesAppConfig($serverName, $vhostName, $appName, $body)

Adds a SMIL File to the list of SMIL Files for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | The application name needed for this REST call
$body = new \Model\SMILFileAppConfig(); // \Model\SMILFileAppConfig | 

try {
    $api_instance->postSMILFilesAppConfig($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postSMILFilesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**| The application name needed for this REST call |
 **body** | [**\Model\SMILFileAppConfig**](../Model/\Model\SMILFileAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStreamFileAppConfig**
> postStreamFileAppConfig($serverName, $vhostName, $streamfileName, $appName, $body)

Adds the specified Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$streamfileName = "streamfileName_example"; // string | The stream file name without the extension
$appName = "appName_example"; // string | 
$body = new \Model\StreamFileAppConfig(); // \Model\StreamFileAppConfig | 

try {
    $api_instance->postStreamFileAppConfig($serverName, $vhostName, $streamfileName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postStreamFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **streamfileName** | **string**| The stream file name without the extension |
 **appName** | **string**|  |
 **body** | [**\Model\StreamFileAppConfig**](../Model/\Model\StreamFileAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStreamFilesAppConfig**
> postStreamFilesAppConfig($serverName, $vhostName, $appName, $body)

Adds a Stream File to the list of Stream Files for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\StreamFileAppConfig(); // \Model\StreamFileAppConfig | 

try {
    $api_instance->postStreamFilesAppConfig($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postStreamFilesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\StreamFileAppConfig**](../Model/\Model\StreamFileAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStreamRecorderConfig**
> postStreamRecorderConfig($serverName, $vhostName, $appName, $recorderName, $instanceName, $body)

Creates a new Stream Recorder and starts recording

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$recorderName = "recorderName_example"; // string | 
$instanceName = "instanceName_example"; // string | 
$body = new \Model\StreamRecorderConfig(); // \Model\StreamRecorderConfig | 

try {
    $api_instance->postStreamRecorderConfig($serverName, $vhostName, $appName, $recorderName, $instanceName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postStreamRecorderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **recorderName** | **string**|  |
 **instanceName** | **string**|  |
 **body** | [**\Model\StreamRecorderConfig**](../Model/\Model\StreamRecorderConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStreamRecordersConfig**
> postStreamRecordersConfig($serverName, $vhostName, $appName, $instanceName, $body)

Creates a new Stream Recorder in the specified Application Instance and starts recording

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$instanceName = "instanceName_example"; // string | 
$body = new \Model\StreamRecorderConfig(); // \Model\StreamRecorderConfig | 

try {
    $api_instance->postStreamRecordersConfig($serverName, $vhostName, $appName, $instanceName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postStreamRecordersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **instanceName** | **string**|  |
 **body** | [**\Model\StreamRecorderConfig**](../Model/\Model\StreamRecorderConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderEncodeAppConfig**
> postTranscoderEncodeAppConfig($serverName, $vhostName, $templateName, $encodeName, $appName, $body)

Adds the specified Trancoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$encodeName = "encodeName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\TranscoderEncodeAppConfig(); // \Model\TranscoderEncodeAppConfig | 

try {
    $api_instance->postTranscoderEncodeAppConfig($serverName, $vhostName, $templateName, $encodeName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postTranscoderEncodeAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **encodeName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\TranscoderEncodeAppConfig**](../Model/\Model\TranscoderEncodeAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderEncodesAppConfig**
> postTranscoderEncodesAppConfig($serverName, $vhostName, $templateName, $appName, $body)

Adds a Transcoder Encode Configuration to the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\TranscoderEncodeAppConfig(); // \Model\TranscoderEncodeAppConfig | 

try {
    $api_instance->postTranscoderEncodesAppConfig($serverName, $vhostName, $templateName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postTranscoderEncodesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\TranscoderEncodeAppConfig**](../Model/\Model\TranscoderEncodeAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderStreamNameGroupAppConfig**
> postTranscoderStreamNameGroupAppConfig($serverName, $vhostName, $templateName, $groupName, $appName, $body)

Adds the specified Trancoder StreamNameGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$groupName = "groupName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\TranscoderStreamNameGroupAppConfig(); // \Model\TranscoderStreamNameGroupAppConfig | 

try {
    $api_instance->postTranscoderStreamNameGroupAppConfig($serverName, $vhostName, $templateName, $groupName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postTranscoderStreamNameGroupAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **groupName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\TranscoderStreamNameGroupAppConfig**](../Model/\Model\TranscoderStreamNameGroupAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderStreamNameGroupsAppConfig**
> postTranscoderStreamNameGroupsAppConfig($serverName, $vhostName, $templateName, $appName, $body)

Adds a Transcoder Stream Name Groups Configuration to the specified Template

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\TranscoderStreamNameGroupAppConfig(); // \Model\TranscoderStreamNameGroupAppConfig | 

try {
    $api_instance->postTranscoderStreamNameGroupsAppConfig($serverName, $vhostName, $templateName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postTranscoderStreamNameGroupsAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\TranscoderStreamNameGroupAppConfig**](../Model/\Model\TranscoderStreamNameGroupAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderTemplateAppConfig**
> postTranscoderTemplateAppConfig($serverName, $vhostName, $templateName, $appName, $body)

Adds the specified Trancoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\TranscoderTemplateAppConfig(); // \Model\TranscoderTemplateAppConfig | 

try {
    $api_instance->postTranscoderTemplateAppConfig($serverName, $vhostName, $templateName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postTranscoderTemplateAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\TranscoderTemplateAppConfig**](../Model/\Model\TranscoderTemplateAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderTemplatesAppConfig**
> postTranscoderTemplatesAppConfig($serverName, $vhostName, $appName, $body)

Adds a Transcoder Templates Configuration to the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | 
$body = new \Model\TranscoderTemplateAppConfig(); // \Model\TranscoderTemplateAppConfig | 

try {
    $api_instance->postTranscoderTemplatesAppConfig($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->postTranscoderTemplatesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**|  |
 **body** | [**\Model\TranscoderTemplateAppConfig**](../Model/\Model\TranscoderTemplateAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putApplicationAction**
> putApplicationAction($serverName, $action, $vhostName, $appName, $dstEntryName)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | The application name needed for this REST call
$dstEntryName = "dstEntryName_example"; // string | The destination application name when copying

try {
    $api_instance->putApplicationAction($serverName, $action, $vhostName, $appName, $dstEntryName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putApplicationAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**| The application name needed for this REST call |
 **dstEntryName** | **string**| The destination application name when copying | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putApplicationConfig**
> putApplicationConfig($serverName, $vhostName, $appName, $body)

Updates the specified Application configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\ApplicationConfig(); // \Model\ApplicationConfig | 

try {
    $api_instance->putApplicationConfig($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putApplicationConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\ApplicationConfig**](../Model/\Model\ApplicationConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putApplicationConfigAdv**
> putApplicationConfigAdv($serverName, $vhostName, $appName, $body)

Updates the specified advanced Application configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\ApplicationConfigAdv(); // \Model\ApplicationConfigAdv | 

try {
    $api_instance->putApplicationConfigAdv($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putApplicationConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\ApplicationConfigAdv**](../Model/\Model\ApplicationConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putBuyDRMStreamMapsConfig**
> putBuyDRMStreamMapsConfig($serverName, $vhostName, $appName, $body)

Updates the BuyDRM stream mapfile for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\BuyDRMStreamMapsConfig(); // \Model\BuyDRMStreamMapsConfig | 

try {
    $api_instance->putBuyDRMStreamMapsConfig($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putBuyDRMStreamMapsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\BuyDRMStreamMapsConfig**](../Model/\Model\BuyDRMStreamMapsConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDRMConfig**
> putDRMConfig($serverName, $vhostName, $appName, $body)

Updates the DRM configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\DRMConfig(); // \Model\DRMConfig | 

try {
    $api_instance->putDRMConfig($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putDRMConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\DRMConfig**](../Model/\Model\DRMConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDRMConfigAdv**
> putDRMConfigAdv($serverName, $vhostName, $appName, $body)

Updates the advanced DRM configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\DRMConfigAdv(); // \Model\DRMConfigAdv | 

try {
    $api_instance->putDRMConfigAdv($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putDRMConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\DRMConfigAdv**](../Model/\Model\DRMConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDVRConfig**
> putDVRConfig($serverName, $vhostName, $appName, $body)

Updates the DVR configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\DVRConfig(); // \Model\DVRConfig | 

try {
    $api_instance->putDVRConfig($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putDVRConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\DVRConfig**](../Model/\Model\DVRConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDVRConfigAdv**
> putDVRConfigAdv($serverName, $vhostName, $appName, $body)

Updates the advanced DVR configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\DVRConfigAdv(); // \Model\DVRConfigAdv | 

try {
    $api_instance->putDVRConfigAdv($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putDVRConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\DVRConfigAdv**](../Model/\Model\DVRConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDvrRESTConverterStoreAction**
> putDvrRESTConverterStoreAction($serverName, $action, $vhostName, $appName, $instanceName, $dvrStoreName)



This API is available in builds 15942 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | The application name needed for this REST call
$instanceName = "instanceName_example"; // string | The application instance name needed for this REST call
$dvrStoreName = "dvrStoreName_example"; // string | The nDVR store name needed for this REST call

try {
    $api_instance->putDvrRESTConverterStoreAction($serverName, $action, $vhostName, $appName, $instanceName, $dvrStoreName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putDvrRESTConverterStoreAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**| The application name needed for this REST call |
 **instanceName** | **string**| The application instance name needed for this REST call |
 **dvrStoreName** | **string**| The nDVR store name needed for this REST call |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDvrRESTConverterStoresAction**
> putDvrRESTConverterStoresAction($serverName, $action, $vhostName, $appName, $instanceName, $dvrConverterDefaultFileDestination, $dvrConverterDebugConversions, $dvrConverterContinueOnSourceErrors, $dvrConverterAudioVideoSyncEnable, $dvrConverterAudioVideoMaxOffset, $dvrConverterAudioVideoMaxBuffer, $dvrConverterStartTime, $dvrConverterEndTime, $dvrConverterDuration, $dvrConverterOutputFilename)



This API is available in builds 15942 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | The application name needed for this REST call
$instanceName = "instanceName_example"; // string | The application instance name needed for this REST call
$dvrConverterDefaultFileDestination = "dvrConverterDefaultFileDestination_example"; // string | The file location to use when converting a nDVR store, the default is configured as the StorageDir in the application in use
$dvrConverterDebugConversions = "dvrConverterDebugConversions_example"; // string | Indicates if the conversion should have debugging enabled, can be true or false, default is false
$dvrConverterContinueOnSourceErrors = "dvrConverterContinueOnSourceErrors_example"; // string | Indicates if the conversion should continue even if errors are detected, can be true or false, default is true
$dvrConverterAudioVideoSyncEnable = "dvrConverterAudioVideoSyncEnable_example"; // string | Indicates if the audio/video offset should be detected and conversion only started after the sync in no longer detected or over default allowable time. Can be true or false, default is false
$dvrConverterAudioVideoMaxOffset = "200"; // string | Indicates the maximum audio/video timecodes can be out of sync
$dvrConverterAudioVideoMaxBuffer = "8000"; // string | Indicates the maximum time a correct audio/video sync will be searched for before giving up
$dvrConverterStartTime = "dvrConverterStartTime_example"; // string | A start time in UTC from where the conversion should start in the store, default is the first entry in the store
$dvrConverterEndTime = "dvrConverterEndTime_example"; // string | A end time in UTC  where the conversion should end in the store, default is to the end of the store
$dvrConverterDuration = "dvrConverterDuration_example"; // string | A duration for the conversion either added to the start or subtracted from the end time, if you use duration you can not use start and end
$dvrConverterOutputFilename = "dvrConverterOutputFilename_example"; // string | Indicates the output filename if not using the default, which is the name of the store being converted

try {
    $api_instance->putDvrRESTConverterStoresAction($serverName, $action, $vhostName, $appName, $instanceName, $dvrConverterDefaultFileDestination, $dvrConverterDebugConversions, $dvrConverterContinueOnSourceErrors, $dvrConverterAudioVideoSyncEnable, $dvrConverterAudioVideoMaxOffset, $dvrConverterAudioVideoMaxBuffer, $dvrConverterStartTime, $dvrConverterEndTime, $dvrConverterDuration, $dvrConverterOutputFilename);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putDvrRESTConverterStoresAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**| The application name needed for this REST call |
 **instanceName** | **string**| The application instance name needed for this REST call |
 **dvrConverterDefaultFileDestination** | **string**| The file location to use when converting a nDVR store, the default is configured as the StorageDir in the application in use | [optional]
 **dvrConverterDebugConversions** | **string**| Indicates if the conversion should have debugging enabled, can be true or false, default is false | [optional]
 **dvrConverterContinueOnSourceErrors** | **string**| Indicates if the conversion should continue even if errors are detected, can be true or false, default is true | [optional]
 **dvrConverterAudioVideoSyncEnable** | **string**| Indicates if the audio/video offset should be detected and conversion only started after the sync in no longer detected or over default allowable time. Can be true or false, default is false | [optional]
 **dvrConverterAudioVideoMaxOffset** | **string**| Indicates the maximum audio/video timecodes can be out of sync | [optional] [default to 200]
 **dvrConverterAudioVideoMaxBuffer** | **string**| Indicates the maximum time a correct audio/video sync will be searched for before giving up | [optional] [default to 8000]
 **dvrConverterStartTime** | **string**| A start time in UTC from where the conversion should start in the store, default is the first entry in the store | [optional]
 **dvrConverterEndTime** | **string**| A end time in UTC  where the conversion should end in the store, default is to the end of the store | [optional]
 **dvrConverterDuration** | **string**| A duration for the conversion either added to the start or subtracted from the end time, if you use duration you can not use start and end | [optional]
 **dvrConverterOutputFilename** | **string**| Indicates the output filename if not using the default, which is the name of the store being converted | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putIncomingStreamAction**
> putIncomingStreamAction($serverName, $action, $vhostName, $appName, $instanceName, $streamName)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | The application name needed for this REST call
$instanceName = "instanceName_example"; // string | The application instance name needed for this REST call
$streamName = "streamName_example"; // string | The stream name needed for this REST call

try {
    $api_instance->putIncomingStreamAction($serverName, $action, $vhostName, $appName, $instanceName, $streamName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putIncomingStreamAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**| The application name needed for this REST call |
 **instanceName** | **string**| The application instance name needed for this REST call |
 **streamName** | **string**| The stream name needed for this REST call |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putInstanceAction**
> putInstanceAction($serverName, $action, $vhostName, $appName, $instanceName)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | The application name needed for this REST call
$instanceName = "instanceName_example"; // string | The application instance name needed for this REST call

try {
    $api_instance->putInstanceAction($serverName, $action, $vhostName, $appName, $instanceName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putInstanceAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**| The application name needed for this REST call |
 **instanceName** | **string**| The application instance name needed for this REST call |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMediaCacheApplicationStoreAction**
> putMediaCacheApplicationStoreAction($serverName, $action, $vhostName, $appName, $instanceName, $filename)



This API is available in builds 15942 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | The application name needed for this REST call
$instanceName = "instanceName_example"; // string | The application instance name needed for this REST call
$filename = "filename_example"; // string | The file or stream name item to be used in all rest action requests

try {
    $api_instance->putMediaCacheApplicationStoreAction($serverName, $action, $vhostName, $appName, $instanceName, $filename);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putMediaCacheApplicationStoreAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**| The application name needed for this REST call |
 **instanceName** | **string**| The application instance name needed for this REST call |
 **filename** | **string**| The file or stream name item to be used in all rest action requests | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putModulesConfig**
> putModulesConfig($serverName, $vhostName, $appName, $body)

Updates the list of Modules for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\ModulesConfig(); // \Model\ModulesConfig | 

try {
    $api_instance->putModulesConfig($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putModulesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\ModulesConfig**](../Model/\Model\ModulesConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPublisherAppConfig**
> putPublisherAppConfig($serverName, $vhostName, $publisherName, $appName, $body)

Updates the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | The vhost name
$publisherName = "publisherName_example"; // string | The publisher name
$appName = "appName_example"; // string | 
$body = new \Model\PublisherAppConfig(); // \Model\PublisherAppConfig | 

try {
    $api_instance->putPublisherAppConfig($serverName, $vhostName, $publisherName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putPublisherAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**| The vhost name |
 **publisherName** | **string**| The publisher name |
 **appName** | **string**|  |
 **body** | [**\Model\PublisherAppConfig**](../Model/\Model\PublisherAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPushPublishStreamAppAction**
> putPushPublishStreamAppAction($serverName, $action, $vhostName, $appName, $entryName, $dstEntryName)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | The application name needed for this REST call
$entryName = "entryName_example"; // string | The map entry name needed for this REST call
$dstEntryName = "dstEntryName_example"; // string | The destination entryName when copying

try {
    $api_instance->putPushPublishStreamAppAction($serverName, $action, $vhostName, $appName, $entryName, $dstEntryName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putPushPublishStreamAppAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**| The application name needed for this REST call |
 **entryName** | **string**| The map entry name needed for this REST call |
 **dstEntryName** | **string**| The destination entryName when copying | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPushPublishStreamAppConfig**
> putPushPublishStreamAppConfig($serverName, $vhostName, $appName, $entryName, $body)

Updates the specified PushPublish map entry configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$entryName = "entryName_example"; // string | The entry name needed for this REST call
$body = new \Model\PushPublishStreamAppConfig(); // \Model\PushPublishStreamAppConfig | 

try {
    $api_instance->putPushPublishStreamAppConfig($serverName, $vhostName, $appName, $entryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putPushPublishStreamAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **entryName** | **string**| The entry name needed for this REST call |
 **body** | [**\Model\PushPublishStreamAppConfig**](../Model/\Model\PushPublishStreamAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPushPublishStreamsAppConfig**
> putPushPublishStreamsAppConfig($serverName, $vhostName, $appName, $body)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\PushPublishStreamAppConfig(); // \Model\PushPublishStreamAppConfig | 

try {
    $api_instance->putPushPublishStreamsAppConfig($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putPushPublishStreamsAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\PushPublishStreamAppConfig**](../Model/\Model\PushPublishStreamAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSDPFileAppAction**
> putSDPFileAppAction($serverName, $action, $mediaCasterType, $vhostName, $appName, $sdpfileName, $connectAppName, $appInstance)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$mediaCasterType = "rtp"; // string | The MediaCasterType to use for the connection
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | The application name needed for this REST call
$sdpfileName = "sdpfileName_example"; // string | The sdp file name needed for this REST call
$connectAppName = "connectAppName_example"; // string | The name of the application to connect to
$appInstance = "appInstance_example"; // string | The name of the application instance to connect to

try {
    $api_instance->putSDPFileAppAction($serverName, $action, $mediaCasterType, $vhostName, $appName, $sdpfileName, $connectAppName, $appInstance);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putSDPFileAppAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **mediaCasterType** | **string**| The MediaCasterType to use for the connection | [default to rtp]
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**| The application name needed for this REST call |
 **sdpfileName** | **string**| The sdp file name needed for this REST call |
 **connectAppName** | **string**| The name of the application to connect to | [optional]
 **appInstance** | **string**| The name of the application instance to connect to | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSMILFileAppAction**
> putSMILFileAppAction($serverName, $action, $mediaCasterType, $vhostName, $appName, $smilfileName, $connectAppName, $appInstance, $dstEntryName)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$mediaCasterType = "rtp"; // string | The MediaCasterType to use for the connection
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | The application name needed for this REST call
$smilfileName = "smilfileName_example"; // string | The SMIL file name needed for this REST call
$connectAppName = "connectAppName_example"; // string | The name of the application to connect to
$appInstance = "appInstance_example"; // string | The name of the application instance to connect to
$dstEntryName = "dstEntryName_example"; // string | The destination SMIL file name when copying

try {
    $api_instance->putSMILFileAppAction($serverName, $action, $mediaCasterType, $vhostName, $appName, $smilfileName, $connectAppName, $appInstance, $dstEntryName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putSMILFileAppAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **mediaCasterType** | **string**| The MediaCasterType to use for the connection | [default to rtp]
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**| The application name needed for this REST call |
 **smilfileName** | **string**| The SMIL file name needed for this REST call |
 **connectAppName** | **string**| The name of the application to connect to | [optional]
 **appInstance** | **string**| The name of the application instance to connect to | [optional]
 **dstEntryName** | **string**| The destination SMIL file name when copying | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSMILFileAppConfig**
> putSMILFileAppConfig($serverName, $vhostName, $smilfileName, $appName, $body)

Updates the specified SMIL File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$smilfileName = "smilfileName_example"; // string | The SMIL file name without the extension
$appName = "appName_example"; // string | 
$body = new \Model\SMILFileAppConfig(); // \Model\SMILFileAppConfig | 

try {
    $api_instance->putSMILFileAppConfig($serverName, $vhostName, $smilfileName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putSMILFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **smilfileName** | **string**| The SMIL file name without the extension |
 **appName** | **string**|  |
 **body** | [**\Model\SMILFileAppConfig**](../Model/\Model\SMILFileAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSecurityConfig**
> putSecurityConfig($serverName, $vhostName, $appName, $body)

Updates the Security configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\SecurityConfig(); // \Model\SecurityConfig | 

try {
    $api_instance->putSecurityConfig($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putSecurityConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\SecurityConfig**](../Model/\Model\SecurityConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSourceControlAction**
> putSourceControlAction($serverName, $action, $vhostName, $appName, $instanceName, $streamName, $direction)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhostName = "vhostName_example"; // string | The VHost name
$appName = "appName_example"; // string | The Application name
$instanceName = "instanceName_example"; // string | The Application Instance name
$streamName = "streamName_example"; // string | The Stream name
$direction = "direction_example"; // string | No query params available for captureImage. Optional query params for zoom and panTilt:   ZoomIn, ZoomOut,   PanTiltUp, PanTiltRight, PanTiltDown, PanTiltLeft, PanTiltHome, PanTiltUpRight, PanTiltDownRight, PanTiltDownLeft, PanTiltUpLeft

try {
    $api_instance->putSourceControlAction($serverName, $action, $vhostName, $appName, $instanceName, $streamName, $direction);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putSourceControlAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhostName** | **string**| The VHost name |
 **appName** | **string**| The Application name |
 **instanceName** | **string**| The Application Instance name |
 **streamName** | **string**| The Stream name |
 **direction** | **string**| No query params available for captureImage. Optional query params for zoom and panTilt:   ZoomIn, ZoomOut,   PanTiltUp, PanTiltRight, PanTiltDown, PanTiltLeft, PanTiltHome, PanTiltUpRight, PanTiltDownRight, PanTiltDownLeft, PanTiltUpLeft | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamConfigurationConfig**
> putStreamConfigurationConfig($serverName, $vhostName, $appName, $body)

Updates the Stream configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\StreamConfigurationConfig(); // \Model\StreamConfigurationConfig | 

try {
    $api_instance->putStreamConfigurationConfig($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putStreamConfigurationConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\StreamConfigurationConfig**](../Model/\Model\StreamConfigurationConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamFileAppAction**
> putStreamFileAppAction($serverName, $action, $mediaCasterType, $vhostName, $appName, $streamfileName, $connectAppName, $appInstance, $dstEntryName)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$mediaCasterType = "rtp"; // string | The MediaCasterType to use for the connection
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | The application name needed for this REST call
$streamfileName = "streamfileName_example"; // string | The stream file, file name needed for this REST call
$connectAppName = "connectAppName_example"; // string | The name of the application to connect to
$appInstance = "appInstance_example"; // string | The name of the application instance to connect to
$dstEntryName = "dstEntryName_example"; // string | The destination stream file name when copying

try {
    $api_instance->putStreamFileAppAction($serverName, $action, $mediaCasterType, $vhostName, $appName, $streamfileName, $connectAppName, $appInstance, $dstEntryName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putStreamFileAppAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **mediaCasterType** | **string**| The MediaCasterType to use for the connection | [default to rtp]
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**| The application name needed for this REST call |
 **streamfileName** | **string**| The stream file, file name needed for this REST call |
 **connectAppName** | **string**| The name of the application to connect to | [optional]
 **appInstance** | **string**| The name of the application instance to connect to | [optional]
 **dstEntryName** | **string**| The destination stream file name when copying | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamFileAppConfig**
> putStreamFileAppConfig($serverName, $vhostName, $streamfileName, $appName, $body)

Updates the specified Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$streamfileName = "streamfileName_example"; // string | The stream file name without the extension
$appName = "appName_example"; // string | 
$body = new \Model\StreamFileAppConfig(); // \Model\StreamFileAppConfig | 

try {
    $api_instance->putStreamFileAppConfig($serverName, $vhostName, $streamfileName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putStreamFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **streamfileName** | **string**| The stream file name without the extension |
 **appName** | **string**|  |
 **body** | [**\Model\StreamFileAppConfig**](../Model/\Model\StreamFileAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamFileAppConfigAdv**
> putStreamFileAppConfigAdv($serverName, $vhostName, $streamfileName, $appName, $body)

Updates the Advanced Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$streamfileName = "streamfileName_example"; // string | The stream file name without the .stream extension
$appName = "appName_example"; // string | 
$body = new \Model\StreamFileAppConfigAdv(); // \Model\StreamFileAppConfigAdv | 

try {
    $api_instance->putStreamFileAppConfigAdv($serverName, $vhostName, $streamfileName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putStreamFileAppConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **streamfileName** | **string**| The stream file name without the .stream extension |
 **appName** | **string**|  |
 **body** | [**\Model\StreamFileAppConfigAdv**](../Model/\Model\StreamFileAppConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamGroupAction**
> putStreamGroupAction($serverName, $action, $vhostName, $appName, $instanceName, $groupName)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | The application name needed for this REST call
$instanceName = "instanceName_example"; // string | The application instance name needed for this REST call
$groupName = "groupName_example"; // string | The group name needed for this REST call

try {
    $api_instance->putStreamGroupAction($serverName, $action, $vhostName, $appName, $instanceName, $groupName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putStreamGroupAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**| The application name needed for this REST call |
 **instanceName** | **string**| The application instance name needed for this REST call |
 **groupName** | **string**| The group name needed for this REST call |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamRecorderAction**
> putStreamRecorderAction($serverName, $action, $vhostName, $appName, $instanceName, $recorderName)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | The application name needed for this REST call
$instanceName = "instanceName_example"; // string | The application instance name needed for this REST call
$recorderName = "recorderName_example"; // string | The recorder name (stream name) needed for this REST call

try {
    $api_instance->putStreamRecorderAction($serverName, $action, $vhostName, $appName, $instanceName, $recorderName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putStreamRecorderAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**| The application name needed for this REST call |
 **instanceName** | **string**| The application instance name needed for this REST call |
 **recorderName** | **string**| The recorder name (stream name) needed for this REST call |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderAppConfig**
> putTranscoderAppConfig($serverName, $vhostName, $appName, $body)

Updates the Transcoder configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\TranscoderAppConfig(); // \Model\TranscoderAppConfig | 

try {
    $api_instance->putTranscoderAppConfig($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putTranscoderAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\TranscoderAppConfig**](../Model/\Model\TranscoderAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderAppConfigAdv**
> putTranscoderAppConfigAdv($serverName, $vhostName, $appName, $body)

Updates the Advanced Transcoder configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\TranscoderAppConfigAdv(); // \Model\TranscoderAppConfigAdv | 

try {
    $api_instance->putTranscoderAppConfigAdv($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putTranscoderAppConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\TranscoderAppConfigAdv**](../Model/\Model\TranscoderAppConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderEncodeAppConfig**
> putTranscoderEncodeAppConfig($serverName, $vhostName, $templateName, $encodeName, $appName, $body)

Updates the specified Trancoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$encodeName = "encodeName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\TranscoderEncodeAppConfig(); // \Model\TranscoderEncodeAppConfig | 

try {
    $api_instance->putTranscoderEncodeAppConfig($serverName, $vhostName, $templateName, $encodeName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putTranscoderEncodeAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **encodeName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\TranscoderEncodeAppConfig**](../Model/\Model\TranscoderEncodeAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderEncodeAppConfigAdv**
> putTranscoderEncodeAppConfigAdv($serverName, $vhostName, $templateName, $encodeName, $appName, $body)

Updates the Advanced Transcoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$encodeName = "encodeName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\TranscoderEncodeAppConfigAdv(); // \Model\TranscoderEncodeAppConfigAdv | 

try {
    $api_instance->putTranscoderEncodeAppConfigAdv($serverName, $vhostName, $templateName, $encodeName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putTranscoderEncodeAppConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **encodeName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\TranscoderEncodeAppConfigAdv**](../Model/\Model\TranscoderEncodeAppConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderOverlayDecodeAppConfig**
> putTranscoderOverlayDecodeAppConfig($serverName, $vhostName, $templateName, $overlayName, $appName, $body)

Updates the specified Trancoder Overlay Decode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$overlayName = "overlayName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\TranscoderOverlayDecodeAppConfig(); // \Model\TranscoderOverlayDecodeAppConfig | 

try {
    $api_instance->putTranscoderOverlayDecodeAppConfig($serverName, $vhostName, $templateName, $overlayName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putTranscoderOverlayDecodeAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **overlayName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\TranscoderOverlayDecodeAppConfig**](../Model/\Model\TranscoderOverlayDecodeAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderOverlayEncodeAppConfig**
> putTranscoderOverlayEncodeAppConfig($serverName, $vhostName, $templateName, $overlayName, $encodeName, $appName, $body)

Updates the specified Trancoder Overlay Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$overlayName = "overlayName_example"; // string | 
$encodeName = "encodeName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\TranscoderOverlayEncodeAppConfig(); // \Model\TranscoderOverlayEncodeAppConfig | 

try {
    $api_instance->putTranscoderOverlayEncodeAppConfig($serverName, $vhostName, $templateName, $overlayName, $encodeName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putTranscoderOverlayEncodeAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **overlayName** | **string**|  |
 **encodeName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\TranscoderOverlayEncodeAppConfig**](../Model/\Model\TranscoderOverlayEncodeAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderStreamNameGroupAppConfig**
> putTranscoderStreamNameGroupAppConfig($serverName, $vhostName, $templateName, $groupName, $appName, $body)

Updates the specified Trancoder StreamNameGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$groupName = "groupName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\TranscoderStreamNameGroupAppConfig(); // \Model\TranscoderStreamNameGroupAppConfig | 

try {
    $api_instance->putTranscoderStreamNameGroupAppConfig($serverName, $vhostName, $templateName, $groupName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putTranscoderStreamNameGroupAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **groupName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\TranscoderStreamNameGroupAppConfig**](../Model/\Model\TranscoderStreamNameGroupAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderTemplateAppAction**
> putTranscoderTemplateAppAction($serverName, $action, $vhostName, $appName, $templateName, $dstEntryName)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhostName = "vhostName_example"; // string | The name of the current VHost the action will be performed on
$appName = "appName_example"; // string | The application name needed for this REST call
$templateName = "templateName_example"; // string | The template name needed for this REST call
$dstEntryName = "dstEntryName_example"; // string | The destination transcode template file name when copying

try {
    $api_instance->putTranscoderTemplateAppAction($serverName, $action, $vhostName, $appName, $templateName, $dstEntryName);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putTranscoderTemplateAppAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhostName** | **string**| The name of the current VHost the action will be performed on |
 **appName** | **string**| The application name needed for this REST call |
 **templateName** | **string**| The template name needed for this REST call |
 **dstEntryName** | **string**| The destination transcode template file name when copying | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderTemplateAppConfig**
> putTranscoderTemplateAppConfig($serverName, $vhostName, $templateName, $appName, $body)

Updates the specified Trancoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\TranscoderTemplateAppConfig(); // \Model\TranscoderTemplateAppConfig | 

try {
    $api_instance->putTranscoderTemplateAppConfig($serverName, $vhostName, $templateName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putTranscoderTemplateAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\TranscoderTemplateAppConfig**](../Model/\Model\TranscoderTemplateAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderTemplateAppConfigAdv**
> putTranscoderTemplateAppConfigAdv($serverName, $vhostName, $templateName, $appName, $body)

Updates the Advanced Transcoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$templateName = "templateName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\TranscoderTemplateAppConfigAdv(); // \Model\TranscoderTemplateAppConfigAdv | 

try {
    $api_instance->putTranscoderTemplateAppConfigAdv($serverName, $vhostName, $templateName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putTranscoderTemplateAppConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **templateName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\TranscoderTemplateAppConfigAdv**](../Model/\Model\TranscoderTemplateAppConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVerimatrixStreamMapsConfig**
> putVerimatrixStreamMapsConfig($serverName, $vhostName, $appName, $body)

Updates the Verimatrix stream mapfile for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new WowzaApi\Api\VserversserverNamevhostsvhostNameapplicationsApi();
$serverName = "serverName_example"; // string | Reserved for future use
$vhostName = "vhostName_example"; // string | 
$appName = "appName_example"; // string | 
$body = new \Model\VerimatrixStreamMapsConfig(); // \Model\VerimatrixStreamMapsConfig | 

try {
    $api_instance->putVerimatrixStreamMapsConfig($serverName, $vhostName, $appName, $body);
} catch (Exception $e) {
    echo 'Exception when calling VserversserverNamevhostsvhostNameapplicationsApi->putVerimatrixStreamMapsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverName** | **string**| Reserved for future use |
 **vhostName** | **string**|  |
 **appName** | **string**|  |
 **body** | [**\Model\VerimatrixStreamMapsConfig**](../Model/\Model\VerimatrixStreamMapsConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

