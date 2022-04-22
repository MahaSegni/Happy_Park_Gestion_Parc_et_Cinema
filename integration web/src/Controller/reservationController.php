<?php

namespace App\Controller;
use App\Entity\Cellule;
use App\Entity\Reservation;
use App\Form\CelluleType;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use App\Service\EmailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Validator\Constraints\DateTime;
use Swift_Mailer;
use Swift_Message;



class reservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    protected function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'reservationController',
        ]);
    }

    /**
     * @Route("/affReservation", name="affReservation")
     */
    public function afficheReservation()
    {

        $repository = $this->getDoctrine()->getRepository(reservation::class)->findAll();
        return $this->render('listeReservation.html.twig',array('list'=>$repository));

    }


    /**
     * @Route ("/addReservation" , name="addResrvation")
     * Method({"GET", "POST"})
     */

    public function addReservation(Request $request,\Swift_Mailer $mailer):Response
    {
        $form = $this->createForm(ReservationType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $Res= new Reservation();

            $Res = $form->getData();
            $em=$this->getDoctrine()->getManager();
            $em->persist($Res);
            $em->persist($Res->getIdcell()->setDispo(0));
            $em->flush();
            $message = (new Swift_Message('confirmation Paking'))
                // On attribue l'expéditeur
                ->setFrom('no-reply@happypark.com')
                // On attribue le destinataire
                ->setTo('maha.segni@esprit.tn')
                // On crée le texte avec la vue
                ->setBody('Votre réservation a été bien crée . Merci pour votre confiance')

            ;
            //envoie le msg
            $mailer->send($message);

            $this->addFlash('message', 'Votre message a été transmis, nous vous répondrons dans les meilleurs délais.'); // Permet un message flash de renvoi

            //$mailer->sendEmail($value->getEmail(), $this->render('email.html.twig', ['title' => "New Project", 'content' => "Dear ".$value->getUsername().", You are assigned to a new project ".$project->getName()." starts at ".
            $id=$Res->getIdreservation();
            return $this->redirectToRoute("pdf",['id'=>$Res->getIdreservation()]);

        }
        return $this->render("addRes_front.html.twig",array('form'=>$form->createView()));
    }


    /**
     * @Route("/deleteReservation/{id}", name="deleteReservation")
     */
    public function deleteReservation($id , \Swift_Mailer $mailer)
    {
        $Res = $this->getDoctrine()->getManager()->getRepository(reservation::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Res);
        $em->persist($Res->getIdcell()->setDispo(1));
        $em->flush();
        $message = (new Swift_Message('Annulation Paking'))
            // On attribue l'expéditeur
            ->setFrom('no-reply@happypark.com')
            // On attribue le destinataire
            ->setTo('maha.segni@esprit.tn')
            // On crée le texte avec la vue
            ->setBody('Votre réservation a été annulée pour des certaines raisons , vous pouvez nous contacter pour plus de détails . Merci pour votre confiance')

        ;
        //envoie le msg
        $mailer->send($message);

        $this->addFlash('message', 'Votre message a été transmis, nous vous répondrons dans les meilleurs délais.'); // Permet un message flash de renvoi

        //$mailer->sendEmail($value->getEmail(), $this->render('email.html.twig', ['title' => "New Project", 'content' => "Dear ".$value->getUsername().", You are assigned to a new project ".$project->getName()." starts at ".
        $id=$Res->getIdreservation();
        return $this->redirectToRoute("affReservation");

    }


    /**
     * @Route("/pdf/{id}", name="pdf" ,methods={"GET"})
     */
    public function pdf(ReservationRepository $repo,$id) : Response
    {

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        $reservation = $repo->find($id);

        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('myPdf.html.twig',['reservation'=> $reservation]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);

    }



    /**
     * @Route("/recherche", name="recherche")
     */
    public function recherche(ReservationRepository $repository , Request $request)
    {

        $beginDate=$request->get('search1');
        $endDate=$request->get('search2');
        $DateAModifiee1 = new \DateTime($beginDate);
        $DateAModifiee2 = new \DateTime($endDate);
        $reservation=$repository->findItemsCreatedBetweenTwoDates($DateAModifiee1,$DateAModifiee2);
        return $this->render('listeReservation.html.twig',array('list'=>$reservation));

    }

    /**
     * @Route("/tri", name="tri")
     */
    public function tri(ReservationRepository $repository , Request $request)
    {

        $reservation=$repository->OrderByNameQB();
        return $this->render('listeReservation.html.twig',array('list'=>$reservation));

    }



}
