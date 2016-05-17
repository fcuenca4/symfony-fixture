<?php

namespace MiAppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MiAppBundle\Entity\Arbitros;
use MiAppBundle\Form\ArbitrosType;

/**
 * Arbitros controller.
 *
 * @Route("/arbitros")
 */
class ArbitrosController extends Controller
{
    /**
     * Lists all Arbitros entities.
     *
     * @Route("/", name="arbitros_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $arbitros = $em->getRepository('MiAppBundle:Arbitros')->findAll();

        return $this->render('MiAppBundle::arbitros/index.html.twig', array(
            'arbitros' => $arbitros,
        ));
    }

    /**
     * Creates a new Arbitros entity.
     *
     * @Route("/new", name="arbitros_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $arbitro = new Arbitros();
        $form = $this->createForm('MiAppBundle\Form\ArbitrosType', $arbitro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($arbitro);
            $em->flush();

            return $this->redirectToRoute('arbitros_index');
        }

        return $this->render('MiAppBundle::arbitros/new.html.twig', array(
            'arbitro' => $arbitro,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Arbitros entity.
     *
     * @Route("/{id}", name="arbitros_show")
     * @Method("GET")
     
    public function showAction(Arbitros $arbitro)
    {
        $deleteForm = $this->createDeleteForm($arbitro);

        return $this->render('MiAppBundle::arbitros/show.html.twig', array(
            'arbitro' => $arbitro,
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Displays a form to edit an existing Arbitros entity.
     *
     * @Route("/{id}/edit", name="arbitros_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Arbitros $arbitro)
    {
        $deleteForm = $this->createDeleteForm($arbitro);
        $editForm = $this->createForm('MiAppBundle\Form\ArbitrosType', $arbitro);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($arbitro);
            $em->flush();

            return $this->redirectToRoute('arbitros_index');
        }

        return $this->render('MiAppBundle::arbitros/edit.html.twig', array(
            'arbitro' => $arbitro,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Arbitros entity.
     *
     * @Route("/{id}", name="arbitros_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Arbitros $arbitro)
    {
        $form = $this->createDeleteForm($arbitro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($arbitro);
            $em->flush();
        }

        return $this->redirectToRoute('arbitros_index');
    }

    /**
     * Creates a form to delete a Arbitros entity.
     *
     * @param Arbitros $arbitro The Arbitros entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Arbitros $arbitro)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('arbitros_delete', array('id' => $arbitro->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
