<?php

namespace App\Controller;

use App\Entity\Categorie;


use App\Entity\Plat;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use MercurySeries\FlashyBundle\FlashyNotifier;
use phpDocumentor\Reflection\DocBlock\Serializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="categorie")
     */
    public function index(): Response
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }


    ///***********************************partie json*************************************/
    /**
     * @Route("/afficherCatjsonTwig", name="afficherCatjsonTwig")
     */
    public function afficherCatjsonTwig(NormalizerInterface $normalizer)
    {
        $repositoryf= $this->getDoctrine()->getRepository(Categorie::class);
        $categorie= $repositoryf->findAll();
        $json=$normalizer->normalize($categorie,'json',['groups'=>'post:read']);
        // return $this->render('Categorie/allCatJson.html.twig',['data'=> $json]);
        return new Response(json_encode($json));
    }

    ///**
    // * @Route("/addCatJSON", name="addCatJSON")
    // */
    /* public function addCatJSON(Request $request){
         $categorie=new Categorie();
         $nomc=$request->query->get("nomc");
         $em=$this->getDoctrine()->getManager();

         $categorie=setNomc($nomc);

         $em->persist($categorie);
         $em->flush();
         $serializer=new Serializer([new ObjectNormalizer()]);
         $formatted=$serializer->normalize($categorie);
         return new JsonResponse($formatted);


     }
    */
    /**
     * @Route("/addCatJSON/new", name="addCatJSON")
     */
    public function addCatJSON(Request $request,NormalizerInterface $normalizer){
        //$content=$request->getContent();
        $em = $this->getDoctrine()->getManager();
        $cat= new Categorie();
        $cat->setNomc($request->get('nomc'));

        $em->persist($cat);
        $em->flush();
        $data=$normalizer->normalize($cat,'json',['groups'=>'post:read']);

        return new Response(json_encode($data));
    }
    public function CatId(Request $request,$id,NormalizerInterface $normalizer){
        $em =$this->getDoctrine()->getManager();
        $cat = $em->getRepository(Categorie::class)->find($id);
        $json = $normalizer->normalize($cat,'json',['groups'=>'post:read']);
        return new Response(json_encode($json));
    }

    /**
     * @Route("/updateCatJSON/{idc}", name="updateCatJSON")
     */
    public function updateCatJSON(Request $request,NormalizerInterface $normalizer, $idc){
        //$content=$request->getContent();
        $em = $this->getDoctrine()->getManager();
        $cat = $em->getRepository(Categorie::class)->find($idc);
        $cat->setNomc($request->get('nomc'));

        $em->persist($cat);
        $em->flush();
        $data=$normalizer->normalize($cat,'json',['groups'=>'post:read']);

        return new Response(json_encode($data));
    }


    /**
     * @Route("/deleteCatJSON/{idc}", name="deleteCatJSON")
     */
    public function deletePlatJSON(NormalizerInterface $normalizer, $idc){

        $em = $this->getDoctrine()->getManager();
        $cat = $em->getRepository(Categorie::class)->find($idc);
        $em->remove($cat);
        $em->flush();
        $data=$normalizer->normalize($cat,'json',['groups'=>'post:read']);

        return new Response("cat deleted successfully".json_encode($data));
    }

    ///***********************************partie json*************************************/



    /**
     * @Route("/afficherCat", name="afficherCat")
     */
    public function afficherCat()
    {
        $categorie = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
        return $this->render('categorie/afficher.html.twig',array('listcategorie'=>$categorie));

    }
    /**
     * @Route("/addCategorie", name="addCategorie")
     */
    public function addCategorie(FlashyNotifier $flashy, Request $request){
        $categorie= new Categorie();
        $form = $this->createForm(CategorieType::class,$categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();

            //bundle
            $flashy->success('success!!!', 'http://your-awesome-link.com');
            //

            return $this->redirectToRoute('afficherCat');
        }else{
            //bundle
            $flashy->error('oops!!!', 'http://your-awesome-link.com');
            //
        }
        return $this->render("categorie/add.html.twig",array("formCategorie"=>$form->createView()));
    }
    /**
     * @Route("/updateCategorie/{idc}", name="updateCategorie")
     */
    public function updateCategorie(FlashyNotifier $flashy,Request $request,$idc){
        $categorie=  $this->getDoctrine()->getManager()->getRepository(Categorie::class)->find($idc);

        $form = $this->createForm(CategorieType::class,$categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() ){
            $em = $this->getDoctrine()->getManager();
            //$em->persist($student);
            $em->flush();//mise a jour
            //bundle
            $flashy->message('catégorie modifiée!!!', 'http://your-awesome-link.com');
            //
            return $this->redirectToRoute('afficherCat');
        }
        return $this->render("categorie/add.html.twig",array("formCategorie"=>$form->createView()));
    }
    /**
     * @Route("/deleteCategorie/{idc}", name="deleteCategorie")
     */
    public function deleteCateorie(FlashyNotifier $flashy,$idc)
    {
        $Classroom = $this->getDoctrine()->getRepository(Categorie::class)->find($idc);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Classroom);
        $em->flush();
        //bundle
        $flashy->message('catégorie est supprimée!!!', 'http://your-awesome-link.com');
        //
        return $this->redirectToRoute("afficherCat");
    }


}
