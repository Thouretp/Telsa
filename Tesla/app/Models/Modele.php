<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    use HasFactory;
    protected $table = "modele";
    protected $primaryKey = "nummodel";
    public $timestamps = false;
}
