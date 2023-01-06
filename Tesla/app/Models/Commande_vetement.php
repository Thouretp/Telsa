<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande_vetement extends Model
{
    use HasFactory;
    protected $table = "commande_vetement";
    protected $primaryKey = "numcommandevetement";
    public $timestamps = false;
}
