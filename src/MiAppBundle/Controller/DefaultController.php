<?php

namespace MiAppBundle\Controller;

use MiAppBundle\MiAppBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use MiAppBundle\Entity\Partidos;
use MiAppBundle\Form\PartidosType;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $response = ($this->redirect('/partidos'));
    }


    public
    function isLogged()
    {
        if ($this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            return true;
        }
        return false;
    }
}
