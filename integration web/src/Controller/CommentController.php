<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\User;
use App\Form\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/delete/{id}", name="deleteComment")
     */
    public function deleteCommentAction($id)
    {
        $comment = $this->getDoctrine()->getRepository(Comment::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($comment);
        $em->flush();
        return $this->redirectToRoute("eventBack");
    }

}
