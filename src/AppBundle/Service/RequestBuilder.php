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
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * ContractDao class
 *
 * @category Service
 */
class RequestBuilder
{
    const HEADERS = ['Content-Type', 'application/json'];

    protected $container;

    /**
     * RequestBuilder constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param Contract $contract
     * @param String   $method
     *
     * @return object
     */
    public function build(Contract $contract, $method)
    {
        $url = $this->container->getParameter('app_host').$contract->getUri();
        $browser = new Browser();
        $response = $browser->$method($url, [], $this->jsonSerialize($contract));

        return $response;
    }

    /**
     * @param Contract $contract
     *
     * @return mixed|string
     */
    private function jsonSerialize(Contract $contract)
    {
        $serializer = $this->container->get('jms_serializer');

        return $serializer->serialize($contract, 'json');
    }
}
