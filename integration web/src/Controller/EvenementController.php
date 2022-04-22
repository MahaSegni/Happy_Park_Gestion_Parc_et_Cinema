<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Evenement;
use App\Entity\User;
use App\Form\CommentType;
use App\Form\EvenementType;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Twilio\Rest\Client;

class EvenementController extends AbstractController
{

    /**
     * @Route("/event", name="eventIndex")
     */
    public function showAction(Request $request)
    {
        $evenement = $this->getDoctrine()->getRepository(Evenement::class)->findAll();
        $comment1 = $this->getDoctrine()->getRepository(Comment::class)->findAll();

        $comment= new Comment();
        $form = $this->createForm(CommentType::class,$comment);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid ()  ){
            $em = $this->getDoctrine()->getManager();
            $finduser=  $this->getDoctrine()->getManager()->getRepository(User::class)->find('5');
            $comment->setUser($finduser);
            $em->persist($comment);
            $em->flush();
            return $this->redirectToRoute('eventIndex');
        }
        return $this->render("Event/Front/afficher.html.twig",array("formcomment"=>$form->createView(),'listevenement'=>$evenement,'listcomment'=>$comment1));
    }
    /**
     * @Route("/eventBack", name="eventBack")
     */
    public function showBackAction()
    {
        $evenement = $this->getDoctrine()->getRepository(Evenement::class)->findAll();
        $comment = $this->getDoctrine()->getRepository(Comment::class)->findAll();
        return $this->render('Event/Back/afficher.html.twig',array('listevenement'=>$evenement,'listcomment'=>$comment));

    }
    /**
     * @Route("/addEvent", name="AjoutEvent")
     */
    public function addEventAction(Request $request){
        $evenement= new Evenement();
        $form = $this->createForm(EvenementType::class,$evenement);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid ()  ){
            $em = $this->getDoctrine()->getManager();
            $em->persist($evenement);
            $em->flush();
            return $this->redirectToRoute('eventBack');
        }
        return $this->render("Event/Back/add.html.twig",array("formevenement"=>$form->createView()));
    }
    /**
     * @Route("/updateEvenement/{id}", name="updateEvenement")
     */
    public function updatEeventAction(Request $request,$id){
        $evenement=  $this->getDoctrine()->getManager()->getRepository(evenement::class)->find($id);

        $form = $this->createForm(EvenementType::class,$evenement);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid () ){
            $em = $this->getDoctrine()->getManager();
            $em->flush();//mise a jour
            return $this->redirectToRoute('eventBack');
        }
        return $this->render("Event/Back/add.html.twig",array("formevenement"=>$form->createView()));
    }
    /**
     * @Route("/delet/{id}", name="deleteEvenement")
     */
    public function deleteEventAction($id)
    {
        $evenement = $this->getDoctrine()->getRepository(evenement::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($evenement);
        $em->flush();
        return $this->redirectToRoute("eventBack");
    }
    /**
     * @Route("/ParticiperEv/{id}", name="ParticiperEv")
     */
    public function ParticiperAction($id, \Swift_Mailer $mailer)
    {
        $em=$this->getDoctrine()->getManager();
        $findevent=  $this->getDoctrine()->getManager()
            ->getRepository(evenement::class)->find($id);

        $finduser=  $this->getDoctrine()->getManager()->getRepository(User::class)->find('5');
        if($finduser->getnomEvent()==""){
            $nomevent=$findevent->getNomEvent();
            $findevent->setCapacite($findevent->getCapacite()-1);
            $em->persist($findevent);
            $finduser->setNomEvent($nomevent);
            $em->persist($finduser);
            $em->flush();
            $email = $finduser->getEmail();
            $message=(new \Swift_Message('Participation a '. $nomevent))
                ->setFrom('mahasegni00@gmail.com')
                ->setTo($email)
                ->setBody('participation avec succée a notre évènement '.$nomevent);
            $mailer->send($message);
            $sid = "ACe19f6c0a4c86acf138ab451e7d813d6e";
            $token = "99965de79b5710509a4e766cad045706";
            $client = new Client($sid, $token);
            $client->messages->create(
                '+216 52 645 760',
                array(
                    'from' => '+1 727 945 6347',
                    'body' => "vous avez participer a l'évenement ".$nomevent
                ));
            return $this->redirectToRoute('eventIndex');

        }
        return $this->redirectToRoute("eventIndex");
    }
    /**
     * @Route("/event/QuitterEv/{id}", name="QuitterEv")
     */
    public function QuitterEvAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $findevent=  $this->getDoctrine()->getManager()
            ->getRepository(evenement::class)->find($id);
        $finduser=  $this->getDoctrine()->getManager()
            ->getRepository(User::class)->find('5');
        if($finduser->getnomEvent()!=""){
            $findevent->setCapacite($findevent->getCapacite()+1);
            $em->persist($findevent);
            $finduser->setNomEvent("");
            $em->persist($finduser);
            $em->flush();}

        return $this->redirectToRoute("eventIndex");
    }
    /**
     * @Route("/pdf/{nom}/{Date}/{Date_Fin}/{capacite}/{emplacement}", name="event_pdf")
     */
    public function pdfAction(Request $request,$nom,$Date,$Date_Fin,$capacite,$emplacement)
    {
        $snappy = $this->get('knp_snappy.pdf');
        $html = $this->render('Event/Back/pdf.html.twig', [
            'nom' => $nom,
            'Date' => $Date,
            'Date_Fin' => $Date_Fin,
            'capacite' => $capacite,
            'emplacement' => $emplacement
        ]);
        $filename = 'SnappyPDF';
        return new Response(
            $snappy->getOutputFromHtml($html),200,array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }

    /**
     * @Route("/pdf/{nom}/{Date}/{Date_Fin}/{capacite}/{emplacement}", name="event_pdf")
     */

    public function pdf(Request $request,$nom,$Date,$Date_Fin,$capacite,$emplacement) : Response
    {

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');


        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->render('Event/Back/pdf.html.twig', [
            'nom' => $nom,
            'Date' => $Date,
            'Date_Fin' => $Date_Fin,
            'capacite' => $capacite,
            'emplacement' => $emplacement
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $dompdf->stream("Event1.pdf", [
            "Attachment" => false
        ]);

    }
    /**
     * @Route("/allEvents", name="allEvents")
     */
    public function allEvents()
    {
        $event = $this->getDoctrine()->getManager()
            ->getRepository(evenement::class)
            ->findAll();
        $datas = array();
        foreach ($event as $key => $ev)
        {
            $datas[$key]['id'] = $ev->getId();
            $datas[$key]['name'] = $ev->getNomEvent();
            $datas[$key]['c'] = $ev->getCapacite();
            $datas[$key]['emplacement'] = $ev->getEmplacement();

        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($datas);
       // return new JsonResponse($formatted);
        return new Response(json_encode($formatted));
    }
    /**
     * @Route("/findeventAction/{id}", name="findeventAction")
     */
    public function findeventAction($id)
    {
        $findevent=  $this->getDoctrine()->getManager()
            ->getRepository(Evenement::class)->findBy(array('id'=>$id));
        $datas = array();
        foreach ($findevent as $key => $ev)
        {
            $datas[$key]['name'] = $ev->getNomEvent();
            $datas[$key]['capacite'] = $ev->getCapacite();
            $datas[$key]['emplacement'] = $ev->getEmplacement();

        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($datas);
        return new JsonResponse($formatted);
    }
    /**
     * @Route("/addevent/new", name="addevent")
     */
    public function addevent(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $event = new Evenement();
        $event->setNomEvent($request->get('name'));
        $event->setCapacite($request->get('capacity'));
        $event->setEmplacement($request->get('emplacement'));
        $em->persist($event);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($event);
        return new Response(json_encode($formatted));
    }
}
