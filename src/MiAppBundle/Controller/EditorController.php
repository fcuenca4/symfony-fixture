<?php

namespace MiAppBundle\Controller;

use FOS\UserBundle\FOSUserBundle;
use MiAppBundle\Entity\FosUser;
use MiAppBundle\MiAppBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use MiAppBundle\Controller\PartidosController;
use MiAppBundle\Entity\Partidos;


/**
 * Editor controller.
 *
 * @Route("/editor")
 */
class EditorController extends Controller
{
    /**
     * Lists all Partidos for the current user as Editor.
     *
     * @Route("/", name="editor_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $usr = $this->container->get('security.token_storage')->getToken()->getUser()->getId();
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('u')
            ->from('MiAppBundle:Partidos', 'u')
            ->where('u.idEditor = ?1')
            ->setParameter('1', $usr);
        $partidos = $qb->getQuery()->getResult();
        return $this->render('editor/index.html.twig', array(
            'partidos' => $partidos,
        ));
    }

    /**
     * Displays a form to edit an existing Partidos entity without editor.
     * @Route("/{id}/edit", name="editor_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Partidos $partido)
    {
        $editForm = $this->createForm('MiAppBundle\Form\EditFormType', $partido);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($partido);
            $em->flush();

            return $this->redirectToRoute('partidos_edit', array('id' => $partido->getId()));
        }

        return $this->render('editor/edit.html.twig', array(
            'partido' => $partido,
            'edit_form' => $editForm->createView()
        ));
    }


}