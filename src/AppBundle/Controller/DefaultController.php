<?php

namespace AppBundle\Controller;

use AppBundle\Service\ContractService;
use Buzz\Browser;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $headers['Content-Type'] = 'application/x-www-form-urlencoded';
        $browser = new Browser();
        $test = json_encode([
            'permier' => 'blababla',
            'autre' => 'yoyoyoyo',
        ]);

        $response = $browser->post('http://mock.dev/test', [], json_encode($test));

        return new Response($response->getContent());
    }

    /**
     * @Route("/contract", name="contract")
     *
     * @param Request         $request
     * @param ContractService $contractService
     *
     * @return Response
     */
    public function contractAction(Request $request, ContractService $contractService)
    {
        $parameters = $request->request->all();
        $response = $contractService->create($parameters);

        return new Response($response->getContent());
    }

    /**
     * @Route("/test", name="test")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function testAction(Request $request)
    {
        $data = $request->request->all();

        return new Response(json_encode($data));
    }
}
