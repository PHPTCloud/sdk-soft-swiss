<?php

/**
 * @class OffersLandingsModelsCollection
 * @package SoftSwiss\Models
 */

namespace SoftSwiss\Models;

use Illuminate\Support\Collection;

class OffersLandingsModelsCollection extends Collection
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        $result = [];

        foreach($this->all() as $item)
            $result[] = $item->toArray();

        return $result;
    }

    /**
     * @param array $array
     * @return self
     */
    public function fromArray(array $array): self
    {
        foreach($array as $item)
            $this->push((new OfferLandingsModel())->fromArray($item));

        return $this;
    }
}
