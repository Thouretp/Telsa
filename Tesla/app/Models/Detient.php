<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detient extends Model
{
    use HasFactory;
    protected $table = "detient";
    protected $primaryKey = "numoption";
    public $timestamps = false;
}
