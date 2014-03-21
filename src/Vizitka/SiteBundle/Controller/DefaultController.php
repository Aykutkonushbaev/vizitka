<?php

namespace Vizitka\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VizitkaBundle:Default:index.html.twig');
    }

    public function serviceAction()
    {
        return $this->render('VizitkaBundle:Default:service.html.twig');
    }

    public function contactAction()
    {
        return $this->render('VizitkaBundle:Default:contact.html.twig');
    }

}
