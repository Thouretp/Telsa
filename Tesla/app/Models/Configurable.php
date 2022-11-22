<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configurable extends Model
{
    use HasFactory;
    protected $table = "configurable";
    protected $primaryKey = "numvehicule";
    public $timestamps = false;
}
