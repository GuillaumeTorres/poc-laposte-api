<?php
/**
 * ContractDao class file
 *
 * PHP Version 5.6
 *
 * @category Service
 *
 * @package AppBundle\Service
 *
 * @author Guillaume <guillaume.torres@soprasteria.com>
 */
namespace AppBundle\Service;

use AppBundle\Entity\Contract;
use Symfony\Component\HttpKernel\Client;

/**
 * ContractDao class
 *
 * @category Service
 */
class ContractDao
{
    protected $requestBuilder;

    /**
     * ContractDao constructor.
     *
     * @param RequestBuilder $requestBuilder
     */
    public function __construct(RequestBuilder $requestBuilder)
    {
        $this->requestBuilder = $requestBuilder;
    }

    /**
     * @param Contract $contract
     * @param string   $method
     *
     * @return object
     */
    public function insert(Contract $contract, $method)
    {
        return $this->requestBuilder->build($contract, $method);
    }
}

