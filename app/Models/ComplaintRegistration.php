<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticketID',
        'ticketOld',
        'name',
        'email',
        'phone',
        'productSerialNo',
        'productPartNo',
        'purchaseDate',
        'warrantyCheck',
        'channelPurchase',
        'city',
        'state',
        'pinCode',
        'address',
        'priority',
        'issue',
        'purchaseInvoice',
        'status',
        'countries',
    ];
}
