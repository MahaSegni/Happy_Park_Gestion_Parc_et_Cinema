<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Plat;
use App\Form\CategorieType;
use App\Form\PlatType;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PlatController extends AbstractController
{
    /**
     * @Route("/plat", name="plat")
     */
    public function index(): Response
    {
        return $this->render('plat/index.html.twig', [
            'controller_name' => 'PlatController',
        ]);
    }
    /**
     * @Route("/afficherPlat", name="afficherPlat")
     */
    public function afficherp()
    {
        $plat = $this->getDoctrine()->getRepository(Plat::class)->findAll();
        return $this->render('plat/afficherPlat.html.twig',array('listplat'=>$plat));

    }
    /**
     * @Route("/addPlat", name="addPlat")
     */
    public function addPlat(FlashyNotifier $flashy,Request $request){
        $plat= new Plat();
        $form = $this->createForm(PlatType::class,$plat);
        $form->handleRequest($request);
        if ($form->isSubmitted()  && $form->isValid()){
            $em = $this->getDoctrine()->getManager();

            // ----------------------------------image uploading starts here-------------------------------------
            $uploadedFile = $form['imagep']->getData();
            if ($uploadedFile) {

                $destination = $this->getParameter('kernel.project_dir').'/public/images/productImageUploads/';

                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);

                $newFilename = $originalFilename.'-'.$this->generateUniqueFileId().'.'.$uploadedFile->guessExtension();


                $uploadedFile->move(
                    $destination,
                    $newFilename
                );

                $plat->setImagep($newFilename);
            }
            // ----------------------------------image uploading ends here-------------------------------------

            $em->persist($plat);
            $em->flush();
            //bundle
            $flashy->success('success!!!', 'http://your-awesome-link.com');
            //
            return $this->redirectToRoute('afficherPlat');

        }else {
            //bundle
            $flashy->error('oops!!!', 'http://your-awesome-link.com');
            //
        }
        return $this->render("plat/addPlat.html.twig",array("formPlat"=>$form->createView()));
    }

    /**
     * @return string
     */
    private function generateUniqueFileId()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }

    /**
     * @Route("/updatePlat/{idp}", name="updatePlat")
     */
    public function updatePlat(FlashyNotifier $flashy,Request $request,$idp){
        $plat=  $this->getDoctrine()->getManager()->getRepository(Plat::class)->find($idp);
        $form = $this->createForm(PlatType::class,$plat);
        $form->handleRequest($request);
        if ($form->isSubmitted() ){
            $em = $this->getDoctrine()->getManager();

            // ----------------------------------image uploading starts here-------------------------------------
            $uploadedFile = $form['imagep']->getData();
            if ($uploadedFile) {

                $destination = $this->getParameter('kernel.project_dir').'/public/images/productImageUploads/';

                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);

                $newFilename = $originalFilename.'-'.$this->generateUniqueFileId().'.'.$uploadedFile->guessExtension();


                $uploadedFile->move(
                    $destination,
                    $newFilename
                );

                $plat->setImagep($newFilename);
            }
            // ----------------------------------image uploading ends here-------------------------------------
            //$em->persist($student);
            $em->flush();//mise a jour
            //bundle
            $flashy->success('plat est modifié!!!', 'http://your-awesome-link.com');
            //
            return $this->redirectToRoute('afficherPlat');
        }
        return $this->render("plat/addPlat.html.twig",array("formPlat"=>$form->createView()));
    }

    /**
     * @Route("/deletePlat/{idp}", name="deletePlat")
     */
    public function delete(FlashyNotifier $flashy,$idp)
    {
        $Classroom = $this->getDoctrine()->getRepository(Plat::class)->find($idp);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Classroom);
        $em->flush();
        //bundle
        $flashy->success('plat est supprimé!!!', 'http://your-awesome-link.com');
        //
        return $this->redirectToRoute("afficherPlat");
    }

    /**
     * @Route("/afficherPlatFront", name="afficherPlatFront")
     */
    public function afficherPlatFront()
    {
        $categorie = $this->getDoctrine()->getRepository(Categorie::class)->findAll() ;
        $plat = $this->getDoctrine()->getRepository(Plat::class)->findAll();
        $coutPlatc=   $this->getDoctrine()->getManager()->getRepository(Plat::class) ->coutPlatParCategorie();

        return $this->render('plat/afficherPlatFront.html.twig',array('listplat'=>$plat,
                'listcategorie' => $categorie,  'coutPlatc' =>  $coutPlatc));

    }

    /**
     * @Route("/showFront/{idp}", name="showFront")
     */
    public function showPlatByIdFront($idp):Response
    {
        $repo=$this->getDoctrine()->getRepository(Plat::class);
        $plat=$repo->find($idp);

        return $this->render('plat/showFront.html.twig',[
            'plat'=>$plat,
        ]);

    }

    /**
     * @Route("/TriParategorie/{idc}", name="TriParategorie")
     */
    public function TriParategorie(Request $request,$idc){

        $st =  $this->getDoctrine()->getManager()->getRepository(Plat::class) ;

        $filtre= $st->findBy(array("categorie" => $idc ));
        $categorie = $this->getDoctrine()->getRepository(Categorie::class)->findAll() ;

        $coutPlatc=  $st->coutPlatParCategorie();

        return $this->render('plat/afficherPlatFront.html.twig',array('listplat'=>$filtre,
            'listcategorie' => $categorie , 'coutPlatc' =>  $coutPlatc));

    }

    /**
     * @Route("/CalculPlatParCategorie/{idc}", name="CalculPlatParCategorie")
     */
    public function CalculPlatParCategorie(Request $request,$idc){



       // return $filtre;

    }

    ///***********************************partie json*************************************/
    /**
     * @Route("/afficherPlatjsonTwig", name="afficherPlatjsonTwig")
     */
    public function afficherPlatjsonTwig(NormalizerInterface $normalizer)
    {
        $repositoryf= $this->getDoctrine()->getRepository(Plat::class);
        $plat= $repositoryf->findAll();
        $json=$normalizer->normalize($plat,'json',['groups'=>'post:read']);
        // return $this->render('Plat/allPlatJson.html.twig',['data'=> $json]);
        return new Response(json_encode($json));
    }


    /**
     * @Route("/addPlatJSON/new", name="addPlatJSON")
     */
    public function addPlatJSON(Request $request,NormalizerInterface $normalizer){

        /*$em = $this->getDoctrine()->getManager();

          $plat = new Plat();
          $nomp = $request->query->get("nomp");
          $prixp = $request->query->get("prixp");
          $categorie_id = $request->query->get("idc");
          $imagep = $request->query->get("imagep");
          $description = $request->query->get("description");

          $plat->setNomp($nomp);
          $plat->setPrixp($prixp);
          $plat->setCategorie($this->getDoctrine()->getManager()->getRepository(Categorie::class)->find($categorie_id));
          $plat->setImagep($imagep);
          $plat->setDescription($description);

          $em->persist($plat);
          $em->flush();
          $data=$normalizer->normalize($plat,'json',['groups'=>'post:read']);

          return new Response(json_encode($data));
        */
        //$content=$request->getContent();
        $em = $this->getDoctrine()->getManager();
        $cat= new Plat();
        $cat->setNomp($request->get('nomp'));
        $cat->setPrixp($request->get('prixp'));
        $cat->setCategorie($request->get('categorie'));
        $cat->setImagep($request->get('imagep'));
        $cat->setDescription($request->get('description'));

        $em->persist($cat);
        $em->flush();
        $data=$normalizer->normalize($cat,'json',['groups'=>'post:read']);

        return new Response(json_encode($data));

    }


    public function PlatId(Request $request,$id,NormalizerInterface $normalizer){

        $em =$this->getDoctrine()->getManager();
        $plat = $em->getRepository(Categorie::class)->find($id);
        $json = $normalizer->normalize($plat,'json',['groups'=>'post:read']);
        return new Response(json_encode($json));
    }

    /**
     * @Route("/updatePlatJSON/{idp}", name="updatePlatJSON")
     */
    public function updatePlatJSON(Request $request,NormalizerInterface $normalizer, $idp){
        //$content=$request->getContent();
        $em = $this->getDoctrine()->getManager();
        $plat = $em->getRepository(Plat::class)->find($idp);
        $plat->setNomp($request->get('nomp'));
        $plat->setPrixp($request->get('prixp'));
        $plat->setCategorie($request->get('categorie_id'));
        $plat->setImagep($request->get('imagep'));
        $plat->setDescription($request->get('description'));

        $em->persist($plat);
        $em->flush();
        $data=$normalizer->normalize($plat,'json',['groups'=>'post:read']);

        return new Response(json_encode($data));
    }

    /**
     * @Route("/deletePlatJSON/{idp}", name="deletePlatJSON")
     */
    public function deletePlatJSON(NormalizerInterface $normalizer, $idp){

        $em = $this->getDoctrine()->getManager();
        $plat = $em->getRepository(Plat::class)->find($idp);
        $em->remove($plat);
        $em->flush();
        $data=$normalizer->normalize($plat,'json',['groups'=>'post:read']);

        return new Response("plat deleted successfully".json_encode($data));
    }

    ///***********************************partie json*************************************/

}