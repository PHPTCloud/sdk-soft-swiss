<?php

/**
 * @class OfferLandingsModel
 * @package SoftSwiss\Models
 */

namespace SoftSwiss\Models;

use Illuminate\Support\Collection;

class OfferLandingsModel
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $balancerUrl;
    /**
     * @var string
     */
    private $code;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBalancerUrl(): ?string
    {
        return $this->balancerUrl;
    }

    /**
     * @param string $balancerUrl
     * @return self
     */
    public function setBalancerUrl(string $balancerUrl): self
    {
        $this->balancerUrl = $balancerUrl;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'balancer_url'=>$this->getBalancerUrl(),
            'code' => $this->getCode(),
        ];
    }

    /**
     * @param stdClass $array
     * @return self
     */
    public function fromArray($item): self
    {
        if(isset($item->id))
            $this->setId((int) $item->id);

        if(isset($item->balancer_url))
            $this->setBalancerUrl($item->balancer_url);

        if(isset($item->code))
            $this->setCode($item->code);

        return $this;
    }
}
