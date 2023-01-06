<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contient_des extends Model
{
    use HasFactory;
    protected $table = "contient_des";
    protected $primaryKey = "numcommande";
    public $timestamps = false;
}
