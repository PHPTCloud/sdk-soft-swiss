<?php

/**
 * @class OffersService
 * @package SoftSwiss\Service
 */

namespace SoftSwiss\Service;

use SoftSwiss\Models\AbstractModel;
use SoftSwiss\Contracts\AbstractServiceContract;
use SoftSwiss\Models\OfferModel;

class OffersService extends AbstractService implements AbstractServiceContract
{
    /**
     * @var string
     */
    protected $method = '/api/client/partner/campaigns';

    /**
     * @param int $id
     * @return OfferModel
     */
    public function getOne(int $id): OfferModel
    {
        $this->getRequest()->authentication();
        $response = $this->getRequest()->get(
            $this->getRequest()->getDomain($this->getMethod()) . '/' . $id
        );
        $response = json_decode($response);
        $model = new OfferModel();

        if(isset($response->id)) {
            $model->fromArray([
                'id' => $response->id,
                'name' => $response->name,
                'promos' => $response->promos,
                'commission' => $response->commission,
            ]);
        }

        return $model;
    }

    /**
     * @return OfferModel[]
     */
    public function get(): array
    {
        return [];
    }
}
