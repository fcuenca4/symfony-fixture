<?php

namespace MiAppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MiAppBundle\Entity\Jugadores;
use MiAppBundle\Form\JugadoresType;

/**
 * Jugadores controller.
 *
 * @Route("/jugadores")
 */
class JugadoresController extends Controller
{
    /**
     * Lists all Jugadores entities.
     *
     * @Route("/", name="jugadores_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $jugadores = $em->getRepository('MiAppBundle:Jugadores')->findAll();

        return $this->render('jugadores/index.html.twig', array(
            'jugadores' => $jugadores,
        ));
    }

    /**
     * Creates a new Jugadores entity.
     *
     * @Route("/new", name="jugadores_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $jugadore = new Jugadores();
        $form = $this->createForm('MiAppBundle\Form\JugadoresType', $jugadore);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($jugadore);
            $em->flush();

            return $this->redirectToRoute('jugadores_show', array('id' => $jugadore->getId()));
        }

        return $this->render('jugadores/new.html.twig', array(
            'jugadore' => $jugadore,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Jugadores entity.
     *
     * @Route("/{id}", name="jugadores_show")
     * @Method("GET")
     */
    public function showAction(Jugadores $jugadore)
    {
        $deleteForm = $this->createDeleteForm($jugadore);

        return $this->render('jugadores/show.html.twig', array(
            'jugadore' => $jugadore,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Jugadores entity.
     *
     * @Route("/{id}/edit", name="jugadores_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Jugadores $jugadore)
    {
        $deleteForm = $this->createDeleteForm($jugadore);
        $editForm = $this->createForm('MiAppBundle\Form\JugadoresType', $jugadore);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($jugadore);
            $em->flush();

            return $this->redirectToRoute('jugadores_edit', array('id' => $jugadore->getId()));
        }

        return $this->render('jugadores/edit.html.twig', array(
            'jugadore' => $jugadore,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Jugadores entity.
     *
     * @Route("/{id}", name="jugadores_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Jugadores $jugadore)
    {
        $form = $this->createDeleteForm($jugadore);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($jugadore);
            $em->flush();
        }

        return $this->redirectToRoute('jugadores_index');
    }

    /**
     * Creates a form to delete a Jugadores entity.
     *
     * @param Jugadores $jugadore The Jugadores entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Jugadores $jugadore)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('jugadores_delete', array('id' => $jugadore->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
