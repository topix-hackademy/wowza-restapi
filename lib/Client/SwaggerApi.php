<?php
/**
 * Created by PhpStorm.
 * User: gab88slash
 * Date: 21/07/16
 * Time: 12:35
 */

namespace Topix\Hackademy\WowzaApi\Client;


use Topix\Hackademy\WowzaApi\ApiClient;

class SwaggerApi
{

    /**
     * API Client
     *
     * @var ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param ApiClient|null $apiClient The api client to use
     */
    public function __construct( ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://localhost:8087/');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     *
     * @return SwaggerApi
     */
    public function setApiClient( ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
}