<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeSitue extends Model
{
    use HasFactory;
    protected $table = "se_situe";
    protected $primaryKey = "numclient";
    public $timestamps = false;
}