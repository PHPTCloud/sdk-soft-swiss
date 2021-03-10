<?php

/**
 * @class AbstractService
 * @package SoftSwiss\Service
 */

namespace SoftSwiss\Service;

use SoftSwiss\ApiRequest;

abstract class AbstractService
{
    /**
     * @var ApiRequest
     */
    protected $request;

    /**
     * @var string
     */
    protected $method;

    /**
     * @return ApiRequest|null
     */
    public function getRequest(): ?ApiRequest
    {
        return $this->request;
    }

    /**
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * @param string $method
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @param ApiRequest $request
     */
    public function __construct(ApiRequest $request)
    {
        $this->request = $request;
    }

    /**
     * @param ApiRequest $request
     */
    public function __invoke(ApiRequest $request)
    {
        $this->request = $request;
    }
}
