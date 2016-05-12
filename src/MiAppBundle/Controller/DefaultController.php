<?php

namespace MiAppBundle\Controller;

use MiAppBundle\MiAppBundle;
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
            $em = $this->getDoctrine()->getManager();
            $equipos = $em->getRepository('MiAppBundle:Equipos')->findAll();

            return $this->render('MiAppBundle::/tablaPosiciones.html.twig', array(
                'equipos' => $equipos,
            ));
//            $usr = $this->container->get('security.token_storage')->getToken()->getUser();
//            if ($usr->hasRole('ROLE_ADMIN')) {
//                return $this->RedirectToRoute('admin_index');
//            } else if ($usr->hasRole('ROLE_USER')) {
//                {
//                    return $this->RedirectToRoute('editor_index');
//                }
//            }
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
