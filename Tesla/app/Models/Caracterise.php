<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracterise extends Model
{
    use HasFactory;
    protected $table = "caracterise";
    protected $primaryKey = "numcaracteristiqueaccessoir";
    public $timestamps = false;
}
