<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaracteristiqueAccessoire extends Model
{
    use HasFactory;
    protected $table = "CaracteristiqueAccessoire";
    protected $primaryKey = "numcaracteristiqueaccessoire";
    public $timestamps = false;
}
