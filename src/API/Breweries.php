<?php

/*
 * This file is part of OpenBeerDatabase PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\OpenBeerDatabase\API;

use BrianFaust\Http\HttpResponse;

class Breweries extends AbstractAPI
{
    /**
     * @param string|null $query
     * @param string      $order
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function search(?string $query = null, $order = 'id ASC'): HttpResponse
    {
        return $this->client->get('breweries', compact('query', 'order'));
    }

    /**
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function details(int $id): HttpResponse
    {
        return $this->client->get("breweries/{$id}");
    }

    /**
     * @param int $beer
     * @param int $brewery_id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(int $beer, int $brewery_id): HttpResponse
    {
        return $this->client->post('breweries', compact('beer', 'brewery_id'));
    }

    /**
     * @param int $id
     * @param int $beer
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function update(int $id, int $beer): HttpResponse
    {
        return $this->client->put("breweries/{$id}", compact('beer'));
    }

    /**
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function remove(int $id): HttpResponse
    {
        return $this->client->delete("breweries/{$id}");
    }
}
