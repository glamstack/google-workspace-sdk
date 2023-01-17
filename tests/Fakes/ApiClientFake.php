<?php

namespace Glamstack\GoogleWorkspace\Tests\Fakes;

use Glamstack\GoogleAuth\AuthClient;
use Glamstack\GoogleWorkspace\ApiClient;
use Glamstack\GoogleWorkspace\Models\ApiClientModel;

class ApiClientFake extends ApiClient
{
    public function __construct(?string $connection_key = null, ?array $connection_config = [], bool $authenticate = false)
    {
        if(!$authenticate){
            parent::__construct($connection_key, $connection_config);
        } else {
            $api_client_model = new ApiClientModel();

            $this->setConfigPath();

            $this->setRequestHeaders();

            if (empty($connection_config)) {
                $this->setConnectionKey($connection_key);
                $this->connection_config = [];
            } else {
                $this->connection_config = $api_client_model->verifyConfigArray($connection_config);
                $this->connection_key = null;
            }
        }
    }

    public function setConnectionKey(?string $connection_key): void
    {
        parent::setConnectionKey($connection_key); // TODO: Change the autogenerated stub
    }

    public function setRequestHeaders(): void
    {
        $this->request_headers = [
            'User-Agent' => 'google-workspace-sdk/dev/php8.1'
        ];
    }
}