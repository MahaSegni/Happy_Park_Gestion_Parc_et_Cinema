<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

class DefaultController extends AbstractController
{
    /**
     * @Route("default/", name="default")
     */
    public function index(): Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        $dompdf = new Dompdf($pdfOptions);

        return $this->render('myPdf.html.twig', ['title' => "Welcome to our PDF Test",]);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        // In this case, we want to write the file in the public directory
        $publicDirectory = $this->get('kernel')->getProjectDir() . '/public';
        // e.g /var/www/project/public/mypdf.pdf
        $pdfFilepath =  $publicDirectory . '/mypdf.pdf';
        file_put_contents($pdfFilepath, $output);
        return new Response("The PDF file has been succesfully generated !");

    }
}
