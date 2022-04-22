<?php

namespace App\Controller;

use App\Entity\Cellule;
use App\Form\CelluleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

use Symfony\Component\Serializer\SerializerInterface;

class CelluleController extends AbstractController
{
    /**
     * @Route("/cellule", name="cellule")
     */
    public function index(): Response
    {
        return $this->render('cellule/index.html.twig', [
            'controller_name' => 'CelluleController',
        ]);
    }

    /**
     * @Route("/ListeCellule", name="ListeCellule")
     */

    public function ListeCellule(){
        $repo=$this->getDoctrine()->getRepository(Cellule::class)->findAll();
        return $this->render( "listeCellule.html.twig" ,array('liste'=>$repo));

    }

    /**
     * @Route ("/addCellule" , name="addCellule")
     */

    public function addCellule(\Symfony\Component\HttpFoundation\Request $request)
    {
        $Res= new Cellule();
        $form = $this->createForm(CelluleType::class,$Res);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($Res);
            $em->flush();
            return $this->redirectToRoute("ListeCellule");
        }
        return $this->render("AddCellule.html.twig",array('formCellule'=>$form->createView()));
    }

    /**
     * @Route("/updateCellule/{idcellule}", name="updateCellule")
     */
    public function updateCellule(Request $request,$idcellule){
        $Res=  $this->getDoctrine()->getManager()->getRepository(Cellule::class)->find($idcellule);

        $form = $this->createForm(CelluleType::class,$Res);
        $form->handleRequest($request);
        if ($form->isSubmitted() ){
            $em = $this->getDoctrine()->getManager();
            //$em->persist($student);
            $em->flush();//mise a jour
            return $this->redirectToRoute('ListeCellule');
        }
        return $this->render("updateCellule.html.twig",array("formCellule"=>$form->createView()));
    }

    /**
     * @Route("/deleteCellule/{id}", name="deleteCellule")
     */
    public function deleteCellule($id)
    {
        $Res = $this->getDoctrine()->getManager()->getRepository(Cellule::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Res);
        $em->flush();
        return $this->redirectToRoute("ListeCellule");
    }

    /**
     * @Route("/afficherjsonCellule", name="afficherjsonCellule")
     */
    public function afficherjson( NormalizerInterface $normalizer)
    {

        $repo=$this->getDoctrine()->getRepository(Cellule::class)->findAll();
        $json=$normalizer->normalize($repo,'json',['groups'=>'post:read']);
        return new Response(json_encode($json));
    }

    /**
     * @Route ("/addCelluleJson/new" , name="addCelluleJson")
     *
     */


    public function addCelluleJson(Request $request,NormalizerInterface $normalizer)
    {
        //$content=$request->getContent();
        $em = $this->getDoctrine()->getManager();
        $cellule = new Cellule();
        $cellule->setIdcellule($request->get('idCellule'));

        $cellule->setDispo($request->get('dispo'));
        //$film->setFilename($request->get('filename'));

        $em->persist($cellule);
        $em->flush();
        $data = $normalizer->normalize($cellule, 'json', ['groups' => 'post:read']);

        return new Response(json_encode($data));
    }
}
