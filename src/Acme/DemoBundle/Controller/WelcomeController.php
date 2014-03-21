<?php

namespace Acme\DemoBundle\Controller;

use Doctrine\DBAL\Types\JsonArrayType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        $name='str';
        $response = new Response("tekst kakoi-nid");
        return $response;
        //throw $this->createNotFoundException("lyuboe");
        //return $this->render('AcmeDemoBundle:Welcome:index.html.twig', array('name'=>$name));
    }
}
