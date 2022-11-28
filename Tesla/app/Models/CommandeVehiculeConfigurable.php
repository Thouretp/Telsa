<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodePromo extends Model
{
    use CommandeVehiculeConfigurable;
    protected $table = "commandevehiculeconfigurable";
    protected $primaryKey = "numcommandevehiculeconfigurable";
    public $timestamps = false;
}