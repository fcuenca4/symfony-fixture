<?php

namespace MiAppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MiAppBundle\Entity\Equipos;
use MiAppBundle\Form\EquiposType;

/**
 * Equipos controller.
 *
 * @Route("/equipos")
 */
class EquiposController extends Controller
{
    /**
     * Lists all Equipos entities.
     *
     * @Route("/", name="equipos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $equipos = $em->getRepository('MiAppBundle:Equipos')->findAll();

        return $this->render('MiAppBundle::equipos/index.html.twig', array(
            'equipos' => $equipos,
        ));
    }

    /**
     * Creates a new Equipos entity.
     *
     * @Route("/new", name="equipos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $equipo = new Equipos();
        $form = $this->createForm('MiAppBundle\Form\EquiposType', $equipo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($equipo);
            $em->flush();

            return $this->redirectToRoute('equipos_index');
        }

        return $this->render('MiAppBundle::equipos/new.html.twig', array(
            'equipo' => $equipo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Equipos entity.
     *
     * @Route("/{id}", name="equipos_show")
     * @Method("GET")
     
    public function showAction(Equipos $equipo)
    {
        $deleteForm = $this->createDeleteForm($equipo);

        return $this->render('MiAppBundle::equipos/show.html.twig', array(
            'equipo' => $equipo,
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Displays a form to edit an existing Equipos entity.
     *
     * @Route("/{id}/edit", name="equipos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Equipos $equipo)
    {
        $deleteForm = $this->createDeleteForm($equipo);
        $editForm = $this->createForm('MiAppBundle\Form\EquiposType', $equipo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($equipo);
            $em->flush();

            return $this->redirectToRoute('equipos_index');
        }

        return $this->render('MiAppBundle::equipos/edit.html.twig', array(
            'equipo' => $equipo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Equipos entity.
     *
     * @Route("/{id}", name="equipos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Equipos $equipo)
    {
        $form = $this->createDeleteForm($equipo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($equipo);
            $em->flush();
        }

        return $this->redirectToRoute('equipos_index');
    }

    /**
     * Creates a form to delete a Equipos entity.
     *
     * @param Equipos $equipo The Equipos entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Equipos $equipo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('equipos_delete', array('id' => $equipo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
