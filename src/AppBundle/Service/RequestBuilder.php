<?php
/**
 * RequestBuilder class file
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
use Buzz\Browser;

/**
 * ContractDao class
 *
 * @category Service
 */
class RequestBuilder
{
    const HEADERS = ['Content-Type', 'application/json'];

    /**
     * @param Contract $contract
     * @param String   $method
     */
    public function build(Contract $contract, $method)
    {
        $browser = new Browser();
    }
}
