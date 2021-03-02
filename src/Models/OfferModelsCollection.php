<?php

/**
 * @class OfferModelsCollection
 * @package SoftSwiss\Models
 */

namespace SoftSwiss\Models;

use Illuminate\Support\Collection;

class OfferModelsCollection extends Collection
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
            $this->add($item->fromArray());

        return $this;
    }
}
