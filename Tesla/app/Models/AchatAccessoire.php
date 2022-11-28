<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchatAccessoire extends Model
{
    use HasFactory;
    protected $table = "achataccessoire";
    protected $primaryKey = "numachataccessoire";
    public $timestamps = false;
}