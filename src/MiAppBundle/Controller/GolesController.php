<?php

namespace MiAppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MiAppBundle\Entity\Goles;
use MiAppBundle\Form\GolesType;

/**
 * Goles controller.
 *
 * @Route("/goles")
 */
class GolesController extends Controller
{
    /**
     * Lists all Goles entities.
     *
     * @Route("/", name="goles_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $goles = $em->getRepository('MiAppBundle:Goles')->findAll();

        return $this->render('goles/index.html.twig', array(
            'goles' => $goles,
        ));
    }

    /**
     * Creates a new Goles entity.
     *
     * @Route("/new", name="goles_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $gole = new Goles();
        $form = $this->createForm('MiAppBundle\Form\GolesType', $gole);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($gole);
            $em->flush();

            return $this->redirectToRoute('goles_show', array('id' => $gole->getId()));
        }

        return $this->render('goles/new.html.twig', array(
            'gole' => $gole,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Goles entity.
     *
     * @Route("/{id}", name="goles_show")
     * @Method("GET")
     */
    public function showAction(Goles $gole)
    {
        $deleteForm = $this->createDeleteForm($gole);

        return $this->render('goles/show.html.twig', array(
            'gole' => $gole,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Goles entity.
     *
     * @Route("/{id}/edit", name="goles_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Goles $gole)
    {
        $deleteForm = $this->createDeleteForm($gole);
        $editForm = $this->createForm('MiAppBundle\Form\GolesType', $gole);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($gole);
            $em->flush();

            return $this->redirectToRoute('goles_edit', array('id' => $gole->getId()));
        }

        return $this->render('goles/edit.html.twig', array(
            'gole' => $gole,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Goles entity.
     *
     * @Route("/{id}", name="goles_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Goles $gole)
    {
        $form = $this->createDeleteForm($gole);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($gole);
            $em->flush();
        }

        return $this->redirectToRoute('goles_index');
    }

    /**
     * Creates a form to delete a Goles entity.
     *
     * @param Goles $gole The Goles entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Goles $gole)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('goles_delete', array('id' => $gole->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
