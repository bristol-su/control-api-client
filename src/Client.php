<?php

namespace BristolSU\ApiClientImplementation\Control;

use BristolSU\ApiClientImplementation\Control\Clients\GroupClient;
use BristolSU\ApiToolkit\Contracts\ClientResourceGroup;

class Client extends ClientResourceGroup
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
