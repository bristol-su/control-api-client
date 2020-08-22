<?php

namespace BristolSU\ApiClientImplementation\Control;

use BristolSU\ApiClientImplementation\Control\Clients\GroupClient;

class Client extends \BristolSU\ApiToolkit\Contracts\ClientResourceGroup
{

    public static function getMethodName(): string
    {
        return 'control';
    }

    public static function getResources(): array
    {
        return [
          'group' => GroupClient::class
        ];
    }
}
