<?php

namespace App\Mail;

use App\Models\Certificate;
use App\Models\ComplaintRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Warranty_extend;
use App\Models\Warranty_registration;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class AppMailer
{

    public $mailer;
    public $fromAddress = 'bhavdeep.bharadwaj@ashplan.media';
    // public $fromAddress = 'noreply@novita-india.com';
    public $fromName = 'NOVITA India';
    public $to;
    public $subject;
    public $view;
    public $data = [];

    public function __construct(Mailer $mailer)
    {
        //
        $this->mailer = $mailer;
    }

    // Warranty Extend Information

    public function sendWarrantyExtendInformation($user, Warranty_extend $warrantyExtend)
    {
        $this->to =  $warrantyExtend->user_email;
        $this->subject = "NOVITA | Product | Warranty | Extend | Info";
        $this->view = 'emails.warrantyExtend';
        $this->data = compact('user', 'warrantyExtend');
        return $this->deliver();
    }

    // Warranty Registration Information

    public function sendWarrantyRegistrationInformation($user, Warranty_registration $WarrantyRegistration)
    {
        $this->to =  $WarrantyRegistration->user_email;
        $this->subject = "NOVITA | Product | Registration | Info";
        $this->view = 'emails.WarrantyRegistration';
        $this->data = compact('user', 'WarrantyRegistration');
        return $this->deliver();
    }

    // Warranty Registration Information

    public function sendcomplaintRegistrationInformation($user, ComplaintRegistration $complaintRegistration)
    {
        $this->to =  $complaintRegistration->email;
        $this->subject = "NOVITA | Complaint | Registration | Info";
        $this->view = 'emails.complaintRegistration';
        $this->data = compact('user', 'complaintRegistration');
        return $this->deliver();
    }

    // Complaint Registration Information Solved

    public function sendcomplaintRegistrationInformationSolved(ComplaintRegistration $complaintRegistration)
    {
        $this->to =  $complaintRegistration->email;
        $this->subject = "NOVITA | Complaint | Registration | Resolved";
        $this->view = 'emails.complaintRegistrationSolved';
        $this->data = compact('complaintRegistration');
        return $this->deliver();
    }

    // Complaint Registration Information Denied

    public function sendcomplaintRegistrationInformationDenied(ComplaintRegistration $complaintRegistration)
    {
        $this->to =  $complaintRegistration->email;
        $this->subject = "NOVITA | Complaint | Registration | Rejected";
        $this->view = 'emails.complaintRegistrationDenied';
        $this->data = compact('complaintRegistration');
        return $this->deliver();
    }

    // Certificate Information Mail

    public function sendCertificateInformation($user, Certificate $certificate, $mail)
    {
        // $this->to = ['bhavdeepbhardwaj555@gmail.com'];
        $this->to = $mail;
        $this->subject = "NOVITA | Product | Warranty | Certificate";
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
