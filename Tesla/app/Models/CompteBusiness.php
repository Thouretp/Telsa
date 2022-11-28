<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompteBusiness extends Model
{
    use HasFactory;
    protected $table = "comptebusiness";
    protected $primaryKey = "numcompte";
    public $timestamps = false;
}
