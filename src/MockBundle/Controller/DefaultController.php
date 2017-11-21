<?php
/**
 * Mocking controller file
 *
 * PHP Version 5.6
 *
 * @category Controller
 *
 * @package  MockBundle\Controller
 *
 * @author   Guillaume <guillaume.torres@soprasteria.com>
 */
namespace MockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Mocking controller class
 *
 * @category Controller
 */
class DefaultController extends Controller
{

    /**
     * @Route("/recif/resources/contrats/v1")
     *
     * @param  Request $request
     *
     * @return Response
     */
    public function contractAction(Request $request)
    {
        switch ($request->getMethod()) {
            case 'POST':
                return new Response($this->getMockingContractCreation());
            case 'PUT':
                return new Response($this->getMockingContractEdition());
        }

        return new JsonResponse(['Cannot find request method'], 404);
    }

    /**
     * @return string
     */
    private function getMockingContractCreation()
    {
        $response = [
            'CreationContratReponse' => [
                'NumContrat' => 200058339,
                'ContratCreation' => [
                    'Contrat' => [
                        'EstDecede' => false,
                        'FoyerEstComplet' => 'C',
                        'AutorisationDiffusionCNIL' => true,
                        'DateDebut' => '04/09/2014',
                        'DateFin' => '15/10/2014',
                        'offer' => 'RPTN1',
                        'Mobilite' => true,
                        'Commentaire' => 'Lorem ipsum',
                        'DateDepot' => '03/09/2014',
                        'CodeEntiteEmettrice' => 010570,
                        'CodeEntiteDepot' => 010570,
                        'IdCompteCCMU' => 123456791,
                    ],
                ],
            ],
        ];

        return json_encode($response);
    }

    /**
     * @return string
     */
    private function getMockingContractEdition()
    {
        $response = [
            'ModificationContratReponse' => [
                'ContratModification' => [
                    'Contrat' => [
                        'EstDecede' => false,
                        'FoyerEstComplet' => 'C',
                        'AutorisationDiffusionCNIL' => true,
                        'DateDebut' => '04/09/2014',
                        'DateFin' => '15/10/2014',
                        'offer' => 'RPTN1',
                        'Mobilite' => true,
                        'Commentaire' => 'Lorem ipsum',
                        'DateDepot' => '03/09/2014',
                        'CodeEntiteEmettrice' => 010570,
                    ],
                ],
            ],
        ];

        return json_encode($response);
    }

    /**
     * @return string
     */
    private function getMockingError()
    {
        $error = [
            'Error' => [
                'Code' => 'FL_001_HUC_CC',
                'Message' => 'La date de début doit être un jour ouvrable.',
            ],
        ];

        return json_encode($error);
    }
}
