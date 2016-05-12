<?php

namespace MiAppBundle\Controller;

use FOS\UserBundle\FOSUserBundle;
use MiAppBundle\Entity\FosUser;
use MiAppBundle\MiAppBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


/**
 * Admin controller.
 *
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * Lists all Editors.
     *
     * @Route("/", name="admin_index")
     * @Method("GET")
     */
    public function indexAction()
    {
//        $em = $this->getDoctrine()->getManager();
//        $users = $em->getRepository('MiAppBundle:FosUser')->findAll();
        $userManager = $this->get('fos_user.user_manager');
        $users = $this->findByRole("ROLE_USER");
        $response = new JsonResponse();
        $response->setData($users);
        return $response;
    }
//    public function setEditorPartido($id){
//
//    }
    /**
     * @param string $role
     *
     * @return array
     */
    private function findByRole($role)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('u.username', 'u.id','u.roles')
            ->from('MiAppBundle:FosUser', 'u');
//            ->where('u.roles LIKE :roles')
//            ->setParameter('roles', '%"' . $role . '"%');
        $ret = $qb->getQuery()->getResult();
        return $ret;
    }


}
