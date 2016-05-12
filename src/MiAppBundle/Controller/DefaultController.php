<?php

namespace MiAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        if (!$this->isLogged()) {
            $response = ($this->redirect('/login'));
        } else {
            $usr = $this->container->get('security.token_storage')->getToken()->getUser();
            if ($usr->hasRole('ROLE_ADMIN')) {
                $response = $this->render('C:\Users\fcuenca\Desktop\proyecto_symfony\src\MiAppBundle\Resources\views\adminview.html.twig');
            } else if ($usr->hasRole('ROLE_USER')) {
                {
                    $response = $this->render('C:\Users\fcuenca\Desktop\proyecto_symfony\src\MiAppBundle\Resources\views\editorview.html.twig');
                }
            }
        }
        return $response;

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
