<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annule extends Model
{
    use HasFactory;
    protected $table = "annule";
    protected $primaryKey = "numannulation";
    public $timestamps = false;
}
