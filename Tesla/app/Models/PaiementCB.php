<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaiementCB extends Model
{
    use HasFactory;
    protected $table = "paiementcb";
    protected $primaryKey = "nummethodepaiement";
    public $timestamps = false;
}