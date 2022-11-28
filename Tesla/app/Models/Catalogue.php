<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    use HasFactory;
    protected $table = "catalogue";
    protected $primaryKey = "numcategoriea";
    public $timestamps = false;
}
