<?php
/**
 * ContractService class file
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

/**
 * ContractService class
 *
 * @category Service
 */
class ContractService
{
    protected $contractDao;

    /**
     * ContractService constructor.
     *
     * @param ContractDao $contractDao
     */
    public function __construct(ContractDao $contractDao)
    {
        $this->contractDao = $contractDao;
    }

    /**
     * Create new contract
     *
     * @param array $parameters
     */
    public function create($parameters)
    {
        $contract = new Contract();
        foreach ($parameters as $parameter) {
            $contract->${'set'.ucfirst($parameter)};
        }

        $this->contractDao->insert($contract);
    }
}