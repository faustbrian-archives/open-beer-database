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

namespace Plients\OpenBeerDatabase\API;

use Plients\Http\HttpResponse;
use Plients\OpenBeerDatabase\Models\Beer;

class Beers extends AbstractAPI
{
    /**
     * @param string|null $query
     * @param string      $order
     *
     * @return \Plients\Http\HttpResponse
     */
    public function search(?string $query = null, $order = 'id ASC'): HttpResponse
    {
        return $this->client->get('beers', compact('query', 'order'));
    }

    /**
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function details(int $id): HttpResponse
    {
        return $this->client->get("beers/{$id}");
    }

    /**
     * @param int $beer
     * @param int $brewery_id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function create(int $beer, int $brewery_id): HttpResponse
    {
        return $this->client->post('beers', compact('beer', 'brewery_id'));
    }

    /**
     * @param int $id
     * @param int $beer
     *
     * @return \Plients\Http\HttpResponse
     */
    public function update(int $id, int $beer): HttpResponse
    {
        return $this->client->put("beers/{$id}", compact('beer'));
    }

    /**
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function remove(int $id): HttpResponse
    {
        return $this->client->delete("beers/{$id}");
    }
}
