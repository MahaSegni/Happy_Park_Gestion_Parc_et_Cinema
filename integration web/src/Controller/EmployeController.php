<?php

namespace App\Controller;

use App\Entity\employe;


use App\Form\EmployeType;
use App\Repository\CongeRepository;
use App\Repository\EmployeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EmployeController extends AbstractController
{
    /**
     * @Route("/employe", name="employe")
     */
    public function index():Response
    {
        return $this->render('employe/index.html.twig', [
            'controller_name' => 'EmployeController',
        ]);
    }
    /**
     * @Route("/afficher", name="afficher")
     */
    public function affichers()
    {
        $employe = $this->getDoctrine()->getRepository(employe::class)->findAll();
        return $this->render('employe/afficher.html.twig',array('listemploye'=>$employe));

    }

    /**
     * @Route("/addEmploye", name="addEmploye")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function addEmploye(Request $request){
        $employe= new employe();
        $form = $this->createForm(EmployeType::class,$employe);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid () ){
            $em = $this->getDoctrine()->getManager();
            $em->persist($employe);
            $em->flush();
            return $this->redirectToRoute('afficher');
        }
        return $this->render("employe/add.html.twig",array("formEmploye"=>$form->createView()));
    }

    /**
     * @Route("/updateEmploye/{idemp}", name="updateEmploye")
     * @param Request $request
     * @param $idemp
     * @return RedirectResponse|Response
     */
    public function updateEmploye(Request $request,$idemp){
        $employe=  $this->getDoctrine()->getManager()->getRepository(employe::class)->find($idemp);

        $form = $this->createForm(EmployeType::class,$employe);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid () ){
            $em = $this->getDoctrine()->getManager();
            //$em->persist($student);
            $em->flush();//mise a jour
            return $this->redirectToRoute('afficher');
        }
        return $this->render("employe/add.html.twig",array("formEmploye"=>$form->createView()));
    }

    /**
     * @Route("/deleteem/{idemp}", name="deleteem")
     * @param $idemp
     * @return RedirectResponse
     */
    public function deleteem($idemp)
    {
        $Employe = $this->getDoctrine()->getRepository(employe::class)->find($idemp);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Employe);
        $em->flush();
        return $this->redirectToRoute("afficher");
    }
    /**
     * @Route ("/searchemp",name="searchemp")
     */
    public function searchemp(CongeRepository $repository , Request $request)
    {
        $data=$request->get('search');
        $conge=$repository->Searchid($data);
        return $this->render('conge/search.html.twig',array('listconge'=>$conge));
    }



    /**
     * @Route("/afficherjsonTwigEmploye", name="afficherjsonTwigEmploye")
     */
    public function afficherjsonTwigEmploye(NormalizerInterface $normalizer)
    {
        $repositoryf= $this->getDoctrine()->getRepository(Employe::class);
        $employe= $repositoryf->findAll();
        $json=$normalizer->normalize($employe,'json',['groups'=>'post:read']);
        // return $this->render('Film/allFilmJson.html.twig',['data'=> json]);
        return new Response(json_encode($json));
    }


    /**
     * @Route("/addJSONEmploye/new", name="addJSONEmploye")
     */
    public function addJSONEmploye(Request $request,NormalizerInterface $normalizer){
        //$content=$request->getContent();
        $em = $this->getDoctrine()->getManager();
        $employe= new Employe();
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
     * @Route("/pdfAction/", name="pdfAction")
     */

    public function pdfAction(\Knp\Snappy\Pdf $snappy)
    {
        $em = $this->getDoctrine()->getManager();

        $employes = $em->getRepository(Employe::class)->findAll();

        // $snappy = $this->get('knp_snappy.pdf');

        $html = $this->renderView( 'employe/afficher2.html.twig', array(
            'listemploye' => $employes,

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

}
