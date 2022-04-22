<?php

namespace App\Controller;

use App\Entity\Conge;

use App\Form\CongeType;
use App\Repository\CongeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CongeController extends AbstractController
{
    /**
     * @Route("/conge", name="conge")
     */
    public function index(): Response
    {
        return $this->render('conge/indexc.html.twig', [
            'controller_name' => 'CongeController',
        ]);
    }



    /**
     * @Route("/afficherc", name="afficherc")
     */
    public function affichersc()
    {
        $conge = $this->getDoctrine()->getRepository(Conge::class)->findAll();
        return $this->render('conge/afficherc.html.twig',array('listconge'=>$conge));

    }


    /**
     * @Route("/afficherc2", name="afficherc2")
     */
    public function affichersc2()
    {
        $conge = $this->getDoctrine()->getRepository(Conge::class)->findAll();
        return $this->render('conge/afficherc2.html.twig',array('listconge'=>$conge));

    }

    /**
     * @Route("/addConge", name="addConge")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function addConge(Request $request){
        $conge= new conge();
        $form = $this->createForm(CongeType::class,$conge);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ){
            $em = $this->getDoctrine()->getManager();
            $em->persist($conge);
            $em->flush();
            return $this->redirectToRoute('afficherc');
        }
        return $this->render("conge/addc.html.twig",array("formConge"=>$form->createView()));
    }

    /**
     * @Route("/updateConge/{idconge}", name="updateConge")
     * @param Request $request
     * @param $idconge
     * @return RedirectResponse|Response
     */
    public function updateEmploye(Request $request,$idconge){
        $conge=  $this->getDoctrine()->getManager()->getRepository(Conge::class)->find($idconge);

        $form = $this->createForm(CongeType::class,$conge);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ){
            $em = $this->getDoctrine()->getManager();
            //$em->persist($conge);
            $em->flush();//mise a jour
            return $this->redirectToRoute('afficherc');
        }
        return $this->render("conge/addc.html.twig",array("formConge"=>$form->createView()));
    }

    /**
     * @Route("/deletec/{idconge}", name="deletec")
     * @param $idconge
     * @return RedirectResponse
     */
    public function delete($idconge)
    {
        $Conge = $this->getDoctrine()->getRepository(Conge::class)->find($idconge);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Conge);
        $em->flush();
        return $this->redirectToRoute("afficherc");
    }

    /**
     * @Route("/deletecs/{idconge}", name="deletecs")
     * @param $idconge
     * @return RedirectResponse
     */
    public function deletes($idconge)
    {
        $Conge = $this->getDoctrine()->getRepository(Conge::class)->find($idconge);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Conge);
        $em->flush();
        return $this->redirectToRoute("afficherc2");
    }

    /**
     * @Route ("/tricon",name="tricon")
     */
    public function tricon(CongeRepository $repository , Request $request)
    {
        //$data=$request->get('search');
        $conge=$repository->OrderBydate();
        return $this->render('conge/afficherc.html.twig',array('listconge'=>$conge));
    }






    /**
     * @Route("/afficherjsonTwigConge", name="afficherjsonTwigConge")
     */
    public function afficherjsonTwigConge(NormalizerInterface $normalizer)
    {
        $repositoryf= $this->getDoctrine()->getRepository(Conge::class);
        $conge= $repositoryf->findAll();
        $json=$normalizer->normalize($conge,'json',['groups'=>'post:read']);
        // return $this->render('Film/allFilmJson.html.twig',['data'=> json]);
        return new Response(json_encode($json));
    }


    /**
     * @Route("/addJSONConge/new", name="addJSONConge")
     */
    public function addJSONConge(Request $request,NormalizerInterface $normalizer){
        //$content=$request->getContent();
        $em = $this->getDoctrine()->getManager();
        $conge= new Conge();
        $conge->setDateConge(new \DateTime('now'));
        //$employe->setPrenomEmploye(new \DateTime('now'));
        $conge->setMotifConge($request->get('motifconge'));
        $conge->setNbJourConge($request->get('nbjourconge'));
        $conge->setEmploye($request->get('employeid'));
        $em->persist($conge);
        $em->flush();
        $data=$normalizer->normalize($conge,'json',['groups'=>'post:read']);

        return new Response(json_encode($data));
    }

    /**
     * @Route("/JSONEmployeAffiche/{idemp}", name="SONEmployeAffiche")
     */

    public function EmployeId(Request $request,$idemp,NormalizerInterface $normalizer){
        $em =$this->getDoctrine()->getManager();
        $employe = $em->getRepository(Employe::class)->find($idemp);
        $json = $normalizer->normalize($employe,'json',['groups'=>'post:read']);
        return new Response(json_encode($json));
    }
    /**
     * @Route("/updateEmployeJSON/{idemp}", name="updateEmployeJSON")
     */
    public function updateEmployeJSON(Request $request,NormalizerInterface $normalizer, $idemp){
        //$content=$request->getContent();
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository(Employe::class)->find($idemp);
        // $employe->setE($request->get('nomfilm'));
        //$employe->setDateSortie(new \DateTime('now'));
        //$employe->setDescriptionf($request->get('descriptionf'));
        //$employe->setFilename($request->get('filename'));

        $employe->setNomEmploye($request->get('nomemp'));
        //$employe->setPrenomEmploye(new \DateTime('now'));
        $employe->setPrenomEmploye ($request->get('prenomemp'));
        $employe->setNumTelEmploye($request->get('numtelemp'));
        $employe->setAdresseEmploye($request->get('adresseemp'));

        $em->persist($employe);
        $em->flush();
        $data=$normalizer->normalize($employe,'json',['groups'=>'post:read']);

        return new Response(json_encode($data));
    }
    /**
     * @Route("/deleteEmployeJSON/{idemp}", name="deleteEmployeJSON")
     */
    public function deleteEmployeJSON(Request $request,NormalizerInterface $normalizer, $idemp){

        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository(Employe::class)->find($idemp);
        $em->remove($employe);
        $em->flush();
        $data=$normalizer->normalize($employe,'json',['groups'=>'post:read']);

        return new Response("Employe deleted successfully".json_encode($data));
    }



    /**
     * @Route("/pdfActionc/", name="pdfActionc")
     */

    public function pdfActionc(\Knp\Snappy\Pdf $snappy)
    {
        $em = $this->getDoctrine()->getManager();

        $conges = $em->getRepository(Conge::class)->findAll();

        // $snappy = $this->get('knp_snappy.pdf');

        $html = $this->renderView( 'conge/afficherc3.html.twig', array(
            'listconge' => $conges,

        ));

        $filename = 'myFirstSnappyPDF';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );




    }

    /**
     * @Route("/deleteCongeJSON/{id}", name="deleteCongeJSON")
     */
    public function deleteCongeJSON(Request $request,NormalizerInterface $normalizer, $id){

        $em = $this->getDoctrine()->getManager();
        $film = $em->getRepository(Conge::class)->find($id);
        $em->remove($film);
        $em->flush();
        //$data=$normalizer->normalize($film,'json',['groups'=>'post:read']);
        $film1 = $em->getRepository(Conge::class)->findAll();
        $json=$normalizer->normalize($film1,'json',['groups'=>'post:read']);
        return new Response(json_encode($json));
        // return new Response(json_encode($data));
    }


}
