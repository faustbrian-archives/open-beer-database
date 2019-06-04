<?php

declare(strict_types=1);

/*
 * This file is part of OpenBeerDatabase PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\OpenBeerDatabase;

use Plients\Http\Http;

class Client
{
    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \Plients\OpenBeerDatabase\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri('http://api.openbeerdatabase.com/v1/');

        $class = "Plients\\OpenBeerDatabase\\API\\{$name}";

        return new $class($client);
    }
}
