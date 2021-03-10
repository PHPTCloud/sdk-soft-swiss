<?php
declare(strict_types = 1);

/**
 * @class PaymentArgumentsModel
 * @package SoftSwiss\Models
 */

namespace SoftSwiss\Models;

class PaymentArgumentsModel extends AbstractModel
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title 
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string $currency 
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    public function __construct(string $title = null, string $currency = null)
    {
        $this->title = $title;
        $this->currency = $currency;
    }
}