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
     * @param array  $parameters
     * @param string $method
     *
     * @return object
     */
    public function create($parameters, $method = 'post')
    {
        $contract = new Contract();
        foreach ($parameters as $key => $parameter) {
            $contract->{'set'.$this->toCamelCase($key)}($parameter);
        }

        return $this->contractDao->insert($contract, $method);
    }

    /**
     * Convert snakeCase string to camlCase
     *
     * @param string $snakeCaseString
     *
     * @return string
     */
    private function toCamelCase($snakeCaseString)
    {
        $camelCase = preg_replace_callback(
            '/_([^_])/',
            function (array $m) {
                return ucfirst($m[1]);
            },
            $snakeCaseString
        );

        return ucfirst($camelCase);
    }
}