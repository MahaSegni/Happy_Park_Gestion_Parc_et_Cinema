<?php


namespace App\Service;


use App\Entity\User;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class EmailService
{
    private $mailer;

    /**
     * EmailGenerator constructor.
     * @param $mailer
     */
    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }



    public function sendEmail($user, $subject)
    {
        $messages = (new \Swift_Message('test'))
            ->setFrom('testagence6@gmail')
            ->setTo($user)
            ->setBody($subject)
            ->setContentType('text/html');


        return $this->mailer->send($messages);
    }

    public function sendEmailTemplate($subject, $email, $body)
    {
        $messages = (new \Swift_Message($subject))
            ->setFrom('testagence6@gmail')
            ->setTo($email)
            ->setBody($body);


        return $this->mailer->send($messages);
    }
}
