<?php

namespace AppBundle\Controller;

use AppBundle\Entity\discussion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Discussion controller.
 *
 * @Route("discussion")
 */
class discussionController extends Controller
{
    /**
     * Lists all discussion entities.
     *
     * @Route("/", name="discussion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $discussions = $em->getRepository('AppBundle:discussion')->findAll();

        return $this->render('discussion/index.html.twig', array(
            'discussions' => $discussions,
        ));
    }

    /**
     * Creates a new discussion entity.
     *
     * @Route("/new", name="discussion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $discussion = new Discussion();
        $form = $this->createForm('AppBundle\Form\discussionType', $discussion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($discussion);
            $em->flush();

            return $this->redirectToRoute('discussion_show', array('id' => $discussion->getId()));
        }

        return $this->render('discussion/new.html.twig', array(
            'discussion' => $discussion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a discussion entity.
     *
     * @Route("/{id}", name="discussion_show")
     * @Method("GET")
     */
    public function showAction(discussion $discussion)
    {
        $deleteForm = $this->createDeleteForm($discussion);

        return $this->render('discussion/show.html.twig', array(
            'discussion' => $discussion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing discussion entity.
     *
     * @Route("/{id}/edit", name="discussion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, discussion $discussion)
    {
        $deleteForm = $this->createDeleteForm($discussion);
        $editForm = $this->createForm('AppBundle\Form\discussionType', $discussion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('discussion_edit', array('id' => $discussion->getId()));
        }

        return $this->render('discussion/edit.html.twig', array(
            'discussion' => $discussion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a discussion entity.
     *
     * @Route("/{id}", name="discussion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, discussion $discussion)
    {
        $form = $this->createDeleteForm($discussion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($discussion);
            $em->flush();
        }

        return $this->redirectToRoute('discussion_index');
    }

    /**
     * Creates a form to delete a discussion entity.
     *
     * @param discussion $discussion The discussion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(discussion $discussion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('discussion_delete', array('id' => $discussion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
