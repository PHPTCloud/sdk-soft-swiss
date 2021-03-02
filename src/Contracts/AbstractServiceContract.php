<?php

/**
 * @class AbstractServiceContract
 * @package SoftSwiss\Contracts
 */

namespace SoftSwiss\Contracts;

use SoftSwiss\AbstractModel;

interface AbstractServiceContract
{
    /**
     * @param int $id
     * @return AbstractModel
     */
    public function getOne(int $id);

    /**
     * @return AbstractModel[]
     */
    public function get();
}
