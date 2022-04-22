<?php

namespace App\Controller;


use App\Entity\Abonne;
use App\Entity\Reclamation;
use App\Form\ReclamationType2;
use App\Repository\ReclamationRepository;
use Swift_Mailer;
use Swift_Message;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation", name="reclamation")
     */
    public function displayAction(): Response
    {
        $reclamation = $this->getDoctrine()->getManager()->getRepository(Reclamation::class)->findAll();
        return $this->render('reclamation/index.html.twig', array(
            'reclamation' => $reclamation,
        ));
    }

    /**
     * @param ReclamationRepository $repository
     * @Route("/list", name="list")
     */
    public function list1(ReclamationRepository $repository)
    {
        $reclamation = $repository->findAll();
        return $this->render('reclamation/list', [
            'reclamation' => $reclamation,
        ]);
    }

    /**
     * @param ReclamationRepository $repository
     * @Route("/listrec", name="listrec")
     */
    public function list(ReclamationRepository $repository)
    {
        $reclamation = $repository->findAll();
        return $this->render('reclamation/listrec', [
            'reclamation' => $reclamation,
        ]);
    }

    /**
     * @Route("/supprec/{idrec}", name="supprec")
     */
    public function supprec($idrec)
    {
        $reclamation = $this->getDoctrine()->getRepository(reclamation::class)->find($idrec);
        $em = $this->getDoctrine()->getManager();
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute("listrec");
    }

    /**
     * @Route("/addrec", name="addrec")
     */
    public function addrec(Request $request, Swift_Mailer $mailer)
    {
        $reclamation = new reclamation();
        $form = $this->createForm(ReclamationType2::class, $reclamation);
        $form->handleRequest($request);
        $description = $form->get('description')->getData();
        $field = $form->get('Field')->getData();
        $abonne = $form->get('abonne')->getData();
        if ($form->isSubmitted() ) {

            $servername = "localhost";//Server Name
            $username = "root";//Server User Name
            $password = "";//Server Password
            $dbname = "happy";//Database Name

//Create DB Connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $rating = $_POST["rating"];

                $sql = "INSERT INTO reclamation (description,field,rate,abonne_id) VALUES ('$description','$field','$rating','$abonne')";

                if (mysqli_query($conn, $sql)) {
                    echo "New Rate addedddd successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                mysqli_close($conn);
            }
            $message = (new Swift_Message('confirmation reclamation'))
                // On attribue l'expéditeur
                ->setFrom('no-reply@happypark.com')
                // On attribue le destinataire
                ->setTo('maha.segni@esprit.tn')
                // On crée le texte avec la vue
                ->setBody(
                    $this->renderView(
                        'reclamation/notificationmail', compact('reclamation')
                    ),
                    'text/html'
                )
            ;
            //envoie le msg
            $mailer->send($message);

            $this->addFlash('message', 'Votre message a été transmis, nous vous répondrons dans les meilleurs délais.'); // Permet un message flash de renvoi

            return $this->redirectToRoute ('addrec');


        }
        return $this->render("reclamation/add.html.twig", array("form" => $form->createView()));
    }

    /**
     * @Route("/search ", name="search")
     */
    public function search(Request $request, ReclamationRepository $repository)
    {
        $field = $request->get('search');
        $reclamation = $repository->findStudentByfield($field);
        return $this->render('reclamation/listrec', [
            'reclamation' => $reclamation,
        ]);

    }

    /**
     * @param ReclamationRepository $repository
     * @Route("/trirec", name="trirec")
     */
    public function tri(ReclamationRepository $repository, Request $request)
    {
        $reclamation = $repository->OrderByDateQB();
        return $this->render('reclamation/listrec', [
            'reclamation' => $reclamation,
        ]);
    }
    /**
     * @Route("/notif", name="notif")
     */
    public function notif(Request $request, Swift_Mailer $mailer)
    {
        // On crée le message
        $message = (new Swift_Message('confirmation reclamation'))
            // On attribue l'expéditeur
            ->setFrom('no-reply@happypark.com')
            // On attribue le destinataire
            ->setTo('farahbenmahmoud.esp1@gmail.com')
            // On crée le texte avec la vue
            ->setBody(
                $this->renderView(
                    'reclamation/notificationmail', compact('notif')
                    ),
                'text/html'
            )
        ;
        //envoie le msg
        $mailer->send($message);

        $this->addFlash('message', 'Votre message a été transmis, nous vous répondrons dans les meilleurs délais.'); // Permet un message flash de renvoi
        return $this->redirectToRoute ('addrec');


    }

    /**
     * @Route("/statistiques",name="statistiques")
     * @param ReclamationRepository $repository
     */
    public function statistiques(ReclamationRepository $repository): Response
    {

        $nbs = $repository->getNB();
        $data = [['Date', 'Reclamation']];
        foreach($nbs as $nb)
        {
            $data[] = array($nb['date'], $nb['vid']);
        }
        $bar = new barchart();
        $bar->getData()->setArrayToDataTable(
            $data
        );

        $bar->getOptions()->getTitleTextStyle()->setColor('#07600');
        $bar->getOptions()->getTitleTextStyle()->setFontSize(50);
        return $this->render('reclamation/statistique.html.twig', array('barchart' => $bar,'nbs' => $nbs));

    }
    /**
     * @param ReclamationRepository $repository
     * @Route("/listmob", name="listmob")
     */
    public function listmob(ReclamationRepository $repository,Request $request,NormalizerInterface $normalizer,SerializerInterface $serializer)
    {
        $reclamation = $repository->findAll();
        $JsonContent = $normalizer ->normalize($reclamation,'json',['groups'=>'post:read']);

        return new Response(json_encode($JsonContent));


    }

    /**

     * @Route("/addmob", name="addmob")
     */
    public function addmob(ReclamationRepository $repository,NormalizerInterface $serializer,Request $request,EntityManagerInterface $em)
    {
        $rec =new Reclamation();
        $date= new \DateTime('now');
        $rec->setDatee($date);
        $rec->setRate($request->get('rate'));
        $rec->setDescription($request->get('description'));
       // $rec->setAbonne($request->get('abonne'));
        $rec->setField($request->get('field'));
        $iduser = $request->query->get("abonne");
        $a=$this->getDoctrine()->getManager()->getRepository(Abonne::class)->find($iduser);
        $rec->setAbonne($a);
        $em->persist($rec);
        $em->flush();// hello aandi remarque aalh mtaamlhech f variable wil retour taaha tkhdho thotlo l id alkhtr bch yrjaalik mch ken id f hedhy
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object;
        });
        $serializer = new Serializer([$normalizer], [$encoder]);
        $formatted = $serializer->normalize($rec);
        return new JsonResponse($formatted);
    }

    /*
     /**
      * @Route("/listab, name="listab")
      */
    /* public function listab(AbonneRepository $repo)
     {
         $ab = $repo->findAll();
         $serializer = new Serializer([new DateTimeNormalizer(), new ObjectNormalizer()]);
         $data = $serializer->normalize($ab,null,array('attributes'=>array(
             id,prenom
         )));
         return new JsonResponse($data);

     }*/
    /**
     * @Route("/suppmob/{idrec}", name="suppmob")
     */
    public function suppmob($idrec)
    {
        $reclamation = $this->getDoctrine()->getRepository(reclamation::class)->find($idrec);
        $em = $this->getDoctrine()->getManager();
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute("listmob");

    }
    /**
     * @Route("/updatemob/{idrec}", name="updatemob")
     */
    public function update(Request $request,$idrec,NormalizerInterface $serializer){
        $rec=  $this->getDoctrine()->getManager()->getRepository(Reclamation::class)->find($idrec);
        $date= new \DateTime('now');
        $rec->setDatee($date);
        $rec->setRate($request->get('rate'));
        $rec->setDescription($request->get('description'));
        $rec->setField($request->get('field'));
        $data=$serializer->normalize($rec,'json',['groups'=>'post:read']);
        $em = $this->getDoctrine()->getManager();
        $em->flush();//mise a jour
        return new Response(json_encode($data));

    }
    public function ajouterReclamationAction(Request $request)
    {
        $reclamation = new Reclamation();
        $description = $request->query->get("description");
        $objet = $request->query->get("objet");
        $em = $this->getDoctrine()->getManager();
        $date = new \DateTime('now');
        $iduser = $request->query->get("user");

        $reclamation->setObjet($objet);
        $reclamation->setDescription($description);
        $reclamation->setDate($date);
        $reclamation->setEtat(0);

        $reclamation->setUser($this->getDoctrine()->getManager()->getRepository(User::class)->find($iduser));
        $em->persist($reclamation);
        $em->flush();
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object;
        });
        $serializer = new Serializer([$normalizer], [$encoder]);
        $formatted = $serializer->normalize($reclamation);
        return new JsonResponse($formatted);

    }
}