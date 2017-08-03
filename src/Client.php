<?php

declare(strict_types=1);

/*
 * This file is part of OpenBeerDatabase PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\OpenBeerDatabase;

use BrianFaust\Http\Http;

class Client
{
    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \BrianFaust\OpenBeerDatabase\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri('http://api.openbeerdatabase.com/v1/');

        $class = "BrianFaust\\OpenBeerDatabase\\API\\{$name}";

        return new $class($client);
    }
}
