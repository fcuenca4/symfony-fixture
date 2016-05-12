<?php

namespace MiAppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MiAppBundle\Entity\Partidos;
use MiAppBundle\Form\PartidosType;

/**
 * Partidos controller.
 *
 * @Route("/partidos")
 */
class PartidosController extends Controller
{
    /**
     * Lists all Partidos entities.
     *
     * @Route("/", name="partidos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $partidos = $em->getRepository('MiAppBundle:Partidos')->findAll();

        return $this->render('MiAppBundle::partidos/index.html.twig', array(
            'partidos' => $partidos,
        ));
    }

    /**
     * Creates a new Partidos entity.
     *
     * @Route("/new", name="partidos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $partido = new Partidos();
        $form = $this->createForm('MiAppBundle\Form\PartidosType', $partido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($partido);
            $em->flush();

            return $this->redirectToRoute('partidos_show', array('id' => $partido->getId()));
        }

        return $this->render('MiAppBundle::partidos/new.html.twig', array(
            'partido' => $partido,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Partidos entity.
     *
     * @Route("/{id}", name="partidos_show")
     * @Method("GET")
     */
    public function showAction(Partidos $partido)
    {
        $deleteForm = $this->createDeleteForm($partido);

        return $this->render('MiAppBundle::partidos/show.html.twig', array(
            'partido' => $partido,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Partidos entity.
     *
     * @Route("/{id}/edit", name="partidos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Partidos $partido)
    {
        $deleteForm = $this->createDeleteForm($partido);
        $editForm = $this->createForm('MiAppBundle\Form\PartidosType', $partido);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($partido);
            $em->flush();

            return $this->redirectToRoute('partidos_edit', array('id' => $partido->getId()));
        }

        return $this->render('MiAppBundle::partidos/edit.html.twig', array(
            'partido' => $partido,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Partidos entity.
     *
     * @Route("/{id}", name="partidos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Partidos $partido)
    {
        $form = $this->createDeleteForm($partido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($partido);
            $em->flush();
        }

        return $this->redirectToRoute('partidos_index');
    }

    /**
     * Creates a form to delete a Partidos entity.
     *
     * @param Partidos $partido The Partidos entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Partidos $partido)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('partidos_delete', array('id' => $partido->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
