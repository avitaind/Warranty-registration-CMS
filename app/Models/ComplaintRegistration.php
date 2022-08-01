<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticketID',
        'name',
        'email',
        'phone',
        'productSerialNo',
        'productPartNo',
        'purchaseDate',
        'warrantyCheck',
        'chanalPurchase',
        'city',
        'state',
        'pinCode',
        'issue',
        'purchaseInvoice',
        'status'
    ];
}
