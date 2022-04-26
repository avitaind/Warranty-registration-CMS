<?php

namespace App\Mail;

use App\Models\Certificate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Warranty_extend;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class AppMailer
{

    public $mailer;
    public $fromAddress = 'bhavdeep.bharadwaj@ashplan.media';
    public $fromName = 'AVITA India';
    public $to;
    public $subject;
    public $view;
    public $data = [];

    public function __construct(Mailer $mailer)
    {
        //
        $this->mailer = $mailer;
    }

    public function sendWarrantyExtendInformation($user, Warranty_extend $warrantyExtend)
    {
        $this->to = ['bhavdeepbhardwaj555@gmail.com'];
        $this->subject = "Warranty Extend Info";
        $this->view = 'emails.warrantyExtend';
        $this->data = compact('user', 'warrantyExtend');
        return $this->deliver();
    }

    // Certificate Information Mail

    public function sendCertificateInformation($user, Certificate $certificate, $mail)
    {
        // $this->to = ['bhavdeepbhardwaj555@gmail.com'];
        $this->to = $mail;
        $this->subject = "Warranty Certificate";
        $this->view = 'emails.certificate';
        $this->data = compact('user', 'certificate');
        return $this->deliver();
    }

    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function ($message) {
            $message->from($this->fromAddress, $this->fromName)
                ->to($this->to)->subject($this->subject);
        });
    }

    // public function build()
    // {
    //     return $this->view('view.name');
    // }
}
