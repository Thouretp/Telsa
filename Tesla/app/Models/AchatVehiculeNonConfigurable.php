<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchatVehiculeNonConfigurable extends Model
{
    use HasFactory;
    protected $table = "achat";
    protected $primaryKey = "numachatnonconfigurable";
    public $timestamps = false;
}
