<?php

namespace App\Controller;

use App\Entity\Abonne;
use App\Entity\Cinema;

use App\Entity\Film;
use App\Form\CinemaType;
use App\Form\ContactType;
use App\Repository\CinemaRepository;

use Knp\Component\Pager\PaginatorInterface;
use Swift_Message;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CinemaController extends AbstractController
{
    /**
     * @Route("/cinema", name="cinema")
     */
    public function index()
    {
        return $this->render('cinema/index.html.twig', [
            'controller_name' => 'CinemaController',
        ]);
    }

    /**
     * @Route("/afficherCinemajsonTwig", name="afficherCinemajsonTwig")
     */
    public function afficherCinemajsonTwig(NormalizerInterface $normalizer)
    {
        $repositoryf= $this->getDoctrine()->getRepository(Cinema::class);
        $cinema= $repositoryf->findAll();
        $json=$normalizer->normalize($cinema,'json',['groups'=>'post:read']);
        // return $this->render('Cinema/allCinemaJson.html.twig',['data'=> $json]);
        return new Response(json_encode($json));
    }
    /**
     * @Route("/addCinemaJSON/new", name="addCinemaJSON")
     */
    public function addCinemaJSON(Request $request,NormalizerInterface $normalizer){
        //$content=$request->getContent();
        $em = $this->getDoctrine()->getManager();
        $cinema= new Cinema();
        $cinema->setNbr($request->get('nbr'));
        $cinema->setHeurep(new \DateTime('now'));
        $cinema->setDate(new \DateTime('now'));
       // $cinema->setFilm($request->get('film'));
        $em->persist($cinema);
        $em->flush();
        $data=$normalizer->normalize($cinema,'json',['groups'=>'post:read']);

        return new Response(json_encode($data));
    }
    public function CinemaId(Request $request,$id,NormalizerInterface $normalizer){
        $em =$this->getDoctrine()->getManager();
        $cinema = $em->getRepository(Cinema::class)->find($id);
        $json = $normalizer->normalize($cinema,'json',['groups'=>'post:read']);
        return new Response(json_encode($json));
    }
    /**
     * @Route("/updateCinemaJSON/{id}", name="updateCinemaJSON")
     */
    public function updateCinemaJSON(Request $request,NormalizerInterface $normalizer, $id){
        //$content=$request->getContent();
        $em = $this->getDoctrine()->getManager();
        $cinema = $em->getRepository(Cinema::class)->find($id);
        $cinema->setNbr($request->get('nbr'));
        $cinema->setHeurep(new \DateTime('now'));
        $cinema->setDate(new \DateTime('now'));
        // $cinema->setFilm($request->get('film'));
        $em->persist($cinema);
        $em->flush();
        $data=$normalizer->normalize($cinema,'json',['groups'=>'post:read']);

        return new Response(json_encode($data));
    }
    /**
     * @Route("/deleteCinemaJSON/{id}", name="deleteCinemaJSON")
     */
    public function deleteCinemaJSON(Request $request,NormalizerInterface $normalizer, $id){

        $em = $this->getDoctrine()->getManager();
        $cinema = $em->getRepository(Cinema::class)->find($id);
        $em->remove($cinema);
        $em->flush();
        $data=$normalizer->normalize($cinema,'json',['groups'=>'post:read']);

        return new Response("Cinema deleted successfully".json_encode($data));
    }





    /**
     * @Route("/afficherr", name="afficherr")
     */
    public function afficherr(Request $request,PaginatorInterface $paginator)
    {
        $donnes = $this->getDoctrine()->getRepository(Cinema::class)->findAll();

        $cinema=$paginator->paginate(
            $donnes, //on passe les donnees
            $request->query->getInt('page',1),// ajouter numero page en cour sinon 1 par defaut
            2

        );
        return $this->render('cinema/afficher.html.twig',array('liststudent'=>$cinema));
    }
    /**
     * @Route("/affichers", name="affichers")
     */
    public function affichers()
    {
        $cinema = $this->getDoctrine()->getRepository(Cinema::class)->findAll();
        return $this->render('cinema/affichers.html.twig',array('liststudent'=>$cinema));

    }
    /**
     * @Route("/affichercin", name="affichercin")
     */
    public function affichercin()
    {
        $cinema = $this->getDoctrine()->getRepository(Cinema::class)->findAll();
        return $this->render('cinema/afficherb1.html.twig',array('liststudent'=>$cinema));

    }
    /**
     * @Route ("/tri",name="tri")
     */
    public function tri(CinemaRepository $repository , Request $request)
    {
        //$data=$request->get('search');
        $cinema=$repository->OrderByDat();
        return $this->render('cinema/affichers.html.twig',array('liststudent'=>$cinema));
    }
    /**
     * @Route ("/trif",name="trif")
     */
    public function trif(CinemaRepository $repository , Request $request)
    {
        //$data=$request->get('search');
        $cinema=$repository->OrderByName();
        return $this->render('cinema/affichers.html.twig',array('liststudent'=>$cinema));
    }
    /**
     * @Route ("/recherchecinema",name="recherchecinema")
     */
    public function recherchecinema(CinemaRepository $repository , Request $request)
    {
        $data=$request->get('search');
        $cinema=$repository->SearchName($data);
        return $this->render('cinema/affichers.html.twig',array('liststudent'=>$cinema));
    }
    /**
     * @Route ("/recherchecinema1",name="recherchecinema1")
     */
    public function recherchecinema1(CinemaRepository $repository , Request $request)
    {
        $data=$request->get('search');
        $cinema=$repository->SearchName($data);
        return $this->render('cinema/afficherb1.html.twig',array('liststudent'=>$cinema));
    }
    /**
     * @Route("/addCinema", name="addCinema")
     */
    public function addStudent(Request $request){
        $cinema= new Cinema();
        $cinema->setNbr(20);
        $form = $this->createForm(CinemaType::class,$cinema);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ){
            $em = $this->getDoctrine()->getManager();
            $em->persist($cinema);
            $em->flush();
            return $this->redirectToRoute('affichercin');
        }
        return $this->render("cinema/add.html.twig",array("formCinema"=>$form->createView()));
    }
    /**
     * @Route("/updateCinema/{num}", name="updateCinema")
     */
    public function updateCinema(Request $request,$num){
        $cinema=  $this->getDoctrine()->getManager()->getRepository(Cinema::class)->find($num);

        $form = $this->createForm(CinemaType::class,$cinema);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ){
            $em = $this->getDoctrine()->getManager();
            $em->flush();//mise a jour
            return $this->redirectToRoute('affichercin');
        }
        return $this->render("cinema/add.html.twig",array("formCinema"=>$form->createView()));
    }
    /**
     * @Route("/deleteCinema/{num}", name="deleteCinema")
     */
    public function deleteCinema($num)
    {
        $Classroom = $this->getDoctrine()->getRepository(Cinema::class)->find($num);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Classroom);
        $em->flush();
        return $this->redirectToRoute("affichercin");
    }
    /**
     * @Route("/addrese/{num}", name="addrese")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function addrese(Request $request, \Swift_Mailer $mailer,$num ){
        $reservation=  $this->getDoctrine()->getManager()->getRepository(Cinema::class)->find($num);
        $user=  $this->getDoctrine()->getManager()->getRepository(Abonne::class)->find('51');
        $nbr=$reservation->getNbr();
        $reservation->setNbr($nbr-1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();
            $mail=$user->getMailabonne();
            $film=$reservation->getFilm();
            // dd($reseration); // tester le formulaire
            //envoie du mail
        $message=(new \Swift_Message('Reservation film '.$film))
            //attribue l'expediteur
            ->setFrom('mahasegni00@gmail.com')
            // attribue destinataire
            ->setTo($mail)
            //creer le message dans le twig
            ->setBody(
                $this->renderView('email/contact1.html.twig',compact('reservation'))
                ,'text/html'
            );
        //on envoie le message
        $mailer->send($message);

            $this->addFlash('message','Votre reservation a ete bien enregistrer merci pour votre visite ');
            return $this->redirectToRoute('affichers');


    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, \Swift_Mailer $mailer1)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            // On crée le message
            $message = (new Swift_Message('Reclamation employe'))
                // On attribue l'expéditeur
                ->setFrom('mahasegni00@gmail.com')
                // On attribue le destinataire
                ->setTo($contact['email'])
                // On crée le texte avec la vue
                ->setBody(
                    $this->renderView(
                        'email/contact.html.twig', compact('contact')
                    ),
                    'text/html'
                )
            ;
            //envoie le msg
            $mailer1->send($message);

            $this->addFlash('message', 'Votre message a été transmis, nous vous répondrons dans les meilleurs délais.'); // Permet un message flash de renvoi
            return $this->redirectToRoute ('affichercin');
        }
        return $this->render('contact/index.html.twig',['contactForm' => $form->createView()]);
    }
    /**
     * @Route("/contactJson", name="contactJson")
     */
    public function contactJson(Request $request, \Swift_Mailer $mailer1)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            // On crée le message
            $message = (new Swift_Message('Reclamation employe'))
                // On attribue l'expéditeur
                ->setFrom('mahasegni00@gmail.com')
                // On attribue le destinataire
                ->setTo($contact['email'])
                // On crée le texte avec la vue
                ->setBody(
                    $this->renderView(
                        'email/contact.html.twig', compact('contact')
                    ),
                    'text/html'
                )
            ;
            //envoie le msg
            $mailer1->send($message);

            $this->addFlash('message', 'Votre message a été transmis, nous vous répondrons dans les meilleurs délais.'); // Permet un message flash de renvoi
            return $this->redirectToRoute ('affichercin');
        }
        return $this->render('contact/index.html.twig',['contactForm' => $form->createView()]);
    }
    /**
     * @Route("/recherche_cin", name="recherche_cin")
     */
    public function recherche_cin(CinemaRepository $repository , Request $request)
    {

        $beginDate=$request->get('search1');
        $endDate=$request->get('search2');
        $DateAModifiee1 = new \DateTime($beginDate);
        $DateAModifiee2 = new \DateTime($endDate);
        $cinema=$repository->searchdate($DateAModifiee1,$DateAModifiee2);
        return $this->render('cinema/affichers.html.twig',array('liststudent'=>$cinema));

    }
    /**
     * @Route("/recherche_film_date", name="recherche_film_date")
     */
    public function recherche_film_date(CinemaRepository $repository , Request $request)
    {
        $cinema=$repository->OrderBydate();

        return $this->render('cinema/affichers.html.twig',array('liststudent'=>$cinema));

    }

}
