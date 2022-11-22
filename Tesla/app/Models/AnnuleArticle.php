<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnuleArticle extends Model
{
    use HasFactory;
    protected $table = "annulearticle";
    protected $primaryKey = "numannulation";
    public $timestamps = false;
}