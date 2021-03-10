<?php

/**
 * @class ApiClient
 * @package SoftSwiss
 */

namespace SoftSwiss;

use SoftSwiss\Service\OffersService;

class ApiClient
{
    /**
     * @var ApiRequest
     */
    protected $request;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var OffersService
     */
    protected $offersService;

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
    public function getDomain(): ?string
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return self
     */
    public function setDomain(string $domain): self
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @param string $domain
     * @param string $login
     * @param string $password
     */
    public function __construct(string $domain, string $login, string $password)
    {
        $this->request = new ApiRequest($login, $password, $domain);
        $this->setDomain($domain);
        /**
         * Services
         */
        $this->offersService = new OffersService($this->getRequest());
    }

    /**
     * @param string $login
     * @param string $password
     * @param string $domain
     */
    public function __invoke(string $login, string $password, string $domain)
    {
        $this->request = new ApiRequest($login, $password, $domain);
        $this->setDomain($domain);
    }

    /**
     * @return OffersService
     */
    public function offers()
    {
        return $this->offersService;
    }
}
