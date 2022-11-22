<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class A extends Model
{
    use HasFactory;
    protected $table = "a";
    protected $primaryKey = "numcompte";
    public $timestamps = false;
}