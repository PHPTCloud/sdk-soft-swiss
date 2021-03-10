<?php
/**
 * @class ItemsCollection
 * @package SoftSwiss\Models
 */

namespace SoftSwiss\Models;

class OfferModel
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $id;

    /**
     * @var OffersLandingsModelsCollection
     */
    private $landings;

    /**
     * @var PaymentArgumentsModel
     */
    private $commission;

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
     * @return OffersLandingsModelsCollection|null
     */
    public function getLandings(): ?OffersLandingsModelsCollection
    {
        return $this->landings;
    }

    /**
     * @param OffersLandingsModelsCollection $landings
     * @return self
     */
    public function setLandings(OffersLandingsModelsCollection $landings): self
    {
        $this->landings = $landings;
        return $this;
    }

    /**
     * @return PaymentArgumentsModel|null
     */
    public function getCommission(): ?PaymentArgumentsModel
    {
        return $this->commission;
    }

    /**
     * @param PaymentArgumentsModel $commission
     * @return self
     */
    public function setCommission(PaymentArgumentsModel $commission): self
    {
        $this->commission = $commission;
        return $this;
    }

    public function __construct()
    {
        $this->landings = new OffersLandingsModelsCollection();
        $this->commission = [];
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'landings' => $this->getLandings()->toArray(),
            'payments' => $this->getCommission(),
        ];
    }

    /**
     * @param array $array
     * @return self
     */
    public function fromArray(array $array): self
    {
        if(isset($array['id']))
            $this->setId((int) $array['id']);

        if(isset($array['name']))
            $this->setTitle($array['name']);

        if(isset($array['promos']))
            $array['promos'] = (array) $array['promos'];
            $this->setLandings($this->getLandings()->fromArray($array['promos']));

        if(isset($array['commission']))
        {
            $array['commission'] = (array) $array['commission'];
            $paymentArguments = new PaymentArgumentsModel(
                $array['commission']['title'],
                $array['commission']['fiat_currency']
            );
            $this->setCommission($paymentArguments);
        }

        return $this;
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        return (empty($this->getId()) && empty($this->getTitle()))
            ? true
            : false;
    }
}
