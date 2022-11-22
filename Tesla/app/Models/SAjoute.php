<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SAjoute extends Model
{
    use HasFactory;
    protected $table = "sajoute";
    protected $primaryKey = "numpanier";
    public $timestamps = false;
}