<?php

/*
 * This file is part of OpenBeerDatabase PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\OpenBeerDatabase\Api;

use BrianFaust\Unified\AbstractApi;
use BrianFaust\OpenBeerDatabase\Models\Beer;

class Beers extends AbstractApi
{
    public function search($query = null, $order = 'id ASC')
    {
        $response = $this->get('beers', compact('query', 'order'));

        return $this->getMapper()->raw($response);
    }

    public function details($id)
    {
        $response = $this->get("beers/$id");

        return $this->getMapper()->raw($response);
    }

    public function create($beer, $brewery_id)
    {
        return $this->post('beers', compact('beer', 'brewery_id'));
    }

    public function update($id, $beer)
    {
        return $this->put("beers/$id", compact('beer'));
    }

    public function remove($id)
    {
        return $this->delete("beers/$id");
    }
}
