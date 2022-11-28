<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Essaye extends Model
{
    use HasFactory;
    protected $table = "essaye";
    protected $primaryKey = "numclient";
    public $timestamps = false;
}