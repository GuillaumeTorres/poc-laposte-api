<?php
/**
 * Contract controller file
 *
 * PHP Version 5.6
 *
 * @category Controller
 *
 * @package  AppBundle\Controller
 *
 * @author   Guillaume <guillaume.torres@soprasteria.com>
 */
namespace AppBundle\Controller;

use AppBundle\Service\ContractService;
use Buzz\Browser;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Contract controller class
 *
 * @category Controller
 */
class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function indexAction(Request $request)
    {
        return new Response('home');
    }

    /**
     * @Route("/contract/create", name="contract_create")
     *
     * @Method("POST")
     *
     * @param Request         $request
     * @param ContractService $contractService
     *
     * @return Response
     */
    public function createContractAction(Request $request, ContractService $contractService)
    {
        $parameters = $request->request->all();
        $jsonResponse = $contractService->create($parameters);
        $response = json_decode($jsonResponse->getContent());

        if (isset($response->Error)) {
            return new JsonResponse($response->Error, 400);
        }

        return new JsonResponse(['success' => 'resource successfully created'], 201);
    }

    /**
     * @Route("/contract/create", name="contract_edit")
     *
     * @Method("PUT")
     *
     * @param Request         $request
     * @param ContractService $contractService
     *
     * @return Response
     */
    public function editContractAction(Request $request, ContractService $contractService)
    {
        $parameters = $request->request->all();
        $jsonResponse = $contractService->create($parameters, 'put');
        $response = json_decode($jsonResponse->getContent());

        if (isset($response->Error)) {
            return new JsonResponse($response->Error, 400);
        }

        return new JsonResponse(['success' => 'resource successfully edited'], 201);
    }
}
