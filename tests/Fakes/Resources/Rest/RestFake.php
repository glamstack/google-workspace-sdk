<?php

namespace Glamstack\GoogleWorkspace\Tests\Fakes\Resources\Rest;

use Glamstack\GoogleWorkspace\Resources\Rest\Rest;

class RestFake extends Rest
{
    public function setUp(){
        $this->request_headers = [
            'User-Agent' => 'google-workspace-sdk/dev/php8.1',
            'Content-type' => 'application/atom+xml',
            'GData-Version' => '3.0'
        ];
    }

    public function get(string $uri, array $request_data = []): object|string
    {
        return parent::get($uri, $request_data); // TODO: Change the autogenerated stub
    }
}
