<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstCatalogue extends Model
{
    use HasFactory;
    protected $table = "est_catalogue";
    protected $primaryKey = "numcategoriea";
    public $timestamps = false;
}
