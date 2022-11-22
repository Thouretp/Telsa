<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaiementApplePay extends Model
{
    use HasFactory;
    protected $table = "paiementapplepay";
    protected $primaryKey = "nummethodepaiement";
    public $timestamps = false;
}