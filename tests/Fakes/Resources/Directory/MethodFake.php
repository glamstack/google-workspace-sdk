<?php

namespace Glamstack\GoogleWorkspace\Tests\Fakes\Resources\Directory;

use Glamstack\GoogleWorkspace\ApiClient;
use Glamstack\GoogleWorkspace\Resources\Directory\Method;
use Illuminate\Http\Client\Response;

class MethodFake extends Method
{
    public function __construct(ApiClient $api_client, string $auth_token)
    {
        parent::__construct($api_client, $auth_token);
    }

    public function setUp(){
        $this->api_client->request_headers = [
            'User-Agent' => 'google-workspace-sdk/dev/php8.1'
        ];
    }

    public function get(string $url, array $request_data = [], bool $exclude_domain = false, bool $exclude_customer = false): object|string
    {
        return parent::get($url, $request_data, $exclude_domain, $exclude_customer); // TODO: Change the autogenerated stub
    }

    public function setDomain(): void
    {
        parent::setDomain(); // TODO: Change the autogenerated stub
    }

    public function setCustomerId(): void
    {
        parent::setCustomerId(); // TODO: Change the autogenerated stub
    }

    public function setLogChannels(): void
    {
        parent::setLogChannels(); // TODO: Change the autogenerated stub
    }

    public function getDomain(): string
    {
        return parent::getDomain(); // TODO: Change the autogenerated stub
    }

    public function getCustomerId(): string
    {
        return parent::getCustomerId(); // TODO: Change the autogenerated stub
    }

    public function appendRequiredHeaders(array $request_data, bool $exclude_domain = false, bool $exclude_customer = false): array
    {
        return parent::appendRequiredHeaders($request_data, $exclude_domain, $exclude_customer); // TODO: Change the autogenerated stub
    }

    public function getLogChannels(): array
    {
        return parent::getLogChannels(); // TODO: Change the autogenerated stub
    }

    public function getConfigApiScopes(string $connection_key): array
    {
        return parent::getConfigApiScopes($connection_key); // TODO: Change the autogenerated stub
    }

    public function getConfigSubjectEmail(string $connection_key): string|null
    {
        return parent::getConfigSubjectEmail($connection_key); // TODO: Change the autogenerated stub
    }

    public function getConfigJsonFilePath(string $connection_key): string|null
    {
        return parent::getConfigJsonFilePath($connection_key); // TODO: Change the autogenerated stub
    }

    public function getConfigArrayApiScopes(array $connection_config): array
    {
        return parent::getConfigArrayApiScopes($connection_config); // TODO: Change the autogenerated stub
    }

    public function getConfigArraySubjectEmail(array $connection_config): string|null
    {
        return parent::getConfigArraySubjectEmail($connection_config); // TODO: Change the autogenerated stub
    }

    public function getConfigArrayFilePath(array $connection_config): string|null
    {
        return parent::getConfigArrayFilePath($connection_config); // TODO: Change the autogenerated stub
    }

    public function getConfigArrayJsonKey(array $connection_config): mixed
    {
        return parent::getConfigArrayJsonKey($connection_config); // TODO: Change the autogenerated stub
    }

    public function checkForPagination($response):bool
    {
        return parent::checkForPagination($response);
    }

    public function parseConfigFile(string $connection_key):array
    {
        return parent::parseConfigFile($connection_key);
    }

    public function parseConnectionConfigArray(array $connection_config):array
    {
        return parent::parseConnectionConfigArray($connection_config);
    }

    public function getResponseBody(Response $response): object
    {
        return parent::getResponseBody($response); // TODO: Change the autogenerated stub
    }

    public function convertPaginatedResponseToObject(array $paginatedResponse): object
    {
        return parent::convertPaginatedResponseToObject($paginatedResponse); // TODO: Change the autogenerated stub
    }

    public function convertHeadersToObject(array $header_response): object
    {
        return parent::convertHeadersToObject($header_response); // TODO: Change the autogenerated stub
    }

    public function parseApiResponse(object $response, bool $get = false): object
    {
        return parent::parseApiResponse($response, $get); // TODO: Change the autogenerated stub
    }
}
