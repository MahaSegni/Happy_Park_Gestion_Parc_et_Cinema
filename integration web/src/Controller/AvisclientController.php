<?php

namespace App\Controller;
use mysqli;
use App\Entity\AvisClient;
use App\Form\AvisclientType;
use App\Repository\AvisClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AvisclientController extends AbstractController
{
    /**
     * @Route("/avisclient", name="avisclient")
     */
    public function index(): Response
    {
        return $this->render('avisclient/index.html.twig', [
            'controller_name' => 'AvisclientController',
        ]);
    }
    /**
     * @Route("/addRJSON/new", name="addRJSON")
     */
    public function addRJSON(Request $request,NormalizerInterface $normalizer){
        //$content=$request->getContent();
        $em = $this->getDoctrine()->getManager();
        $film= new AvisClient();
        $film->setDescR($request->get('descR'));
        $film->setRating($request->get('rating'));
        $em->persist($film);
        $em->flush();
        $data=$normalizer->normalize($film,'json',['groups'=>'post:read']);

        return new Response(json_encode($data));
    }
    /**
     * @Route("/AvisAdd", name="AvisAdd")
     */
    public function AvisAdd(Request $request){
        $avis= new AvisClient();
        $form = $this->createForm(AvisclientType::class,$avis);
        $form->handleRequest($request);
        $description = $form->get('descR')->getData();
        $abonne = $form->get('idRclient')->getData();


        if ($form->isSubmitted()){

            $servername = "localhost";//Server Name
            $username = "root";//Server User Name
            $password = "";//Server Password
            $dbname = "happy";//Database Name

//Create DB Connection
            $conn = mysqli_connect($servername,$username,$password,$dbname);

            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $rating = $_POST["rating"];

                $sql = "INSERT INTO avis_client (id,rating,desc_r) VALUES ('$abonne','$rating','$description')";

                if (mysqli_query($conn, $sql))
                {
                    echo "New Rate added successfully";

                }
                else
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                mysqli_close($conn);
            }


            return $this->redirectToRoute("AvisAdd");
        }
        return $this->render("avisclient/addRating.html.twig",array("form"=>$form->createView()));
    }
    /**
     * @Route("/afficherRa", name="afficherRa")
     */
    public function afficherRa( )
    {
        $servername = "localhost";
        $username = "root"; $password = "";
        $dbname = "happy";
        $conn = new mysqli($servername,$username,$password,$dbname) or die ("unable to connect");
        $sql = "SELECT * FROM avis_client";
        $result=mysqli_query($conn,$sql) or die("bad query");


        return $this->render('avisclient/afficherRa.html.twig',array('list'=>$result));
    }


}
