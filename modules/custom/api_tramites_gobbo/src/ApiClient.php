<?php

namespace Drupal\api_tramites_gobbo;

use GuzzleHttp\ClientInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Routing\RouteMatchInterface;

class ApiClient {

  protected $httpClient;
  protected $configFactory;

  public function __construct(ClientInterface $http_client, ConfigFactoryInterface $config_factory) {
    $this->httpClient = $http_client;
    $this->configFactory = $config_factory;
  }

  public function getApiData($url_get, $token) {
    $config = $this->configFactory->get('api_tramites_gobbo.settings');
    $url = $config->get('api_url');


    try {
      $response = $this->httpClient->request('GET', $url_get, [
        'headers' => [
          'Authorization' => 'Bearer '. $token
        ]
      ]);
      $data = json_decode($response->getBody(), TRUE);
      return $data;
    } catch (\Exception $e) {
      \Drupal::logger('api_tramites_gobbo')->error($e->getMessage());
      return NULL;
    }
  }
}
