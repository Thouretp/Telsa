<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstDefinie extends Model
{
    use HasFactory;
    protected $table = "est_definie";
    protected $primaryKey = "numoptionachat";
    public $timestamps = false;
}