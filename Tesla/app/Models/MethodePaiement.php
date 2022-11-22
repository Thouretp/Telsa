<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MethodePaiement extends Model
{
    use HasFactory;
    protected $table = "methodepaiement";
    protected $primaryKey = "nummethodepaiement";
    public $timestamps = false;
}