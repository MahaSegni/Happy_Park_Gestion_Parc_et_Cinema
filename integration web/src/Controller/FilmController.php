<?php

namespace App\Controller;

use App\Entity\Categorief;
use App\Entity\Film;
use App\Form\FilmType;
use App\Form\FilmuType;
use App\Repository\CategoriefRepository;
use App\Repository\FilmRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

class FilmController extends AbstractController
{
    /**
     * @Route("/film", name="film")
     */
    public function index()
    {
        return $this->render('film/index.html.twig', [
            'controller_name' => 'FilmController',
        ]);
    }
    /**
     * @Route("/afficherf", name="afficherf")
     */
    public function afficherFilm()
    {
        $film= $this->getDoctrine()->getRepository(Film::class)->findAll();
        return $this->render('film/afficherfb11.html.twig',array('listfilm'=>$film));

    }
    /**
     * @Route("/afficherjson", name="afficherjson")
     */
    public function afficherjson(FilmRepository $repositoryf, NormalizerInterface $normalizer)
    {

        $film= $repositoryf->findAll();
        $json=$normalizer->normalize($film,'json',['groups'=>'post:read']);
        return new Response(json_encode($json));
    }

    /**
     * @Route("/addFilmJson", name="addFilmJson")
     */
    public function addFilmJson(Request $request,SerializerInterface $serializer){
$content=$request->getContent();
$data=$serializer->deserialize($content,Film::class,'json');
        $em = $this->getDoctrine()->getManager();
   $em->persist($data);
   $em->flush();
   return new response('film added');
    }
    /**
     * @Route("/afficherjsonTwig", name="afficherjsonTwig")
     */
    public function afficherjsonTwig(NormalizerInterface $normalizer)
    {
        $repositoryf= $this->getDoctrine()->getRepository(Film::class);
        $film= $repositoryf->findAll();
        $json=$normalizer->normalize($film,'json',['groups'=>'post:read']);
       // return $this->render('Film/allFilmJson.html.twig',['data'=> $json]);
        dump($film);
        die;
        return new Response(json_encode($json));

    }
    /**
     * @Route("/addJSON/new", name="addJSON")
     */
    public function addJSON(Request $request,NormalizerInterface $normalizer){
        //$content=$request->getContent();
        $em = $this->getDoctrine()->getManager();
        $film= new Film();
        $film->setNomFilm($request->get('nomfilm'));
        $film->setDateSortie(new \DateTime('now'));
        $film->setDescriptionf($request->get('descriptionf'));
        $film->setFilename($request->get('filename'));

        $em->persist($film);
        $em->flush();
        $data=$normalizer->normalize($film,'json',['groups'=>'post:read']);

        return new Response(json_encode($data));
    }
    /**
     * @Route("/afficherCatejsonTwig", name="afficherCatejsonTwig")
     */
    public function afficherCatejsonTwig(NormalizerInterface $normalizer)
    {
        $repositoryf= $this->getDoctrine()->getRepository(Categorief::class);
        $cinema= $repositoryf->findAll();
        $json=$normalizer->normalize($cinema,'json',['groups'=>'post:read']);
        // return $this->render('Cinema/allCinemaJson.html.twig',['data'=> $json]);
        return new Response(json_encode($json));
    }
    /**
     * @Route("/searchFilmJSON/{nomFilm}", name="searchFilmJSON")
     */
    public function searchFilmJSON(Request $request,$nomFilm,NormalizerInterface $normalizer,FilmRepository $repository){
       // $em =$this->getDoctrine()->getManager()->getRepository(Film::class);
        $film = $repository->SearchNamef($nomFilm);
        $json = $normalizer->normalize($film,'json',['groups'=>'post:read']);
        return new Response(json_encode($json));
    }
    /**
     * @Route("/searchCateJSON/{nomFilm}", name="searchCateJSON")
     */
    public function searchCateJSON(Request $request,$nomFilm,NormalizerInterface $normalizer,CategoriefRepository $repository){
        // $em =$this->getDoctrine()->getManager()->getRepository(Film::class);
        $film = $repository->SearchName($nomFilm);
        $json = $normalizer->normalize($film,'json',['groups'=>'post:read']);
        return new Response(json_encode($json));
    }
    /**
     * @Route("/updateFilmJSON/{id_film}", name="updateFilmJSON")
     */
    public function updateFilmJSON(Request $request,NormalizerInterface $normalizer, $id_film){
        //$content=$request->getContent();
        $em = $this->getDoctrine()->getManager();
       $film = $em->getRepository(Film::class)->find($id_film);
        $film->setIdFilm($request->get('id_film'));
        $film->setNomFilm($request->get('nomfilm'));

        $film->setDescriptionf($request->get('descriptionf'));

        $em->persist($film);
        $em->flush();
        $data=$normalizer->normalize($film,'json',['groups'=>'post:read']);

        return new Response(json_encode($data));
    }
    /**
     * @Route("/deleteFilmJSON/{id}", name="deleteFilmJSON")
     */
    public function deleteFilmJSON(Request $request,NormalizerInterface $normalizer, $id){

        $em = $this->getDoctrine()->getManager();
        $film = $em->getRepository(Film::class)->find($id);
        $em->remove($film);
        $em->flush();
        //$data=$normalizer->normalize($film,'json',['groups'=>'post:read']);
        $film1 = $em->getRepository(Film::class)->findAll();
        $json=$normalizer->normalize($film1,'json',['groups'=>'post:read']);
        return new Response(json_encode($json));
       // return new Response(json_encode($data));
    }
    /**
     * @Route("/addFilm", name="addFilm")
     */
    public function addFilm(Request $request ){
        $film= new Film();
        $editForm = $this->createForm(FilmType::class,$film);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()  ){
            $file=$film->getFilename();
            //dd($file);
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $filen= $originalFilename.'.'.'jpg';
            $em = $this->getDoctrine()->getManager();
            $film->setFilename($filen);
            $em->persist($film);
            $em->flush();
            return $this->redirectToRoute('afficherf');
        }
        return $this->render("film/addFilm.html.twig",array("formFilm"=>$editForm->createView()));
    }



    /**
     * @Route("/updateFilm/{id_film}", name="updateFilm")
     * @param Request $request
     * @param $id_film
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function updateFilm(Request $request,$id_film){
        $film=  $this->getDoctrine()->getManager()->getRepository(Film::class)->find($id_film);
        $form = $this->createForm(FilmuType::class,$film);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()  ){
            $em = $this->getDoctrine()->getManager();

            $em->flush();//mise a jour
            return $this->redirectToRoute('afficherf');
        }
        return $this->render("film/updateFilm.html.twig",array("formFilm"=>$form->createView()));
    }
    /**
     * @Route("/deletef/{id_film}", name="deletef")
     */
    public function deleteFilm($id_film)
    {
        $film = $this->getDoctrine()->getRepository(Film::class)->find($id_film);
        $em=$this->getDoctrine()->getManager();
        $em->remove($film);
        $em->flush();
        return $this->redirectToRoute("afficherf");
    }
    /**
     * @Route ("/recherchefilm",name="recherchefilm")
     */
    public function recherchefilm(FilmRepository $repository , Request $request)
    {
        $data=$request->get('search');
        $film=$repository->SearchNamef($data);
        return $this->render('film/afficherfb11.html.twig',array('listfilm'=>$film));
    }
}
