<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodeLivraison extends Model
{
    use HasFactory;
    protected $table = "periodelivraison";
    protected $primaryKey = "nombrejourlivraison";
    public $timestamps = false;
}