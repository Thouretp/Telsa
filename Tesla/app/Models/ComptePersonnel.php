<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComptePersonnel extends Model
{
    use HasFactory;
    protected $table = "comptepersonnel";
    protected $primaryKey = "numcompte";
    public $timestamps = false;
}